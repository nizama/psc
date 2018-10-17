<table class="table table-responsive" id="physicalDamages-table">
    <thead>
        <tr>
            <th>Case Id</th>
        <th>Condition Damage Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($physicalDamages as $physicalDamage)
        <tr>
            <td>{!! $physicalDamage->case_id !!}</td>
            <td>{!! $physicalDamage->condition_damage_id !!}</td>
            <td>
                {!! Form::open(['route' => ['physicalDamages.destroy', $physicalDamage->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('physicalDamages.show', [$physicalDamage->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('physicalDamages.edit', [$physicalDamage->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>