<!-- Serial Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('serial_code', 'Serial Code:') !!}
    {!! Form::text('serial_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Barcode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('barcode', 'Barcode:') !!}
    {!! Form::text('barcode', null, ['class' => 'form-control']) !!}
</div>

<!-- Customer Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_name', 'Customer Name:') !!}
    {!! Form::text('customer_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Customer Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_phone', 'Customer Phone:') !!}
    {!! Form::text('customer_phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Card No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_card_no', 'Id Card No:') !!}
    {!! Form::text('id_card_no', null, ['class' => 'form-control']) !!}
</div>

<!-- Product Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_id', 'Product Id:') !!}
    {!! Form::text('product_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Brand Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('brand_id', 'Brand Id:') !!}
    {!! Form::text('brand_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Model Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('model_number', 'Model Number:') !!}
    {!! Form::text('model_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Serial Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('serial_number', 'Serial Number:') !!}
    {!! Form::text('serial_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Customer Complain Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('customer_complain', 'Customer Complain:') !!}
    {!! Form::textarea('customer_complain', null, ['class' => 'form-control']) !!}
</div>

<!-- Reg Counter Checkup Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('reg_counter_checkup', 'Reg Counter Checkup:') !!}
    {!! Form::textarea('reg_counter_checkup', null, ['class' => 'form-control']) !!}
</div>

<!-- Warranty Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('warranty_id', 'Warranty Id:') !!}
    {!! Form::text('warranty_id', null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::text('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status_id', 'Status Id:') !!}
    {!! Form::text('status_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('cases.index') !!}" class="btn btn-default">Cancel</a>
</div>
