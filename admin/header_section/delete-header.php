<?php
session_start();
require_once '../dashboard_includes/db.php';
// get id value from url
$id = $_GET["id"];
//delete query syntax
$delete = "DELETE FROM `header` WHERE id = $id";
//delete the user
$run_query = mysqli_query($db_connect, $delete);
$_SESSION["success"] = "Deleted Successfully";
//go to preview page
header('Location: ' . $_SERVER['HTTP_REFERER']);
