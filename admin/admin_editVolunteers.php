<?php 
require_once('admin/phpscripts/init.php');

$tblC = "tbl_copy";
$filter = $_GET['filter'];


$tblV = "tbl_volunteers";
$getVolunteers = getVol($tblV);
?>