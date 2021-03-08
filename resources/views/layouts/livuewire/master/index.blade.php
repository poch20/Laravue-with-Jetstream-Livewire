<x-Master.Author>
  @push('customStyles')
  <link rel="stylesheet" href="{{ mix('css/custom.css') }}">
  @endpush
  @prepend('frameworkStyles')
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="https://adminlte.io/themes/dev/AdminLTE/dist/css/adminlte.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  @endprepend
  @push('customScripts')
  <!-- lib.js -->
  <script src="{{ mix('js/lib.js') }}"></script>
  @endpush
  @prepend('frameworksScripts')
  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="https://adminlte.io/themes/dev/AdminLTE/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="https://adminlte.io/themes/dev/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="https://adminlte.io/themes/dev/AdminLTE/dist/js/adminlte.min.js"></script>
  @endprepend
</x-Master.Author>
