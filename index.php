<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#"> <!-- OGPを設定することでSNSでページや記事の内容をわかりやすくユーザーに伝える事が出来る -->
    <head>
        <!-- 文字コードを設定する -->
        <meta charset="uft-8">
        <!-- viewportの設定 -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!---------- OGPの設定 ---------->
        <meta property="og:title" content="kurayoshi's portfolio">
        <meta property="og:description" content="kurayoshi's portfolio ポジティブ思考のおっさんの自己紹介、どの様なサービスを提供出来るのか、実際にこんな事が出来ますというものを載せています。お仕事のご相談、ご依頼も受け付けております。">
        <!---------- OGPの設定 ここまで ---------->
        <!-- リセットCSSを読み込む -->
        <link rel="stylesheet" href="css/reset.css">
        <!-- 自作のCSSを読み込む -->
        <link rel="stylesheet" href="css/style.css">
        <!-- BootStrapを読み込む -->
        <link href="css/BootStrap.css/bootstrap.min.css" rel="stylesheet">
        <title>kurayoshi's portfolio</title>
        <!-- jQueryを読み込む -->
        <script src="js/jquery-3.6.0.min.js"></script>
    </head>

    <body>
        <div class="container">
            <!---------- タイトル表示 ---------->
            <div class="text-center title">
                <h1>kurayoshi's portfolio</h1>
            </div>
            <!---------- /タイトル表示 ---------->

            <!---------- ABOUT表示 ---------->
            <div class="about">
                <div class="text-center about-title">
                    <h2>ABOUT</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 about-contents">
                        <img class="mx-auto d-block" src="images/icon-haikeinashi.PNG" alt="キャラアイコン" title="kurayoshiアイコン" width="200" height="200">
                        <div class="text-center personal-info">
                            <p>倉地良彦 （くらちよしひこ）</p>
                            <p>愛知県在住</p>
                            <p>フリーランスWEBエンジニア</p>
                        </div>

                        <div class="profile-title">
                            <h4>こんな人ですよ</h4>
                        </div>
                        <div class="profile-contents">
                            <p>高卒で某自動車部品製造工場で金型修理を25年やってきました。<br>
                                体力の衰えを考えると将来が不安になり、プログラミングを通して時代に取り残されない思考を養いつつ生涯現役で頑張っていこうと思っています。</p>
                            <h6>好きな事</h6>
                            <p>カラオケ<br>（20年くらい前のパンク系が好きです）</p>
                        </div>
                    </div> <!-- end about-contents -->

                    <div class="col-lg-6 skill">
                        <div class="skill-title">
                            <h3>スキル <span>（随時更新中）</span></h3>
                        </div>
                        <div class="skill-contents">
                            <p>・HP、LPのコーディング</p>
                            <p>・WordPressを使ったWEBサイト構築</p>
                            <p>・レスポンシブデザイン対応</p>
                        </div>

                        <div class="skill-title">
                            <h3>対応可能言語</h3>
                        </div>
                        <div class="supported-language">
                            <ul>
                                <li div class="text-center icon">
                                    <img src="https://img.icons8.com/ios-filled/50/000000/html-5--v1.png"/>
                                    <p>HTML</p>
                                </li>
                                <li class="text-center icon">
                                    <img src="https://img.icons8.com/ios-filled/50/000000/css3.png"/>
                                    <p>CSS</p>
                                </li>
                                <li class="text-center icon">
                                    <img src="https://img.icons8.com/ios-filled/50/000000/javascript-logo.png"/>
                                    <p>JavaScript</p>
                                </li>
                                <li class="text-center icon">
                                    <img src="https://img.icons8.com/ios-filled/50/000000/jquery.png"/>
                                    <p>jQuery</p>
                                </li>
                                <li class="text-center icon">
                                    <img src="https://img.icons8.com/ios-filled/50/000000/php-logo.png"/>
                                    <p>PHP</p>
                                </li>
                                <li class="text-center icon">
                                    <img src="https://img.icons8.com/ios-filled/50/000000/wordpress--v1.png"/>
                                    <p>WordPress</p>
                                </li>
                            </ul>
                        </div>

                        <div class="skill-title">
                            <h3>仕事をする上で意識している事</h3>
                        </div>
                        <div class="be-conscious">
                            <p>・レスポンスは早くする。（すぐにレスポンス出来ない時はメッセージで折り返し出来る日時を連絡する。）</p>
                            <p>・クライアント様とのヒアリングは気軽に相談できる雰囲気を大事にしています。</p>
                            <p>・クライアント様のご要望をヒアリングシートを使って共有して認識のズレが無いようにします。</p>
                            <p>・報連相をしっかりする。</p>
                        </div>
                    </div> <!-- end skill -->
                </div> <!-- end row -->
            </div> <!-- end about -->
            <!---------- /ABOUT表示 ---------->

            <a href="contactform.php">お問合せページへ</a>
        </div> <!-- end container -->
        <!-- BootStrapを読み込む -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="js/BootStrap.js/bootstrap.min.js"></script>
        <!-- BootStrap読み込む ここまで -->
        <script src="js/sample-LP.js" async></script>
    </body>

</html>