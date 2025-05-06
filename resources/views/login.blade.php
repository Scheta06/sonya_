<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <title>ВХОД</title>
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
  text-align: center;
}

.page-header {
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

.logo,
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
  margin-top: auto;
  margin-bottom: auto;
  align-items: stretch;
  gap: 100px;
}

.nav-link,
.auth-link {
  color: rgba(229, 229, 229, 1);
  text-decoration: none;
}

.login-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 92px 0;
}

.login-title {
  color: rgba(103, 8, 8, 1);
  font-size: 40px;
  font-weight: 600;
  letter-spacing: 2px;
  margin: 0 0 92px 10px;
}

.login-form {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 100%;
  max-width: 469px;
}

.form-group {
  width: 100%;
  margin-bottom: 35px;
}

.form-label {
  display: block;
  color: #000000;
  font-size: 40px;
  font-weight: 500;
  margin-bottom: 42px;
}

.form-input {
  width: 100%;
  height: 72px;
  border-radius: 5px;
  border: 1px solid rgba(134, 132, 132, 1);
  box-sizing: border-box;
}

.login-button {
  border-radius: 10px;
  background-color: rgba(103, 8, 8, 1);
  border: none;
  width: 357px;
  max-width: 100%;
  padding: 17px 70px 28px;
  font-size: 24px;
  color: #ffffff;
  font-weight: 600;
  cursor: pointer;
  margin-top: 92px;
}

.page-footer {
  background-color: rgba(103, 8, 8, 1);
  display: flex;
  padding: 34px 50px;
  align-items: stretch;
  gap: 20px;
  font-size: 16px;
  color: rgba(229, 229, 229, 1);
  letter-spacing: 0.8px;
  justify-content: space-between;
}

.footer-nav {
  display: flex;
  flex-direction: column;
  align-items: start;
  white-space: nowrap;
}

.footer-link {
  color: rgba(229, 229, 229, 1);
  text-decoration: none;
  margin-top: 22px;
}

.footer-link:first-child {
  margin-top: 0;
}

.contact-info {
  display: flex;
  flex-direction: column;
  align-items: start;
}

.contact-link {
  color: rgba(229, 229, 229, 1);
  text-decoration: none;
  margin-top: 22px;
}

.contact-link:first-child {
  margin-top: 0;
}


    </style>
    <header class="page-header">
        <img src="img/logo.png" class="logo" alt="Company Logo" />
        <nav class="nav-menu">
          <a href="index.html" class="nav-link">ГЛАВНАЯ</a>
          <a href="#" class="nav-link">КОНТАКТЫ</a>
        </nav>
        <a href="reg.html" class="auth-link">РЕГИСТРАЦИЯ|ВХОД</a>
      </header>
      
      <main class="login-container">
        <h1 class="login-title">ВХОД</h1>
      
        <form class="login-form">
          <div class="form-group">
            <label for="email" class="form-label">Почта</label>
            <input type="email" id="email" class="form-input" required />
          </div>
      
          <div class="form-group">
            <label for="password" class="form-label">Пароль</label>
            <input type="password" id="password" class="form-input" required />
          </div>
      
          <button type="submit" class="login-button">ВОЙТИ</button>
        </form>
      </main>
      
      <footer class="page-footer">
        <img src="img/logo.png" class="footer-logo" alt="Company Logo" />
      
        <nav class="footer-nav">
          <a href="index.html" class="footer-link">ГЛАВНАЯ</a>
          <a href="#" class="footer-link">КОНТАКТЫ</a>
          <a href="reg.html" class="footer-link">РЕГИСТРАЦИЯ|ВХОД</a>
        </nav>
      
        <div class="contact-info">
          <a href="#" class="contact-link">НАШ TG</a>
          <a href="#" class="contact-link">НАШ VK</a>
          <a href="mailto:CARTEMOUS@GMAIL.COM" class="contact-link"
            >CARTEMOUS@GMAIL.COM</a
          >
        </div>
      </footer>
      
</body>
</html>