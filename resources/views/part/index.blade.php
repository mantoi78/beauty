
@extends('layouts.layouts')

@section('content')



    <h1>TOP ｜ 部位一覧</h1>
    <ul>

        {{--                <a href="http://127.0.0.1:8080/wishes/{$part->id}" class="btn btn-primary" role="button">--}}
        {{--    //partsから値を1つずつ取り出して、partへ代入--}}
        @foreach($parts as $index => $part)
            <li>
                <a href="{{ route('wishes.index', $index) }}">{{ $part->name }}</a>
{{--                <a href="/wishes/{part_id}/{{ $index }} }}">{{ $part->name }}</a>--}}
                {{--                <a href="{{ route('wish.index', ['part_id'=>'$part']) }}">--}}
                @endforeach

            </li>
    </ul>


    <button class="btn btn-primary" onclick="history.back(-1)">Back</button>

@endsection

