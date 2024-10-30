<?php
/**
 * Plugin Name: ChimeIn Sidewall
 * Plugin URI: https://www.chimein.co
 * Description: This plugin adds ChimeIn dialog button to the page.
 * Version: 1.0.1
 * Author: Ximein Inc.
 * Author URI: https://www.chimein.co
 * License: GPL2
 */

add_filter('the_content','chimein_add_button' );

function chimein_add_button($content) {
?>
<script type='text/javascript'>
/* <![CDATA[ */
;(function () {
  function load() {
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = 'https://www.chimein.co/extension/cloudforum_embedded.js?vert=1';
    var x = document.getElementsByTagName('head')[0];
    x.appendChild(s);
  }
  setTimeout(load, 0);
})();
/* ]]> */
</script>
<?php
 return $content;
}
?>
