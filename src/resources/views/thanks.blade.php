@extends('layouts.layouts')

@section('title','thanks')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css')}}">
@endsection

@section('content')
<main class="main">
    <div class="main__thanks">
        <h1>
            ご意見いただきありがとうございました。
        </h1>
    </div>
    <div class="main__return">
        <a>トップページへ</a>
    </div>
</main>