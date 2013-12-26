@extends('simple-admin::layouts/main')

@section('content')
    <div class="span7">
        <div class="container">
            @foreach  ($content as $element)
	        {{ Form::open(array('url' => '/simple-admin/editSimpleAdmin', 'class'=>'form=horizontal') ) }}
                {{ Form::hidden('id', $element->id) }}
                <div class="control-group">
                    {{ Form::label('name', 'Name', array('class' => 'control-label')) }}
                    <div class="controls">
		        {{ Form::text('name', $element->name, array('placeholder'=>'The Name of your Element') ) }}
                    </div>
                </div>
                <div class="control-group">
                    {{ Form::label('content', 'Content', array('class' => 'control-label')) }}
                    <div class="controls">
                    {{ Form::textarea('content', $element->content, array('style' => 'width: 500px;', 'rows' => '10')) }}
                    </div>
                </div>
	        {{ Form::submit('Submit Changes', array('class' => 'btn btn-primary') )   }}
	        {{ Form::close()   }}
	        {{ Form::open(array('url' => '/simple-admin/deleteSimpleAdmin') ) }}
                {{ Form::hidden('id', $element->id) }}
                {{ Form::submit('Delete Content Area', array('class' => 'btn btn-danger') )   }}
                {{ Form::close()   }}
            @endforeach
        </div>
    </div>
    <div class="span4">
            <!-- Button to trigger modal -->
        <a href="#myModal" role="button" class="btn" data-toggle="modal">Add New Content Area</a>

        <!-- Modal -->
        <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">New Content Area</h3>
            </div>
	    {{ Form::open(array('url' => '/simple-admin/newSimpleAdmin', 'class'=>'form=horizontal') ) }}
            <div class="modal-body">
                <div class="control-group">
                    {{ Form::label('name', 'Name', array('class' => 'control-label')) }}
                    <div class="controls">
		        {{ Form::text('name', '', array('id'=>'name', 'placeholder'=>'The Name of your Element') ) }}
                    </div>
                </div>
                <div class="control-group">
                    {{ Form::label('content', 'Content', array('class' => 'control-label')) }}
                    <div class="controls">
                        {{ Form::textarea('content', '', array('rows' => '10')) }}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	        {{  Form::submit('Submit New Area', array('class' => 'btn btn-primary') )   }}
            </div>
	    {{  Form::close()   }}
        </div>
    </div>

    </div>
@stop
