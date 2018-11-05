<?php
include "../db/connection.php";
	//delete data from table
	@mysqli_query($con,"delete from school_employee_leave where employee_id=".$_GET['id']);
?>

<script>
window.location="emp_leave_info.php";

</script>