# Laravel CodeRunner
Add Laravel support to CodeRunner (Tinker in CodeRunner).

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

### Running code for specific project.
By default, the code is evaluated in default Laravel installation that is provided with this package. Follow this steps if you want to run code in different project:

1. Assuming you already have Laravel available in CodeRunner, click "Run Settings..." button right next to Run and Stop buttons.
1. Enter path to your project in Arguments field.