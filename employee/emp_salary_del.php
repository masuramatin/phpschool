<?php include "../db/connection.php" ?>
<?php
//delete data from table
@mysqli_query($con,"delete from school_emp_salary_info where id=".$_GET['id']);


?>
<script>
window.location="emp_salary_info.php";
</script>
