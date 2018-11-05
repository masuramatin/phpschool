<?php
//session_start();
//connect with database
include "../db/connection.php";

?>


<h4>Employee Reference Information</h4>
    <hr />
<?php
//select query
$sql="select * from school_emp_reference_info where employee_id=".$_GET['id'];
$sql1 = "select * from school_emp_personal_info where employee_id=".$_GET['id'];

//query execution
$result=mysqli_query($con,$sql);
$result1=mysqli_query($con,$sql1);

//fetch resultset
while ($row= mysqli_fetch_array($result)){
   ?>

<table border="1" width="50%">

            <tr>
                <th>Employee ID:</th>
                <td><?php print $row['employee_id']; ?></td>                             
            </tr>
            <tr>
                <th>Name:</th>
                <td><?php print $row['name']; ?></td>                             
            </tr>
            <tr>
            	<th>Designation:</th>
                <td><?php print $row['designation']; ?></td>
            </tr>
            <tr>
            	<th>Address:</th>
                <td><?php print $row['address']; ?></td>
            </tr>
            <tr>
            	<th>Email:</th>
                <td><?php print $row['email']; ?></td>
            </tr>

            <tr>
            	<th>Contact:</th>
                <td><?php print $row['contact']; ?></td>                
            </tr>
    </table>


<?php
    
}

?>
<div align="center"><a href="emp_reference_info.php">Close</a></div>