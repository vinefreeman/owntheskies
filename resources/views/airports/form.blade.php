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

	    		
	    	<div class="form-group">
		    	{!! Form::button('<i class="glyphicon glyphicon-flash"></i> Update Airport', array('type' => 'submit', 'class' => 'btn btn-success')) !!}

	    	</div>