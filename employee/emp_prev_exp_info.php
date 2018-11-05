<?php
//session_start();
//connect with database
include "../db/connection.php";

?>
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- display -->

<div class="container">
    <h2>Employee Previous Experience Information</h2>
    <div align="right"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Previous Experience Info</button></div>     
    <table class="table">
        <thead>

            <tr>
                <th>Employee ID</th>
                <th>Institute Name</th>
                <th>Salary</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
        
     <?php
	//select query
		$sql = "select * from school_emp_prev_exp where status=1 limit 10";
	//query execution
		$result=mysqli_query($con,$sql);
	//fetch data from result set
$i=1;
            while ($row = mysqli_fetch_array($result)) {
                ?>        
                <tr>
                    <td>
                    <input type="hidden" id="id" name="id" value="<?php print $row['id']; ?>">
					<?php print $row['employee_id']; ?>
                    </td>
                    <td><?php print $row['institute_name']; ?></td>
                    <td><?php print $row['salary']; ?></td>
                    <td><a href="emp_prev_exp_info_edit.php?id=<?php print $row['employee_id']; ?>" id="edit"><button class="btn btn-primary">Edit</button></a></td>
                    <td><a href="emp_prev_exp_info_delete.php?id=<?php print $row['employee_id']; ?>" id="delete"><button class="btn btn-danger">Delete</button></a></td>   
                        
                    <td><a href="emp_prev_exp_info_view.php?id=<?php print $row['employee_id']; ?>" id="view"><button class="btn btn-info" >View</button></a></td>            
                </tr>
                <?php
				$i++;
            }
            ?>

        </tbody>
    </table>
    
</div> 

<!-- Form start  -->
<!-- Modal  -->
<?php include "emp_prev_exp_modal_header.php"; ?>

<!--  modal code start here -->
<p>
<div>

    <form class="form-horizontal" method="post" action="emp_prev_exp_info_insert.php" >
        
        <div class="form-group">
        
            <label class="control-label col-sm-3" for="employee_id">Employee ID:</label>
            <div class="col-sm-9">
            <?php
		   //query to get id from employee personal information table
		   		$sql1 = "select * from school_emp_personal_info where status=1";
		   //query execution
		   $result1=mysqli_query($con,$sql1);
		   ?>
           		<select name="employee_id" id="employee_id" required aria-required="true">
 							
                            <option required aria-required="true" value="">None</option>
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
                <input type="text" required="required" class="form-control" name="institute_name" id="institute_name" placeholder="Enter Institute Name">
            </div>
        </div>
       
        <div class="form-group">
            <label class="control-label col-sm-3" for="joining_date">Joining Date :</label>
            <div class="col-sm-9"> 
                <input type="date" required="required" class="form-control" name="joining_date" id="joining_date">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="resignation_date">Resignation Date :</label>
            <div class="col-sm-9"> 
                <input type="date" required="required" class="form-control" name="resignation_date" id="resignation_date">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="salary">Salary :</label>
            <div class="col-sm-9"> 
                <input type="text" required="required" name="salary" class="form-control" id="salary" placeholder="Enter Salary">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="reason">Reason :</label>
            <div class="col-sm-9"> 
                <textarea required="required" name="reason" id="reason" cols="57" rows="4"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="reference">Reference :</label>
            <div class="col-sm-9"> 
                <input type="text" required="required" name="reference" class="form-control" id="reference" placeholder="Enter Reference">
            </div>
        </div>       
        <div class="form-group">
            <label class="control-label col-sm-3" for="reference_contact">Reference Contact:</label>
            <div class="col-sm-9"> 
                <input type="text" required="required" name="reference_contact" class="form-control" id="reference_contact" placeholder="Enter Reference Contact Number">
            </div>
        </div>
        <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-9">
                <button type="submit" name="submit" id="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
</div>
</p>

<!-- modal code end here -->

<?php include "emp_prev_exp_modal_footer.php"; ?>

<!-- Form end -->


