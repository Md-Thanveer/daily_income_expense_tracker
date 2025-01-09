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
                'type' => 'INCOME',
                'amount' => 5000,
                'description' => 'Salary for January',
                'date' => '2025-01-01',
            ],
            [
                'type' => 'EXPENSE',
                'amount' => 2000,
                'description' => 'Rent for January',
                'date' => '2025-01-05',
            ],
            [
                'type' => 'INCOME',
                'amount' => 1500,
                'description' => 'Freelance Project',
                'date' => '2025-01-10',
            ],
            [
                'type' => 'EXPENSE',
                'amount' => 300,
                'description' => 'Groceries',
                'date' => '2025-01-12',
            ],
            [
                'type' => 'EXPENSE',
                'amount' => 100,
                'description' => 'Transportation',
                'date' => '2025-01-15',
            ],
            [
                'type' => 'INCOME',
                'amount' => 1200,
                'description' => 'Online Course Revenue',
                'date' => '2025-01-18',
            ],
            [
                'type' => 'EXPENSE',
                'amount' => 400,
                'description' => 'Dining Out',
                'date' => '2025-01-20',
            ],
            [
                'type' => 'INCOME',
                'amount' => 800,
                'description' => 'Stock Dividend',
                'date' => '2025-01-22',
            ],
            [
                'type' => 'EXPENSE',
                'amount' => 150,
                'description' => 'Utilities',
                'date' => '2025-01-24',
            ],
            [
                'type' => 'EXPENSE',
                'amount' => 50,
                'description' => 'Subscription Service',
                'date' => '2025-01-25',
            ],
            [
                'type' => 'INCOME',
                'amount' => 2000,
                'description' => 'Part-Time Job',
                'date' => '2025-01-27',
            ],
            [
                'type' => 'EXPENSE',
                'amount' => 700,
                'description' => 'Home Repairs',
                'date' => '2025-01-28',
            ],
            [
                'type' => 'INCOME',
                'amount' => 500,
                'description' => 'Gift from Friend',
                'date' => '2025-01-29',
            ],
            [
                'type' => 'EXPENSE',
                'amount' => 100,
                'description' => 'Coffee',
                'date' => '2025-01-30',
            ],
            [
                'type' => 'INCOME',
                'amount' => 1000,
                'description' => 'Bonus Payment',
                'date' => '2025-01-31',
            ],
            [
                'type' => 'EXPENSE',
                'amount' => 250,
                'description' => 'Fitness Membership',
                'date' => '2025-02-01',
            ],
            [
                'type' => 'EXPENSE',
                'amount' => 600,
                'description' => 'Monthly Groceries',
                'date' => '2025-02-03',
            ],
            [
                'type' => 'INCOME',
                'amount' => 300,
                'description' => 'Online Survey Reward',
                'date' => '2025-02-05',
            ],
            [
                'type' => 'EXPENSE',
                'amount' => 1800,
                'description' => 'Car Maintenance',
                'date' => '2025-02-08',
            ],
            [
                'type' => 'INCOME',
                'amount' => 2500,
                'description' => 'Consultation Fee',
                'date' => '2025-02-10',
            ],
        ];

        foreach ($transactions as $transaction) {
            Transaction::create($transaction);
        }
    }
}
