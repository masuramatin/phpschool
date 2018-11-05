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
    <button class="btn btn-success"><h1>Employee Education Information</h1></button>
   
    <div align="right"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Employee Education Info</button></div>     
    <table class="table">
        <thead>

            <tr bgcolor="#FFCCFF";>
            	<th>Employee ID</th>
                <th>Education Type</th>
                <th>Passing Year</th>
                <th>Result</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
        
     <?php
	//select query
		$sql = "select * from school_emp_edu_info where status=1 limit 10";

	//query execution
		$result=mysqli_query($con,$sql);
		
	//fetch data from result set
$i=1;
            while ($row = mysqli_fetch_array($result)) {
				
                ?>        
                <tr>
                    <td> <?php print $row['employee_id']; ?></td>
					<td> <?php print $row['education_type']; ?>
                    </td>
                    <td><?php print $row['passing_year']; ?></td>
                    <td><?php print $row['result']; ?></td>
                    <td><a href="emp_edu_info_edit.php?id=<?php print $row['employee_id']; ?>" id="edit"><button class="btn btn-primary">Edit</button></a></td>
                    <td><a href="emp_edu_info_delete.php?id=<?php print $row['employee_id']; ?>" id="delete"><button class="btn btn-danger">Delete</button></a></td>   
                        
                    <td><a href="emp_edu_info_view.php?id=<?php print $row['employee_id']; ?>" id="view"><button class="btn btn-info" >View</button></a></td>            
                </tr>
                <?php
			
            }
			
            ?>
             

        </tbody>
    </table>
    
</div> 

<!-- Form start  -->
<!-- Modal  -->
<?php include "emp_edu_info_modal_header.php"; ?>

<!--  modal code start here -->
<p>
<div>

    <form class="form-horizontal" method="post" action="emp_edu_info_insert.php"  enctype="multipart/form-data">
        
           <div class="form-group">
            <label class="control-label col-sm-3" for="employee_id">Employee ID:</label>
            <div class="col-sm-9"> 
           <?php
		   //query to get id from personal information table
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
            <label class="control-label col-sm-3" for="education">Education Type:</label>
            <div class="col-sm-9">
                      <select name="education" id="education" required aria-required="true">
                            <option required aria-required="true" value="">None</option>
                            <option value="BSC">BSC</option>
                            <option value="MSC">MSC</option>
                            <option value="CEC">CEC</option>
                            <option value="BSS">BSS</option>
                            <option value="M.ED">M.ED</option>
                            <option value="B.ED">B.ED</option>
                            <option value="BBA">BBA</option>
                            <option value="MBA">MBA</option>
                    </select>
            </div>
        </div>
       
        <div class="form-group">
            <label class="control-label col-sm-3" for="passing">Passing Year</label>
            <div class="col-sm-9"> 
    <select name="passing" id="passing" required aria-required="true">
                            <option required aria-required="true" value="">None</option>
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                    </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="result">Result:</label>
            <div class="col-sm-9"> 
                <select name="result" id="result" required aria-required="true">
                            <option required aria-required="true" value="">None</option>
                            <option value="1st">1st</option>
                            <option value="2nd">2nd</option>
                            <option value="3rd">3rd</option>
                    </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="institute">Institute:</label>
            <div class="col-sm-9"> 
                <input type="text" required="required" name="institute" class="form-control" id="institute" placeholder="Enter type Institute">
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

<?php include "emp_edu_info_modal_footer.php"; ?>

<!-- Form end -->


