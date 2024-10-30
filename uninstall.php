<?php

if (! defined('WP_UNINSTALL_PLUGIN')) exit();

delete_option('callweb-widget-key');
delete_option('callweb-widget-is-active');