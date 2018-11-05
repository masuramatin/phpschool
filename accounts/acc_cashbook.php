<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <?php include "../db/connection.php" ?>
  <div class="container">
  <h2>Accounts Cashbook</h2>
  <!-- Trigger the modal with a button -->
  <div align="right"><button type="button"  class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Transaction</button></div>
  <table class="table table-striped">
        <thead  class="table table-bordered">

            <tr>
                <th>Date</th>
                <th>Description</th>
                <th>Reference </th>
                <th>Amount</th>
                <th>Type</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
//query to retrieve data 
            $result = mysqli_query($con, "select * from school_acc_cashbook where status=1 limit 10");
//fetch data from result set
$i=1;
            while ($row = mysqli_fetch_array($result)) {
                ?>        
                <tr>
                    <td>
                    <input type="hidden" id="id" name="id" value="<?php print $row['id']; ?>">
					<?php print $row['date']; ?>
                    </td>
                    <td><?php print $row['description']; ?></td>
                    <td><?php print $row['reference']; ?></td>
                    <td><?php print $row['ammount']; ?></td>
                    <td><?php print $row['type']; ?></td>
                    <td></td>
                    <td></td>
                    <td><a href="acc_cashbook_edit.php?id=<?php print $row['id']; ?>" id="edit"><button class="btn btn-primary">Edit</button></a></td>
                    <td><a href="acc_cashbook_delete.php?id=<?php print $row['id']; ?>" id="delete"><button class="btn btn-danger">Delete</button></a></td>   
                        
                    <td><a href="acc_cashbook_view.php?id=<?php print $row['id']; ?>" id="view"><button class="btn btn-info" >View</button></a></td>            
                </tr>
                <?php
				$i++;
            }
            ?>

        </tbody>
    </table>

  <!-- Modal -->
 <?php include "cashbook_modal_header.php" ?>
  
          <p>
     <div>

    <form class="form-horizontal" enctype="multipart/form-data" action="acc_cashbook_ins.php" method="post">
        <div class="form-group">
            <label class="control-label col-sm-2">Date:</label>
            <div class="col-sm-10"> 
                <input type="month" class="form-control" name="date" id="date" placeholder="Enter Date">
            </div>
        </div>

        
                <div class="form-group">
            <label class="control-label col-sm-3" for="address">Description:</label>
            <div class="col-sm-9"> 
                <textarea name="description" id="description" cols="57" rows="4"></textarea>
            </div>
        </div>

                        <div class="form-group">
            <label class="control-label col-sm-3" for="address">Reference:</label>
            <div class="col-sm-9"> 
                <textarea name="reference" id="reference" cols="57" rows="4"></textarea>
            </div>
        </div>
        
        
        
        
                <div class="form-group">
            <label class="control-label col-sm-2">Amount:</label>
            <div class="col-sm-10"> 
                <input type="text" class="form-control" name="ammount" id="ammount" placeholder="Enter Amount">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Type:</label>
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
                <button type="submit" name="submit" id="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
    
</div>

</p>
  <?php include "cashbook_modal_footer.php" ?>  
  											<!-- close Modal -->

<!-- modal code end here -->


<!-- Javascript Code -->




<?php

if(isset($_POST['submit'])){
    $date = $_POST['date'];
    $description = $_POST['description'];
    $reference = $_POST['reference'];
    $ammount = $_POST['ammount'];
	$type = $_POST['type'];

	
$sql_ins = "insert into school_acc_cashbook values ('','$date','$description','$reference','$ammount','$type',1);";
    $result = mysqli_query($con, $query);
?>
<script>
//window.location="teacher_info.php";

</script>
<?php
}
?>




