<?php
require_once __DIR__ . '/config.php';
$whatsappMessage = rawurlencode("Halo Nadé Crochet, aku ingin bertanya tentang produk.");
$whatsappLink = "https://wa.me/" . $whatsappNumber . "?text=" . $whatsappMessage;
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#f7f2e9">
  <meta name="description" content="Nadé Crochet — karya rajut handmade yang dibuat dengan cinta, satu tusuk demi satu tusuk.">
  <title><?= htmlspecialchars($storeName, ENT_QUOTES, "UTF-8") ?> — Handmade with Love</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
  <div class="announcement">HANDMADE WITH LOVE · MADE SLOW, MADE TO LAST</div>
  <div class="layout">
    <aside>
      <div class="brand">
        <div class="brand-mark">Né</div>
        <div class="brand-copy"><div class="brand-name">Nadé Crochet</div><div class="brand-sub">THE LITTLE THINGS, HANDMADE</div></div>
        <button class="mobile-toggle" id="menuToggle" aria-label="Buka menu">☰</button>
      </div>
      <div class="nav-label">MENU</div>
      <nav id="mainNav">
        <a class="active" href="#home"><span>⌂</span>Home</a>
        <a href="#collection"><span>✿</span>Collection</a>
        <a href="#about"><span>♡</span>Our Story</a>
        <a href="#contact"><span>✉</span>Contact</a>
      </nav>
      <div class="side-note"><strong>A little note...</strong>Setiap karya dibuat perlahan dengan tangan dan sepenuh hati. Terima kasih sudah mendukung handmade local.</div>
    </aside>
    <main>
      <div class="topbar">
        <div class="breadcrumb">NADÉ CROCHET <span style="color:#b6a895">/</span> HOME</div>
        <div class="top-actions"><a href="#about">Our story</a><a class="bag" href="#collection">♡ <span id="cartCount">0</span></a></div>
      </div>
      <section class="hero" id="home">
        <div class="hero-copy">
          <div class="eyebrow">A softer kind of handmade</div>
          <h1>Little things,<br><em>made with love.</em></h1>
          <p>Selamat datang di dunia kecil Nadé Crochet. Temukan teman sehari-hari yang dirajut dengan teliti, penuh kehangatan, dan sentuhan personal.</p>
          <a class="button" href="#collection">EXPLORE COLLECTION <span>↗</span></a>
        </div>
        <div class="hero-image">
          <img src="https://images.unsplash.com/photo-1452860606245-08befc0ff44b?auto=format&fit=crop&w=1200&q=85" alt="Suasana meja kerajinan handmade dengan benang dan alat rajut">
          <div class="image-tag">made slowly, loved forever</div>
        </div>
      </section>
      <div class="intro-strip"><span>✳ Thoughtfully handmade</span><span>Soft textures · Warm colors · Everyday joy</span></div>
      <section id="collection">
        <div class="section-head">
          <div><div class="eyebrow">Made just for you</div><h2>Our little collection</h2></div>
          <p>Pieces to keep, gift, and cherish.</p>
        </div>
        <div class="filters" aria-label="Filter produk">
          <button class="filter active" data-filter="all">All pieces</button>
          <button class="filter" data-filter="accessories">Accessories</button>
          <button class="filter" data-filter="plushies">Plushies</button>
          <button class="filter" data-filter="home">Home & living</button>
        </div>
        <div class="products">
          <article class="product" data-category="plushies">
            <div class="product-photo"><img src="https://images.unsplash.com/photo-1615485290382-441e4d049cb5?auto=format&fit=crop&w=800&q=85" alt="Boneka rajut handmade"><span class="pill">Bestseller</span></div>
            <div class="product-info"><div><h3>Little Amigurumi</h3><p>Teman mungil penuh karakter</p><button class="add">+ Add to bag</button></div><div class="price">Rp 85.000</div></div>
          </article>
          <article class="product" data-category="accessories">
            <div class="product-photo"><img src="https://images.unsplash.com/photo-1529139574466-a303027c1d8b?auto=format&fit=crop&w=800&q=85" alt="Aksesori fashion bernuansa natural"><span class="pill">Handmade</span></div>
            <div class="product-info"><div><h3>Everyday Tote</h3><p>Tas santai untuk hari-harimu</p><button class="add">+ Add to bag</button></div><div class="price">Rp 120.000</div></div>
          </article>
          <article class="product" data-category="home">
            <div class="product-photo"><img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=800&q=85" alt="Interior rumah hangat dan natural"><span class="pill">New</span></div>
            <div class="product-info"><div><h3>Cozy Home Set</h3><p>Sentuhan hangat untuk ruangmu</p><button class="add">+ Add to bag</button></div><div class="price">Rp 95.000</div></div>
          </article>
        </div>
      </section>
      <section class="about" id="about">
        <div>
          <div class="eyebrow">The heart behind every stitch</div>
          <h2>Made by hand,<br>made with heart.</h2>
          <p>Nadé Crochet percaya bahwa hal sederhana bisa membawa rasa bahagia. Dari pilihan warna yang lembut sampai setiap simpul benang, semuanya dibuat dengan perhatian pada detail.</p>
          <div class="quote">“A little handmade joy, just for you.”</div>
        </div>
        <div class="about-art"><img src="https://images.unsplash.com/photo-1513364776144-60967b0f800f?auto=format&fit=crop&w=1000&q=85" alt="Perlengkapan seni dan kerajinan handmade"></div>
      </section>
      <section class="contact" id="contact">
        <div class="eyebrow">Let's make something lovely</div>
        <h2>Have something in mind?</h2>
        <p>Ingin custom warna, ukuran, atau hadiah spesial?<br>Yuk, ceritakan ide manismu kepada kami.</p>
        <a class="button" href="<?= htmlspecialchars($whatsappLink, ENT_QUOTES, "UTF-8") ?>" target="_blank" rel="noopener">LET'S CHAT ON WHATSAPP ↗</a>
      </section>
      <footer><span>© 2026 NADÉ CROCHET · MADE WITH LOVE</span><span>HANDMADE IN INDONESIA ♡</span></footer>
    </main>
  </div>
  <div class="toast" id="toast" role="status">Added to your little bag ♡</div>
  <script src="assets/js/script.js" defer></script>

</body>
</html>