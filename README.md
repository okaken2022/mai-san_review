# Mai-san Review テーマ

## コード整形ツールの使い方

このプロジェクトでは以下のコード整形ツールを使用しています：

### Prettier

PHPファイルを自動整形します。

```bash
# すべてのPHPファイルを整形
npm run format

# 整形が必要なファイルをチェック（変更なし）
npm run format:check
```

### PHP_CodeSniffer (PHPCS)

WordPressコーディング規約に準拠しているかチェックします。

```bash
# コーディング規約チェック
composer phpcs

# 自動修正（可能な場合）
composer phpcbf
```

## 初期設定

```bash
# 依存関係のインストール
npm install
composer install

# PHPCSのWordPress規約を登録
./vendor/bin/phpcs --config-set installed_paths vendor/wp-coding-standards/wpcs
```

## エディター連携

VS Codeを使用している場合は、以下の拡張機能をインストールしてください：

- Prettier - Code formatter
- PHP Sniffer & Beautifier

各エディターの設定ファイルはすでにプロジェクトに含まれています。
