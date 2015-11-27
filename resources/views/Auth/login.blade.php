@extends('master')

@section('title')
    bootstrap login
@stop

@section('body')       
     <div class="row centered-form">
	  <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
	    <div class="panel panel-default">
	      <div class="panel-heading">
	        <h3 class="panel-title">Please Login</h3>
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


	        {!! Form::open(array('url' => '/login', 'method' => 'post', 'role' => 'form')) !!}
	          <div class="form-group">
	          	{!! Form::text('email',null, array('placeholder' => 'email', 'class' => 'form-control input-sm')) !!}
	            </div>
	          <div class="form-group">
	          	{!! Form::password('password',array('class' => 'form-control input-sm', 'placeholder' =>'password'))!!}
	          </div>
	          <div class="checkbox">
	            <label>
	            	{!! Form::checkbox('remember','Remember me')!!} Remember Me
	              	{!! Html::link('/forgot','Forgot Password?', array('class' => 'pull-right')) !!}
	            </label>
	          </div>
	          {!! Form::submit('login', array('class' => 'btn btn-info btn-block'	)) !!}
	          {!! Form::close() !!}
	      </div>
	    </div>
	    <div class="text-center">
	    	{!! Html::link('/register',"Don't have an account? Register") !!}
	    </div>
	  </div>
	</div>
@stop

 