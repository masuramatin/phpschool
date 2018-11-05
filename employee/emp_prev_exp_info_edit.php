<?php
//session_start();
//connect with database
include "../db/connection.php";

?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php
// retrieve

//select query
$sql="select * from school_emp_prev_exp where employee_id=".$_GET['id'];

//query execution
$result=mysqli_query($con,$sql);

//fetch resultset
$row = mysqli_fetch_array($result);

?>
<!-- Form start  -->
<div class="container">
    <h4>Employee Previous Experience Information Edit</h4>
    <hr />
    <form class="form-horizontal" method="post" action="" >
        <div class="form-group">
        
            <label class="control-label col-sm-3" for="employee_id">Employee ID:</label>
            <div class="col-sm-9">
            <?php
		   //query to get id from employee personal information table
		   		$sql1 = "select * from school_emp_personal_info where status=1";
		   //query execution
		   $result1=mysqli_query($con,$sql1);
		   ?>
           		<select name="employee_id" id="employee_id">
 						<option value="<?php print $row['employee_id']; ?>"><?php print $row['employee_id']; ?></option>
                            
                           <?php
                            while($row1 = mysqli_fetch_array($result1)){
							?>                            
                         <option value="<?php echo $row1['id']; ?>"><?php echo $row1['id']; ?></option>
							<?php } ?>
                 </select>
                
            </div>
        </div>
        <div class="form-group">
        
            <label class="control-label col-sm-3" for="institute_name">Institute Name :</label>
            <div class="col-sm-9">
                <input type="text" value="<?php print $row['institute_name']; ?>" class="form-control" name="institute_name" id="institute_name" placeholder="Enter Institute Name">
            </div>
        </div>
       
        <div class="form-group">
            <label class="control-label col-sm-3" for="joining_date">Joining Date :</label>
            <div class="col-sm-9"> 
                <input type="date" value="<?php print $row['joining_date']; ?>" class="form-control" name="joining_date" id="joining_date">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="resignation_date">Resignation Date :</label>
            <div class="col-sm-9"> 
                <input type="date" value="<?php print $row['resignation_date']; ?>" class="form-control" name="resignation_date" id="resignation_date">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="salary">Salary :</label>
            <div class="col-sm-9"> 
                <input type="text" value="<?php print $row['salary']; ?>" name="salary" class="form-control" id="salary" placeholder="Enter Salary">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="reason">Reason :</label>
            <div class="col-sm-9"> 
                <textarea name="reason" id="reason" cols="118" rows="4"><?php print $row['reason']; ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="reference">Reference :</label>
            <div class="col-sm-9"> 
                <input type="text" value="<?php print $row['reference']; ?>" name="reference" class="form-control" id="reference" placeholder="Enter Reference">
            </div>
        </div>       
        <div class="form-group">
            <label class="control-label col-sm-3" for="reference_contact">Reference Contact:</label>
            <div class="col-sm-9"> 
                <input type="text" value="<?php print $row['reference_contact']; ?>" name="reference_contact" class="form-control" id="reference_contact" placeholder="Enter Reference Contact Number">
            </div>
        </div>
        <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-9">
                <button type="submit" name="update" id="update" class="btn btn-default">Update</button>
                <button class="btn btn-active" name="cencel" id="cencel"><a href="emp_prev_exp_info.php" style="text-decoration:none">Cencel</a></button>
            </div>
        </div>
    </form>
</div>


<!-- Form end -->
<?php
// edit
if(isset($_POST['update'])){
	
    $institute_name = $_POST['institute_name'];
	$joining_date = $_POST['joining_date'];
	$resignation_date = $_POST['resignation_date'];
    $salary = $_POST['salary'];
    $reason = $_POST['reason'];
    $reference = $_POST['reference'];
    $reference_contact = $_POST['reference_contact'];
//edit query
$sql_edit = "
update school_emp_prev_exp
set 

institute_name='$institute_name',
joining_date='$joining_date' ,
resignation_date='$resignation_date' ,
salary='$salary' ,
reason='$reason' ,
reference='$reference' ,
reference_contact='$reference_contact' 
where employee_id=".$_GET['id'];

//query execution
$result_edit=mysqli_query($con,$sql_edit);

//redirect

?>
<script>
window.location = "emp_prev_exp_info.php";
</script>
<?php	
}
?>
