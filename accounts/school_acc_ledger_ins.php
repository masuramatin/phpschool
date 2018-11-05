<?php
//session_start();
//connect with database
include "../db/connection.php";

?>
<?php
// insertion

//take value
if(isset($_POST['submit'])){
    $dates = $_POST['dates'];
    $description = $_POST['description'];
    $referance = $_POST['referance'];
    $debit = $_POST['debit'];
	$credit = $_POST['credit'];
//insert query
$sql_ins = "insert into school_acc_ledger values ('','$dates','$description','$referance','$debit','$credit',1);";

//query execution
$result_del=mysqli_query($con,$sql_ins);

}
//redirect

?>
<script>
window.location="school_acc_ledger.php";

</script>