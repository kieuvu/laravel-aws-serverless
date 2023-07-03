# Laravel-serverless

## Stack

-   PHP
-   Composer: laravel, bref/bref, bref/laravel-bridge
-   NPM: serverless, serverless-lift
-   AWS: lambda, s3, dynamoDB, sqs

## Install

1. Install serverless

```bash
npm i -g serverless
```

2. Install laravel dependencies

```bash
composer require bref/bref bref/laravel-bridge --update-with-dependencies
```

3. Create config file

```bash
php artisan vendor:publish --tag=serverless-config
```

4. Install serverless plugin

```bash
serverless plugin install -n serverless-lift
```

## Deploy

1. Config AWS key/secret

```bash
serverless config credentials \
  --provider aws \
  --key key \
  --secret secret
```

2. Deploy

```bash
serverless deploy
```

=> output: .serverless/
