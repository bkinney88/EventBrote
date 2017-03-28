@extends('layouts/app')

@section('content')
<h1>Creer un évènement</h1>
<form action="{{ route('events.store') }}" method="POST">
   {{ csrf_field() }}
    @include('events._form', ['submitButtonText' => 'Creer un évènement'])
</form>
<a href="{{ route('home') }}">Annuler</a>
@endsection
