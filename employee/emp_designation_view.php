<?php
//session_start();
//connect with database
include "../db/connection.php";
?>


<button class="modal-title" class="btn btn-success"><h1>Employee Designation Information</h1></button>       
    <hr />
<?php
//select query
$sql="select * from school_emp_designation where id=".$_GET['id'];

 
//query execution
$result=mysqli_query($con,$sql);

//fetch resultset
while ($row= mysqli_fetch_array($result)){

   ?>
<table border="1" width="60%" style="border:solid">

            <tr>
                <th align="right">ID :</th>
                <td>&nbsp; &nbsp;<?php print $row['id']; ?> </td>           
            </tr>
            <tr>
                <th align="right">Employee ID :</th>
                <td>&nbsp; &nbsp;<?php print $row['emp_id']; ?></td>           
            </tr>
            <tr>
            	<th align="right">Designation :</th>
                <td>&nbsp; &nbsp;<?php print $row['designation']; ?></td>
            </tr>
    </table>


<?php
    
}
?>

   <div align="center"><a href="emp_designation_info.php"><button class="btn btn-danger" style="color:#F00";>Close</button></a></div>