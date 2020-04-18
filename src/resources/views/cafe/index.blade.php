@extends('layouts.app')

@section('content')

<a href="{{ route('cafe.create' )}}" class="btn btn-primary">カフェを登録</a>

<form action="{{ route('cafe.sort') }}" method="post">
    @csrf
    <select name="evaluation">
        <option value="food_evaluation">料理</option>
        <option value="access_evaluation">アクセス</option>
        <option value="feeling_evaluation"> 雰囲気</option>
    </select>
    <select name="sortBy">
        <option value="asc">昇順</option>
        <option value="desc">降順</option>
    </select>
    <input type="submit" value="並べ替え" class="btn btn-warning">
</form>

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
        @for($i = 1; $i <= $cafe->food_evaluation; $i++)
          ★
        @endfor
        <p>アクセス</p>
        @for($i = 1; $i <= $cafe->access_evaluation; $i++)
          ★
        @endfor
        <p>雰囲気</p>
        @for($i = 1; $i <= $cafe->feeling_evaluation; $i++)
          ★
        @endfor
        <p>{{ $cafe->created_at }}</p>
        <p>{{ $cafe->updated_at }}</p>
    </div>
</div>
@empty
<p>カフェはありません。</p>
@endforelse

@endsection
