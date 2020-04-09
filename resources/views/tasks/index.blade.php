<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>タスク確認画面</title>
</head>
<body>
    <section class="container m-5 mr-auto ml-auto">
        <div class="row justify-content-center">
            <div class="col-10">
                @foreach ($tasks as $task)
                    <div class="m-4 p-4 border border-primary">
                        <p>{{$task->body}}</p>
                        <p>{{$task->created_at}}</p>
                        {{-- 期限の表示（いつからいつまでのtaskか） --}}
                        <div class="text-right">
                            <a class="btn btn-success" href="{{ route('task.edit', ['id' => $task->id]) }}">Edit</a>
                            <form action="{{ route('task.destroy', ['id' => $task->id]) }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">Complete</button>
                            </form>
                        </div>
                    </div>
                @endforeach

                <a href="{{ route('task.create')}}" class="btn btn-primary btn-block col-10 mr-auto ml-auto">Task追加</a>
            </div>
        </div>
    </section>
</body>
</html>