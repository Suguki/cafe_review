@extends('layouts.app')

@section('content')

<a href="{{ route('cafe.create' )}}" class="btn btn-primary">カフェを新規作成</a>

@forelse($cafes as $index => $cafe)
<div class="card">
    <div class="card-header">
        <a href="{{ route('cafe.edit', ['id' => $cafe->id]) }}">
            {{ $cafe->name }}を編集する
        </a>
    </div>
    <div class="card-body">
        <p>{{ $cafe->name }}</p>
        <p>{{ $cafe->place }}</p>
        <p>料理</p>
        <p>{{ $cafe->food_evaluation }}</p>
        <p>アクセス</p>
        <p>{{ $cafe->access_evaluation }}</p>
        <p>雰囲気</p>
        <p>{{ $cafe->feeling_evaluation }}</p>
        <p>{{ $cafe->created_at }}</p>
        <p>{{ $cafe->updated_at }}</p>
    </div>
</div>
@empty
<p>カフェはありません。</p>
@endforelse

@endsection
