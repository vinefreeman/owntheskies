<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
	{!! Form::label('name', 'Aircraft Name:') !!}
	{!! Form::text('name', null, ['class' => 'form-control' ]) !!}
	{!! $errors->first('name','<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('manufacturer') ? 'has-error' : '' }}">
	{!! Form::label('manufacturer', 'Manufacturer: ') !!}
	{!! Form::text('manufacturer', null, ['class' => 'form-control' ]) !!}
	{!! $errors->first('manufacturer','<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('icao') ? 'has-error' : '' }}">
	{!! Form::label('icao', 'Aircraft Code (ICAO):') !!}
	{!! Form::text('icao', null, ['class' => 'form-control' ]) !!}
	{!! $errors->first('icao','<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
	{!! Form::label('slug', 'Aircraft slug:') !!}
	{!! Form::text('slug', null, ['class' => 'form-control' ]) !!}
	{!! $errors->first('slug','<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}">
	{!! Form::label('type', 'Type: ') !!}
	{!! Form::text('type', null, ['class' => 'form-control' ]) !!}
	{!! $errors->first('type','<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('speed') ? 'has-error' : '' }}">
	{!! Form::label('speed', 'Speed (mph): ') !!}
	{!! Form::text('speed', null, ['class' => 'form-control' ]) !!}
	{!! $errors->first('speed','<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('range') ? 'has-error' : '' }}">
	{!! Form::label('range', 'Range (miles): ') !!}
	{!! Form::text('range', null, ['class' => 'form-control' ]) !!}
	{!! $errors->first('range','<span class="help-block">:message</span>') !!}
</div>
<div class="form-group {{ $errors->has('ceiling') ? 'has-error' : '' }}">
	{!! Form::label('ceiling', 'Ceiling (metres): ') !!}
	{!! Form::text('ceiling', null, ['class' => 'form-control' ]) !!}
	{!! $errors->first('ceiling','<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('photolink') ? 'has-error' : '' }}">
	{!! Form::label('photolink', 'Photo: (paste an img url below)') !!}
	{!! Form::text('photolink', null, ['class' => 'form-control' ]) !!}
	{!! $errors->first('photolink','<span class="help-block">:message</span>') !!}
</div>

<div class="form-group">
	{!! Form::button("<i class='glyphicon glyphicon-ok'></i> $buttontext Aircraft", array('type' => 'submit', 'class' => 'btn btn-success')) !!}

	{!! Form::hidden('update_by', Auth::user()->name) !!}

</div>
