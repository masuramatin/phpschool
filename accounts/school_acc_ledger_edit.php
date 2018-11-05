 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
 <?php include "../db/connection.php" ?>
            <?php
//query to retrieve data 
            $result = mysqli_query($con, "select * from school_acc_ledger where id=".$_GET['id']);
//fetch data from result set
			$row = mysqli_fetch_array($result);
            
            ?>


<div class="container">
    <form class="form-horizontal" enctype="multipart/form-data" action="" method="post">
        <div class="form-group">
            <label class="control-label col-sm-2" >Date:</label>
            <div class="col-sm-10"> 
                <input type="date" class="form-control" name="dates" id="dates" placeholder="Enter Date" value="<?php print $row['dates']; ?>">
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
                <textarea name="referance"  id="referance" cols="57" rows="4"><?php print $row['referance']; ?></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2">Debit Amount:</label>
            <div class="col-sm-10"> 
                <input type="text" class="form-control" name="debit" id="debit" placeholder="Enter Debit Amount" value="<?php print $row['debit']; ?>">
            </div>
        </div>
        
       <div class="form-group">
            <label class="control-label col-sm-2">Credit Amount:</label>
            <div class="col-sm-10"> 
                <input type="text" class="form-control" name="credit" id="credit" placeholder="Enter Credit Amount" value="<?php print $row['credit']; ?>">
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
 <?php include "school_acc_ledger_modal_header.php" ?>
  											<!-- close Modal -->

<!-- modal code end here -->


<!-- Javascript Code -->




<?php

if(isset($_POST['update'])){
    $dates = $_POST['dates'];
    $description = $_POST['description'];
    $referance = $_POST['referance'];
    $debit = $_POST['debit'];
	$credit = $_POST['credit'];

	
$query = "
update school_acc_ledger
set 

dates='$dates' ,
description='$description' ,
referance='$referance' ,
debit='$debit',
credit='$credit'

 WHERE
id=".$_GET['id'];
    $result = mysqli_query($con, $query);
?>
<script>
window.location="school_acc_ledger.php";

</script>
<?php
}
?>

<!-- Javascript Code --> 