<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ShopNest – Order Summary</title>
  <link rel="stylesheet" href="../css/style.css" />
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
  <a href="../index.html" class="nav-brand">Shop<span>Nest</span></a>
  <ul class="nav-links">
    <li><a href="../index.html">Home</a></li>
    <li><a href="products.html">Products</a></li>
    <li><a href="cart.html">Cart</a></li>
    <li><a href="order-summary.html" class="active">Orders</a></li>
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
    <p style="color:var(--accent);font-size:0.8rem;font-weight:600;text-transform:uppercase;letter-spacing:1px;margin-bottom:0.4rem;">Almost There!</p>
    <h1 style="font-family:var(--font-display);font-size:2rem;font-weight:700;color:#fff;">Checkout & Order Summary</h1>
    <p style="color:rgba(255,255,255,0.55);font-size:0.875rem;margin-top:0.25rem;">Review your order before placing it</p>
  </div>
</div>

<div class="section">
  <div class="container">

    <!-- STEPS -->
    <div style="display:flex;align-items:center;gap:0;margin-bottom:2.5rem;background:var(--card);border-radius:50px;border:1px solid var(--border);padding:0.4rem;max-width:500px;">
      <div style="flex:1;text-align:center;color:var(--muted);padding:0.5rem;font-size:0.82rem;font-weight:600;">1 · Cart</div>
      <div style="flex:1;text-align:center;background:var(--accent);color:#fff;border-radius:50px;padding:0.5rem;font-size:0.82rem;font-weight:600;">2 · Checkout</div>
      <div style="flex:1;text-align:center;color:var(--muted);padding:0.5rem;font-size:0.82rem;font-weight:600;">3 · Confirmation</div>
    </div>

    <div style="display:grid;grid-template-columns:1fr 400px;gap:2rem;">

      <!-- LEFT: CHECKOUT FORM -->
      <div style="display:flex;flex-direction:column;gap:1.5rem;">

        <!-- SHIPPING INFO -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">📍 Shipping Information</h3>
          </div>
          <div class="card-body">
            <form action="#" method="POST">
              <div class="form-row">
                <div class="form-group">
                  <label class="form-label">First Name</label>
                  <input type="text" class="form-control" value="Juan" />
                </div>
                <div class="form-group">
                  <label class="form-label">Last Name</label>
                  <input type="text" class="form-control" value="Dela Cruz" />
                </div>
              </div>
              <div class="form-group">
                <label class="form-label">Phone Number</label>
                <input type="tel" class="form-control" value="+63 912 345 6789" />
              </div>
              <div class="form-group">
                <label class="form-label">Complete Shipping Address</label>
                <textarea class="form-control" rows="2">123 Rizal Street, Barangay Centro, Maramag, Bukidnon, 8714</textarea>
              </div>
              <div class="form-row">
                <div class="form-group">
                  <label class="form-label">City / Municipality</label>
                  <input type="text" class="form-control" value="Maramag" />
                </div>
                <div class="form-group">
                  <label class="form-label">Province</label>
                  <input type="text" class="form-control" value="Bukidnon" />
                </div>
              </div>
              <div class="form-group">
                <label class="form-label">Delivery Notes (Optional)</label>
                <input type="text" class="form-control" placeholder="e.g. Leave at the gate, call upon arrival" />
              </div>
            </form>
          </div>
        </div>

        <!-- PAYMENT METHOD -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">💳 Payment Method</h3>
          </div>
          <div class="card-body">
            <div style="display:flex;flex-direction:column;gap:0.75rem;margin-bottom:1.5rem;">
              <label style="display:flex;gap:0.75rem;align-items:center;padding:1rem;border:2px solid var(--accent);border-radius:var(--radius-sm);cursor:pointer;background:rgba(232,98,58,0.04);">
                <input type="radio" name="pay" checked /> <span style="font-weight:600;">💳 Credit / Debit Card</span>
              </label>
              <label style="display:flex;gap:0.75rem;align-items:center;padding:1rem;border:2px solid var(--border);border-radius:var(--radius-sm);cursor:pointer;">
                <input type="radio" name="pay" /> <span style="font-weight:600;">📱 GCash</span>
              </label>
              <label style="display:flex;gap:0.75rem;align-items:center;padding:1rem;border:2px solid var(--border);border-radius:var(--radius-sm);cursor:pointer;">
                <input type="radio" name="pay" /> <span style="font-weight:600;">🏦 Online Banking</span>
              </label>
              <label style="display:flex;gap:0.75rem;align-items:center;padding:1rem;border:2px solid var(--border);border-radius:var(--radius-sm);cursor:pointer;">
                <input type="radio" name="pay" /> <span style="font-weight:600;">💵 Cash on Delivery (COD)</span>
              </label>
            </div>

            <div style="padding:1.25rem;background:#fafafa;border-radius:var(--radius-sm);border:1px solid var(--border);">
              <div class="form-group">
                <label class="form-label">Card Number</label>
                <input type="text" class="form-control" placeholder="1234 5678 9012 3456" value="4111 1111 1111 1111" />
              </div>
              <div class="form-row">
                <div class="form-group">
                  <label class="form-label">Expiry Date</label>
                  <input type="text" class="form-control" placeholder="MM / YY" value="12 / 27" />
                </div>
                <div class="form-group">
                  <label class="form-label">CVV</label>
                  <input type="password" class="form-control" placeholder="•••" value="123" />
                </div>
              </div>
              <div class="form-group" style="margin-bottom:0;">
                <label class="form-label">Cardholder Name</label>
                <input type="text" class="form-control" value="JUAN DELA CRUZ" />
              </div>
            </div>
          </div>
        </div>

        <!-- ORDER ITEMS REVIEW -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">📦 Items in This Order</h3>
            <a href="cart.html" style="font-size:0.82rem;color:var(--accent);">Edit Cart</a>
          </div>
          <div class="table-wrap">
            <table>
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Qty</th>
                  <th>Unit Price</th>
                  <th>Subtotal</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td colspan="4" style="text-align:center;padding:2rem;color:var(--muted);">
                    <div style="font-size:2rem;margin-bottom:0.5rem;">📦</div>
                    <div style="font-weight:600;">No items in this order</div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

      </div>

      <!-- RIGHT: SUMMARY -->
      <div>
        <div class="card order-summary-card">
          <div class="card-header">
            <h3 class="card-title">Order Total</h3>
          </div>
          <div class="card-body">

            <div class="summary-row">
              <span>Subtotal</span>
              <span>₱0</span>
            </div>
            <div class="summary-row">
              <span>Shipping</span>
              <span style="color:var(--success);">Free</span>
            </div>
            <div class="summary-row">
              <span>Promo (SHOPNEST10)</span>
              <span style="color:var(--danger);">−₱0</span>
            </div>
            <div class="summary-row">
              <span>VAT (12%)</span>
              <span>₱0</span>
            </div>
            <div class="summary-row total">
              <span>Grand Total</span>
              <span style="color:var(--accent);">₱0</span>
            </div>

            <div style="margin:1.25rem 0;padding:0.85rem;background:#d4f0e4;border-radius:var(--radius-sm);font-size:0.82rem;color:var(--success);font-weight:600;">
              ✅ You save ₱0 on this order!
            </div>

            <!-- PLACE ORDER BUTTON -->
            <a href="#confirmation" class="btn btn-primary btn-full btn-lg" onclick="showConfirmation()">
              🛍️ Place Order Now
            </a>
            <a href="cart.html" class="btn btn-ghost btn-full mt-1">← Back to Cart</a>

            <hr class="divider" />
            <div style="font-size:0.75rem;color:var(--muted);text-align:center;line-height:2;">
              🔒 SSL Secured Payment<br>
              📋 Order ID will be generated upon confirmation<br>
              📧 Confirmation will be sent to juan@email.com
            </div>
          </div>
        </div>

        <!-- MY ORDERS LIST -->
        <div class="card mt-2">
          <div class="card-header">
            <h3 class="card-title" style="font-size:0.95rem;">My Past Orders</h3>
          </div>
          <div class="table-wrap">
            <table>
              <thead>
                <tr>
                  <th>Order ID</th>
                  <th>Total</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><strong>#ORD-0046</strong></td>
                  <td>₱4,299</td>
                  <td><span class="badge badge-success">Delivered</span></td>
                </tr>
                <tr>
                  <td><strong>#ORD-0038</strong></td>
                  <td>₱7,850</td>
                  <td><span class="badge badge-success">Delivered</span></td>
                </tr>
                <tr>
                  <td><strong>#ORD-0031</strong></td>
                  <td>₱2,340</td>
                  <td><span class="badge badge-danger">Cancelled</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>

    <!-- CONFIRMATION SECTION (static, shown as sample) -->
    <div id="confirmation" style="display:none;" class="card mt-3">
      <div class="card-body order-success">
        <div class="success-icon">🎉</div>
        <h2 class="success-title">Order Placed Successfully!</h2>
        <p class="success-sub">Your order <strong>#ORD-0047</strong> has been confirmed. A confirmation email has been sent to <strong>juan@email.com</strong>.</p>
        <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
          <a href="dashboard.html" class="btn btn-primary">Go to Dashboard</a>
          <a href="products.html" class="btn btn-outline">Continue Shopping</a>
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

<script>
function showConfirmation() {
  setTimeout(() => {
    document.getElementById('confirmation').style.display = 'block';
    document.getElementById('confirmation').scrollIntoView({ behavior: 'smooth' });
  }, 300);
}
</script>

</body>
</html>
