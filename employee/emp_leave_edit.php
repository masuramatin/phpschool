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
$sql="select * from school_employee_leave where employee_id=".$_GET['id'];
//query execution
$result=mysqli_query($con,$sql);

//fetch resultset
$row = mysqli_fetch_array($result);

?>



<!-- Form start  -->


<p>
<div class="container">

    <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
        <div class="form-group">        
            <label class="control-label col-sm-3" for="employee_id">Employee ID :</label>
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
        
            <label class="control-label col-sm-3" for="name">leave Type :</label>
            <div class="col-sm-9"> 
            	<select class="form-control" name="leave_type" id="leave_type" placeholder="" required>
                	<option value="<?php print $row['leave_type']; ?>"><?php print $row['leave_type']; ?></option>
                    <option value="casuel">Casuel</option>
                    <option value="suck">Suck</option>
                    <option value="general">General</option>
                </select>
            

            </div>
        </div>
       
        <div class="form-group">
        
            <label class="control-label col-sm-3" for="name">Leave From :</label>
            <div class="col-sm-9">
                <input type="date" value="<?php print $row['leave_from']; ?>" class="form-control" name="leave_from" id="leave_from" placeholder="" required>
            </div>
        </div>
        <div class="form-group">
        
            <label class="control-label col-sm-3" for="name">Leave To :</label>
            <div class="col-sm-9">
                <input type="date" value="<?php print $row['leave_to']; ?>" class="form-control" name="leave_to" id="leave_to" placeholder="" required>
            </div>
        </div>
        <div class="form-group">
        
            <label class="control-label col-sm-3" for="approved_status">Approved Status :</label>
            <div class="col-sm-9"> 
                <select class="form-control" name="approved_status" id="approved_status" placeholder="" required>
                    <option value="<?php print $row['approved_status']; ?>"><?php print $row['approved_status']; ?></option>
                    <option value="pending">Pending</option>
                    <option value="append">Append</option>
                    <option value="active">Active</option>
                </select>
            

            </div>
            </div>    
        
            
            
        <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-9">
                <button type="submit" name="update" id="update" class="btn btn-default">Update</button>
            </div>
           

        </div>
    </form>
</div>
</p>


<!-- Form end -->
<?php
// edit
if(isset($_POST['update'])){
	$employee_id=$_POST['employee_id'];
    $leave_type = $_POST['leave_type'];
	$leave_from = $_POST['leave_from'];
	$leave_to = $_POST['leave_to'];
	$approved_status = $_POST['approved_status'];


//edit query
$sql_edit = "
update school_employee_leave
set 
employee_id='$employee_id' ,
leave_type='$leave_type' ,
leave_from='$leave_from' ,
leave_to='$leave_to' ,
approved_status='$approved_status'

 


where employee_id=".$_GET['id'];

//query execution
$result_edit=mysqli_query($con,$sql_edit);

//redirect

?>
<script>
window.location = "emp_leave_info.php";
</script>
<?php	
}
?>
