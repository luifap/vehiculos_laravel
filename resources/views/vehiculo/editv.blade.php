@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/vehiculo/'.$vehiculo->id ) }}" method="post" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}
    
    @include('vehiculo.formv', ['modo'=>'Editar']);

</form>
@endsection