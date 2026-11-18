# 更新の配信の仕様

VK Site Builder を VWS（ベクトルの製品配布用サーバー）から配信し、各サイトの管理画面から更新できるようにする仕組みの仕様です。

issue #3（ https://github.com/vektor-inc/vk-site-builder/issues/3 ）の仕様提案とユーザーの回答をもとにまとめました。承認後は、この文書を正とします。issue のコメントと食い違う場合は、この文書に合わせます。

## 登場するものと関係

- **GitHub Actions（GitHub 上で自動で動く処理）**: タグを push すると、配布用の zip を作り、GitHub Release を作り、VWS へ zip を送る。
- **VWS サーバー / ライセンスサーバー（`license.vektor-inc.co.jp`）**: 置かれた zip をもとに「最新版の番号・ダウンロード先」などの更新情報を返す。
- **各サイトの WordPress に入った VK Site Builder**: 更新チェッカー（plugin-update-checker。WordPress.org 以外から配るプラグインに更新通知を出すためのライブラリ）が、ライセンスサーバーへ定期的に問い合わせ、新しい版があれば「プラグイン」画面・「更新」画面に通知を出す。

## 他の製品版との照合

vk-blocks-pro / vk-filter-search-pro / vk-video-block-pro / lightning-g3-pro-unit / vk-booking-manager-pro の 5 本とも、同じ仕組みです。

- 3 桁のタグ（例 `1.2.3`、`v` 無し）の push で `release.yml` が動き、スモークテスト（最低限動くかの確認）→ PHPUnit → GitHub Release → VWS へ rsync（ファイル転送）で zip を 1 つ送る。
- 更新チェッカーは composer（PHP のライブラリ管理ツール）で入れる `yahnis-elsts/plugin-update-checker` ^5.0 を、`vendor/` ごと zip に同梱する。
- 問い合わせ先は全製品で同じ形: `https://license.vektor-inc.co.jp/check/?action=get_metadata&slug=<スラッグ>`。更新情報の JSON をリポジトリ側で作っている製品はない。
- ライセンスキーの扱いは 2 通り。
  - キーを送らない: vk-video-block-pro、vk-filter-search-pro（設定画面も通知も無し）
  - キーを送る: vk-blocks-pro、lightning-g3-pro-unit、vk-booking-manager-pro（キーの入力欄と、未入力時の通知あり）

## 決定事項

- **ライセンスキー**: 更新を制限しない。キーの入力画面・設定項目・通知は作らず、更新チェッカーはキー無しでライセンスサーバーへ問い合わせる（vk-video-block-pro・vk-filter-search-pro と同じ型）。
  - 後からキーで制限をかけると、それまで更新できていた人が急にできなくなる。制限をかけるかどうかは、販売の形（期限付きのライセンスで売るか）が決まったときに改めて判断する。
- **changelog**: `readme.txt` は置くが、`== Changelog ==` の中身は当面書かない。更新画面の「詳細を表示」の「変更履歴」タブは空になる。
  - `== Changelog ==` の見出しだけは置く。リリース手順（vk-wp-product-release スキルのフェーズ1）は、この見出しの直下へ `= X.Y.Z =` を挿入するため、changelog を書き始めたときにそのまま使える。
- **最初に配信するバージョン**: `0.1.0`。
  - プラグイン本体のヘッダーの `Version:` は、この変更の時点で `0.1.0` にしておく。
  - 理由: リリース手順がバージョンを付ける工程（フェーズ1）に進むのは、`readme.txt` の `== Changelog ==` の直下にバージョンの付いていない行があるときだけ。changelog を書かない間はこの工程に進まず、ヘッダーの `Version:` の値のタグをそのまま打つ工程（フェーズ2）に進む。`0.0.0` のまま残すと、`0.0.0` のタグで配信されてしまう。
  - changelog を書かない間は、次の版を出す前に、ヘッダーの `Version:` を手で上げてからリリース手順を始める。

## 入れたもの

