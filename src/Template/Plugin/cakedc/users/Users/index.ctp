<?php
/**
 * Copyright 2010 - 2017, Cake Development Corporation (https://www.cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2017, Cake Development Corporation (https://www.cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$this->Html->addCrumb ( __d('CakeDC/Users','List Users'), [
		'plugin' => 'CakeDC/Users', 
		'controller' => 'Users', 
		'action'=>'index'
] );

?>

<div class="box box-primary">
	<div class="box-header">
		<h3 class="box-title"><?= __d('CakeDC/Users', 'List Users') ?></h3>
	</div>
	<!-- /.box-header -->

	<div class="box-body no-padding"> <!-- /.box-body -->

			<table id="tab_users2" class="table table-bordered table-striped">
				<thead>
					<tr role="row">
			            <th><?= $this->Paginator->sort('username', __d('CakeDC/Users', 'Username')) ?></th>
			            <th class="sorting"><?= $this->Paginator->sort('email', __d('CakeDC/Users', 'Email')) ?></th>
			            <th><?= $this->Paginator->sort('first_name', __d('CakeDC/Users', 'First name')) ?></th>
			            <th><?= $this->Paginator->sort('last_name', __d('CakeDC/Users', 'Last name')) ?></th>
			            <th class="actions"><?= __d('CakeDC/Users', 'Actions') ?></th>
					</tr>
				</thead>
				<tbody>
			        <?php foreach (${$tableAlias} as $user) : ?>
			            <tr>
			                <td><?= h($user->username) ?></td>
			                <td><?= h($user->email) ?></td>
			                <td><?= h($user->first_name) ?></td>
			                <td><?= h($user->last_name) ?></td>
			                <td class="actions" align="center">
								<?= $this->Html->link("<i class='fa fa-eye'></i>", ['action' => 'view', $user->id],array('class'=>'btn  btn-default','escape' => false)) ?>
				                <?= $this->Html->link("<i class='fa fa-key'></i>", ['action' => 'changePassword', $user->id],array('class'=>'btn  btn-default','escape' => false)) ?>	
				                <?= $this->Html->link("<i class='fa fa-pencil'></i>", ['action' => 'edit', $user->id],array('class'=>'btn  btn-default','escape' => false)) ?>
 								<?= $this->Form->postLink("<i class='fa fa-trash'></i>", ['action' => 'delete', $user->id], [
 										'confirm' => __d('CakeDC/Users', 'Are you sure you want to delete # {0}?', $user->id),
 										'class'=>'btn  btn-default','escape' => false]) ?>
			                </td>
			            </tr>
			        <?php endforeach; ?>
				</tbody>
			</table>
			
			<div class="col-sm-5">
				<div class="dataTables_info" id="tab_users_info" role="status" aria-live="polite">
					<?php echo $this->Paginator->counter(
						'Página {{page}} de {{pages}}, 
						mostrando {{current}} registros de {{count}} no total'
					);?>
				</div>
			</div>
			<div class="box-footer clearfix">
				<ul class="pagination no-margin pull-right">
	            	<?= $this->Paginator->prev(ucfirst(__d('CakeDC/Users', 'previous'))) ?>
		            <?= $this->Paginator->numbers() ?>
		            <?= $this->Paginator->next(ucfirst(__d('CakeDC/Users', 'next'))) ?>
              	</ul>
			</div>

	</div> <!-- /.box-body -->
		
	<div class="box-footer"> <!-- /.box-footer -->
		Visit <a href="https://github.com/CakeDC/users">CakeDC/Users
			documentation</a> for more examples and information about the plugin.
	</div> <!-- /.box-footer -->
</div>


<script>

$( document ).ready(function() {
	
	$(function () {
		$('#tab_users').DataTable({
			"paging": true,
		    "lengthChange": true,
		    "searching": true,
		    "ordering": true,
		    "info": true,
		    "autoWidth": false,
		    "language": {
	     		"url": "../js/datatables/Portuguese-Brasil.json"
	         }
		});
	});
	
});
  
</script>

