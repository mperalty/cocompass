<?php
/**
 * Title: Hero with Diagnostic Panel
 * Slug: cocompass/hero-with-diagnostic
 * Categories: cocompass
 * Description: Two-column hero with headline left, before/after diagnostic panel right.
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"5.5rem","bottom":"5.5rem","left":"2rem","right":"2rem"}}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"1100px"}} -->
<section class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:5.5rem;padding-right:2rem;padding-bottom:5.5rem;padding-left:2rem">

  <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"3.5rem","left":"3.5rem"}}}} -->
  <div class="wp-block-columns are-vertically-aligned-center">

    <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">

      <!-- wp:html -->
      <p style="font-family:var(--wp--preset--font-family--mono);font-size:0.72rem;color:var(--wp--preset--color--accent);letter-spacing:0.1em;text-transform:uppercase;display:flex;align-items:center;gap:0.5rem;margin-bottom:1.25rem"><span class="cc-status-dot"></span> WordPress Performance + Visibility</p>
      <!-- /wp:html -->

      <!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"clamp(2.1rem, 4vw, 3.15rem)","lineHeight":"1.1"},"spacing":{"margin":{"bottom":"1.25rem"}}}} -->
      <h1 class="wp-block-heading" style="margin-bottom:1.25rem;font-size:clamp(2.1rem, 4vw, 3.15rem);line-height:1.1">Your WordPress site is <em style="color:var(--wp--preset--color--accent)">bleeding&nbsp;revenue.</em></h1>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"textColor":"contrast-accent","style":{"typography":{"fontSize":"1.05rem","lineHeight":"1.7"},"spacing":{"margin":{"bottom":"2rem"}}}} -->
      <p class="has-contrast-accent-color has-text-color" style="margin-bottom:2rem;font-size:1.05rem;line-height:1.7">Performance engineering, technical SEO, and AI search optimization for mid-market WordPress businesses. One retainer. Three disciplines. Measurable results.</p>
      <!-- /wp:paragraph -->

      <!-- wp:buttons {"style":{"spacing":{"blockGap":"1rem"}}} -->
      <div class="wp-block-buttons">
        <!-- wp:button {"className":"is-style-cc-cta"} -->
        <div class="wp-block-button is-style-cc-cta"><a class="wp-block-button__link wp-element-button" href="/contact/">Get a Free Assessment →</a></div>
        <!-- /wp:button -->

        <!-- wp:button {"textColor":"contrast-accent","className":"is-style-outline","style":{"border":{"color":"var(--wp--preset--color--border-strong)","width":"1px","radius":"8px"},"spacing":{"padding":{"top":"0.85rem","bottom":"0.85rem","left":"1.5rem","right":"1.5rem"}},"typography":{"fontSize":"0.9rem"}}} -->
        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-contrast-accent-color has-text-color wp-element-button" style="border-color:var(--wp--preset--color--border-strong);border-width:1px;border-radius:8px;padding-top:0.85rem;padding-right:1.5rem;padding-bottom:0.85rem;padding-left:1.5rem;font-size:0.9rem" href="#how">How it works</a></div>
        <!-- /wp:button -->
      </div>
      <!-- /wp:buttons -->

    </div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
      <!-- wp:html -->
      <div class="cc-diagnostic">
        <div class="cc-diagnostic__header">
          <span class="cc-diagnostic__dot cc-diagnostic__dot--r"></span>
          <span class="cc-diagnostic__dot cc-diagnostic__dot--y"></span>
          <span class="cc-diagnostic__dot cc-diagnostic__dot--g"></span>
          <span class="cc-diagnostic__title">site-diagnostic.sh - cocompass</span>
        </div>
        <div class="cc-diagnostic__body">
          <span class="cc-ba-label cc-ba-label--before">Before</span>
          <div class="cc-diagnostic__row"><span>LCP</span><span class="cc-diagnostic__value--bad">6.2s</span></div>
          <div class="cc-diagnostic__bar"><div class="cc-diagnostic__bar-fill" style="width:85%;background:var(--cc-danger)"></div></div>
          <div class="cc-diagnostic__row"><span>TTFB</span><span class="cc-diagnostic__value--bad">1.8s</span></div>
          <div class="cc-diagnostic__bar"><div class="cc-diagnostic__bar-fill" style="width:70%;background:var(--cc-danger)"></div></div>
          <div class="cc-diagnostic__row"><span>CLS</span><span class="cc-diagnostic__value--bad">0.38</span></div>

          <div class="cc-diagnostic__divider"><span>After CoCompass</span></div>

          <span class="cc-ba-label cc-ba-label--after">After</span>
          <div class="cc-diagnostic__row"><span>LCP</span><span class="cc-diagnostic__value--good">1.4s</span></div>
          <div class="cc-diagnostic__bar"><div class="cc-diagnostic__bar-fill" style="width:25%;background:var(--cc-success)"></div></div>
          <div class="cc-diagnostic__row"><span>TTFB</span><span class="cc-diagnostic__value--good">0.3s</span></div>
          <div class="cc-diagnostic__bar"><div class="cc-diagnostic__bar-fill" style="width:15%;background:var(--cc-success)"></div></div>
          <div class="cc-diagnostic__row"><span>CLS</span><span class="cc-diagnostic__value--good">0.02</span></div>
        </div>
      </div>
      <!-- /wp:html -->
    </div>
    <!-- /wp:column -->

  </div>
  <!-- /wp:columns -->

</section>
<!-- /wp:group -->
