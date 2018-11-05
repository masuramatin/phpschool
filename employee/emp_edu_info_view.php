<?php
//session_start();
//connect with database
include "../db/connection.php";
?>


<button class="modal-title" class="btn btn-success" style="color:#F00";><h1>Teacher Education Information</h1></button>       
    <hr />
<?php
//select query
$sql="select * from school_emp_edu_info where employee_id=".$_GET['id'];
$sql1 = "select * from school_emp_personal_info where employee_id=".$_GET['id'];
 
//query execution
$result=mysqli_query($con,$sql);
$result1=mysqli_query($con,$sql1);

//fetch resultset
while ($row= mysqli_fetch_array($result)){

   ?>
<table border="1" width="50%" style="border:solid">

            <tr>
                <th align="right">Employee ID :</th>
                <td>&nbsp; &nbsp;<?php print $row['employee_id']; ?> </td>           
            </tr>
            <tr>
                <th align="right">Education Type :</th>
                <td>&nbsp; &nbsp;<?php print $row['education_type']; ?></td>           
            </tr>
            <tr>
            	<th align="right">Passing Year :</th>
                <td>&nbsp; &nbsp;<?php print $row['passing_year']; ?></td>
            </tr>
            <tr>
            	<th align="right">Result :</th>
                <td>&nbsp; &nbsp;<?php print $row['result']; ?></td>
            </tr>
            <tr>
            	<th align="right">Institute :</th>
                <td>&nbsp; &nbsp;<?php print $row['institute']; ?> </td>
            </tr>
    </table>


<?php
    
}
?>

   <div align="center"><a href="emp_edu_info.php"><button class="btn btn-danger" style="color:#F00";>Close</button></a></div>