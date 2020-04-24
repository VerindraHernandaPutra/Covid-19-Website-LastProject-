<html>
<head>
	<title> Register Aplikasi Info Covid19 </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="../aset/jquery.js"></script>
</head>
<body>
 
	<div class="kotak_login">
		<center> <img src="mouth-mask.png" style="border-radius: 50%" width="150" height="150"> </center>

		<p class="tulisan_login">Silahkan daftar</p>
 
		<form action="proses_daftar.php" method="post">
			
			<div class="form-group">
    			<label> Nama </label>
    			<input type="text" name="nama" class="form-login" placeholder="Masukkan Nama .." required>
  			</div>
 
			<div class="form-group">
    			<label> Tanggal Lahir </label>
    			<input type="date" name="tanggal_lahir" class="form-login" required>
  			</div>

  			<div class="form-group">
    			<label> Username </label>
    			<input type="text" name="username" class="form-login" placeholder="Masukkan Username .." required>
  			</div>
 
			<div class="form-group">
    			<label> Password </label>
    			<input type="password" name="password" class="form-password" placeholder="Masukkan Password .." required>
  			</div>

  			<div class="checkbox">
              	<input type="checkbox" class="form-checkbox"> Show Password
            </div>
 			
 			<br>
 
			<input type="submit" class="tombol_register" name="simpan" value="REGISTER">
 
			<br>
			<br>
			<center>
				<a class="link" href="http://localhost/Info_Covid19/login/login.php">Login</a>
			</center>
			
		</form>
		
	</div>


	<!-- Menampilkan dan Menyembunyikan Password -->
	<script type="text/javascript">
		$(document).ready(function(){		
			$('.form-checkbox').click(function(){
				if($(this).is(':checked')){
					$('.form-password').attr('type','text');
				}else{
					$('.form-password').attr('type','password');
				}
			});
		});
	</script>


</body>
</html>