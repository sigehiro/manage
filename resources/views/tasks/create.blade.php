<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/tasks.css">
    <title>task新規投稿画面</title>
</head>
<body>
    <section class="container m-5 mr-auto ml-auto">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="header text-center">Task登録</h1>
                <div class="col-10 m-4 p-5 border border-primary mr-auto ml-auto">
                    <form action="{{ route('task.create') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="group">
                                <input type="text form-control"  name="body" id="body" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>New Task</label>
                            </div>
                            {{-- 当初予定していた分 --}}
                            {{-- <label for="body">New Task</label> --}}
                            {{-- <textarea class="form-control" name="body" id="body"></textarea>
                            </div> --}}
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">投稿</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>