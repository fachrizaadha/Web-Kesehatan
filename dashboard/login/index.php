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
    padding-top: 90px;
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
<body>

<div class="container">
    	<div class="row">
			<div class="col-md-4 col-md-offset-4">
            <center>
          <!--  <img src="assets/img/logo.jpeg" class="img-responsivex" width="150px" height="150px" />-->
            </center>
            	<div class="topic--list">
				<div class="topic-list--header clearfix">
											<a href="" class="topic-list-header--title"><i class="fa fa-file-text-o"></i>Login Area <?php echo $_GET["level"];?></a>
											
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
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="" method="post" role="form" >
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In"> 
                                                	<input type="hidden" name="level" value="<?php echo $_GET["level"];?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="../" tabindex="5" class="forgot-password"> &lt;&lt; Back to Home </a> &nbsp;
												</div>
											</div>
										</div>
									</div>
								</form>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    	 <?php 
	if($_POST["login-submit"]){
		$username=$_POST["username"];
		$password=$_POST["password"];
		$level=$_POST["level"];
		$query="SELECT * FROM user WHERE `username`= '$username' AND password='$password'  AND level='$level'";
		$result= $mysqli->query($query);
		if($result->num_rows>0){
		$data=$result->fetch_assoc();
			$_SESSION['uid'] = $data['username'];
			$_SESSION['ulevel'] = $data['level'];
			if($data["level"]=='dosen'){
				$q="SELECT * FROM dosen WHERE `username`= '$username'";
				$r= $mysqli->query($q);
				$d=$r->fetch_assoc();
				$_SESSION['uname'] = $d['nama_dosen'];
				$nama=$d['nama_dosen'];
			}else if($data["level"]=='mahasiswa'){
				$q="SELECT * FROM mahasiswa WHERE `username`= '$username'";
				$r= $mysqli->query($q);
				$d=$r->fetch_assoc();
				$_SESSION['uname'] = $d['nama_mahasiswa'];
				$nama=$d['nama_mahasiswa'];
			}else if($data["level"]=='admin'){
				$_SESSION['uname'] = 'Administrator';
				$nama='Administrator';
			}
			 $nm=str_replace(" ","_",$nama);
						$_SESSION['username']=$nm;

				$mysqli->query("UPDATE user set `lastlogin` = now() WHERE username='$username'");

			echo "<script>document.location='../';</script>";
		}else{
			
			
			echo "<script>alert('Login Failed');document.location.href='./?level=$level';</script>";
		
		}
	}
	?>
	
      