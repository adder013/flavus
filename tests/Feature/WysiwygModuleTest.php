<?php

namespace Tests\Feature;

use App\Product;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WysiwygModuleTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function unauthenticated_user_may_not_see_wysiwyg_page()
    {
        $this->get('/dashboard/modules/wysiwyg')
            ->assertRedirect('/login');
    }

    /** @test */
    public function wysiwyg_page_load()
    {
        $this->seed('RolesTableSeeder');
        $this->seed('UsersTableSeeder');

        $this->actingAs(User::first());

        $this->get('/dashboard/modules/wysiwyg')
            ->assertStatus(200);
    }

    /** @test */
    public function getting_product_description()
    {
        $product = create(Product::class, [
            'description' => $this->faker->paragraph()
        ]);

        $this->signIn()
            ->get('/getProductDescription?url=' . $product->url)
            ->assertSee($product->description);
    }

    /** @test */
    public function saving_product_description()
    {
        $product = create(Product::class);
        $newDescripion = $this->faker->paragraph();

        $this->signIn()
            ->post('/saveProductDescription', [
                'url' => $product->url,
                'description' => $newDescripion
            ])
            ->assertStatus(200);

        $this->assertDatabaseHas(
            'products',
            [
                'id' => $product->id,
                'description' => $newDescripion
            ]
        );
    }
}
