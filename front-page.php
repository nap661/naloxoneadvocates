<?php /* Template: Home (Prebuilt) */ if (!defined('ABSPATH')) exit; get_header(); ?>
<section class="hero">
  <div class="container grid-2">
    <div>
      <h1>Saving Lives</h1>
      <p class="lead">Free naloxone training and kits for Plymouth and Devon communities.</p>
      <div class="actions">
        <a class="btn btn-primary" href="#get-naloxone">Get Naloxone Now</a>
        <a class="btn btn-secondary" href="<?php echo esc_url( home_url('/training') ); ?>">Book Free Training</a>
      </div>
    </div>
  </div>
</section>
<section class="stats" aria-label="Impact stats">
  <div class="container grid-3">
    <div class="stat"><div class="stat-value">1,200+</div><div class="stat-label">People Trained</div></div>
    <div class="stat"><div class="stat-value">150+</div><div class="stat-label">Lives Saved</div></div>
    <div class="stat"><div class="stat-value">500+</div><div class="stat-label">Naloxone Kits Distributed</div></div>
  </div>
</section>
<section id="get-naloxone" class="section">
  <div class="container">
    <h2>How to Get Naloxone</h2>
    <ol class="steps">
      <li>Attend one of our free naloxone training sessions.</li>
      <li>Learn how to recognise an overdose and administer naloxone safely and confidently.</li>
      <li>Receive your free naloxone kit at the end of training.</li>
    </ol>
    <p class="note">In an emergency, <strong>always call 999 first</strong>. Naloxone is a temporary measure—professional medical help is essential.</p>
  </div>
</section>
<?php get_footer(); ?>
