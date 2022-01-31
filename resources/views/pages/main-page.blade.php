@extends('layout.main-layout')

@section('title', 'Main Page')

@section('content')
<h2>New content</h2>
@foreach($things as $thing)
<p>{{ $thing -> description }}</p>
@endforeach
@endsection()