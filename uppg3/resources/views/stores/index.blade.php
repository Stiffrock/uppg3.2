@extends('layouts.app')

@section('content')
<h1>Store index </h1>

@foreach($stores as $store)
<li style="clear:both;">
{{$store->name}}
</li>
@endforeach

@endsection
