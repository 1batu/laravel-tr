#!/bin/bash

# Laravel TR Paket Test Scripti
echo "🚀 Laravel TR Paket Test Scripti Başlatılıyor..."

# PHP versiyonunu kontrol et
echo "📋 PHP Versiyonu:"
php --version

# Composer kurulumu
echo "📦 Composer bağımlılıkları yükleniyor..."
composer install --no-dev --optimize-autoloader

# Dil dosyalarının varlığını kontrol et
echo "🔍 Dil dosyaları kontrol ediliyor..."
LANG_FILES=(
    "resources/lang/tr/app.php"
    "resources/lang/tr/auth.php"
    "resources/lang/tr/validation.php"
    "resources/lang/tr/pagination.php"
    "resources/lang/tr/passwords.php"
    "resources/lang/tr/notifications.php"
    "resources/lang/tr/fortify.php"
    "resources/lang/tr/jetstream.php"
    "resources/lang/tr/sanctum.php"
)

for file in "${LANG_FILES[@]}"; do
    if [ -f "$file" ]; then
        echo "✅ $file mevcut"
    else
        echo "❌ $file bulunamadı"
        exit 1
    fi
done

# PHP syntax kontrolü
echo "🔍 PHP syntax kontrolü yapılıyor..."
for file in "${LANG_FILES[@]}"; do
    if php -l "$file" > /dev/null 2>&1; then
        echo "✅ $file syntax hatası yok"
    else
        echo "❌ $file syntax hatası var"
        php -l "$file"
        exit 1
    fi
done

# Composer.json kontrolü
echo "🔍 Composer.json kontrol ediliyor..."
if composer validate > /dev/null 2>&1; then
    echo "✅ Composer.json geçerli"
else
    echo "❌ Composer.json geçersiz"
    composer validate
    exit 1
fi

echo "🎉 Tüm testler başarılı!"
echo "📦 Paket yayınlanmaya hazır!"
