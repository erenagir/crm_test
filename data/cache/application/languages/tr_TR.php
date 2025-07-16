<?php
return [
  'ActionHistoryRecord' => [
    'fields' => [
      'user' => 'Kullanıcı',
      'action' => 'Eylem',
      'createdAt' => 'Tarih',
      'userType' => 'Kullanıcı Tipi',
      'target' => 'Hedef',
      'targetType' => 'Hedef Tipi',
      'authToken' => 'Auth Token',
      'ipAddress' => 'IP Adresi',
      'authLogRecord' => 'Kimlik Doğrulama Kaydı'
    ],
    'links' => [
      'authToken' => 'Auth Token',
      'authLogRecord' => 'Kimlik Doğrulama Kaydı',
      'user' => 'Kullanıcı',
      'target' => 'Hedef'
    ],
    'presetFilters' => [
      'onlyMy' => 'Sadece Benim'
    ],
    'options' => [
      'action' => [
        'read' => 'Oku',
        'update' => 'Güncelle',
        'delete' => 'Sil',
        'create' => 'Oluştur'
      ]
    ]
  ],
  'AddressCountry' => [
    'labels' => [
      'Create AddressCountry' => 'Create Address Country',
      'Populate' => 'Populate'
    ],
    'fields' => [
      'code' => 'Code',
      'isPreferred' => 'Is Preferred'
    ],
    'tooltips' => [
      'code' => 'ISO 3166-1 alpha-2 code.',
      'isPreferred' => 'Preferred countries appear first in the picklist.'
    ],
    'messages' => [
      'confirmPopulateDefaults' => 'All existing countries will be deleted, the default country list will be created. It won\'t be possible to revert the operation.

Are you sure?'
    ],
    'strings' => [
      'populateDefaults' => 'Populate with default country list'
    ]
  ],
  'Admin' => [
    'labels' => [
      'Enabled' => 'Etkin',
      'Disabled' => 'Pasif',
      'System' => 'Sistem',
      'Users' => 'Kullanıcılar',
      'Email' => 'Eposta',
      'Messaging' => 'Messaging',
      'Data' => 'Veri',
      'Misc' => 'Misc',
      'Setup' => 'Setup',
      'Customization' => 'Özelleştirme',
      'Available Fields' => 'Uygun Alanlar',
      'Layout' => 'Düzen',
      'Entity Manager' => 'Varlık Yönetimi',
      'Add Panel' => 'Pano Ekle',
      'Add Field' => 'Alan Ekle',
      'Settings' => 'Ayarlar',
      'Scheduled Jobs' => 'Planlanmış İşler',
      'Upgrade' => 'Yükselt',
      'Clear Cache' => 'Önbelleği Temizle',
      'Rebuild' => 'Onar',
      'Teams' => 'Takımlar',
      'Roles' => 'Roller',
      'Portal' => 'Portal',
      'Portals' => 'Portaller',
      'Portal Roles' => 'Portal Rolleri',
      'Portal Users' => 'Portal Kullanıcıları',
      'API Users' => 'API Kullanıcıları',
      'Outbound Emails' => 'Giden Epostalar',
      'Group Email Accounts' => 'Grup Eposta Hesapları',
      'Personal Email Accounts' => 'Kişisel Eposta Hesapları',
      'Inbound Emails' => 'Gelen Epostalar',
      'Email Templates' => 'Eposta Şablonları',
      'Import' => 'İçe Aktar',
      'Layout Manager' => 'Düzen Yönetimi',
      'User Interface' => 'Kullanıcı Arayüzü',
      'Auth Tokens' => 'Doğrulanmış kimlikler',
      'Auth Log' => 'Doğrulama Günlüğü',
      'App Log' => 'App Log',
      'App Secrets' => 'App Secrets',
      'Authentication' => 'Kimlik Doğrulama',
      'Currency' => 'Döviz',
      'Integrations' => 'Entegrasyonlar',
      'Extensions' => 'Eklentiler',
      'Webhooks' => 'Web Oltası',
      'Dashboard Templates' => 'Pano Şablonları',
      'Upload' => 'Yükle',
      'Installing...' => 'Yükleniyor...',
      'Upgrading...' => 'Yükseltiliyor...',
      'Upgraded successfully' => 'Başarıyla Yükseltildi',
      'Installed successfully' => 'Başarıyla Yüklendi',
      'Ready for upgrade' => 'Yükseltme İçin Hazır',
      'Run Upgrade' => 'Yükseltmeyi Başlat',
      'Install' => 'Yükle',
      'Ready for installation' => 'Yükleme İçin Hazır',
      'Uninstalling...' => 'Kaldırılıyor...',
      'Uninstalled' => 'Kaldırıldı',
      'Create Entity' => 'Varlık Oluştur',
      'Edit Entity' => 'Varlığı Düzenle',
      'Create Link' => 'Kişi Oluştur',
      'Edit Link' => 'Bağlantıyı Düzenle',
      'Notifications' => 'Bildirimler',
      'Jobs' => 'İşler',
      'Job Settings' => 'Job Settings',
      'Reset to Default' => 'Varsayılana Sıfırla',
      'Email Filters' => 'Eposta Filtreleri',
      'Action History' => 'Eylem Tarihçesi',
      'Label Manager' => 'Etiket Yönetimi',
      'Template Manager' => 'Şablon Yöneticisi',
      'Lead Capture' => 'Potansiyel Müşteri',
      'Attachments' => 'Ek',
      'System Requirements' => 'Sistem gereksinimleri',
      'PDF Templates' => 'PDF Şablonları',
      'PHP Settings' => 'PHP ayarları',
      'Database Settings' => 'Veri tabanı ayarları',
      'Permissions' => 'Izin',
      'Email Addresses' => 'Eposta Adresleri',
      'Phone Numbers' => 'Telefon Numaraları',
      'Layout Sets' => 'Düzen Setleri',
      'Working Time Calendars' => 'Çalışma Süresi Takvimleri',
      'Group Email Folders' => 'Grup Eposta Klasörü',
      'Authentication Providers' => 'Kimlik Doğrulama Sağlayıcıları',
      'Address Countries' => 'Address Countries',
      'OAuth Providers' => 'OAuth Providers',
      'Success' => 'Başarılı',
      'Fail' => 'Başarısız',
      'Configuration Instructions' => 'Configuration Instructions',
      'Formula Sandbox' => 'Formül Korumalı Alan',
      'is recommended' => 'is recommended',
      'extension is missing' => 'uzantı eksik'
    ],
    'layouts' => [
      'list' => 'Liste',
      'detail' => 'Detay',
      'listSmall' => 'Liste (Mini)',
      'detailSmall' => 'Detay (Mini)',
      'detailPortal' => 'Detay (Portal)',
      'detailSmallPortal' => 'Detay (Küçük, Portal)',
      'listSmallPortal' => 'Liste (Small, Portal)',
      'listPortal' => 'Liste (Portal)',
      'relationshipsPortal' => 'Bağlı Paneller (Portal)',
      'filters' => 'Arama Filtreleri',
      'massUpdate' => 'Çoklu Güncelleme',
      'relationships' => 'İlişki Panelleri',
      'defaultSidePanel' => 'Side Panel Fields',
      'bottomPanelsDetail' => 'Bottom Panels',
      'bottomPanelsEdit' => 'Bottom Panels (Edit)',
      'bottomPanelsDetailSmall' => 'Bottom Panels (Detail Small)',
      'bottomPanelsEditSmall' => 'Bottom Panels (Edit Small)',
      'sidePanelsDetail' => 'Yan Paneller (Detay)',
      'sidePanelsEdit' => 'Yan Paneller (Düzenle)',
      'sidePanelsDetailSmall' => 'Yan Paneller (Detay Küçük)',
      'sidePanelsEditSmall' => 'Yan Paneller (Küçük Resim Düzenle)',
      'kanban' => 'Kanban',
      'detailConvert' => 'Potansiyele çevir',
      'listForAccount' => 'Liste (Hesap için)',
      'listForContact' => 'Liste (Kişiler)'
    ],
    'fieldTypes' => [
      'base' => 'Base',
      'address' => 'Adres',
      'array' => 'Sıralama',
      'foreign' => 'Yabancı',
      'duration' => 'Süre',
      'password' => 'Şifre',
      'personName' => 'Kişi Adı',
      'autoincrement' => 'Otomatik Arttırım',
      'bool' => 'Mantıksal',
      'currency' => 'Para Birimi',
      'currencyConverted' => 'Para Birimi (Dönüştürülmüş)',
      'date' => 'Tarih',
      'datetime' => 'Tarih-Saat',
      'datetimeOptional' => 'Tarih/Tarih-Saat',
      'email' => 'Eposta',
      'enum' => 'Sıralama',
      'enumInt' => 'Tamsayı Sıralama',
      'enumFloat' => 'Yüzeysel Sıralama',
      'float' => 'Sıralama',
      'int' => 'Int',
      'link' => 'Bağlantı',
      'linkMultiple' => 'Çoklu Bağlantı',
      'linkParent' => 'Üst Bağlantı',
      'linkOne' => 'Link One',
      'phone' => 'Telefon',
      'text' => 'Metin',
      'url' => 'Url',
      'urlMultiple' => 'Çoklu URL',
      'varchar' => 'Değişken Karakter',
      'file' => 'Dosya',
      'image' => 'Foto',
      'multiEnum' => 'Çoklu-Numara',
      'attachmentMultiple' => 'Birden Çok Ek',
      'rangeInt' => 'Tam Sayı Aralığı',
      'rangeFloat' => 'Aralık Sayı',
      'rangeCurrency' => 'Döviz Aralığı',
      'wysiwyg' => 'Wysiwyg',
      'map' => 'Harita',
      'number' => 'Sayı',
      'colorpicker' => 'Renk Seçici',
      'checklist' => 'Kontrol listesi',
      'barcode' => 'Barcode',
      'jsonArray' => 'Json Array',
      'jsonObject' => 'Json Nesne'
    ],
    'fields' => [
      'type' => 'Tür',
      'name' => 'İsim',
      'label' => 'Etiket',
      'tooltipText' => 'İpucu metni',
      'required' => 'Gerekli',
      'default' => 'Varsayılan',
      'maxLength' => 'Maksimum Uzunluk',
      'options' => 'Seçenekler',
      'optionsReference' => 'Seçenek Referansları',
      'after' => 'Sonraki (Alan)',
      'before' => 'Önceki (Alan)',
      'link' => 'Bağlantı',
      'field' => 'Alan',
      'min' => 'En Az',
      'max' => 'En Fazla',
      'translation' => 'Çeviri',
      'previewSize' => 'Önizleme Boyutu',
      'listPreviewSize' => 'Preview Size in List View',
      'noEmptyString' => 'Boş dize değerine izin verilmez',
      'defaultType' => 'Varsayılan Tip',
      'seeMoreDisabled' => 'Yazı Kesmeyi Pasif Bırak',
      'cutHeight' => 'Cut Height (px)',
      'entityList' => 'Varlık Listesi',
      'isSorted' => 'Sıralama (alfabetik)',
      'audited' => 'Denetlendi',
      'trim' => 'Kırp',
      'height' => 'Yükseklik (px)',
      'minHeight' => 'En Az Yükseklik (px)',
      'provider' => 'Sağlayıcı',
      'typeList' => 'Tip Listesi',
      'rows' => 'Maksimum satır sayısı',
      'lengthOfCut' => 'Kesme Uzunluğu',
      'sourceList' => 'Kaynak Listesi',
      'prefix' => 'Prefix',
      'nextNumber' => 'Sonraki Sayı',
      'padLength' => 'Tampon Uzunluğu',
      'disableFormatting' => 'Formatlamayı Devre Dışı Bırak',
      'dynamicLogicVisible' => 'Alanı görünür kılan şartlar',
      'dynamicLogicReadOnly' => 'Alanı salt okunur yapan şartlar',
      'dynamicLogicRequired' => 'Alanı zorunlu yapan şartlar',
      'dynamicLogicOptions' => 'Koşullu seçenekler',
      'dynamicLogicInvalid' => 'Conditions making field invalid',
      'dynamicLogicReadOnlySaved' => 'Saved state conditions making field read-only',
      'probabilityMap' => 'Sahne Olasılığı (%)',
      'notActualOptions' => 'Not Actual Options',
      'activeOptions' => 'Active Options',
      'readOnly' => 'Salt okunur',
      'readOnlyAfterCreate' => 'Oluşturulduktan Sonra Salt Okunur',
      'preview' => 'Preview',
      'attachmentField' => 'Attachment Field',
      'maxFileSize' => 'Maksimum Dosya Boyutu (Mb)',
      'isPersonalData' => 'Kişisel veri mi?',
      'useIframe' => 'Iframa Kullan',
      'useNumericFormat' => 'Rakam Kullanın',
      'strip' => 'Şerit',
      'minuteStep' => 'Dakikalık adım',
      'inlineEditDisabled' => 'Satır İçi Düzenlemeyi Devre Dışı Bırak',
      'allowCustomOptions' => 'Özel Seçeneklere İzin Ver',
      'displayAsLabel' => 'Etiket olarak göster',
      'displayAsList' => 'Liste Olarak Göster',
      'labelType' => 'Label Type',
      'maxCount' => 'Maksimum Ürün Sayısı',
      'accept' => 'Kabul',
      'viewMap' => 'View Map Button',
      'codeType' => 'Kod Tipi',
      'lastChar' => 'Son Karakter',
      'onlyDefaultCurrency' => 'Only default currency',
      'decimal' => 'ondalık',
      'displayRawText' => 'Sade metni görüntüle (işaretleme yok)',
      'conversionDisabled' => 'Disable Conversion',
      'decimalPlaces' => 'Decimal Places',
      'pattern' => 'Pattern',
      'globalRestrictions' => 'Global Restrictions',
      'copyToClipboard' => 'Panoya kopyala düğmesi',
      'createButton' => 'Oluştırma Düğmesi',
      'autocompleteOnEmpty' => 'Girişte otomatik tamamlama',
      'relateOnImport' => 'İçe Aktarmayla İlgili',
      'aclScope' => 'ACL Scope',
      'onlyAdmin' => 'Only for Admin',
      'notStorable' => 'Not Storable'
    ],
    'strings' => [
      'rebuildRequired' => 'Rebuild is required'
    ],
    'messages' => [
      'cacheIsDisabled' => 'Cache is disabled, the application will run slow. Enable cache in the [settings](#Admin/settings).',
      'formulaFunctions' => 'More functions can be found in [documentation]({documentationUrl}).',
      'rebuildRequired' => 'You need to run rebuild from CLI.',
      'upgradeVersion' => 'EspoCRM, **{versiyon}** sürümüne yükseltilecektir. Bu biraz zaman alabileceğinden lütfen sabırlı olun.',
      'upgradeDone' => 'EspoCRM **{version}** sürüme yükseltildi',
      'upgradeBackup' => 'Yükseltmeden önce EspoCRM dosyalarınızın ve verilerinizin yedeğini almanızı öneririz.',
      'thousandSeparatorEqualsDecimalMark' => 'Binlik ayırıcı karakter, ondalık nokta karakteriyle aynı olamaz.',
      'userHasNoEmailAddress' => 'Kullanıcının email adresi yok.',
      'selectEntityType' => 'Soldaki menüden birim türünü seçin.',
      'selectUpgradePackage' => 'Yükseltme paketini seçin',
      'downloadUpgradePackage' => 'Güncelleme pakedi şurada {url}.',
      'selectLayout' => 'Gerekli yerleşim düzenini sol menüden seçin ve düzenleyin.',
      'selectExtensionPackage' => 'Eklenti pakedini seçiniz',
      'extensionInstalled' => '{name} {version} eklentisi başarıyla kuruldu.',
      'installExtension' => '{name} {version} eklentisi kurulum için hazır.',
      'cronIsDisabled' => 'Cron is disabled, the application is not fully functional. Enable cron in the [settings](#Admin/settings).',
      'cronIsNotConfigured' => 'Zamanlanmış görevler çalışmıyor. Bu nedenle gelen epostalar, bildirimler ve hatırlatıcılar devredışı kalacak. Crontab düzenlemeleri için lütfen şu adresi ziyaret edin. (https://www.espocrm.com/documentation/administration/server-configuration/#user-content-setup-a-crontab)',
      'newVersionIsAvailable' => 'New EspoCRM version {latestVersion} is available. Please follow the [instructions](https://www.espocrm.com/documentation/administration/upgrading/) to upgrade your instance.',
      'newExtensionVersionIsAvailable' => 'Yeni {extensionName} sürümü {latestVersion} kullanıma sunuldu.',
      'uninstallConfirmation' => 'Eklentiyi kaldırmak istediğinizden emin misiniz?',
      'upgradeInfo' => 'Check the [documentation]({url}) about how to upgrade your EspoCRM instance.',
      'upgradeRecommendation' => 'Bu şekilde yükseltme yapılması önerilmez. CLI\'den yükseltme yapmak daha iyidir.'
    ],
    'descriptions' => [
      'settings' => 'Uygulamanın sistem ayarları.',
      'scheduledJob' => 'Zamanlayıcı tarafından gerçekleştirilmiş işler.',
      'jobs' => 'İşler arka planda görevleri yürütür.',
      'upgrade' => 'EspoCRM\'i yükselt.',
      'clearCache' => 'Tüm uygulama önbelleğini temizle.',
      'rebuild' => 'Sunucuyu onar ve önbelleği temizle.',
      'users' => 'Kullanıcı yönetimi.',
      'teams' => 'Takım yönetimi.',
      'roles' => 'Görev yönetimi.',
      'portals' => 'Portal yönetimi.',
      'portalRoles' => 'Portal rolleri.',
      'portalUsers' => 'Portal kullanıcısı.',
      'outboundEmails' => 'Giden epostalar için SMTP ayarları.',
      'groupEmailAccounts' => 'Grup IMAP hesapları. Eposta alma ve konuya dair eposta',
      'personalEmailAccounts' => 'Kullanıcıların eposta hesapları.',
      'emailTemplates' => 'Giden eposta şablonları.',
      'import' => 'CSV dosyasından veri aktar.',
      'layoutManager' => 'Yerleşimleri düzenle (liste, detay, düzen, arama, toplu güncelleme).',
      'entityManager' => 'Özel varlıklar oluşturun ve düzenleyin. Alanları ve ilişkileri yönetin.',
      'userInterface' => 'Kullanıcı arayüzünü ayarla.',
      'authTokens' => 'IP adresi ve son erişim tarihine göre doğrulanmış oturumlar.',
      'authentication' => 'Giriş doğrulama ayarları.',
      'currency' => 'Döviz ayarları ve kurlar.',
      'extensions' => 'Eklentileri kur/sil.',
      'integrations' => 'Üçüncü parti entegrasyon servisleri.',
      'notifications' => 'Uygulama içi ve eposta bildirimi ayarları.',
      'inboundEmails' => 'IMAP hesaplarını grupla. Eposta içe aktarımı ve dizinleme.',
      'emailFilters' => 'Belirtilen filtreyle eşleşen eposta iletileri içe aktarılmaz.',
      'groupEmailFolders' => 'Email folders shared for teams.',
      'actionHistory' => 'Kullanıcı eylemleri kütüğü',
      'labelManager' => 'Uygulama etiketlerini düzenle',
      'templateManager' => 'Mesaj şablonlarını özelleştirin.',
      'authLog' => 'Portal girişi geçmişi.',
      'appLog' => 'Application log.',
      'appSecrets' => 'Store sensitive information like API keys, passwords, and other secrets.',
      'leadCapture' => 'Web-to-Lead için API giriş noktaları.',
      'attachments' => 'Sistemde depolanan tüm dosya ekleri.',
      'systemRequirements' => 'EspoCRM için Sistem Gereksinimleri.',
      'apiUsers' => 'Entegrasyon amacıyla kullanıcıları ayırın.',
      'webhooks' => 'Web Oltalarını Yönet.',
      'authenticationProviders' => 'Portaller için ilave kimlik doğrulama sağlayıcıları.',
      'emailAddresses' => 'Sistemde kayıtlı eposta adresleri.',
      'phoneNumbers' => 'Tüm telefon numaraları sistemde kayıtlıdır.',
      'dashboardTemplates' => 'Kullanıcılara kontrol panellerini dağıtın.',
      'layoutSets' => 'Ekiplere ve portallere atanabilecek düzen koleksiyonlar.',
      'workingTimeCalendars' => 'Çalışma takvimi.',
      'jobsSettings' => 'Job processing settings. Jobs execute tasks in the background.',
      'sms' => 'SMS Ayarları.',
      'pdfTemplates' => 'PDF\'ye yazdırmak için şablonlar.',
      'formulaSandbox' => 'Formül komut dosyalarını yazın ve test edin.',
      'addressCountries' => 'Countries available for address fields.',
      'oAuthProviders' => 'OAuth providers for integrations.'
    ],
    'keywords' => [
      'settings' => 'system',
      'userInterface' => 'ui,theme,tabs,logo,dashboard',
      'authentication' => 'password,security,ldap',
      'scheduledJob' => 'cron,jobs',
      'integrations' => 'google,maps,google maps',
      'authLog' => 'log,history',
      'authTokens' => 'history,access,log',
      'entityManager' => 'fields,relations,relationships',
      'templateManager' => 'notifications',
      'jobs' => 'cron',
      'labelManager' => 'language,translation',
      'appSecrets' => 'key,keys,password',
      'leadCapture' => 'web forms'
    ],
    'options' => [
      'previewSize' => [
        '' => 'Default',
        'x-small' => 'Çok Küçük',
        'small' => 'Küçük',
        'medium' => 'Orta',
        'large' => 'Büyük'
      ],
      'labelType' => [
        'state' => 'State',
        'regular' => 'Regular'
      ]
    ],
    'logicalOperators' => [
      'and' => 'VE',
      'or' => 'VEYA',
      'not' => 'hariç'
    ],
    'systemRequirements' => [
      'requiredPhpVersion' => 'PHP sürümü',
      'requiredMysqlVersion' => 'MySQL sürümü',
      'requiredMariadbVersion' => 'MariaDB sürümü',
      'requiredPostgresqlVersion' => 'PostgreSQL sürümü',
      'host' => 'Sunucu Adı',
      'dbname' => 'Veritabanı adı',
      'user' => 'Kullanıcı Adı',
      'writable' => 'Yazılabilir',
      'readable' => 'Okunabilir'
    ],
    'templates' => [
      'twoFactorCode' => '2FA Code',
      'accessInfo' => 'Adres Bilgisi',
      'accessInfoPortal' => 'Portaller için Erişim Bilgisi',
      'assignment' => 'Atama',
      'mention' => 'Bahsetmek',
      'noteEmailReceived' => 'Note about Received Email',
      'notePost' => 'Gönderi hakkında not',
      'notePostNoParent' => 'Note about Post (no Parent)',
      'noteStatus' => 'Durum Güncellemesi hakkında not',
      'passwordChangeLink' => 'Şifre Değiştirme Bağlantısı',
      'invitation' => 'Davet',
      'cancellation' => 'Cancellation',
      'reminder' => 'Ratırlatıcı'
    ],
    'tooltips' => [
      'tabUrl' => 'Can start with `#` to navigate to an application page.',
      'tabUrlAclScope' => 'The tab will be available for users who have access to the specified scope.'
    ]
  ],
  'ApiUser' => [
    'labels' => [
      'Create ApiUser' => 'API Kullanıcısı Oluştur'
    ]
  ],
  'AppLogRecord' => [
    'fields' => [
      'message' => 'Message',
      'code' => 'Code',
      'level' => 'Level',
      'exceptionClass' => 'Exception Class',
      'file' => 'File',
      'line' => 'Line',
      'requestMethod' => 'Request Method',
      'requestResourcePath' => 'Request Resource Path'
    ],
    'presetFilters' => [
      'errors' => 'Errors'
    ]
  ],
  'AppSecret' => [
    'labels' => [
      'Create AppSecret' => 'Create Secret'
    ],
    'fields' => [
      'value' => 'Value'
    ],
    'tooltips' => [
      'name' => 'Allowed characters:
* `[a-z]`
* `[A-Z]`
* `[0-9]`
* `_`'
    ]
  ],
  'Attachment' => [
    'fields' => [
      'role' => 'Rol',
      'related' => 'İlgili',
      'file' => 'Dosya',
      'type' => 'Tip',
      'field' => 'Alan',
      'sourceId' => 'Kaynak Kimliği',
      'storage' => 'Depolama',
      'size' => 'Boyut (bytes)',
      'isBeingUploaded' => 'Is Being Uploaded'
    ],
    'options' => [
      'role' => [
        'Attachment' => 'Ek',
        'Inline Attachment' => 'Satır İçi Ek',
        'Import File' => 'İçeri al',
        'Export File' => 'Dışarı Çıkart',
        'Mail Merge' => 'Posta Birleştirme',
        'Mass Pdf' => 'Toplu PDF'
      ]
    ],
    'insertFromSourceLabels' => [
      'Document' => 'Döküman ekle'
    ],
    'presetFilters' => [
      'orphan' => 'Sahipsiz'
    ]
  ],
  'AuthLogRecord' => [
    'fields' => [
      'username' => 'Kullanıcı Adı',
      'ipAddress' => 'IP Adresi',
      'requestTime' => 'İstek Zamanı',
      'createdAt' => 'İstek Sahibi',
      'isDenied' => 'Is Denied',
      'denialReason' => 'Reddetme Nedeni',
      'portal' => 'Pano',
      'user' => 'Kullanıcı',
      'authToken' => 'Auth Token Created',
      'requestUrl' => 'İstenen URL',
      'requestMethod' => 'İstek Şekli',
      'authTokenIsActive' => 'Kimlik Doğrulama Etkin',
      'authenticationMethod' => 'Kimlik Doğrulama Yöntemi'
    ],
    'links' => [
      'authToken' => 'Kimlik Doğrulama Oluşturuldu',
      'user' => 'Kullanıcı',
      'portal' => 'Pano',
      'actionHistoryRecords' => 'Olay Geçmişi'
    ],
    'presetFilters' => [
      'denied' => 'Reddedildi',
      'accepted' => 'Kabul edildi'
    ],
    'options' => [
      'denialReason' => [
        'CREDENTIALS' => 'Geçersiz kimlik bilgileri',
        'WRONG_CODE' => 'Wrong code',
        'INACTIVE_USER' => 'Pasif kullanıcı',
        'IS_PORTAL_USER' => 'Portal kullanıcısı',
        'IS_NOT_PORTAL_USER' => 'Portal kullanıcısı değil',
        'USER_IS_NOT_IN_PORTAL' => 'Bu kullanıcı portalle ilgili değil',
        'IS_SYSTEM_USER' => 'Is system user',
        'FORBIDDEN' => 'Forbidden'
      ]
    ]
  ],
  'AuthToken' => [
    'fields' => [
      'user' => 'Kullanıcı',
      'ipAddress' => 'IP Adresi',
      'lastAccess' => 'Son Erişim Tarihi',
      'createdAt' => 'Giriş Tarihi',
      'isActive' => 'Etkin mi?',
      'portal' => 'Portal'
    ],
    'links' => [
      'actionHistoryRecords' => 'Eylem Tarihçesi'
    ],
    'presetFilters' => [
      'active' => 'Etkin',
      'inactive' => 'Pasif'
    ],
    'labels' => [
      'Set Inactive' => 'Pasif Yap'
    ],
    'massActions' => [
      'setInactive' => 'Pasif Yap'
    ]
  ],
  'AuthenticationProvider' => [
    'fields' => [
      'method' => 'Yöntem'
    ],
    'labels' => [
      'Create AuthenticationProvider' => 'Sağlayıcı Oluştur'
    ]
  ],
  'Currency' => [
    'names' => [
      'AED' => 'United Arab Emirates Dirhem',
      'AFN' => 'Afghan Afghani',
      'ALL' => 'Albanian Lek',
      'AMD' => 'Ermeni Dram',
      'ANG' => 'Hollanda Antilleri Güldeni',
      'AOA' => 'Angola Kvanzası',
      'ARS' => 'Arjantin Pesosu',
      'AUD' => 'Avustralya Dollar',
      'AWG' => 'Aruba Florini',
      'AZN' => 'Azerbaycan Manat',
      'BAM' => 'Bosna-Hersek Konvertibl Markası',
      'BBD' => 'Barbados Doları',
      'BDT' => 'Bangladeş Taka',
      'BGN' => 'Bulgar Leva',
      'BHD' => 'Bahreyn Dinarı',
      'BIF' => 'Burundi Frangı',
      'BMD' => 'Bermuda Doları',
      'BND' => 'Brunei Doları',
      'BOB' => 'Bolivya Bolivyanosu',
      'BOV' => 'Bolivya Mvdol',
      'BRL' => 'Brezilya Reali',
      'BSD' => 'Bahama Doları',
      'BTN' => 'Bhutan Ngultrumu',
      'BWP' => 'Botsvana Pulası',
      'BYN' => 'Belarus Rublesi',
      'BZD' => 'Belize Doları',
      'CAD' => 'Kanada Doları',
      'CDF' => 'Kongo Frangı',
      'CHE' => 'WIR Euro',
      'CHF' => 'İsviçre Frangı',
      'CHW' => 'WIR Franc',
      'CLF' => 'Chilean Unit of Account (UF)',
      'CLP' => 'Chilean Peso',
      'CNH' => 'Chinese Yuan (offshore)',
      'CNY' => 'Chinese Yuan',
      'COP' => 'Colombian Peso',
      'COU' => 'Colombian Real Value Unit',
      'CRC' => 'Costa Rican Colón',
      'CUC' => 'Cuban Convertible Peso',
      'CUP' => 'Cuban Peso',
      'CVE' => 'Cape Verdean Escudo',
      'CZK' => 'Czech Koruna',
      'DJF' => 'Djiboutian Franc',
      'DKK' => 'Danish Krone',
      'DOP' => 'Dominican Peso',
      'DZD' => 'Algerian Dinar',
      'EGP' => 'Egyptian Pound',
      'ERN' => 'Eritrean Nakfa',
      'ETB' => 'Ethiopian Birr',
      'EUR' => 'Euro',
      'FJD' => 'Fiji Doları',
      'FKP' => 'Falkland Adaları Lirası',
      'GBP' => 'İngiliz Sterlini',
      'GEL' => 'Gürcü Larisi',
      'GHS' => 'Gana Sedisi',
      'GIP' => 'Cebelitarık Sterlini',
      'GMD' => 'Gambiya Dalasisi',
      'GNF' => 'Gine Frangı',
      'GTQ' => 'Guatemala Quetzal',
      'GYD' => 'Guyana Doları',
      'HKD' => 'Hong Kong Doları',
      'HNL' => 'Honduras Lempirası',
      'HRK' => 'Hırvat Kunası',
      'HTG' => 'Haiti Gourde',
      'HUF' => 'Macar forinti',
      'IDR' => 'Endonezya Rupiahı',
      'ILS' => 'İsrail Yeni Şekeli',
      'INR' => 'Hint rupisi',
      'IQD' => 'Irak Dinarı',
      'IRR' => 'Iranian Rial',
      'ISK' => 'Icelandic Króna',
      'JMD' => 'Jamaican Dollar',
      'JOD' => 'Jordanian Dinar',
      'JPY' => 'Japanese Yen',
      'KES' => 'Kenyan Shilling',
      'KGS' => 'Kyrgystani Som',
      'KHR' => 'Cambodian Riel',
      'KMF' => 'Comorian Franc',
      'KPW' => 'North Korean Won',
      'KRW' => 'South Korean Won',
      'KWD' => 'Kuwaiti Dinar',
      'KYD' => 'Cayman Islands Dollar',
      'KZT' => 'Kazakhstani Tenge',
      'LAK' => 'Laotian Kip',
      'LBP' => 'Lebanese Pound',
      'LKR' => 'Sri Lankan Rupee',
      'LRD' => 'Liberian Dollar',
      'LSL' => 'Lesotho Loti',
      'LYD' => 'Libyan Dinar',
      'MAD' => 'Fas Dirhemi',
      'MDL' => 'Moldova Leyi',
      'MGA' => 'Madagaskar Ariarisi',
      'MKD' => 'Makedon Dinarı',
      'MMK' => 'Myanmar Kyatı',
      'MNT' => 'Moğol Tugriki',
      'MOP' => 'Makao Patakası',
      'MRO' => 'Moritanya Ouguiyası',
      'MUR' => 'Mauritius Rupisi',
      'MWK' => 'Malavi Kvaçası',
      'MXN' => 'Meksika Pesosu',
      'MXV' => 'Meksika Yatırım Birimi',
      'MYR' => 'Malezya Ringgiti',
      'MZN' => 'Mozambikli Metical',
      'NAD' => 'Namibya Doları',
      'NGN' => 'Nigerian Nairası',
      'NIO' => 'Nikaragua Kordobası',
      'NOK' => 'Norveç Kronu',
      'NPR' => 'Nepal Rupisi',
      'NZD' => 'Yeni Zellanda Doları',
      'OMR' => 'Umman Riyali',
      'PAB' => 'Panama Balboası',
      'PEN' => 'Peru Güneşi',
      'PGK' => 'Papua Yeni Gine Çin',
      'PHP' => 'Filipin Piso',
      'PKR' => 'Pakistan Rupisi',
      'PLN' => 'Polonya Zlotisi',
      'PYG' => 'Paraguay Guaranisi',
      'QAR' => 'Katar Riyali',
      'RON' => 'Rumen Leyi',
      'RSD' => 'Sırp Dinarı',
      'RUB' => 'Rus Rublesi',
      'RWF' => 'Ruanda Frangı',
      'SAR' => 'Suudi Arabistan Riyali',
      'SBD' => 'Solomon Adaları Doları',
      'SCR' => 'Seyşeller Rupisi',
      'SDG' => 'Sudan Lirası',
      'SEK' => 'İsveç Kronu',
      'SGD' => 'Singapur doları',
      'SHP' => 'St. Helena Pound',
      'SLL' => 'Sierra Leone Leone',
      'SOS' => 'Somali Şilini',
      'SRD' => 'Surinam Doları',
      'SSP' => 'Güney Sudan Lirası',
      'STN' => 'São Tomé & Príncipe Dobra (2018)',
      'SYP' => 'Suriye Lirası',
      'SZL' => 'Svazi Lilangeni',
      'SVC' => 'Salvador kolonu',
      'THB' => 'Tayland Bahtı',
      'TJS' => 'Tajikistani Somoni',
      'TND' => 'Tunus Dinarı',
      'TOP' => 'Tonga Pa\'angası',
      'TRY' => 'Türk Lirası',
      'TTD' => 'Trinidad ve Tobago Doları',
      'TWD' => 'Yeni Tayvan Doları',
      'TZS' => 'Tanzanian Shilling',
      'UAH' => 'Ukrainian Hryvnia',
      'UGX' => 'Ugandan Shilling',
      'USD' => 'US Dollar',
      'USN' => 'US Dollar (Next day)',
      'UYI' => 'Uruguayan Peso (Indexed Units)',
      'UYU' => 'Uruguayan Peso',
      'UZS' => 'Uzbekistani Som',
      'VEF' => 'Venezuelan Bolívar',
      'VND' => 'Vietnamese Dong',
      'VUV' => 'Vanuatu Vatu',
      'WST' => 'Samoan Tala',
      'XAF' => 'Central African CFA Franc',
      'XCD' => 'East Caribbean Dollar',
      'XOF' => 'West African CFA Franc',
      'XPF' => 'CFP Franc',
      'YER' => 'Yemeni Rial',
      'ZAR' => 'South African Rand',
      'ZMW' => 'Zambian Kwacha',
      'ZWL' => 'Zimbabwe Dollar'
    ]
  ],
  'DashboardTemplate' => [
    'fields' => [
      'layout' => 'Düzen',
      'append' => 'Append (don\'t remove user\'s tabs)'
    ],
    'links' => [],
    'labels' => [
      'Create DashboardTemplate' => 'Şablon Oluştur',
      'Deploy to Users' => 'Kullanıcılara Dağıt',
      'Deploy to Team' => 'Takımlara Dağıt'
    ]
  ],
  'DashletOptions' => [
    'fields' => [
      'title' => 'Başlık',
      'dateFrom' => 'Başlangıç Tarih',
      'dateTo' => 'Bitiş Tarih',
      'autorefreshInterval' => 'Sürekli-Tazeleme Aralığı',
      'displayRecords' => 'Kayıtları Göster',
      'isDoubleHeight' => 'Yükseklik 2x',
      'mode' => 'Mod',
      'enabledScopeList' => 'Görüntülenecek Olan',
      'users' => 'Kullanıcılar',
      'entityType' => 'Varlık Tipi',
      'primaryFilter' => 'Birincil Filtre',
      'boolFilterList' => 'Ek Filtreler',
      'sortBy' => 'Sırala (alan)',
      'sortDirection' => 'Sırala (yön)',
      'expandedLayout' => 'Yerleşim',
      'skipOwn' => 'Don\'t show own records',
      'url' => 'UTL',
      'dateFilter' => 'Tarih Filtresi',
      'text' => 'Metin',
      'folder' => 'Klasör',
      'includeShared' => 'Include Shared',
      'team' => 'Team',
      'futureDays' => 'Sonraki X Gün',
      'useLastStage' => 'Son ulaşılan aşamaya göre gruplandır'
    ],
    'options' => [
      'mode' => [
        'agendaWeek' => 'Hafta (ajanda)',
        'basicWeek' => 'Hafta',
        'month' => 'Ay',
        'basicDay' => 'Gün',
        'agendaDay' => 'Gün (ajanda)',
        'timeline' => 'Zaman çizelgesi'
      ],
      'sortDirection' => [
        'asc' => 'Ascending',
        'desc' => 'Descending'
      ]
    ],
    'messages' => [
      'selectEntityType' => 'Gösterge paneli ayarlarından varlık tipini seçin'
    ],
    'tooltips' => [
      'skipOwn' => 'Actions made by your user account won\'t be displayed.'
    ],
    'otherFields' => [
      'soft' => 'Soft Color',
      'small' => 'Small Font'
    ]
  ],
  'DynamicLogic' => [
    'labels' => [
      'Field' => 'Alan'
    ],
    'options' => [
      'operators' => [
        'equals' => 'Eşittir',
        'notEquals' => 'eşit değil',
        'greaterThan' => 'büyük',
        'lessThan' => 'küçük',
        'greaterThanOrEquals' => 'Büyüktür Veya Eşittir',
        'lessThanOrEquals' => 'Küçüktür Veya Eşittir',
        'in' => ' İçinde',
        'notIn' => 'dışında',
        'inPast' => 'Geçmişte',
        'inFuture' => 'Gelecekte',
        'isToday' => 'Bugün',
        'isTrue' => 'Doğru',
        'isFalse' => 'Yanlış',
        'isEmpty' => 'Boş',
        'isNotEmpty' => 'Boş değil',
        'contains' => 'İçeren',
        'notContains' => 'İçermez',
        'has' => 'İçeren',
        'notHas' => 'İçermez',
        'startsWith' => 'Starts With',
        'endsWith' => 'Ends With',
        'matches' => 'Matches (reg exp)'
      ]
    ]
  ],
  'Email' => [
    'fields' => [
      'name' => 'Ad (Konu)',
      'parent' => 'Üst seçenek',
      'status' => 'Durum',
      'dateSent' => 'Gönderilen Tarih',
      'from' => 'Kimden',
      'to' => 'Kime',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'replyTo' => 'Cevapla',
      'replyToString' => 'Cevapla (Seri)',
      'personStringData' => 'Person String Data',
      'isHtml' => 'HTML',
      'body' => 'Mesaj',
      'bodyPlain' => 'Body (Plain)',
      'subject' => 'Konu',
      'attachments' => 'Dosyalar',
      'selectTemplate' => 'Şablonu Seçin',
      'fromEmailAddress' => 'Kimden (Kişi)',
      'emailAddress' => 'Eposta Adresi',
      'deliveryDate' => 'Teslim Tarih',
      'account' => 'Firma',
      'users' => 'Kullanıcılar',
      'replied' => 'Cevaplandı',
      'replies' => 'Cevaplar',
      'isRead' => 'Okundu',
      'isNotRead' => 'Okunmadı',
      'isImportant' => 'Önemli',
      'isReplied' => 'Yanıtlandı',
      'isNotReplied' => 'Yanıtlanmadı',
      'isUsers' => 'Kullanıcı',
      'isUsersSent' => 'Is User\'s Sent',
      'inTrash' => 'Çöpte',
      'inArchive' => 'In Archive',
      'folder' => 'Klasör',
      'inboundEmails' => 'Grup Hesapları',
      'emailAccounts' => 'Kişisel Hesaplar',
      'hasAttachment' => 'Eki Olan',
      'assignedUsers' => 'Atanmış Kişi',
      'sentBy' => 'Gönderen (Kullanıcı)',
      'toEmailAddresses' => 'Gönderilecek Eposta Adresi',
      'ccEmailAddresses' => 'CC Eposta Adresi',
      'bccEmailAddresses' => 'BCC Eposta Adresi',
      'replyToEmailAddresses' => 'Eposta Adreslerine Yanıtla',
      'messageId' => 'Mesaj Kimliği',
      'messageIdInternal' => 'Mesaj Kimliği (Dahili)',
      'folderId' => 'Klasör Kimliği',
      'folderString' => 'Folder',
      'fromName' => 'Kimden',
      'fromString' => 'Başlangıç Değeri',
      'fromAddress' => 'Kimden',
      'replyToName' => 'Yanıtlanan Kişi',
      'replyToAddress' => 'Yanıtlanan Adres',
      'isSystem' => 'Sistem mi',
      'icsContents' => 'ICS Contents',
      'icsEventData' => 'ICS Event Data',
      'icsEventUid' => 'ICS Event UID',
      'createdEvent' => 'Created Event',
      'event' => 'Etkinlik',
      'icsEventDateStart' => 'ICS Event Date Start',
      'groupFolder' => 'Grup Klasörü',
      'groupStatusFolder' => 'Group Status Folder',
      'sendAt' => 'Send At',
      'tasks' => 'Görev'
    ],
    'links' => [
      'replied' => 'Cevaplandı',
      'replies' => 'Cevaplar',
      'inboundEmails' => 'Grup Hesapları',
      'emailAccounts' => 'Kişisel Hesaplar',
      'assignedUsers' => 'Atanmış Kullanıcılar',
      'sentBy' => 'Gönderen',
      'attachments' => 'Ekler',
      'fromEmailAddress' => 'Kimden',
      'toEmailAddresses' => 'Eposta Adreslerine',
      'ccEmailAddresses' => 'Eposta Adreslerine CC',
      'bccEmailAddresses' => 'Eposta Adreslerine BCC',
      'replyToEmailAddresses' => 'Eposta Adreslerine Yanıtla',
      'createdEvent' => 'Created Event',
      'groupFolder' => 'Grup Klasörü'
    ],
    'options' => [
      'status' => [
        'Draft' => 'Taslak',
        'Sending' => 'Gönderiliyor',
        'Sent' => 'Gönderildi',
        'Archived' => 'Arşivlendi',
        'Received' => 'Alındı',
        'Failed' => 'Başarısız Oldu'
      ],
      'groupStatusFolder' => [
        'Archive' => 'Archive',
        'Trash' => 'Trash'
      ]
    ],
    'labels' => [
      'Create Email' => 'Eposta Arşivle',
      'Archive Email' => 'Eposta Arşivle',
      'Import EML' => 'Import EML',
      'Compose' => 'Yeni Eposta',
      'Reply' => 'Cevapla',
      'Reply to All' => 'Tümünü Cevapla',
      'Forward' => 'İlet',
      'Insert Field' => 'Insert Field',
      'Original message' => 'Orijinal Mesaj',
      'Forwarded message' => 'İletilmiş mesaj',
      'Email Accounts' => 'Kişisel Eposta Hesapları',
      'Inbound Emails' => 'Grup Eposta Hesapları',
      'Email Templates' => 'Eposta Taslakları',
      'Send Test Email' => 'Test Eposta Gönder',
      'Send' => 'Gönder',
      'Email Address' => 'Eposta Adresi',
      'Mark Read' => 'Okundu olarak İşaretle',
      'Sending...' => 'Gönderiliyor...',
      'Save Draft' => 'Taslağı Kaydet',
      'Mark all as read' => 'Tümünü okundu işaretle',
      'Show Plain Text' => 'Düz Metin Göster',
      'Mark as Important' => 'Önemli olarak işaretle',
      'Unmark Importance' => 'Önemli işaretini kaldır',
      'Move to Trash' => 'Çöpe At',
      'Retrieve from Trash' => 'Çöpten Al',
      'Move to Folder' => 'Klasöre taşı',
      'Moved to Archive' => 'Moved to Archive',
      'No Records Moved' => 'No Records Moved',
      'Filters' => 'Filtreler',
      'Folders' => 'Klasörler',
      'Group Folders' => 'Grup Klasörü',
      'No Subject' => 'No Subject',
      'View Users' => 'Kullanıcıları Görüntüle',
      'Event' => 'Etkinlik',
      'View Attachments' => 'View Attachments',
      'Moved to Trash' => 'Moved to Trash',
      'Retrieved from Trash' => 'Retrieved from Trash',
      'Schedule Send' => 'Schedule Send',
      'Create Lead' => 'Potansiyel Oluştur',
      'Create Contact' => 'Kişi oluştur',
      'Add to Contact' => 'Kişilere Ekle',
      'Add to Lead' => 'Potansiyellere Ekle',
      'Create Task' => 'Görev oluştur',
      'Create Case' => 'Dosya Oluştur'
    ],
    'strings' => [
      'sendingFailed' => 'Email sending failed',
      'group' => 'Group'
    ],
    'messages' => [
      'confirmSend' => 'Send the email?',
      'couldNotSentScheduledEmail' => 'Could not send scheduled [email]({link})',
      'notEditAccess' => 'No edit access to email.',
      'groupFolderNoAccess' => 'No access to group folder.',
      'groupMoveOutNoEditAccess' => 'Cannot move out from group folder. No edit access to email.',
      'groupMoveToNoEditAccess' => 'Cannot move to group folder. No edit access to email.',
      'groupMoveToTrashNoEditAccess' => 'Cannot move email from group folder to trash. No edit access to email.',
      'groupMoveToArchiveNoEditAccess' => 'Cannot move from group folder to Archive. No edit access to email.',
      'alreadyImported' => 'The [email]({link}) already exists in the system.',
      'invalidCredentials' => 'Geçersiz kimlik bilgileri.',
      'unknownError' => 'Bilinmeyen hata.',
      'recipientAddressRejected' => 'Alıcı adresi reddedildi.',
      'noSmtpSetup' => 'SMTP ayarlanmadı: {link}',
      'testEmailSent' => 'Test eposta gönderilmiştir',
      'emailSent' => 'Eposta gönderildi',
      'savedAsDraft' => 'Taslak olarak kayıt edildi',
      'sendConfirm' => 'Send the email?',
      'removeSelectedRecordsConfirmation' => 'Are you sure you want to remove selected emails?

They will be removed for other users too.',
      'removeRecordConfirmation' => 'Are you sure you want to remove the email?

It will be removed for other users too.',
      'confirmInsertTemplate' => 'Eposta içeriği kaybolacak. Şablona eklemek istermisiniz?'
    ],
    'presetFilters' => [
      'sent' => 'Gönderildi',
      'archived' => 'Arşivlendi',
      'inbox' => 'Gelen Kutusu',
      'drafts' => 'Taslaklar',
      'trash' => 'Çöp',
      'archive' => 'Archive',
      'important' => 'Önemli'
    ],
    'actions' => [
      'moveToArchive' => 'Archive'
    ],
    'massActions' => [
      'markAsRead' => 'Okundu İşaretle',
      'markAsNotRead' => 'Okunmadı İşaretle',
      'markAsImportant' => 'Önemli olarak işaretle',
      'markAsNotImportant' => 'Önemli işaretini kaldır',
      'moveToTrash' => 'Çöpe At',
      'moveToFolder' => 'Klasöre taşı',
      'moveToArchive' => 'Archive',
      'retrieveFromTrash' => 'Çöp Kutusu\'ndan geri getir'
    ],
    'otherFields' => [
      'file' => 'File'
    ]
  ],
  'EmailAccount' => [
    'fields' => [
      'name' => 'Ad',
      'status' => 'Durum',
      'host' => 'Sunucu',
      'username' => 'Kullanıcı Adı',
      'password' => 'Şifre',
      'port' => 'Bağlantı Noktası',
      'monitoredFolders' => 'İzlenen Klasörler',
      'security' => 'Security',
      'fetchSince' => 'İtibaren Getir',
      'emailAddress' => 'Eposta Adresi',
      'sentFolder' => 'Gönderilenler Klasörü',
      'storeSentEmails' => 'Gönderilen Epostaları Sakla',
      'keepFetchedEmailsUnread' => 'Getirilen Epostaları Okunmadı Olarak Tut',
      'emailFolder' => 'Klasöre Koy',
      'connectedAt' => 'Connected At',
      'useImap' => 'Epostaları Al',
      'useSmtp' => 'SMTP kullan',
      'smtpHost' => 'SMTP Sunucusu',
      'smtpPort' => 'SMTP Bağlantı Noktası',
      'smtpAuth' => 'SMTP Auth',
      'smtpSecurity' => 'SMTP Güvenliği',
      'smtpAuthMechanism' => 'SMTP Kimlik Doğrulama Mekanizması',
      'smtpUsername' => 'SMTP Kullanıcı Adı',
      'smtpPassword' => 'SMTP şifresi'
    ],
    'links' => [
      'filters' => 'Filtreler',
      'emails' => 'Epostalar'
    ],
    'options' => [
      'status' => [
        'Active' => 'Etkin',
        'Inactive' => 'Pasif'
      ],
      'smtpAuthMechanism' => [
        'plain' => 'DÜZ',
        'login' => 'GİRİŞ',
        'crammd5' => 'CRAM-MD5'
      ],
      'smtpSecurity' => [
        'SSL' => 'SSL/TLS',
        'TLS' => 'STARTTLS'
      ],
      'security' => [
        'SSL' => 'SSL/TLS',
        'TLS' => 'STARTTLS'
      ]
    ],
    'labels' => [
      'Create EmailAccount' => 'Eposta Hesabı Oluştur',
      'IMAP' => 'IMAP',
      'Main' => 'Anasayfa',
      'Test Connection' => 'Bağlantıyı Test Et',
      'Send Test Email' => 'Test epostası gönder',
      'SMTP' => 'SMTP'
    ],
    'presetFilters' => [
      'active' => 'Active'
    ],
    'messages' => [
      'couldNotConnectToImap' => 'IMAP Sunucusuna Bağlanılamıyor',
      'connectionIsOk' => 'Bağlantı Tamam',
      'imapNotConnected' => 'Could not connect to [IMAP account](#EmailAccount/view/{id}).'
    ],
    'tooltips' => [
      'useSmtp' => 'The ability to send emails.',
      'emailAddress' => 'The user record (assigned user) should have the same email address to be able to use this email account for sending.',
      'monitoredFolders' => 'Harici bir e-posta istemcisinden gönderilen e-postaları senkronize etmek için bir \'Gönderilmiş\' klasörü ekleyebilirsiniz.',
      'storeSentEmails' => 'Gönderilen e-postalar IMAP sunucusunda saklanır. Eposta Adresi alanına, adres epostalarının gönderilmesi gerekir.'
    ]
  ],
  'EmailAddress' => [
    'labels' => [
      'Primary' => 'Birincil',
      'Opted Out' => 'Pasif Bırakıldı',
      'Invalid' => 'Geçersiz'
    ],
    'fields' => [
      'optOut' => 'Opted Out',
      'invalid' => 'Invalid',
      'lower' => 'Lower-case Name'
    ],
    'presetFilters' => [
      'orphan' => 'Orphan'
    ]
  ],
  'EmailFilter' => [
    'fields' => [
      'from' => 'Kimden',
      'to' => 'Kime',
      'subject' => 'Konu',
      'bodyContains' => 'Mesaj İçeriği',
      'bodyContainsAll' => 'Body Contains All',
      'action' => 'Eylem',
      'isGlobal' => 'Küresel mi',
      'emailFolder' => 'Klasör',
      'groupEmailFolder' => 'Grup Eposta Klasörü',
      'markAsRead' => 'Okundu olarak işaretle',
      'skipNotification' => 'Skip Notification'
    ],
    'links' => [
      'emailFolder' => 'Klasör',
      'groupEmailFolder' => 'Grup Eposta Klasörü'
    ],
    'labels' => [
      'Create EmailFilter' => 'Eposta Filtresi Oluştur',
      'Emails' => 'Epostalar'
    ],
    'options' => [
      'action' => [
        'None' => 'None',
        'Skip' => 'Yoksay',
        'Move to Folder' => 'Klasöre Yaz',
        'Move to Group Folder' => 'Put in Group Folder'
      ]
    ],
    'tooltips' => [
      'name' => 'Filtreye açıklayıcı bir ad verin.',
      'subject' => 'Use a wildcard *: 

 * `text*` – starts with text,
 * `*text*` – contains text,
 * `*text` – ends with text.',
      'bodyContains' => 'E-postanın gövdesi belirtilen kelimeleri veya cümleleri içerir.',
      'bodyContainsAll' => 'An email body contains all specified words or phrases.',
      'from' => 'Belirtilen adreslere eposta gönderilir. İhtiyaç yok ise boş bırakın. Joker karakter de kullanabilirsiniz *.',
      'to' => 'Belirtilen adrese gönderilen epostalar. Gerekirse boş bırakın. Joker karakteri * kullanabilirsiniz.',
      'isGlobal' => 'Bu filtre, sisteme gelen tüm e-postalara uygulanır.'
    ]
  ],
  'EmailFolder' => [
    'fields' => [
      'skipNotifications' => 'Bildirimleri Atla'
    ],
    'labels' => [
      'Create EmailFolder' => 'Klasör oluşturun',
      'Manage Folders' => 'Klasörleri Yönet',
      'Emails' => 'Epostalar'
    ]
  ],
  'EmailTemplate' => [
    'fields' => [
      'name' => 'Ad',
      'status' => 'Durum',
      'isHtml' => 'HTML',
      'body' => 'Mesaj',
      'subject' => 'Konu',
      'attachments' => 'Dosya Ekle',
      'oneOff' => 'Bir defalık',
      'category' => 'Sınıf',
      'insertField' => 'Placeholders'
    ],
    'links' => [],
    'labels' => [
      'Create EmailTemplate' => 'Eposta Şablonu Oluştur',
      'Info' => 'Bilgi',
      'Available placeholders' => 'Kullanılabilir yer tutucular'
    ],
    'messages' => [
      'infoText' => 'Available placeholders:

{optOutUrl} &#8211; URL for an unsubscribe link;

{optOutLink} &#8211; an unsubscribe link.'
    ],
    'tooltips' => [
      'oneOff' => 'Taslağı sadece bir defa kullanacaksanız işaretleyiniz. Ör. toplu posta için'
    ],
    'presetFilters' => [
      'actual' => 'Güncel'
    ],
    'placeholderTexts' => [
      'today' => 'Günün tarihi',
      'now' => 'Şu anki tarih & saat',
      'currentYear' => 'Geçerli Yıl',
      'optOutUrl' => 'URL for an unsubscribe link',
      'optOutLink' => 'abonelikten çıkma bağlantısı'
    ]
  ],
  'EmailTemplateCategory' => [
    'labels' => [
      'Create EmailTemplateCategory' => 'Sınıf Oluştur',
      'Manage Categories' => 'Sınıf Yönetimi',
      'EmailTemplates' => 'Eposta Şablonları'
    ],
    'fields' => [
      'order' => 'Sipariş',
      'childList' => 'Alt Liste'
    ],
    'links' => [
      'emailTemplates' => 'Eposta şablonları'
    ]
  ],
  'EntityManager' => [
    'labels' => [
      'Fields' => 'Alanlar',
      'Relationships' => 'İlişkiler',
      'Layouts' => 'Layouts',
      'Schedule' => 'Takvim',
      'Log' => 'Kütük',
      'Formula' => 'formül',
      'Parameters' => 'Parameters'
    ],
    'fields' => [
      'name' => 'Ad',
      'type' => 'Tip',
      'labelSingular' => 'Tekil Etiket',
      'labelPlural' => 'Çoğul Etiket',
      'stream' => 'Akış',
      'label' => 'Etiket',
      'linkType' => 'Bağlantı Tipi',
      'entity' => 'Entity',
      'entityForeign' => 'Harici Değerler',
      'linkForeign' => 'Harici Bağlantı',
      'link' => 'Bağlantı',
      'labelForeign' => 'Harici Etiket',
      'sortBy' => 'Ön Tanımlı Sıralama (alan)',
      'sortDirection' => 'Ön Tanımlı Sıralama (yön)',
      'relationName' => 'Orta Tablo İsmi',
      'linkMultipleField' => 'Birden Çok Alanı Bağla',
      'linkMultipleFieldForeign' => 'Birden Çok Alana Harici Bağlantı',
      'disabled' => 'Devre dışı',
      'textFilterFields' => 'Metin Filtre Alanları',
      'audited' => 'Denetlenmiş',
      'auditedForeign' => 'Dış Kaynak Denetimden Geçmiş',
      'statusField' => 'Durum Alanı',
      'beforeSaveCustomScript' => 'Özel Komut Dosyasını Kaydetmeden Önce',
      'beforeSaveApiScript' => 'API Before Save Script',
      'color' => 'Renk',
      'kanbanViewMode' => 'Kanban Görünümü',
      'kanbanStatusIgnoreList' => 'Kanban görünümünde yok sayılan gruplar',
      'iconClass' => 'Simge',
      'countDisabled' => 'Disable record count',
      'fullTextSearch' => 'Tam Metin Arama',
      'parentEntityTypeList' => 'Parent Entity Types',
      'foreignLinkEntityTypeList' => 'Foreign Links',
      'optimisticConcurrencyControl' => 'Optimistic concurrency control',
      'preserveAuditLog' => 'Preserve Audit Log',
      'updateDuplicateCheck' => 'Güncellemede yinelenen kontrolü',
      'duplicateCheckFieldList' => 'Tekrarlanan onay alanları',
      'stars' => 'Stars',
      'layout' => 'Düzen',
      'selectFilter' => 'Select Filter',
      'author' => 'Yazar',
      'module' => 'Modül',
      'version' => 'Sürüm',
      'primaryFilters' => 'Primary Filters',
      'assignedUsers' => 'Multiple Assigned Users',
      'collaborators' => 'Collaborators',
      'aclContactLink' => 'ACL Contact Link',
      'aclAccountLink' => 'ACL Account Link',
      'activityStatusList' => 'Etkinlik Durumları',
      'historyStatusList' => 'Geçmiş Durumları',
      'completedStatusList' => 'Tamamlanmış Durumlar',
      'canceledStatusList' => 'İptal Edilen Durumlar'
    ],
    'options' => [
      'type' => [
        '' => 'Yok',
        'Base' => 'Temel',
        'Person' => 'Kişi',
        'CategoryTree' => 'Kategori Ağacı',
        'Event' => 'Etkinlik',
        'BasePlus' => 'Taban Artı',
        'Company' => 'Şirket'
      ],
      'linkType' => [
        'manyToMany' => 'Çoktan Çok\'a',
        'oneToMany' => 'Tekten Çok\'a',
        'manyToOne' => 'Çoktan Tek\'e',
        'oneToOneRight' => 'One-to-One Right',
        'oneToOneLeft' => 'One-to-One Left',
        'parentToChildren' => 'Ebeveyn - çocuk',
        'childrenToParent' => 'Çocuk - ebeveyn'
      ],
      'sortDirection' => [
        'asc' => 'Artan',
        'desc' => 'Azalan'
      ],
      'module' => [
        'Custom' => 'Custom'
      ]
    ],
    'messages' => [
      'urlHashCopiedToClipboard' => 'A URL fragment for the *{name}* filter is copied to the clipboard. You can add it to the navbar.',
      'confirmRemoveLink' => '*{link}* ilişkisini kaldırmak istediğinizden emin misiniz?',
      'nameIsAlreadyUsed' => '\'{name}\' adı zaten kullanılıyor.',
      'nameIsNotAllowed' => '\'{name}\' ismine izin verilmiyor.',
      'nameIsTooLong' => 'Ad çok uzun.',
      'confirmRemove' => 'Are you sure you want to remove the entity type from the system?',
      'entityCreated' => 'Varlık oluşturuldu',
      'linkAlreadyExists' => 'İsim çakışmalarını bağla.',
      'linkConflict' => 'İsim çakışması: aynı isimde bağlantı veya alan zaten var',
      'beforeSaveCustomScript' => 'A script called every time before an entity is saved. Use for setting calculated fields.',
      'beforeSaveApiScript' => 'A script called on create and update API requests before an entity is saved. Use for custom validation and duplicate checking.'
    ],
    'tooltips' => [
      'aclContactLink' => 'The link with Contact to use when applying access control for portal users.',
      'aclAccountLink' => 'The link with Account to use when applying access control for portal users.',
      'collaborators' => 'The ability to share records with specific users.',
      'assignedUsers' => 'The ability to assign multiple users to a record.

Note that after enabling the parameter, existing assigned users won\'t be transferred to the new *Assigned Users* field.',
      'duplicateCheckFieldList' => 'Which fields to check when performing checking for duplicates.',
      'updateDuplicateCheck' => 'Bir kaydı güncellerken kopyaları kontrol edin.',
      'optimisticConcurrencyControl' => 'Prevents writing conflicts.',
      'preserveAuditLog' => 'Disables cleanup of the audit log. This parameter is applicable only if Stream is disabled. As if Stream is enabled, audit log records are not being deleted.',
      'stars' => 'The ability to star records. Stars can be used by users to bookmark records.',
      'statusField' => 'Bu alanın güncellemeleri akış halinde kaydedildi.',
      'textFilterFields' => 'Metin aramasında kullanılan alanlar.',
      'stream' => 'Varlığın bir Akışı olup olmadığı.',
      'disabled' => 'Sisteminizde bu öğeye ihtiyacınız yok mu kontrol edin.',
      'linkAudited' => 'Ilgili kayıt oluşturma ve varolan kayıt ile bağlantı Akış kaydedilecektir.',
      'linkMultipleField' => 'Bağlantı Çoklu alan ilişkileri düzenlemenin kullanışlı bir yoludur. Çok sayıda ilgili kayıt olabiliyorsa kullanmayın.',
      'linkSelectFilter' => 'A primary filter to apply by default when selecting a record.',
      'entityType' => 'Taban Artı - Etkinlikler, Geçmiş ve Görevler panellerine sahiptir. \\ N \\ nEvent - Takvim ve Etkinlikler panelinde kullanılabilir.',
      'countDisabled' => 'Total number won\'t be displayed on the list view. Can decrease loading time when the DB table is big.',
      'fullTextSearch' => 'Yeniden oluşturmanın çalıştırılması gerekiyor.',
      'linkParamReadOnly' => 'A read-only link cannot be edited via the *link* and *unlink* API requests. It won\'t be possible to relate and unrelate records via the relationship panel. It still possible to edit read-only links via link and link-multiple fields.',
      'activityStatusList' => 'Status values determining that an activity record should be displayed in the Activity panel and considered as actual.',
      'historyStatusList' => 'Status values determining that an activity record should be displayed in the History panel.',
      'completedStatusList' => 'Bir etkinliğin tamamlandığını belirleyen durum değerleri.',
      'canceledStatusList' => 'Status values determining that an activity is canceled and won\'t be taken into account in free/busy ranges.'
    ]
  ],
  'Export' => [
    'fields' => [
      'exportAllFields' => 'Tüm alanları dışa aktar',
      'fieldList' => 'Alan Listesi',
      'format' => 'Format',
      'status' => 'Status',
      'xlsxLite' => 'Hafif',
      'xlsxRecordLinks' => 'Bağlantıları Kaydet',
      'xlsxTitle' => 'Başlık'
    ],
    'options' => [
      'format' => [
        'csv' => 'CSV',
        'xlsx' => 'XLSX (Excel)'
      ],
      'status' => [
        'Pending' => 'Pending',
        'Running' => 'Running',
        'Success' => 'Success',
        'Failed' => 'Failed'
      ]
    ],
    'tooltips' => [
      'xlsxLite' => 'Consumes much less memory. Recommended if a big number of records is exported.',
      'xlsxTitle' => 'Print a title and current date in the header.'
    ],
    'messages' => [
      'exportProcessed' => 'Export has been processed. Download the [file]({url}).',
      'infoText' => 'The export is being processed in idle by cron. It can take some time to finish. Closing this modal dialog won\'t affect the execution process.'
    ]
  ],
  'Extension' => [
    'fields' => [
      'name' => 'Ad',
      'version' => 'Sürüm',
      'description' => 'Açıklama',
      'isInstalled' => 'Yüklendi',
      'checkVersionUrl' => 'Yeni sürüm kontrol URL\'i'
    ],
    'labels' => [
      'Uninstall' => 'Kaldır',
      'Install' => 'Yükle'
    ],
    'messages' => [
      'uninstalled' => '{name} eklentisi silindi',
      'fileExceedsMaxUploadSize' => 'The file size exceeds the max upload size {maxSize}. Consider increasing `post_max_size` or install the extension via CLI.'
    ]
  ],
  'ExternalAccount' => [
    'labels' => [
      'Connect' => 'Bağlan',
      'Disconnect' => 'Disconnect',
      'Disconnected' => 'Disconnected',
      'Connected' => 'Bağlandı'
    ],
    'help' => [],
    'messages' => [
      'externalAccountNoConnectDisabled' => 'External account for integration \'{integration}\' has been disabled due not being able to connect.'
    ]
  ],
  'FieldManager' => [
    'labels' => [
      'Dynamic Logic' => 'Dinamik Mantık',
      'Name' => 'Ad',
      'Label' => 'Etiket',
      'Type' => 'Tip',
      'View Details' => 'View Details'
    ],
    'options' => [
      'dateTimeDefault' => [
        '' => 'Hiçbiri',
        'javascript: return this.dateTime.getNow(1);' => 'Şimdi',
        'javascript: return this.dateTime.getNow(5);' => 'Şimdi (5dk)',
        'javascript: return this.dateTime.getNow(15);' => 'Şimdi (15dk)',
        'javascript: return this.dateTime.getNow(30);' => 'Şimdi (30dk)',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'hours\', 15);' => '+1 Saat',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'hours\', 15);' => '+2 Saat',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'hours\', 15);' => '+3 Saat',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'hours\', 15);' => '+4 Saat',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'hours\', 15);' => '+5 Saat',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'hours\', 15);' => '+6 Saat',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(7, \'hours\', 15);' => '+7 Saat',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(8, \'hours\', 15);' => '+8 Saat',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(9, \'hours\', 15);' => '+9 Saat',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(10, \'hours\', 15);' => '+10 Saat',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(11, \'hours\', 15);' => '+11 Saat',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(12, \'hours\', 15);' => '+12 Saat',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'days\', 15);' => '+1 Gün ',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'days\', 15);' => '+2 Gün',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'days\', 15);' => '+3 Gün',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'days\', 15);' => '+4 Gün',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'days\', 15);' => '+5 Gün',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'days\', 15);' => '+6 Gün',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'week\', 15);' => '+1 Hafta'
      ],
      'dateDefault' => [
        '' => 'Yok ',
        'javascript: return this.dateTime.getToday();' => 'Bugün',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'days\');' => '+1 Gün',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'days\');' => '+2 Gün',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'days\');' => '+3 Gün',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'days\');' => '+4 Gün',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'days\');' => '+5 Gün',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'days\');' => '+6 Gün',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'days\');' => '+7 Gün',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'days\');' => '+8 Gün',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'days\');' => '+9 Gün',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'days\');' => '+10 Gün',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'weeks\');' => '+1 Hafta',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'weeks\');' => '+2 Hafta',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'weeks\');' => '+3 Hafta',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'months\');' => '+1 Ay',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'months\');' => '+2 Ay',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'months\');' => '+3 Ay',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'months\');' => '+4 Ay',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'months\');' => '+5 Ay',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'months\');' => '+6 Ay',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'months\');' => '+7 Ay',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'months\');' => '+8 Ay',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'months\');' => '+9 Ay',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'months\');' => '+10 Ay',
        'javascript: return this.dateTime.getDateShiftedFromToday(11, \'months\');' => '+11 Ay',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'year\');' => '+1 Yıl'
      ],
      'barcodeType' => [
        'EAN13' => 'EAN-13',
        'EAN8' => 'EAN-8',
        'EAN5' => 'EAN-5',
        'EAN2' => 'EAN-2',
        'UPC' => 'UPC (A)',
        'UPCE' => 'UPC (E)',
        'pharmacode' => 'Pharmacode',
        'QRcode' => 'QR code'
      ],
      'globalRestrictions' => [
        'forbidden' => 'Forbidden',
        'internal' => 'Internal',
        'onlyAdmin' => 'Admin-only',
        'readOnly' => 'Read-only',
        'nonAdminReadOnly' => 'Non-admin read-only'
      ]
    ],
    'tooltips' => [
      'optionsReference' => 'Re-use options from another field.',
      'currencyDecimal' => 'Use the Decimal DB type. In the app, values will be represented as strings. Check this parameter if precision is required.',
      'cutHeight' => 'A text higher then a specified value will be cut with a \'show more\' button displayed.',
      'urlStrip' => 'Strip a protocol and a trailing slash.',
      'audited' => 'Güncellemeler akış olarak kaydedilecek.',
      'required' => 'Alan zorunlu olacak. Boş bırakılamaz.',
      'default' => 'Değer, oluşturulduğunda varsayılan olarak ayarlanır.',
      'min' => 'Min kabul edilebilir değer.',
      'max' => 'Maksimum kabul edilebilir değer.',
      'seeMoreDisabled' => 'Kontrol edilmediyse, uzun metinler kısaltılacaktır.',
      'lengthOfCut' => 'Metin ne kadar önce kesilebilir?',
      'maxLength' => 'Maksimum kabul edilebilir metin uzunluğu.',
      'before' => 'Tarih değeri belirtilen alanın tarih değerinden önce olmalıdır.',
      'after' => 'Tarih değeri, belirtilen alanın tarih değerinden sonra olmalıdır.',
      'readOnly' => 'Alan değeri kullanıcı tarafından belirlenemez. Ancak formülle hesaplanabilir.',
      'readOnlyAfterCreate' => 'The field value can be specified when creating a new record. After that, the field becomes read-only. It can still be calculated by formula.',
      'preview' => 'Show the preview button. Applicable if Markdown is enabled.',
      'fileAccept' => 'Which file types to accept. It\'s possible to add custom items.',
      'barcodeLastChar' => 'For EAN-13 type.',
      'maxFileSize' => 'Boş veya 0 ise limit yoktur.',
      'conversionDisabled' => 'The currency conversion action won\'t be applied to this field.',
      'pattern' => 'A regular expression to check a field value against. Define an expression or select a predefined one.',
      'options' => 'A list of possible values and their labels.',
      'optionsArray' => 'A list of possible values and their labels. If empty, the field will allow entering custom values.',
      'maxCount' => 'Maximum number of items allowed to be selected.',
      'displayAsList' => 'Each item in a new line.',
      'optionsVarchar' => 'A list of autocomplete values.',
      'linkReadOnly' => 'Field value can\'t be specified by user. But can be calculated by formula.

It will also disable the ability to create a related record from relationship panels.',
      'relateOnImport' => 'When importing with this field, it will automatically relate a record with a matching foreign record. Use this functionality only if the foreign field is considered as unique.'
    ],
    'fieldParts' => [
      'address' => [
        'street' => 'Sokak',
        'city' => 'Şehir',
        'state' => 'Bölge',
        'country' => 'Ülke',
        'postalCode' => 'Posta Kodu',
        'map' => 'Harita'
      ],
      'personName' => [
        'salutation' => 'Selamlama',
        'first' => 'İlk',
        'middle' => 'Middle',
        'last' => 'Son'
      ],
      'currency' => [
        'converted' => '(Çevrilmiş)',
        'currency' => '(Para birimi)'
      ],
      'datetimeOptional' => [
        'date' => 'Tarih'
      ]
    ],
    'fieldInfo' => [
      'varchar' => 'A single-line text.',
      'enum' => 'Selectbox, only one value can be selected.',
      'text' => 'A multiline text with markdown support.',
      'date' => 'Date w/o time.',
      'datetime' => 'Date and time',
      'currency' => 'A currency value. A float number with a currency code.',
      'int' => 'A whole number.',
      'float' => 'A number with a decimal part.',
      'bool' => 'A checkbox. Two possible values: true and false.',
      'multiEnum' => 'A list of values, multiple values can be selected. The list is ordered.',
      'checklist' => 'A list of checkboxes.',
      'array' => 'A list of values, similar to Multi-Enum field.',
      'address' => 'An address with street, city, state, postal code and country.',
      'url' => 'For storing links.',
      'urlMultiple' => 'Çoklu bağlantı.',
      'wysiwyg' => 'A text with HTML support.',
      'file' => 'For file uploading.',
      'image' => 'For image uploading.',
      'attachmentMultiple' => 'Allows to upload multiple files.',
      'number' => 'An auto-incrementing number of string type with a possible prefix and specific length.',
      'autoincrement' => 'A generated read-only auto-incrementing integer number.',
      'barcode' => 'A barcode. Can be printed to PDF.',
      'email' => 'Parametreleriyle birlikte bir dizi eposta adresi: Devre dışı bırakıldı, Geçersiz, Öncelikli.',
      'phone' => 'Parametreleriyle birlikte bir dizi telefon numarası: Tür, Devre Dışı Bırakılmış, Geçersiz, Öncelikli.',
      'foreign' => 'A field of a related record. Read-only.',
      'link' => 'A record related through Belongs-To (many-to-one or one-to-one) relationship.',
      'linkParent' => 'A record related through Belongs-To-Parent relationship. Can be of different entity types.',
      'linkMultiple' => 'A set of records related through Has-Many (many-to-many or one-to-many) relationship. Not all relationships have their link-multiple fields. Only those do, where Link-Multiple parameter(s) is enabled.'
    ],
    'messages' => [
      'fieldCreatedAddToLayouts' => 'Field has been created. Now, you can add it to [layouts]({link})',
      'confirmRemove' => 'Are you sure you want to remove the *{field}* field?

Field removal does not remove data from the database. Data from the database will be removed if you run hard rebuild.',
      'fieldNameIsNotAllowed' => '\'{field}\' alan adına izin verilmiyor.',
      'fieldAlreadyExists' => '\'{field}\' alanı \'{entityType}\' içinde zaten mevcut.',
      'linkWithSameNameAlreadyExists' => '\'{field}\' adlı bağlantı \'{entityType}\' içinde zaten mevcut.',
      'namingFieldLinkConflict' => 'Name \'{field}\' conflicts with link.'
    ],
    'otherFields' => [
      'attributes' => 'Attributes'
    ]
  ],
  'Formula' => [
    'labels' => [
      'Check Syntax' => 'Check Syntax',
      'Run' => 'Run'
    ],
    'fields' => [
      'target' => 'Target',
      'targetType' => 'Target Type',
      'script' => 'Script',
      'output' => 'Output',
      'error' => 'Error'
    ],
    'messages' => [
      'runSuccess' => 'Executed successfully.',
      'runError' => 'Error.',
      'checkSyntaxSuccess' => 'Syntax is correct.',
      'checkSyntaxError' => 'Syntax error.',
      'emptyScript' => 'Script is empty.'
    ],
    'tooltips' => [
      'output' => 'Print values with the function `output\\printLine`.'
    ]
  ],
  'Global' => [
    'scopeNames' => [
      'Note' => 'Note',
      'Email' => 'Eposta',
      'User' => 'Kullanıcı',
      'Team' => 'Takım',
      'Role' => 'Görev',
      'EmailTemplate' => 'Eposta Şablonu',
      'EmailTemplateCategory' => 'Eposta şablonları Sınıfları',
      'EmailAccount' => 'Kişisel Eposta Hesabı',
      'EmailAccountScope' => 'Kişisel Eposta Hesabı',
      'OutboundEmail' => 'Giden Eposta',
      'ScheduledJob' => 'Zamanlanmış İşler',
      'ExternalAccount' => 'Harici Hesap',
      'Extension' => 'Eklenti',
      'Dashboard' => 'Gösterge Paneli',
      'InboundEmail' => 'Gelen Eposta',
      'Stream' => 'Akış',
      'Import' => 'İçe Aktar',
      'ImportError' => 'Import Error',
      'Template' => 'Taslak',
      'Job' => 'Görev',
      'EmailFilter' => 'Eposta Filtresi',
      'Portal' => 'Portal',
      'PortalRole' => 'Portal Rolü',
      'Attachment' => 'Eklenti',
      'EmailFolder' => 'Eposta Klasörü',
      'GroupEmailFolder' => 'Grup Eposta Klasörü',
      'PortalUser' => 'Portal Kullanıcı',
      'ApiUser' => 'API Kullanıcısı',
      'ScheduledJobLogRecord' => 'Planlanmış İş Kütük Kaydı',
      'PasswordChangeRequest' => 'Şifre Değişim İsteği',
      'ActionHistoryRecord' => 'Eylem Tarihçesi Kaydı',
      'AuthToken' => 'Auth Token',
      'UniqueId' => 'Benzersiz ID',
      'LastViewed' => 'Son Görünenler',
      'Settings' => 'Ayarlar',
      'FieldManager' => 'Alan Yöneticisi',
      'Integration' => 'Entegrasyon',
      'LayoutManager' => 'Arayüz Yöneticisi',
      'EntityManager' => 'Varlık Yöneticisi',
      'Export' => 'Dışa Aktar',
      'DynamicLogic' => 'Dynamic Logic',
      'DashletOptions' => 'Pano Seçenekleri',
      'Admin' => 'Yönetici',
      'Global' => 'Genel',
      'Preferences' => 'Tercihler',
      'EmailAddress' => 'Eposta Adresi',
      'PhoneNumber' => 'Telefon Numarası',
      'AppLogRecord' => 'App Log Record',
      'AuthLogRecord' => 'Kimlik Doğrulama Kaydı',
      'AuthFailLogRecord' => 'Başarısız Kimlik Doğrulama Kaydı',
      'LeadCapture' => 'Potansiyel Müşteri Kaynağı',
      'LeadCaptureLogRecord' => 'Lead Capture Log Record',
      'ArrayValue' => 'Dizi Değeri',
      'DashboardTemplate' => 'Pano Şablonu',
      'Currency' => 'Currency',
      'LayoutSet' => 'Layout Set',
      'Webhook' => 'Web Oltası',
      'WebhookQueueItem' => 'Webhook Queue Item',
      'WebhookEventQueueItem' => 'Webhook Event Queue Item',
      'Mass Action' => 'Mass Action',
      'WorkingTimeCalendar' => 'Çalışma Süresi Takvimi',
      'WorkingTimeRange' => 'Working Time Exception',
      'AuthenticationProvider' => 'Kimlik Doğrulama Sağlayıcı',
      'GlobalStream' => 'Global Akış',
      'AddressCountry' => 'Address Country',
      'AppSecret' => 'App Secret',
      'OAuthProvider' => 'OAuth Provider',
      'OAuthAccount' => 'OAuth Account',
      'Account' => 'Hesap',
      'Contact' => 'Kişi',
      'Lead' => 'Potansiyeller',
      'Target' => 'Hedef',
      'Opportunity' => 'Fırsat',
      'Meeting' => 'Toplantı',
      'Calendar' => 'Takvim',
      'Call' => 'Arama',
      'Task' => 'Görev',
      'Case' => 'Dosya',
      'Document' => 'Belge',
      'DocumentFolder' => 'Doküman Klasörü',
      'Campaign' => 'Kampanya',
      'TargetList' => 'Hedef Liste',
      'MassEmail' => 'Toplu Eposta',
      'EmailQueueItem' => 'Eposta Kuyruğu Öğesi',
      'CampaignTrackingUrl' => 'İzleme URL\'i',
      'Activities' => 'Faaliyetler',
      'KnowledgeBaseArticle' => 'Bilgi Bankası Makalesi',
      'KnowledgeBaseCategory' => 'Bilgi Bankası Kategorisi',
      'CampaignLogRecord' => 'Kampanya Günlüğü Kaydı',
      'TargetListCategory' => 'Target List Category'
    ],
    'scopeNamesPlural' => [
      'Note' => 'Notes',
      'Email' => 'Epostalar',
      'User' => 'Kullanıcılar',
      'Team' => 'Takımlar',
      'Role' => 'Görevler',
      'EmailTemplate' => 'Eposta Şablonları',
      'EmailTemplateCategory' => 'Eposta şablonları Sınıfları',
      'EmailAccount' => 'Kişisel Eposta Hesapları',
      'EmailAccountScope' => 'Kişisel Eposta Hesapları',
      'OutboundEmail' => 'Giden Epostalar',
      'ScheduledJob' => 'Planlanmış İşler',
      'ExternalAccount' => 'Harici Hesaplar',
      'Extension' => 'Eklentiler',
      'Dashboard' => 'Gösterge Paneli',
      'InboundEmail' => 'Gelen Epostalar',
      'EmailAddress' => 'Eposta Adresleri',
      'PhoneNumber' => 'Telefon Numaraları',
      'Stream' => 'Akış',
      'Import' => 'Al',
      'ImportError' => 'Import Errors',
      'Template' => 'Taslaklar',
      'Job' => 'Görevler',
      'EmailFilter' => 'Eposta Filtreleri',
      'Portal' => 'Portaller',
      'PortalRole' => 'Portal Rolleri',
      'Attachment' => 'Ekler',
      'EmailFolder' => 'Eposta Klasörleri',
      'GroupEmailFolder' => 'Grup Eposta Klasörleri',
      'PortalUser' => 'Portal Kullanıcıları',
      'ApiUser' => 'API Kullanıcıları',
      'ScheduledJobLogRecord' => 'Planlanmış İş Kütük Kayıtları',
      'PasswordChangeRequest' => 'Şifre Değişim İstekleri',
      'ActionHistoryRecord' => 'Eylem Tarihçesi',
      'AuthToken' => 'Auth Tokens',
      'UniqueId' => 'Benzersiz ID\'ler',
      'LastViewed' => 'Son Görünenler',
      'AppLogRecord' => 'App Log',
      'AuthLogRecord' => 'Yetkilendirme Geçmişi',
      'AuthFailLogRecord' => 'Başarısız Kimlik Doğrulama Günlüğü',
      'LeadCapture' => 'Potansiyel Müşteri',
      'LeadCaptureLogRecord' => 'Potansiyel Müşteri Günlüğü',
      'ArrayValue' => 'Dizi Değeri',
      'DashboardTemplate' => 'Pano Şablonları',
      'Currency' => 'Currency',
      'LayoutSet' => 'Düzen Setleri',
      'Webhook' => 'Web Oltası',
      'WebhookQueueItem' => 'Webhook Queue Items',
      'WebhookEventQueueItem' => 'Webhook Event Queue Items',
      'WorkingTimeCalendar' => 'Çalışma Süresi Takvimleri',
      'WorkingTimeRange' => 'Working Time Exceptions',
      'AuthenticationProvider' => 'Kimlik Doğrulama Sağlayıcıları',
      'GlobalStream' => 'Global Akış',
      'AddressCountry' => 'Address Countries',
      'AppSecret' => 'App Secrets',
      'OAuthProvider' => 'OAuth Providers',
      'OAuthAccount' => 'OAuth Accounts',
      'Account' => 'Firmalar',
      'Contact' => 'Kişiler',
      'Lead' => 'Potansiyeller',
      'Target' => 'Hedefler',
      'Opportunity' => 'Fırsatlar',
      'Meeting' => 'Toplantılar',
      'Calendar' => 'Takvim',
      'Call' => 'Aramalar',
      'Task' => 'Görevler',
      'Case' => 'Olaylar',
      'Document' => 'Belgeler',
      'DocumentFolder' => 'Doküman Klasörleri',
      'Campaign' => 'Kampanyalar',
      'TargetList' => 'Hedef Listeler',
      'MassEmail' => 'Toplu Eposta',
      'EmailQueueItem' => 'Eposta Kuyruğu Öğeleri',
      'CampaignTrackingUrl' => 'İzleme URL\'leri',
      'Activities' => 'Faaliyetler',
      'KnowledgeBaseArticle' => 'Bilgi bankası',
      'KnowledgeBaseCategory' => 'Bilgi Tabanı Kategorileri',
      'CampaignLogRecord' => 'Kampanya Günlük Kayıtları',
      'TargetListCategory' => 'Target List Categories'
    ],
    'labels' => [
      'Previous Page' => 'Previous Page',
      'Next Page' => 'Next Page',
      'First Page' => 'First Page',
      'Last Page' => 'Last Page',
      'Page' => 'Page',
      'Sort' => 'Sort',
      'Column Resize' => 'Column Resize',
      'Misc' => 'Tür',
      'General' => 'General',
      'Merge' => 'Birleştir',
      'None' => 'Hiç',
      'Home' => 'Ana Sayfa',
      'by' => 'tarafından',
      'Proceed' => 'Proceed',
      'Saved' => 'Kaydedildi',
      'Error' => 'Hata',
      'Select' => 'Seçim',
      'Not valid' => 'Geçerli Değil',
      'Please wait...' => 'Lütfen bekleyin...',
      'Please wait' => 'Lütfen bekleyin',
      'Attached' => 'Attached',
      'Loading...' => 'Yükleniyor...',
      'Uploading...' => 'Aktarılıyor...',
      'Sending...' => 'Gönderiliyor...',
      'Send' => 'Send',
      'Merged' => 'Birleştirildi',
      'Removed' => 'Silindi',
      'Posted' => 'Yayınlandı',
      'Linked' => 'Bağlantı Kuruldu',
      'Unlinked' => 'Bağlantı Kesildi',
      'Done' => 'Tamam',
      'Access denied' => 'Erişim engellendi',
      'Not found' => 'Bulunamadı',
      'Access' => 'Erişim',
      'Timeout' => 'Timeout',
      'No internet' => 'No internet',
      'Network error' => 'Network error',
      'Are you sure?' => 'Emin misiniz?',
      'Record has been removed' => 'Kayıt silindi',
      'Wrong username/password' => 'Yanlış kullanıcı adı/şifre',
      'Post cannot be empty' => 'Yorum alanı boş bırakılamaz',
      'Username can not be empty!' => 'Kullanıcı adı boş bırakılamaz!',
      'Cache is not enabled' => 'Önbellek etkin değil',
      'Cache has been cleared' => 'Önbellek temizlendi',
      'Rebuild has been done' => 'Onarım tamamlandı',
      'Return to Application' => 'Uygulamaya Geri Dön',
      'Modified' => 'Değiştirildi',
      'Created' => 'Oluşturuldu',
      'Create' => 'Oluştur',
      'create' => 'oluştur',
      'Scheduled' => 'Scheduled',
      'Overview' => 'Genel Bakış',
      'Details' => 'Detaylar',
      'Add Field' => 'Alan Ekle',
      'Add Dashlet' => 'Önizleme Alanı Ekle',
      'Filter' => 'Filtre',
      'Edit Dashboard' => 'Gösterge Tablosunu Düzenle',
      'Add' => 'Ekle',
      'Add Item' => 'Öğe Ekle',
      'Reset' => 'Sıfırla',
      'Menu' => 'Menü',
      'More' => 'Daha Fazla',
      'Search' => 'Arama',
      'Only My' => 'Sadece Benim',
      'Open' => 'Aç',
      'Admin' => 'Yönetici',
      'About' => 'Hakkında',
      'Refresh' => 'Yenile',
      'Remove' => 'Sil',
      'Restore' => 'Yenile',
      'Options' => 'Seçenekler',
      'Username' => 'Kullanıcı Adı',
      'Password' => 'Şifre',
      'Login' => 'Giriş',
      'Log Out' => 'Çıkış',
      'Log in' => 'Log in',
      'Log in as' => 'Log in as',
      'Sign in' => 'Sign in',
      'Preferences' => 'Tercihler',
      'State' => 'Semt',
      'Street' => 'Sokak',
      'Country' => 'Ülke',
      'City' => 'Şehir',
      'PostalCode' => 'Posta Kodu',
      'Star' => 'Star',
      'Unstar' => 'Unstar',
      'Starred' => 'Starred',
      'Followed' => 'Takip Ediliyor',
      'Follow' => 'Takip',
      'Followers' => 'Takipçiler',
      'Clear Local Cache' => 'Önbelleği Temizle',
      'Actions' => 'Hareketler',
      'Delete' => 'Sil',
      'Update' => 'Güncelle',
      'Save' => 'Kaydet',
      'Edit' => 'Düzenle',
      'View' => 'Görünüm',
      'Cancel' => 'İptal',
      'Apply' => 'Uygula',
      'Unlink' => 'Bağlantıyı Kes',
      'Mass Update' => 'Çoklu Güncelleme',
      'Export' => 'Dışa Aktar',
      'No Data' => 'Veri Yok',
      'No Access' => 'Erişim Yok',
      'All' => 'Tümü',
      'Active' => 'Etkin',
      'Inactive' => 'Pasif',
      'Write your comment here' => 'Yorumlarınızı buraya yazın',
      'Post' => 'Yayınla',
      'Stream' => 'Akış',
      'Show more' => 'Daha fazla göster',
      'Dashlet Options' => 'Önizleme Alanı Seçenekleri',
      'Full Form' => 'Formun Tamamı',
      'Insert' => 'Ekle',
      'Person' => 'Kişi',
      'First Name' => 'Adı',
      'Last Name' => 'Soyadı',
      'Middle Name' => 'Middle Name',
      'Original' => 'Orjinal',
      'You' => 'Siz',
      'you' => 'siz',
      'change' => 'değiştir',
      'Change' => 'Değiştir',
      'Primary' => 'Öncelikli',
      'Save Filter' => 'Filtreyi Kaydet',
      'Remove Filter' => 'Remove Filter',
      'Ready' => 'Ready',
      'Administration' => 'Yönetim',
      'Run Import' => 'Aktarmayı Başlat',
      'Duplicate' => 'Çoğalt',
      'Notifications' => 'Bildirimler',
      'Mark all read' => 'Tümünü okundu olarak işaretle',
      'See more' => 'Daha fazla göster',
      'Today' => 'Bugün',
      'Tomorrow' => 'Yarın',
      'Yesterday' => 'Dün',
      'Now' => 'Now',
      'Submit' => 'Gönder',
      'Close' => 'Kapat',
      'Yes' => 'Evet',
      'No' => 'Hayır',
      'Select All Results' => 'Tüm Sonuçları Seç',
      'Value' => 'Değer',
      'Current version' => 'Geçerli sürüm',
      'List View' => 'Liste Görünümü',
      'Tree View' => 'Ağaç Görünümü',
      'Unlink All' => 'Tüm Bağlantıları Kaldır',
      'Total' => 'Toplam',
      'Print' => 'Yazdır',
      'Print to PDF' => 'PDF\'e Yazdır',
      'Default' => 'Varsayılan',
      'Number' => 'Sayı',
      'From' => 'Kimden',
      'To' => 'Kime',
      'Create Post' => 'Gönderi Oluştur',
      'Previous Entry' => 'Önceki Varlık',
      'Next Entry' => 'Sonraki Varlık',
      'View List' => 'Listeyi Gör',
      'Attach File' => 'Dosya Ekle',
      'Skip' => 'Atla',
      'Attribute' => 'Özellik',
      'Function' => 'İşlevi',
      'Self-Assign' => 'Kendini Atama',
      'Self-Assigned' => 'Kendinden Atanmış',
      'Expand' => 'Genişlet',
      'Collapse' => 'Daralt',
      'Expanded' => 'Expanded',
      'Collapsed' => 'Collapsed',
      'Top Level' => 'Top Level',
      'New notifications' => 'Yeni Bildirimler',
      'Manage Categories' => 'Kategori Yönetimi',
      'Manage Folders' => 'Klasör Yönetimi',
      'Convert to' => 'Dönştür',
      'View Personal Data' => 'Kişisel verileri Görüntüle',
      'Personal Data' => 'Kişisel veri',
      'Erase' => 'Sil',
      'View Followers' => 'Klasörleri Görüntüle',
      'Convert Currency' => 'Convert Currency',
      'View on Map' => 'View on Map',
      'Preview' => 'Preview',
      'Move Over' => 'Kenara Taşı',
      'Up' => 'Up',
      'Save & Continue Editing' => 'Save & Continue Editing',
      'Save & New' => 'Save & New',
      'Field' => 'Field',
      'Fields' => 'Fields',
      'Resolution' => 'Resolution',
      'Resolve Conflict' => 'Resolve Conflict',
      'Download' => 'Download',
      'Global Search' => 'Global Search',
      'Navigation Panel' => 'Show Navigation Panel',
      'Copy to Clipboard' => 'Panoya kopyala',
      'Copied to clipboard' => 'Panoya kopyalandı',
      'Audit Log' => 'Audit Log',
      'View Audit Log' => 'View Audit Log',
      'View User Access' => 'View User Access',
      'Reacted' => 'Reacted',
      'Reaction Removed' => 'Reaction Removed',
      'Reactions' => 'Reactions',
      'Schedule' => 'Zamanlama',
      'Log' => 'Kayıt',
      'Scheduler' => 'Scheduler',
      'Create InboundEmail' => 'Gelen Eposta Oluştur',
      'Activities' => 'Aktiviteler',
      'History' => 'Geçmiş',
      'Attendees' => 'Katılımcılar',
      'Schedule Meeting' => 'Toplantı Ayarla',
      'Schedule Call' => 'Arama Ayarla',
      'Compose Email' => 'Eposta Gönder',
      'Log Meeting' => 'Günlük Toplantı',
      'Log Call' => 'Günlük Arama',
      'Archive Email' => 'Epostayı Arşivle',
      'Create Task' => 'Görev Oluştur',
      'Tasks' => 'Görevler'
    ],
    'messages' => [
      'pleaseWait' => 'Lütfen bekleyiniz...',
      'loading' => 'Yükleniyor...',
      'saving' => 'Kayıt Ediliyor...',
      'confirmLeaveOutMessage' => 'Form\'dan ayrılmak istediğinize eminmisiniz?',
      'notModified' => 'Kayıdı değiştirmediniz',
      'duplicate' => 'Oluşturduğunuz kayıt zaten mevcut olabilir',
      'dropToAttach' => 'Iliştirmek için bırak',
      'pageNumberIsOutOfBound' => 'Page number is out of bound',
      'fieldUrlExceedsMaxLength' => 'Encoded URL exceeds max length of {maxLength}',
      'fieldNotMatchingPattern' => '{field} does not match the pattern `{pattern}`',
      'fieldNotMatchingPattern$noBadCharacters' => '{field} contains not allowed characters',
      'fieldNotMatchingPattern$noAsciiSpecialCharacters' => '{field} should not contain ASCII special characters',
      'fieldNotMatchingPattern$latinLetters' => '{field} can contain only latin letters',
      'fieldNotMatchingPattern$latinLettersDigits' => '{field} can contain only latin letters and digits',
      'fieldNotMatchingPattern$latinLettersDigitsWhitespace' => '{field} can contain only latin letters, digits and whitespace',
      'fieldNotMatchingPattern$latinLettersWhitespace' => '{field} can contain only latin letters and whitespace',
      'fieldNotMatchingPattern$digits' => '{field} can contain only digits',
      'fieldNotMatchingPattern$uriOptionalProtocol' => '{field} geçerli bir URL olmalıdır',
      'fieldNotMatchingPattern$phoneNumberLoose' => '{field} contains characters not allowed in a phone number',
      'fieldInvalid' => '{field} is invalid',
      'fieldIsRequired' => '{field} gerekli',
      'fieldPhoneInvalid' => '{field} is invalid',
      'fieldPhoneInvalidCode' => 'Geçersiz Ülke Kodu',
      'fieldPhoneTooShort' => '{field} çok kısa',
      'fieldPhoneTooLong' => '{field} çok uzun',
      'fieldPhoneInvalidCharacters' => 'Only digits, latin letters and characters `-+_@:#().` are allowed',
      'fieldPhoneExtensionTooLong' => 'Extension should not be longer than {maxLength}',
      'fieldShouldBeEmail' => '{field} geçerli bir email olmalı',
      'fieldShouldBeFloat' => '{field} geçerli bir sayı olmalı',
      'fieldShouldBeInt' => '{field} geçerli bir sayı olmalı',
      'fieldShouldBeNumber' => '{field} geçerli bir sayı olmalıdır',
      'fieldShouldBeDate' => '{field} geçerli bir tarih olmalı',
      'fieldShouldBeDatetime' => '{field} geçerli bir tarih/zaman olmalı',
      'fieldShouldAfter' => '{field} şu değerden sonra gelmeli: {otherField}',
      'fieldShouldBefore' => '{field} şu değerden önce gelmeli: {otherField}',
      'fieldShouldBeBetween' => '{field} şu iki değer arasında olmalı: {min} ve {max}',
      'fieldShouldBeLess' => '{field}, {value} değerinden büyük olmamalıdır',
      'fieldShouldBeGreater' => '{field}, {value} değerinden küçük olmamalıdır',
      'fieldBadPasswordConfirm' => '{field} düzgün bir şekilde onaylanmadı',
      'fieldMaxFileSizeError' => 'Dosya {max} Mb\'ı geçmemelidir',
      'fieldValueDuplicate' => 'Tekrarlanan değer',
      'fieldIsUploading' => 'Yükleme devam ediyor',
      'fieldExceedsMaxCount' => 'Count exceeds max allowed {maxCount}',
      'barcodeInvalid' => '{field} geçerli olmayan {type}',
      'arrayItemMaxLength' => 'Item shouldn\'t be longer than {max} characters',
      'arrayInputNotEmpty' => 'Item is entered but not added',
      'resetPreferencesDone' => 'Seçenekler ön değere döndürülmüştür',
      'confirmation' => 'Emin misiniz?',
      'unlinkAllConfirmation' => 'Tüm ilgili kayıtların bağlantısını kaldırmak istediğinize emin misiniz?',
      'resetPreferencesConfirmation' => 'Seçenekleri ön değerlere döndürmek istediğinize emin misiniz?',
      'removeRecordConfirmation' => 'Kaydı silmek istediğinize emin misiniz?',
      'unlinkRecordConfirmation' => 'Tüm ilgili kayıtların bağlantısını kaldırmak istediğinize emin misiniz?',
      'removeSelectedRecordsConfirmation' => 'Seçili kayıtları silmek istediğinize emin misiniz?',
      'unlinkSelectedRecordsConfirmation' => 'Seçilen kayıtların bağlantısını kaldırmak istediğinizden emin misiniz?',
      'massUpdateResult' => '{count} kayıt güncellendi',
      'massUpdateResultSingle' => '{count} kayıt güncellendi',
      'recalculateFormulaConfirmation' => 'Seçilen kayıtlar için formülü yeniden hesaplamak istediğinizden emin misiniz?',
      'noRecordsUpdated' => 'Hiç kayıt güncellenmedi',
      'massRemoveResult' => '{count} kayıt silindi',
      'massRemoveResultSingle' => '{count} kayıt silindi',
      'noRecordsRemoved' => 'Hiç bir kayıt silinmedi',
      'clickToRefresh' => 'Tazelemek için tıklayın',
      'writeYourCommentHere' => 'Yorumlarınızı buraya yazın',
      'writeMessageToUser' => '{user} kullanıcısına mesaj yaz',
      'writeMessageToSelf' => 'Akışınıza bir mesaj yazın',
      'typeAndPressEnter' => 'Yaz ve enter\'a bas',
      'checkForNewNotifications' => 'Yeni bildirimleri denetle',
      'checkForNewNotes' => 'Akış güncellemelerini kontrol et',
      'internalPost' => 'Gönderi, yalnızca dahili kullanıcılar tarafından görülecektir',
      'internalPostTitle' => 'Yazı sadece iç kullanıcılar tarafından görülür',
      'done' => 'Tamam',
      'notUpdated' => 'güncellenmedi',
      'confirmMassUpdate' => 'Are you sure you want to mass-update selected records?',
      'confirmMassFollow' => 'Seçilen kayıtları takip etmek istediğinizden emin misiniz?',
      'confirmMassUnfollow' => 'Seçilen kayıtların takibini kaldırmak istediğinizden emin misiniz?',
      'massFollowResult' => '{count} kayıtları şimdi izleniyor',
      'massUnfollowResult' => '{count} kayıtları şu an takip edilmiyor',
      'massFollowResultSingle' => '{count} kaydı şimdi takip edildi',
      'massUnfollowResultSingle' => '{count} kaydı şimdi takip edilmiyor',
      'massFollowZeroResult' => 'Hiçbir şey takip edilmedi',
      'massUnfollowZeroResult' => 'Hiçbir şey takip edilmedi',
      'erasePersonalDataConfirmation' => 'Checked fields will be erased permanently. Are you sure?',
      'maintenanceModeError' => 'Uygulama şu anda bakım modunda.',
      'maintenanceMode' => 'The application currently is in maintenance mode. Only admin users have access.

Maintenance mode can be disabled at Administration → Settings.',
      'resolveSaveConflict' => 'The record has been modified. You need to resolve the conflict before you can save the record.',
      'massPrintPdfMaxCountError' => '{maxCount} kayıttan fazlası yazdırılamaz.',
      'massActionProcessed' => 'Mass action has been processed.',
      'validationFailure' => 'Backend validation failure.

Field: `{field}`
Validation: `{type}`',
      'extensionLicenseInvalid' => 'Invalid \'{name}\' extension license.',
      'extensionLicenseExpired' => 'The \'{name}\' extension license subscription has expired.',
      'extensionLicenseSoftExpired' => 'The \'{name}\' extension license subscription has expired.',
      'confirmAppRefresh' => 'The application has been updated. It is recommended to refresh the page to ensure the proper functioning.',
      'loggedOutLeaveOut' => 'Çıkış yapıldı. Oturum etkin değil. Sayfa yenilendikten sonra kaydedilmemiş form verilerini kaybedebilirsiniz. Bir kopyasını almanız gerekebilir.',
      'noAccessToRecord' => 'Operation requires `{action}` access to record.',
      'noAccessToForeignRecord' => 'Operation requires `{action}` access to foreign record.',
      'noLinkAccess' => '\'{link}\' bağlantısı aracılığıyla {foreignEntityType} kaydıyla bağlantı kurulamıyor. Erişim yok.',
      'cannotUnrelateRequiredLink' => 'Gerekli bağlantının ilişkisi kaldırılamıyor.',
      'cannotRelateNonExisting' => 'Var olmayan {foreignEntityType} kaydıyla ilişkilendirilemez.',
      'cannotRelateForbidden' => 'Can\'t relate with forbidden {foreignEntityType} record. `{action}` access required.',
      'cannotRelateForbiddenLink' => '\'{link}\' bağlantısına erişim yok.',
      'cannotLinkAlreadyLinked' => 'Cannot link an already linked record.',
      'error404' => 'The url you requested can\'t be handled.',
      'error403' => 'You don\'t have access to this area.',
      'emptyMassUpdate' => 'Toplu Güncelleme için kullanılabilir alan yok.',
      'attemptIntervalFailure' => 'Belirli bir zaman aralığında bu işleme izin verilmez. Bir sonraki denemeden önce bir süre bekleyin.',
      'confirmRestoreFromAudit' => 'The previous values will be set in a form. Then you can save the record to restore the previous values.',
      'starsLimitExceeded' => 'The number of stars exceeded the limit.',
      'select2OrMoreRecords' => 'Select 2 or more records',
      'selectNotMoreThanNumberRecords' => 'Select not more than {number} records',
      'selectAtLeastOneRecord' => 'Select at least one record',
      'duplicateConflict' => 'A record already exists.',
      'cannotRemoveCategoryWithChildCategory' => 'Cannot remove a category that has a child category.',
      'cannotRemoveNotEmptyCategory' => 'Cannot remove a non-empty category.',
      'sameRecordIsAlreadyBeingEdited' => 'The record is already being edited.'
    ],
    'boolFilters' => [
      'onlyMy' => 'Sadece Ben',
      'onlyMyTeam' => 'Takımım',
      'followed' => 'Takip ediliyor',
      'shared' => 'Shared'
    ],
    'presetFilters' => [
      'followed' => 'Takip ediliyor',
      'all' => 'Tümü',
      'starred' => 'Starred'
    ],
    'massActions' => [
      'delete' => 'Sil',
      'remove' => 'Sil',
      'merge' => 'Birleştir',
      'update' => 'Update',
      'massUpdate' => 'Toplu Güncelleme',
      'unlink' => 'Bağlantıyı sil',
      'export' => 'Dışa Aktar',
      'follow' => 'Takip et',
      'unfollow' => 'Ayrılmak',
      'convertCurrency' => 'Para birimini dönüştür',
      'recalculateFormula' => 'Formülü yeniden hesapla',
      'printPdf' => 'PDF\'e yazdır'
    ],
    'fields' => [
      'name' => 'Ad',
      'firstName' => 'Ad',
      'lastName' => 'Soyadı',
      'middleName' => 'Middle Name',
      'salutationName' => 'Hitap',
      'assignedUser' => 'Atanmış Kullanıcı',
      'assignedUsers' => 'Atanmış Kullanıcılar',
      'collaborators' => 'Collaborators',
      'emailAddress' => 'Eposta',
      'emailAddressData' => 'Eposta Adres Verileri',
      'emailAddressIsOptedOut' => 'Eposta Adresi Devre Dışı Bırakıldı',
      'emailAddressIsInvalid' => 'Eposta Adresi Yanlış',
      'assignedUserName' => 'Atanmış Kişi Kullanıcı Adı',
      'teams' => 'Takımlar',
      'users' => 'Users',
      'createdAt' => 'Oluşturuldu',
      'modifiedAt' => 'Değiştirildi',
      'createdBy' => 'Tarafından Oluşturuldu',
      'modifiedBy' => 'Tarafından Değiştirildi:',
      'streamUpdatedAt' => 'Stream Updated At',
      'description' => 'Açıklama',
      'address' => 'Adres',
      'phoneNumber' => 'Telefon',
      'phoneNumberMobile' => 'Telefon (Mobil)',
      'phoneNumberHome' => 'Telefon (Ev)',
      'phoneNumberFax' => 'Telefon (Fax)',
      'phoneNumberOffice' => 'Telefon (Ofis)',
      'phoneNumberOther' => 'Telefon (Diğer)',
      'phoneNumberData' => 'Telefon Numarası Verileri',
      'phoneNumberIsOptedOut' => 'Telefon Numarası Devre Dışı Bırakıldı',
      'phoneNumberIsInvalid' => 'Phone Number is Invalid',
      'order' => 'Sipariş',
      'parent' => 'Ebeveyn',
      'children' => 'Çocuk',
      'id' => 'ID',
      'ids' => 'IDs',
      'type' => 'Tip',
      'names' => 'İsimler',
      'types' => 'Tipler',
      'targetListIsOptedOut' => 'Is Opted Out (Target List)',
      'childList' => 'Child List',
      'billingAddressCity' => 'Şehir',
      'billingAddressCountry' => 'Ülke',
      'billingAddressPostalCode' => 'Posta Kodu',
      'billingAddressState' => 'Semt',
      'billingAddressStreet' => 'Sokak',
      'billingAddressMap' => 'Harita',
      'addressCity' => 'Şehir',
      'addressStreet' => 'Sokak',
      'addressCountry' => 'Ülke',
      'addressState' => 'Semt',
      'addressPostalCode' => 'Posta Kodu',
      'addressMap' => 'Harita',
      'shippingAddressCity' => 'Şehir (Sevkiyat)',
      'shippingAddressStreet' => 'Sokak (Sevkiyat)',
      'shippingAddressCountry' => 'Ülke (Sevkiyat)',
      'shippingAddressState' => 'Bölge (Sevkiyat)',
      'shippingAddressPostalCode' => 'Posta Kodu (Sevkiyat)',
      'shippingAddressMap' => 'Harita (Sevkiyat)'
    ],
    'links' => [
      'assignedUser' => 'Atanmış Kullanıcı',
      'assignedUsers' => 'Assigned Users',
      'collaborators' => 'Collaborators',
      'createdBy' => 'Oluşturan',
      'modifiedBy' => 'Tarafından Güncellendi',
      'team' => 'Takım',
      'roles' => 'Roller',
      'teams' => 'Takımlar',
      'users' => 'Kullanıcılar',
      'parent' => 'Ebeveyn',
      'children' => 'Çocuk',
      'contacts' => 'Kişiler',
      'opportunities' => 'Fırsatlar',
      'leads' => 'Potansiyeller',
      'meetings' => 'Toplantılar',
      'calls' => 'Aramalar',
      'tasks' => 'Görevler',
      'emails' => 'Epostalar',
      'accounts' => 'Firmalar',
      'cases' => 'Olaylar',
      'documents' => 'Belgeler',
      'account' => 'Hesap',
      'opportunity' => 'Fırsat',
      'contact' => 'Kişi'
    ],
    'dashlets' => [
      'Stream' => 'Akış',
      'Emails' => 'Gelen Kutum',
      'Iframe' => 'Iframe',
      'Records' => 'Kayıt Listesi',
      'Memo' => 'Not',
      'Leads' => 'Potansiyellerim',
      'Opportunities' => 'Fırsatlarım',
      'Tasks' => 'Görevlerim',
      'Cases' => 'Olay Kayıtlarım',
      'Calendar' => 'Takvim',
      'Calls' => 'Çağrılarım',
      'Meetings' => 'Toplantılarım',
      'OpportunitiesByStage' => 'Aşamaya Göre Fırstalar',
      'OpportunitiesByLeadSource' => 'Potansiyel Kaynağına Göre Fırsatlar',
      'SalesByMonth' => 'Aylık Satışlar',
      'SalesPipeline' => 'Satış Öngörüleri',
      'Activities' => 'Faaliyetlerim'
    ],
    'notificationMessages' => [
      'assign' => '{entityType} {entity} size atandı',
      'emailReceived' => '{from} tarafından eposta alındı',
      'entityRemoved' => '{user} {entityType} {entity} sildi',
      'emailInbox' => '{user} added email {entity} to your inbox',
      'userPostReaction' => '{user} reacted to your {post}',
      'userPostInParentReaction' => '{user} reacted to your {post} in {entityType} {entity}',
      'eventAttendee' => '{user} added you to {entityType} {entity}'
    ],
    'streamMessages' => [
      'post' => '{user} {entityType} {entity} yayınladı',
      'attach' => '{user} {entityType} {entity}\'yi ekledi',
      'status' => '{user} {field} of {entityType} {entity} güncelledi',
      'update' => '{user} {entityType} {entity} güncelledi',
      'postTargetTeam' => '{user} {target} takımına yazdı',
      'postTargetTeams' => '{user} {target} takımlarına yazdı',
      'postTargetPortal' => '{user} {target} portaline yazdı',
      'postTargetPortals' => '{user} {target} portallerine yazdı',
      'postTarget' => '{user} {target}  yazdı',
      'postTargetYou' => '{user} size yazdı',
      'postTargetYouAndOthers' => '{user} {target} ve size yazdı',
      'postTargetAll' => '{user} herkese yazdı',
      'postTargetSelf' => '{user} kendi gönderdi',
      'postTargetSelfAndOthers' => '{user}, {target} alanına ve kendisine gönderdi',
      'mentionInPost' => '{user} {mentioned} de {entityType} {entity} bahsedildi',
      'mentionYouInPost' => '{user} {entityType} {entity} sizden bahsetti',
      'mentionInPostTarget' => '{user} paylaşımda bahsedildi {mentioned}',
      'mentionYouInPostTarget' => '{user} sizden {target} yazısında bahsetti',
      'mentionYouInPostTargetAll' => '{user} tümüne yazılmış yazıda sizden bahsetti',
      'mentionYouInPostTargetNoTarget' => '{user} yazıda sizden bahsetti',
      'create' => '{user} oluşturdu: {entityType} {entity}',
      'createThis' => '{user} oluşturdu: {entityType}',
      'createAssignedThis' => '{user} oluşturdu: {entityType} ve şuna atandı: {assignee}',
      'createAssigned' => '{user} oluşturdu: {entityType} {entity} ve şuna atandı: {assignee}',
      'createAssignedYou' => '{user} size atanan {entityType} {entity} oluşturdu',
      'createAssignedThisSelf' => '{user}, bu {entityType} kendinden atanmış olarak oluşturdu',
      'createAssignedSelf' => '{user}, {entityType} {entity} kendinden atanmış olarak oluşturdu',
      'assign' => '{user} şunu: {entityType} {entity} şuna ataadı: {assignee}',
      'assignThis' => '{user} şunu: {entityType} şuna atadı: {assignee}',
      'assignYou' => '{user}, size {entityType} {entity} atadı',
      'assignThisVoid' => '{user}, bu {entityType} öğesinin atamasını kaldırdı',
      'assignVoid' => '{user} atanmamış {entityType} {entity}',
      'assignThisSelf' => '{user} kendisine bu {entityType} atadı',
      'assignSelf' => '{user} kendine atanan {entityType} {entity}',
      'assignMultiAdd' => '{user} assigned {entity} to {assignee}',
      'assignMultiRemove' => '{user} unassigned {entity} from {removedAssignee}',
      'assignMultiAddRemove' => '{user} assigned {entity} to {assignee} and unassigned from {removedAssignee}',
      'assignMultiAddThis' => '{user} assigned this {entityType} to {assignee}',
      'assignMultiRemoveThis' => '{user} unassigned this {entityType} from {removedAssignee}',
      'assignMultiAddRemoveThis' => '{user} assigned this {entityType} to {assignee} and unassigned from {removedAssignee}',
      'postThis' => '{user} yayınladı',
      'attachThis' => '{user} ekledi',
      'statusThis' => '{user} güncelledi: {field}',
      'updateThis' => '{user} güncelledi: {entityType}',
      'createRelatedThis' => '{user} şunu oluşturdu: {relatedEntityType} {relatedEntity} ve şuna bağladı: {entityType}',
      'createRelated' => '{user} şunu oluşturdu: {relatedEntityType} {relatedEntity} ve şuna bağladı: {entityType} {entity}',
      'relate' => '{user} {relatedEntitiyType} {relatedEntity} ile {entitiyType} {entitiy} bağladı',
      'relateThis' => '{user} {relatedEntitiyType} {relatedEntity} ile bu {entitiyType} bağladı',
      'unrelate' => '{user}, {relatedEntityType} {relatedEntity} ile {entityType} {entity} arasındaki bağlantıyı kaldırdı',
      'unrelateThis' => '{user}, bu {entityType} ile {﻿ilintiliEntityType} {﻿ilişkiliEntity} bağlantısını kaldırdı',
      'emailReceivedFromThis' => '{from} tarafından eposta alındı',
      'emailReceivedInitialFromThis' => '{from} tarafından eposta alındı, bu {entitiyType} oluşturuldu',
      'emailReceivedThis' => '{entity} alındı',
      'emailReceivedInitialThis' => 'Eposta alındı, bu {entitiyType} oluşturuldu',
      'emailReceivedFrom' => '{from} tarafından {entitiyType} {entity} ile ilgili eposta alındı',
      'emailReceivedFromInitial' => '{from} tarafından eposta alındı, {entitiyType} {entitiy} oluşturuldu',
      'emailReceived' => '{entity} eposta şunun için alındı: {entityType} {entity}',
      'emailReceivedInitial' => 'Eposta alındı: {entitiyType} {entity} oluşturuldu',
      'emailReceivedInitialFrom' => '{from} tarafından eposta alındı, {entitiyType} {entitiy} oluşturuldu',
      'emailSent' => '{by} {entityType} {entity} ile ilgili eposta gönderdi',
      'emailSentThis' => '{by} eposta gönderdi',
      'eventConfirmationAccepted' => '{invitee} accepted participation in {entityType} {entity}',
      'eventConfirmationDeclined' => '{invitee} declined participation in {entityType} {entity}',
      'eventConfirmationTentative' => '{invitee} is tentative about participation in {entityType} {entity}',
      'eventConfirmationAcceptedThis' => '{invitee} accepted participation',
      'eventConfirmationDeclinedThis' => '{invitee} declined participation',
      'eventConfirmationTentativeThis' => '{invitee} is tentative about participation'
    ],
    'streamMessagesMale' => [
      'postTargetSelfAndOthers' => '{user}, {target} ve kendisine gönderildi'
    ],
    'streamMessagesFemale' => [
      'postTargetSelfAndOthers' => '{user}, {target} ve kendisine yayınladı'
    ],
    'lists' => [
      'monthNames' => [
        0 => 'Ocak',
        1 => 'Şubat',
        2 => 'Mart',
        3 => 'Nisan',
        4 => 'Mayıs',
        5 => 'Haziran',
        6 => 'Temmuz',
        7 => 'Ağustos',
        8 => 'Eylül',
        9 => 'Ekim',
        10 => 'Kasım',
        11 => 'Aralık'
      ],
      'monthNamesShort' => [
        0 => 'Ock',
        1 => 'Şbt',
        2 => 'Mrt',
        3 => 'Nsn',
        4 => 'Mys',
        5 => 'Hzr',
        6 => 'Tmz',
        7 => 'Ağs ',
        8 => 'Eyl',
        9 => 'Ekm',
        10 => 'Ksm',
        11 => 'Arlk'
      ],
      'dayNames' => [
        0 => 'Pazar',
        1 => 'Pazartesi',
        2 => 'Salı',
        3 => 'Çarşamba',
        4 => 'Perşembe',
        5 => 'Cuma',
        6 => 'Cumartesi'
      ],
      'dayNamesShort' => [
        0 => 'Pzr',
        1 => 'Pzrt',
        2 => 'Sal',
        3 => 'Çrşm',
        4 => 'Prşm',
        5 => 'Cma',
        6 => 'Cmrt'
      ],
      'dayNamesMin' => [
        0 => 'Pa',
        1 => 'Ps',
        2 => 'Sa',
        3 => 'Ça',
        4 => 'Pe',
        5 => 'Cu',
        6 => 'Cr'
      ]
    ],
    'durationUnits' => [
      'd' => 'g',
      'h' => 's',
      'm' => 'a',
      's' => 's'
    ],
    'options' => [
      'salutationName' => [
        'Mr.' => 'Bay.',
        'Mrs.' => 'Bayan.',
        'Ms.' => 'Bayan.',
        'Dr.' => 'Dr.'
      ],
      'language' => [
        'ar_AR' => 'Arabic',
        'af_ZA' => 'Afrikaans',
        'az_AZ' => 'Azerbaijani',
        'be_BY' => 'Belarusian',
        'bg_BG' => 'Bulgarian',
        'bn_IN' => 'Bengali',
        'bs_BA' => 'Bosnian',
        'ca_ES' => 'Catalan',
        'cs_CZ' => 'Czech',
        'cy_GB' => 'Welsh',
        'da_DK' => 'Danish',
        'de_DE' => 'German',
        'el_GR' => 'Greek',
        'en_GB' => 'English (UK)',
        'es_MX' => 'Spanish (Mexico)',
        'en_US' => 'English (US)',
        'es_ES' => 'Spanish (Spain)',
        'et_EE' => 'Estonian',
        'eu_ES' => 'Basque',
        'fa_IR' => 'Persian',
        'fi_FI' => 'Finnish',
        'fo_FO' => 'Faroese',
        'fr_CA' => 'French (Canada)',
        'fr_FR' => 'French (France)',
        'ga_IE' => 'Irish',
        'gl_ES' => 'Galician',
        'gn_PY' => 'Guarani',
        'he_IL' => 'Hebrew',
        'hi_IN' => 'Hindi',
        'hr_HR' => 'Croatian',
        'hu_HU' => 'Hungarian',
        'hy_AM' => 'Armenian',
        'id_ID' => 'Indonesian',
        'is_IS' => 'Icelandic',
        'it_IT' => 'Italian',
        'ja_JP' => 'Japanese',
        'ka_GE' => 'Georgian',
        'km_KH' => 'Khmer',
        'ko_KR' => 'Korean',
        'ku_TR' => 'Kurdish',
        'lt_LT' => 'Lithuanian',
        'lv_LV' => 'Latvian',
        'mk_MK' => 'Macedonian',
        'ml_IN' => 'Malayalam',
        'ms_MY' => 'Malay',
        'nb_NO' => 'Norwegian Bokmål',
        'nn_NO' => 'Norwegian Nynorsk',
        'ne_NP' => 'Nepali',
        'nl_NL' => 'Dutch',
        'pa_IN' => 'Punjabi',
        'pl_PL' => 'Polish',
        'ps_AF' => 'Pashto',
        'pt_BR' => 'Portuguese (Brazil)',
        'pt_PT' => 'Portuguese (Portugal)',
        'ro_RO' => 'Romanian',
        'ru_RU' => 'Russian',
        'sk_SK' => 'Slovak',
        'sl_SI' => 'Slovene',
        'sq_AL' => 'Albanian',
        'sr_RS' => 'Serbian',
        'sv_SE' => 'Swedish',
        'sw_KE' => 'Swahili',
        'ta_IN' => 'Tamil',
        'te_IN' => 'Telugu',
        'th_TH' => 'Thai',
        'tl_PH' => 'Tagalog',
        'tr_TR' => 'Turkish',
        'uk_UA' => 'Ukrainian',
        'ur_PK' => 'Urdu',
        'vi_VN' => 'Vietnamese',
        'zh_CN' => 'Simplified Chinese (China)',
        'zh_HK' => 'Traditional Chinese (Hong Kong)',
        'zh_TW' => 'Traditional Chinese (Taiwan)'
      ],
      'dateSearchRanges' => [
        'on' => 'Açık',
        'notOn' => 'Açık Değil',
        'after' => 'Sonra',
        'before' => 'Önce',
        'between' => 'Arasında',
        'today' => 'Bugün',
        'past' => 'Geçmiş',
        'future' => 'Gelecek',
        'currentMonth' => 'İçinde Bulunduğumuz Ay',
        'lastMonth' => 'Geçen Ay',
        'nextMonth' => 'Sonraki Ay',
        'currentQuarter' => 'İçinde Bulunduğumuz Çeyrek',
        'lastQuarter' => 'Son Çeyrek',
        'currentYear' => 'İçinde Bulunduğumuz Yıl',
        'lastYear' => 'Geçen Yıl',
        'lastSevenDays' => 'Son 7 Gün',
        'lastXDays' => 'Son X Gün',
        'nextXDays' => 'Sonraki X Gün',
        'ever' => 'Hiç',
        'isEmpty' => 'Boş',
        'olderThanXDays' => 'X Gününden Eski',
        'afterXDays' => 'X Gün sonra',
        'currentFiscalYear' => 'Geçerli Cari Mali Yıl',
        'lastFiscalYear' => 'Geçmiş Mali Yıl',
        'currentFiscalQuarter' => 'Mevcut Mali Çeyrek',
        'lastFiscalQuarter' => 'Son Mali Çeyrek'
      ],
      'searchRanges' => [
        'is' => 'dır/dir/olan',
        'isEmpty' => 'Boş',
        'isNotEmpty' => 'Boş Değil',
        'isOneOf' => 'Herhangi Biri',
        'isFromTeams' => 'Takımdan',
        'isNot' => 'Olmayan',
        'isNotOneOf' => 'Hiçbiri',
        'anyOf' => 'Herhangi Biri',
        'allOf' => 'All Of',
        'noneOf' => 'Hiçbiri',
        'any' => 'Herhangi'
      ],
      'varcharSearchRanges' => [
        'equals' => 'Eşittir',
        'like' => 'Benzer (%)',
        'notLike' => 'Is Not Like (%)',
        'startsWith' => 'İle Başlar',
        'endsWith' => 'İle Biter',
        'contains' => 'İçerir',
        'notContains' => 'İçermeyen',
        'isEmpty' => 'Boş',
        'isNotEmpty' => 'Boş Değil',
        'notEquals' => 'Eşit Olmayan',
        'anyOf' => 'Any Of',
        'noneOf' => 'None Of'
      ],
      'intSearchRanges' => [
        'equals' => 'Eşit',
        'notEquals' => 'Eşit Değil',
        'greaterThan' => 'den Büyük',
        'lessThan' => 'den Küçük',
        'greaterThanOrEquals' => 'den Büyük ya da Eşit',
        'lessThanOrEquals' => 'den Küçük ya da Eşit',
        'between' => 'Arasında',
        'isEmpty' => 'Boş',
        'isNotEmpty' => 'Boş değil'
      ],
      'autorefreshInterval' => [
        0 => 'Hiç',
        '0.5' => '30 saniye',
        1 => '1 dakika',
        2 => '2 dakika',
        5 => '5 dakika',
        10 => '10 dakika'
      ],
      'phoneNumber' => [
        'Mobile' => 'Mobil',
        'Office' => 'Ofis',
        'Fax' => 'Fax',
        'Home' => 'Ev',
        'Other' => 'Diğer'
      ],
      'saveConflictResolution' => [
        'current' => 'Current',
        'actual' => 'Actual',
        'original' => 'Original'
      ],
      'reminderTypes' => [
        'Popup' => 'Yeni Pencere',
        'Email' => 'Epostalar'
      ]
    ],
    'sets' => [
      'summernote' => [
        'NOTICE' => 'Çeviriyi bu adreste bulabilirsiniz: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => [
          'bold' => 'Kalın',
          'italic' => 'Eğik',
          'underline' => 'Altı Çizili',
          'strike' => 'Üstü Çizili',
          'clear' => 'Yazı Karakterini Kaldır',
          'height' => 'Satır Yüksekliği',
          'name' => 'Yazı Karakteri',
          'size' => 'YazıKarakteri Boyutu'
        ],
        'image' => [
          'image' => 'Resim',
          'insert' => 'Resim Ekle',
          'resizeFull' => 'Orjinal Boyut',
          'resizeHalf' => '1/2 Boyut',
          'resizeQuarter' => '1/4 Boyut',
          'floatLeft' => 'Sola Hizala',
          'floatRight' => 'Sağa Hizala',
          'floatNone' => 'Hizalamayı Kaldır',
          'dragImageHere' => 'Fotoğrafı buraya sürükle',
          'selectFromFiles' => 'Dosya seç',
          'url' => 'Foto URL',
          'remove' => 'Foto\'yu Sil'
        ],
        'link' => [
          'link' => 'Bağlantı',
          'insert' => 'Bağlantı Ekle',
          'unlink' => 'Bağlantıyı Kes',
          'edit' => 'Düzenle',
          'textToDisplay' => 'Gösterilecek Metin',
          'url' => 'To what URL should this link go?',
          'openInNewWindow' => 'Yeni pencerede aç'
        ],
        'video' => [
          'video' => 'Video',
          'videoLink' => 'Video Bağlantısı',
          'insert' => 'Video Ekle',
          'url' => 'Video URL?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, or DailyMotion)'
        ],
        'table' => [
          'table' => 'Tablo'
        ],
        'hr' => [
          'insert' => 'Yatay Cetvel Ekle'
        ],
        'style' => [
          'style' => 'Stil',
          'normal' => 'Normal',
          'blockquote' => 'Kota',
          'pre' => 'Kod',
          'h1' => 'Başlık 1',
          'h2' => 'Başlık 2',
          'h3' => 'Başlık 3',
          'h4' => 'Başlık 4',
          'h5' => 'Başlık 5',
          'h6' => 'Başlık 6'
        ],
        'lists' => [
          'unordered' => 'Düzenlenmemiş Liste',
          'ordered' => 'Düzenlenmiş Liste'
        ],
        'options' => [
          'help' => 'Yardım',
          'fullscreen' => 'Tam Ekran',
          'codeview' => 'Kod Görünümü'
        ],
        'paragraph' => [
          'paragraph' => 'Paragraf',
          'outdent' => 'Çıkıntı',
          'indent' => 'Girinti',
          'left' => 'Sola hizala',
          'center' => 'Ortaya hizala',
          'right' => 'Sağa hizala',
          'justify' => 'Tam Yasla'
        ],
        'color' => [
          'recent' => 'Son Kullanılan Renk',
          'more' => 'Daha Fazla Renk',
          'background' => 'Arkaplan Rengi',
          'foreground' => 'Yazı Karakteri Rengi',
          'transparent' => 'Şeffaflık',
          'setTransparent' => 'Şeffaflığı Ayarla',
          'reset' => 'Sıfırla',
          'resetToDefault' => 'Varsayılana Sıfırla'
        ],
        'shortcut' => [
          'shortcuts' => 'Klavye Kısayolları',
          'close' => 'Kapat',
          'textFormatting' => 'Metin Biçimlendirme',
          'action' => 'Eylem',
          'paragraphFormatting' => 'Paragraf Biçimlendirme',
          'documentStyle' => 'Döküman Stili'
        ],
        'history' => [
          'undo' => 'Geri Al',
          'redo' => 'Tekrar Yap'
        ]
      ]
    ],
    'listViewModes' => [
      'list' => 'Liste',
      'kanban' => 'Kanban'
    ],
    'themes' => [
      'Dark' => 'Dark',
      'Light' => 'Hafif',
      'Espo' => 'Espo',
      'EspoRtl' => 'RTL',
      'Sakura' => 'Sakura',
      'Violet' => 'Violet',
      'Hazyblue' => 'Hazyblue',
      'Glass' => 'Glass'
    ],
    'themeNavbars' => [
      'side' => 'Side Navbar',
      'top' => 'Top Navbar'
    ],
    'fieldValidations' => [
      'required' => 'Required',
      'maxCount' => 'Max Count',
      'maxLength' => 'Max Length',
      'pattern' => 'Pattern Matching',
      'emailAddress' => 'Geçerli Eposta Adresi',
      'phoneNumber' => 'Valid Phone Number',
      'array' => 'Array',
      'arrayOfString' => 'Array of Strings',
      'valid' => 'Validity',
      'noEmptyString' => 'No Empty String',
      'max' => 'Max Value',
      'min' => 'Min Value'
    ],
    'fieldValidationExplanations' => [
      'valid' => 'Invalid value.',
      'maxLength' => 'Value length exceeds maximum value.',
      'phone_valid' => 'Phone number is not valid. May be caused by a wrong or empty country code.',
      'url_valid' => 'Geçersiz URL adresi.',
      'currency_valid' => 'Geçersiz tutar değeri.',
      'currency_validCurrency' => 'Döviz kodu değeri geçersiz veya izin verilmiyor.',
      'varchar_pattern' => 'Likely, the value contains not allowed characters.',
      'email_emailAddress' => 'Geçersiz postala adresi.',
      'phone_phoneNumber' => 'Geçersiz telefon numarası.',
      'datetimeOptional_valid' => 'Geçersiz tarih-saat.',
      'datetime_valid' => 'Geçersiz tarih-saat.',
      'date_valid' => 'Geçersiz tarih.',
      'enum_valid' => 'Invalid enum value. The value must be one of defined enum options. An empty value is allowed only if the field has an empty option.',
      'int_valid' => 'Geçersiz tam sayı değeri.',
      'float_valid' => 'Geçersiz sayı değeri.',
      'multiEnum_valid' => 'Invalid multi-enum value. Values must be one of defined field options.'
    ],
    'navbarTabs' => [
      'Business' => 'İşletme',
      'Marketing' => 'Pazarlama',
      'Support' => 'Destek',
      'CRM' => 'CRM',
      'Activities' => 'Aktivite'
    ],
    'wysiwygLabels' => [
      'cell' => 'Cell',
      'align' => 'Align',
      'width' => 'Width',
      'height' => 'Height',
      'borderWidth' => 'Border Width',
      'borderColor' => 'Border Color',
      'cellPadding' => 'Cell Padding',
      'backgroundColor' => 'Background Color',
      'verticalAlign' => 'Vertical Align'
    ],
    'wysiwygOptions' => [
      'align' => [
        'left' => 'Left',
        'center' => 'Center',
        'right' => 'Right'
      ],
      'verticalAlign' => [
        'top' => 'Top',
        'middle' => 'Middle',
        'bottom' => 'Bottom'
      ]
    ],
    'detailViewModes' => [
      'detail' => 'Detail'
    ],
    'strings' => [
      'yesterdayShort' => 'Yest'
    ],
    'reactions' => [
      'Smile' => 'Smile',
      'Surprise' => 'Surprise',
      'Laugh' => 'Laugh',
      'Meh' => 'Meh',
      'Sad' => 'Sad',
      'Love' => 'Love',
      'Like' => 'Like',
      'Dislike' => 'Dislike'
    ],
    'recordActions' => [
      'create' => 'Create',
      'read' => 'Read',
      'edit' => 'Edit',
      'delete' => 'Delete',
      'stream' => 'Stream'
    ],
    'tabs' => [
      'Stream' => 'Stream'
    ]
  ],
  'GroupEmailFolder' => [
    'links' => [
      'emails' => 'Epostalar'
    ],
    'labels' => [
      'Create GroupEmailFolder' => 'Klasör Oluştır'
    ]
  ],
  'Import' => [
    'labels' => [
      'New import with same params' => 'New import with same params',
      'Revert Import' => 'Aktarımı geri çek',
      'Return to Import' => 'Aktarıma Dön',
      'Run Import' => 'Aktarımı başlat',
      'Back' => 'Geri',
      'Field Mapping' => 'Alan Eşleme',
      'Default Values' => 'Ön Tanımlı Değerler',
      'Add Field' => 'Alan Ekle',
      'Created' => 'Oluşturuldu',
      'Updated' => 'Güncellendi',
      'Result' => 'Sonuç',
      'Show records' => 'Kayıtları Göster',
      'Remove Duplicates' => 'Çifte Kayıtları Sil',
      'importedCount' => 'Aktarıldı (count)',
      'duplicateCount' => 'Çifte Kayıtlar (count)',
      'updatedCount' => 'Güncellendi (count)',
      'Create Only' => 'Sadece oluştur',
      'Create and Update' => 'Oluştur & Güncelle',
      'Update Only' => 'Sadece Güncelle',
      'Update by' => 'Güncelleyen',
      'Set as Not Duplicate' => 'Çifte Kayıt Değil Olarak İşaretle',
      'File (CSV)' => 'Dosya (CSV)',
      'First Row Value' => 'İlk Satır Değeri',
      'Skip' => 'Atla',
      'Header Row Value' => 'Başlık Satır Değeri',
      'Field' => 'Alan',
      'What to Import?' => 'Aktarılacak Olan?',
      'Entity Type' => 'Varlık Tipi',
      'What to do?' => 'Ne yapılacak?',
      'Properties' => 'Özellikler',
      'Header Row' => 'Başlık Satırı',
      'Person Name Format' => 'Kişi İsim Biçimi',
      'John Smith' => 'John Smith',
      'Smith John' => 'John Smith',
      'Smith, John' => 'Smith, John',
      'Field Delimiter' => 'Alan Sınırlayıcı',
      'Date Format' => 'Tarih Formatı',
      'Decimal Mark' => 'Ondalık İşareti',
      'Text Qualifier' => 'Metin Eleme',
      'Time Format' => 'Zaman Formatı',
      'Currency' => 'Döviz',
      'Preview' => 'Ön İzleme',
      'Next' => 'Sonraki',
      'Step 1' => 'Adım 1',
      'Step 2' => 'Adım 2',
      'Double Quote' => 'Çift Tırnak',
      'Single Quote' => 'Tek Tırnak',
      'Imported' => 'Aktarıldı',
      'Duplicates' => 'Çifte Kayıtlar',
      'Skip searching for duplicates' => 'Çiftleri aramaktan vazgeç',
      'Timezone' => 'Saat dilimi',
      'Remove Import Log' => 'İçe Aktarma Günlüğünü Kaldır',
      'New Import' => 'Yeni İçe Aktarma',
      'Import Results' => 'İçeri Alma Sonuçları',
      'Run Manually' => 'Run Manually',
      'Silent Mode' => 'Sessiz mod',
      'Export' => 'Export'
    ],
    'messages' => [
      'importRunning' => 'İçe Aktarılıyor...',
      'noErrors' => 'Hata yok',
      'utf8' => 'UTF-8 olmalı',
      'duplicatesRemoved' => 'Çifte Kayıtlar silindi',
      'inIdle' => 'Boşta çalıştır (büyük veriler için cron aracılığıyla)',
      'revert' => 'İçe aktarılan tüm kayıtları kalıcı olarak kaldıracaktır.',
      'removeDuplicates' => 'Kopya olarak tanınan tüm içe aktarılan kayıtları kalıcı olarak kaldıracaktır.',
      'confirmRevert' => 'İçe aktarılan tüm kayıtları kalıcı olarak kaldıracaktır. Emin misin?',
      'confirmRemoveDuplicates' => 'Kopya olarak tanınan tüm içe aktarılan kayıtları kalıcı olarak kaldıracaktır. Emin misin?',
      'confirmRemoveImportLog' => 'This will remove the import log. All imported records will be kept. You won\'t be able to revert import results. Are you sure?',
      'removeImportLog' => 'İçe aktarma günlüğünü kaldıracaktır. İçe aktarılan tüm kayıtlar tutulacaktır. İçe aktarmanın başarılı olduğundan eminseniz kullanın.'
    ],
    'params' => [
      'phoneNumberCountry' => 'Telefon ülke kodu'
    ],
    'fields' => [
      'file' => 'Dosya',
      'entityType' => 'Varlık Tipi',
      'imported' => 'Aktarılan Kayıtlar',
      'duplicates' => 'Çifte Kayıt Kayıtları',
      'updated' => 'Güncellenen Kayıtlar',
      'status' => 'Durum '
    ],
    'links' => [
      'errors' => 'Errors'
    ],
    'options' => [
      'status' => [
        'Failed' => 'Hata',
        'Standby' => 'Standby',
        'Pending' => 'Pending',
        'In Process' => 'Süreç İçinde',
        'Complete' => 'Tamamlandı'
      ],
      'personNameFormat' => [
        'f l' => 'First Last',
        'l f' => 'Last First',
        'f m l' => 'First Middle Last',
        'l f m' => 'Last First Middle',
        'l, f' => 'Last, First'
      ]
    ],
    'strings' => [
      'commandToRun' => 'Command to run (from CLI)',
      'saveAsDefault' => 'Save as default'
    ],
    'tooltips' => [
      'manualMode' => 'If checked, you will need to run import manually from CLI. Command will be shown after setting up the import.',
      'silentMode' => 'A majority of after-save scripts will be skipped, stream notes won\'t be created. Import will run faster.'
    ]
  ],
  'ImportError' => [
    'fields' => [
      'type' => 'Type',
      'validationFailures' => 'Validation Failures',
      'import' => 'Import',
      'rowIndex' => 'Row Index',
      'exportRowIndex' => 'Export Row Index',
      'lineNumber' => 'Line Number',
      'exportLineNumber' => 'Export Line Number',
      'row' => 'Row',
      'entityType' => 'Varlık Türü'
    ],
    'options' => [
      'type' => [
        'Validation' => 'Validation',
        'Access' => 'Access',
        'Not-Found' => 'Not-Found'
      ]
    ],
    'tooltips' => [
      'lineNumber' => 'A line number in the original CSV.',
      'exportLineNumber' => 'A line number in the export CSV.'
    ]
  ],
  'InboundEmail' => [
    'fields' => [
      'name' => 'Ad',
      'emailAddress' => 'Eposta Adresi',
      'team' => 'Hedef Ekibi',
      'status' => 'Durum',
      'assignToUser' => 'Kullanıcıyı Görevlendir',
      'host' => 'Host',
      'username' => 'Kullanıcı Adı',
      'password' => 'Şifre',
      'port' => 'Bağlantı Noktası',
      'monitoredFolders' => 'İzlenen Klasörler',
      'trashFolder' => 'Çöp Kutusu',
      'security' => 'Güvenlik',
      'createCase' => 'Dosya Oluştur',
      'reply' => 'Otomatik Cevap',
      'caseDistribution' => 'Dosya Dağıtımı',
      'replyEmailTemplate' => 'Cevapla Eposta Taslağı',
      'replyFromAddress' => 'Cevaplayan Adres',
      'replyToAddress' => 'Cevaplanan Adres',
      'replyFromName' => 'Cevaplayan İsim',
      'targetUserPosition' => 'Hedef Kullanıcı Pozisyonu',
      'fetchSince' => 'Şundan itibaren çek',
      'addAllTeamUsers' => 'Tüm takım kullanıcıları için',
      'teams' => 'Takımlar',
      'sentFolder' => 'Gönderilenler Klasörü',
      'storeSentEmails' => 'Gönderilen Epostaları Sakla',
      'keepFetchedEmailsUnread' => 'Keep Fetched Emails Unread',
      'connectedAt' => 'Connected At',
      'excludeFromReply' => 'Exclude from Reply',
      'useImap' => 'Epostaları Al',
      'useSmtp' => 'SMTP Kullan',
      'smtpHost' => 'SMTP Sunucu',
      'smtpPort' => 'SMTP Port',
      'smtpAuth' => 'SMTP Auth',
      'smtpSecurity' => 'SMTP Güvenlik',
      'smtpAuthMechanism' => 'SMTP Kimlik Doğrulama Tipi',
      'smtpUsername' => 'SMTP Kullanıcı Adı',
      'smtpPassword' => 'SMTP Şifre',
      'fromName' => 'Kimden',
      'smtpIsShared' => 'SMTP Paylaşıldı',
      'smtpIsForMassEmail' => 'SMTP Toplu eposta içindir',
      'groupEmailFolder' => 'Grup Eposta Klasörü',
      'isSystem' => 'Is System'
    ],
    'tooltips' => [
      'isSystem' => 'Is the system email account.',
      'useSmtp' => 'The ability to send emails.',
      'reply' => 'Epostaların gönderenlerine epostalarının alındığını bildirin. \\ N \\ n Döngüleri önlemek için belirli bir süre boyunca belirli bir alıcıya yalnızca bir eposta gönderilir.',
      'createCase' => 'Gelen epostalardan otomatik dosya oluştur',
      'replyToAddress' => 'Bu eposta kutusuna ait eposta adreslerini, cevapların buraya düşmesi için belirtiniz.',
      'caseDistribution' => 'Herhangi bir durumda olay ataması nasıl yapılacak? Doğrudan kullanıcıya veya ekip arasında atanır.',
      'assignToUser' => 'Kullanıcı olayı atanacak.',
      'team' => 'Takım olayları atanacak.',
      'teams' => 'Ekiplerin epostaları atanacak.',
      'targetUserPosition' => 'Olay kayıtları belli pozisyonlarda ki kullanıcılar arasında dağıtılır.',
      'addAllTeamUsers' => 'Epostalar, belirtilen ekiplerin tüm kullanıcılarının Gelen Kutusunda görünecek.',
      'monitoredFolders' => 'Birden çok klasör virgülle ayrılmalıdır.',
      'smtpIsShared' => 'Bu kutucuk işaretlenirse, kullanıcılar bu SMTP\'yi kullanarak eposta gönderebilir. Bu özellik grup eposta hesabı izniyle kontrol edilir.',
      'smtpIsForMassEmail' => 'SMTP kutucuğu işaretlenirse toplu eposta için kullanılabilir olacaktır.',
      'storeSentEmails' => 'Gönderilen e-postalar IMAP sunucusunda saklanacaktır.',
      'groupEmailFolder' => 'Put incoming emails in a group folder.',
      'excludeFromReply' => 'When replying on emails sent to this account\'s email address, its email address won\'t be added to CC.

Note that by enabling this parameter, the email address of this account will be exposed to users who have access to send Emails.'
    ],
    'links' => [
      'filters' => 'Filtreler',
      'emails' => 'Epostalar',
      'assignToUser' => 'Kullanıcıya ata',
      'groupEmailFolder' => 'Grup Eposta Klasörü'
    ],
    'options' => [
      'status' => [
        'Active' => 'Etkin',
        'Inactive' => 'Pasif'
      ],
      'caseDistribution' => [
        '' => 'Hiç',
        'Direct-Assignment' => 'Direk-Görevlendirme',
        'Round-Robin' => 'Round-Robin',
        'Least-Busy' => 'En az meşgul'
      ],
      'smtpAuthMechanism' => [
        'plain' => 'DÜZ',
        'login' => 'GİRİŞ',
        'crammd5' => 'CRAM-MD5'
      ],
      'smtpSecurity' => [
        'SSL' => 'SSL/TLS',
        'TLS' => 'STARTTLS'
      ],
      'security' => [
        'SSL' => 'SSL/TLS',
        'TLS' => 'STARTTLS'
      ]
    ],
    'labels' => [
      'Create InboundEmail' => 'Eposta Hesabı Oluştur',
      'IMAP' => 'IMAP',
      'Actions' => 'Eylemler',
      'Main' => 'Ana Sayfa'
    ],
    'messages' => [
      'couldNotConnectToImap' => 'IMAP sunucusuna bağlanılamıyor',
      'imapNotConnected' => 'Could not connect to group [IMAP account](#InboundEmail/view/{id}).'
    ]
  ],
  'Integration' => [
    'fields' => [
      'enabled' => 'Etkinleştirildi',
      'clientId' => 'Alıcı ID',
      'clientSecret' => 'Müşteri Özel Anahtarı',
      'redirectUri' => 'Yönlendirme URI',
      'apiKey' => 'API Anahtarı',
      'siteKey' => 'Site Key',
      'secretKey' => 'Secret Key',
      'scoreThreshold' => 'Score Threshold',
      'mapId' => 'Map ID'
    ],
    'titles' => [
      'GoogleMaps' => 'Google Haritalar',
      'GoogleReCaptcha' => 'Google reCAPTCHA'
    ],
    'messages' => [
      'selectIntegration' => 'Menüden bir entegrasyon seçin.',
      'noIntegrations' => 'Geçerli entegrasyon yok'
    ],
    'help' => [
      'GoogleReCaptcha' => 'Obtain the Site Key and Secret Key from [Google](https://www.google.com/recaptcha/).',
      'Google' => '**Obtain OAuth 2.0 credentials from the Google Developers Console.**

Visit [Google Developers Console](https://console.developers.google.com/project) to obtain OAuth 2.0 credentials such as a Client ID and Client Secret that are known to both Google and EspoCRM application.',
      'GoogleMaps' => 'Obtain API key [here](https://developers.google.com/maps/documentation/javascript/get-api-key).'
    ]
  ],
  'Job' => [
    'fields' => [
      'status' => 'Durum',
      'executeTime' => 'Burda Çalıştır',
      'executedAt' => 'Executed At',
      'startedAt' => 'Başlangıç',
      'attempts' => 'Kalan Hak',
      'failedAttempts' => 'Başarısız denemeler',
      'serviceName' => 'Servis',
      'method' => 'Metod',
      'methodName' => 'Metod',
      'scheduledJob' => 'İş planla',
      'scheduledJobJob' => 'Zamanlanmış Görev Adı',
      'data' => 'Veri',
      'targetType' => 'Target Type',
      'targetId' => 'Target ID',
      'number' => 'Numara',
      'queue' => 'Kuyruk',
      'group' => 'Group',
      'className' => 'Class Name',
      'targetGroup' => 'Target Group',
      'job' => 'Görev'
    ],
    'options' => [
      'status' => [
        'Pending' => 'Bekliyor',
        'Success' => 'Başarılı',
        'Running' => 'Çalışıyor',
        'Failed' => 'Başarısız'
      ]
    ]
  ],
  'LayoutManager' => [
    'fields' => [
      'width' => 'En',
      'link' => 'Bağlantı',
      'notSortable' => 'Sıralanamaz',
      'align' => 'Hizala',
      'panelName' => 'Panel Adı',
      'style' => 'Stil',
      'sticked' => 'Yapışmış',
      'isMuted' => 'Muted color',
      'isLarge' => 'Büyük yazı boyutu',
      'hidden' => 'Hidden',
      'noLabel' => 'No Label',
      'dynamicLogicVisible' => 'Paneli görünür kılan koşullar',
      'dynamicLogicStyled' => 'Conditions making style applied',
      'tabLabel' => 'Tab Label',
      'tabBreak' => 'Tab-Break',
      'noteText' => 'Note Text',
      'noteStyle' => 'Note Style'
    ],
    'options' => [
      'align' => [
        'left' => 'Sol',
        'right' => 'Sağ'
      ],
      'style' => [
        'default' => 'Varsayılan',
        'success' => 'Başarılı ',
        'danger' => 'Uyarı',
        'info' => 'Bilgi',
        'warning' => 'Uyarı',
        'primary' => 'Öncelikli'
      ]
    ],
    'labels' => [
      'New panel' => 'Yeni Pano',
      'Layout' => 'Görünüm'
    ],
    'messages' => [
      'alreadyExists' => '`{name}` düzeni zaten var.',
      'createInfo' => 'Özel liste düzenleri, ilişki panelleri tarafından kullanılabilir.',
      'cantBeEmpty' => 'Layout can\'t be empty.',
      'fieldsIncompatible' => 'Fields can\'t be on the layout together: {fields}.'
    ],
    'tooltips' => [
      'noteText' => 'A text to be displayed in the panel. Markdown is supported.',
      'tabBreak' => 'A separate tab for the panel and all following panels until the next tab-break.',
      'noLabel' => 'Don\'t display a column label in the header.',
      'notSortable' => 'Disables the ability to sort by the column.',
      'width' => 'A column width. It\'s recommended to have one column without specified width, usually it should be the *Name* field.',
      'sticked' => 'The panel will be sticked to the panel above. No gap between panels.',
      'hiddenPanel' => 'Need to click \'show more\' to see the panel.',
      'panelStyle' => 'A color of the panel.',
      'dynamicLogicVisible' => 'If set, the panel will be hidden unless the condition is met.',
      'dynamicLogicStyled' => 'A color will be applied if a specific condition is met . The color is defined by the *Style* parameter.',
      'link' => 'If checked, then a field value will be displayed as a link pointing to the detail view of the record. Usually it is used for *Name* fields.'
    ]
  ],
  'LayoutSet' => [
    'fields' => [
      'layoutList' => 'Layouts'
    ],
    'labels' => [
      'Create LayoutSet' => 'Create Layout Set',
      'Edit Layouts' => 'Edit Layouts'
    ],
    'tooltips' => []
  ],
  'LeadCapture' => [
    'fields' => [
      'name' => 'Ad',
      'campaign' => 'Kampanya',
      'isActive' => 'Etkin mi?',
      'subscribeToTargetList' => 'Hedef Listeye Abone Ol',
      'subscribeContactToTargetList' => 'Abone Mevcut ise İletişime Geçin',
      'targetList' => 'Hedef Liste',
      'fieldList' => 'Ödeme Alanı',
      'optInConfirmation' => 'Double Opt-In',
      'optInConfirmationEmailTemplate' => 'Opt-in confirmation email template',
      'optInConfirmationLifetime' => 'Opt-in confirmation lifetime (hours)',
      'optInConfirmationSuccessMessage' => 'Kaydolma onayından sonra gösterilecek metin',
      'leadSource' => 'Fırsat Kaynağı',
      'apiKey' => 'Api Anahtarı',
      'targetTeam' => 'Hedef Takım',
      'exampleRequestMethod' => 'Yöntem',
      'exampleRequestUrl' => 'URL',
      'exampleRequestPayload' => 'Yük',
      'exampleRequestHeaders' => 'Headers',
      'createLeadBeforeOptInConfirmation' => 'Onaydan önce Potansiyel Müşteri Oluşturun',
      'skipOptInConfirmationIfSubscribed' => 'Potansiyel müşteri zaten hedef listesindeyse onayı atla',
      'smtpAccount' => 'SMTP Hesabı',
      'inboundEmail' => 'Grup Eposta Adresi',
      'duplicateCheck' => 'Yineleme Kontrolü',
      'phoneNumberCountry' => 'Telefon ülke kodu',
      'fieldParams' => 'Field Params',
      'formId' => 'Form ID',
      'formEnabled' => 'Web Form',
      'formUrl' => 'Form URL',
      'formTitle' => 'Form Title',
      'formTheme' => 'Form Theme',
      'formSuccessText' => 'Text to display after form submission',
      'formText' => 'Text to display on form',
      'formSuccessRedirectUrl' => 'URL to redirect to after form submission',
      'formLanguage' => 'Language used on form',
      'formFrameAncestors' => 'Allowed hosts for form embedding',
      'formCaptcha' => 'Use Captcha'
    ],
    'links' => [
      'targetList' => 'Hedef Liste',
      'campaign' => 'Kampanyalar',
      'optInConfirmationEmailTemplate' => 'Opt-in confirmation email template',
      'targetTeam' => 'Hedef Takım',
      'inboundEmail' => 'Grup Eposta Hesabı',
      'logRecords' => 'Kayıt'
    ],
    'labels' => [
      'Create LeadCapture' => 'Giriş Noktası Oluştur',
      'Generate New API Key' => 'Yeni API Anahtarı Oluştur',
      'Request' => 'İstek',
      'Confirm Opt-In' => 'Confirm Opt-In',
      'Generate New Form ID' => 'Generate New Form ID',
      'Web Form' => 'Web Form'
    ],
    'messages' => [
      'generateApiKey' => 'Yeni API Anahtarı Üret',
      'optInConfirmationExpired' => 'Opt-in confirmation link is expired.',
      'optInIsConfirmed' => 'Opt-in is confirmed.'
    ],
    'tooltips' => [
      'formCaptcha' => 'To be able to use Captcha, you need to configure it under **Administration** > **Integrations**.',
      'optInConfirmationSuccessMessage' => 'İşaretleme desteklenir.'
    ]
  ],
  'LeadCaptureLogRecord' => [
    'fields' => [
      'number' => 'numara',
      'data' => 'Veri',
      'target' => 'Hedef',
      'leadCapture' => 'Yakalanan Fırsat',
      'createdAt' => 'Giriş Tarihi',
      'isCreated' => 'Is Lead Created'
    ],
    'links' => [
      'leadCapture' => 'Yakalanan Fırsat',
      'target' => 'Hedef'
    ]
  ],
  'MassAction' => [
    'fields' => [
      'status' => 'Status',
      'processedCount' => 'Processed Count'
    ],
    'options' => [
      'status' => [
        'Pending' => 'Pending',
        'Running' => 'Running',
        'Success' => 'Success',
        'Failed' => 'Failed'
      ]
    ],
    'messages' => [
      'infoText' => 'The mass action is being processed in idle by cron. It can take some time to finish. Closing this modal dialog won\'t affect the execution process.'
    ]
  ],
  'Note' => [
    'fields' => [
      'post' => 'Yayınla',
      'attachments' => 'Ekler',
      'targetType' => 'Hedef',
      'teams' => 'Takımlar',
      'users' => 'Kullanıcılar',
      'portals' => 'Portaller',
      'type' => 'Tip',
      'isGlobal' => 'Is Global',
      'isInternal' => 'Is Internal (for internal users)',
      'isPinned' => 'Is Pinned',
      'related' => 'İlgili',
      'createdByGender' => 'Cinsiyete Göre Oluşturuldu',
      'data' => 'Veri',
      'number' => 'Numara'
    ],
    'filters' => [
      'all' => 'Hepsi',
      'posts' => 'Yazılar',
      'updates' => 'Güncellemeler',
      'activity' => 'Aktivite'
    ],
    'options' => [
      'targetType' => [
        'self' => 'kendime',
        'users' => 'Belirli kullanıcılara',
        'teams' => 'Belirli takımlara',
        'all' => 'Tüm dahili kullanıcılara',
        'portals' => 'Portal kullanıcılarına'
      ],
      'type' => [
        'Post' => 'İleti',
        'Create' => 'Oluştur',
        'CreateRelated' => 'İlgili Oluştur',
        'Update' => 'Güncelleme',
        'Status' => 'Durum',
        'Assign' => 'Atanmış',
        'Relate' => 'İlgili',
        'Unrelate' => 'İlgiliyi Kaldır',
        'EmailReceived' => 'Eposta Alındı',
        'EmailSent' => 'Eposta Gönderildi'
      ]
    ],
    'labels' => [
      'View Posts' => 'Eposta Görüntüleme',
      'View Attachments' => 'View Attachments',
      'View Activity' => 'Aktivite Görüntüleme',
      'Pin' => 'Pin',
      'Unpin' => 'Unpin',
      'Pinned' => 'Pinned',
      'Quote Reply' => 'Quote Reply'
    ],
    'messages' => [
      'writeMessage' => 'Mesajınızı buraya yazınız',
      'pinnedMaxCountExceeded' => 'Cannot pin more notes. Max allowed number is {count}.'
    ],
    'links' => [
      'portals' => 'Portaller',
      'attachments' => 'Ekler',
      'superParent' => 'Super Parent',
      'related' => 'İlgili'
    ],
    'otherFields' => [
      'to' => 'To'
    ]
  ],
  'OAuthAccount' => [
    'labels' => [
      'Create OAuthAccount' => 'Create OAuth Account',
      'Connection' => 'Connection'
    ],
    'fields' => [
      'provider' => 'Provider',
      'hasAccessToken' => 'Has Access Token',
      'user' => 'User',
      'providerIsActive' => 'Provider is Active',
      'data' => 'Data'
    ],
    'links' => [
      'provider' => 'Provider'
    ]
  ],
  'OAuthProvider' => [
    'labels' => [
      'Create OAuthProvider' => 'Create OAuth Provider'
    ],
    'fields' => [
      'isActive' => 'Is Active',
      'clientId' => 'Client ID',
      'clientSecret' => 'Client Secret',
      'authorizationEndpoint' => 'Authorization Endpoint',
      'tokenEndpoint' => 'Token Endpoint',
      'authorizationRedirectUri' => 'Authorization Redirect URI',
      'scopes' => 'Scopes',
      'scopeSeparator' => 'Scope Separator',
      'hasAccessToken' => 'Has Access Token',
      'authorizationPrompt' => 'Authorization Prompt',
      'authorizationParams' => 'Authorization Params'
    ],
    'links' => [
      'accounts' => 'Accounts'
    ],
    'tooltips' => [
      'authorizationParams' => 'Additional query parameters to be sent to the authorization endpoint. Specified in JSON format.'
    ]
  ],
  'PhoneNumber' => [
    'fields' => [
      'type' => 'Type',
      'optOut' => 'Opted Out',
      'invalid' => 'Invalid',
      'numeric' => 'Sayısal değer'
    ],
    'presetFilters' => [
      'orphan' => 'Orphan'
    ]
  ],
  'Portal' => [
    'fields' => [
      'name' => 'Ad',
      'logo' => 'Logo',
      'url' => 'URL',
      'portalRoles' => 'Roller',
      'isActive' => 'Etkin mi?',
      'isDefault' => 'Ön Tanımlı',
      'tabList' => 'Sekme Listesi',
      'applicationName' => 'Application Name',
      'quickCreateList' => 'Çabuk liste oluştur',
      'companyLogo' => 'Logo',
      'theme' => 'Tema',
      'language' => 'Dil',
      'dashboardLayout' => 'Gösterge Paneli Düzeni',
      'dateFormat' => 'Tarih Formatı',
      'timeFormat' => 'Zaman Formatı',
      'timeZone' => 'Saat Dilimi',
      'weekStart' => 'Haftanın ilk günü',
      'defaultCurrency' => 'Varsayılan Döviz',
      'layoutSet' => 'Layout Set',
      'authenticationProvider' => 'Kimlik Doğrulama Sağlayıcı',
      'customUrl' => 'Özel URL',
      'customId' => 'Özel kimlik',
      'authTokenLifetime' => 'Auth Token Lifetime (hours)',
      'authTokenMaxIdleTime' => 'Auth Token Max Idle Time (hours)'
    ],
    'links' => [
      'users' => 'Kullanıcılar',
      'portalRoles' => 'Roller',
      'layoutSet' => 'Layout Set',
      'authenticationProvider' => 'Kimlik Doğrulama Sağlayıcı',
      'notes' => 'Notlar',
      'articles' => 'Bilgi Bankası Makaleleri'
    ],
    'tooltips' => [
      'layoutSet' => 'Provides the ability to have layouts that differ from standard ones.',
      'portalRoles' => 'Belirtilen Portal Rolleri, bu portalın tüm kullanıcılarına uygulanacaktır.'
    ],
    'labels' => [
      'Create Portal' => 'Portal Oluştur',
      'User Interface' => 'Kullanıcı Arayüzü',
      'General' => 'Genel',
      'Settings' => 'Ayarlar'
    ]
  ],
  'PortalRole' => [
    'fields' => [
      'exportPermission' => 'Yetkileri Dışa Aktar',
      'massUpdatePermission' => 'Toplu Güncelleme İzni',
      'data' => 'Veri',
      'fieldData' => 'Alan Verileri'
    ],
    'links' => [
      'users' => 'Kullanıcılar'
    ],
    'labels' => [
      'Access' => 'Erişim',
      'Create PortalRole' => 'Portal Rolü Oluştur',
      'Scope Level' => 'Kapsam Düzeyi',
      'Field Level' => 'Alan Düzeyi'
    ]
  ],
  'PortalUser' => [
    'labels' => [
      'Create PortalUser' => 'Portal Kullanıcısı Yarat'
    ]
  ],
  'Preferences' => [
    'fields' => [
      'dateFormat' => 'Tarih Biçimi',
      'timeFormat' => 'Saat Biçimi',
      'timeZone' => 'Zaman Dilimi',
      'weekStart' => 'Hafta Başlangıç Günü',
      'thousandSeparator' => 'Bindelik Ayraç',
      'decimalMark' => 'Ondalık Ayraç',
      'defaultCurrency' => 'Varsayılan Para Birimi',
      'currencyList' => 'Para Birimi Listesi',
      'language' => 'Dil',
      'exportDelimiter' => 'Dışa Aktarma Sınırlayıcısı',
      'receiveAssignmentEmailNotifications' => 'Ödev sırasında eposta bildirimleri',
      'receiveMentionEmailNotifications' => 'Yayınlarda bahsedilen bildirimlerle ilgili eposta bildirimleri',
      'receiveStreamEmailNotifications' => 'Yayınlar ve durum güncellemeleri ile ilgili eposta bildirimleri',
      'assignmentNotificationsIgnoreEntityTypeList' => 'In-app assignment notifications',
      'assignmentEmailNotificationsIgnoreEntityTypeList' => 'Email assignment notifications',
      'reactionNotifications' => 'In-app notifications about reactions',
      'autoFollowEntityTypeList' => 'Oto-Takip',
      'signature' => 'Eposta İmzası',
      'dashboardTabList' => 'Sekme Listesi',
      'defaultReminders' => 'Ön Tanımlı Hatırlatıcılar',
      'defaultRemindersTask' => 'Default Reminders for Tasks',
      'theme' => 'Tema',
      'pageContentWidth' => 'Content Width',
      'useCustomTabList' => 'Özel Sekme Listesi',
      'addCustomTabs' => 'Add Custom Tabs',
      'tabList' => 'Sekme Listesi',
      'emailReplyToAllByDefault' => 'Ön Tanımlı Olarak Tümünü Yanıtla',
      'dashboardLayout' => 'Kontrol Paneli Düzeni',
      'dashboardLocked' => 'Kontrol Panelini Kilitle',
      'emailReplyForceHtml' => 'HTML\'de Yanıtla Epostasını Yanıtla',
      'doNotFillAssignedUserIfNotRequired' => 'Gerekli değilse, Atanmış Kullanıcıyı doldurmayın',
      'followEntityOnStreamPost' => 'Akışta yayınlandıktan sonra varlığı otomatik olarak takip etme',
      'followCreatedEntities' => 'Oluşturulan kayıtları otomatik takip et',
      'followCreatedEntityTypeList' => 'Belirli varlık türlerinin kayıtlarını otomatik takip et',
      'emailUseExternalClient' => 'Harici bir eposta istemcisi kullanın',
      'textSearchStoringDisabled' => 'Metin filtre saklamayı devre dışı bırak',
      'calendarSlotDuration' => 'Calendar Slot Duration',
      'calendarScrollHour' => 'Calendar Scroll to Hour'
    ],
    'links' => [],
    'options' => [
      'weekStart' => [
        0 => 'Pazar',
        1 => 'Pazartesi'
      ],
      'pageContentWidth' => [
        '' => 'Normal',
        'Wide' => 'Wide'
      ]
    ],
    'labels' => [
      'Notifications' => 'Bildirimler',
      'User Interface' => 'Kullanıcı Arayüzü',
      'Misc' => 'Tür',
      'Locale' => 'Ayarlar',
      'Reset Dashboard to Default' => 'Panoyu Varsayılan Ayarlara Sıfırla'
    ],
    'tooltips' => [
      'addCustomTabs' => 'If checked, custom tabs will be appended to default tabs. Otherwise, custom tabs will be used instead of default tabs.',
      'autoFollowEntityTypeList' => 'Kullanıcı, seçili varlık türlerinin tüm yeni kayıtlarını otomatik olarak izleyecek, akışta bilgi görecek ve bildirim alacaktır.',
      'doNotFillAssignedUserIfNotRequired' => 'Kayıt oluştururken atanan kullanıcı, zorunlu olmadıkça kendi kullanıcısıyla doldurulmaz.',
      'followCreatedEntities' => 'Yeni kayıtlar oluşturulduğunda, başka bir kullanıcıya atansa bile otomatik olarak takip edilecektir.',
      'followCreatedEntityTypeList' => 'Seçilen varlık türlerinin yeni kayıtları oluşturulduğunda, başka bir kullanıcıya atansa bile otomatik olarak takip edilecektir.'
    ],
    'tabFields' => [
      'label' => 'Label',
      'iconClass' => 'Icon',
      'color' => 'Color'
    ]
  ],
  'Role' => [
    'fields' => [
      'name' => 'Ad',
      'roles' => 'Görevler',
      'assignmentPermission' => 'Görevlendirme Yetkisi',
      'userPermission' => 'Kullanıcı Yetkisi',
      'messagePermission' => 'Mesaj İzni',
      'portalPermission' => 'Portal Yetkisi',
      'groupEmailAccountPermission' => 'Grup Eposta Erişim İzni',
      'exportPermission' => 'Yetkileri Dışa Aktar',
      'massUpdatePermission' => 'Toplu Güncelleme Yetkisi',
      'followerManagementPermission' => 'Follower Management Permission',
      'dataPrivacyPermission' => 'Veri Gizliliği İzni',
      'auditPermission' => 'Audit Permission',
      'mentionPermission' => 'Mention Permission',
      'userCalendarPermission' => 'User Calendar Permission',
      'data' => 'Veri',
      'fieldData' => 'Alan Verileri'
    ],
    'links' => [
      'users' => 'Kullanıcılar',
      'teams' => 'Takımlar'
    ],
    'tooltips' => [
      'messagePermission' => 'Allows to send messages to other users.

* all – can send to all
* team – can send only to teammates
* no – cannot send',
      'assignmentPermission' => 'Allows to assign records to other users.

* all – no restriction
* team – can assign only to teammates
* no – can assign only to self',
      'userPermission' => 'Allows to view stream of other users. Allows users to view the access levels other users have for specific records.',
      'userCalendarPermission' => 'Allows to view calendars of other users.',
      'portalPermission' => 'Access to portal information, the ability to post messages to portal users.',
      'groupEmailAccountPermission' => 'Access to group email accounts, the ability to send emails from group SMTP.',
      'exportPermission' => 'Kayıtların dışa aktarılmasına izin ver.',
      'massUpdatePermission' => 'Kayıtlar toplu olarak güncellenir',
      'followerManagementPermission' => 'Allows to manage followers of specific records.',
      'dataPrivacyPermission' => 'Kişisel verileri görüntülemeye ve silmeye izin verir.',
      'auditPermission' => 'Allows to view the audit log.',
      'mentionPermission' => 'Allows to mention other users in the Stream.

* all – can mention all
* team – can mention only teammates
* no – cannot mention'
    ],
    'labels' => [
      'Access' => 'Giriş',
      'Create Role' => 'Görev Oluştur',
      'Scope Level' => 'Kapsam Düzeyi',
      'Field Level' => 'Alan Düzeyi'
    ],
    'options' => [
      'accessList' => [
        'not-set' => 'ayarlanmadı',
        'enabled' => 'etkinleştirildi',
        'disabled' => 'devre dışı bırakıldı'
      ],
      'levelList' => [
        'all' => 'tümü',
        'team' => 'takım',
        'account' => 'Hesap',
        'contact' => 'Kişi',
        'own' => 'kendi',
        'no' => 'yok',
        'yes' => 'evet',
        'not-set' => 'ayarlanmamış'
      ]
    ],
    'actions' => [
      'read' => 'Oku',
      'edit' => 'Düzenle',
      'delete' => 'Sil',
      'stream' => 'Akış',
      'create' => 'Oluştur'
    ],
    'messages' => [
      'changesAfterClearCache' => 'Erişim kontrolündeki tüm değişiklikler, önbellek silindikten sonra uygulanır.'
    ]
  ],
  'ScheduledJob' => [
    'fields' => [
      'name' => 'Ad',
      'status' => 'Durum',
      'job' => 'Görev',
      'scheduling' => 'Zamanlama'
    ],
    'links' => [
      'log' => 'Kayıt'
    ],
    'labels' => [
      'As often as possible' => 'As often as possible',
      'Create ScheduledJob' => 'Zamanlanmış Görev Oluştur'
    ],
    'options' => [
      'job' => [
        'Cleanup' => 'Temizle',
        'CheckInboundEmails' => 'Gelen Epostaları Kontrol Et',
        'CheckEmailAccounts' => 'Kişisel eposta hesaplarını kontrol et',
        'SendEmailReminders' => 'Hatırlatıcı Eposta Gönder',
        'AuthTokenControl' => 'Kimlik Doğrulama Simgesi Kontrolü',
        'SendEmailNotifications' => 'Eposta Bildirimleri gönder',
        'CheckNewVersion' => 'Yeni versiyon denetleme',
        'ProcessWebhookQueue' => 'Web Oltası Kuyruğunu İşlet',
        'SendScheduledEmails' => 'Send Scheduled Emails',
        'ProcessMassEmail' => 'Toplu Epostalar gönder',
        'ControlKnowledgeBaseArticleStatus' => 'Bilgi Bankası Makalesinin Durumunu Kontrol Edin'
      ],
      'cronSetup' => [
        'linux' => 'Not: Espo\'nun planlanmış işleri çalıştırabilmesi için şu kodları crontab dosyasına ekleyin:',
        'mac' => 'Not: Espo\'nun planlanmış işleri çalıştırabilmesi için şu kodları crontab dosyasına ekleyin:',
        'windows' => 'Not: Espo\'nun planlanmış işleri Windows Scheduled Task ile kullanabilmesi için şu kodlarla bir BATCH dosyası oluşturun:',
        'default' => 'Not: Bu komutu CronTab\'a ekleyin:'
      ],
      'status' => [
        'Active' => 'Etkin',
        'Inactive' => 'Pasif'
      ]
    ],
    'tooltips' => [
      'scheduling' => 'Crontab notation. Defines frequency of job runs.

`*/5 * * * *` - every 5 minutes

`0 */2 * * *` - every 2 hours

`30 1 * * *` - at 01:30 once a day

`0 0 1 * *` - on the first day of the month'
    ]
  ],
  'ScheduledJobLogRecord' => [
    'fields' => [
      'status' => 'Durum',
      'executionTime' => 'Çalışma Süresi',
      'target' => 'Hedef'
    ]
  ],
  'Settings' => [
    'fields' => [
      'useCache' => 'Önbelleği Kullan',
      'dateFormat' => 'Tarih Biçimi',
      'timeFormat' => 'Saat Biçimi',
      'timeZone' => 'Zaman Dilimi',
      'weekStart' => 'Hafta Başlangıç Günü',
      'thousandSeparator' => 'Bindelik Ayraç',
      'decimalMark' => 'Ondalık Ayraç',
      'defaultCurrency' => 'Varsayılan Para Birimi',
      'baseCurrency' => 'Temel Para Birimi',
      'currencyRates' => 'Kur Değerleri',
      'currencyList' => 'para Birimi Listesi',
      'language' => 'Dil',
      'companyLogo' => 'Şirket Logosu',
      'smsProvider' => 'SMS Sağlayıcı',
      'outboundSmsFromNumber' => 'SMS Gelen Numara',
      'emailAddress' => 'Eposta',
      'outboundEmailFromName' => 'Kimden',
      'outboundEmailFromAddress' => 'Gönderen Adresi',
      'outboundEmailIsShared' => 'Paylaşıldı',
      'emailAddressLookupEntityTypeList' => 'Eposta adresi arama kapsamları',
      'emailAddressSelectEntityTypeList' => 'Email address select scopes',
      'recordsPerPage' => 'Sayfa Başına Kayıt Adedi',
      'recordsPerPageSmall' => 'Sayfa Başına Kayıt (Küçük)',
      'recordsPerPageSelect' => 'Sayfa Başına Kayıt Adedi (Seçili)',
      'recordsPerPageKanban' => 'Sayfa Başına Kayıt Adedi (Kanban)',
      'tabList' => 'Sekme Listesi',
      'quickCreateList' => 'Çabuk Oluşturma Listesi',
      'exportDelimiter' => 'Dışa Aktarma Sınırlayıcısı',
      'globalSearchEntityList' => 'Global Arama Aracısı Listesi',
      'authenticationMethod' => 'Kimlik doğrulama metodu',
      'ldapHost' => 'Sunucu',
      'ldapPort' => 'Port',
      'ldapAuth' => 'Kimlik doğrulama',
      'ldapUsername' => 'Tam Kullanıcı DN',
      'ldapPassword' => 'Şifre',
      'ldapBindRequiresDn' => 'Bağlama DN gerektirir',
      'ldapBaseDn' => 'Temel DN',
      'ldapAccountCanonicalForm' => 'Kanonik Hesap Formu',
      'ldapAccountDomainName' => 'Domain Hesap İsmi',
      'ldapTryUsernameSplit' => 'Kullanıcı Adını Ayırmayı Dene',
      'ldapPortalUserLdapAuth' => 'Portal Kullanıcıları için LDAP Kimlik Doğrulaması Kullanın',
      'ldapCreateEspoUser' => 'EspoCRM kullanıcı oluştur',
      'ldapSecurity' => 'Güvenlik',
      'ldapUserLoginFilter' => 'Kullanıcı giriş filtresi',
      'ldapAccountDomainNameShort' => 'Hesap Alan Adı Kısa',
      'ldapOptReferrals' => 'Opt Tavsiyeler',
      'ldapUserNameAttribute' => 'Kullanıcı Adı Özniteliği',
      'ldapUserObjectClass' => 'Kullanıcı ObjectClass',
      'ldapUserTitleAttribute' => 'Kullanıcı Başlığı Öznitelik',
      'ldapUserFirstNameAttribute' => 'Kullanıcı Adı Soyadı',
      'ldapUserLastNameAttribute' => 'Kullanıcı Soyadı Özniteliği',
      'ldapUserEmailAddressAttribute' => 'Kullanıcı Eposta Adresi Özniteliği',
      'ldapUserTeams' => 'Kullanıcı Ekipleri',
      'ldapUserDefaultTeam' => 'Kullanıcı Varsayılan Takımı',
      'ldapUserPhoneNumberAttribute' => 'Kullanıcı Telefon Numarası Öznitelik',
      'ldapPortalUserPortals' => 'Portal Kullanıcısı için Varsayılan Görünümler',
      'ldapPortalUserRoles' => 'Portal Kullanıcısı için Varsayılan Roller',
      'exportDisabled' => 'Dışa aktarımı pasif yap (sadece yönetici izinlidir)',
      'assignmentNotificationsEntityList' => 'Görev hakkında bilgi verilecek seçenekler',
      'assignmentEmailNotifications' => 'Atama üzerine bildirimler',
      'assignmentEmailNotificationsEntityList' => 'Atama eposta bildirim kapsamları',
      'streamEmailNotifications' => 'Dahili kullanıcılar için Akış güncellemeleri hakkında bildirimler',
      'portalStreamEmailNotifications' => 'Portal kullanıcıları için Akış güncellemeleri ile ilgili bildirimler',
      'streamEmailNotificationsEntityList' => 'Akış eposta bildirim kapsamları',
      'streamEmailNotificationsTypeList' => 'Ne hakkında bildirimde bulunulmalı',
      'streamEmailWithContentEntityTypeList' => 'Entities with email body in stream notes',
      'emailNotificationsDelay' => 'Eposta bildirimlerinin gecikmesi (saniye)',
      'b2cMode' => 'B2C Modu',
      'avatarsDisabled' => 'Avatarları pasif yap',
      'followCreatedEntities' => 'Oluşturulan Varlıkları Takip Et',
      'displayListViewRecordCount' => 'Toplam Sayıyı Göster (liste görünümünde)',
      'theme' => 'Tema',
      'userThemesDisabled' => 'Kullanıcı Temalarını Devre Dışı Bırak',
      'attachmentUploadMaxSize' => 'Upload Max Size (Mb)',
      'attachmentUploadChunkSize' => 'Upload Chunk Size (Mb)',
      'emailMessageMaxSize' => 'Eposta maksimum boyut (MB)',
      'massEmailMaxPerHourCount' => 'Saat başı gönderilen maksimum eposta sayısı',
      'massEmailMaxPerBatchCount' => 'Toplu iş başına gönderilen maksimum eposta sayısı',
      'personalEmailMaxPortionSize' => 'Kişisel hesap getirme için maksimum e-posta bölümü boyutu',
      'inboundEmailMaxPortionSize' => 'Grup hesabı getirme için maksimum eposta bölümü boyutu',
      'maxEmailAccountCount' => 'Kullanıcı başına maksimum kişisel eposta hesabı sayısı',
      'emailScheduledBatchCount' => 'Max number of scheduled emails sent per batch',
      'authTokenLifetime' => 'Yetki Jetonu Ömrü (saat)',
      'authTokenMaxIdleTime' => 'Kimlik Doğrulama Sırası Maks Gecikme Süresi (saat)',
      'dashboardLayout' => 'Kontrol Paneli Düzeni (varsayılan)',
      'siteUrl' => 'Site URL',
      'addressPreview' => 'Adres ön izleme',
      'addressFormat' => 'Adres formatı',
      'personNameFormat' => 'Kişi İsim Biçimi',
      'notificationSoundsDisabled' => 'Bildirim seslerini pasif yap',
      'newNotificationCountInTitle' => 'Yeni bildirim numarasını sayfa başlığında görüntüle',
      'applicationName' => 'Uygulama ismi',
      'calendarEntityList' => 'Takvim Varlık Listesi',
      'busyRangesEntityList' => 'Free/Busy Entity List',
      'mentionEmailNotifications' => 'Gönderilerde bahsedilenlerle ilgili eposta gönder',
      'massEmailDisableMandatoryOptOutLink' => 'Zorunlu pasif bırakma bağlantısını pasif yap',
      'massEmailOpenTracking' => 'Eposta takibini aç',
      'massEmailVerp' => 'VERP Kullan',
      'activitiesEntityList' => 'Etkinlikler Varlık Listesi',
      'historyEntityList' => 'Geçmiş Varlık Listesi',
      'currencyFormat' => 'Döviz Formatı',
      'currencyDecimalPlaces' => 'Döviz Ondalık Hanesi',
      'aclAllowDeleteCreated' => 'Oluşturulan kayıtları kaldırmaya izin ver',
      'adminNotifications' => 'Yönetim panelindeki sistem bildirimleri',
      'adminNotificationsNewVersion' => 'Yeni EspoCRM sürümü yayınlandığında bildirim göster',
      'adminNotificationsNewExtensionVersion' => 'Eklentilerin yeni sürümleri kullanıma sunulduğunda bildirim göster',
      'textFilterUseContainsForVarchar' => 'Varchar alanlarını filtrelerken \'içerir\' değişken karakterini kullanın',
      'phoneNumberNumericSearch' => 'Sayısal telefon numarası arama',
      'phoneNumberInternational' => 'Uluslararası telefon numaraları',
      'phoneNumberExtensions' => 'Phone number extensions',
      'phoneNumberPreferredCountryList' => 'Tercih edilen ülke telefon kodları',
      'authTokenPreventConcurrent' => 'Kullanıcı başına yalnızca bir kimlik doğrulama belirteci',
      'scopeColorsDisabled' => 'Kapsam renklerini devre dışı bırak',
      'tabColorsDisabled' => 'Sekme renklerini devre dışı bırak',
      'tabIconsDisabled' => 'Sekme simgelerini devre dışı bırak',
      'emailAddressIsOptedOutByDefault' => 'Yeni eposta hesaplarını devre dışı bırakıldı olarak işaretleyin',
      'outboundEmailBccAddress' => 'Harici kişiler için BCC adresi',
      'cleanupDeletedRecords' => 'Silinen kayıtları temizle',
      'addressCityList' => 'Şehir Adreslerini Otomatik Tamamlama Listesi',
      'addressStateList' => 'Address State Autocomplete List',
      'fiscalYearShift' => 'Mali Yıl Başlangıcı',
      'jobRunInParallel' => 'Jobs Run in Parallel',
      'jobMaxPortion' => 'Jobs Max Portion',
      'jobPoolConcurrencyNumber' => 'Jobs Pool Concurrency Number',
      'jobForceUtc' => 'UTC Saat Dilimi\'ni Zorla',
      'daemonInterval' => 'Daemon Interval',
      'daemonMaxProcessNumber' => 'Daemon Max Process Number',
      'daemonProcessTimeout' => 'Daemon Process Timeout',
      'cronDisabled' => 'Cron\'u devre dışı bırak',
      'maintenanceMode' => 'Bakım Modu',
      'useWebSocket' => 'WebSocket Kullan',
      'passwordRecoveryDisabled' => 'Şifre kurtarmayı devre dışı bırak',
      'passwordRecoveryForAdminDisabled' => 'Yöneticiler için şifre kurtarmayı devre dışı bırak',
      'passwordRecoveryForInternalUsersDisabled' => 'Mullanıcılar için şifre kurtarmayı devre dışı bırak',
      'passwordRecoveryNoExposure' => 'Prevent email address exposure on password recovery form',
      'passwordGenerateLength' => 'Oluşturulacak şifrelerin uzunluğu',
      'passwordStrengthLength' => 'Minimum şifre uzunluğu',
      'passwordStrengthLetterCount' => 'Şifrede gerekli harf sayısı',
      'passwordStrengthNumberCount' => 'Şifrede gerekli rakam sayısı',
      'passwordStrengthBothCases' => 'Şifre büyük ve küçük harflerden oluşmalıdır',
      'passwordStrengthSpecialCharacterCount' => 'Number of special character required in password',
      'auth2FA' => '2 Taraflı Kimlik Doğrulamayı Etkinleştir',
      'auth2FAForced' => 'Force regular users to set up 2FA',
      'auth2FAMethodList' => 'Mevcut 2FA yöntemleri',
      'auth2FAInPortal' => 'Portallerda 2FA\'ya izin ver',
      'workingTimeCalendar' => 'Çalışma Süresi Takvimi',
      'oidcClientId' => 'OIDC Client ID',
      'oidcClientSecret' => 'OIDC Client Secret',
      'oidcAuthorizationRedirectUri' => 'OIDC Authorization Redirect URI',
      'oidcAuthorizationEndpoint' => 'OIDC Authorization Endpoint',
      'oidcTokenEndpoint' => 'OIDC Token Endpoint',
      'oidcUserInfoEndpoint' => 'OIDC UserInfo Endpoint',
      'oidcJwksEndpoint' => 'OIDC JSON Web Anahtarı Seti Uç Noktası',
      'oidcJwtSignatureAlgorithmList' => 'OIDC JWT Allowed Signature Algorithms',
      'oidcScopes' => 'OIDC Scopes',
      'oidcGroupClaim' => 'OIDC Group Claim',
      'oidcCreateUser' => 'OIDC Create User',
      'oidcUsernameClaim' => 'OIDC Username Claim',
      'oidcTeams' => 'OIDC Teams',
      'oidcSync' => 'OIDC Sync',
      'oidcSyncTeams' => 'OIDC Sync Teams',
      'oidcFallback' => 'OIDC Fallback Login',
      'oidcAllowRegularUserFallback' => 'OIDC Allow fallback login for regular users',
      'oidcAllowAdminUser' => 'OIDC Allow OIDC login for admin users',
      'oidcLogoutUrl' => 'OIDC Logout URL',
      'oidcAuthorizationPrompt' => 'OIDC Authorization Prompt',
      'pdfEngine' => 'PDF Dönüştürücü',
      'quickSearchFullTextAppendWildcard' => 'Append wildcard in quick search',
      'authIpAddressCheck' => 'Restrict access by IP address',
      'authIpAddressWhitelist' => 'IP Address Whitelist',
      'authIpAddressCheckExcludedUsers' => 'Users excluded from check',
      'availableReactions' => 'Available Reactions',
      'smtpServer' => 'Sunucu',
      'smtpAuth' => 'Kimlik doğrulama',
      'smtpSecurity' => 'Güvenlik',
      'smtpUsername' => 'Kullanıcı Adı',
      'smtpPassword' => 'Şifre',
      'addressCountryList' => 'Ülke Adreslerini Otomatik Tamamlama Listesi'
    ],
    'options' => [
      'authenticationMethod' => [
        'Oidc' => 'OIDC'
      ],
      'currencyFormat' => [
        1 => '10 USD',
        2 => '$10',
        3 => '10 $'
      ],
      'personNameFormat' => [
        'firstLast' => 'First Last',
        'lastFirst' => 'Last First',
        'firstMiddleLast' => 'First Middle Last',
        'lastFirstMiddle' => 'Last First Middle'
      ],
      'streamEmailNotificationsTypeList' => [
        'Post' => 'Gönderiler',
        'Status' => 'Durum güncellemeleri',
        'EmailReceived' => 'Gelen epostalar'
      ],
      'auth2FAMethodList' => [
        'Totp' => 'TOTP',
        'Email' => 'Eposta',
        'Sms' => 'SMS'
      ],
      'smtpSecurity' => [
        'SSL' => 'SSL/TLS',
        'TLS' => 'STARTTLS'
      ]
    ],
    'tooltips' => [
      'authIpAddressCheckExcludedUsers' => 'Users that will be able to log in regardless whether their IP address is in the whitelist.',
      'authIpAddressWhitelist' => 'A list of IP addresses or ranges in CIDR notation.

Portals are not affected by restriction.',
      'workingTimeCalendar' => 'Varsayılan olarak tüm kullanıcılara uygulanacak çalışma zamanı takvimidir.',
      'displayListViewRecordCount' => 'A total number of records will be shown on the list view.',
      'currencyList' => 'What currencies will be available in the system.',
      'activitiesEntityList' => 'What records will be available in the Activities panel.',
      'historyEntityList' => 'What records will be available in the History panel.',
      'calendarEntityList' => 'What records will be available in the Calendar.',
      'addressStateList' => 'State suggestions for address fields.',
      'addressCityList' => 'City suggestions for address fields.',
      'addressCountryList' => 'Country suggestions for address fields.',
      'exportDisabled' => 'Users won\'t be able to export records. Only admin will be allowed.',
      'globalSearchEntityList' => 'What records can be searched with Global Search.',
      'siteUrl' => 'A URL of this EspoCRM instance. You need to change it if you move to another domain.',
      'useCache' => 'Not recommended to disable, unless for development purpose.',
      'useWebSocket' => 'WebSocket, bir sunucu ile tarayıcı arasında iki yönlü etkileşimli iletişime olanak tanır. Sunucunuzda WebSocket arka plan programının kurulmasını gerektirir. Daha fazla bilgi için belgelere bakın.',
      'passwordRecoveryForInternalUsersDisabled' => 'Only portal users will be able to recover password.',
      'passwordRecoveryNoExposure' => 'It won\'t be possible to determine whether a specific email address is registered in the system.',
      'emailAddressLookupEntityTypeList' => 'Eposta adresinin otomatik tamamlanması için.',
      'emailAddressSelectEntityTypeList' => 'Entity types available when searching for an email address from a modal.',
      'emailNotificationsDelay' => 'Bir mesaj, bildirim gönderilmeden önce belirtilen zaman dilimi içerisinde düzenlenebilir.',
      'outboundEmailFromAddress' => 'System emails will be sent from this email address. A [group email account](#InboundEmail) with the same email address must be set up and properly configured to send emails.',
      'busyRangesEntityList' => 'What will be taken into account when showing busy time ranges in scheduler & timeline.',
      'massEmailVerp' => 'Değişken zarf dönüş yolu(VERP). Geri dönen mesajların daha iyi işlenmesi için. SMTP sağlayıcınızın bunu desteklediğinden emin olun.',
      'recordsPerPage' => 'Liste görünümlerinde başlangıçta görüntülenen kayıtların sayısı.',
      'recordsPerPageSmall' => 'İlişki panellerinde başlangıçta görüntülenen kayıtların sayısı.',
      'recordsPerPageSelect' => 'Number of records initially displayed when selecting records.',
      'recordsPerPageKanban' => 'Başlangıçta kanban sütunlarında görüntülenen kayıtların sayısı.',
      'outboundEmailIsShared' => 'Kullanıcıların bu SMTP yoluyla eposta göndermesine izin verin.',
      'followCreatedEntities' => 'Kullanıcılar oluşturdukları kayıtları otomatik olarak izleyecektir.',
      'emailMessageMaxSize' => 'Belirli bir boyutu aşan tüm gelen epostalar gövdesi ve ekleri olmadan alınır.',
      'authTokenLifetime' => 'Belirteçlerin ne kadar süre var olabileceğini tanımlar. \\ N0 - sona erme anlamına gelir.',
      'authTokenMaxIdleTime' => 'Son erişim belirteçlerinin ne kadar zamandan beri mevcut olabileceğini tanımlar. \\ N0 - son kullanma anlamına gelir.',
      'userThemesDisabled' => 'İşaretlenirse kullanıcılar başka bir tema seçemez.',
      'ldapUsername' => 'Diğer kullanıcıları aramaya izin veren tam sistem kullanıcı DN\'si. Örneğin, \\ "CN = LDAP Sistem Kullanıcısı, OU = kullanıcılar, OU = espocrm, DC = test, DC = lan ".',
      'ldapPassword' => 'LDAP sunucusuna erişmek için kullanılan parola.',
      'ldapAuth' => 'LDAP sunucusu için kimlik bilgilerine erişin.',
      'ldapUserNameAttribute' => 'Kullanıcıyı tanımlayan özellik. \\ NE.g. \\ "UserPrincipalName " veya \\ "sAMAccountName " Active Directory için \\ "kullanıcı " OpenLDAP için.',
      'ldapUserObjectClass' => 'Kullanıcıları aramak için ObjectClass özniteliği. Örneğin, AD için \\ "kişi ", OpenLDAP için \\ "inetOrgPerson ".',
      'ldapAccountCanonicalForm' => 'The type of your account canonical form. There are 4 options:

- \'Dn\' - the form in the format \'CN=tester,OU=espocrm,DC=test, DC=lan\'.

- \'Username\' - the form \'tester\'.

- \'Backslash\' - the form \'COMPANY\\tester\'.

- \'Principal\' - the form \'tester@company.com\'.',
      'ldapBindRequiresDn' => 'Kullanıcı adını DN biçiminde biçimlendirme seçeneği.',
      'ldapBaseDn' => 'Kullanıcıları aramak için kullanılan varsayılan taban DN. Örneğin, \\ "OU = kullanıcılar, OU = espocrm, DC = test, DC = lan ".',
      'ldapTryUsernameSplit' => 'Bir kullanıcı adını alan adıyla bölme seçeneği.',
      'ldapOptReferrals' => 'Yönlendirme LDAP istemcisine uyulması gerekiyorsa.',
      'ldapPortalUserLdapAuth' => 'Portal kullanıcılarının Espo kimlik doğrulaması yerine LDAP kimlik doğrulamasını kullanmasına izin verin.',
      'ldapCreateEspoUser' => 'Bu seçenek, EspoCRM\'nin LDAP\'den bir kullanıcı oluşturmasını sağlar.',
      'ldapUserFirstNameAttribute' => 'Kullanıcının ilk adını belirlemek için kullanılan LDAP özniteliği. Örneğin \\ "verilen ad ".',
      'ldapUserLastNameAttribute' => 'Kullanıcının soyadını belirlemek için kullanılan LDAP özniteliği. Örneğin \\ "sn ".',
      'ldapUserTitleAttribute' => 'Kullanıcı başlığını belirlemek için kullanılan LDAP özniteliği. Örneğin \\ "başlık ".',
      'ldapUserEmailAddressAttribute' => 'Kullanıcı eposta adresini belirlemek için kullanılan LDAP özelliği. Örneğin \\ "posta ".',
      'ldapUserPhoneNumberAttribute' => 'Kullanıcı telefon numarasını belirlemek için kullanılan LDAP özniteliği. Örneğin \\ "telefon numarası ".',
      'ldapUserLoginFilter' => 'EspoCRM\'yi kullanabilen kullanıcıları kısıtlamaya izin veren filtre. Örneğin, \\ "memberOf = CN = espoGroup, OU = gruplar, OU = espocrm, DC = test, DC = lan ".',
      'ldapAccountDomainName' => 'LDAP sunucusuna yetki vermek için kullanılan etki alanı.',
      'ldapAccountDomainNameShort' => 'LDAP sunucusuna yetki vermek için kullanılan kısa alan.',
      'ldapUserTeams' => 'Yaratılan takımlar. Daha fazlası için bkz. Kullanıcı profili.',
      'ldapUserDefaultTeam' => 'Oluşturulan kullanıcı için varsayılan ekip. Daha fazlası için bkz. Kullanıcı profili.',
      'ldapPortalUserPortals' => 'Oluşturulan Portal Kullanıcısı için Varsayılan Portaller',
      'ldapPortalUserRoles' => 'Oluşturulan Portal Kullanıcısı için Varsayılan Roller',
      'b2cMode' => 'EspoCRM varsayılan olarak B2B için uyarlanmıştır. B2C\'ye geçebilirsiniz.',
      'currencyDecimalPlaces' => 'Ondalık basamak sayısı. Boşsa, boş olmayan tüm ondalık basamaklar görüntülenecektir.',
      'aclStrictMode' => 'Etkin: Rollerde belirtilmemişse kapsamlara erişim yasaklanır.

Devre Dışı: Rollerde belirtilmemişse kapsamlara erişime izin verilir.',
      'aclAllowDeleteCreated' => 'Kullanıcılar, silme erişimi olmasa bile oluşturdukları kayıtları kaldırabilecektir.',
      'textFilterUseContainsForVarchar' => 'If not checked then \'starts with\' operator is used. You can use the wildcard \'%\'.',
      'streamEmailNotificationsEntityList' => 'Takip edilen kayıtların akış güncellemeleri hakkında eposta bildirimleri. Kullanıcılar, yalnızca belirtilen varlık türleri için eposta bildirimleri alacaktır.',
      'authTokenPreventConcurrent' => 'Kullanıcılar aynı anda birden fazla cihazda oturum açamaz.',
      'emailAddressIsOptedOutByDefault' => 'Yeni kayıt oluştururken, eposta adresi devre dışı bırakılmış olarak işaretlenecektir.',
      'cleanupDeletedRecords' => 'Kaldırılan kayıtlar bir süre sonra veritabanından silinecektir.',
      'jobRunInParallel' => 'İşlemler paralel süreçlerde yürütülecektir.',
      'jobPoolConcurrencyNumber' => 'Aynı anda çalışan maksimum işlem sayısı.',
      'jobMaxPortion' => 'Bir yürütme başına işlenen maksimum iş sayısı.',
      'jobForceUtc' => 'Zamanlanmış işler için UTC saat dilimini kullanın, aksi halde varsayılan saat dilimi kullanılacaktır.',
      'daemonInterval' => 'Interval between process cron runs in seconds.',
      'daemonMaxProcessNumber' => 'Aynı anda çalışan maksimum zamanlanmış işlemi sayısı.',
      'daemonProcessTimeout' => 'Max execution time (in seconds) allocated for a single cron process.',
      'cronDisabled' => 'Cron çalışmayacak',
      'maintenanceMode' => 'Sisteme sadece yöneticilerin erişimi olacaktır.',
      'oidcGroupClaim' => 'A claim to use for team mapping.',
      'oidcFallback' => 'Allow login by username/password.',
      'oidcCreateUser' => 'Create a new user in Espo when no matching user found.',
      'oidcSync' => 'Sync user data (on every login).',
      'oidcSyncTeams' => 'Sync user teams (on every login).',
      'oidcUsernameClaim' => 'A claim to use for a username (for user matching and creation).',
      'oidcTeams' => 'Espo teams mapped against groups/teams/roles of the identity provider. Teams with an empty mapping value will be always assigned to a user (when creating or syncing).',
      'oidcLogoutUrl' => 'An URL the browser will redirect to after logging out from Espo. Intended for clearing the session information in the browser and doing logging out on the provider side. Usually the URL contains a redirect-URL parameter, to return back to Espo.

Available placeholders:
* `{siteUrl}`
* `{clientId}`',
      'quickSearchFullTextAppendWildcard' => 'Append a wildcard to an autocomplete search query when Full-Text search is enabled. Reduces search performance.'
    ],
    'labels' => [
      'Group Tab' => 'Group Tab',
      'Divider' => 'Ayıraç',
      'System' => 'Sistem',
      'Locale' => 'Yerel',
      'Search' => 'Ara',
      'Misc' => 'Misc',
      'SMTP' => 'SMTP',
      'General' => 'Genel',
      'Phone Numbers' => 'Telefon Numaraları',
      'Navbar' => 'Gezinme çubuğu',
      'Dashboard' => 'Gösterge Paneli',
      'Configuration' => 'Yapılandırma',
      'In-app Notifications' => 'Uygulama İçi Bildirim',
      'Email Notifications' => 'Eposta uyarıları',
      'Currency Settings' => 'Para Birimi Ayarları',
      'Currency Rates' => 'Döviz Kurları',
      'Mass Email' => 'Toplu Eposta',
      'Scheduled Send' => 'Scheduled Send',
      'Test Connection' => 'Bağlantıyı Test Et',
      'Connecting' => 'Bağlanıyor...',
      'Activities' => 'Faaliyetler ',
      'Admin Notifications' => 'Yönetici Bildirimleri',
      'Passwords' => 'Şifre',
      '2-Factor Authentication' => '2 taraflı Kimlik Doğrulaması',
      'Attachments' => 'Attachments',
      'IdP Group' => 'IdP Group',
      'Access' => 'Access',
      'Strength' => 'Strength',
      'Recovery' => 'Recovery'
    ],
    'messages' => [
      'ldapTestConnection' => 'Bağlantı başarıyla kuruldu.'
    ]
  ],
  'Stream' => [
    'messages' => [
      'infoMention' => 'Type **@username** to mention user in the post.',
      'infoSyntax' => 'Available markdown syntax',
      'couldNotAddFollowerUserHasNoAccessToStream' => 'Could not add the user \'{userName}\' to the followers. The user does not have \'stream\' access to the record.'
    ],
    'syntaxItems' => [
      'code' => 'kod',
      'multilineCode' => 'çok satırlı kod',
      'strongText' => 'strong text',
      'emphasizedText' => 'vurgulanan metin',
      'deletedText' => 'silinmiş metin',
      'blockquote' => 'Alıntı',
      'link' => 'bağlantı'
    ]
  ],
  'Team' => [
    'fields' => [
      'name' => 'Ad',
      'roles' => 'Roller',
      'layoutSet' => 'Layout Set',
      'workingTimeCalendar' => 'Çalışma Süresi Takvimi',
      'positionList' => 'Pozisyon Listesi',
      'userRole' => 'User Role'
    ],
    'links' => [
      'users' => 'Kullanıcılar',
      'notes' => 'Notlar',
      'roles' => 'Roller',
      'layoutSet' => 'Layout Set',
      'workingTimeCalendar' => 'Çalışma Süresi Takvimi',
      'inboundEmails' => 'Grup Eposta Hesapları',
      'groupEmailFolders' => 'Grup Eposta Klasörü'
    ],
    'tooltips' => [
      'workingTimeCalendar' => 'A calendar will be applied to users who have this team set as a Default Team.',
      'layoutSet' => 'Provides the ability to have layouts that differ from standard ones. Layout Set will be applied to users who have this team set as Default Team.',
      'roles' => 'Rollere Erişim. Bu ekibin kullanıcıları, seçilen rollerden erişim kontrolü düzeyi elde eder.',
      'positionList' => 'Bu takımdaki mevcut pozisyonlar. Örn, Satış Görevlisi, Müdür.'
    ],
    'labels' => [
      'Create Team' => 'Takım Oluştur'
    ]
  ],
  'Template' => [
    'fields' => [
      'name' => 'Ad',
      'body' => 'Gövde',
      'entityType' => 'Varlık Türü',
      'header' => 'Başlık',
      'footer' => 'Sayfa Altbilgi',
      'leftMargin' => 'Sol Boşluk',
      'topMargin' => 'Üst boşluk',
      'rightMargin' => 'Sağ Boşluk',
      'bottomMargin' => 'Alt Kenar Boşluğu',
      'printFooter' => 'Baskı Altlığı',
      'printHeader' => 'Print Header',
      'footerPosition' => 'Altbilgi Konumu',
      'headerPosition' => 'Header Position',
      'variables' => 'Uygun Yertutucuları',
      'pageOrientation' => 'Sayfa yönlendirmesi',
      'pageFormat' => 'Kağıt Biçimi',
      'pageWidth' => 'Sayfa Genişliği (mm',
      'pageHeight' => 'Sayfa Yüksekliği (mm)',
      'fontFace' => 'Yazı Tipi',
      'title' => 'Title',
      'style' => 'Stil'
    ],
    'links' => [],
    'labels' => [
      'Create Template' => 'Şablon Oluştur'
    ],
    'options' => [
      'pageOrientation' => [
        'Portrait' => 'Dikey',
        'Landscape' => 'Yatay'
      ],
      'pageFormat' => [
        'Custom' => 'Özel'
      ],
      'placeholders' => [
        'pagebreak' => 'Page break',
        'today' => 'Bugün (Tarih)',
        'now' => 'Now (date-time)'
      ],
      'fontFace' => []
    ],
    'tooltips' => [
      'footer' => 'Sayfa numarasını basmak için {pageNumber} kullanın.',
      'variables' => 'Başlık, Gövde veya Alt Satır yertutucusu için kopyala-yapıştır gerekli.'
    ]
  ],
  'User' => [
    'fields' => [
      'name' => 'Ad',
      'userName' => 'Kullanıcı Adı',
      'title' => 'Başlık',
      'type' => 'Tip',
      'isAdmin' => 'Yönetici',
      'defaultTeam' => 'Varsayılan Takım',
      'emailAddress' => 'Eposta',
      'phoneNumber' => 'Telefon',
      'roles' => 'Görevler',
      'portals' => 'Portaller',
      'portalRoles' => 'Portal Rolleri',
      'teamRole' => 'Pozisyon',
      'password' => 'Şifre',
      'currentPassword' => 'Geçerli Şifre',
      'passwordConfirm' => 'Şifreyi Doğrulayın',
      'newPassword' => 'Yeni Şifre',
      'newPasswordConfirm' => 'Yeni şifreyi Doğrula',
      'yourPassword' => 'Geçerli şifreniz',
      'avatar' => 'Foto',
      'avatarColor' => 'Avatar Color',
      'isActive' => 'Etkin mi?',
      'isPortalUser' => 'Portal kullanıcısı mı',
      'contact' => 'Kişi',
      'accounts' => 'Hesaplar',
      'account' => 'Hesap (Birincil)',
      'sendAccessInfo' => 'Kullanıcıya Erişim Bilgisiyle Eposta Gönder',
      'portal' => 'Portal',
      'gender' => 'Cinsiyet',
      'position' => 'Takım halinde pozisyon',
      'ipAddress' => 'IP Adresi',
      'passwordPreview' => 'Şifre Ön İzleme',
      'isSuperAdmin' => 'Is Super Admin',
      'lastAccess' => 'Son Erişim',
      'apiKey' => 'API Anahtarı',
      'secretKey' => 'Gizli Kelime',
      'dashboardTemplate' => 'Pano Şablonu',
      'workingTimeCalendar' => 'Çalışma Süresi Takvimi',
      'auth2FA' => '2FA',
      'authMethod' => 'Kimlik Doğrulama Yöntemi',
      'auth2FAEnable' => '2 Taraflı Kimlik Doğrulamayı Etkinleştir',
      'auth2FAMethod' => '2FA Yöntemi',
      'auth2FATotpSecret' => '2FA TOTP Secret',
      'layoutSet' => 'Düzen Kümesi',
      'acceptanceStatus' => 'Kabul Durumu',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Kabul Durumu (Aramalar)'
    ],
    'links' => [
      'defaultTeam' => 'Varsayılan Takım',
      'teams' => 'Takımlar',
      'roles' => 'Görevler',
      'notes' => 'Notlar',
      'portals' => 'Portaller',
      'portalRoles' => 'Portal Rolleri',
      'contact' => 'Kişi',
      'accounts' => 'Hesaplar',
      'account' => 'Hesap (Birincil)',
      'tasks' => 'Görevler',
      'userData' => 'User Data',
      'dashboardTemplate' => 'Pano Şablonu',
      'workingTimeCalendar' => 'Çalışma Süresi Takvimi',
      'workingTimeRanges' => 'Working Time Exceptions',
      'layoutSet' => 'Düzen Kümesi',
      'targetLists' => 'Hedef Listeler'
    ],
    'labels' => [
      'Create User' => 'Kullanıcı Oluştur',
      'Generate' => 'Oluştur',
      'Access' => 'Erişim',
      'Preferences' => 'Seçenekler',
      'Change Password' => 'Şifreyi Değiştir',
      'Teams and Access Control' => 'Takımlar ve Erişim Kontrolü',
      'Forgot Password?' => 'Şifremi unuttum?',
      'Password Change Request' => 'Şifre Değiştirme İsteği',
      'Email Address' => 'Eposta Adresi',
      'External Accounts' => 'Harici Hesaplar',
      'Email Accounts' => 'Eposta hesapları',
      'Portal' => 'Internet anakapısı',
      'Create Portal User' => 'Portal Kullanıcısı Oluştur',
      'Proceed w/o Contact' => 'İletişimsiz olarak devam et',
      'Generate New API Key' => 'Yeni API Anahtarı Oluştur',
      'Generate New Password' => 'Yeni Şifre Oluştur',
      'Send Password Change Link' => 'Send Password Change Link',
      'Back to login form' => 'Giriş sayfasına geri dön',
      'Requirements' => 'Gereksinimler',
      'Security' => 'Güvenlik',
      'Reset 2FA' => '2FA\'yı sıfırla',
      'Code' => 'Kod',
      'Secret' => 'Secret',
      'Send Code' => 'Send Code',
      'Login Link' => 'Login Link'
    ],
    'tooltips' => [
      'defaultTeam' => 'Bu kullanıcı tarafından oluşturulan tüm kayıtlar varsayılan olarak bu takımla ilişkilendirilir.',
      'userName' => 'Harf az, sayı 0-9, nokta, tire, @ işaret ve alt çizgiye izin verilir.',
      'isAdmin' => 'Yönetici kullanıcısı her şeye erişebilir.',
      'isActive' => 'İşaretlenmezse, kullanıcı giriş yapamaz.',
      'teams' => 'Bu kullanıcının bağlı olduğu takımlar. Erişim kontrol seviyesi takımın rollerinden devralınmıştır.',
      'roles' => 'Ek erişim rolleri. Kullanıcı herhangi bir ekibe üye değilse veya bu kullanıcı için yalnızca erişim denetimi düzeyini genişletmeniz gerekiyorsa kullanın.',
      'portalRoles' => 'Ek portal rolleri. Erişim kontrol düzeyini yalnızca bu kullanıcıya genişletmek için kullanın.',
      'portals' => 'Bu kullanıcının erişebildiği portaller.',
      'layoutSet' => 'Kullanıcı için varsayılanlar yerine belirli bir kümedeki düzenler uygulanacaktır.'
    ],
    'messages' => [
      '2faMethodNotConfigured' => '2FA yöntemi sistemde tam olarak yapılandırılmamıştır.',
      'loginAs' => 'Open the login link in an incognito window to preserve your current session. Use your admin credentials to log in.',
      'sendPasswordChangeLinkConfirmation' => 'An email with a unique link will be sent to the user allowing them to change their password. The link will expire after a specific amount of time.',
      'passwordRecoverySentIfMatched' => 'Assuming the entered data matched any user account.',
      'passwordStrengthLength' => 'En az {length} karakter uzunluğunda olmalıdır.',
      'passwordStrengthLetterCount' => 'En az {count} harf(ler) içermelidir.',
      'passwordStrengthNumberCount' => 'En az {count} basamak içermelidir.',
      'passwordStrengthSpecialCharacterCount' => 'Must contain at least {count} special character(s).',
      'passwordStrengthBothCases' => 'Must contain letters of both upper and lower case.',
      'passwordWillBeSent' => 'Şifre kullanıcının eposta adresine gönderilecektir.',
      'passwordChanged' => 'Şifre değiştirildi',
      'userCantBeEmpty' => 'Kullanıcı adı boş olamaz.',
      'wrongUsernamePassword' => 'Yanlış kullanıcı adı/şifre',
      'failedToLogIn' => 'Failed to log in',
      'emailAddressCantBeEmpty' => 'Eposta Adresi boş olamaz',
      'userNameEmailAddressNotFound' => 'Kullanıcı adı/eposta adresi bulunamadı',
      'forbidden' => 'Yasaklı, lütfen daha sonra deneyin',
      'uniqueLinkHasBeenSent' => 'Özel URL belirtilen eposta adresine gönderilmiştir.',
      'passwordChangedByRequest' => 'Şifre değiştirildi.',
      'setupSmtpBefore' => 'You need to setup [SMTP settings]({url}) to make the system be able to send password in email.',
      'userNameExists' => 'Kullanıcı adı zaten var',
      'loginError' => 'Hata oluştu',
      'wrongCode' => 'Wrong code',
      'codeIsRequired' => 'Code is required',
      'yourAuthenticationCode' => 'Your authentication code: {code}.',
      'choose2FaSmsPhoneNumber' => 'Select a phone number that will be used for 2FA.',
      'choose2FaEmailAddress' => 'Select an email address that will be used for 2FA. It\'s highly recommended to use a non-primary email address.',
      'enterCodeSentInEmail' => 'Enter the code sent to your email address.',
      'enterCodeSentBySms' => 'Enter the code sent by SMS to your phone number.',
      'enterTotpCode' => 'Enter a code from your authenticator app.',
      'verifyTotpCode' => 'Scan the QR-code with your mobile authenticator app. If you have a trouble with scanning, you can enter the secret manually. After that you will see a 6-digit code in your application. Enter this code in the field below.',
      'generateAndSendNewPassword' => 'A new password will be generated and sent to the user\'s email address.',
      'security2FaResetConfirmation' => 'Are you sure you want to reset the current 2FA settings?',
      'auth2FARequiredHeader' => '2 taraflı Kimlik Doğrulaması gerekiyor',
      'auth2FARequired' => '2 taraflı Kimlik Doğrulaması gerekiyor. Cep telefonunuzda bir kimlik doğrulama uygulaması kullanın (ör. Google Authenticator).',
      'ldapUserInEspoNotFound' => 'User is not found in EspoCRM. Contact your administrator to create the user.',
      'passwordChangeRequestNotFound' => 'The password change request is not found. It might be expired. Try to initiate a new password recovery from the [login page]({url}).',
      'defaultTeamIsNotUsers' => 'Default Team should be one of user\'s Teams'
    ],
    'options' => [
      'gender' => [
        '' => 'Ayarlanmadı',
        'Male' => 'Erkek',
        'Female' => 'Kadın',
        'Neutral' => 'Belirtilmedi'
      ],
      'type' => [
        'regular' => 'Kullanıcı',
        'admin' => 'Yönetici',
        'portal' => 'Portal',
        'system' => 'Sistem',
        'super-admin' => 'Süper Admin',
        'api' => 'API'
      ],
      'authMethod' => [
        'ApiKey' => 'API Key',
        'Hmac' => 'HMAC'
      ]
    ],
    'boolFilters' => [
      'onlyMyTeam' => 'Yalnızca Ekibim',
      'onlyMe' => 'OnlyMe'
    ],
    'presetFilters' => [
      'active' => 'Etkin',
      'activePortal' => 'Portal Etkin',
      'activeApi' => 'API Etkin'
    ],
    'actions' => [
      'changePosition' => 'Change Position'
    ]
  ],
  'Webhook' => [
    'labels' => [
      'Create Webhook' => 'Web Oltası Oluştur'
    ],
    'fields' => [
      'event' => 'Etkinlik',
      'url' => 'URL',
      'isActive' => 'Etkin mi?',
      'user' => 'API Kullanıcısı',
      'entityType' => 'Varlık Türü',
      'field' => 'Alan',
      'secretKey' => 'Gizli Anahtar'
    ],
    'links' => [
      'user' => 'Kullanıcı',
      'queueItems' => 'Queue Items'
    ]
  ],
  'WebhookEventQueueItem' => [
    'fields' => [
      'event' => 'Event',
      'target' => 'Target',
      'data' => 'Data',
      'isProcessed' => 'Is Processed'
    ]
  ],
  'WebhookQueueItem' => [
    'fields' => [
      'event' => 'Event',
      'webhook' => 'Webhook',
      'target' => 'Target',
      'data' => 'Data',
      'status' => 'Status',
      'processedAt' => 'Processed At',
      'attempts' => 'Attempts',
      'processAt' => 'Process At'
    ],
    'links' => [
      'webhook' => 'Webhook'
    ],
    'options' => [
      'status' => [
        'Pending' => 'Pending',
        'Success' => 'Success',
        'Failed' => 'Failed'
      ]
    ]
  ],
  'WorkingTimeCalendar' => [
    'labels' => [
      'Create WorkingTimeCalendar' => 'Create Calendar'
    ],
    'fields' => [
      'timeZone' => 'Time Zone',
      'timeRanges' => 'Workday Schedule',
      'weekday0' => 'Sun',
      'weekday1' => 'Mon',
      'weekday2' => 'Tue',
      'weekday3' => 'Wed',
      'weekday4' => 'Thu',
      'weekday5' => 'Fri',
      'weekday6' => 'Sat',
      'weekday0TimeRanges' => 'Sun Schedule',
      'weekday1TimeRanges' => 'Mon Schedule',
      'weekday2TimeRanges' => 'Tue Schedule',
      'weekday3TimeRanges' => 'Wed Schedule',
      'weekday4TimeRanges' => 'Thu Schedule',
      'weekday5TimeRanges' => 'Fri Schedule',
      'weekday6TimeRanges' => 'Sat Schedule'
    ],
    'links' => [
      'ranges' => 'Exceptions'
    ]
  ],
  'WorkingTimeRange' => [
    'labels' => [
      'Create WorkingTimeRange' => 'Create Exception',
      'Calendars' => 'Calendars'
    ],
    'fields' => [
      'timeRanges' => 'Schedule',
      'dateStart' => 'Date Start',
      'dateEnd' => 'Date End',
      'type' => 'Type',
      'calendars' => 'Calendars',
      'users' => 'Users'
    ],
    'links' => [
      'calendars' => 'Calendars',
      'users' => 'Users'
    ],
    'options' => [
      'type' => [
        'Non-working' => 'Non-working',
        'Working' => 'Working'
      ]
    ],
    'presetFilters' => [
      'actual' => 'Actual'
    ],
    'tooltips' => [
      'calendars' => 'Calendars to apply the exception to. The exception will be applied to all users of selected calendars.

Leave the field empty if you need to apply the exception only for specific users.',
      'users' => 'Specific users to apply the exception to.'
    ]
  ],
  'Account' => [
    'fields' => [
      'name' => 'Ad',
      'emailAddress' => 'Eposta',
      'website' => 'Web sitesi',
      'phoneNumber' => 'Telefon',
      'billingAddress' => 'Fatura Adresi',
      'shippingAddress' => 'Teslimat Adresi',
      'description' => 'Açıklama',
      'sicCode' => 'Firma Kodu',
      'industry' => 'Sektör',
      'type' => 'Tür',
      'contactRole' => 'Başlık',
      'contactIsInactive' => 'Pasif',
      'campaign' => 'Kampanya',
      'targetLists' => 'Hedef Listeler',
      'targetList' => 'Hedef Liste',
      'originalLead' => 'Orijinal Potansiyel'
    ],
    'links' => [
      'contacts' => 'Kişiler',
      'contactsPrimary' => 'Kişiler (Birincil)',
      'opportunities' => 'Fırsatlar',
      'cases' => 'Olaylar',
      'documents' => 'Belgeler',
      'meetingsPrimary' => 'Toplantılar (genişletildi)',
      'callsPrimary' => 'Aramalar (genişletildi)',
      'tasksPrimary' => 'Görevler (genişletildi)',
      'emailsPrimary' => 'Epostalar (genişletildi)',
      'targetLists' => 'Hedef Listeler',
      'campaignLogRecords' => 'Kampanya Günlüğü',
      'campaign' => 'Kampanya',
      'portalUsers' => 'Portal Kullanıcıları',
      'originalLead' => 'Orijinal Potansiyel'
    ],
    'options' => [
      'type' => [
        'Customer' => 'Müşteri',
        'Investor' => 'Yatırımcı',
        'Partner' => 'Ortak',
        'Reseller' => 'Satıcı'
      ],
      'industry' => [
        'Aerospace' => 'Havacılık',
        'Agriculture' => 'Tarım',
        'Advertising' => 'Reklamcılık',
        'Apparel & Accessories' => 'Giyim ve Aksesuar',
        'Architecture' => 'Mimarlık',
        'Automotive' => 'Otomotiv',
        'Banking' => 'Bankacılık',
        'Biotechnology' => 'Biyoteknoloji',
        'Building Materials & Equipment' => 'Yapı Malzemeleri ve Ekipmanları',
        'Chemical' => 'Kimyasal',
        'Construction' => 'İnşaat',
        'Computer' => 'Bilişim',
        'Defense' => 'Savunma',
        'Creative' => 'Yaratıcı',
        'Culture' => 'Kültür',
        'Consulting' => 'Danışmanlık',
        'Education' => 'Eğitim',
        'Electronics' => 'Elektronik',
        'Electric Power' => 'Elektrik Gücü',
        'Energy' => 'Enerji',
        'Entertainment & Leisure' => 'Eğlence ve Hobi',
        'Finance' => 'Finans',
        'Food & Beverage' => 'Gıda',
        'Grocery' => 'Bakkal',
        'Hospitality' => 'Ağırlama',
        'Healthcare' => 'Sağlık Hizmeti',
        'Insurance' => 'Sigortacılık',
        'Legal' => 'Hukuk',
        'Manufacturing' => 'Imalat',
        'Mass Media' => 'Kitle İletişim Araçları',
        'Mining' => 'Madencilik',
        'Music' => 'Müzik',
        'Marketing' => 'Pazarlama',
        'Publishing' => 'Yayınlama',
        'Petroleum' => 'Petrol',
        'Real Estate' => 'Gayrimenkul',
        'Retail' => 'Perakende',
        'Shipping' => 'Nakliye',
        'Service' => 'Hizmet',
        'Support' => 'Destek ',
        'Sports' => 'Spor',
        'Software' => 'Yazılım',
        'Technology' => 'Teknoloji',
        'Telecommunications' => 'Telekomünikasyon',
        'Television' => 'Televizyon!',
        'Testing, Inspection & Certification' => 'Test, Muayene ve Belgelendirme',
        'Transportation' => 'Taşımacılık',
        'Travel' => 'Seyahat',
        'Venture Capital' => 'Yatırımcı',
        'Wholesale' => 'Toptan',
        'Water' => 'Su'
      ]
    ],
    'labels' => [
      'Create Account' => 'Firma Oluştur',
      'Copy Billing' => 'Faturalamayı Kopyala',
      'Set Primary' => 'Birincil Yap'
    ],
    'presetFilters' => [
      'customers' => 'Müşteriler',
      'partners' => 'İş Ortaklarımı',
      'recentlyCreated' => 'Yakın Zamanda Oluşturuldu'
    ],
    'tabs' => [
      'Account' => 'Account',
      'Support' => 'Support'
    ]
  ],
  'Calendar' => [
    'modes' => [
      'month' => 'Ay',
      'week' => 'Hafta',
      'day' => 'Gün',
      'agendaWeek' => 'Hafta',
      'agendaDay' => 'Gün',
      'timeline' => 'Zaman Çizelgesi'
    ],
    'labels' => [
      'Today' => 'Bugün',
      'Create' => 'Oluştur',
      'Shared' => 'Paylaşım',
      'Add User' => 'Kullanıcı Ekle',
      'current' => 'Mevcut',
      'time' => 'saat',
      'User List' => 'Kullanıcı Listesi',
      'View Calendar' => 'Takvimi Göster',
      'Create Shared View' => 'Paylaşılan Görünüm Oluştur',
      'Edit Shared View' => 'Edit Shared View',
      'Shared Mode Options' => 'Shared Mode Options',
      'Manage Users' => 'Kullanıcıları yönet'
    ]
  ],
  'Call' => [
    'fields' => [
      'name' => 'Ad',
      'parent' => 'Üst Seçenek',
      'status' => 'Durum',
      'dateStart' => 'Başlangıç Tarihi',
      'dateEnd' => 'Bitiş Tarihi',
      'direction' => 'Yönlendirme',
      'duration' => 'Süre',
      'description' => 'Açıklama',
      'users' => 'Kullanıcılar',
      'contacts' => 'Kişiler',
      'leads' => 'Potansiyeller',
      'reminders' => 'Hatırlatıcılar',
      'account' => 'Hesap',
      'acceptanceStatus' => 'Kabul Durumu',
      'uid' => 'UID'
    ],
    'links' => [],
    'options' => [
      'status' => [
        'Planned' => 'Planlanmış',
        'Held' => 'Elde Tutulanlar',
        'Not Held' => 'Elde Tutulmayanlar'
      ],
      'direction' => [
        'Outbound' => 'Giden',
        'Inbound' => 'Gelen'
      ],
      'acceptanceStatus' => [
        'None' => 'Yok',
        'Accepted' => 'Kabul edilmiş',
        'Declined' => 'Red edilmiş',
        'Tentative' => 'Geçici'
      ]
    ],
    'massActions' => [
      'setHeld' => 'Düzenlendi',
      'setNotHeld' => 'Düzenlenmedi olarak ayarla'
    ],
    'labels' => [
      'Create Call' => 'Arama Oluştur',
      'Set Held' => 'SET HELDXXX',
      'Set Not Held' => 'SET NOT HELD XXXX',
      'Send Invitations' => 'Davetiye Gönder'
    ],
    'presetFilters' => [
      'planned' => 'Planlandı',
      'held' => 'Düzenlendi',
      'todays' => 'Bugünün'
    ]
  ],
  'Campaign' => [
    'fields' => [
      'name' => 'Ad',
      'description' => 'Açıklama',
      'status' => 'Durum',
      'type' => 'Tip',
      'startDate' => 'Başlangıç ​​tarihi',
      'endDate' => 'Bitiş tarihi',
      'targetLists' => 'Hedef Listeler',
      'excludingTargetLists' => 'Hedef Listeleri Hariç Tutma',
      'sentCount' => 'Gönderildi',
      'openedCount' => 'Açılmış',
      'clickedCount' => 'Tıklandı',
      'optedOutCount' => 'Devre dışı bırakıldı',
      'bouncedCount' => 'Geri Döndü',
      'optedInCount' => 'Opted In',
      'hardBouncedCount' => 'Sert Geri Döndü',
      'softBouncedCount' => 'Yumuşak Geri Döndü',
      'leadCreatedCount' => 'Potansiyeller Oluşturuldu',
      'revenue' => 'Gelir',
      'revenueConverted' => 'Gelir (dönüştürülmüş)',
      'budget' => 'Bütçe',
      'budgetConverted' => 'Bütçe (dönüştürülmüş)',
      'budgetCurrency' => 'Bütçe Para Birimi',
      'contactsTemplate' => 'Kişi ŞAblonu',
      'leadsTemplate' => 'Fırsat Şabonu',
      'accountsTemplate' => 'Hesap Şablonu',
      'usersTemplate' => 'Kullanıcı Şablonları',
      'mailMergeOnlyWithAddress' => 'Skip records w/o filled address'
    ],
    'links' => [
      'targetLists' => 'Hedef Listeler',
      'excludingTargetLists' => 'Hedef Listeleri Hariç Tutma',
      'accounts' => 'Firmalar',
      'contacts' => 'Kişiler',
      'leads' => 'Potansiyeller',
      'opportunities' => 'Fırsatlar',
      'campaignLogRecords' => 'Kayıt',
      'massEmails' => 'Toplu epostalar',
      'trackingUrls' => 'İzleme URL\'leri',
      'contactsTemplate' => 'Kişi Şablonu',
      'leadsTemplate' => 'Fırsat Şabonu ',
      'accountsTemplate' => 'Hesap Şablonu',
      'usersTemplate' => 'Kullanıcı Şablonu'
    ],
    'options' => [
      'type' => [
        'Email' => 'Eposta',
        'Informational Email' => 'Informational Email',
        'Web' => 'Web',
        'Television' => 'Televizyon',
        'Radio' => 'Radyo',
        'Newsletter' => 'Bülten',
        'Mail' => 'Eposta'
      ],
      'status' => [
        'Planning' => 'Planlanıyor',
        'Active' => 'Etkin',
        'Inactive' => 'Etkin',
        'Complete' => 'Tamamla'
      ]
    ],
    'labels' => [
      'Create Campaign' => 'Kampanya Oluştur',
      'Target Lists' => 'Hedef Listeler',
      'Statistics' => 'İstatistikler',
      'hard' => 'sert',
      'soft' => 'Yumuşak',
      'Unsubscribe' => 'Abonelikten Ayrıl (Bülten üyeliğinden çıkma)',
      'Mass Emails' => 'Toplu Eposta',
      'Email Templates' => 'Eposta şablonları',
      'Unsubscribe again' => 'Tekrar abonelikten çık',
      'Subscribe again' => 'Tekrar üye olun',
      'Create Target List' => 'Hedef Liste Yarat',
      'Mail Merge' => 'Eposta Birleştirme',
      'Generate Mail Merge PDF' => 'Posta Birleştirme PDF\'i Oluştur'
    ],
    'presetFilters' => [
      'active' => 'Etkin'
    ],
    'messages' => [
      'cannotChangeType' => 'Cannot change type.',
      'unsubscribed' => 'Posta listemizden ayrıldınız',
      'subscribedAgain' => 'Tekrar abone oldunuz.'
    ],
    'tooltips' => [
      'targetLists' => 'Mesaj alması gereken hedefler.',
      'excludingTargetLists' => 'Mesaj almaması gereken hedefler.'
    ]
  ],
  'CampaignLogRecord' => [
    'fields' => [
      'action' => 'Eylem',
      'actionDate' => 'Tarih',
      'data' => 'Veri',
      'campaign' => 'Kampanya',
      'parent' => 'Hedef',
      'object' => 'Nesne',
      'application' => 'Uygulama',
      'queueItem' => 'Sıra Öğesi',
      'stringData' => 'Dize Verileri',
      'stringAdditionalData' => 'Dize Ek Veri',
      'isTest' => 'Test mi?'
    ],
    'links' => [
      'queueItem' => 'Sıra Öğesi',
      'parent' => 'Üst',
      'object' => 'Nesne',
      'campaign' => 'Kampanya'
    ],
    'options' => [
      'action' => [
        'Sent' => 'Gönderildi',
        'Opened' => 'Açılmış',
        'Opted Out' => 'Devre dışı bırakıldı',
        'Bounced' => 'Geri Döndü',
        'Clicked' => 'tıklandı',
        'Lead Created' => 'Potansiyel Oluşturuldu',
        'Opted In' => 'Opted In'
      ]
    ],
    'labels' => [
      'All' => 'Hepsi'
    ],
    'presetFilters' => [
      'sent' => 'Gönderildi',
      'opened' => 'Açılmış',
      'optedOut' => 'Devre dışı bırakıldı',
      'optedIn' => 'Opted In',
      'bounced' => 'Geri Döndü',
      'clicked' => 'tıklandı',
      'leadCreated' => 'Potansiyel Oluşturuldu'
    ]
  ],
  'CampaignTrackingUrl' => [
    'fields' => [
      'url' => 'URL',
      'action' => 'Action',
      'urlToUse' => 'URL yerine eklenecek kod',
      'message' => 'Message',
      'campaign' => 'Kampanya'
    ],
    'links' => [
      'campaign' => 'Kampanya'
    ],
    'labels' => [
      'Create CampaignTrackingUrl' => 'İzleme URL\'i Oluştur'
    ],
    'options' => [
      'action' => [
        'Redirect' => 'Redirect',
        'Show Message' => 'Show Message'
      ]
    ],
    'tooltips' => [
      'url' => 'The recipient will be redirected to this location after they follow the link.',
      'message' => 'The message will be shown to the recipient after they follow the link. Markdown is supported.'
    ]
  ],
  'Case' => [
    'fields' => [
      'name' => 'Ad',
      'number' => 'Numara',
      'status' => 'Durum',
      'account' => 'Hesap',
      'contact' => 'Kişi',
      'contacts' => 'Kişiler',
      'priority' => 'Öncelik',
      'type' => 'Tür',
      'description' => 'Açıklama',
      'inboundEmail' => 'Grup Eposta Hesabı',
      'lead' => 'Potansiyel',
      'attachments' => 'Ekler',
      'originalEmail' => 'Original Email',
      'isInternal' => 'Hidden from Portal'
    ],
    'links' => [
      'inboundEmail' => 'Grup Eposta Hesabı',
      'account' => 'Hesap',
      'contact' => 'İletişim (Birincil)',
      'Contacts' => 'Kişiler',
      'meetings' => 'Toplantılar',
      'calls' => 'Aramalar',
      'tasks' => 'Görevler',
      'emails' => 'Epostalar',
      'articles' => 'Bilgi Bankası Makaleleri',
      'lead' => 'Potansiyel',
      'attachments' => 'Ekler'
    ],
    'options' => [
      'status' => [
        'New' => 'Yeni',
        'Assigned' => 'Atanmış',
        'Pending' => 'Beklemede',
        'Closed' => 'Kapandı',
        'Rejected' => 'Reddedildi',
        'Duplicate' => 'Kopyala'
      ],
      'priority' => [
        'Low' => 'Düşük',
        'Normal' => 'Normal',
        'High' => 'Yüksek',
        'Urgent' => 'Acil'
      ],
      'type' => [
        'Question' => 'Soru',
        'Incident' => 'Olay',
        'Problem' => 'Problem'
      ]
    ],
    'labels' => [
      'Create Case' => 'Dosya Oluştur',
      'Close' => 'Kapalı',
      'Reject' => 'Reddedildi',
      'Closed' => 'Kapalı',
      'Rejected' => 'Reddedildi'
    ],
    'presetFilters' => [
      'open' => 'Açık',
      'closed' => 'Kapalı'
    ]
  ],
  'Contact' => [
    'fields' => [
      'name' => 'Ad',
      'emailAddress' => 'Eposta',
      'title' => 'Account Title',
      'account' => 'Hesap',
      'accounts' => 'Hesaplar',
      'phoneNumber' => 'Telefon',
      'accountType' => 'Hesap Türü',
      'doNotCall' => 'Arama Yapma',
      'address' => 'Adres',
      'opportunityRole' => 'Fırsat Rolü',
      'accountRole' => 'Başlık',
      'description' => 'Açıklama',
      'campaign' => 'Kampanya',
      'targetLists' => 'Hedef Listeler',
      'targetList' => 'Hedef Liste',
      'portalUser' => 'Portal Kullanıcısı',
      'hasPortalUser' => 'Has Portal User',
      'originalLead' => 'Orijinal Potansiyel',
      'acceptanceStatus' => 'Kabul Durumu',
      'accountIsInactive' => 'Pasif Hesap',
      'acceptanceStatusMeetings' => 'Kabul Durumu (Toplantılar)',
      'acceptanceStatusCalls' => 'Kabul Durumu (Aramalar)',
      'originalEmail' => 'Original Email'
    ],
    'links' => [
      'opportunities' => 'Fırsatlar',
      'cases' => 'Olaylar',
      'targetLists' => 'Hedef Listeler',
      'campaignLogRecords' => 'Kampanya Günlüğü',
      'campaign' => 'Kampanya',
      'account' => 'Hesap (Birincil)',
      'accounts' => 'Hesaplar',
      'casesPrimary' => 'Olaylar (Birincil)',
      'tasksPrimary' => 'Görevler (genişletilmiş)',
      'opportunitiesPrimary' => 'Fırsatlar (Birincil)',
      'portalUser' => 'Portal Kullanıcı',
      'originalLead' => 'Orijinal Potansiyel',
      'documents' => 'Belgeler'
    ],
    'labels' => [
      'Create Contact' => 'Kişi Oluştur'
    ],
    'options' => [
      'opportunityRole' => [
        '' => '',
        'Decision Maker' => 'Karar verici',
        'Evaluator' => 'Değerlendirici',
        'Influencer' => 'Etki Eden'
      ]
    ],
    'presetFilters' => [
      'portalUsers' => 'Portal Kullanıcıları',
      'notPortalUsers' => 'Portal Kullanıcısı Değildir',
      'accountActive' => 'Etkin'
    ]
  ],
  'Document' => [
    'labels' => [
      'Create Document' => 'Belge Oluştur',
      'Details' => 'Detaylar'
    ],
    'fields' => [
      'name' => 'Ad',
      'status' => 'Durum',
      'file' => 'Dosya',
      'type' => 'Tip',
      'publishDate' => 'Yayım tarihi',
      'expirationDate' => 'Bitiş Tarihi',
      'description' => 'Tanım',
      'accounts' => 'Hesaplar',
      'folder' => 'Klasör'
    ],
    'links' => [
      'accounts' => 'Hesaplar',
      'opportunities' => 'Fırsatlar',
      'folder' => 'Klasör',
      'leads' => 'Potansiyeller',
      'contacts' => 'Rehber'
    ],
    'options' => [
      'status' => [
        'Active' => 'Etkin',
        'Draft' => 'Taslak',
        'Expired' => 'Süresi Dolan',
        'Canceled' => 'İptal edildi'
      ],
      'type' => [
        '' => 'Yok',
        'Contract' => 'Kontrat',
        'NDA' => 'NDA',
        'EULA' => 'EULA',
        'License Agreement' => 'Lisans Anlaşması'
      ]
    ],
    'presetFilters' => [
      'active' => 'Etkin',
      'draft' => 'Taslak'
    ]
  ],
  'DocumentFolder' => [
    'labels' => [
      'Create DocumentFolder' => 'Belge Klasörü Oluştur',
      'Manage Categories' => 'Klasörleri Yönet',
      'Documents' => 'Belgeler'
    ],
    'links' => [
      'documents' => 'Belgeler'
    ]
  ],
  'EmailQueueItem' => [
    'fields' => [
      'name' => 'Ad',
      'status' => 'Durum',
      'target' => 'Hedef',
      'sentAt' => 'Gönderilen Tarih',
      'attemptCount' => 'Girişimler',
      'emailAddress' => 'Eposta Adres',
      'massEmail' => 'Toplu Eposta',
      'isTest' => 'Test mi'
    ],
    'links' => [
      'target' => 'Hedef',
      'massEmail' => 'Toplu Eposta'
    ],
    'options' => [
      'status' => [
        'Pending' => 'Bekliyor',
        'Sent' => 'Gönderildi',
        'Failed' => 'Hata',
        'Sending' => 'Gönderme'
      ]
    ],
    'presetFilters' => [
      'pending' => 'Bekliyor',
      'sent' => 'Gönderildi',
      'failed' => 'Hata'
    ]
  ],
  'KnowledgeBaseArticle' => [
    'labels' => [
      'Create KnowledgeBaseArticle' => 'Makale Oluştur',
      'Any' => 'Herhangi',
      'Send in Email' => 'Eposta ile gönder',
      'Move Up' => 'Yukarı Taşı',
      'Move Down' => 'Aşağı',
      'Move to Top' => 'En Üste Taşı',
      'Move to Bottom' => 'En Alta Taşı'
    ],
    'fields' => [
      'name' => 'Ad',
      'status' => 'Durum',
      'type' => 'Tip',
      'attachments' => 'Eklentiler',
      'publishDate' => 'Yayımlanma tarihi',
      'expirationDate' => 'Bitiş Tarihi',
      'description' => 'Açıklama',
      'body' => 'Gövde',
      'categories' => 'Kategoriler',
      'language' => 'Dil',
      'portals' => 'Portaller',
      'bodyPlain' => 'Body Plain'
    ],
    'links' => [
      'cases' => 'Olaylar',
      'opportunities' => 'Fırsatlar',
      'categories' => 'Kategoriler',
      'portals' => 'Portaller'
    ],
    'options' => [
      'status' => [
        'In Review' => 'İncelemede',
        'Draft' => 'Taslak',
        'Archived' => 'Arşivlenmiş',
        'Published' => 'Yayınlanmış'
      ],
      'type' => [
        'Article' => 'Makale'
      ]
    ],
    'tooltips' => [
      'portals' => 'Bu makale sadece belli portallar için geçerli olacaktır.'
    ],
    'presetFilters' => [
      'published' => 'Yayınlanan'
    ]
  ],
  'KnowledgeBaseCategory' => [
    'labels' => [
      'Create KnowledgeBaseCategory' => 'Kategori oluştur',
      'Manage Categories' => 'Kategorileri Yönet',
      'Articles' => 'Makaleler'
    ],
    'links' => [
      'articles' => 'Makaleler'
    ]
  ],
  'Lead' => [
    'labels' => [
      'Converted To' => 'Çevrildi',
      'Create Lead' => 'Müşteri Adayı Oluştur',
      'Convert' => 'Çevir',
      'convert' => 'Çevir'
    ],
    'fields' => [
      'name' => 'Ad',
      'emailAddress' => 'Eposta',
      'title' => 'Başlık',
      'website' => 'Web sitesi',
      'phoneNumber' => 'Telefon',
      'accountName' => 'Hesap Adı',
      'doNotCall' => 'Arama Yapma',
      'address' => 'Adres',
      'status' => 'Durum',
      'source' => 'Kaynak',
      'opportunityAmount' => 'Fırsat Tutarı',
      'opportunityAmountConverted' => 'Fırsat Tutarı (dönüştürülmüş)',
      'description' => 'Açıklama',
      'createdAccount' => 'Firma',
      'createdContact' => 'Kişi',
      'createdOpportunity' => 'Fırsat',
      'convertedAt' => 'Converted At',
      'campaign' => 'Kampanya',
      'targetLists' => 'Hedef Listeler',
      'targetList' => 'Hedef Liste',
      'industry' => 'Endüstri',
      'acceptanceStatus' => 'Kabul Durumu',
      'opportunityAmountCurrency' => 'Fırsat Döviz Tutarı',
      'acceptanceStatusMeetings' => 'Kabul Durumu (Toplantılar)',
      'acceptanceStatusCalls' => 'Kabul Durumu (Aramalar)',
      'originalEmail' => 'Original Email'
    ],
    'links' => [
      'targetLists' => 'Hedef Listeler',
      'campaignLogRecords' => 'Kampanya Günlüğü',
      'campaign' => 'Kampanya',
      'createdAccount' => 'Firma',
      'createdContact' => 'Kişi',
      'createdOpportunity' => 'Fırsat',
      'cases' => 'Olaylar',
      'documents' => 'Belgeler'
    ],
    'options' => [
      'status' => [
        'New' => 'Yeni',
        'Assigned' => 'Atanmış',
        'In Process' => 'İşlemde',
        'Converted' => 'Çevrildi',
        'Recycled' => 'Geri Dönüştürüldü',
        'Dead' => 'Ölü'
      ],
      'source' => [
        'Call' => 'Arama',
        'Email' => 'Eposta',
        'Existing Customer' => 'Varolan Müşteri',
        'Partner' => 'Ortak',
        'Public Relations' => 'Halkla İlişkiler',
        'Web Site' => 'Web Site',
        'Campaign' => 'Kampanya',
        'Other' => 'Diğer'
      ]
    ],
    'presetFilters' => [
      'active' => 'Etkin',
      'actual' => 'Gerçek',
      'converted' => 'Dönüştürülmüş'
    ]
  ],
  'MassEmail' => [
    'fields' => [
      'name' => 'Ad',
      'status' => 'Durum',
      'storeSentEmails' => 'Gönderilen Epostaları Sakla',
      'startAt' => 'Başlangıç ​​Tarihi',
      'fromAddress' => 'Gönderen Adresi',
      'fromName' => 'İsimden',
      'replyToAddress' => 'Yanıtlama Adresiniz',
      'replyToName' => 'Yanıtla İsim',
      'campaign' => 'Kampanya',
      'emailTemplate' => 'Eposta Şablonu',
      'inboundEmail' => 'Eposta hesabı',
      'targetLists' => 'Hedef Listeler',
      'excludingTargetLists' => 'Hariç Tutulan Hedef Listeleri',
      'optOutEntirely' => 'Tamamından Vazgeç',
      'smtpAccount' => 'SMTP Hesabı'
    ],
    'links' => [
      'targetLists' => 'Hedef Listeler',
      'excludingTargetLists' => 'Hariç Tutulan Hedef Listeleri',
      'queueItems' => 'Sıra Öğeleri',
      'campaign' => 'Kampanya',
      'emailTemplate' => 'Eposta Şablonu',
      'inboundEmail' => 'Eposta hesabı'
    ],
    'options' => [
      'status' => [
        'Draft' => 'Taslak',
        'Pending' => 'kadar',
        'In Process' => 'Süreç İçinde',
        'Complete' => 'Tamamlandı',
        'Canceled' => 'İptal edildi',
        'Failed' => 'Başarısız'
      ]
    ],
    'labels' => [
      'Create MassEmail' => 'Toplu Eposta Oluştur',
      'Send Test' => 'Test Gönder',
      'System SMTP' => 'Sistem SMTP',
      'system' => 'sistem',
      'group' => 'grup'
    ],
    'messages' => [
      'selectAtLeastOneTarget' => 'En az bir hedef seçin.',
      'testSent' => 'Gönderilmesi beklenen eposta (lar) testi'
    ],
    'tooltips' => [
      'optOutEntirely' => 'Aboneliğini kaldıran alıcıların e-posta adresleri devre dışı bırakılmış olarak işaretlenecek ve artık toplu epostalar almazlar.',
      'targetLists' => 'Mesaj alması gereken hedefler.',
      'excludingTargetLists' => 'Mesaj almaması gereken hedefler.',
      'storeSentEmails' => 'Epostalar CRM\'de saklanacaktır.'
    ],
    'presetFilters' => [
      'actual' => 'Gerçek',
      'complete' => 'Tamamlandı'
    ]
  ],
  'Meeting' => [
    'fields' => [
      'name' => 'Ad',
      'parent' => 'Üst Seçenek',
      'status' => 'Durum',
      'dateStart' => 'Başlangıç Tarihi',
      'dateEnd' => 'Bitiş Tarihi',
      'duration' => 'Süre',
      'description' => 'Açıklama',
      'users' => 'Kullanıcılar',
      'contacts' => 'Kişiler',
      'leads' => 'Potansiyeller',
      'reminders' => 'Hatırlatıcılar',
      'account' => 'Firma',
      'acceptanceStatus' => 'Kabul Durumu',
      'dateStartDate' => 'Date Start (all day)',
      'dateEndDate' => 'Date End (all day)',
      'isAllDay' => 'Is All-Day',
      'sourceEmail' => 'Kaynak Eposta',
      'uid' => 'UID',
      'joinUrl' => 'Join URL'
    ],
    'links' => [],
    'options' => [
      'status' => [
        'Planned' => 'Planlanmış',
        'Held' => 'Elde Tutulanlar',
        'Not Held' => 'Elde Tutulmayanlar'
      ],
      'acceptanceStatus' => [
        'None' => 'Yok',
        'Accepted' => 'Kabul edilmiş',
        'Declined' => 'Red Edilmiş',
        'Tentative' => 'Geçici'
      ]
    ],
    'massActions' => [
      'setHeld' => 'Düzenlendi',
      'setNotHeld' => 'Düzenlenmedi olarak ayarla'
    ],
    'labels' => [
      'Create Meeting' => 'Toplantı Oluştur ',
      'Set Held' => 'SET HELDXXX',
      'Set Not Held' => 'SET NOT HELD XXXX',
      'Send Invitations' => 'Davetleri Gönder',
      'Send Cancellation' => 'İptal Gönder',
      'on time' => 'Zamanında',
      'before' => 'Önce',
      'All-Day' => 'Tüm Gün',
      'Acceptance' => 'Onama'
    ],
    'presetFilters' => [
      'planned' => 'Planlandı',
      'held' => 'Düzenlenen',
      'todays' => 'Bugünün'
    ],
    'messages' => [
      'sendInvitationsToSelectedAttendees' => 'Seçilen katılımcılara davetiye epotaları gönderilecektir.',
      'sendCancellationsToSelectedAttendees' => 'Seçilen katılımcılara iptal postaları gönderilecektir.',
      'selectAcceptanceStatus' => 'Kabul durumunuzu ayarlayın.',
      'nothingHasBeenSent' => 'Hiçbir şey gönderilmedi'
    ]
  ],
  'Opportunity' => [
    'fields' => [
      'name' => 'Ad',
      'account' => 'Firma',
      'stage' => 'Aşama',
      'amount' => 'Tutar',
      'probability' => 'Olasılık, %',
      'leadSource' => 'Potansiyel Kaynağı',
      'doNotCall' => 'Arama Yapma',
      'closeDate' => 'Kapanış Tarii',
      'contacts' => 'Kişiler',
      'contact' => 'Kişi (Birincil)',
      'description' => 'Açıklama',
      'amountConverted' => 'Tutar (dönüştürülen)',
      'amountWeightedConverted' => 'Ağırlıklı Tutar',
      'campaign' => 'Kampanya',
      'originalLead' => 'Orijinal Potansiyel',
      'amountCurrency' => 'Döviz Tutarı',
      'contactRole' => 'İlgili Rolü',
      'lastStage' => 'Son aşama'
    ],
    'links' => [
      'contacts' => 'Kişiler',
      'contact' => 'Kişi (Birincil)',
      'documents' => 'Belgeler',
      'campaign' => 'Kampanya',
      'originalLead' => 'Orijinal Potansiyel'
    ],
    'options' => [
      'stage' => [
        'Prospecting' => 'Araştırma',
        'Qualification' => 'Yeterlilik',
        'Proposal' => 'Teklif',
        'Negotiation' => 'Görüşme',
        'Needs Analysis' => 'Analiz Yapılmalı',
        'Value Proposition' => 'Değer Önerisi',
        'Id. Decision Makers' => 'Id. Karar Vericiler',
        'Perception Analysis' => 'Algı Analizi',
        'Proposal/Price Quote' => 'Proposal/Price Quote',
        'Negotiation/Review' => 'Görüşme/İnceleme',
        'Closed Won' => 'Kapalı Kazanç',
        'Closed Lost' => 'Kapalı Kayıp'
      ]
    ],
    'labels' => [
      'Create Opportunity' => 'Fırsat Oluştur'
    ],
    'presetFilters' => [
      'open' => 'Aç ',
      'won' => 'Kazanıldı',
      'lost' => 'Kayıp Edildi'
    ]
  ],
  'TargetList' => [
    'fields' => [
      'name' => 'Ad',
      'description' => 'Açıklama',
      'entryCount' => 'Giriş sayısı',
      'optedOutCount' => 'Devre Dışı Bırakma Sayısı',
      'campaigns' => 'Kampanyalar',
      'endDate' => 'Bitiş tarihi',
      'targetLists' => 'Hedef Listeler',
      'includingActionList' => 'Dahil',
      'excludingActionList' => 'Dışlanıyor...',
      'targetStatus' => 'Hedef Durumu',
      'isOptedOut' => 'Devre Dışı Bırakıldı',
      'sourceCampaign' => 'Source Campaign',
      'category' => 'Category'
    ],
    'links' => [
      'accounts' => 'Hesaplar',
      'contacts' => 'Kişiler',
      'leads' => 'Potansiyeller',
      'campaigns' => 'Kampanyalar',
      'massEmails' => 'Toplu Epostalar',
      'category' => 'Category'
    ],
    'options' => [
      'type' => [
        'Email' => 'Eposta',
        'Web' => 'Web',
        'Television' => 'Televizyon!',
        'Radio' => 'radyo',
        'Newsletter' => 'Newsletter (Bülten)'
      ],
      'targetStatus' => [
        'Opted Out' => 'Devre Dışı Bırakıldı',
        'Listed' => 'Listelenmiş'
      ]
    ],
    'labels' => [
      'Create TargetList' => 'Hedef Liste Yarat',
      'Opted Out' => 'Devre dışı bırakıldı',
      'Cancel Opt-Out' => 'Devre dışı bırakmayı İptal Et',
      'Opt-Out' => 'Devre Dışı'
    ]
  ],
  'TargetListCategory' => [
    'labels' => [
      'Create TargetListCategory' => 'Create Category'
    ],
    'links' => [
      'targetLists' => 'Target Lists'
    ]
  ],
  'Task' => [
    'fields' => [
      'name' => 'Ad',
      'parent' => 'Üst Seçenek',
      'status' => 'Durum',
      'dateStart' => 'Başlangıç Tarihi',
      'dateEnd' => 'Vade Tarihi',
      'dateStartDate' => 'Tarih Başlangıcı (bütün gün)',
      'dateEndDate' => 'Bitiş Tarihi (bütün gün)',
      'priority' => 'Öncelik',
      'description' => 'Açıklama',
      'isOverdue' => 'Vadesi Geçmiş',
      'account' => 'Hesap',
      'dateCompleted' => 'Tamamlanma Tarihi',
      'attachments' => 'Ekler',
      'reminders' => 'Hatırlatıcılar',
      'contact' => 'Kişiler',
      'originalEmail' => 'Original Email'
    ],
    'links' => [
      'attachments' => 'Eklentiler',
      'account' => 'Hesaplar',
      'contact' => 'Kişiler',
      'email' => 'Eposta'
    ],
    'options' => [
      'status' => [
        'Not Started' => 'başlamadı',
        'Started' => 'Başladı',
        'Completed' => 'Tamamlandı',
        'Canceled' => 'İptal edildi',
        'Deferred' => 'Vadeli'
      ],
      'priority' => [
        'Low' => 'Düşük',
        'Normal' => 'Normal',
        'High' => 'Yüksek',
        'Urgent' => 'Acil'
      ]
    ],
    'labels' => [
      'Create Task' => 'Görev Oluştur',
      'Complete' => 'Tamamla',
      'overdue' => 'overdue'
    ],
    'presetFilters' => [
      'actual' => 'Gerçek',
      'completed' => 'Tamamlandı',
      'deferred' => 'Vadeli',
      'todays' => 'Bugünün',
      'overdue' => 'süresi geçmiş'
    ],
    'nameOptions' => [
      'replyToEmail' => 'Reply to email'
    ]
  ],
  'Prospect' => [
    'fields' => [
      'name' => 'İsim',
      'emailAddress' => 'Eposta',
      'title' => 'Başlık',
      'website' => 'Website',
      'accountName' => 'Hesap Adı',
      'phone' => 'Telefon',
      'phoneOffice' => 'Phone (Office)',
      'fax' => 'Faks',
      'doNotCall' => 'Arama Yapma',
      'address' => 'Adres',
      'description' => 'açıklama'
    ],
    'links' => [],
    'labels' => [
      'Create Prospect' => 'Beklenti Oluştur',
      'Convert to Lead' => 'Müşteri Adayına Dönüştür'
    ]
  ]
];
