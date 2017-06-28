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

$Users = ${$tableAlias};

$this->Html->addCrumb ( __d('CakeDC/Users', 'List Users') , [
		'plugin' => 'CakeDC/Users',
		'controller' => 'Users',
		'action'=>'index',
] );

$this->Html->addCrumb ( __d('CakeDC/Users', 'View') , [
		'plugin' => 'CakeDC/Users',
		'controller' => 'Users',
		'action'=>'view',
		$Users->id
] );

?>

<div class="box box-success">
	<div class="box-header with-border">
		<h3 class="box-title"><?= __d('CakeDC/Users', 'View') ?></h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse">
				<i class="fa fa-minus"></i>
			</button>
		</div>
	</div>
	<!-- /.box-header -->
	
	<?= $this->Form->create(${$tableAlias}, array('class'=>'form-horizontal')); ?>
	
		<div class="box-body">

			<div class="form-group">
				<label for="first_name" class="col-md-2 control-label"><?php echo __d('CakeDC/Users', 'Id'); ?></label>
				<div class="col-sm-8">
		           <?php
						echo $this->Form->control ( 'first_name', array (
								'label' => false,
								'div' => false,
								'class' => array (
										'form-control' 
								),
								'placeholder' => __d('CakeDC/Users', 'Id'),
								'disabled'	=> true,
								'value'	=> h($Users->id)
						) );
					?>
				</div>
			</div>
			
			<div class="form-group">
				<label for="username" class="col-md-2 control-label"><?php echo __d ( 'CakeDC/Users', 'First Name' ); ?></label>
				<div class="col-sm-8">
		           <?php
						echo $this->Form->control ( 'first_name', array (
								'label' => false,
								'div' => false,
								'class' => array (
										'form-control' 
								),
								'placeholder' => __d ( 'CakeDC/Users', 'First Name' ),
								'disabled'	=> true,
								'value'	=> h($Users->first_name)
						) );
					?>
				</div>
			</div>

			<div class="form-group">
				<label for="password" class="col-md-2 control-label"><?php echo __d ( 'CakeDC/Users', 'Last Name' ); ?></label>
				<div class="col-sm-8">
		           <?php
						echo $this->Form->control ( 'last_name', array (
								'label' => false,
								'div' => false,
								'class' => array (
										'form-control' 
								),
								'placeholder' => __d ( 'CakeDC/Users', 'Last Name' ),
								'disabled'	=> true,
								'value'	=> h($Users->last_name)
						) );
					?>
				</div>
			</div>
			
			<div class="form-group">
				<label for="email" class="col-md-2 control-label"><?php echo __d ( 'CakeDC/Users', 'Email' ); ?></label>
				<div class="col-sm-8">
		           <?php
						echo $this->Form->control ( 'email', array (
								'label' => false,
								'div' => false,
								'class' => array (
										'form-control' 
								),
								'placeholder' => __d ( 'CakeDC/Users', 'Email' ),
								'disabled'	=> true,
								'value'	=> h($Users->email)
						) );
					?>
				</div>
			</div>

			<div class="form-group">
				<label for="password" class="col-md-2 control-label"><?php echo __d ( 'CakeDC/Users', 'Token' ); ?></label>
				<div class="col-sm-8">
		           <?php
						echo $this->Form->control ( 'token', array (
								'label' => false,
								'div' => false,
								'class' => array (
										'form-control' 
								),
								'placeholder' => __d ( 'CakeDC/Users', 'Token' ),
								'disabled'	=> true,
								'value'	=> h($Users->token)
						) );
					?>
				</div>
			</div>
			
			<div class="form-group">
				<label for="token_expires" class="col-md-2 control-label"><?php echo __d('CakeDC/Users', 'Token Expires'); ?></label>
				<div class="col-sm-3">
					<div class="input-group date">
			           <?php
							echo $this->Form->control ( 'token_expires', array (
									'type' => 'text',
									'label' => false,
									'div' => false,
									'class' => array (
											'form-control','datepicker'
									),
									'placeholder' => __d('CakeDC/Users', 'Token Expires'),
									'disabled' => true,
									'value' => h($Users->token_expires)
							) );
						?>
		                <div class="input-group-addon">
	                    	<i class="fa fa-calendar"></i>
	                  	</div>
					</div>
				</div>
			</div>
			
			<div class="form-group">
				<label for="password" class="col-md-2 control-label"><?php echo __d ( 'CakeDC/Users', 'API token' ); ?></label>
				<div class="col-sm-8">
		           <?php
						echo $this->Form->control ( 'api_token', array (
								'label' => false,
								'div' => false,
								'class' => array (
										'form-control' 
								),
								'placeholder' => __d ( 'CakeDC/Users', 'API token' ),
								'disabled'	=> true,
								'value'	=> h($Users->api_token)
						) );
					?>
				</div>
			</div>
			
			<div class="form-group">
				<label for="activation_date" class="col-md-2 control-label"><?php echo __d('CakeDC/Users', 'Activation date'); ?></label>
				<div class="col-sm-3">
					<div class="input-group date">
			           <?php
							echo $this->Form->control ( 'activation_date', array (
									'type' => 'text',
									'label' => false,
									'div' => false,
									'class' => array (
											'form-control','datepicker'
									),
									'placeholder' => __d('CakeDC/Users', 'Activation date'),
									'disabled' => true,
									'value' => h($Users->activation_date)
							) );
						?>
		                <div class="input-group-addon">
	                    	<i class="fa fa-calendar"></i>
	                  	</div>
					</div>
				</div>
			</div>
			
			<div class="form-group">
				<label for="tos_date" class="col-md-2 control-label"><?php echo __d('CakeDC/Users', 'Tos Date'); ?></label>
				<div class="col-sm-3">
					<div class="input-group date">
			           <?php
							echo $this->Form->control ( 'tos_date', array (
									'type' => 'text',
									'label' => false,
									'div' => false,
									'class' => array (
											'form-control','datepicker'
									),
									'placeholder' => __d('CakeDC/Users', 'Tos Date'),
									'disabled' => true,
									'value' => h($Users->tos_date)
							) );
						?>
		                <div class="input-group-addon">
	                    	<i class="fa fa-calendar"></i>
	                  	</div>
					</div>
				</div>
			</div>
			
			<div class="form-group">
				<label for="last_name" class="col-md-2 control-label"><?php echo __d ( 'CakeDC/Users', 'Username' ); ?></label>
				<div class="col-sm-8">
		           <?php
						echo $this->Form->control ( 'last_name', array (
								'label' => false,
								'div' => false,
								'class' => array (
										'form-control' 
								),
								'placeholder' => __d ( 'CakeDC/Users', 'Username' ),
								'disabled'	=> true,
								'value'	=> h($Users->username)
						) );
					?>
				</div>
			</div>
			
			<div class="form-group">
				<label for="password" class="col-md-2 control-label"><?php echo __d ( 'CakeDC/Users', 'Role' ); ?></label>
				<div class="col-sm-8">
		           <?php
						echo $this->Form->control ( 'role', array (
								'label' => false,
								'div' => false,
								'class' => array (
										'form-control' 
								),
								'placeholder' => __d ( 'CakeDC/Users', 'Role' ),
								'disabled'	=> true,
								'value'	=> h($Users->role)
						) );
					?>
				</div>
			</div>
			
			<div class="form-group">
				<label for="activation_date" class="col-md-2 control-label"><?php echo __d('CakeDC/Users', 'Created'); ?></label>
				<div class="col-sm-3">
					<div class="input-group date">
			           <?php
							echo $this->Form->control ( 'created', array (
									'type' => 'text',
									'label' => false,
									'div' => false,
									'class' => array (
											'form-control','datepicker'
									),
									'placeholder' => __d('CakeDC/Users', 'Created'),
									'disabled' => true,
									'value' => h($Users->created)
							) );
						?>
		                <div class="input-group-addon">
	                    	<i class="fa fa-calendar"></i>
	                  	</div>
					</div>
				</div>
			</div>
   
   			<div class="form-group">
				<label for="activation_date" class="col-md-2 control-label"><?php echo __d('CakeDC/Users', 'Modified'); ?></label>
				<div class="col-sm-3">
					<div class="input-group date">
			           <?php
							echo $this->Form->control ( 'modified', array (
									'type' => 'text',
									'label' => false,
									'div' => false,
									'class' => array (
											'form-control','datepicker'
									),
									'placeholder' => __d('CakeDC/Users', 'Modified'),
									'disabled' => true,
									'value' => h($Users->modified)
							) );
						?>
		                <div class="input-group-addon">
	                    	<i class="fa fa-calendar"></i>
	                  	</div>
					</div>
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<div class="checkbox">
			           <?php
							echo $this->Form->control ( 'active', array (
									'type' => 'checkbox',
									'id' => "inputCheckbox1",
									'label' => __d ( 'CakeDC/Users', 'Active' ),
									'div' => false,
									'disabled'	=> true,
									'checked' => $Users->active

							) );
						?>
					</div>
				</div>
			</div>

		</div>
		<!-- /.box-body -->

	<?= $this->Form->end() ?>
		<!-- /.box-footer -->
	<!-- /.box-body -->
	<div class="box-footer">
		Visit <a href="https://github.com/CakeDC/users">CakeDC/Users
			documentation</a> for more examples and information about the plugin.
	</div>
