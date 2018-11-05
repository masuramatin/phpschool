<?php
//session_start();
//connect with database
include "../db/connection.php";

?>
<?php
// delete

//delete query
$sql_del = "delete from school_emp_salary_info where id=".$_GET['id'];

//query execution
$result_del=mysqli_query($con,$sql_del);


//redirect

?>
<script>
window.location="emp_salary_info.php";

</script>