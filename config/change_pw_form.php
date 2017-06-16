<?php
return [
		'label' => '<label {{attrs}}>{{text}}</label>',
		'input' => '<div class="{{md}}"><div class="input-group"><input class="form-control" type="{{type}}" name="{{name}}"{{attrs}}/></div></div>',
		'formGroup' => '{{label}}{{input}}',
		'inputContainer' => '<div class="form-group">{{content}}</div>',
		'error' => '<span class="help-block">{{content}}</span>',
		'inputContainerError' => '<div class="has-error form-group {{type}}{{required}} error">{{content}}{{error}}</div>',
];
