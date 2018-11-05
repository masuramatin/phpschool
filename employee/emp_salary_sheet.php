<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php

//session_start();
//connect with database
include "../db/connection.php";

?>
<fieldset>
<legend>Search</legend>
<select name="month_search">
<option value="January">January</option>
<option value="February">February</option>
<option value="March">March</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="August">August</option>
<option value="September">September</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option>
</select>
<select name="year_search">
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2022">2022</option>
<option value="2022">2022</option>
<option value="2024">2024</option>
<option value="2025">2025</option>
<option value="2026">2026</option>
<option value="2027">2027</option>
<option value="2028">2028</option>
</select>
<input type="submit" name="submit_search" value="search"  />
</fieldset>
<h3></h3>
<hr>
<form action="" method="post">
<div align="right">
Ongoing month: 
<input type="text" value="<?php print date('F'); ?>" name="month"  />
Ongoing year: 
<input type="text" value="<?php print date('y'); ?>" name="year"  />
</div>
<div class="container">
  <h2>Salary Sheet</h2>
  
  <table class="table">
    <thead>
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
    </thead>
    <tbody>
      
     
     
   

            <?php
$i=1;			
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
      	          
<tr class="info">
<td><input type="text" value="<?php print $emp_id;?>" 
name="<?php print "emp".$i ?>" /></td>
<td><input type="text" value="<?php print $row_basic_salary['basic_salary'];?>" name="<?php print "bsal".$i ?>" /></td>
<td><input type="text" value="<?php print ($row_basic_salary['basic_salary']*$row_basic_salary['house_rent'])/100;?>"  
name="<?php print "hrent".$i ?>"/></td>
<td><input type="text" value="<?php print ($row_basic_salary['basic_salary']*$row_basic_salary['convince'])/100;?>" name="<?php print "con".$i ?>" /></td>
<td><input type="text" value="<?php print ($row_basic_salary['basic_salary']*$row_basic_salary['medical'])/100;?>" name="<?php print "med".$i ?>" /></td>
<td><input type="text" value="<?php print ($row_basic_salary['basic_salary']*$row_basic_salary['provident_fund'])/100;?>" name="<?php print "pfund".$i ?>" /></td>

<td>
<input type="text" value="
<?php
//calculate gross salary
$gross = $row_basic_salary['basic_salary']+($row_basic_salary['basic_salary']*$row_basic_salary['house_rent'])/100+($row_basic_salary['basic_salary']*$row_basic_salary['convince'])/100+($row_basic_salary['basic_salary']*$row_basic_salary['medical'])/100+($row_basic_salary['basic_salary']*$row_basic_salary['provident_fund'])/100;

print $gross;
?>" name="<?php print "gsal".$i ?>" />
</td>
<td>
<?php 
//print $_POST['paid'][$i];
//if($_POST['paid'][$i]=='on'){
//print "checked";	
//}
//else {
//print "";	
//}
?> 

<input type="checkbox" name="paid[<?php print $i; ?>]" 

<?php
if(@$_POST['paid'][$i]=='on'){
?>
checked ="<?php print "checked"; } ?>"  
 
/>

</td>
</tr>		

           
<?php
//close of while loop
$i++;
			}
			
?>			
 </tbody>
  </table>

<input type="submit" value="submit" name="submit" />
</form>                    

<?php

if(isset($_POST['submit'])){
	
	//print_r($_POST);
	//print count($_POST);
	for($i=1;$i<=4;$i++){
		$emp = $_POST['emp'.$i];
		$bsal = $_POST['bsal'.$i];
		$hrent = $_POST['hrent'.$i];
		$con = $_POST['con'.$i];
		$med = $_POST['med'.$i];
		$pfund = $_POST['pfund'.$i];
		$gsal = $_POST['gsal'.$i];
		$paid= @$_POST['paid'][$i];
		$month = $_POST['month'];
		$year = $_POST['year'];
		$sql[$i] = "insert into school_emp_salary_status values(
		'',
		'$emp',
		'$bsal',
		'$hrent',
		'$con',
		'$med',
		'$pfund',
		'$gsal',
		'$month',
		'$year',
		'$paid',
		'1'
		)
		";
		$con = mysqli_connect("localhost","root","","school");
		if($result_del=mysqli_multi_query($con,$sql[$i])){
		print "inserted";	
		}
		else
		{
			die('Error: ' . mysqli_error($con));
		}
	}
}
?>