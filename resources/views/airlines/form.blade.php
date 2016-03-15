<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
	{!! Form::label('name', 'Airline Name:') !!}
	{!! Form::text('name', null, ['class' => 'form-control' ]) !!}
	{!! $errors->first('name','<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('code') ? 'has-error' : '' }}">
	{!! Form::label('code', 'Airline Code:') !!}
	{!! Form::text('code', null, ['class' => 'form-control' ]) !!}
	{!! $errors->first('code','<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
	{!! Form::label('slug', 'Airline slug:') !!}
	{!! Form::text('slug', null, ['class' => 'form-control' ]) !!}
	{!! $errors->first('slug','<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('logo_link') ? 'has-error' : '' }}">
	{!! Form::label('logo_link', 'Logo link: (paste an img url below)') !!}
	{!! Form::text('logo_link', null, ['class' => 'form-control' ]) !!}
	{!! $errors->first('logo_link','<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('photo_link') ? 'has-error' : '' }}">
	{!! Form::label('photo_link', 'Photo link: (paste an img url below)') !!}
	{!! Form::text('photo_link', null, ['class' => 'form-control' ]) !!}
	{!! $errors->first('photo_link','<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('descrip') ? 'has-error' : '' }}">
	{!! Form::label('descrip', 'Short Description:') !!}
	{!! Form::textarea('descrip', null, ['class' => 'form-control' ]) !!}
	{!! $errors->first('descrip','<span class="help-block">:message</span>') !!}
</div>
	
<div class="form-group">
	{!! Form::button("<i class='glyphicon glyphicon-ok'></i> $buttontext airline", array('type' => 'submit', 'class' => 'btn btn-success')) !!}

	{!! Form::hidden('update_by', Auth::user()->name) !!}

</div>
