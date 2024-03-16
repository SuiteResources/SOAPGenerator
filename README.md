# SOAPGenerator
[![Latest Stable Version](https://poser.pugx.org/SOAPGenerator/SOAPGenerator/v/stable.png)](https://packagist.org/packages/SOAPGenerator/SOAPGenerator)
[![Build Status](https://travis-ci.org/SOAPGenerator/SOAPGenerator.svg?branch=master)](https://travis-ci.org/SOAPGenerator/SOAPGenerator)
[![Code Coverage](https://scrutinizer-ci.com/g/SOAPGenerator/SOAPGenerator/badges/coverage.png?s=91798255fd973950b1e2d7478f99d6f6f80cf6da)](https://scrutinizer-ci.com/g/SOAPGenerator/SOAPGenerator/)
[![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/SOAPGenerator/SOAPGenerator/badges/quality-score.png?s=23e602a86f75a79a2f1013caac99558f2464ce74)](https://scrutinizer-ci.com/g/SOAPGenerator/SOAPGenerator/)
[![Dependency Status](https://www.versioneye.com/user/projects/52697615632bac67b2002e93/badge.png)](https://www.versioneye.com/user/projects/52697615632bac67b2002e93)

Simple WSDL to PHP classes converter. Takes a WSDL file and outputs class files ready to use.

Uses the [MIT license](http://www.opensource.org/licenses/mit-license.php).

## Maintenance status

This is no longer actively maintained.

If you are looking for a PHP library to work with SOAP, you might want to try [`phpro/soap-client`](https://github.com/phpro/soap-client).

If you are currently using `SOAPGenerator` and want to continue using it, consider forking the project and maintain it yourself.

## New major version: 3

A new major version of SOAPGenerator has recently been released: 3

This introduces changes to both configuration and generated code. The changes makes it more flexible to use, easier to include in other projects, promotes contributions and reduces maintenance.

2.x users are encourage to read [a walkthrough of what is new in 3.0](docs/whats-new-in-3.0.md).

## Installation

Add SOAPGenerator to your project using [composer](https://getcomposer.org/doc/00-intro.md):
```bash
composer require SOAPGenerator/SOAPGenerator
```

## Contributors
Originally developed by [@walle](https://github.com/walle) and includes bug fixes and improvements from [various contributors](https://github.com/SOAPGenerator/SOAPGenerator/graphs/contributors).

### Contributing
Pull requests are very welcome. Please read [our guidelines for contributing](CONTRIBUTING.md).

Be sure to run the test suite, the fixers and the analyzers
```bash
composer test
composer fix
composer analyse
```

## Usage and options

See [usage and options](docs/usage-and-options.md) for info on the usage of this package.

## Versioning

This project uses [semantic versioning](http://semver.org/). The following constitutes the public API:

  * `\SOAPGenerator\GeneratorInterface`
  * `\SOAPGenerator\ConfigInterface`
  * Generated code

Backwards incompatible changes to these means that the major version will be increased. Additional features and bug fixes increase minor and patch versions.