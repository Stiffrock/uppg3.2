
@extends ('layouts.app')

@section('content')
<h1>Products</h1>
<ul>
@foreach($products as $product)
</ul>
  <li style="clear:both;">
    <li class="list-group-item">
    <a href="products/{{ $product->id }}">{{ $product->title }}</a></li>
  </li>
@endforeach
</ul>
@endsection
