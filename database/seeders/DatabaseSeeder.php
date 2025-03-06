<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('users')->insert([
            [
                'name' => 'Test',
                'email' => 'test@test.com',
                'password' => Hash::make('12345test'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Test2',
                'email' => 'test2@test.com',
                'password' => Hash::make('22222test'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('categories')->insert([
            [ 
                'name' => 'シンプルネイル',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ビジューデザイン',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'フレンチネイル',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // ideas テーブル
        DB::table('ideas')->insert([
            [
                'user_id' => '1',
                'category_id' => '1',
                'coverage_range_id' => '1',
                'title' => 'フレンチネイルデザイン',
                'content' => 'シンプルなフレンチネイル。ピンクベース。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '1',
                'category_id' => '2',
                'coverage_range_id' => '2',
                'title' => 'ビジューネイル',
                'content' => 'アクセントにビジューを使ったゴージャスなデザイン。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '1',
                'category_id' => '3',
                'coverage_range_id' => '1',
                'title' => '秋ネイル',
                'content' => 'アクセントにビジューを使ったゴージャスなデザイン。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '1',
                'category_id' => '2',
                'coverage_range_id' => '2',
                'title' => 'シンプルネイル',
                'content' => 'シンプルなデザインのネイル',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '1',
                'category_id' => '3',
                'coverage_range_id' => '1',
                'title' => 'ビジューネイル',
                'content' => 'アクセントにビジューを使ったゴージャスなデザイン。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // coverage_ranges テーブル
        DB::table('coverage_ranges')->insert([
            ['id' => '1', 'status' => 'public', 'created_at' => now(), 'updated_at' => now()],
            ['id' => '2', 'status' => 'private', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // idea_references テーブル
        DB::table('idea_references')->insert([
            [
                'idea_id' => '1',
                'url' => 'https://example.com/item1',
                'content' => 'フレンチネイルデザイン',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idea_id' => '2',
                'url' => 'https://example.com/item2',
                'content' => 'ビジューネイルデザイン',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idea_id' => '3',
                'url' => 'https://example.com/item3',
                'content' => 'ビジューネイルデザイン',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idea_id' => '4',
                'url' => 'https://example.com/item4',
                'content' => 'ビジューネイルデザイン',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idea_id' => '5',
                'url' => 'https://example.com/item5',
                'content' => 'ビジューネイルデザイン',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // idea_items テーブル
        DB::table('idea_items')->insert([
            [
                'idea_id' => '1',
                'url' => 'https://example.com/item1',
                'content' => '使用するジェル: ピンクカラー',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idea_id' => '2',
                'url' => 'https://example.com/item2',
                'content' => '使用するパーツ: ビジューセット',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idea_id' => '2',
                'url' => 'https://example.com/item2',
                'content' => '使用するパーツ: ビジューセット',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idea_id' => '2',
                'url' => 'https://example.com/item2',
                'content' => '使用するパーツ: ビジューセット',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
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
                'idea_id' => '1',
                'image_path' => 'public/storage/images/1_image1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idea_id' => '2',
                'image_path' => 'public/storage/images/2_image1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idea_id' => '3',
                'image_path' => 'public/storage/images/3_image1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idea_id' => '4',
                'image_path' => 'public/storage/images/4_image1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idea_id' => '5',
                'image_path' => 'public/storage/images/5_image1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
