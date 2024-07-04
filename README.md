<!-- SHIELDS -->
[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![License][license-shield]][license-url]

![Unit Tests](https://github.com/helsingborg-stad/wpservice/actions/workflows/php-test.yml/badge.svg)
![PHP Versions][php-versions-shield]


# WpService

Simplifies WordPress integration by providing a centralized WpService that exposes global WordPress functions in a streamlined manner. Simplify your development workflow and enhance WordPress integration with ease.

[Report Bug](https://github.com/helsingborg-stad/wpservice/issues)
·
[Request Feature](https://github.com/helsingborg-stad/wpservice/issues)

## About WpService

Enable the use of global WordPress functions in plugins and themes where applying Interface Segregation. Different flavors of the WordPress Service can be utilized by applying available decorators.

## Getting Started

### Installation

1. Install the package via composer:
```bash
composer require helsingborg-stad/wpservice
```

2. Use the WpService in your plugin or theme:
```php
use WpService\Implementations\NativeWpService;

$wpService = new NativeWpService();
$wpService->getTheId();
```

## Decorators

### Text Domain Decorator
Applies default text domain to translation functions.

```php
use WpService\Implementations\WpServiceWithTextDomain;
use WpService\Implementations\NativeWpService;

$service = new NativeWpService();
$service = new WpServiceWithTextDomain($service, 'my-text-domain');

$service->__('Hello World'); // Will automatically use 'my-text-domain' as the text domain.
```

## Using WpService in tests
To make it easier when testing code that depends on the WpService or parts of it, a FakeWpService implementation is available.
This implementation is useful when you want to test your code without having to rely on the WordPress functions.

### Example
Consider that you have the following class that utilizes a part of the WpService:

```php
use WpService\Contracts\GetTheId;

class MyService
{
    public function __construct(private GetTheId $wpService)
    {
    }

    public function getCurrentPostId(): int
    {
        return $this->wpService->getTheId();
    }
}
```

You can then use FakeWpService in your tests to fake the results of the WpService as well as veifyin the calls made to the WpService functions:

```php
use WpService\Implementations\FakeWpService;
use PHPUnit\Framework\TestCase;

class MyServiceTest extends TestCase
{
    public function testGetCurrentPostId()
    {
        // Given
        $fakeWpService = new FakeWpService(['getTheId' => 123]);
        $myService = new MyService($fakeWpService);

        // When
        $postId = $myService->getCurrentPostId();

        // Then
        $this->assertEquals([123], $wpService->methodCalls['isSingle'][0]);
        $this->assertEquals(123, $postId);
    }
}
```

### Passing return values to the FakeWpService

The FakeWpService constructor accepts an array of key-value pairs where the key is the name of the method and the value is the return value of the method.

```php
# Using a generic return value for all calls to the method.
$fakeWpService = new FakeWpService(['getTheTitle' => 'Test Title']);
$fakeWpService->getTheTitle(); // Returns 'Test Title'
$fakeWpService->getTheTitle(321); // Returns 'Test Title'
$fakeWpService->getTheTitle(123); // Returns 'Test Title'

# Using a specific return value based on what is passed to the function for a specific call to the method.
$fakeWpService = new FakeWpService(['getTheId' => [123 => 'Test Title']]);
$fakeWpService->getTheTitle(); // Returns ''
$fakeWpService->getTheTitle(321); // Returns ''
$fakeWpService->getTheTitle(123); // Returns 'Test Title'
```

### Built With

* PHP

## Tests

### Run tests
Run `composer test` in the terminal.

## Contributing

Contributions are what make the open source community such an amazing place to be learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

Distributed under the [MIT License][license-url].

<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/helsingborg-stad/wpservice
[contributors-url]: https://github.com/helsingborg-stad/wpservice/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/helsingborg-stad/wpservice.svg?style=flat-square
[forks-url]: https://github.com/helsingborg-stad/wpservice/network/members
[stars-shield]: https://img.shields.io/github/stars/helsingborg-stad/wpservice.svg?style=flat-square
[stars-url]: https://github.com/helsingborg-stad/wpservice/stargazers
[issues-shield]: https://img.shields.io/github/issues/helsingborg-stad/wpservice.svg?style=flat-square
[issues-url]: https://github.com/helsingborg-stad/wpservice/issues
[license-shield]: https://img.shields.io/github/license/helsingborg-stad/wpservice.svg?style=flat-square
[license-url]: https://github.com/helsingborg-stad/wpservice/blob/main/LICENSE
[php-versions-shield]: https://img.shields.io/badge/php-^8.1-777bb3.svg?logo=php&logoColor=white&labelColor=555555
