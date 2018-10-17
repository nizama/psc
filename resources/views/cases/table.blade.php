<table class="table table-responsive" id="cases-table">
    <thead>
        <tr>
            <th>Serial Code</th>
        <th>Barcode</th>
        <th>Customer Name</th>
        <th>Customer Phone</th>
        <th>Id Card No</th>
        <th>Product Id</th>
        <th>Brand Id</th>
        <th>Model Number</th>
        <th>Serial Number</th>
        <th>Customer Complain</th>
        <th>Reg Counter Checkup</th>
        <th>Warranty Id</th>
        <th>User Id</th>
        <th>Status Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($cases as $case)
        <tr>
            <td>{!! $case->serial_code !!}</td>
            <td>{!! $case->barcode !!}</td>
            <td>{!! $case->customer_name !!}</td>
            <td>{!! $case->customer_phone !!}</td>
            <td>{!! $case->id_card_no !!}</td>
            <td>{!! $case->product_id !!}</td>
            <td>{!! $case->brand_id !!}</td>
            <td>{!! $case->model_number !!}</td>
            <td>{!! $case->serial_number !!}</td>
            <td>{!! $case->customer_complain !!}</td>
            <td>{!! $case->reg_counter_checkup !!}</td>
            <td>{!! $case->warranty_id !!}</td>
            <td>{!! $case->user_id !!}</td>
            <td>{!! $case->status_id !!}</td>
            <td>
                {!! Form::open(['route' => ['cases.destroy', $case->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('cases.show', [$case->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('cases.edit', [$case->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>