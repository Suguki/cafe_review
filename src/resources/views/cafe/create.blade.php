
@extends('layouts.app')

@section('content')

@if (session('flash_message'))
    <div class="alert alert-success">
        {{ session('flash_message') }}
    </div>
@endif


<form action="{{route('cafe.store')}}" method="post" class="card transparent">
    @csrf
    <div class="card-body">
        <div class="form-group">
        <label>
            カフェ
            <input type="text" name="name" class="form-control">
        </label>
        </div>
        <p>場所</p>
        <input type="text" name="place" class="form-control">
    </div>
    @if($errors->any())
     <div class="alert alert-danger">
       <ul>
         @foreach($errors->all() as $message)
           <li>{{ $message }}</li>
         @endforeach
       </ul>
     </div>
    @endif
    <div class="card-footer text-right">
        <input type="submit" class="btn btn-primary">
    </div>
</form>

@endsection
