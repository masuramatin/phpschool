<?php
//session_start();
//connect with database
include "../db/connection.php";
?>

<?php
//insertion
if(isset($_POST['submit'])){
	$employee_id = $_POST['employee_id'];
    $education = $_POST['education'];
    $passing = $_POST['passing'];
    $result = $_POST['result'];
    $institute = $_POST['institute'];
    
// query for insertion
$sql_ins = "insert into school_emp_edu_info values ('','$employee_id','$education','$passing','$result','$institute',1);";

//query execution

$result_ins=mysqli_query($con,$sql_ins);

?>
<script>
window.location="emp_edu_info.php";

</script>
<?php
}
?>
