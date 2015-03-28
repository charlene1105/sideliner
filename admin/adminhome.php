<?php  

include_once('php/dbconfig.php');
$sql = "SELECT * FROM users";
$users = mysql_query($sql,$conn);
?>
<div class="col-md-8 col-md-offset-2">
	<div class="panel-body">
		<div class="table-responsive">
		<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th id="userno">User No</th>
				<th>Username</th>
				<th>Full Name</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody id="browseUsers">
			
		
            
                <?php 

               while($row = mysql_fetch_assoc($users)) {
                	
          
                ?>

                <tr>
						
							
							
							
							<td>
								<h5><?php echo $row["userno"]; ?></h5>
								
							</td>
							
							<td>
								<h5><?php echo $row["username"]; ?></h5>
							</td>
							
							<td>
								<h5><?php echo $row["fname"]. ' '. $row['lname']; ?></h5>
							</td>
							
							<td>
								<h5><?php echo $row['status'] ?></h5>
							</td>
							

							<td>
								<?php if ($row['status'] == 'registered'): ?>
									<button class="btn btn-danger ban" id="<?= $row['userno'] ?>">
									Ban
									</button>

								<?php else: ?>
									<button class="btn btn-primary unban" id="<?= $row['userno'] ?>">
									Unban
									</button>
								<?php endif ?>
								
								
								
							</td>
							
							
					
						</tr>
						
				<?php 
				}
				?>

				</tbody>
			</table>
				</div>
           
        </div><!-- /. Panel body -->
</div>

<script>
$(function(){
	$('.ban').click(function(){
		var id = $(this).attr('id');
		$.get('php/banuser.php?userno=' + id, function(data) {
		
			window.location.href = "index.php";
		});
	}); //ban

	$('.unban').click(function(){
		var id = $(this).attr('id');
		$.get('php/unbanuser.php?userno=' + id, function(data) {
	
			window.location.href = "index.php";
		});
	}); //unban


});
</script>