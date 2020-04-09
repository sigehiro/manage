<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/monthlyreports.css">
    <title>月報報告画面</title>
</head>
<body>
    <div class="container m-5 mr-auto ml-auto">
        <div class="row justify-content-center">
            <div class="col-12">
                <form action="{{ route('monthlyreport.create')}}" method="POST">
                    @csrf
                    {{-- 前月の月報：翌月の課題 --}}
                    <div class="form-group m-4  border border-primary ">
                        <div class="group">
                            <h2>前月の月報：翌月の課題</h2>
                            <textarea class="textArea" name="beforeReport" id="beforeReport"></textarea>
                            <span class="highlight"></span>

                            {{-- 本当はテキストにしたかった --}}
                            {{-- <textarea class="form-control" name="before-report" id="before-report"></textarea> --}}
                        </div>
                    </div>

                    {{-- 月次計画 --}}
                    <div class="form-group m-4  border border-primary">

                        {{-- 月次目標 --}}
                        <div class="group">
                            <input type="text" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>月次目標</label>
                        </div>

                        {{-- 計画、売上、利益 --}}
                        <div class="group">
                            <input type="text" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>計画//売上//利益</label>
                        </div>


                        {{-- 戦略 --}}
                        <div class="group">
                            <h2>月次戦略</h2>
                            <textarea class="textArea" name="strategy" id="strategy"></textarea>
                            <span class="highlight"></span>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-danger">後で</button>
                            <button type="submit" class="btn btn-primary">投稿</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>