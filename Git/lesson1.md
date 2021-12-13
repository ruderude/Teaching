# Git(GitHub)について

```
echo "# Teaching" >> README.md // RRADME.mdというアプリ説明書を作成しました。

git init // Git初期化（.gitが作成される）

git add README.md (README.mdをステージングに上げる。「.」で編集ファイルをすべて拾ってくれる。(git add .))

git commit -m "first commit" // コメント必須で、ステージングに上がっていたファイル群をコミットする（更新完了とする）

git branch -M main // mainブランチ作成。自分をセット。（自分のローカルブランチを決定する）

git remote add origin git@github.com:ruderude/Teaching.git // リモートレポジトリにアップロードするため、照準を当てる。

git push -u origin main // リモートレポジトリにプッシュ通信
```