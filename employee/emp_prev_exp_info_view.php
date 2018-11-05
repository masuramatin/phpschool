<?php
//session_start();
//connect with database
include "../db/connection.php";

?>


<h4>Employee Previous Experience Information</h4>
    <hr />
<?php
//select query
$sql="select * from school_emp_prev_exp where employee_id=".$_GET['id'];
$sql1 = "select * from school_emp_personal_info where employee_id=".$_GET['id'];

//query execution
$result=mysqli_query($con,$sql);
$result1=mysqli_query($con,$sql1);

//fetch resultset
while ($row= mysqli_fetch_array($result)){
   ?>
    
    <table border="1" width="100%">
    
                <tr>
                    <th>Employee ID:</th>
                    <td><?php print $row['employee_id']; ?></td>                             
                </tr>
                <tr>
                    <th>Institute Name:</th>
                    <td><?php print $row['institute_name']; ?></td>                             
                </tr>
                <tr>
                    <th>Joining Date:</th>
                    <td><?php print $row['joining_date']; ?></td>
                </tr>
                <tr>
                    <th>Resignation Date:</th>
                    <td><?php print $row['resignation_date']; ?></td>
                </tr>
                <tr>
                    <th>Salary:</th>
                    <td><?php print $row['salary']; ?></td>
                </tr>
    
                <tr>
                    <th>Reason:</th>
                    <td><?php print $row['reason']; ?></td>                
                </tr>
                <tr>
                    <th>Reference:</th>
                    <td><?php print $row['reference']; ?></td>                
                </tr>
                <tr>
                    <th>Reference:</th>
                    <td><?php print $row['reference_contact']; ?></td>                
                </tr>
     </table>


<?php
    
}

?>
<div align="center"><a href="emp_prev_exp_info.php">Close</a></div>