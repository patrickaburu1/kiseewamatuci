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
            	</ul>
        	</div>
		</div>

		<table class="table datatable-basic">
			<thead>
				<tr>
					<th>Member Name</th>
					<th>Phone Number</th>
					<th>Member D.O.B</th>
					<th>Status</th>
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
					<td><?php echo $member['dob']; ?></td>
					<td>
					<?php
					if($member['active'] == 1):
						echo "<span class='label label-success'>active</span>";
					else:
						echo "<span class='label label-danger'>inactive</span>";
					endif;
					?>
					</td>
					<td class="text-center">
						<ul class="icons-list">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-menu9"></i>
								</a>
								<?php
									$member_details = array('name_kin' => $member['next_of_kin_name'], 
															'email_kin' => $member['next_of_kin_email'],
															'phone_kin' => $member['next_of_kin_phone'],
															'id_kin' => $member['next_of_kin_id'],
															'id_member' => $member['id_number'],
															'email_member' => $member['email_address'],
															'name_member' => $member['full_name'],
															'phone_member' => $member['phone_number'],
															'date_member' => $member['date_created'],);
								?>
								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#" data-toggle="modal" data-target="#invoice"
									data-userid ="<?php print_r($member_details); ?>">
									<i class="icon-eye8"></i> more details</a></li>
									<li><a href="#"><i class="icon-file-download"></i> Export to csv</a></li>
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

<script type="text/javascript">
$('[data-userid]').click(function(){
var userid = $(this).data('userid');

var data_array = document.getElementById('data_array');
data_array.value=userid;
});
</script>