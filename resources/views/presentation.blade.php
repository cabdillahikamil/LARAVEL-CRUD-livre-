@extends('layouts.layout')


@section('content')
<h1>Title text</h1>
<div class="image">
<div><img src="{{asset('img/image1.jpg')}}" width = "150" height = "100"/></div>
<div><img src="{{asset('img/img2.jpg')}}" width = "150" height = "100"/></div>
</div>
<h2>sous titre titre</h2>
<h3> autre sous titre</h3>
@endsection
