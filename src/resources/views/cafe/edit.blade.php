
@extends('layouts.app')

@section('content')
<div class="contents">
    <form action="{{ route('cafe.update', ['id' => $cafe->id]) }}" method="post">
        @csrf
        <p>カフェ名</p>
        <input type="text" name="name" value="{{ $cafe->name }}">
        <p>場所</p>
        <input type="text" name="place" value="{{ $cafe->place }}">
        <input type="submit" value="編集">
    </form>
    <form action="{{ route('cafe.delete', ['id' => $cafe->id]) }}" method="post">
        @csrf
        <input type="submit" value="削除">
    </form>
</div>
@endsection
