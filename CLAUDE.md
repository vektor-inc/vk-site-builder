# VK Site Builder 開発ルール

## ブロックパターン

- 基本的な余白の考え方は design-rules-spacing.md に必ず従う。
- ブロックの組み方は vk-block-editor-rules スキルに従う。ここには、このプラグイン固有の決め事だけを書く。
- スペーサーには WordPress コアのスペーサーブロック（`core/spacer`）を使う。VK Blocks のスペーサーブロックは使わない。
- カスタム CSS は、基本的に書かない。見た目は、ブロックの設定（色・文字・余白などのプリセット）と、ブロックの組み方だけで作る。
  - VK Blocks Pro のカスタム CSS も、WordPress 標準の機能で書く CSS も、どちらも使わない。

## vk-block-editor-rules へ移す候補（実験中）

このプラグインで先に試しているルール。うまくいけば vk-block-editor-rules スキルに移す。移すときは、この節をそのまま移せるように、このプラグイン固有の決め事は書かない。

### 文字の上下の余白（ハーフレディング）を消す

- 見出し（`core/heading`）と段落（`core/paragraph`）には、すべて `is-vk-trim-both` クラスを付ける
  - ブロックの属性 `"className":"is-vk-trim-both"` と、HTML の `class` の両方に入れる
  - VK Blocks Pro の「文字の上下を詰める」（タイポグラフィパネルのトグル）と同じ指定になる。CSS は `text-box: trim-both text;`
  - 参考: https://github.com/vektor-inc/vk-blocks-pro/pull/3332
- ハーフレディングが消えるため、ブロックの間の余白の指定が、そのまま見た目の文字の間隔になる。余白は、この状態の見た目で判定する
  - 複数行になる文字は、隣の要素との余白を、その文字の行どうしの空き（行の高さ − 文字の大きさ）より広くとる
- この機能が無い環境（VK Blocks Pro が入っていない、または `text-box` に対応していないブラウザ）では、クラスが付いていても何も起きず、ハーフレディングが残る
