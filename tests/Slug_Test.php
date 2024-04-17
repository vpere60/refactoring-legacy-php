<?php

declare(strict_types=1);

// This is an example of writing a unit test for one function
// The purpose of this test is to make sure one "unit" of the code
// is working as expected. Writing tests is the first step before we
// start refactoring legacy code.
// To run the test in the terminal run the command: php ./vendor/bin/phpunit tests

use PHPUnit\Framework\TestCase;

class Slug_Test extends TestCase
{
    public function setUp(): void
    {
        require_once __DIR__ . '/../slug.php';
        parent::setUp();
    }

    public function test_slugify()
    {
        // This test passes
        $this->assertEquals('hello-world', slugify('Hello World'));
        // Now let's write some tests that fail
        $this->assertEquals('hello-world', slugify('Hello World!'));
        $this->assertEquals('hello-world', slugify('    Hello      World!'));
        $this->assertEquals('hello-world', slugify('...??!    Hello   @]#?   World!'));
    }
}
