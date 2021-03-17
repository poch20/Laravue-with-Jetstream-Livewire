<template>
  <div class="container">
    <div class="row mt-5">
      <div class="col-12">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Stored Resumes</h3>

            </div> <!-- card-header -->
            <div class="card-header"></div>

            <div class="card-body table-responsive p-0">

              <form enctype="multipart/form-data" method="POST" class="form-horizontal"
              @submit.prevent="fsp__formTableData">


                <table class="table table-bordered">
                  <thead>
                    <div class="row">


                      <div class="col-sm-8">

                        <div class="form-group">

                          <!-- START <select bulkOptions SELECT OPTIONS FORM  -->
                          <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"
                          id="idAttr--SelectOpts"
                          name="nameAttr__SelectOpts"
                          @change="eventVChangeAttr__SelectOpts"
                          v-model="vmAttr__SelectOpts"
                          >
                            <option selected>Open this select menu</option>
                            <option
                            v-for="alias in boundValueIn__SelectOpts"
                            value="Delete"
                            :value="{ id: alias.id, text: alias.name }"
                            >
                              {{ alias.name }}
                            </option>
                          </select>
                          <!-- E <select bulkOptions SELECT  -->



                          <!-- START <input SUBMIT for Bulk Options  -->
                          <input type="submit" class="btn btn-danger"
                          name="" value="Apply">
                          <!-- END <input SUBMIT -->

                        </div> <!-- form.table.col-sm-8.form-group SELECT OPTS-->





                      </div> <!-- form.table.col-sm-8 FOR  -->
                      <div class="col-sm-8"></div>



                    </div> <!-- form.table.row -->
                    <div class="row"></div>


                    <tr>
                      <th scope="col">
                        <input type="checkbox"
                        id="idAttr--InpTColCheckbox"
                        name="nameAttr__InpTColCheckbox"
                        @click="eventVClick__InpTColCheckbox"
                        v-model="vmAttr__InpuTColCheckbox"
                        >
                        <span></span>
                      </th>
                      <th scope="col">Description</th>
                      <th scope="col">Resume</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>



                  <tbody>
                    <tr v-for="alias in ResumeDataModel.data" :key="alias.id">
                      <td>
                        <input type="checkbox"
                        class=""
                        :value="alias.id"
                        name="nameAttr__InpTChildrenColCheckbox[]"
                        v-model="vmAttr__InpTChildrenColCheckbox"
                        ref="refVAttr__InpTChildrenColCheckbox"

                        @change="eventVChangeAttr__InpTChildrenColCheckbox($event, alias.id)"





                        >
                      </td>
                      <td>{{ alias.description }}</td>
                      <td>{{ alias.resume_file }}</td>
                      <td>
                      </td>
                    </tr>
                  </tbody>




                </table>

              </form> <!-- form-table-data-to-received-all-data -->




            </div> <!-- card-body table-responsive p-0 -->
            <div class="card-body table-responsive p-0"></div>






          </div> <!-- card -->
          <div class="card"></div>


        </div> <!-- col-md-12 -->
        <div class="col-md-12"></div>

      </div> <!-- col-12 -->

    </div> <!-- row mt-5 -->
    <div class="row">
    </div>
  </div>
</template>


