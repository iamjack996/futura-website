<?php

use Illuminate\Database\Seeder;
use App\Models\Footer;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $footers =[
        [
            'name' => '問題回報',
            'url' => 'contact'
        ],
        [
            'name' => '服務條款',
            'url' => '123'
        ],
        [
            'name' => '聯絡我們',
            'url' => 'contact'
        ],
        [
            'name' => '粉絲專頁',
            'url' => 'https://www.facebook.com/futuraintern/',
            'target' => '_blank'
        ]
    ];
    
    DB::table('footer')->delete();
    foreach ($footers as $footer){
        Footer::create($footer);
        }
    }
}
