<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task一覧</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="main">
        <div class="show">
            <h1>タスク一覧</h1>
            <ul class="all_task">
                @foreach ($tasks as $task)
                    <li><a href="{{ route('tasks.show', $task) }}">{{ $task->title }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="create">
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
            <form action="{{ route('tasks.store') }}" method="post">
                @csrf
                <h1>新規論文投稿</h1>
                <p>
                    <label for="title">タイトル</label><br>
                    <input type="text" name="title" id="title" value="{{ old('title') }}">
                </p>

                <p>
                    <label for="body">内容</label><br>
                    <textarea name="body" id="body" rows="3" cols="23">{{ old('body') }}</textarea>
                </p>
                <input type="submit" value="Create Task">
            </form>
        </div>
    </div>
</body>

</html>
