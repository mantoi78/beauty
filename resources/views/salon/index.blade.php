<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>サロン一覧</title>
</head>

<body>
<h1>TOP ｜ 部位別一覧 ｜ 眉毛 ｜ 眉毛をキレイな形にしたい ｜ ハリウッドブロウリフト</h1>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



    @foreach($salons as $salon)
        <table border="1">
            <tr>
                <td>{{ $salon->name }}</td>
                <td>{{ $salon->address }}</td>
                <td>{{ $salon->assessment }}</td>
            </tr>
        </table>
    @endforeach


<button class="btn btn-primary" onclick="history.back(-1)">Back</button>

</body>
</html>

