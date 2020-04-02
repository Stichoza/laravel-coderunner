# Laravel CodeRunner
[![Latest Stable Version](https://img.shields.io/packagist/v/Stichoza/laravel-coderunner.svg)](https://packagist.org/packages/stichoza/laravel-coderunner) [![Total Downloads](https://img.shields.io/packagist/dt/Stichoza/laravel-coderunner.svg)](https://packagist.org/packages/stichoza/laravel-coderunner) [![Downloads Month](https://img.shields.io/packagist/dm/Stichoza/laravel-coderunner.svg)](https://packagist.org/packages/stichoza/laravel-coderunner) [![PayPal donation](https://img.shields.io/badge/paypal-donate-blue.svg)](https://paypal.me/stichoza)

Add Laravel support to [CodeRunner](https://coderunnerapp.com) (Tinker in CodeRunner).

## Installation

Install this package globally via [Composer](https://getcomposer.org/).

```
composer global require stichoza/laravel-coderunner
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

<div style="text-align: center"><img width="737" alt="Screen Shot 2020-04-02 at 14 36 34" src="https://user-images.githubusercontent.com/1139050/78239965-6ba1e800-74ef-11ea-8990-09caf61b8a87.png"></div>

**Note:** If you don't have composer path added in your `.profile` or `.bash_profile`, go to CodeRunner preferences, navigate to Advanced tab and add `/Users/YOUR_USERNAME/.composer/vendor/bin` to `PATH` shell variable.

<div style="text-align: center"><img width="619" alt="Screen Shot 2020-04-02 at 14 40 22" src="https://user-images.githubusercontent.com/1139050/78240331-e9fe8a00-74ef-11ea-8da6-102ade27cbe6.png"></div>

### Running code for specific project
By default, the code is evaluated in default Laravel installation that is provided with this package. Follow this steps if you want to run code in different project:

1. Assuming you already have Laravel available in CodeRunner, click "Run Settings..." button right next to Run and Stop buttons.
1. Enter **absolute** path to your project in Arguments field.

<div style="text-align: center"><img width="1096" alt="Screen Shot 2020-04-02 at 14 44 34" src="https://user-images.githubusercontent.com/1139050/78240762-7f018300-74f0-11ea-9e42-fa0ad2b4612b.png"></div>
