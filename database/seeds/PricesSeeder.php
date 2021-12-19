<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PricesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listPrice = [
            [
                'price' => '200.000',
                'item' => '<p>25 Analytics <span class="suffix">Campaign</span></p>
                <p>1,300 Change <span class="suffix">Keywords</span></p>
                <p>Social Media <span class="suffix">Reviews</span></p>
                <p>1 Free <span class="suffix">Optimization</span></p>
                <p>24/7 <span class="suffix">Support</span></p>',
            ],
            [
                'price' => '350.000',
                'item' => '<p>25 Analytics <span class="suffix">Campaign</span></p>
                <p>1,300 Change <span class="suffix">Keywords</span></p>
                <p>Social Media <span class="suffix">Reviews</span></p>
                <p>1 Free <span class="suffix">Optimization</span></p>
                <p>24/7 <span class="suffix">Support</span></p>',
            ],
            [
                'price' => '500.000',
                'item' => '<p>25 Analytics <span class="suffix">Campaign</span></p>
                <p>1,300 Change <span class="suffix">Keywords</span></p>
                <p>Social Media <span class="suffix">Reviews</span></p>
                <p>1 Free <span class="suffix">Optimization</span></p>
                <p>24/7 <span class="suffix">Support</span></p>',
            ],
        ];
        DB::table('prices')->insert($listPrice);
    }
}
