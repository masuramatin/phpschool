 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
 <?php include "../db/connection.php" ?>
            <?php
//query to retrieve data 
            $result = mysqli_query($con, "select * from school_emp_personal_info where id=".$_GET['id']);
//fetch data from result set
			$row = mysqli_fetch_array($result);
            
            ?>
<h4><?php print strtoupper($row['name']); ?>'s Information Update</h4>

<div class="container">
    <form class="form-horizontal" enctype="multipart/form-data" action="" method="post">
        <div class="form-group">
            <label class="control-label col-sm-2" >Name:</label>
            <div class="col-sm-10"> 
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Teacher Name" value="<?php print $row['name']; ?>">
            </div>
        </div>
                <div class="form-group">
            <label class="control-label col-sm-2">Father Name:</label>
            <div class="col-sm-10"> 
                <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter Teacher Father Name" value="<?php print $row['father_name']; ?>">
            </div>
        </div>
                <div class="form-group">
            <label class="control-label col-sm-2">Mother Name:</label>
            <div class="col-sm-10"> 
                <input type="text" class="form-control" name="mname" id="mname" placeholder="Enter Teacher mother Name" value="<?php print $row['mother_name']; ?>">
            </div>
        </div>
                <div class="form-group">
            <label class="control-label col-sm-2">Date of Birth:</label>
            <div class="col-sm-10"> 
                <input type="date" class="form-control" name="dob" id="dob" placeholder="Enter Teacher DOB" value="<?php print $row['date_of_birth']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Religion : </label>
            <div class="col-sm-10"> 
                <select name="rel" id="rel">
                    <option>Select religion</option>
                    <option value="muslim">muslim</option>
                    <option value="hindu">hindu</option>
                    <option value="buddho">buddihist</option>
                    <option value="qrichian">Christian</option>
                    <option value="others">others</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2">Sex : </label>
            <div class="radio">
                      <label><input type="radio" name="sex" value="Male"> Male</label>
                      <label><input type="radio" name="sex" value="Female">Female</label>
                      <label><input type="radio" name="sex" value="Male">Others</label>
                    </div>
        </div>
                <div class="form-group">
                     <label class="control-label col-sm-2">Parmanent Address:</label>
                     <div class="col-sm-10"> 
                     <textarea class="form-control" rows="5" name="padd" id="padd"><?php print $row['parmanent_address']; ?></textarea>
                      </div>
                </div>
                <div class="form-group">
            <label class="control-label col-sm-2">Present Address:</label>
            <div class="col-sm-10"> 
            <textarea class="form-control" rows="5" name="pradd" id="pradd"><?php print $row['present_address']; ?></textarea>
            </div>
        </div>
                        <div class="form-group">
            <label class="control-label col-sm-2">National ID:</label>
            <div class="col-sm-10"> 
                <input type="text" class="form-control" name="nid" id="nid" placeholder="Enter Teacher NID" value="<?php print $row['national_id']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="roll">Email:</label>
            <div class="col-sm-10"> 
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="<?php print $row['email']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Contact:</label>
            <div class="col-sm-10"> 
                <input type="text" class="form-control" name="phn" id="phn" placeholder="Enter Contact No" value="<?php print $row['contact']; ?>">
            </div>
        </div>

        <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" name="update" id="update" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
    
</div>

</p>
  <?php include "modal_footer.php" ?> 
  											<!-- close Modal -->

<!-- modal code end here -->


<!-- Javascript Code -->




<?php

if(isset($_POST['update'])){
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $dob = $_POST['dob'];
	$rel = $_POST['rel'];
	$sex = $_POST['sex'];
	$padd = $_POST['padd'];
	$pradd = $_POST['pradd'];
	$nid = $_POST['nid'];
	$email = $_POST['email'];
	$phn = $_POST['phn'];

	
$query = "
update school_emp_personal_info
set 

name='$name' ,
father_name='$fname' ,
mother_name='$mname' ,
date_of_birth='$dob',
religion='$rel',
sex='$sex',
parmanent_address='$padd' ,
present_address='$pradd' ,
national_id='$nid' ,
email='$email',
contact='$phn'
 WHERE
id=".$_GET['id'];
    $result = mysqli_query($con, $query);
?>
<script>
window.location="emp_personal_info.php";

</script>
<?php
}
?>

<!-- Javascript Code -->