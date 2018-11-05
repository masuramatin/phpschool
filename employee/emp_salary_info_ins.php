<?php
//session_start();
//connect with database
include "../db/connection.php";

?>
<?php
// insertion

//take value
if(isset($_POST['submit'])){
    $deg = $_POST['deg'];
    $bsal = $_POST['bsal'];
    $hrent = $_POST['hrent'].'%';
    $conv = $_POST['conv'].'%';
	$med = $_POST['med'].'%';
	$pfund = $_POST['pfund'].'%';
	
//insert query
$sql_ins = "insert into  school_emp_salary_info values ('','$deg','$bsal','$hrent','$conv','$med','$pfund',1);";

//query execution
$result_del=mysqli_query($con,$sql_ins);

}
//redirect

?>
<script>
window.location="emp_salary_info.php";

</script>