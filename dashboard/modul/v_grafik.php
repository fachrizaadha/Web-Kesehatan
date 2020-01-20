<script src="grafik/highcharts.js"></script>
<script src="grafik/data.js"></script>
<script src="grafik/exporting.js"></script>
<script src="grafik/export-data.js"></script>
<?php
function getJml($field,$id){
			global $mysqli;
			 $query="SELECT * FROM profilkesehatan WHERE `id`= '$id'";
		$result= $mysqli->query($query);
		$data=$result->fetch_assoc();
		return $data["$field"];	
			}
$gab='';
if(!empty($_POST["kategori"])) {
    foreach($_POST['kategori'] as $key) {
			 $gab.=$key.',';
			 }
	      
            }

		 ?>
            <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-line-chart"></i> Grafik Visualisasi Data</li></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
           

        <form action="?page=grafik&aksi=prosesSubmit" method="post" class="form-horizontal">
		 <div class="form-body">
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Tahun </label>
          <div class="col-sm-4"> 
           <select name="tahun" class="form-control">
           <option value="">~~ Pilih ~~</option>
           <?php
		    $q="SELECT distinct(tahun) FROM profilkesehatan";
		$r= $mysqli->query($q);
		while($d=$r->fetch_assoc()){
			if($d["tahun"]==$_POST["tahun"]){$s="selected";}else{$s="";}
		   ?>
           <option value="<?php echo $d["tahun"];?>" <?php echo $s;?>><?php echo $d["tahun"];?></option>
           <?php }?>
           
           </select> 
        </div>
		</div>
	    <div class="form-group">
            <label for="varchar" class="col-sm-3 control-label">Provinsi </label>
          <div class="col-sm-4"> 
             <select name="provinsi" class="form-control">
           <option value="">~~ Pilih ~~</option>
           <?php
		    $q="SELECT distinct(provinsi) FROM profilkesehatan";
		$r= $mysqli->query($q);
		while($d=$r->fetch_assoc()){
			if($d["provinsi"]==$_POST["provinsi"]){$s="selected";}else{$s="";}
		   ?>
           <option value="<?php echo $d["provinsi"];?>" <?php echo $s;?>><?php echo $d["provinsi"];?></option>
           <?php }?>
           
           </select> 
        </div>
		</div>
	    <div class="form-group">
            <label for="varchar" class="col-sm-3 control-label">Jenis Chart </label>
          <div class="col-sm-4"> 
        
              <?php
                $arrket	= array();
                $arrket[] = "line";
                $arrket[] = "column";
				
                ?>
                <select class="form-control" name="chart" id="chart">
             <option value="">~~ PILIH CHART ~~</option>
            <?php
			 foreach ($arrket as $nilai) {
            if ($_POST["chart"] == $nilai) {
                $cek=" selected";
            } else { $cek = ""; }
            echo "<option value='$nilai' $cek>$nilai</option>";
          }?>
           </select>        </div>
		</div>
          <div class="form-group">
            <label for="varchar" class="col-sm-3 control-label">Kategori </label>
          <div class="col-sm-9"> 
      <select class="form-control select2" name="kategori[]" multiple="multiple">
          <option value="">~~ Pilih ~~</option>
        <?php
		
		     $qx="SELECT * FROM ket_indikator";
		$rx= $mysqli->query($qx);
		while($dx=$rx->fetch_assoc()){
			?>
            <optgroup label="<?php echo $dx["keterangan"];?>">
     <?php
		    $q="SELECT * FROM indikator WHERE id_ket='$dx[id]'";
		$r= $mysqli->query($q);
		while($d=$r->fetch_assoc()){
			$hasil=str_replace(",","",$gab);
			if($d["kode_indikator"]==$_POST["kategori"]){$s="selected";}else{$s="";}
		   ?>
           <option value="<?php echo $d["kode_indikator"];?>"  <?php if(preg_match("/$d[kode_indikator]/i",$hasil)){echo 'selected';} ?>><?php echo $d["nama_indikator"];?></option>
           <?php }?>
  </optgroup>
  <?php }?>

           
           </select>        </div>
		</div>
						
                 </div>
        			<div class="form-actions">
					<div class="row">
					<div class="col-md-offset-3 col-md-9">
	    <input type="hidden" name="id" value="<?php echo $data["id"]; ?>" /> 
	    <input type="hidden" name="statusTombol" value="<?php echo $button ?>" /> 
	    <button type="submit" class="btn btn-primary"><span class='glyphicon glyphicon-save'></span> Submit</button> 
	    <a class='btn btn-success' href="?page=grafik"><span class='fa fa-refresh'></span> Refresh</a>
	</div>
				</div>
              </div>
			  </form>           
		

 <?php
			if(!empty($_POST["kategori"])) {
				$no=0;
   			 foreach($_POST['kategori'] as $key) {
				 $no++;
       ?>

<div id="container_<?php echo $no;?>" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<table id="datatable_<?php echo $no;?>" style="display:none">
    <thead>
        <tr>
           
            <th>Kota</th>
            <th><?php echo getName("indikator","kode_indikator",$key,"nama_indikator");?></th>
        </tr>
    </thead>
    <tbody>
    <?php
	$query="SELECT * FROM profilkesehatan WHERE provinsi='$_POST[provinsi]' AND tahun='$_POST[tahun]'  order by `id` asc ";
		$result= $mysqli->query($query);
		while($profilkesehatan=$result->fetch_assoc())
		 {
			  $jml=getJml($key,$profilkesehatan["id"]);
			 ?>
        <tr>
            <th><?php echo $profilkesehatan["kota"]; ?></th>
          
            <td><?php echo $jml;?></td>
        </tr>
        <?php }?>
    </tbody>
</table>
<script>
Highcharts.chart('container_<?php echo $no;?>', {
    data: {
        table: 'datatable_<?php echo $no;?>'
    },
    chart: {
        type: '<?php echo $_POST["chart"];?>'
    },
    title: {
        text: '<?php echo getName("indikator","kode_indikator",$key,"nama_indikator");?>'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Jumlah'
        }
    },
    tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                this.point.y + ' ' + this.point.name.toLowerCase();
        }
    }
});
</script>
  <?php //}
			// echo $key;
    }   
}
			?>
	</div>
        </div>
        </div>
        </div>
        </section> 
                <!-- AdminLTE for demo purposes -->
<script src="assets/plugins/select2/dist/js/select2.full.min.js"></script>
    <script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2({maximumSelectionLength: 3,
        formatSelectionTooBig: function (limit) {

            // Callback

            return 'Too many selected items';
        }});
  });
  </script>
