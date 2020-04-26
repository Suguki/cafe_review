
@extends('layouts.app')

@section('content')

@if (session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    </div>
@endif

<div class="contents">
    <form action="{{ route('cafe.update', ['id' => $cafe->id]) }}" method="post">
        @csrf
        <p>カフェ名</p>
        <input type="text" name="name" value="{{ $cafe->name }}">
        <p>場所</p>
        <input type="text" name="place" value="{{ $cafe->place }}">
        <input type="submit" value="編集">
    </form>

    <form action="{{ route('cafe.upload', ['id' => $cafe->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <p>店内写真</p>
        <input type="file" name="imageFile">
        <input type="submit" value="アップロード">
    </form>

    <form action="{{ route('cafe.delete', ['id' => $cafe->id]) }}" method="post">
        @csrf
        <input type="submit" value="削除">
    </form>
</div>
@endsection
