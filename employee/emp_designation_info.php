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
    <button class="btn btn-success"><h1>Employee Designation Info </h1></button>
   
    <div align="right"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Designation Info</button></div>     
    <table class="table">
        <thead>

            <tr>
            	<th>Employee ID</th>
                <th>Designation</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
        
     <?php
	//select query
		$sql = "select * from school_emp_designation where status=1";

	//query execution
		$result=mysqli_query($con,$sql);
		
	//fetch data from result set
$i=1;
            while ($row = mysqli_fetch_array($result)) {
				
                ?>        
                <tr>
                    <td> <?php print $row['emp_id']; ?></td>
					<td> <?php print $row['designation']; ?>
                    </td>
                    <td><a href="emp_designation_edit.php?id=<?php print $row['id']; ?>" id="edit"><button class="btn btn-primary">Edit</button></a></td>
                    <td><a href="emp_designation_delete.php?id=<?php print $row['id']; ?>" id="delete"><button class="btn btn-danger">Delete</button></a></td>   
                        
                    <td><a href="emp_designation_view.php?id=<?php print $row['id']; ?>" id="view"><button class="btn btn-info" >View</button></a></td>            
                </tr>
                <?php
			
            }
			
            ?>
             

        </tbody>
    </table>
    
</div> 

<!-- Form start  -->
<!-- Modal  -->
<?php include "modal_header.php"; ?>

<!--  modal code start here -->
<p>
<div>

    <form class="form-horizontal" enctype="multipart/form-data" action="emp_designation_ins.php" method="post">
        
           <div class="form-group">
            <label class="control-label col-sm-3" for="teacher">Emplpoyee ID:</label>
            <div class="col-sm-9"> 
           <?php
		   //query to get id from personal information table
		   		$sql1 = "select * from school_emp_personal_info where status=1";
		   //query execution
		   $result1=mysqli_query($con,$sql1);
		   ?> 
                        <select name="emp_id" id="emp_id" required aria-required="true">
 							<option required aria-required="true"></option>

                            <?php
                            while($row1 = mysqli_fetch_array($result1)){
								?>                            
                            <option value="<?php echo $row1['id']; ?>"><?php echo $row1['id']; ?></option>
							<?php } ?>

                    </select>
            </div>
        </div> 
        

        <div class="form-group">
            <label class="control-label col-sm-2">Designation: </label>
            <div class="col-sm-10"> 
                <select name="designation" id="designation">
                    <option>Select Designation</option>
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
                <button type="submit" name="submit" id="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
</div>
</p>

<!-- modal code end here -->

<?php include "modal_footer.php"; ?>

<!-- Form end -->


