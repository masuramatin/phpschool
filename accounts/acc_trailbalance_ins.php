<?php
//session_start();
//connect with database
include "../db/connection.php";

?>
<?php
// insertion

//take value
if(isset($_POST['submit'])){
    $serialno = $_POST['serialno'];
    $description = $_POST['description'];
    $reference = $_POST['reference'];
    $debitamm = $_POST['debitamm'];
	$creditam = $_POST['creditam'];
//insert query
$sql_ins = "insert into school_acc_trailbalance values ('','$serialno','$description','$reference','$debitamm','$creditam',1);";

//query execution
$result_del=mysqli_query($con,$sql_ins);

}
//redirect

?>
<script>
window.location="acc_trailbalance.php";

</script>