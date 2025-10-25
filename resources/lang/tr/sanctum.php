<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel Sanctum Çevirileri
    |--------------------------------------------------------------------------
    |
    | Aşağıdaki dil satırları Laravel Sanctum paketi için kullanılmaktadır.
    | Bu metinleri uygulamanızın gereksinimlerine göre düzenlemekte
    | özgürsünüz.
    |
    */

    /*
    |--------------------------------------------------------------------------
    | API Tokenları
    |--------------------------------------------------------------------------
    */

    'api_tokens' => 'API Tokenları',
    'api_tokens_description' => 'Uygulamanızın API tokenlarını yönetin.',
    'create_token' => 'Token Oluştur',
    'create_token_description' => 'Yeni bir API token oluşturun.',
    'token_name' => 'Token Adı',
    'token_name_placeholder' => 'Token adını girin',
    'token_abilities' => 'Yetenekler',
    'token_abilities_description' => 'Bu token\'ın sahip olacağı yetenekleri seçin.',
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

    'manage_tokens' => 'Token Yönetimi',
    'manage_tokens_description' => 'Mevcut API tokenlarınızı yönetin.',
    'token_name' => 'Token Adı',
    'token_abilities' => 'Yetenekler',
    'token_last_used' => 'Son Kullanım',
    'token_created_at' => 'Oluşturulma Tarihi',
    'revoke_token' => 'Token\'ı İptal Et',
    'revoke_token_confirmation' => 'Bu token\'ı iptal etmek istediğinizden emin misiniz?',
    'token_revoked' => 'API token başarıyla iptal edildi.',
    'token_revoke_failed' => 'API token iptal edilirken bir hata oluştu.',

    /*
    |--------------------------------------------------------------------------
    | Yetenekler
    |--------------------------------------------------------------------------
    */

    'abilities' => [
        'read' => 'Okuma',
        'read_description' => 'Verileri okuma yetkisi',
        'write' => 'Yazma',
        'write_description' => 'Verileri yazma yetkisi',
        'delete' => 'Silme',
        'delete_description' => 'Verileri silme yetkisi',
        'admin' => 'Yönetici',
        'admin_description' => 'Tam yönetici yetkisi',
        'user' => 'Kullanıcı',
        'user_description' => 'Kullanıcı yetkisi',
        'api' => 'API',
        'api_description' => 'API erişim yetkisi',
        'web' => 'Web',
        'web_description' => 'Web erişim yetkisi',
    ],

    /*
    |--------------------------------------------------------------------------
    | Hata Mesajları
    |--------------------------------------------------------------------------
    */

    'errors' => [
        'token_not_found' => 'Token bulunamadı.',
        'token_expired' => 'Token süresi dolmuş.',
        'invalid_token' => 'Geçersiz token.',
        'unauthorized' => 'Bu işlem için yetkiniz yok.',
        'forbidden' => 'Bu işlem yasak.',
        'token_creation_failed' => 'Token oluşturulamadı.',
        'token_revoke_failed' => 'Token iptal edilemedi.',
        'invalid_abilities' => 'Geçersiz yetenekler.',
        'missing_abilities' => 'Gerekli yetenekler eksik.',
        'token_name_required' => 'Token adı gerekli.',
        'token_name_unique' => 'Bu token adı zaten kullanılıyor.',
        'token_abilities_required' => 'En az bir yetenek seçmelisiniz.',
        'invalid_ability' => 'Geçersiz yetenek: :ability',
        'token_limit_reached' => 'Maksimum token sayısına ulaşıldı.',
        'token_creation_denied' => 'Token oluşturma yetkisi yok.',
        'token_revoke_denied' => 'Token iptal etme yetkisi yok.',
    ],

    /*
    |--------------------------------------------------------------------------
    | Başarı Mesajları
    |--------------------------------------------------------------------------
    */

    'success' => [
        'token_created' => 'API token başarıyla oluşturuldu.',
        'token_revoked' => 'API token başarıyla iptal edildi.',
        'token_updated' => 'API token başarıyla güncellendi.',
        'tokens_revoked' => 'Tüm API tokenları başarıyla iptal edildi.',
        'token_abilities_updated' => 'Token yetenekleri başarıyla güncellendi.',
        'token_name_updated' => 'Token adı başarıyla güncellendi.',
    ],

    /*
    |--------------------------------------------------------------------------
    | Uyarı Mesajları
    |--------------------------------------------------------------------------
    */

    'warnings' => [
        'token_expires_soon' => 'Bu token yakında süresi dolacak.',
        'token_last_used_old' => 'Bu token uzun süredir kullanılmıyor.',
        'too_many_tokens' => 'Çok fazla aktif token var. Eski tokenları iptal etmeyi düşünün.',
        'token_abilities_changed' => 'Token yetenekleri değiştirildi. Uygulamanızı güncelleyin.',
        'token_security_risk' => 'Bu token güvenlik riski oluşturabilir.',
    ],

    /*
    |--------------------------------------------------------------------------
    | Bilgi Mesajları
    |--------------------------------------------------------------------------
    */

    'info' => [
        'token_created_at' => 'Token oluşturulma tarihi: :date',
        'token_last_used_at' => 'Son kullanım tarihi: :date',
        'token_expires_at' => 'Token süresi dolma tarihi: :date',
        'token_abilities_count' => 'Token yetenek sayısı: :count',
        'token_usage_count' => 'Token kullanım sayısı: :count',
        'token_created_by' => 'Token oluşturan: :user',
        'token_revoked_by' => 'Token iptal eden: :user',
        'token_revoked_at' => 'Token iptal tarihi: :date',
    ],

    /*
    |--------------------------------------------------------------------------
    | Form Etiketleri
    |--------------------------------------------------------------------------
    */

    'form' => [
        'token_name_label' => 'Token Adı',
        'token_name_placeholder' => 'Token adını girin',
        'token_abilities_label' => 'Yetenekler',
        'token_abilities_description' => 'Bu token\'ın sahip olacağı yetenekleri seçin',
        'token_expires_at_label' => 'Süre Dolma Tarihi',
        'token_expires_at_placeholder' => 'Süre dolma tarihini seçin',
        'token_abilities_select_all' => 'Tümünü Seç',
        'token_abilities_deselect_all' => 'Tümünü Kaldır',
        'create_token_button' => 'Token Oluştur',
        'update_token_button' => 'Token Güncelle',
        'revoke_token_button' => 'Token İptal Et',
        'cancel_button' => 'İptal',
        'save_button' => 'Kaydet',
        'delete_button' => 'Sil',
    ],

    /*
    |--------------------------------------------------------------------------
    | Tablo Başlıkları
    |--------------------------------------------------------------------------
    */

    'table' => [
        'token_name' => 'Token Adı',
        'token_abilities' => 'Yetenekler',
        'token_last_used' => 'Son Kullanım',
        'token_created_at' => 'Oluşturulma Tarihi',
        'token_expires_at' => 'Süre Dolma Tarihi',
        'token_actions' => 'İşlemler',
        'no_tokens' => 'Henüz token oluşturulmamış',
        'no_tokens_description' => 'İlk API tokenınızı oluşturmak için yukarıdaki butona tıklayın.',
    ],

    /*
    |--------------------------------------------------------------------------
    | Modal Başlıkları
    |--------------------------------------------------------------------------
    */

    'modals' => [
        'create_token_title' => 'Yeni API Token Oluştur',
        'create_token_description' => 'Yeni bir API token oluşturun ve yeteneklerini belirleyin.',
        'edit_token_title' => 'API Token Düzenle',
        'edit_token_description' => 'API token bilgilerini düzenleyin.',
        'revoke_token_title' => 'API Token İptal Et',
        'revoke_token_description' => 'Bu API token\'ı iptal etmek istediğinizden emin misiniz?',
        'token_created_title' => 'API Token Oluşturuldu',
        'token_created_description' => 'API token başarıyla oluşturuldu. Token değerini güvenli bir yerde saklayın.',
        'token_revoked_title' => 'API Token İptal Edildi',
        'token_revoked_description' => 'API token başarıyla iptal edildi.',
    ],

    /*
    |--------------------------------------------------------------------------
    | Yardım Metinleri
    |--------------------------------------------------------------------------
    */

    'help' => [
        'token_creation' => 'API token oluştururken, token\'ın sahip olacağı yetenekleri dikkatli bir şekilde seçin. Sadece gerekli yetenekleri verin.',
        'token_security' => 'Token değerini güvenli bir yerde saklayın. Bu değer bir daha gösterilmeyecek.',
        'token_abilities' => 'Yetenekler, token\'ın hangi işlemleri yapabileceğini belirler. Sadece gerekli yetenekleri seçin.',
        'token_expiration' => 'Token süre dolma tarihi belirleyerek güvenliği artırabilirsiniz.',
        'token_management' => 'Kullanılmayan tokenları düzenli olarak iptal edin.',
        'token_usage' => 'Token kullanımını izleyerek güvenlik açıklarını tespit edebilirsiniz.',
    ],

];
