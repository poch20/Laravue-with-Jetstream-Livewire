<x-master.data-tables>



@push('dataTableScripts')
<script type="text/javascript" src="https://datatables.net/media/js/site.js?_=30f0487232c2a65fc46c30e1dd9102f0"></script>
<!--script type="text/javascript" src="https://datatables.net/media/js/dynamic.php?comments-page=examples%2Fstyling%2Fbootstrap.html" async></script-->
<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="https://datatables.net/examples/resources/demo.js"></script>
<script type="text/javascript" class="init">
$(document).ready(function() {
  $('#example').DataTable();
});
</script>
@endpush
@prepend('dataTableStyles')
<link rel="stylesheet" type="text/css" href="https://datatables.net/media/css/site-examples.css?_=2335fc41d55494e8cfce6bcc069c6419">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap.min.css">
<style type="text/css" class="init">
</style>
@endprepend
</x-master.data-tables>
