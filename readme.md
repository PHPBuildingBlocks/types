# PHP Composite Types Collection

## Description

This package is designed to provide a comprehensive collection of Value Objects, crafted for reusability and adaptability in various projects. Primarily, these types focus on implementing robust validation rules. However, they also offer the flexibility to override these validation rules as needed, ensuring a versatile and efficient utilization in a wide range of applications.


## Getting Started

### Dependencies

Zero Dependencies

### Installing

```shell
composer require phpbuildingblocks/types
```

### How to Rewrite validation rules
Let's say you want to IntId to accept only positive numbers greater than 0. You can do this by extending the IntId class and overriding the validate method.

```php
<?php
use PHPBuildingBlocks\Types\Id\Exceptions\InvalidIdException;
use PHPBuildingBlocks\Types\Id\IntId;

class PositiveIntId extends IntId
{
    protected function validate(int $value): void
    {
        if (!is_int($value) || $value <= 0) {
            throw new InvalidIdException('Value must be positive');
        }
    }
}
```
You can now use this class as you would the original IntId class.

```php
<?php
use PHPBuildingBlocks\Types\Id\IntId;

class someRepository
{
    public function getById(IntId $id)
    {
        // do something
    }
}

$someRepository = new someRepository();
$result = $someRepository->getById(new PositiveIntId(1));
```



### Supported Types
[IntId](src/id/IntId.php) - A simple integer ID\
[UUidId](src/id/UuidId.php) - A UUID ID\
[Email](src/email/Email.php) - An email address



