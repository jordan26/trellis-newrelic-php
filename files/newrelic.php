<?php
/**
 * Plugin Name: New Relic WordPress Integration
 * Description: Enables full-stack New Relic APM for WordPress.
 */

// Set custom application name based on domain
if (function_exists('newrelic_set_appname')) {
    newrelic_set_appname(get_site_url());
}

// Name transactions using request URI
if (function_exists('newrelic_name_transaction')) {
    newrelic_name_transaction($_SERVER['REQUEST_URI'] ?? 'unknown');
}

// Add WordPress-specific custom parameters
if (function_exists('newrelic_add_custom_parameter')) {
    newrelic_add_custom_parameter('wp_environment', defined('WP_ENV') ? WP_ENV : 'unknown');
    newrelic_add_custom_parameter('theme', get_template());
}
