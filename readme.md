# About PHP-GTFS

A PHP library for manipulating with General Transit Feed Specification. 

The library supports parsing of Static feeds only at this time. I will be adding builder functionality, as well as support for Realtime feeds later.

## First Things First

I would not recommend you using this library because it is unstable, has no tests and interfaces may change. It is in beta stage and under active development now. Stable version will be released later.

You can proceed reading if you ok with it.

## Installation

```bash
composer require ilyahoilik/php-gtfs
```

## Basic Usage

```php
$path = '/Users/ilya/gtfs.zip';

foreach (Reader::read($path) as $entity)
{
    // process your entity...
}
```

## Advanced Usage

Will be documented later...