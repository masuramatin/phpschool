<?php
//session_start();
//connect with database
include "../db/connection.php";

?>
<?php
//insertion
if(isset($_POST['submit'])){
	$employee_id = $_POST['employee_id'];
    $institute_name = $_POST['institute_name'];
	$joining_date = $_POST['joining_date'];
	$resignation_date = $_POST['resignation_date'];
    $salary = $_POST['salary'];
    $reason = $_POST['reason'];
    $reference = $_POST['reference'];
    $reference_contact = $_POST['reference_contact'];
    
// query for insertion
$sql_ins = "insert into school_emp_prev_exp values ('','$employee_id','$institute_name','$joining_date','$resignation_date','$salary','$reason','$reference','$reference_contact',1);";

//query execution

$result_ins=mysqli_query($con,$sql_ins);

?>
<script>
window.location="emp_prev_exp_info.php";

</script>
<?php
}
?>
