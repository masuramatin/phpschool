<?php
//session_start();
//connect with database
include "../db/connection.php";

?>
<?php
//insertion
if(isset($_POST['submit'])){
	$employee_id = $_POST['employee_id'];
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    
// query for insertion
$sql_ins = "insert into school_emp_reference_info values ('','$employee_id','$name','$designation','$address','$email','$contact',1);";

//query execution

$result_ins=mysqli_query($con,$sql_ins);

?>
<script>
window.location="emp_reference_info.php";

</script>
<?php
}
?>
