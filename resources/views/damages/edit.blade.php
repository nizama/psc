@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Damage
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($damage, ['route' => ['damages.update', $damage->id], 'method' => 'patch']) !!}

                        @include('damages.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection