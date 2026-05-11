<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ShopNest – My Cart</title>
  <link rel="stylesheet" href="../css/style.css" />
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
  <a href="../index.html" class="nav-brand">Shop<span>Nest</span></a>
  <ul class="nav-links">
    <li><a href="../index.html">Home</a></li>
    <li><a href="products.html">Products</a></li>
    <li><a href="cart.html" class="active">Cart</a></li>
    <li><a href="order-summary.html">Orders</a></li>
    <li><a href="dashboard.html">Dashboard</a></li>
  </ul>
  <div class="nav-actions">
    <a href="cart.html" class="cart-icon">🛒 <span class="cart-badge">0</span></a>
    <button class="btn-nav">👤 Juan D.</button>
  </div>
</nav>

<!-- PAGE HEADER -->
<div style="background:var(--dark);padding:2.5rem 0;">
  <div class="container">
    <p style="color:var(--accent);font-size:0.8rem;font-weight:600;text-transform:uppercase;letter-spacing:1px;margin-bottom:0.4rem;">Checkout</p>
    <h1 style="font-family:var(--font-display);font-size:2rem;font-weight:700;color:#fff;">My Shopping Cart</h1>
    <p style="color:rgba(255,255,255,0.55);font-size:0.875rem;margin-top:0.25rem;">0 items in your cart</p>
  </div>
</div>

<div class="section">
  <div class="container">

    <!-- STEPS -->
    <div style="display:flex;align-items:center;gap:0;margin-bottom:2.5rem;background:var(--card);border-radius:50px;border:1px solid var(--border);padding:0.4rem;max-width:500px;">
      <div style="flex:1;text-align:center;background:var(--accent);color:#fff;border-radius:50px;padding:0.5rem;font-size:0.82rem;font-weight:600;">1 · Cart</div>
      <div style="flex:1;text-align:center;color:var(--muted);padding:0.5rem;font-size:0.82rem;font-weight:600;">2 · Checkout</div>
      <div style="flex:1;text-align:center;color:var(--muted);padding:0.5rem;font-size:0.82rem;font-weight:600;">3 · Confirmation</div>
    </div>

    <div class="cart-layout">

      <!-- CART ITEMS -->
      <div>
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Cart Items (0)</h3>
            <a href="products.html" style="font-size:0.82rem;color:var(--accent);">+ Continue Shopping</a>
          </div>
          <div class="card-body">

            <!-- EMPTY CART STATE -->
            <div style="text-align:center;padding:3rem 1rem;color:var(--muted);">
              <div style="font-size:3rem;margin-bottom:1rem;">🛒</div>
              <div style="font-weight:600;font-size:1rem;margin-bottom:0.5rem;">Your cart is empty</div>
              <div style="font-size:0.85rem;">Browse our products and add items to your cart.</div>
            </div>

          </div>
        </div>

        <!-- PROMO -->
        <div class="card mt-2">
          <div class="card-body" style="display:flex;gap:1rem;">
            <input type="text" class="form-control" placeholder="Enter promo code (e.g. SHOPNEST10)" />
            <button class="btn btn-outline" style="white-space:nowrap;">Apply Code</button>
          </div>
        </div>
      </div>

      <!-- ORDER SUMMARY -->
      <div>
        <div class="card order-summary-card">
          <div class="card-header">
            <h3 class="card-title">Order Summary</h3>
          </div>
          <div class="card-body">

            <div class="summary-row">
              <span>Subtotal (0 items)</span>
              <span>₱0</span>
            </div>
            <div class="summary-row">
              <span>Shipping Fee</span>
              <span style="color:var(--success);">Free</span>
            </div>
            <div class="summary-row">
              <span>Promo Discount</span>
              <span style="color:var(--danger);">−₱0</span>
            </div>
            <div class="summary-row">
              <span>VAT (12%)</span>
              <span>₱0</span>
            </div>
            <div class="summary-row total">
              <span>Total</span>
              <span>₱0</span>
            </div>

            <a href="order-summary.html" class="btn btn-primary btn-full btn-lg mt-2">
              Proceed to Checkout →
            </a>
            <a href="products.html" class="btn btn-ghost btn-full mt-1" style="text-align:center;">
              ← Continue Shopping
            </a>

            <hr class="divider" />
            <div style="font-size:0.78rem;color:var(--muted);text-align:center;line-height:1.8;">
              🔒 Secure Checkout &nbsp;|&nbsp; 🚚 Free Shipping above ₱1,000<br>
              ↩️ 30-day Easy Returns
            </div>

          </div>
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
