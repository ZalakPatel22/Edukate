<?php
if (!isset($is_admin_logged_in)) {
  if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }
  $is_admin_logged_in = isset($_SESSION['admin_user']);
}
?>
<?php if ($is_admin_logged_in): ?>
      </main>
    </div>
  </div>
<?php else: ?>
  </div>
<?php endif; ?>
  <footer class="footer-area section-gap admin-footer">
    <div class="container text-center">
      <p class="admin-footer-text">Admin panel for Edukate. All content managed in admin.</p>
    </div>
  </footer>
</body>
</html>
