
@extends('layouts.app')

@section('content')
<a href="{{ route('review.create', ['cafe_id' => $cafe->id]) }}">レビュー投稿</a>

<div class="card">
    <div class="card-header">
        {{ $cafe->name }}
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col">
                <h4>カフェの場所</h4>
                <p>{{ $cafe->place }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h4>料理の評価</h4>
                @for($i = 1; $i <= $cafe->food_evaluation; $i++)
                  ★
                @endfor
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h4>アクセスの評価</h4>
                @for($i = 1; $i <= $cafe->access_evaluation; $i++)
                  ★
                @endfor
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h4>雰囲気の評価</h4>
                @for($i = 1; $i <= $cafe->feeling_evaluation; $i++)
                  ★
                @endfor
            </div>
        </div>
    </div>
</div>
@endsection
