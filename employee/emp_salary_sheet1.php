<?php
//session_start();
//connect with database
include "../db/connection.php";

?>
<h3>Salary Sheet</h3>
<hr>
<form action="" method="post">
<table width="80%" border=1>
	<tr>
    	<th>Employee ID</th>
        <th>Basic Salary</th>
        <th>House Rent</th>
        <th>Convince</th>
        <th>Medical</th>
        <th>Provident Fund</th>
        <th>Gross</th>
        <th>Action</th>
    </tr>
            <?php
//query to retrieve data 
            $result = mysqli_query($con, "select * from school_emp_designation where status=1 ");
//fetch data from result set

//while start here
            while ($row = mysqli_fetch_array($result)) {
				$emp_id=$row['emp_id'];
				$designation = $row['designation'];
//query to retrieve data 
				$sql_basic_salary = "select * from school_emp_salary_info where designation='".$designation."'";
            $result_basic_salary = mysqli_query($con, $sql_basic_salary);
//fetch basic salary
$row_basic_salary = mysqli_fetch_array($result_basic_salary);
							
                ?> 
      	          
<tr>
<td><?php print $emp_id;?></td>
<td><?php print $row_basic_salary['basic_salary'];?></td>
<td><?php print ($row_basic_salary['basic_salary']*$row_basic_salary['house_rent'])/100;?></td>
<td><?php print ($row_basic_salary['basic_salary']*$row_basic_salary['convince'])/100;?></td>
<td><?php print ($row_basic_salary['basic_salary']*$row_basic_salary['medical'])/100;?></td>
<td><?php print ($row_basic_salary['basic_salary']*$row_basic_salary['provident_fund'])/100;?></td>

<td>
<?php
//calculate gross salary
$gross = $row_basic_salary['basic_salary']+($row_basic_salary['basic_salary']*$row_basic_salary['house_rent'])/100+($row_basic_salary['basic_salary']*$row_basic_salary['convince'])/100+($row_basic_salary['basic_salary']*$row_basic_salary['medical'])/100+($row_basic_salary['basic_salary']*$row_basic_salary['provident_fund'])/100;

print $gross;
?>
</td>
<td><input type="checkbox" name="<?php 
'paid'.$row_basic_salary['id']; ?>  ?>"/></td>
</tr>		

           
<?php
//close of while loop
			}
			
?>			
</table> 

<input type="submit" value="submit" name="submit" />
</form>                    