※マークダウン記法で書きます。

# Webエンジニアに必要な技術

## 参考書籍

- 「プロになるためのWeb技術入門」
- 「」


## 主な開発環境
- LAMP環境
  - Linux
  - Apache
  - MySQL
  - PHP
- LEMP環境
  - Linux
  - Nginx
  - MariaDB
  - PHP

## プログラマの憂鬱
常に新しい技術をキャッチアップしなきゃならない。
「設計士」「営業・統括」になれば現場を引退することも可能。

- 現場プログラマ 30～100万
- 設計士 80～150万
- 営業・統括 ~~~

## 主な技術

### HTTPプロトコル
通信。
通信においてのルール。（プロトコル＝ルール）

[「HTTPリクエスト」と「HTTPレスポンス」]([URL](https://itsakura.com/network-http-get-post))
[HTTPリクエストとは？HTTPリクエストを目で確認したい]([URL](https://programmer-life.work/html_css/html-request))


### リクエスト
フロントからサーバーサイドへ送られるもの。
リクエストライン、リクエストヘッダー、メッセージボディで形成されている。

#### HTTPリクエストライン
1行で表示されます。
Get, Postなどのメソッドで始まり、Getメソッド使用時はメッセージボディは取得されない。
#### HTTPリクエストヘッダ
2行目から空行までの間がリクエストヘッダです。
#### HTTPリクエストメッセージボディ
空行のあとから始まります。英語でoptional message bodyといい、必要な時に使われる要素です。

種類
- GET
ズバリURLのこと

- POST
URLだけでなくリクエストボディにパラメータなどを入れることにより、URLに表示されないデータを送信することができる。

- PUT
POSTと似ているがデータの更新のための通信メソッド。

- PATCH
POSTと似ているがデータの更新のための通信メソッド。

- DELETE
データを削除するための通信メソッド

- HEAD


- OPTIONS

### レスポンス
サーバーサイドからフロントへ返却されるもの。



### session、cookie


### DB


### Linuxサーバー構築





### コード例
```
for(let i = 0; i < image_click.length; i++) {
        image_click[i].addEventListener('click', function(ele) {
            const modal_image = document.getElementById('modal_image');
            const modal_contents = document.getElementById('modal_contents');
            modal_contents.setAttribute('src', 'Img/' + this.dataset.src);
            const modal_background = document.getElementById('modal_background');
            modal_image.classList.add('open');
            modal_background.classList.add('open');
        });
    // 閉じる
        modal_background.addEventListener('click', function() {
        modal_image.classList.remove('open');
        modal_background.classList.remove('open');
    });
```