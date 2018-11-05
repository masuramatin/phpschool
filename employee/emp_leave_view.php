<?php
//session_start();
//connect with database
include "../db/connection.php";

?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



            <?php
//query to retrieve data 
            $result = mysqli_query($con, "select * from school_employee_leave where employee_id=".$_GET['id']);
			$sql1 = "select * from school_emp_personal_info where employee_id=".$_GET['id'];

//fetch data from result set
			$row = mysqli_fetch_array($result);
            $result1=mysqli_query($con,$sql1);
            ?>

            <div class="container">
            
<h2>Leave Information Details</h2><hr>
<table border="2" width="50%" class="table table-hover">
        <thead>
       	 	<tr>
                <th>Employee ID :</th>
                <td><?php print $row['employee_id']; ?></td>                             
            </tr>
            <tr>

            
                <th>Leave Type</th>
                <td><?php print$row['leave_type']; ?></td>
            </tr>


            
            <tr>    
                <th>Leave From</th>
                <td><?php print$row['leave_from']; ?></td>
            </tr>
            <tr>    
                <th>Leave To</th>
                <td><?php print$row['leave_to']; ?></td>
            </tr>
            <tr>    
                <th>Approved Status</th>
                <td><?php print$row['approved_status']; ?></td>
            </tr> 
            
            <tr>    
                <th>Status</th>
                <td><?php print$row['status']; ?></td>
            </tr>
                                  
            
                                      
                
            </tr>
        </thead>

    </table>

<div align="right"><a href="emp_leave_info.php"><button class="btn btn-default">Close</button></a></div>
</div>