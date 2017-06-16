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
use Cake\Core\Configure;

// $this->Html->addCrumb (__d('CakeDC/Users', 'Edit User'), [
// 		'plugin' => 'CakeDC/Users',
// 		'controller' => 'Users',
// 		'action'=>'edit'
// ] );

$this->Html->addCrumb ('Pesquisar', [
		'plugin' => 'CakeDC/Users',
		'controller' => 'Users',
		'action'=>'index'
] );

$this->Html->addCrumb ( __d('CakeDC/Users', 'Edit User') , [
		'plugin' => 'CakeDC/Users',
		'controller' => 'Users',
		'action'=> 'edit', 
		$Users->id
] );

$Users = ${$tableAlias};

?>

<div class="box box-danger">
	<div class="box-header with-border">
		<h3 class="box-title"><?=__d('CakeDC/Users', 'Edit User')?></h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse">
				<i class="fa fa-minus"></i>
			</button>
		</div>
	</div>
	<!-- /.box-header -->

	<?= $this->Form->create($Users, array('class'=>'form-horizontal')); ?>
		
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
				<label for="token" class="col-md-2 control-label"><?php echo __d('CakeDC/Users', 'Token'); ?></label>
				<div class="col-sm-8">
		           <?php
						echo $this->Form->control ( 'token', array (
								// 'type' => 'text',
								'label' => false,
								'div' => false,
								'class' => array (
										'form-control' 
								),
								'placeholder' => __d ( 'CakeDC/Users', 'Token' ) 
						) );
					?>
				</div>
			</div>
			
			<div class="form-group">
				<label for="token_expires" class="col-md-2 control-label"><?php echo __d('CakeDC/Users', 'Token expires'); ?></label>
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
									'placeholder' => __d('CakeDC/Users', 'Token expires')
							) );
						?>
		                <div class="input-group-addon">
	                    	<i class="fa fa-calendar"></i>
	                  	</div>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label for="api_token" class="col-md-2 control-label"><?php echo __d('CakeDC/Users', 'API token'); ?></label>
				<div class="col-sm-8">
		           <?php
						echo $this->Form->control ( 'api_token', array (
								// 'type' => 'text',
								'label' => false,
								'div' => false,
								'class' => array (
										'form-control' 
								),
								'placeholder' => __d ( 'CakeDC/Users', 'API token' ) 
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
									'placeholder' => __d('CakeDC/Users', 'Activation date')
							) );
						?>
		                <div class="input-group-addon">
	                    	<i class="fa fa-calendar"></i>
	                  	</div>
					</div>
				</div>
			</div>
   
			<div class="form-group">
				<label for="tos_date" class="col-md-2 control-label"><?php echo __d('CakeDC/Users', 'TOS date'); ?></label>
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
									'placeholder' => __d('CakeDC/Users', 'TOS date')
							) );
						?>
		                <div class="input-group-addon">
	                    	<i class="fa fa-calendar"></i>
	                  	</div>
					</div>
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
									'label' => __d ( 'CakeDC/Users', 'Active' ),
									'div' => false 
							) );
						?>
					</div>
				</div>
			</div>

 			<?php if (Configure::read('Users.GoogleAuthenticator.login')) : ?>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-4">
			            <?= $this->Form->postLink('<i class="fa fa-google"></i>'.
			                __d('CakeDC/Users', 'Reset Google Authenticator Token'), [
			                'plugin' => 'CakeDC/Users',
			                'controller' => 'Users',
			                'action' => 'resetGoogleAuthenticator', $Users->id
			            ], [
			                'class' => 'btn btn-block btn-social btn-google',
			            	'escape' => false,	
			                'confirm' => __d(
			                    'CakeDC/Users',
			                    'Are you sure you want to reset token for user "{0}"?', $Users->username
			                )
			            ]);
			            ?>
					</div>
				</div>
			<?php endif; ?>

		</div>
		<!-- /.box-body -->
		<div class="box-footer">
		    <?= $this->Form->button(__d('CakeDC/Users', 'Submit'),array('class'=>'btn btn-danger pull-right')) ?>
		</div>
	<?= $this->Form->end() ?>
		<!-- /.box-footer -->
	<!-- /.box-body -->
	<div class="box-footer">
		Visit <a href="https://github.com/CakeDC/users">CakeDC/Users
			documentation</a> for more examples and information about the plugin.
	</div>
</div>


<script>

$( document ).ready(function() {

	$('.datepicker').datepicker({
	  autoclose: true,
	  language: 'pt-BR'
	});
	
});

</script>