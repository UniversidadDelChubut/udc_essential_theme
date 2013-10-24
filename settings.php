<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * This is built using the Clean template to allow for new theme's using
 * Moodle's new Bootstrap theme engine
 *
 *
 * @package   theme_udcessential
 * @copyright 2013 Julian Ridden
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$settings = null;

defined('MOODLE_INTERNAL') || die;


	$ADMIN->add('themes', new admin_category('theme_udcessential', 'UDCEssential'));

	// "geneicsettings" settingpage
	$temp = new admin_settingpage('theme_udcessential_generic',  get_string('geneicsettings', 'theme_udcessential'));
	
	// Default Site icon setting.
    $name = 'theme_udcessential/siteicon';
    $title = get_string('siteicon', 'theme_udcessential');
    $description = get_string('siteicondesc', 'theme_udcessential');
    $default = 'laptop';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);
    
    // Include Awesome Font from Bootstrapcdn
    $name = 'theme_udcessential/bootstrapcdn';
    $title = get_string('bootstrapcdn', 'theme_udcessential');
    $description = get_string('bootstrapcdndesc', 'theme_udcessential');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
    // Logo file setting.
    $name = 'theme_udcessential/logo';
    $title = get_string('logo', 'theme_udcessential');
    $description = get_string('logodesc', 'theme_udcessential');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Font Selector.
    $name = 'theme_udcessential/fontselect';
    $title = get_string('fontselect' , 'theme_udcessential');
    $description = get_string('fontselectdesc', 'theme_udcessential');
    $default = '1';
    $choices = array(
    	'1'=>'Oswald & PT Sans', 
    	'2'=>'Lobster & Cabin', 
    	'3'=>'Raleway & Goudy', 
    	'4'=>'Allerta & Crimson Text', 
    	'5'=>'Arvo & PT Sans',
    	'6'=>'Dancing Script & Josefin Sans',
    	'7'=>'Allan & Cardo',
    	'8'=>'Molengo & Lekton',
    	'9'=>'Droid Serif & Droid Sans',
    	'10'=>'Corbin & Nobile',
    	'11'=>'Ubuntu & Vollkorn',
    	'12'=>'Bree Serif & Open Sans', 
    	'13'=>'Bevan & Pontano Sans', 
    	'14'=>'Abril Fatface & Average', 
    	'15'=>'Playfair Display and Muli', 
    	'16'=>'Sansita One & Kameron',
    	'17'=>'Istok Web & Lora',
    	'18'=>'Pacifico & Arimo',
    	'19'=>'Nixie One & Ledger',
    	'20'=>'Cantata One & Imprima',
    	'21'=>'Rancho & Gudea',
    	'22'=>'DISABLE Google Fonts');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // User picture in header setting.
    $name = 'theme_udcessential/headerprofilepic';
    $title = get_string('headerprofilepic', 'theme_udcessential');
    $description = get_string('headerprofilepicdesc', 'theme_udcessential');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Custom or standard layout.
    $name = 'theme_udcessential/layout';
    $title = get_string('layout', 'theme_udcessential');
    $description = get_string('layoutdesc', 'theme_udcessential');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    //Include the Editicons css rules
    $name = 'theme_udcessential/editicons';
    $title = get_string('editicons', 'theme_udcessential');
    $description = get_string('editiconsdesc', 'theme_udcessential');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $temp->add($setting);
    
    //Include the Autohide css rules
    $name = 'theme_udcessential/autohide';
    $visiblename = get_string('autohide', 'theme_udcessential');
    $title = get_string('autohide', 'theme_udcessential');
    $description = get_string('autohidedesc', 'theme_udcessential');
    $setting = new admin_setting_configcheckbox($name, $visiblename, $description, 0);
    $temp->add($setting);
    
    // Performance Information Display.
    $name = 'theme_udcessential/perfinfo';
    $title = get_string('perfinfo' , 'theme_udcessential');
    $description = get_string('perfinfodesc', 'theme_udcessential');
    $perf_max = get_string('perf_max', 'theme_udcessential');
    $perf_min = get_string('perf_min', 'theme_udcessential');
    $default = 'min';
    $choices = array('min'=>$perf_min, 'max'=>$perf_max);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Navbar Seperator.
    $name = 'theme_udcessential/navbarsep';
    $title = get_string('navbarsep' , 'theme_udcessential');
    $description = get_string('navbarsepdesc', 'theme_udcessential');
    $nav_thinbracket = get_string('nav_thinbracket', 'theme_udcessential');
    $nav_doublebracket = get_string('nav_doublebracket', 'theme_udcessential');
    $nav_thickbracket = get_string('nav_thickbracket', 'theme_udcessential');
    $nav_slash = get_string('nav_slash', 'theme_udcessential');
    $nav_pipe = get_string('nav_pipe', 'theme_udcessential');
    $dontdisplay = get_string('dontdisplay', 'theme_udcessential');
    $default = '/';
    $choices = array('/'=>$nav_slash, '\f105'=>$nav_thinbracket, '\f101'=>$nav_doublebracket, '\f054'=>$nav_thickbracket, '|'=>$nav_pipe);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Copyright setting.
    $name = 'theme_udcessential/copyright';
    $title = get_string('copyright', 'theme_udcessential');
    $description = get_string('copyrightdesc', 'theme_udcessential');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);
    
    // Footnote setting.
    $name = 'theme_udcessential/footnote';
    $title = get_string('footnote', 'theme_udcessential');
    $description = get_string('footnotedesc', 'theme_udcessential');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Custom CSS file.
    $name = 'theme_udcessential/customcss';
    $title = get_string('customcss', 'theme_udcessential');
    $description = get_string('customcssdesc', 'theme_udcessential');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $ADMIN->add('theme_udcessential', $temp);
    
    /* Custom Menu Settings */
    $temp = new admin_settingpage('theme_udcessential_custommenu', get_string('custommenuheading', 'theme_udcessential'));
	            
    //This is the descriptor for the following Moodle color settings
    $name = 'theme_udcessential/mydashboardinfo';
    $heading = get_string('mydashboardinfo', 'theme_udcessential');
    $information = get_string('mydashboardinfodesc', 'theme_udcessential');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Toggle dashboard display in custommenu.
    $name = 'theme_udcessential/displaymydashboard';
    $title = get_string('displaymydashboard', 'theme_udcessential');
    $description = get_string('displaymydashboarddesc', 'theme_udcessential');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    //This is the descriptor for the following Moodle color settings
    $name = 'theme_udcessential/mycoursesinfo';
    $heading = get_string('mycoursesinfo', 'theme_udcessential');
    $information = get_string('mycoursesinfodesc', 'theme_udcessential');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Toggle courses display in custommenu.
    $name = 'theme_udcessential/displaymycourses';
    $title = get_string('displaymycourses', 'theme_udcessential');
    $description = get_string('displaymycoursesdesc', 'theme_udcessential');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Set terminology for dropdown course list
	$name = 'theme_udcessential/mycoursetitle';
	$title = get_string('mycoursetitle','theme_udcessential');
	$description = get_string('mycoursetitledesc', 'theme_udcessential');
	$default = 'course';
	$choices = array(
		'course' => get_string('mycourses', 'theme_udcessential'),
		'unit' => get_string('myunits', 'theme_udcessential'),
		'class' => get_string('myclasses', 'theme_udcessential'),
		'module' => get_string('mymodules', 'theme_udcessential')
	);
	$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);
    
    $ADMIN->add('theme_udcessential', $temp);
    
	/* Color Settings */
    $temp = new admin_settingpage('theme_udcessential_color', get_string('colorheading', 'theme_udcessential'));
    $temp->add(new admin_setting_heading('theme_udcessential_color', get_string('colorheadingsub', 'theme_udcessential'),
            format_text(get_string('colordesc' , 'theme_udcessential'), FORMAT_MARKDOWN)));

    // Background Image.
    $name = 'theme_udcessential/pagebackground';
    $title = get_string('pagebackground', 'theme_udcessential');
    $description = get_string('pagebackgrounddesc', 'theme_udcessential');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'pagebackground');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Main theme colour setting.
    $name = 'theme_udcessential/themecolor';
    $title = get_string('themecolor', 'theme_udcessential');
    $description = get_string('themecolordesc', 'theme_udcessential');
    $default = '#30add1';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Main theme Hover colour setting.
    $name = 'theme_udcessential/themehovercolor';
    $title = get_string('themehovercolor', 'theme_udcessential');
    $description = get_string('themehovercolordesc', 'theme_udcessential');
    $default = '#29a1c4';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Footer background colour setting.
    $name = 'theme_udcessential/footercolor';
    $title = get_string('footercolor', 'theme_udcessential');
    $description = get_string('footercolordesc', 'theme_udcessential');
    $default = '#000000';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Footer text colour setting.
    $name = 'theme_udcessential/footertextcolor';
    $title = get_string('footertextcolor', 'theme_udcessential');
    $description = get_string('footertextcolordesc', 'theme_udcessential');
    $default = '#DDDDDD';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Footer Block Heading colour setting.
    $name = 'theme_udcessential/footerheadingcolor';
    $title = get_string('footerheadingcolor', 'theme_udcessential');
    $description = get_string('footerheadingcolordesc', 'theme_udcessential');
    $default = '#CCCCCC';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Footer Seperator colour setting.
    $name = 'theme_udcessential/footersepcolor';
    $title = get_string('footersepcolor', 'theme_udcessential');
    $description = get_string('footersepcolordesc', 'theme_udcessential');
    $default = '#313131';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Footer URL colour setting.
    $name = 'theme_udcessential/footerurlcolor';
    $title = get_string('footerurlcolor', 'theme_udcessential');
    $description = get_string('footerurlcolordesc', 'theme_udcessential');
    $default = '#BBBBBB';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Footer URL hover colour setting.
    $name = 'theme_udcessential/footerhovercolor';
    $title = get_string('footerhovercolor', 'theme_udcessential');
    $description = get_string('footerhovercolordesc', 'theme_udcessential');
    $default = '#FFFFFF';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);



 	$ADMIN->add('theme_udcessential', $temp);
 
 
    /* Slideshow Widget Settings */
    $temp = new admin_settingpage('theme_udcessential_slideshow', get_string('slideshowheading', 'theme_udcessential'));
    $temp->add(new admin_setting_heading('theme_udcessential_slideshow', get_string('slideshowheadingsub', 'theme_udcessential'),
            format_text(get_string('slideshowdesc' , 'theme_udcessential'), FORMAT_MARKDOWN)));
    
    // Toggle Slideshow.
    $name = 'theme_udcessential/toggleslideshow';
    $title = get_string('toggleslideshow' , 'theme_udcessential');
    $description = get_string('toggleslideshowdesc', 'theme_udcessential');
    $alwaysdisplay = get_string('alwaysdisplay', 'theme_udcessential');
    $displaybeforelogin = get_string('displaybeforelogin', 'theme_udcessential');
    $displayafterlogin = get_string('displayafterlogin', 'theme_udcessential');
    $dontdisplay = get_string('dontdisplay', 'theme_udcessential');
    $default = 'alwaysdisplay';
    $choices = array('1'=>$alwaysdisplay, '2'=>$displaybeforelogin, '3'=>$displayafterlogin, '0'=>$dontdisplay);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Hide slideshow on phones.
    $name = 'theme_udcessential/hideonphone';
    $title = get_string('hideonphone' , 'theme_udcessential');
    $description = get_string('hideonphonedesc', 'theme_udcessential');
    $display = get_string('alwaysdisplay', 'theme_udcessential');
    $dontdisplay = get_string('dontdisplay', 'theme_udcessential');
    $default = 'display';
    $choices = array(''=>$display, 'hidden-phone'=>$dontdisplay);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    /*
     * Slide 1
     */
     
    //This is the descriptor for Slide One
    $name = 'theme_udcessential/slide1info';
    $heading = get_string('slide1', 'theme_udcessential');
    $information = get_string('slideinfodesc', 'theme_udcessential');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Title.
    $name = 'theme_udcessential/slide1';
    $title = get_string('slidetitle', 'theme_udcessential');
    $description = get_string('slidetitledesc', 'theme_udcessential');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $default = '';
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Image.
    $name = 'theme_udcessential/slide1image';
    $title = get_string('slideimage', 'theme_udcessential');
    $description = get_string('slideimagedesc', 'theme_udcessential');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'slide1image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Caption.
    $name = 'theme_udcessential/slide1caption';
    $title = get_string('slidecaption', 'theme_udcessential');
    $description = get_string('slidecaptiondesc', 'theme_udcessential');
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // URL.
    $name = 'theme_udcessential/slide1url';
    $title = get_string('slideurl', 'theme_udcessential');
    $description = get_string('slideurldesc', 'theme_udcessential');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    /*
     * Slide 2
     */
     
    //This is the descriptor for Slide Two
    $name = 'theme_udcessential/slide2info';
    $heading = get_string('slide2', 'theme_udcessential');
    $information = get_string('slideinfodesc', 'theme_udcessential');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Title.
    $name = 'theme_udcessential/slide2';
    $title = get_string('slidetitle', 'theme_udcessential');
    $description = get_string('slidetitledesc', 'theme_udcessential');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $default = '';
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Image.
    $name = 'theme_udcessential/slide2image';
    $title = get_string('slideimage', 'theme_udcessential');
    $description = get_string('slideimagedesc', 'theme_udcessential');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'slide2image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Caption.
    $name = 'theme_udcessential/slide2caption';
    $title = get_string('slidecaption', 'theme_udcessential');
    $description = get_string('slidecaptiondesc', 'theme_udcessential');
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // URL.
    $name = 'theme_udcessential/slide2url';
    $title = get_string('slideurl', 'theme_udcessential');
    $description = get_string('slideurldesc', 'theme_udcessential');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    /*
     * Slide 3
     */

    //This is the descriptor for Slide Three
    $name = 'theme_udcessential/slide3info';
    $heading = get_string('slide3', 'theme_udcessential');
    $information = get_string('slideinfodesc', 'theme_udcessential');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Title.
    $name = 'theme_udcessential/slide3';
    $title = get_string('slidetitle', 'theme_udcessential');
    $description = get_string('slidetitledesc', 'theme_udcessential');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $default = '';
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Image.
    $name = 'theme_udcessential/slide3image';
    $title = get_string('slideimage', 'theme_udcessential');
    $description = get_string('slideimagedesc', 'theme_udcessential');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'slide3image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Caption.
    $name = 'theme_udcessential/slide3caption';
    $title = get_string('slidecaption', 'theme_udcessential');
    $description = get_string('slidecaptiondesc', 'theme_udcessential');
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // URL.
    $name = 'theme_udcessential/slide3url';
    $title = get_string('slideurl', 'theme_udcessential');
    $description = get_string('slideurldesc', 'theme_udcessential');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    /*
     * Slide 4
     */
     
    //This is the descriptor for Slide Four
    $name = 'theme_udcessential/slide4info';
    $heading = get_string('slide4', 'theme_udcessential');
    $information = get_string('slideinfodesc', 'theme_udcessential');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Title.
    $name = 'theme_udcessential/slide4';
    $title = get_string('slidetitle', 'theme_udcessential');
    $description = get_string('slidetitledesc', 'theme_udcessential');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $default = '';
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Image.
    $name = 'theme_udcessential/slide4image';
    $title = get_string('slideimage', 'theme_udcessential');
    $description = get_string('slideimagedesc', 'theme_udcessential');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'slide4image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Caption.
    $name = 'theme_udcessential/slide4caption';
    $title = get_string('slidecaption', 'theme_udcessential');
    $description = get_string('slidecaptiondesc', 'theme_udcessential');
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // URL.
    $name = 'theme_udcessential/slide4url';
    $title = get_string('slideurl', 'theme_udcessential');
    $description = get_string('slideurldesc', 'theme_udcessential');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
    $ADMIN->add('theme_udcessential', $temp);
    
    $temp = new admin_settingpage('theme_udcessential_frontcontent', get_string('frontcontentheading', 'theme_udcessential'));
	$temp->add(new admin_setting_heading('theme_udcessential_frontcontent', get_string('frontcontentheadingsub', 'theme_udcessential'),
            format_text(get_string('frontcontentdesc' , 'theme_udcessential'), FORMAT_MARKDOWN)));
    
    // Enable Frontpage Content
    $name = 'theme_udcessential/usefrontcontent';
    $title = get_string('usefrontcontent', 'theme_udcessential');
    $description = get_string('usefrontcontentdesc', 'theme_udcessential');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Frontpage Content
    $name = 'theme_udcessential/frontcontentarea';
    $title = get_string('frontcontentarea', 'theme_udcessential');
    $description = get_string('frontcontentareadesc', 'theme_udcessential');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
        
    $ADMIN->add('theme_udcessential', $temp);
    

	/* Marketing Spot Settings */
	$temp = new admin_settingpage('theme_udcessential_marketing', get_string('marketingheading', 'theme_udcessential'));
	$temp->add(new admin_setting_heading('theme_udcessential_marketing', get_string('marketingheadingsub', 'theme_udcessential'),
            format_text(get_string('marketingdesc' , 'theme_udcessential'), FORMAT_MARKDOWN)));
	
	// Toggle Marketing Spots.
    $name = 'theme_udcessential/togglemarketing';
    $title = get_string('togglemarketing' , 'theme_udcessential');
    $description = get_string('togglemarketingdesc', 'theme_udcessential');
    $alwaysdisplay = get_string('alwaysdisplay', 'theme_udcessential');
    $displaybeforelogin = get_string('displaybeforelogin', 'theme_udcessential');
    $displayafterlogin = get_string('displayafterlogin', 'theme_udcessential');
    $dontdisplay = get_string('dontdisplay', 'theme_udcessential');
    $default = 'display';
    $choices = array('1'=>$alwaysdisplay, '2'=>$displaybeforelogin, '3'=>$displayafterlogin, '0'=>$dontdisplay);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Marketing Spot Image Height
	$name = 'theme_udcessential/marketingheight';
	$title = get_string('marketingheight','theme_udcessential');
	$description = get_string('marketingheightdesc', 'theme_udcessential');
	$default = 100;
	$choices = array(50, 100, 150, 200, 250, 300);
	$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
	$temp->add($setting);
	
	//This is the descriptor for Marketing Spot One
    $name = 'theme_udcessential/marketing1info';
    $heading = get_string('marketing1', 'theme_udcessential');
    $information = get_string('marketinginfodesc', 'theme_udcessential');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
	
	//Marketing Spot One.
	$name = 'theme_udcessential/marketing1';
    $title = get_string('marketingtitle', 'theme_udcessential');
    $description = get_string('marketingtitledesc', 'theme_udcessential');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_udcessential/marketing1icon';
    $title = get_string('marketingicon', 'theme_udcessential');
    $description = get_string('marketingicondesc', 'theme_udcessential');
    $default = 'star';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_udcessential/marketing1image';
    $title = get_string('marketingimage', 'theme_udcessential');
    $description = get_string('marketingimagedesc', 'theme_udcessential');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'marketing1image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_udcessential/marketing1content';
    $title = get_string('marketingcontent', 'theme_udcessential');
    $description = get_string('marketingcontentdesc', 'theme_udcessential');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_udcessential/marketing1buttontext';
    $title = get_string('marketingbuttontext', 'theme_udcessential');
    $description = get_string('marketingbuttontextdesc', 'theme_udcessential');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_udcessential/marketing1buttonurl';
    $title = get_string('marketingbuttonurl', 'theme_udcessential');
    $description = get_string('marketingbuttonurldesc', 'theme_udcessential');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    //This is the descriptor for Marketing Spot Two
    $name = 'theme_udcessential/marketing2info';
    $heading = get_string('marketing2', 'theme_udcessential');
    $information = get_string('marketinginfodesc', 'theme_udcessential');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    //Marketing Spot Two.
	$name = 'theme_udcessential/marketing2';
    $title = get_string('marketingtitle', 'theme_udcessential');
    $description = get_string('marketingtitledesc', 'theme_udcessential');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_udcessential/marketing2icon';
    $title = get_string('marketingicon', 'theme_udcessential');
    $description = get_string('marketingicondesc', 'theme_udcessential');
    $default = 'star';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_udcessential/marketing2image';
    $title = get_string('marketingimage', 'theme_udcessential');
    $description = get_string('marketingimagedesc', 'theme_udcessential');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'marketing2image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_udcessential/marketing2content';
    $title = get_string('marketingcontent', 'theme_udcessential');
    $description = get_string('marketingcontentdesc', 'theme_udcessential');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_udcessential/marketing2buttontext';
    $title = get_string('marketingbuttontext', 'theme_udcessential');
    $description = get_string('marketingbuttontextdesc', 'theme_udcessential');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_udcessential/marketing2buttonurl';
    $title = get_string('marketingbuttonurl', 'theme_udcessential');
    $description = get_string('marketingbuttonurldesc', 'theme_udcessential');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    //This is the descriptor for Marketing Spot Three
    $name = 'theme_udcessential/marketing3info';
    $heading = get_string('marketing3', 'theme_udcessential');
    $information = get_string('marketinginfodesc', 'theme_udcessential');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    //Marketing Spot Three.
	$name = 'theme_udcessential/marketing3';
    $title = get_string('marketingtitle', 'theme_udcessential');
    $description = get_string('marketingtitledesc', 'theme_udcessential');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_udcessential/marketing3icon';
    $title = get_string('marketingicon', 'theme_udcessential');
    $description = get_string('marketingicondesc', 'theme_udcessential');
    $default = 'star';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_udcessential/marketing3image';
    $title = get_string('marketingimage', 'theme_udcessential');
    $description = get_string('marketingimagedesc', 'theme_udcessential');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'marketing3image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_udcessential/marketing3content';
    $title = get_string('marketingcontent', 'theme_udcessential');
    $description = get_string('marketingcontentdesc', 'theme_udcessential');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_udcessential/marketing3buttontext';
    $title = get_string('marketingbuttontext', 'theme_udcessential');
    $description = get_string('marketingbuttontextdesc', 'theme_udcessential');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_udcessential/marketing3buttonurl';
    $title = get_string('marketingbuttonurl', 'theme_udcessential');
    $description = get_string('marketingbuttonurldesc', 'theme_udcessential');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
    $ADMIN->add('theme_udcessential', $temp);

	
	/* Social Network Settings */
	$temp = new admin_settingpage('theme_udcessential_social', get_string('socialheading', 'theme_udcessential'));
	$temp->add(new admin_setting_heading('theme_udcessential_social', get_string('socialheadingsub', 'theme_udcessential'),
            format_text(get_string('socialdesc' , 'theme_udcessential'), FORMAT_MARKDOWN)));
	
    // Website url setting.
    $name = 'theme_udcessential/website';
    $title = get_string('website', 'theme_udcessential');
    $description = get_string('websitedesc', 'theme_udcessential');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Facebook url setting.
    $name = 'theme_udcessential/facebook';
    $title = get_string('facebook', 'theme_udcessential');
    $description = get_string('facebookdesc', 'theme_udcessential');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Flickr url setting.
    $name = 'theme_udcessential/flickr';
    $title = get_string('flickr', 'theme_udcessential');
    $description = get_string('flickrdesc', 'theme_udcessential');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Twitter url setting.
    $name = 'theme_udcessential/twitter';
    $title = get_string('twitter', 'theme_udcessential');
    $description = get_string('twitterdesc', 'theme_udcessential');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Google+ url setting.
    $name = 'theme_udcessential/googleplus';
    $title = get_string('googleplus', 'theme_udcessential');
    $description = get_string('googleplusdesc', 'theme_udcessential');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // LinkedIn url setting.
    $name = 'theme_udcessential/linkedin';
    $title = get_string('linkedin', 'theme_udcessential');
    $description = get_string('linkedindesc', 'theme_udcessential');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Pinterest url setting.
    $name = 'theme_udcessential/pinterest';
    $title = get_string('pinterest', 'theme_udcessential');
    $description = get_string('pinterestdesc', 'theme_udcessential');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Instagram url setting.
    $name = 'theme_udcessential/instagram';
    $title = get_string('instagram', 'theme_udcessential');
    $description = get_string('instagramdesc', 'theme_udcessential');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // YouTube url setting.
    $name = 'theme_udcessential/youtube';
    $title = get_string('youtube', 'theme_udcessential');
    $description = get_string('youtubedesc', 'theme_udcessential');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Skype url setting.
    $name = 'theme_udcessential/skype';
    $title = get_string('skype', 'theme_udcessential');
    $description = get_string('skypedesc', 'theme_udcessential');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
 
    // VKontakte url setting.
    $name = 'theme_udcessential/vk';
    $title = get_string('vk', 'theme_udcessential');
    $description = get_string('vkdesc', 'theme_udcessential');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting); 
    
    $ADMIN->add('theme_udcessential', $temp);
    
    $temp = new admin_settingpage('theme_udcessential_mobileapps', get_string('mobileappsheading', 'theme_udcessential'));
	$temp->add(new admin_setting_heading('theme_udcessential_mobileapps', get_string('mobileappsheadingsub', 'theme_udcessential'),
            format_text(get_string('mobileappsdesc' , 'theme_udcessential'), FORMAT_MARKDOWN)));
    // Android App url setting.
    $name = 'theme_udcessential/android';
    $title = get_string('android', 'theme_udcessential');
    $description = get_string('androiddesc', 'theme_udcessential');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // iOS App url setting.
    $name = 'theme_udcessential/ios';
    $title = get_string('ios', 'theme_udcessential');
    $description = get_string('iosdesc', 'theme_udcessential');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    //This is the descriptor for iOS Icons
    $name = 'theme_udcessential/iosiconinfo';
    $heading = get_string('iosicon', 'theme_udcessential');
    $information = get_string('iosicondesc', 'theme_udcessential');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // iPhone Icon.
    $name = 'theme_udcessential/iphoneicon';
    $title = get_string('iphoneicon', 'theme_udcessential');
    $description = get_string('iphoneicondesc', 'theme_udcessential');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'iphoneicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // iPhone Retina Icon.
    $name = 'theme_udcessential/iphoneretinaicon';
    $title = get_string('iphoneretinaicon', 'theme_udcessential');
    $description = get_string('iphoneretinaicondesc', 'theme_udcessential');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'iphoneretinaicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // iPad Icon.
    $name = 'theme_udcessential/ipadicon';
    $title = get_string('ipadicon', 'theme_udcessential');
    $description = get_string('ipadicondesc', 'theme_udcessential');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'ipadicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // iPad Retina Icon.
    $name = 'theme_udcessential/ipadretinaicon';
    $title = get_string('ipadretinaicon', 'theme_udcessential');
    $description = get_string('ipadretinaicondesc', 'theme_udcessential');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'ipadretinaicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $ADMIN->add('theme_udcessential', $temp);
    
    /* User Alerts */
    $temp = new admin_settingpage('theme_udcessential_alerts', get_string('alertsheading', 'theme_udcessential'));
	$temp->add(new admin_setting_heading('theme_udcessential_alerts', get_string('alertsheadingsub', 'theme_udcessential'),
            format_text(get_string('alertsdesc' , 'theme_udcessential'), FORMAT_MARKDOWN)));
    
    //This is the descriptor for Alert One
    $name = 'theme_udcessential/alert1info';
    $heading = get_string('alert1', 'theme_udcessential');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Enable Alert
    $name = 'theme_udcessential/enable1alert';
    $title = get_string('enablealert', 'theme_udcessential');
    $description = get_string('enablealertdesc', 'theme_udcessential');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Alert Type.
    $name = 'theme_udcessential/alert1type';
    $title = get_string('alerttype' , 'theme_udcessential');
    $description = get_string('alerttypedesc', 'theme_udcessential');
    $alert_info = get_string('alert_info', 'theme_udcessential');
    $alert_warning = get_string('alert_warning', 'theme_udcessential');
    $alert_general = get_string('alert_general', 'theme_udcessential');
    $default = 'info';
    $choices = array('info'=>$alert_info, 'error'=>$alert_warning, 'success'=>$alert_general);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Alert Title.
    $name = 'theme_udcessential/alert1title';
    $title = get_string('alerttitle', 'theme_udcessential');
    $description = get_string('alerttitledesc', 'theme_udcessential');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Alert Text.
    $name = 'theme_udcessential/alert1text';
    $title = get_string('alerttext', 'theme_udcessential');
    $description = get_string('alerttextdesc', 'theme_udcessential');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    //This is the descriptor for Alert Two
    $name = 'theme_udcessential/alert2info';
    $heading = get_string('alert2', 'theme_udcessential');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Enable Alert
    $name = 'theme_udcessential/enable2alert';
    $title = get_string('enablealert', 'theme_udcessential');
    $description = get_string('enablealertdesc', 'theme_udcessential');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Alert Type.
    $name = 'theme_udcessential/alert2type';
    $title = get_string('alerttype' , 'theme_udcessential');
    $description = get_string('alerttypedesc', 'theme_udcessential');
    $alert_info = get_string('alert_info', 'theme_udcessential');
    $alert_warning = get_string('alert_warning', 'theme_udcessential');
    $alert_general = get_string('alert_general', 'theme_udcessential');
    $default = 'info';
    $choices = array('info'=>$alert_info, 'error'=>$alert_warning, 'success'=>$alert_general);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Alert Title.
    $name = 'theme_udcessential/alert2title';
    $title = get_string('alerttitle', 'theme_udcessential');
    $description = get_string('alerttitledesc', 'theme_udcessential');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Alert Text.
    $name = 'theme_udcessential/alert2text';
    $title = get_string('alerttext', 'theme_udcessential');
    $description = get_string('alerttextdesc', 'theme_udcessential');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    //This is the descriptor for Alert Three
    $name = 'theme_udcessential/alert3info';
    $heading = get_string('alert3', 'theme_udcessential');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Enable Alert
    $name = 'theme_udcessential/enable3alert';
    $title = get_string('enablealert', 'theme_udcessential');
    $description = get_string('enablealertdesc', 'theme_udcessential');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Alert Type.
    $name = 'theme_udcessential/alert3type';
    $title = get_string('alerttype' , 'theme_udcessential');
    $description = get_string('alerttypedesc', 'theme_udcessential');
    $alert_info = get_string('alert_info', 'theme_udcessential');
    $alert_warning = get_string('alert_warning', 'theme_udcessential');
    $alert_general = get_string('alert_general', 'theme_udcessential');
    $default = 'info';
    $choices = array('info'=>$alert_info, 'error'=>$alert_warning, 'success'=>$alert_general);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Alert Title.
    $name = 'theme_udcessential/alert3title';
    $title = get_string('alerttitle', 'theme_udcessential');
    $description = get_string('alerttitledesc', 'theme_udcessential');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Alert Text.
    $name = 'theme_udcessential/alert3text';
    $title = get_string('alerttext', 'theme_udcessential');
    $description = get_string('alerttextdesc', 'theme_udcessential');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
            
    
    $ADMIN->add('theme_udcessential', $temp);
    
    /* Analytics Settings */
    $temp = new admin_settingpage('theme_udcessential_analytics', get_string('analyticsheading', 'theme_udcessential'));
	$temp->add(new admin_setting_heading('theme_udcessential_analytics', get_string('analyticsheadingsub', 'theme_udcessential'),
            format_text(get_string('analyticsdesc' , 'theme_udcessential'), FORMAT_MARKDOWN)));
    
    // Enable Analytics
    $name = 'theme_udcessential/useanalytics';
    $title = get_string('useanalytics', 'theme_udcessential');
    $description = get_string('useanalyticsdesc', 'theme_udcessential');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Google Analytics ID
    $name = 'theme_udcessential/analyticsid';
    $title = get_string('analyticsid', 'theme_udcessential');
    $description = get_string('analyticsiddesc', 'theme_udcessential');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Clean Analytics URL
    $name = 'theme_udcessential/analyticsclean';
    $title = get_string('analyticsclean', 'theme_udcessential');
    $description = get_string('analyticscleandesc', 'theme_udcessential');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
        
    $ADMIN->add('theme_udcessential', $temp);

