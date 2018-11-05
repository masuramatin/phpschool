<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <?php include "../db/connection.php" ?>
  <div class="container">
  <h2>Accounts Ledger</h2>
  <!-- Trigger the modal with a button -->
  <div align="right"><button type="button"  class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Transaction</button></div>
  <table class="table table-bordered">
        <thead>

            <tr>
                <th>Date</th>
                <th>Description</th>
                <th>Reference </th>
                <th>Debit (amount)</th>
                <th>Credit (amount)</th>
                 <th colspan="2">Balance
                 				(Debit-Credit)</th>

                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
//query to retrieve data 
            $result = mysqli_query($con, "select * from school_acc_ledger where status=1 limit 10");
//fetch data from result set
$i=1;
            while ($row = mysqli_fetch_array($result)) {
                ?>        
                <tr>
                    <td>
                    <input type="hidden" id="id" name="id" value="<?php print $row['id']; ?>">
					<?php print $row['dates']; ?>
                    </td>
                    <td><?php print $row['description']; ?></td>
                    <td><?php print $row['referance']; ?></td>
                    <td><?php print $row['debit']; ?></td>
                    <td><?php print $row['credit']; ?></td>

					<td><?php print $row['debit']; ?></td>
                    <td><?php print $row['credit']; ?></td>
                    <td><a href="school_acc_ledger_edit.php?id=<?php print $row['id']; ?>" id="edit"><button class="btn btn-primary">Edit</button></a></td>
                    <td><a href="school_acc_ledger_delete.php?id=<?php print $row['id']; ?>" id="delete"><button class="btn btn-danger">Delete</button></a></td>   
                        
                    <td><a href="school_acc_ledger_view.php?id=<?php print $row['id']; ?>" id="view"><button class="btn btn-info" >View</button></a></td>            
                </tr>
                <?php
				$i++;
            }
            ?>

        </tbody>
    </table>

  <!-- Modal -->
 <?php include "school_acc_ledger_modal_header.php" ?>
  
          <p>
     <div>
     
    <form class="form-horizontal" enctype="multipart/form-data" action="school_acc_ledger_ins.php" method="post">
        <div class="form-group">
            <label class="control-label col-sm-2">Date:</label>
            <div class="col-sm-10"> 
                <input type="date" class="form-control" name="dates" id="dates" placeholder="Enter Date">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-3" for="address">Description:</label>
            <div class="col-sm-9"> 
                <textarea name="description" id="description" cols="45" rows="4"></textarea>
            </div>
        </div>

         <div class="form-group">
            <label class="control-label col-sm-3" for="address">Reference:</label>
            <div class="col-sm-9"> 
                <textarea name="referance" id="referance" cols="45" rows="4"></textarea>
            </div>
        </div>

         <div class="form-group">
            <label class="control-label col-sm-2">Debit Amount:</label>
            <div class="col-sm-10"> 
                <input type="text" class="form-control" name="debit" id="debit" placeholder="Enter Amount">
        </div>
        
        </div>
            <div class="form-group">
            <label class="control-label col-sm-2">Credit Amount:</label>
            <div class="col-sm-10"> 
                <input type="text" class="form-control" name="credit" id="credit" placeholder="Enter Amount">
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
  <?php include "school_acc_ledger_modal_footer.php" ?>  
  											<!-- close Modal -->

<!-- modal code end here -->


<!-- Javascript Code -->




<?php

if(isset($_POST['submit'])){
    $dates = $_POST['dates'];
    $description = $_POST['description'];
    $referance = $_POST['referance'];
    $debit = $_POST['debit'];
	$credit = $_POST['credit'];

	
$sql_ins = "insert into school_acc_ledger values ('','$dates','$description','$referance','$debit','$credit',1);";
    $result = mysqli_query($con, $query);
?>
<script>
//window.location="school_acc_ledger.php";

</script>
<?php
}
?>




