@extends('layouts.layouts')

@section('content')

@endsection

<h1>TOP ｜ 部位別一覧 ｜ {{ $part->name }} ｜ {{ $wish->approach }}</h1>


<a href="http://127.0.0.1:8080/menus" class="btn btn-primary" role="button">


    @foreach($approaches as $approach)
        <table border="1">
            <tr>
                <td>{{ $approach->wish_id }}</td>
                <td>{{ $approach->name }}</td>
                <td>{{ $approach->description }}</td>
            </tr>
        </table>
    @endforeach

</a>

<a href="http://127.0.0.1:8080/parts" class="btn btn-primary" role="button">戻る</a>
<button class="btn btn-primary" onclick="history.back(-1)">Back</button>


