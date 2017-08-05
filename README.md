# Adminer CLI

Run adminer on the PHP built-in server for development

## Installation

Use composer installation.

```
$ composer require --dev kohkimakimoto/adminer-cli
```

## Usage

```
$ php vendor/bin/adminer
```

Open URL `http://localhost:8080`.

## Options

```
Usage: adminer [-p port] [-H host] [-v adminer_version]

Command line interface to run adminer on the PHP built-in server

Options:
  -p    Listen port
  -H    Listen host
  -v    Specify the adminer version.
```


