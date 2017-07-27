<?php

defined('MOODLE_INTERNAL') || die();

$temp = new admin_settingpage('theme_adaptable_menusettings', get_string('menusettings', 'theme_adaptable'));
$temp->add(new admin_setting_heading('theme_adaptable_menusettings', get_string('menusettings', 'theme_adaptable'),
	format_text(get_string('menudesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

// Show/hide coursemanagement slider toggle.
$name = 'theme_adaptable/coursemanagementtoggle';
$title = get_string('coursemanagementtoggle', 'theme_adaptable');
$description = get_string('coursemanagementtoggle_desc', 'theme_adaptable');
$default = 1;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Show/hide course editing cog.
$name = 'theme_adaptable/showstudentgrades';
$title = get_string('showstudentgrades', 'theme_adaptable');
$description = get_string('showstudentgrades_desc', 'theme_adaptable');
$default = 1;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Show/hide course editing cog.
$name = 'theme_adaptable/courseeditingcog';
$title = get_string('courseeditingcog', 'theme_adaptable');
$description = get_string('courseeditingcog_desc', 'theme_adaptable');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Must add the page after definiting all the settings!
$ADMIN->add('theme_adaptable', $temp);