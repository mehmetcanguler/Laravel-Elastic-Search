🚀 Laravel 12 + Scout + Elasticsearch Demo

Bu proje, Laravel 12, Laravel Scout ve Elasticsearch kullanılarak geliştirilmiş, modern ve güçlü bir tam metin arama (Full Text Search) demo uygulamasıdır.
Laravel projelerinize Elasticsearch’ü kolayca entegre etmeniz için sade ve anlaşılır bir yapı sunar.

Amaç; Laravel Scout’un sunduğu basit arayüz ile Elasticsearch’ün yüksek performanslı arama yeteneklerini bir araya getirmektir.

✨ Özellikler

🔍 Tam Metin Arama (Full Text Search)
Ürünler üzerinde hızlı, esnek ve ölçeklenebilir arama

⚡ Elasticsearch Entegrasyonu
Endüstri standardı, yüksek performanslı arama motoru

🛡️ Laravel Scout Kullanımı
Eloquent benzeri kullanım ile sade ve okunabilir arama sorguları

🐳 Docker Desteği
docker-compose ile tek komutla Elasticsearch ortamı

🧩 Modern Laravel 12 Yapısı
Güncel Laravel mimarisiyle uyumlu ve genişletilebilir yapı

🧠 Neden Bu Proje?

Elasticsearch’ü Laravel ile hızlıca ayağa kaldırmak

Scout + Elasticsearch entegrasyonunu gerçek bir örnek üzerinden görmek

Büyük veri setlerinde performanslı arama altyapısı kurmak

Docker ile lokal ortamda zahmetsiz kurulum

📦 Kullanılan Teknolojiler

Laravel 12

Laravel Scout

⚙️ Kurulum
1️⃣ Projeyi Klonla
git clone https://github.com/mehmetcanguler/Laravel-Elastic-Search.git
cd Laravel-Elastic-Search

2️⃣ Docker ile Elasticsearch’i Ayağa Kaldır
docker-compose up -d

3️⃣ Bağımlılıkları Kur
composer install

4️⃣ Ortam Dosyasını Ayarla
cp .env.example .env
php artisan key:generate


.env dosyasında Scout ve Elasticsearch ayarlarını kontrol etmeyi unutma.

🔎 Örnek Arama Kullanımı

Scout sayesinde Elasticsearch üzerinde arama yapmak oldukça basit:

Product::search('iphone')->get();


Eloquent kullanır gibi, güçlü bir arama altyapısına erişmiş olursun.

📌 Kimler İçin Uygun?

Laravel ile Elasticsearch öğrenmek isteyenler

Scout entegrasyonunu örnekle görmek isteyenler

Full text search altyapısı kurmak isteyen projeler

Performanslı arama çözümleri arayan geliştiriciler

⭐ Sonuç

Bu repo, Laravel projelerinde Elasticsearch entegrasyonunu kolaylaştırmak için hazırlanmış sade ama güçlü bir demo çalışmadır.
Geliştirmeye açık, anlaşılır ve gerçek projelere rahatça uyarlanabilir bir yapı sunar.

Beğendiysen ⭐ bırakmayı unutma 😉

Elasticsearch

Docker & Docker Compose
