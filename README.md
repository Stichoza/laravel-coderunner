# Laravel CodeRunner
[![Latest Stable Version](https://img.shields.io/packagist/v/Stichoza/laravel-coderunner.svg)](https://packagist.org/packages/stichoza/laravel-coderunner) [![Total Downloads](https://img.shields.io/packagist/dt/Stichoza/laravel-coderunner.svg)](https://packagist.org/packages/stichoza/laravel-coderunner) [![Downloads Month](https://img.shields.io/packagist/dm/Stichoza/laravel-coderunner.svg)](https://packagist.org/packages/stichoza/laravel-coderunner) [![PayPal donation](https://img.shields.io/badge/paypal-donate-blue.svg)](https://paypal.me/stichoza)

Add Laravel support to **[CodeRunner](https://coderunnerapp.com)** (Tinker in CodeRunner).

<img width="1216" alt="Screen Shot 2020-04-02 at 14 58 24" src="https://user-images.githubusercontent.com/1139050/78280940-ef2cfa80-752a-11ea-8946-03eab08483f9.png">

## Installation

Install this package globally via [Composer](https://getcomposer.org/).

```
composer global require stichoza/laravel-coderunner

laravel-coderunner install-default
```

## Usage

### Add Laravel in CodeRunner langauges

1. Go to CodeRunner preferences.
1. Navigate to Languages tab.
1. Right-click on `PHP` and select Duplicate.
1. Name new language `Laravel`.
1. Write following in the "Run Command" field:

```bash
laravel-coderunner $filename
```

<p align="center"><img width="737" alt="Screen Shot 2020-04-02 at 14 36 34" src="https://user-images.githubusercontent.com/1139050/78239965-6ba1e800-74ef-11ea-8990-09caf61b8a87.png"></p>

**Note:** If you have composer installed correctly in your system, [vendor binaries](https://getcomposer.org/doc/articles/vendor-binaries.md) would be already added in your `.profile` or `.bash_profile`. If not, add it to your profile paths, or otherwise go to CodeRunner preferences, navigate to Advanced tab and add binary path (e.g. `/Users/YOUR_USERNAME/.composer/vendor/bin`) to `PATH` shell variable:

<p align="center"><img width="619" alt="Screen Shot 2020-04-02 at 14 40 22" src="https://user-images.githubusercontent.com/1139050/78240331-e9fe8a00-74ef-11ea-8da6-102ade27cbe6.png"></p>

### Running in default laravel app

Default laravel app is already installed via `laravel-coderunner install-default` command. If you want to reset the default app, you can run:
```bash
laravel-coderunner reset-default
```

### Running in specific project
By default, the code is evaluated in default Laravel installation described above. Follow this steps if you want to run code in different project:

1. Assuming you already have Laravel available in CodeRunner, click "Run Settings..." button right next to Run and Stop buttons.
1. Enter **absolute** path to your project in Arguments field.

<p align="center"><img width="1096" alt="Screen Shot 2020-04-02 at 14 44 34" src="https://user-images.githubusercontent.com/1139050/78240762-7f018300-74f0-11ea-9e42-fa0ad2b4612b.png"></p>
