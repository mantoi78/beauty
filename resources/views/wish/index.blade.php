

@extends('layouts.layouts')

@section('content')
    <h1>TOP ｜ 部位別一覧 ｜ {{ $part->name }} ｜</h1>
    <ul>
        @foreach($part->wishes as $wish)
            <li>
                <ul>
                    @foreach($wish->approaches as $detail => $approach)
                        <li>
                            {{ $wish->name }}
                            <a href="{{ route('approaches.detail', $detail) }}">{{ $approach->name }}</a>

                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
    <button class="btn btn-primary" onclick="history.back(-1)">Back</button>
@endsection
