# Laravel AfricansTalkingGateway Package

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]


This is a laravel 5.*.* package to support [AfricansTalkingGateway](https://www.africastalking.com/) API.
To use it make sure you have a username and an APIkey from their website.

Enjoy.

## Install

Via Composer

``` bash
$ composer require DevMaurice/AfricansTalkGateway
```

The add the following in **config/app.php**

``` php
 DevMaurice\AfricansTalkGateway\AfricansTalkGatewayServiceProvider::class,
 ```

 ```php
 'Africas'   => DevMaurice\AfricansTalkGateway\Facade\AfricasFacade::class,
 ```


## Usage

Add 
```
afriname=USERNAME   //your password from website
api_key=48abcdefghd1 //your apikey

```
in your **.env** file first

Use the AfricansTalkingGateway(https://www.africastalking.com/) api [documentation](http://docs.africastalking.com) for methods reference.

**Example**
``` php
Africas::sendMessage('+2547XXXXXXXX', 'Trying out sending message');
```
where +2547XXXXXXXX is your phone number.

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Pull request and contribute.

## Security

If you discover any security related issues, please email **developermaurice@gmail.com** instead of using the issue tracker.



## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/DevMaurice/AfricansTalkGateway.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/DevMaurice/AfricansTalkGateway/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/DevMaurice/AfricansTalkGateway.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/DevMaurice/AfricansTalkGateway.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/DevMaurice/AfricansTalkGateway.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/DevMaurice/AfricansTalkGateway
[link-travis]: https://travis-ci.org/DevMaurice/AfricansTalkGateway
[link-scrutinizer]: https://scrutinizer-ci.com/g/DevMaurice/AfricansTalkGateway/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/DevMaurice/AfricansTalkGateway
[link-downloads]: https://packagist.org/packages/DevMaurice/AfricansTalkGateway
[link-author]: https://github.com/DevMaurice
[link-contributors]: ../../contributors
