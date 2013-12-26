@extends('simple-admin::layouts/main')

@section('content')
    <div class="span4"></div>
    <div class="span4 well">
        <div class="container">
	    {{ Form::open(array('url' => '/simple-admin/login', 'class'=>'form=horizontal') ) }}
            <div class="control-group">
                {{ Form::label('username', 'Username', array('class' => 'control-label')) }}
                <div class="controls">
		    {{ Form::text('username', '', array('placeholder'=>'Your Username') ) }}
                </div>
            </div>
            <div class="control-group">
                {{ Form::label('password', 'Password', array('class' => 'control-label')) }}
                <div class="controls">
                    {{ Form::password('password', '' ) }}
                </div>
            </div>
	    {{ Form::submit('Submit', array('class' => 'btn btn-primary') )   }}
	    {{ Form::close()   }}
        </div>
    </div>
    <div class="span4"></div>
@stop
