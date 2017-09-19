@extends('layout.master');


@section('titulo')
 Supervisores
@endsection

@section('seccao')
 @include('edit_sup.form');
 @include('supervisor.table');
@endsection