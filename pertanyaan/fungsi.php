<?php  
	
$query = mysqli_query($connect, "SELECT data_register.username, data_hasil.tanggal, data_hasil.hasil
FROM data_register INNER JOIN data_hasil
ON data_register.id_register = data_hasil.id_register");

$result = mysql_query($query);

while($buku = mysql_fetch_array($result)){

}

?>