<table class="table table-responsive" id="caseAccessories-table">
    <thead>
        <tr>
            <th>Case Id</th>
        <th>Accessory Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($caseAccessories as $caseAccessory)
        <tr>
            <td>{!! $caseAccessory->case_id !!}</td>
            <td>{!! $caseAccessory->accessory_id !!}</td>
            <td>
                {!! Form::open(['route' => ['caseAccessories.destroy', $caseAccessory->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('caseAccessories.show', [$caseAccessory->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('caseAccessories.edit', [$caseAccessory->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>