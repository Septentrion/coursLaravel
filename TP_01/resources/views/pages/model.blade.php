@extends('layouts.public')

@section('content')
    <section>
        @foreach($models as $m)
            <article>
                <p>{{ $m['productName'] }}</p>
            </article>
        @endforeach
    </section>
@endsection

@section('sidebar')
    @include('fragments.calendar')
    @include('fragments.categories')
@endsection
