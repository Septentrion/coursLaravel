<h1>{{ $name }}</h1>

<p>Nombre de tâches = {{ $pending + $achieved }}</p>

@if ( $pending > 0 )
    <p style="color:orange">Il vous reste {{ $pending }} tâches à terminer</p>
@else
    <p style="color:green">Toutes vos tâches sont terminées</p>
@endif