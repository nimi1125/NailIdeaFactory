const express = require('express');
const path = require('path');

const app = express();

// `dist` フォルダを静的ファイルとして提供
app.use(express.static(path.join(__dirname, 'dist')));

// すべてのリクエストを `index.html` にリダイレクト
app.get('*', (req, res) => {
  res.sendFile(path.join(__dirname, 'dist', 'index.html'));
});

// Heroku のポートを使用
const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
  console.log(`Server is running on port ${PORT}`);
});
