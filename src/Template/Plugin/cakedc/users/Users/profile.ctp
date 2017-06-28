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

$this->Html->addCrumb ('Profile', [
		'plugin' => 'CakeDC/Users',
		'controller' => 'Users',
		'action'=>'profile'
] );

?>

<!-- Widget: user widget style 1 -->
<div class="box box-widget widget-user">
	<div class="widget-user-header bg-aqua-active">
		<h3 class="widget-user-username"><?= !empty($user->first_name)? $this->Html->tag('span',__d('CakeDC/Users', '{0} {1}', $user->first_name, $user->last_name),['class' => 'full_name']) : $user->username; ?></h3>
		<h5 class="widget-user-desc"><?= $this->Html->link(__d('CakeDC/Users', 'Change Password'), ['plugin' => 'CakeDC/Users', 'controller' => 'Users', 'action' => 'changePassword']); ?></h5>
	</div>
		<div class="widget-user-image">
			<?= $this->Html->image(empty($user->avatar) ? $avatarPlaceholder : $user->avatar, ['alt' => "User Avatar", 'class'=>"img-circle"]); ?>
		</div>
		
	<div>
		<div class="box-header with-border">
			<h3 class="box-title">Dados do Perfil</h3>
		</div>
		<form class="form-horizontal">
			<div class="box-body">
			
				<div class="form-group">
					<label for="inputText2" class="col-md-2 control-label"><?= __d('CakeDC/Users', 'Username') ?></label>
					<div class="col-sm-8">
						<div class="input-group">
				           <?php
								echo $this->Form->control ( 'first_name', array (
										'label' => false,
										'div' => false,
										'class' => array ('form-control' ),
										'disabled' => true,
										'value' => h($user->username)
								) );
							?>
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
						</div>
					</div>
				</div>		
			
				<div class="form-group">
					<label for="inputText2" class="col-md-2 control-label"><?= __d('CakeDC/Users', 'Email') ?></label>
					<div class="col-sm-8">
						<div class="input-group">
				           <?php
								echo $this->Form->control ( 'first_name', array (
										'label' => false,
										'div' => false,
										'class' => array ('form-control' ),
										'disabled' => true,
										'value' => h($user->email)
								) );
							?>
							<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
						</div>
					</div>
				</div>

			</div>
		</form>
	</div>
	
</div>
  
<?php if (!empty($user->social_accounts)): ?>				
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
						</tr>
					</thead>
					<tbody>
	                    <?php
	                    	foreach ($user->social_accounts as $socialAccount):
	                        	$escapedUsername = h($socialAccount->username);
	                        	$linkText = empty($escapedUsername) ? __d('CakeDC/Users', 'Link to {0}', h($socialAccount->provider)) : h($socialAccount->username)
	                	?>
	                        <tr>
	                            <td class="user-block"><?= $this->Html->image( $socialAccount->avatar, ['class'=>['img-responsive img-circle']] ) ?></td>
	                            <td><?= h($socialAccount->provider) ?></td>
	                            <td><?= $this->Html->link( $linkText, $socialAccount->link, ['target' => '_blank']) ?></td>
		                        </tr>
	                        <?php
	                    	endforeach;
	                    ?>
				</table>
			</div>
			
		</div>
	</div>
 <?php  endif; ?>   

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
