[![Build Status](https://img.shields.io/travis/joaomramos/api-payload-factory.svg?style=flat-square)](https://travis-ci.org/joaomramos/api-payload-factory)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/joaomramos/api-payload-factory.svg?style=flat-square)](https://scrutinizer-ci.com/g/joaomramos/api-payload-factory/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/joaomramos/api-payload-factory.svg?style=flat-square)](https://scrutinizer-ci.com/g/joaomramos/api-payload-factory)


Inspired by [FactoryMuffin](https://github.com/thephpleague/factory-muffin), the focus of this lightweight version is to define and generate payloads for API endpoints by version. 

## How to use

**Create definitions**
```php
$factory = new ApiPayloadFactory();
$factory->define('post/create', '1.1')
    ->setDefinitions([
        'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing.',
        'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam congue ipsum non nisl dignissim tempus. Donec vitae dolor purus. Ut magna lorem, finibus id lacus id, feugiat placerat nisi. Maecenas rutrum quis felis imperdiet fermentum.',
        'author' => 'Jon Snow'
]);
```

**Generate Payload**

```php
$factory = new ApiPayloadFactory();
$postCreatePayload = $factory->create('post/create', '1.1')->getPayload();

$postCreatePayload->title;
$postCreatePayload->text;
$postCreatePayload->author;
```

