<!-- Data Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_type', 'Data Type:') !!}
    {!! Form::text('data_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Current Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('current_number', 'Current Number:') !!}
    {!! Form::text('current_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Prefix Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prefix', 'Prefix:') !!}
    {!! Form::text('prefix', null, ['class' => 'form-control']) !!}
</div>

<!-- Postfix Field -->
<div class="form-group col-sm-6">
    {!! Form::label('postfix', 'Postfix:') !!}
    {!! Form::text('postfix', null, ['class' => 'form-control']) !!}
</div>

<!-- Template Field -->
<div class="form-group col-sm-6">
    {!! Form::label('template', 'Template:') !!}
    {!! Form::text('template', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date', 'Date:') !!}
    {!! Form::text('date', null, ['class' => 'form-control']) !!}
</div>

<!-- Initial Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('initial_number', 'Initial Number:') !!}
    {!! Form::text('initial_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Reset By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reset_by', 'Reset By:') !!}
    {!! Form::text('reset_by', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('sequences.index') !!}" class="btn btn-default">Cancel</a>
</div>
