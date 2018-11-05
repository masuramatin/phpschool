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
$sql="select * from school_emp_designation where emp_id=".$_GET['id'];
//query execution
$result=mysqli_query($con,$sql);

//fetch resultset
$row = mysqli_fetch_array($result);

?>
<!-- Form start  -->
<div class="container"> 

						<button class="modal-title" class="btn btn-success"><h4>Designation Information Edit : </h4></button>
   <hr />
    <form class="form-horizontal" method="post" action="" >
        
                   <div class="form-group">
            <label class="control-label col-sm-3" for="emp_id">Employee ID:</label>
            <div class="col-sm-9"> 
            
            <?php
		   //query to get id from personal information table
		   		$sql_edit_data = "select * from school_emp_designation where status=1 and id=".$_GET['id'];
		   //query execution
		   $result_edit_data=mysqli_query($con,$sql_edit_data);			
$row_edit_data = mysqli_fetch_array($result_edit_data);
			
		   //query to get id from personal information table
		   		$sql1 = "select * from school_emp_personal_info where status=1";
		   //query execution
		   $result1=mysqli_query($con,$sql1);
		   ?>            
            
                    <select name="emp_id" id="emp_id">
 					<option value="<?php print $row_edit_data['emp_id'];  ?>"><?php print $row_edit_data['emp_id'];  ?></option>		
                            
                             <?php
                            while($row1 = mysqli_fetch_array($result1)){
								?>                            
                            <option value="<?php echo $row1['id']; ?>"><?php echo $row1['id']; ?></option>
							<?php } ?>
                    </select>
            </div>
        </div> 
        
        <div class="form-group">        
            <label class="control-label col-sm-3" for="designation">Designation:</label>
            <div class="col-sm-9">
                        <select name="designation" id="designation">
                            <option value="<?php print $row_edit_data['designation']; ?>"><?php print $row_edit_data['designation']; ?></option>
                    <option value="principal">Principal</option>
                    <option value="Vice-principal">Vice-principal</option>
                    <option value="General Teacher">General Teacher</option>
                    <option value="Asistant teacher">Asistant teacher</option>
                    <option value="Accountant">Accountant</option>
                    <option value="Clerk">Clerk</option>
                    <option value="Office asistant">Office asistant</option>
                    </select>
            </div>
        </div>
        <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-9">
                <button type="submit" name="update" id="update" class="btn btn-default">Update</button>
                <button class="btn btn-active" name="cencel" id="cencel"><a href="test.php" style="text-decoration:none">Cencel</a></button>
            </div>
        </div>
    </form>
</div>


<!-- Form end -->
<?php
// edit
if(isset($_POST['update'])){
    $emp_id = $_POST['emp_id'];
    $designation = $_POST['designation'];
//edit query
$sql_edit = "
update school_emp_designation
set 
emp_id=$emp_id,
designation='$designation'
where id=".$_GET['id'];

//query execution
$result_edit=mysqli_query($con,$sql_edit);

//redirect

?>
<script>
window.location = "emp_designation_info.php";
</script>
<?php	
}
?>
