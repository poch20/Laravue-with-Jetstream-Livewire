<template lang="html">
  <div class="container">
    <div class="row mt-5">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Employee Records</h3>
            <div class="card-tools">

              <button class="btn btn-success" @click="forCreateSharedReusableModalBoxVueMethod"><i class="fas fa-user-plus fa-fw"></i></button>


            </div> <!-- card-tools -->

          </div> <!-- card-header -->

          <div class="card-body table-responsive p-0">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Type</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td></td>
                </tr>
              </tbody>
            </table>

          </div> <!-- card-body table-responsive p-0 -->

          <div class="card-footer">
            1
          </div>


        </div> <!-- card -->








        <!-- Twitter Boostrap Modal -->
        <div class="modal fade" id="editUserOpenModalBoxContent" tabindex="-1" role="dialog" aria-labelledby="updateUserLabelIdTag" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="updateUserLabelIdTag">Create</h5>
                <h5 class="modal-title" id="updateUserLabelIdTag">Update User's Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <form @submit.prevent="createUser"
              action='/api/user' enctype="multipart/form-data" method="post"
              >
                <div class="modal-body">
                  <div class="form-group">
                    <input v-model="userForm.name" type="text" name="name" placeholder="Name" class="form-control"
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
                    <button type="submit" class="btn btn-success">Update</button>
                    <button type="submit" class="btn btn-primary">Create</button>
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
import Profile from './Profile.vue'
export default {

  components: {

  },


  data() {
    return {
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





    createUser(){
      this.userForm.post('api/user');
    },









    forCreateSharedReusableModalBoxVueMethod () {
      // this.editMode = false
      // this.userForm.reset()
      $('#editUserOpenModalBoxContent').modal('show')
    }
  },// End of Methods



  computed() {

  },

  created() {

  },

  mounted() {

  },
}
</script>
<style lang="css" scoped>
</style>
