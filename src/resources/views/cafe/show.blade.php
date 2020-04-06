
@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        {{$cafe->name}}
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col">
                <h4>カフェの場所</h4>
                <p>{{$cafe->place}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h4>料理の評価</h4>
                <p>{{$cafe->food_evaluation}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h4>立地の評価</h4>
                <p>{{$cafe->access_evaluation}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h4>雰囲気の評価</h4>
                <p>{{$cafe->feeling_evaluation}}</p>
            </div>
        </div>
    </div>
</div>
@endsection
