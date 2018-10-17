<table class="table table-responsive" id="caseLogs-table">
    <thead>
        <tr>
            <th>Case Id</th>
        <th>User Id</th>
        <th>Comment</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($caseLogs as $caseLog)
        <tr>
            <td>{!! $caseLog->case_id !!}</td>
            <td>{!! $caseLog->user_id !!}</td>
            <td>{!! $caseLog->comment !!}</td>
            <td>
                {!! Form::open(['route' => ['caseLogs.destroy', $caseLog->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('caseLogs.show', [$caseLog->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('caseLogs.edit', [$caseLog->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>