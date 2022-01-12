$(function() {
    let $body = $('body');

    //メニューボタンクリックでクラスを追加
    $('#btn-menu').on('click', function() {
        $body.toggleClass('open-menu');
    });

    //メニュー以外部分をクリックで閉じる
    $('#sp-menu').on('click', function() {
        $body.removeClass('open-menu');
    });
});