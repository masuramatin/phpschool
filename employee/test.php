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
    <h2>Reference Information</h2>
    <div align="right"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Reference Info</button></div>     
    <table class="table">
        <thead>

            <tr>
                <th>Name</th>
                <th>Designation</th>
                <th>Address</th>
                <th>Email</th>
                <th>Contact</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
        
     <?php
	//select query
		$sql = "select * from school_emp_reference_info where status=1 limit 10";
	//query execution
		$result=mysqli_query($con,$sql);
	//fetch data from result set
$i=1;
            while ($row = mysqli_fetch_array($result)) {
                ?>        
                <tr>
                    <td>
                    <input type="hidden" id="id" name="id" value="<?php print $row['id']; ?>">
					<?php print $row['name']; ?>
                    </td>
                    <td><?php print $row['designation']; ?></td>
                    <td><?php print $row['address']; ?></td>
                    <td><?php print $row['email']; ?></td>
                    <td><?php print $row['contact']; ?></td>
                    <td><a href="test_edit.php?id=<?php print $row['id']; ?>" id="edit">Edit</a></td>
                    <td><a href="test_delete.php?id=<?php print $row['id']; ?>" id="delete">Delete</a></td>   
                        
                    <td><a href="test_view.php?id=<?php print $row['id']; ?>" id="view">View</a></td>            
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
<?php include "modal_header.php"; ?>

<!--  modal code start here -->
<p>
<div>

    <form class="form-horizontal" method="post" action="" >
        
        <div class="form-group">
        
            <label class="control-label col-sm-3" for="name">Name:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
            </div>
        </div>
       
        <div class="form-group">
            <label class="control-label col-sm-3" for="designation">Designation:</label>
            <div class="col-sm-9"> 
                <input type="text" class="form-control" name="designation" id="designation" placeholder="Enter Designation">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="address">Address:</label>
            <div class="col-sm-9"> 
                <textarea name="address" id="address" cols="57" rows="4"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="email">Email:</label>
            <div class="col-sm-9"> 
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email">
            </div>
        </div>       
        <div class="form-group">
            <label class="control-label col-sm-3" for="pwd">Contact:</label>
            <div class="col-sm-9"> 
                <input type="text" name="contact" class="form-control" id="contact" placeholder="Enter Contact Number">
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


<?php
//insertion
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    
// query for insertion
$sql_ins = "insert into school_emp_reference_info values ('','$name','$designation','$address','$email','$contact',1);";

//query execution

$result_ins=mysqli_query($con,$sql_ins);

?>
<script>
window.location="test.php";

</script>
<?php
}
?>
