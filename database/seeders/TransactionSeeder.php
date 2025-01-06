<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaction;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transactions = [
            [
                'type' => 'income',
                'amount' => 5000,
                'description' => 'Salary for January',
                'date' => '2025-01-01',
            ],
            [
                'type' => 'expense',
                'amount' => 2000,
                'description' => 'Rent for January',
                'date' => '2025-01-05',
            ],
            [
                'type' => 'income',
                'amount' => 1500,
                'description' => 'Freelance Project',
                'date' => '2025-01-10',
            ],
            [
                'type' => 'expense',
                'amount' => 300,
                'description' => 'Groceries',
                'date' => '2025-01-12',
            ],
        ];

        foreach ($transactions as $transaction) {
            Transaction::create($transaction);
        }
    }
}
