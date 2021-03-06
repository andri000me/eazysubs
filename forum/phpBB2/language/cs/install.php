<?php
/** 
*
* install [Čeština]
*
* @package language
* @version $Id: install.php 505 2010-11-21 10:32:21Z ameeck $
* @copyright (c)  2007 phpBB.cz
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
* Original copyright: (c) 2005 phpBB Group
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
	'ADMIN_CONFIG'				=> 'Nastavení administrátora',
	'ADMIN_PASSWORD'			=> 'Heslo administrátora',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Potvrdit heslo administrátora',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Prosím vložte heslo mezi 6 a 30 znaky.',
	'ADMIN_TEST'				=> 'Zkontrolovat nastavení administrátora',
	'ADMIN_USERNAME'			=> 'Uživ. jméno administrátora',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Prosím vložte uživatelské jméno mezi 3 a 20 znaky.',
	'APP_MAGICK'				=> 'Podpora Imagemagick [ Přílohy ]',
	'AUTHOR_NOTES'				=> 'Poznámky autora<br />» %s',
	'AVAILABLE'					=> 'Dostupné',
	'AVAILABLE_CONVERTORS'		=> 'Dostupné konvertory',

	'BEGIN_CONVERT'				=> 'Začít přenesení',
	'BLANK_PREFIX_FOUND'		=> 'Sken tabulek ukázal, že je v&nbsp;databázi existující instalace bez tabulkových předpon.',
	'BOARD_NOT_INSTALLED'			=> 'Nebyla nalezena žádná instalace',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'Pro provedení přechodu musíte mít nainstalovanou čistou verzi phpBB3 do které se naimportují stará data. Pokračujte prosím <a href="%s">instalováním fóra</a>.',

	'CATEGORY'					=> 'Kategorie',
	'CACHE_STORE'				=> 'Druh cache',
	'CACHE_STORE_EXPLAIN'		=> 'Fyzický prostor pro cachování dat; preferován je systém souborů.',
	'CAT_CONVERT'				=> 'Přenést',
	'CAT_INSTALL'				=> 'Instalovat',
	'CAT_OVERVIEW'				=> 'Přehled',
	'CAT_UPDATE'				=> 'Aktualizovat',
	'CHANGE'					=> 'Změnit',
	'CHECK_TABLE_PREFIX'		=> 'Zkontrolujte předponu tabulek a zkuste znovu.',
	'CLEAN_VERIFY'				=> 'Čištění a ověřování konečné struktury',
	'CLEANING_USERNAMES'      	=> 'Pročišťuji uživatelská jména',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> je čisté uživatelské jméno pro:',
	'COLLIDING_USERNAMES_FOUND'	=> ' Na vašem starém fóru byla nalezena kolidující uživatelská jména. Pro dokončení konverze smažte nebo přejmenujte jednoho z nich, tak aby nebyla dvě shodná jména v&nbsp;databázi.',
	'COLLIDING_USER'			=> '» uživatelské ID: <strong>%d</strong> uživatelské jméno: <strong>%s</strong> (%d příspěvků)',
	'CONFIG_CONVERT'			=> 'Přenesení nastavení',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'Nebylo možné vytvořit soubor s&nbsp;konfigurací. Alternativní způsoby pro vytvoření tohoto souboru jsou uvedeny níže.',
	'CONFIG_FILE_WRITTEN'		=> 'Konfigurační soubor byl vytvořen. Nyní můžete pokračovat na další krok instalace.',
	'CONFIG_PHPBB_EMPTY'		=> 'Konfigurační proměnná phpBB3 „%s“ je prázdná.',
	'CONFIG_RETRY'				=> 'Zkusit znovu',
	'CONTACT_EMAIL_CONFIRM'		=> 'Potvrdit kontaktní e-mail',
	'CONTINUE_CONVERT'			=> 'Pokračovat v&nbsp;přenosu',
	'CONTINUE_CONVERT_BODY'		=> 'Byl zjištěn předchozí pokus o&nbsp;přechod na jinou verzi. Nyní si můžete vybrat mezi novým pokusem nebo pokračováním v&nbsp;předchozím.',
	'CONTINUE_LAST'				=> 'Pokračovat posledním příkazem',
	'CONTINUE_OLD_CONVERSION'	=> 'Pokračovat v&nbsp;předchozím pokusu',
	'CONVERT'					=> 'Přenést',
	'CONVERT_COMPLETE'			=> 'Přenesení je hotové',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Úspěšně jste převedli vaše fórum na verzi phpBB 3.0. Nyní se můžete přihlásit pro <a href="../">přístup na vaše fórum</a>. Dříve než smažete složku install/ a zapnete své fórum, zkontrolujte, jestli všechna data byla úspěšně přenesena. Mějte na vědomí, že podpora phpBB je dostupná na internetu přes <a href="http://www.phpbb.com/support/documentation/3.0/">Uživatelský manuál</a> a <a href="http://www.phpbb.com/phpBB/viewforum.php?f=46">fórum podpory</a>',
	'CONVERT_INTRO'				=> 'Vítejte v&nbsp;phpBB – Univerzální Konvertovací Framework',
	'CONVERT_INTRO_BODY'		=> 'Odtud můžete importovat data z jiných (instalovaných) systémů pro fóra. Seznam níže uvádí všechny nyní dostupné moduly pro přechod. Pokud konvertor z verze, který hledáte, není na seznamu, zkuste navštívit naše stránky, kde další moduly mohou být ke stažení.',
	'CONVERT_NEW_CONVERSION'	=> 'Nový přechod na novou verzi',
	'CONVERT_NOT_EXIST'			=> 'Zvolený konvertor neexistuje',
	'CONVERT_OPTIONS'         => 'Možnosti',
	'CONVERT_SETTINGS_VERIFIED'	=> 'Informace, které jste vložili, byly oveřeny. Pro spuštení přechodu na novou verzi zmačknete tlačítko níže',
	'CONV_ERR_FATAL'					=> 'Kritické selhání konverze',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'FTP upload příloh je povolený na starém fóru. Vypněte prosím tuto možnost a zkontrolujte, jestli je přítomný platný adresář pro upload, poté zkopírujte všechny přílohy do této nové, z webu přístupné složky. Jakmile toto uděláte, restartujte konvertor.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Nejsou dostupné žádné konfigurační informace pro přechod.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Nelze získat informace o&nbsp;přístupu na fóra.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Nelze získat kategorie.',
	'CONV_ERROR_GET_CONFIG'				=> 'Nelze získat nastavení fóra.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Nelze přistoupit k/číst „%s“.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Nelze získat oprávnění skupin.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Byla zjištěna inkonzistence v&nbsp;tabulkách skupin v&nbsp;add_bots() – musíte přidat všechny zvláštní skupiny, pokud to budete dělat ručně.',
	'CONV_ERROR_INSERT_BOT'				=> 'Nelze vložit bota do tabulky uživatelů.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Nelze vložit bota do tabulky botů.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Nelze vložit uživatele do user_group tabulky.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Chyba v&nbsp;parseru zpráv',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Poznámka vývojáři: Musíte specifikovat $convertor[\'avatar_path\'] pro použití %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Relativní cesta k&nbsp;zdrojovému fóru nebyla specifikována.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Poznámka vývojáři: Musíte specifikovat $convertor[\'avatar_gallery_path\'] pro použití %s.',
	'CONV_ERROR_NO_GROUP'				=> 'Skupina „%1$s“ nebyla nalezena v&nbsp;%2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Poznámka vývojáři: Musíte specifikovat $convertor[\'ranks_path\'] pro použití %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Poznámka vývojáři: Musíte specifikovat $convertor[\'smilies_path\'] pro použití %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Poznámka vývojáři: Musíte specifikovat $convertor[\'upload_path\'] pro použití %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Nelze vložit/aktualizovat oprávnění.',
	'CONV_ERROR_PM_COUNT'				=> 'Nelze zjistit počet SZ ve složce.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Nelze vložit nové fórum nahrazující starou kategorii.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Nelze vložit nové fórum nahrazující staré fórum.',
	'CONV_ERROR_USER_ACCESS'			=> 'Nelze získat informace o&nbsp;oprávnění uživatelů.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Špatná skupina „%1$s“ definovaná v&nbsp;%2$s.',
	'CONV_OPTIONS_BODY'					=> 'Tato stránka shromáždí všechna data nutná pro přístup k&nbsp;zdrojovému fóru. Vyplňte údaje k&nbsp;databázi starého fóra. Konvertor nebude v&nbsp;původní databázi nic měnit. Zdrojové fórum by mělo být vypnuto pro zajištění konzistentního přechodu.',
	'CONV_SAVED_MESSAGES'				=> 'Uložené zprávy',

	'COULD_NOT_COPY'			=> 'Nelze zkopírovat soubor <strong>%1$s</strong> do <strong>%2$s</strong><br /><br />Zkontrolujte, jestli cílová složka existuje a je zapisovatelná',
	'COULD_NOT_FIND_PATH'		=> 'Nelze najít cestu k&nbsp;bývalému fóru. Zkontrolujte vaše nastavení a zkuste znovu.<br />» Zadaná cesta byla %s',

	'DBMS'						=> 'Druh databáze',
	'DB_CONFIG'					=> 'Nastavení databáze',
	'DB_CONNECTION'				=> 'Připojení k&nbsp;databázi',
	'DB_ERR_INSERT'				=> 'Chyba při zpracování <code>INSERT</code> dotazu',
	'DB_ERR_LAST'				=> 'Chyba při zpracování <var>query_last</var>',
	'DB_ERR_QUERY_FIRST'		=> 'Chyba při vykonávání <var>query_first</var>',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Chyba při vykonávání <var>query_first</var>, %s („%s“)',
	'DB_ERR_SELECT'				=> 'Chyba při běhu <code>SELECT</code> dotazu',
	'DB_HOST'					=> 'Databázový server nebo DSN',
	'DB_HOST_EXPLAIN'			=> 'DSN znamená Data Source Name a je důležité jen pro instalace přes OBDC. Pokud používáte PostgreSQL, použijte localhost pro připojení k lokálnímu serveru přes UNIX domain socket nebo 127.0.0.1 při připojení přes TCP.',
	'DB_NAME'					=> 'Název databáze',
	'DB_PASSWORD'				=> 'Heslo databáze',
	'DB_PORT'					=> 'Port databázového serveru',
	'DB_PORT_EXPLAIN'			=> 'Vyplňujte, jen když víte, že databázový server používá nestandardní port.',
	'DB_UPDATE_NOT_SUPPORTED'	=> 'Je nám líto, ale aktualizační skript neumí aktualizovat verze phpBB starší než “%1$s”. V této chvíli máte nainstalovanou verzi “%2$s”. Aktualizujte postupně na starší verzi před použitím tohoto skriptu. Pokud potřebujete pomoc, zeptejte se na diskuzním fóru na phpBB.cz nebo phpBB.com.',
	'DB_USERNAME'				=> 'Už. jméno databáze',
	'DB_TEST'					=> 'Vyzkoušet připojení',
	'DEFAULT_LANG'				=> 'Výchozí jazyk fóra',
	'DEFAULT_PREFIX_IS'			=> 'Výchozí předpona databázových tabulek pro %1$s je <strong>%2$s</strong>',
	'DEV_NO_TEST_FILE'			=> 'Nebyla zadaná žádná hodnota pro proměnnou test_file v&nbsp;konvertoru. Pokud jste uživateli tohoto konvertoru, měli byste toto nahlásit autorovi tohoto modulu. Pokud jste autor tohoto modulu, musíte specifikovat soubor, který existuje v&nbsp;zdrojovém fóru, pro ověření cesty k&nbsp;němu.',
	'DIRECTORIES_AND_FILES'		=> 'Nastavení adresářů a souborů',
	'DISABLE_KEYS'				=> 'Vypnutí kláves',
	'DLL_DB2'					=> 'DB2',
	'DLL_FIREBIRD'				=> 'Firebird',
	'DLL_FTP'					=> 'Podpora vzdáleného FTP [ Instalace ]',
	'DLL_GD'					=> 'Podpora GD grafiky [ Vizuální ověřování ]',
	'DLL_MBSTRING'				=> 'Podpora multi-byte znaků',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_2005'			=> 'MSSQL Server 2005+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ přes ODBC',
	'DLL_MSSQLNATIVE'         => 'MSSQL Server 2005+ [ Nativní ]',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL s&nbsp;MySQLi rozšířením',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL 7.x/8.x',
	'DLL_SQLITE'				=> 'SQLite',
	'DLL_XML'					=> 'Podpora XML [ Jabber ]',
	'DLL_ZLIB'					=> 'Podpora zlib komprese [ .gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'Stáhnout konfigurační soubor',
	'DL_CONFIG_EXPLAIN'			=> 'Můžete stáhnout celý konfigurační soubor na váš počítač. Budete pak muset nahrát soubor ručně na server a přepsat již existující prázdný konfigurační soubor v&nbsp;základním adresáři phpBB 3.0. Mějte na paměti, že je potřeba soubor nahrát ASCII přenosem (viz. dokumentace vašeho FTP klienta, pokud si nejste jisti tím, co děláte). Jakmile nahrajete soubor config.php, klikněte na „Hotovo“ pro přesun na další krok.',
	'DL_DOWNLOAD'				=> 'Stáhnout',
	'DONE'						=> 'Hotovo',

	'ENABLE_KEYS'				=> 'Znovu povoluji klávesy, toto může chvíli trvat.',

	'FILES_OPTIONAL'			=> 'Volitelné soubory a složky',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>Volitelné</strong> – Tyto složky, soubory nebo oprávnění nejsou povinné a nutné. Instalační postupy se pokusí použít ruzné jiné metody pro dosažení stejného výsledku i bez jejich existence nebo možnosti zapisovat do těchto souborů. Přesto přítomnost těchto souborů, složek a oprávnění urychlí instalační proces.',
	'FILES_REQUIRED'			=> 'Složky a soubory',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Povinné</strong> – Pro bezproblémový běh phpBB je potřeba, aby mohlo přistupovat nebo zapisovat do určitých souborů a složek. Pokud vidíte „Nebylo nalezeno“, musíte vytvořit odpovídající soubor nebo složku. Pokud vidíte „Nezapisovatelné“, musíte upravit oprávnění k&nbsp;této složce nebo souboru, tak aby phpBB mělo práva k&nbsp;zápisu.',
	'FILLING_TABLE'				=> 'Naplňuji tabulku <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Naplňování tabulek',
	'FIREBIRD_DBMS_UPDATE_REQUIRED'		=> 'phpBB dále nepodporuje databáze Firebird/Interbase starší verze 2.1. Aktualizujte vaší instalaci Firebird na minimálně 2.1.0 před pokračováním v aktualizaci fóra.',
	'FINAL_STEP'				=> 'Zpracovat poslední krok',
	'FORUM_ADDRESS'				=> 'Adresa fóra',
	'FORUM_ADDRESS_EXPLAIN'		=> 'Toto je http adresa vašeho bývalého fóra',
	'FORUM_PATH'				=> 'Cesta k&nbsp;fóru',
	'FORUM_PATH_EXPLAIN'		=> 'Toto je <strong>relativní</strong> cesta na disku k&nbsp;vašemu bývalému fóru <strong>ze základní složky instalace phpBB 3</strong>.',
	'FOUND'						=> 'Nalezeno',
	'FTP_CONFIG'				=> 'Přenést konfiguraci pomocí FTP',
	'FTP_CONFIG_EXPLAIN'		=> 'phpBB zjistilo přítomnost FTP modulu na tomto serveru. Můžete se pokusit přenést soubor config.php touto metodou, pokud chcete. Budete muset zadat níže požadované informace. Pamatujte, že uživ. jméno a heslo jsou ta k&nbsp;vašemu serveru! (Zeptejte se vašeho poskytovatele hostingu pokud si nejste jistí, která to jsou.)',
	'FTP_PATH'					=> 'FTP Cesta',
	'FTP_PATH_EXPLAIN'			=> 'Toto je cesta ze základní složky k&nbsp;adresáři phpBB, např. www_root/phpBB3/',
	'FTP_UPLOAD'				=> 'Nahrát',

	'GPL'						=> 'General Public Licence',
	
	'INITIAL_CONFIG'			=> 'Základní nastavení',
	'INITIAL_CONFIG_EXPLAIN'	=> 'Nyní, když instalace prokázala, že je možné nainstalovat phpBB na váš server, musíte zadat několik důležitých údajů. Pokud nevíte, jak se připojit k&nbsp;databázi, kontaktujte vašeho poskytovatele hostingových služeb (v první řadě) nebo využijte fórum podpory phpBB. Pečlivě zkontrolujte všechna data, než je odešlete.',
	'INSTALL_CONGRATS'			=> 'Gratulujeme',
	'INSTALL_CONGRATS_EXPLAIN'	=> '
		Právě jste úspěšně nainstalovali phpBB %1$s. Odsud máte dvě možnosti jak naložit s&nbsp;vaším novým fórem:</p>
		<h2>Převést existující fórum na phpBB3</h2>
		<p>phpBB je schopno převést data z starších verzí phpBB (2.0.x) nebo jiných systémů do phpBB3. Pokud máte existující fórum, které chcete převést, <a href="%2$s">pokračujte na konvertoru</a>.</p>
		<h2>Spustit vaše fórum!</h2>
		<p>Následující tlačítko vás přenese na stránku, odkud budete moct odeslat statistická data na servery phpBB. Velmi oceníme, pokud nám tato anonymní data poskytnete a pomůžete tak vývoji phpBB. Poté se dostanete do administraci, udělejte si chvíli čas a porozhlédněte se, co vám phpBB3 nabízí za možnosti. Podpora online je dostupná přes <a href="http://www.phpbb.com/support/documentation/3.0/">Dokumentaci</a> a <a href="http://www.phpbb.com/phpBB/viewforum.php?f=46">phpBB.com fórum(ENG)</a> nebo <a href="http://www.phpbb.cz/viewforum.php?f=29">phpBB.cz fórum(CZ)</a>, nahlédněte do <a href="%3$s">README</a> pro další informace.</p><p><strong>Nyní prosím smažte, přesuňte nebo přejmenujte složku install/. Dokud tato složka bude tam, kde je nyní, bude funkční jen administrace fóra (ACP).</strong>',
	'INSTALL_INTRO'				=> 'Vítejte v&nbsp;instalaci',
	
	'INSTALL_INTRO_BODY'		=> 'Tento postup vám pomůže s&nbsp;instalací phpBB3 na váš server.</p><p>Abyste mohli pokračovat, budete potřebovat znát následující informace:</p>

	<ul>
		<li>Druh databáze – databáze, kterou budete používat.</li>
		<li>Databázový server nebo DSN – adresa databázového serveru.</li>
		<li>Port databázového serveru – port k&nbsp;připojení na databázi (ve většině případu stačí ponechat nevyplněné).</li>
		<li>Název databáze – název databáze uložené na serveru.</li>
		<li>Uživatelské jméno a heslo databáze – přístupové údaje k&nbsp;databázi.</li>
	</ul>
	
	<p><strong>Poznámka:</strong> Pokud instalujete a používáte SQLite, měli byste zadat úplnou cestu k&nbsp;databázi do DSN pole a nechat pole pro jméno a heslo prázdné. Z bezpečnostních důvodů byste měli zajistit, že soubor databáze bude uložen na místě, které není přístupné z webu.</p>

	<p>phpBB3 lze spustit na těchto databázích:</p>
	<ul>
		<li>MySQL 3.23 nebo vyšší (MySQLi je podporováno)</li>
		<li>PostgreSQL 7.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>Firebird 2.1+</li>
		<li>MS SQL Server 2000 nebo vyšší (přímo nebo přes ODBC)</li>
		 <li>MS SQL Server 2005 nebo vyšší (nativní)</li>
		<li>Oracle</li>
	</ul>
	
	<p>Pouze databáze podporované na vašem serveru budou zobrazeny.',
	'INSTALL_INTRO_NEXT'		=> 'Pro zahájení instalace klikněte na tlačítko níže.',
	'INSTALL_LOGIN'				=> 'Přihlásit se',
	'INSTALL_NEXT'				=> 'Další krok',
	'INSTALL_NEXT_FAIL'			=> 'Některé zkoušky selhaly a měli byste odstranit tyto problémy před přechodem na další krok. Pokud tak neučiníte, může selhat celá instalace',
	'INSTALL_NEXT_PASS'			=> 'Všechny základní zkoušky byly úspěšné a můžete pokračovat na další krok instalace. Pokud jste změnili jakékoliv oprávnění, moduly atd. můžete je nyní nastavit zpět, pokud si přejete.',
	'INSTALL_PANEL'				=> 'Instalační panel',
	'INSTALL_SEND_CONFIG'		=> 'Bohužel, phpBB nemohlo zapsat nastavení přímo do konfiguračního souboru. Toto může být způsobeno tím, že tento soubor neexistuje, nebo phpBB nemá dostatečná oprávnění pro zápis. Dále bude uveden seznam možností, jak dokončit instalaci tohoto souboru.',
	'INSTALL_START'				=> 'Začít instalaci',
	'INSTALL_TEST'				=> 'Znovu otestovat',
	'INST_ERR'					=> 'Instalační chyba',
	'INST_ERR_DB_CONNECT'		=> 'Nelze se připojit k&nbsp;databázi, viz. zpráva o&nbsp;chybě.',
	'INST_ERR_DB_FORUM_PATH'	=> 'Databázový soubor, který jste zvolili, je ve složkách fóra. Měli byste ho umístit do adresáře, který není dostupný z webu',
	'INST_ERR_DB_NO_ERROR'		=> 'Žádná chybová zpráva',
	'INST_ERR_DB_NO_MYSQLI'		=> 'Verze databáze MySQL instalované na tomto stroji je nekompatibilní s&nbsp;možností „MySQL s&nbsp;rozšířením MySQLi“, kterou jste vybrali. Zkuste zvolit možnost „MySQL“.',
	'INST_ERR_DB_NO_SQLITE'		=> 'Verze rozšíření SQLite, kterou máte nainstalovanou, je zastaralá a je potřeba ji aktualizovat nejméně na verzi 2.8.2.',
	'INST_ERR_DB_NO_ORACLE'		=> 'Verze databáze Oracle instalované na tomto stroji vyžaduje nastavení parametru <var>NLS_CHARACTERSET</var> na <var>UTF8</var>. Buďto aktualizujte vaši instalaci na verzi 9.2+ anebo změňte tento parametr.',
	'INST_ERR_DB_NO_FIREBIRD'	=> 'Verze databáze Firebird instalované na tomto stroji je starší než 2.1. Aktualizujte na novější verzi.',
	'INST_ERR_DB_NO_FIREBIRD_PS'=> 'Databáze, kterou jste zvolili pro Firebird, má velikost stránky menší než 8192. Musíte zvolit databázi, která má stránku větší, než je tato hodnota.',
	'INST_ERR_DB_NO_POSTGRES'	=> 'Databáze, kterou jste zvolili, nebyla vytvořena v&nbsp;kódování <var>UNICODE</var> nebo <var>UTF8</var>. Zkuste instalovat do databáze, která má kódování <var>UNICODE</var> nebo <var>UTF8</var>.',
	'INST_ERR_DB_NO_NAME'		=> 'Nebyl zvolen název databáze',
	'INST_ERR_EMAIL_INVALID'	=> 'Zadali jste neplatný e-mail',
	'INST_ERR_EMAIL_MISMATCH'	=> 'Zadané e-maily nesouhlasí.',
	'INST_ERR_FATAL'			=> 'Fatální chyba instalace',
	'INST_ERR_FATAL_DB'			=> 'Objevila se velmi závažná a nevratná databázová chyba. Toto může být způsobeno tím, že daný uživatel nemá příslušná práva vytvářet tabulky – <code>CREATE TABLES</code> nebo vkládat – <code>INSERT</code> data, atd. Podrobné informace mohou být uvedeny níže. Nejdříve kontaktujte vašeho poskytovatele hostingu nebo fórum podpory phpBB pro další pomoc.',
	'INST_ERR_FTP_PATH'			=> 'Nelze změnit na danou složku, zkontrolujte zadanou cestu.',
	'INST_ERR_FTP_LOGIN'		=> 'Nelze se přihlásit k&nbsp;FTP serveru, zkontrolujte uživ. jméno a heslo',
	'INST_ERR_MISSING_DATA'		=> 'Musíte vyplnit všechna pole v&nbsp;této části',
	'INST_ERR_NO_DB'							=> 'Nelze načíst PHP modul pro vybraný druh databáze',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Zadaná hesla nesouhlasí.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Zadané heslo je příliš dlouhé, maximální délka je 30 znaků.',
	'INST_ERR_PASSWORD_TOO_SHORT' => 'Zadané heslo je příliš krátké, minimální délka je 6 znaků.',
	'INST_ERR_PREFIX'							=> 'Tabulky se zvolenou předponou již v&nbsp;databázi existují, zvolte prosím jinou.',
	'INST_ERR_PREFIX_INVALID'			=> 'Zvolená předpona tabulek je neplatná. Zkuste jinou a vynechejte znaky, jako je spojovník.',
	'INST_ERR_PREFIX_TOO_LONG'		=> 'Předpona tabulek je příliš dlouhá, maximální délka je %d znaků.',
	'INST_ERR_USER_TOO_LONG'			=> 'Zadané uživatelské jméno je příliš dlouhé, maximální délka je 20 znaků.',
	'INST_ERR_USER_TOO_SHORT		'	=> 'Zadané uživatelské jméno je příliš krátké, minimální délka jsou 3 znaky.',
	'INVALID_PRIMARY_KEY'					=> 'Neplatný primární klíč : %s',
	
	'LONG_SCRIPT_EXECUTION'				=> 'Berte na vědomí, že toto může chvíli trvat… Prosím, nezastavujte skript, dokud se neukončí.',
	
	// mbstring
	'MBSTRING_CHECK'										=> 'Kontrola rozšíření <samp>mbstring</samp>',
	'MBSTRING_CHECK_EXPLAIN'						=> '<samp>mbstring</samp> je rozšíření PHP, které poskytuje funkce pro práci s&nbsp;multibytovými řetězci. Některé součásti mbstring nejsou kompatibilní s&nbsp;phpBB a musejí být vypnuty.',
	'MBSTRING_FUNC_OVERLOAD'						=> 'Přetěžování funkce',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> '<var>mbstring.func_overload</var> musí být nastaveno na 0 nebo 4.',
	'MBSTRING_ENCODING_TRANSLATION'			=> 'Zakódování průhledných znaků',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> musí být nastaveno na 0.',
	'MBSTRING_HTTP_INPUT'								=> 'Překlad vstupních HTTP znaků',
	'MBSTRING_HTTP_INPUT_EXPLAIN'				=> '<var>mbstring.http_input</var> musí být nastaveno na <samp>pass</samp>.',
	'MBSTRING_HTTP_OUTPUT'							=> 'Překlad výstupních HTTP znaků',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> musí být nastaveno na <samp>pass</samp>.',

	'MAKE_FOLDER_WRITABLE'		=> 'Zkontrolujte, jestli tato složka existuje a webserver má právo k&nbsp;zápisu do ní, a zkuste znovu:<br />»<strong>%s</strong>',
	'MAKE_FOLDERS_WRITABLE'		=> 'Zkontrolujte, jestli tyto složky existují a webserver má právo k&nbsp;zápisu do nich, a zkuste znovu:<br />»<strong>%s</strong>',

	'MYSQL_SCHEMA_UPDATE_REQUIRED'	=> 'Schména vaší MySQL databáze pro phpBB je neaktuální. phpBB detekovalo schéma pro MySQL 3.x/4.x, ale server používá MySQL %2$s.<br /><strong>Než budete pokračovat s aktualizací, musíte aktualizovat schéma.</strong><br /><br />Koukněte se na <a href="http://www.phpbb.com/kb/article/doesnt-have-a-default-value-errors/">článek v databázi phpBB.com o aktualizaci</a>. Pokud narazíte na problém, obraťte se na <a href="http://www.phpbb.com/community/viewforum.php?f=46">fórum podpory phpBB.com</a> nebo <a href="http://www.phpbb.cz/">podporu phpBB.cz</a>.',

	'NAMING_CONFLICT'			=> 'Konflikt v&nbsp;názvech: %s a %s jsou oba aliasy<br /><br />%s',
	'NEXT_STEP'						=> 'Pokračovat na další krok',
	'NOT_FOUND'						=> 'Nebylo nalezeno',
	'NOT_UNDERSTAND'			=> 'Není srozumitelné: %s #%d, tabulka %s („%s“)',
	'NO_CONVERTORS'				=> 'Žádný konvertor není dostupný k&nbsp;použití',
	'NO_CONVERT_SPECIFIED'		=> 'Nebyl zvolen konvertor',
	'NO_LOCATION'					=> 'Nelze určit umístění. Pokud víte, že je Imagemagick nainstalovaný, můžete později upravit umístění v&nbsp;administraci.',
	'NO_TABLES_FOUND'			=> 'Nebyly nalezeny žádné tabulky.',

	'OVERVIEW_BODY'				=> 'Vítejte v phpBB 3.0!<br /><br />phpBB™ je ve světě nejčastěji využívané řešení pro diskuzní fórum. phpBB verze 3 je nejnovější vydání vycházející ze sedmiletého postupného vývoje. Stejně jako předchůdci je i phpBB3 dokonale funkční, uživatelsky přívětivé a má kompletní podporu vývojářského týmu phpBB. phpBB3 vysoce zdokonaluje populární rysy phpBB2 a navíc přidává nejčastěji žádané vlastnosti, které v&nbsp;předchozích verzích chyběly. Doufáme, že překoná vaše očekávání.<br /><br />Tento instalační systém vás provede procesem instalace phpBB, převedením jiného softwarového balíčku nebo aktualizací na poslední verzi phpBB. Pro více informací doporučujeme přečíst <a href="../docs/INSTALL.html">průvodce instalací</a>.<br /><br />Pro přečtení licence phpBB3 nebo podrobností o&nbsp;získání podpory a naší pozice k&nbsp;ní, prosím, vybírejte příslušné volby v&nbsp;postranním menu. Chcete-li pokračovat, zvolte, prosím, vhodnou záložku nahoře.',

	'PCRE_UTF_SUPPORT'				=> 'Podpora PCRE UTF-8',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'phpBB <strong>nebude</strong> běžet, pokud vaše instalace PHP není kompilovaná s&nbsp;podporou UTF-8 v&nbsp;rozšíření PCRE.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'Dostupnost PHP funkce getimagesize()',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Povinné</strong> – Pro správný běh phpBB je nutné, aby byla dostupná funkce getimagesize.',
	'PHP_OPTIONAL_MODULE'			=> 'Volitelné moduly',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>Volitelné</strong> – Tyto moduly a aplikace jsou volitelné, nejsou potřeba k&nbsp;chodu phpBB 3.0. Přesto pokud je máte, poskytnou mnoho nových užitečných funkcí.',
	'PHP_SUPPORTED_DB'				=> 'Podporované databáze',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>Povinné</strong> – Musíte mít podporu pro alespoň jednu databázi kompatibilní s&nbsp;PHP. Pokud nejsou žádné databázové moduly ukázány jako aktivní, měli byste kontaktovat vašeho poskytovatele hostingových služeb nebo si prohlédnout odpovídající dokumentaci PHP pro další informace.',
	'PHP_REGISTER_GLOBALS'			=> 'Nastavení PHP <var>register_globals</var> je vypnuto',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> 'phpBB poběží i přesto, pokud je toto nastavení zapnuto, ale pokud je to možné, je doporučeno toto nastavení vypnout z bezpečnostních důvodů.',
	'PHP_SAFE_MODE'					=> 'Safe Mode',
	'PHP_SETTINGS'					=> 'Verze a nastavení PHP',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>Povinné</strong> – Musíte mít přinejmenším verzi PHP 4.3.3 pro instalaci phpBB. Pokud je <var>safe mode</var> zobrazen níže, vaše instalace PHP má tento režim zapnutý. Toto může přinést určitá omezení při vzdálené administraci a podobných funkcí.',
	'PHP_URL_FOPEN_SUPPORT'			=> 'PHP nastavení <var>allow_url_fopen</var>',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'	=> '<strong>Volitelné</strong> - Toto nastavení je volitelné, ale pokud je vypnuté, některé funkce, jako například vzdálené avatary, nebudou fungovat. ',
	'PHP_VERSION_REQD'				=> 'Verze PHP >= 4.3.3',
	'POST_ID'						=> 'ID příspěvku',
	'PREFIX_FOUND'					=> 'Sken tabulek ukázal, že je již na serveru platná instalace s&nbsp;předponami tabulek <strong>%s</strong>.',
	'PREPROCESS_STEP'				=> 'Spouštím přípravné funkce a dotazy',
	'PRE_CONVERT_COMPLETE'			=> 'Všechny přípravné kroky byly úspěšně dokončeny. Nyní můžete začít se samotným převodem. Je možné, že po převodu budete muset ručně provést a nastavit několik věcí. Po převodu pro jistotu zkontrolujte oprávnění a případně je opravte. Pokud se nepřenesla přesně, budete také muset znovu sestavit vyhledávací index přes administraci fóra. Zkontrolujte také, zda-li se přenesly správně obrázky jako smajlíci a avatary.',
	'PROCESS_LAST'					=> 'Zpracovávám poslední příkazy',
	
	'REFRESH_PAGE'				=> 'Aktualizujte stránku pro pokračování v&nbsp;přechodu',
	'REFRESH_PAGE_EXPLAIN'		=> 'Pokud toto nastavení povolíte, konvertor bude aktualizovat stránku při pokračování na další krok převodu. Pokud je toto vaše první konverze pro testovací účely a zjištění jakýchkoliv nedostatků nebo potíží předem, doporučujeme tuto položku nastavit na Ne.',
	'REQUIREMENTS_TITLE'		=> 'Instalační kompatibilita',
	'REQUIREMENTS_EXPLAIN'		=> 'Před spuštěním kompletní instalace provede phpBB několik testů nastavení serveru a souborů pro zajištění bezproblémové instalace a pozdějšího chodu systému. Ujistěte se, že si pozorně přečtete výsledky a nebudete pokračovat, dokud server neprojde všemi testy. Pokud chcete využívat funkcí uvedených u&nbsp;volitelných zkoušek, měli byste zajistit, aby server prošel i jimi.',
	'RETRY_WRITE'				=> 'Znovu zkouším zapsat konfigurační soubor',
	'RETRY_WRITE_EXPLAIN'		=> 'Pokud si přejete, můžete změnit přístupová práva k&nbsp;souboru config.php, aby do něj phpBB mohlo zapisovat. Pokud tak učiníte, můžete kliknout na Zkusit znovu a opakovat pokus. Nezapomeňte vrátit původní nastavení souboru config.php po skončení instalace.',

	'SCRIPT_PATH'				=> 'Cesta ke skriptům',
	'SCRIPT_PATH_EXPLAIN'		=> 'Cesta k&nbsp;phpBB relativně k&nbsp;názvu domény',
	'SELECT_LANG'				=> 'Vyberte jazyk',
	'SERVER_CONFIG'				=> 'Nastavení serveru',
	'SEARCH_INDEX_UNCONVERTED'	=> 'Vyhledávací index nebyl převeden',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'Váš starý index pro vyhledávání nebyl převeden. Vyhledávání bude vždy vyhazovat prázdné výsledky. Pro jeho obnovení přejděte do Administrace fóra, zvolte záložku Údržba, poté možnost Vyhledávač a zvolte možnost Vytvořit nový index.',
	'SOFTWARE'					=> 'Systém fóra',
	'SPECIFY_OPTIONS'			=> 'Zvolit možnosti přesunu',
	'STAGE_ADMINISTRATOR'		=> 'Detaily administrátora',
	'STAGE_ADVANCED'			=> 'Pokročilá nastavení',
	'STAGE_ADVANCED_EXPLAIN'	=> 'Měnit tato nastavení je nutné jen pokud víte, že potřebujete mít nastavené jiné pro chod fóra. Pokud si nejste jisti, pokračujte; všechny údaje lze změnit později v&nbsp;Administraci fóra.',
	'STAGE_CONFIG_FILE'			=> 'Konfigurační soubor',
	'STAGE_CREATE_TABLE'		=> 'Vytvoření tabulek v databázi',
	'STAGE_CREATE_TABLE_EXPLAIN' => 'Databázové tabulky pro phpBB 3.0 byly vytvořeny a naplněny základními daty. Pokračujte na další krok pro dokončení instalace phpBB.',
	'STAGE_DATABASE'			=> 'Nastavení databáze',
	'STAGE_FINAL'				=> 'Poslední krok',
	'STAGE_INTRO'				=> 'Úvod',
	'STAGE_IN_PROGRESS'			=> 'Převod spuštěn',
	'STAGE_REQUIREMENTS'		=> 'Požadavky',
	'STAGE_SETTINGS'			=> 'Nastavení',
	'STARTING_CONVERT'			=> 'Zahajuji převodní proces',
	'STEP_PERCENT_COMPLETED'	=> 'Krok <strong>%d</strong> z <strong>%d</strong>',
	'SUB_INTRO'					=> 'Úvod',
	'SUB_LICENSE'				=> 'Licence',
	'SUB_SUPPORT'				=> 'Podpora',
	'SUCCESSFUL_CONNECT'		=> 'Úspěšně připojeno',
	'SUPPORT_BODY'				=> '</p><p>Plná podpora je poskytována na <a href="http://www.phpbb.com/community/viewforum.php?f=46">phpBB 3.0.x Support Fóru na phpBB.com</a> nebo na <a href="http://www.phpbb.cz/viewforum.php?f=51">českém fóru podpory phpBB.cz</a>.<br />Rádi vám pomůžeme s:<ul><li>instalací</li><li>nastavením</li><li>technickými dotazy</li><li>potížemi souvisejícími s&nbsp;možnými chybami v&nbsp;softwaru</li><li>aktualizacemi z předchozích RC verzí na poslední stabilní verzi</li><li>převodem z phpBB 2.0.x na phpBB3</li><li>převodem z jiných systémů pro fóra(navštivte <a href="http://www.phpbb.com/community/viewforum.php?f=65">Convertors Forum/ Fórum konvertorů na phpBB.com</a>)</li></ul>S problémy, které se tykají MODů, se obraťte na autora v&nbsp;odpovídajícím tématu na <a href="http://www.phpbb.com/community/viewforum.php?f=81">Fóru modifikací</a>.<br />S problémy, které se týkají stylů, obrázků nebo šablon, navštivte <a href="http://www.phpbb.com/community/viewforum.php?f=80">Fórum stylů</a>.</p><p>Pro další podporu se koukněte na <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/">Uživatelskou příručku</a> a <a href="http://www.phpbb.com/support/documentation/3.0/">online dokumentaci</a> (oboje v&nbsp;angličtině).</p><p>Abyste se ujistili, že máte poslední verzi fóra a neujdou vám žádné novinky ze světa phpBB, můžete se přihlásit k <a href="http://www.phpbb.com/support/">odebírání novinek přes e-mail</a>.',
	'SYNC_FORUMS'				=> 'Začíná synchronizace fór',
	'SYNC_POST_COUNT'			=> 'Synchronizuji počty příspěvků',
	'SYNC_POST_COUNT_ID'		=> 'Synchronizuji počty příspěvků od <var>záznamu</var> %1$s do %2$s.',
	'SYNC_TOPICS'				=> 'Začíná synchronizace témat',
	'SYNC_TOPIC_ID'				=> 'Synchronizuji témata od topic_id $1%s do $2%s',

	'TABLES_MISSING'			=> 'Nelze najít tyto tabulky<br />» <strong>%s</strong>.',
	'TABLE_PREFIX'				=> 'Předpona tabulek v&nbsp;databázi',
	'TABLE_PREFIX_SAME'			=> 'Předpona tabulek musí být stejná jako používá fórum ze kterého převádíte data.<br />» Zvolená předpona tabulek byla %s.',
	'TESTS_PASSED'				=> 'Kontrola byla úspěšná',
	'TESTS_FAILED'				=> 'Kontrola byla neúspěšná',

	'UNABLE_WRITE_LOCK'			=> 'Nelze vytvořit uzamykací soubor',
	'UNAVAILABLE'				=> 'Nedostupné',
	'UNWRITABLE'				=> 'Nezapisovatelné',
	'UPDATE_TOPICS_POSTED'		=> 'Generuji informace o&nbsp;odeslaných tématech',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Objevila se chyba při generování informací o&nbsp;odeslaných tématech. Můžete se pokusit tento krok provést znovu přes Administraci fóra po skončení konverze.',
	'VERIFY_OPTIONS'         => 'Kontroluji nastavení převodu',
	'VERSION'					=> 'Verze',

	'WELCOME_INSTALL'			=> 'Vítejte v&nbsp;instalaci phpBB3',
	'WRITABLE'					=> 'Zapisovatelné',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> 'Všechny soubory jsou shodné s&nbsp;nejnovější verzí phpBB. Nyní se <a href="../ucp.php?mode=login&amp;redirect=adm/index.php%3Fi=send_statistics%26mode=send_statistics">přihlaste</a> a zkontrolujte, jestli všechno funguje jak má. Nezapomeňte smazat nebo přejmenovat složku install/! Budeme rádi, když nám <a href="../ucp.php?mode=login&amp;redirect=adm/index.php%3Fi=send_statistics%26mode=send_statistics">zašlete anonymní statistická data</a> o vašem serveru a nastavení vaší instalace, která použijeme k zlepšení budoucích verzí phpBB.',
	'ARCHIVE_FILE'						=> 'Zdrojový soubor uvnitř archivu',

	'BACK'					=> 'Zpět',
	'BINARY_FILE'		=> 'Binární soubor',
	'BOT'						=> 'Bot',
	
	'CHANGE_CLEAN_NAMES'				=> 'Systém, který kontroloval uživatelská jména na duplicity, byl upraven. Je několik uživatelů, kteří mají stejné jméno při porovnávání novou metodou. Musíte smazat nebo přejmenovat tyto uživatele, abyste se ujistili, že každé uživatelské jméno používá jen jeden člověk. Poté budete moci pokračovat.',
	'CHECK_FILES'								=> 'Zkontrolovat soubory',
	'CHECK_FILES_AGAIN'					=> 'Zkontrolovat soubory znovu',
	'CHECK_FILES_EXPLAIN'				=> 'Během následujícího kroku budou porovnány všechny soubory s&nbsp;aktualizačními – toto může chvíli trvat, pokud je to první kontrola souborů.',
	'CHECK_FILES_UP_TO_DATE'		=> 'Podle databáze máte nainstalovanou nejnovější verzi. Můžete pokračovat kontrolou všech souborů, jestli odpovídají nejnovější verzi.',
	'CHECK_UPDATE_DATABASE'			=> 'Pokračovat v&nbsp;aktualizaci',
	'COLLECTED_INFORMATION'			=> 'Informace o&nbsp;souborech',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'Níže uvedený seznam zobrazuje informace o&nbsp;souborech, které potřebují aktualizovat. Pročtěte si poznámku před každým souborem, abyste věděli, co znamená a co musíte provést pro správnou aktualizaci.',
	'COLLECTING_FILE_DIFFS'					=> 'Shromažďování rozdílů v&nbsp;souborech',
	'COMPLETE_LOGIN_TO_BOARD'		=> 'Nyní byste se měli <a href="../ucp.php?mode=login">přihlásit na fórum</a> a zkontrolovat jestli vše funguje, jak má. Nezapomeňte smazat, přesunout nebo přejmenovat vaši instalační složku!',
	'CONTINUE_UPDATE_NOW'				=> 'Pokračujte v aktualizačním procesu',
	'CONTINUE_UPDATE'						=> 'Pokračujte v aktualizaci',
	'CURRENT_FILE'							=> 'Začátek konfliktu - původní soubor před aktualizací',
	'CURRENT_VERSION'						=> 'Současná verze',

	'DATABASE_TYPE'							=> 'Druh databáze',
	'DATABASE_UPDATE_INFO_OLD'	=> 'Aktualizační soubor databáze v&nbsp;instalační složce je starý. Ujistěte se, že jste nahráli nejnovější verzi tohoto souboru.',
	'DELETE_USER_REMOVE'				=> 'Smazat uživatele i příspěvky',
	'DELETE_USER_RETAIN'				=> 'Smazat uživatele, ale nechat příspěvky',
	'DESTINATION'								=> 'Cílový soubor',
	'DIFF_INLINE'								=> 'Na řádku',
	'DIFF_RAW'									=> 'Čisté sjednocené rozdíly',
	'DIFF_SEP_EXPLAIN'					=> 'Část kódu použita v novém/aktualizovaném souboru',
	'DIFF_SIDE_BY_SIDE'					=> 'Vedle sebe',
	'DIFF_UNIFIED'							=> 'Sjednocené rozdíly',
	'DO_NOT_UPDATE'							=> 'Neaktualizovat tento soubor',
	'DONE'											=> 'Hotovo',
	'DOWNLOAD'									=> 'Stáhnout',
	'DOWNLOAD_AS'								=> 'Stáhnout jako',
	'DOWNLOAD_UPDATE_METHOD_BUTTON'		=> 'Stáhnout archiv upravených souborů (doporučeno)',
	'DOWNLOAD_UPDATE_METHOD'					=> 'Stáhnout archiv upravených souborů',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Po stáhnutí tento archiv rozbalte. Naleznete upravené soubory, které musíte nahrát do základní složky phpBB. Buďte opatrní, abyste je nahráli na správná místa. Po nahrání souborů je znovu zkontrolujte následujícím tlačítkem.',
	
	'DOWNLOAD_CONFLICTS'							=> 'Stáhnout konflikty v tomto souboru',
	'DOWNLOAD_CONFLICTS_EXPLAIN'			=> 'Hledejte výskyt &lt;&lt;&lt;, tyto znaky znamenají konflikt v souboru',
	
	'ERROR'						=> 'Chyba',
	'EDIT_USERNAME'		=> 'Upravit uživatelské jméno',
	
	'FILE_ALREADY_UP_TO_DATE'		=> 'Soubor je již v&nbsp;nejnovější verzi',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Soubor nesmí být upraven',
	'FILE_USED'						=> 'Informace použity z',
	'FILES_CONFLICT'				=> 'Kolidující soubory',
	'FILES_CONFLICT_EXPLAIN'		=> 'Následující soubory byly upraveny od poslední aktualizace nebo instalace a nejsou stejné jako soubory v&nbsp;předchozí verzi. phpBB zjistilo, že tyto soubory vytvářejí kolize, pokud se pokusí o&nbsp;jejich sloučení. Prozkoumejte tyto kolize a zkuste je manuálně vyřešit, nebo pokračujte v&nbsp;převodu vybráním metody pro sloučení souborů. Pokud zpracujete kolize ručně, po úpravách zkontrolujte soubory znovu. Můžete také zvolit preferovanou metodu sloučení pro každý soubor zvlášť. První sloučí oba soubory do jednoho, kde kolidující řádky budou nahrazeny těmi z nového souboru, a druhá naopak použije řádky z původního.',
	'FILES_MODIFIED'				=> 'Upravené soubory',
	'FILES_MODIFIED_EXPLAIN'		=> 'Následující soubory byly upraveny od poslední aktualizace nebo instalace a nejsou stejné jako soubory v&nbsp;předchozí verzi. Aktualizovaný soubor bude výsledek sloučení vašich úprav a souboru z nové verze phpBB.',
	'FILES_NEW'						=> 'Nové soubory',
	'FILES_NEW_EXPLAIN'				=> 'Následující soubory zatím neexistují ve vaší instalaci. Budou do ní během aktualizace přidány.',
	'FILES_NEW_CONFLICT'			=> 'Nové kolidující soubory',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Následující soubory jsou nové v&nbsp;poslední verzi, ale stejný soubor se stejným jménem již ve vaší instalaci existuje. Tento soubor bude nahrazen novým.',
	'FILES_NOT_MODIFIED'			=> 'Neupravené soubory',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Následující soubory nebyly od předchozí aktualizace nebo instalace upraveny a jsou stejné jako soubory v&nbsp;předchozí verzi phpBB. Protože zde nehrozí přepsání vašich změn, budou přepsány aktuálními.',
	'FILES_UP_TO_DATE'				=> 'Již upravené soubory',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Následující soubory jsou již v&nbsp;nejaktuálnější verzi a nepotřebují aktualizovat.',
	'FTP_SETTINGS'					=> 'Nastavení FTP',
	'FTP_UPDATE_METHOD'				=> 'Upload přes FTP',

	'INCOMPATIBLE_UPDATE_FILES'			=> 'Aktualizační soubory nejsou kompatibilní s&nbsp;vaší instalovanou verzí. Máte nainstalovanou verzi %1$s a soubory jsou určeny pro převod z phpBB %2$s na %3$s.',
	'INCOMPLETE_UPDATE_FILES'				=> 'Aktualizační soubory jsou neúplné',
	'INLINE_UPDATE_SUCCESSFUL'			=> 'Aktualizace databáze byla úspěšná. Nyní můžete pokračovat v&nbsp;instalačním procesu.', 	 

	'KEEP_OLD_NAME'		=> 'Ponechat uživatelské jméno',

	'LATEST_VERSION'		=> 'Poslední verze',
	'LINE'					=> 'Řádek',
	'LINE_ADDED'			=> 'Přidáno',
	'LINE_MODIFIED'			=> 'Upraveno',
	'LINE_REMOVED'			=> 'Odstraněno',
	'LINE_UNMODIFIED'		=> 'Neupraveno',
	'LOGIN_UPDATE_EXPLAIN'	=> 'Pro aktualizaci vaší instalace se nejprve musíte přihlásit.',

	'MAPPING_FILE_STRUCTURE'	=> 'Pro usnadnění uploadu jsou zde umístění souborů, které budete nahrávat.',

 	'MERGE_MODIFICATIONS_OPTION'	=> 'Sloučit úpravy a modifikace',

	'MERGE_NO_MERGE_NEW_OPTION'	=> 'Neslučovat – použít nový soubor',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'Neslučovat – použit současně instalovaný soubor',
	'MERGE_MOD_FILE_OPTION'			=> 'Sloučit úpravy (zahodit nový phpBB kód v konfliktu)',
	'MERGE_NEW_FILE_OPTION'			=> 'Sloučit úpravy (zahodit kód ze starého souboru v konfliktu)',
	'MERGE_SELECT_ERROR'				=> 'Režimy sloučení pro kolidující soubory nejsou správně vybrány.',
	'MERGING_FILES'							=> 'Slučuji rozdíly',
	'MERGING_FILES_EXPLAIN'			=> 'Právě sbírám poslední změny souborů.<br /><br />Vyčkejte než phpBB dokončí všechny operace na upravovaných souborech.',

	'NEW_FILE'						=> 'Konec nového souboru',
	'NEW_USERNAME'								=> 'Nové uživatelské jméno',
	'NO_AUTH_UPDATE'				=> 'Nemáte autorizaci pro aktualizaci',
	'NO_ERRORS'						=> 'Žádné chyby',
	'NO_UPDATE_FILES'				=> 'Neaktualizuji následující soubory',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'Následující soubory jsou nové nebo upravené, ale složka, kde jsou běžně umístěny, nebyla ve vaši instalaci nalezena. Pokud tento seznam obsahuje soubory, které nepatří do složek language/ nebo styles/, je možné, že jste změnili strukturu adresářů a že aktualizace nebude kompletní.',
	'NO_UPDATE_FILES_OUTDATED'		=> 'Nebyla nalezena složka pro aktualizaci. Ujistěte se, že jste nahráli odpovídající aktualizační soubory.<br /><br />Na vašem fóru <strong>nepoužíváte</strong> poslední verzi phpBB. Aktualizace jsou dostupné pro vaši verzi - %1$s, přejděte na <a href="http://www.phpbb.com/downloads.php" rel="external">http://www.phpbb.com/downloads.php</a> pro stáhnutí správného balíčku pro aktualizaci z verze %2$s na verzi %3$s.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Používáte poslední verzi phpBB. Není potřeba spouštět aktualizační rozhraní. Pokud chcete zkontrolovat integritu souborů, nahrajte nejdříve odpovídající aktualizační soubory.',
	'NO_UPDATE_INFO'				=> 'Informace o&nbsp;aktualizačních souborech nebyly nalezeny.',
	'NO_UPDATES_REQUIRED'			=> 'Žádné úpravy nejsou potřeba',
	'NO_VISIBLE_CHANGES'			=> 'Žádné viditelné změny',
	'NOTICE'						=> 'Upozornění',
	'NUM_CONFLICTS'					=> 'Počet konfliktů',
	'NUMBER_OF_FILES_COLLECTED'			=> 'Současně mám rozdíly o&nbsp;%1$d z %2$d shromážděných souborů.<br />Prosím vyčkejte na dokončení shromáždění souborů.',

	'OLD_UPDATE_FILES'		=> 'Aktualizační soubory jsou staré. Soubory, které byly nalezeny, jsou určeny pro přechod z phpBB %1$s na phpBB %2$s, ale poslední verze phpBB je %3$s.',

	'PACKAGE_UPDATES_TO'				=> 'Současný balík aktualizuje na verzi',
	'PERFORM_DATABASE_UPDATE'			=> 'Provést aktualizaci databáze',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'Po kliknutí na tlačítko bude provedena aktualizace databáze. Aktualizace může chvíli trvat. Zastavujte ji pouze tehdy, když úplně zamrzne. Poté co kliknete na tlačítko a aktualizujete databázi, sledujte další pokyny pro dokončení procesu.',
	'PREVIOUS_VERSION'					=> 'Předchozí verze',
	'PROGRESS'							=> 'Průběh',

	'RESULT'					=> 'Výsledek',
	'RUN_DATABASE_SCRIPT'		=> 'Aktualizovat moji databázi nyní',

	'SELECT_DIFF_MODE'			=> 'Zvolte způsob zobrazení rozdílů',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Vybrat formát archivu k&nbsp;stáhnutí',
	'SELECT_FTP_SETTINGS'		=> 'Vybrat nastavení FTP',
	'SHOW_DIFF_CONFLICT'		=> 'Zobrazit rozdíly/konflikty',
	'SHOW_DIFF_FINAL'			=> 'Zobrazit výsledný soubor',
	'SHOW_DIFF_MODIFIED'		=> 'Zobrazit sloučené rozdíly',
	'SHOW_DIFF_NEW'				=> 'Zobrazit obsah souboru',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'Zobrazit rozdíly',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'Zobrazit rozdíly',
	'SOME_QUERIES_FAILED'		=> 'Některé dotazy selhaly, příkazy a chyby jsou vypsány níže',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'Toto pravděpodobně není nic vážného, aktualizace bude pokračovat. Pokud by ji přesto nešlo dokončit, vyhledejte nápovědu na našich fórech. V <a href="../docs/README.html">README</a> naleznete postup pro získání další podpory.',
	'STAGE_FILE_CHECK'			=> 'Zkontrolovat soubory',
	'STAGE_UPDATE_DB'			=> 'Aktualizovat databázi',
	'STAGE_UPDATE_FILES'		=> 'Aktualizovat soubory',
	'STAGE_VERSION_CHECK'		=> 'Zkontrolovat verzi',
	'STATUS_CONFLICT'			=> 'Upravený soubor, který způsobuje kolizi',
	'STATUS_MODIFIED'			=> 'Upravený soubor',
	'STATUS_NEW'				=> 'Nový soubor',
	'STATUS_NEW_CONFLICT'		=> 'Nový kolidující soubor',
	'STATUS_NOT_MODIFIED'		=> 'Neupravený soubor',
	'STATUS_UP_TO_DATE'			=> 'Již upravený soubor',
	
	'TOGGLE_DISPLAY'				=> 'Zobrazit/skrýt seznam souborů',
	'TRY_DOWNLOAD_METHOD'      => 'Můžete zkusit stáhnout archiv upravených souborů.<br />Tento způsob funguje vždy a je doporučeným postupem při aktualizaci.',
	'TRY_DOWNLOAD_METHOD_BUTTON'=> 'Zkusit tento způsob nyní',

	'UPDATE_COMPLETED'				=> 'Aktualizace je hotova',
	'UPDATE_DATABASE'				=> 'Aktualizovat databázi',
	'UPDATE_DATABASE_EXPLAIN'		=> 'Během následujícího kroku bude aktualizována databáze.',
	'UPDATE_DATABASE_SCHEMA'		=> 'Aktualizuji databázové schéma',
	'UPDATE_FILES'					=> 'Aktualizovat soubory',
	'UPDATE_FILES_NOTICE'			=> 'Ujistěte se, že jste aktualizovali i soubory fóra. Tento soubor aktualizuje pouze databázi.',
	'UPDATE_INSTALLATION'			=> 'Aktualizovat instalaci phpBB',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Tímto nástrojem lze aktualizovat vaši instalaci phpBB na nejnovější verzi.<br />Během procesu bude zkontrolována integrita všech souborů. Budete mít možnost si prohlédnou všechny rozdíly a soubory před aktualizací.<br /><br />Samotné úpravy souborů mohou být provedeny dvěma způsoby.</p><h2>Ruční aktualizace</h2><p>Pokud zvolíte tento způsob, stáhnete jen upravené soubory pro fórum, abyste se mohli ujistit, že neztratíte změny provedené na fóru. Po stáhnutí tohoto balíku budete muset ručně nahrát všechny soubory na server a umístit je do odpovídajících složek. Po skončení nahrávání budete moci znovu zkontrolovat integritu souborů, abyste si ověřili, že jste soubory nahráli správně. Pokud byly všechny soubory správně nahrány, budete přesměrováni na aktualizační skript databáze.</p><h2>Automatická aktualizace s&nbsp;FTP</h2><p>Tento způsob je podobný tomu prvnímu, ale nebudete muset stáhnout upravené soubory a ručně je nahrát. Toto systém provede sám automaticky. Abyste mohli využít tento způsob, budete muset znát přístupové údaje k&nbsp;FTP. Po nahrání bude znovu provedena kontrola integrity. Pokud jsou všechny soubory v&nbsp;pořádku, budete přesměrováni na aktualizační skript databáze.',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Oznámení o&nbsp;vydání</h1>

		<p>Prosím, přečtěte si <a href="%1$s" title="%1$s">oznámení o&nbsp;vydání nejnovější verze</a> před pokračováním v&nbsp;aktualizaci, oznámení může obsahovat mnoho užitečných informací. Také obsahuje odkazy na stáhnutí a changelog.</p>

		<br />

		<h1>Jak aktualizovat vaši instalaci</h1>

		<p>Doporučený způsob aktualizace se skládá z následujících kroků:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Přejděte na <a href="http://www.phpbb.com/downloads" title="http://www.phpbb.com/downloads">phpBB.com – soubory k&nbsp;stáhnutí</a> a stáhněte odpovídající archiv. Pokud si nejste jisti, můžete <a href="%2$s" title="%2$s">stáhnout správný soubor přímo</a> jako zip soubor.<br /><br /></li>
			<li>Rozbalte archiv<br /><br /></li>
			<li>Nahrajte celou rozbalenou složku install do základní složky phpBB (ta, kde se nachází soubor config.php).<br /><br /></li>
		</ul>

		<p>Jakmile budou soubory nahrané, phpBB se vypne pro běžné uživatele.<br /><br />
		<strong><a href="%2$s" title="%2$s">Nyní začněte s&nbsp;instalací zadáním cesty k&nbsp;složce install/ do prohlížeče</a>.</strong><br />
		<br />
		Budete provedeni aktualizačním procesem. Aktualizace bude hotová po úspěšném vykonání aktualizace databáze – toto je poslední krok v&nbsp;aktualizaci fóra.
		</p>
	',
	'UPDATE_INSTRUCTIONS_INCOMPLETE'	=> '

		<h1>Byla detekována neúplná aktualizace</h1>

		<p>phpBB detekovalo neúplnou automatickou aktualizaci. Prosím ujistěte se, že jste následoval všechny kroky aktualizačního nástroje. Níže najdete přímý odkaz pro pokračování instalace nebo přejděte přímo do instalačního adresáře.</p>
	',
	'UPDATE_METHOD'					=> 'Způsob aktualizace',
	'UPDATE_METHOD_EXPLAIN'			=> 'Nyní máte možnost zvolit preferovaný způsob nahrávání souborů. Pokud použijete nahrávání přes FTP, budete muset zadat údaje k&nbsp;FTP na vašem serveru. Tímto způsobem budou soubory automaticky přesunuty na svá umístění a zálohy budou vytvořeny přidáním .bak na konec názvu souboru. Pokud zvolíte stáhnout upravené soubory, budete je muset rozbalit a nahrát ručně později.',
	'UPDATE_REQUIRES_FILE'         	=> 'Aktualizační nástroj vyžaduje, aby byl přítomen následující soubor: %s',
	'UPDATE_SUCCESS'				=> 'Aktualizace byla úspěšná',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'Všechny soubory byly úspěšně aktualizovány. Následující krok zahrnuje poslední kontrolu souborů pro ujištění, že aktualizace proběhla správně.',
	'UPDATE_VERSION_OPTIMIZE'		=> 'Aktualizuji číslo verze a optimalizuji databázové tabulky',
	'UPDATING_DATA'					=> 'Aktualizuji data',
	'UPDATING_TO_LATEST_STABLE'		=> 'Aktualizuji databázi na poslední stabilní verzi',
	'UPDATED_VERSION'				=> 'Novější verze',
	 'UPGRADE_INSTRUCTIONS'         => 'Nová verze <strong>%1$s</strong> je dostupná. Pro více informací si přečtěte <a href="%2$s" title="%2$s"><strong>oznámení o vydání</strong></a>. Najdete v něm seznam změn a postup k aktualizaci.',
	'UPLOAD_METHOD'					=> 'Metoda uploadu',

	'UPDATE_DB_SUCCESS'				=> 'Aktualizace databáze proběhla úspěšně',
	'USER_ACTIVE'               	=> 'Aktivní uživatel',
	'USER_INACTIVE'               	=> 'Neaktivní uživatel',

	'VERSION_CHECK'				=> 'Kontrola verze',
	'VERSION_CHECK_EXPLAIN'		=> 'Zkontroluje, jestli používáte nejnovější verzi phpBB.',
	'VERSION_NOT_UP_TO_DATE'	=> 'Vaše verze phpBB není aktuální. Prosím pokračujte k&nbsp;aktualizačnímu procesu.',
	'VERSION_NOT_UP_TO_DATE_ACP'=> 'Vaše verze phpBB není aktualizovaná.<br />Níže naleznete odkaz na oznámení o&nbsp;vydání poslední verze včetně instrukcí k&nbsp;provedení aktualizace.',
	'VERSION_UP_TO_DATE'		=> 'Používáte nejnovější verzi phpBB a nepotřebujete aktualizovat. Přesto pokud máte zájem, můžete zkontrolovat integritu souborů.',
	'VERSION_NOT_UP_TO_DATE_TITLE'	=> 'Používáte zastaralou verzi phpBB.',
	'VERSION_UP_TO_DATE_ACP'	=> 'Používáte nejnovější verzi phpBB',
	'VIEWING_FILE_CONTENTS'		=> 'Zobrazení obsahu souborů',
	'VIEWING_FILE_DIFF'			=> 'Zobrazení odlišností souborů',

	'WRONG_INFO_FILE_FORMAT'	=> 'Špatný formát info souboru',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Děkujeme, vedení Vašeho fóra',
	'CONFIG_SITE_DESC'				=> 'Krátký popis vašeho fóra',
	'CONFIG_SITENAME'				=> 'vaseforum.cz',

	'DEFAULT_INSTALL_POST'			=> 'Toto je příklad toho, jak bude vypadat příspěvek ve vaší instalaci phpBB3. Vypadá to, že vše běží v&nbsp;pořádku, tak jak má. Můžete smazat tento příspěvek a pokračovat v&nbsp;nastavování vašeho nového fóra. Během instalace byla první kategorii a fóru nastavena sada oprávnění pro všechny předdefinované skupiny: Administrátory, Globální Moderátory, Registrované uživatele, Anonymní návštěvníky, Boty a případné registrované COPPA uživatele. Všechna nově vytvořená fóra nebudou mít nastavena na začátku žádná oprávnění, doporučujeme vám využít těchto, již nastavených, oprávnění a při tvorbě nových fór je pouze zkopírovat pomocí stejnojmenné funkce. Doufáme, že vám vaše nové fórum přinese mnoho zábavy a užitku!',
	'FORUMS_FIRST_CATEGORY'			=> 'Vaše první kategorie',
	'FORUMS_TEST_FORUM_DESC'		=> 'Popis vašeho prvního fóra.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Vaše první fórum',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Administrátor',
 	'REPORT_WAREZ'					=> 'Příspěvek obsahuje odkaz na nelegální nebo pirátský software.',
 	'REPORT_SPAM'					=> 'Nahlášené téma mělo za účel propagovat webovou stránku nebo jiný produkt.',
 	'REPORT_OFF_TOPIC'				=> 'Nahlášený příspěvek je off-topic.',
 	'REPORT_OTHER'					=> 'Nahlášený příspěvek nezapadá do žádné z kategorií. Prosím, vyplňte pole pro další informace.',
 	
	'SMILIES_ARROW'					=> 'Šipka',
	'SMILIES_CONFUSED'				=> 'Zmatený',
	'SMILIES_COOL'					=> 'Cool',
	'SMILIES_CRYING'				=> 'Smutný',
	'SMILIES_EMARRASSED'			=> 'Stydlivý',
	'SMILIES_EVIL'					=> 'Zlý',
	'SMILIES_EXCLAMATION'			=> 'Zvolání',
	'SMILIES_GEEK'					=> 'Geek',
	'SMILIES_IDEA'					=> 'Nápad',
	'SMILIES_LAUGHING'				=> 'Smějící se',
	'SMILIES_MAD'					=> 'Naštvaný',
	'SMILIES_MR_GREEN'				=> 'Mr Green',
	'SMILIES_NEUTRAL'				=> 'Neutrální',
	'SMILIES_QUESTION'				=> 'Otázka',
	'SMILIES_RAZZ'					=> 'Razz',
	'SMILIES_ROLLING_EYES'			=> 'Rolling Eyes',
	'SMILIES_SAD'					=> 'Smutný',
	'SMILIES_SHOCKED'				=> 'Šokovaný',
	'SMILIES_SMILE'					=> 'Úsměv',
	'SMILIES_SURPRISED'				=> 'Překvapený',
	'SMILIES_TWISTED_EVIL'			=> 'Zvrácený',
	'SMILIES_UBER_GEEK'				=> 'Uber Geek',
	'SMILIES_VERY_HAPPY'			=> 'Velmi šťastný',
	'SMILIES_WINK'					=> 'Mrknutí',

	'TOPICS_TOPIC_TITLE'			=> 'Vítejte v&nbsp;phpBB3',
));

?>
