<?php
//session_start();
//connect with database
include "../db/connection.php";

?>
<?php
// insertion

//take value
if(isset($_POST['submit'])){
    $date = $_POST['date'];
    $description = $_POST['description'];
    $reference = $_POST['reference'];
    $ammount = $_POST['ammount'];
	$type = $_POST['type'];
//insert query
$sql_ins = "insert into school_acc_cashbook values ('','$date','$description','$reference','$ammount','$type',1);";

//query execution
$result_del=mysqli_query($con,$sql_ins);

}
//redirect

?>
<script>
window.location="acc_cashbook.php";

</script>