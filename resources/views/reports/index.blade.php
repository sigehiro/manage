<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>日報一覧画面</title>
</head>
<body>
    <section class="container m-5 mr-auto ml-auto">
        <div class="row justify-content-center">
            <div class="col-10">
                <P>taskをタスク一蘭画面に移動させる</P>
                @foreach ($reports as $report)
                    <div class="m-4 p-4 border border-primary">
                        <p>{{ $report->created_at }}</p>
                        <p>{{ $report->body }}</p>
                        {{-- タスク一覧画面に追加していく --}}
                        {{-- <p>{{ $report->task }}</p> --}}
                        <div class="text-right">
                            <a class="btn btn-success" href="{{ route('report.edit', ['id' => $report->id]) }}">Edit</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</body>
</html>