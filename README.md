
# Laravel Arabic SEO

A simple and powerful package for making your Laravel-based Arabic websites and applications SEO-friendly by providing Arabic meta tags and slug generation.

## About

This package helps you optimize your Arabic content for search engines by:
- Generating SEO-friendly Arabic slugs
- Managing Arabic meta tags (title, description, keywords)

## Installation

The package will be available on Packagist soon. For now, you can install it directly from GitHub:

```bash
composer require mohcin/laravel-arabic-seo
```

## Usage

Here's a quick example of how to use the package:

```php
use ArabicSeo\Seo\Facades\Seo;

// Generate an Arabic-friendly slug
$slug = Seo::generateSlug('السلام عليكم');

// Generate meta tags
$meta = Seo::meta([
    'title' => 'السلام عليكم',
    'description' => 'وصف الموقع',
    'keywords' => 'قم بتحسين محرك البحث الخاص بموقعك/تطبيقك على لارافيل باستخدام حزمة تحسين محركات البحث العربية هذه',
    'robotsMeta' => Seo::generateRobotsMeta('noindex, nofollow', false), // use true as a second parameter to hide robots meta
]);
```

## Contributing

Contributions are welcome! Feel free to submit a Pull Request.

## Testing

Run the test suite:

```bash
./vendor/bin/phpunit
```