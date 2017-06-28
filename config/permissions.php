<?php
return [ 
		'Users.SimpleRbac.permissions' => [ 
				[ 
						'role' => '*',
						'controller' => '*',
						'action' => '*'
				],
				[
						'role' => '*',
						'plugin' => 'CakeDC/Users',
						'controller' => '*',
						'action' => '*'
				],
				[
						'role' => '*',
						'plugin' => '*',
						'controller' => '*',
						'action' => '*'
				],

		] 
];