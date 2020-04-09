<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/attendances.css">
    <title>勤怠入力画面</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div id="sidebar" class="col-12 m-3">
                <input type="button" onclick="location.href='./index.blade.php'" value="TOP" class="topBtn ">
            </div>

                
            <section class="contents col-12 mr-auto ml-auto">
                <div class="col-10 mx-auto">
                    <div class="m-2 p-2 border border-primary  mx-auto">
                        <h1 class="attendance text-center">勤怠管理画面</h1>
                    </div>
                    <div class="greed  p-4 border border-success">
                        <h3 class="">Goodmorning sige! or お疲れ様でした。Ajaxでボタンを押したら表れるようにしたい。</h3>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <div class="attendance-btn">
                            <div class="bluelight-1">
                                <a href="#">出勤</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="attendance-btn">
                            <div class="bluelight-2">
                                <a href="#">退勤</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="row">
            <div class="col-12">
                <footer class="footer">
                    <p class="footer-text text-center">Copyright_Manage_Sige0728</p>
                </footer>
            </div>
        </div>
    </div>
</body>
</html>