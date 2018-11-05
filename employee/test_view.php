<?php
//session_start();
//connect with database
include "../db/connection.php";

?>


<h4>Reference Information</h4>
    <hr />
<?php
//select query
$sql="select * from school_emp_reference_info where id=".$_GET['id'];
//query execution
$result=mysqli_query($con,$sql);
//fetch resultset
while ($row= mysqli_fetch_array($result)){
   ?>
<table border="1" width="50%" style="border:solid">

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
<div align="center"><a href="test.php">Close</a></div>