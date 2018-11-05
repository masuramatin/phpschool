 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
 <?php include "../db/connection.php" ?>
            <?php
//query to retrieve data 
            $result = mysqli_query($con, "select * from school_emp_salary_info where id=".$_GET['id']);
//fetch data from result set
			$row = mysqli_fetch_array($result);
            
            ?>
<h4><?php print strtoupper($row['designation']); ?>'s Information Update</h4>

<div class="container">
    <form class="form-horizontal" enctype="multipart/form-data" action="" method="post">
        <div class="form-group">
            <label class="control-label col-sm-2">Designation : </label>
            <div class="col-sm-10"> 
                <select name="deg" id="deg">
                    <option><?php print $row['designation']; ?></option>
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
            <label class="control-label col-sm-2">Basic Salary:</label>
            <div class="col-sm-10"> 
                <input type="text" class="form-control" name="bsal" id="bsal" placeholder="Enter Basic Salary" value="<?php print $row['basic_salary']; ?>">
            </div>
        </div>
                <div class="form-group">
            <label class="control-label col-sm-2">House Rent:</label>
            <div class="col-sm-10"> 
                <input type="text" class="form-control" name="hrent" id="hrent" placeholder="Enter House Rent" value="<?php print $row['house_rent']; ?>">
            </div>
        </div>
                <div class="form-group">
            <label class="control-label col-sm-2">Convince :</label>
            <div class="col-sm-10"> 
                <input type="text" class="form-control" name="conv" id="conv" placeholder="Enter Convince" value="<?php print $row['convince']; ?>">
            </div>
        </div>
                <div class="form-group">
            <label class="control-label col-sm-2">Medical:</label>
            <div class="col-sm-10"> 
                <input type="text" class="form-control" name="med" id="med" placeholder="Enter House Rent" value="<?php print $row['medical']; ?>">
            </div>
        </div>
                        <div class="form-group">
            <label class="control-label col-sm-2">Provident Fund :</label>
            <div class="col-sm-10"> 
                <input type="text" class="form-control" name="pfund" id="pfund" placeholder="Enter House Rent" value="<?php print $row['provident_fund']; ?>">
            </div>
        </div>
                
        <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" name="update" id="update" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
    
</div>

</p><div align="right"><a href="emp_salary_info.php">close</a></div>

  
  											<!-- close Modal -->

<!-- modal code end here -->


<!-- Javascript Code -->




<?php

if(isset($_POST['update'])){
    $deg = $_POST['deg'];
    $bsal = $_POST['bsal'];
    $hrent = $_POST['hrent'];
    $conv = $_POST['conv'];
	$med = $_POST['med'];
	$pfund = $_POST['pfund'];
	

	
$query = "
update school_emp_salary_info
set
designation='$deg' ,
basic_salary='$bsal' ,
house_rent='$hrent' ,
convince='$conv',
medical='$med',
provident_fund='$pfund'

 WHERE
id=".$_GET['id'];
    $result = mysqli_query($con, $query);
?>
<script>
window.location="emp_salary_info.php";

</script>
<?php
}
?>

<!-- Javascript Code -->