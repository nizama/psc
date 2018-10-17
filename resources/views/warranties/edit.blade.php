@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Warranty
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($warranty, ['route' => ['warranties.update', $warranty->id], 'method' => 'patch']) !!}

                        @include('warranties.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection