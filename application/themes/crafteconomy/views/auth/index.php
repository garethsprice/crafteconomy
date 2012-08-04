<?php if(!empty($message)): ?>
<div class="alert alert-block alert-error"><?php echo $message;?></div>
<?php endif; ?>

<div class="widget">
							
  <div class="widget-header">
  	<h3><?php echo $template['title']; ?></h3>
  </div> <!-- /widget-header -->
		
  <div class="widget-content">

    <div class="btn-group pull-right">
      <a href="<?php echo site_url('auth/create_user');?>" class="btn"><i class="icon-plus"></i> Create a new user</a>
    </div>

    <?php if(!empty($message)): ?>
    <div class="alert"><?php echo $message;?></div>
    <?php endif; ?>

    <table id="users" class="table table-striped table-condensed table-bordered">
      <thead>
    	<tr>
    		<th>First Name</th>
    		<th>Last Name</th>
    		<th>Email</th>
    		<th>Groups</th>
    		<th>Status</th>
    	</tr>
    	</thead>
    	<tbody>
    	  <?php foreach ($users as $user):?>
    		<tr>
    			<td><?php echo $user->first_name;?></td>
    			<td><?php echo $user->last_name;?></td>
    			<td><?php echo $user->email;?></td>
    			<td>
    			  <?php $group_list = array(); ?>
    				<?php foreach ($user->groups as $group):?>
    					<?php $group_list[] = $group->description; ?>
            <?php endforeach; ?>
            <?php print implode(', ', $group_list); ?>
    			</td>
    			<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, 'Active') : anchor("auth/activate/". $user->id, 'Inactive');?></td>
    		</tr>
    	  <?php endforeach;?>
    	</tbody>
    </table>

  </div>
</div>