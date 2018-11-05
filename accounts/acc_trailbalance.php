<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <?php include "../db/connection.php" ?>
  <div class="container">
  <h2>Accounts Trailbalance</h2>
  <!-- Trigger the modal with a button -->
  <div align="right"><button type="button"  class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Transaction</button></div>
  <table class="table table-bordered">
        <thead>

            <tr>
                <th>Serial No</th>
                <th>Description</th>
                <th>Reference </th>
                <th>Debit (amount)</th>
                <th>Credit (amount)</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
//query to retrieve data 
            $result = mysqli_query($con, "select * from school_acc_trailbalance where status=1 limit 10");
//fetch data from result set
$i=1;
            while ($row = mysqli_fetch_array($result)) {
                ?>        
                <tr>
                    <td>
                    <input type="hidden" id="id" name="id" value="<?php print $row['id']; ?>">
					<?php print $row['serialno']; ?>
                    </td>
                    <td><?php print $row['description']; ?></td>
                    <td><?php print $row['reference']; ?></td>
                    <td><?php print $row['debitamm']; ?></td>
                    <td><?php print $row['creditam']; ?></td>


                    <td><a href="acc_trailbalance_edit.php?id=<?php print $row['id']; ?>" id="edit"><button class="btn btn-primary">Edit</button></a></td>
                    <td><a href="acc_trailbalance_delete.php?id=<?php print $row['id']; ?>" id="delete"><button class="btn btn-danger">Delete</button></a></td>   
                        
                    <td><a href="acc_trailbalance_view.php?id=<?php print $row['id']; ?>" id="view"><button class="btn btn-info" >View</button></a></td>            
                </tr>
                <?php
				$i++;
            }
            ?>
                <tr>
                	<td colspan="3" align="right" style="color:#00F">
                    Total Balance</td>
                    <td></td>
                    <td></td>
                
                </tr>
        </tbody>
    </table>

  <!-- Modal -->
 <?php include "trailbalance_modal_header.php" ?>
  
          <p>
     <div>

    <form class="form-horizontal" enctype="multipart/form-data" action="acc_trailbalance_ins.php" method="post">
        <div class="form-group">
            <label class="control-label col-sm-2">Serial No:</label>
            <div class="col-sm-10"> 
                <select name="serialno" id="serialno">
                    <option>Select Serial Number</option>
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
            <label class="control-label col-sm-3" for="address">Description:</label>
            <div class="col-sm-9"> 
                <textarea name="description" id="description" cols="45" rows="4"></textarea>
            </div>
        </div>

         <div class="form-group">
            <label class="control-label col-sm-3" for="address">Reference:</label>
            <div class="col-sm-9"> 
                <textarea name="reference" id="reference" cols="45" rows="4"></textarea>
            </div>
        </div>

         <div class="form-group">
            <label class="control-label col-sm-2">Debit Amount:</label>
            <div class="col-sm-10"> 
                <input type="text" class="form-control" name="debitamm" id="debitamm" placeholder="Enter Amount">
        </div>
        
        </div>
            <div class="form-group">
            <label class="control-label col-sm-2">Credit Amount:</label>
            <div class="col-sm-10"> 
                <input type="text" class="form-control" name="creditam" id="creditam" placeholder="Enter Amount">
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
  <?php include "trailbalance_modal_footer.php" ?>  
  											<!-- close Modal -->

<!-- modal code end here -->


<!-- Javascript Code -->




<?php

if(isset($_POST['submit'])){
    $serialno = $_POST['serialno'];
    $description = $_POST['description'];
    $reference = $_POST['reference'];
    $debitamm = $_POST['debitamm'];
	$creditam = $_POST['creditam'];

	
$sql_ins = "insert into school_acc_trailbalance values ('','$serialno','$description','$reference','$dammount','$cammount',1);";
    $result = mysqli_query($con, $query);
?>
<script>
//window.location="teacher_info.php";

</script>
<?php
}
?>




