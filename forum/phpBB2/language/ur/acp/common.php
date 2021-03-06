<?php
/**
*
* acp_common.php [Urdu]
*
* @package language
* @version $Id: $
* @copyright (c) 2010 phpBB Group
* @author 2010-11-22 - phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'	=> 'منتظمین',
	'ACP_ADMIN_LOGS'	=> 'منتظم کے لاگ',
	'ACP_ADMIN_ROLES'	=> 'منتظم کے کردار',
	'ACP_ATTACHMENTS'	=> 'منسلکات',
	'ACP_ATTACHMENT_SETTINGS'	=> 'منسلکات کی ترتیب',
	'ACP_AUTH_SETTINGS'	=> 'توثیق',
	'ACP_AUTOMATION'	=> 'خودکاری',
	'ACP_AVATAR_SETTINGS'	=> 'اوتار کی ترتیبات',
	'ACP_BACKUP'	=> 'بیک اپ',
	'ACP_BAN'	=> 'پابند کاری',
	'ACP_BAN_EMAILS'	=> 'ای-میلز بین کریں',
	'ACP_BAN_IPS'	=> 'آئی پی بین کریں',
	'ACP_BAN_USERNAMES'	=> 'رکنیتی نام بین کریں',
	'ACP_BBCODES'	=> 'BBCodes',
	'ACP_BOARD_CONFIGURATION'	=> 'بورڈ کی ترتیبات',
	'ACP_BOARD_FEATURES'	=> 'بورڈ کی خصوصیات',
	'ACP_BOARD_MANAGEMENT'	=> 'بورڈ کا انتظام',
	'ACP_BOARD_SETTINGS'	=> 'بورڈ کی ترتیبات',
	'ACP_BOTS'	=> 'Spiders/Robots',
	'ACP_CAPTCHA'	=> 'CAPTCHA',
	'ACP_CAT_DATABASE'	=> 'ڈیٹا بیس',
	'ACP_CAT_DOT_MODS'	=> '.ماڈ',
	'ACP_CAT_FORUMS'	=> 'فورم',
	'ACP_CAT_GENERAL'	=> 'عمومی',
	'ACP_CAT_MAINTENANCE'	=> 'بحالی',
	'ACP_CAT_PERMISSIONS'	=> 'اجازات',
	'ACP_CAT_POSTING'	=> 'پوسٹنگ',
	'ACP_CAT_STYLES'	=> 'سٹائل',
	'ACP_CAT_SYSTEM'	=> 'سسٹم',
	'ACP_CAT_USERGROUP'	=> 'صارفین اور گروہ',
	'ACP_CAT_USERS'	=> 'صارفین',
	'ACP_CLIENT_COMMUNICATION'	=> 'کلائنٹ کی بات چیت',
	'ACP_COOKIE_SETTINGS'	=> 'کوکیز کی ترتیب',
	'ACP_CRITICAL_LOGS'	=> 'غلطیوں‌کے لاگ',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'اپنی مرضی کی پروفائل فیلڈز',
	'ACP_DATABASE'	=> 'انتظامیہ غیر فعال کریں',
	'ACP_DISALLOW'	=> 'رد کریں',
	'ACP_DISALLOW_USERNAMES'	=> 'رکنیتی نام رد کریں',
	'ACP_EMAIL_SETTINGS'	=> 'ای-میل کی ترتیبات',
	'ACP_EXTENSION_GROUPS'	=> 'ایکسٹینشن گروہ کا انتظام',
	'ACP_FORUM_BASED_PERMISSIONS'	=> 'فورم پر مبنی اجازات',
	'ACP_FORUM_LOGS'	=> 'فورم کے لاگ',
	'ACP_FORUM_MANAGEMENT'	=> 'فورم انتظامیہ',
	'ACP_FORUM_MODERATORS'	=> 'فورم مدیران',
	'ACP_FORUM_PERMISSIONS'	=> 'فورم اجازات',
	'ACP_FORUM_PERMISSIONS_COPY'	=> 'فورم اجازات نقل کریں',
	'ACP_FORUM_ROLES'	=> 'فورم کردار',
	'ACP_GENERAL_CONFIGURATION'	=> 'عام ترتیبات',
	'ACP_GENERAL_TASKS'	=> 'عام کام',
	'ACP_GLOBAL_MODERATORS'	=> 'عالمی مدیران',
	'ACP_GLOBAL_PERMISSIONS'	=> 'عالمی اجازات',
	'ACP_GROUPS'	=> 'گروہ',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'گروہ کی فورم اجازات',
	'ACP_GROUPS_MANAGE'	=> 'گروہ کا انتظام کریں',
	'ACP_GROUPS_MANAGEMENT'	=> 'گروہ کا انتظام',
	'ACP_GROUPS_PERMISSIONS'	=> 'گروہ کی اجازات',
	'ACP_ICONS'	=> 'موضوعات کے آئیکن',
	'ACP_ICONS_SMILIES'	=> 'موضوعات کے آئیکن/ مسکانیں',
	'ACP_IMAGESETS'	=> 'امیج سیٹ',
	'ACP_INACTIVE_USERS'	=> 'غیر فعال صارفین',
	'ACP_INDEX'	=> 'ACP کا صفحہ',
	'ACP_JABBER_SETTINGS'	=> 'جیبر کی ترتیبات',
	'ACP_LANGUAGE'	=> 'زبان کا انتظام',
	'ACP_LANGUAGE_PACKS'	=> 'زبان کے پیک',
	'ACP_LOAD_SETTINGS'	=> 'ترتیبات لوڈ‌کریں',
	'ACP_LOGGING'	=> 'لاگنگ',
	'ACP_MAIN'	=> 'ACP کا صفحہ',
	'ACP_MANAGE_EXTENSIONS'	=> 'ایکسٹینشن کا انتظام کریں',
	'ACP_MANAGE_FORUMS'	=> 'فورم کا انتظام کریں',
	'ACP_MANAGE_RANKS'	=> 'درجات کا انتظام کریں',
	'ACP_MANAGE_REASONS'	=> 'رپورٹ/ نامنظوری کی وجوہات کا انتظام کریں',
	'ACP_MANAGE_USERS'	=> 'صارفین کا انتظام کریں',
	'ACP_MASS_EMAIL'	=> 'اجتماعی ای-میل کریں',
	'ACP_MESSAGES'	=> 'پیغامات',
	'ACP_MESSAGE_SETTINGS'	=> 'ذاتی پیغامات کی ترتیبات',
	'ACP_MODULE_MANAGEMENT'	=> 'ماڈیول کا انتظام',
	'ACP_MOD_LOGS'	=> 'مدیر کے لاگ',
	'ACP_MOD_ROLES'	=> 'مدیر کے کردار',
	'ACP_NO_ITEMS'	=> 'ابھی تک کوئی اشیاء‌نہیں ہیں',
	'ACP_ORPHAN_ATTACHMENTS'	=> 'یتیم منسلکات',
	'ACP_PERMISSIONS'	=> 'اجازات',
	'ACP_PERMISSION_MASKS'	=> 'اجازات کے نقاب',
	'ACP_PERMISSION_ROLES'	=> 'اجازات کے کردار',
	'ACP_PERMISSION_TRACE'	=> 'اجازات کا ٹریس',
	'ACP_PHP_INFO'	=> 'PHP کی معلومات',
	'ACP_POST_SETTINGS'	=> 'مراسلات کی ترتیب',
	'ACP_PRUNE_FORUMS'	=> 'فورم پرون (prune) کریں',
	'ACP_PRUNE_USERS'	=> 'صارفین پرون (prune) کریں',
	'ACP_PRUNING'	=> 'پروننگ (pruning)',
	'ACP_QUICK_ACCESS'	=> 'فوری رسائی',
	'ACP_RANKS'	=> 'درجات',
	'ACP_REASONS'	=> 'رپورٹ کے انکار / وجوہات',
	'ACP_REGISTER_SETTINGS'	=> 'صارف رجسٹریشن کی ترتیبات',
	'ACP_RESTORE'	=> 'بحال کریں',
	'ACP_FEED'	=> 'فیڈ کا انتظام',
	'ACP_FEED_SETTINGS'	=> 'فیڈ کی ترتیبات',
	'ACP_SEARCH'	=> 'تلاش کی ترتیب',
	'ACP_SEARCH_INDEX'	=> 'تلاش کا صفحہ',
	'ACP_SEARCH_SETTINGS'	=> 'تلاش کی ترتیب',
	'ACP_SECURITY_SETTINGS'	=> 'سیکیورٹی کی ترتیبات',
	'ACP_SEND_STATISTICS'	=> 'اعداد و شمار میں معلومات ارسال کریں',
	'ACP_SERVER_CONFIGURATION'	=> 'سرور کی ترتیب',
	'ACP_SERVER_SETTINGS'	=> 'سرور ترتیبات',
	'ACP_SIGNATURE_SETTINGS'	=> 'دستخط کی ترتیبات',
	'ACP_SMILIES'	=> 'مسکانیں',
	'ACP_STYLE_COMPONENTS'	=> 'سٹائل کے اجزاء',
	'ACP_STYLE_MANAGEMENT'	=> 'سٹائلز کا انتظام',
	'ACP_STYLES'	=> 'سٹائلز',
	'ACP_SUBMIT_CHANGES'	=> 'تبدیلی ارسال کریں',
	'ACP_TEMPLATES'	=> 'ٹیمپلیٹ',
	'ACP_THEMES'	=> 'ٹھیمز',
	'ACP_UPDATE'	=> 'اپ ڈیٹنگ',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'صارف کی فورم اجازات',
	'ACP_USERS_LOGS'	=> 'صارف کے لاگ',
	'ACP_USERS_PERMISSIONS'	=> 'صارف کی اجازات',
	'ACP_USER_ATTACH'	=> 'منسلکات',
	'ACP_USER_AVATAR'	=> 'اوتار',
	'ACP_USER_FEEDBACK'	=> 'رائے',
	'ACP_USER_GROUPS'	=> 'گروہ',
	'ACP_USER_MANAGEMENT'	=> 'صارف کا انتظام',
	'ACP_USER_OVERVIEW'	=> 'جائزہ',
	'ACP_USER_PERM'	=> 'اجازات',
	'ACP_USER_PREFS'	=> 'ترجیحات',
	'ACP_USER_PROFILE'	=> 'پروفائل',
	'ACP_USER_RANK'	=> 'درجہ',
	'ACP_USER_ROLES'	=> 'صارف کردار',
	'ACP_USER_SECURITY'	=> 'صارف سیکیورٹی',
	'ACP_USER_SIG'	=> 'دستخط',
	'ACP_USER_WARNINGS'	=> 'تنبیہات',
	'ACP_VC_SETTINGS'	=> 'CAPTCHA ماڈیول کی ترتیبات',
	'ACP_VC_CAPTCHA_DISPLAY'	=> 'CAPTCHA تصویر کا جائزہ',
	'ACP_VERSION_CHECK'	=> 'اپ ڈیٹ‌چیک کریں',
	'ACP_VIEW_ADMIN_PERMISSIONS'	=> 'انتظامی اجازات دیکھیں',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'فورم ادارتی اجازات دیکھیں',
	'ACP_VIEW_FORUM_PERMISSIONS'	=> 'فورم پر مبنی اجازات دیکھیں',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'عالمی ادارت کی اجازات دیکھیں',
	'ACP_VIEW_USER_PERMISSIONS'	=> 'صارف پر مبنی اجازات دیکھیں',
	'ACP_WORDS'	=> 'لفظ سنسر',
	'ACTION'	=> 'کاروائی',
	'ACTIONS'	=> 'اعمال',
	'ACTIVATE'	=> 'فعال کریں',
	'ADD'	=> 'اضافہ کریں',
	'ADMIN'	=> 'انتظامیہ',
	'ADMIN_INDEX'	=> 'انتظامی صفحہ',
	'ADMIN_PANEL'	=> 'منتظم کنٹرول پینل',
	'ADM_LOGOUT'	=> 'ACP&nbsp; لاگ آئوٹ',
	'ADM_LOGGED_OUT'	=> 'منتظم کنٹرول پینل سے کامیابی سے لاگ آئوٹ‌ہو چکے ہیں',
	'BACK'	=> 'واپس',
	'COLOUR_SWATCH'	=> 'رنگوں کی آمیزش',
	'CONFIG_UPDATED'	=> 'ترتیب کامیابی سے اپ ڈیٹ‌کر دی گئی ہے',
	'DEACTIVATE'	=> 'غیر فعال',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'ارسال کردہ راستہ "%s" موجود نہیں‌ہے',
	'DIRECTORY_NOT_DIR'	=> 'ارسال کردہ راستہ "%s" ڈائیریکٹری نہیں‌ہے',
	'DIRECTORY_NOT_WRITABLE'	=> 'ارسال کردہ راستہ "%s" قابلِ ترمیم نہیں ہے',
	'DISABLE'	=> 'غیر فعال',
	'DOWNLOAD'	=> 'ڈائون لوڈ',
	'DOWNLOAD_AS'	=> 'ڈائون لوڈ بطور',
	'DOWNLOAD_STORE'	=> 'فائل ڈائون لوڈ یا محفوظ‌کریں',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'آپ فائل ڈائون لوڈ‌کر سکتے ہیں یا اسے <samp>store/</samp> فولڈر میں‌محفوظ‌کر سکتے ہیں',
	'EDIT'	=> 'ترمیم',
	'ENABLE'	=> 'فعال',
	'EXPORT_DOWNLOAD'	=> 'ڈائون لوڈ',
	'EXPORT_STORE'	=> 'محفوظ',
	'GENERAL_OPTIONS'	=> 'عام اختیارات',
	'GENERAL_SETTINGS'	=> 'عام ترتیبات',
	'GLOBAL_MASK'	=> 'عالمی اجازات کا نقاب',
	'INSTALL'	=> 'انسٹال',
	'IP'	=> 'IP',
	'IP_HOSTNAME'	=> 'آئی پی ایڈریس یا ہوسٹ‌کا نام',
	'LOGGED_IN_AS'	=> 'آپ لاگن ہیں‌بطور:',
	'LOGIN_ADMIN'	=> 'اس بورڈ کا انتظام کرنے کے لیے، آپکا توثیق شدہ صارف ہونا ضروری ہے',
	'LOGIN_ADMIN_CONFIRM'	=> 'اس بورڈ کا انتظام کرنے کے لیے، آپکو خود کی توثیق کرنا ضروری ہے',
	'LOGIN_ADMIN_SUCCESS'	=> 'آپکی توثیق کامیاب رہی ہے. اب آپ کو منتظم کنٹرول پینل میں‌ بھیجا جا رہا ہے',
	'LOOK_UP_FORUM'	=> 'فورم منتخب کریں',
	'LOOK_UP_FORUMS_EXPLAIN'	=> 'آپ ایک سے زیادہ فورم کا انتخاب کر سکتے ہیں',
	'MANAGE'	=> 'انتظام',
	'MENU_TOGGLE'	=> 'طرفی مینیو ظاہر کریں‌یا چھپائیں',
	'MORE'	=> 'مزید',
	'MORE_INFORMATION'	=> 'مزید معلومات »',
	'MOVE_DOWN'	=> 'نیچے منتقل کریں',
	'MOVE_UP'	=> 'اوپر منتقل کریں',
	'NOTIFY'	=> 'اہم اطلاع',
	'NO_ADMIN'	=> 'آپ اس بورڈ کا انتظام کرنے کے مختار نہیں ہیں',
	'NO_EMAILS_DEFINED'	=> 'کوئی درست ای-میل ایڈریس نہیں ملا',
	'NO_PASSWORD_SUPPLIED'	=> 'آپ پاس ورڈ کے بغیر لاگن نہیں کر سکتے.',
	'OFF'	=> 'بند',
	'ON'	=> 'کھلا',
	'PARSE_BBCODE'	=> 'BBCode کا تجزیہ کریں',
	'PARSE_SMILIES'	=> 'مسکانوں کا تجزیہ کریں',
	'PARSE_URLS'	=> 'روابط کا تجزیہ کریں',
	'PERMISSIONS_TRANSFERRED'	=> 'اجازات منتقل کر دی گئی ہیں',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'موجودہ طور پر آپکے پاس "%1$s" کی اجازات ہیں. آپ بورڈ‌کو اس صارف کی اجازات سے برائوز کر سکتے ہیں لیکن آپ منتظم کنٹرول پینل میں‌داخل نہیں‌ہو سکتے. آپ <a href="%2$s"><strong>اجازات واپس</strong></a> کر سکتے ہیں.',
	'PROCEED_TO_ACP'	=> '%sACP پر جائیں%s',
	'REMIND'	=> 'یاد دلائیں',
	'RESYNC'	=> 'Resynchronise',
	'RETURN_TO'	=> 'واپسی.....',
	'SELECT_ANONYMOUS'	=> 'گمنام صارف منتخب کریں',
	'SELECT_OPTION'	=> 'آپشن منتخب کریں',
	'SETTING_TOO_LOW'	=> 'ترتیب "%1$s" کی دی گئی قیمت بہت کم ہے. کم سے کم قابل قبول قیمت %2$d ہے.',
	'SETTING_TOO_BIG'	=> 'ترتیب "%1$s" کی دی گئی قیمت بہت زیادہ ہے. زیادہ سے زیادہ قابل قبول قیمت %2$d ہے.',
	'SETTING_TOO_LONG'	=> 'ترتیب "%1$s" کی دی گئی قیمت بہت لمبی ہے. زیادہ سے زیادہ قابل قبول لمبائی %2$d ہے.',
	'SETTING_TOO_SHORT'	=> 'ترتیب "%1$s" کی دی گئی قیمت بہت چھوٹی ہے. کم سے کم قابل قبول لمبائی %2$d ہے.',
	'SHOW_ALL_OPERATIONS'	=> 'تمام اعمال دکھائیں',
	'UCP'	=> 'صارف کنٹرول پینل',
	'USERNAMES_EXPLAIN'	=> 'ہر رکنیتی نام الگ سطر پر لکھیں',
	'USER_CONTROL_PANEL'	=> 'صارف کنٹرول پینل',
	'WARNING'	=> 'تنبیہ',
	'ACP_PHP_INFO_EXPLAIN'	=> 'یہ صفحہ اس سرور پر انسٹال ہوئے PHP کے ورژن کی معلومات فراہم کرتا ہے. یہ معلومات مسائل کی تشخیص میں کام آ سکتی ہیں. کچھ کمپنیاں سیکیورٹی وجوہات کی بناء پر ان معلومات کو ایک حد تک ہی فراہم کرتی ہیں. آپ کو مشورہ دیا جاتا ہے کہ اس صفحے کی معلومات کسی کو نہ دیں سوائے <a href="http://www.phpbb.com">phpbb group</a> کے، جب وہ اسکے بارے میں پوچھیں.',
	'NO_PHPINFO_AVAILABLE'	=> 'آپکی PHP کی معلومات فراہم نہیں کی جاسکتیں. Phpinfo() عمل سیکیورٹی وجوہات کی بناء‌پر غیر فعال ہے.',
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'یہ منتظم کی طرف سے عمل میں لائے گئے تمام اقدامات کی فہرست ہے. آپ انہیں رکنیتی نام، آئی پی وغیرہ کے حساب سے انکا حکم رکھ سکتے ہیں. اگر آپکے پاس مخصوص اجازات ہیں‌تو آپ انہیں‌صاف بھی کر سکتے ہیں.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'یہ بورڈ کی طرف سے کیے گئے اقدامات کی فہرست ظاہر کرتا ہے. اسکے زریعے آپ مختلف مسائل حل کر سکتے ہیں‌جیسا کہ ای-میلز کا صارف کو وصول نہ ہونا. آپ انہیں رکنیتی نام، آئی پی وغیرہ کے حساب سے انکا حکم رکھ سکتے ہیں. اگر آپکے پاس مخصوص اجازات ہیں‌تو آپ انہیں‌صاف بھی کر سکتے ہیں',
	'ACP_MOD_LOGS_EXPLAIN'	=> 'یہ فورم پر ہوئے تمام اعمال کی فہرست ظاہر کرتا ہے بشمول مدیران اور صارفین کے اعمال. آپ انہیں رکنیتی نام، آئی پی وغیرہ کے حساب سے انکا حکم رکھ سکتے ہیں. اگر آپکے پاس مخصوص اجازات ہیں‌تو آپ انہیں‌صاف بھی کر سکتے ہیں',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'یہ صارف کی طرف سے کیے گئے یا ان پر کیے گئے اعمال کی فہرست ظاہر کرتا ہے. جیسا کہ رپورٹس، تنبیہات',
	'ALL_ENTRIES'	=> 'تمام اندراجات',
	'DISPLAY_LOG'	=> 'گزشتہ اندراج سے ظاہر کریں',
	'NO_ENTRIES'	=> 'اس مدت کے لیے کوئی لاگ اندراج موجود نہیں',
	'SORT_IP'	=> 'آئی پی ایڈریس',
	'SORT_DATE'	=> 'تاریخ',
	'SORT_ACTION'	=> 'لاگ کے اعمال',
	'ADMIN_INTRO'	=> 'اپنے بورڈ کے لیے phpBB کو منتخب کرنے کا شکریہ. اس سکرین پر آپ اپنے تمام اعداد و شمار کا جائزہ لے سکتے ہیں. اس سکرین کے دائیں‌طرف مینو میں‌ آپکو بورڈ‌کے کنٹرول سے متعلق تمام روابط موجود ہیں. ہر صفحے پر اسکے استعمال کے بارے میں‌ہدایات میسر ہونگی.',
	'ADMIN_LOG'	=> 'منتظم کے لاگ ہوئے اعمال',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'یہ بورڈ منتظمین کی طرف سے کیے گئے آخری پانچ اقدامات کا جائزہ ہے. مکمل جائزہ کی نقل متعلقہ صفحہ یا درج ذیل ربط سے دیکھی جا سکتی ہے.',
	'AVATAR_DIR_SIZE'	=> 'اوتار ڈائیریکٹری کا سائز',
	'BOARD_STARTED'	=> 'بورڈ شروع ہوا',
	'BOARD_VERSION'	=> 'بورڈ‌کا ورژن',
	'DATABASE_SERVER_INFO'	=> 'ڈیٹا بیس سرور',
	'DATABASE_SIZE'	=> 'ڈیٹا بیس کا سائز',
	'FILES_PER_DAY'	=> 'فی روز منسلکات',
	'FORUM_STATS'	=> 'بورڈ‌کے اعداد و شمار',
	'GZIP_COMPRESSION'	=> 'GZip کمپریشن',
	'NOT_AVAILABLE'	=> 'غیر دستیاب ہے',
	'NUMBER_FILES'	=> 'منسلکات کی تعداد',
	'NUMBER_POSTS'	=> 'مراسلات کی تعداد',
	'NUMBER_TOPICS'	=> 'موضوعات کی تعداد',
	'NUMBER_USERS'	=> 'صارفین کی تعداد',
	'NUMBER_ORPHAN'	=> 'یتیم منسلکات',
	'PHP_VERSION_OLD'	=> 'اس سرور پر PHP کا ورژن phpBB کے آئندہ ورژن میں‌ حمائیتی نہیں‌ہوگا. %sتفصیلات%s',
	'POSTS_PER_DAY'	=> 'فی روز مراسلات',
	'PURGE_CACHE'	=> 'کیشے صاف (purge) کریں',
	'PURGE_CACHE_CONFIRM'	=> 'کیا آپ واقعی کیشے صاف کرنا چاہتے ہیں؟',
	'PURGE_CACHE_EXPLAIN'	=> 'کیشے سے متعلقہ تمام اشیاء‌ صاف (purge) کریں. اس میں‌ٹمپلیٹ‌ فائلز اور queries شامل ہیں.',
	'PURGE_SESSIONS'	=> 'تمام سیشن صاف کریں',
	'PURGE_SESSIONS_CONFIRM'	=> 'کیا آپ تمام سیشن صاف کرنا چاہتے ہیں؟اس سے تمام صارفین لاگ آئوٹ‌ہو جائیں‌گے.',
	'PURGE_SESSIONS_EXPLAIN'	=> 'تمام سیشن صاف کریں. یہ سیشن ٹیبل کو قطع کرتے ہوئے تمام صارفین کو لاگ آئوٹ‌کر دے گا.',
	'RESET_DATE'	=> 'بورڈ کے شروع ہونے کی تاریخ ریسیٹ‌کریں',
	'RESET_DATE_CONFIRM'	=> 'کیا آپ واقعی بورڈ کے شروع ہونے کی تاریخ ریسیٹ‌کرنا چاہتے ہیں؟',
	'RESET_ONLINE'	=> 'سب سے زیادہ صارفین کے آن لائن ہونے کا وقت ریسیٹ‌کریں؟',
	'RESET_ONLINE_CONFIRM'	=> 'کیا آپ واقعی سب سے زیادہ صارفین کے آن لائن ہونے کا وقت ریسیٹ‌کرنا چاہتے ہیں؟',
	'RESYNC_POSTCOUNTS'	=> 'مراسلات کی تعداد resync کریں',
	'RESYNC_POSTCOUNTS_EXPLAIN'	=> 'صرف موجودہ خطوط پر غور کیا جائے گا. تراشیدگی خطوط شمار نہیں کیا جائے گا.',
	'RESYNC_POSTCOUNTS_CONFIRM'	=> 'کیا آپ واقعی مراسلات کی تعداد resync کرنا چاہتے ہیں؟',
	'RESYNC_POST_MARKING'	=> 'بندیدار (dotted) موضوعات resync کریں',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'کیا آپ واقعی بندیدار (dotted) موضوعات resync کرنا چاہتے ہیں؟',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'پہلے تمام موضوعات کو غیر نشان ذدہ کرتا ہے، پھر درست طریقے سے تمام ان تمام موضوعات کو نشان ذدہ کرتا ہے جو آخری چھ ماہ میں‌کبھی فعال رہے ہیں.',
	'RESYNC_STATS'	=> 'اعداد و شمار resync کریں',
	'RESYNC_STATS_CONFIRM'	=> 'کیا آپ واقعی اعداد و شمار resync کرنا چاہتے ہیں؟',
	'RESYNC_STATS_EXPLAIN'	=> 'مراسلات، موضوعات، صارفین اور فائلز کی کل تعداد کا جائزہ لیتا ہے',
	'RUN'	=> 'شروع کریں',
	'STATISTIC'	=> 'اعداد و شمار',
	'STATISTIC_RESYNC_OPTIONS'	=> 'اعداد و شمار ریسیٹ یا  resync کریں',
	'TOPICS_PER_DAY'	=> 'فی روز موضوعات',
	'UPLOAD_DIR_SIZE'	=> 'ارسال شدہ منسلکات کا سائز',
	'USERS_PER_DAY'	=> 'فی روز صارفین',
	'VALUE'	=> 'قیمت',
	'VERSIONCHECK_FAIL'	=> 'تازہ ترین ورژن حاصل کرنے میں‌ناکام',
	'VERSIONCHECK_FORCE_UPDATE'	=> 'ورژن دوبارہ دیکھیں',
	'VIEW_ADMIN_LOG'	=> 'منتظم لاگ دیکھیں',
	'VIEW_INACTIVE_USERS'	=> 'غیر فعال صارفین دیکھیں',
	'WELCOME_PHPBB'	=> 'phpBB پر خوش آمدید',
	'WRITABLE_CONFIG'	=> 'آپکی config.php فائل کو کوئی بھی بدل سکتا ہے. ہم ذور دے کر مشورہ دیتے ہیں کہ اس فائل کی اجازات 640 یا کم سے کم 644 پر ضرور سیٹ‌کریں.',
	'INACTIVE_DATE'	=> 'غیر فعالی کی تاریخ',
	'INACTIVE_REASON'	=> 'وجہ',
	'INACTIVE_REASON_MANUAL'	=> 'منتظم کی طرف سے اکائونٹ غیر فعال کر دیا گیا',
	'INACTIVE_REASON_PROFILE'	=> 'پروفائل کی تفصیلات تبدیل کر دی گئی ہیں',
	'INACTIVE_REASON_REGISTER'	=> 'نیا رجسٹر شدہ اکائونٹ',
	'INACTIVE_REASON_REMIND'	=> 'صارف کی دوبارہ فعالی پر ذور دیا گیا',
	'INACTIVE_REASON_UNKNOWN'	=> 'نامعلوم',
	'INACTIVE_USERS'	=> 'غیر فعال صارفین',
	'INACTIVE_USERS_EXPLAIN'	=> 'یہ ان صارفین کی فہرست ہے جو رجسٹر کر چکے ہیں‌مگر ابھی تک غیر فعال ہیں. آپ اگر چاہیں‌تو ان صارفین کو فعال، حذف یا یاد دہانی (ای-میل کے زریعے) کروا سکتے ہیں.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'یہ رجسٹر شدہ 10 صارفین کی فہرست ہے جن کے اکائونٹ‌غیر فعال ہیں. پوری فہرست دیکھنے کے لیے نیچے ربط سے یا مینو میں‌سے ربط کا استعمال کریں جہاں آپ اگر چاہیں‌تو ان صارفین کو فعال، حذف یا یاد دہانی (ای-میل کے زریعے) کروا سکتے ہیں.',
	'NO_INACTIVE_USERS'	=> 'کوئی غیر فعال صارف نہیں',
	'SORT_INACTIVE'	=> 'غیر فعالی کی تاریخ',
	'SORT_LAST_VISIT'	=> 'آخری دورہ',
	'SORT_REASON'	=> 'وجہ',
	'SORT_REG_DATE'	=> 'رجسٹریشن کی تاریخ',
	'SORT_LAST_REMINDER'	=> 'آخری مرتبہ یاد دہانی کروائی گئی',
	'SORT_REMINDER'	=> 'یاد دہانی بھیج دی گئی ہے',
	'USER_IS_INACTIVE'	=> 'صارف غیر فعال ہے',
	'EXPLAIN_SEND_STATISTICS'	=> 'برائے مہربانی phpBB کو اعداد و شمار کے جائزہ کے لیے اپنے سرور اور بورڈ‌کی معلومات بھیجیں. کوئی بھی تفصیل جو آپکی شناخت کروا سکتی تھی، ختم کر دی گئی ہے. یہ معلومات مکمل طور پر <strong>نامعلوم</strong> ہیں.',
	'EXPLAIN_SHOW_STATISTICS'	=> 'نیچے بٹن کے استعمال سے آپ تمام منتقل کیے جانے والی متغیر کا جائزہ لے سکتے ہیں.',
	'DONT_SEND_STATISTICS'	=> 'اگر آپ phpBB کو اعداد و شمار کی تفصیلات نہیں‌بھیجنا چاہتے تو ACP پر واپس جائیں',
	'GO_ACP_MAIN'	=> 'ACP صفحہ پر جائیں',
	'HIDE_STATISTICS'	=> 'تفصیلات چھپائیں',
	'SEND_STATISTICS'	=> 'اعداد و شمار کی تفصیلات بھیجیں',
	'SHOW_STATISTICS'	=> 'تفصیلات دکھائیں',
	'THANKS_SEND_STATISTICS'	=> 'اپنی تفصیلات ارسال کرنے کا شکریہ',
	'LOG_ACL_ADD_USER_GLOBAL_U_'	=> '<strong>صارف کی صارفین اجازات شامل یا ترمیم کی</strong><br />»%s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'	=> '<strong>گروہ کی صارفین اجازات شامل یا ترمیم کیں</strong><br />»%s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'	=> '<strong>صارفین کی عالمی مدیر اجازات شامل یا ترمیم کیں</strong><br />»%s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'	=> '<strong>گروہ کی عالمی مدیر اجازات شامل یا ترمیم کیں</strong><br />»%s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'	=> '<strong>صارف کی منتظم اجازات شامل یا ترمیم کیں</strong><br />»%s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'	=> '<strong>گروہ کی منتظم اجازات شامل یا ترمیم کیں</strong><br />»%s',
	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'	=> '<strong>منتظمین شامل یا ترمیم کیے</strong><br />»%s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'	=> '<strong>عالمی مدیران شامل یا ترمیم کیے</strong><br />»%s',
	'LOG_ACL_ADD_USER_LOCAL_F_'	=> '%1$s سے <strong>صارفین کی فورم رسائی شامل یا ترمیم کی</strong><br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'	=> '%1$s سے <strong>صارفین کی مدیران فورم رسائی شامل یا ترمیم کی</strong><br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'	=> '%1$s سے <strong>گروہ کی فورم رسائی شامل یا ترمیم کی</strong><br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'	=> '%1$s سے <strong>گروہ کی مدیران فورم رسائی شامل یا ترمیم کی</strong><br />» %2$s',
	'LOG_ACL_ADD_MOD_LOCAL_M_'	=> '%1$s سے <strong>مدیران شامل یا ترمیم کیے</strong><br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'	=> '%1$s سے <strong>فورم اجازات شامل یا ترمیم کیں</strong><br />» %2$s',
	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'	=> '<strong>منتظمین ختم کیے</strong><br />»%s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'	=> '<strong>عالمی مدیران ختم کیے</strong><br />»%s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'	=> '%1$s سے <strong>مدیران ختم کیے</strong><br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'	=> '%1$s سے <strong>صارف/ گروہ کی فورم اجازات ختم کیں</strong><br />» %2$s',
	'LOG_ACL_TRANSFER_PERMISSIONS'	=> '<strong>اجازات منتقل کیں</strong><br />»%s',
	'LOG_ACL_RESTORE_PERMISSIONS'	=> '<strong>یہاں‌ سے اجازات استعمال کرنے کے بعد اپنی اجازات کی بحالی کی گئی</strong><br />»%s',
	'LOG_ADMIN_AUTH_FAIL'	=> '<strong>منتظم لاگن کی ناکام کوشش</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>کامیاب منتظم لاگن</strong>',
	'LOG_ATTACHMENTS_DELETED'	=> '<strong>صارف منسلکات ختم کیں</strong><br />»%s',
	'LOG_ATTACH_EXT_ADD'	=> '<strong>منسلکات ایکسٹینشن شامل یا ترمیم کی</strong><br />»%s',
	'LOG_ATTACH_EXT_DEL'	=> '<strong>منسلکات ایکسٹینشن ختم کی</strong><br />»%s',
	'LOG_ATTACH_EXT_UPDATE'	=> '<strong>منسلکات ایکسٹینشن اپ ڈیٹ کیں</strong><br />»%s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>ایکسٹینشن گروہ شامل کیا</strong><br />»%s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>ایکسٹینشن گروہ میں‌ترمیم کی</strong><br />»%s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>ایکسٹینشن گروہ ختم کیا</strong><br />»%s',
	'LOG_ATTACH_FILEUPLOAD'	=> '<strong>یتیم فائل مراسلہ میں‌اپ لوڈ‌کی گئی</strong><br />» شناخت %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'	=> '<strong>یتیم فائلز ختم کیں</strong><br />»%s',
	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Excluded user from ban</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Excluded IP from ban</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_EMAIL'	=> '<strong>Excluded e-mail from ban</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_USER'	=> '<strong>Banned user</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_IP'	=> '<strong>Banned IP</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EMAIL'	=> '<strong>Banned e-mail</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_UNBAN_USER'	=> '<strong>صارف سے پابندی ہٹائی</strong><br />»%s',
	'LOG_UNBAN_IP'	=> '<strong>آئی پی سے پابندی ہٹائی</strong><br />»%s',
	'LOG_UNBAN_EMAIL'	=> '<strong>ای-میل ایڈریس سے پابندی ہٹائی</strong><br />»%s',
	'LOG_BBCODE_ADD'	=> '<strong>نیا BBCode شامل کیا</strong><br />»%s',
	'LOG_BBCODE_EDIT'	=> '<strong>BBCode میں‌ترمیم کی</strong><br />»%s',
	'LOG_BBCODE_DELETE'	=> '<strong>BBCode ختم کیا</strong><br />»%s',
	'LOG_BOT_ADDED'	=> '<strong>نیا خودکار صارف شامل کیا</strong><br />»%s',
	'LOG_BOT_DELETE'	=> '<strong>خودکار صارف ختم کیا</strong><br />»%s',
	'LOG_BOT_UPDATED'	=> '<strong>موجودہ خودکار صارف اپ ڈیٹ کیا</strong><br />»%s',
	'LOG_CLEAR_ADMIN'	=> '<strong>Cleared admin log</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Cleared error log</strong>',
	'LOG_CLEAR_MOD'	=> '<strong>Cleared moderator log</strong>',
	'LOG_CLEAR_USER'	=> '<strong>صارف کا لاگ ختم کیا</strong><br />»%s',
	'LOG_CLEAR_USERS'	=> '<strong>Cleared user logs</strong>',
	'LOG_CONFIG_ATTACH'	=> '<strong>Altered attachment settings</strong>',
	'LOG_CONFIG_AUTH'	=> '<strong>Altered authentication settings</strong>',
	'LOG_CONFIG_AVATAR'	=> '<strong>Altered avatar settings</strong>',
	'LOG_CONFIG_COOKIE'	=> '<strong>Altered cookie settings</strong>',
	'LOG_CONFIG_EMAIL'	=> '<strong>Altered e-mail settings</strong>',
	'LOG_CONFIG_FEATURES'	=> '<strong>Altered board features</strong>',
	'LOG_CONFIG_LOAD'	=> '<strong>Altered load settings</strong>',
	'LOG_CONFIG_MESSAGE'	=> '<strong>Altered private message settings</strong>',
	'LOG_CONFIG_POST'	=> '<strong>Altered post settings</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Altered user registration settings</strong>',
	'LOG_CONFIG_FEED'	=> '<strong>Altered syndication feeds settings</strong>',
	'LOG_CONFIG_SEARCH'	=> '<strong>Altered search settings</strong>',
	'LOG_CONFIG_SECURITY'	=> '<strong>Altered security settings</strong>',
	'LOG_CONFIG_SERVER'	=> '<strong>Altered server settings</strong>',
	'LOG_CONFIG_SETTINGS'	=> '<strong>Altered board settings</strong>',
	'LOG_CONFIG_SIGNATURE'	=> '<strong>Altered signature settings</strong>',
	'LOG_CONFIG_VISUAL'	=> '<strong>Altered antibot settings</strong>',
	'LOG_APPROVE_TOPIC'	=> '<strong>موضوع منظور کیا</strong><br />»%s',
	'LOG_BUMP_TOPIC'	=> '<strong>صارف نے موضوع اوپر کیا</strong><br />»%s',
	'LOG_DELETE_POST'	=> '<strong>Deleted post “%1$s” written by</strong><br />» %2$s',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>Deleted shadow topic</strong><br />» %s',
	'LOG_DELETE_TOPIC'	=> '<strong>Deleted topic “%1$s” written by</strong><br />» %2$s',
	'LOG_FORK'	=> '<strong>Copied topic</strong><br />» from %s',
	'LOG_LOCK'	=> '<strong>موضوع مقفل کیا</strong><br />»%s',
	'LOG_LOCK_POST'	=> '<strong>مراسلہ مقفل کیا</strong><br />»%s',
	'LOG_MERGE'	=> '<strong>موضوع میں‌مراسلات شامل کیے</strong><br />»%s',
	'LOG_MOVE'	=> '<strong>Moved topic</strong><br />» from %1$s to %2$s',
	'LOG_PM_REPORT_CLOSED'	=> '<strong>ذاتی پیغام کی رپورٹ‌بند کی</strong><br />»%s',
	'LOG_PM_REPORT_DELETED'	=> '<strong>ذاتی پیغام کی رپورٹ‌ختم کی</strong><br />»%s',
	'LOG_POST_APPROVED'	=> '<strong>مراسلہ منظور کیا</strong><br />»%s',
	'LOG_POST_DISAPPROVED'	=> '<strong>Disapproved post “%1$s” with the following reason</strong><br />» %2$s',
	'LOG_POST_EDITED'	=> '<strong>Edited post “%1$s” written by</strong><br />» %2$s',
	'LOG_REPORT_CLOSED'	=> '<strong>رپورٹ بند کی</strong><br />»%s',
	'LOG_REPORT_DELETED'	=> '<strong>رپورٹ حذف کی</strong><br />»%s',
	'LOG_SPLIT_DESTINATION'	=> '<strong>الگ کیے گئے مراسلات کو منتقل کیا</strong><br />»%s',
	'LOG_SPLIT_SOURCE'	=> '<strong>مراسلات الگ کیے</strong><br />»%s',
	'LOG_TOPIC_APPROVED'	=> '<strong>موضوع منظور کیا</strong><br />»%s',
	'LOG_TOPIC_DISAPPROVED'	=> '<strong>Disapproved topic “%1$s” with the following reason</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'	=> '<strong>موضوعات کے کائونٹر کو resync کیا</strong><br />»%s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>موضوع کی قسم تبدیل کی</strong><br />»%s',
	'LOG_UNLOCK'	=> '<strong>موضوع غیر مقفل کیا</strong><br />»%s',
	'LOG_UNLOCK_POST'	=> '<strong>مراسلہ غیر مقفل کیا</strong><br />»%s',
	'LOG_DISALLOW_ADD'	=> '<strong>رد کردہ رکنیتی نام شامل کیے</strong><br />»%s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Deleted disallowed username</strong>',
	'LOG_DB_BACKUP'	=> '<strong>Database backup</strong>',
	'LOG_DB_DELETE'	=> '<strong>Deleted database backup</strong>',
	'LOG_DB_RESTORE'	=> '<strong>Restored database backup</strong>',
	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>ڈائون لوڈ کی فہرست سے آئی پی/ ہوسٹ‌نیم نکالے</strong><br />»%s',
	'LOG_DOWNLOAD_IP'	=> '<strong>ڈائون لوڈ کی فہرست میں آئی پی/ ہوسٹ‌نیم شامل کیے</strong><br />»%s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>ڈائون لوڈ کی فہرست میں آئی پی/ ہوسٹ‌نیم ختم کیے</strong><br />»%s',
	'LOG_ERROR_JABBER'	=> '<strong>جیبر کی غلطی</strong><br />»%s',
	'LOG_ERROR_EMAIL'	=> '<strong>ای-میل کی غلطی</strong><br />»%s',
	'LOG_FORUM_ADD'	=> '<strong>Created new forum</strong><br />» %s',
	'LOG_FORUM_COPIED_PERMISSIONS'	=> '<strong>Copied forum permissions</strong> from %1$s<br />» %2$s',
	'LOG_FORUM_DEL_FORUM'	=> '<strong>Deleted forum</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'	=> '<strong>Deleted forum and its subforums</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'	=> '<strong>Deleted forum and moved subforums</strong> to %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'	=> '<strong>Deleted forum and moved posts </strong> to %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'	=> '<strong>Deleted forum and its subforums, moved posts</strong> to %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Deleted forum, moved posts</strong> to %1$s <strong>and subforums</strong> to %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'	=> '<strong>Deleted forum and its posts</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'	=> '<strong>Deleted forum, its posts and subforums</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'	=> '<strong>Deleted forum and its posts, moved subforums</strong> to %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'	=> '<strong>Edited forum details</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'	=> '<strong>Moved forum</strong> %1$s <strong>below</strong> %2$s',
	'LOG_FORUM_MOVE_UP'	=> '<strong>Moved forum</strong> %1$s <strong>above</strong> %2$s',
	'LOG_FORUM_SYNC'	=> '<strong>Re-synchronised forum</strong><br />» %s',
	'LOG_GENERAL_ERROR'	=> '<strong>A general error occured</strong>: %1$s <br />» %2$s',
	'LOG_GROUP_CREATED'	=> '<strong>New usergroup created</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Group “%1$s” made default for members</strong><br />» %2$s',
	'LOG_GROUP_DELETE'	=> '<strong>Usergroup deleted</strong><br />» %s',
	'LOG_GROUP_DEMOTED'	=> '<strong>Leaders demoted in usergroup</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Members promoted to leader in usergroup</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'	=> '<strong>Members removed from usergroup</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'	=> '<strong>Usergroup details updated</strong><br />» %s',
	'LOG_MODS_ADDED'	=> '<strong>Added new leaders to usergroup</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'	=> '<strong>Added new members to usergroup</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Users approved in usergroup</strong> %1$s<br />» %2$s',
	'LOG_USERS_PENDING'	=> '<strong>Users requested to join group “%1$s” and need to be approved</strong><br />» %2$s',
	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>Error while creating image</strong><br />» Error in %1$s on line %2$s: %3$s',
	'LOG_IMAGESET_ADD_DB'	=> '<strong>ڈیٹا بیس میں‌نیا امیج سیٹ‌شامل کیا</strong><br />»%s',
	'LOG_IMAGESET_ADD_FS'	=> '<strong>فائل سسٹم میں‌نیا امیج سیٹ‌شامل کیا</strong><br />»%s',
	'LOG_IMAGESET_DELETE'	=> '<strong>امیج سیٹ‌ختم کیا</strong><br />»%s',
	'LOG_IMAGESET_EDIT_DETAILS'	=> '<strong>امیج سیٹ‌ کی تفصیلات میں‌ترمیم کی</strong><br />»%s',
	'LOG_IMAGESET_EDIT'	=> '<strong>امیج سیٹ‌ میں‌ترمیم کی</strong><br />»%s',
	'LOG_IMAGESET_EXPORT'	=> '<strong>امیج سیٹ‌ ایکسپورٹ کیا</strong><br />»%s',
	'LOG_IMAGESET_LANG_MISSING'	=> '<strong>Imageset misses “%2$s” localisation</strong><br />» %1$s',
	'LOG_IMAGESET_LANG_REFRESHED'	=> '<strong>Refreshed “%2$s” localisation of imageset</strong><br />» %1$s',
	'LOG_IMAGESET_REFRESHED'	=> '<strong>Refreshed imageset</strong><br />» %s',
	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Activated inactive users</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Deleted inactive users</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Sent reminder e-mails to inactive users</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Converted from %1$s to phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Installed phpBB %s</strong>',
	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Session IP/browser/X_FORWARDED_FOR check failed</strong><br />»User IP “<em>%1$s</em>” checked against session IP “<em>%2$s</em>”, user browser string “<em>%3$s</em>” checked against session browser string “<em>%4$s</em>” and user X_FORWARDED_FOR string “<em>%5$s</em>” checked against session X_FORWARDED_FOR string “<em>%6$s</em>”.',
	'LOG_JAB_CHANGED'	=> '<strong>Jabber account changed</strong>',
	'LOG_JAB_PASSCHG'	=> '<strong>Jabber password changed</strong>',
	'LOG_JAB_REGISTER'	=> '<strong>Jabber account registered</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Jabber settings changed</strong>',
	'LOG_LANGUAGE_PACK_DELETED'	=> '<strong>ذبان کا پیک حذف کیا</strong><br />»%s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>ذبان کا پیک انسٹال کیا</strong><br />»%s',
	'LOG_LANGUAGE_PACK_UPDATED'	=> '<strong>ذبان کے پیک کی تفصیلات اپ ڈیٹ کیں</strong><br />»%s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>ذبان کی فائل تبدیل کی</strong><br />»%s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>زبان کی فائل ارسال کی اور ذخیرہ فولڈر میں‌رکھی</strong><br />»%s',
	'LOG_MASS_EMAIL'	=> '<strong>اجتماعی ای-میل بھیجی</strong><br />»%s',
	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Changed poster in topic “%1$s”</strong><br />» from %2$s to %3$s',
	'LOG_MODULE_DISABLE'	=> '<strong>ماڈیول غیر فعال کیا</strong><br />»%s',
	'LOG_MODULE_ENABLE'	=> '<strong>ماڈیول فعال کیا</strong><br />»%s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Module moved down</strong><br />» %1$s below %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Module moved up</strong><br />» %1$s above %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>ماڈیول حذف کیا</strong><br />»%s',
	'LOG_MODULE_ADD'	=> '<strong>ماڈیول شامل کیا</strong><br />»%s',
	'LOG_MODULE_EDIT'	=> '<strong>ماڈیول ترمیم کیا</strong><br />»%s',
	'LOG_A_ROLE_ADD'	=> '<strong>منتظم کردار شامل کیا</strong><br />»%s',
	'LOG_A_ROLE_EDIT'	=> '<strong>منتظم کردار ترمیم کیا</strong><br />»%s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>منتظم کردار ختم کیا</strong><br />»%s',
	'LOG_F_ROLE_ADD'	=> '<strong>فورم کردار شامل کیا</strong><br />»%s',
	'LOG_F_ROLE_EDIT'	=> '<strong>فورم کردار ترمیم کیا</strong><br />»%s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>فورم کردار ختم کیا</strong><br />»%s',
	'LOG_M_ROLE_ADD'	=> '<strong>مدیرکردار شامل کیا</strong><br />»%s',
	'LOG_M_ROLE_EDIT'	=> '<strong>مدیرکردار ترمیم کیا</strong><br />»%s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>مدیرکردار ختم کیا</strong><br />»%s',
	'LOG_U_ROLE_ADD'	=> '<strong>صارف کردار شامل کیا</strong><br />»%s',
	'LOG_U_ROLE_EDIT'	=> '<strong>صارف کردار ترمیم کیا</strong><br />»%s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>صارف کردارختم کیا</strong><br />»%s',
	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>پروفائل فیلڈ فعال کی</strong><br />»%s',
	'LOG_PROFILE_FIELD_CREATE'	=> '<strong>پروفائل فیلڈ شامل کی</strong><br />»%s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>پروفائل فیلڈ ٍغیر فعال کی</strong><br />»%s',
	'LOG_PROFILE_FIELD_EDIT'	=> '<strong>پروفائل فیلڈ ٍتبدیل کی</strong><br />»%s',
	'LOG_PROFILE_FIELD_REMOVED'	=> '<strong>پروفائل فیلڈ ٍحذف کی</strong><br />»%s',
	'LOG_PRUNE'	=> '<strong>فورم پرون کیے</strong><br />»%s',
	'LOG_AUTO_PRUNE'	=> '<strong>فورم خود کار پرون کیے</strong><br />»%s',
	'LOG_PRUNE_USER_DEAC'	=> '<strong>صارفین غیر فعال کیے</strong><br />»%s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>صارفین پرون اور مراسلات حذف کیے</strong><br />»%s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>صارفین پرون اور مراسلات برقرار رکھے</strong><br />»%s',
	'LOG_PURGE_CACHE'	=> '<strong>Purged cache</strong>',
	'LOG_PURGE_SESSIONS'	=> '<strong>Purged sessions</strong>',
	'LOG_RANK_ADDED'	=> '<strong>نیا درجہ شامل کیا</strong><br />»%s',
	'LOG_RANK_REMOVED'	=> '<strong>درجہ حذف کیا</strong><br />»%s',
	'LOG_RANK_UPDATED'	=> '<strong>درجہ اپ ڈیٹ کیا</strong><br />»%s',
	'LOG_REASON_ADDED'	=> '<strong>رپورٹ/ نامنظوری وجہ شامل کی</strong><br />»%s',
	'LOG_REASON_REMOVED'	=> '<strong>رپورٹ/ نامنظوری وجہ ختم کی</strong><br />»%s',
	'LOG_REASON_UPDATED'	=> '<strong>رپورٹ/ نامنظوری وجہ اپ ڈیٹ کی</strong><br />»%s',
	'LOG_REFERER_INVALID'	=> '<strong>Referer validation failed</strong><br />»Referer was “<em>%1$s</em>”. The request was rejected and the session killed.',
	'LOG_RESET_DATE'	=> '<strong>Board start date reset</strong>',
	'LOG_RESET_ONLINE'	=> '<strong>Most users online reset</strong>',
	'LOG_RESYNC_POSTCOUNTS'	=> '<strong>User post counts resynchronised</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Dotted topics resynchronised</strong>',
	'LOG_RESYNC_STATS'	=> '<strong>Post, topic and user statistics resynchronised</strong>',
	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>رپورٹ/ تلاشی فہرست بنائی، برائے</strong><br />»%s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>رپورٹ/ تلاشی فہرست حذف کی، برائے</strong><br />»%s',
	'LOG_STYLE_ADD'	=> '<strong>نیا سٹائل شامل کیا</strong><br />»%s',
	'LOG_STYLE_DELETE'	=> '<strong>سٹائل حذف کیا</strong><br />»%s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>سٹائل ترمیم کیا</strong><br />»%s',
	'LOG_STYLE_EXPORT'	=> '<strong>سٹائل ایکسپورٹ کیا</strong><br />»%s',
	'LOG_TEMPLATE_ADD_DB'	=> '<strong>ڈیٹا بیس میں‌نیا ٹیمپلیٹ شامل کیا</strong><br />»%s',
	'LOG_TEMPLATE_ADD_FS'	=> '<strong>فائل سسٹم میں‌نیا ٹیمپلیٹ شامل کیا</strong><br />»%s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Deleted cached versions of template files in template set <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'	=> '<strong> ٹیمپلیٹ سیٹ‌ حذف کیا</strong><br />»%s',
	'LOG_TEMPLATE_EDIT'	=> '<strong>Edited template set <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'	=> '<strong> ٹیمپلیٹ کی تفصیلات ترمیم کیں</strong><br />»%s',
	'LOG_TEMPLATE_EXPORT'	=> '<strong> ٹیمپلیٹ سیٹ‌ ایکسپورٹ کیا</strong><br />»%s',
	'LOG_TEMPLATE_REFRESHED'	=> '<strong> ٹیمپلیٹ سیٹ‌ ریفریش کیا</strong><br />»%s',
	'LOG_THEME_ADD_DB'	=> '<strong> ڈیٹا بیس میں‌نیا تھیم شامل کیا</strong><br />»%s',
	'LOG_THEME_ADD_FS'	=> '<strong>فائل سسٹم میں‌نیا تھیم شامل کیا</strong><br />»%s',
	'LOG_THEME_DELETE'	=> '<strong>تھیم حذف کیا</strong><br />»%s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>تھیم کی تفصیلات بدلیں</strong><br />»%s',
	'LOG_THEME_EDIT'	=> '<strong>Edited theme <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'	=> '<strong>Edited theme <em>%1$s</em></strong><br />» Modified file <em>%2$s</em>',
	'LOG_THEME_EXPORT'	=> '<strong>تھیم ایکسپورٹ کیا</strong><br />»%s',
	'LOG_THEME_REFRESHED'	=> '<strong>تھیم ریفریش کیا</strong><br />»%s',
	'LOG_UPDATE_DATABASE'	=> '<strong>Updated Database from version %1$s to version %2$s</strong>',
	'LOG_UPDATE_PHPBB'	=> '<strong>Updated phpBB from version %1$s to version %2$s</strong>',
	'LOG_USER_ACTIVE'	=> '<strong>صارف فعال کیا</strong><br />»%s',
	'LOG_USER_BAN_USER'	=> '<strong>Banned User via user management</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_IP'	=> '<strong>Banned IP via user management</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Banned e-mail via user management</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_DELETED'	=> '<strong>صارف حذف کیا</strong><br />»%s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>صارف کی تمام منسلکات حذف کیں</strong><br />»%s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>صارف کا اوتار ختم کیا</strong><br />»%s',
	'LOG_USER_DEL_OUTBOX'	=> '<strong>صارف کا آئوٹ‌باکس خالی کیا</strong><br />»%s',
	'LOG_USER_DEL_POSTS'	=> '<strong>صارف کے تمام مراسلات حذف کیے</strong><br />»%s',
	'LOG_USER_DEL_SIG'	=> '<strong>صارف کے دستخط حذف کیے</strong><br />»%s',
	'LOG_USER_INACTIVE'	=> '<strong>صارف غیر فعال ہو گیا</strong><br />»%s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Moved user posts</strong><br />» posts by “%1$s” to forum “%2$s”',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>صارف کا پاس ورڈ تبدیل ہو گیا</strong><br />»%s',
	'LOG_USER_REACTIVATE'	=> '<strong>صارف کی فعالی پر زور دیا</strong><br />»%s',
	'LOG_USER_REMOVED_NR'	=> '<strong>صارف سے نئے مندرج ارکان کا نشان ختم کیا</strong><br />»%s',
	'LOG_USER_UPDATE_EMAIL'	=> '<strong>User “%1$s” changed e-mail</strong><br />» from “%2$s” to “%3$s”',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Changed username</strong><br />» from “%1$s” to “%2$s”',
	'LOG_USER_USER_UPDATE'	=> '<strong>Updated user details</strong><br />» %s',
	'LOG_USER_ACTIVE_USER'	=> '<strong>User account activated</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>User avatar removed</strong>',
	'LOG_USER_DEL_SIG_USER'	=> '<strong>User signature removed</strong>',
	'LOG_USER_FEEDBACK'	=> '<strong>صارف رائے شامل کی</strong><br />»%s',
	'LOG_USER_GENERAL'	=> '<strong>اندراج شامل کیا</strong><br />»%s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>User account de-activated</strong>',
	'LOG_USER_LOCK'	=> '<strong>صارف نے اپنا موضوع مقفل کیا</strong><br />»%s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>تمام مراسلات فورم میں‌منتقل کیے گئے</strong><br />»%s',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>صارف اکائونٹ کی دوبارہ فعالی پر ذور دیا گیا</strong>',
	'LOG_USER_UNLOCK'	=> '<strong>صارف نے اپنا موضوع غیر مقفل کیا</strong><br />»%s',
	'LOG_USER_WARNING'	=> '<strong>Added user warning</strong><br />» %s',
	'LOG_USER_WARNING_BODY'	=> '<strong>اس صارف کو مندرجہ ذیل تنبیہ جاری کی گئی</strong><br />»%s',
	'LOG_USER_GROUP_CHANGE'	=> '<strong>اس صارف  نے طے شدہ گروہ تبدیل کیا</strong><br />»%s',
	'LOG_USER_GROUP_DEMOTE'	=> '<strong>صارف کی گروہ رہنما پر تنزلی کی گئی</strong><br />»%s',
	'LOG_USER_GROUP_JOIN'	=> '<strong>صارف گروہ میں‌شامل ہوا</strong><br />»%s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>صارف کی گروہ میں‌شمولیت کو منظوری کی ضرورت ہے</strong><br />»%s',
	'LOG_USER_GROUP_RESIGN'	=> '<strong>صارف نے گروہ سے استعفی دے دیا</strong><br />»%s',
	'LOG_WARNING_DELETED'	=> '<strong>صارف تنبیہ ختم کی گئی</strong><br />»%s',
	'LOG_WARNINGS_DELETED'	=> '<strong>Deleted %2$s user warnings</strong><br />» %1$s',
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>تما صارف تنبیہات ختم کی گئیں</strong><br />»%s',
	'LOG_WORD_ADD'	=> '<strong>سنسر لفظ شامل کیا</strong><br />»%s',
	'LOG_WORD_DELETE'	=> '<strong>سنسر لفظ حذف کیا</strong><br />»%s',
	'LOG_WORD_EDIT'	=> '<strong>سنسر لفظ ترمیم کیا</strong><br />»%s',
));

?>