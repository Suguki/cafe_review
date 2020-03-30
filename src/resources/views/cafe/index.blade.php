@extends('layouts.app')

@section('content')

<a href="{{route('cafe.create')}}" class="btn btn-primary">カフェを新規作成</a>

@forelse($cafes as $index => $cafe)
<div class="card">
    <div class="card-header">
        <a href="{{route('cafe.edit', ['id' => $cafe->id])}}">
            {{ $cafe->id }}
        </a>
    </div>
    <div class="card-body">
        <p>{{ $cafe->name }}</p>
        <p>{{ $cafe->created_at }}</p>
        <p>{{ $cafe->updated_at }}</p>
    </div>
</div>
@empty
<p>カフェはありません。</p>
@endforelse

@endsection
