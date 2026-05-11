<footer>
  <div class="container" style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:1rem;padding:2rem 0;color:rgba(255,255,255,0.75);">
    <div>
      <strong>ShopNest</strong> — modern PHP storefront.
    </div>
    <div style="display:flex;gap:1rem;flex-wrap:wrap;font-size:0.95rem;">
      <a href="<?= $root_path ?? './' ?>pages/products.php">Products</a>
      <a href="<?= $root_path ?? './' ?>pages/cart.php">Cart</a>
      <a href="<?= $root_path ?? './' ?>pages/order-summary.php">Orders</a>
      <a href="<?= $root_path ?? './' ?>pages/manage-products.php">Admin</a>
    </div>
  </div>
</footer>
