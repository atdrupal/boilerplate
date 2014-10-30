<?php
/**
 * @file config.php
 *
 * Important variables for system must be stored here, not custom module.
 */

global $config;

/**
 * Config value for composer_manager module. More details at
 *   https://github.com/omega8cc/boa/issues/385
 */
$config['composer_manager_vendor_dir'] = dirname(__FILE__) . '/vendor';
