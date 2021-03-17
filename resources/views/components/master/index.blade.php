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
  @include('assets\livuewire\pages\nav')
  <!-- /.navbar -->


  @include('assets\livuewire\pages\tools')


  <!-- Content Wrapper. Contains page content -->
  @php
  $AuthUser = Auth::user();
  @endphp
  <div class="content-wrapper">
    
    <router-view></router-view>
    <!-- https://www.npmjs.com/package/@aacassandra/vue3-progressbar -->
    <vue-progress-bar />
    <!-- https://www.npmjs.com/package/@aacassandra/vue3-progressbar -->
  </div>
  <!-- /.content-wrapper -->


  @include('assets\livuewire\pages\sidebar_pane')



  @include('assets\livuewire\pages\footer')
</div>
<!-- ./wrapper -->

@stack('frameworksScripts')

@stack('customScripts')


</body>
</html>
