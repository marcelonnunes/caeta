<?php

$config = [
		'Templates'=>[
				'default' => [
						'error' => '<div class="help-block">{{content}}</div>',
						'inputContainerError' => '<div class="has-error {{type}}{{required}} error">{{content}}{{error}}</div>',
						'label' => '<label class="col-md-2 control-label" {{attrs}}>{{text}}</label>',
						'input' => '<div class="{{md}}"><input class="form-control" type="{{type}}" name="{{name}}"{{attrs}}/></div>',
						'formGroup' => '{{label}}{{input}}',
						'inputContainer' => '<div class="form-group">{{content}}</div>',
				],
				'pw' => [
						'input' => '<div class="input-group"><input class="form-control" type="{{type}}" name="{{name}}"{{attrs}}/><span class="input-group-addon"><i class="{{icon}}"></i></span></div>',
						'error' => '<span class="help-block">{{content}}</span>',
						'inputContainerError' => '<div class="has-error {{type}}{{required}} error">{{content}}{{error}}</div>',
				],
				'register' => [
						'error' => '<div class="help-block">{{content}}</div>',
						'inputContainerError' => '<div class="has-error {{type}}{{required}} error">{{content}}{{error}}</div>',
				],
				
				
		]
];


