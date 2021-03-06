<?php
/** 
*
* acp_board [Hebrew]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group 
* @author 2008-07-16 - phpBB הישראלי - www.phpBB.co.il
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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'כאן אתה יכול לקבוע את הגדרות המערכת הבסיסיות, לתת לה שם ותאור מתאימים, ובין היתר ערכי ברירת מחדל לאיזור זמן ושפה.',
	'CUSTOM_DATEFORMAT'				=> 'מותאם אישית…',
	'DEFAULT_DATE_FORMAT'			=> 'תבנית תאריך',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'תבנית התאריך זהה לפונקצית התאריך <code>date</code> של PHP.',
	'DEFAULT_LANGUAGE'				=> 'שפת ברירת מחדל',
	'DEFAULT_STYLE'					=> 'עיצוב ברירת מחדל',
	'DISABLE_BOARD'					=> 'כבה מערכת',
	'DISABLE_BOARD_EXPLAIN'			=> 'המערכת תהיה לא זמינה למשתמשים. תוכל גם להזין הודעה קצרה (255 תווים) התוצג אם תרצה.',
	'OVERRIDE_STYLE'				=> 'עבור על עיצוב המשתמש',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'מחליף את עיצוב המערכת לברירת המחדל.',
	'SITE_DESC'						=> 'תיאור האתר',
	'SITE_NAME'						=> 'שם האתר',
	'SYSTEM_DST'					=> 'הפעל שעון קיץ',
	'SYSTEM_TIMEZONE'				=> 'איזור זמן המערכת',
	'SYSTEM_TIMEZONE'				=> 'איזור זמן לאורחים',
	'SYSTEM_TIMEZONE_EXPLAIN'			=> 'איזור זמן המוצג למשתמשים לא מחוברים (אורחים, בוטים). משתמשים מחוברים מגדירים את איזור הזמן שלהם במהלך ההרשמה ויכולים לשנות אותו מלוח הבקרה למשתמש .',
	'WARNINGS_EXPIRE'				=> 'תקופת אזהרה',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'מספר ימים שיעברו לפני שתקופת האזהרה תסתיים אוטומטית מרשומת משתמש.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'כאן אתה יכול להפעיל/לכבות כמה מאפייני מערכת.',

	'ALLOW_ATTACHMENTS'			=> 'אפשר צירוף קבצים',
	'ALLOW_BIRTHDAYS'			=> 'אפשר ימי הולדת',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'אפשר להזין ימי הולדת והגיל יוצג בפרופילים. שים לב שרשימת ימי ההולדת אשר בעמוד הראשי מנוהלת על-ידי הגדרות כלליות נפרדות.',
	'ALLOW_BOOKMARKS'			=> 'אפשר סימון נושאים כמועדפים',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'משתמש יוכל לאחסן נושאים מועדפים אישיים.',
	'ALLOW_BBCODE'				=> 'אפשר BBCode',
	'ALLOW_FORUM_NOTIFY'		=> 'אפשר להרשם לפורומים לקבלת עדכונים',
	'ALLOW_NAME_CHANGE'			=> 'אפשר שינוי שם משתמש',
	'ALLOW_NO_CENSORS'			=> 'אפשר כיבוי צנזור המילים',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'משתמשים יוכלו לבחור לכבות את צנזור המילים האוטומטי של הודעות והודעות פרטיות.',
	'ALLOW_PM_ATTACHMENTS'		=> 'אפשר צירוף קבצים בהודעות פרטיות',
	'ALLOW_PM_REPORT'			=> 'אפשר למשתמשים לדווח על הודעות פרטיות',
	'ALLOW_PM_REPORT_EXPLAIN'	=> 'אם אפשרות זו מאופשרת, למשתמשים תיהיה האפשרות לדווח על הודעה פרטית שקיבלו או שלחו למנהלי המערכת. הודעות פרטיות אלו יוצגו בלוח הבקרה למנהלים.',
	'ALLOW_QUICK_REPLY'			=> 'אפשר תגובה מהירה',
	'ALLOW_QUICK_REPLY_EXPLAIN'	=> 'שינוי זה מאפשר לתגובה מהירה להיות מנוטרלת בכל המערכת. כשתיהיה מאופשרת הגדרה ספציפית בפורום תגדיר אם התגובה המהירה תוצג באותו הפורום.',
	'ALLOW_QUICK_REPLY_BUTTON'	=> 'טען ואפשר תגובה מהירה בכל הפורומים',
	'ALLOW_SIG'					=> 'אפשר חתימות',
	'ALLOW_SIG_BBCODE'			=> 'אפשר BBCode בחתימות המשתמשים',
	'ALLOW_SIG_FLASH'			=> 'אפשר שימוש בתג <code>[FLASH]</code> של BBCode בחתימות המשתמשים',
	'ALLOW_SIG_IMG'				=> 'אפשר שימוש בתג <code>[IMG]</code> של BBCode בחתימות המשתמשים',
	'ALLOW_SIG_LINKS'			=> 'אפשר שימוש בקישורים בחתימות המשתמשים',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'אם לא מורשה התג <code>[URL]</code> של BBCode והקישורים האוטומטיים כבויים.',
	'ALLOW_SIG_SMILIES'			=> 'אפשר שימוש בסמיילים בחתימות המשתמשים',
	'ALLOW_SMILIES'				=> 'אפשר סמיילים',
	'ALLOW_TOPIC_NOTIFY'		=> 'אפשר להרשם לנושאים לקבלת עדכונים',
	'BOARD_PM'					=> 'אפשר הודעות פרטיות',
	'BOARD_PM_EXPLAIN'			=> 'אפשר הודעות פרטיות לכל המשתמשים.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'הסמלים האישיים בדרך כלל קטנים, תמונות ייחודיות אשר המשתמשים יכולים לקבוע לעצמם. תלוי בעיצוב, הסמלים בדרך כלל מוצגים תחת שמות המשתמשים בתצוגת הנושאים. כאן אתה יכול לקבוע כיצד משתמשים יכולים להגדיר את הסמלים האישיים שלהם. שים לב שכדי להעלות סמלים אישיים אתה צריך ליצור את התיקיה אשר קראת לה בשם שמתחת ולוודא שהיא נתנת לכתיבה על-ידי השרת. שים גם לב שהגבלות גודל הקובץ חלות על סמלים אישיים שהועלו בלבד, הן אינן חלות על תמונות המקושרות מרחוק.',

	'ALLOW_AVATARS'					=> 'אפשר סמל אישי',
	'ALLOW_AVATARS_EXPLAIN'			=> 'אפשר שימוש בסמלים אישיים;<br />אם מבוטל סמלים אישיים לא יוצגו יותר במערכת, אבל משתמשים עדיין יכולו להוריד את הסמל האישי שלהם מהלוח בקרה למשתמש.',
	'ALLOW_LOCAL'					=> 'אפשר גלריית סמלים אישיים',
	'ALLOW_REMOTE'					=> 'אפשר סמלים אישיים מרחוק',
	'ALLOW_REMOTE_EXPLAIN'			=> 'סמלים אישיים המקושרים מאתר אחר.',
	'ALLOW_REMOTE_UPLOAD'			=> 'אפשר העלאת סמלים אישיים מרוחקים',
	'ALLOW_REMOTE_UPLOAD_EXPLAIN'	=> 'אפשר העלאת סמלים אישיים מאתר אחר.',
	'ALLOW_UPLOAD'					=> 'אפשר העלאת סמלים אישיים',
	'AVATAR_GALLERY_PATH'			=> 'נתיב גלריית הסמלים האישיים',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'נתיב תחת תיקית המערכת של phpBB3 לגלריית הסמלים האישיים, למשל <samp>images/avatars/gallery</samp>.',
	'AVATAR_STORAGE_PATH'			=> 'נתיב אחסון הסמלים האישיים',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'נתיב תחת תיקית המערכת של phpBB3, למשל <samp>images/avatars/upload</samp>.',
	'MAX_AVATAR_SIZE'				=> 'מימדי סמל אישי מקסימלים',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'רוחב x גובה בפיקסלים.',
	'MAX_FILESIZE'					=> 'גודל קובץ לסמל אישי מירבי',
	'MAX_FILESIZE_EXPLAIN'			=> 'לקבצי סמלים אישיים שהועלו.',
	'MIN_AVATAR_SIZE'				=> 'מימדי סמל אישי מינימלים',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'רוחב x גובה בפיקסלים.',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'כאן אתה יכול לקבוע את כל הגדרות להודעות הפרטיות.',

	'ALLOW_BBCODE_PM'			=> 'אפשר BBCode בהודעות פרטיות',
	'ALLOW_FLASH_PM'			=> 'אפשר שימוש בתג <code>[FLASH]</code> של BBCode',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'שים לב שהאפשרות להשתמש בפלאש בהודעות פרטיות, אם פעיל כאן, תלויה גם בהרשאות.',
	'ALLOW_FORWARD_PM'			=> 'אפשר העברת הודעות פרטיות',
	'ALLOW_IMG_PM'				=> 'אפשר שימוש בתג <code>[IMG]</code> של BBCode',
	'ALLOW_MASS_PM'				=> 'אפשר שליחת הודעות פרטיות למספר משתמשים וקבוצות',
	'ALLOW_MASS_PM_EXPLAIN'      => 'שליחה לקבוצות יכולה להיות מותאמת לכל קבוצה מעמוד הגדרות הקבוצה.',
	'ALLOW_PRINT_PM'			=> 'אפשר תצוגה לפני הדפסה בהודעות פרטיות',
	'ALLOW_QUOTE_PM'			=> 'אפשר ציטוטים בהודעות פרטיות',
	'ALLOW_SIG_PM'				=> 'אפשר חתימה בהודעות פרטיות',
	'ALLOW_SMILIES_PM'			=> 'אפשר סמיילים בהודעות פרטיות',
	'BOXES_LIMIT'				=> 'מספר הודעות פרטיות מירבי לכל תיבה',
	'BOXES_LIMIT_EXPLAIN'		=> 'משתמשים לא יכולים לקבל יותר הודעות ממספר זה בכל אחת מתיבות ההודעות הפרטיות. קבע ערך זה ל0 על מנת לאפשר הודעות ללא הגבלה.',
	'BOXES_MAX'					=> 'מספר תיקיות להודעות פרטיות מירבי',
	'BOXES_MAX_EXPLAIN'			=> 'כברירת מחדל משתמשים יכולים ליצור מספר זה של תיבות להודעות הפרטיות.',
	'ENABLE_PM_ICONS'			=> 'הפעל שימוש באייקונים של נושאים בהודעות פרטיות',
	'FULL_FOLDER_ACTION'		=> 'פעולה כברירת מחדל במקרה והתיקיה מלאה',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'פעולה לביצוע כברירת מחדל אם תיקית המשתמש מלאה במידה ופעולת התיקיה של המשתמש, אם נקבעה בכלל, אינה ישימה. היוצא מהכלל היחיד הוא של התיקיה “הודעות שנשלחו” בה פעולת ברירת המחדל היא תמיד למחוק הודעות ישנות.',
	'HOLD_NEW_MESSAGES'			=> 'החזק הודעות חדשות',
	'PM_EDIT_TIME'				=> 'הגבלת זמן עריכה',
	'PM_EDIT_TIME_EXPLAIN'		=> 'מגביל את הזמן הזמין לעריכת הודעה פרטית אשר עדיין לא נמסרה. קבע ערך זה ל0 על מנת לכבות אפשרות זו.',
	'PM_MAX_RECIPIENTS'			=> 'מספר מירבי של נמענים מורשים',
	'PM_MAX_RECIPIENTS_EXPLAIN'	=> 'המספר המירבי של נמענים המורשים בהודעה פרטית. קבע ערך זה ל0 על מנת לקבוע מספר בלתי מוגבל. הגדרה זו יכולה להיות מותאמת לכל קבוצה מעמוד הגדרות הקבוצה.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'כאן אתה יכול לקבוע את כל הגדרות השליחה.',
	'ALLOW_POST_LINKS'					=> 'אפשר קישורים בהודעות/הודעות פרטיות',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'אם לא מורשה התג <code>[URL]</code> של BBCode והקישורים האוטומטיים כבויים',
	'ALLOW_POST_FLASH'					=> 'אפשר שימוש בתג <code>[FLASH]</code> של BBCode בהודעות. ',
	'ALLOW_POST_FLASH_EXPLAIN'			=> 'אם לא מורשה התג <code>[FLASH]</code> של BBCode כבוי בהודעות. אחרת מערכת ההרשאות שולטת על המשתמשים אשר יכולים להשתמש בתג <code>[FLASH]</code> של BBCode.',
	
	'BUMP_INTERVAL'					=> 'השהיית הקפצה',
	'BUMP_INTERVAL_EXPLAIN'			=> 'מספר דקות, שעות או ימים בין ההודעה האחרונה לנושא והיכולת להקפיץ את הנושא. קביעת ערך זה ל0 מבטלת אפשרות זו',
	'CHAR_LIMIT'					=> 'מספר תווים מירבי לכל הודעה',
	'CHAR_LIMIT_EXPLAIN'			=> 'מספר התווים המורשה בהודעה. קבע ערך זה ל0 למספר תווים לא מוגבל.',
	'DELETE_TIME'					=> 'הגבל זמן מחיקה',
	'DELETE_TIME_EXPLAIN'			=> 'מגביל את הזמן האפשרי למחיקת הודעה חדשה. קבע ערך זה ל0 לביטול אפשרות זו.',
	'DISPLAY_LAST_EDITED'			=> 'הצג פרטי זמן העריכה האחרונה',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'בחר אם להציג את פרטי העריכה האחרונה בהודעות.',
	'EDIT_TIME'						=> 'הגבל זמן עריכה',
	'EDIT_TIME_EXPLAIN'				=> 'מגביל את הזמן הזמין לעריכת הודעה חדשה. קבע ערך זה ל0 על מנת לכבות אפשרות זו.',
	'FLOOD_INTERVAL'				=> 'השהיית הצפה',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'מספר שניות אשר משתמש חייב להמתין בין שליחת הודעות חדשות. כדי לאפשר למשתמשים להתעלם מההשהייה, שנה את ההרשאות שלהם.',
	'HOT_THRESHOLD'					=> 'מספר הודעות לנושא חם',
	'HOT_THRESHOLD_EXPLAIN'			=> 'מספר הודעות לכל נושא עד שהוא הופך לנושא חם. קבע ערך זה ל0 על מנת לכבות אפשרות זו.',
	'MAX_POLL_OPTIONS'				=> 'מספר מירבי של אפשרויות סקר',
	'MAX_POST_FONT_SIZE'			=> 'גודל גופן מירבי לכל הודעה',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'גודל הגופן המירבי המורשה בהודעה.  כאשר 0 הינו לא מוגבל.',
	'MAX_POST_IMG_HEIGHT'			=> 'גובה תמונה מירבי לכל הודעה',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'גובה מירבי של תמונה/קובץ פלאש בהודעות.  כאשר 0 הינו לא מוגבל.',
	'MAX_POST_IMG_WIDTH'			=> 'רוחב תמונה מירבי לכל הודעה',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'רוחב מירבי של תמונה/קובץ פלאש בהודעות.  כאשר 0 הינו לא מוגבל.',
	'MAX_POST_URLS'					=> 'מספר קישורים מירבי לכל הודעה',
	'MAX_POST_URLS_EXPLAIN'			=> 'מספר מירבי של קישורים בהודעה.  כאשר 0 הינו לא מוגבל.',
	'MIN_CHAR_LIMIT'				=> 'מספר תווים מינימלי להודעה',
	'MIN_CHAR_LIMIT_EXPLAIN'		=> 'מספר התווים המינימלי שמשתמש צריך לכתוב בהודעה/הודעה פרטית.',
	'POSTING'						=> 'שליחה',
	'POSTS_PER_PAGE'				=> 'הודעות לכל עמוד',
	'QUOTE_DEPTH_LIMIT'				=> 'כמות מירבית לציטוטים בתוך ציטוטים.',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'כמות מירבית לציטוטים בתוך ציטוטים בהודעה. כאשר 0 הינו לא מוגבל.',
	'SMILIES_LIMIT'					=> 'מספר סמיילים מירבי לכל הודעה',
	'SMILIES_LIMIT_EXPLAIN'			=> 'מספר מירבי של סמיילים בהודעה. כאשר 0 הינו לא מוגבל.',
	'SMILIES_PER_PAGE'				=> 'סמיילים לעמוד',
	'TOPICS_PER_PAGE'				=> 'נושאים לכל עמוד',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'כאן אתה יכול לקבוע את כל ההגדרות לחתימות.',

	'MAX_SIG_FONT_SIZE'				=> 'גודל גופן לחתימה מירבי',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'גודל גופן מירבי המורשה בחתימות המשתמשים. כאשר 0 הינו לא מוגבל.',
	'MAX_SIG_IMG_HEIGHT'			=> 'גובה תמונה מירבי לחתימה',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'גובה מירבי של תמונה/קובץ פלאש בחתימות המשתמשים. כאשר 0 הינו לא מוגבל.',
	'MAX_SIG_IMG_WIDTH'				=> 'רוחב תמונה מירבי לחתימה',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'רוחב מירבי של תמונה/קובץ פלאש בחתימות המשתמשים. כאשר 0 הינו לא מוגבל.',
	'MAX_SIG_LENGTH'				=> 'אורך חתימה מירבי',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'מספר מירבי של תווים בחתימות המשתמשים.',
	'MAX_SIG_SMILIES'				=> 'מספר סמיילים מירבי לכל חתימה',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'מספר מירבי של סמיילים המורשה בחתימות המשתמשים. כאשר 0 הינו לא מוגבל.',
	'MAX_SIG_URLS'					=> 'מספר קישורים מירבי לחתימה',
	'MAX_SIG_URLS_EXPLAIN'			=> 'מספר מירבי של קישורים בחתימות המשתמשים. כאשר 0 הינו לא מוגבל.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'כאן אתה יכול להגדיר את ההגדרות הקשורות להרשמה ולפרופיל.',

	'ACC_ACTIVATION'			=> 'הפעלת חשבון',
	'ACC_ACTIVATION_EXPLAIN'	=> 'קובע אם למשתמשים תהיה הרשאה מיידית למערכת או אם נדרש אישור. תוכל גם לכבות לגמרי הרשמות חדשות.',
	'NEW_MEMBER_POST_LIMIT'			=> 'הגבלת ההודעות למשתמש חדש',
	'NEW_MEMBER_POST_LIMIT_EXPLAIN'	=> 'משתמשים חדשים נמצאים בקבוצת ה<em>משתמשים שנרשמו לאחרונה</em> עד שהם מגיעים למספר הודעות זה. תוכל להשתמש בקבוצה זו על מנת למנוע מהם להשתמש במערכת ההודעות הפרטיות או כדי לעקוב אחר הודעותיהם. <strong>קבע ערך זה ל0 על מנת לכבות אפשרות זו.</strong>',
	'NEW_MEMBER_GROUP_DEFAULT'		=> 'הגדר את קבוצת המשתמשים שנרשמו לאחרונה כברירת מחדל',
	'NEW_MEMBER_GROUP_DEFAULT_EXPLAIN'	=> 'אם תגדיר לכן, וקיימת הגבלת הודעות למשתמש חדש, משתמשים שנרשמו לאחרונה לא רק יוכנסו לקבוצת ה<em>משתמשים שנרשמו לאחרונה</em>, הקבוצה תהפוך לקבוצת ברירת המחדל שלהם. אפשרות זו יכולה להיות יעילה אם אתה רוצה להגדיר לקבוצה דירוג ו/או סמל אישי שהמשתמש יקבל.',
	'ACC_ADMIN'					=> 'על-ידי מנהל ראשי',
	'ACC_DISABLE'				=> 'כבה',
	'ACC_NONE'					=> 'ללא',
	'ACC_USER'					=> 'על-ידי משתמש',
//	'ACC_USER_ADMIN'			=> 'משתמש + מנהל ראשי',
	'ALLOW_EMAIL_REUSE'			=> 'אפשר שימוש חוזר בכתובת דואר אלקטרוני',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'משתמשים שונים יכולים להרשם עם אותה כתובת דואר אלקטרוני.',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'מספר פקס',
	'COPPA_MAIL'				=> 'כתובת דואר',
	'COPPA_MAIL_EXPLAIN'		=> 'זוהי כתובת הדואר אליה ההורים ישלחו את טפסי ההרשמה.',
	'ENABLE_COPPA'				=> 'הפעל COPPA',
	'ENABLE_COPPA_EXPLAIN'		=> 'דורש מהמשתמשים לציין אם הם מתחת לגיל 13 או מעל לציות ל COPPA. אם כבוי, אפשרויות ה COPPA המסוימות לא יוצגו יותר בהרשמה.',
	'MAX_CHARS'					=> 'מקסימום',
	'MIN_CHARS'					=> 'מינימום',
	'NO_AUTH_PLUGIN'			=> 'לא נמצאה הרשאת חיבור מתאימה.',
	'PASSWORD_LENGTH'			=> 'אורך סיסמה',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'מספר מינימלי ומקסימלי של תווים בסיסמאות.',
	'REG_LIMIT'					=> 'נסיונות הרשמה',
	'REG_LIMIT_EXPLAIN'			=> 'מספר הנסיונות שמשתמשים יכולים לנסות לפתור את המבחן-בוט לפני שהם ינעלו בחוץ בחיבור זה.',
	'USERNAME_ALPHA_ONLY'		=> 'אותיות באנגלית וספרות בלבד',
	'USERNAME_ALPHA_SPACERS'	=> 'אותיות באנגלית, ספרות וסימנים מיוחדים',
	'USERNAME_ASCII'			=> 'ASCII (לא קידוד רשמי)',
	'USERNAME_LETTER_NUM'		=> 'כל תו ומספר',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'כל תו, מספר, וסימן מיוחד',
	'USERNAME_CHARS'			=> 'הגבלת תווים לשם משתמש',
	'USERNAME_CHARS_ANY'		=> 'כל תו',
	'USERNAME_CHARS_EXPLAIN'	=> 'מגביל את סוג התווים הניתן לשימוש בשמות המשתמשים, הסימנים המיוחדים הם: רווח, -, +, _, [ ו ].',
	'USERNAME_LENGTH'			=> 'אורך שם משתמש',
	'USERNAME_LENGTH_EXPLAIN'	=> 'מספר מינימלי ומקסימלי של תווים בשמות המשתמשים.',
));

// Feeds
$lang = array_merge($lang, array(
	'ACP_FEED_MANAGEMENT'				=> 'הגדרות כלליות להפצת ההזנות',
	'ACP_FEED_MANAGEMENT_EXPLAIN'		=> 'מודול זה מאפשר מגוון הזנות  ATOM לזמינות, ניתוח כל BBCode בהודעות כדי להפוך אותם לקריאות בהזנות חיצוניות.',

	'ACP_FEED_GENERAL'					=> 'הגדרות כלליות להזנות',
	'ACP_FEED_POST_BASED'				=> 'הגדרת הזנות מבוססות הודעה',
	'ACP_FEED_TOPIC_BASED'				=> 'הגדרת הזנות מבוססות נושא',
	'ACP_FEED_SETTINGS_OTHER'			=> 'הזנות אחרות והגדרות',
	
	'ACP_FEED_ENABLE'					=> 'אפשר הזנות',
	'ACP_FEED_ENABLE_EXPLAIN'			=> 'מפעיל או מכבה את הזנות הATOM לכל המערכת.<br />כיבוי יכבה את כל ההזנות, ללא קשר לאפשרויות מתחת ולהגדרתם.',
	'ACP_FEED_LIMIT'					=> 'מספר פריטים להזנה',
	'ACP_FEED_LIMIT_EXPLAIN'			=> 'מספר מקסימאלי של פריטים בהזנה שיוצג.',

	'ACP_FEED_OVERALL'					=> 'אפשר הזנות לכל המערכת',
	'ACP_FEED_OVERALL_EXPLAIN'			=> 'הודעות חדשות במערכת.',
	'ACP_FEED_FORUM'					=> 'אפשר הזנות לפי פורום',
	'ACP_FEED_FORUM_EXPLAIN'			=> 'הודעות חדשות בפורום מסויים ותת פורומים.',
	'ACP_FEED_TOPIC'					=> 'אפשר הזנות לפי נושא',
	'ACP_FEED_TOPIC_EXPLAIN'			=> 'הודעות חדשות בנושא מסויים.',
	
	'ACP_FEED_TOPICS_NEW'				=> 'אפשר הזנות לנושאים חדשים',
	'ACP_FEED_TOPICS_NEW_EXPLAIN'		=> 'מאפשר את הזנות ל”נושאים חדשים“, אשר מציג את הנושאים שנוצרו לאחרונה כולל ההודעה הראשונה.',
	'ACP_FEED_TOPICS_ACTIVE'			=> 'אפשר הזנות לנושאים פעילים',
	'ACP_FEED_TOPICS_ACTIVE_EXPLAIN'	=> 'מאפשר הזנות ל”נושאים פעילים“, אשר מציג את הנושאים את הנושאים הפעילים לאחרונה כולל ההודעה האחרונה.',
	'ACP_FEED_NEWS'						=> 'הזנות חדשות',
	'ACP_FEED_NEWS_EXPLAIN'				=> 'מושך את ההודעה הראשונה מפורומים אלו. אל תבחר בפורומים בשביל לבטל הזנות חדשות .<br />בחר בכמה פורומים על ידי לחיצה על <samp>CTRL</samp> ולחיצה בעכבר.',
	
	'ACP_FEED_OVERALL_FORUMS'			=> 'אפשר הזנות פורומים',
	'ACP_FEED_OVERALL_FORUMS_EXPLAIN'   => 'מאפשר הזנות ל”כל הפורומים“, אשר מציג רשימה של פורומים.',
	
	'ACP_FEED_HTTP_AUTH'				=> 'אפשר אימות HTTP ',
	'ACP_FEED_HTTP_AUTH_EXPLAIN'		=> 'מאפשר אימות HTTP, אשר מאפשר למשתמשים לקבל  תוכן אשר מוסתר מאורחים על ידי הוספת משתנה <samp>auth=http</samp> להזנת הכתובת. אנא שים לב שחלק ממערכי PHP דורשים שינויים נוספים בקובץ .htaccess. הוראות ניתן למצוא באותו הקובץ.',
	'ACP_FEED_ITEM_STATISTICS'			=> 'סטטיסטיקת פרטים',
	'ACP_FEED_ITEM_STATISTICS_EXPLAIN'	=> 'הצג סטטיסטיקה מתחת לפרטי ההזנות<br />(לדוגמא נשלח על ידי, תאריך וזמן, תגובות, צפיות)',
	'ACP_FEED_EXCLUDE_ID'				=> 'דחה פורומים אלה',
	'ACP_FEED_EXCLUDE_ID_EXPLAIN'		=> 'תוכן מפורומים אלה <strong>לא יכלל בהזנות</strong>. אל תבחר בפורומים כדי למשוך מידע מכל הפורומים.<br />בחר בכמה פורומים על ידי לחיצה על <samp>CTRL</samp> ולחיצה בעכבר.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
		'ACP_VC_SETTINGS_EXPLAIN'				=> 'כאן אתה יכול לבחור ולהגדיר תוספות, אשר ייעודן לחסום בוטים משלוח טפסים אוטומטית. תוספות אלו בדרך כלל עובדות על ידי כך שהן מאתגרות את המשתמשים עם <em>CAPTCHA</em>, מבחן שנועד להיות מסובך לפתרון של מחשבים.',
	'AVAILABLE_CAPTCHAS'					=> 'תוספות זמינות',
	'CAPTCHA_UNAVAILABLE'					=> 'התוספת לא ניתנת לבחירה מכיוון שהדרישות שלה לא נענו.',
	'CAPTCHA_GD'							=> 'ספריה גראפית',
	'CAPTCHA_GD_3D'							=> 'ספריה גראפית תלת מימדית',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'רעש רקע קדמי',
	'CAPTCHA_GD_EXPLAIN'					=> 'השתמש בספריה גראפית כדי לעשות תמונת אנטי-בוט מתקדמת יותר.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'השתמש ברעש רקע קדמי כדי לגרום לתמונה להיות קשה יותר לקריאה.',
	'CAPTCHA_GD_X_GRID'						=> 'רעש רקע בציר x',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'השתמש בהגדרות נמוכות יותר כדי לגרום לתמונה להיות קשה יותר לקריאה. 0 יכבה את רעש הרקע של ציר ה x.',
	'CAPTCHA_GD_Y_GRID'						=> 'ררעש רקע בציר y',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'השתמש בהגדרות נמוכות יותר כדי לגרום לתמונה להיות קשה יותר לקריאה. 0 יכבה את רעש הרקע של ציר ה y.',
	'CAPTCHA_GD_WAVE'                  => 'גל עיוות',
	'CAPTCHA_GD_WAVE_EXPLAIN'            => 'אפשרות זו מוסיפה גל עיוות לתמונה.',
	'CAPTCHA_GD_3D_NOISE'               => 'הוסף אובייקטי רעש תלת מימדיים',
	'CAPTCHA_GD_3D_NOISE_EXPLAIN'         => 'אפשרות זו מוסיפה אובייקטים לתמונה, מעל האותיות.',
	'CAPTCHA_GD_FONTS'                  => 'השתמש בגופנים שונים',
	'CAPTCHA_GD_FONTS_EXPLAIN'            => 'הגדרה זו מאפשרת לשנות את כמות סוגי הצורות השונות שיהיו בשימוש באותיות. תוכל להשתמש בצורות ברירת המחדל בלבד או להציג אותיות שונות. הוספת אותיות לועזיות קטנות אפשרית גם כן.',
	'CAPTCHA_FONT_DEFAULT'               => 'ברירת מחדל',
	'CAPTCHA_FONT_NEW'                  => 'צורות חדשות',
	'CAPTCHA_FONT_LOWER'               => 'השתמש גם באותיות קטנות',
	'CAPTCHA_NO_GD'							=> 'תמונה פשוטה',
	'CAPTCHA_PREVIEW_MSG'					=> 'השינויים שלך לא נשמרו, זו היא רק תצוגה מקדימה.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'התוסף כפי שיראה בשימוש בבחירות הנוכחיות.',

	'CAPTCHA_SELECT'						=> 'התקן תוספות',
	'CAPTCHA_SELECT_EXPLAIN'				=> 'התפריט הנפתח מכיל את התוספות המזוהות על ידי המערכת. ערכים אפורים לא זמינים כרגע ויתכן ויזדקקו להגדרות לפני השימוש.',
	'CAPTCHA_CONFIGURE'						=> 'הגדרת תוספות',
	'CAPTCHA_CONFIGURE_EXPLAIN'				=> 'שנה את ההגדרות לתוספת שנבחרה.',
	'CONFIGURE'								=> 'הגדר',
	'CAPTCHA_NO_OPTIONS'					=> 'לתוספות זו אין אפשרויות מוגדרות.',

	'VISUAL_CONFIRM_POST'					=> 'אפשר שימוש באמצעים כנגד בוטים להודעות אורחים',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'דורש ממשתמשים לא רשומים לעבור מבחן אנטי-בוט כדי למנוע שליחת הודעות אוטמטית.',
	'VISUAL_CONFIRM_REG'					=> 'אפשר שימוש באמצעים כנגד בוטים לרישומים',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'דורש ממשתמשים חדשים לעבור מבחן אנטי-בוט כדי למנוע רישומים אוטומטים.',
	'VISUAL_CONFIRM_REFRESH'				=> 'אפשר למשתמשים לרענן את מבחן האנטי-בוט',
	'VISUAL_CONFIRM_REFRESH_EXPLAIN'		=> 'מאפשר למשתמשים לבקש מבחן אנטי-בוט חדש אם הם לא מצליחים לפתור את המבחן הנוכחי במהלך ההרשמה. יכול להיות שישנם תוספות שלא תומכים באפשרות זו.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'פרטים אלו מגדירים את הנתונים אשר בשימוש לשליחת עוגיות לדפדפני המשתמשים. ברוב המקרים ערכי ברירת המחדל להגדרות העוגיה צריכים להיות מספיקים. אם אתה צריך לשנות משהו, עשה זאת בזהירות, הגדרות לא נכונות יכולות למנוע מהמשמשים להתחבר.',

	'COOKIE_DOMAIN'				=> 'כתובת העוגיה',
	'COOKIE_NAME'				=> 'שם העוגיה',
	'COOKIE_PATH'				=> 'נתיב העוגיה',
	'COOKIE_SECURE'				=> 'אבטחת עוגיה',
	'COOKIE_SECURE_EXPLAIN'		=> 'אם השרת שלך רץ דרך SSL, קבע לפעיל, אחרת השאר כבוי. במידה ומופעל ושרת אינו רץ דרך SSL, התוצאה תהיה שגיאות שרת בהעברות.',
	'ONLINE_LENGTH'				=> 'משך זמן לתצוגה ברשימת מחוברים',
	'ONLINE_LENGTH_EXPLAIN'		=> 'מספר דקות שאחריהם משתמשים לא פעילים לא יופיעו ברשימות “מי מחובר”. הערך הגבוה ביותר הוא הטוב ביותר לתהליך יצירת הרשימה.',
	'SESSION_LENGTH'			=> 'אורך חיבור',
	'SESSION_LENGTH_EXPLAIN'	=> 'חיבורים יסתיימו אחרי זמן זה, בשניות.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'כאן אתה יכול להפעיל או לכבות אפשרויות מערכת מסויימות כדי להקטין את זמן הטעינה הנדרש. ברוב השרתים אין צורך לכבות אף אפשרות, אך במערכות מסויימות או בסביבות אחסון משותפות כיבוי האפשרויות שאינך באמת צריך יכולה להיות מועיל. תוכל גם לציין הגבלות לטעינת המערכת וחיבורים פעילים שמעבר המערכת תכבה.',

	'CUSTOM_PROFILE_FIELDS'			=> 'שדות פרופיל מותאמים אישית',
	'LIMIT_LOAD'					=> 'הגבל טעינת מערכת',
	'LIMIT_LOAD_EXPLAIN'			=> 'אם ממוצע הטעינה של המערכת בדקה עובר ערך זה המערכת תכובה אוטומטית. הערך 1.0 שווה לניצול של ~100% של מבצע אחד. אפשרויות אלו חלות רק על UNIX מבוסס שרתים והיכן שהמידע נגיש. הערך מתאפס ל 0 אם phpBB לא יכלה לקבל את הגבלת הטעינה.',
	'LIMIT_SESSIONS'				=> 'הגבל חיבורים',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'אם מספר החיבורים חורג את ערך זה במשך תקופת זמן של דקה המערכת תכובה. הגדר ל0 לחיבורים בלתי מוגבלים.',
	'LOAD_CPF_MEMBERLIST'			=> 'אפשר לעיצובים להציג שדות פרופיל מותאמים אישית ברשימת המשתמשים',
	'LOAD_CPF_VIEWPROFILE'			=> 'הצג שדות פרופיל מותאמים אישית בפרופילי המשתמשים',
	'LOAD_CPF_VIEWTOPIC'			=> 'הצג שדות פרופיל מותאמים אישית בעמודי הנושאים',
	'LOAD_USER_ACTIVITY'			=> 'הצג פעילות משתמש',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'הצג נושא/פורום פעיל בפרופילי המשתמשים ולוח הבקרה למשתמש. מומלץ לכבות במערכות עם יותר ממליון הודעות.',
	'RECOMPILE_STYLES'				=> 'ערוך מחדש רכיבי עיצוב ישנים',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'בדוק לרכיבי עיצוב מעודכנים במערכת הקבצים וערוך מחדש.',
	'YES_ANON_READ_MARKING'			=> 'הפעל סימון נושאים לאורחים',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'מאחסן פרטי מצב נקרא/לא נקרא לאורחים. אם כבוי, ההודעות תמיד יסומנו כנקראו לאורחים.',
	'YES_BIRTHDAYS'					=> 'הפעל רשימת ימי הולדת',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'אם כבוי רשימת ימי ההולדת לא תוצג יותר. כדי שהגדרה זו תפעל מאפיין ימי ההולדת חייב להיות פעיל.',
	'YES_JUMPBOX'					=> 'הקפץ חלון התראה על הודעות פרטיות חדשות',
	'YES_MODERATORS'				=> 'הפעל תצוגת מנהלי פורומים',
	'YES_ONLINE'					=> 'הפעל רשימות משתמשים מחוברים',
	'YES_ONLINE_EXPLAIN'			=> 'הצג פרטי חיבור משתמש בעמוד הראשי, בפורום ובעמודי הנושאים.',
	'YES_ONLINE_GUESTS'				=> 'הפעל רשימות אורחים מחוברים במי מחובר',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'אפשר תצוגת פרטי אורחים במי מחובר.',
	'YES_ONLINE_TRACK'				=> 'הפעל תצוגת פרטי מחובר/מנותק של משתמש',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'הצג פרטי חיבור של משתמשים בפרופילים ובעמודי הנושאים.',
	'YES_POST_MARKING'				=> 'הפעל נושאים מסומנים',
	'YES_POST_MARKING_EXPLAIN'		=> 'מציין אם המשתמש שלח לנושא.',
	'YES_READ_MARKING'				=> 'הפעל סימון נושא בצד שרת',
	'YES_READ_MARKING_EXPLAIN'		=> 'מאחסן פרטי מצב נקרא/לא נקרא בבסיס הנתונים במקום בעוגיה.',
	'YES_UNREAD_SEARCH'				=> 'אפשר חיפוש להודעות שלא נקראו',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB3 תומכת בתוספות אימות, או מודולים. הן מאפשרות לך לקבוע כיצד משתמשים מאומתים כאשר הם מתחברים למערכת. כברירת מחדל שלושה תוספות מסופקות; DB, LDAP ו Apache. לא כל התוספות דורשות מידע נוסף כך שהשלם רק את השדות אשר קשורות לשיטה הנבחרת.',

	'AUTH_METHOD'				=> 'בחר שיטת אימות',

	'APACHE_SETUP_BEFORE_USE'	=> 'אתה צריך להתקין אימות apache לפני שתחליף את phpBB3 לשיטת אימות זו. זכור ששם המשתמש שלך לאימות apache חייב להיות זהה לשם המשתמש שלך ב phpBB3. אימות Apache ניתן לשימוש רק עם mod_php (לא עם גרסת CGI) ו safe_mode כבויים.',

	'LDAP_DN'						=> 'LDAP מבוסס <var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> 'זהו השם הנבחן, הנמצא בפרטי המשתמש, למשל <samp>o=My Company,c=US</samp>.',
	'LDAP_EMAIL'					=> 'תכונת דואר אלקטרוני של LDAP',
	'LDAP_EMAIL_EXPLAIN'			=> 'קבע לשם של תכונת הדואר האלקטרוני של רישום המשתמש (אם אחד קיים) כדי לקבוע אוטומטית את כתובת הדואר האלקטרוני למשתמשים חדשים. השארת השדה ריק תגרום לכתובת דואר אלקטרוני ריקה למשתמשים אשר מתחברים בפעם הראשונה.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'קישור לשרת LDAP נכשל עם המשתמש/הסיסמה שצויינו.',
	'LDAP_NO_EMAIL'					=> 'תכונת הדואר האלקטרוני שצוינה לא קיימת.',
	'LDAP_NO_IDENTITY'				=> 'לא ניתן למצוא זיהוי חיבור ל %s.',
	'LDAP_PASSWORD'					=> 'סיסמה ל LDAP',
	'LDAP_PASSWORD_EXPLAIN'			=> 'השאר ריק כדי להשתמש בגישה אנונימית. אחרת מלא את הסיסמה למשתמש שמעל. נדרש לשרתי תיקיה פעילים.<br /><em><strong>אזהרה:</strong> הסיסמה תאוחסן כטקסט פשוט בבסיס הנתונים, ותוצג לכל אחד אשר יכול לגשת לבסיס הנתונים או אשר יכול לצפות בעמוד ההגדרות.</em>',
	'LDAP_PORT'						=> 'יציאת שרת LDAP',
	'LDAP_PORT_EXPLAIN'				=> 'תוכל לציין יציאה אשר בשימוש להתחברות לשרת LDAP במקום ביציאת ברירת המחדל 389.',
	'LDAP_SERVER'					=> 'שם שרת LDAP',
	'LDAP_SERVER_EXPLAIN'			=> 'אם בשימוש LDAP זהו שם השרת או כתובת ה IP של שרת ה LDAP. לחילופין אתה יכול לציין כתובת כמו ldap://hostname:port/',
	'LDAP_UID'						=> '<var>uid</var> של LDAP',
	'LDAP_UID_EXPLAIN'				=> 'זהו ההמפתח אשר בשימוש לחיפוש זיהוי ההתחברות הנתון, למשל <var>uid</var>, <var>sn</var>, וכד\'.',
	'LDAP_USER'						=> 'משתמש <var>dn</var> ל LDAP',
	'LDAP_USER_EXPLAIN'				=> 'השאר ריק לשימוש בגישה אנונימית. אם הוזן, phpBB3 תשתמש בשם הנבחן בנסיונות התחברות כדי למצוא את המשתמש הנכון, למשל <samp>uid=Username,ou=MyUnit,o=MyCompany,c=US</samp>. נדרש לשרתי תיקיה פעילים.',
	'LDAP_USER_FILTER'				=> 'מסנן משתמש LDAP',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'תוכל להגביל יותר את הפריטים שבחיפוש בעזרת מסננים נוספים. לדוגמה <samp>objectClass=posixGroup</samp> יגרום לשימוש ב <samp>(&amp;(uid=$username)(objectClass=posixGroup))</samp>',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'כאן אתה יכול להגדיר הגדרות שרת ודומיין. וודא שהמידע שאתה מזין נכון, שגיאות יגרמו בפרטים לא נכונים ליצירת קשר דרך דואר אלקטרוני. בעת הזנת שם המתחם זכור שהוא חייב לכלול http:// או פרוטוקול אחר. שנה את מספר היציאה רק אם אתה יודע שהשרת שלך משתמש בערך אחר, היציאה 80 נכונה ברוב המקרים.',

	'ENABLE_GZIP'				=> 'הפעל דחיסת GZip',
	'ENABLE_GZIP_EXPLAIN'		=> 'תוכן הנוצר יקובץ לפני שליחתו למשתמש. ניתן לחסוך כך בתעבורת רשת אך גם יגדל השימוש במעבד בצד הלקוח ובצד השרת. נדרש שהרחבת zlib PHP תיהיה טעונה.',
	'FORCE_SERVER_VARS'			=> 'דרוש הגדרות כתובת שרת',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'אם נקבע לכן הגדרות השרת המוגדרות כאן יקבלו עדיפות על הערכים אשר נקבעו אוטומטית.',
	'ICONS_PATH'				=> 'נתיב אחסון האייקונים להודעות',
	'ICONS_PATH_EXPLAIN'		=> 'נתיב תחת תיקית המערכת של phpBB3, למשל <samp>images/icons</samp>.',
	'PATH_SETTINGS'				=> 'הגדרות נתיב',
	'RANKS_PATH'				=> 'נתיב אחסון תמונות הדירוג',
	'RANKS_PATH_EXPLAIN'		=> 'נתיב תחת תיקית המערכת של phpBB3, למשל <samp>images/ranks</samp>.',
	'SCRIPT_PATH'				=> 'נתיב המערכת',
	'SCRIPT_PATH_EXPLAIN'		=> 'הנתיב בו מערכת phpBB3 נמצאת יחסית לשם המתחם, למשל <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> 'שם מתחם',
	'SERVER_NAME_EXPLAIN'		=> 'שם המתחם בה המערכת פועלת (לדוגמה: <samp>www.example.com</samp>).',
	'SERVER_PORT'				=> 'יציאת שרת',
	'SERVER_PORT_EXPLAIN'		=> 'היציאה דרכה השרת פועל, בדרך כלל 80, שנה רק אם שונה.',
	'SERVER_PROTOCOL'			=> 'פרוטוקול השרת',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'בשימוש בתור פרוטוקול השרת אם הגדרות אלו נדרשות. אם ריק או לא נדרש, הפרוטוקול נקבע על-ידי הגדרות אבטחת העוגיה (<samp>http://</samp> או <samp>https://</samp>).',
	'SERVER_URL_SETTINGS'		=> 'הגדרות כתובת שרת',
	'SMILIES_PATH'				=> 'נתיב אחסון הסמיילים',
	'SMILIES_PATH_EXPLAIN'		=> 'נתיב תחת תיקית המערכת של phpBB3, למשל <samp>images/smilies</samp>.',
	'UPLOAD_ICONS_PATH'			=> 'נתיב אחסון קבוצת הסיומות לאייקונים',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'נתיב תחת תיקית המערכת של phpBB3, למשל <samp>images/upload_icons</samp>.',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'כאן אתה יכול להגדיר הגדרות הקשורות לחיבורים והתחברויות.',

	'ALL'							=> 'הכל',
	'ALLOW_AUTOLOGIN'				=> 'אפשר חיבורים תמידיים', 
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'קובע אם המשתמשים יכולים להתחבר אוטומטית כאשר הם מבקרים במערכת.', 
	'AUTOLOGIN_LENGTH'				=> 'אורך החיבור התמידי (בימים)', 
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'מספר ימים אשר אחריהם החיבור התמידי נמחק או אפס כדי לכבות.', 
	'BROWSER_VALID'					=> 'אשר דפדפן',
	'BROWSER_VALID_EXPLAIN'			=> 'מפעיל אישור דפדפן לכל חיבור לשיפור האבטחה.',
	'CHECK_DNSBL'					=> 'בדוק IP כנגד רשימת ה DNS השחורה',
	'CHECK_DNSBL_EXPLAIN'			=> 'אם פעיל כתובת ה IP של המשתמש תבדק כנגד שירותי ה DNSBL הבאים בהרשמה ובשליחה: <a href="http://www.spamcop.net">www.spamcop.net</a> ו <a href="http://spamhaus.org">spamhaus.org</a>. תהליך זה יכול למשך זמן מה, לפי הגדרות השרת. אם מתרחשות האטות במערכת או יותר מדי תהליכים שנכשלו מדיווחים, מומלץ לכבות בדיקה זו.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'בדוק מתחם דואר אלקטרוני לרישום MX חוקי',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'אם פעיל, מתחם הדואר האלקטרוני אשר סופק בהרשמה ובשינוי הפרופיל יבדק לרישום MX חוקי.',
	'FORCE_PASS_CHANGE'				=> 'דרוש שינוי סיסמה',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'דורש מהמשתמשים לשנות את סיסמתם לאחר מספר ימים שנקבע. קבע ערך זה ל0 על מנת לכבות אפשרות זו.',
	'FORM_TIME_MAX'					=> 'הזמן המקסימלי לשליחת טופס',
	'FORM_TIME_MAX_EXPLAIN'			=> 'הזמן שיש למשתמש לשליחת טופס. הגדר 1- לכיבוי. שים לב שטופס עלול להפוך ללא תקין אם החיבור הסתיים, מבלי להתייחס להגדרה זו.',
	'FORM_SID_GUESTS'				=> 'הגבל טפסים לחיבורי אורחים',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'אם פעיל, טוקן הטופס הנוצרת לאורחים תיהיה בלעדית לחיבור. זה עלול לגרום לבעיות בכמה ספקיות אינטרנט.',
	'FORWARDED_FOR_VALID'			=> 'כותרת <var>X_FORWARDED_FOR</var> מאושרת',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'חיבורים ימשכו רק אם הכותרת <var>X_FORWARDED_FOR</var> שווה לזו שנשלחה בבקשה הקודמת. חסימות יבדקו אל מול IP ב <var>X_FORWARDED_FOR</var> גם כן.',
	'IP_VALID'						=> 'אישור IP של פעולה',
	'IP_VALID_EXPLAIN'				=> 'קובע כמה מכתובות ה IP של המשתמשים בשימוש לאישור הפעולה; <samp>הכל</samp> שווה לכתובת המלאה, <samp>A.B.C</samp> x.x.x הראשונים, <samp>A.B</samp> x.x הראשונים, <samp>ללא</samp> מכבה בדיקה. בכתובות IP בגרסה 6 <samp>A.B.C</samp> שווה ל 4 החלקים הראשונים ו <samp>A.B</samp> ל 3 החלקים הראשונים.',
	'MAX_LOGIN_ATTEMPTS'			=> 'מספר מירבי של נסיונות התחברות',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'לאחר מספר זה של נסיונות חיבור שנכשלו המשתמש צריך בנוסף לפתור מבחן אנטי-בוט.',
	'NO_IP_VALIDATION'				=> 'ללא',
	'NO_REF_VALIDATION'            => 'ללא',
	'PASSWORD_TYPE'					=> 'מורכבות סיסמה',
	'PASSWORD_TYPE_EXPLAIN'			=> 'קובע כמה מורכבת סיסמה צריכה להיות כאשר נקבעה או שונתה, אפשרויות מורכבות נכללות באחדים הקודמים.',
	'PASS_TYPE_ALPHA'				=> 'חייבת להכיל אותיות ומספרים',
	'PASS_TYPE_ANY'					=> 'ללא דרישות',
	'PASS_TYPE_CASE'				=> 'חייבת להיות משפט מעורבב',
	'PASS_TYPE_SYMBOL'				=> 'חייבת להכיל סימנים',
	'REF_HOST'                  => 'רק שרת בתוקף',
    'REF_PATH'                  => 'וגם תיקיה בתוקף',
    'REFERER_VALID'               => 'בדיקת דף מפנה',
    'REFERER_VALID_EXPLAIN'         => 'אם מאופשר, הדף המפנה שנשלח יבדק מול שרת/קוד בהגדרות. זה יכול לגרום לבעיות בפורומים שמשתמשים במספר כתובות או התחברויות חיצוניות.',
	'TPL_ALLOW_PHP'					=> 'אפשר php בערכות',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'אם האפשרות פעילה, משפטי <code>PHP</code> ו <code>INCLUDEPHP</code> יזוהו ויבוצעו בערכות.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'מידע זה בשימוש כאשר המערכת שולחת הודעות דואר אלקטרוני למשתמשים. וודא שכתובת הדואר האלקטרוני שאתה מציין חוקית, כל ההודעות מוקפות או שלא נמסרו כנראה ישלחו לכתובת זו. אם השרת שלך אינו מספק שירות דואר אלקטרוני מקומי (מבוסס PHP) תוכל במקום לשלוח הודעות ישירות דרך SMTP. בשיטה זו נדרשת הכתובת של שרת מתאים (בקש מספק האחסון שלך אם נדרש). אם השרת דורש אימות (ורק אם הוא דורש) הזן את שם המשתמש, הסיסמה ושיטת האימות הנדרשים.',

	'ADMIN_EMAIL'					=> 'כתובת דואר אלקטרוני לתגובה',
	'ADMIN_EMAIL_EXPLAIN'			=> 'בשימוש בתור כתובת הדואר האלקטרוני לתגובה לכל ההודעות, כתובת הדואר האלקטרוני ליצירת קשר. תמיד בשימוש בתור כתובת <samp>נתיב תשובה</samp> ו<samp>שולח</samp> בהודעות דואר אלקטרוני.',
	'BOARD_EMAIL_FORM'				=> 'משתמשים שולחים דואר אלקטרוני דרך המערכת',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'במקום הצגת כתובת הדואר האלקטרוני של המשתמשים, הם יוכלו לשלוח הודעות דואר אלקטרוני דרך המערכת.',
	'BOARD_HIDE_EMAILS'				=> 'הסתר כתובות דואר אלקטרוני',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'אפשרות זו שומרת את כל כתובות הדואר האלקטרוני כפרטיות לחלוטין.',
	'CONTACT_EMAIL'					=> 'כתובת דואר אלקטרוני ליצירת קשר',
	'CONTACT_EMAIL_EXPLAIN'			=> 'כתובת זו בשימוש אם נקודה מסויימת ליצירת קשר נדרשת, למשל דואר-זבל, פלט שגיאה, וכד\'. היא תמיד תהיה כתובת <samp>מאת</samp> ו<samp>תגובה אל</samp> בהודעות דואר אלקטרוני.',
	'EMAIL_FUNCTION_NAME'			=> 'שם פונקצית הדואר האלקטרוני',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'פונקצית הדואר האלקטרוני אשר בשימוש לשליחת הודעות דרך PHP.',
	'EMAIL_PACKAGE_SIZE'			=> 'גודל חבילת הודעות דואר אלקטרוני',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'מספר הודעות הדואר האלקטרוני המירבי אשר נשלחות בחבילה אחת. הגדרה זו שייכת לתור ההודעה הפנימית. קבע ערך זה ל 0 אם אתה נתקל בבעיות לגבי הודעות אשר לא נמסרות',
	'EMAIL_SIG'						=> 'חתימה לדואר האלקטרוני',
	'EMAIL_SIG_EXPLAIN'				=> 'הטקסט אשר יצורף לכל הודעות הדואר האלקטרוני אשר המערכת שולחת.',
	'ENABLE_EMAIL'					=> 'הפעל הודעות דואר אלקטרוני של המערכת',
	'ENABLE_EMAIL_EXPLAIN'			=> 'אם נקבע לכבוי, לא ישלחו הודעות דואר אלקטרוני על-ידי המערכת בכלל. <em>שים לב שכדי להפעיל חשבון על ידי משתמש או מנהל ראשי נדרש שאפשרות זו תיהיה זמינה. אם כרגע מוגדר ל“משתמש” או “מנהל ראשי” בהגדרה של הפעלת חשבון, ביטול הגדרה זו יגרום לכך שלא יהיה ניתן להפעיל חשבונות חדשים.</em>',
	'SMTP_AUTH_METHOD'				=> 'שיטת אימות ל SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'בשימוש רק אם שם המשתמש/הסיסמה נקבעו, שאל את ספק האחסון שלך אם אינך בטוח באיזו שיטה להשתמש.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'סיסמה ל SMTP',
	'SMTP_PASSWORD_EXPLAIN'			=> 'הזן סיסמה רק אם שרת ה SMTP שלך דורש זאת.<br /><em><strong>אזהרה:</strong> סיסמה זו תשמר כטקסט פשוט בבסיס הנתונים ותוצג לכל אחד אשר יכול לגשת לבסיס הנתונים או אשר יכול לצפות בעמוד ההגדרות.</em>',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'יציאת שרת SMTP',
	'SMTP_PORT_EXPLAIN'				=> 'שנה זאת רק אם אתה יודע ששרת ה SMTP משתמש ביציאה שונה.',
	'SMTP_SERVER'					=> 'כתובת שרת ה SMTP',
	'SMTP_SETTINGS'					=> 'הגדרות SMTP',
	'SMTP_USERNAME'					=> 'שם משתמש ל SMTP',
	'SMTP_USERNAME_EXPLAIN'			=> 'הזן שם משתמש רק אם שרת ה SMTP שלך דורש זאת.',
	'USE_SMTP'						=> 'השתמש בשרת SMTP לדואר אלקטרוני',
	'USE_SMTP_EXPLAIN'				=> 'בחר “כן” אם אתה רוצה או חייב לשלוח דואר אלקטרוני דרך שרת קרוי במקום בפונקצית דואר מקומית.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'כאן אתה יכול להפעיל ולנהל את השימוש ב Jabber לשליחת הודעות מיידיות והודעות מערכת. Jabber הוא מקור פרוטוקול פתוח ולכן זמין לשימוש לכולם. כמה שרתי Jabber כוללים כניסות או העברות אשר מאפשרות לך ליצור קשר עם משתמשים בשרתים אחרים. לא כל השרתים מציעים את כל ההעברות ושינויים בפרוטוקולים יכולים למנוע מהעברות להתבצע. וודא שאתה מזמין פרטי חשבון שכבר רשום - phpBB3 תשתמש בפרטים אשר אתה מזין כאן.',

	'JAB_ENABLE'				=> 'הפעל Jabber',
	'JAB_ENABLE_EXPLAIN'		=> 'מפעיל שימוש בשליחת הודעות דרך Jabber.',
	'JAB_GTALK_NOTE'			=> 'שים לב ש GTalk לא יעבוד מפני שהפונקציה <samp>dns_get_record</samp> לא נמצאה. פונקציה זו אינה זמינה ב PHP4, ואינה מיושמת במערכות Windows. היא כרגע אינה עובדת על מערכות המבוססות על BSD, כולל מערכת ההפעלה Mac.',
	'JAB_PACKAGE_SIZE'			=> 'גודל חבילת Jabber',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'זהו מספר ההודעות אשר נשלחות בחבילה אחת. אם נקבע ל 0 ההודעה תשלח באופן מיידי ולא תמתין לשליחת מאוחרת יותר.',
	'JAB_PASSWORD'				=> 'סיסמה ל Jabber',
'JAB_PASSWORD_EXPLAIN'		=> '<em><strong>אזהרה:</strong> סיסמה זו תשמר כטקסט פשוט בבסיס הנתונים ותוצג לכל אחד אשר יכול לגשת לבסיס הנתונים או אשר יכול לצפות בעמוד ההגדרות.</em>',
	'JAB_PORT'					=> 'יציאת Jabber',
	'JAB_PORT_EXPLAIN'			=> 'השאר ריק אלא אם כן אתה יודע שהיציאה היא לא 5222.',
	'JAB_SERVER'				=> 'שרת Jabber',
	'JAB_SERVER_EXPLAIN'		=> 'ראה %sjabber.org%s לרשימת שרתים.',
	'JAB_SETTINGS_CHANGED'		=> 'הגדרות ה Jabber שונו בהצלחה.',
	'JAB_USE_SSL'				=> 'השתמש ב SSL כדי להתחבר',
	'JAB_USE_SSL_EXPLAIN'		=> 'אם פעיל, חיבור מאובטח ינסה להתבצע. יציאת ה Jabber תשונה ל 5223 אם היציאה 5222 צוינה.',
	'JAB_USERNAME'				=> 'שם משתמש ל Jabber או JID',
	'JAB_USERNAME_EXPLAIN'		=> 'ציין שם משתמש רשום או JID תקין. שם המשתמש לא יבדק לאימות. אם ציינת רק שם משתמש, אז ה-JID שלך יהיה שם המשתמש והשרת שציינת למעלה. או, ציין JID תקין, לדוגמא user@jabber.org.',
));

?>