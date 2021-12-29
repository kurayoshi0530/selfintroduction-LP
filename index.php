<!DOCTYPE html>
<html lang="ja">
    <head>
        <!-- 文字コードを設定する -->
        <meta charset="uft-8">
        <!-- viewportの設定 -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- リセットCSSを読み込む -->
        <link rel="stylesheet" href="css/reset.css">
        <!-- 自作のCSSを読み込む -->
        <!-- <link rel="stylesheet" href="css/style.css"> -->
        <!-- BootStrapを読み込む -->
        <link href="css/BootStrap.css/bootstrap.min.css" rel="stylesheet">
        <title>self-introduction</title>
        <!-- jQueryを読み込む -->
        <script src="js/jquery-3.6.0.min.js"></script>
    </head>

    <body>
    <div class="container-fluid">
        <div class="row">
            <!-------------------- タイトル表示 -------------------->
            <div class="col-lg-12 d-flex align-items-center justify-content-center title" style="height:600px;">
                <div class=logo>
                    <p><img src="images/icon-haikeinashi.png" alt=""></p>
                </div>
                <p class="text-center titleAnime">
                    yoshihiko kurachi
                </p>
            </div>

            <!-------------------- profile -------------------->
            <div class="text-center profile-title">
                <div class="title">
                    <h1>自己紹介</h1>
                </div>

                <!-------------------- アイコン表示 -------------------->
                <div class="col-lg-6 d-flex align-items-center justify-content-center icon" style="height:650px;">
                    <img src="https://github.com/kurayoshi0530/my-portfolio/blob/master/images/icon-haikeinashi.PNG?raw=true" alt="ヒヨッ子">
                </div>
                <!-------------------- 自己紹介表示 -------------------->
                <div class="col-lg-6 d-flex flex-column justify-content-center profile" style="height:650px;">
                    <div class="flex-fill text-left profile">
                        <h4>profile</h4>
                        <p>氏名：倉地良彦</p>
                        <p>誕生日：１９７６年５月３０日</p>
                        <p>居住地：愛知県</p>
                    </div>
                    <div class="flex-fill test-left chance">
                        <h4>IT業界に飛び込んだきっかけ</h4>
                        <p>高卒後、車の部品を作る工場で２５年間金型修理業務をしていましたが、コロナ禍で将来のことを考える時間が多くなりました。</p>
                        <p>家族のことを考えると今後自動車業界で働き続けるのは難しいと感じて、昔から興味のあったプログラムなら将来いろんな道を切り拓けると思ったのでIT業界に飛び込みました。</p>
                    </div>
                    <div class="flex-fill text-left skill">
                        <h4>skill</h4>
                        <div class="wrap">
                            <div class="text-center icon">
                                <img src="https://img.icons8.com/ios-filled/50/000000/html-5--v1.png"/>
                                <p>HTML</p>
                            </div>
                            <div class="text-center icon">
                                <img src="https://img.icons8.com/ios-filled/50/000000/css3.png"/>
                                <p>CSS</p>
                            </div>
                            <div class="text-center icon">
                                <img src="https://img.icons8.com/ios-filled/50/000000/wordpress--v1.png"/>
                                <p>WordPress</p>
                            </div>
                        </div> <!-- end wrap -->
                    </div> <!-- end skill -->
                </div> <!-- end profile -->

                <!-------------------- collection_works表示 -------------------->
                <div class="text-center collection_works">
                    <div class="title">
                        <h1>作品集</h1>
                    </div>

                    <div id="works-image" class="justify-content-around text-center row">
                        <div class="col-lg-4 image-trim">
                            <a href="images/オリジナルアプリ関係/ルート検索画面大.png" data-lightbox="group"><img src="images/オリジナルアプリ関係/ルート検索画面小.png"></a>
                            <h6>ルート検索画面</h6>
                        </div>
                        <div class="col-lg-4 image-trim">
                            <a href="images/オリジナルアプリ関係/レビュー投稿画面大.png" data-lightbox="group"><img src="images/オリジナルアプリ関係/レビュー投稿画面小.png"></a>
                            <h6>レビュー投稿画面</h6>
                        </div>
                        <div class="col-lg-4 image-trim">
                            <a href="images/オリジナルアプリ関係/API・プラグイン画面大.png" data-lightbox="group"><img src="images/オリジナルアプリ関係/API・プラグイン画面小.png"></a>
                            <h6>API・プラグイン実装画面</h6>
                        </div>

                        <div class="text-center notes">
                            <p>画像をクリックすると拡大されます</p>
                        </div>
                        <div class="col-lg-12 text-center development-secret-story">
                            <h3>制作秘話</h3>
                            <div class="col-lg-12 text-left">
                                <p>開発当初はprogateのHTML＆CSSとプログラミングスクールでwordPressとPHPの教材をやった程度の知識からスタートしました。</p>
                                <p>基本もままならない状態からスタートして、環境構築から一通りの機能実装まで４ヶ月程掛かりました。</p>
                                <p>Dockerで環境構築する際に使っている<span>Mac bookが動かなくなり</span>、OSを再インストールした時は冷や汗かきました。</p>
                            </div>
                        <div class="text-left important">
                            <h5>頑張ってきた結果制作当初に比べて,自分で考えて解決する力が上がりました。</h5>
                        </div>
                    </div>
                </div> <!-- end collection_works -->
            </div> <!-- end row -->
        </div> <!-- end container -->

        <a href="contactform.php">お問合せページへ</a>
        </div> <!-- end container -->
        <!-- BootStrapを読み込む -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="js/BootStrap.js/bootstrap.min.js"></script>
        <!-- BootStrap読み込む ここまで -->
        <script src="js/sample-LP.js" async></script>
    </body>

</html>