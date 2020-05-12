@extends('layouts.app')

@section('content')
@auth
<a href="{{ route('cafe.create' )}}" class="btn btn-primary">カフェを登録</a>
@endauth

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
            <div class="card-body">
                <li class="media">
                    <!-- カフェの画像を差し込む -->
                    @foreach($cafe->images as $number => $image)
                        @if ($number === 0)
                            <img class="mr-3" src="{{ asset($image->file_name) }}" alt="カフェのメイン画像" height="100">
                        @endif
                    @endforeach
                    <div class="media-body">
                        <a href="{{ route('cafe.show', ['id' => $cafe->id]) }}">
                            <h5 class="mt-0 mb-1">{{ $cafe->name }}</h5>
                        </a>
                        @auth
                        <a href="{{ route('cafe.edit', ['id' => $cafe->id]) }}" class="float-right">
                            編集
                        </a>
                        @endauth
                        <p>{{ $cafe->place }}</p>
                        <div class="row">
                            <div class="col-4">
                                <p>料理</p>
                                @for($i = 1; $i <= $cafe->food_evaluation; $i++)
                                    ★
                                @endfor
                            </div>
                            <div class="col-4">
                                <p>アクセス</p>
                                @for($i = 1; $i <= $cafe->access_evaluation; $i++)
                                    ★
                                @endfor
                            </div>
                            <div class="col-4">
                                <p>雰囲気</p>
                                @for($i = 1; $i <= $cafe->feeling_evaluation; $i++)
                                    ★
                                @endfor
                            </div>
                        </div>
                    </div>
                </li>
            </div>
        </div>
    @empty
        <p>カフェはありません。</p>
    @endforelse

@endsection
