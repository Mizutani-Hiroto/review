<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'id' => '2',
                'title' => 'seederの管理',
                'content' => 'seederを使うことにより初期値を入れることができる',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                        ],
                        [
                            'id' => '2',
                            'title' => 'seederの管理',
                            'content' => 'PostをUserと関連付けしないといけないのではないか',
                            'created_at' => date('Y-m-d H:i:s'),
                            'updated_at' => date('Y-m-d H:i:s'),
                            ],
                            [
                                'id' => '3',
                                'title' => 'seederの管理',
                                'content' => 'seederを設定しておくと初期値にしても消えません',
                                'created_at' => date('Y-m-d H:i:s'),
                                'updated_at' => date('Y-m-d H:i:s'),
                                ],
                                [
                                    'id' => '3',
                                    'title' => 'seederの管理',
                                    'content' => 'idを入れるべきがどうか悩む',
                                    'created_at' => date('Y-m-d H:i:s'),
                                    'updated_at' => date('Y-m-d H:i:s'),
                                    ]
                    ]);
    }
}
