<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ShopNest – Dashboard</title>
  <link rel="stylesheet" href="../css/style.css" />
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
  <a href="../index.php" class="nav-brand">Shop<span>Nest</span></a>
  <ul class="nav-links">
    <li><a href="../index.php">Home</a></li>
    <li><a href="products.php">Products</a></li>
    <li><a href="cart.php">Cart</a></li>
    <li><a href="order-summary.php">Orders</a></li>
    <li><a href="dashboard.php" class="active">Dashboard</a></li>
  </ul>
  <div class="nav-actions">
    <a href="cart.php" class="cart-icon">🛒 <span class="cart-badge">3</span></a>
    <button class="btn-nav">👤 Juan D.</button>
  </div>
</nav>

<div class="dashboard-layout">

  <!-- SIDEBAR -->
  <aside class="sidebar">
    <div style="padding:1.5rem 1.75rem;border-bottom:1px solid rgba(255,255,255,0.08);margin-bottom:0.5rem;">
      <div style="display:flex;align-items:center;gap:0.85rem;">
        <div style="width:42px;height:42px;border-radius:50%;background:var(--accent);display:flex;align-items:center;justify-content:center;font-size:1.1rem;font-weight:700;color:#fff;">J</div>
        <div>
          <div style="color:#fff;font-weight:600;font-size:0.9rem;">Juan Dela Cruz</div>
          <div style="color:rgba(255,255,255,0.45);font-size:0.75rem;">Customer</div>
        </div>
      </div>
    </div>

    <div class="sidebar-label">Main</div>
    <ul class="sidebar-menu">
      <li><a href="dashboard.php" class="active">📊 &nbsp;Dashboard</a></li>
      <li><a href="products.php">🛍️ &nbsp;Products</a></li>
      <li><a href="cart.php">🛒 &nbsp;My Cart</a></li>
      <li><a href="order-summary.php">📦 &nbsp;My Orders</a></li>
    </ul>

    <div class="sidebar-label">Account</div>
    <ul class="sidebar-menu">
      <li><a href="#">👤 &nbsp;Profile</a></li>
      <li><a href="#">🔔 &nbsp;Notifications</a></li>
      <li><a href="#">⚙️ &nbsp;Settings</a></li>
    </ul>

    <div class="sidebar-label">Admin</div>
    <ul class="sidebar-menu">
      <li><a href="#">📦 &nbsp;Manage Products</a></li>
      <li><a href="#">👥 &nbsp;Manage Users</a></li>
      <li><a href="#">📈 &nbsp;Reports</a></li>
    </ul>

    <div style="margin-top:auto;padding:1.5rem 1.75rem;">
      <a href="login.php" class="btn btn-danger btn-sm btn-full">🚪 &nbsp;Sign Out</a>
    </div>
  </aside>

  <!-- MAIN CONTENT -->
  <main class="main-content">

    <div class="page-header">
      <div>
        <h1 class="page-title">Good morning, Juan 👋</h1>
        <p class="page-subtitle">Here's what's happening in your store today.</p>
      </div>
      <div style="font-size:0.82rem;color:var(--muted);">📅 April 21, 2025</div>
    </div>

    <!-- STATS -->
    <div class="stats-grid">
      <div class="stat-card">
        <div class="stat-icon">📦</div>
        <div class="stat-value">128</div>
        <div class="stat-label">Total Products</div>
      </div>
      <div class="stat-card">
        <div class="stat-icon">🛒</div>
        <div class="stat-value">47</div>
        <div class="stat-label">Total Orders</div>
      </div>
      <div class="stat-card">
        <div class="stat-icon">👥</div>
        <div class="stat-value">312</div>
        <div class="stat-label">Registered Users</div>
      </div>
      <div class="stat-card">
        <div class="stat-icon">💰</div>
        <div class="stat-value">₱84K</div>
        <div class="stat-label">Total Revenue</div>
      </div>
    </div>

    <!-- RECENT ORDERS -->
    <div class="card mb-3">
      <div class="card-header">
        <h3 class="card-title">Recent Orders</h3>
        <a href="order-summary.php" class="btn btn-ghost btn-sm">View All →</a>
      </div>
      <div class="table-wrap">
        <table>
          <thead>
            <tr>
              <th>Order ID</th>
              <th>Customer</th>
              <th>Items</th>
              <th>Total</th>
              <th>Status</th>
              <th>Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>#ORD-0047</strong></td>
              <td>Juan Dela Cruz</td>
              <td>3 items</td>
              <td><strong>₱15,499</strong></td>
              <td><span class="badge badge-info">Processing</span></td>
              <td>Apr 21, 2025</td>
              <td><a href="order-summary.php" class="btn btn-ghost btn-sm">View</a></td>
            </tr>
            <tr>
              <td><strong>#ORD-0046</strong></td>
              <td>Maria Santos</td>
              <td>1 item</td>
              <td><strong>₱4,299</strong></td>
              <td><span class="badge badge-success">Delivered</span></td>
              <td>Apr 20, 2025</td>
              <td><a href="order-summary.php" class="btn btn-ghost btn-sm">View</a></td>
            </tr>
            <tr>
              <td><strong>#ORD-0045</strong></td>
              <td>Pedro Reyes</td>
              <td>2 items</td>
              <td><strong>₱7,850</strong></td>
              <td><span class="badge badge-warning">Shipped</span></td>
              <td>Apr 19, 2025</td>
              <td><a href="order-summary.php" class="btn btn-ghost btn-sm">View</a></td>
            </tr>
            <tr>
              <td><strong>#ORD-0044</strong></td>
              <td>Ana Lim</td>
              <td>5 items</td>
              <td><strong>₱2,340</strong></td>
              <td><span class="badge badge-success">Delivered</span></td>
              <td>Apr 18, 2025</td>
              <td><a href="order-summary.php" class="btn btn-ghost btn-sm">View</a></td>
            </tr>
            <tr>
              <td><strong>#ORD-0043</strong></td>
              <td>Carlo Mendoza</td>
              <td>1 item</td>
              <td><strong>₱34,500</strong></td>
              <td><span class="badge badge-danger">Cancelled</span></td>
              <td>Apr 17, 2025</td>
              <td><a href="order-summary.php" class="btn btn-ghost btn-sm">View</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- BOTTOM ROW -->
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:1.5rem;">

      <!-- LOW STOCK -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">⚠️ Low Stock Alerts</h3>
        </div>
        <div class="table-wrap">
          <table>
            <thead>
              <tr>
                <th>Product</th>
                <th>Stock</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Smartphone Pro X12</td>
                <td>4</td>
                <td><span class="badge badge-danger">Critical</span></td>
              </tr>
              <tr>
                <td>Wireless Earbuds V3</td>
                <td>2</td>
                <td><span class="badge badge-danger">Critical</span></td>
              </tr>
              <tr>
                <td>Leather Wallet Brown</td>
                <td>7</td>
                <td><span class="badge badge-warning">Low</span></td>
              </tr>
              <tr>
                <td>Gaming Mouse RGB</td>
                <td>9</td>
                <td><span class="badge badge-warning">Low</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- TOP PRODUCTS -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">🏆 Top Selling Products</h3>
        </div>
        <div class="table-wrap">
          <table>
            <thead>
              <tr>
                <th>#</th>
                <th>Product</th>
                <th>Sold</th>
                <th>Revenue</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>UltraBook Slim 15"</td>
                <td>24</td>
                <td>₱828K</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Smartphone Pro X12</td>
                <td>38</td>
                <td>₱493K</td>
              </tr>
              <tr>
                <td>3</td>
                <td>AirRun Sneakers</td>
                <td>61</td>
                <td>₱152K</td>
              </tr>
              <tr>
                <td>4</td>
                <td>SmartWatch Series 7</td>
                <td>29</td>
                <td>₱124K</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>

  </main>
</div>

</body>
</html>
