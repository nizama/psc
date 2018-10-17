@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Physical Damage
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($physicalDamage, ['route' => ['physicalDamages.update', $physicalDamage->id], 'method' => 'patch']) !!}

                        @include('physical_damages.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection