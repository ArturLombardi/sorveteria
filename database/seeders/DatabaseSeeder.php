<?php

namespace Database\Seeders;

use App\Models\Attendant;
use App\Models\User;
use App\Models\Client;
use App\Models\Category;
use App\Models\Product;
use App\Models\Invoice;
use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Usuários administrativos
        User::factory()->count(3)->create(['role' => 'admin']);
        User::factory()->count(1)->create(['role' => 'manager']);

        // Domínio principal
        Category::factory()->count(5)->create();
        Product::factory()->count(50)->create();

        // Pessoas
        Client::factory()->count(1000)->create();
        Attendant::factory()->count(20)->create();

        // Vendas
        Invoice::factory()
            ->count(1000)
            ->create()
            ->each(function ($invoice) {

                $orders = Order::factory()
                    ->count(rand(1, 5))
                    ->create([
                        'invoice_id' => $invoice->id,
                    ]);

                $invoice->update([
                    'total_amount' => $orders->sum(
                        fn($order) => $order->quantity * $order->unit_price
                    ),
                ]);
            });
    }
}
