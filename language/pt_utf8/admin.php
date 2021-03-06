<?php
// $Id: admin.php,v 1.1 2006/03/10 17:16:20 mikhail Exp $
// ------------------------------------------------------------------------ //
// No-Ah - PHP Content Architecture Stem //
// Copyright (c) 2004 KERKNESS.C //
// <http://noah.tetrasi.com/> //
// A xoopscube.org Module //
// ------------------------------------------------------------------------ //
// This program is free software; you can redistribute it and/or modify //
// it under the terms of the GNU General Public License as published by //
// the Free Software Foundation; either version 2 of the License, or //
// (at your option) any later version. //
// //
// You may not change or alter any portion of this comment or credits //
// of supporting developers from this source code or any supporting //
// source code which is considered copyrighted (c) material of the //
// original comment or credit authors. //
// //
// This program is distributed in the hope that it will be useful, //
// but WITHOUT ANY WARRANTY; without even the implied warranty of //
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the //
// GNU General Public License for more details. //
// //
// You should have received a copy of the GNU General Public License //
// along with this program; if not, write to the Free Software //
// Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA //
// ------------------------------------------------------------------------ //
// Author: Ryan Mayberry AKA (fatman / kerkness) //
// URL: http://noah.tetrasi.com/ //
// Thanks: To everyone at xoopscube.org, dev,xoops and all No-Ah developers //
// Project: The No-Ah Project //
// ------------------------------------------------------------------------- //
/* Get the translations For Field Errors */
global $xoopsModule, $xoopsConfig;
require_once( XOOPS_ROOT_PATH . '/modules/' . $xoopsModule->dirname(). '/language/' . $xoopsConfig['language'] . '/errormsg.php');
define('_NA_ITEM_VIEW', 'Item View');
define('_NA_LIST_VIEW', 'List View');
define('_NA_FORM_VIEW', 'Form View');
define('_NA_UPDATE_SUCCESS', 'update successful');
define('_NA_DELETE_SUCCESS', 'deletion successful');
define('_NA_TITLE_WITH_RELATION', ' showing related fields from ');
define('_NA_CHCKBOX_CONSUME_TABLE', 'Auto Add Fields');
define('_NA_TRASH_CONFIRM_NOTICE', 'Are you sure you want to delete the following item?');
define('_NA_TRASH_CONFIRM_BUTTON', 'Yes please delete this');
define('_NA_RELATIONSHIPS_NOTICE', 'Relationships');
define('_NA_RELATIONSHIPS_MSG', 'This group has relationships with other NoAh groups. This means
that these groups have share a field with the current NoAh group.');
define('_NA_MISSINGFIELDS_NOTICE', 'Missing Fields');
define('_NA_MISSINGFIELDS_MSG', 'The group you are using has fields in the database
which are not currently decribed as a NoAh field and therefore unusable by NoAh.');
define('_NA_MISSINGGROUPS_NOTICE', 'Other Data Tables');
define('_NA_MISSINGGROUPS_MSG', 'The following tables were found in your database, these tables
could be used to create new NoAh groups. They make up the tables for xoops core and the
other xoops modules you have installed');
define('_NA_DEFAULTFORM_NOTICE', 'Default Form View');
define('_NA_DEFAULTFORM_MSG', 'You are viewing a default no-ah form. This form can be
customized for any specific information group. Just create a smarty template,
upload to noah/templates/form and then update the NoAh group record.');
define('_NA_DEFAULTLIST_NOTICE', 'Default List View');
define('_NA_DEFAULTLIST_MSG', 'You are viewing a default no-ah list. This layout can be
customized for any specific information group. Just create a smarty template,
upload to noah/templates/list and then update the NoAh group record.');
define('_NA_DEFAULTITEM_NOTICE', 'Default Item View ');
define('_NA_DEFAULTITEM_MSG', 'You are viewing a default no-ah form. This item layout can be
customized for any specific information group. Just create a smarty template,
upload to noah/templates/item and then update the NoAh group record.');
define('_NA_MAINMENU_CONTENT_INDEX', 'Content Index');
define('_NA_MAINMENU_CONTENT_GROUPS', 'Content Groups');
define('_NA_MAINMENU_PAGES', 'Mod Pages');
define('_NA_MAINMENU_LISTS', 'Info Lists');
define('_NA_MAINMENU_PREFS', 'Preferences');
define('_NA_NEW_CONTENT_GROUP', 'New Group');
define('_NA_LIST_CONTENT_GROUPS', 'List All');
define('_NA_NEW_PAGE', 'New Page');
define('_NA_LIST_PAGES', 'List Pages');
define('_NA_TITLE_DETAILS_OF', 'Details of');
define('_NA_TITLE_ITEM', 'item #');
define('_NA_ADD_CONTENT_FIELD_TO', 'Add Field to');
define('_NA_NEW_LIST','New List');
define('_NA_LIST_LISTS','View Lists');
define('_NA_NEW_LIST_VALUE','Add New List Value');
define('_NA_NEW_PREFERENCE_SET','New Preference Group');
define('_NA_LIST_PREFERENCE_SETS','Preference Groups');
define('_NA_NEW_PREF_VALUE','Add Value To Pref Group');
define('_NA_ADD_FIELD', 'Add Content Field');
define('_NA_SEARCH', 'Search');
define('_NA_NEW_SEARCH', 'New Search');
define('_NA_CLEAR_SEARCH', 'Clear Search');
?>