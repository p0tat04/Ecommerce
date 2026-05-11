<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ShopNest – Products</title>
  <link rel="stylesheet" href="../css/style.css" />
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
  <a href="../index.html" class="nav-brand">Shop<span>Nest</span></a>
  <ul class="nav-links">
    <li><a href="../index.html">Home</a></li>
    <li><a href="products.html" class="active">Products</a></li>
    <li><a href="cart.html">Cart</a></li>
    <li><a href="order-summary.html">Orders</a></li>
    <li><a href="dashboard.html">Dashboard</a></li>
  </ul>
  <div class="nav-actions">
    <a href="cart.html" class="cart-icon">🛒 <span class="cart-badge">3</span></a>
    <button class="btn-nav">👤 Juan D.</button>
  </div>
</nav>

<!-- PAGE HEADER -->
<div style="background:var(--dark);padding:3rem 0;border-bottom:1px solid rgba(255,255,255,0.05);">
  <div class="container">
    <div style="display:flex;align-items:center;justify-content:space-between;">
      <div>
        <p style="color:var(--accent);font-size:0.8rem;font-weight:600;text-transform:uppercase;letter-spacing:1px;margin-bottom:0.4rem;">Explore</p>
        <h1 style="font-family:var(--font-display);font-size:2rem;font-weight:700;color:#fff;">All Products</h1>
        <p style="color:rgba(255,255,255,0.55);font-size:0.875rem;margin-top:0.25rem;">Showing 12 of 128 products</p>
      </div>
      <div class="search-bar">
        <input type="text" placeholder="Search products..." />
        <button>Search</button>
      </div>
    </div>
  </div>
</div>

