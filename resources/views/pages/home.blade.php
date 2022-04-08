@extends('layouts.main')

@section('title', 'MichalZ.com - Home')

@section('content')

<h1>Home</h1>
<h2>Welcome back, {{$user}}, you are {{$age}} years old. You are from {{$location}}</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime rerum libero odio possimus placeat sapiente. Quas quisquam consectetur quam animi itaque quibusdam modi eveniet facere, rem ullam laboriosam porro. Sunt.</p>

<ul></ul>
@for ($i = 0; $i < 10; $i++)
  <li> The current value is {{ $i }}</li> 
@endfor
</ul>
@endsection