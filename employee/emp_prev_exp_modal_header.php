<?php
$result = mysqli_query($con, "select * from emp_prev_exp_modal");
$row = mysqli_fetch_array($result);
?>

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?php print $row['title']; ?></h4>
            </div>
            <div class="modal-body"> 
                 