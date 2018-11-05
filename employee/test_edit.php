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
$sql="select * from school_emp_reference_info where id=".$_GET['id'];
//query execution
$result=mysqli_query($con,$sql);

//fetch resultset
$row = mysqli_fetch_array($result);

?>
<!-- Form start  -->
<div class="container">
    <h4>Employee Information Edit</h4>
    <hr />
    <form class="form-horizontal" method="post" action="" >
        
        <div class="form-group">
        
            <label class="control-label col-sm-3" for="name">Name:</label>
            <div class="col-sm-9">
                <input type="text" value="<?php print $row['name']; ?>" class="form-control" name="name" id="name" placeholder="Enter Name">
            </div>
        </div>
       
        <div class="form-group">
            <label class="control-label col-sm-3" for="designation">Designation:</label>
            <div class="col-sm-9"> 
                <input type="text" value="<?php print $row['designation']; ?>" class="form-control" name="designation" id="designation" placeholder="Enter Designation">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="address">Address:</label>
            <div class="col-sm-9"> 
                <textarea name="address"  id="address" cols="57" rows="4"><?php print $row['address']; ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="email">Email:</label>
            <div class="col-sm-9"> 
                <input type="email" value="<?php print $row['email']; ?>" name="email" class="form-control" id="email" placeholder="Enter Email">
            </div>
        </div>       
        <div class="form-group">
            <label class="control-label col-sm-3" for="contact">Contact:</label>
            <div class="col-sm-9"> 
                <input type="text" value="<?php print $row['contact']; ?>" name="contact" class="form-control" id="contact" placeholder="Enter Contact Number">
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
 	$name = $_POST['name'];
    $designation = $_POST['designation'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
//edit query
$sql_edit = "
update school_emp_reference_info
set 
name='$name',
designation='$designation' ,
address='$address' ,
email='$email' ,
contact='$contact' 
where id=".$_GET['id'];

//query execution
$result_edit=mysqli_query($con,$sql_edit);

//redirect

?>
<script>
window.location = "test.php";
</script>
<?php	
}
?>