<script>
export default {

  data(){
    return {
      /*JSON DATA*/
      apiRouteGet: [],
      /*JSON DATA*/

      /*LOAD|CALL|FETCH|GET|RETRIEVED APIRequest Db Data Values*/
      ResumeDataModel: {},
      /*LOAD|CALL|FETCH|GET|RETRIEVED APIRequest Db Data Values*/







      /*Select and Option Tag JS Manipulations*/
      /*DOM*/
      vmAttr__SelectOpts:'',
      boundValueIn__SelectOpts: [
        {id: '', name: 'Delete'},
      ],

      IndexValue__SelectOpts:null,
      /*Select and Option Tag JS Manipulations*/





      /*Input Type of Checkbox(Bulk Options)----PARENT*/
      /*DOM*/
      vmAttr__InpuTColCheckbox: false,
      storeDataIn____InpuTColCheckbox: [],
      /*Input Type of Checkbox(Bulk Options)----PARENT*/






      /*Input Type of Checkbox(Bulk Options)----CHILD*/
      /*DOM*/
      vmAttr__InpTChildrenColCheckbox: [],

      /*JS LOGIC*/
      isChildInstancesChecked: false,
      vueBoundStyleAttr: {
        id: null,
        value: null,
        style: null,
        wrapperStyle: null,
      },
      vueData__storeVMofInpTCCC: '',
      NotAStringButANum:null,
      /*Input Type of Checkbox(Bulk Options)----CHILD*/





    } // END of return object
  }, // END of data method

  computed: {

  }, // END of computed property

  methods: {
    apiRequestPHPCall(){
      axios.get("api/keyResumeDataContr").then( ({data}) => (this.ResumeDataModel = data))


    },





    eventVChangeAttr__SelectOpts(e){
      let key = e.target.value,
          value = e.target.textContent;

      if(e.target.options.selectedIndex > -1) {
        //Copyright (c) 2018 Copyright Holder All Rights Reserved.
        let textOrStringVal = e.target.options[e.target.options.selectedIndex].text;
        this.IndexValue__SelectOpts = e.target.options.selectedIndex
        this.vmAttr__SelectOpts = textOrStringVal

      }


    },



    /*Parent or Master Checkbox*/
    eventVClick__InpTColCheckbox(){
      this.isChildInstancesChecked = true
      if(this.isChildInstancesChecked){
        for (var key in this.apiRouteGet[key]) {
          this.storeDataIn____InpuTColCheckbox.push(this.apiRouteGet[key]);
        }
      }
    },
    /*Parent or Master Checkbox*/








    getResumeAPIResponseData(id){
      // declare a response interceptor
      axios.interceptors.response.use((response) => {
        // do something with the response data
        console.log('Response was received');

        return response;
      }, error => {
        // handle the response error
        return Promise.reject(error);
      });


      // sent a GET request
      axios.get(`api/get-resume-data-returns/${id}`)
           .then((response)=>{
             console.log("id = " + id);
             console.log("-------------------------");
             this.apiRouteGet = response.data
             console.log("This is just the User Relation of Who Submitted " + this.apiRouteGet)
           }).catch(() => {
             CustomEventHandler.emit('If the last checkbox was untick', this.apiRequestPHPCall());
           })
    },










    eventVChangeAttr__InpTChildrenColCheckbox(e, id){
      this.isChildInstancesChecked = true
      if(this.isChildInstancesChecked){
        let getValueAttribute = e.target.getAttribute('value');
        this.boundValueIn__SelectOpts[0].id = getValueAttribute
        console.log(this.boundValueIn__SelectOpts[0]);
        this.vueData__storeVMofInpTCCC = this.vmAttr__InpTChildrenColCheckbox
        this.vueData__storeVMofInpTCCC.forEach(element => console.log(id));
        let nameVal = this.vmAttr__SelectOpts
        this.NotAStringButANum = id
      }
      this.getResumeAPIResponseData(this.vueData__storeVMofInpTCCC)
    },







    fsp__formTableData(){
      let myIdNum = this.NotAStringButANum
      this.$Progress.start()
      let wearsMeOff = new FormData()
      wearsMeOff.append('nameAttr__SelectOpts', this.vmAttr__SelectOpts)
      wearsMeOff.append('nameAttr__InpTChildrenColCheckbox', this.vueData__storeVMofInpTCCC)

      axios.post(`api/post-res-vue-del/${this.vmAttr__InpTChildrenColCheckbox}`,
        wearsMeOff, {headers: {'Content-Type': 'multipart/form-data'}} ).then(response => {


        // this.getUser()
        // this.vmVAttrInpuTagElemCheckBoxChildInstances = []
        // this.all_select == true ?
        // this.all_select = false : this.all_select = true;
        //this.resetForm()
        Swal.fire(
        ).then((result) => {
          Swal.fire(
            'Good job!',
            'File Has Been Deleted',
            'success'
          )

        })
        let self = this
        CustomEventHandler.emit('AfterDeleting', function(){
          self.apiRequestPHPCall()
          self.ResumeDataModel = {}
          self.apiRequestPHPCall()
        });
        this.$Progress.finish()
      }).catch(error => {
        Swal.fire("Failed!", "There was something wrong.", "warning")
      })

    },






    resetForm() {
      this.ResumeDataModel = {};
      this.checkAllChildBoxes = ''
      this.vueData__storeVMofInpTCCC = ''
      this.NotAStringButANum = null
      this.boundValueIn__SelectOpts = []
      this.vmAttr__InpTChildrenColCheckbox = ''
      this.vmAttr__SelectOpts = ''
    }




  }, // END of methods property

  created() {
    this.apiRequestPHPCall()
    CustomEventHandler.on('If the last checkbox was untick', function (nakaCallNa) {
    });/******************************************https://github.com/scottcorgan/tiny-emitter****************/

    CustomEventHandler.on('AfterDeleting', function (callback) {
      callback()
    })

  },
}
</script>

<style lang="css" scoped>
</style>
