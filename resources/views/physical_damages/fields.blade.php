<!-- Case Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('case_id', 'Case Id:') !!}
    {!! Form::text('case_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Condition Damage Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('condition_damage_id', 'Condition Damage Id:') !!}
    {!! Form::text('condition_damage_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('physicalDamages.index') !!}" class="btn btn-default">Cancel</a>
</div>
