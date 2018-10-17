@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Condition Damage
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($conditionDamage, ['route' => ['conditionDamages.update', $conditionDamage->id], 'method' => 'patch']) !!}

                        @include('condition_damages.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection