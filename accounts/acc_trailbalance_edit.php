 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
 <?php include "../db/connection.php" ?>
            <?php
//query to retrieve data 
            $result = mysqli_query($con, "select * from school_acc_trailbalance where id=".$_GET['id']);
//fetch data from result set
			$row = mysqli_fetch_array($result);
            
            ?>


<div class="container">
    <form class="form-horizontal" enctype="multipart/form-data" action="" method="post">
        <div class="form-group">
            <label class="control-label col-sm-2">Serial No:</label>
            <div class="col-sm-10"> 
                <select name="serialno"  id="serialno">
                    <option value=""><?php print $row['serialno']; ?></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                </select>
            </div>
        </div>

                <div class="form-group">
            <label class="control-label col-sm-3" for="description">Description:</label>
            <div class="col-sm-9"> 
                <textarea name="description"  id="description" cols="45" rows="4"><?php print $row['description']; ?></textarea>
            </div>
        </div>
        
                        <div class="form-group">
            <label class="control-label col-sm-3" for="reference">Reference:</label>
            <div class="col-sm-9"> 
                <textarea name="reference"  id="reference" cols="45" rows="4"><?php print $row['reference']; ?></textarea>
            </div>
        </div>

                <div class="form-group">
            <label class="control-label col-sm-2">Debit Amount:</label>
            <div class="col-sm-10"> 
                <input type="text" class="form-control" name="debitamm" id="debitamm" placeholder="Enter Teacher DOB" value="<?php print $row['debitamm']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Credit Amount:</label>
            <div class="col-sm-10"> 
                <input type="text" class="form-control" name="creditam" id="creditam" placeholder="Enter Teacher DOB" value="<?php print $row['creditam']; ?>">
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
 <?php include "trailbalance_modal_header.php" ?>
  											<!-- close Modal -->

<!-- modal code end here -->


<!-- Javascript Code -->




<?php

if(isset($_POST['update'])){
    $serialno = $_POST['serialno'];
    $description = $_POST['description'];
    $reference = $_POST['reference'];
    $debitamm = $_POST['debitamm'];
	$creditam = $_POST['creditam'];

	
$query = "
update school_acc_trailbalance
set 

serialno='$serialno' ,
description='$description' ,
reference='$reference' ,
debitamm='$debitamm',
creditam='$creditam'

 WHERE
id=".$_GET['id'];
    $result = mysqli_query($con, $query);
?>
<script>
window.location="acc_trailbalance.php";

</script>
<?php
}
?>

<!-- Javascript Code --> 