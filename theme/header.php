<?php
/**
 * The header for our theme, up to and including the opening of <main id="top">.
 *
 * @package Ein_Gedankensprung
 */

if ( ! defined( 'ABSPATH' ) ) exit;

$egs_description = get_bloginfo( 'description' );
if ( empty( $egs_description ) ) {
	$egs_description = 'Lisa Kuhn begleitet Projekte von der ersten Idee bis zur erfolgreichen Umsetzung – Projektmanagement, Coaching und Website-Entwicklung aus Weidling bei Wien.';
}
$egs_og_image = get_template_directory_uri() . '/assets/img/og-image.jpg';
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php if ( ! has_site_icon() ) : ?>
<link rel="icon" type="image/svg+xml" href="<?php echo esc_url( get_template_directory_uri() . '/assets/favicon.svg' ); ?>">
<link rel="icon" href="<?php echo esc_url( get_template_directory_uri() . '/assets/favicon.ico' ); ?>" sizes="any">
<link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri() . '/assets/apple-touch-icon.png' ); ?>">
<?php endif; ?>
<meta name="description" content="<?php echo esc_attr( $egs_description ); ?>">

<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo esc_url( home_url( '/' ) ); ?>">
<meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>">
<meta property="og:locale" content="de_AT">
<meta property="og:title" content="<?php bloginfo( 'name' ); ?>">
<meta property="og:description" content="<?php echo esc_attr( $egs_description ); ?>">
<meta property="og:image" content="<?php echo esc_url( $egs_og_image ); ?>">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="ein Gedankensprung – Lisa Kuhn, Projektmanagement, Coaching &amp; Websites">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php bloginfo( 'name' ); ?>">
<meta name="twitter:description" content="<?php echo esc_attr( $egs_description ); ?>">
<meta name="twitter:image" content="<?php echo esc_url( $egs_og_image ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-nav">
  <div class="nav-row">
    <a href="#top" class="wordmark">ein <em>Gedanken</em>sprung</a>
    <button type="button" class="nav-toggle" id="navToggle" aria-expanded="false" aria-controls="navLinks" aria-label="Menü öffnen">
      <span class="nav-toggle-bar"></span>
      <span class="nav-toggle-bar"></span>
      <span class="nav-toggle-bar"></span>
    </button>
    <ul class="nav-links" id="navLinks">
      <li><a href="#ueber">Über mich</a></li>
      <li><a href="#leistungen">Leistungen</a></li>
      <li><a href="#kontakt">Kontakt</a></li>
    </ul>
  </div>
</header>

<svg width="0" height="0" style="position:absolute" aria-hidden="true">
  <defs>
    <linearGradient id="leapGradient" x1="0%" y1="0%" x2="100%" y2="0%">
      <stop offset="0%" style="stop-color:var(--violet-soft)" />
      <stop offset="100%" style="stop-color:var(--spark)" />
    </linearGradient>
    <radialGradient id="sparkGlow" cx="50%" cy="50%" r="50%">
      <stop offset="0%" style="stop-color:var(--violet-soft);stop-opacity:0.55" />
      <stop offset="100%" style="stop-color:var(--violet-soft);stop-opacity:0" />
    </radialGradient>
    <radialGradient id="landingGlow" cx="50%" cy="50%" r="50%">
      <stop offset="0%" style="stop-color:var(--spark);stop-opacity:0.5" />
      <stop offset="100%" style="stop-color:var(--spark);stop-opacity:0" />
    </radialGradient>
    <mask id="heroArcReveal">
      <path id="heroArcRevealPath" d="M46,190 C190,-10 420,-10 556,150" fill="none" stroke-width="40" stroke-linecap="round" />
    </mask>
  </defs>
</svg>

<main id="top">
