@extends('layouts.sidebar-block')

@section('type')
    system
@endsection

@section('sidebar-block-titre')
    <p>Calendrier</p>
@endsection

@section('sidebar-block-content')
<p>
    Nous sommes le : {{ (new \DateTime())->format('d/m/Y') }}
</p>
@endsection