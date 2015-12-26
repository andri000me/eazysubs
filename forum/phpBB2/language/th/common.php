<?php 
/** 
* ภาษาไทย เวอร์ชั่น 1.2.7 
* 23/11/2553 
* ไฟล์ภาษาไทยสำหรับ PHPBB3 โดย www.mindphp.com และ www.phpbbthailand.com
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

$lang = array_merge($lang, array(
	'DIRECTION'			=> 'ltr',
	'DATE_FORMAT'		=> '|d M Y|',	// 01 Jan 2007 (with Relative days enabled)
	'USER_LANG'			=> 'th',
	'1_DAY'			=> '1 วัน',
	'1_MONTH'		=> '1 เดือน',
	'1_YEAR'		=> '1 ปี',
	'2_WEEKS'		=> '2 สัปดาห์',
	'3_MONTHS'		=> '3 เดือน',
	'6_MONTHS'		=> '6 เดือน',
	'7_DAYS'		=> '7 วัน',
	'ACCOUNT_ALREADY_ACTIVATED'		=> 'บัญชีของท่านได้รับการยืนยันแล้ว',
	'ACCOUNT_DEACTIVATED'			=> 'บัญชีของท่านได้ถูกระงับชั่วคราว มีเพียงผู้ดูแลเว็บบอร์ดเท่านั้น ที่จะสามารถยืนยันบัญชีให้ท่านได้',
	'ACCOUNT_NOT_ACTIVATED'			=> 'บัญชีของท่านยังไม่ได้รับการยืนยัน',
	'ACP'							=> 'Administration Control Panel',
	'ACTIVE'						=> 'ใช้งานได้',
	'ACTIVE_ERROR'					=> 'ชื่อสมาชิกนี้ยังไม่ได้รับการยืนยัน กรุณาติดต่อผู้ดูแลบอร์ดหากท่านไม่สามารถยืนยันบัญชีได้ด้วยตัวเอง',
	'ADMINISTRATOR'					=> 'ผู้ดูแลระบบ',
	'ADMINISTRATORS'				=> 'ผู้ดูแลระบบ',
	'AGE'							=> 'อายุ',
	
	'AIM'							=> 'AIM',
	'ALLOWED'						=> 'อนุญาต',
	'ALL_FILES'						=> 'ไฟล์ทั้งหมด',
	'ALL_FORUMS'					=> 'บอร์ดทั้งหมด',
	'ALL_MESSAGES'					=> 'ข้อความทั้งหมด',
	'ALL_POSTS'						=> 'โพสต์ทั้งหมด',
	'ALL_TIMES'						=> 'เขตเวลา %1$s %2$s',
	'ALL_TOPICS'					=> 'กระทู้ทั้งหมด',
	'AND'							=> 'และ',
	'ARE_WATCHING_FORUM'			=> 'คุณจะได้รับแจ้ง เมื่อมีการโพสต์ข้อความใหม่ในบอร์ด นี้',
	'ARE_WATCHING_TOPIC'			=> 'คุณจะได้รับแจ้ง เมื่อมีการโพสต์ข้อความใหม่ในกระทู้ นี้',
	'ASCENDING'						=> 'น้อยไปมาก',
	'ATTACHMENTS'					=> 'ไฟล์แนป',
	'ATTACHED_IMAGE_NOT_IMAGE'		=> 'ไม่รู้จักชนิดของไฟล์รูปภาพที่ท่านแนบมา',
	'AUTHOR'						=> 'เจ้าของ',
	'AUTH_NO_PROFILE_CREATED'		=> 'สร้างข้อมูลส่วนตัวไม่สำเร็จ',
	'AVATAR_DISALLOWED_CONTENT'		=> 'อัพโหลดไฟล์ชนิดนี้ไม่ได้ เนื้อหาข้อมูลผิดพลาด.',
	'AVATAR_DISALLOWED_EXTENSION'	=> 'ไม่อนุญาตให้แสดงรูปภาพที่มีนามสกุล <strong>%s</strong>',
	'AVATAR_EMPTY_REMOTE_DATA'		=> 'ไม่สามารถ อัพโหลด ภาพประจำตัวนี้ได้ เนื่องจากไฟล์ไม่ถูกต้องหรือเกิดความเสียหาย',
	'AVATAR_EMPTY_FILEUPLOAD'		=> 'ไม่มีไฟล์รูปสำหรับ อัพโหลด',
	'AVATAR_INVALID_FILENAME'		=> '%s  ไม่สามารถใช้งานได้',
	'AVATAR_NOT_UPLOADED'			=> 'ภาพประจำตัวนี้ไม่สามารถ อัพโหลด ได้',
	'AVATAR_NO_SIZE'				=> 'ไม่สามารถทราบขนาดความกว้างและความสูงของภาพประจำตัวได้ กรุณากรอกข้อมูลเหล่านี้ใหม่',
	'AVATAR_PARTIAL_UPLOAD'			=> 'ไฟล์ถูกอัพโหลดได้บางส่วนเท่านั้น',
	'AVATAR_PHP_SIZE_NA'			=> 'ภาพประจำตัวมีขนาดใหญ่เกินไป <br />ขนาดของภาพในการ อัพโหลด สามารถเซตได้ที่ php.ini',
	'AVATAR_PHP_SIZE_OVERRUN'		=> 'ภาพประจำตัวมีขนาดใหญ่เกินไป ขนาดสูงสุดที่สามารถอัพโหลดได้คือ %d MB.<br />กรุณาดูค่า ตาม php.ini และไม่สามารถเพิ่มให้มากกว่านี้ได้',
	'AVATAR_URL_INVALID'			=> 'URL นี้ไม่ถูกต้อง',
	'AVATAR_URL_NOT_FOUND'			=> 'ไม่พบไฟล์นี้',
	'AVATAR_WRONG_FILESIZE'			=> 'ภาพประจำตัวควรมีขนาดตั้งแต่ 0 ถึง %1d %2s.',
	'AVATAR_WRONG_SIZE'				=> 'ขนาดภาพประจำตัวที่คุณเลือก กว้าง %5$d พิกเซล และสูง %6$d พิกเซล  โดยภาพประจำตัวต้องมีขนาดอย่างน้อยกว้าง  %1$d พิกเซล และสูง %2$d พิกเซล แต่ต้องไม่กว้างเกิน %3$d พิกเซล และสูงเกิน %4$d พิกเซล ',

	'BACK_TO_TOP'			=> 'ข้างบน',
	'BACK_TO_PREV'			=> 'กลับหน้าที่แล้ว',
	'BAN_TRIGGERED_BY_EMAIL'=> 'อีเมล ของคุณถูกแบน',
	'BAN_TRIGGERED_BY_IP'	=> 'ไอพีของคุณถูกแบน',
	'BAN_TRIGGERED_BY_USER'	=> 'ชื่อผู้ใช้ของคุณถูกแบน',
	'BBCODE_GUIDE'			=> 'การใช้งาน BBCode',
	'BCC'					=> 'BCC',
	'BIRTHDAYS'				=> 'วันเกิด',
	'BOARD_BAN_PERM'		=> 'คุณถูกแบน <strong>ถาวร</strong>จากเวบบอร์ดนี้<br /><br />กรุณาติดต่อ  %2$sผู้ดูแลระบบ%3$s เพื่อขอข้อมูลเพิ่มเติม',
	'BOARD_BAN_REASON'		=> 'เหตุผลของการถูกแบน <strong>%s</strong>',
	'BOARD_BAN_TIME'		=> 'คุณถูกแบนจากเวบบอร์ดนี้จนถึง <strong>%1$s</strong>.<br /><br />กรุณาติดต่อ  %2$sผู้ดูแลระบบ%3$s เพื่อขอข้อมูลเพิ่มเติม',
	
	'BOARD_DISABLE'			=> 'ขออภัย. เว็บบอร์ดนี้ยังไม่พร้อมใช้งาน',
	'BOARD_DISABLED'		=> 'ขณะนี้เวบบอร์ดงดใช้งาน',
	'BOARD_UNAVAILABLE'		=> 'ขออภัยคะ เวบบอร์ดงดใช้งานชั่วคราว, กรุณาเข้าใหม่อีกครั้ง',
	'BROWSING_FORUM'		=> 'ผู้ทีกำลังดูหมวดนี้: %1$s ท่าน',		
	'BROWSING_FORUM_GUEST'	=> '่กำลังดูบอร์ดนี้: %1$s และ บุคคลทั่วไป %2$d ท่าน',
	'BROWSING_FORUM_GUESTS'	=> 'กำลังดูบอร์ดนี้: %1$s และ บุคคลทั่วไป %2$d ท่าน',
	'BYTES'					=> 'ไบต์',

	'CANCEL'				=> 'Cancel',
	'CHANGE'				=> 'เปลี่ยน',
	'CHANGE_FONT_SIZE'		=> 'เปลี่ยนขนาดตัวอักษร',
	'CHANGING_PREFERENCES'	=> 'ตั้งค่าคุณสมบัติของบอร์ด',
	'CHANGING_PROFILE'		=> 'การตั้งค่าส่วนตัว',

	'CLICK_VIEW_PRIVMSG'	=> '%s เปิดกล่องข้อความส่วนตัว %s',
	'COLLAPSE_VIEW'			=> 'มุมมองที่พับได้',
	'CLOSE_WINDOW'			=> 'ปิดหน้าต่างนี้',
	'COLOUR_SWATCH'			=> 'เปลี่ยนสี',
	'COMMA_SEPARATOR'		=> ', ',
	'CONFIRM'				=> 'ยืนยัน',
	'CONFIRM_CODE'			=> 'รหัสยืนยัน',
	'CONFIRM_CODE_EXPLAIN'	=> 'ให้พิมพ์ข้อความตามที่เห็น โดยไม่ต้องสนใจตัวอักษรพิมพ์เล็ก-พิมพ์ใหญ่',
	'CONFIRM_CODE_WRONG'	=> 'รหัสตามที่เห็นในรูปภาพไม่ถูกต้อง',
	'CONFIRM_OPERATION'		=> 'ท่านต้องการทำคำสั่งนี้จริงๆหรือ?',
	'CONGRATULATIONS'		=> 'ยินดีกับ',
	'CONNECTION_FAILED'		=> 'ไม่สามารถเชื่อมต่อได้.',
	'CONNECTION_SUCCESS'	=> 'เชื่อมต่อสำเร็จ',
	'COOKIES_DELETED'		=> 'คุ๊กกี้ของเวบบอร์ดนี้ถูกลบเรียบร้อยแล้วคะ',
	'CURRENT_TIME'			=> 'วันเวลาปัจจุบัน %s',

	'DAY'					=> 'วัน',
	'DAYS'					=> 'วัน',
	'DELETE'				=> 'ลบทิ้ง',
	'DELETE_ALL'			=> 'ลบทิ้งทั้งหมด',
	'DELETE_COOKIES'		=> 'ลบคุ้กกี้',
	'DELETE_MARKED'			=> 'ลบที่เลือกไว้',
	'DELETE_POST'			=> 'ลบโพสต์',
	'DELIMITER'				=> 'ตัวคั่น',
	'DESCENDING'			=> 'มากไปน้อย',
	'DISABLED'				=> 'ไม่ทำงาน',
	'DISPLAY'				=> 'แสดง',
	'DISPLAY_GUESTS'		=> 'แสดงบุคคลทั่วไป',
	'DISPLAY_MESSAGES'		=> 'แสดงข้อความจาก',
	'DISPLAY_POSTS'			=> 'แสดงโพสต์จาก',
	'DISPLAY_TOPICS'		=> 'แสดงกระทู้จาก',
	'DOWNLOADED'			=> 'ดาวน์โหลด',
	'DOWNLOADING_FILE'		=> 'กำลังดาวน์โหลดไฟล์',
	'DOWNLOAD_COUNT'		=> 'ดาวน์โหลด %d ครั้ง',
	'DOWNLOAD_COUNTS'		=> 'ดาวน์โหลด %d ครั้ง',
	'DOWNLOAD_COUNT_NONE'	=> 'ยังไม่มีการดาวน์โหลด',
	
	'VIEWED_COUNT'			=> 'เปิดดู %d ครั้ง',
	'VIEWED_COUNTS'			=> 'เปิดดู %d ครั้ง',
	'VIEWED_COUNT_NONE'		=> 'ยังไม่มีการเปิดดู',

	'EDIT_POST'							=> 'แก้ไขโพสต์',
	'EMAIL'								=> 'อีเมล์',
	'EMAIL_ADDRESS'						=> 'ที่อยู่อีเมล์',
	'EMAIL_SMTP_ERROR_RESPONSE'			=> 'การส่งเมล์มีปัญหา<strong>บรรทัดที่ %1$s</strong>. Response: %2$s.',
	'EMPTY_SUBJECT'						=> 'กรุณากรอกหัวข้อด้วย',
	'EMPTY_MESSAGE_SUBJECT'				=> 'กรุณากรอกข้อความด้วย',
	'ENABLED'							=> 'เปิดใช้งาน',
	'ENCLOSURE'							=> 'ปิดการใช้งาน',
	'ERR_CHANGING_DIRECTORY'			=> 'ไม่สามารถเปลี่ยนไดเรกทอรี่ได้',
	'ERR_CONNECTING_SERVER'				=> 'ไม่สามารถเชื่อมต่อกับเซิร์ฟเวอร์ได้',
	'ERR_JAB_AUTH'						=> 'Could not authorise on Jabber server.',
	'ERR_JAB_CONNECT'					=> 'Could not connect to Jabber server.',	
	'ERR_UNABLE_TO_LOGIN'				=> 'ชื่อผู้ใช้ และ รหัสผ่านไม่ถูกต้อง',
	'ERR_UNWATCHING'					=> 'An error occured while trying to unsubscribe.',	
	'ERR_WATCHING'						=> 'An error occured while trying to subscribe.',	
	'ERR_WRONG_PATH_TO_PHPBB'			=> 'พาร์ท PhpBB นี้ไม่ถูกต้อง',
	'EXPAND_VIEW'						=> 'มุมมองที่ขยายได้',
	'EXTENSION'							=> 'ชนิดของไฟล์',
	'EXTENSION_DISABLED_AFTER_POSTING'	=> 'ชนิดของไฟล์ <strong>%s</strong> ให้ใช้งานไม่ได้ จึงไม่สามารถแสดงผลได้อีกต่อไป',
	
	'FAQ'					=> ' FAQ ',
	'FAQ_EXPLAIN'			=> ' FAQ ',
	'FILENAME'				=> 'ชื่อไฟล์',
	'FILESIZE'				=> 'ขนาด',
	'FILEDATE'				=> 'วันที่',
	'FILE_COMMENT'			=> 'คำอธิบาย',
	'FILE_NOT_FOUND'		=> 'ไม่พบไฟล์ที่ต้องการ',
	'FIND_USERNAME'			=> 'ค้นหาสมาชิก',
	'FOLDER'				=> 'โฟล์เดอร์',
	'FORGOT_PASS'			=> 'ลืมรหัสผ่าน',
	'FORM_INVALID'			=> 'การส่งค่าจากฟอร์มไม่ถูกต้อง. กรุณาลองส่งใหม่อีกครั้ง.',
	'FORUM'					=> 'บอร์ด',
	'FORUMS'				=> 'บอร์ด',
	'FORUMS_MARKED'			=> 'ทุก บอร์ด ท่านได้เลือก ทำเป็นว่าได้อ่านหมดทุกหัวข้อเรียบร้อยแล้ว.',
	'FORUM_CAT'				=> 'หมวดหมู่',
	'FORUM_INDEX'			=> 'หน้าเว็บบอร์ด',
	'FORUM_LINK'			=> 'ลิงค์บอร์ด',
	'FORUM_LOCATION'		=> 'ตำแหน่งบอร์ด',
	'FORUM_LOCKED'			=> 'ปิดบอร์ด',
	'FORUM_RULES'			=> 'กฎการใช้บอร์ด',
	'FORUM_RULES_LINK'		=> 'กรุณาอ่านกฏการใช้งานบอร์ด',
	'FROM'					=> 'จาก',
	'FSOCK_DISABLED'		=> 'การทำงานนี้ไม่ถูกต้องเพราะ <var>fsockopen</var> ฟังก์ชันไม่สามารถทำงานได้หรือเซิร์ฟเวอร์ค้นหาไม่พบ',

	'FTP_FSOCK_HOST'				=> 'FTP โฮสต์',
	'FTP_FSOCK_HOST_EXPLAIN'		=> 'FTP โฮสต์ ถูกเชื่อมต่อด้วยเซิร์ฟเวอร์ของคุณ',
	'FTP_FSOCK_PASSWORD'			=> 'รหัสผ่าน FTP',

	'FTP_FSOCK_PASSWORD_EXPLAIN'	=> 'รหัสผ่าน FTP ของคุณ',
	'FTP_FSOCK_PORT'				=> 'FTP พอร์ต' ,
	'FTP_FSOCK_PORT_EXPLAIN'		=> 'พอร์ต ถูกเชื่อมต่อด้วยเซิร์ฟเวอร์ของคุณ',
	'FTP_FSOCK_ROOT_PATH'			=> 'Path to phpBB',
	'FTP_FSOCK_ROOT_PATH_EXPLAIN'	=> 'Path from the root to your phpBB board.',
	'FTP_FSOCK_TIMEOUT'				=> 'หมดเวลา สำหรับ FTP ',
	'FTP_FSOCK_TIMEOUT_EXPLAIN'		=> 'ระยะเวลาในหน่วยวินาที ที่ระบบจะรอการตอบกลับจากเซิร์ฟเวอร์',
	'FTP_FSOCK_USERNAME'			=> 'FTP username',
	'FTP_FSOCK_USERNAME_EXPLAIN'	=> 'Username ถูกเชื่อมต่อด้วยเซิร์ฟเวอร์ของคุณ',

	'FTP_HOST'						=> 'FTP โฮสต์',
	'FTP_HOST_EXPLAIN'				=> 'FTP โฮสต์ ถูกเชื่อมต่อด้วยเซิร์ฟเวอร์ของคุณ',
	'FTP_PASSWORD'					=> 'รหัสผ่าน FTP',
	'FTP_PASSWORD_EXPLAIN'			=> 'รหัสผ่าน FTP ของคุณ.',
	'FTP_PORT'						=> 'FTP พอร์ต',
	'FTP_PORT_EXPLAIN'				=> 'พอร์ต ถูกเชื่อมต่อด้วยเซิร์ฟเวอร์ของคุณ',
	'FTP_ROOT_PATH'					=> 'Path to phpBB',
	'FTP_ROOT_PATH_EXPLAIN'			=> 'Path from the root to your phpBB board.',
	'FTP_TIMEOUT'					=> 'FTP timeout',
	'FTP_TIMEOUT_EXPLAIN'			=> 'ระยะเวลาในหน่วยวินาที ที่ระบบจะรอการตอบกลับจากเซิร์ฟเวอร์',
	'FTP_USERNAME'					=> 'FTP Username',
	'FTP_USERNAME_EXPLAIN'			=> 'Username ถูกเชื่อมต่อด้วยเซิร์ฟเวอร์ของคุณ',
	
	'GENERAL_ERROR'				=> 'ผิดพลาด: เกิดข้อผิดพลาดทั่วไป',

	'GB'						=> 'GB',
	'GIB'						=> 'GiB',
	
	'GO'						=> 'ไป',
	'GOTO_PAGE'					=> 'ไปที่หน้า',
	'GROUP'						=> 'กลุ่ม',
	'GROUPS'					=> 'กลุ่ม',
	'GROUP_ERR_TYPE'			=> 'กลุ่มนี้ไม่เหมาะสม',
	'GROUP_ERR_USERNAME'		=> 'ไม่มีกลุ่มของชื่อที่ระบุ',
	'GROUP_ERR_USER_LONG'		=> 'ชื่อกลุ่มต้องไม่เกิน 60 ตัวอักษร. ชื่อกลุ่มนี้ยาวเกินไป',
	'GUEST'						=> 'บุคคลทั่วไป',
	'GUEST_USERS_ONLINE'		=> 'มี บุคคลทั่วไปออนไลน์ %d ท่าน',
	'GUEST_USERS_TOTAL'			=> 'บุคคลทั่วไป %d ท่าน',
	'GUEST_USERS_ZERO_ONLINE'	=> 'ไม่มีบุคคลทั่วไปออนไลน์',
	'GUEST_USERS_ZERO_TOTAL'	=> 'ไม่มีบุคคลทั่วไป',
	'GUEST_USER_ONLINE'			=> 'มี บุคคลทั่วไปออนไลน์ %d ท่าน',
	'GUEST_USER_TOTAL'			=> 'บุคคลทั่วไป %d ท่าน',
	
	'G_ADMINISTRATORS'			=> 'ผู้ดูแลระบบ',
	'G_BOTS'					=> 'Bots',
	'G_GUESTS'					=> 'บุคคลทั่วไป',
	'G_REGISTERED'				=> 'สมาชิก',
	'G_REGISTERED_COPPA'		=> 'Registered COPPA users',
	'G_GLOBAL_MODERATORS'		=> 'Moderators',

	'G_NEWLY_REGISTERED'		=> 'สมาชิกเพิ่งลงทะเบียน',

	'HIDDEN_USERS_ONLINE'		=> 'ซ่อน %d ท่าน',
	'HIDDEN_USERS_TOTAL'		=> 'ซ่อน %d ท่าน และ ',
	'HIDDEN_USERS_TOTAL_AND'		=> 'ซ่อย %d และ ',	
	'HIDDEN_USERS_ZERO_ONLINE'	=> 'ไม่มีผู้ซ่อนตัว',
	'HIDDEN_USERS_ZERO_TOTAL'	=> 'ไม่มีผู้ซ่อนตัว',
	'HIDDEN_USERS_ZERO_TOTAL_AND'	=> 'ไม่มีผู้ซ่อนตัว และ ',	
	'HIDDEN_USER_ONLINE'		=> 'สมาชิกซ่อน %d ท่าน',
	'HIDDEN_USER_TOTAL'			=> 'ซ่อน %d ท่าน ',
	'HIDDEN_USER_TOTAL_AND'			=> '%d ซ่อนตัว และ',	
	'HIDE_GUESTS'				=> 'ไม่แสดงบุคคลทั่วไป',
	'HIDE_ME'					=> 'ซ่อนสถานะการออนไลน์ของฉัน',
	'HOURS'						=> 'ชั่วโมง',
	'HOME'						=> 'หน้าแรก',

	'ICQ'						=> 'ไอซีคิว',
	'ICQ_STATUS'				=> 'สถานะไอซีคิว',	
	'IF'						=> 'ถ้า',
	'IMAGE'						=> 'รูปภาพ',
	'IMAGE_FILETYPE_INVALID'	=> 'ประเภทของไฟล์รูป %d for mimetype %s ไม่รองรับ',
	'IMAGE_FILETYPE_MISMATCH'	=> 'ประเภทของไฟล์รูปไม่สามารถเข้ากับ: expected extension %1$s และ %2$s ที่กำหนดได้',
	'IN'						=> 'ใน',
	'INDEX'						=> 'หน้าแรก',
	'INFORMATION'				=> 'ข้อมูลทั่วไป',
	'INTERESTS'					=> 'งานอดิเรก',
	'INVALID_DIGEST_CHALLENGE'	=> 'Invalid digest challenge.',
	'INVALID_EMAIL_LOG'			=> '<strong>%s</strong> อีเมล ของคุณอาจจะไม่ถูกต้อง?',
	'IP'						=> 'IP',
	'IP_BLACKLISTED'			=> 'ไอพีของคุณ %1$s ถูกกันไม่ให้ใช้งาน เพราะติดบัญชีดำ. กรุณาศึกษารายละเอียดได้ที่ <a href="%2$s">%2$s</a>.',

	'JABBER'				=> 'Jabber',
	'JOINED'				=> 'ลงทะเบียนเมื่อ',
	'JUMP_PAGE'				=> 'ใส่หมายเลขหน้าที่ต้องการเปิดดู.',
	'JUMP_TO'				=> 'ไปที่',
	'JUMP_TO_PAGE'			=> 'คลิกเพื่อไปที่หน้า...',	
	'KB'					=> 'KB',
	'KIB'					=> 'KiB',

	'LAST_POST'							=> 'โพสต์ล่าสุด',
	'LAST_UPDATED'						=> 'อัปเดทล่าสุด',
	'LAST_VISIT'						=> 'เข้าชมล่าสุด',
	'LDAP_NO_LDAP_EXTENSION'			=> 'ส่วนเสริม LDAP ไม่สามารถใช้งานได้.',
	'LDAP_NO_SERVER_CONNECTION'			=> 'ไม่สามารถเชื่อมต่อกับเซิร์ฟเวอร์ของ LDAP ',
	'LDAP_SEARCH_FAILED'				=> 'ข้อผิดพลาดเกิดขึ้นในขณะที่ค้นหา LDAP.',
	
	'LEGEND'							=> 'กลุ่ม',
	'LOCATION'							=> 'ที่อยู่',
	'LOCK_POST'							=> 'ล็อกโพสต์',
	'LOCK_POST_EXPLAIN'					=> 'การแก้ไขถูกขัดขวาง',
	'LOCK_TOPIC'						=> 'ล็อกหัวข้อ',
	'LOGIN'								=> ' เข้าสู่ระบบ ',
	
	'LOGIN_CHECK_PM'					=> 'เข้าระบบเพื่อตรวจสอบข้อความส่วนตัว.',
	'LOGIN_CONFIRMATION'				=> 'ยอมรับการเข้าระบบ',

	'LOGIN_CONFIRM_EXPLAIN'				=> 'To prevent brute forcing accounts the board requires you to enter a confirmation code after a maximum amount of failed logins. The code is displayed in the image you should see below. If you are visually impaired or cannot otherwise read this code please contact the %sBoard Administrator%s.', // unused
	'LOGIN_ERROR_ATTEMPTS'				=> 'ท่านพยายามเข้าสู่ระบบไม่สำเร็จหลายครั้งแล้ว ท่านจำเป็นจะต้องพิมพ์รหัสยืนยันตามที่ท่านเห็นในรูปภาพด้านล่างนี้ด้วย',
	
	'LOGIN_ERROR_EXTERNAL_AUTH_APACHE'	=> 'คุณไม่สามารถเข้าใช้งานโดยผ่าน Apache ได้ ',
	'LOGIN_ERROR_PASSWORD'				=> 'ท่านพิมพ์รหัสผ่านไม่ถูกต้อง กรุณาลองใหม่อีกครั้ง ถ้าท่านยังไม่สามารถแก้ปัญหาได้ กรุณาติดต่อ %sผู้ดูแลบอร์ด%s',
	'LOGIN_ERROR_PASSWORD_CONVERT'		=> 'คุณไม่สามารถแปลง	รหัสผ่านได้ เมื่อมีการ Update ซอฟต์แวร์ กรุณาระบุรหัสผ่านใหม่ ถ้าคุณยังพบปัญหาเดิมกรุณาติอต่อ  %sผู้ดูแลบอร์ด%s.',
	'LOGIN_ERROR_USERNAME'				=> 'คุณระบุชื่อผู้ใช้ไม่ถูกต้อง กรุณาตรวจสอบและลองใหม่อีกครั้ง  ้าคุณยังพบปัญหาเดิมกรุณาติอต่อ  %sผู้ดูแลบอร์ด%s.',
	'LOGIN_FORUM'						=> 'การดูหรือการโพสต์ข้อความ สำหรับ Forum นี้กรุณาระบุรหัสผ่าน',
	'LOGIN_INFO'						=> '&nbsp;&nbsp;&nbsp;&nbsp;ท่านจะต้องสมัครสมาชิกก่อน การสมัครสมาชิกจะใช้เวลาไม่นาน<br/>&nbsp;&nbsp;&nbsp;&nbsp; ก่อนที่ท่านจะเข้าสู่ระบบ กรุณาอ่านเงื่อนไขการใช้งานและนโยบายการปกป้องข้อมูลส่วนตัว และกรุณาอ่านกฎของแต่ละ บอร์ด ด้วย',
	'LOGIN_VIEWFORUM'					=> 'บอร์ดนี้จำเป็นต้องเป็นสมาชิกและเข้าสู่ระบบเพื่อดูบอร์ด.',	
	'LOGIN_VIEW_FORUM'					=> 'เวบบอร์ดนี้ต้องการการลงทะเบียนและการเข้าใช้งานในระบบ สำหรับดูข้อความในบอร์ดนี้',
	'LOGIN_EXPLAIN_EDIT'				=> 'ในการแก้ไขข้อความในบอร์ดนี้ คุณต้องลงทะเบียนการเป็นสมาชิกและเข้าใช้งานในระบบก่อน',
	'LOGIN_EXPLAIN_VIEWONLINE'			=> 'ในการดูข้อความในบอร์ดนี้ คุณต้องลงทะเบียนการเป็นสมาชิกและเข้าใช้งานในระบบก่อน',
	'TRANSLATION_INFO'	=> 'Thai language by <a href="http://www.phpbbthailand.com" target="_blank">phpBBThailand.com</a>',	
	'LOGOUT'							=> 'ออกจากระบบ',
	'LOGOUT_USER'						=> 'สวัสดี %s [<strong>ออกจากระบบ</strong>]',
	'LOG_ME_IN'							=> 'เข้าสู่ระบบอัตโนมัติ',
	
	'MARK'					=> 'เลือก',
	'MARK_ALL'				=> 'เลือกทั้งหมด',
	'MARK_FORUMS_READ'      => 'บันทึกว่าอ่านทุกบอร์ด แล้ว',
	'MB'					=> 'MB',
	'MIB'					=> 'MiB',
	'MCP'					=> 'Moderator Control Panel',
	'MEMBERLIST'			=> 'รายชื่อสมาชิก',
	'MEMBERLIST_EXPLAIN'	=> 'ดูรายชื่อสมาชิกทั้งหมด',
	'MERGE'					=> 'รวม',
	'MERGE_POSTS'			=> 'รวมข้อความ',
	'MERGE_TOPIC'			=> 'รวมหัวข้อ',
	'MESSAGE'				=> 'ข้อความ',
	'MESSAGES'				=> 'ข้อความ',
	'MESSAGE_BODY'			=> 'รายละเอียดข้อความ',
	'MINUTES'				=> 'นาที',
	'MODERATE'				=> 'Moderate',
	'MODERATOR'				=> 'Moderator',
	'MODERATORS'			=> 'Moderator',
	'MONTH'					=> 'เดือน',
	'MOVE'					=> 'ย้าย',
	'MSNM'					=> 'MSNM/WLM',	

	'NA'						=> 'ไม่มี',
	'NEWEST_USER'				=> 'สมาชิกล่าสุด <strong>%s</strong>',
	'NEW_MESSAGE'				=> 'ข้อความใหม่',
	'NEW_MESSAGES'				=> 'ข้อความใหม่',
	'NEW_PM'					=> '<strong>%d</strong> ข้อความใหม่',
	'NEW_PMS'					=> '<strong>%d</strong> ข้อความใหม่',
	'NEW_POST'					=> 'โพสต์ใหม่',	// Not used anymore
	'NEW_POSTS'					=> 'โพสต์ใหม่',	// Not used anymore
	'NEXT'						=> 'ต่อไป',
	'NEXT_STEP'					=> 'ต่อไป',
	'NEVER'						=> 'ไม่เคย',
	'NO'						=> 'ไม่',
	
	'NOT_ALLOWED_MANAGE_GROUP'	=> 'คุณไม่ได้รับอนุญาตให้จัดการข้อความนี้',
	'NOT_AUTHORISED'			=> 'คุณไม่ได้รับสิทธิ์ให้ใช้งานในพื้นที่นี้',
	'NOT_WATCHING_FORUM'		=> 'ยกเลิกการส่งอีเมล เมื่อมีกระทู้ใหม่ในบอร์ดนี้',
	'NOT_WATCHING_TOPIC'		=> 'ยกเลิกการส่งอีเมล เมื่อมีคนตอบใน กระทู้นี้',
	'NOTIFY_ADMIN'				=> 'กรุณาแจ้ง ผู้ดูแลระบบ',
	'NOTIFY_ADMIN_EMAIL'		=> 'กรุณาแจ้ง ผู้ดูแลระบบ: <a href="mailto:%1$s">%1$s</a>',
	
	'NO_ACCESS_ATTACHMENT'		=> 'ไม่สามารถใช้ไฟล์นี้',
	'NO_ACTION'					=> 'ไม่สามารถทำอะไรได้',
	'NO_ADMINISTRATORS'			=> 'ไม่มีผู้ดูแลบอร์ดนี้',
	'NO_AUTH_ADMIN'				=> 'การเข้าใช้งานในส่วนหน้าผู้ดูแลระบบไม่สามารถเข้าถึงได้ เพราะคุณไม่มีสิทธิ์ในการเป็นผู้ดูแลระบบ',
	'NO_AUTH_ADMIN_USER_DIFFER'	=> 'คุณไม่มีสิทธิ์เข้าใช้งานในสถานะผู้ใช้อื่น',
	'NO_AUTH_OPERATION'			=> 'คุณไม่ได้รับอนุญาตให้กระทำการใดๆ สำเร็จ',
	
	'NO_CONNECT_TO_SMTP_HOST'	=> 'ไม่สามารถเชื่อมต่อกับ SMTP โฮสต์ : %1$s : %2$s',
	'NO_BIRTHDAYS'				=> 'ยังไม่ระบุวันเกิด',
	'NO_EMAIL_MESSAGE'			=> 'ข้อความ อีเมล เป็นค่าว่าง',
	'NO_EMAIL_RESPONSE_CODE'	=> 'ไม่ได้รับ Reponse Code จากเซิร์ฟเวอร์ mail ',
	'NO_EMAIL_SUBJECT'			=> 'อีเมล นี้ไม่มีหัวข้อ',
	'NO_FORUM'					=> 'ไม่มีบอร์ด ที่คุณเลือก',
	'NO_FORUMS'					=> 'เวบบอร์ดนี้ไม่มี บอร์ด',
	'NO_GROUP'					=> 'ไม่มีการตอบรับจาก กลุ่มของผู้ใช้',
	'NO_GROUP_MEMBERS'			=> 'กลุ่มนี้ไม่มีผู้ใช้',
	'NO_IPS_DEFINED'			=> 'ไม่มีไอพี หรือโฮสต์นี้',
	'NO_MEMBERS'				=> 'ไม่พบสมาชิกที่คุณค้นหา',
	'NO_MESSAGES'				=> 'ไม่มีข้อความ',
	'NO_MODE'					=> 'ไม่ได้ระบุโหมด.',
	'NO_MODERATORS'				=> 'ยังไม่ได้กำหนด moderators ในบอร์ดนี้',
	'NO_NEW_MESSAGES'			=> 'ไม่มีข้อความใหม่',
	'NO_NEW_PM'					=> '<strong>0</strong> ข้อความใหม่',
	'NO_NEW_POSTS'				=> 'ไม่มีโพสต์ใหม่',	 // Not used anymore
	'NO_ONLINE_USERS'			=> 'ไม่มีสมาชิก',
	'NO_POSTS'					=> 'ไม่มีโพสต์ใหม่',
	'NO_POSTS_TIME_FRAME'		=> 'ไม่มีข้อความในกระทู้นี้',
	
	'NO_FEED_ENABLED'			=> 'ไม่มี Feed ในบอร์ดนี้',
	'NO_FEED'					=> 'ไม่มี Feed ที่ต้องการ.',

	'NO_SUBJECT'				=> 'ไม่มีหัวข้อ',
	'NO_SUCH_SEARCH_MODULE'		=> 'ไม่พบคำที่ค้นหา',
	'NO_SUPPORTED_AUTH_METHODS'	=> 'ไม่รองรับการกำหนดสิทธิ์.',
	'NO_TOPIC'					=> 'ไม่มีกระทู้นี้',
	'NO_TOPIC_FORUM'			=> 'ไม่มีหัวข้อหรือบอร์ด.',	
	'NO_TOPICS'					=> 'ไม่พบกระทู้ใด ๆในบอร์ดนี้.',
	'NO_TOPICS_TIME_FRAME'		=> 'ไม่มีข้อความในบอร์ด นี้',
	'NO_UNREAD_PM'				=> '<strong>0</strong> มีข้อความที่ไม่ได้อ่าน',
	'NO_UNREAD_POSTS'			=> 'ไม่มีโพสที่ยังไม่ได้อ่าน',	
	'NO_UPLOAD_FORM_FOUND'		=> 'การแนบไฟล์ถูกเริ่มต้น แต่ไม่พบไฟล์ที่ต้องการแนบ',
	'NO_USER'					=> 'ไม่มีการตอบกลับจากผู้ใช้งาน',
	'NO_USERS'					=> 'ไม่มีการตอบกลับจากผู้ใช้งาน',
	'NO_USER_SPECIFIED'			=> 'ไม่มีชื่อผู้ใช้นี้',

	// Nullar/Singular/Plural language entry. The key numbers define the number range in which a certain grammatical expression is valid.
	'NUM_POSTS_IN_QUEUE'		=> array(
		0			=> 'ไม่มีโพสต์ใหม่ที่รอการอนุมัติ',		// 0
		1			=> 'มี  1 โพสต์ที่รอการอนุมัติ',		// 1
		2			=> 'มี %d โพสต์ที่รอการอนุมัติ ',		// 2+
	),
	
	'OCCUPATION'				=> 'ความถนัด',
	'OFFLINE'					=> 'ออฟไลน์',
	'ONLINE'					=> 'ออนไลน์',
	'ONLINE_BUDDIES'			=> 'เพื่อนออนไลน์',
	'ONLINE_USERS_TOTAL'		=> 'กำลังออนไลน์ทั้งหมด <strong>%d</strong> ท่าน :: ',
	'ONLINE_USERS_ZERO_TOTAL'	=> 'กำลังออนไลน์ทั้งหมด <strong>0</strong> ท่าน :: ',
	'ONLINE_USER_TOTAL'			=> 'กำลังออนไลน์ทั้งหมด <strong>%d</strong> ท่าน :: ',
	'OPTIONS'					=> 'ตัวเลือก',

	'PAGE_OF'					=> 'หน้า <strong>%1$d</strong> จากทั้งหมด <strong>%2$d</strong>',
	'PASSWORD'					=> 'รหัสผ่าน',
	'PIXEL'					=> 'px',
	'PLAY_QUICKTIME_FILE'		=> 'เล่นไฟล์ Quicktime',
	'PM'						=> 'PM',
	'PM_REPORTED'			=> 'คลิกดูรายงาน',	
	'POSTING_MESSAGE'			=> 'โพสต์ข้อความใน %s',
	'POSTING_PRIVATE_MESSAGE'	=> 'ประกอบด้วยข้อความส่วนตัว',
	'POST'						=> 'โพสต์',
	'POST_ANNOUNCEMENT'			=> 'ประกาศ',
	'POST_STICKY'				=> 'ปักหมุด',
	'POSTED'					=> 'เมื่อ',
	'POSTED_IN_FORUM'		=> 'ใน',
	'POSTED_ON_DATE'			=> 'เมื่อ',
	'POSTS'						=> 'โพสต์',
	'POSTS1'					=> 'กระทู้',

	'POSTS_UNAPPROVED'		=> 'อย่างน้อย 1 ข้อความในกระทู้นี้ถูกอนุมัติ',
	'POST_BY_AUTHOR'		=> 'โดย',
	'POST_BY_FOE'			=> 'ข้อความนี้ถูกโพสต์โดย <strong>%1$s</strong> ซึ่งอยู่ในรายการที่คุณละเลย %2$s แสดงโพสต์นี้%3$s.',
	
	'POST_DAY'				=> '%.2f ข้อความต่อวัน',
	'POST_DETAILS'			=> 'รายละเอียดโพสต์',
	'POST_NEW_TOPIC'		=> 'โพสต์กระทู้ใหม่',
	'POST_PCT'				=> '%.2f%% จากโพสต์ทั้งหมด',
	'POST_PCT_ACTIVE'		=> '%.2f%% จากโพสต์ทั้งหมดของสมาชิก',
	'POST_PCT_ACTIVE_OWN'	=> '%.2f%% จากโพสต์ทั้งหมดของท่าน',
	
	'POST_REPLY'			=> 'ตอบกระทู้',
	'POST_REPORTED'			=> 'คลิกเพื่อดูรายงาน',
	'POST_SUBJECT'			=> 'หัวข้อกระทู้',
	'POST_TIME'				=> 'เวลา',
	'POST_TOPIC'			=> 'ตั้งกระทู้ใหม่',
	'POST_UNAPPROVED'		=> 'กระทู้นี้รอรับการอนุมัติ',
	'PREVIEW'				=> 'แสดงตัวอย่าง',
	'PREVIOUS'				=> 'ย้อนกลับ',
	'PREVIOUS_STEP'			=> 'ย้อนกลับ',
	'PRIVACY'				=> 'นโยบายการปกป้องข้อมูลส่วนตัว',
	'PRIVATE_MESSAGE'		=> 'ข้อความส่วนตัว',
	'PRIVATE_MESSAGES'		=> 'ข้อความส่วนตัว',
	'PRIVATE_MESSAGING'		=> 'กำลังส่งข้อความส่วนตัว',
	'PROFILE'				=> 'ตั้งค่าส่วนตัว',

	'READING_FORUM'				=> 'ดูข้อความ %s',
	'READING_GLOBAL_ANNOUNCE'	=> 'อ่านประกาศทั่วไป',
	'READING_LINK'				=> 'เพิ่มลิงค์สำหรับบอร์ด %s',
	'READING_TOPIC'				=> 'อ่านกระทู้ใน %s',
	'READ_PROFILE'				=> 'ข้อมูลส่วนตัว',
	'REASON'					=> 'เหตุผล',
	'RECORD_ONLINE_USERS'		=> 'ออนไลน์มากที่สุด <strong>%1$s</strong> ท่าน เมื่อ %2$s',
	'REDIRECT'					=> 'เปลี่ยนหน้าใหม่',
	'REDIRECTS'					=> 'เปลี่ยนหน้าใหม่',
	'REGISTER'					=> 'สมัครสมาชิก',
	'REGISTERED_USERS'			=> 'ผู้ใช้งานขณะนี้ :',
	'REG_USERS_ONLINE'			=> 'มี %d สมาชิก และ ',
	'REG_USERS_TOTAL'			=> 'สมาชิก %d ท่าน ',
	'REG_USERS_TOTAL_AND'		=> 'สมาชิก %d ท่าน และ ',	
	'REG_USERS_ZERO_ONLINE'		=> 'มี 0 สมาชิกและ ',
	'REG_USERS_ZERO_TOTAL'		=> 'ไม่มีผู้ใช้งานที่เป็นสมาชิก, ',
	'REG_USERS_ZERO_TOTAL_AND'	=> 'สมาชิก 0 ท่าน และ ',	
	'REG_USER_ONLINE'			=> 'มี %d สมาชิก และ ',
	'REG_USER_TOTAL'			=> 'สมาชิก %d ท่าน, ',
	'REG_USER_TOTAL_AND'		=> 'สมาชิก %d ท่าาน และ ',	
	'REMOVE'					=> 'ลบทิ้ง',
	'REMOVE_INSTALL'			=> 'กรุณาลบ, ย้าย, หรือ เปลี่ยนชื่อ ไดเร็คทอรี install ก่อนที่จะเริ่มใช้งานเว็บบอร์ด<br />ถ้ามีไดเร็คทอรี่นี้อยู่ ท่านจะสามารถใช้งานได้เพียง Administration Control Panel (ACP) เท่านั้น',
	'REPLIES'					=> 'ตอบกลับ',
	'REPLY_WITH_QUOTE'			=> 'ตอบกลับพร้อมอ้างอิง',
	'REPLYING_GLOBAL_ANNOUNCE'	=> 'ตอบกลับประกาศ',
	'REPLYING_MESSAGE'			=> 'ตอบกลับในข้อความ%s',
	'REPORT_BY'					=> 'รายงานโดย',
	'REPORT_POST'				=> 'รายงานในข้อความ',
	'REPORTING_POST'			=> 'กำลังรายงานการโพสต์',
	'RESEND_ACTIVATION'			=> 'ส่งเมลยืนยันตัวตนอีกครั้ง',
	'RESET'						=> 'แก้ไขใหม่',
	'RESTORE_PERMISSIONS'		=> 'คืนค่ากระอนุญาต',
	'RETURN_INDEX'				=> '%sกลับไปยังหน้าแรกบอร์ด%s',
	'RETURN_FORUM'		    => '%sกลับไปหน้าบอร์ด ที่เข้าดูล่าสุด%s',
	'RETURN_PAGE'				=> '%sย้อนกลับไปหน้าที่แล้ว%s',
	'RETURN_TOPIC'				=> '%sกลับไปหน้ากระทู้ที่เข้าดูล่าสุด%s',
	'RETURN_TO'					=> 'ย้อนกลับไปยัง',

	'FEED'						=> 'Feed',
	'FEED_NEWS'					=> 'News',

	'FEED_TOPICS_ACTIVE'		=> 'Active Topics',
	'FEED_TOPICS_NEW'			=> 'กระทู้ใหม่',
	
	'RULES_ATTACH_CAN'			=> 'ท่าน <strong>สามารถ</strong> แนบไฟล์ในบอร์ดนี้ได้',
	'RULES_ATTACH_CANNOT'		=> 'ท่าน <strong>ไม่สามารถ</strong> แนบไฟล์ในบอร์ดนี้ได้',
	'RULES_DELETE_CAN'			=> 'ท่าน <strong>สามารถ</strong> ลบโพสต์ของท่านในบอร์ดนี้ได้',
	'RULES_DELETE_CANNOT'		=> 'ท่าน <strong>ไม่สามารถ</strong> ลบโพสต์ของท่านในบอร์ดนี้ได้',
	'RULES_DOWNLOAD_CAN'		=> 'ท่าน <strong>สามารถ</strong> ดาวน์โหลดไฟล์แนบในบอร์ดนี้ได้',
	'RULES_DOWNLOAD_CANNOT'		=> 'ท่าน <strong>ไม่สามารถ</strong> ดาวน์โหลดไฟล์แนบในบอร์ดนี้ได้',
	'RULES_EDIT_CAN'			=> 'ท่าน <strong>สามารถ</strong> แก้ไขโพสต์ของท่านในบอร์ดนี้ได้',
	'RULES_EDIT_CANNOT'			=> 'ท่าน <strong>ไม่สามารถ</strong> แก้ไขโพสต์ของท่านในบอร์ดนี้ได้',
	'RULES_LOCK_CAN'			=> 'ท่าน <strong>สามารถ</strong> ล็อกกระทู้ของท่านในบอร์ดนี้ได้',
	'RULES_LOCK_CANNOT'			=> 'ท่าน <strong>ไม่สามารถ</strong> ล็อกกระทู้ของท่านในบอร์ดนี้ได้',
	'RULES_POST_CAN'			=> 'ท่าน <strong>สามารถ</strong> โพสต์กระทู้ในบอร์ดนี้ได้',
	'RULES_POST_CANNOT'			=> 'ท่าน <strong>ไม่สามารถ</strong> โพสต์กระทู้ในบอร์ดนี้ได้',
	'RULES_REPLY_CAN'			=> 'ท่าน <strong>สามารถ</strong> ตอบกระทู้ในบอร์ดนี้ได้',
	'RULES_REPLY_CANNOT'		=> 'ท่าน <strong>ไม่สามารถ</strong> ตอบกระทู้ในบอร์ดนี้ได้',
	'RULES_VOTE_CAN'			=> 'ท่าน <strong>สามารถ</strong> โหวตแบบสำรวจในบอร์ดนี้ได้',
	'RULES_VOTE_CANNOT'			=> 'ท่าน <strong>ไม่สามารถ</strong> โหวตแบบสำรวจในบอร์ดนี้ได้',

	'SEARCH'					=> 'ค้นหา',
	'SEARCH_MINI'				=> 'ค้นหา…',
	'SEARCH_ADV'				=> 'การค้นหาขั้นสูง',
	'SEARCH_ADV_EXPLAIN'		=> 'แสดงตัวเลือกการค้นหาโดยละเอียด',
	'SEARCH_KEYWORDS'			=> 'คีย์เวิร์ดสำหรับค้นหา',
	'SEARCHING_FORUMS'			=> 'กำลังค้นหาบอร์ด',
	'SEARCH_ACTIVE_TOPICS'		=> 'แสดงกระทู้ที่เปิดดูแล้ว',
	'SEARCH_FOR'				=> 'ค้นหาสำหรับ',
	'SEARCH_FORUM'				=> 'ค้นหาในบอร์ด นี้…',	
	'SEARCH_NEW'				=> 'แสดงกระทู้ที่ยังไม่ได้อ่าน',
	'SEARCH_POSTS_BY'			=> 'ค้นหาโพสต์จาก',
	'SEARCH_SELF'				=> 'แสดงกระทู้ของท่าน',
	'SEARCH_TOPIC'				=> 'ค้นหาในหัวข้อนี้…',
	'SEARCH_UNANSWERED'			=> 'แสดงกระทู้ที่ยังไม่มีการตอบ',

	'SEARCH_UNREAD'				=> 'แสดงโพสต์ที่ยังไม่ได้อ่าน',
	
	'SECONDS'					=> 'วินาที',
	'SELECT'					=> 'เลือก',
	'SELECT_ALL_CODE'			=> 'เลือกทั้งหมด',
	'SELECT_DESTINATION_FORUM'	=> 'กรุณาเลือกบอร์ดเป้าหมาย',
	'SELECT_FORUM'				=> 'เลือกบอร์ด',
	'SEND_EMAIL'				=> 'ส่งเมล',
	'SEND_EMAIL_USER'			=> 'E-mail',				// Used as: {L_SEND_EMAIL_USER} {USERNAME} -> E-mail UserX	
	'SEND_PRIVATE_MESSAGE'		=> 'ส่งข้อความส่วนตัว',
	'SETTINGS'					=> 'ตั้งค่า',
	'SIGNATURE'					=> 'ลายเซ็นต์',
	'SKIP'						=> 'ไปที่เนื้อหา',
	'SMTP_NO_AUTH_SUPPORT'		=> 'เซิร์ฟเวอร์ SMTP ไม่รองรับการกำหนดสิทธิ์',
	'SORRY_AUTH_READ'			=> 'คุณไม่สามารถอ่านกระทู้นี้',
	'SORRY_AUTH_VIEW_ATTACH'	=> 'คุณไม่สามารถ Download ไฟล์แนบนี้',
	'SORT_BY'					=> 'เรียงตาม',
	'SORT_JOINED'				=> 'วันที่ลงทะเบียน',
	'SORT_LOCATION'				=> 'ที่อยู่',
	'SORT_RANK'					=> 'คะแนน',

	'SORT_POSTS'				=> 'โพสต์',
	
	'SORT_TOPIC_TITLE'			=> 'หัวข้อกระทู้',
	'SORT_USERNAME'				=> 'ชื่อผู้ใช้',
	'SPLIT_TOPIC'				=> 'แบ่งหัวข้อ',
	'SQL_ERROR_OCCURRED'		=> 'พบข้อผิดพลาดที่เกิดจากฐานข้อมูลขณะเปิดหน้านี้ กรุณาติดต่อ %sผู้ดูแลบอร์ด%s ',
	'STATISTICS'				=> 'สถิติ',
	'START_WATCHING_FORUM'		=> 'ส่งเมลล์แจ้งเมื่อมีกระทู้ใหม่ในหมวดนี้',
	'START_WATCHING_TOPIC'		=> 'ส่งเมลล์แจ้งเมื่อมีการตอบกระทู้นี้',
	'STOP_WATCHING_FORUM'		=> 'ยกเลิกส่งเมลล์แจ้งเมื่อมีกระทู้ใหม่ในบอร์ดนี้',
	'STOP_WATCHING_TOPIC'		=> 'ยกเลิกส่งเมลล์แจ้งเมื่อมีการตอบกระทู้นี้',
	'SUBFORUM'					=> 'บอร์ดย่อย',
	'SUBFORUMS'					=> 'บอร์ดย่อย',	
	'SUBJECT'					=> 'หัวข้อ',
	'SUBMIT'					=> 'ตั้งกระทู้',
	'TH_SUBMIT'			=> 'ตอบกระทู้',
	'TH_REPLY'				=> 'ตอบกระทู้',
	'FULL_EDITOR'	=> 'ไปช่องตอบกระตู้เต็มรูปแบบ',
	'TERMS_USE'			=> 'เงื่อนไขการใช้งาน',
	'TEST_CONNECTION'	=> 'ทดสอบการเชื่อมต่อ',
	'THE_TEAM'			=> 'ทีมงาน',
	'TIME'				=> 'เวลา',
	'TOO_LARGE'						=> 'ค่าที่ท่านใส่มีค่ามากเกินไป.',
	'TOO_LARGE_MAX_RECIPIENTS'		=> 'ค่าของ<strong>จำนวนผู้รับสูงสุดที่อนุญาตต่อ 1 ข้อความส่วนตัว </strong> การตั้งค่าที่คุณป้อนมีค่ามากเกินไป.',
	'TOO_LONG'						=> 'ค่าที่คุณป้อนยาวเกินไป.',

	'TOO_LONG_AIM'				=> 'ชื่อยาวเกินไป',
	'TOO_LONG_CONFIRM_CODE'		=> 'ยืนยันโค้ดยาวเกินไป',
	'TOO_LONG_DATEFORMAT'		=> 'รูปแบบเวลายาวเกินไป',
	'TOO_LONG_ICQ'				=> 'หมายเลขไอซีคิวยาวเกินไป',
	'TOO_LONG_INTERESTS'		=> 'The interests ยาวเกินไป',
	'TOO_LONG_JABBER'			=> 'The Jabber account ยาวเกินไป.',
	'TOO_LONG_LOCATION'			=> 'ที่อยู่ยาวเกินไป',
	'TOO_LONG_MSN'				=> 'ชื่อ MSN ยาวเกินไป.',
	'TOO_LONG_NEW_PASSWORD'		=> 'รหัสผ่าน ยาวเกินไป',
	'TOO_LONG_OCCUPATION'		=> 'อาชีพยาวเกินไป.',
	'TOO_LONG_PASSWORD_CONFIRM'	=> 'ยืนยันรหัสผ่าน ยาวเกินไป.',
	'TOO_LONG_USER_PASSWORD'	=> 'รหัสผ่าน ยาวเกินไป.',
	'TOO_LONG_USERNAME'			=> 'ชื่อผู้ใช้ ยาวเกินไป.',
	'TOO_LONG_EMAIL'			=> 'ชื่อ อีเมล ยาวเกินไป.',
	'TOO_LONG_EMAIL_CONFIRM'	=> 'ยืนยันชื่อ อีเมล ยาวเกินไป.',
	'TOO_LONG_WEBSITE'			=> 'ชื่อเว็บยาวเกินไป.',
	'TOO_LONG_YIM'				=> 'ชื่อ Yahoo! Messenger ยาวเกินไป.',
	'TOO_MANY_VOTE_OPTIONS'		=> 'ลงตัวเลือกการโหวดมากเกินไป.',
	'TOO_SHORT'						=> 'ค่าที่คุณป้อนสั้นเกินไป.',	
	'TOO_SHORT_AIM'				=> 'ชื่อสั้นเกินไป.',
	'TOO_SHORT_CONFIRM_CODE'	=> 'ยืนยันโค้ดสั้นเกินไป.',
	'TOO_SHORT_DATEFORMAT'		=> 'รูปแบบวันสั้นเกินไป.',
	'TOO_SHORT_ICQ'				=> 'หมายเลข ICQ สั้นเกินไป.',
	'TOO_SHORT_INTERESTS'		=> 'ความสนใจสั้นเกินไป.',
	'TOO_SHORT_JABBER'			=> 'The Jabber account name สั้นเกินไป.',
	'TOO_SHORT_LOCATION'		=> 'ที่อยู่สั้นเกินไป.',
	'TOO_SHORT_MSN'				=> 'ชื่อ MSNM/WLM สั้นเกินไป.',
	'TOO_SHORT_NEW_PASSWORD'	=> 'รหัสผ่านสั้นเกินไป.',
	'TOO_SHORT_OCCUPATION'		=> 'อาชีพสั้นเกินไป.',
	'TOO_SHORT_PASSWORD_CONFIRM'	=> 'ยืนยันรหัสผ่านสั้นเกินไป.',
	'TOO_SHORT_USER_PASSWORD'		=> 'รหัสผ่านสั้นเกินไป.',
	'TOO_SHORT_USERNAME'			=> 'ชื่อผู้ใช้สั้นเกินไป.',
	'TOO_SHORT_EMAIL'				=> 'ชื่ออีเมลสั้นเกินไป.',
	'TOO_SHORT_EMAIL_CONFIRM'		=> 'ยืนยันชื่ออีเมลสั้นเกินไป.',
	'TOO_SHORT_WEBSITE'				=> 'ชื่อเว็บสั้นเกินไป.',
	'TOO_SHORT_YIM'					=> 'ชื่อ Yahoo! Messenger สั้นเกินไป.',
	'TOO_SMALL'						=> 'ค่าที่ท่านกรอกน้อยเกินไป.',
	'TOO_SMALL_MAX_RECIPIENTS'		=> 'ค่าของ <strong>จำนวนสูงสุดของผู้รับข้อความส่วนตัว</strong> ตั้งค่าไว้น้อยเกินไป.',

	'TOPIC'				=> 'หัวข้อ',
	'TOPICS'			=> 'หัวข้อ',

	'TOPICS_UNAPPROVED'	=> 'หัวข้อที่ยังไม่อนุมัติ.',
	
	'TOPIC_ICON'		=> 'ไอคอนกระทู้',
	'TOPIC_LOCKED'		=> 'กระทู้นี้ถูกล็อก คุณไม่สามารถแก้ไขข้อความ หรือ ตอบกลับในกระทู้นี้',
	'TOPIC_LOCKED_SHORT'=> 'หัวข้อถูกล็อก',	
	'TOPIC_MOVED'		=> 'ย้ายกระทู้',
	'TOPIC_REVIEW'		=> 'กระทู้แนะนำ',
	'TOPIC_TITLE'		=> 'หัวข้อกระทู้',
	'TOPIC_UNAPPROVED'	=> 'กระทู้นี้ไม่ได้รับการอนุมัติ',
	'TOTAL_ATTACHMENTS'	=> 'ไฟล์แนบ',
	'TOTAL_LOG'			=> '1 log',
	'TOTAL_LOGS'		=> '%d logs',
	'TOTAL_NO_PM'		=> 'ข้อความส่วนตัวทั้งหมด 0 ข้อความ',
	'TOTAL_PM'			=> 'ข้อความส่วนตัวทั้งหมด 1 ข้อความ',
	'TOTAL_PMS'			=> 'ข้อความส่วนตัวทั้งหมด %d ข้อความ',
	
	'TOTAL_POSTS'			=> 'โพสต์ทั้งหมด',
	'TOTAL_POSTS_OTHER'		=> 'โพสต์ทั้งหมด <strong>%d</strong>',
	'TOTAL_POSTS_ZERO'		=> 'โพสต์ทั้งหมด <strong>0</strong>',
	'TOPIC_REPORTED'		=> 'กระทู้ถูก reporte แล้ว',
	'TOTAL_TOPICS_OTHER'	=> 'กระทู้ทั้งหมด <strong>%d</strong>',
	'TOTAL_TOPICS_ZERO'		=> 'กระทู้ทั้งหมด <strong>0</strong>',
	'TOTAL_USERS_OTHER'		=> 'สมาชิกทั้งหมด <strong>%d</strong>',
	'TOTAL_USERS_ZERO'		=> 'สมาชิกทั้งหมด <strong>0</strong>',
	'TRACKED_PHP_ERROR'		=> 'ติดตามข้อผิดพลาด PHP: %s',

	'UNABLE_GET_IMAGE_SIZE'	=> 'ไม่สามารถระบุความกว้างและความสูงของรูปภาพได้.',
	'UNABLE_TO_DELIVER_FILE'=> 'ไม่สามารถส่งไฟล์ได้.',
	'UNKNOWN_BROWSER'		=> 'ไม่รู้จักเบราว์เซอร์',
	'UNMARK_ALL'			=> 'ยกเลิกที่เลือกทั้งหมด',
	'UNREAD_MESSAGES'		=> 'ข้อความที่ยังไม่ได้อ่าน',
	'UNREAD_PM'				=> '<strong>%d</strong> ข้อความยังไม่ได้อ่าน',
	'UNREAD_PMS'			=> '<strong>%d</strong> ข้อความยังไม่ได้อ่าน',
	'UNREAD_POST'			=> 'โพสที่ยังไม่ได้อ่าน',
	'UNREAD_POSTS'			=> 'หลายโพสที่ยังไม่ได้อ่าน',	
	'UNWATCHED_FORUMS'		=> 'คุณไม่สามารถเผ้าดู บอร์ด นี้ได้',
	'UNWATCHED_TOPICS'		=> 'คุณไม่สามารถเผ้าดูกระทู้นี้ได้',
	'UNWATCHED_FORUMS_TOPICS'	=> 'คุณไม่มีสิทธิ์เข้าใช้งานในบอร์ด นี้',
	
	'UPDATE'				=> 'อัปเดท',
	'UPLOAD_IN_PROGRESS'	=> 'อัพโหลดเรียบร้อยแล้ว',
	'URL_REDIRECT'			=> 'หากบราว์เซอร์ไม่รองรับการย้อนกลับอัตโนมัติ %s กรุณาคลิกที่นี่ เพื่อย้อนกลับ%s.',
	'USERGROUPS'			=> 'กลุ่ม',
	'USERNAME'				=> 'ชื่อผู้ใช้',
	'USERNAMES'				=> 'ชื่อผู้ใช้',
	'USER_AVATAR'			=> 'ภาพประจำตัวสมาชิก',
	'USER_CANNOT_READ'		=> 'ท่านไม่สามารถอ่านกระทู้ในบอร์ด นี้ได้.',
	'USER_POST'				=> '%d โพสต์',
	'USER_POSTS'			=> '%d โพสต์',
	'USERS'					=> 'สมาชิก',
	'USE_PERMISSIONS'		=> 'ทดสอบสิทธิ ของผู้ ใช้',

	'USER_NEW_PERMISSION_DISALLOWED'	=> 'ขออภัยคุณไม่รับการอนุญาตให้ใช้คุณลักษณะนี้. คุณอาจต้องลงทะเบียน และอาจต้องมีส่วนร่วมมากขึ้นกว่านี้่เพื่อให้สามารถใช้คุณสมบัตินีได้้.',

	'VARIANT_DATE_SEPARATOR'	=> ' / ',	
	'VIEWED'					=> 'วิว',
	'VIEWING_FAQ'				=> 'กำลังดู รายการช่วยเหลือ',
	'VIEWING_MEMBERS'			=> 'กำลังดู รายละเอียดสมาชิก',
	'VIEWING_ONLINE'			=> 'กำลังดู ใครกำลังออนไลน์',
	'VIEWING_MCP'				=> 'กำลังดู เมนูสำหรับผู้ช่วยดูแลบอร์ด',
	'VIEWING_MEMBER_PROFILE'	=> 'กำลังดู ข้อมูลส่วนตัวสมาชิก',
	'VIEWING_PRIVATE_MESSAGES'	=> 'กำลังดู ข้อความส่วนตัว',
	'VIEWING_REGISTER'			=> 'กำลัง สมัครสมาชิก',
	'VIEWING_UCP'				=> 'กำลัง ตั้งค่าส่วนตัวสมาชิก',
	'VIEWS'						=> 'แสดง',
	'VIEW_BOOKMARKS'			=> 'แสดงรายการโปรด',
	'VIEW_FORUM_LOGS'			=> 'ดูประวัติ',
	'VIEW_LATEST_POST'			=> 'ดูข้อความล่าสุด',
	'VIEW_NEWEST_POST'			=> 'ดูโพสต์ที่ยังไม่ได้อ่าน',
	'VIEW_NOTES'				=> 'ดูบันทึกของผู้ ใช้',
	'VIEW_ONLINE_TIME'			=> 'ภายใน  %d นาทีที่ผ่านมาี',
	'VIEW_ONLINE_TIMES'			=> 'ภายใน %d นาทีที่ผ่านมาี',
	'VIEW_TOPIC'				=> 'แสดงกระทู้',
	'VIEW_TOPIC_ANNOUNCEMENT'	=> 'ประกาศ: ',
	'VIEW_TOPIC_GLOBAL'			=> 'ประกาศทั่วไป: ',
	'VIEW_TOPIC_LOCKED'			=> 'ล็อกหัวข้อ ',
	'VIEW_TOPIC_LOGS'			=> 'ดูประวัติ',
	'VIEW_TOPIC_MOVED'			=> 'ย้ายหัวข้อ ',
	'VIEW_TOPIC_POLL'			=> 'แบบสำรวจ: ',
	'VIEW_TOPIC_STICKY'			=> 'ติดหมุดให้หัวข้อนี้อยู่ด้านบน: ',
	'VISIT_WEBSITE'				=> 'เข้าชมเว็บไซต์',

	'WARNINGS'			=> 'คำเตือน',
	'WARN_USER'			=> 'เตือนผู้ใช้งาน',
	'WELCOME_SUBJECT'	=> 'ยินดีต้อนรับบอร์ด %s ',
	'WEBSITE'			=> 'เว็บไซต์',
	'WHOIS'				=> 'Whois',
	'WHO_IS_ONLINE'		=> 'ผู้ใช้งานขณะนี้',
	
	'WRONG_PASSWORD'			=> 'รหัสไม่ถูกต้อง',
	'WRONG_DATA_ICQ'			=> 'หมายเลขไอซีคิว ไม่ถูกต้อง',
	'WRONG_DATA_JABBER'			=> 'บัญชี Jabber ไม่ถูกต้อง',
	'WRONG_DATA_LANG'			=> 'ภาษานี้ไม่ถูกต้อง',
	'WRONG_DATA_WEBSITE'		=> 'ที่อยู่เวบไซต์ไม่ถูกต้อง, ต้องประกอบด้วยโปรโตคอล  ตัวอย่างเช่น http://www.example.com/.',
	'WROTE'						=> 'เขียน',
	
	'YEAR'				=> 'ปี',
	'YEAR_MONTH_DAY'	=> '(ปี-เดือน-วัน)',
	'YES'				=> 'ใช่',
	'YIM'				=> 'YIM',	
	'YOU_LAST_VISIT'	=> 'ใช้งานล่าสุด: %s',
	'YOU_NEW_PM'		=> 'มีข้อความส่วนตัวมาถึงท่าน',
	'YOU_NEW_PMS'		=> 'มีข้อความส่วนตัวมาถึงท่าน',
	'YOU_NO_NEW_PM'		=> 'ไม่มีข้อความส่วนตัว',

	'datetime'	=> array(
		'TODAY'			=> 'วันนี้',
		'TOMORROW'		=> 'พรุ่งนี้',
		'YESTERDAY'		=> 'เมื่อวานนี้',
		'Sunday'		=> 'วันอาทิตย์',
		'Monday'		=> 'วันจันทร์',
		'Tuesday'		=> 'วันอังคาร',
		'Wednesday'		=> 'วันพุธ',
		'Thursday'		=> 'วันพฤหัสบดี',
		'Friday'		=> 'วันศุกร์',
		'Saturday'		=> 'วันเสาร์',
		'Sun'			=> 'อาทิตย์ ',
		'Mon'			=> 'จันทร์',
		'Tue'			=> 'อังคาร',
		'Wed'			=> 'พุธ',
		'Thu'			=> 'พฤหัสฯ.',
		'Fri'			=> 'ศุกร์',
		'Sat'			=> 'เสาร์',
		'January'		=> 'มกราคม',
		'February'		=> 'กุมถาพันธ์',
		'March'			=> 'มีนาคม',
		'April'			=> 'เมษายน',
		'May'			=> 'พฤษภาคม',
		'June'			=> 'มิถุนายน',
		'July'			=> 'กรกฏาคม',
		'August'		=> 'สิงหาคม',
		'September'		=> 'กันยายน',
		'October'		=> 'ตุลาคม',
		'November'		=> 'พฤศจิกายน',
		'December'		=> 'ธันวาคม',
		'Jan'			=> 'ม.ค.',
		'Feb'			=> 'ก.พ.',
		'Mar'			=> 'มี.ค.',
		'Apr'			=> 'เม.ย.',
		'May_short'		=> 'พ.ค.',
		'Jun'			=> 'มิ.ย.',
		'Jul'			=> 'ก.ค.',
		'Aug'			=> 'ส.ค.',
		'Sep'			=> 'ก.ย.',
		'Oct'			=> 'ต.ค.',
		'Nov'			=> 'พ.ย.',
		'Dec'			=> 'ธ.ค.',
	),

	'tz'	=> array(
		'-12'	=> 'GMT - 12 ชั่วโมง',
		'-11'	=> 'GMT - 11 ชั่วโมง',
		'-10'	=> 'GMT - 10 ชั่วโมง',
		'-9.5'	=> 'GMT - 9:30 ชั่วโมง',
		'-9'	=> 'GMT - 9 ชั่วโมง',
		'-8'	=> 'GMT - 8 ชั่วโมง',
		'-7'	=> 'GMT - 7 ชั่วโมง',
		'-6'	=> 'GMT - 6 ชั่วโมง',
		'-5'	=> 'GMT - 5 ชั่วโมง',
		'-4'	=> 'GMT - 4 ชั่วโมง',
		'-3.5'	=> 'GMT - 3:30 ชั่วโมง',
		'-3'	=> 'GMT - 3 ชั่วโมง',
		'-2'	=> 'GMT - 2 ชั่วโมง',
		'-1'	=> 'GMT - 1 ชั่วโมง',
		'0'		=> 'GMT',
		'1'		=> 'GMT + 1 ชั่วโมง',
		'2'		=> 'GMT + 2 ชั่วโมง',
		'3'		=> 'GMT + 3 ชั่วโมง',
		'3.5'	=> 'GMT + 3:30 ชั่วโมง',
		'4'		=> 'GMT + 4 ชั่วโมง',
		'4.5'	=> 'GMT + 4:30 ชั่วโมง',
		'5'		=> 'GMT + 5 ชั่วโมง',
		'5.5'	=> 'GMT + 5:30 ชั่วโมง',
		'5.75'	=> 'GMT + 5:45 ชั่วโมง',
		'6'		=> 'GMT + 6 ชั่วโมง',
		'6.5'	=> 'GMT + 6:30 ชั่วโมง',
		'7'		=> 'GMT + 7 ชั่วโมง',
		'8'		=> 'GMT + 8 ชั่วโมง',
		'8.75'	=> 'GMT + 8:45 ชั่วโมง',
		'9'		=> 'GMT + 9 ชั่วโมง',
		'9.5'	=> 'GMT + 9:30 ชั่วโมง',
		'10'	=> 'GMT + 10 ชั่วโมง',
		'10.5'	=> 'GMT + 10:30 ชั่วโมง',
		'11'	=> 'GMT + 11 ชั่วโมง',
		'11.5'	=> 'GMT + 11:30 ชั่วโมง',
		'12'	=> 'GMT + 12 ชั่วโมง',
		'12.75'	=> 'GMT + 12:45 ชั่วโมง',
		'13'	=> 'GMT + 13 ชั่วโมง',
		'14'	=> 'GMT + 14 ชั่วโมง',
		'dst'	=> '[ <abbr title="Daylight Saving Time">DST</abbr> ]',
	),

	'tz_zones'	=> array(
		'-12'	=> '[GMT - 12] Baker Island Time',
		'-11'	=> '[GMT - 11] Niue Time, Samoa Standard Time',
		'-10'	=> '[GMT - 10] Hawaii',
		'-9.5'	=> '[GMT - 9:30] Marquesas Islands Time',
		'-9'	=> '[GMT - 9] Alaska Standard Time, Gambier Island Time',
		'-8'	=> '[GMT - 8] Pacific Standard Time',
		'-7'	=> '[GMT - 7] Mountain Standard Time',
		'-6'	=> '[GMT - 6] Central Standard Time',
		'-5'	=> '[GMT - 5] Eastern Standard Time',
		'-4'	=> '[GMT - 4] Atlantic Standard Time',
		'-3.5'	=> '[GMT - 3:30] Newfoundland Standard Time',
		'-3'	=> '[GMT - 3] Amazon Standard Time, Central Greenland Time',
		'-2'	=> '[GMT - 2] Fernando de Noronha Time, South Georgia &amp; the South Sandwich Islands Time',
		'-1'	=> '[GMT - 1] Azores, Cape Verde Islands',
		'0'		=> '[GMT] Western European Time, Greenwich Mean Time',
		'1'		=> '[GMT + 1] Central European Time, West African Time',
		'2'		=> '[GMT + 2] Eastern European Time, Central African Time',
		'3'		=> '[GMT + 3] Moscow Standard Time, Eastern African Time',
		'3.5'	=> '[GMT + 3:30] Iran Standard Time',
		'4'		=> '[GMT + 4] Gulf Standard Time, Samara Standard Time',
		'4.5'	=> '[GMT + 4:30] Afghanistan Time',
		'5'		=> '[GMT + 5] Pakistan Standard Time, Yekaterinburg Standard Time',
		'5.5'	=> '[GMT + 5:30] Indian Standard Time, Sri Lanka Time',
		'5.75'	=> '[GMT + 5:45] Nepal Time',
		'6'		=> '[GMT + 6] Bangladesh Time, Bhutan Time, Novosibirsk Standard Time',
		'6.5'	=> '[GMT + 6:30] Cocos Islands Time, Myanmar Time',
		'7'		=> '[GMT + 7]  กรุงเทพฯ, ฮานอยด์, จากาต้า',
		'8'		=> '[GMT + 8] Chinese Standard Time, Australian Western Standard Time, Irkutsk Standard Time',
		'8.75'	=> '[GMT + 8:45] Southeastern Western Australia Standard Time',
		'9'		=> '[GMT + 9] Japan Standard Time, Korea Standard Time, Chita Standard Time',
		'9.5'	=> '[GMT + 9:30] Australian Central Standard Time',
		'10'	=> '[GMT + 10] Australian Eastern Standard Time, Vladivostok Standard Time',
		'10.5'	=> '[GMT + 10:30] Lord Howe Standard Time',
		'11'	=> '[GMT + 11] Solomon Island Time, Magadan Standard Time',
		'11.5'	=> '[GMT + 11:30] Norfolk Island Time',
		'12'	=> '[GMT + 12] New Zealand Time, Fiji Time, Kamchatka Standard Time',
		'12.75'	=> '[GMT + 12:45] Chatham Islands Time',
		'13'	=> '[GMT + 13] Tonga Time, Phoenix Islands Time',
		'14'	=> '[GMT + 14] Line Island Time',
	),
	
	'dateformats'	=> array(
		'd M Y, H:i'	=> '01 ม.ค. 2007, 13:37',
		'd M Y H:i'	=> '01 ม.ค. 2007 13:37',
		'M jS, \'y, H:i'	=> 'ม.ค. 1st, \'07, 13:37',
		'D M d, Y g:i a'	=> 'จันทร์ ม.ค. 01, 2007 1:37 pm',
		'D d M Y g:i a'	=> 'จันทร์ 01 ม.ค. 2007 1:37 pm',		
		'F jS, Y, g:i a'	=> 'มกราคม 1st, 2007, 1:37 pm',
		'|d M Y|, H:i'	=> 'วันนี้, 13:37 / 01 ม.ค. 2007, 13:37',
		'|F jS, Y|, g:i a'	=> 'วันนี้, 1:37 pm / มกราคม 1st, 2007, 1:37 pm',
	),

	'default_dateformat'	=> 'D d M Y g:i a', // Mon 01 Jan 2007 1:37 pm

));
?>