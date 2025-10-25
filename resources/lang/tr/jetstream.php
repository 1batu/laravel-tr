<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel Jetstream Çevirileri
    |--------------------------------------------------------------------------
    |
    | Aşağıdaki dil satırları Laravel Jetstream paketi için kullanılmaktadır.
    | Bu metinleri uygulamanızın gereksinimlerine göre düzenlemekte
    | özgürsünüz.
    |
    */

    /*
    |--------------------------------------------------------------------------
    | Genel
    |--------------------------------------------------------------------------
    */

    'team_settings' => 'Takım Ayarları',
    'team_settings_description' => 'Takımınızı yönetin ve üye ekleyin.',
    'team_members' => 'Takım Üyeleri',
    'team_members_description' => 'Takımınızın üyelerini yönetin.',
    'team_member' => 'Takım Üyesi',
    'team_member_description' => 'Takım üyesi bilgilerini görüntüleyin.',
    'create_team' => 'Takım Oluştur',
    'create_team_description' => 'Yeni bir takım oluşturun.',
    'edit_team' => 'Takımı Düzenle',
    'edit_team_description' => 'Takım bilgilerini düzenleyin.',
    'delete_team' => 'Takımı Sil',
    'delete_team_description' => 'Takımı kalıcı olarak silin.',
    'leave_team' => 'Takımdan Ayrıl',
    'leave_team_description' => 'Bu takımdan ayrılın.',
    'switch_teams' => 'Takım Değiştir',
    'switch_teams_description' => 'Farklı bir takıma geçin.',
    'team_owner' => 'Takım Sahibi',
    'team_owner_description' => 'Bu takımın sahibi.',
    'team_admin' => 'Takım Yöneticisi',
    'team_admin_description' => 'Bu takımın yöneticisi.',
    'team_member_role' => 'Takım Üyesi',
    'team_member_role_description' => 'Bu takımın üyesi.',

    /*
    |--------------------------------------------------------------------------
    | Takım Oluşturma
    |--------------------------------------------------------------------------
    */

    'create_team_title' => 'Takım Oluştur',
    'create_team_subtitle' => 'Yeni bir takım oluşturun ve işbirliği yapmaya başlayın.',
    'team_name' => 'Takım Adı',
    'team_name_placeholder' => 'Takım adını girin',
    'team_slug' => 'Takım URL\'si',
    'team_slug_placeholder' => 'takim-url-si',
    'team_slug_description' => 'Bu URL, takımınızın benzersiz adresini oluşturur.',
    'create_team_button' => 'Takım Oluştur',
    'team_created' => 'Takım başarıyla oluşturuldu.',
    'team_creation_failed' => 'Takım oluşturulurken bir hata oluştu.',

    /*
    |--------------------------------------------------------------------------
    | Takım Düzenleme
    |--------------------------------------------------------------------------
    */

    'edit_team_title' => 'Takım Ayarları',
    'edit_team_subtitle' => 'Takım bilgilerini düzenleyin.',
    'update_team_button' => 'Takımı Güncelle',
    'team_updated' => 'Takım başarıyla güncellendi.',
    'team_update_failed' => 'Takım güncellenirken bir hata oluştu.',

    /*
    |--------------------------------------------------------------------------
    | Takım Silme
    |--------------------------------------------------------------------------
    */

    'delete_team_title' => 'Takımı Sil',
    'delete_team_subtitle' => 'Bu takımı kalıcı olarak silin.',
    'delete_team_warning' => 'Bu işlem geri alınamaz. Takım ve tüm verileri kalıcı olarak silinecektir.',
    'delete_team_confirmation' => 'Takımı silmek istediğinizden emin misiniz?',
    'delete_team_button' => 'Takımı Sil',
    'team_deleted' => 'Takım başarıyla silindi.',
    'team_deletion_failed' => 'Takım silinirken bir hata oluştu.',

    /*
    |--------------------------------------------------------------------------
    | Takımdan Ayrılma
    |--------------------------------------------------------------------------
    */

    'leave_team_title' => 'Takımdan Ayrıl',
    'leave_team_subtitle' => 'Bu takımdan ayrılın.',
    'leave_team_warning' => 'Bu takımdan ayrıldıktan sonra, takım verilerine erişiminiz olmayacak.',
    'leave_team_confirmation' => 'Takımdan ayrılmak istediğinizden emin misiniz?',
    'leave_team_button' => 'Takımdan Ayrıl',
    'left_team' => 'Takımdan başarıyla ayrıldınız.',
    'leave_team_failed' => 'Takımdan ayrılırken bir hata oluştu.',

    /*
    |--------------------------------------------------------------------------
    | Takım Üyeleri
    |--------------------------------------------------------------------------
    */

    'add_team_member_title' => 'Takım Üyesi Ekle',
    'add_team_member_subtitle' => 'Yeni bir takım üyesi ekleyin.',
    'member_email' => 'E-posta Adresi',
    'member_email_placeholder' => 'ornek@email.com',
    'member_role' => 'Rol',
    'member_role_owner' => 'Sahip',
    'member_role_admin' => 'Yönetici',
    'member_role_member' => 'Üye',
    'add_member_button' => 'Üye Ekle',
    'member_added' => 'Takım üyesi başarıyla eklendi.',
    'member_add_failed' => 'Takım üyesi eklenirken bir hata oluştu.',
    'member_already_exists' => 'Bu kullanıcı zaten takım üyesi.',
    'member_not_found' => 'Kullanıcı bulunamadı.',

    /*
    |--------------------------------------------------------------------------
    | Takım Üyesi Yönetimi
    |--------------------------------------------------------------------------
    */

    'manage_member_title' => 'Üye Yönetimi',
    'manage_member_subtitle' => 'Takım üyesini yönetin.',
    'member_name' => 'Ad Soyad',
    'member_email' => 'E-posta Adresi',
    'member_role' => 'Rol',
    'member_joined' => 'Katılım Tarihi',
    'member_last_active' => 'Son Aktivite',
    'change_role' => 'Rolü Değiştir',
    'remove_member' => 'Üyeyi Kaldır',
    'remove_member_confirmation' => 'Bu üyeyi takımdan kaldırmak istediğinizden emin misiniz?',
    'member_removed' => 'Takım üyesi başarıyla kaldırıldı.',
    'member_remove_failed' => 'Takım üyesi kaldırılırken bir hata oluştu.',
    'role_changed' => 'Üye rolü başarıyla değiştirildi.',
    'role_change_failed' => 'Üye rolü değiştirilirken bir hata oluştu.',

    /*
    |--------------------------------------------------------------------------
    | Takım Geçişi
    |--------------------------------------------------------------------------
    */

    'switch_team_title' => 'Takım Değiştir',
    'switch_team_subtitle' => 'Farklı bir takıma geçin.',
    'current_team' => 'Mevcut Takım',
    'available_teams' => 'Mevcut Takımlar',
    'switch_to_team' => 'Bu Takıma Geç',
    'team_switched' => 'Takım başarıyla değiştirildi.',
    'team_switch_failed' => 'Takım değiştirilirken bir hata oluştu.',

    /*
    |--------------------------------------------------------------------------
    | API Tokenları
    |--------------------------------------------------------------------------
    */

    'api_tokens_title' => 'API Tokenları',
    'api_tokens_subtitle' => 'Uygulamanızın API tokenlarını yönetin.',
    'create_token' => 'Token Oluştur',
    'create_token_subtitle' => 'Yeni bir API token oluşturun.',
    'token_name' => 'Token Adı',
    'token_name_placeholder' => 'Token adını girin',
    'token_permissions' => 'İzinler',
    'token_permissions_description' => 'Bu token\'ın sahip olacağı izinleri seçin.',
    'create_token_button' => 'Token Oluştur',
    'token_created' => 'API token başarıyla oluşturuldu.',
    'token_creation_failed' => 'API token oluşturulurken bir hata oluştu.',
    'token_value' => 'Token Değeri',
    'token_value_description' => 'Bu token değerini güvenli bir yerde saklayın. Bu değer bir daha gösterilmeyecek.',
    'copy_token' => 'Token\'ı Kopyala',
    'token_copied' => 'Token kopyalandı.',

    /*
    |--------------------------------------------------------------------------
    | Token Yönetimi
    |--------------------------------------------------------------------------
    */

    'manage_tokens_title' => 'Token Yönetimi',
    'manage_tokens_subtitle' => 'Mevcut API tokenlarınızı yönetin.',
    'token_name' => 'Token Adı',
    'token_abilities' => 'Yetenekler',
    'token_last_used' => 'Son Kullanım',
    'token_created' => 'Oluşturulma Tarihi',
    'revoke_token' => 'Token\'ı İptal Et',
    'revoke_token_confirmation' => 'Bu token\'ı iptal etmek istediğinizden emin misiniz?',
    'token_revoked' => 'API token başarıyla iptal edildi.',
    'token_revoke_failed' => 'API token iptal edilirken bir hata oluştu.',

    /*
    |--------------------------------------------------------------------------
    | Profil Yönetimi
    |--------------------------------------------------------------------------
    */

    'profile_title' => 'Profil',
    'profile_subtitle' => 'Profil bilgilerinizi yönetin.',
    'profile_information' => 'Profil Bilgileri',
    'profile_information_description' => 'Hesap bilgilerinizi güncelleyin.',
    'name' => 'Ad Soyad',
    'email' => 'E-posta Adresi',
    'photo' => 'Profil Fotoğrafı',
    'select_photo' => 'Fotoğraf Seç',
    'remove_photo' => 'Fotoğrafı Kaldır',
    'update_profile' => 'Profili Güncelle',
    'profile_updated' => 'Profil başarıyla güncellendi.',
    'profile_update_failed' => 'Profil güncellenirken bir hata oluştu.',

    /*
    |--------------------------------------------------------------------------
    | Şifre Yönetimi
    |--------------------------------------------------------------------------
    */

    'password_title' => 'Şifre',
    'password_subtitle' => 'Şifrenizi güncelleyin.',
    'password_description' => 'Hesabınızın güvenliği için güçlü bir şifre kullanın.',
    'current_password' => 'Mevcut Şifre',
    'new_password' => 'Yeni Şifre',
    'confirm_password' => 'Yeni Şifre Tekrar',
    'update_password' => 'Şifreyi Güncelle',
    'password_updated' => 'Şifre başarıyla güncellendi.',
    'password_update_failed' => 'Şifre güncellenirken bir hata oluştu.',
    'current_password_incorrect' => 'Mevcut şifre yanlış.',

    /*
    |--------------------------------------------------------------------------
    | İki Faktörlü Kimlik Doğrulama
    |--------------------------------------------------------------------------
    */

    'two_factor_title' => 'İki Faktörlü Kimlik Doğrulama',
    'two_factor_subtitle' => 'Hesabınızın güvenliğini artırın.',
    'two_factor_description' => 'İki faktörlü kimlik doğrulama, hesabınızı ekstra bir güvenlik katmanı ile korur.',
    'two_factor_enabled' => 'İki faktörlü kimlik doğrulama etkin.',
    'two_factor_disabled' => 'İki faktörlü kimlik doğrulama devre dışı.',
    'enable_two_factor' => 'İki Faktörlü Kimlik Doğrulamayı Etkinleştir',
    'disable_two_factor' => 'İki Faktörlü Kimlik Doğrulamayı Devre Dışı Bırak',
    'two_factor_enabled_success' => 'İki faktörlü kimlik doğrulama etkinleştirildi.',
    'two_factor_disabled_success' => 'İki faktörlü kimlik doğrulama devre dışı bırakıldı.',
    'two_factor_setup_failed' => 'İki faktörlü kimlik doğrulama kurulumunda hata oluştu.',

    /*
    |--------------------------------------------------------------------------
    | Kurtarma Kodları
    |--------------------------------------------------------------------------
    */

    'recovery_codes_title' => 'Kurtarma Kodları',
    'recovery_codes_subtitle' => 'Kurtarma kodlarınızı güvenli bir yerde saklayın.',
    'recovery_codes_description' => 'Bu kodları güvenli bir yerde saklayın. Cihazınızı kaybederseniz bu kodları kullanabilirsiniz.',
    'regenerate_recovery_codes' => 'Kurtarma Kodlarını Yenile',
    'recovery_codes_regenerated' => 'Kurtarma kodları başarıyla yenilendi.',
    'recovery_codes_regeneration_failed' => 'Kurtarma kodları yenilenirken bir hata oluştu.',

    /*
    |--------------------------------------------------------------------------
    | Oturum Yönetimi
    |--------------------------------------------------------------------------
    */

    'sessions_title' => 'Oturumlar',
    'sessions_subtitle' => 'Aktif oturumlarınızı yönetin.',
    'sessions_description' => 'Hesabınıza giriş yapmış olan tüm cihazları görüntüleyin ve yönetin.',
    'current_session' => 'Mevcut Oturum',
    'other_sessions' => 'Diğer Oturumlar',
    'browser' => 'Tarayıcı',
    'operating_system' => 'İşletim Sistemi',
    'ip_address' => 'IP Adresi',
    'last_activity' => 'Son Aktivite',
    'logout_other_sessions' => 'Diğer Oturumlardan Çıkış Yap',
    'logout_other_sessions_confirmation' => 'Diğer tüm oturumlardan çıkış yapmak istediğinizden emin misiniz?',
    'other_sessions_logged_out' => 'Diğer oturumlardan başarıyla çıkış yapıldı.',
    'other_sessions_logout_failed' => 'Diğer oturumlardan çıkış yapılırken bir hata oluştu.',

    /*
    |--------------------------------------------------------------------------
    | Hesap Silme
    |--------------------------------------------------------------------------
    */

    'delete_account_title' => 'Hesabı Sil',
    'delete_account_subtitle' => 'Hesabınızı kalıcı olarak silin.',
    'delete_account_description' => 'Hesabınızı sildikten sonra tüm verileriniz kalıcı olarak silinecektir.',
    'delete_account_warning' => 'Bu işlem geri alınamaz. Hesabınız ve tüm verileriniz kalıcı olarak silinecektir.',
    'delete_account_confirmation' => 'Hesabınızı silmek istediğinizden emin misiniz?',
    'delete_account_button' => 'Hesabı Sil',
    'account_deleted' => 'Hesap başarıyla silindi.',
    'account_deletion_failed' => 'Hesap silinirken bir hata oluştu.',

    /*
    |--------------------------------------------------------------------------
    | Hata Mesajları
    |--------------------------------------------------------------------------
    */

    'errors' => [
        'team_not_found' => 'Takım bulunamadı.',
        'member_not_found' => 'Takım üyesi bulunamadı.',
        'unauthorized' => 'Bu işlem için yetkiniz yok.',
        'invalid_email' => 'Geçersiz e-posta adresi.',
        'email_already_exists' => 'Bu e-posta adresi zaten kullanılıyor.',
        'password_incorrect' => 'Mevcut şifre yanlış.',
        'password_mismatch' => 'Şifreler eşleşmiyor.',
        'two_factor_setup_required' => 'İki faktörlü kimlik doğrulama kurulumu gerekli.',
        'invalid_two_factor_code' => 'Geçersiz doğrulama kodu.',
        'recovery_code_used' => 'Bu kurtarma kodu zaten kullanılmış.',
        'invalid_recovery_code' => 'Geçersiz kurtarma kodu.',
        'session_not_found' => 'Oturum bulunamadı.',
        'token_not_found' => 'Token bulunamadı.',
        'token_expired' => 'Token süresi dolmuş.',
        'invalid_token' => 'Geçersiz token.',
        'team_creation_failed' => 'Takım oluşturulamadı.',
        'team_update_failed' => 'Takım güncellenemedi.',
        'team_deletion_failed' => 'Takım silinemedi.',
        'member_add_failed' => 'Takım üyesi eklenemedi.',
        'member_remove_failed' => 'Takım üyesi kaldırılamadı.',
        'role_change_failed' => 'Üye rolü değiştirilemedi.',
        'profile_update_failed' => 'Profil güncellenemedi.',
        'password_update_failed' => 'Şifre güncellenemedi.',
        'two_factor_setup_failed' => 'İki faktörlü kimlik doğrulama kurulamadı.',
        'recovery_codes_regeneration_failed' => 'Kurtarma kodları yenilenemedi.',
        'other_sessions_logout_failed' => 'Diğer oturumlardan çıkış yapılamadı.',
        'account_deletion_failed' => 'Hesap silinemedi.',
    ],

    /*
    |--------------------------------------------------------------------------
    | Başarı Mesajları
    |--------------------------------------------------------------------------
    */

    'success' => [
        'team_created' => 'Takım başarıyla oluşturuldu.',
        'team_updated' => 'Takım başarıyla güncellendi.',
        'team_deleted' => 'Takım başarıyla silindi.',
        'left_team' => 'Takımdan başarıyla ayrıldınız.',
        'member_added' => 'Takım üyesi başarıyla eklendi.',
        'member_removed' => 'Takım üyesi başarıyla kaldırıldı.',
        'role_changed' => 'Üye rolü başarıyla değiştirildi.',
        'team_switched' => 'Takım başarıyla değiştirildi.',
        'token_created' => 'API token başarıyla oluşturuldu.',
        'token_revoked' => 'API token başarıyla iptal edildi.',
        'profile_updated' => 'Profil başarıyla güncellendi.',
        'password_updated' => 'Şifre başarıyla güncellendi.',
        'two_factor_enabled' => 'İki faktörlü kimlik doğrulama etkinleştirildi.',
        'two_factor_disabled' => 'İki faktörlü kimlik doğrulama devre dışı bırakıldı.',
        'recovery_codes_regenerated' => 'Kurtarma kodları başarıyla yenilendi.',
        'other_sessions_logged_out' => 'Diğer oturumlardan başarıyla çıkış yapıldı.',
        'account_deleted' => 'Hesap başarıyla silindi.',
    ],

];
