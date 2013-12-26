@extends('simple-admin::layouts/main')

@section('content')
    <div class="span12">
        <div class="container">
	    {{ Form::open(array('url' => '/simple-admin/edit-user', 'class'=>'form=horizontal') ) }}
            {{ Form::hidden('id', $user->id) }}
            <div class="control-group">
                {{ Form::label('username', 'Username', array('class' => 'control-label')) }}
                <div class="controls">
		    {{ Form::text('username', $user->username, array('placeholder'=>'The Username of your Element') ) }}
                </div>
            </div>
            <div class="control-group">
                {{ Form::label('password', 'Password', array('class' => 'control-label')) }}
                <div class="controls">
                    {{  Form::password('password', null, array('placeholder' => 'Password')) }}
                </div>
            </div>
            <div class="control-group">
                {{ Form::label('reenter_password', 'Reenter Password', array('class' => 'control-label')) }}
                <div class="controls">
                    {{  Form::password('reenter_password', null, array('placeholder' => 'Reenter Password')) }}
                </div>
            </div>
            <div class="control-group">
                {{ Form::label('email', 'Email', array('class' => 'control-label')) }}
                <div class="controls">
                    {{ Form::text('email', $user->email ) }}
                </div>
            </div>
	    {{ Form::submit('Submit Changes', array('class' => 'btn btn-primary') )   }}
	    {{ Form::close()   }}
        </div>
    </div>

@stop
