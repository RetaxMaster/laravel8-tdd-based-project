<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TagControllerTest extends TestCase {

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

    public function test_destroy() {

        $tag = Tag::factory()->create();

        $this
            ->delete("tags/$tag->id")
            ->assertRedirect("/");

        $this->assertDatabaseMissing("tags", ["name" => $tag->name]);
        
    }

}
