  <?php include "../db/connection.php" ?>
            <?php
//query to retrieve data 
            $result = mysqli_query($con, "select * from school_emp_salary_info where id=".$_GET['id']);
//fetch data from result set
			$row = mysqli_fetch_array($result);
            
            ?>
<h4><?php print strtoupper($row['designation']); ?>'s Salary Information Details</h4>
<hr>
<table border="2" width="100%" class="table table-hover">
        <thead>
            <tr>
                <th>Employee ID: </th>
                <td><?php print $row['id']; ?></td>
            </tr>
            <tr>    
                <th>Employee Designation : </th>
                <td><?php print $row['designation']; ?></td>
            </tr>
            <tr>    
                <th>Basic Salary : </th>
                <td><?php $basic=$row['basic_salary']; print $basic; ?></td>
            </tr>
            <tr>    
                <th>House Rent : </th>
                <td><?php print $row['3']; ?></td> 	
					 
            </tr>                
            <tr>    
                <th>Convince : </th>
                <td><?php print $row['4']; ?></td> 	
            </tr>                         
            <tr>
                <th>Medical : </th>
                <td><?php print $row['5']; ?></td> 	
            </tr>
            <tr>
                <th>Provident Fund : </th>
                <td><?php print $row['6']; ?></td> 
            </tr>
                   
                
            
        </thead>

    </table>
    <a href="emp_salary_info.php">close</a>
