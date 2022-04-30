<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>部位一覧</title>
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<h1>TOP ｜ 部位一覧</h1>

<a href="http://127.0.0.1:8080/wishes" class="btn btn-primary" role="button">

    @foreach($parts as $part)
        <div>{{ $part->name }}</div>
    @endforeach
</a>

<a href="http://127.0.0.1:8080/" class="btn btn-primary" role="button">戻る</a>
<button class="btn btn-primary" onclick="history.back(-1)">Back</button>

</body>
</html>

