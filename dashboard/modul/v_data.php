<?php
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
              <h3 class="box-title"><i class="fa fa-cubes"></i> List Data</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
           

        <form action="?page=data&aksi=prosesSubmit" method="post" class="form-horizontal">
		 <div class="form-body">
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Tahun </label>
          <div class="col-sm-4"> 
           <select name="tahun" class="form-control">
           <option value="">== Pilih  Tahun ==</option>
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
             <select name="provinsi" id="provinsi" class="form-control">
           <option value="">== Pilih Provinsi == </option>
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
        <!--
	    <div class="form-group">
            <label for="varchar" class="col-sm-3 control-label">Kota </label>
          <div class="col-sm-4"> 
        <select name="kota" class="form-control" id="kota">
           <option value="">~~ Pilih ~~</option>
           <?php
		    $q="SELECT distinct(kota) FROM profilkesehatan";
		$r= $mysqli->query($q);
		while($d=$r->fetch_assoc()){
			if($d["kota"]==$_POST["kota"]){$s="selected";}else{$s="";}
		   ?>
           <option value="<?php echo $d["kota"];?>" <?php echo $s;?>><?php echo $d["kota"];?></option>
           <?php }?>
           
           </select>         </div>
		</div>
        -->
          <div class="form-group">
            <label for="varchar" class="col-sm-3 control-label">Kategori </label>
          <div class="col-sm-9"> 
        <select class="form-control select2" name="kategori[]" multiple="multiple">
           <option value="">== Pilih Kategori ==</option>
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
          
           
           </select>         </div>
		</div>
						
                 </div>
        			<div class="form-actions">
					<div class="row">
					<div class="col-md-offset-3 col-md-9">
	    <input type="hidden" name="id" value="<?php echo $data["id"]; ?>" /> 
	    <input type="hidden" name="statusTombol" value="<?php echo $button ?>" /> 
	    <button type="submit" class="btn btn-primary"><span class='glyphicon glyphicon-save'></span> Submit</button> 
	    <a class='btn btn-success' href="?page=data"><span class='fa fa-refresh'></span> Refresh</a>
	</div>
				</div>
              </div>
			  </form>           
								
							<?php
							if($_POST["kategori"]){?>
                                 <div class="box-body table-responsive no-padding">
							<table class="table table-bordered table-striped table-condensed flip-content" id="mytable">
							<thead class="flip-content bg-blue">
                <tr>
                    <th width="8px">No</th>
		    <th>Tahun</th>
		    <th>Provinsi</th>
		    <th>Kota</th>
            <?php
			if(!empty($_POST["kategori"])) {
    foreach($_POST['kategori'] as $key) {
       
			/* $q="SELECT * FROM indikator WHERE kode_indikator='$_POST[kategori]' order by `id` asc ";
		$r= $mysqli->query($q);
		while($indikator=$r->fetch_assoc())
		 {*/?>
		    <th><?php echo getName("indikator","kode_indikator",$key,"nama_indikator");?></th>
            <?php //}
			// echo $key;
    }   
}
			?>
                </tr>
            </thead>
	    <tbody>
            <?php
			function getJml($field,$id){
			global $mysqli;
			 $query="SELECT * FROM profilkesehatan WHERE `id`= '$id'";
		$result= $mysqli->query($query);
		$data=$result->fetch_assoc();
		return $data["$field"];	
			}
            $start = 0;
			 $query="SELECT * FROM profilkesehatan WHERE provinsi='$_POST[provinsi]' AND tahun='$_POST[tahun]'  order by `id` asc ";
		$result= $mysqli->query($query);
		while($profilkesehatan=$result->fetch_assoc())
		 {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $profilkesehatan["tahun"]; ?></td>
		    <td><?php echo $profilkesehatan["provinsi"]; ?></td>
		    <td><?php echo $profilkesehatan["kota"]; ?></td>
		     <?php
			/* $q="SELECT * FROM indikator WHERE kode_indikator='$_POST[kategori]' order by `id` asc ";
		$r= $mysqli->query($q);
		while($indikator=$r->fetch_assoc())
		 {*/
		 if(!empty($_POST["kategori"])) {
    foreach($_POST['kategori'] as $key) {
		//echo $key;
			 $jml=getJml($key,$profilkesehatan["id"]);
			 ?>
		    <td><?php echo $jml;?></td>
            <?php }?>
	        </tr>
                <?php
            }
		 }
            ?>
            </tbody>
        </table>
        </div>
		 <?php
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
    $('.select2').select2();
  });
  
  </script>
<script>
$(document).ready(function() {
   $('#provinsi').change(function() { // Jika Select Box id provinsi dipilih
     var provinsi = $(this).val(); // Ciptakan variabel provinsi
     $.ajax({
            type: 'POST', // Metode pengiriman data menggunakan POST
          url: 'getData.php', // File yang akan memproses data
         data: 'nama_prov=' + provinsi, // Data yang akan dikirim ke file pemroses
         success: function(response) { // Jika berhasil
              $('#kota').html(response); // Berikan hasil ke id kota
            }
       });
    });
	
});
	</script>