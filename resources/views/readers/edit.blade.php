@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Reader
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($reader, ['route' => ['readers.update', $reader->id], 'method' => 'patch']) !!}

                        @include('readers.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection