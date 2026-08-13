<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Tests\TestCase;

class AppFlowTest extends TestCase
{
    use DatabaseTransactions;

    public function test_guest_is_redirected_to_login()
    {
        $this->get('/')->assertRedirect('/login');
        $this->get('/product')->assertRedirect('/login');
    }

    public function test_register_login_and_crud_flow()
    {
        $this->withoutMiddleware(VerifyCsrfToken::class);

        $this->post('/register', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ])->assertRedirect('/login');

        $this->assertDatabaseHas('users', ['email' => 'test@example.com']);

        $this->post('/logged', [
            'email' => 'test@example.com',
            'password' => 'password123',
        ])->assertRedirect('/product');

        $this->assertAuthenticated();

        $this->post('/product/store', [
            'name' => 'Laptop',
            'stock' => 5,
            'image_url' => '',
            'price' => 1000,
            'dealer' => 'ACME',
            'date_arrived' => '2026-08-13',
        ])->assertRedirect('/product');

        $product = Product::where('name', 'Laptop')->first();
        $this->assertNotNull($product);

        $this->get('/product')->assertSee('Laptop');

        $this->post('/sales/store', [
            'product_id' => $product->id,
            'quantity' => 2,
            'price' => 2000,
            'date_sales' => '2026-08-13',
        ])->assertRedirect('/sales');

        $this->assertDatabaseHas('sales', ['product_id' => $product->id]);

        $this->get('/sales')->assertSee('Laptop');
    }
}
