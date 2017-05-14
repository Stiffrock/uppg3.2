@extends('layouts.app')

@section('content')

<h1>Add product</h1>

<form action="/reviews" method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Title...">
  </div>
  <div class="form-group">
    <label for="brand">Brand</label>
    <input type="text" class="form-control" id="brand" name="brand" placeholder="Brand...">
  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input type="number" class="form-control" id="price" name="price" placeholder="Price...">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description" name="description" placeholder="Description...">
  </div>
  <div class="form-group">
    <label for="Image">Image</label>
    <input type="text" class="form-control" id="image" name="image" placeholder="Skriv titel här...">
  </div>

  <div class="form-group">
    <label for="Image">Store</label>
    <input type="text" class="form-control" id="store" name="store" placeholder="Store ID...">
  </div>
  <input type="submit" value="Spara film" class="btn btn-success">
</form>


@endsection
