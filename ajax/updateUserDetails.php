<?php
// include Database connection file
include("db_connection.php");

// check request
if(isset($_POST))
{
    // get values
    $id = $_POST['id'];
    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $nip = $_POST['nip'];
    $tentang = $_POST['tentang'];

    // Updaste User details
    $query = "UPDATE users SET username = '$username', nama = '$nama', nip = '$nip', tentang = '$tentang' WHERE id = '$id'";
    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }
}