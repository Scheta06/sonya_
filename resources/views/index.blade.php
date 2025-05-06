<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet"/>
  <title>CARTEMOUS</title>
  <style>
    .page {
  background-color: #fff;
  display: flex;
  flex-direction: column;
  overflow: hidden;
  align-items: stretch;
}

.main-header {
  background-color: rgb(103, 8, 8);
  display: flex;
  width: 100%;
  padding: 32px 38px;
  align-items: center;
  gap: 20px;
  font-family:
    Montserrat,
    -apple-system,
    Roboto,
    Helvetica,
    sans-serif;
  font-size: 16px;
  color: rgb(229, 229, 229);
  font-weight: 600;
  white-space: nowrap;
  letter-spacing: 0.8px;
  justify-content: space-between;
}

.logo {
  aspect-ratio: 1.1;
  object-fit: contain;
  object-position: center;
  width: 75px;
  align-self: stretch;
  flex-shrink: 0;
}

.main-nav {
  align-self: stretch;
  display: flex;
  margin: auto 0;
  align-items: stretch;
  gap: 100px;
}

.nav-link {
  color: inherit;
  text-decoration: none;
}

.auth-link {
  align-self: stretch;
  margin-right: 80px;
  margin-top: 25px;
  color: inherit;
  text-decoration: none;
}

.page-title {
  color: rgb(103, 8, 8);
  font-size: 24px;
  font-family:
    Montserrat,
    -apple-system,
    Roboto,
    Helvetica,
    sans-serif;
  font-weight: 600;
  letter-spacing: 1.2px;
  align-self: center;
  margin-top: 81px;
}

.content {
  display: flex;
  margin-top: 82px;
  width: 100%;
  padding: 0 80px;
  flex-direction: column;
  align-items: center;
}

.banner-container {
  width: 100%;
  max-width: 1255px;
}

.banner-grid {
  margin-right: 150px;
  gap: 20px;
  display: flex;
}

.banner-column {
  display: flex;
  flex-direction: column;
  align-items: stretch;
  line-height: normal;
  width: 50%;
}

.banner-column:last-child {
  margin-left: 20px;
}

.banner-image {
  aspect-ratio: 2.46;
  object-fit: contain;
  object-position: center;
  width: 100%;
  border-radius: 3px;
  flex-grow: 1;
}

.banner-image-2 {
  aspect-ratio: 2.47;
  object-fit: contain;
  object-position: center;
  width: 100%;
  border-radius: 3px;
  flex-grow: 1;
}

.section-header {
  align-self: start;
  display: flex;
  margin-top: 72px;
  align-items: stretch;
  gap: 23px;
  font-family:
    Montserrat,
    -apple-system,
    Roboto,
    Helvetica,
    sans-serif;
  font-size: 24px;
  color: #000;
  font-weight: 700;
  letter-spacing: 1.2px;
}

.section-title {
  flex: 1;
  margin: 0;
  font-size: inherit;
}

.section-icon {
  aspect-ratio: 0.72;
  object-fit: contain;
  object-position: center;
  width: 18px;
  align-self: start;
  flex-shrink: 0;
}

.categories-grid {
  display: flex;
  margin-top: 68px;
  width: 100%;
  max-width: 1255px;
  align-items: stretch;
  gap: 20px;
  font-family:
    Montserrat,
    -apple-system,
    Roboto,
    Helvetica,
    sans-serif;
  font-size: 16px;
  color: #000;
  font-weight: 400;
  text-align: center;
  flex-wrap: wrap;
  justify-content: space-between;
  margin-right: 150px;
}

.category-card {
  display: flex;
  flex-direction: column;
  align-items: stretch;
}

.category-image {
  aspect-ratio: 0.92;
  object-fit: contain;
  object-position: center;
  width: 198px;
  border-radius: 3px;
}

.category-image-large {
  aspect-ratio: 0.88;
  object-fit: contain;
  object-position: center;
  width: 212px;
  border-radius: 3px;
}

.category-image-small {
  aspect-ratio: 0.9;
  object-fit: contain;
  object-position: center;
  width: 195px;
  border-radius: 3px;
}

