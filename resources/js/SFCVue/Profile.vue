<template lang="html">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mt-3">
        <div class="card card-widget widget-user">

          <div class="widget-user-header text-white"
          :style="{ backgroundImage : urlImgPath }"
          >
            <h3 class="widget-user-username"></h3>

          </div>


          <div class="card-footer">
            <div class="row">


              <div class="col-sm-4 border-right">
                <div class="description-block">
                  <h5 class="description-header">3,200</h5>
                  <span class="description-text">SALES</span>
                </div>
              </div> <!-- /.col-sm-4 border-right -->

              <div class="col-sm-4 border-right">
                <div class="description-block">
                  <h5 class="description-header">13,000</h5>
                  <span class="description-text">FOLLOWERS</span>
                </div>
              </div> <!-- /.col-sm-4 border-right -->

              <div class="col-sm-4 border-right">
                <div class="description-block">
                  <h5 class="description-header">35</h5>
                  <span class="description-text">PRODUCTS</span>
                </div>
              </div> <!-- /.col-sm-4 -->

              <div class="col-sm-4"></div>




            </div> <!-- /.row -->
            <div class="row"></div>
          </div> <!-- /.card-footer -->
          <div class="card-footer"></div>
        </div> <!-- card card-widget widget-user -->
        <div class="card card-widget widget-user"></div>
      </div> <!-- col-md-12 mt-3 -->
      <div class="col-md-12 mt-3"></div>



      <!-- Nav tabs -->
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active"
          id="idAttr-Tab--EditProfile" data-bs-toggle="tab"
          data-bs-target="#idAttr-Content--EditProfile" type="button"
          role="tab" aria-controls="idAttr-Content--EditProfile" aria-selected="true">
            Settings
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link"
          id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
          type="button" role="tab" aria-controls="profile" aria-selected="false">
            Profile
          </button>
        </li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane active" id="idAttr-Content--EditProfile"
        role="tabpanel" aria-labelledby="idAttr-Tab--EditProfile">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="tab-content">
                  <!-- Activity Tab -->
                  <div class="tab-pane" id="activity">
                    <h3 class="text-center">Display User Activity</h3>
                  </div>

                  <!-- Setting Tab -->
                  <div class="tab-pane active show" id="settings">

                    <form class="form-horizontal">

                      <div class="form-group">

                        <label for="idAttr-InpTT--db-name" class="col-sm-2 control-label">
                          Names
                        </label>

                        <div class="col-sm-12">
                          <input type="text" id="idAttr-InpTT--db-name" class="form-control"
                          v-model="profileForm.name"
                          :class="{ 'is-invalid': profileForm.errors.has('name') }"
                          >
                        </div>

                      </div>

                      <div class="form-group">

                        <label for="idAttr-InpTT--db-email" class="col-sm-2 control-label">
                          Email
                        </label>

                        <div class="col-sm-12">
                          <input type="email" id="idAttr-InpTT--db-email" class="form-control"
                          v-model="profileForm.email"
                          :class="{ 'is-invalid': profileForm.errors.has('email') }"
                          >
                        </div>

                      </div>

                      <div class="form-group">

                        <label for="idAttr-InpTT--db-bio" class="col-sm-2 control-label">
                          Experience
                        </label>

                        <div class="col-sm-12">
                          <textarea class="form-control" id="idAttr-InpTT--db-bio"
                          v-model="profileForm.bio"
                          :class="{ 'is-invalid': profileForm.errors.has('bio') }"
                          >

                          </textarea>
                        </div>

                      </div>

                      <div class="form-group">

                        <label for="idAttr-InpTT--db-profile-pic"  class="col-sm-2 control-label">
                          Profile Photo
                        </label>

                        <div class="col-sm-12">
                          <input type="file" id="idAttr-InpTT--db-profile-pic" name="" class="form-input"
                          @change="eventVChangeAttr__InpTF_ChangeDP"
                          >
                        </div>

                      </div>

                      <div class="form-group">

                        <label for="idAttr-InpTT--db-password" class="col-sm-12 control-label">
                          Passport (leave empty if not changing)
                        </label>

                        <div class="col-sm-12">
                          <input type="password" class="form-control" id="idAttr-InpTT--db-password"
                          v-model="profileForm.password"
                          :class="{ 'is-invalid': profileForm.errors.has('password') }"
                          >
                        </div>

                      </div>

                      <div class="form-group">

                        <div class="col-sm-offset-2 col-sm-12">
                          <button type="submit" class="btn btn-success"
                          @click.prevent="eventVCliPrevAttr__ButtS__ButtSub"
                          >
                            Update
                          </button>
                        </div>

                      </div>

                    </form>



                  </div> <!-- /.tab-pane active show -->
                  <div class="tab-pane active show"></div>
                </div> <!-- /.tab-content -->
                <div class="tab-content"></div>
              </div> <!-- /.card-body -->
              <div class="card-body"></div>
            </div> <!-- /.card -->
            <div class="card"></div>
          </div> <!-- /.col-md-12 -->
          <div class="col-md-12"></div>
        </div>
        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">

        </div>
      </div>





    </div> <!-- row -->
    <div class="row"></div>
  </div> <!-- container -->
</template>

<script>
export default {
  props: {
    AuthUserId: {
      type: String
    }
  },

  data(){
    return {
      urlImgPath: "url('./storage/Artboard 1.png.png')",

      /*Template to Data Two-Way Model Data-Binding*/
      profileForm: new Spanish({
        id:'',
        name:'',
        email:'',
        password: '',
        type: '',
        bio: '',
        photo: ''
      })
      /*Template to Data Two-Way Model Data-Binding*/

    }
  },
  mounted(){},
  methods: {

  },
  created(){
    if(this.AuthUserId){
      let AuthUserSessionId = this.AuthUserId
      let string = this.AuthUserId

      let regExPatternBra = /{/ig
      let rmBracket = string.replace(regExPatternBra, 'forBracket')


      let regExPatternForSlash = /\//ig // matches / if(str.indexOf("/") > -1)
      let rmBackSlash = rmBracket.replace(regExPatternForSlash, 'kuma')


      let regExPatternQM = /\?/ig
      let rmQM = rmBackSlash.replace(regExPatternQM, 'QM')
      console.log(`rmBracket = ${rmBracket}`)
      console.log(`rmBackSlash = ${rmBackSlash}`)
      console.log(`rmQM = ${rmQM}`)

      /*Study and Experiment Session*/
      const regex = /ab/;
      const str = 'bbababb';
      const noMatchStr = 'c';
      console.log(regex.exec( str ))
      console.log(str.match( regex ))

      const globalRegex = /ab/g
      console.log(globalRegex.exec( str ))
      console.log(globalRegex.exec( str ))
      let resultant
      while ((resultant = globalRegex.exec(str)) !== null) { console.log(resultant); }
      //["ab", index: 4, input: "bbababb", groups: undefined]

      noMatchStr.match( globalRegex )
      console.log(str.replace( regex, 'X' )) //bbXabb
      console.log(str.replace( globalRegex, 'X' )) //bbXXb
      console.log(str.search( regex ))
      console.log(noMatchStr.search( regex ))
      console.log(str.split( regex ))
      console.log(noMatchStr.split( regex ))

      axios.get(`api/fill-user-profile-form/${rmQM}`).then(({ data }) => (this.profileForm.fill(data)))
    }

  }

}
</script>

<style lang="css" scoped>

.widget-user-header {
  background-position: center center;
  background-size: cover;
  height: 250px;
}

</style>
