<?php
/**
 * @package   theme_modular
 * @copyright 2017 Dusan Sparavalo
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {

    // Basic settings
    $name = 'theme_modular/basicsettings';
    $heading = get_string('basicsettings', 'theme_modular');
    $description = get_string('basicsettingsdesc', 'theme_modular');
    $setting = new admin_setting_heading($name, $heading, $description);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Main color
    $name = 'theme_modular/maincolor';
    $title = get_string('maincolor', 'theme_modular');
    $description = get_string('maincolordesc', 'theme_modular');
    $default = '#f98012';
    $previewconfig = NULL;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

}