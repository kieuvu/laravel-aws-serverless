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

## Required AWS Permission To Deploy

> Updating...

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

output:

```
endpoints:
  ANY - https://xxxxxxxxxx.execute-api.xx-xxxx-x.amazonaws.com/dev
  ANY - https://xxxxxxxxxx.execute-api.xx-xxxx-x.amazonaws.com/dev/{proxy+}
functions:
  web: laravel-dev-web (31 MB)
  artisan: laravel-dev-artisan (31 MB)
  jobsWorker: laravel-dev-jobsWorker (31 MB)
jobs: https://sqs.xx-xxxx-x.amazonaws.com/xxxxxxxxxxxx/laravel-dev-jobs
```

```
.
├── .serverless/
│   ├── cloudformation-template-create-stack.json
│   ├── cloudformation-template-update-stack.json
│   ├── laravel.zip
│   └── serverless-state.json
├── ...
└── serverless.yaml
```
