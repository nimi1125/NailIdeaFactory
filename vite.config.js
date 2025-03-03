import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/style.css',
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    base: '/', // ここを "/" に変更
    build: {
        outDir: 'dist', // 出力フォルダを "dist" に設定
        emptyOutDir: true, // 古いビルドを削除（推奨）
    },
});
