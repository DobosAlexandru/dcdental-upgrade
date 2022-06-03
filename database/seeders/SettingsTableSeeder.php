<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    protected $settings = [
        [
            'key'=>'site_name',
            'value'=>'DC dental'
        ],
        [
            'key'=>'seo_site_name',
            'value'=>'DC dental'
        ],
        [
            'key' => 'site_description',
            'value' => 'Centrul de implantologie si chirurgie maxilo faciala DC dental coordonata de Dr. Drochioi Cristian ofera tratamente la cele mai inalte standarde in Iasi si Botosani.'
        ],
        [
            'key' => 'botosani_tel',
            'value' => '0787 695 411'
        ],
        [
            'key' => 'iasi_tel',
            'value' => '0754 242 241'
        ],
        [
            'key' => 'social_media_facebook',
            'value' => 'https://www.facebook.com/DCdental.ro/'
        ],
        [
            'key' => 'social_media_instagram',
            'value' => 'https://www.instagram.com/dcdental.ro/'
        ],
        [
            'key' => 'social_media_youtube',
            'value' => 'https://www.youtube.com/channel/UCMblE8NZ8Qdg84mX4e8dV6g'
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->settings as $index => $setting) {
            $result = Setting::create($setting);
            if(!$result) {
                $this->command->info("Insert failed at record $index.");
                return;
            }
        }
        $this->command->info('Inserted ' . count($this->settings) . ' records');
    }
}
