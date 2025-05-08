<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat :wght@400;600;700&display=swap" rel="stylesheet"/>
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
/* Добавь в стиль */
@media (max-width: 768px) {
  .banner-grid {
    flex-direction: column;
  }

  .banner-column {
    width: 100%;
    margin: 10px 0;
  }

  .section-header {
    align-self: center;
    font-size: 20px;
  }

  .category-title, .product-title {
    font-size: 16px;
  }

  .product-price {
    font-size: 16px;
  }
}
  </style>
</head>
<body>
<main class="page">
            </div>

            <!-- Categories -->
            <div class="section-header">
                <a href="{{ url('category') }}" class="in_link">
                    <h2 class="section-title">Популярные категории</h2>
                    <img src="https://i.ibb.co/VYCTb5Lb/Polygon-3.png " class="section-icon" alt="Categories icon" />
                </a>
            </div>

            <section class="categories-grid">
               
            </section>

            <!-- Products -->
            <div class="section-header">
                <a href="{{ url('catalog') }}" class="in_link">
                    <h2 class="section-title">Популярные позиции</h2>
                    <img src="https://i.ibb.co/VYCTb5Lb/Polygon-3.png " class="section-icon" alt="Popular items icon" />
                </a>
            </div>

            <section class="products-grid">
                @foreach($products as $product)
                    <article class="product-card">
                        <img src="{{ $product['image'] }}" class="product-image" alt="{{ $product['title'] }}" />
                        <div class="product-info">
                            <a href="#" class="in_link1">
                                <h3 class="product-title">{{ $product['title'] }}</h3>
                                <p class="product-price">{{ $product['price'] }}</p>
                            </a>
                        </div>
                    </article>
                @endforeach
            </section>
        </section>

        <!-- Footer -->
        <footer class="main-footer">
            <img src="https://i.ibb.co/VWwqGNN8/logo.png " class="footer-logo" alt="Footer logo" />
            <nav class="footer-nav">
                <a href="{{ url('/') }}" class="footer-link">ГЛАВНАЯ</a>
                <a href="#" class="footer-link">КОНТАКТЫ</a>
                <a href="{{ route('login') }}" class="footer-link">РЕГИСТРАЦИЯ|ВХОД</a>
            </nav>
            <div class="contact-info">
                <a href="#" class="contact-link">НАШ TG</a>
                <a href="#" class="contact-link">НАШ VK</a>
                <a href="mailto:CARTEMOUS@GMAIL.COM" class="contact-link">CARTEMOUS@GMAIL.COM</a>
            </div>
        </footer>
  </main>
</body>
</html>