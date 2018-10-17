<table class="table table-responsive" id="sequences-table">
    <thead>
        <tr>
            <th>Data Type</th>
        <th>Current Number</th>
        <th>Prefix</th>
        <th>Postfix</th>
        <th>Template</th>
        <th>Date</th>
        <th>Initial Number</th>
        <th>Reset By</th>
        <th>Type</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($sequences as $sequence)
        <tr>
            <td>{!! $sequence->data_type !!}</td>
            <td>{!! $sequence->current_number !!}</td>
            <td>{!! $sequence->prefix !!}</td>
            <td>{!! $sequence->postfix !!}</td>
            <td>{!! $sequence->template !!}</td>
            <td>{!! $sequence->date !!}</td>
            <td>{!! $sequence->initial_number !!}</td>
            <td>{!! $sequence->reset_by !!}</td>
            <td>{!! $sequence->type !!}</td>
            <td>
                {!! Form::open(['route' => ['sequences.destroy', $sequence->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('sequences.show', [$sequence->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('sequences.edit', [$sequence->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>