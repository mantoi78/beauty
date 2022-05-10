@extends('layouts.layouts')

@section('content')

    <h1>TOP ｜ 部位別一覧 ｜ {{ $part->name }} ｜ {{ $approach->name }}</h1>
    <ul>
        <li>
            {{ $approach->name }}とは
        </li>
        <li>{{ $approach->description }}</li>
    </ul>

    <a href="http://127.0.0.1:8080/salons" class="btn btn-primary" role="button">サロン予約しよう！</a>

    <button class="btn btn-primary" onclick="history.back(-1)">Back</button>
@endsection
