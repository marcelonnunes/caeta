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

$this->Html->addCrumb ( __d('CakeDC/Users', 'Add User') , [
		'plugin' => 'CakeDC/Users', 
		'controller' => 'Users', 
		'action'=>'add'
] );

?>

<div class="box box-success">
	<div class="box-header with-border">
		<h3 class="box-title"><?= __d('CakeDC/Users', 'Add User') ?></h3>

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
				<label for="first_name" class="col-md-2 control-label"><?php echo __d ( 'CakeDC/Users', 'First name' ); ?></label>
				<div class="col-sm-8">
		           <?php
						echo $this->Form->control ( 'first_name', array (
								// 'type' => 'text',
								'label' => false,
								'div' => false,
								'class' => array (
										'form-control' 
								),
								'placeholder' => __d ( 'CakeDC/Users', 'First name' ) 
						) );
					?>
				</div>
			</div>

			<div class="form-group">
				<label for="last_name" class="col-md-2 control-label"><?php echo __d ( 'CakeDC/Users', 'Last name' ); ?></label>
				<div class="col-sm-8">
		           <?php
						echo $this->Form->control ( 'last_name', array (
								// 'type' => 'text',
								'label' => false,
								'div' => false,
								'class' => array (
										'form-control' 
								),
								'placeholder' => __d ( 'CakeDC/Users', 'Last name' ) 
						) );
					?>
				</div>
			</div>

			<div class="form-group">
				<label for="email" class="col-md-2 control-label"><?php echo __d ( 'CakeDC/Users', 'Email' ); ?></label>
				<div class="col-sm-8">
		           <?php
						echo $this->Form->control ( 'email', array (
								// 'type' => 'text',
								'label' => false,
								'div' => false,
								'class' => array (
										'form-control' 
								),
								'placeholder' => __d ( 'CakeDC/Users', 'Email' ) 
						) );
					?>
				</div>
			</div>

			<div class="form-group">
				<label for="username" class="col-md-2 control-label"><?php echo __d ( 'CakeDC/Users', 'Username' ); ?></label>
				<div class="col-sm-8">
		           <?php
						echo $this->Form->control ( 'username', array (
								// 'type' => 'text',
								'label' => false,
								'div' => false,
								'class' => array (
										'form-control' 
								),
								'placeholder' => __d ( 'CakeDC/Users', 'Username' ) 
						) );
					?>
				</div>
			</div>

			<div class="form-group">
				<label for="password" class="col-md-2 control-label"><?php echo __d ( 'CakeDC/Users', 'Password' ); ?></label>
				<div class="col-sm-8">
		           <?php
						echo $this->Form->control ( 'password', array (
								// 'type' => 'text',
								'label' => false,
								'div' => false,
								'class' => array (
										'form-control' 
								),
								'placeholder' => __d ( 'CakeDC/Users', 'Password' ) 
						) );
					?>
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
									'div' => false 
							) );
						?>
					</div>
				</div>
			</div>


		</div>
		<!-- /.box-body -->
		<div class="box-footer">
		    <?= $this->Form->button(__d('CakeDC/Users', 'Submit'),array('class'=>'btn btn-success pull-right')) ?>
		</div>
	<?= $this->Form->end() ?>
		<!-- /.box-footer -->
	<!-- /.box-body -->
	<div class="box-footer">
		Visit <a href="https://github.com/CakeDC/users">CakeDC/Users
			documentation</a> for more examples and information about the plugin.
	</div>
</div>

