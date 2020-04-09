<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>task編集画面</title>
</head>
<body>
    <section class="container m-5 mr-auto ml-auto">
        <div class="row justify-content-center">
            <div class="col-8">
                @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $message)
                        <li class="alert alert-danger">{{ $message }}</li>
                        @endforeach
                    </ul>
                @endif
                <h1 class="header text-center">Task編集</h1>
                <div class="col-10 m-4 p-5 border border-primary mr-auto ml-auto">
                    <form action="{{ route('task.update', ['id' => $task->id]) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="title">本文</label>
                            <textarea class="form-control" name="body" id="body">{{ old('body', $task->body) }}</textarea>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">更新</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>