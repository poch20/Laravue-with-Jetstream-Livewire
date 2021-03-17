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
          <div class="card-footer">
            <div class="row">
            </div> <!-- div.row -->
          </div> <!-- div.card-footer -->
        </div> <!-- div.card card-widget widget-user -->
      </div> <!-- div.col-md-12 mt-3 -->
    </div> <!-- div.row -->




      <div class="col-md-12">
        <div class="card">


          <div class="card-header p-2">


            <ul class="nav nav-pills">
              <li class="nav-item">
                <a class="nav-link active show" href="#settings" data-toggle="tab">Form</a>
              </li>
            </ul>

          </div> <!-- E.div.card-header p-2-->




          <div class="card-body">
            <div class="tab-content">

              <div class="tab-pane" id="activity">
                <h3 class="text-center">Display User Activity</h3>
              </div>



              <div class="tab-pane active show" id="settings">

                <form enctype="multipart/form-data" method="POST" class="form-horizontal">

                  <div class="form-group">
                    <input type="text" class="form-control"
                    name="nameAttr-description"
                    >

                    <input type="text" style="display:none" class="form-control"
                    name="fileNameRegExAttr"
                    >

                  </div>

                  <div class="form-group">
                    <label for="idAttr--TypeFile"  class="col-sm-2 control-label">
                      <i class="fas fa-file movie-o"></i> Create File
                    </label>

                    <div class="col-sm-12">
                      <input type="file" name="nameAttr--TypeFile" id="idAttr--TypeFile">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-12">
                      <button type="submit" class="btn btn-primary">Create File</button>
                    </div>
                  </div>
                </form>


              </div> <!-- E.div.tab-pane active show -->




            </div> <!-- E.div.tab-content -->
          </div> <!-- E.div.card-body -->
        </div> <!-- E.div.card -->
      </div> <!-- E.div.col-md-12 -->
    </div> <!-- div.container-wrapper -->
</template>

<script>

</script>
