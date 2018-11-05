<?php
//session_start();
//connect with database
include "../db/connection.php";

?>
<?php
// delete

//delete query
$sql_del = "delete from school_acc_ledger where id=".$_GET['id'];

//query execution
$result_del=mysqli_query($con,$sql_del);




?>
<!-- redirect -->
<script>
window.location="school_acc_ledger.php";

</script>