- `composer.json`: 更新チェッカーを require。PHPUnit 関連は require-dev。
- `package.json`: `dist`（`composer install --no-dev` → 必要なファイルを `dist/vk-site-builder/` へコピー → `dist/vk-site-builder.zip` を作る）と `phpunit` のスクリプト。JavaScript のビルドは無いので `build` は作らない。
- zip に入れるもの: `vk-site-builder.php`、`inc/`、`patterns/`、`assets/`、`vendor/`、`readme.txt`
- zip から外すもの: `.claude/`、`.github/`、`tests/`、`node_modules/`、`CLAUDE.md`、`composer.*`、`package*.json`、`.wp-env.json`、`.phpunit.xml`、`docs/`
- `.gitignore`: `vendor/`、`node_modules/`、`dist/`、`.claude/worktrees/` など。
- `vk-site-builder.php`:
  - `vendor/autoload.php` があるときだけ読み込む（`vendor/` の無い zip が配信されても致命的なエラーにしないため）。
  - 更新チェッカーを `slug=vk-site-builder` で登録する（処理は `inc/update-checker/register-update-checker.php`）。WP-Cron（WordPress の予約実行）による自動更新でも動くよう、管理画面だけに限定（`is_admin()`）しない。
  - バージョンを定数 `VKSB_VERSION` にする（ヘッダーの `Version:` から読み取る）。
- `readme.txt`: 更新画面の「詳細を表示」に出る説明の元になる。changelog は上の決定事項のとおり見出しだけ。
- `.github/workflows/release.yml`: vk-video-block-pro の 4 つのジョブ（smoke_test → php_unit → release → deploy_vws）を土台に、プラグイン名を vk-site-builder に変えたもの。VWS へ送る secrets の名前は他の製品と同じ（`DEPLOY_*_VWS`）。
- `.wp-env.json`・`.phpunit.xml`・`tests/`: 読み込み・パターンの登録・更新チェッカーの登録を確かめる最小の PHPUnit。リリース手順の前提条件が求めるため。
- 新しい管理画面・設定項目は増えない。増えるのは WordPress 本体の更新通知と、更新チェッカーが出す「更新を確認」リンクだけ。

## 採らなかったもの

- ベータ版の配信経路は作らない（既存の製品にも、リリース手順にも無いため）。
- E2E テストは入れず、スモークテストと最小の PHPUnit まで（パターンを登録するだけのプラグインで、更新処理自体は外部ライブラリのため）。
- 更新情報の JSON を自前で作って置く方式は採らない（どの製品も採っておらず、サーバー側の仕組みと二重になるため）。

## 検討したライセンスキーの案（植草の設計提案）

- **案A: ライセンスキー無し**（vk-filter-search-pro と同じ型）。採用。
  - メリット: 利用者は何も設定せず更新できる。設定画面を作らずに済む。
  - デメリット: 未購入・期限切れのサイトにも更新が届く。後から案B・Cへ切り替えると、それまで更新できた人が急にできなくなり、体験が後退する。
- **案B: 製品専用のキー入力欄**（vk-blocks-pro と同じ型）
  - メリット: 販売条件と更新の権利が一致する。他の製品版と同じ型で迷わない。
  - デメリット: 設定画面を持たない製品に、キーのためだけの画面が増える。未入力の間、通知が煩わしい。
- **案C: 既存パッケージのキー（Vektor Passport 等）を共用**
  - メリット: 利用者が管理するキーが増えない。
  - デメリット: どのキーが通るかを案内文で示す必要がある。ライセンスサーバー側の判定に手を入れる必要がある。
- 植草の推奨: 期限付きライセンスで売るなら案C、買い切りで更新は誰にでも配るなら案A。キーを入れる場合も、未入力の通知は管理画面全体の赤い通知ではなく、プラグイン一覧のこの製品の行の下だけに控えめに出す。キー入力直後は更新情報のキャッシュで通知がすぐ消えないため、「アップデートの再取得」の導線を必ず付ける。

## コードの外で必要な作業（最初のタグを打つ前に必要）

- **組織 secrets（GitHub の組織単位で登録した秘密の値）の共有**: VWS へ送るための `DEPLOY_HOST_VWS` / `DEPLOY_PORT_VWS` / `DEPLOY_USER_VWS` / `DEPLOY_KEY_VWS` / `DEPLOY_KEYPASS_VWS` / `DEPLOY_PATH_VWS` は組織の secrets。組織の管理者が、この 6 つの共有先に vk-site-builder を追加する必要がある。追加しないと VWS へ送る処理が失敗する。
- **ライセンスサーバーへのスラッグ登録の要否**: zip を置くだけで `slug=vk-site-builder` の更新情報が返るのか、商品の登録も要るのかは、リポジトリからは判断できない。サーバーの管理者に確認する。
- **リリース手順側の登録**: vk-wp-product-release スキルの「承認済みリポジトリ」一覧に vk-site-builder が無い。このリポジトリの範囲外のため、初回のリリース時（フェーズ0）に扱う。
