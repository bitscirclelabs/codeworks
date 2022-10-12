<?php /* 
* @filesource   ./init.php
* @since		Version 1.0
* @description  This is initialization file that will instantiate 3rd party libraries in general perpective.
*/

//Use version 2.0 of the update checker.
require_once WP_GSWAIBOT_LIB_DIR.'/plugin-update-checker/plugin-update-checker.php';    
$MyUpdateChecker = new PluginUpdateChecker_3_1 ('http://innercitywebdesign.com.au/miexie-for-test/updater/metadata.json',__FILE__); 