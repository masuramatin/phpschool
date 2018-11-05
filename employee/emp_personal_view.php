  <?php include "../db/connection.php" ?>
            <?php
//query to retrieve data 
            $result = mysqli_query($con, "select * from school_emp_personal_info where id=".$_GET['id']);
//fetch data from result set
			$row = mysqli_fetch_array($result);
            
            ?>
<h4><?php print strtoupper($row['name']); ?>'s Information Details</h4>
<hr>
<table border="2" width="100%" class="table table-hover">
        <thead>
            <tr>
                <th>Employee's ID: </th>
                <td><?php print $row['id']; ?></td>
            </tr>
            <tr>    
                <th>Employee's Name : </th>
                <td><?php print $row['name']; ?></td>
            </tr>
            <tr>    
                <th>Father Name : </th>
                <td><?php print $row['father_name']; ?></td>
            </tr>
            <tr>    
                <th>Mother Name : </th>
                <td><?php print $row['mother_name']; ?></td>
            </tr>                
            <tr>    
                <th>Date of Birth : </th>
                <td><?php print $row['date_of_birth']; ?></td>
            </tr>                         
            <tr>
                <th>Religion : </th>
                <td><?php print $row['religion']; ?></td>
            </tr>
            <tr>
                <th>Sex : </th>
                <td><?php print $row['sex']; ?></td>
            </tr>
                        <tr>
                <th>Parmanent Address : </th>
                <td><?php print $row['parmanent_address']; ?></td>
            </tr>
            <tr>
                <th>Present Address : </th>
                <td><?php print $row['present_address']; ?></td>
            </tr>
            <tr>
                <th>National ID : </th>
                <td><?php print $row['national_id']; ?></td>
            </tr>
            <tr>
                <th>e-mail : </th>
                <td><?php print $row['email']; ?></td>
            </tr>
            <tr>
                <th>Phone : </th>
                <td><?php print $row['contact']; ?></td>
            </tr>
            </tr>
        </thead>

    </table>
