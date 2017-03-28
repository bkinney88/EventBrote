@extends('layouts/app')

@section('content')
<h1>{{$events->count()}} {{str_plural('evenement', $events->count())}}</h1>
<ul>
    @forelse($events as $event)
        <li><a href="{{ route('events.show', ['event'=> $event]) }}">{{ $event->title }}</a></li>
        @empty
          <p>Aucun evènement pour l'instant.</p>
    @endforelse
</ul>
{{ $events->links() }}
@endsection
