<table class="table table-responsive" id="conditions-table">
    <thead>
        <tr>
            <th>Name</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($conditions as $condition)
        <tr>
            <td>{!! $condition->name !!}</td>
            <td>
                {!! Form::open(['route' => ['conditions.destroy', $condition->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('conditions.show', [$condition->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('conditions.edit', [$condition->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>