.category-title {
  align-self: center;
  margin-top: 49px;
  font-size: 16px;
  font-weight: 400;
}

.products-grid {
  display: flex;
  margin-top: 59px;
  width: 100%;
  max-width: 1249px;
  align-items: start;
  gap: 20px;
  font-family:
    Montserrat,
    -apple-system,
    Roboto,
    Helvetica,
    sans-serif;
  justify-content: space-between;
  margin-right: 150px;
}

.product-card {
  margin-top: 20px;
}
.category-card1 {
  margin-top: 10px;
  display: flex;
  flex-direction: column;
  align-items: stretch;
  
}
.product-image {
  aspect-ratio: 0.92;
  object-fit: contain;
  object-position: center;
  width: 198px;
  border-radius: 3px;
}

.product-info {
  display: flex;
  margin-top: 34px;
  padding: 0 18px 0 7px;
  flex-direction: column;
  align-items: stretch;
}

.product-title {
  color: #000;
  font-size: 14px;
  font-weight: 400;
  margin: 0;
}

.product-price {
  color: #000;
  font-size: 18px;
  font-weight: 700;
  letter-spacing: 0.9px;
  margin: 16px 0 0;
}

.main-footer {
  background-color: rgb(103, 8, 8);
  display: flex;
  margin-top: 199px;
  width: 100%;
  padding: 36px 50px;
  align-items: stretch;
  gap: 20px;
  font-family:
    Montserrat,
    -apple-system,
    Roboto,
    Helvetica,
    sans-serif;
  font-size: 16px;
  color: rgb(229, 229, 229);
  font-weight: 600;
  letter-spacing: 0.8px;
  justify-content: space-between;
}

.footer-logo {
  aspect-ratio: 1.1;
  object-fit: contain;
  object-position: center;
  width: 75px;
  margin: auto 0;
  flex-shrink: 0;
}

.footer-nav {
  display: flex;
  flex-direction: column;
  align-items: start;
}

.footer-link {
  color: inherit;
  text-decoration: none;
  margin-top: 22px;
}

.footer-link:first-child {
  margin-top: 0;
}

.footer-contact {
  display: flex;
  flex-direction: column;
  align-items: start;
  margin-right: 80px;
}

.contact-link {
  color: inherit;
  text-decoration: none;
  margin-top: 22px;
}

.contact-link:first-child {
  margin-top: 0;
}
.in_link{
  text-decoration: none;
  color: #000;
  display: flex;
  gap: 5px;
}
.in_link1{
  text-decoration: none;
  color: #000;

}
.category-title1{
  align-self: center;
  
  font-size: 16px;
  font-weight: 400;
}
  </style>
