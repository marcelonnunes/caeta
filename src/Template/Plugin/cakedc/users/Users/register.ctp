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
$this->Form->templates($form_templates['register']);
?>

<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg"><?= __d('CakeDC/Users', 'Add User') ?></p>

    <?= $this->Form->create($user,array('class'=>'form-horizontal'));?>
      <div class="form-group has-feedback">
	     <?php
			echo $this->Form->control('first_name',array(
					'tytpe' => 'text',
					'label' => false,
					'div' => false,
					'class' => array ('form-control'),
					'placeholder' => __d ( 'CakeDC/Users', 'First name' ) 
			) );
		?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
	        <?php
				echo $this->Form->control ( 'last_name', array (
						'label' => false,
						'div' => false,
						'class' => array ('form-control'),
						'placeholder' => __d ( 'CakeDC/Users', 'Last name' ) 
				) );
			?>
        <span class="fa fa-ellipsis-h form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
      		<?php
				echo $this->Form->control ( 'email', array (
						'label' => false,
						'div' => false,
						'class' => array ('form-control'),
						'placeholder' => __d ( 'CakeDC/Users', 'Email' ) 
				) );
			?>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        	<?php
				echo $this->Form->control ( 'username', array (
						'label' => false,
						'div' => false,
						'class' => array ('form-control'),
						'placeholder' => __d ( 'CakeDC/Users', 'Username' ) 
				) );
			?>
        <span class="fa fa-vcard-o form-control-feedback"></span>
      </div>
       
      <div class="form-group has-feedback">
           <?php
				echo $this->Form->control ( 'password', array (
						'label' => false,
						'div' => false,
						'placeholder' => __d ( 'CakeDC/Users', 'Password' ),
						'class' => 'form-control'
				) );
			?>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      
      <div class="form-group has-feedback">
           <?php
	           echo $this->Form->control ( 'password_confirm', array (
	           		'type' => 'password',
	           		'label' => false,
	           		'div' => false,
	           		'placeholder' => __d ( 'CakeDC/Users', 'Confirm password' ),
	           		'class' => 'form-control',
	           ) );
			?>
      	<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      
		<div class="form-group has-feedback" align="center">
	      <?php 
	      	if (Configure::read('Users.reCaptcha.registration')) {
	      		echo $this->User->addReCaptcha();
	      	}
	      ?>
		</div>
	
      <div class="row form-inline">
	        <div class="col-xs-8">
	           	<?php
		           if (Configure::read('Users.Tos.required')) {
		           		echo $this->Form->control('tos', [
		           				'type' => 'checkbox', 
		           				'label' => __d('CakeDC/Users', 'Accept TOS conditions?'),
		           				'required' => true,
		           				'div' => false]);
		           }
				?>
	        </div>
	        <!-- /.col -->
	        <div class="col-xs-4">
	          <?= $this->Form->button(__d('CakeDC/Users', 'Submit'),array('class'=>'btn btn-primary btn-block btn-flat')) ?>
	        </div>
	        <!-- /.col -->
      </div>
    <?= $this->Form->end() ?>
	<br>
	<?php echo $this->Html->link(__d('CakeDC/Users', 'I already have a membership'), ['action' => 'login'],array('class'=>'text-center'));?>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->


<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>

