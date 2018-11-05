<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <?php include "../db/connection.php" ?>
  <div class="container">
  <h2>Employee Information</h2>
  <!-- Trigger the modal with a button -->
  <div align="right"><button type="button"  class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Employee Info</button></div>
  <table class="table">
        <thead>

            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
//query to retrieve data 
            $result = mysqli_query($con, "select * from school_emp_personal_info where status=1");
//fetch data from result set
$i=1;
            while ($row = mysqli_fetch_array($result)) {
                ?>        
                <tr>
                    <td>
                    <input type="hidden" id="id" name="id" value="<?php print $row['id']; ?>">
					<?php print $row['name']; ?>
                    </td>
                    <td><?php print $row['email']; ?></td>
                    <td><?php print $row['contact']; ?></td>
                    <td><a href="emp_personal_edit.php?id=<?php print $row['id']; ?>" id="edit">Edit</a></td>
                    <td><a href="emp_personal_delete.php?id=<?php print $row['id']; ?>" id="delete">Delete</a></td>   
                        
                    <td><a href="emp_personal_view.php?id=<?php print $row['id']; ?>" id="view">View</a></td>            
                </tr>
                <?php
				$i++;
            }
            ?>

        </tbody>
    </table>

  <!-- Modal -->
  <?php include "modal_header.php" ?>
  
          <p>
     <div>

    <form class="form-horizontal" enctype="multipart/form-data" action="emp_personal_info_ins.php" method="post">
        <div class="form-group">
            <label class="control-label col-sm-2">Name:</label>
            <div class="col-sm-10"> 
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Teacher Name">
            </div>
        </div>
                <div class="form-group">
            <label class="control-label col-sm-2">Father Name:</label>
            <div class="col-sm-10"> 
                <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter Teacher Father Name">
            </div>
        </div>
                <div class="form-group">
            <label class="control-label col-sm-2">Mother Name:</label>
            <div class="col-sm-10"> 
                <input type="text" class="form-control" name="mname" id="mname" placeholder="Enter Teacher mother Name">
            </div>
        </div>
                <div class="form-group">
            <label class="control-label col-sm-2">Date of Birth:</label>
            <div class="col-sm-10"> 
                <input type="date" class="form-control" name="dob" id="dob" placeholder="Enter Teacher DOB">
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
                      <label><input type="radio" name="sex">Male</label>
                      <label><input type="radio" name="sex">Female</label>
                      <label><input type="radio" name="sex">Others</label>
                    </div>
        </div>
                <div class="form-group">
                     <label class="control-label col-sm-2">Parmanent Address:</label>
                     <div class="col-sm-10"> 
                     <textarea class="form-control" rows="5" name="padd" id="padd"></textarea>
                      </div>
                </div>
                <div class="form-group">
            <label class="control-label col-sm-2">Present Address:</label>
            <div class="col-sm-10"> 
            <textarea class="form-control" rows="5" name="pradd" id="pradd"></textarea>
            </div>
        </div>
                        <div class="form-group">
            <label class="control-label col-sm-2">National ID:</label>
            <div class="col-sm-10"> 
                <input type="text" class="form-control" name="nid" id="nid" placeholder="Enter Teacher NID">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="roll">Email:</label>
            <div class="col-sm-10"> 
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Contact:</label>
            <div class="col-sm-10"> 
                <input type="text" class="form-control" name="phn" id="phn" placeholder="Enter Contact No">
            </div>
        </div>

        <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" name="submit" id="submit" class="btn btn-default">Submit</button>
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

if(isset($_POST['submit'])){
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

	
    $query = "insert into  school_emp_personal_info values ('','$name','$fname','$mname','$dob','$rel','$sex','$padd','$pradd','$nid','$email','$phn',1);";
    $result = mysqli_query($con, $query);
?>
<script>
//window.location="teacher_info.php";

</script>
<?php
}
?>
