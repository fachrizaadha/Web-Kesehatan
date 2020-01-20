  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.0
      </div>
      <strong>Copyright &copy; 2019</strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- SlimScroll -->
<script src="assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/app.min.js"></script>
<!--untuk chatting-->
	<script type="text/javascript" src="js/chat.js"></script>
	<link type="text/css" rel="stylesheet" media="all" href="css/chat.css" />
	<link type="text/css" rel="stylesheet" media="all" href="css/screen.css" />
<!-- bootstrap datepicker -->
<script src="assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- datatables-->
<link rel="stylesheet"  href="assets/plugins/datatables/datatables.min.css">	
	<link rel="stylesheet"  href="assets/plugins/datatables/style.css">	
    <script src="assets/plugins/datatables/datatables.min.js" type="text/javascript"></script> 
    
<script src="js/highcharts.js"></script>
<script src="js/jquery.highchartTable-min.js"></script>
<script>

    $(document).ready(function () {
        $('table.highchart').highchartTable();
    });
</script>
  <script>
$(document).ready(function() {
    $('#mytable').dataTable({
		"responsive": true,
		"columnDefs": [
		            { responsivePriority: 1, targets: 0 },
		            { responsivePriority: 2, targets: 1 }
		        ]
    } );
} );


	   //Datemask dd/mm/yyyy
    //Datemask2 mm/dd/yyyy
	 //Date picker
    $('.datepicker').datepicker({
		 autoclose: true,
	   format: "yyyy-mm-dd",
        todayHighlight: true,
        orientation: "bottom auto",
        todayBtn: true,
    });
	 $('.datepicker-bottom').datepicker({
		 autoclose: true,
	   format: "yyyy-mm-dd",
        todayHighlight: true,
        orientation: "top auto",
        todayBtn: true,
    });

   function cekkosong(cnama='1',message="Something went wrong!"){
        if(cnama=='' || cnama==null){
            sweetAlert("Oops...", message, "error");
             exit();
        }
    }
    
    function ceknol(cnama='1',message="Something went wrong!"){
        if(cnama==0){
            sweetAlert("Oops...", message, "error");
             exit();
        }
    }
    
  </script>

</body>
</html>
