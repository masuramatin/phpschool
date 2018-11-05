<?php
//session_start();
//connect with database
include "../db/connection.php";

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
      body {
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
        /*background: #000 url(bg-texture.png) repeat;
        color: #dddddd;*/
      }
      
      h1, h3 {
        margin: 0;
        padding: 0;
        font-weight: normal;
      }
      
      a {
        color: #EB067B;
      }
      
      div#container {
        width: 580px;
        margin: 100px auto 0 auto;
        padding: 20px;
        background: #000;
        border: 1px solid #1a1a1a;
      }
      
      /* HOVER STYLES */
      div#pop-up {
        display: none;
        position: absolute;
        width: 380px;
        padding: 10px;
        background: #eeeeee;
        color: #000000;
        border: 1px solid #1a1a1a;
        font-size: 90%;
      }
    </style>

<!-- display -->

<div class="container">
    <h2>Employee leave</h2>


    <!--search-->

 <div class="modal-body" align="right" >
	<form class="form-horizontal" method="post" action="">
	        <div class="input-group col-md-4" >
                    <input type="text" class="form-control input-md" placeholder="Search by ID" name="search" id="search" />
                    <br />
                    Applied for Leave
                    From:
                     <input type="date" class="form-control input-md"  name="fdate" id="fdate" />
                    To:
                     <input type="date" class="form-control input-md"  name="tdate" id="tdate" />                                        
                    <span class="input-group-btn">
                        <input class="btn btn-info btn-md" type="submit" name="submit1" id="submit1" value="Search" />

                    </span>
            </div>
	</form>
    <div align="right"><button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">Add Employee Leave</button></div>

 </div>
<?php
$ds=0;
if(@$_POST['search']>0){
	$ds=1;
}
if(@$_POST['fdate']>0 && $_POST['tdate']>0){
	$ds=2;
}
?>
<!--search end-->
    
<?php

	if($ds==0){
?>
    <table class="table">
        <thead>

            <tr>
            	<th>Employee ID</th>
                <th>Leave Type</th>
                <th>Leave From</th>
                <th>Leave To</th>
                <th>Apporved Status</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
        
     <?php
	//select query
		$sql = "select * from school_employee_leave where status=1 limit 100";
	//query execution
		$result=mysqli_query($con,$sql);
	//fetch data from result set
$i=1;
            while ($row = mysqli_fetch_array($result)) {
                ?>        
                <tr>
                    <td>
                    <input type="hidden" id="id" name="id" value="<?php print $row['id']; ?>">
					<?php print $row['employee_id']; ?>					
                    </td>
                    <td><?php print $row['leave_type']; ?></td>
                    <td><?php print $row['leave_from']; ?></td>
                    <td><?php print $row['leave_to']; ?></td>
                    <td><?php print $row['approved_status']; ?></td>
                    <td><a href="emp_leave_edit.php?id=<?php print $row['employee_id']; ?>" id="edit"><button class="btn btn-primary">Edit</button></a></td>
                    <td><a href="emp_leave_delete.php?id=<?php print $row['employee_id']; ?>" id="delete"><button class="btn btn-danger">Delete</button></a></td>   
                        
                    <td><a href="emp_leave_view.php?id=<?php print $row['employee_id']; ?>" id="view"><button class="btn btn-info" >View</button></a></td>            
                </tr>
                <?php
				$i++;
            }
            ?>

        </tbody>
    </table>
<?php } 
elseif($ds==1){
	include "emp_leave_search.php";
	
}
elseif($ds==2){
	include "emp_leave_search1.php";
	
}
?>    



<div id="pop-up">
        <h3>Pop-up div Successfully Displayed</h3>
        <p>
          <?php
//query to retrieve data 
			
            ?>
        </p>
      </div>

<script type="text/javascript">
      $(function() {
        var moveLeft = 20;
        var moveDown = 10;
        
        $('a#view').hover(function(e) {
          $('div#pop-up').show();
          //.css('top', e.pageY + moveDown)
          //.css('left', e.pageX + moveLeft)
          //.appendTo('body');
        }, function() {
          $('div#pop-up').hide();
        });
        
        $('a#view').mousemove(function(e) {
          $("div#pop-up").css('top', e.pageY + moveDown).css('left', e.pageX + moveLeft);
        });
        
      });
    </script>


<!-- Form end -->
<!-- Form start  -->
<!-- Modal  -->
<?php include "emp_leave_modal_header.php"; ?>

<!--  modal code start here -->
<p>
<div>

    <form class="form-horizontal"  method="post" action="" enctype="multipart/form-data">
        
        <div class="form-group">
        
            <label class="control-label col-sm-3" for="employee_id">Employee ID :</label>
            <div class="col-sm-9">
                <?php
		   //query to get id from employee personal information table
		   		$sql1 = "select * from school_emp_personal_info where status=1";
		   //query execution
		   $result1=mysqli_query($con,$sql1);
		   ?>
           		<select name="employee_id" id="employee_id" required aria-required="true">
 							
                            <option required aria-required="true" value="">None</option>
                            <?php
                            while($row1 = mysqli_fetch_array($result1)){
								?>                            
                            <option value="<?php echo $row1['id']; ?>"><?php echo $row1['id']; ?></option>
							<?php } ?>

                    </select>
            </div>
         </div>

        
        <div class="form-group">
            <label class="control-label col-sm-3" for="leave_type">Leave Type:</label>
            <div class="col-sm-9"> 
            	<select class="form-control" name="leave_type" id="leave_type" placeholder="" required>
                	<option value="">Select</option>
                    <option value="casuel">Casuel</option>
                    <option value="suck">Suck</option>
                    <option value="general">General</option>
                </select>
                <!--  modal code start here 
                <input type="text" class="form-control" name="leave_type" id="leave_type" placeholder="" required>-->
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="leave_from">Leave From:</label>
            <div class="col-sm-9"> 
                <input type="date" class="form-control" name="leave_from" id="leave_from" placeholder="Enter Contact Number" required>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="leave_to">Leave To:</label>
            <div class="col-sm-9"> 
                <input type="date" class="form-control" name="leave_to" id="leave_to" placeholder="Enter Your E-mail" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="approved_status">Approved Status :</label>
            <div class="col-sm-9"> 
                <select class="form-control" name="approved_status" id="approved_status" placeholder="" required>
                    <option value="<?php print $row['approved_status']; ?>"><?php print $row['approved_status']; ?></option>
                    <option value="pending">Pending</option>
                    <option value="append">Append</option>
                    <option value="active">Active</option>
                </select>
            

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
	$employee_id = $_POST['employee_id'];
    $leave_type = $_POST['leave_type'];
    $leave_from = $_POST['leave_from'];
	$leave_to = $_POST['leave_to'];
	$approved_status = $_POST['approved_status'];
	$total_leave = $_POST['total_leave'];

	
	
// query for insertion
$sql_ins = "insert into school_employee_leave values ('','$employee_id','$leave_type','$leave_from','$leave_to','$approved_status','$total_leave',1);";

//query execution

$result_ins=mysqli_query($con,$sql_ins);

?>
<script>
window.location="emp_leave_info.php";

</script>
<?php
}
?>




