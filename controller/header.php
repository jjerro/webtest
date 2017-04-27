<?php


// Get the application settings and parameters

require_once "../controller/params.php";
//require_once ROOT."../includes/classes/session.php";
require_once ROOT."../controller/dbconfig.php";
require_once ROOT."../controller/commons.php";

// Start the session if it's not yet started 
// and make it available on 
// all pages which include the header.php

// Get some common objects ready for various files
$dbh    = new Dbconnect();
$commons = new Commons($dbh);