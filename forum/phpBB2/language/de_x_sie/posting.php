<?php
/**
*
* posting [Deutsch — Sie]
*
* @package language
* @version $Id: posting.php 464 2010-06-15 14:47:22Z tuxman $
* @copyright (c) 2005 phpBB Group; 2006 phpBB.de
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Deutsche Übersetzung durch die Übersetzer-Gruppe von phpBB.de:
* siehe docs/AUTHORS und http://www.phpbb.de/go/ubersetzerteam
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
	'ADD_ATTACHMENT'			=> 'Dateianhang hochladen',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Wenn Sie eine Datei oder mehrere Dateien anhängen möchten, geben Sie die Details unten ein.',
	'ADD_FILE'					=> 'Datei hinzufügen',
	'ADD_POLL'					=> 'Umfrage erstellen',
	'ADD_POLL_EXPLAIN'			=> 'Wenn Sie zu dem Thema keine Umfrage hinzufügen möchten, lassen Sie die Felder einfach leer.',
	'ALREADY_DELETED'			=> 'Diese Nachricht wurde bereits gelöscht.',
	'ATTACH_QUOTA_REACHED'		=> 'Das Kontingent für Dateianhänge ist bereits vollständig ausgenutzt.',
	'ATTACH_SIG'				=> 'Signatur anhängen (die Signatur kann im persönlichen Bereich geändert werden)',

	'BBCODE_A_HELP'				=> 'Eingebetteter Dateianhang: [attachment=]dateiname.erw[/attachment]',
	'BBCODE_B_HELP'				=> 'Fett: [b]Text[/b]',
	'BBCODE_C_HELP'				=> 'Code anzeigen: [code]Code[/code]',
	'BBCODE_E_HELP'				=> 'Aufzählung: Listenelement hinzufügen',
	'BBCODE_F_HELP'				=> 'Schriftgröße: [size=85]kleiner Text[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s ist <em>ausgeschaltet</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s ist <em>eingeschaltet</em>',
	'BBCODE_I_HELP'				=> 'Kursiv: [i]Text[/i]',
	'BBCODE_L_HELP'				=> 'Aufzählung: [list]Text[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'Listeneintrag: [*]Text',
	'BBCODE_O_HELP'				=> 'Geordnete Aufzählung: [list=]Text[/list]',
	'BBCODE_P_HELP'				=> 'Bild einfügen: [img]http://bild_url[/img]',
	'BBCODE_Q_HELP'				=> 'Zitat: [quote]Text[/quote]',
	'BBCODE_S_HELP'				=> 'Schriftfarbe: [color=red]Text[/color]  Tipp: Sie können auch color=#FF0000 benutzen',
	'BBCODE_U_HELP'				=> 'Unterstrichen: [u]Text[/u]',
	'BBCODE_W_HELP'				=> 'Link einfügen: [url]http://url[/url] oder [url=http://url]Linktext[/url]',
	'BBCODE_D_HELP'				=> 'Flash: [flash=Breite,Höhe]http://url[/flash]',
	'BUMP_ERROR'				=> 'Sie können dieses Thema nicht so kurz nach dem letzten Beitrag als neu markieren.',

	'CANNOT_DELETE_REPLIED'		=> 'Sie können nur Themen löschen, auf die noch nicht geantwortet wurde.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Dieser Beitrag wurde gesperrt, daher können Sie ihn nicht mehr bearbeiten.',
	'CANNOT_EDIT_TIME'			=> 'Sie können diesen Beitrag nicht mehr ändern oder löschen.',
	'CANNOT_POST_ANNOUNCE'		=> 'Sie dürfen keine Bekanntmachungen erstellen.',
	'CANNOT_POST_STICKY'		=> 'Sie dürfen keine wichtigen Themen erstellen.',
	'CHANGE_TOPIC_TO'			=> 'Art des Themas ändern zu',
	'CLOSE_TAGS'				=> 'Tags schließen',
	'CURRENT_TOPIC'				=> 'Aktuelles Thema',

	'DELETE_FILE'				=> 'Datei löschen',
	'DELETE_MESSAGE'			=> 'Nachricht löschen',
	'DELETE_MESSAGE_CONFIRM'	=> 'Sind Sie sich sicher, dass Sie diese Nachricht löschen möchten?',
	'DELETE_OWN_POSTS'			=> 'Sie können nur Ihre eigenen Beiträge löschen.',
	'DELETE_POST_CONFIRM'		=> 'Sind Sie sich sicher, dass Sie diesen Beitrag löschen möchten?',
	'DELETE_POST_WARN'			=> 'Nach dem Löschen kann der Beitrag nicht wiederhergestellt werden.',
	'DISABLE_BBCODE'			=> 'BBCode ausschalten',
	'DISABLE_MAGIC_URL'			=> 'URLs nicht automatisch verlinken',
	'DISABLE_SMILIES'			=> 'Smilies ausschalten',
	'DISALLOWED_CONTENT'		=> 'Die hochgeladene Datei wurde abgewiesen, da sie als möglicher Angriffsversuch identifiziert wurde.',
	'DISALLOWED_EXTENSION'		=> 'Die Dateierweiterung %s ist nicht erlaubt.',
	'DRAFT_LOADED'				=> 'Der Entwurf wurde in das Formular geladen. Sie können Ihren Beitrag nun abschließen.<br />Der Entwurf wird nach dem Absenden des Beitrags gelöscht.',
	'DRAFT_LOADED_PM'			=> 'Der Entwurf wurde in das Formular geladen. Sie können Ihre Private Nachricht nun abschließen.<br />Der Entwurf wird nach dem Absenden der Privaten Nachricht gelöscht.',
	'DRAFT_SAVED'				=> 'Entwurf erfolgreich gespeichert.',
	'DRAFT_TITLE'				=> 'Entwurfstitel',

	'EDIT_REASON'				=> 'Grund für die Bearbeitung dieses Beitrags',
	'EMPTY_FILEUPLOAD'			=> 'Die hochgeladene Datei ist leer.',
	'EMPTY_MESSAGE'				=> 'Sie müssen zu Ihrem Beitrag eine Nachricht eingeben.',
	'EMPTY_REMOTE_DATA'			=> 'Die Datei konnte nicht hochgeladen werden. Bitte laden Sie sie manuell hoch.',

	'FLASH_IS_OFF'				=> '[flash] ist <em>ausgeschaltet</em>',
	'FLASH_IS_ON'				=> '[flash] ist <em>eingeschaltet</em>',
	'FLOOD_ERROR'				=> 'Sie können einen Beitrag nicht so schnell nach Ihrem letzten schreiben.',
	'FONT_COLOR'				=> 'Schriftfarbe',
	'FONT_COLOR_HIDE'			=> 'Schriftfarbe ausblenden',
	'FONT_HUGE'					=> 'Riesig',
	'FONT_LARGE'				=> 'Groß',
	'FONT_NORMAL'				=> 'Normal',
	'FONT_SIZE'					=> 'Schriftgröße',
	'FONT_SMALL'				=> 'Klein',
	'FONT_TINY'					=> 'Sehr klein',

	'GENERAL_UPLOAD_ERROR'		=> 'Konnte Dateianhang nicht nach %s hochladen.',

	'IMAGES_ARE_OFF'			=> '[img] ist <em>ausgeschaltet</em>',
	'IMAGES_ARE_ON'				=> '[img] ist <em>eingeschaltet</em>',
	'INVALID_FILENAME'			=> '%s ist ein ungültiger Dateiname.',

	'LOAD'						=> 'Laden',
	'LOAD_DRAFT'				=> 'Entwurf laden',
	'LOAD_DRAFT_EXPLAIN'		=> 'Hier können Sie den Entwurf auswählen, mit dessen Erstellung Sie fortfahren möchten. Ihr aktueller Beitrag wird abgebrochen und die Inhalte der Eingabefelder gelöscht. In Ihrem persönlichen Bereich können Sie Entwürfe ansehen, bearbeiten oder löschen.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Sie müssen sich anmelden, um in diesem Forum Themen als neu zu markieren.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Sie müssen sich anmelden, um in diesem Forum Beiträge zu löschen.',
	'LOGIN_EXPLAIN_POST'		=> 'Sie müssen sich anmelden, um in diesem Forum Beiträge zu schreiben.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Sie müssen sich anmelden, um in diesem Forum Beiträge zu zitieren.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Sie müssen sich anmelden, um in diesem Forum auf Beiträge zu antworten.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Die Schriftgröße darf maximal %1$d betragen.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Ihre Flash-Dateien dürfen maximal %1$d Pixel hoch sein.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Ihre Flash-Dateien dürfen maximal %1$d Pixel breit sein.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Ihre Bilder dürfen maximal %1$d Pixel hoch sein.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Ihre Bilder dürfen maximal %1$d Pixel breit sein.',

	'MESSAGE_BODY_EXPLAIN'		=> 'Geben Sie Ihre Nachricht hier ein. Sie darf nicht mehr als <strong>%d</strong> Zeichen enthalten.',
	'MESSAGE_DELETED'			=> 'Der Beitrag wurde erfolgreich gelöscht.',
	'MORE_SMILIES'				=> 'Mehr Smilies anzeigen',

	'NOTIFY_REPLY'				=> 'Mich benachrichtigen, sobald eine Antwort geschrieben wurde',
	'NOT_UPLOADED'				=> 'Datei konnte nicht hochgeladen werden.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Sie können keine bestehenden Umfrageoptionen löschen.',
	'NO_PM_ICON'				=> 'Kein PN-Symbol',
	'NO_POLL_TITLE'				=> 'Sie müssen einen Umfragentitel angeben.',
	'NO_POST'					=> 'Die angeforderte Nachricht existiert nicht.',
	'NO_POST_MODE'				=> 'Kein Eintragsmodus gewählt.',

	'PARTIAL_UPLOAD'			=> 'Die Datei wurde nur teilweise hochgeladen.',
	'PHP_SIZE_NA'				=> 'Der Dateianhang ist zu groß.<br />Die durch PHP in der php.ini festgelegte maximale Größe konnte nicht ermittelt werden.',
	'PHP_SIZE_OVERRUN'			=> 'Der Dateianhang ist zu groß, er darf maximal %1$d %2$s groß sein.<br />Dieser Wert ist in der php.ini festgelegt und kann nicht überschrieben werden.',
	'PLACE_INLINE'				=> 'Im Beitrag anzeigen',
	'POLL_DELETE'				=> 'Umfrage löschen',
	'POLL_FOR'					=> 'Umfrage durchführen für',
	'POLL_FOR_EXPLAIN'			=> 'Damit diese Umfrage nie endet, stellen Sie als Wert 0 ein oder lassen Sie ihn leer.',
	'POLL_MAX_OPTIONS'			=> 'Auswahlmöglichkeiten pro Benutzer',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Diese Anzahl an Optionen kann ein Benutzer maximal auswählen.',
	'POLL_OPTIONS'				=> 'Antworten der Umfrage',
	'POLL_OPTIONS_EXPLAIN'		=> 'Geben Sie jede Antwort in einer separaten Zeile ein. Sie können bis zu <strong>%d</strong> Antwortmöglichkeiten angeben.',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'Geben Sie jede Antwort in einer separaten Zeile ein. Sie können bis zu <strong>%d</strong> Antwortmöglichkeiten angeben. Wenn Sie Optionen entfernen oder hinzufügen, werden alle vorherigen Abstimmungen zurückgesetzt.',
	'POLL_QUESTION'				=> 'Frage',
	'POLL_TITLE_TOO_LONG'		=> 'Die Frage der Umfrage muss weniger als 100 Zeichen enthalten.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'Die umgesetzte Größe Ihrer Frage ist zu lang. Entfernen Sie ggf. BBCode oder Smilies.',
	'POLL_VOTE_CHANGE'			=> 'Ändern der Abstimmung erlauben',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Wenn diese Option aktiviert ist, kann ein Benutzer seine Antwort später nochmals ändern',
	'POSTED_ATTACHMENTS'		=> 'Angehängte Dateien',
	'POST_APPROVAL_NOTIFY'		=> 'Sie werden informiert, sobald Ihr Beitrag freigegeben wurde.',
	'POST_CONFIRMATION'			=> 'Bestätigung des Beitrags',
	'POST_CONFIRM_EXPLAIN'		=> 'Um automatisch verfasste Beiträge zu verhindern, müssen Sie einen Bestätigungscode eingeben. Den Code sehen Sie im folgenden Bild. Wenn Sie nur über ein eingeschränktes Sehvermögen verfügen oder aus einem anderen Grund den Code nicht lesen können, kontaktieren Sie bitte die %sBoard-Administration%s.',
	'POST_DELETED'				=> 'Der Beitrag wurde erfolgreich gelöscht.',
	'POST_EDITED'				=> 'Der Beitrag wurde erfolgreich bearbeitet.',
	'POST_EDITED_MOD'			=> 'Der Beitrag wurde erfolgreich bearbeitet. Er muss jedoch erst von einem Moderator freigegeben werden, bevor er öffentlich einsehbar ist.',
	'POST_GLOBAL'				=> 'Globale Bekanntmachung',
	'POST_ICON'					=> 'Beitrags-Symbol',
	'POST_NORMAL'				=> 'Normal',
	'POST_REVIEW'				=> 'Neue Beiträge im Thema',
	'POST_REVIEW_EDIT'			=> 'Geänderter Beitrag',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'Dieser Beitrag wurde von einem anderen Benutzer geändert, während Sie ihn bearbeitet haben. Sie können Ihre Änderungen überprüfen und sie gegebenenfalls anpassen.',
	'POST_REVIEW_EXPLAIN'		=> 'In dem Thema wurde in der Zwischenzeit mindestens ein neuer Beitrag erstellt. Sie können Ihren Beitrag überprüfen und ihn gegebenenfalls anpassen.',
	'POST_STORED'				=> 'Der Beitrag wurde erfolgreich gespeichert.',
	'POST_STORED_MOD'			=> 'Der Beitrag wurde erfolgreich gespeichert. Er muss jedoch erst von einem Moderator freigegeben werden, bevor er öffentlich einsehbar ist.',
	'POST_TOPIC_AS'				=> 'Thema schreiben als',
	'PROGRESS_BAR'				=> 'Statusanzeige',

	'QUOTE_DEPTH_EXCEEDED'		=> 'Es können maximal %1$d Zitate ineinander verschachtelt werden.',

	'SAVE'						=> 'Entwurf speichern',
	'SAVE_DATE'					=> 'Gespeichert am',
	'SAVE_DRAFT'				=> 'Entwurf speichern',
	'SAVE_DRAFT_CONFIRM'		=> 'Bitte beachten Sie, dass gespeicherte Entwürfe nur den Betreff und den Nachrichtentext enthalten. Alle anderen Elemente werden entfernt. Möchten Sie den Entwurf jetzt speichern?',
	'SMILIES'					=> 'Smilies',
	'SMILIES_ARE_OFF'			=> 'Smilies sind <em>ausgeschaltet</em>',
	'SMILIES_ARE_ON'			=> 'Smilies sind <em>eingeschaltet</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Zeitlimit für wichtige Themen/Bekanntmachungen',
	'STICK_TOPIC_FOR'			=> 'Thema anpinnen für',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Damit dieses Thema für immer als wichtig/Bekanntmachung erscheint, stellen Sie als Wert 0 ein oder lassen Sie ihn leer. Beachten Sie, dass sich diese Angabe auf den Erstellungszeitpunkt des Themas bezieht.',
	'STYLES_TIP'				=> 'Tipp: Formatierungen können schnell auf den markierten Text angewandt werden.',

	'TOO_FEW_CHARS'				=> 'Die eingegebene Nachricht ist zu kurz.',
	'TOO_FEW_CHARS_LIMIT'		=> 'Ihre Nachricht enthält %1$d Zeichen. Es müssen jedoch mindestens %2$d Zeichen verwendet werden.',
	'TOO_FEW_POLL_OPTIONS'		=> 'Sie müssen mindestens zwei Antwortmöglichkeiten für die Umfrage eingeben.',
	'TOO_MANY_ATTACHMENTS'		=> 'Sie können keinen weiteren Dateianhang hinzufügen. Die maximale Anzahl liegt bei %d.',
	'TOO_MANY_CHARS'			=> 'Ihr Beitrag enthält zu viele Zeichen.',
	'TOO_MANY_CHARS_POST'		=> 'Ihr Beitrag enthält %1$d Zeichen. Es sind maximal %2$d Zeichen erlaubt.',
	'TOO_MANY_CHARS_SIG'		=> 'Ihre Signatur enthält %1$d Zeichen. Es sind maximal %2$d Zeichen erlaubt.',
	'TOO_MANY_POLL_OPTIONS'		=> 'Sie haben zu viele Antwortmöglichkeiten eingegeben',
	'TOO_MANY_SMILIES'			=> 'Ihr Beitrag enthält zu viele Smilies. Die maximal erlaubte Anzahl von Smilies ist %d.',
	'TOO_MANY_URLS'				=> 'Ihr Beitrag enthält zu viele URLs. Die maximal erlaubte Anzahl von URLs ist %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'Sie können nicht mehr Antwortmöglichkeiten pro Benutzer erlauben als es Antwortmöglichkeiten gibt.',
	'TOPIC_BUMPED'				=> 'Das Thema wurde erfolgreich als neu markiert.',

	'UNAUTHORISED_BBCODE'		=> 'Sie dürfen bestimmte BBCodes nicht verwenden: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'Um die Art dieses Themas von global auf normal zu setzen, müssen Sie ein Forum wählen, in dem das Thema erscheinen soll.',
	'UPDATE_COMMENT'			=> 'Kommentar aktualisieren',
	'URL_INVALID'				=> 'Die eingegebene URL ist ungültig.',
	'URL_NOT_FOUND'				=> 'Die angegebene Datei konnte nicht gefunden werden.',
	'URL_IS_OFF'				=> '[url] ist <em>ausgeschaltet</em>',
	'URL_IS_ON'					=> '[url] ist <em>eingeschaltet</em>',
	'USER_CANNOT_BUMP'			=> 'Sie dürfen in diesem Forum keine Themen als neu markieren.',
	'USER_CANNOT_DELETE'		=> 'Sie dürfen Ihre Beiträge in diesem Forum nicht löschen.',
	'USER_CANNOT_EDIT'			=> 'Sie dürfen Ihre Beiträge in diesem Forum nicht ändern.',
	'USER_CANNOT_REPLY'			=> 'Sie dürfen keine Antworten zu Themen in diesem Forum erstellen.',
	'USER_CANNOT_FORUM_POST'	=> 'Sie können in diesem Forum keine Beiträge schreiben, weil der Forentyp dies nicht unterstützt.',

	'VIEW_MESSAGE'				=> '%sDen Beitrag anzeigen%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sIhre Private Nachricht anzeigen%s',

	'WRONG_FILESIZE'			=> 'Die Datei ist zu groß. Die maximal erlaubte Dateigröße ist %1d %2s.',
	'WRONG_SIZE'				=> 'Das Bild muss zwischen %1$d und %3$d Pixel breit sowie zwischen %2$d und %4$d Pixel hoch sein. Das angegebene Bild ist %5$d Pixel breit und %6$d Pixel hoch.',
));

?>