<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ShopNest – Home</title>
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
  <a href="index.html" class="nav-brand">Shop<span>Nest</span></a>
  <ul class="nav-links">
    <li><a href="index.html" class="active">Home</a></li>
    <li><a href="pages/products.html">Products</a></li>
    <li><a href="pages/cart.html">Cart</a></li>
    <li><a href="pages/order-summary.html">Orders</a></li>
    <li><a href="pages/dashboard.html">Dashboard</a></li>
  </ul>
  <div class="nav-actions">
    <a href="pages/cart.html" class="cart-icon">
      🛒 <span class="cart-badge">0</span>
    </a>
    <a href="pages/login.html" class="btn-nav">Sign In</a>
  </div>
</nav>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <div class="hero-content">
      <span class="hero-tag">✦ New Collection 2025</span>
      <h1>Shop the <em>Finest</em> Products Online</h1>
      <p>Discover thousands of curated products — from electronics to fashion — delivered right to your doorstep.</p>
      <div class="hero-btns">
        <a href="pages/products.html" class="btn btn-primary btn-lg">Browse Products</a>
        <a href="pages/register.html" class="btn btn-outline btn-lg" style="color:#fff;border-color:rgba(255,255,255,0.4);">Create Account</a>
      </div>
    </div>
  </div>

</section>

<!-- CATEGORY STRIP -->
<section class="section-sm" style="background:#fff; border-bottom:1px solid var(--border);">
  <div class="container">
    <div style="display:grid; grid-template-columns:repeat(6,1fr); gap:1rem; text-align:center;">
      <a href="pages/products.html" class="cat-strip-item" style="text-decoration:none;color:var(--dark);">
        <div style="font-size:2.2rem;margin-bottom:0.4rem;">📱</div>
        <div style="font-size:0.8rem;font-weight:600;">Electronics</div>
      </a>
      <a href="pages/products.html" class="cat-strip-item" style="text-decoration:none;color:var(--dark);">
        <div style="font-size:2.2rem;margin-bottom:0.4rem;">👗</div>
        <div style="font-size:0.8rem;font-weight:600;">Fashion</div>
      </a>
      <a href="pages/products.html" class="cat-strip-item" style="text-decoration:none;color:var(--dark);">
        <div style="font-size:2.2rem;margin-bottom:0.4rem;">🏠</div>
        <div style="font-size:0.8rem;font-weight:600;">Home & Living</div>
      </a>
      <a href="pages/products.html" class="cat-strip-item" style="text-decoration:none;color:var(--dark);">
        <div style="font-size:2.2rem;margin-bottom:0.4rem;">💄</div>
        <div style="font-size:0.8rem;font-weight:600;">Beauty</div>
      </a>
      <a href="pages/products.html" class="cat-strip-item" style="text-decoration:none;color:var(--dark);">
        <div style="font-size:2.2rem;margin-bottom:0.4rem;">⚽</div>
        <div style="font-size:0.8rem;font-weight:600;">Sports</div>
      </a>
      <a href="pages/products.html" class="cat-strip-item" style="text-decoration:none;color:var(--dark);">
        <div style="font-size:2.2rem;margin-bottom:0.4rem;">📚</div>
        <div style="font-size:0.8rem;font-weight:600;">Books</div>
      </a>
    </div>
  </div>
</section>

<!-- FEATURED PRODUCTS -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <div class="section-tag">Handpicked for You</div>
      <h2 class="section-title">Featured Products</h2>
      <p class="section-desc">Our best-selling items loved by thousands of shoppers across the country.</p>
    </div>

    <div class="products-grid">

      <div class="product-card">
        <div class="product-img">
          📱
          <span class="product-badge">Sale</span>
        </div>
        <div class="product-info">
          <div class="product-category">Electronics</div>
          <div class="product-name">Smartphone Pro X12</div>
          <div class="product-price">₱12,999 <span class="original">₱16,500</span></div>
          <a href="pages/products.html" class="btn btn-primary btn-sm btn-full">Add to Cart</a>
        </div>
      </div>

      <div class="product-card">
        <div class="product-img">👟</div>
        <div class="product-info">
          <div class="product-category">Footwear</div>
          <div class="product-name">AirRun Classic Sneakers</div>
          <div class="product-price">₱2,499</div>
          <a href="pages/products.html" class="btn btn-primary btn-sm btn-full">Add to Cart</a>
        </div>
      </div>

      <div class="product-card">
        <div class="product-img">
          💻
          <span class="product-badge">New</span>
        </div>
        <div class="product-info">
          <div class="product-category">Electronics</div>
          <div class="product-name">UltraBook Slim 15"</div>
          <div class="product-price">₱34,500 <span class="original">₱38,000</span></div>
          <a href="pages/products.html" class="btn btn-primary btn-sm btn-full">Add to Cart</a>
        </div>
      </div>

      <div class="product-card">
        <div class="product-img">⌚</div>
        <div class="product-info">
          <div class="product-category">Accessories</div>
          <div class="product-name">SmartWatch Series 7</div>
          <div class="product-price">₱4,299</div>
          <a href="pages/products.html" class="btn btn-primary btn-sm btn-full">Add to Cart</a>
        </div>
      </div>

    </div>

    <div style="text-align:center;margin-top:2.5rem;">
      <a href="pages/products.html" class="btn btn-outline btn-lg">View All Products →</a>
    </div>
  </div>
</section>

<!-- WHY US BANNER -->
<section class="section-sm" style="background:var(--dark);color:#fff;">
  <div class="container">
    <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:2rem;text-align:center;">
      <div>
        <div style="font-size:2rem;margin-bottom:0.5rem;">🚚</div>
        <div style="font-weight:700;margin-bottom:0.25rem;">Free Shipping</div>
        <div style="font-size:0.82rem;color:rgba(255,255,255,0.55);">On all orders above ₱1,000</div>
      </div>
      <div>
        <div style="font-size:2rem;margin-bottom:0.5rem;">🔒</div>
        <div style="font-weight:700;margin-bottom:0.25rem;">Secure Payments</div>
        <div style="font-size:0.82rem;color:rgba(255,255,255,0.55);">100% safe and encrypted</div>
      </div>
      <div>
        <div style="font-size:2rem;margin-bottom:0.5rem;">↩️</div>
        <div style="font-weight:700;margin-bottom:0.25rem;">Easy Returns</div>
        <div style="font-size:0.82rem;color:rgba(255,255,255,0.55);">30-day return policy</div>
      </div>
      <div>
        <div style="font-size:2rem;margin-bottom:0.5rem;">💬</div>
        <div style="font-weight:700;margin-bottom:0.25rem;">24/7 Support</div>
        <div style="font-size:0.82rem;color:rgba(255,255,255,0.55);">Always here to help</div>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <strong>ShopNest</strong> &mdash; Simple E-Commerce System &mdash; IT 56 Web Systems & Technologies 2<br>
  <span>Central Mindanao University &bull; College of Information Sciences and Computing</span>
</footer>

</body>
</html>
