<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg"><?= __d('CakeDC/Users', 'Please enter your email to reset your password') ?></p>

    <?= $this->Flash->render('auth') ?>
    <?= $this->Form->create('User', array('class'=>'form-horizontal')) ?>
    
      <div class="form-group has-feedback">
	     <?php
			echo $this->Form->control('reference',array(
					'tytpe' => 'text',
					'label' => false,
					'div' => false,
					'class' => array ('form-control'),
					'placeholder' => __d ( 'CakeDC/Users', 'Reference' ) 
			) );
		?>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

      <div class="row">
		<div class="col-xs-8">
		</div>
        <!-- /.col -->
        <div class="col-xs-4">
          <?= $this->Form->button(__d('CakeDC/Users', 'Submit'),array('class'=>'btn btn-primary btn-block btn-flat')) ?>
        </div>
        <!-- /.col -->
      </div>
    <?= $this->Form->end() ?>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->