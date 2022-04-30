<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>メニュー一覧</title>
</head>

<body>
<h1>TOP ｜ 部位別一覧 ｜ 眉毛 ｜ 眉毛をキレイな形にしたい</h1>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

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
</body>
</html>

