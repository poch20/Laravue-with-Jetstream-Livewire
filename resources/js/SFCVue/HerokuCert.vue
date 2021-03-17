
<style media="screen">
  .widget-user-header {
    background-position: center center;
    background-size: cover;
    height: 250px;
  }
</style>

<template>
  <div class="container">
    <div class="row">
      <div class="col-md-12 mt-3">
        <div class="card card-widget widget-user">
          <!--Add the bg color to the header using any of the bg-* classes-->



          <div class="card-footer">
            <div class="row">
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
        </div>
      </div>


      <!-- tab -->

      <div class="col-md-12">
        <div class="card">



          <div class="card-header p-2">

            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="tablist--post-res"
                data-bs-toggle="tab" data-bs-target="#post-res"
                type="button" role="tab" aria-controls="post-res"
                aria-selected="true">Resume</button>

              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="tablist--post-cert"
                data-bs-toggle="tab" data-bs-target="#post-cert"
                type="button" role="tab" aria-controls="post-cert"
                aria-selected="false">Certificate</button>
              </li>
            </ul>

          </div><!--/.card-header p-2 -->



          <div class="card-body">





            <div class="tab-content" id="myTabContent">









              <div class="tab-pane fade show active" id="post-res" role="tabpanel" aria-labelledby="tablist--post-res">




                <h3 class="text-center">Resumes</h3>
                <form enctype="multipart/form-data" method="POST" class="form-horizontal"
                @submit.prevent="fsp__pr(AuthUserId)"
                >

                  <div class="form-group">
                    <input type="text" placeholder="Resume Description" class="form-control"
                    name="nameAttr__InpTPostRes"
                    v-model="vmAttr__InpTPostRes"
                    >

                    <input type="text" style="display:none" class="form-control"
                    name="nameAttr__HInpTPostRes"
                    v-model="vmAttr__HInpTPostRes">

                    <input type="text" style="display:none" class="form-control"
                    name="nameAttr__HInpTPostResProps"
                    v-model="vmAttr__HInpTPostResProps">
                  </div>



                  <div class="form-group">
                    <label for="idAttr--InpTFPostRes"  class="col-sm-2 control-label">
                      <i class="fas fa-file movie-o"></i> Create Resume
                    </label>



                    <div class="col-sm-12">
                      <input
                      type="file"

                      id="idAttr--InpTFPostRes"
                      name="nameAttr__InpTFPostRes"
                      @change="eventVChangeAttr__InpTFPostRes"
                      ref="refVAttr__InpTFPostRes"
                      >
                    </div>


                  </div> <!-- /.form-group -->




                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-12">
                      <!-- <button @click.prevent="addInfo" type="submit" class="btn btn-success">Submit</button> -->
                      <button type="submit" class="btn btn-primary">Submit Resume</button>
                    </div>
                  </div>

                </form>





              </div> <!-- tab-pane fade=post-cert -->






              <div class="tab-pane fade" id="post-cert" role="tabpanel" aria-labelledby="tablist--post-cert">







                <h3 class="text-center">Certificate Form Submissions</h3>
                <form enctype="multipart/form-data" method="POST" class="form-horizontal"
                @submit.prevent="fsp__pc"
                >
                  <div class="form-group">
                    <input type="text" placeholder="Certificate Description" class="form-control"
                    name="nameAttr__InpTPostCert"


                    >

                    <input type="text" style="display:none" class="form-control"
                    name="nameAttr__InpTHiddenPostRes"


                    >
                  </div> <!-- /.form-group -->

                  <div class="form-group">
                    <label for="idAttrInpFCert"  class="col-sm-2 control-label">
                      <i class="fas fa-file movie-o"></i> Create Certificate
                    </label>

                    <div class="col-sm-12">
                      <input
                      type="file"
                      id=""
                      name=""
                      >
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-12">
                      <!-- <button @click.prevent="addInfo" type="submit" class="btn btn-success">Submit</button> -->
                      <button type="submit" class="btn btn-primary">Submit Certificate</button>

                    </div>
                  </div>


                </form>





              </div> <!-- tab-pane fade=post-res -->










            </div> <!-- tab-content -->













          </div> <!-- /.card-body -->
        </div> <!-- /.card -->
        <!-- /.nav-tabs-custom -->
      </div> <!-- /.col-md-12 -->
  </div>
</template>


<script>
export default {


  props: ['AuthUserId'],




  data(){
    return {
      vmAttr__InpTPostRes: "",
      vmAttr__HInpTPostRes: "",
      vmAttr__HInpTPostResProps: "",

      /*The Vue Ref Attr Temporal Storage*/
      vueRef: "",

      /*Form Appending Functionality Temporal Storage*/
      formForAppendingData: {}

    }
  },








  methods: {

    eventVChangeAttr__InpTFPostRes(e){

      let chosenFile = e.target.files[0]
      //let chosenFile = this.$refs.refVAttr__InpTFPostRes.files[0];
      if(chosenFile['size'] < 5501775){
        this.vueRef = this.$refs.refVAttr__InpTFPostRes.files[0]; //meta data
        console.log(chosenFile);
        console.log(this.vueRef);
        function projFileName(){
          let fullPath = document.getElementById('idAttr--InpTFPostRes').value;
          if (fullPath) {
              var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
              var filename = fullPath.substring(startIndex);
              if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                  filename = filename.substring(1);
              }
              return filename
          }
        }
        let gungGong = projFileName()
        this.vmAttr__HInpTPostRes = gungGong


      }

      else {
        Swal.fire({
          title: "You are uploading more than 5 MB's",
          text: 'Oops...',
          icon: 'error',
          confirmButtonText: 'Close'
        })
      }

    },

    resetResumeForm(){
      this.vmAttr__InpTPostRes = ''
      this.vmAttr__HInpTPostRes = ''
      this.vmAttr__HInpTPostResProps = ''
      this.vmAttr__formForAppendingData = {}
      this.vmAttr__vueRef = ''
    },

    fsp__pr(AuthUserId){
      console.log(AuthUserId);
      this.vmAttr__HInpTPostResProps = AuthUserId
      this.$Progress.start()
      let mime = this.formForAppendingData
      mime = new FormData()

      mime.append('nameAttr__InpTPostRes', this.vmAttr__InpTPostRes)
      mime.append('nameAttr__HInpTPostRes', this.vmAttr__HInpTPostRes)
      mime.append('nameAttr__HInpTPostResProps', this.vmAttr__HInpTPostResProps)
      mime.append('nameAttr__InpTFPostRes', this.vueRef)

      axios.post('api/keyResumeDataContr', mime, {headers: {'Content-Type': 'multipart/form-data'}})
      .then(response => {
        this.resetResumeForm()
        Swal.fire(
          'Good job!',
          'Resume Has Been Submitted',
          'success'
        ).then((result) => {

        })
        this.$Progress.finish()

      })


    },

    fsp__pc(){

    }


  } //End Methods Object








}
</script>
