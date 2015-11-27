@extends('master')

@section('title')
    bootstrap register
@stop

@section('body')       
     <div class="row centered-form">
	  <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
	    <div class="panel panel-default">
	      <div class="panel-heading">
	        <h3 class="panel-title">Please sign up <small>It's free!</small></h3>
	      </div>
	      <div class="panel-body">

	      	<!-- errormeldingen -->
	      	@if(Session::get('errors'))
			  <div class="alert alert-danger alert-dismissable">
			    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			    <h5>There were errors during registration:</h5>
			    @foreach($errors->all(':message') as $message)
			     <li> {{$message}} </li>
			    @endforeach
			  </div>
			@endif

			<!-- form -->
	        {!! Form::open(array('url' => '/register', 'method' => 'post', 'role' => 'form')) !!}
	        <form role="form">
	          <div class="row">
	            <div class="col-xs-6 col-sm-6 col-md-6">
	              <div class="form-group">
	              	{!! Form::text('name', null, array('placeholder' => 'full Name', 'class' => 'form-control input-sm')) !!}
	            </div>
	            </div>
	            <div class="col-xs-6 col-sm-6 col-md-6">
	              <div class="form-group">
	                {!! Form::text('username', null, array('placeholder' => 'username', 'class' => 'form-control input-sm')) !!}
	              </div>
	            </div>
	          </div>
	          <div class="form-group">
	          	{!! Form::email('email', null, array('placeholder' => 'Johndo@gmail.com', 'class' => 'form-control input-sm')) !!}
	          </div>

	          <div class="row">
	            <div class="col-xs-6 col-sm-6 col-md-6">
	              <div class="form-group">
	              	{!! Form::password('password', array('placeholder' => 'password', 'class' => 'form-control input-sm')) !!}
	              </div>
	            </div>
	            <div class="col-xs-6 col-sm-6 col-md-6">
	              <div class="form-group">
	              	{!! Form::password('password_confirmation', array('placeholder' => 'Confirm Password', 'class' => 'form-control input-sm')) !!}
	              </div>
	            </div>
	          </div>

	          {!! Form::submit('register', array('class' => 'btn btn-info btn-block'	)) !!}
	          {!! Form::close() !!}
	      </div>
	    </div>
	  </div>
	</div>
@stop

 