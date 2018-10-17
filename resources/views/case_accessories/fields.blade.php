<!-- Case Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('case_id', 'Case Id:') !!}
    {!! Form::text('case_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Accessory Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('accessory_id', 'Accessory Id:') !!}
    {!! Form::text('accessory_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('caseAccessories.index') !!}" class="btn btn-default">Cancel</a>
</div>
