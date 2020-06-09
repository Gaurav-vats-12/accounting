<?php

namespace Database\Seeds;

use App\Abstracts\Model;
use App\Models\Setting\Currency;
use Illuminate\Database\Seeder;

class Currencies extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->create();

        Model::reguard();
    }

    private function create()
    {
        $company_id = $this->command->argument('company');

        $rows = [
            [
                'company_id' => $company_id,
                'name' => trans('demo.currencies.sgd'),
                'code' => 'SGD',
                'rate' => '1.00',
                'enabled' => '1',
                'precision' => config('money.SGD.precision'),
                'symbol' => config('money.SGD.symbol'),
                'symbol_first' => config('money.SGD.symbol_first'),
                'decimal_mark' => config('money.SGD.decimal_mark'),
                'thousands_separator' => config('money.SGD.thousands_separator'),
            ],
            [
                'company_id' => $company_id,
                'name' => trans('demo.currencies.usd'),
                'code' => 'USD',
                'rate' => '1.40',
                'enabled' => '1',
                'precision' => config('money.USD.precision'),
                'symbol' => config('money.USD.symbol'),
                'symbol_first' => config('money.USD.symbol_first'),
                'decimal_mark' => config('money.USD.decimal_mark'),
                'thousands_separator' => config('money.USD.thousands_separator'),
            ],
            [
                'company_id' => $company_id,
                'name' => trans('demo.currencies.eur'),
                'code' => 'EUR',
                'rate' => '1.58',
                'precision' => config('money.EUR.precision'),
                'symbol' => config('money.EUR.symbol'),
                'symbol_first' => config('money.EUR.symbol_first'),
                'decimal_mark' => config('money.EUR.decimal_mark'),
                'thousands_separator' => config('money.EUR.thousands_separator'),
            ],
            [
                'company_id' => $company_id,
                'name' => trans('demo.currencies.gbp'),
                'code' => 'GBP',
                'rate' => '1.77',
                'precision' => config('money.GBP.precision'),
                'symbol' => config('money.GBP.symbol'),
                'symbol_first' => config('money.GBP.symbol_first'),
                'decimal_mark' => config('money.GBP.decimal_mark'),
                'thousands_separator' => config('money.GBP.thousands_separator'),
            ]
        ];

        foreach ($rows as $row) {
            Currency::create($row);
        }
    }
}
