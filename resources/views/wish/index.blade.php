@extends('layouts.layouts')

@section('content')
    <h1>TOP ｜ 部位別一覧 ｜ {{ $part->name }}</h1>
    <ul>
        @foreach($part->wishes as $wish)
            <li>{{ $wish->name }}
                <ul>
                    @foreach($wish->approaches as $approach)
                        <li>{{ $approach->name }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
    <a href="http://127.0.0.1:8080/parts" class="btn btn-primary" role="button">戻る</a>
    <button class="btn btn-primary" onclick="history.back(-1)">Back</button>
@endsection
