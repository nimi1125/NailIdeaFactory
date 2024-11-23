<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // ideas テーブル
        DB::table('ideas')->insert([
            [
                'id' => '1',
                'user_id' => '1',
                'category_id' => '1',
                'coverage_range_id' => '1',
                'title' => 'フレンチネイルデザイン',
                'content' => 'シンプルなフレンチネイル。ピンクベース。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '2',
                'user_id' => '1',
                'category_id' => '2',
                'coverage_range_id' => '2',
                'title' => 'ビジューネイル',
                'content' => 'アクセントにビジューを使ったゴージャスなデザイン。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // coverage_ranges テーブル
        DB::table('coverage_ranges')->insert([
            ['id' => '1', 'idea_id' => '1', 'status' => 'public', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '2', 'idea_id' => '2', 'status' => 'private', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // idea_references テーブル
        DB::table('idea_references')->insert([
            [
                'id' => '1',
                'idea_id' => '1',
                'url' => 'https://example.com/reference1',
                'content' => '参考画像: フレンチネイルデザイン',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '2',
                'idea_id' => '2',
                'url' => 'https://example.com/reference2',
                'content' => '参考画像: ビジューネイルデザイン',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // idea_items テーブル
        DB::table('idea_items')->insert([
            [
                'id' => '1',
                'idea_id' => '1',
                'url' => 'https://example.com/item1',
                'content' => '使用するジェル: ピンクカラー',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '2',
                'idea_id' => '2',
                'url' => 'https://example.com/item2',
                'content' => '使用するパーツ: ビジューセット',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // idea_images テーブル
        DB::table('idea_images')->insert([
            [
                'id' => '1',
                'idea_id' => '1',
                'image_path' => '/images/ideas/1_image1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '2',
                'idea_id' => '2',
                'image_path' => '/images/ideas/2_image1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
