@extends('layouts.app')
@section('content')
<div class="container">


<form action="{{ url('/vehiculo') }}" method="post" enctype="multipart/form-data">
@csrf
@include('vehiculo.formv', ['modo'=>'Crear']);

</form>
</div>
@endsection