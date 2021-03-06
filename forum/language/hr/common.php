<?php
/** 
*
* common [Croatian]
*
* @package language
* @version $Id: $
* @copyright phpBB (c) 2000-2008 phpBB Group 
* @author Ančica Sečan 2003-2008
* @author hecos 2010
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
//
// Some characters you may want to copy&paste: 
// ’ » “ ” …
//

$lang = array_merge($lang, array(
'TRANSLATION_INFO'=> 'HR (CRO) by hecos',

'DIRECTION'=> 'ltr',
'DATE_FORMAT'=> '|d. m. Y.|',// 01 Jan 2007 (with Relative days enabled)
'USER_LANG'=> 'hr',

'0_DAY'=> '0 dana',
'1_DAY'=> '1 dan',
'2_DAYS'=> '2 dana',
'3_DAYS'=> '3 dana',
'4_DAYS'=> '4 dana',
'5_DAYS'=> '5 dana',
'6_DAYS'=> '6 dana',
'7_DAYS'=> '7 dana',
'8_DAYS'=> '8 dana',
'9_DAYS'=> '9 dana',
'10_DAYS'=> '10 dana',
'0_WEEK'=> '0 tjedana',
'1_WEEK'=> '1 tjedan',
'2_WEEKS'=> '2 tjedna',
'3_WEEKS'=> '3 tjedna',
'4_WEEKS'=> '4 tjedna',
'5_WEEKS'=> '5 tjedana',
'6_WEEKS'=> '6 tjedana',
'7_WEEKS'=> '7 tjedana',
'8_WEEKS'=> '8 tjedana',
'9_WEEKS'=> '9 tjedana',
'10_WEEKS'=> '10 tjedana',
'0_MONTH'=> '0 mjeseci',
'1_MONTH'=> '1 mjesec',
'2_MONTHS'=> '2 mjeseca',
'3_MONTHS'=> '3 mjeseca',
'4_MONTHS'=> '4 mjeseca',
'5_MONTHS'=> '5 mjeseci',
'6_MONTHS'=> '6 mjeseci',
'7_MONTHS'=> '7 mjeseci',
'8_MONTHS'=> '8 mjeseci',
'9_MONTHS'=> '9 mjeseci',
'10_MONTHS'=> '10 mjeseci',
'11_MONTHS'=> '11 mjeseci',
'12_MONTHS'=> '12 mjeseci',
'0_YEAR'=> '0 godina',
'1_YEAR'=> '1 godina',
'2_YEARS'=> '2 godine',
'3_YEARS'=> '3 godine',
'4_YEARS'=> '4 godine',
'5_YEARS'=> '5 godina',
'6_YEARS'=> '6 godina',
'7_YEARS'=> '7 godina',
'8_YEARS'=> '8 godina',
'9_YEARS'=> '9 godina',
'10_YEARS'=> '10 godina',

'ACCOUNT_ALREADY_ACTIVATED'=> 'Korisnički račun je već aktiviran.',
'ACCOUNT_DEACTIVATED'=> 'Korisnički račun je ručno deaktiviran.<br />Reaktivirati ga može samo administrator/ica.',
'ACCOUNT_NOT_ACTIVATED'=> 'Korisnički račun nije aktiviran.',
'ACP'=> 'Administriranje foruma',
'ACTIVE'=> 'aktivan/na',
'ACTIVE_ERROR'=> 'Korisnički račun je neaktivan.<br />Aktiviraj ga i pokušaj ponovo.<br />Ako ti ne uspije - kontaktiraj administratora/icu foruma.',
'ADMINISTRATOR'=> 'Administrator/ica',
'ADMINISTRATORS'=> 'Administratori/ce',
'AGE'=> 'Starost',
'AIM'=> 'AIM',
'ALLOWED'=> 'Dopušteno',
'ALL_FILES'=> 'Sve datoteke',
'ALL_FORUMS'=> 'Svi forumi',
'ALL_MESSAGES'=> 'Sve poruke',
'ALL_POSTS'=> 'Svi postovi',
'ALL_TIMES'=> 'Vremenska zona: %1$s %2$s',
'ALL_TOPICS'=> 'Sve teme',
'AND'=> 'i',
'ARE_WATCHING_FORUM'=> 'Od sada si pretplaćen/a na forum.',
'ARE_WATCHING_TOPIC'=> 'Od sada si pretplaćen/a na temu.',
'ASCENDING'=> 'A-Ž',
'ATTACHMENTS'=> 'Privitak/ci',
'ATTACHED_IMAGE_NOT_IMAGE'=> 'Datoteka, koju si pokušao/la staviti u privitak, je neispravna.',
'AUTHOR'=> 'Autor/ica',
'AUTH_NO_PROFILE_CREATED'=> 'Kreiranje korisničkog profila nije uspjelo.',
'AVATAR_DISALLOWED_CONTENT'=> 'Uploadiranje je odbijeno jer je uploadana datoteka identificirana kao potencijalan izvršitelj napada.',
'AVATAR_DISALLOWED_EXTENSION'=> 'Datoteku nije moguće prikazati jer ekstenzija <strong>%s</strong> nije dopuštena.',
'AVATAR_EMPTY_REMOTE_DATA'=> 'Uploadiranje avatara nije uspjelo.<br />Izvor podataka je neispravan odnosno oštećen.',
'AVATAR_EMPTY_FILEUPLOAD'=> 'Uploadirana datoteka avatara je prazna.',
'AVATAR_INVALID_FILENAME'=> 'Naziv %s je neispravan.',
'AVATAR_NOT_UPLOADED'=> 'Uploadiranje avatara nije uspjelo.',
'AVATAR_NO_SIZE'=> 'Ustanovljavanje visine i širine “linkanog” avatara nije uspjelo.<br />Unesi ih “ručno”.',
'AVATAR_PARTIAL_UPLOAD'=> 'Uploadiran je samo dio datoteke, nije uploadirana cijela datoteka.',
'AVATAR_PHP_SIZE_NA'=> 'Avatar je prevelik.<br />Ustanovljavanje maksimalne dopuštene veličine definirane PHP-om u php.ini nije uspjelo.',
'AVATAR_PHP_SIZE_OVERRUN'=> 'Avatar je prevelik.<br />Maksimalna dopuštena veličina je %1$d %2$s.<br />Maksimalna dopuštena veličina definirana je u php.ini.',
'AVATAR_URL_INVALID'=> 'URL koji si unio/la je neispravan.',
'AVATAR_URL_NOT_FOUND'=> 'Datoteka nije pronađena.',
'AVATAR_WRONG_FILESIZE'=> 'Veličina datoteke avatara smije biti od 0 do %1d %2s.',
'AVATAR_WRONG_SIZE'=> 'Avatar najmanje smije biti širine %1$d piksel(a) i visine %2$d piksel(a) odnosno najviše smije biti širine %3$d piksel(a) i visine %4$d piksel(a). Tvoj avatar je širine %5$d piksel(a) i visine %6$d piksel(a).',

'BACK_TO_TOP'=> 'Vrh',
'BACK_TO_PREV'=> 'Prethodna stranica',
'BAN_TRIGGERED_BY_EMAIL'=> 'Isključena je tvoja e-mail adresa.',
'BAN_TRIGGERED_BY_IP'=> 'Isključena je tvoja IP adresa.',
'BAN_TRIGGERED_BY_USER'=> 'Isključeno je tvoje korisničko ime.',
'BBCODE_GUIDE'=> 'BBKod vodič',
'BCC'=> 'Na znanje',
'BIRTHDAYS'=> 'Rođendani',
'BOARD_BAN_PERM'=> '<strong>Trajno</strong> si isključen/a s foruma.<br />Kontaktiraj %2$sadministratora/icu%3$s za dodatne 
informacije.',
'BOARD_BAN_REASON'=> 'Razlog isključenja: <strong>%s</strong>.',
'BOARD_BAN_TIME'=> 'Isključen/a si s foruma do <strong>%1$s</strong>.<br />Kontaktiraj %2$sadministratora/icu%3$s za dodatne informacije.',
'BOARD_DISABLE'=> 'Forum je trenutno nedostupan.',
'BOARD_DISABLED'=> 'Forum je trenutno onemogućen.',
'BOARD_UNAVAILABLE'=> 'Forum je privremeno nedostupan.<br />Pokušaj ponovo kasnije.',
'BROWSING_FORUM'=> 'Trenutno korisnika/ca: %1$s.',
'BROWSING_FORUM_GUEST'=> 'Trenutno korisnika/ca: %1$s i %2$d gost.',
'BROWSING_FORUM_GUESTS'=> 'Trenutno korisnika/ca: %1$s i %2$d gostiju.',
'BYTES'=> 'bajt(ov)a',

'CANCEL'=> 'Poništi',
'CHANGE'=> 'Promijeni',
'CHANGE_FONT_SIZE'=> 'Promijeni veličinu fonta',
'CHANGING_PREFERENCES'=> 'Mijenja postavke foruma',
'CHANGING_PROFILE'=> 'Mijenja postavke profila',
'CLICK_VIEW_PRIVMSG'=> 'Klikni %sovdje%s za odlazak u Sandučić.',
'COLLAPSE_VIEW'=> 'Suzi prikaz',
'CLOSE_WINDOW'=> 'Zatvori',
'COLOUR_SWATCH'=> 'Uzorak boje/a',
'COMMA_SEPARATOR'=> ', ',// Used in pagination and secret yet-to-be-release style, use localised comma if appropiate, eg: Ideographic or Arabic
'CONFIRM'=> 'Potvrdi',
'CONFIRM_CODE'=> 'Potvrdni kod',
'CONFIRM_CODE_EXPLAIN'=> 'Unesi kod točno onako kako ga vidiš.<br />Pazi na velika/mala slova; nula ne postoji.',
'CONFIRM_CODE_WRONG'=> 'Potvrdni kod koji si unio/la je netočan.',
'CONFIRM_OPERATION'=> 'Jesi li siguran/na da želiš nastaviti?',
'CONGRATULATIONS'=> 'Sretan rođendan',
'CONNECTION_FAILED'=> 'Povezivanje nije uspjelo.',
'CONNECTION_SUCCESS'=> 'Povezivanje je uspjelo.',
'COOKIES_DELETED'=> 'Kolačići su izbrisani.',
'CURRENT_TIME'=> 'Sada je: %s.',

'DAY'=> 'Dan',
'DAYS'=> 'Dan/a',
'DELETE'=> 'Izbriši',
'DELETE_ALL'=> 'Izbriši sve',
'DELETE_COOKIES'=> 'Izbriši sve kolačiće',
'DELETE_MARKED'=> 'Izbriši označeno',
'DELETE_POST'=> 'Izbriši post',
'DELIMITER'=> 'Odjeljivač',
'DESCENDING'=> 'Ž-A',
'DISABLED'=> 'Onemogućeno',
'DISPLAY'=> 'Prikaži',
'DISPLAY_GUESTS'=> 'Prikaži goste',
'DISPLAY_MESSAGES'=> 'Prikaži poruke “stare”',
'DISPLAY_POSTS'=> 'Prikaži postove “stare”',
'DISPLAY_TOPICS'=> 'Prikaži teme “stare”',
'DOWNLOADED'=> 'Preuzeto',
'DOWNLOADING_FILE'=> 'Preuzimanje datoteke',
'DOWNLOAD_COUNT'=> 'Preuzeto %d put/a.',
'DOWNLOAD_COUNT_NONE'=> 'Nije preuzeto niti jednom.',
'DOWNLOAD_COUNTS'=> 'Preuzeto %d put/a.',
'DOWNLOAD_NONE'=> 'Preuzeto 0 puta.',
'VIEWED_COUNT'=> 'Pogledano %d put/a.',
'VIEWED_COUNTS'=> 'Pogledano %d put/a.',
'VIEWED_COUNT_NONE'=> 'Pogledano 0 puta.',

'EDIT_POST'=> 'Uredi',
'EMAIL'=> 'E-mail', // Short form for EMAIL_ADDRESS
'EMAIL_ADDRESS'=> 'E-mail adresa',
'EMAIL_SMTP_ERROR_RESPONSE'=> 'Došlo je do greške prilikom slanja e-maila.<br /><strong>Redak: %1$s</strong>. Odgovaranje: %2$s.',
'EMPTY_SUBJECT'=> 'Prilikom započinjanja nove teme - moraš unijeti naslov teme.',
'EMPTY_MESSAGE_SUBJECT'=> 'Prilikom započinjanja nove poruke - moraš unijeti naslov poruke.',
'ENABLED'=> 'Omogućeno',
'ENCLOSURE'=> 'Prilog',
'ERR_CHANGING_DIRECTORY'=> 'Mapu nije moguće promijeniti.',
'ERR_CONNECTING_SERVER'=> 'Došlo je do greške prilikom povezivanja sa serverom.',
'ERR_JAB_AUTH'=> 'Nije uspjela autorizacija sa/na Jabber server.',
'ERR_JAB_CONNECT'=> 'Nije uspjelo spajanje sa/na Jabber server.',
'ERR_UNABLE_TO_LOGIN'=> 'Došlo je do greške prilikom prijavljivanja.<br />Uneseno je netočno korisničko ime/zaporka.',
'ERR_UNWATCHING'=> 'Došlo je do greške prilikom odpretplaćivanja.',
'ERR_WATCHING'=> 'Došlo je do greške prilikom pretplaćivanja.',
'ERR_WRONG_PATH_TO_PHPBB'=> 'phpBB putanja je neispravna.',
'EXPAND_VIEW'=> 'Proširi prikaz',
'EXTENSION'=> 'Ekstenzija',
'EXTENSION_DISABLED_AFTER_POSTING'=> 'Ekstenzija <strong>%s</strong> je deaktivirana i više ne može biti prikazana.',

'FAQ'=> 'ČPP',
'FAQ_EXPLAIN'=> 'Često postavlje(a)na pitanja',
'FILENAME'=> 'Naziv datoteke',
'FILESIZE'=> 'Veličina datoteke',
'FILEDATE'=> 'Datum',
'FILE_COMMENT'=> 'Opaska',
'FILE_NOT_FOUND'=> 'Zatražena datoteka nije pronađena.',
'FIND_USERNAME'=> 'Pronađi korisničko ime',
'FOLDER'=> 'Mapa',
'FORGOT_PASS'=> 'Zaboravio/la sam zaporku',
'FORM_INVALID'=> 'Poslana forma je neispravna.<br />Pokušaj poslati ponovo.',
'FORUM'=> 'Forum',
'FORUMS'=> 'Forumi',
'FORUMS_MARKED'=> 'Forumi su označeni kao pročitani.',
'FORUM_CAT'=> 'Kategorija',
'FORUM_INDEX'=> 'Početna',
'FORUM_LINK'=> 'Link foruma',
'FORUM_LOCATION'=> 'Lokacija foruma',
'FORUM_LOCKED'=> 'Forum je zaključan',
'FORUM_RULES'=> 'Pravila foruma',
'FORUM_RULES_LINK'=> 'Pravila foruma',
'FROM'=> 'od',
'FSOCK_DISABLED'=> 'Funkcija <var>fsockopen</var> je onemoguća odnosno nije moguće povezati se za serverom poradi čega operaciju nije moguće izvršiti.',
'FTP_FSOCK_HOST'=> 'FTP host',
'FTP_FSOCK_HOST_EXPLAIN'=> 'FTP server za spajanje na sajt.',
'FTP_FSOCK_PASSWORD'=> 'FTP zaporka',
'FTP_FSOCK_PASSWORD_EXPLAIN'=> 'Zaporka za FTP korisničko ime.',
'FTP_FSOCK_PORT'=> 'FTP port',
'FTP_FSOCK_PORT_EXPLAIN'=> 'Port za spajanje na server.',
'FTP_FSOCK_ROOT_PATH'=> 'phpBB putanja',
'FTP_FSOCK_ROOT_PATH_EXPLAIN'=> 'Putanja do phpBB foruma u odnosu na root.',
'FTP_FSOCK_TIMEOUT'=> 'FTP vremensko ograničenje',
'FTP_FSOCK_TIMEOUT_EXPLAIN'=> 'Vremenski period, u sekundama, koliko će sustav čekati na odgovor od servera.',
'FTP_FSOCK_USERNAME'=> 'FTP korisničko ime',
'FTP_FSOCK_USERNAME_EXPLAIN'=> 'Korisničko ime za spajanje na server.',
'FTP_HOST'=> 'FTP host',
'FTP_HOST_EXPLAIN'=> 'FTP server za spajanje na sajt.',
'FTP_PASSWORD'=> 'FTP zaporka',
'FTP_PASSWORD_EXPLAIN'=> 'Zaporka za FTP korisničko ime.',
'FTP_PORT'=> 'FTP port',
'FTP_PORT_EXPLAIN'=> 'Port za spajanje na server.',
'FTP_ROOT_PATH'=> 'phpBB putanja',
'FTP_ROOT_PATH_EXPLAIN'=> 'Putanja do phpBB foruma u odnosu na root.',
'FTP_TIMEOUT'=> 'FTP vremensko ograničenje',
'FTP_TIMEOUT_EXPLAIN'=> 'Vremenski period, u sekundama, koliko će sustav čekati na odgovor od servera.',
'FTP_USERNAME'=> 'FTP korisničko ime',
'FTP_USERNAME_EXPLAIN'=> 'Korisničko ime za spajanje na server.',

'GENERAL_ERROR'=> 'Generalna greška',
'GB'=> 'GB',
'GIB'=> 'GiB',
'GO'=> '-klik-',
'GOTO_PAGE'=> 'Stranica',
'GROUP'=> 'Grupa',
'GROUPS'=> 'Grupe',
'GROUP_ERR_TYPE'=> 'Određen je neprikladan tip grupe.',
'GROUP_ERR_USERNAME'=> 'Naziv grupe nije unesen.',
'GROUP_ERR_USER_LONG'=> 'Opis grupe je predugačak.<br />Ime grupe ne može biti duže od 60 znakova.',
'GUEST'=> 'Gost',
'GUEST_USERS_ONLINE'=> 'Ukupno je: %d gostiju online.',
'GUEST_USERS_TOTAL'=> '%d gostiju.',
'GUEST_USERS_ZERO_ONLINE'=> 'Ukupno je: 0 gostiju online.',
'GUEST_USERS_ZERO_TOTAL'=> '0 gostiju.',
'GUEST_USER_ONLINE'=> 'Ukupno je: %d gost online.',
'GUEST_USER_TOTAL'=> '%d gost.',
'G_ADMINISTRATORS'=> 'Administratori/ce',
'G_BOTS'=> 'Roboti',
'G_GUESTS'=> 'Gosti',
'G_REGISTERED'=> 'Registrirani/e korisnici/e',
'G_REGISTERED_COPPA'=> 'Registrirani/e COPPA korisnici/e',
'G_GLOBAL_MODERATORS'=> 'Globalni/e moderatori/ce',
'G_NEWLY_REGISTERED'=> 'Novo registrirani korisnici/ce',

'HIDDEN_USERS_ONLINE'=> '%d skrivenih korisnika/ca online.',
'HIDDEN_USERS_TOTAL'=> '%d skrivenih',
'HIDDEN_USERS_TOTAL_AND'=> '%d skrivenih i ',
'HIDDEN_USERS_ZERO_ONLINE'=> '0 skrivenih korisnika/ca online.',
'HIDDEN_USERS_ZERO_TOTAL'=> '0 skrivenih',
'HIDDEN_USERS_ZERO_TOTAL_AND'=> '0 skrivenih i ',
'HIDDEN_USER_ONLINE'=> '%d skriven/a korisnik/ca online.',
'HIDDEN_USER_TOTAL'=> '%d skriven/a',
'HIDDEN_USER_TOTAL_AND'=> '%d skriven/a i ',
'HIDE_GUESTS'=> 'Sakrij goste',
'HIDE_ME'=> 'Sakrij moj online status',
'HOURS'=> 'Sat/i',
'HOME'=> 'Početna',

'ICQ'=> 'ICQ',
'ICQ_STATUS'=> 'ICQ status',
'IF'=> 'AKO',
'IMAGE'=> 'slika',
'IMAGE_FILETYPE_INVALID'=> 'Vrsta datoteke slike %d za mimetype %s nije podržana.',
'IMAGE_FILETYPE_MISMATCH'=> 'Neslaganje vrsta datoteke slike: očekivana ekstenzija %1$s, dana ekstenzija %2$s.',
'IN'=> 'u',
'INDEX'=> 'Početna',
'INFORMATION'=> 'Info',
'INTERESTS'=> 'Interesi',
'INVALID_DIGEST_CHALLENGE'=> 'Neispravan digest challenge.',
'INVALID_EMAIL_LOG'=> '<strong>%s</strong> je najvjerojatnije netočna e-mail adresa(?).',
'IP'=> 'IP',
'IP_BLACKLISTED'=> 'IP adresa %1$s je blokirana jer se nalazi na crnoj listi.<br />Za detalje baci pogled na <a href="%2$s">%2$s</a>.',

'JABBER'=> 'Jabber',
'JOINED'=> 'Pridružen/a',
'JUMP_PAGE'=> 'Upiši broj stranice',
'JUMP_TO'=> 'Forum(o)Bir',
'JUMP_TO_PAGE'=> 'Klikni za odlazak na stranicu...',

'KB'=> 'KB',
'KIB'=> 'KiB',

'LAST_POST'=> 'Zadnji post',
'LAST_UPDATED'=> 'Ažurirano',
'LAST_VISIT'=> 'Zadnji posjet',
'LDAP_NO_LDAP_EXTENSION'=> 'LDAP ekstenzija nije dostupna.',
'LDAP_NO_SERVER_CONNECTION'=> 'Povezivanje sa LDAP serverom nije uspjelo.',
'LEGEND'=> 'Legenda',
'LOCATION'=> 'Lokacija',
'LOCK_POST'=> 'Zaključaj post',
'LOCK_POST_EXPLAIN'=> 'Onemogući uređivanje',
'LOCK_TOPIC'=> 'Zaključaj temu',
'LOGIN'=> 'Prijava',
'LOGIN_CHECK_PM'=> 'Prijavi se kako bi provjerio/la privatne poruke.',
'LOGIN_CONFIRMATION'=> 'Potvrda prijavljivanja',
'LOGIN_CONFIRM_EXPLAIN'=> 'Zbog sprječavanja “krađe” korisničkih računa, administrator/ica je uveo/la pravilo zahtijevanja unosa potvrdnog koda u slučaju maksimalnog broja neuspjelih pokušaja prijavljivanja. <br />Potvrdni kod bi trebao biti prikazan na slici ispod.<br />Ukoliko ne možeš pročitati kod - kontaktiraj %sadministratora/icu%s.',
'LOGIN_ERROR_ATTEMPTS'=> 'Iskoristio/la si maksimalan broj pokušaja prijavljivanja.<br />Da bi se mogao/la prijaviti, sada uz korisničko ime i zaporku, moraš unijeti (i) potvrdni kod koji bi trebao biti prikazan na slici ispod.',
'LOGIN_ERROR_EXTERNAL_AUTH_APACHE'=> 'Nisi ovlašten/a.',
'LOGIN_ERROR_PASSWORD'=> 'Unio/la si netočnu zaporku.<br />Provjeri ju i pokušaj ponovo.<br />Ako ti “nikako” ne uspije - kontaktiraj %sadministratora/icu%s.',
'LOGIN_ERROR_PASSWORD_CONVERT'=> 'Konvertiranje tvoje zaporke, prilikom ažuriranja softvera foruma, nije uspjelo.<br />Molim(o), zatraži novu zaporku.<br />Ukoliko ćeš i dalje imati problema s korištenjem foruma - kontaktiraj %sadministratora/icu%s.',
'LOGIN_ERROR_USERNAME'=> 'Unio/la si netočno/neaktivno korisničko ime.<br />Provjeri ga i pokušaj ponovo.<br />Ako ti “nikako” ne uspije - kontaktiraj %sadministratora/icu%s.',
'LOGIN_FORUM'=> 'Za pregledavanje/postanje na forumu, moraš unijeti zaporku/se prijaviti.',
'LOGIN_INFO'=> 'Da bi se mogao/la prijaviti, moraš se registrirati.<br />Registracijom, koja traje nekoliko sekundi, dobivaš ovlasti/mogućnosti koje neregistrirane osobe nemaju.<br />Prije registriranja/prijavljivanja, molim(o), prouči Uvjete korištenja i Pravila koja vrijede na forumu.',
'LOGIN_VIEWFORUM'=> 'Za pregledavanje ovog foruma, moraš se prijaviti.',
'LOGIN_EXPLAIN_EDIT'=> 'Za uređivanje postova na forumu, moraš se prijaviti.',
'LOGIN_EXPLAIN_VIEWONLINE'=> 'Za pregledavanje online liste, moraš se prijaviti.',
'LOGOUT'=> 'Odjava',
'LOGOUT_USER'=> 'Odjava [%s]',
'LOG_ME_IN'=> 'Automatsko prijavljivanje',

'MARK'=> 'Označi',
'MARK_ALL'=> 'Označi sve',
'MARK_FORUMS_READ'=> 'Označi forume pročitanima',
'MB'=> 'MB',
'MIB'=> 'MiB',
'MCP'=> 'Moderiranje foruma',
'MEMBERLIST'=> 'Članstvo',
'MEMBERLIST_EXPLAIN'=> 'Pogledaj cijelu listu Članstva',
'MERGE'=> 'Spoji',
'MERGE_POSTS'=> 'Spoji postove',
'MERGE_TOPIC'=> 'Spoji temu(e)',
'MESSAGE'=> 'Poruka',
'MESSAGES'=> 'Poruke',
'MESSAGE_BODY'=> 'Tijelo poruke',
'MINUTES'=> 'Minuta/e',
'MODERATE'=> 'Moderiranje',
'MODERATOR'=> 'Moderator/ica',
'MODERATORS'=> 'Moderatori/ce',
'MONTH'=> 'Mjesec',
'MOVE'=> 'Premjesti',
'MSNM'=> 'MSNM/WLM',

'NA'=> 'N/A',
'NEWEST_USER'=> 'Najnoviji/a korisnik/ca: <strong>%s</strong>.',
'NEW_MESSAGE'=> 'Nova poruka',
'NEW_MESSAGES'=> 'Nove poruke',
'NEW_PM'=> '<strong>%d</strong> nova poruka',
'NEW_PMS'=> '<strong>%d</strong> nove/ih poruke/a',
'NEW_POST'=> 'Novi post',
'NEW_POSTS'=> 'Novi postovi',
'NEXT' => 'Sljedeća', // Used in pagination
'NEXT_STEP' => 'Dalje',
'NEVER'=> 'Nikad',
'NO'=> 'Ne',
'NOT_ALLOWED_MANAGE_GROUP'=> 'Nemaš dopuštenje za uređivanje ove grupe.',
'NOT_AUTHORISED'=> 'Za pregledavanje ovog dijela foruma foruma, moraš biti ovlašten/a.',
'NOT_WATCHING_FORUM'=> 'Više nisi pretplaćen/a na forum.',
'NOT_WATCHING_TOPIC'=> 'Više nisi pretplaćen/a na temu.',
'NOTIFY_ADMIN'=> 'Molim(o), obavijesti administratora/icu odnosno webmastera/icu.',
'NOTIFY_ADMIN_EMAIL'=> 'Molim(o), obavijesti administratora/icu odnosno webmastera/icu: <a href="mailto:%1$s">%1$s</a>.',
'NO_ACCESS_ATTACHMENT'=> 'Za pristup ovoj datoteci, moraš biti ovlašten/a.',
'NO_ACTION'=> 'Nije određena radnja.',
'NO_ADMINISTRATORS'=> 'Nema administratora/ica.',
'NO_AUTH_ADMIN'=> 'S obzirom da nemaš administratorske ovlasti, ne možeš pristupiti <em>Administriranju foruma</em>.',
'NO_AUTH_ADMIN_USER_DIFFER'=> 'Ne možeš se re-autentizirati kao drugi/a korisnik/ca.',
'NO_AUTH_OPERATION'=> 'Za izvršenje ove radnje nemaš [sva] potrebna dopuštenja.',
'NO_CONNECT_TO_SMTP_HOST'=> 'Povezivanje sa smtp hostom : %s : %s nije uspjelo.',
'NO_BIRTHDAYS'=> 'Rođendan, danas, nema nitko.',
'NO_EMAIL_MESSAGE'=> 'E-mail poruka je prazna.',
'NO_EMAIL_RESPONSE_CODE'=> 'Dobivanje odgovora od mail servera nije uspjelo.',
'NO_EMAIL_SUBJECT'=> 'Naslov [predmet] e-maila nije upisan.',
'NO_FORUM'=> 'Forum koji si izabrao/la ne postoji.',
'NO_FORUMS'=> '/',
'NO_GROUP'=> 'Grupa ne postoji.',
'NO_GROUP_MEMBERS'=> 'Grupa nema članova.',
'NO_IPS_DEFINED'=> 'Hostname/IP adresa nije(su) definirana(i).',
'NO_MEMBERS'=> 'Ništa nije pronađeno.',
'NO_MESSAGES'=> '/',
'NO_MODE'=> 'Nije određen mod.',
'NO_MODERATORS'=> 'Nema moderatora/ica.',
'NO_NEW_MESSAGES'=> 'Nema novih poruka',
'NO_NEW_PM'=> '<strong>0</strong> novih poruka',
'NO_NEW_POSTS'=> 'Nema novih postova',
'NO_ONLINE_USERS'=> '/',
'NO_POSTS'=> '/',
'NO_POSTS_TIME_FRAME'=> 'U temi, u zadanom vremenskom razdoblju, nema postova.',
'NO_FEED_ENABLED'=> 'Feed nije dostupan na ovom forumu.',
'NO_FEED'=> 'Traženi feed nije dostupan.',
'NO_SUBJECT'=> 'Moraš unijeti naslov [predmet].',// Used for posts having no subject defined but displayed within management pages.
'NO_SUCH_SEARCH_MODULE'=> 'Specificiran modul pretraživanja ne postoji.',
'NO_SUPPORTED_AUTH_METHODS'=> 'Nema podržanih metoda provjera autentičnosti.',
'NO_TOPIC'=> 'Tema ne postoji.',
'NO_TOPICS'=> 'Na forumu nema tema/postova.',
'NO_TOPIC_FORUM'=> 'Tema/forum ne postoji.',
'NO_TOPICS_TIME_FRAME'=> 'Na forumu, u zadanom vremenskom razdoblju, nema tema.',
'NO_UNREAD_PM'=> '<strong>0</strong> nepročitanih poruka',
'NO_UPLOAD_FORM_FOUND'=> 'Uploadiranje je inicirano ali nije pronađena ispravna forma uploadiranja datoteka.',
'NO_USER'=> 'Korisničko ime ne postoji.',
'NO_USERS'=> 'Korisnička imena ne postoje.',
'NO_USER_SPECIFIED'=> 'Korisničko ime nije specificirano.',

// Nullar/Singular/Plural language entry. The key numbers define the number range in which a certain grammatical expression is valid.
'NUM_POSTS_IN_QUEUE'=> array(
0=> 'Nema postova “na čekanju”',      // 0
1=> '1 post “na čekanju”',      // 1
2=> '%d post(ov)a “na čekanju”',      // 2+
),

'OCCUPATION'=> 'Zvanje/zanimanje',
'OFFLINE'=> 'Offline',
'ONLINE'=> 'Online',
'ONLINE_BUDDIES'=> 'Online prijatelji/ce',
'ONLINE_USERS_TOTAL'=> 'Ukupno je: <strong>%d</strong> korisnika/ca online; ',
'ONLINE_USERS_ZERO_TOTAL'=> 'Ukupno je: <strong>0</strong> korisnika/ca online; ',
'ONLINE_USER_TOTAL'=> 'Ukupno je: <strong>%d</strong> korisnik/ca online; ',
'OPTIONS'=> 'Opcije',

'PAGE_OF'=> 'Stranica: <strong>%1$d</strong>/<strong>%2$d</strong>.',
'PASSWORD'=> 'Zaporka',
'PIXEL'=> 'px',
'PLAY_QUICKTIME_FILE'=> 'Pokreni Quicktime datoteku',
'PM'=> 'PP',
'POSTING_MESSAGE'=> 'Posta post u %s',
'POSTING_PRIVATE_MESSAGE'=> 'Piše privatnu poruku',
'POST'=> 'Post',
'POST_ANNOUNCEMENT'=> 'Obavijest',
'POST_STICKY'=> 'Važno',
'POSTED'=> 'Postano',
'POSTED_IN_FORUM'=> 'u',
'POSTED_ON_DATE'=> 'dana',
'POSTS'=> 'Postovi',
'POSTS_UNAPPROVED'=> 'Najmanje jedan post u ovoj temi nije odobren.',
'POST_BY_AUTHOR'=> 'Postao/la',
'POST_BY_FOE'=> 'Ovaj post je postao/la <strong>%1$s</strong>, koji/a je na tvojoj Listi ignoriranih; ukoliko želiš pročitati post, klikni %2$sovdje%3$s.',
'POST_DAY'=> '%.2f posta/ova dnevno',
'POST_DETAILS'=> 'Detalji o postu',
'POST_NEW_TOPIC'=> 'Započni novu temu',
'POST_PCT'=> '%.2f%% od svih postova',
'POST_PCT_ACTIVE'=> '%.2f%% od postova korisnika/ce',
'POST_PCT_ACTIVE_OWN'=> '%.2f%% od tvojih postova',
'POST_REPLY'=> 'Odgovori',
'POST_REPORTED'=> 'Pročitaj prijavu/e',
'POST_SUBJECT'=> 'Naslov',
'POST_TIME'=> 'Vrijeme posta(nja)',
'POST_TOPIC'=> 'Započni novu temu',
'POST_UNAPPROVED'=> 'Post čeka odobrenje.',
'PREVIEW'=> 'Prikaz',
'PREVIOUS' => 'Prethodna', // Used in pagination
'PREVIOUS_STEP' => 'Nazad',
'PRIVACY'=> 'Zaštita privatnosti',
'PRIVATE_MESSAGE'=> 'Pošalji privatnu poruku',
'PRIVATE_MESSAGES'=> 'Privatne poruke',
'PRIVATE_MESSAGING'=> 'Privatne poruke',
'PROFILE'=> 'Profil/Postavke',

'READING_FORUM'=> 'Pregledava teme u %s',
'READING_GLOBAL_ANNOUNCE'=> 'Čita Globalnu obavijest',
'READING_LINK'=> 'Slijedi link %s',
'READING_TOPIC'=> 'Čita teme u %s',
'READ_PROFILE'=> 'Profil',
'REASON'=> 'Razlog',
'RECORD_ONLINE_USERS'=> 'Najviše korisnika/ca istovremeno online bilo je: <strong>%1$s</strong>, dana %2$s.',
'REDIRECT'=> 'Preusmjeravanje',
'REDIRECTS'=> 'Preusmjereno puta',
'REGISTER'=> 'Registracija',
'REGISTERED_USERS'=> 'Registriranih korisnika/ca:',
'REG_USERS_ONLINE'=> 'Ukupno je: %d registriranih korisnika/ca i ',
'REG_USERS_TOTAL'=> '%d registriranih, ',
'REG_USERS_TOTAL_AND'=> '%d registriranih i ',
'REG_USERS_ZERO_ONLINE'=> 'Ukupno je: 0 registriranih korisnika/ca i ',
'REG_USERS_ZERO_TOTAL'=> '0 registriranih, ',
'REG_USERS_ZERO_TOTAL_AND'=> '0 registriranih i ',
'REG_USER_ONLINE'=> 'Ukupno je: %d registrirani/a korisnik/ca i ',
'REG_USER_TOTAL'=> '%d registriran/a, ',
'REG_USER_TOTAL_AND'=> '%d registriran/a i ',
'REMOVE'=> 'Izbriši',
'REMOVE_INSTALL'=> 'Izbriši, premjesti ili preimenuj mapu install.<br />Ukoliko ne izbrišeš mapu, samo će <em>Administriranje foruma [AF]</em> biti dostupno.',
'REPLIES'=> 'Odgovori',
'REPLY_WITH_QUOTE'=> 'Citiraj (i odgovori)',
'REPLYING_GLOBAL_ANNOUNCE'=> 'Odgovara na Globalnu obavijest',
'REPLYING_MESSAGE'=> 'Odgovara na poruku u %s',
'REPORT_BY'=> 'Prijavio/la',
'REPORT_POST'=> 'Prijavi post',
'REPORTING_POST'=> 'Prijavljuje post',
'RESEND_ACTIVATION'=> 'Pošalji ponovo aktivacijski e-mail',
'RESET'=> 'Poništi',
'RESTORE_PERMISSIONS'=> 'Postavi dopuštenja na zadane vrijednosti',
'RETURN_INDEX'=> 'Klikni %sovdje%s za povratak na Početnu stranicu.',
'RETURN_FORUM'=> 'Klikni %sovdje%s za povratak na forum.',
'RETURN_PAGE'=> 'Klikni %sovdje%s za povratak na prethodnu stranicu.',
'RETURN_TOPIC'=> 'Klikni %sovdje%s za povratak na temu.',
'RETURN_TO'=> 'Natrag na',
'FEED'=> 'Feed',
'FEED_NEWS'=> 'Vijesti',
'FEED_TOPICS_ACTIVE'=> 'Aktivne teme',
'FEED_TOPICS_NEW'=> 'Nove teme',
'RULES_ATTACH_CAN'=> '<strong>Možeš</strong> postati privitke.',
'RULES_ATTACH_CANNOT'=> '<strong>Ne možeš</strong> postati privitke.',
'RULES_DELETE_CAN'=> '<strong>Možeš</strong> izbrisati svoje postove.',
'RULES_DELETE_CANNOT'=> '<strong>Ne možeš</strong> izbrisati svoje postove.',
'RULES_DOWNLOAD_CAN'=> '<strong>Možeš</strong> preuzimati privitke.',
'RULES_DOWNLOAD_CANNOT'=> '<strong>Ne možeš</strong> preuzimati privitke.',
'RULES_EDIT_CAN'=> '<strong>Možeš</strong> uređivati svoje postove.',
'RULES_EDIT_CANNOT'=> '<strong>Ne možeš</strong> uređivati svoje postove.',
'RULES_LOCK_CAN'=> '<strong>Možeš</strong> zaključavati svoje teme.',
'RULES_LOCK_CANNOT'=> '<strong>Ne možeš</strong> zaključavati svoje teme.',
'RULES_POST_CAN'=> '<strong>Možeš</strong> započinjati nove teme.',
'RULES_POST_CANNOT'=> '<strong>Ne možeš</strong> započinjati nove teme.',
'RULES_REPLY_CAN'=> '<strong>Možeš</strong> odgovarati na postove.',
'RULES_REPLY_CANNOT'=> '<strong>Ne možeš</strong> odgovarati na postove.',
'RULES_VOTE_CAN'=> '<strong>Možeš</strong> glasovati u anketama.',
'RULES_VOTE_CANNOT'=> '<strong>Ne možeš</strong> glasovati u anketama.',

'SEARCH'=> 'Pretražnik',
'SEARCH_MINI'=> 'Pretražnik...',
'SEARCH_ADV'=> 'Napredno pretraživanje',
'SEARCH_ADV_EXPLAIN'=> 'Opcije naprednog pretraživanja.',
'SEARCH_KEYWORDS'=> 'Pretraživanje po ključnim riječima',
'SEARCHING_FORUMS'=> 'Pretraživanje foruma',
'SEARCH_ACTIVE_TOPICS'=> 'Aktivne teme',
'SEARCH_FOR'=> 'Traži',
'SEARCH_FORUM'=> 'Pretraži forum...',
'SEARCH_NEW'=> 'Novi postovi',
'SEARCH_POSTS_BY'=> 'Pretraživanje',
'SEARCH_SELF'=> 'Tvoji postovi',
'SEARCH_TOPIC'=> 'Pretraži temu...',
'SEARCH_UNANSWERED'=> 'Neodgovoreni postovi',
'SEARCH_UNREAD'=> 'Pregledaj nepročitane postove',
'SECONDS'=> 'Sekunda/e/i',
'SELECT'=> 'Izaberi',
'SELECT_ALL_CODE'=> 'Označi sve',
'SELECT_DESTINATION_FORUM'=> 'Izaberi odredišni forum',
'SELECT_FORUM'=> 'Izaberi forum',
'SEND_EMAIL'=> 'Pošalji e-mail', // Used for submit buttons
'SEND_EMAIL_USER' => 'Pošalji e-mail korisniku/ci', // Used as: {L_SEND_EMAIL_USER} {USERNAME} -> E-mail UserX
'SEND_PRIVATE_MESSAGE'=> 'Pošalji privatnu poruku',
'SETTINGS'=> 'Postavke',
'SIGNATURE'=> 'Potpis',
'SKIP'=> 'Idi na sadržaj',
'SMTP_NO_AUTH_SUPPORT'=> 'SMTP server ne podržava provjeru autentičnosti.',
'SORRY_AUTH_READ'=> 'Za pregledavanje ovog foruma, moraš biti ovlašten/a.',
'SORRY_AUTH_VIEW_ATTACH'=> 'Za preuzimanje ovog privitka, moraš biti ovlašten/a.',
'SORT_BY'=> 'Redanje',
'SORT_JOINED'=> 'Datum registracije',
'SORT_LOCATION'=> 'Lokacija',
'SORT_RANK'=> 'Status',
'SORT_POSTS'=> 'Postovi',
'SORT_TOPIC_TITLE'=> 'Naslov teme',
'SORT_USERNAME'=> 'Korisničko ime',
'SPLIT_TOPIC'=> 'Podijeli temu',
'SQL_ERROR_OCCURRED'=> 'Došlo je do sql greške [problema].<br />Ukoliko se problem nastavi, molim(o), kontaktiraj %sadministratora/icu%s.',
'STATISTICS'=> 'Statistika',
'START_WATCHING_FORUM'=> 'Pretplati se',
'START_WATCHING_TOPIC'=> 'Pretplati se',
'STOP_WATCHING_FORUM'=> 'Odpretplati se',
'STOP_WATCHING_TOPIC'=> 'Odpretplati se',
'SUBFORUM'=> 'Podforum',
'SUBFORUMS'=> 'Podforumi',
'SUBJECT'=> 'Naslov',
'SUBMIT'=> 'Pošalji',

'TERMS_USE'=> 'Uvjeti korištenja',
'TEST_CONNECTION'=> 'Testiraj vezu',
'THE_TEAM'=> 'Tim',
'TIME'=> 'Vrijeme',
'TOO_LONG'=> 'Unesena vrijednost je predugačka.',
'TOO_LONG_AIM'=> 'AIM korisničko ime koje si unio/la je predugačko.',
'TOO_LONG_CONFIRM_CODE'=> 'Potvrdni kod koji si unio/la je predugačak.',
'TOO_LONG_DATEFORMAT' => 'Format datuma koji si unio/la je predugačak.',
'TOO_LONG_ICQ'=> 'ICQ broj koji si unio/la je predugačak.',
'TOO_LONG_INTERESTS'=> 'Interes/i koji/e si unio/la je/su predugačak/ki.',
'TOO_LONG_JABBER'=> 'Jabber korisničko ime koje si unio/la je predugačko.',
'TOO_LONG_LOCATION'=> 'Lokacija koju si unio/la je predugačka.',
'TOO_LONG_MSN'=> 'MSNM/WLM korisničko ime koje si unio/la je predugačko.',
'TOO_LONG_NEW_PASSWORD'=> 'Zaporka koju si unio/la je predugačka.',
'TOO_LONG_OCCUPATION'=> 'Zvanje/zanimanje koje si unio/la je predugačko.',
'TOO_LONG_PASSWORD_CONFIRM'=> '“Potvrda” zaporke koju si unio/la je predugačka.',
'TOO_LONG_USER_PASSWORD'=> 'Zaporka koju si unio/la je predugačka.',
'TOO_LONG_USERNAME'=> 'Korisničko ime koje si unio/la je predugačko.',
'TOO_LONG_EMAIL'=> 'E-mail adresa koju si unio/la je predugačka.',
'TOO_LONG_EMAIL_CONFIRM'=> '“Potvrda” e-mail adrese koju si unio/la je predugačka.',
'TOO_LONG_WEBSITE'=> 'Web adresa koju si unio/la je predugačka.',
'TOO_LONG_YIM'=> 'YIM korisničko ime koje si unio/la je predugačko.',
'TOO_MANY_VOTE_OPTIONS'=> 'Pokušao/la si glasovati za [pre]više ponuđenih odgovora.',
'TOO_SHORT'=> 'Unesena vrijednost je prekratka.',
'TOO_SHORT_AIM'=> 'AIM korisničko ime koje si unio/la je prekratko.',
'TOO_SHORT_CONFIRM_CODE'=> 'Potvrdni kod koji si unio/la je prekratak.',
'TOO_SHORT_DATEFORMAT' => 'Format datuma koji si unio/la je prekratak.',
'TOO_SHORT_ICQ'=> 'ICQ broj koji si unio/la je prekratak.',
'TOO_SHORT_INTERESTS'=> 'Interes/i koji/e si unio/la je/su prekratak/ki.',
'TOO_SHORT_JABBER'=> 'Jabber korisničko ime koje si unio/la je prekratko.',
'TOO_SHORT_LOCATION'=> 'Lokacija koju si unio/la je prekratka.',
'TOO_SHORT_MSN'=> 'MSNM/WLM korisničko ime koje si unio/la je prekratko.',
'TOO_SHORT_NEW_PASSWORD'=> 'Zaporka koju si unio/la je prekratka.',
'TOO_SHORT_OCCUPATION'=> 'Zvanje/zanimanje koje si unio/la je prekratko.',
'TOO_SHORT_PASSWORD_CONFIRM'=> '“Potvrda” zaporke koju si unio/la je prekratka.',
'TOO_SHORT_USER_PASSWORD'=> 'Zaporka koju si unio/la je prekratka.',
'TOO_SHORT_USERNAME'=> 'Korisničko ime koje si unio/la je prekratko.',
'TOO_SHORT_EMAIL'=> 'E-mail adresa koju si unio/la je prekratka.',
'TOO_SHORT_EMAIL_CONFIRM'=> '“Potvrda” e-mail adrese koju si unio/la je prekratka.',
'TOO_SHORT_WEBSITE'=> 'Web adresa koju si unio/la je prekratka.',
'TOO_SHORT_YIM'=> 'YIM korisničko ime koje si unio/la je prekratko.',
'TOPIC'=> 'Tema',
'TOPICS'=> 'Teme',
'TOPICS_UNAPPROVED'=> 'Najmanje jedna tema na ovom forumu nije odobrena.',
'TOPIC_ICON'=> 'Ikona teme',
'TOPIC_LOCKED'=> 'Tema je zaključana [ne možeš postati/uređivati postove/odgovarati].',
'TOPIC_LOCKED_SHORT'=> 'Tema je zaključana',
'TOPIC_MOVED'=> 'Premješteno',
'TOPIC_REVIEW'=> 'Prikaz teme',
'TOPIC_TITLE'=> 'Naslov teme',
'TOPIC_UNAPPROVED'=> 'Tema nije odobrena.',
'TOTAL_ATTACHMENTS'=> 'Privitak(ci)',
'TOTAL_LOG'=> '1 log',
'TOTAL_LOGS'=> '%d log(ov)a',
'TOTAL_NO_PM'=> '0 privatnih poruka ukupno',
'TOTAL_PM'=> '1 privatna poruka ukupno',
'TOTAL_PMS'=> '$d privatnih poruka ukupno',
'TOTAL_POSTS'=> 'Ukupno postova',
'TOTAL_POSTS_OTHER'=> 'Ukupno postova: <strong>%d</strong>.',
'TOTAL_POSTS_ZERO'=> 'Ukupno postova: <strong>0</strong>.',
'TOPIC_REPORTED'=> '[Ova] Tema je prijavljena.',
'TOTAL_TOPICS_OTHER'=> 'Ukupno tema: <strong>%d</strong>.',
'TOTAL_TOPICS_ZERO'=> 'Ukupno tema: <strong>0</strong>.',
'TOTAL_USERS_OTHER'=> 'Ukupno korisnika/ca: <strong>%d</strong>.',
'TOTAL_USERS_ZERO'=> 'Ukupno korisnika/ca: <strong>0</strong>.',
'TRACKED_PHP_ERROR'=> 'PHP greš(a)ka: %s.',

'UNABLE_GET_IMAGE_SIZE'=> 'Nije moguće utvrditi dimenzije slikovne datoteke.',
'UNABLE_TO_DELIVER_FILE'=> 'Isporuka datoteka nije moguća.',
'UNKNOWN_BROWSER'=> 'Nepoznat preglednik',
'UNMARK_ALL'=> 'Odoznači sve',
'UNREAD_MESSAGES'=> 'Nepročitane poruke',
'UNREAD_PM'=> '<strong>%d</strong> nepročitana poruka',
'UNREAD_PMS'=> '<strong>%d</strong> nepročitanih/e poruka/e',
'UNWATCHED_FORUMS'=> 'Više nisi pretplaćen/a na forum(e).',
'UNWATCHED_TOPICS'=> 'Više nisi pretplaćen/a na temu(e).',
'UNWATCHED_FORUMS_TOPICS' => 'Više nisi pretplaćen/a na unos(e).',
'UPDATE'=> 'Ažuriraj',
'UPLOAD_IN_PROGRESS'=> 'Uploadiranje je u tijeku.',
'URL_REDIRECT'=> 'Ukoliko “ti” preglednik ne podržava preusmjeravanje, klikni %sovdje%s kako bi “bio/la” preusmjeren.',
'USERGROUPS'=> 'Korisničke grupe',
'USERNAME'=> 'Korisničko ime',
'USERNAMES'=> 'Korisnička imena',
'USER_AVATAR'=> 'Avatar',
'USER_CANNOT_READ'=> 'Ne možeš pregledavati postove na ovom forumu.',
'USER_POST'=> '%d post',
'USER_POSTS'=> '%d post(ov)a',
'USERS'=> 'Korisnici/e',
'USE_PERMISSIONS'=> 'Testiraj dopuštenja korisnika/ce',
'USER_NEW_PERMISSION_DISALLOWED'=> 'Žao nam je, ali nisi autoriziran/a za korištenje ove opcije. Možda si se upravo registrirao/la i moraš više sudjelovati u radu foruma kako bi mogao/la koristiti ovu funkciju.',

'VARIANT_DATE_SEPARATOR'=> ' / ',// Used in date format dropdown, eg: "Today, 13:37 / 01 Jan 2007, 13:37" ... to join a relative date with calendar date
'VIEWED'=> 'Pogledano',
'VIEWING_FAQ'=> 'Pregledava ČPP',
'VIEWING_MEMBERS'=> 'Pregledava detalje Članstva',
'VIEWING_ONLINE'=> 'Pregledava tko je online',
'VIEWING_MCP'=> 'Pregledava Moderiranje foruma',
'VIEWING_MEMBER_PROFILE'=> 'Pregledava profil(e) korisnika/ce(a)',
'VIEWING_PRIVATE_MESSAGES'=> 'Pregledava privatne poruke',
'VIEWING_REGISTER'=> 'Registrira se',
'VIEWING_UCP'=> 'Pregledava Profil/Postavke',
'VIEWS'=> 'Pogledano',
'VIEW_BOOKMARKS'=> 'Bookmarci',
'VIEW_FORUM_LOGS'=> 'Logovi',
'VIEW_LATEST_POST'=> 'Zadnji post',
'VIEW_NEWEST_POST'=> 'Zadnji nepročitan post',
'VIEW_NOTES'=> 'Bilješke',
'VIEW_ONLINE_TIME'=> 'Bazirano na aktivnosti korisnika/ca u prošloj %d minuti.',
'VIEW_ONLINE_TIMES'=> 'Bazirano na aktivnosti korisnika/ca u prošle/ih %d minute/a.',
'VIEW_TOPIC'=> 'Pogledaj temu',
'VIEW_TOPIC_ANNOUNCEMENT'=> 'Obavijest: ',
'VIEW_TOPIC_GLOBAL'=> 'Globalna obavijest: ',
'VIEW_TOPIC_LOCKED'=> 'Zaključano: ',
'VIEW_TOPIC_LOGS'=> 'Pogledaj logove',
'VIEW_TOPIC_MOVED'=> 'Premješteno: ',
'VIEW_TOPIC_POLL'=> 'Anketa: ',
'VIEW_TOPIC_STICKY'=> 'Važno: ',
'VISIT_WEBSITE'=> 'Posjeti',
'WARNINGS'=> 'Upozorenja',
'WARN_USER'=> 'Upozori korisnika/cu',
'WELCOME_SUBJECT'=> 'Dobrodošao/la na %s',
'WEBSITE'=> 'Web stranica',
'WHOIS'=> 'Whois',
'WHO_IS_ONLINE'=> 'Online',
'WRONG_PASSWORD'=> 'Unio/la si netočnu zaporku.',
'WRONG_DATA_ICQ'=> 'Broj koji si unio/la nije valjan ICQ broj.',
'WRONG_DATA_JABBER'=> 'Ime koje si unio/la nije valjano Jabber korisničko ime.',
'WRONG_DATA_LANG'=> 'Jezik nije valjan.',
'WRONG_DATA_WEBSITE'=> 'Adresa Web stranice mora biti valjan URL, uključujući protokol, npr. http://www.example.com/.',
'WROTE'=> 'je napisao/la',

'YEAR'=> 'Godina',
'YEAR_MONTH_DAY'=> '(GGGG-MM-DD)',
'YES'=> 'Da',
'YIM'=> 'YIM',
'YOU_LAST_VISIT'=> 'Zadnji put si ovdje bio/la: %s.',
'YOU_NEW_PM'=> 'Nova privatna poruka te čeka u Sandučiću.',
'YOU_NEW_PMS'=> 'Nove privatne poruke te čekaju u Sandučiću.',
'YOU_NO_NEW_PM'=> 'Nemaš novih privatnih poruka',

'datetime'=> array(
'TODAY'=> 'Danas, ',
'TOMORROW'=> 'Sutra, ',
'YESTERDAY'=> 'Jučer, ',

'Sunday'=> 'nedjelja',
'Monday'=> 'ponedjeljak',
'Tuesday'=> 'utorak',
'Wednesday'=> 'srijeda',
'Thursday'=> 'četvrtak',
'Friday'=> 'petak',
'Saturday'=> 'subota',

'Sun'=> 'ned',
'Mon'=> 'pon',
'Tue'=> 'uto',
'Wed'=> 'sri',
'Thu'=> 'čet',
'Fri'=> 'pet',
'Sat'=> 'sub',

'January'=> 'siječanj',
'February'=> 'veljača',
'March'=> 'ožujak',
'April'=> 'travanj',
'May'=> 'svibanj',
'June'=> 'lipanj',
'July'=> 'srpanj',
'August'=> 'kolovoz',
'September' => 'rujan',
'October'=> 'listopad',
'November'=> 'studeni',
'December'=> 'prosinac',

'Jan'=> 'sij',
'Feb'=> 'vel',
'Mar'=> 'ožu',
'Apr'=> 'tra',
'May_short'=> 'svi',// Short representation of "May". May_short used because in english the short and long date are the same for May.
'Jun'=> 'lip',
'Jul'=> 'srp',
'Aug'=> 'kol',
'Sep'=> 'ruj',
'Oct'=> 'lis',
'Nov'=> 'stu',
'Dec'=> 'pro',
),

'tz'=> array(
'-12'=> 'UTC - 12:00',
'-11'=> 'UTC - 11:00',
'-10'=> 'UTC - 10:00',
'-9.5'=> 'UTC - 09:30',
'-9'=> 'UTC - 09:00',
'-8'=> 'UTC - 08:00',
'-7'=> 'UTC - 07:00',
'-6'=> 'UTC - 06:00',
'-5'=> 'UTC - 05:00',
'-4.5'=> 'UTC - 04:30',
'-4'=> 'UTC - 04:00',
'-3.5'=> 'UTC - 03:30',
'-3'=> 'UTC - 03:00',
'-2'=> 'UTC - 02:00',
'-1'=> 'UTC - 01:00',
'0'=> 'UTC',
'1'=> 'UTC + 01:00',
'2'=> 'UTC + 02:00',
'3'=> 'UTC + 03:00',
'3.5'=> 'UTC + 03:30',
'4'=> 'UTC + 04:00',
'4.5'=> 'UTC + 04:30',
'5'=> 'UTC + 05:00',
'5.5'=> 'UTC + 05:30',
'5.75'=> 'UTC + 05:45',
'6'=> 'UTC + 06:00',
'6.5'=> 'UTC + 06:30',
'7'=> 'UTC + 07:00',
'8'=> 'UTC + 08:00',
'8.75'=> 'UTC + 08:45',
'9'=> 'UTC + 09:00',
'9.5'=> 'UTC + 09:30',
'10'=> 'UTC + 10:00',
'10.5'=> 'UTC + 10:30',
'11'=> 'UTC + 11:00',
'11.5'=> 'UTC + 11:30',
'12'=> 'UTC + 12:00',
'12.75'=> 'UTC + 12:45',
'13'=> 'UTC + 13:00',
'14'=> 'UTC + 14:00',
'dst'=> '[<abbr title="Ljetno vrijeme">LJV</abbr>]',
),

'tz_zones'=> array(
'-12'=> 'UTC - 12:00',
'-11'=> 'UTC - 11:00',
'-10'=> 'UTC - 10:00',
'-9.5'=> 'UTC - 09:30',
'-9'=> 'UTC - 09:00',
'-8'=> 'UTC - 08:00',
'-7'=> 'UTC - 07:00',
'-6'=> 'UTC - 06:00',
'-5'=> 'UTC - 05:00',
'-4.5'=> 'UTC - 04:30',
'-4'=> 'UTC - 04:00',
'-3.5'=> 'UTC - 03:30',
'-3'=> 'UTC - 03:00',
'-2'=> 'UTC - 02:00',
'-1'=> 'UTC - 01:00',
'0'=> 'UTC',
'1'=> 'UTC + 01:00',
'2'=> 'UTC + 02:00',
'3'=> 'UTC + 03:00',
'3.5'=> 'UTC + 03:30',
'4'=> 'UTC + 04:00',
'4.5'=> 'UTC + 04:30',
'5'=> 'UTC + 05:00',
'5.5'=> 'UTC + 05:30',
'5.75'=> 'UTC + 05:45',
'6'=> 'UTC + 06:00',
'6.5'=> 'UTC + 06:30',
'7'=> 'UTC + 07:00',
'8'=> 'UTC + 08:00',
'8.75'=> 'UTC + 08:45',
'9'=> 'UTC + 09:00',
'9.5'=> 'UTC + 09:30',
'10'=> 'UTC + 10:00',
'10.5'=> 'UTC + 10:30',
'11'=> 'UTC + 11:00',
'11.5'=> 'UTC + 11:30',
'12'=> 'UTC + 12:00',
'12.75'=> 'UTC + 12:45',
'13'=> 'UTC + 13:00',
'14'=> 'UTC + 14:00',
),

// The value is only an example and will get replaced by the current time on view
'dateformats'=> array(
'd M Y, H:i'=> '01 sij 2007, 13:37',
'd M Y H:i'=> '01 sij 2007 13:37',
'M jS, \'y, H:i'=> 'sij 1st, \'07, 13:37',
'D M d, Y g:i a'=> 'pon sij 01, 2007 1:37 pp',
'F jS, Y, g:i a'=> 'siječanj 1st, 2007, 1:37 pp',
'|d M Y|, H:i'=> 'danas, 13:37 / 01 sij 2007, 13:37',
'|F jS, Y|, g:i a'=> 'danas, 1:37 pp / siječanj 1st, 2007, 1:37 pp'
),

// The default dateformat which will be used on new installs in this language
// Translators should change this if a the usual date format is different
'default_dateformat'=> 'd. m. Y. (H:i)', // 01. 01. 2007. (00:00)
));
?>