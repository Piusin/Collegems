<?php include("include/header.php");?>
   <div class="container">
   	<h3>ADMIN DASHBOARD</h3>
   	<?php $username = $this->session->userdata('username');?>
   	<h3>Welcome <?php echo $username;?></h3>
   	<?php echo anchor("admin/addCollege", "ADD COLLEGE", ['class'=>'btn btn-primary']);?>
   	<?php echo anchor("admin/addCoadmin", "ADD COADMIN", ['class'=>'btn btn-primary']);?>
   	<?php echo anchor("admin/addStudent", "ADD STUDENT", ['class'=>'btn btn-primary']);?>

    <hr>
    <div class="row">
    	<table class="table table-hover">
    		<thread>
    			<tr>
    				<th scope="col">ID</th>
    				<th scope="col">College Name</th>
    				<th scope="col">Username</th>
    				<th scope="col">Email</th>
    				<th scope="col">Role</th>
    				<th scope="col">Gender</th>
    				<th scope="col">Branch</th>
    			</tr>
    		</thread>
    		<tbody>
    			<tr class="table-active">
    				<td>Column</td>
    				<td>Column</td>
    				<td>Column</td>
    				<td>Column</td>
    				<td>Column</td>
    				<td>Column</td>
    				<td>Column</td>
    		</tbody>
    	</table>
    </div>

   		</div>
<?php include("include/footer.php");?>