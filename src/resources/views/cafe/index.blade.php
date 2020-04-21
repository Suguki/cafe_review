@extends('layouts.app')

@section('content')

<a href="{{ route('cafe.create' )}}" class="btn btn-primary">カフェを登録</a>

<form action="{{ route('cafe.index') }}" method="get">
    <select name="evaluation">
        <option value="food_evaluation">料理</option>
        <option value="access_evaluation">アクセス</option>
        <option value="feeling_evaluation"> 雰囲気</option>
    </select>
    <select name="sortBy">
        <option value="asc">低い順</option>
        <option value="desc">高い順</option>
    </select>
    <input type="submit" value="並べ替え" class="btn btn-warning">
</form>

@forelse($cafes as $index => $cafe)
<div class="card">
    <div class="card-header">
        <a href="{{ route('cafe.show', ['id' => $cafe->id]) }}">
            {{ $cafe->name }}
        </a>
        <a href="{{ route('cafe.edit', ['id' => $cafe->id]) }}" class="float-right">
            編集
        </a>
    </div>
    <div class="card-body">
        <p>{{ $cafe->name }}</p>
        <p>{{ $cafe->place }}</p>
        @foreach($review as $review)
            <p>料理</p>
            @for($i = 1; $i <= $review->food_evaluation; $i++)
              ★
            @endfor
            <p>アクセス</p>
            @for($i = 1; $i <= $review->access_evaluation; $i++)
              ★
            @endfor
            <p>雰囲気</p>
            @for($i = 1; $i <= $review->feeling_evaluation; $i++)
              ★
            @endfor
        @endforeach
        <p>{{ $cafe->created_at }}</p>
        <p>{{ $cafe->updated_at }}</p>
    </div>
</div>
@empty
<p>カフェはありません。</p>
@endforelse

@endsection
