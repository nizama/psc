<table class="table table-responsive" id="accessories-table">
    <thead>
        <tr>
            <th>Name</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($accessories as $accessory)
        <tr>
            <td>{!! $accessory->name !!}</td>
            <td>
                {!! Form::open(['route' => ['accessories.destroy', $accessory->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('accessories.show', [$accessory->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('accessories.edit', [$accessory->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>