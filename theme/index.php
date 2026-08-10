<?php
/**
 * Fallback template.
 *
 * front-page.php handles the site root, so this file only renders for
 * anything else the template hierarchy might hand off to a plain
 * theme (search results, a stray page, a 404 before template_redirect
 * kicks in, etc.). It reuses the same header/footer chrome so it never
 * looks broken, and falls back to post/page content where available.
 *
 * @package Ein_Gedankensprung
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
?>

  <div class="light" style="padding: clamp(56px, 9vw, 110px) 0;">
    <div class="wrap">
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
            <h1><?php the_title(); ?></h1>
            <div class="entry-content"><?php the_content(); ?></div>
          </article>
        <?php endwhile; ?>
      <?php else : ?>
        <p class="eyebrow">404</p>
        <h1>Diese Seite gibt es nicht.</h1>
        <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Zurück zur Startseite</a></p>
      <?php endif; ?>
    </div>
  </div>

<?php get_footer(); ?>
