			<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
	    		{!! Form::label('title', 'Airport Title:') !!}
	    		{!! Form::text('title', null, ['class' => 'form-control' ]) !!}
	    		{!! $errors->first('title','<span class="help-block">:message</span>') !!}
	    	</div>

			<div class="form-group {{ $errors->has('code') ? 'has-error' : '' }}">
				{!! Form::label('code', 'Airport Code:') !!}
	    		{!! Form::text('code', null, ['class' => 'form-control' ]) !!}
	    		{!! $errors->first('code','<span class="help-block">:message</span>') !!}
	    	</div>

	    	<div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
				{!! Form::label('slug', 'Airport slug:') !!}
	    		{!! Form::text('slug', null, ['class' => 'form-control' ]) !!}
	    		{!! $errors->first('slug','<span class="help-block">:message</span>') !!}
	    	</div>

	    	<div class="form-group {{ $errors->has('imglink') ? 'has-error' : '' }}">
				{!! Form::label('imglink', 'Image link: (paste an img url below)') !!}
	    		{!! Form::text('imglink', null, ['class' => 'form-control' ]) !!}
	    		{!! $errors->first('imglink','<span class="help-block">:message</span>') !!}
	    	</div>

	    	<div class="form-group {{ $errors->has('city') ? 'has-error' : '' }}">
				{!! Form::label('city', 'City:') !!}
	    		{!! Form::text('city', null, ['class' => 'form-control' ]) !!}
	    		{!! $errors->first('city','<span class="help-block">:message</span>') !!}
	    	</div>

	    	<div class="form-group {{ $errors->has('country') ? 'has-error' : '' }}">
				{!! Form::label('country', 'Country:') !!}
	    		{!! Form::text('country', null, ['class' => 'form-control' ]) !!}
	    		{!! $errors->first('country','<span class="help-block">:message</span>') !!}
	    	</div>

	    	<div class="form-group {{ $errors->has('terminals') ? 'has-error' : '' }}">
				{!! Form::label('terminals', 'Terminals:') !!}
	    		{!! Form::text('terminals', null, ['class' => 'form-control' ]) !!}
	    		{!! $errors->first('terminals','<span class="help-block">:message</span>') !!}
	    	</div>

	    	<div class="form-group {{ $errors->has('runways') ? 'has-error' : '' }}">
				{!! Form::label('runways', 'Runways:') !!}
	    		{!! Form::text('runways', null, ['class' => 'form-control' ]) !!}
	    		{!! $errors->first('runways','<span class="help-block">:message</span>') !!}
	    	</div>

	    	<div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}">
				{!! Form::label('type', 'Type:') !!}
	    		{!! Form::text('type', null, ['class' => 'form-control' ]) !!}
	    		{!! $errors->first('type','<span class="help-block">:message</span>') !!}
	    	</div>
			<div class="form-group {{ $errors->has('descrip') ? 'has-error' : '' }}">
				{!! Form::label('descrip', 'Short Description:') !!}
	    		{!! Form::textarea('descrip', null, ['class' => 'form-control' ]) !!}
	    		{!! $errors->first('descrip','<span class="help-block">:message</span>') !!}
	    	</div>
	    		
	    	<div class="form-group">
		    	{!! Form::button('<i class="glyphicon glyphicon-flash"></i> Update Airport', array('type' => 'submit', 'class' => 'btn btn-success')) !!}

		    	{!! Form::hidden('update_by', Auth::user()->name) !!}
		    
	    	</div>
