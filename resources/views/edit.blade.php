@extends('layout.master');


@section('titulo')
<h3>Estudante</h3>
@endsection
@section('seccao')

@include('edit_estudante.form');
<hr><br>
@include('index.table');

@endsection