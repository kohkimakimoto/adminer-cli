# Adminer CLI

Command line interface to run adminer on the PHP built-in server.

## Installation

### Composer

```
$ composer require --dev kohkimakimoto/adminer-cli
```

## Usage

Run the following command.

```
$ php vendor/bin/adminer
# If you installed adminer-cli to the global environment, You just run `adminer`.
```

Open URL `http://localhost:8080`.

![screen.png](https://raw.githubusercontent.com/kohkimakimoto/adminer-cli/master/screen.png)

## Options

```
-p    Listen port (default: 8080).
-H    Listen host (default: 0.0.0.0).
-t    Specify the theme (flat|nette|lucas-sandery|...).
      See https://github.com/kohkimakimoto/adminer-cli/tree/master/src/designs
```

## Author 

Kohki Makimoto <kohki.makimoto@gmail.com>

## License

Apache License 2.0

See [LICENSE](./LICENSE)


