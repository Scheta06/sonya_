<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
  <title>РЕГИСТРАЦИЯ</title>
</head>
<body>
  <style>
    body {
  margin: 0;
  padding: 0;
  background-color: #fff;
  font-family:
    Montserrat,
    -apple-system,
    Roboto,
    Helvetica,
    sans-serif;
  font-size: 40px;
  color: #000;
  font-weight: 600;
}

.site-header {
  background-color: rgba(103, 8, 8, 1);
  display: flex;
  width: 100%;
  padding: 33px 38px;
  align-items: center;
  gap: 20px;
  font-size: 16px;
  color: rgba(229, 229, 229, 1);
  white-space: nowrap;
  letter-spacing: 0.8px;
  justify-content: space-between;
  box-sizing: border-box;
}

.header-logo,
.footer-logo {
  aspect-ratio: 1.1;
  object-fit: contain;
  object-position: center;
  width: 75px;
  align-self: stretch;
  flex-shrink: 0;
}

.nav-menu {
  display: flex;
  margin: auto 0;
  align-items: stretch;
  gap: 100px;
}

.nav-link,
.auth-link,
.footer-link,
.contact-link {
  color: rgba(229, 229, 229, 1);
  text-decoration: none;
}

.auth-link {
  margin: auto 0;
}

.registration-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 0 20px;
}

.registration-title {
  color: rgba(103, 8, 8, 1);
  letter-spacing: 2px;
  margin-top: 89px;
  margin-left: 12px;
  font-size: 40px;
}

.registration-form {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 100%;
  max-width: 469px;
}

.form-group {
  width: 100%;
  margin-top: 30px;
  display: flex;
  flex-direction: column;
}

.form-label {
  font-weight: 500;
  font-size: 40px;
  margin-bottom: 25px;
  text-align: center;
}

.form-input {
  border-radius: 5px;
  border: 1px solid rgba(134, 132, 132, 1);
  height: 72px;
  width: 100%;
  box-sizing: border-box;
}

.submit-button {
  border-radius: 10px;
  background-color: rgba(103, 8, 8, 1);
  margin-top: 113px;
  width: 357px;
  max-width: 100%;
  padding: 17px 70px 29px;
  font-size: 24px;
  color: #fff;
  border: none;
  cursor: pointer;
  font-family: inherit;
  font-weight: 600;
}

.login-prompt {
  font-size: 24px;
  margin-top: 112px;
}

.login-link {
  color: rgba(103, 8, 8, 1);
  text-decoration: none;
  border-radius: 10px;
}

.site-footer {
  background-color: rgba(103, 8, 8, 1);
  display: flex;
  margin-top: 86px;
  width: 100%;
  padding: 27px 50px 44px;
  align-items: stretch;
  gap: 20px;
  font-size: 16px;
  color: rgba(229, 229, 229, 1);
  letter-spacing: 0.8px;
  justify-content: space-between;
  box-sizing: border-box;
}

.footer-nav,
.contact-info {
  display: flex;
  flex-direction: column;
  align-items: start;
  white-space: nowrap;
}

.footer-link,
.contact-link {
  margin-top: 22px;
}

.footer-link:first-child,
.contact-link:first-child {
  margin-top: 0;
}


  </style>
  <header class="site-header">
    <img src="img/logo.png" class="header-logo" alt="Site logo" />
    <nav class="nav-menu">
      <a href="index.html" class="nav-link">ГЛАВНАЯ</a>
      <a href="#" class="nav-link">КОНТАКТЫ</a>
    </nav>
    <a href="#" class="auth-link">РЕГИСТРАЦИЯ|ВХОД</a>
  </header>
  
  <main class="registration-container">
    <h1 class="registration-title">ЗАРЕГИСТРИРОВАТЬСЯ</h1>
  
    <form class="registration-form">
      <div class="form-group">
        <label class="form-label"> Имя </label>
        <input type="text" class="form-input" />
      </div>
  
      <div class="form-group">
        <label class="form-label">Фамилия</label>
        <input type="text" class="form-input" />
      </div>
  
      <div class="form-group">
        <label class="form-label">Почта</label>
        <input type="email" class="form-input" />
      </div>
  
      <div class="form-group">
        <label class="form-label"> Пароль </label>
        <input type="password" class="form-input" />
      </div>
  
      <div class="form-group">
        <label class="form-label">Повторите пароль</label>
        <input type="password" class="form-input" />
      </div>
  
      <button type="submit" class="submit-button">СОЗДАТЬ</button>
    </form>
  
    <p class="login-prompt">
      есть аккаунт?
      <a href="vfod.html" class="login-link">ВОЙТИ</a>
    </p>
  </main>
  
  <footer class="site-footer">
    <img src="img/logo.png" class="footer-logo" alt="Site logo" />
    <nav class="footer-nav">
      <a href="index.html" class="footer-link">ГЛАВНАЯ</a>
      <a href="#" class="footer-link">КОНТАКТЫ</a>
      <a href="#" class="footer-link">РЕГИСТРАЦИЯ|ВХОД</a>
    </nav>
    <div class="contact-info">
      <a href="#" class="contact-link">НАШ TG</a>
      <a href="#" class="contact-link">НАШ VK</a>
      <a href="mailto:CARTEMOUS@GMAIL.COM" class="contact-link"CARTEMOUS@GMAIL.COM></a> 
    </div>
  </footer>
  
</body>
</html>