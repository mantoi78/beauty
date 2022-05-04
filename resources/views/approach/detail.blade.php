@extends('layouts.layouts')

@section('content')
    <h1>TOP ｜ 部位別一覧 ｜ { $part->name }} ｜ { $approach->name }}</h1>

    <ul>
        <li>
            {{ $approach->name }}
        </li>
        <li>{{ $approach->description }}</li>
    </ul>
    <button class="btn btn-primary" onclick="history.back(-1)">Back</button>
@endsection
