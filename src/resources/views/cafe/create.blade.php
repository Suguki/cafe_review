
@extends('layouts.app')

@section('content')

<form action="{{route('cafe.store')}}" method="post">
    @csrf
    <div class="form-group">
    <label>
        カフェ
        <input type="text" name="name" class="form-control">
    </label>
    </div>
    <p>場所</p>
    <input type="text" name="place" class="form-control">
    <input type="submit">
</form>

@endsection
