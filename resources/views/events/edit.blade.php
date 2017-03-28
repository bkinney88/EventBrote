@extends('layouts/app')

@section('content')
<h1>Editer l'évènement #{{ $event->id }}</h1>
<form action="{{ route('events.update', $event) }}" method="POST">
   {{ csrf_field() }}
    {{ method_field('PUT') }}
    @include('events._form', ['submitButtonText' => 'Modifier l\'évènement'])
</form>
<a href="{{ route('home') }}">Annuler</a>
@endsection
