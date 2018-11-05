<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php
//session_start();
//connect with database
include "../db/connection.php";

?>
<?php
//insertion
    $fdate = $_POST['fdate'];
    $tdate = $_POST['tdate'];
	
	
// query for insertion
$sql = "SELECT * FROM `school_employee_leave` WHERE leave_from>='$fdate' and leave_from<='$tdate'";


//query execution

$result=mysqli_query($con,$sql);


// query for total leave
//$sq = "SELECT total_leave, (`leave_to`-`leave_from`) FROM `school_employee_leave` WHERE employee_id =".$search;
//$r=mysqli_query($con,$sq);

// $w = mysqli_fetch_array($r);








?>


    <table class="table">
        <thead>

            <tr>
            	<th>Employee ID</th>
                <th>Leave Type</th>
                <th>Leave From</th>
                <th>Leave To</th>
                <th>Apporved Status</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
        
     <?php

	//fetch data from result set
$i=1;
            while ($row = mysqli_fetch_array($result)) {
                ?>        
                <tr>
                    <td>
                    <input type="hidden" id="id" name="id" value="<?php print $row['id']; ?>">
					<?php print $row['employee_id']; ?>					
                    </td>
                    <td><?php print $row['leave_type']; ?></td>
                    <td><?php print $row['leave_from']; ?></td>
                    <td><?php print $row['leave_to']; ?></td>
                    <td><?php print $row['approved_status']; ?></td>
                    <td><a href="emp_leave_edit.php?id=<?php print $row['employee_id']; ?>" id="edit"><button class="btn btn-primary">Edit</button></a></td>
                    <td><a href="emp_leave_delete.php?id=<?php print $row['employee_id']; ?>" id="delete"><button class="btn btn-danger">Delete</button></a></td>   
                        
                    <td><a href="emp_leave_view.php?id=<?php print $row['employee_id']; ?>" id="view"><button class="btn btn-info" >View</button></a></td>            
                </tr>
                <?php
				$i++;
            }
            ?>

        </tbody>
    </table>
    
