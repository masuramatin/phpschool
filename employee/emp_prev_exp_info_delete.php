<?php
//session_start();
//connect with database
include "../db/connection.php";

?>
<?php
// delete

//delete query
$sql_del = "delete from school_emp_prev_exp where employee_id=".$_GET['id'];

//query execution
$result_del=mysqli_query($con,$sql_del);




?>
<!-- redirect -->
<script>
window.location="emp_prev_exp_info.php";

</script>