</head>
<body>
  
  <main class="page">
    <header class="main-header">
      <img
        src="img/logo.png"
        class="logo"
        alt="Site logo"
      />
      <nav class="main-nav">
        <a href="#" class="nav-link">ГЛАВНАЯ</a>
        <a href="#" class="nav-link">КОНТАКТЫ</a>
      </nav>
      <a href="reg.html" class="auth-link">РЕГИСТРАЦИЯ|ВХОД</a>
    </header>
  
    <h1 class="page-title">ГЛАВНАЯ</h1>
  
    <section class="content">
      <div class="banner-container">
        <div class="banner-grid">
          <div class="banner-column">
            <img
              src="https://i.ibb.co/5hb7hJJ3/banner2.png"
              class="banner-image"
              alt="Banner image 1"
            />
          </div>
          <div class="banner-column">
            <img
              src="https://i.ibb.co/cSBVmGKH/banner1.png"
              class="banner-image-2"
              alt="Banner image 2"
            />
          </div>
        </div>
      </div>
  
      <div class="section-header">
        <a href="category.html" class="in_link">
        <h2 class="section-title">Популярные категории</h2>
        <img
          src="https://i.ibb.co/VYCTb5Lb/Polygon-3.png"
          class="section-icon"
          alt="Categories icon"
        />
        </a>
      </div>
  
      <section class="categories-grid">
        <article class="category-card">
          <img
            src="https://i.ibb.co/r20N54Kb/tshirt.png"
            class="category-image"
            alt="Футболки"
          />
          <h3 class="category-title">Футболки</h3>
        </article>
  
        <article class="category-card">
          <img
            src="https://i.ibb.co/4RY6DzFP/hearts.png"
            class="category-image"
            alt="Украшения"
          />
          <h3 class="category-title">Украшения</h3>
        </article>
  
        <article class="category-card">
          <img
            src="https://i.ibb.co/B5ww0L1M/yojibomber.png"
            class="category-image"
            alt="Верхняя одежда"
          />
          <h3 class="category-title">Верхняя одежда</h3>
        </article>
  
        <article class="category-card1">
          <img
            src="img/raf.png"
            class="category-image-large"
            alt="Обувь"
          />
          <h3 class="category-title1">Обувь</h3>
        </article>
  
        <article class="category-card">
          <img
            src="img/cap.png"
            class="category-image-small"
            alt="Аксессуары"
          />
          <h3 class="category-title">Аксессуары</h3>
        </article>
      </section>
  
      <div class="section-header">
        <a href="catalog.html" class="in_link">
        <h2 class="section-title">Популярные позиции</h2>
        <img
          src="https://i.ibb.co/VYCTb5Lb/Polygon-3.png"
          class="section-icon"
          alt="Popular items icon"
        />
        </a>
      </div>
  
      <section class="products-grid">
        <article class="product-card">
          <img
            src="img/shirt.png"
            class="product-image"
            alt="enfants riches derrpimes"
          />
          <div class="product-info">
            <a href="tshirtenfants.html" class="in_link1">
            <h3 class="product-title">enfants riches derrpimes</h3>
            <p class="product-price">48000 руб.</p>
            </a>
          </div>
        </article>
  
        <article class="product-card">
          <img
            src="img/jultshirt.png"
            class="product-image"
            alt="julius t shirt"
          />
          <div class="product-info">
            <a href="tovar1.html" class="in_link1">
            <h3 class="product-title">julius t shirt</h3>
            <p class="product-price">16500 руб.</p>
            </a>
          </div>
        </article>
  
        <article class="product-card">
          <img
            src="img/rubsvit.png"
            class="product-image"
            alt="raf simons emelcodery"
          />
          <div class="product-info">
          <a href="raf.html" class="in_link1">
          <h3 class="product-title">raf simons emelcodery</h3>
          <p class="product-price">35000 руб.</p>
          </a>
          </div>
        </article>
  
        <article class="product-card">
          <img
            src="img/vetmo.png"
            class="product-image"
            alt="vetements hi-speed"
          />
          <div class="product-info">
            <a href="vetmohi.html" class="in_link1">
          <h3 class="product-title">vetements hi-speed</h3>
          <p class="product-price">35000 руб.</p>
            </a>
          </div>
        </article>
  
        <article class="product-card">
          <img
            src="img/jeans.png"
            class="product-image"
            alt="chrome hearts jeans"
          />
          <div class="product-info">
            <a href="chromejeans.html" class="in_link1">
          <h3 class="product-title">chrome hearts jeans</h3>
          <p class="product-price">157000 руб.</p>
            </a>
          </div>
        </article>
      </section>
    </section>
  
    <footer class="main-footer">
      <img
        src="img/logo.png"
        class="footer-logo"
        alt="Footer logo"
      />
      <nav class="footer-nav">
        <a href="index.html" class="footer-link">ГЛАВНАЯ</a>
        <a href="#" class="footer-link">КОНТАКТЫ</a>
        <a href="reg.html" class="footer-link">РЕГИСТРАЦИЯ|ВХОД</a>
      </nav>
      <div class="footer-contact">
        <a href="#" class="contact-link">НАШ TG</a>
        <a href="#" class="contact-link">НАШ VK</a>
        <a href="mailto:CARTEMOUS@GMAIL.COM" class="contact-link">CARTEMOUS@GMAIL.COM</a>
      </div>
    </footer>
  </main>
</body>
</html>