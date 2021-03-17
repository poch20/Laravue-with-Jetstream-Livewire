
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
          <div class="widget-user-header text-white" style="background-image:url('./img/user-cover.jpg')">
            <h3 class="widget-user-username"></h3>
            <h5 class="widget-user-desc">Web Developer</h5>
          </div>
          <div class="widget-user-image">
            <img class="img-circle" alt="User Avatar">
          </div>

          <div class="card-footer">

            <div class="row">

              <div class="col-sm-4 border-right">
                <!-- <div class="description-block">
                  <h5 class="description-header">0</h5>
                  <span class="description-text">SALES</span>
                </div> -->
                <!-- /.description-block -->
              </div>

              <div class="col-sm-4 border-right">
                <!-- <div class="description-block">
                  <h5 class="description-header">2</h5>
                  <span class="description-text">FOLLOWERS</span>
                </div> -->
                <!-- /.description-block -->
              </div> <!-- /.col-sm-4 border-right -->

              <div class="col-sm-4">
                <!-- <div class="description-block">
                  <h5 class="description-header">0</h5>
                  <span class="description-text">PRODUCTS</span>
                </div> -->
                <!-- /.description-block -->
              </div> <!-- /.col-sm-4 -->

            </div> <!-- /.row -->



          </div> <!-- ./card-footer -->


        </div> <!-- ./card card-widget widget-user -->

      </div> <!-- ./col-md-12 mt-3 -->


      <!-- tab -->

      <div class="col-md-12">
        <div class="card">
          <div class="card-header p-2">
            <ul class="nav nav-pills">

              <li class="nav-item">
                <a class="nav-link" href="#activity" data-toggle="tab">Preview Your Invoice Data</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active show" href="#settings" data-toggle="tab">Settings</a>
              </li>
            </ul>

          </div><!--/.card-header -->
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
                    <label for="" class="col-sm-2 control-label">
                      Name
                    </label>

                    <div class="col-sm-12">
                      <input type="email" id="" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">
                      Email
                    </label>

                    <div class="col-sm-12">
                      <input type="email" id="" class="form-control" placeholder="Email">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputExperienceID" class="col-sm-2 control-label">
                      Biography
                    </label>

                    <div class="col-sm-12">
                      <textarea class="form-control" id="" placeholder="Hello"></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for=""  class="col-sm-2 control-label">
                      <i class="fas fa-file movie-o"></i> Profile Photo
                    </label>

                    <div class="col-sm-12">
                      <input type="file" id="" class="form-input">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-12 control-label">
                      Password (leave empty if not changing)
                    </label>

                    <div class="col-sm-12">
                      <input type="passpord" class="form-control" id="" placeholder="Password">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-12">
                      <button type="submit" class="btn btn-success">Update</button>
                    </div>
                  </div>


                </form>

              </div> <!-- /.tab-pane active show -->


            </div> <!-- /.tab content -->




          </div> <!-- /.card-body -->
        </div> <!-- ./card -->
        <!-- /.nav-tabs-custom -->

      </div>
      <!-- end tabs -->

    </div> <!-- ./row -->
  </div> <!-- ./container-wrapper -->
</template>
