<?php include("include/header.php");?>
   <div class="container">
   	<div class="jumbotron">
   		<h2 class="display-3" style="text align: center;"> ADMIN & CO ADMIN LOGIN</h2>
   		<hr>
   		<div class="my-4">
   			<div class="row">

              <?php if(count($chkAdminExist)):?>

               <?php else:?>
                  <div class="col-lg-4">
                  <?php echo anchor("welcome/adminRegister", "ADMIN REGISTER", ['class'=>'btn btn-primary']);?>
               </div>
               <?php endif;?>
   				<div class="col-lg-4">
   					<?php echo anchor("welcome/login", "ADMIN LOGIN", ['class'=>'btn btn-primary']);?>
   				</div>
   			</div>
   		</div>
   	</div>

  	</div>
<?php include("include/footer.php");?>