@extends('layouts.app')

@section('title', 'Home')

@section('content')

<h1 class="text-5xl text-center pt-24">Welcome</h1>
<div class="pt-24 text-center">
    @if(session('success_message'))
    <div class="alert alert-success">
        {{  session('success_message')  }}
    </div>
    @endif

</div>
@endsection