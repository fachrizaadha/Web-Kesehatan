
          <div class="row"> 
                    <section class="col-lg-12">
                         <div class="panel panel-default">   
                        <div class="panel-heading">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-list"></span> Temp Tabulasi Model </h3> 
                        </div>
                        <div class="panel-body">
<?php
// proses hapus data
if (isset($_GET['aksi'])) {
    if ($_GET['aksi'] == 'hapus') {
        // baca ID dari parameter ID  yang akan dihapus
		$id = $_GET['id'];
        // proses hapus data berdasarkan ID
        $sql=$mysqli->query("DELETE FROM temp_tabulasi WHERE `id`= '$id'");
		echo "<script>document.location='?page=temp_tabulasi';</script>";

	 } elseif ($_GET['aksi'] == 'tambah' || $_GET['aksi'] == 'edit') {
		 $id = $_GET['id'];
		if($id==''){
			$button="Save";
			$kode=getKode("temp_tabulasi","id","","","");}else{$button='Update';$kode=$id;}
		 $query="SELECT * FROM temp_tabulasi WHERE `id`= '$id'";
		$result= $mysqli->query($query);
		$data=$result->fetch_assoc();
		?>
        <form action="?page=temp_tabulasi&aksi=prosesSubmit" method="post" class="form-horizontal" name="theform">
		 <div class="form-body">
	    <div class="form-group">
            <label class="col-sm-3 control-label">Id </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="id" id="id" readonly="readonly" value="<?php echo $kode; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Id Pegawai </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="id_pegawai" id="id_pegawai" placeholder="Id Pegawai" value="<?php echo $data["id_pegawai"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="varchar" class="col-sm-3 control-label">Nip </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="nip" id="nip" placeholder="Nip" value="<?php echo $data["nip"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="int" class="col-sm-3 control-label">Id Periode </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="id_periode" id="id_periode" placeholder="Id Periode" value="<?php echo $data["id_periode"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="varchar" class="col-sm-3 control-label">A1 Lama </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="a1_lama" id="a1_lama" placeholder="A1 Lama" value="<?php echo $data["a1_lama"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="varchar" class="col-sm-3 control-label">A2 Lama </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="a2_lama" id="a2_lama" placeholder="A2 Lama" value="<?php echo $data["a2_lama"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="varchar" class="col-sm-3 control-label">B Lama </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="b_lama" id="b_lama" placeholder="B Lama" value="<?php echo $data["b_lama"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="varchar" class="col-sm-3 control-label">C Lama </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="c_lama" id="c_lama" placeholder="C Lama" value="<?php echo $data["c_lama"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="varchar" class="col-sm-3 control-label">D Lama </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="d_lama" id="d_lama" placeholder="D Lama" value="<?php echo $data["d_lama"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="varchar" class="col-sm-3 control-label">E Lama </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="e_lama" id="e_lama" placeholder="E Lama" value="<?php echo $data["e_lama"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="enum" class="col-sm-3 control-label">Status Pemakaian </label>
          <div class="col-sm-4"> 
		   <input type="text" class="form-control" name="status_pemakaian" id="status_pemakaian" placeholder="Status Pemakaian" value="<?php echo $data["status_pemakaian"]; ?>" />
        </div>
		</div>
	   </div>
        			<div class="form-actions">
					<div class="row">
					<div class="col-md-offset-3 col-md-9">
	    <input type="hidden" name="statusTombol" value="<?php echo $button ?>" /> 
	    <button type="button"  id="btnSave" onclick="save()" class="btn btn-info"><span class='glyphicon glyphicon-save'></span> Simpan</button> 
	    <a class='btn btn-danger' onclick=self.history.back() ><span class='glyphicon glyphicon-remove'></span> Batal</a>
	</div>
				</div>
              </div>
			  </form>
   
   <?php } elseif ($_GET['aksi'] == 'detail') {
	    $id = $_GET['id'];
		 	
		 $query="SELECT * FROM temp_tabulasi WHERE `id`= '$id'";
		$result= $mysqli->query($query);
		$data=$result->fetch_assoc();
		?>

        <table class="table table-bordered table-striped table-condensed flip-content">
	    <tr><td>Id</td><td><?php echo $data["id"]; ?></td></tr>
	    <tr><td>Id Pegawai</td><td><?php echo $data["id_pegawai"]; ?></td></tr>
	    <tr><td>Nip</td><td><?php echo $data["nip"]; ?></td></tr>
	    <tr><td>Id Periode</td><td><?php echo $data["id_periode"]; ?></td></tr>
	    <tr><td>A1 Lama</td><td><?php echo $data["a1_lama"]; ?></td></tr>
	    <tr><td>A2 Lama</td><td><?php echo $data["a2_lama"]; ?></td></tr>
	    <tr><td>B Lama</td><td><?php echo $data["b_lama"]; ?></td></tr>
	    <tr><td>C Lama</td><td><?php echo $data["c_lama"]; ?></td></tr>
	    <tr><td>D Lama</td><td><?php echo $data["d_lama"]; ?></td></tr>
	    <tr><td>E Lama</td><td><?php echo $data["e_lama"]; ?></td></tr>
	    <tr><td>Status Pemakaian</td><td><?php echo $data["status_pemakaian"]; ?></td></tr>
	    <tr><td></td><td><a href="?page=temp_tabulasi" class="btn btn-info"><i class="fa fa-reply"></i> Kembali</a></td></tr>
	</table>
       
<?php } elseif ($_GET['aksi'] == 'prosesSubmit') {
	   
	  $id = $_POST['id'];
	  $id_pegawai = $_POST['id_pegawai'];
	  $nip = $_POST['nip'];
	  $id_periode = $_POST['id_periode'];
	  $a1_lama = $_POST['a1_lama'];
	  $a2_lama = $_POST['a2_lama'];
	  $b_lama = $_POST['b_lama'];
	  $c_lama = $_POST['c_lama'];
	  $d_lama = $_POST['d_lama'];
	  $e_lama = $_POST['e_lama'];
	  $status_pemakaian = $_POST['status_pemakaian'];
	switch($_POST['statusTombol']) {
	case 'Save':
			$query=$mysqli->query("INSERT INTO temp_tabulasi (`id`,`id_pegawai`,`nip`,`id_periode`,`a1_lama`,`a2_lama`,`b_lama`,`c_lama`,`d_lama`,`e_lama`,`status_pemakaian`) VALUES ('$id','$id_pegawai','$nip','$id_periode','$a1_lama','$a2_lama','$b_lama','$c_lama','$d_lama','$e_lama','$status_pemakaian')");
	break;
	case 'Update':
			$query=$mysqli->query("UPDATE temp_tabulasi set `id` = '$id',`id_pegawai` = '$id_pegawai',`nip` = '$nip',`id_periode` = '$id_periode',`a1_lama` = '$a1_lama',`a2_lama` = '$a2_lama',`b_lama` = '$b_lama',`c_lama` = '$c_lama',`d_lama` = '$d_lama',`e_lama` = '$e_lama',`status_pemakaian` = '$status_pemakaian' WHERE id='$id'");
	break;
	}
 echo "<script>document.location='?page=temp_tabulasi';</script>";
    }
}else {// end aksi?>
	
							<div class="row">
						 <div class="col-sm-12">
                			<a href="?page=temp_tabulasi&aksi=tambah" class="btn btn-info "><i class="fa fa-plus"></i> <span class="hidden-480">
								Tambah </span></a> 
                                </div>
                                </div>
            <br />   
						
	<table class="table table-bordered table-striped table-condensed flip-content" id="mytable">
			<thead class="flip-content">
                <tr>
                    <th width="8px">No</th>
		    <th>Id</th>
		    <th>Id Pegawai</th>
		    <th>Nip</th>
		    <th>Id Periode</th>
		    <th>A1 Lama</th>
		    <th>A2 Lama</th>
		    <th>B Lama</th>
		    <th>C Lama</th>
		    <th>D Lama</th>
		    <th>E Lama</th>
		    <th>Status Pemakaian</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
			 $query="SELECT * FROM temp_tabulasi order by `id` asc ";
		$result= $mysqli->query($query);
		while($temp_tabulasi=$result->fetch_assoc())
		 {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $temp_tabulasi["id"]; ?></td>
		    <td><?php echo $temp_tabulasi["id_pegawai"]; ?></td>
		    <td><?php echo $temp_tabulasi["nip"]; ?></td>
		    <td><?php echo $temp_tabulasi["id_periode"]; ?></td>
		    <td><?php echo $temp_tabulasi["a1_lama"]; ?></td>
		    <td><?php echo $temp_tabulasi["a2_lama"]; ?></td>
		    <td><?php echo $temp_tabulasi["b_lama"]; ?></td>
		    <td><?php echo $temp_tabulasi["c_lama"]; ?></td>
		    <td><?php echo $temp_tabulasi["d_lama"]; ?></td>
		    <td><?php echo $temp_tabulasi["e_lama"]; ?></td>
		    <td><?php echo $temp_tabulasi["status_pemakaian"]; ?></td>
		    <td style="text-align:center">
<a href="?page=temp_tabulasi&aksi=edit&id=<?php echo $temp_tabulasi["id"];?>" class="btn btn-primary btn-xs purple"><i class="fa fa-edit"></i></a> 
<a href="?page=temp_tabulasi&aksi=hapus&id=<?php echo $temp_tabulasi["id"];?>" class="btn btn-danger btn-xs purple delete_data" ><i class="fa fa-trash-o"></i> </a>
<a href="?page=temp_tabulasi&aksi=detail&id=<?php echo $temp_tabulasi["id"];?>" class="btn btn-default btn-xs purple"><i class="fa fa-print"></i></a> 

              
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
      </section>
      </div> 
	  <script>
	  function save()
{
    swal({title: "Prosesing...!",text: '<center><div class="proses_loader"></div></center>',html: true,showConfirmButton: false});  
		 // validasi
		 
		  var id_pegawai= document.getElementById("id_pegawai").value;
		 cekkosong(id_pegawai,"Id Pegawai Tidak Boleh Kosong!");
		  var nip= document.getElementById("nip").value;
		 cekkosong(nip,"Nip Tidak Boleh Kosong!");
		  var id_periode= document.getElementById("id_periode").value;
		 cekkosong(id_periode,"Id Periode Tidak Boleh Kosong!");
		  var a1_lama= document.getElementById("a1_lama").value;
		 cekkosong(a1_lama,"A1 Lama Tidak Boleh Kosong!");
		  var a2_lama= document.getElementById("a2_lama").value;
		 cekkosong(a2_lama,"A2 Lama Tidak Boleh Kosong!");
		  var b_lama= document.getElementById("b_lama").value;
		 cekkosong(b_lama,"B Lama Tidak Boleh Kosong!");
		  var c_lama= document.getElementById("c_lama").value;
		 cekkosong(c_lama,"C Lama Tidak Boleh Kosong!");
		  var d_lama= document.getElementById("d_lama").value;
		 cekkosong(d_lama,"D Lama Tidak Boleh Kosong!");
		  var e_lama= document.getElementById("e_lama").value;
		 cekkosong(e_lama,"E Lama Tidak Boleh Kosong!");
		  var status_pemakaian= document.getElementById("status_pemakaian").value;
		 cekkosong(status_pemakaian,"Status Pemakaian Tidak Boleh Kosong!");
    // ajax adding data to database
	document.theform.submit();
}

	  $('.delete_data').on("click", function(e) {
  e.preventDefault();
  var url = $(this).attr('href');
  swal({
  title: "Apakah anda yakin?",
  text: " Akan menghapus data ini!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
      confirmButtonText: "Ya, saya yakin!",
      cancelButtonText: "Tidak, Batalkan!",
      confirmButtonClass: "btn-danger",
      closeOnConfirm: false,
      closeOnCancel: false
    },
    function(isConfirm) {
      if (isConfirm) {
       swal("Terhapus!", "Data anda berhasil dihapus.", "success");
        window.location.replace(url);
      } else {
		swal("Cancel!", "Your data cancel.", "error");
      }
    });
});
</script>
	  