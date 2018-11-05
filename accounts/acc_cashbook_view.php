  <?php include "../db/connection.php" ?>
            <?php
//query to retrieve data 
            $result = mysqli_query($con, "select * from school_acc_cashbook where id=".$_GET['id']);
//fetch data from result set
			$row = mysqli_fetch_array($result);
            
            ?>

<hr>
<table border="2" width="100%" class="table table-hover">
        <thead>
            <tr>
                <th>Date: </th>
                <th>Description: </th>
                <th>Reference: </th>
                <th>Amount:</th>
                <th>Type: </th>
                
            </tr>
          </thead>
          <tbody>
            <tr>
                <td><?php print $row['date']; ?></td>
                <td><?php print $row['description']; ?></td>
                <td><?php print $row['reference']; ?></td>
                <td><?php print $row['ammount']; ?></td>
                <td><?php print $row['type']; ?></td>
            </tr>
   			</tbody>
        

    </table>
