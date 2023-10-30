<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>論文編集</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="main">
        @if ($errors->any())
            <div class="error">
                <p><b>{{ count($errors) }}件のエラーがあります</b></p>
            </div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <h1>投稿論文編集</h1>
        <form action="{{ route('tasks.update', $task) }}" method="post">
            @csrf
            @method('PATCH')
            <p>
                <label for="title">論文タイトル</label><br>
                <input type="text" name="title" id="title" value="{{ old('title', $task->title) }}">
            </p>
            <p>
                <label for="body">本文</label><br>
                <textarea name="body" id="body" rows="3" cols="23">{{ old('body', $task->body) }}</textarea>
            </p>
            <div class="button-group">
                <button>更新</button>
                <button  type="button"onclick='location.href="{{ route('tasks.show', $task) }}"'>詳細に戻る</button>
            </div>
        </form>
    </div>
</body>

</html>
