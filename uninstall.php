<?php
if (!defined('WP_UNINSTALL_PLUGIN')) {
die;
}
require_once plugin_dir_path( __FILE__ ) . 'trustindex-plugin.class.php';
$trustindex_pm_aliexpress = new TrustindexPlugin_aliexpress("aliexpress", __FILE__, "12.4.1", "Widgets for AliExpress Reviews", "AliExpress");
$trustindex_pm_aliexpress->uninstall();
?>