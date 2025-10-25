## Laravel 6-12 için Türkçe Dil Dosyaları

Laravel 6, 7, 8, 9, 10, 11 ve 12 için kapsamlı Türkçe dil dosyalarını içeren Laravel paketidir. Bu paket, Laravel uygulamanızın tüm standart mesajlarını Türkçe'ye çevirir.

## 🚀 Özellikler

- ✅ Laravel 6-12 arası tüm versiyonları destekler
- ✅ Kapsamlı Türkçe çeviriler
- ✅ Laravel Fortify, Jetstream, Sanctum desteği
- ✅ Kolay kurulum ve kullanım
- ✅ Otomatik dil dosyası yayınlama
- ✅ Güncel ve sürekli güncellenen çeviriler

## 📦 Kurulum

### Composer ile Kurulum

Aşağıdaki komutu kullanarak bu paketi composer ile projenize ekleyiniz:

```bash
composer require herkod/laravel-tr
```

### Laravel Versiyon Uyumluluğu

| Laravel Versiyonu | Paket Versiyonu | PHP Versiyonu |
|-------------------|-----------------|---------------|
| 6.x               | ^1.0            | ^7.2          |
| 7.x               | ^1.0            | ^7.2.5        |
| 8.x               | ^1.0            | ^7.3          |
| 9.x               | ^1.0            | ^8.0          |
| 10.x              | ^1.0            | ^8.1          |
| 11.x              | ^1.0            | ^8.2          |
| 12.x              | ^1.0            | ^8.3          |

## ⚙️ Yapılandırma

### 1. Dil Dosyalarını Yayınlama

Kurulum tamamlandıktan sonra dil dosyalarını projenize kopyalamak için aşağıdaki komutu çalıştırın:

```bash
php artisan vendor:publish --tag=herkod-laravel-tr
```

Mevcut dil dosyalarını güncellemek istiyorsanız `--force` parametresini ekleyin:

```bash
php artisan vendor:publish --tag=herkod-laravel-tr --force
```

### 2. Laravel Dil Ayarları

Laravel projenizin dilini Türkçe'ye çevirmek için `config/app.php` dosyasındaki `locale` ayarını değiştirin:

```php
'locale' => 'tr',
'fallback_locale' => 'en',
```

### 3. Dil Dosyalarının Yüklenmesi

Paket otomatik olarak dil dosyalarını yükler. Manuel olarak yüklemek isterseniz `AppServiceProvider`'da:

```php
use Illuminate\Support\Facades\App;

public function boot()
{
    App::setLocale('tr');
}
```

## 📁 İçerik

Bu paket aşağıdaki dil dosyalarını içerir:

- `app.php` - Genel uygulama mesajları
- `auth.php` - Kimlik doğrulama mesajları
- `validation.php` - Doğrulama mesajları
- `pagination.php` - Sayfalama mesajları
- `passwords.php` - Şifre sıfırlama mesajları
- `notifications.php` - Bildirim mesajları
- `fortify.php` - Laravel Fortify mesajları
- `jetstream.php` - Laravel Jetstream mesajları
- `sanctum.php` - Laravel Sanctum mesajları

## 🎯 Kullanım

### Blade Şablonlarında

```blade
{{ __('app.welcome') }}
{{ __('auth.failed') }}
{{ __('validation.required', ['attribute' => 'E-posta']) }}
```

### Controller'larda

```php
return response()->json([
    'message' => __('app.success'),
    'data' => $data
]);
```

### Validation Mesajları

```php
$request->validate([
    'email' => 'required|email',
    'password' => 'required|min:8'
], [
    'email.required' => __('validation.required', ['attribute' => 'E-posta']),
    'password.min' => __('validation.min.string', ['attribute' => 'Şifre', 'min' => 8])
]);
```

## 🔧 Gelişmiş Kullanım

### Özel Çeviriler

Kendi çevirilerinizi eklemek için `resources/lang/tr/` dizinine yeni dosyalar oluşturabilirsiniz:

```php
// resources/lang/tr/custom.php
return [
    'welcome_message' => 'Hoş geldiniz, :name!',
    'user_not_found' => 'Kullanıcı bulunamadı.',
];
```

### Çoklu Dil Desteği

Farklı diller için paketi kullanabilirsiniz:

```php
// İngilizce için
App::setLocale('en');

// Türkçe için
App::setLocale('tr');
```

## 🚀 Güncelleme

Paketi güncellemek için:

```bash
composer update herkod/laravel-tr
php artisan vendor:publish --tag=herkod-laravel-tr --force
```

## 🗑️ Kaldırma

Paketi kaldırmak için:

```bash
composer remove herkod/laravel-tr
```

## 📋 Gereksinimler

- PHP 7.4 veya üzeri
- Laravel 6.0 veya üzeri
- Composer

## 🤝 Katkıda Bulunma

1. Bu repoyu fork edin
2. Feature branch oluşturun (`git checkout -b feature/amazing-feature`)
3. Değişikliklerinizi commit edin (`git commit -m 'Add some amazing feature'`)
4. Branch'inizi push edin (`git push origin feature/amazing-feature`)
5. Pull Request oluşturun

## 📄 Lisans

Bu proje MIT lisansı altında lisanslanmıştır. Detaylar için [LICENSE](LICENSE) dosyasına bakın.

## 🆘 Destek

Herhangi bir sorun yaşarsanız:

- [GitHub Issues](https://github.com/herkod/laravel-tr/issues) sayfasını ziyaret edin
- [Herkod](https://www.herkod.com) web sitesini ziyaret edin

---

<p align="center">
  <a href="https://www.herkod.com">
    <img src="https://herkod.com/images/logo/logo.svg" width="250" alt="Herkod">
  </a>
</p>

<p align="center">
  <strong>Laravel 6-12 için Türkçe Dil Desteği</strong>
</p>