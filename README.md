# Adminer CLI

Command line interface to run adminer on the PHP built-in server.

## Installation

Use composer installation.

```
$ composer require --dev kohkimakimoto/adminer-cli
```

## Usage

Run the following command.

```
$ php vendor/bin/adminer
```

Open URL `http://localhost:8080`.

![screen.png](https://raw.githubusercontent.com/kohkimakimoto/adminer-cli/master/screen.png)

## Options

```
Usage: adminer [-p port] [-H host] [-v adminer_version] [-t theme]

Command line interface to run adminer on the PHP built-in server

Options:
  -p    Listen port
  -H    Listen host
  -t    Specify the theme (flat|nette|lucas-sandery|...).
  -v    Specify the adminer version.

```

## Author 

Kohki Makimoto <kohki.makimoto@gmail.com>

## License

Apache License 2.0

See [LICENSE](./LICENSE)


