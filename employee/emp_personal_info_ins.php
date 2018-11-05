<?php
//session_start();
//connect with database
include "../db/connection.php";

?>
<?php
// insertion

//take value
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $dob = $_POST['dob'];
	$rel = $_POST['rel'];
	$sex = $_POST['sex'];
	$padd = $_POST['padd'];
	$pradd = $_POST['pradd'];
	$nid = $_POST['nid'];
	$email = $_POST['email'];
	$phn = $_POST['phn'];
//insert query
$sql_ins = "insert into  school_emp_personal_info values ('','$name','$fname','$mname','$dob','$rel','$sex','$padd','$pradd','$nid','$email','$phn',1);";

//query execution
$result_del=mysqli_query($con,$sql_ins);

}
//redirect

?>
<script>
//window.location="emp_personal_info.php";

</script>