<?php
	if(isset($_POST['username']) && isset($_POST['nama']) && isset($_POST['nip']) && isset($_POST['tentang']) && isset($_POST['password']) && isset($_POST['tentang']) && isset($_POST['password']))
	{
		// include Database connection file 
		include("db_connection.php");

		// get values
		$username = $_POST['username']; 
		$nama = $_POST['nama'];
		$nip = $_POST['nip'];
		$kontak = $_POST['kontak'];
		$tentang = $_POST['tentang'];
		$password = $_POST['password'];

		$query = "INSERT INTO users(username, nama, nip, kontak, tentang, password) VALUES('$username', '$nama', '$nip', '$kontak', '$tentang', '$password')";
		if (!$result = mysql_query($query)) {
	        exit(mysql_error());
	    }
	    echo "1 Data telah ditambahkan!";
	}
?>