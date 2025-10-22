<?php
include("dbcon.php");

$visitDate = $_POST['visitDate'];
$visitTime = $_POST['visitTime'];
$docId = $_POST['docid'];
$ptntId = $_POST['ptntid'];
$cost = $_POST['cost'];

$sql = "INSERT INTO visit (visit_date, visit_time, doctor_id, patient_id, cost)
        VALUES ('$visitDate', '$visitTime', $docId, $ptntId, $cost);";

echo $sql;

mysqli_query($conn, $sql);

mysqli_close($conn);
?>
