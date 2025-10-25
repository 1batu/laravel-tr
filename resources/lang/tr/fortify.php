<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel Fortify Çevirileri
    |--------------------------------------------------------------------------
    |
    | Aşağıdaki dil satırları Laravel Fortify paketi için kullanılmaktadır.
    | Bu metinleri uygulamanızın gereksinimlerine göre düzenlemekte
    | özgürsünüz.
    |
    */

    'failed' => 'Bu kimlik bilgileri kayıtlarımızla eşleşmiyor.',
    'password' => 'Girilen şifre yanlış.',
    'throttle' => 'Çok fazla giriş denemesi. Lütfen :seconds saniye sonra tekrar deneyin.',

    /*
    |--------------------------------------------------------------------------
    | Kimlik Doğrulama
    |--------------------------------------------------------------------------
    */

    'login' => [
        'title' => 'Giriş Yap',
        'email' => 'E-posta Adresi',
        'password' => 'Şifre',
        'remember' => 'Beni Hatırla',
        'forgot_password' => 'Şifremi Unuttum',
        'login_button' => 'Giriş Yap',
        'register_link' => 'Hesabınız yok mu? Kayıt olun',
    ],

    'register' => [
        'title' => 'Kayıt Ol',
        'name' => 'Ad Soyad',
        'email' => 'E-posta Adresi',
        'password' => 'Şifre',
        'password_confirmation' => 'Şifre Tekrar',
        'terms' => 'Kullanım şartlarını kabul ediyorum',
        'register_button' => 'Kayıt Ol',
        'login_link' => 'Zaten hesabınız var mı? Giriş yapın',
    ],

    'verify_email' => [
        'title' => 'E-posta Adresinizi Doğrulayın',
        'message' => 'Devam etmeden önce lütfen e-posta adresinizi doğrulayın.',
        'resend' => 'Doğrulama e-postasını tekrar gönder',
        'sent' => 'Yeni bir doğrulama bağlantısı e-posta adresinize gönderildi.',
    ],

    'confirm_password' => [
        'title' => 'Şifrenizi Onaylayın',
        'message' => 'Bu güvenli alana erişmek için lütfen şifrenizi onaylayın.',
        'password' => 'Şifre',
        'confirm_button' => 'Onayla',
    ],

    'two_factor_authentication' => [
        'title' => 'İki Faktörlü Kimlik Doğrulama',
        'message' => 'Hesabınızın güvenliği için iki faktörlü kimlik doğrulama gereklidir.',
        'code' => 'Doğrulama Kodu',
        'recovery_code' => 'Kurtarma Kodu',
        'use_recovery_code' => 'Kurtarma kodu kullan',
        'use_authentication_code' => 'Doğrulama kodu kullan',
        'confirm_button' => 'Onayla',
    ],

    'reset_password' => [
        'title' => 'Şifre Sıfırlama',
        'email' => 'E-posta Adresi',
        'send_reset_link' => 'Şifre Sıfırlama Bağlantısı Gönder',
        'password' => 'Yeni Şifre',
        'password_confirmation' => 'Yeni Şifre Tekrar',
        'reset_button' => 'Şifreyi Sıfırla',
        'sent' => 'Şifre sıfırlama bağlantısı e-posta adresinize gönderildi.',
        'reset' => 'Şifreniz başarıyla sıfırlandı.',
    ],

    'profile' => [
        'title' => 'Profil',
        'name' => 'Ad Soyad',
        'email' => 'E-posta Adresi',
        'current_password' => 'Mevcut Şifre',
        'new_password' => 'Yeni Şifre',
        'new_password_confirmation' => 'Yeni Şifre Tekrar',
        'update_profile' => 'Profili Güncelle',
        'update_password' => 'Şifreyi Güncelle',
        'delete_account' => 'Hesabı Sil',
        'profile_updated' => 'Profil başarıyla güncellendi.',
        'password_updated' => 'Şifre başarıyla güncellendi.',
    ],

    'two_factor_authentication_settings' => [
        'title' => 'İki Faktörlü Kimlik Doğrulama',
        'enabled' => 'İki faktörlü kimlik doğrulama etkin.',
        'disabled' => 'İki faktörlü kimlik doğrulama devre dışı.',
        'enable' => 'Etkinleştir',
        'disable' => 'Devre Dışı Bırak',
        'regenerate_recovery_codes' => 'Kurtarma Kodlarını Yenile',
        'show_recovery_codes' => 'Kurtarma Kodlarını Göster',
        'recovery_codes' => 'Kurtarma Kodları',
        'recovery_codes_message' => 'Bu kurtarma kodlarını güvenli bir yerde saklayın. Hesabınıza erişiminizi kaybederseniz bu kodları kullanabilirsiniz.',
        'confirm_disable' => 'İki faktörlü kimlik doğrulamayı devre dışı bırakmak istediğinizden emin misiniz?',
        'confirm_regenerate' => 'Kurtarma kodlarını yenilemek istediğinizden emin misiniz? Bu işlem mevcut kurtarma kodlarını geçersiz kılar.',
    ],

    'sessions' => [
        'title' => 'Aktif Oturumlar',
        'current_session' => 'Mevcut Oturum',
        'other_sessions' => 'Diğer Oturumlar',
        'browser' => 'Tarayıcı',
        'last_activity' => 'Son Aktivite',
        'logout_other_sessions' => 'Diğer Oturumlardan Çıkış Yap',
        'confirm_logout_other_sessions' => 'Diğer tüm oturumlardan çıkış yapmak istediğinizden emin misiniz?',
        'password' => 'Şifre',
        'logout_other_sessions_button' => 'Diğer Oturumlardan Çıkış Yap',
    ],

    'api_tokens' => [
        'title' => 'API Tokenları',
        'create_token' => 'Token Oluştur',
        'token_name' => 'Token Adı',
        'permissions' => 'İzinler',
        'create_button' => 'Token Oluştur',
        'token_created' => 'API token başarıyla oluşturuldu.',
        'token_value' => 'Token değeri: :token',
        'token_value_warning' => 'Bu token değerini güvenli bir yerde saklayın. Bu değer bir daha gösterilmeyecek.',
        'delete_token' => 'Token Sil',
        'confirm_delete' => 'Bu token\'ı silmek istediğinizden emin misiniz?',
    ],

    'team_settings' => [
        'title' => 'Takım Ayarları',
        'team_name' => 'Takım Adı',
        'team_slug' => 'Takım URL\'si',
        'team_members' => 'Takım Üyeleri',
        'add_team_member' => 'Takım Üyesi Ekle',
        'email' => 'E-posta Adresi',
        'role' => 'Rol',
        'add_button' => 'Ekle',
        'leave_team' => 'Takımdan Ayrıl',
        'delete_team' => 'Takımı Sil',
        'confirm_leave' => 'Bu takımdan ayrılmak istediğinizden emin misiniz?',
        'confirm_delete' => 'Bu takımı silmek istediğinizden emin misiniz?',
    ],

    /*
    |--------------------------------------------------------------------------
    | Hata Mesajları
    |--------------------------------------------------------------------------
    */

    'errors' => [
        'invalid_credentials' => 'Girilen kimlik bilgileri geçersiz.',
        'account_disabled' => 'Hesabınız devre dışı bırakılmış.',
        'email_not_verified' => 'E-posta adresiniz doğrulanmamış.',
        'password_incorrect' => 'Girilen şifre yanlış.',
        'two_factor_invalid' => 'Girilen doğrulama kodu geçersiz.',
        'recovery_code_invalid' => 'Girilen kurtarma kodu geçersiz.',
        'session_expired' => 'Oturum süreniz dolmuş. Lütfen tekrar giriş yapın.',
        'too_many_attempts' => 'Çok fazla deneme yapıldı. Lütfen daha sonra tekrar deneyin.',
        'team_not_found' => 'Takım bulunamadı.',
        'unauthorized' => 'Bu işlem için yetkiniz yok.',
        'token_expired' => 'Token süresi dolmuş.',
        'invalid_token' => 'Geçersiz token.',
    ],

    /*
    |--------------------------------------------------------------------------
    | Başarı Mesajları
    |--------------------------------------------------------------------------
    */

    'success' => [
        'login' => 'Başarıyla giriş yapıldı.',
        'logout' => 'Başarıyla çıkış yapıldı.',
        'register' => 'Hesap başarıyla oluşturuldu.',
        'email_verified' => 'E-posta adresi başarıyla doğrulandı.',
        'password_reset' => 'Şifre başarıyla sıfırlandı.',
        'profile_updated' => 'Profil başarıyla güncellendi.',
        'password_updated' => 'Şifre başarıyla güncellendi.',
        'two_factor_enabled' => 'İki faktörlü kimlik doğrulama etkinleştirildi.',
        'two_factor_disabled' => 'İki faktörlü kimlik doğrulama devre dışı bırakıldı.',
        'recovery_codes_regenerated' => 'Kurtarma kodları başarıyla yenilendi.',
        'other_sessions_logged_out' => 'Diğer oturumlardan başarıyla çıkış yapıldı.',
        'api_token_created' => 'API token başarıyla oluşturuldu.',
        'api_token_deleted' => 'API token başarıyla silindi.',
        'team_created' => 'Takım başarıyla oluşturuldu.',
        'team_updated' => 'Takım başarıyla güncellendi.',
        'team_deleted' => 'Takım başarıyla silindi.',
        'team_member_added' => 'Takım üyesi başarıyla eklendi.',
        'team_member_removed' => 'Takım üyesi başarıyla kaldırıldı.',
        'left_team' => 'Takımdan başarıyla ayrıldınız.',
    ],

];
