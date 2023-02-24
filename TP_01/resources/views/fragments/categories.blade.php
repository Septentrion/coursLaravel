@extends('layouts.sidebar-block')

@section('type')
data
@overwrite

@section('sidebar-block-titre')
    <p>Statistiques</p>
@overwrite

@section('sidebar-block-content')
    <p>
    Categories : {{ $statistics }}
    </p>
@overwrite