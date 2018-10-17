<!-- Condition Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('condition_id', 'Condition Id:') !!}
    {!! Form::text('condition_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Damage Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('damage_id', 'Damage Id:') !!}
    {!! Form::text('damage_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('conditionDamages.index') !!}" class="btn btn-default">Cancel</a>
</div>
