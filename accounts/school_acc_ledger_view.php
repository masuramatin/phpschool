<?php
//session_start();
//connect with database
include "../db/connection.php";

?>


<h4>Ledger Information</h4>
    <hr />
<?php
//select query
$sql="select * from school_acc_ledger where id=".$_GET['id']; 
//query execution
$result=mysqli_query($con,$sql);
//fetch resultset
while ($row= mysqli_fetch_array($result)){
   ?>
<table border="1" width="100%" style="border:solid">

            <tr>
                <th>Date:</th>
                <td><?php print $row['dates']; ?></td>                             
            </tr>
            <tr>
            	<th>Description:</th>
                <td><?php print $row['description']; ?></td>
            </tr>
            <tr>
            	<th>Reference:</th>
                <td><?php print $row['referance']; ?></td>
            </tr>
            <tr>
            	<th>Debit (amount):</th>
                <td><?php print $row['debit']; ?></td>
            </tr>
           <tr>
            	<th>Credit (amount):</th>
                <td><?php print $row['credit']; ?></td>
            </tr>
    </table>


<?php
    
}

?>
<div align="center"><a href="school_acc_ledger.php">Close</a></div>