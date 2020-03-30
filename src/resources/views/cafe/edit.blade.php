
@extends('layouts.app')

@section('content')

<form action="{{ route('cafe.update', ['id' => $cafe->id]) }}" method="post">
    @csrf
    <input type="text" name="name" value="{{ $cafe->name }}">
    <input type="submit">
</form>

<form action="{{ route('cafe.delete', ['id' => $cafe->id]) }}" method="post">
    @csrf
    <input type="submit" value="削除">
</form>

@endsection
