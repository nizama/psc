<table class="table table-responsive" id="warranties-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Month</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($warranties as $warranty)
        <tr>
            <td>{!! $warranty->name !!}</td>
            <td>{!! $warranty->month !!}</td>
            <td>
                {!! Form::open(['route' => ['warranties.destroy', $warranty->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('warranties.show', [$warranty->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('warranties.edit', [$warranty->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>