<?php

namespace Database\Seeders;

use App\Models\Companies;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Companies::insert([
            'name'=>'Shopee',
            'email'=>'help@support.shopee.co.id',
            'logo'=>'https://upload.wikimedia.org/wikipedia/commons/f/fe/Shopee.svg',
            'website'=>'https://shopee.co.id/'
        ]);
        Companies::insert([
            'name'=>'Tokopedia',
            'email'=>'pr@tokopedia.com',
            'logo'=>'https://jarisnk.com/wp-content/uploads/2019/10/Logo-Tokopedia.png',
            'website'=>'https://www.tokopedia.com/'
        ]);
        Companies::insert([
            'name'=>'Telkom Indonesia',
            'email'=>'corporate_comm@telkom.co.id',
            'logo'=>'https://www.telkom.co.id/data/image_upload/page/1594112773573_compress_PNG%20Logo%20Sekunder%20Telkom.png',
            'website'=>'corporate_comm@telkom.co.id'
        ]);
        Companies::insert([
            'name'=>'Pertamina',
            'email'=>'pcc135@pertamina.com',
            'logo'=>'https://www.pertamina.com/landing/images/logo.png',
            'website'=>'https://www.pertamina.com/'
        ]);
        Companies::insert([
        'name'=>'Samsung Electronics Co, Ltd',
        'email'=>'cs.care@samsung.com',
        'logo'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Samsung_wordmark.svg/1920px-Samsung_wordmark.svg.png',
        'website'=>'https://www.samsung.com/'
        ]);
        Companies::insert([
            'name'=>'PT Bukalapak.com',
            'email'=>'corcom@bukalapak.com',
            'logo'=>'https://assets.bukalapak.com/sigil/bukalapak-logo-primary.svg',
            'website'=>'https://about.bukalapak.com/en/'
        ]);Companies::insert([
            'name'=>'PT Global Digital Niaga',
            'email'=>'customer.care@blibli.com',
            'logo'=>'https://www.blibli.com/faq/wp-content/uploads/2021/02/Blibli-Logo-Guideline-2020.png',
            'website'=>'https://www.blibli.com/'
        ]);Companies::insert([
            'name'=>'PT MNC Asia Holding Tbk',
            'email'=>'corsec.mnc-corporation@mncgroup.com',
            'logo'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d6/MNC_Asia_Holding.png/220px-MNC_Asia_Holding.png',
            'website'=>'https://www.mncgroup.com/'
        ]);Companies::insert([
            'name'=>'PT Sugar Gruop Companies',
            'email'=>'SugarGroup@mail.co.id',
            'logo'=>'https://assets.bukalapak.com/sigil/bukalapak-logo-primary.svg',
            'website'=>'https://about.bukalapak.com/en/'
        ]); Companies::insert([
            'name'=>'PT. Pindad',
            'email'=>'info@pindad.com',
            'logo'=>'https://pindad.com/assets/img/theme-1/logo.png',
            'website'=>'https://pindad.com/'
        ]);Companies::insert([
            'name'=>'Sony Music Entertainment Japan',
            'email'=>'SonymusicJP@mail.com',
            'logo'=>'https://www.sme.co.jp/common/images/sony-music-logo.svg',
            'website'=>'https://www.sme.co.jp/'
        ]);Companies::insert([
            'name'=>'Majelis Lucu Indonesia',
            'email'=>'majelis.lucu@gmail.com',
            'logo'=>'https://www.majelislucuindonesia.com/assets/images/logo.png',
            'website'=>'https://www.majelislucuindonesia.com/'
        ]);Companies::insert([
            'name'=>'Marvel Studios, LLC',
            'email'=>'MarvelInc@mail.com',
            'logo'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/1/10/Marvel_Studios_2016_logo.svg/300px-Marvel_Studios_2016_logo.svg.png',
            'website'=>'http://marvel.com/movies/'
        ]);Companies::insert([
            'name'=>'The Walt Disney Company ',
            'email'=>'Disneyinfo@mail.com',
            'logo'=>'http://esensi.co.id/wp-content/uploads/2017/08/logo-disney.jpg',
            'website'=>'http://www.disneycareers.com/'
        ]);Companies::insert([
            'name'=>'PJKT48',
            'email'=>'info@jkt48.com',
            'logo'=>'https://jkt48.com/images/logo.svg',
            'website'=>'https://jkt48.com/'
        ]);Companies::insert([
            'name'=>'GitHub Inc',
            'email'=>'GitHub@info.com',
            'logo'=>'https://play-lh.googleusercontent.com/PCpXdqvUWfCW1mXhH1Y_98yBpgsWxuTSTofy3NGMo9yBTATDyzVkqU580bfSln50bFU',
            'website'=>'https://github.com/'
        ]);





    }
}
