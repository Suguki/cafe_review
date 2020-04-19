
@extends('layouts.app')

@section('content')

<form action="{{route('cafe.store')}}" method="post">
    @csrf
    <p>カフェ</p>
    <input type="text" name="name">
    <p>場所</p>
    <input type="text" name="place">
    <input type="submit">
</form>

@endsection
