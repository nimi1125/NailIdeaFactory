#!/bin/bash

# 必要な依存関係をインストール
apt-get update && apt-get install -y \
  libcurl4-openssl-dev \
  libpq-dev \
  libnss3

# 通常のビルドを続行
vercel build