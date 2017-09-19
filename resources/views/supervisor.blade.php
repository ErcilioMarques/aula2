@extends('layout.master');


@section('titulo')
 Supervisores
@endsection

@section('seccao')
 @include('supervisor.form');
 @include('supervisor.table');
@endsection