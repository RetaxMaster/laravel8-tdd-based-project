<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TagControllerTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_store() {

        $this
            ->post("tags", ["name" => "PHP"])
            ->assertRedirect("/");

        $this->assertDatabaseHas("tags", ["name" => "PHP"]);

    }
}
