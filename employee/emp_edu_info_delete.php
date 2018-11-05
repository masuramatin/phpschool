<?php
//session_start();
//connect with database
include "../db/connection.php";

?>
<?php
// delete

//delete query
$sql_del = "delete from school_emp_edu_info where employee_id=".$_GET['id'];

//query execution
$result_del=mysqli_query($con,$sql_del);




?>
<!-- redirect -->
<script>
window.location="emp_edu_info.php";

</script>
