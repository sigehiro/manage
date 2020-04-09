<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet"href="/css/monthlyreports.css">
    <title>日報投稿画面(新規投稿画面）</title>
</head>
<body>

    <div class="container m-5 mr-auto ml-auto">

        <div class="row">
            {{-- 左側 --}}
            <div class="col-md-6">
                <div class="row no-gutters border border-success rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col-12 p-4 d-flex flex-column position-static">
                        {{-- 何月の目標だったかできれば入れたい --}}
                        <strong class="d-inline-block mb-2 text-success">今週のタスク</strong>
                        <p class="mt-1 mb-1 text-danger">鬼速PDCAをガンガン回していこう！！</p>

                        {{-- 質問：ここが反応しない --}}
                        {{-- @foreach ($tasks as $task) --}}
                        <div class="m-4 p-4 border border-success">
                            {{-- <p>{{$task->body}}</p>
                            <p>{{$task->created_at}}</p> --}}
                        </div>
                        {{-- @endforeach --}}
                    </div>
                </div>
             </div>


            <div class="col-md-6">
                <div class="row justify-content-center border border-primary rounded">
                    <div class="col-12">
                        <form action="{{ route('report.create')}}" method="POST">
                            @csrf
                            {{-- 前月の月報：翌月の課題 --}}
                            <div class="col-12">
                                <div class="form-group m-1 p-auto  ">
                                    <div class="group mb-auto">
                                        <h2>日報入力</h2>
                                        <textarea class="textArea" name="body" id="body"></textarea>
                                        <span class="highlight"></span>
                                    </div>
                                </div>
                            </div>

                            {{-- タスクの追加 --}}
                            <div class="col-12">
                                <div class="form-group m-1  ">
                                {{-- タスク --}}
                                    <div class="group">
                                        <h2>タスク追加</h2>
                                        <textarea class="textArea" name="task" id="task"></textarea>
                                        <span class="highlight"></span>
                                    </div>
                                    <div class="text-center">
                                    {{-- 日付指定 --}}
                                        <button type="submit" class="btn btn-danger">日付指定</button>
                                        <button type="submit" class="btn btn-primary">保存</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

                            {{-- 月次目標 --}}
                            {{-- <div class="group">
                                <input type="text" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>月次目標</label>
                            </div> --}}

                            {{-- 計画、売上、利益 --}}
                            {{-- <div class="group">
                                <input type="text" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>計画//売上//利益</label>
                            </div> --}}

                        