<?php
//session_start();
//connect with database
include "../db/connection.php";

?>


<h4>Transaction Information</h4>
    <hr />
<?php
//select query
$sql="select * from school_acc_trailbalance where id=".$_GET['id']; 
//query execution
$result=mysqli_query($con,$sql);
//fetch resultset
while ($row= mysqli_fetch_array($result)){
   ?>
<table border="1" width="100%" style="border:solid">

            <tr>
                <th>Serial No:</th>
                <td><?php print $row['serialno']; ?></td>                             
            </tr>
            <tr>
            	<th>Description:</th>
                <td><?php print $row['description']; ?></td>
            </tr>
            <tr>
            	<th>Reference:</th>
                <td><?php print $row['reference']; ?></td>
            </tr>
            <tr>
            	<th>Debit (amount):</th>
                <td><?php print $row['debitamm']; ?></td>
            </tr>
           <tr>
            	<th>Credit (amount):</th>
                <td><?php print $row['creditam']; ?></td>
            </tr>
    </table>


<?php
    
}

?>
<div align="center"><a href="acc_trailbalance.php">Close</a></div>