<table class="table table-responsive" id="conditionDamages-table">
    <thead>
        <tr>
            <th>Condition Id</th>
        <th>Damage Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($conditionDamages as $conditionDamage)
        <tr>
            <td>{!! $conditionDamage->condition_id !!}</td>
            <td>{!! $conditionDamage->damage_id !!}</td>
            <td>
                {!! Form::open(['route' => ['conditionDamages.destroy', $conditionDamage->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('conditionDamages.show', [$conditionDamage->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('conditionDamages.edit', [$conditionDamage->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>