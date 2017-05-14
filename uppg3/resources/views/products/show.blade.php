@extends('layouts.app')

@section('content')
<li class="list-group-item">
<h1>{{$product->title }}</h1>
<p2>   Price:{{$product->price }} <p2>
  </li>
<li class="list-group-item">
<p3> {{$product->description }} <p3>
</li>
<img src="{{ $product->image }}">


@foreach($reviews as $review)
@if($review->product_id == $product->id)
<ul class="list-group">
  <li class="list-group-item">
    <span class="badge">Grade: {{$review->grade}}</span>
    {{$review->name}}:
    {{$review->comment}}
  </li>
</ul>

@endif
@endforeach
@if (!Auth::guest())
<h2>Add review </h2>
<form action="/reviews" method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="name">Title</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Name...">
  </div>
  <div class="form-group">
    <label for="grade">Grade</label>
    <input type="number" class="form-control" id="grade" name="grade" placeholder="Grade...">
  </div>
  <div class="form-group">
    <label for="comment">Comment</label>
    <input type="text" class="form-control" id="comment" name="comment" placeholder="Comment...">
  </div>
  <input type = "hidden" name ="id" value ='<?php echo "$product->id";?>' />
  <input type="submit" value="Spara film" class="btn btn-success">
</form>

  @endif
@endsection
