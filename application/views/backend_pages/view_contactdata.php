<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
</head>

<script>
function doconfirm()
{
    job=confirm("Are you sure to delete permanently?");
    if(job!=true)
    {
        return false;
    }
}
</script>
 
<body>
    <div class="container">
            <div class="row">
                <h3>Data from Contact form</h3>
            </div>
            <div class="row">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>S_No.</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email Address</th>
                      <th>Message</th>
                      <th>Date Received</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                     foreach ($result as $row) 
                     {  
                        ?><tr>  
                        <td><?php echo $row->s_no;?></td>
                        <td><?php echo $row->firstname;?></td>  
                        <td><?php echo $row->lastname;?></td>
                        <td><?php echo $row->email;?></td> 
                        <td><?php echo $row->message;?></td> 
                        <td><?php echo $row->received_date;?></td>
                        <td width=250>
                        <a class="btn btn-success" href="<?php echo base_url('Contact_ctrl/update_contactdata'); ?>/<?php echo $row->s_no;?>">Update</a> &nbsp;
                        <a class="btn btn-danger" href="<?php echo base_url('Contact_ctrl/delete_contactdata'); ?>/<?php echo $row->s_no?>" onClick="return doconfirm();">Delete</a>
                        </td>
                        </tr>  
                      <?php } 
                      ?> 
                  </tbody>
            </table>
        </div>
    </div> <!-- /container -->
  </body>
</html>