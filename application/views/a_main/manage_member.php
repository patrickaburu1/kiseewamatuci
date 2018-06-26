<!-- Content area -->
	<div class="content">

	<!-- Basic datatable -->
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h5 class="panel-title">Basic datatable</h5>
				<div class="heading-elements">
					<ul class="icons-list">
                		<li><a data-action="collapse"></a></li>
                		<li><a data-action="reload"></a></li>
                		<li><a data-action="close"></a></li>
                	</ul>
            	</div>
			</div>

			<table class="table datatable-basic">
				<thead>
					<tr>
						<th>Member Name</th>
						<th>Phone Number</th>
						<th>Email</th>
						<th>Role</th>
						<th class="text-center">Actions</th>
					</tr>
				</thead>
				<tbody>

				<?php 
				// echo "<pre>";
				// print_r($members);
				foreach ($members as $member) { ?>
				 
					<tr>
						<td><?php echo $member['full_name']; ?></td>
						<td><?php echo $member['phone_number']; ?></td>
						<td><?php echo $member['email_address']; ?></td>
						<td>
						<?php
						if($member['Role'] == 0):
							echo "<span class='label label-success'> Member</span>";
						endif;
						if($member['Role'] == 1):
							echo "<span class='label label-info'> Admin</span>";
						endif;

						if($member['Role'] == 2):
							echo "<span class='label label-danger'> S. Admin</span>";
						endif;

						?>
						</td>
						<td class="text-center">
							<ul class="icons-list">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="icon-menu9"></i>
									</a>

									<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#" data-toggle="modal" data-target="#invoice">
										<i class="icon-eye8"></i> Role</a></li>
										<li><a href="#"><i class="icon-file-download"></i> Block/unblock</a></li>
									</ul>
								</li>
							</ul>
						</td>
					</tr>
					<?php
					}
				?>
				</tbody>
			</table>
		</div>
		</div>
		<!-- /dashboard content -->
