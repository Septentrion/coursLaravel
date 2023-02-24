@extends('layouts.public')

@section('content')
    <section id="categories">
        <ul>
            @foreach($categories as $c)
                <li>
                    <a href="{{ route('category', ['name' => $c[0]]) }}">{{ $c[0] }}</a>
                </li>
            @endforeach
        </ul>

    </section>
@endsection

@section('sidebar')
    @include('fragments.calendar')
    @include('fragments.categories', ['statistics' => $statistics])
@endsection
