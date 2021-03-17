<template lang="html">
  <div class="container">
    <div class="row mt-5">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Employee Records</h3>
            <div class="card-tools">


              <button class="btn btn-success" @click="ifCreateButton"><i class="fas fa-user-plus fa-fw"></i></button>


            </div> <!-- card-tools -->

          </div> <!-- card-header -->

          <div class="card-body table-responsive p-0">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="alias in seenData.data" :key="alias.id">
                  <td>{{ alias.id }}</td>
                  <td>{{ alias.name }}</td>
                  <td>{{ alias.email }}</td>
                  <td> {{ $filters.globalVueFilterHelperMomentjs(alias.created_at) }} </td>

                  <td>

                    <a href="#">
                      <i class="fa fa-file-pdf-o"></i>
                    </a>
                    /
                    <a href="#" @click="ifEditButton(alias)">
                      <i class="fa fa-edit blue"></i>
                    </a>
                    /
                    <a href="#" @click="deleteUser(alias.id)">
                      <i class="fa fa-trash red"></i>
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>

          </div> <!-- card-body table-responsive p-0 -->

          <div class="card-footer">
          </div>


        </div> <!-- card -->








        <!-- Twitter Boostrap Modal -->
        <div class="modal fade" id="v5-0-0-beta2-Modal" tabindex="-1" role="dialog" aria-labelledby="bs5-ariaLabelledById" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" v-show="!editMode" id="bs5-ariaLabelledById">Create</h5>
                <h5 class="modal-title" v-show="editMode" id="bs5-ariaLabelledById">Update User's Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <form @submit.prevent="editMode ? putPayloads() : postPayloads()"
              action='/api/user' enctype="multipart/form-data" method="post"
              >
                <div class="modal-body">
                  <div class="form-group">
                    <label for="idAttr--name" class="col-form-label">Name:</label>
                    <input id="idAttr--name" v-model="userForm.name" type="text" name="name" placeholder="Name" class="form-control"
                    :class="{ 'is-invalid': userForm.errors.has('name') }"
                  />
                    <has-error :form="userForm" field="name"></has-error>
                  </div>

                  <div class="form-group">
                    <input v-model="userForm.email" type="email" name="email" placeholder="Email Address" class="form-control" :class="{ 'is-invalid': userForm.errors.has('email') }">
                    <has-error :form="userForm" field="email"></has-error>
                  </div>
                  <div class="form-group">
                    <textarea v-model="userForm.bio" name="bio" id="bio" placeholder="Short bio for user (Optional)" class="form-control" :class="{ 'is-invalid': userForm.errors.has('bio') }"></textarea>
                    <has-error :form="userForm" field="bio"></has-error>
                  </div>


                  <div class="form-group">
                    <select name="type" v-model="userForm.type" id="type" class="form-control" :class="{ 'is-invalid': userForm.errors.has('type') }">
                      <option value="">Select User Role</option>
                      <option value="admin">Admin</option>
                      <option value="user">Standard User</option>
                      <option value="author">Author</option>
                    </select>
                    <has-error :form="userForm" field="type"></has-error>

                  </div>


                  <div class="form-group">
                    <input v-model="userForm.password" type="password" name="password" id="password" class="form-control" :class="{ 'is-invalid': userForm.errors.has('password') }" placeholder="password">
                    <has-error :form="userForm" field="password"></has-error>
                  </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button v-show="editMode" type="submit" class="btn btn-success">Update</button>
                    <button v-show="!editMode" type="submit" class="btn btn-primary">Create</button>
                </div>
              </form> <!-- End of Form -->



            </div> <!-- End of Modal Content -->


          </div> <!-- End of modal-dialog modal-dialog-centered -->
        </div> <!-- BS Modal -->












      </div> <!-- col-md-12 -->

    </div> <!-- row mt-5 -->


  </div> <!-- container -->
</template>

<script scoped>
export default {

  components: {

  },

  props: ['title'],


  data() {
    return {
      editMode: false,
      seenData: {},

      userForm: new Spanish({
        id: '',
        name: '',
        email: '',
        password: '',
        type: '',
        bio: '',
        photo: '',
      })
    }
  },


  methods: {


    loadUserModel(){
      axios.get("api/user").then(({ data }) => (this.seenData = data))
    },



    putPayloads(id){

      this.$Progress.start()

      Swal.fire({
        title: 'Update User Data Information?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Update NOW!'
      }).then( (result) => {

        console.log('down result output');
        console.log(result)

        if(result.value){


          this.userForm.put('api/user/'+this.userForm.id).then( () => {
            $('#v5-0-0-beta2-Modal').modal('hide')
            Swal.fire(
              'Good job!',
              'User Information Has Been Updated',
              'success'
            )
            CustomEventHandler.emit('After Post Method', this.loadUserModel());
            this.$Progress.finish()


          })
          .catch( () => {

            Swal.fire("Failed!", "There was something wrong.", "warning")
            this.$Progress.fail()

          })

        }

      })



      .catch( () => {})


    },











    postPayloads(){
      this.$Progress.start();
      this.userForm.post('api/user')
      .then( () => {

        /******************************************https://github.com/scottcorgan/tiny-emitter****************/
        CustomEventHandler.emit('After Post Method', this.loadUserModel());
        /******************************************https://github.com/scottcorgan/tiny-emitter****************/

        $('#v5-0-0-beta2-Modal').modal('hide')

        // https://sweetalert2.github.io/ Functionality Library
        Toast.fire({
          icon: 'success',
          title: 'User created successfully'
        })
        // https://sweetalert2.github.io/ Functionality Library

        this.$Progress.finish();

      })
      .catch( () => {} )

    },
















    deleteUser(id){
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        //send request to the server
        if(result.value){
          this.userForm.delete('api/user/'+id).then(() => {
            Swal.fire(
              'Deleted!',
              'Your file has been deleted.',
              'success'
            )
            CustomEventHandler.emit('After Post Method', this.loadUserModel());
          }).catch(() => {
            Swal.fire("Failed!", "There was something wrong.", "warning")
          })
        }
      })
    },






/*******************Conditional Button Clicks*******************/
    ifEditButton(user) {
      console.log(user);
      this.editMode = true
      this.userForm.reset()
      this.userForm.fill(user);
      $('#v5-0-0-beta2-Modal').modal('show')
    },


    ifCreateButton () {
      this.editMode = false
      this.userForm.reset()
      $('#v5-0-0-beta2-Modal').modal('show')
    }
/*******************Conditional Button Clicks*******************/

  },// End of Methods



  computed() {

  },

  created() {
    this.loadUserModel()
    CustomEventHandler.on('After Post Method', function (nakaCallNa) {
    });/******************************************https://github.com/scottcorgan/tiny-emitter****************/

    CustomEventHandler.on('Search Implementation', (goUpTheScopeChainToFindClosure) => {
      let theThisKW = goUpTheScopeChainToFindClosure()
      let query = theThisKW.vmAttr__InpTS_IndexBladeSearch
      //let query = this.$parent.searchVue

      axios.get('api/search-users-on-admin-area?anyVar=' + query)
      .then( (data) => {this.seenData = data.data} )
      .catch( () => {})

    })
  },

  mounted() {

  },
}
</script>
<style lang="css" scoped>
</style>
