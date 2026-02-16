<?php if (!defined('ABSPATH')) exit; ?>
</main>
<footer class="site-footer" id="contact">
  <div class="container footer-grid">
    <div>
      <h4><?php bloginfo('name'); ?></h4>
      <p>A grassroots, peer‑led harm reduction organisation dedicated to saving lives through naloxone training and community support.</p>
    </div>
    <div>
      <h4><?php _e('Quick Links','naloxone-advocates'); ?></h4>
      <?php wp_nav_menu(['theme_location'=>'footer','container'=>false,'menu_class'=>'footer-menu']); ?>
    </div>
    <div>
      <h4><?php _e('Get Help','naloxone-advocates'); ?></h4>
      <p><strong>Emergency: 999</strong></p>
      <p>Phone: 01752 000 000</p>
      <p>Email: <a href="mailto:info@naloxoneadvocates.org">info@naloxoneadvocates.org</a></p>
    </div>
  </div>
  <div class="container copyright">
    <p>© <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
