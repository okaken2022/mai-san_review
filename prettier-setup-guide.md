# WordPress テーマ向けコード整形ツール導入ガイド

## 前提条件

- Node.js と npm がインストールされていること
- Composer がインストールされていること（PHP_CodeSniffer用）

## インストール手順

### 1. プロジェクトの初期化

```bash
# プロジェクトディレクトリに移動
cd プロジェクトディレクトリ

# package.jsonが無い場合は初期化
npm init -y
```

### 2. Prettier と PHP プラグインのインストール

```bash
# Prettier と PHP プラグインをインストール（互換性のあるバージョン指定）
npm install --save-dev prettier@2.8.8 @prettier/plugin-php@0.19.6
```

### 3. 設定ファイルの作成

#### .prettierrc の作成

```json
{
    "tabWidth": 4,
    "useTabs": false,
    "singleQuote": true,
    "trailingComma": "es5",
    "bracketSpacing": true,
    "printWidth": 100,
    "semi": true,
    "plugins": ["@prettier/plugin-php"],
    "overrides": [
        {
            "files": "*.php",
            "options": {
                "parser": "php"
            }
        }
    ]
}
```

#### .prettierignore の作成

```
# 外部プラグインやライブラリは除外
vendor/
node_modules/
assets/vendor/

# ビルドされたファイル
*.min.js
*.min.css
*.map

# WordPress関連の一部ファイル
wp-config.php
wp-content/uploads/
```

### 4. package.json にスクリプトを追加

以下のスクリプトを package.json に追加します：

```bash
npm pkg set scripts.format="prettier --write \"**/*.php\""
npm pkg set scripts.format:check="prettier --check \"**/*.php\""
```

または package.json を直接編集:

```json
{
    "scripts": {
        "format": "prettier --write \"**/*.php\"",
        "format:check": "prettier --check \"**/*.php\""
    }
}
```

### 5. PHP_CodeSniffer のインストール

```bash
# composer.json がなければ初期化
[ ! -f composer.json ] && composer init --quiet

# PHP_CodeSniffer と WordPress コーディング規約のインストール
composer require --dev squizlabs/php_codesniffer:^3.7 wp-coding-standards/wpcs:^3.0

# コンポーザースクリプトの追加
composer config scripts.phpcs "phpcs --standard=WordPress"
composer config scripts.phpcbf "phpcbf --standard=WordPress"

# プラグインインストーラーを許可
composer config allow-plugins.dealerdirect/phpcodesniffer-composer-installer true
```

### 6. VS Code/Cursor の設定

#### .vscode/settings.json の作成

```json
{
    "editor.formatOnSave": true,
    "editor.defaultFormatter": "esbenp.prettier-vscode",
    "[php]": {
        "editor.defaultFormatter": "esbenp.prettier-vscode"
    },
    "prettier.requireConfig": true,
    "phpSniffer.standard": "WordPress",
    "phpSniffer.run": "onType",
    "phpSniffer.executablesFolder": "./vendor/bin"
}
```

### 7. インストール後の初期設定

```bash
# 依存関係のインストール
npm install
composer install

# PHPCSのWordPress規約を登録
./vendor/bin/phpcs --config-set installed_paths vendor/wp-coding-standards/wpcs
```

### 8. 必要な VS Code/Cursor 拡張機能

以下の拡張機能をインストールしてください：

- **Prettier - Code formatter** (ID: esbenp.prettier-vscode)
- **PHP Sniffer & Beautifier** (ID: valeryanm.vscode-phpsab)

## コマンドの使用方法

### コード整形

```bash
# すべてのPHPファイルを整形
npm run format

# 整形が必要なファイルをチェック（変更なし）
npm run format:check
```

### コーディング規約チェック

```bash
# コーディング規約チェック
composer phpcs

# 自動修正（可能な場合）
composer phpcbf
```

## トラブルシューティング

- **PHP プラグインが動作しない場合**: Prettier と @prettier/plugin-php のバージョン互換性を確認してください
- **PHPCS が動作しない場合**: WordPress コーディング規約のパスが正しく設定されているか確認してください 