<?php

echo $this->Html->script('Admin/users_manager');

$this->Html->addCrumb ( __d('CakeDC/Users','Permissions'), [
		'plugin' => 'CakeDC/Users', 
		'controller' => 'Users', 
		'action'=>'index'
] );

?>

<div class="box box-primary">
	<div class="box-header  with-border">
		<h3 class="box-title"><?= __d('CakeDC/Users', 'Users') ?></h3>
		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse">
				<i class="fa fa-minus"></i>
			</button>
		</div>
	</div>

	<div class="box-body">

		<table id="tab_users" class="table table-bordered table-striped table-condensed table-responsive">
			<caption>Usuários do Sistema</caption>
			<thead>
				<tr role="row">
					<th><input id="all_chkbox" type="checkbox"></th>
		            <th><?= __d('CakeDC/Users', 'Username') ?></th>
		            <th><?= __d('CakeDC/Users', 'First name') ?></th>
		            <th><?= __d('CakeDC/Users', 'Last name') ?></th>
	             	<th><?= 'Regra'?></th>
	             	<th><?= 'Status'?></th>
				</tr>
			</thead>
			<tbody>
		        <?php foreach ($usuarios as $user) : ?>
		            <tr>
		            	<td user_id=<?= $user->id ?>><input type="checkbox" value=<?= $user->id ?>></td>
		                <td><?= h($user->username) ?></td>
		                <td><?= h($user->first_name) ?></td>
		                <td><?= h($user->last_name) ?></td>
		                <td><?= h($user->role) ?></td>
		                <td><?= h($user->active) ?></td>
		            </tr>
		        <?php endforeach; ?>
			</tbody>
		</table>

	</div>
		
	<div id="div_rules"></div>	
		
	<div class="box-footer"> <!-- /.box-footer -->
		Visit <a href="https://github.com/CakeDC/users">CakeDC/Users
			documentation</a> for more examples and information about the plugin.
	</div> <!-- /.box-footer -->
	
</div>	