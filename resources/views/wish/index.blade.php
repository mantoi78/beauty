@extends('layouts.layouts')

@section('content')
    <h1>TOP ｜ 部位別一覧 ｜ {{ $part->name }} ｜</h1>
    <ul>
        @foreach($part->wishes as $wish)
            <li>
                <ul>
                    <li>
                        {{ $wish->name }}
                        @foreach($wish->approaches as $approach)
                            <a href="{{ route('approaches.detail', $approach->id) }}">{{ $approach->name }}</a>
                        @endforeach
                    </li>
                </ul>
            </li>
        @endforeach
    </ul>
    <button class="btn btn-primary" onclick="history.back(-1)">Back</button>
@endsection
