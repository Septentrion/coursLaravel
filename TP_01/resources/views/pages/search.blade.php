@extends('layouts.public')

@section('content')
    <form method="post">
        @csrf
        <input type="text" name="keyword"/>
        <input type="submit" name="Chercher" />
    </form>
@endsection

@section('sidebar')
    @include('fragments.calendar')
    @include('fragments.categories')
@endsection
