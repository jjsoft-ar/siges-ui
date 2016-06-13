# Siges-UI-gentelella

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]
[![StyleCI][ico-styleci]][link-styleci]

This package is designed to apply a quick and easy template into a laravel application.

The idea is for JJSoft-Laravel web applications to use this template/package. This should make it easier to keep multiple applications up to date and enable quicker development.


## Install

Via Composer

``` bash
$ composer require jjsoft-ar/siges-ui
```

**Add the template package to Laravel's service providers (config/app.php)**

*For <= 5.1*
``` php
JJSoft\SigesUI\Providers\SigesUIServiceProvider::class,
```

*For > 5.1*
``` php
"JJSoft\SigesUI\Providers\SigesUIServiceProvider",
```

**Run the below command to publish package files**

``` bash
php artisan vendor:publish --force
```

## Usage
@todo check this

Taking a new install of laravel open up routes file and past in the below. Navigate to your laravel url and enjoy the template.

``` php
    Route::get('/', function () {
        return view('vendor.sigesui.dashboard');
    });
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing
This template is a modified version of gentelella template.

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security
If you discover any security related issues, please tell us [https://github.com/jjsoft-ar/siges-ui/issues][link-issues].

## Credits

- [aguara_gazu][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/jjsoft-ar/siges-ui.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/jjsoft-ar/siges-ui.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/jjsoft-ar/siges-ui.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/59267204/shield

[link-issues]: https://github.com/jjsoft-ar/siges-ui/issues
[link-packagist]: https://packagist.org/packages/jjsoft-ar/siges-ui
[link-downloads]: https://packagist.org/packages/jjsoft-ar/siges-ui
[link-author]: https://github.com/aguaragazu
[link-contributors]: ../../contributors
[link-styleci]: https://styleci.io/repos/59267204