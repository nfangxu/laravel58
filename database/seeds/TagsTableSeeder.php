<?php

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['php', 'laravel', 'linux', 'composer', 'vue', 'docker', 'kubernetes'];

        foreach ($tags as $tag) {
            $tmp = ['name' => $tag];
            Tag::create($tmp);
        }
    }
}
