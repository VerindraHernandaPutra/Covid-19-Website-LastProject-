
<html>
<head>
	<title> Login Aplikasi Info Covid19 </title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <script src="../aset/jquery.js"></script>
</head>
<body>
 
	<div class="kotak_login">
		<center> <img src="mouth-mask.png" style="border-radius: 50%" width="150" height="150"> </center>

		<p class="tulisan_login">Silahkan login</p>
 
		<form action="proses_login.php" method="post">

			<div class="form-group">
    			<label> Username </label>
    			<input type="text" name="username" class="form-login" placeholder="Masukkan Username ..">
  			</div>
 
			<div class="form-group">
    			<label> Password </label>
    			<input type="password" name="password" class="form-password" id="password-input" placeholder="Masukkan Password ..">
  			</div>

  			<div class="checkbox">
              	<input type="checkbox" id="enable-show" class="form-checkbox"> Show Password
            </div>
 			
 			<br>

			<input type="submit" class="tombol_login" name="simpan" value="LOGIN">
 
			<br>
			<br>
			<center>
				<a class="link" href="http://localhost/Info_Covid19/login/register.php">kembali</a>
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