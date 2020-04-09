<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>TOP画面</title>
</head>
<body>
    <section id="main">
        <div class="site">
            <header>
            <h1 class="header">勤怠打刻画面</h1>
            </header>
        </div>
        <ul>
            <li class="img-group">
            <a href="{{ route('attendance.index') }}">勤怠打刻
                    <figure>
                        <img src="" alt="勤怠打刻">
                    </figure>
                </a>
            </li>
            <li class="img-group">
                <a href="{{ route('report.create') }}">日報報告
                    <figure>
                        <img src="" alt="日報報告">
                    </figure>
                </a>
            </li>
            <li class="img-group">
            <a href="{{ route('monthlyreport.create') }}">月次報告
                    <figure>
                        <img src="" alt="月次報告">
                    </figure>
                </a>
            </li>
            <li class="img-group">
                <a href="">勤怠修正
                    <figure>
                        <img src="" alt="勤怠修正">
                    </figure>
                </a>
            </li>
            
        </ul>
    </section>
    <section id="fotter">
        <h1>カレンダーの同期</h1>
    </section>
</body>
</html>