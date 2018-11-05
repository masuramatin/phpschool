<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <?php include "../db/connection.php" ?>
  <div class="container">
  <h2>Employee Salary Information</h2>
  <!-- Trigger the modal with a button -->
  <div align="right"><button type="button"  class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Salary Info</button></div>
  <table class="table">
        <thead>

            <tr>
                <th>Designation</th>
                <th>Basic Salary</th>
                <th>House Rent</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
//query to retrieve data 
            $result = mysqli_query($con, "select * from school_emp_salary_info where status=1 limit 10");
//fetch data from result set
$i=1;
            while ($row = mysqli_fetch_array($result)) {
                ?>        
                <tr>
                    <td>
                    <input type="hidden" id="id" name="id" value="<?php print $row['id']; ?>">
					<?php print $row['designation']; ?>
                    </td>
                    <td><?php $basic=$row['basic_salary']; print $basic; ?></td>
                    <td><?php
					
					 print $houser=$basic*round($row['3'])/100; ?></td>
                    <td><a href="emp_salary_edit.php?id=<?php print $row['id']; ?>" id="edit">Edit</a></td>
                    <td><a href="emp_salary_del.php?id=<?php print $row['id']; ?>" id="delete">Delete</a></td>   
                        
                    <td><a href="emp_salary_view.php?id=<?php print $row['id']; ?>" id="view">View</a></td>            
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

    <form class="form-horizontal" enctype="multipart/form-data" action="emp_salary_info_ins.php" method="post">
        <div class="form-group">
            <label class="control-label col-sm-2">Designation : </label>
            <div class="col-sm-10"> 
                <select name="deg" id="deg">
                    <option>Select Designation</option>
                    <option value="principal">Principal</option>
                    <option value="Vice-principal">Vice-principal</option>
                    <option value="General Teacher">General Teacher</option>
                    <option value="Asistant teacher">Asistant teacher</option>
                    <option value="Accountant">Accountant</option>
                    <option value="Clerk">Clerk</option>
                    <option value="Office asistant">Office asistant</option>

                </select>
            </div>
        </div>
                <div class="form-group">
            <label class="control-label col-sm-2">Basic Salary :</label>
            <div class="col-sm-10"> 
                <input type="text" required="required" class="form-control" name="bsal" id="bsal" placeholder="Enter Basic Salary">
            </div>
        </div>
                <div class="form-group">
            <label class="control-label col-sm-2">House Rent:</label>
            <div class="col-sm-10"> 
                <input type="text" required="required" class="form-control" name="hrent" id="hrent" placeholder="Enter House Rent">
            </div>
        </div>
                        <div class="form-group">
            <label class="control-label col-sm-2">Convince :</label>
            <div class="col-sm-10"> 
                <input type="text" required="required" class="form-control" name="conv" id="conv" placeholder="Enter Convince">
            </div>
        </div>
                        <div class="form-group">
            <label class="control-label col-sm-2">Medical :</label>
            <div class="col-sm-10"> 
                <input type="text" required="required" class="form-control" name="med" id="med" placeholder="Enter Medical allowence">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Provident Fund :</label>
            <div class="col-sm-10"> 
                <input type="text" required="required" class="form-control" name="pfund" id="pfund" placeholder="Enter Provident fund">
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



