<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>年別・確認画面（前月・今月のみ表示）</title>
</head>
<body>
    <div class="container">
    {{-- 左側・前月の月報 --}}
        {{-- 残り、
        ①前月、今月のデータをどう取得するかのやり方。（例；4月をクリックしたら３、４月の月報データの取得 --}}
        {{-- ②労働時間の取得 --}}

        @foreach ($monthlyreports as $monthlyreport)
            <div class="m-4 p-4 border border-primary">
                <p>{{ $monthlyreport->beforeReport }}</p>
                <p>{{ $monthlyreport->target }}</p>
                <p>{{ $monthlyreport->plan }}</p>
                <p>{{ $monthlyreport->strategy }}</p>
            </div>
        @endforeach

        <div class="row mb-2">
            {{-- 左側 --}}
            <div class="col-md-6">
                <div class="row no-gutters border border-primary rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                    {{-- 何月の目標だったかできれば入れたい --}}
                    <strong class="d-inline-block mb-2 text-success">前月目標</strong>
                    <p class="mt-1 mb-1 text-primary">計画//売上//利益・<span class="text-danger">月次戦略</span></p>
                    <h4 class="mb-2">{{ $monthlyreport->beforeReport }}</h4>
                </div>
            </div>
            {{-- 右側 --}}
            {{-- すでに記入している場合は、それを表示。 --}}
            <div class="col-md-6">
                <div class="row no-gutters border border-primary rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <div class="border border-success p-2 rounded mb-2">
                            <strong class="d-inline-block mb-2 text-success">月次目標</strong>
                            <h3 class="mb-2">{{ $monthlyreport->target }}</h3>
                        </div>
                        <div class="border border-primary p-2 rounded mb-2">
                            <div class="mb-2 text-primary">計画//売上//利益</div>
                            <h3 class="mb-2">{{ $monthlyreport->plan }}</h3>
                        </div>
                        <div class="border border-danger p-2 rounded">
                            <div class="mb-2 text-danger">月次戦略</div>
                            <h3 class="mb-auto">{{ $monthlyreport->strategy }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>