</div>


<?php if (!empty($Users->social_accounts)) : ?>
	<div>	
		<div class="box box-default box-solid">
			<div class="box-header with-border">
				<h3 class="box-title"><i class="fa fa-users margin-r-5"></i><?= __d('CakeDC/Users', 'Social Accounts') ?></h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse">
						<i class="fa fa-minus"></i>
					</button>
				</div>
			</div>
	
			<div class="box-body">
				<table id="example1" class="table table-bordered table-hover">
					<thead>
						<tr>
	                        <th><?= __d('CakeDC/Users', 'Avatar'); ?></th>
	                        <th><?= __d('CakeDC/Users', 'Provider'); ?></th>
	                        <th><?= __d('CakeDC/Users', 'Link'); ?></th>
	                     	<th><?= __d('CakeDC/Users', 'Active') ?></th>
                    		<th><?= __d('CakeDC/Users', 'Created') ?></th>
                   		 	<th><?= __d('CakeDC/Users', 'Modified') ?></th>
						</tr>
					</thead>
					<tbody>
	                    <?php
	                    	foreach ($Users->social_accounts as $socialAccount):

	                        	$escapedUsername = h($socialAccount->username);
	                        	$linkText = empty($escapedUsername) ? __d('CakeDC/Users', 'Link to {0}', h($socialAccount->provider)) : h($socialAccount->username)
	                	?>
	                        <tr>
	                            <td class="user-block"><?= $this->Html->image( $socialAccount->avatar, ['class'=>['img-responsive img-circle']] ) ?></td>
	                            <td><?= h($socialAccount->provider) ?></td>
	                            <td><?= $this->Html->link( $linkText, $socialAccount->link, ['target' => '_blank']) ?></td>
	                 			<td><?= h($socialAccount->active) ?></td>
                        		<td><?= h($socialAccount->created) ?></td>
                        		<td><?= h($socialAccount->modified) ?></td>
		                        </tr>
	                        <?php
	                    	endforeach;
	                    ?>
				</table>
			</div>
			
		</div>
	</div>
<?php endif; ?>

<script>
  $(function () {
    $('#example1').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": false,
      "autoWidth": false,
      "columnDefs": [
          {className: "dt-center", "targets": "_all"}
        ],

    });
  });
</script>

<style>
#example1 th.dt-center, td.dt-center { 
	vertical-align: middle !important;
}
</style>
