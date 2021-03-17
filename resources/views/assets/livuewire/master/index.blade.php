<x-Master.Author>
  @push('customStyles')
  <link rel="stylesheet" href="{{ mix('css/custom.css') }}">
  @endpush
  @prepend('frameworkStyles')
  <!-- Font Awesome Icons -->
  <!-- ESM Build -->

  <!-- Theme style -->
  <!-- ESM Build -->

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  @endprepend
  @push('customScripts')
  <!-- lib.js -->
  <script src="{{ mix('js/lib.js') }}"></script>
  @endpush
  @prepend('frameworksScripts')
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!--Ajax Google -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->

  <!-- Bootstrap 4 -->

  <!-- AdminLTE App -->
  <!--script src="https://adminlte.io/themes/dev/AdminLTE/dist/js/adminlte.min.js"></script-->
  @endprepend
</x-Master.Author>
