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

$this->Form->templates($form_templates['pw']);

$this->Html->addCrumb ( __d('CakeDC/Users', 'Please enter the new password'), array(
		'plugin' => 'CakeDC/Users',
		'controller' => 'Users',
		'action'=>'add'
));

?>

<div class="box box-warning">
	<div class="box-header with-border">
		<h3 class="box-title"><?= __d('CakeDC/Users', 'Please enter the new password') ?></h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse">
				<i class="fa fa-minus"></i>
			</button>
		</div>
	</div>
	<!-- /.box-header -->
	
	<?= $this->Flash->render('auth') ?>
    <?= $this->Form->create($user, array('class'=>'form-horizontal')); ?>
    	
		<div class="box-body">
		
		<?php if ($validatePassword) : ?>
					
			<div class="form-group">
				<label for="inputText2" class="col-md-2 control-label"><?php echo __d('CakeDC/Users', 'Current password'); ?></label>
				<div class="col-sm-4">
		           <?php
						echo $this->Form->control ( 'current_password', array (
								'type' => 'password',
								'label' => false,
								'div' => false,
								'class' => 'form-control',
								'placeholder' => __d('CakeDC/Users', 'Current password'),
								'templateVars' => ['icon'=>'fa fa-key'],
						) );
					?>
				</div>
			</div>
			<?php endif; ?>
			<div class="form-group">
				<label for="inputText2" class="col-md-2 control-label"><?php echo __d('CakeDC/Users', 'New password'); ?></label>
				<div class="col-sm-4">
			           <?php
							echo $this->Form->control ( 'password', array (
									'type' => 'password',
									'label' => false,
									'div' => false,
									'class' => 'form-control',
									'placeholder' => __d('CakeDC/Users', 'New password'),
									'templateVars' => ['icon'=>'fa fa-lock'],
							) );
						?>
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail1" class="col-md-2 control-label"><?php echo __d('CakeDC/Users', 'Confirm password'); ?></label>
				<div class="col-sm-4">
			           <?php
							echo $this->Form->control ( 'password_confirm', array (
									'type' => 'password',
									'label' => false,
									'div' => false,
									'class' => 'form-control',
									'placeholder' => __d('CakeDC/Users', 'Confirm password'),
									'templateVars' => ['icon'=>'fa fa-lock'],
							) );
						?>
					</div>
				</div>
			</div>

		<!-- /.box-body -->
		<div class="box-footer">
		    <?= $this->Form->button(__d('CakeDC/Users', 'Submit'),array('class'=>'btn btn-warning pull-right')) ?>
		</div>
	<?= $this->Form->end() ?>
		<!-- /.box-footer -->
	<!-- /.box-body -->
	<div class="box-footer">
		Visit <a href="https://github.com/CakeDC/users">CakeDC/Users
			documentation</a> for more examples and information about the plugin.
	</div>
</div>