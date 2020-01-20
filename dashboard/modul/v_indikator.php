
            <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Data Indikator</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
           
<?php
// proses hapus data
if (isset($_GET['aksi'])) {
    if ($_GET['aksi'] == 'hapus') {
        // baca ID dari parameter ID  yang akan dihapus
		$id = $_GET['id'];
        // proses hapus data berdasarkan ID
        $sql=$mysqli->query("DELETE FROM indikator WHERE `id`= '$id'");
		echo "<script>document.location='?page=indikator';</script>";

	 } elseif ($_GET['aksi'] == 'tambah' || $_GET['aksi'] == 'edit') {
		 $id = $_GET['id'];
		if($id==''){$button="Save";}else{$button='Update';}
		 $query="SELECT * FROM indikator WHERE `id`= '$id'";
		$result= $mysqli->query($query);
		$data=$result->fetch_assoc();
		?>

        <form action="?page=indikator&aksi=prosesSubmit" method="post" class="form-horizontal">
		 <div class="form-body">
	    <div class="form-group">
            <label for="varchar" class="col-sm-3 control-label">Kode Indikator </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="kode_indikator" id="kode_indikator" placeholder="Kode Indikator" value="<?php echo $data["kode_indikator"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="varchar" class="col-sm-3 control-label">Nama Indikator </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="nama_indikator" id="nama_indikator" placeholder="Nama Indikator" value="<?php echo $data["nama_indikator"]; ?>" />
        </div>
		</div>
	   </div>
        			<div class="form-actions">
					<div class="row">
					<div class="col-md-offset-3 col-md-9">
	    <input type="hidden" name="id" value="<?php echo $data["id"]; ?>" /> 
	    <input type="hidden" name="statusTombol" value="<?php echo $button ?>" /> 
	    <button type="submit" class="btn btn-primary"><span class='glyphicon glyphicon-save'></span> <?php echo $button ?></button> 
	    <a class='btn btn-danger' onclick=self.history.back() ><span class='glyphicon glyphicon-arrow-left'></span> Kembali</a>
	</div>
				</div>
              </div>
			  </form>
   
   <?php } elseif ($_GET['aksi'] == 'detail') {
	    $id = $_GET['id'];
		 	
		 $query="SELECT * FROM indikator WHERE `id`= '$id'";
		$result= $mysqli->query($query);
		$data=$result->fetch_assoc();
		?>

        <table class="table table-bordered table-striped table-condensed flip-content">
	    <tr><td>Kode Indikator</td><td><?php echo $data["kode_indikator"]; ?></td></tr>
	    <tr><td>Nama Indikator</td><td><?php echo $data["nama_indikator"]; ?></td></tr>
	    <tr><td></td><td><a href="?page=indikator" class="btn btn-info"><i class="fa fa-reply"></i> Kembali</a></td></tr>
	</table>
       
<?php } elseif ($_GET['aksi'] == 'prosesSubmit') {
	   
	  $id = $_POST['id'];
	  $kode_indikator = $_POST['kode_indikator'];
	  $nama_indikator = $_POST['nama_indikator'];
	switch($_POST['statusTombol']) {
	case 'Save':
			$query=$mysqli->query("INSERT INTO indikator (`id`,`kode_indikator`,`nama_indikator`) VALUES ('$id','$kode_indikator','$nama_indikator')");
	break;
	case 'Update':
			$query=$mysqli->query("UPDATE indikator set `id` = '$id',`kode_indikator` = '$kode_indikator',`nama_indikator` = '$nama_indikator' WHERE id='$id'");
	break;
	}
 echo "<script>document.location='?page=indikator';</script>";
    }
}else {// end aksi?>
	
							<a href="?page=indikator&aksi=tambah" class="btn btn-primary "><i class="fa fa-plus"></i> <span class="hidden-480">
								Tambah Data </span></a> 
<br><br>
                           
								
							
							<table class="table table-bordered table-striped table-condensed flip-content" id="mytable">
							<thead class="flip-content bg-blue">
                <tr>
                    <th width="8px">No</th>
		    <th>Kode Indikator</th>
		    <th>Nama Indikator</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
			 $query="SELECT * FROM indikator order by `id` asc ";
		$result= $mysqli->query($query);
		while($indikator=$result->fetch_assoc())
		 {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $indikator["kode_indikator"]; ?></td>
		    <td><?php echo $indikator["nama_indikator"]; ?></td>
		    <td style="text-align:center" width="200px">
<a href="?page=indikator&aksi=detail&id=<?php echo $indikator["id"];?>" class="btn btn-primary btn-xs purple"><i class="fa fa-search"></i> Detail</a> 
<a href="?page=indikator&aksi=edit&id=<?php echo $indikator["id"];?>" class="btn btn-warning btn-xs purple"><i class="fa fa-edit"></i> Edit</a> 
<a href="?page=indikator&aksi=hapus&id=<?php echo $indikator["id"];?>" class="btn btn-danger btn-xs purple" onclick="javasciprt: return confirm('Are You Sure ?')"><i class="fa fa-trash-o"></i> Delete</a>
              
		    </td>
	        </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
		

      <?php }?> 
	</div>
        </div>
        </div>
        </div>
        </section> 