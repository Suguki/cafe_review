
@extends('layouts.app')

@section('content')

<form action="{{route('cafe.store')}}" method="post">
    @csrf
    <input type="text" name="name">
    <input type="submit">
</form>

@endsection
