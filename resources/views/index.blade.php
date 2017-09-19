@extends('layout.master');


@section('titulo')
<h3>Estudante</h3>
@endsection
@section('seccao')

@include('index.form');
<hr><br>
@include('index.table');

@endsection