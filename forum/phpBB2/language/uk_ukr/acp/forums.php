<?php
/**
*
* acp_forums [Ukrainian]
*
* @package language
* @version $Id: forums.php 9896 2009-07-31 12:46:15Z Kellanved $
* @copyright (c) 2005 phpBB Group
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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> 'Вік повідомлень для авто-очищення',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'Кількість днів з моменту написання останнього повідомлення, яка повинна пройти, щоб тему було автоматично видалено.',
	'AUTO_PRUNE_FREQ'			=> 'Частота автоочищення',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Період часу в днях між очищеннями.',
	'AUTO_PRUNE_VIEWED'			=> 'Автоочищення за часом останнього перегляду',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'Кількість днів з моменту останнього перегляду, по проходженню яких тему буде видалено.',

 	'CONTINUE' => 'Продовжити',
	'COPY_PERMISSIONS'				=> 'Скопіювати права доступу з',
	'COPY_PERMISSIONS_EXPLAIN' => 'Щоб спростити налаштування прав доступу для нового форуму, ви можете скопіювати права з іншого існуючого форуму.',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Новому форуму будуть присвоєні такі ж самі права доступу, як у форуму, який ви оберете зі списку. Якщо ви не обере форум зі списку, новостворений форум не буде видимим допоки не будуть встановлені права доступу.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Якщо ви оберете скопіювати права доступу, форум буде мати такі ж права доступу, як і той, який ви оберете тут. Це замінить усі встановлені раніше для цього форуму права доступу на права форуму, обраного зі списку. Якщо ви не оберете форум, залишаться попередні права доступу.',
 	'COPY_TO_ACL' => 'Крім того, ви також можете %sналаштувати нові права доступу%s для цього форуму.',
	'CREATE_FORUM'					=> 'Створити новий форум',

	'DECIDE_MOVE_DELETE_CONTENT'		=> 'Видалити вміст або перемістити в форум',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'Видалити підфоруми або перемістити в форум',
	'DEFAULT_STYLE'						=> 'Стиль за замовчуванням',
	'DELETE_ALL_POSTS'					=> 'Видалити повідомлення',
	'DELETE_SUBFORUMS'					=> 'Видалити підфоруми та повідомлення',
	'DISPLAY_ACTIVE_TOPICS'				=> 'Увімкнути активні теми',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'Якщо увімкнено, в даній категорії будуть відображатись активні теми в обраних підфорумах.',

	'EDIT_FORUM'					=> 'Редагувати форум',
	'ENABLE_INDEXING'				=> 'Увімкнути індексування для пошуку',
	'ENABLE_INDEXING_EXPLAIN'		=> 'Якщо увімкнено, повідомлення, написані в цей форум буде проіндексовано для пошуку.',
	'ENABLE_POST_REVIEW'			=> 'Увімкнути перегляд повідомлень',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Якщо увімкнено, користувачі зможуть переглянути своє повідомлення, якщо під час його створення в темі з\'явились нові повідомлення. Повинно бути вимкнено для чат-форумів.',
	'ENABLE_QUICK_REPLY' => 'Увімкнути швидку відповідь',
 	'ENABLE_QUICK_REPLY_EXPLAIN' => 'Вмикає швидку відповідь в даному форумі. Це налаштування не розглядається, якщо швидку відповідь вимкнено для усіх форумів. Швидка відповідь біде відображатись лише для користувачів, які мають доступ до розміщення повідомлень у даному форумі.',
  	
	'ENABLE_RECENT'					=> 'Відображати активні теми',
	'ENABLE_RECENT_EXPLAIN'			=> 'Якщо увімкнено, теми цього форуму будуть відображатись в списку активних тем.',
	'ENABLE_TOPIC_ICONS'			=> 'Увімкнути значки тем',

	'FORUM_ADMIN'						=> 'Адміністрація форуму',
	'FORUM_ADMIN_EXPLAIN'				=> 'В phpBB3 немає категорій, все базується на форумах. Кожен форум може мати необмежену кількість підфорумів, ви можете визначати, чи дозволено в ньому створювати теми чи ні. Тут ви можете додавати, редагувати, закривати, відкривати кожен з форумів, встановлювати деякі додаткові налаштування. Якщо ваші повідомлення і теми розсинхронізовані, ви можете синхронізувати їх. <strong>Для відображення новостворених форумів ви повинні скопіювати або встановити відповідні права доступу.</strong>',
	'FORUM_AUTO_PRUNE'					=> 'Увімкнути автоочищення',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'Очищає форум від тем, встановіть потрібні параметри нижче.',
	'FORUM_CREATED'						=> 'Форум успішно створено.',
	'FORUM_DATA_NEGATIVE'				=> 'Параметри очищення не можуть бути від\'ємними.',
	'FORUM_DESC_TOO_LONG'				=> 'Опис форуму занадто довгий, він повинен бути не більшим за 4000 повідомлень.',
	'FORUM_DELETE'						=> 'Видалити форум',
	'FORUM_DELETE_EXPLAIN'				=> 'Форма внизу дозволяє вам видалити форум. Якщо у форумі дозволено створювати повідомлення, ви можете вирішити, куди вам перемістити усі теми (чи форуми), які він містить.',
	'FORUM_DELETED'						=> 'Форум успішно видалено.',
	'FORUM_DESC'						=> 'Опис',
	'FORUM_DESC_EXPLAIN'				=> 'Будь-яка розмітка HTML, введена тут, буде відображатись в тому ж вигляді.',
	'FORUM_EDIT_EXPLAIN'				=> 'Форма внизу дозволяє вам налаштувати цей форум. Зауважте, що налаштування модерування і лічильника повідомлень встановлюються через права доступу до форумів для кожного користувача або групи.',
	'FORUM_IMAGE'						=> 'Зображення форуму',
	'FORUM_IMAGE_EXPLAIN'				=> 'Шлях, відносно директорії phpBB, до додаткового зображення, пов\'язаного з форумом.',
	'FORUM_IMAGE_NO_EXIST'           		 => 'Вказаного зображення форуму не існує',
	'FORUM_LINK_EXPLAIN'				=> 'Повний URL (включаючи протокол, наприклад: <samp>http://</samp>) місця призначення, на яку потрапить користувач, натиснувши на цей форум, наприклад: <samp>http://www.phpbb.com/</samp>.',
	'FORUM_LINK_TRACK'					=> 'Відслідковувати переходи',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'Рахує кількість натиснень на посилання форуму.',
	'FORUM_NAME'						=> 'Назва форуму',
	'FORUM_NAME_EMPTY'					=> 'Ви повинні ввести назву для цього форуму.',
	'FORUM_PARENT'						=> 'Батьківський форум',
	'FORUM_PASSWORD'					=> 'Пароль форуму',
	'FORUM_PASSWORD_UNSET'				=> 'Видалити пароль на форум',
	'FORUM_PASSWORD_UNSET_EXPLAIN'		=> 'Встановіть тут галочку, якщо ви хочете видалити пароль на форум.',
	'FORUM_PASSWORD_OLD'				=> 'Пароль форуму використовує застарілий метод шифрування і його потрібно змінити.',
	'FORUM_PASSWORD_CONFIRM'			=> 'Підтвердження паролю форуму',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Вводьте лише, якщо встановлюєте пароль на форум.',
	'FORUM_PASSWORD_EXPLAIN'			=> 'Встановлює пароль для цього форуму. Рекомендується використання системи встановлення прав доступу.',
	'FORUM_PASSWORD_MISMATCH'			=> 'Введені вами паролі не співпадають.',
	'FORUM_PRUNE_SETTINGS'				=> 'Налаштування очищення форуму',
	'FORUM_RESYNCED'					=> 'Форум "%s" успішно синхронізовано',
	'FORUM_RULES_EXPLAIN'				=> 'Правила форуму відображаються на кожній сторінці даного форуму.',
	'FORUM_RULES_LINK'					=> 'Посилання на правила форуму',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'Ви можете тут ввести URL сторінки/повідомлення, яке містить правила вашого форуму. Це налаштування замінить текст правил форуму.',
	'FORUM_RULES_PREVIEW'				=> 'Перегляд правил форуму',
	'FORUM_RULES_TOO_LONG'				=> 'Правила форуму повинні містити не більше 4000 символів.',
	'FORUM_SETTINGS'					=> 'Налаштування форуму',
	'FORUM_STATUS'						=> 'Статус форуму',
	'FORUM_STYLE'						=> 'Стиль форуму',
	'FORUM_TOPICS_PAGE'					=> 'Тем на сторінку',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'Якщо не рівне нулю, це значення замінить налаштування кількості тем на сторінку.',
	'FORUM_TYPE'						=> 'Тип форуму',
	'FORUM_UPDATED'						=> 'Інформацію про форум успішно оновлено.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> 'Ви хочете змінити форум з підфорумами та повідомленнями в посилання. Будь-ласка, перемістіть усі підфоруми в інший форум перед тим, як продовжувати, тому що після зміни форуму на посилання, ви не зможете більше бачити підфоруми, які на даний момент відносяться до цього форуму.',

	'GENERAL_FORUM_SETTINGS'	=> 'Загальні налаштування форуму',

	'LINK'					=> 'Посилання',
	'LIST_INDEX'			=> 'Відображати підфорум в списку форумів',
	'LIST_INDEX_EXPLAIN'	=> 'Відображає посилання на даний форум на головній сторінці в списку підфорумів батьківського форуму, якщо для батьківського форуму увімкнена опція “Відображати підфоруми”',
	'LIST_SUBFORUMS'         => 'Відображати підфоруми in legend',
	'LIST_SUBFORUMS_EXPLAIN'   => 'Відображає підфоруми цього форуму на головній та інших сторінках у вигляді посилання within the legend, якщо увімкнена опція “Відображати підфорум в списку форумів”.',
	'LOCKED'				=> 'Заблоковано',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'Форум, який ви обрали для переміщення повідомлень, недоступний для розміщення повідомлень. Будь-ласка, оберіть доступний форум.',
	'MOVE_POSTS_TO'					=> 'Перемістити повідомлення в',
	'MOVE_SUBFORUMS_TO'				=> 'Перемістити підфоруми в',

	'NO_DESTINATION_FORUM'			=> 'Ви не задали форум для переміщення вмісту.',
	'NO_FORUM_ACTION'				=> 'Не задано дію для вмісту форуму.',
	'NO_PARENT'						=> 'Немає',
	'NO_PERMISSIONS'				=> 'Не копіювати права доступу',
	'NO_PERMISSION_FORUM_ADD'		=> 'Ви не маєте необхідних прав доступу для додавання нових форумів.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'У вас недостатньо прав для видалення форумів.',

	'PARENT_IS_LINK_FORUM'		=> 'Заданий вами батьківський форум є посиланням. Посилання на форуму не можуть містити інші форуми. Задайте, будь-ласка, в якості батьківського форуму категорію або форум.',
	'PARENT_NOT_EXIST'			=> 'Батьківський форум не існує.',
	'PRUNE_ANNOUNCEMENTS'		=> 'Видаляти оголошення',
	'PRUNE_STICKY'				=> 'Видаляти прикріплені теми',
	'PRUNE_OLD_POLLS'			=> 'Видаляти старі голосування',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Видаляє теми з голосуваннями, в яких не було голосів in for post age days.',

	'REDIRECT_ACL'	=> 'Тепер ви можете %sвстановити права доступу%s для цього форуму.',

	'SYNC_IN_PROGRESS'			=> 'Синхронізація форуму',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'Відбувається синхронізаця тем %1$d/%2$d.',

	'TYPE_CAT'			=> 'Категорія',
	'TYPE_FORUM'		=> 'Форум',
	'TYPE_LINK'			=> 'Посилання',

	'UNLOCKED'			=> 'Відкрито',
));

?>