<?php session_start();
require("../include/notice.php"); 
require("../include/koneksi.php"); 
require("../include/fungsi.php"); 
?>
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
 <link rel="stylesheet" href="../assets/dist/css/skins/skin-blue.min.css">
  <style>
 body {
    padding-top: 30px;
}
.panel-login {
	border-color: #ccc;
	-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	
	border: 1px solid #ddd;
}
.panel-login>.panel-heading {
	color: #00415d;
	background-color: #fff;
	border-color: #fff;
	text-align:center;
}
.panel-login>.panel-heading a{
	text-decoration: none;
	color: #666;
	font-weight: bold;
	font-size: 15px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login>.panel-heading a.active{
	color: #029f5b;
	font-size: 18px;
}
.panel-login>.panel-heading hr{
	margin-top: 10px;
	margin-bottom: 0px;
	clear: both;
	border: 0;
	height: 1px;
	background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
	background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}
.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
	height: 45px;
	border: 1px solid #ddd;
	font-size: 16px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login input:hover,
.panel-login input:focus {
	outline:none;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	border-color: #ccc;
}
.btn-login {
	background-color: #59B2E0;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #59B2E6;
}
.btn-login:hover,
.btn-login:focus {
	color: #fff;
	background-color: #53A3CD;
	border-color: #53A3CD;
}
.forgot-password {
	text-decoration: underline;
	color: #888;
}
.forgot-password:hover,
.forgot-password:focus {
	text-decoration: underline;
	color: #666;
}

.btn-register {
	background-color: #1CB94E;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #1CB94A;
}
.btn-register:hover,
.btn-register:focus {
	color: #fff;
	background-color: #1CA347;
	border-color: #1CA347;
}
</style>
            <section class="content">
      <div class="row">
       <div class="col-md-4 col-md-offset-4">
          <div class="box">
       
            <div class="topic--list">
				<div class="topic-list--header clearfix">
											<a href="" class="topic-list-header--title"><i class="fa fa-file-text-o"></i>Form Register</a>
											
				</div>
				<div class="topic-list--content">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
                        <center>
							<img src="../assets/img/logo-login.jpg" class="img-responsive" width="150px" />
							</center>
						</div>
						<hr>
					</div>
            <!-- /.box-header -->
            <div class="box-body">
           


        <form action="?page=user&aksi=prosesSubmit" method="post" class="form-horizontal">
		 <div class="form-body">
	    <div class="form-group">
            <label for="varchar" class="col-sm-3 control-label">Nama User </label>
          <div class="col-sm-9"> 
		   <input type="text" class="form-control" name="nama_user" id="nama_user" placeholder="Nama User" value="<?php echo $data["nama_user"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="varchar" class="col-sm-3 control-label">Alamat User </label>
          <div class="col-sm-9"> 
		   <input type="text" class="form-control" name="alamat_user" id="alamat_user" placeholder="Alamat User" value="<?php echo $data["alamat_user"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="varchar" class="col-sm-3 control-label">No Telepon </label>
          <div class="col-sm-9"> 
		   <input type="text" class="form-control" name="no_telepon" id="no_telepon" placeholder="No Telepon" value="<?php echo $data["no_telepon"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="varchar" class="col-sm-3 control-label">Email </label>
          <div class="col-sm-9"> 
		   <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $data["email"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="varchar" class="col-sm-3 control-label">Username </label>
          <div class="col-sm-9"> 
		   <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $data["username"]; ?>" />
        </div>
		</div>
	    <div class="form-group">
            <label for="varchar" class="col-sm-3 control-label">Password </label>
          <div class="col-sm-9"> 
		   <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $data["password"]; ?>" />
        </div>
		</div>
	  
	   </div>
        			<div class="form-actions">
					<div class="row">
					<div class="col-md-offset-3 col-md-9">
	    <input type="hidden" name="id_user" value="<?php echo $data["id_user"]; ?>" /> 
	    <input type="hidden" name="statusTombol" value="<?php echo $button ?>" /> 
	    <button type="submit" class="btn btn-primary"><span class='glyphicon glyphicon-save'></span> Register</button> 
	    <a class='btn btn-danger' onclick=self.history.back() ><span class='glyphicon glyphicon-arrow-left'></span> Kembali</a>
	</div>
				</div>
              </div>
			  </form>
   
 <?php if ($_GET['aksi'] == 'prosesSubmit') {
	   
	  $id_user = $_POST['id_user'];
	  $nama_user = $_POST['nama_user'];
	  $alamat_user = $_POST['alamat_user'];
	  $no_telepon = $_POST['no_telepon'];
	  $email = $_POST['email'];
	  $username = $_POST['username'];
	  $password = $_POST['password'];
	  $level = 'member';
	
			$query=$mysqli->query("INSERT INTO user (`id_user`,`nama_user`,`alamat_user`,`no_telepon`,`email`,`username`,`password`,`level`) VALUES ('$id_user','$nama_user','$alamat_user','$no_telepon','$email','$username','$password','$level')");
			$id_user=$mysqli->insert_id;
			$_SESSION['uid'] = $id_user;
			$_SESSION['uname'] = $nama_user;
			$_SESSION['ulevel'] = $level;
			echo "<script>document.location='../';</script>";
   
 }?> 
	</div>
        </div>
        </div>
        </div>
        </section> 