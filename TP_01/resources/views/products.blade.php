<h1>Products</h1>

@php
$today = new \DateTime();
$pending = 0;
$achieved = 0;
@endphp


<ul>
@foreach ($tasks as $key => $deadline)
    @if ($deadline > $today)
        @php $pending = $pending + 1; @endphp
    @else
        @php $achieved = $achieved + 1; @endphp
    @endif
    <li>{{ $key }} : {{ $deadline->format('d/m/Y') }}</li>
@endforeach
</ul>

<p>Tâches en cours : {{ $pending }}</p>
<p>Tâches terminées : {{ $achieved }}</p>