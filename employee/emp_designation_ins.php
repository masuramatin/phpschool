<?php
//session_start();
//connect with database
include "../db/connection.php";
?>
<?php
//insertion
if(isset($_POST['submit'])){
    $emp_id = $_POST['emp_id'];
    $designation = $_POST['designation'];
	
    
// query for insertion
$sql_ins = "insert into school_emp_designation values ('',$emp_id,'$designation',1)";
//query execution

$result_ins=mysqli_query($con,$sql_ins);

?>
<script>
window.location="emp_designation_info.php";

</script>
<?php
}
?>
