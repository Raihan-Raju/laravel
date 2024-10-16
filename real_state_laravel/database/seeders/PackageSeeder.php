<?php

namespace Database\Seeders;

use Botble\Base\Supports\BaseSeeder;
use Botble\RealEstate\Models\Package;

class PackageSeeder extends BaseSeeder
{
    public function run()
    {
        Package::truncate();

        $data = [
            [
                'name'               => 'Free First Post',
                'price'              => 0,
                'currency_id'        => 1,
                'percent_save'       => 0,
                'order'              => 0,
                'number_of_listings' => 1,
                'account_limit'      => 1,
                'is_default'         => false,
            ],
            [
                'name'               => 'Single Post',
                'price'              => 250,
                'currency_id'        => 1,
                'percent_save'       => 0,
                'order'              => 0,
                'number_of_listings' => 1,
                'is_default'         => true,
            ],
            [
                'name'               => '5 Posts',
                'price'              => 1000,
                'currency_id'        => 1,
                'percent_save'       => 20,
                'order'              => 0,
                'number_of_listings' => 5,
                'is_default'         => false,
            ],
        ];

        foreach ($data as $item) {
            $item['features'] = '[[{"key":"text","value":"Buy credits to post your listing(s)"}],[{"key":"text","value":"60-Day Job Postings"}],[{"key":"text","value":"No Expiration on Credits."}],[{"key":"text","value":"Specialist Assistance"}],[{"key":"text","value":"Get More Eyes"}]]';
            Package::create($item);
        }
    }
}
