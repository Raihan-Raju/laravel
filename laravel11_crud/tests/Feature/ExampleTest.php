<?php

namespace {{ namespace }};

<<<<<<<< HEAD:laravel11_crud/tests/Feature/ExampleTest.php
// use Illuminate\Foundation\Testing\RefreshDatabase;
========
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
>>>>>>>> 76de274c8fe9e787cb44e8e011aa8f8ee5be7ba0:restoran-HTML_template/resruren_laravel_template/vendor/laravel/framework/src/Illuminate/Foundation/Console/stubs/test.stub
use Tests\TestCase;

class {{ class }} extends TestCase
{
    /**
<<<<<<<< HEAD:laravel11_crud/tests/Feature/ExampleTest.php
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
========
     * A basic feature test example.
     */
    public function test_example(): void
>>>>>>>> 76de274c8fe9e787cb44e8e011aa8f8ee5be7ba0:restoran-HTML_template/resruren_laravel_template/vendor/laravel/framework/src/Illuminate/Foundation/Console/stubs/test.stub
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
