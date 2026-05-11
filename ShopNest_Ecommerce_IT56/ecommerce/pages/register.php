<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ShopNest – Create Account</title>
  <link rel="stylesheet" href="../css/style.css" />
</head>
<body>

<div class="auth-page">

  <!-- LEFT VISUAL -->
  <div class="auth-visual" style="background:linear-gradient(135deg,#1A1A2E 0%,#2E2E55 100%);">
    <div class="auth-visual-text">
      <div class="auth-visual-icon">🎉</div>
      <div class="auth-visual-title">Join ShopNest Today</div>
      <p class="auth-visual-sub">Get access to exclusive deals, track your orders, and manage your wishlist — all in one place.</p>
      <div style="margin-top:2rem;display:flex;flex-direction:column;gap:0.85rem;text-align:left;">
        <div style="display:flex;gap:0.75rem;align-items:center;color:rgba(255,255,255,0.8);font-size:0.9rem;">
          <span style="color:var(--accent);font-size:1.1rem;">✓</span> Free shipping on first order
        </div>
        <div style="display:flex;gap:0.75rem;align-items:center;color:rgba(255,255,255,0.8);font-size:0.9rem;">
          <span style="color:var(--accent);font-size:1.1rem;">✓</span> Exclusive member-only discounts
        </div>
        <div style="display:flex;gap:0.75rem;align-items:center;color:rgba(255,255,255,0.8);font-size:0.9rem;">
          <span style="color:var(--accent);font-size:1.1rem;">✓</span> Order tracking & history
        </div>
        <div style="display:flex;gap:0.75rem;align-items:center;color:rgba(255,255,255,0.8);font-size:0.9rem;">
          <span style="color:var(--accent);font-size:1.1rem;">✓</span> 30-day easy returns
        </div>
      </div>
    </div>
  </div>

  <!-- RIGHT FORM -->
  <div class="auth-form-wrap" style="overflow-y:auto;">
    <div class="auth-form-box" style="max-width:480px;">

      <div class="auth-logo">Shop<span>Nest</span></div>
      <h2 class="auth-title">Create Your Account</h2>
      <p class="auth-subtitle">Already have an account? <a href="login.php">Sign in</a></p>

      <form action="#" method="POST">

        <div class="form-row">
          <div class="form-group">
            <label class="form-label">First Name</label>
            <input type="text" class="form-control" placeholder="Juan" />
          </div>
          <div class="form-group">
            <label class="form-label">Last Name</label>
            <input type="text" class="form-control" placeholder="Dela Cruz" />
          </div>
        </div>

        <div class="form-group">
          <label class="form-label">Email Address</label>
          <input type="email" class="form-control" placeholder="juan@email.com" />
        </div>

        <div class="form-group">
          <label class="form-label">Phone Number</label>
          <input type="tel" class="form-control" placeholder="+63 9XX XXX XXXX" />
        </div>

        <div class="form-group">
          <label class="form-label">Shipping Address</label>
          <textarea class="form-control" rows="2" placeholder="Street, Barangay, City, Province"></textarea>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" placeholder="Min. 8 characters" />
          </div>
          <div class="form-group">
            <label class="form-label">Confirm Password</label>
            <input type="password" class="form-control" placeholder="Repeat password" />
          </div>
        </div>

        <div style="font-size:0.82rem;color:var(--muted);margin-bottom:1.25rem;display:flex;gap:0.5rem;align-items:flex-start;">
          <input type="checkbox" style="margin-top:3px;" />
          I agree to ShopNest's <a href="#" style="color:var(--accent);">Terms of Service</a> and <a href="#" style="color:var(--accent);">Privacy Policy</a>
        </div>

        <a href="dashboard.php" class="btn btn-primary btn-full btn-lg">Create Account →</a>

      </form>

      <div class="auth-switch">
        Already have an account? <a href="login.php">Sign in here</a>
      </div>

    </div>
  </div>

</div>

</body>
</html>
