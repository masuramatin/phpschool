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
$sql="select * from school_emp_edu_info where employee_id=".$_GET['id'];
//query execution
$result=mysqli_query($con,$sql);

//fetch resultset
$row = mysqli_fetch_array($result);

?>
<!-- Form start  -->
<div class="container"> 

<button class="modal-title" class="btn btn-success" style="color:#F00"><h4>Employee Education Information Edit : </h4></button>
   <hr />
    <form class="form-horizontal" method="post" action="" >
        
                   <div class="form-group">
            <label class="control-label col-sm-3" for="teacher">Employee ID:</label>
            <div class="col-sm-9"> 
            
            <?php
		   //query to get id from personal information table
		   		$sql1 = "select * from school_emp_personal_info where status=1";
		   //query execution
		   $result1=mysqli_query($con,$sql1);
		   ?>            
            
                    <select name="teacher" id="teacher">
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
            <label class="control-label col-sm-3" for="education">Education Type:</label>
            <div class="col-sm-9">
                        <select name="education" id="education">
                            <option value="<?php print $row['education_type']; ?>"><?php print $row['education_type']; ?></option>
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
    <select name="passing" id="passing">
                            <option value="<?php print $row['passing_year']; ?>"><?php print $row['passing_year']; ?></option>
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
                <select name="result" id="result">
                            <option value="<?php print $row['result']; ?>"><?php print $row['result']; ?></option>
                            <option value="1st">1st</option>
                            <option value="2nd">2nd</option>
                            <option value="3rd">3rd</option>
                    </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="institute">Institute:</label>
            <div class="col-sm-9"> 
                <input type="text" value="<?php print $row['institute'];?>" name="institute" class="form-control" id="institute" placeholder="Enter type Institute">
            </div>
        </div>
        <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-9">
                <button type="submit" name="update" id="update" class="btn btn-default">Update</button>
                <button class="btn btn-active" name="cencel" id="cencel"><a href="emp_edu_info.php" style="text-decoration:none">Cencel</a></button>
            </div>
        </div>
    </form>
</div>


<!-- Form end -->
<?php
// edit
if(isset($_POST['update'])){
    $education = $_POST['education'];
    $passing = $_POST['passing'];
    $result = $_POST['result'];
    $institute = $_POST['institute'];
//edit query
$sql_edit = "
update school_emp_edu_info
set 
education_type='$education',
passing_year='$passing',
result='$result',
institute='$institute'
where employee_id=".$_GET['id'];

//query execution
$result_edit=mysqli_query($con,$sql_edit);

//redirect

?>
<script>
window.location = "emp_edu_info.php";
</script>
<?php	
}
?>
