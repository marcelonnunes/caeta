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
?>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg"><?= __d('CakeDC/Users', 'Please enter your username and password') ?></p>

  	<?= $this->Flash->render('auth') ?>
    <?= $this->Form->create() ?>
    
      <div class="form-group has-feedback">
           <?php
				echo $this->Form->control ( 'username', array (
						'label' => false,
						'div' => false,
						'class' => array (
								'form-control' 
						),
						'placeholder' => __d('CakeDC/Users', 'Username'),
						'required' => true
				) );
			?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
             <?php
				echo $this->Form->control ( 'password', array (
						'label' => false,
						'div' => false,
						'class' => array (
								'form-control' 
						),
						'placeholder' => __d('CakeDC/Users', 'Password'),
						'required' => true
				) );
			?>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      
   	<div class="form-group has-feedback" align="center">
	      <?php 
	      	if (Configure::read('Users.reCaptcha.login')) {
	      		echo $this->User->addReCaptcha();
	      	}
	      ?>
	</div>
      
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <?php
				if (Configure::read ( 'Users.RememberMe.active' )) {
					echo $this->Form->control ( Configure::read ( 'Users.Key.Data.rememberMe' ), [ 
							'type' => 'checkbox',
							'label' => ' '.__d ( 'CakeDC/Users', 'Remember me' ),
							'checked' => Configure::read ( 'Users.RememberMe.checked' ),
							'div' => false,
					] );
				}

            ?>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
            <?= $this->Form->button(__d('CakeDC/Users', 'Login'), array("class" => "btn btn-primary btn-block btn-flat")); ?>
    		<?= $this->Form->end() ?>
        </div>
        <!-- /.col -->
      </div>

	<div class="social-auth-links text-center">
		<p>- OR -</p>

		<?=implode ( ' ', $this->User->socialLoginList ( array (
				'facebook' => array ('class' => 'btn btn-block' ),
				'twitter' => array ('class' => 'btn btn-block' ),
				'instagram' => array ('class' => 'btn btn-block' ),
				'google' => array ('class' => 'btn btn-block' ) ) ) );?>
    </div>
	<!-- /.social-auth-links -->

  	<?php
        $registrationActive = Configure::read('Users.Registration.active');
        if ($registrationActive) {
            echo $this->Html->link(__d('CakeDC/Users', 'Register'), ['action' => 'register']);
        }
        if (Configure::read('Users.Email.required')) {
            if ($registrationActive) {
                echo ' | ';
            }
            echo $this->Html->link(__d('CakeDC/Users', 'Reset Password'), ['action' => 'requestResetPassword'],array('class'=>"text-center"));
        }
	?>
  </div>
  <!-- /.login-box-body -->
  
</div>
<!-- /.login-box -->

<div>
<strong>Login: </strong> superadmin
<p>
<strong>Password: </strong> f8a8eca850b144768c1f7a22cd3c8cdc
</div>

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