<div class="section">
  <div class="container">
    <div style="display:grid;grid-template-columns:240px 1fr;gap:2.5rem;">

      <!-- SIDEBAR FILTERS -->
      <aside>
        <div class="card" style="position:sticky;top:90px;">
          <div class="card-header">
            <h3 class="card-title">Filters</h3>
            <a href="#" style="font-size:0.8rem;color:var(--accent);">Clear All</a>
          </div>
          <div class="card-body">

            <div style="margin-bottom:1.5rem;">
              <div style="font-weight:600;font-size:0.82rem;text-transform:uppercase;letter-spacing:0.5px;margin-bottom:0.75rem;">Category</div>
              <div style="display:flex;flex-direction:column;gap:0.5rem;">
                <label style="display:flex;gap:0.5rem;align-items:center;font-size:0.875rem;cursor:pointer;">
                  <input type="checkbox" checked /> All (128)
                </label>
                <label style="display:flex;gap:0.5rem;align-items:center;font-size:0.875rem;cursor:pointer;">
                  <input type="checkbox" checked /> Electronics (34)
                </label>
                <label style="display:flex;gap:0.5rem;align-items:center;font-size:0.875rem;cursor:pointer;">
                  <input type="checkbox" /> Fashion (28)
                </label>
                <label style="display:flex;gap:0.5rem;align-items:center;font-size:0.875rem;cursor:pointer;">
                  <input type="checkbox" /> Home & Living (21)
                </label>
                <label style="display:flex;gap:0.5rem;align-items:center;font-size:0.875rem;cursor:pointer;">
                  <input type="checkbox" /> Beauty (18)
                </label>
                <label style="display:flex;gap:0.5rem;align-items:center;font-size:0.875rem;cursor:pointer;">
                  <input type="checkbox" /> Sports (15)
                </label>
                <label style="display:flex;gap:0.5rem;align-items:center;font-size:0.875rem;cursor:pointer;">
                  <input type="checkbox" /> Books (12)
                </label>
              </div>
            </div>

            <hr class="divider" />

            <div style="margin-bottom:1.5rem;">
              <div style="font-weight:600;font-size:0.82rem;text-transform:uppercase;letter-spacing:0.5px;margin-bottom:0.75rem;">Price Range</div>
              <div style="display:flex;gap:0.5rem;align-items:center;">
                <input type="number" class="form-control" placeholder="Min" value="0" style="font-size:0.82rem;padding:0.5rem;" />
                <span style="color:var(--muted);">–</span>
                <input type="number" class="form-control" placeholder="Max" value="50000" style="font-size:0.82rem;padding:0.5rem;" />
              </div>
            </div>

            <hr class="divider" />

            <div>
              <div style="font-weight:600;font-size:0.82rem;text-transform:uppercase;letter-spacing:0.5px;margin-bottom:0.75rem;">Availability</div>
              <div style="display:flex;flex-direction:column;gap:0.5rem;">
                <label style="display:flex;gap:0.5rem;align-items:center;font-size:0.875rem;cursor:pointer;">
                  <input type="radio" name="avail" checked /> In Stock
                </label>
                <label style="display:flex;gap:0.5rem;align-items:center;font-size:0.875rem;cursor:pointer;">
                  <input type="radio" name="avail" /> Out of Stock
                </label>
                <label style="display:flex;gap:0.5rem;align-items:center;font-size:0.875rem;cursor:pointer;">
                  <input type="radio" name="avail" /> All
                </label>
              </div>
            </div>

            <hr class="divider" />
            <button class="btn btn-primary btn-full">Apply Filters</button>

          </div>
        </div>
      </aside>

      <!-- PRODUCT GRID -->
      <div>
        <!-- FILTER BAR -->
        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:1.5rem;">
          <div class="filter-bar" style="margin-bottom:0;">
            <span class="filter-pill active">All</span>
            <span class="filter-pill">Electronics</span>
            <span class="filter-pill">Fashion</span>
            <span class="filter-pill">Home</span>
            <span class="filter-pill">Beauty</span>
          </div>
          <select class="form-control" style="width:auto;font-size:0.82rem;padding:0.45rem 1rem;">
            <option>Sort: Featured</option>
            <option>Price: Low to High</option>
            <option>Price: High to Low</option>
            <option>Newest First</option>
          </select>
        </div>

        <div class="products-grid">

          <div class="product-card">
            <div class="product-img">📱 <span class="product-badge">Sale</span></div>
            <div class="product-info">
              <div class="product-category">Electronics</div>
              <div class="product-name">Smartphone Pro X12</div>
              <div style="font-size:0.78rem;color:var(--muted);margin-bottom:0.5rem;">⭐⭐⭐⭐⭐ (142 reviews)</div>
              <div class="product-price">₱12,999 <span class="original">₱16,500</span></div>
              <a href="cart.html" class="btn btn-primary btn-sm btn-full">🛒 Add to Cart</a>
            </div>
          </div>

          <div class="product-card">
            <div class="product-img">👟</div>
            <div class="product-info">
              <div class="product-category">Footwear</div>
              <div class="product-name">AirRun Classic Sneakers</div>
              <div style="font-size:0.78rem;color:var(--muted);margin-bottom:0.5rem;">⭐⭐⭐⭐☆ (87 reviews)</div>
              <div class="product-price">₱2,499</div>
              <a href="cart.html" class="btn btn-primary btn-sm btn-full">🛒 Add to Cart</a>
            </div>
          </div>

          <div class="product-card">
            <div class="product-img">💻 <span class="product-badge">New</span></div>
            <div class="product-info">
              <div class="product-category">Electronics</div>
              <div class="product-name">UltraBook Slim 15"</div>
              <div style="font-size:0.78rem;color:var(--muted);margin-bottom:0.5rem;">⭐⭐⭐⭐⭐ (56 reviews)</div>
              <div class="product-price">₱34,500 <span class="original">₱38,000</span></div>
              <a href="cart.html" class="btn btn-primary btn-sm btn-full">🛒 Add to Cart</a>
            </div>
          </div>

          <div class="product-card">
            <div class="product-img">⌚</div>
            <div class="product-info">
              <div class="product-category">Accessories</div>
              <div class="product-name">SmartWatch Series 7</div>
              <div style="font-size:0.78rem;color:var(--muted);margin-bottom:0.5rem;">⭐⭐⭐⭐☆ (203 reviews)</div>
              <div class="product-price">₱4,299</div>
              <a href="cart.html" class="btn btn-primary btn-sm btn-full">🛒 Add to Cart</a>
            </div>
          </div>

          <div class="product-card">
            <div class="product-img">🎧 <span class="product-badge">Hot</span></div>
            <div class="product-info">
              <div class="product-category">Electronics</div>
              <div class="product-name">Wireless Earbuds Pro V3</div>
              <div style="font-size:0.78rem;color:var(--muted);margin-bottom:0.5rem;">⭐⭐⭐⭐⭐ (319 reviews)</div>
              <div class="product-price">₱1,899 <span class="original">₱2,499</span></div>
              <a href="cart.html" class="btn btn-primary btn-sm btn-full">🛒 Add to Cart</a>
            </div>
          </div>

          <div class="product-card">
            <div class="product-img">👜</div>
            <div class="product-info">
              <div class="product-category">Fashion</div>
              <div class="product-name">Genuine Leather Handbag</div>
              <div style="font-size:0.78rem;color:var(--muted);margin-bottom:0.5rem;">⭐⭐⭐⭐☆ (74 reviews)</div>
              <div class="product-price">₱3,750</div>
              <a href="cart.html" class="btn btn-primary btn-sm btn-full">🛒 Add to Cart</a>
            </div>
          </div>

          <div class="product-card">
            <div class="product-img">🖱️</div>
            <div class="product-info">
              <div class="product-category">Electronics</div>
              <div class="product-name">Gaming Mouse RGB 16000dpi</div>
              <div style="font-size:0.78rem;color:var(--muted);margin-bottom:0.5rem;">⭐⭐⭐⭐⭐ (198 reviews)</div>
              <div class="product-price">₱1,250</div>
              <a href="cart.html" class="btn btn-primary btn-sm btn-full">🛒 Add to Cart</a>
            </div>
          </div>

          <div class="product-card">
            <div class="product-img">🌿</div>
            <div class="product-info">
              <div class="product-category">Beauty</div>
              <div class="product-name">Organic Skincare Set</div>
              <div style="font-size:0.78rem;color:var(--muted);margin-bottom:0.5rem;">⭐⭐⭐⭐☆ (45 reviews)</div>
              <div class="product-price">₱899</div>
              <a href="cart.html" class="btn btn-primary btn-sm btn-full">🛒 Add to Cart</a>
            </div>
          </div>

        </div>

        <!-- PAGINATION -->
        <div style="display:flex;justify-content:center;gap:0.5rem;margin-top:2.5rem;">
          <button class="btn btn-ghost btn-sm">← Prev</button>
          <button class="btn btn-primary btn-sm">1</button>
          <button class="btn btn-ghost btn-sm">2</button>
          <button class="btn btn-ghost btn-sm">3</button>
          <button class="btn btn-ghost btn-sm">Next →</button>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- FOOTER -->
<footer>
  <strong>ShopNest</strong> &mdash; Simple E-Commerce System &mdash; IT 56 Web Systems & Technologies 2<br>
  <span>Central Mindanao University &bull; College of Information Sciences and Computing</span>
</footer>

</body>
</html>
