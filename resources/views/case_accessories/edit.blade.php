@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Case Accessory
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($caseAccessory, ['route' => ['caseAccessories.update', $caseAccessory->id], 'method' => 'patch']) !!}

                        @include('case_accessories.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection