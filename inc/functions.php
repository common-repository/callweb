<?php

function callweb_load_styles() {
	wp_enqueue_style('callweb-admin-styles', plugin_dir_url( __FILE__ ) . '../assets/styles/style.css');
}

add_action('admin_enqueue_scripts', 'callweb_load_styles');

function callweb_add_widget_script() {
	if (get_option('callweb-widget-key', '') == '' || (int)get_option('callweb-widget-is-active', 0) !== 1) return;

	?>
		<script type="text/javascript">
			(function(d) {
					var s,c,o=function(){ 
						o._.push(arguments)
					};o._=[],q=new Date().getMilliseconds();
					s=d.getElementsByTagName('script')[0];c=d.createElement('script');
					c.type='text/javascript';c.charset='utf-8';c.async=true,
					c.src='//widget.callweb.pl/loader.js?q='+q;s.parentNode.insertBefore(c,s);
			})(document);

			var _callweb = _callweb || {
					key : '<?php echo esc_js(get_option('callweb-widget-key', '')) ?>',
			};
		</script>
	<?php
}

add_action('wp_head', 'callweb_add_widget_script');