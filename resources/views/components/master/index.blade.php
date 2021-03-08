<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3-CMS | Portfolio</title>
  @stack('frameworkStyles')

  @stack('customStyles')


<body class="hold-transition sidebar-mini">
<div class="wrapper" id="laravue-app">

  <!-- Navbar -->
  @include('layouts\livuewire\pages\nav')
  <!-- /.navbar -->


  @include('layouts\livuewire\pages\tools')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <router-view></router-view>
  </div>
  <!-- /.content-wrapper -->


  @include('layouts\livuewire\pages\sidebar_pane')



  @include('layouts\livuewire\pages\footer')
</div>
<!-- ./wrapper -->

@stack('frameworksScripts')

@stack('customScripts')


</body>
</html>
