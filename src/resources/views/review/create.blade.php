@extends('layouts.app')

@section('content')
<form action="{{route('review.store', ['cafe_id' => $cafe_id])}}" method="post">
    @csrf
    <p>レビュータイトル</p>
    <input type="text" name="title">
    <p>レビュー</p>
    <textarea name="review"></textarea>
    <p>料理</p>
        <div class="evaluation">
          <input id="star1" type="radio" name="food_evaluation" value="5" />
          <label for="star1"><span class="text">最高</span>★</label>
          <input id="star2" type="radio" name="food_evaluation" value="4" />
          <label for="star2"><span class="text"></span>★</label>
          <input id="star3" type="radio" name="food_evaluation" value="3" />
          <label for="star3"><span class="text">普通</span>★</label>
          <input id="star4" type="radio" name="food_evaluation" value="2" />
          <label for="star4"><span class="text"></span>★</label>
          <input id="star5" type="radio" name="food_evaluation" value="1" />
          <label for="star5"><span class="text">悪い</span>★</label>
        </div>
    <p>アクセス</p>
        <div class="evaluation">
          <input id="star6" type="radio" name="access_evaluation" value="5" />
          <label for="star6"><span class="text">最高</span>★</label>
          <input id="star7" type="radio" name="access_evaluation" value="4" />
          <label for="star7"><span class="text"></span>★</label>
          <input id="star8" type="radio" name="access_evaluation" value="3" />
          <label for="star8"><span class="text">普通</span>★</label>
          <input id="star9" type="radio" name="access_evaluation" value="2" />
          <label for="star9"><span class="text"></span>★</label>
          <input id="star10" type="radio" name="access_evaluation" value="1" />
          <label for="star10"><span class="text">悪い</span>★</label>
        </div>
    <p>雰囲気</p>
        <div class="evaluation">
         <input id="star11" type="radio" name="feeling_evaluation" value="5" />
         <label for="star11"><span class="text">最高</span>★</label>
         <input id="star12" type="radio" name="feeling_evaluation" value="4" />
         <label for="star12"><span class="text"></span>★</label>
         <input id="star13" type="radio" name="feeling_evaluation" value="3" />
         <label for="star13"><span class="text">普通</span>★</label>
         <input id="star14" type="radio" name="feeling_evaluation" value="2" />
         <label for="star14"><span class="text"></span>★</label>
         <input id="star15" type="radio" name="feeling_evaluation" value="1" />
         <label for="star15"><span class="text">悪い</span>★</label>
        </div>
    <input type="submit">
</form>

@endsection
