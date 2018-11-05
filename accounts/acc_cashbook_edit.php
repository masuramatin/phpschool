 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
 <?php include "../db/connection.php" ?>
            <?php
//query to retrieve data 
            $result = mysqli_query($con, "select * from school_acc_cashbook where id=".$_GET['id']);
//fetch data from result set
			$row = mysqli_fetch_array($result);
            
            ?>


<div class="container">
    <form class="form-horizontal" enctype="multipart/form-data" action="" method="post">
        <div class="form-group">
            <label class="control-label col-sm-2" >Date:</label>
            <div class="col-sm-10"> 
                <input type="text" class="form-control" name="date" id="date" placeholder="Enter Teacher Name" value="<?php print $row['date']; ?>">
            </div>
        </div>

                <div class="form-group">
            <label class="control-label col-sm-3" for="description">Description:</label>
            <div class="col-sm-9"> 
                <textarea name="description"  id="description" cols="57" rows="4"><?php print $row['description']; ?></textarea>
            </div>
        </div>
        
                        <div class="form-group">
            <label class="control-label col-sm-3" for="reference">Reference:</label>
            <div class="col-sm-9"> 
                <textarea name="reference"  id="reference" cols="57" rows="4"><?php print $row['reference']; ?></textarea>
            </div>
        </div>

                <div class="form-group">
            <label class="control-label col-sm-2">Ammount:</label>
            <div class="col-sm-10"> 
                <input type="date" class="form-control" name="ammount" id="ammount" placeholder="Enter Teacher DOB" value="<?php print $row['ammount']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Type: </label>
            <div class="col-sm-10"> 
                <select name="type" id="type">
                    <option>Select type</option>
                    <option value="Debit">Debit</option>
                    <option value="Credit">Credit</option>
                </select>
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
 <?php include "cashbook_modal_header.php" ?>
  											<!-- close Modal -->

<!-- modal code end here -->


<!-- Javascript Code -->




<?php

if(isset($_POST['update'])){
    $date = $_POST['date'];
    $description = $_POST['description'];
    $reference = $_POST['reference'];
    $ammount = $_POST['ammount'];
	$type = $_POST['type'];

	
$query = "
update school_acc_cashbook
set 

date='$date' ,
description='$description' ,
reference='$reference' ,
ammount='$ammount',
type='$type'

 WHERE
id=".$_GET['id'];
    $result = mysqli_query($con, $query);
?>
<script>
window.location="acc_cashbook.php";

</script>
<?php
}
?>

<!-- Javascript Code --> 