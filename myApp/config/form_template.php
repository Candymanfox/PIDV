<?php
/**
 * Created by IntelliJ IDEA.
 * User: Home
 * Date: 31-01-18
 * Time: 18:09
 */

return [
    'input' => '<input type="{{type}}" name="{{name}}" class="form-control" {{attrs}} />',
    'inputContainer' => '<div class="form-group {{divclass}} {{required}}">{{content}}</div>',
    'inputContainerError' => '<div class="form-group has-error has-feedback {{required}}">{{content}}{{error}}<span class="glyphicon glyphicon-remove form-control-feedback"></span></div>',
    'error' => '<div class="help-block">{{content}}</div>',
    'inputSubmit' => '<input type="{{type}}" class="btn btn-success"{{attrs}}/>',
];
