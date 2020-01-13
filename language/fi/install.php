<?php
/**
 *
 * This file is part of the Finnish language pack
 *
 * @copyright (c) phpBB Suomi <https://www.phpbbsuomi.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
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

// Common installer pages
$lang = array_merge($lang, array(
    'INSTALL_PANEL'	=> 'Asennuspaneeli',
    'SELECT_LANG'	=> 'Valitse kieli',

    'STAGE_INSTALL'	=> 'Asennetaan phpBB',

    // Introduction page
    'INTRODUCTION_TITLE'	=> 'Johdanto',
    'INTRODUCTION_BODY'		=> 'Tervetuloa käyttämään phpBB3!<br /><br />phpBB® on laajimmin käytetty avoimen lähdekoodin foorumisovellus maailmassa. phpBB3 on tämän sovelluksen viimeisin versio. Ensimmäiset versiot julkaistiin vuonna 2000. Kuten sen edeltävät versiot, phpBB3 on täynnä ominaisuuksia, käyttäjäystävällinen ja täysin phpBB-tiimin tukema. phpBB3 parantaa niitä asioita, jotka tekivät phpBB2:sta niin suositun ja lisää toivottuja ominaisuuksia, jotka puuttuivat aiemmista versioista. Toivomme, että se ylittää odotuksesi.<br /><br />Tämä asennusjärjestelmä opastaa sinut phpBB3:n asennuksen läpi, viimeisimpään versioon päivityksessä aiemmista julkaisuista tai foorumin tuonnissa muista foorumisovelluksista (sisältäen phpBB2). Lisätietoja saadaksesi, suosittelemme lukemaan <a href="../docs/INSTALL.html">asennusoppaan</a>.<br /><br />Lukeaksesi phpBB3:n lisenssin tai tukeen liittyvissä asioissa tai meidän tuen lähtökohtiin tutustuaksesi, valitse sopiva kohta vasemman laidan valikosta. Jatkaaksesi, valitse haluamasi välilehti ylhäältä.',

    // Support page
    'SUPPORT_TITLE'		=> 'Tuki',
    'SUPPORT_BODY'		=> 'phpBB3:lle tarjotaan ilmaiseksi täydellinen tuotetuki viimeisimmälle stabiilille versiolle. Tähän kuuluu:</p><ul><li>asennus</li><li>konfigurointi</li><li>tekniset kysymykset</li><li>mahdolliset ongelmat ohjemistovirheiden kanssa</li><li>päivittäminen julkaisukandidaateista (RC) uusimpaan vakaaseen versioon</li><li>muunnos phpBB 2.0.x -versiosta phpBB3-versioon</li><li>muunnos toisista ohjelmista phpBB3-versioon (ole hyvä ja katso <a href="https://www.phpbb.com/community/viewforum.php?f=486">muuntajien foorumi</a>)</li></ul><p>Suosittelemme käyttäjille, jotka käyttävät phpBB3-betaversioita poistamaan asennuksensa ja korvaamaan sen puhtaalla asennuksella uusimmasta phpBB3-versiosta.</p><h2>MODit / tyylit</h2><p>MODeihin liittyvistä ongelmista olkaa hyvä ja kirjoittakaa viesti <a href="https://www.phpbb.com/community/viewforum.php?f=451">laajennosten foorumille</a>.<br />Tyyleihin liittyvissä ongelmissa, teemoissa, mallineissa ja kuvapaketeissa olkaa hyvä ja kirjoittakaa <a href="https://www.phpbb.com/community/viewforum.php?f=471">tyylien foorumille</a>.<br /><br />Mikäli kysymys koskee jotain tiettyä pakettia, olkaa hyvä ja kirjoittakaa suoraan sen paketin omaan viestiketjuun.</p><h2>Lisätietoa käyttötuesta</h2><p><a href="https://www.phpbb.com/support/">Tukialue</a><br /><a href="https://www.phpbb.com/support/docs/en/3.3/ug/quickstart/">pikaopas aloitukseen</a><br /><br />Varmistaaksesi, että foorumisi pysyy ajan tasalla ja saadaksesi uutiset uusimmista versioista, seuraa meitä <a href="https://www.twitter.com/phpbb/">Twitterissä</a> ja <a href="https://www.facebook.com/phpbb/">Facebookissa</a><br /><br />',

    // License
    'LICENSE_TITLE'		=> 'General Public License',

    // Install page
    'INSTALL_INTRO'			=> 'Tervetuloa asennukseen',
    'INSTALL_INTRO_BODY'	=> 'Voit asentaa phpBB3:n palvelimellesi valitsemalla tämän vaihtoehdon.</p><p>Jotta voit jatkaa asentamista, tarvitset käytössäsi olevan tietokannan asetukset. Mikäli et tiedä tietokantasi asetuksia, ole hyvä ja ota yhteyttä palveluntarjoajaasi ja kysy tiedot heiltä. Et voi jatkaa asennusta eteenpäin, mikäli tiedot puuttuvat. Tarvitset:</p>

	<ul>
		<li>Tietokannan tyyppi - käytössäsi oleva tietokanta.</li>
		<li>Tietokantapalvelimen isäntänimi tai DSN - tietokantapalvelimen osoite.</li>
		<li>Tietokantapalvelimen portti - palvelimen portti tietokannalle (useimmissa tapauksissa tätä ei tarvita).</li>
		<li>Tietokannan nimi - palvelimella olevan tietokannan nimi.</li>
		<li>Tietokannan käyttäjätunnus ja salasana - kirjautumistiedot, joita tarvitset ottaessasi yhteyttä tietokantaan.</li>
	</ul>

	<p><strong>Huomaa:</strong> Mikäli asennat käyttäen SQLiteä, sinun tulisi antaa koko polku tietokannan tiedostoon DSN-kentässä ja jättää käyttäjätunnus- ja salasana-kentät tyhjiksi. Tietoturvan vuoksi tietokanta tulisi olla tallennettuna paikkaan, jossa siihen ei pääse käsiksi verkon kautta.</p>

	<p>phpBB3 tukee seuraavia tietokantoja:</p>
	<ul>
		<li>MySQL 3.23 tai uudempi (MySQLi tuettu)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 or above (suoraan tai ODBC:n kautta)</li>
		<li>MS SQL Server 2005 tai uudempi (natiivi)</li>
		<li>Oracle</li>
	</ul>

	<p>Vain palvelimesi tukemat tietokannat näytetään.',

    'ACP_LINK'	=> 'Vie minut <a href="%1$s">hallintapaneeliin</a>',

    'INSTALL_PHPBB_INSTALLED'		=> 'phpBB on jo asennettu.',
    'INSTALL_PHPBB_NOT_INSTALLED'	=> 'phpBB ei ole vielä asennettu.'
));

// Requirements translation
$lang = array_merge($lang, array(
    // Filesystem requirements
    'FILE_NOT_EXISTS'						=> 'Tiedostoa ei löydy',
    'FILE_NOT_EXISTS_EXPLAIN'				=> 'Asentaaksesi phpBB:n, tiedosto %1$s tulee olla olemassa.',
    'FILE_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'On suositeltavaa, että tiedosto %1$s on olemassa, jotta foorumin käyttökokemus olisi parempi.',
    'FILE_NOT_WRITABLE'						=> 'Tiedostoon ei voida kirjoittaa',
    'FILE_NOT_WRITABLE_EXPLAIN'				=> 'Jotta phpBB voidaan asentaa, tiedostoon %1$s pitää pystyä kirjoittamaan.',
    'FILE_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'On suositeltavaa, että tiedostoon %1$s voi kirjoittaa, jotta foorumin käyttökokemus olisi parempi.',

    'DIRECTORY_NOT_EXISTS'						=> 'Hakemistoa ei löydy',
    'DIRECTORY_NOT_EXISTS_EXPLAIN'				=> 'Asentaaksesi phpBB:n, hakemisto %1$s tulee olla olemassa',
    'DIRECTORY_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'On suositeltavaa, että hakemisto %1$s on olemassa, jotta foorumin käyttökokemus olisi parempi.',
    'DIRECTORY_NOT_WRITABLE'					=> 'Hakemistoon ei voida kirjoittaa',
    'DIRECTORY_NOT_WRITABLE_EXPLAIN'			=> 'Jotta phpBB voidaan asentaa, hakemistoon %1$s tulee voida kirjoittaa.',
    'DIRECTORY_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'On suositeltavaa, että hakemistoon %1$s voi kirjoittaa, jotta foorumin käyttökokemus olisi parempi.',

    // Server requirements
    'PHP_VERSION_REQD'					=> 'PHP versio',
    'PHP_VERSION_REQD_EXPLAIN'			=> 'phpBB tarvitsee PHP-version 5.4.0 tai uudempi.',
    'PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP:n getimagesize() -funktio tarvitaan',
    'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> 'Jotta phpBB toimisi oikein, getimagesize funktion tulee olla käytettävissä.',
    'PCRE_UTF_SUPPORT'					=> 'PCRE UTF-8 tuki',
    'PCRE_UTF_SUPPORT_EXPLAIN'			=> 'phpBB ei toimi, jos PHP-asennuksesi ei ole käännetty UTF-8 tuella PCRE laajennoksessa.',
    'PHP_JSON_SUPPORT'					=> 'PHP JSON-tuki',
    'PHP_JSON_SUPPORT_EXPLAIN'			=> 'Jotta phpBB toimisi oikein, PHP:n JSON-laajennos tulee olla käytettävissä.',
    'PHP_XML_SUPPORT'					=> 'PHP XML/DOM-tuki',
    'PHP_XML_SUPPORT_EXPLAIN'			=> 'Jotta phpBB toimisi oikein, PHP XML/DOM-laajennos tulee olla käytettävissä.',
    'PHP_SUPPORTED_DB'					=> 'Tuetut tietokannat',
    'PHP_SUPPORTED_DB_EXPLAIN'			=> 'Sinulla tulee olla ainakin yksi PHP:ssä tuettu tietokanta. Jos tietokantamoduuleita ei ole käytettävissä, sinun tulee otta yhteyttä kotisivutilasi palveluntarjoajaan tai tarkastaa asiaan liittyvät PHP-asennuksen dokumentaatiot saadaksesi apua.',

    'RETEST_REQUIREMENTS'	=> 'Testaa vaatimukset uudelleen',

    'STAGE_REQUIREMENTS'	=> 'Tarkista vaatimukset'
));

// General error messages
$lang = array_merge($lang, array(
    'INST_ERR_MISSING_DATA'		=> 'Sinun täytyy täyttää tämän osion kaikki kentät.',

    'TIMEOUT_DETECTED_TITLE'	=> 'Asennusohjelma havaitsi aikakatkaisun',
    'TIMEOUT_DETECTED_MESSAGE'	=> 'Asennusohjelma havaitsi aikakatkaisun. Voit yrittää sivun uudelleenlatausta, joka saattaa johtaa datan korruptoitumiseen. Ehdotamme, että joko kasvatat aikakatkaisun rajaa tai kokeilet käyttää komentoriviä.',
));

// Data obtaining translations
$lang = array_merge($lang, array(
    'STAGE_OBTAIN_DATA'	=> 'Määrittele asennuksen tiedot',

    //
    // Admin data
    //
    'STAGE_ADMINISTRATOR'	=> 'Ylläpidon tiedot',

    // Form labels
    'ADMIN_CONFIG'				=> 'Ylläpitäjän määrittely',
    'ADMIN_PASSWORD'			=> 'Ylläpitäjän salasana',
    'ADMIN_PASSWORD_CONFIRM'	=> 'Vahvista ylläpitäjän salasana',
    'ADMIN_PASSWORD_EXPLAIN'	=> 'Syötä salasana, jonka pituus on 6 ja 30 merkin väliltä.',
    'ADMIN_USERNAME'			=> 'Ylläpitäjän käyttäjätunnus',
    'ADMIN_USERNAME_EXPLAIN'	=> 'Syötä käyttäjätunnus, jonka pituus on 3 ja 20 merkin väliltä.',

    // Errors
    'INST_ERR_DB'					=> 'Tietokannan asennusvirhe',
    'INST_ERR_EMAIL_INVALID'		=> 'Antamasi sähköpostiosoite ei ole toimiva.',
    'INST_ERR_PASSWORD_MISMATCH'	=> 'Antamasi salasanat eivät olleet samat.',
    'INST_ERR_PASSWORD_TOO_LONG'	=> 'Antamasi salasana oli liian pitkä. Siinä saa olla enintään 30 merkkiä.',
    'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Antamasi salasana on liian lyhyt. Siinä pitää olla vähintään 6 merkkiä.',
    'INST_ERR_USER_TOO_LONG'		=> 'Antamasi käyttäjätunnus on liian pitkä. Siinä saa olla enintään 20 merkkiä.',
    'INST_ERR_USER_TOO_SHORT'		=> 'Antamasi käyttäjätunnus on liian lyhyt. Siinä pitää olla vähintään 3 merkkiä.',

    //
    // Board data
    //
    // Form labels
    'BOARD_CONFIG'		=> 'Foorumin asetukset',
    'DEFAULT_LANGUAGE'	=> 'Oletuskieli',
    'BOARD_NAME'		=> 'Title of the board',
    'BOARD_DESCRIPTION'	=> 'Foorumin lyhyt kuvaus',

    //
    // Database data
    //
    'STAGE_DATABASE'	=> 'Tietokannan asetukset',

    // Form labels
    'DB_CONFIG'				=> 'Tietokannan määrittely',
    'DBMS'					=> 'Tietokannan tyyppi',
    'DB_HOST'				=> 'Tietokantapalvelimen osoite tai DSN',
    'DB_HOST_EXPLAIN'		=> 'DSN on lyhenne sanoista Data Source Name ja on oleellinen ainoastaan ODBC-asennuksissa. PostgreSQL:n kanssa, käytä localhost yhdistääksesi paikalliseen palvelimeen UNIX domain socketin kautta ja 127.0.0.1 yhdistääksesi TCP-yhteydellä. SQLite:n tapauksessa syötä täysi polku tietokantatiedostoon.',
    'DB_PORT'				=> 'Tietokantapalvelimen portti',
    'DB_PORT_EXPLAIN'		=> 'Yleensä voit jättää tämän tyhjäksi, paitsi jos olet varma, että palvelin toimii portissa, joka ei ole vakio.',
    'DB_PASSWORD'			=> 'Tietokannan salasana',
    'DB_NAME'				=> 'Tietokannan nimi',
    'DB_USERNAME'			=> 'Tietokannan käyttäjätunnus',
    'DATABASE_VERSION'		=> 'Tietokannan versio',
    'TABLE_PREFIX'			=> 'Tietokannan taulujen etuliite',
    'TABLE_PREFIX_EXPLAIN'	=> 'Tietokannan taulujen etuliite täytyy alkaa kirjaimella ja saa sisältää ainoastaan kirjaimia, numeroita ja alaviivoja.',

    // Database options
    'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Server 2000+ ODBC:n kautta',
    'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Server 2005+ [ Natiivi ]',
    'DB_OPTION_MYSQLI'		=> 'MySQL MySQLi-laajennoksella',
    'DB_OPTION_ORACLE'		=> 'Oracle',
    'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
    'DB_OPTION_SQLITE3'		=> 'SQLite 3',

    // Errors
    'INST_ERR_NO_DB'				=> 'Valitun tietokannan PHP-moduulia ei voitu ladata.',
    'INST_ERR_DB_INVALID_PREFIX'	=> 'Antamasi etuliite ei ole oikein. Sen täytyy alkaa kirjaimella ja saa sisältää ainoastaan kirjaimia, numeroita ja alaviivoja.',
    'INST_ERR_PREFIX_TOO_LONG'		=> 'Antamasi taulun etuliite on liian pitkä. Se saa olla korkeintaan %d merkkiä.',
    'INST_ERR_DB_NO_NAME'			=> 'Tietokannan nimeä ei ole määritelty.',
    'INST_ERR_DB_FORUM_PATH'		=> 'Määrittelemäsi tietokantatiedosto on foorumisi hakemistossa. Sinun tulee sijoittaa tämä tiedosto hakemistoon, joka ei suoraan web-hakemistosta verkkoon näkyvissä.',
    'INST_ERR_DB_CONNECT'			=> 'Tietokantaan yhdistäminen ei onnistunut. Tarkista virheilmoitus alta.',
    'INST_ERR_DB_NO_WRITABLE'		=> 'Sekä tietokantaan että sen sisältävään hakemistoon tulee voida kirjoittaa.',
    'INST_ERR_DB_NO_ERROR'			=> 'Virheilmoitusta ei annettu.',
    'INST_ERR_PREFIX'				=> 'Tietokantataulut antamallasi etuliitteellä ovat jo olemassa. Anna joku toinen vaihtoehto.',
    'INST_ERR_DB_NO_MYSQLI'			=> 'Tällä koneella käytössä oleva MySQL-versio ei ole yhteensopiva valitsemasi "MySQL, MySQLi-laajennuksen tuella" -vaihtoehdon kanssa. Ole hyvä ja yritä "MySQL"-vaihtoehtoa.',
    'INST_ERR_DB_NO_SQLITE3'		=> 'Tällä koneella oleva SQLite-laajennos on liian vanha. Se tulee päivittää vähintään versioon 3.6.15.',
    'INST_ERR_DB_NO_ORACLE'			=> 'Tällä koneella oleva Oracle-versio vaatii että määrittelet <var>NLS_CHARACTERSET</var>-parametrin arvoksi <var>UTF8</var>. Voit joko päivittää asennuksesi versioksi 9.2+ tai vaihtaa parametrin.',
    'INST_ERR_DB_NO_POSTGRES'		=> 'Valitsemasi tietokanta ei ole luotu käyttäen <var>UNICODE</var> tai <var>UTF8</var> merkistökoodausta. Kokeile asentamista tietokannalla, jossa on <var>UNICODE</var> tai <var>UTF8</var> merkistökoodaus.',
    'INST_SCHEMA_FILE_NOT_WRITABLE'	=> 'Tietokannan tauluun ei voida kirjoittaa',

    //
    // Email data
    //
    'EMAIL_CONFIG'	=> 'Sähköpostin asetukset',

    // Package info
    'PACKAGE_VERSION'					=> 'Asennetun paketin versio',
    'UPDATE_INCOMPLETE'				=> 'phpBB-asennuksesi ei ole päivitetty oikein.',
    'UPDATE_INCOMPLETE_MORE'		=> 'Lue alla olevat tiedot, jotta voisit korjata tämän virheen.',
    'UPDATE_INCOMPLETE_EXPLAIN'		=> '<h1>Päivitys kesken</h1>

		<p>Huomasimme, että viimeisin phpBB-päivityksesi ei ole edennyt loppuun saakka. Tarkista <a href="%1$s" title="%1$s">tietokannan päivitystyökalusta</a> että <em>Päivitä ainoastaan tietokanta</em> on valittuna ja klikkaa <strong>Lähetä</strong>. Älä unohda poistaa "install"-hakemistoa, kun olet päivittänyt tietokannan onnistuneesti.</p>',

    //
    // Server data
    //
    // Form labels
    'UPGRADE_INSTRUCTIONS'			=> 'Uusi ominaisuuspäivitys <strong>%1$s</strong> on saatavilla. Lue <a href="%2$s" title="%2$s"><strong>julkaisutiedote</strong></a> nähdäksesi mitä on muuttunut ja päivitysohjeita varten.',
    'SERVER_CONFIG'				=> 'Palvelimen määrittely',
    'SCRIPT_PATH'				=> 'Skriptin polku',
    'SCRIPT_PATH_EXPLAIN'		=> 'Polku jossa phpBB sijaitsee suhteessa verkkotunnukseen, esimerkiksi <samp>/phpBB3</samp>.',
));

// Default database schema entries...
$lang = array_merge($lang, array(
    'CONFIG_BOARD_EMAIL_SIG'		=> 'Terveisin, ylläpito',
    'CONFIG_SITE_DESC'				=> 'Lyhyt kuvaus foorumistasi',
    'CONFIG_SITENAME'				=> 'verkkotunnuksesi.com',

    'DEFAULT_INSTALL_POST'			=> 'Tämä on malli phpBB3-viestistä. Voit halutessasi poistaa tämän viestin, viestiketjun tai vaikka koko alueen, koska kaikki näyttäisi toimivan oikein! Asennuksen aikana ensimmäiselle ketegorialle ja alueelle annettiin yleisesti toimivat oikeudet. Mikäli poistat nämä alueet, joudut antamaan oikeudet käsin luomillesi alueille. Alue ja kategoria kannattaa vain nimetä uudelleen ja kopioida siitä toimivat oikeudet ja asetukset uusille alueille. Pidä hauskaa!',

    'FORUMS_FIRST_CATEGORY'			=> 'Ensimmäinen kategoriasi',
    'FORUMS_TEST_FORUM_DESC'		=> 'Ensimmäisen foorumin kuvaus.',
    'FORUMS_TEST_FORUM_TITLE'		=> 'Ensimmäinen foorumisi',

    'RANKS_SITE_ADMIN_TITLE'		=> 'Ylläpitäjä',
    'REPORT_WAREZ'					=> 'Viestissä on linkkejä laittomuuksiin- tai piraattituotteisiin.',
    'REPORT_SPAM'					=> 'Ilmoitetun viestin ainoa tarkoitus on mainostaa nettisivua tai tuotetta.',
    'REPORT_OFF_TOPIC'				=> 'Viesti on harhautunut alkuperäisestä aiheesta.',
    'REPORT_OTHER'					=> 'Ilmoitettu viesti ei sovi edellä mainittuihin luokkiin. Anna oma selite.',

    'SMILIES_ARROW'					=> 'Nuoli',
    'SMILIES_CONFUSED'				=> 'Hämmentynyt',
    'SMILIES_COOL'					=> 'Siisti',
    'SMILIES_CRYING'				=> 'Itkee tai erittäin surullinen',
    'SMILIES_EMARRASSED'			=> 'Nolostunut',
    'SMILIES_EVIL'					=> 'Ilkeä tai hurjistunut',
    'SMILIES_EXCLAMATION'			=> 'Huutomerkki',
    'SMILIES_GEEK'					=> 'Nörtti',
    'SMILIES_IDEA'					=> 'Idea',
    'SMILIES_LAUGHING'				=> 'Nauraa',
    'SMILIES_MAD'					=> 'Suuttunut',
    'SMILIES_MR_GREEN'				=> 'Hra. Vihreä',
    'SMILIES_NEUTRAL'				=> 'Neutraali',
    'SMILIES_QUESTION'				=> 'Kysymysmerkki',
    'SMILIES_RAZZ'					=> 'Näyttää kieltä',
    'SMILIES_ROLLING_EYES'			=> 'Pyörittelee silmiä',
    'SMILIES_SAD'					=> 'Surullinen',
    'SMILIES_SHOCKED'				=> 'Järkyttynyt',
    'SMILIES_SMILE'					=> 'Hymy',
    'SMILIES_SURPRISED'				=> 'Yllättynyt',
    'SMILIES_TWISTED_EVIL'			=> 'Kieroutunutta ilkeyttä',
    'SMILIES_UBER_GEEK'				=> 'Tosinörtti',
    'SMILIES_VERY_HAPPY'			=> 'Erittäin iloinen',
    'SMILIES_WINK'					=> 'Silmänisku',

    'TOPICS_TOPIC_TITLE'			=> 'Tervetuloa käyttämään phpBB3-ohjelmaa',
));

// Common navigation items' translation
$lang = array_merge($lang, array(
    'MENU_OVERVIEW'		=> 'Yleiskatsaus',
    'MENU_INTRO'		=> 'Johdanto',
    'MENU_LICENSE'		=> 'Lisenssi',
    'MENU_SUPPORT'		=> 'Tuki',
));

// Task names
$lang = array_merge($lang, array(
    // Install filesystem
    'TASK_CREATE_CONFIG_FILE'	=> 'Asetustiedoston luonti',

    // Install database
    'TASK_ADD_CONFIG_SETTINGS'			=> 'Lisätään määriteltyjä asetuksia',
    'TASK_ADD_DEFAULT_DATA'				=> 'Lisätään oletusasetuksia tietokantaan',
    'TASK_CREATE_DATABASE_SCHEMA_FILE'	=> 'Luodaan tietokantaskeemaa',
    'TASK_SETUP_DATABASE'				=> 'Määritellään tietokantaa',
    'TASK_CREATE_TABLES'				=> 'Luodaan tauluja',

    // Install data
    'TASK_ADD_BOTS'			    => 'Rekisteröidään botit',
    'TASK_ADD_LANGUAGES'	    => 'Asennetaan saatavilla olevat kielet',
    'TASK_ADD_MODULES'		    => 'Asennetaan moduulit',
    'TASK_CREATE_SEARCH_INDEX'	=> 'Luodaan hakuindeksi',

    // Install finish tasks
    'TASK_INSTALL_EXTENSIONS'	=> 'Asennetaan pakatut laajennokset',
    'TASK_NOTIFY_USER'			=> 'Lähetetään ilmoitussähköposti',
    'TASK_POPULATE_MIGRATIONS'	=> 'Täytetään muutoksia',

    // Installer general progress messages
    'INSTALLER_FINISHED'	=> 'Asennus on päättynyt onnistuneesti',
));

// Installer's general messages
$lang = array_merge($lang, array(
    'MODULE_NOT_FOUND'				=> 'Moduulia ei löytynyt',
    'MODULE_NOT_FOUND_DESCRIPTION'	=> 'Moduulia ei löytynyt, koska palvelua %s ei ole määritetty.',

    'TASK_NOT_FOUND'				=> 'Tehtävää ei löytynyt',
    'TASK_NOT_FOUND_DESCRIPTION'	=> 'Tehtävää ei löytynyt, koska palvelu  %s on määrittelemätön.',

    'SKIP_MODULE'	=> 'Ohita moduuli “%s”',
    'SKIP_TASK'		=> 'Ohita tehtävä “%s”',

    'TASK_SERVICE_INSTALLER_MISSING'	=> 'Kaikki asnnuksen tehtävien palvelut tulee alkaa “installer”',
    'TASK_CLASS_NOT_FOUND'				=> 'ASennuksen tehtäväpalvelun määrittely ei ole oikein. Annettu palvelun nimi on “%1$s”, mutta odotettu luokan nimiavaruus sille on “%2$s”. Saadaksesi lisätietoja vieraile dokumentaation osassa task_interface.',

    'INSTALLER_CONFIG_NOT_WRITABLE'	=> 'Asennuksen asetustiedostoon ei voida kirjoittaa.',
));

// CLI messages
$lang = array_merge($lang, array(
    'CLI_INSTALL_BOARD'				=> 'Asenna phpBB',
    'CLI_UPDATE_BOARD'				=> 'Päivitä phpBB',
    'CLI_INSTALL_SHOW_CONFIG'		=> 'Näytä käytettävät asetukset',
    'CLI_INSTALL_VALIDATE_CONFIG'	=> 'Tarkista asennustiedosto',
    'CLI_CONFIG_FILE'				=> 'Käytettävä asennustiedosto',
    'MISSING_FILE'					=> 'Ei pääsyä tiedostoon %1$s',
    'MISSING_DATA'					=> 'Asetustiedostosta puuttuu tietoja tai sisältää virheellisiä asetuksia.',
    'INVALID_YAML_FILE'				=> 'Ei voitu parsia YAML-tiedostoa %1$s',
    'CONFIGURATION_VALID'			=> 'Asetustiedosto on kunnossa',
));

// Common updater messages
$lang = array_merge($lang, array(
    'UPDATE_INSTALLATION'			=> 'Päivitä phpBB asennus',
    'UPDATE_INSTALLATION_EXPLAIN'	=> 'Tämän vaihtoehdon avulla voit päivittää phpBB-asennuksesi vimeisimpään versioon.<br />Prosessin aikana kaikkien tiedostojesi eheys tarkistetaan. Voit tarkistaa kaikki erot ja tiedostot ennen päivitystä.<br /><br />Tiedostojen päivittäminen itsessään voidaan tehdä kahdella tavalla</p><h2>Päivitys käsin</h2><p>Tässä vaihtoehdossa lataat vain henkilökohtaisen kokoelman muuttuneista tiedostoista, jotta voit varmistua siitä, että et menetä mahdollisia tiedostojen muokkauksia. Ladattuasi tämän paketin, sinun täytyy siirtää tiedostot oikeisiin sijainteihin phpBB:n juurihakemiston alla. Siirrettyäsi tiedostot, voit ajaa tarkistuksen uudelleen varmistuaksesi siitä että ne ovat oikeissa paikoissa.</p><h2>Automaattinen päivitys FTP:llä</h2><p>Tämä vaihtoehto on samankaltainen ensimmäisen kanssa, mutta sinun ei tarvitse ladata muutoksia ja siirtää niitä itse paikoilleen. Nämä asiat tehdään sinulle valmiiksi. Käyttääksesi tätä tapaa, sinun tulee tietää FTP-tunnuksesi, koska niitä tullaan kysymään sinulta. Kun tämä on tehty, sinut ohjataan tiedostojen tarkistukseen uudelleen päivityksen onnistumisen varmistamiseksi.<br /><br />',
    'UPDATE_INSTRUCTIONS'			=> '

		<h1>Julkaisutiedote</h1>

		<p>Ole hyvä ja lue uusimman version julkaisutiedote ennen kuin jatkat päivittämistä, sillä siinä voi olla tärkeää tietoa. Siitä löytyvät myös latauslinkit ja muutosten tiedot.</p>

		<br />
		
		<h1>Kuinka päivittää asennus täydellä paketilla</h1>

		<p>Suositeltu tapa asennuksen päivittämiseen on käyttää täyttä pakettia. Jos phpBB:n ydintiedostoja on muokattu, saatat haluta käyttää automaattista päivityspakettia, jotta et menettäisi näitä muutoksia. Voit myös päivittää asetuksesi muilla tavoilla, jotka on mainittu INSTALL.html dokumentissa. Vaiheet phpBB3:n päivittämiseen täyttä pakettia käyttäen ovat:</p>

		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li><strong class="error">Varmuuskopioi kaikki foorumin tiedostot ja tietokanta.</strong></li>
			<li>Mene  <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com lataussivulle</a> ja lataa viimeisin "täysi paketti" -arkisto.</li>
			<li>Pura pakattu tiedosto.</li>
			<li>Poista  <code class="inline">config.php</code>-tiedosto ja <code class="inline">/images</code>, <code class="inline">/store</code> ja <code class="inline">/files</code> hakemistot <em>paketista</em> (ei sivustoltasi).</li>
			<li>Mene hallintapaneeliin, Keskutelufoorumin asetukset ja varmista että prosilver on asetettu oletustyyliksi. Jos se ei ole, aseta oletustyyliksi prosilver.</li>
			<li>Poista <code class="inline">/vendor</code> ja <code class="inline">/cache</code> -hakemistot foorumisi juurihakemistosta palvelimella.</li>
			<li>FTP tai SSH -tiedostonsiirron avulla, lataa loput tiedostot ja hakemistot (siis phpBB3-hakemiston loput tiedostot) palvelimella olevan foorumisi juurihakemistoon, ylikirjoittaen olemassa olevat tiedostot. (Huomaa: varo ettet poista yhtään laajennosta <code class="inline">/ext</code>-hakemistossasi, siirtäessäsi uutta phpBB3-sisältöä.)</li>
			<li><strong><a href="%1$s" title="%1$s">Aloita sitten päivitysprosessi menemällä selaimellasi install-hakemistoon</a>.</strong></li>
			<li>Seuraa tietokannan päivityksen vaiheita ja odota sen päättymistä.</li>
			<li>Poista <code class="inline">/install</code>-hakemisto FTP tai SSH-yhteyden avulla, asennetun foorumisi juurihakemistosta.<br><br></li>
		</ol>
		
		<p>Sinulla on uusi päivitetty foorumi sisältäen kaikki käyttäjäsi ja viestisi. Vielä muutama asia:</p>
		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Päivitä kielipakettisi</li>
			<li>Päivitä tyylisi<br><br></li>			
		</ul>
		
		<h1>Kuinka voit päivittää asennuksesi automaattisella päivityspaketilla</h1>

		<p>Automaattista päivityspakettia suositellaan vain jos phpBB:n ydintiedostoja on muokattu. Voit myös päivittää asennuksesi INSTALL.html -dokumentissa mainituilla tavoilla. Automaattisen phpBB3-päivityksen vaiheet ovat:</p>

		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li>Mene <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com-lataussivulle</a> ja lataa "Automatic Update Package" -paketti.</li>
			<li>Pura paketti.</li>
			<li>Siirrä puretut "install" ja "vendor" -hakemistot kokonaisuudessaan phpBB:n juurihakemistoon (sama hakemisto missä config.php-tiedosto sijaitsee).<br><br></li>
		</ol>

		<p>Kun olet siirtänyt tiedostot, keskustelufoorumi sulkeutuu normaaleilta käyttäjiltä, koska asennushakemisto on siirretty palvelimelle.<br /><br />
		<strong><a href="%1$s" title="%1$s">Nyt voit aloittaa päivityksen osoittamalla selaimesi asennustiedostot sisältävään hakemistoon (install)</a>.</strong><br />
		<br />
		Sinut ohjataan päivityksen läpi ja saat tiedon, koska päivitys on suoritettu.
		</p>
	',
));

// Updater forms
$lang = array_merge($lang, array(
    // Updater types
    'UPDATE_TYPE'			=> 'Ajettavan päivityksen tyyppi',

    'UPDATE_TYPE_ALL'		=> 'Päivitä tiedostojärjestelmä ja tietokanta',
    'UPDATE_TYPE_DB_ONLY'	=> 'Päivitä vain tietokanta',

    // File updater methods
    'UPDATE_FILE_METHOD_TITLE'		=> 'Tiedoston päivityksen tavat',

    'UPDATE_FILE_METHOD'			=> 'Tiedoston päivityksen tapa',
    'UPDATE_FILE_METHOD_DOWNLOAD'	=> 'Lataa muokatut tiedostot pakettina',
    'UPDATE_FILE_METHOD_FTP'		=> 'Päivitä tiedostot FTP-yhteyden kautta (automaattinen)',
    'UPDATE_FILE_METHOD_FILESYSTEM'	=> 'Päivitä tiedostot suoraan muuttamalla niitä (automaattinen)',

    // File updater archives
    'SELECT_DOWNLOAD_FORMAT'	=> 'Valitse ladattavan paketin muoto',

    // FTP settings
    'FTP_SETTINGS'			=> 'FTP-asetukset',
));

// Requirements messages
$lang = array_merge($lang, array(
    'UPDATE_FILES_NOT_FOUND'	=> 'Toimivaa päivityshakemistoa ei löytynyt. Tarkista että siirsit palvelimelle kaikki oleelliset tiedostot.',

    'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Versiosi on ajantasalla. Päivitystyökalun ajamiselle ei ole tarvetta. Jos haluat tarkistaa asennuksen eheyden, tarkista että olet siirtänyt palvelimelle oikeat asetustiedostot.',
    'OLD_UPDATE_FILES'				=> 'Päivitystiedostot ovat liian vanhoja. Nämä päivitystiedostot ovat tarkoitettu phpBB %1$s päivittämiseen versioon phpBB %2$s, mutta viimeisin phpBB-versio on %3$s.',
    'INCOMPATIBLE_UPDATE_FILES'		=> 'Päivitystiedostot eivät ole yhteensopivia asentamasi version kanssa. Asentamasi versio on %1$s ja päivityustiedosto on phpBB-päivitys versiosta %2$s versioon %3$s.',
));

// Update files
$lang = array_merge($lang, array(
    'STAGE_UPDATE_FILES'		=> 'Päivitä tiedostot',

    // Check files
    'UPDATE_CHECK_FILES'	=> 'Tarkista päivitettävät tiedostot',

    // Update file differ
    'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> 'Tiedostojen vertailija ei voinut avata tiedostoa %s.',

    'UPDATE_FILE_DIFF'		=> 'Vertaillaan muuttuneita tiedostoja',
    'ALL_FILES_DIFFED'		=> 'Kaikki muokatut tiedostot on vertailtu.',

    // File status
    'UPDATE_CONTINUE_FILE_UPDATE'	=> 'Päivitä tiedostot',

    'DOWNLOAD'							=> 'Lataa',
    'DOWNLOAD_CONFLICTS'				=> 'Lataa tiedostot jotka ovat ristiriidassa',
    'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Etsi &lt;&lt;&lt; -kohtia huomataksesi ristiriidat',
    'DOWNLOAD_UPDATE_METHOD'			=> 'Lataa muutettujen tiedostojen paketti',
    'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Ladattuasi paketin, sinun tulisi purkaa se. Löydät paketista muokatut tiedostot, jotka sinun tulisi siirtää phpBB:n juurihakemistoon palvelimella. Sen jälkeen siirrä tiedostot oikeisiin sijainteihin. Kun olet siirtänyt tiedostot palvelimelle, voit jaktaa päivittämistä.',

    'FILE_ALREADY_UP_TO_DATE'		=> 'Tiedosto on jo ajan tasalla.',
    'FILE_DIFF_NOT_ALLOWED'			=> 'Tiedosto ei saa olla erilainen.',
    'FILE_USED'						=> 'Käytetään tiedostoa',			// Single file
    'FILES_CONFLICT'				=> 'Ristiriitaiset tiedostot',
    'FILES_CONFLICT_EXPLAIN'		=> 'Seuraavat tiedostot ovat muokattuja ja ne eivät ole kelvollisia vertailutiedostoja alkuperäisille tiedostoille. phpBB on havainnut, että nämä tiedostot aiheuttavat konflikteja, jos niiden yhdistämistä yritetään. Tutki tiedostoja ja koita ratkaista konflikteja aiheuttavat kohdat tai valitse haluamasi yhdistämistapa. Mikäli ratkaisit konfliktit. Tarkista tiedostot uudelleen sen jälkeen, kun olet muokannut niitä. Voit valita haluamasi yhdistämismenetelmän jokaiselle tiedostolle erikseen. Ensimmäinen antaa tuloksena tiedoston, jossa konfliktin aiheuttavat rivit vanhoista tiedostoista ovat poistettu ja toinen vaihtoehto antaa tiedoston, jossa uuden tiedoston muutokset menetetään.',
    'FILES_DELETED'					=> 'Poistetut tiedostot',
    'FILES_DELETED_EXPLAIN'			=> 'Seuraavat tiedostot eivät ole enää olemassa uudessa versiossa. Nämä tiedostot tulee poistaa asennuksestasi.',
    'FILES_MODIFIED'				=> 'Muuttuneet tiedostot',
    'FILES_MODIFIED_EXPLAIN'		=> 'Seuraavat tiedostot ovat muuttuneita ja eivät vastaa vanhan version alkuperäisiä tiedostoja. Päivitetty tiedosto yhdistetään muutostesi ja uuden tiedoston kanssa.',
    'FILES_NEW'						=> 'Uudet tiedostot',
    'FILES_NEW_EXPLAIN'				=> 'Seuraavat tiedostot eivät ole olemassa nykyisessä asennuksessasi. Nämä tiedostot lisätään asennukseesi.',
    'FILES_NEW_CONFLICT'			=> 'Uudet ristiriitaiset tiedostot',
    'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Nämä tiedostot ovat uusia viimeisimmässä versiossa, mutta tiedosto samalla nimellä samassa sijainnissa löytyi. Tämä tiedosto ylikirjoitetaan uudella tiedostolla.',
    'FILES_NOT_MODIFIED'			=> 'Muokkaamattomat tiedostot',
    'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Seuraavat tiedostot ovat muokkamattomia ja ovat alkuperäisiä phpBB-tiedostoja versiosta, josta olet päivittämässä.',
    'FILES_UP_TO_DATE'				=> 'Jo päivitetyt tiedostot',
    'FILES_UP_TO_DATE_EXPLAIN'		=> 'Seuraavat tiedostot ovat jo ajan tasalla eivätkä vaadi päivitystä.',
    'FILES_VERSION'					=> 'Tiedostojen versiot',
    'TOGGLE_DISPLAY'				=> 'Näytä/piilota tiedostolista',

    // File updater
    'UPDATE_UPDATING_FILES'	=> 'Päivitetään tiedostoja',

    'UPDATE_FILE_UPDATER_HAS_FAILED'	=> 'Tiedoston päivitys “%1$s“ epäonnistui. Asennus yrittää palata takaisin “%2$s“.',
    'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> 'Tiedoston päivitys epäonnistui. Ei muita palautusvaihtoehtoja käytettävissä.',

    'UPDATE_CONTINUE_UPDATE_PROCESS'	=> 'Jatka päivitystä',
    'UPDATE_RECHECK_UPDATE_FILES'		=> 'Tarkista tiedostot uudelleen',
));

// Update database
$lang = array_merge($lang, array(
    'STAGE_UPDATE_DATABASE'		=> 'Päivitä tietokanta',

    'INLINE_UPDATE_SUCCESSFUL'		=> 'Tietokannan päivitys onnistui.',

    'TASK_UPDATE_EXTENSIONS'	=> 'Päivitetään laajennoksia',
));

// Converter
$lang = array_merge($lang, array(
    // Common converter messages
    'CONVERT_NOT_EXIST'			=> 'Valitsemaasi muuntajaa ei ole.',
    'DEV_NO_TEST_FILE'			=> 'Muuntajassa ei ole määritelty arvoa test_file-muuttujalle. Mikäli olet tämän muuntajan käyttäjä, sinun ei pitäisi nähdä tätä ilmoitusta. Ole hyvä ja raportoi tämä virhe muuntajan kehittäjälle. Mikäli olet kehittänyt tämän muuntajan, sinun tulee antaa lähdefoorumin tiedoston nimi, jotta voimme tarkistaa hakemiston polun.',
    'COULD_NOT_FIND_PATH'		=> 'Edellisen keskustelufoorumisi polkua ei löytynyt. Tarkista asetuksesi ja yritä uudelleen.<br />» Määrittelemäsi polku oli %s',
    'CONFIG_PHPBB_EMPTY'		=> 'phpBB3-asetusten muuttujan “%s” arvo on tyhjä.',

    'MAKE_FOLDER_WRITABLE'		=> 'Varmista, että tämä hakemisto on olemassa palvelimella, ja että siihen voidaan kirjoittaa, yritä sen jälkeen uudelleen:<br />»<strong>%s</strong>.',
    'MAKE_FOLDERS_WRITABLE'		=> 'Varmista, että nämä hakemistot ovat olemassa palvelimella, ja että niihin voidaan kirjoittaa, yritä sen jälkeen uudelleen:<br />»<strong>%s</strong>.',

    'INSTALL_TEST'				=> 'Testaa uudelleen',

    'NO_TABLES_FOUND'			=> 'Tauluja ei löytynyt.',
    'TABLES_MISSING'			=> 'Näitä tauluja ei löytynyt<br />» <strong>%s</strong>.',
    'CHECK_TABLE_PREFIX'		=> 'Tarkista taulun etuliite ja yritä uudelleen.',

    // Conversion in progress
    'CONTINUE_CONVERT'			=> 'Jatka muunnosta',
    'CONTINUE_CONVERT_BODY'		=> 'Aiempi muuntoyritys löydetty. Voit valita uuden muunnon ja aiemman muunnoksen jatkamisen välillä.',
    'CONVERT_NEW_CONVERSION'	=> 'Uusi muunnos',
    'CONTINUE_OLD_CONVERSION'	=> 'Jatka aiemmin aloitettua muunnosta',

    // Start conversion
    'SUB_INTRO'					=> 'Johdanto',
    'CONVERT_INTRO'				=> 'Tervetuloa phpBB Unified Convertor Frameworkiin',
    'CONVERT_INTRO_BODY'		=> 'Täällä voit tuoda tiedot muista (asennetuista) keskustelufoorumeista. Alla olevassa listassa on kaikki tämänhetkiset muunnosmoduulit. Mikäli haluamaasi muuntajaa ei löydy listasta, tarkista nettisivuiltamme olisiko siellä muita muuntajia ladattavissa.',
    'AVAILABLE_CONVERTORS'		=> 'Saatavilla olevat muuntimet',
    'NO_CONVERTORS'				=> 'Ei saatavilla olevia muuntimia.',
    'CONVERT_OPTIONS'			=> 'Valinnat',
    'SOFTWARE'					=> 'Foorumisovellus',
    'VERSION'					=> 'Versio',
    'CONVERT'					=> 'Muunna',

    // Settings
    'STAGE_SETTINGS'			=> 'Asetukset',
    'TABLE_PREFIX_SAME'			=> 'Etuliitteen täytyy olla sama, kuin sen ohjelman, josta olet muuntamassa.<br />» Antamasi etuliite oli %s.',
    'DEFAULT_PREFIX_IS'			=> 'Muunnin ei löytänyt tauluja annetulla etuliitteellä. Varmista, että olet antanut oikeat tiedot foorumille josta olet muunnosta tekemässä. Oletus etuliite %1$s on <strong>%2$s</strong>.',
    'SPECIFY_OPTIONS'			=> 'Määrittele muuntimen asetukset',
    'FORUM_PATH'				=> 'Foorumin polku',
    'FORUM_PATH_EXPLAIN'		=> 'Tämä on <strong>suhteellinen</strong> levypolku edelliseen foorumiisi suhteessa <strong>tämän phpBB3 asennuksen juureen</strong>.',
    'REFRESH_PAGE'				=> 'Päivitä sivu jatkaaksesi muunnosta',
    'REFRESH_PAGE_EXPLAIN'		=> 'Mikäli tämä on asetettu käyttöön, muuntaja lataa sivun uudelleen jatkaakseen muunnosta aina yhden vaiheen suorittamisen jälkeen. Mikäli olet muuntamassa ensimmäistä kertaa ja haluat nähdä mahdolliset virheilmoitukset etukäteen, on suositeltavaa, että otat tämän toiminnon pois käytöstä.',

    // Conversion
    'STAGE_IN_PROGRESS'			=> 'Muunnos käynnissä',

    'AUTHOR_NOTES'				=> 'Julkaisijan huomioita<br />» %s',
    'STARTING_CONVERT'			=> 'Aloitetaan muuntoa',
    'CONFIG_CONVERT'			=> 'Muunnetaan asetuksia',
    'DONE'						=> 'Valmis',
    'PREPROCESS_STEP'			=> 'Ajetaan esikäsittelyfunktioita ja -kyselyitä',
    'FILLING_TABLE'				=> 'Täytetään taulua <strong>%s</strong>',
    'FILLING_TABLES'			=> 'Täytetään tauluja',
    'DB_ERR_INSERT'				=> 'Virhe suorittaessa <code>INSERT</code>-kyselyä.',
    'DB_ERR_LAST'				=> 'Virhe suorittaessa <var>query_last</var>.',
    'DB_ERR_QUERY_FIRST'		=> 'Virhe suorittaessa <var>query_first</var>.',
    'DB_ERR_QUERY_FIRST_TABLE'	=> 'Virhe suorittaessa <var>query_first</var>, %s (“%s”).',
    'DB_ERR_SELECT'				=> 'Virhe suorittaessa <code>SELECT</code>-kyselyä.',
    'STEP_PERCENT_COMPLETED'	=> 'Vaihe <strong>%d</strong> / <strong>%d</strong>',
    'FINAL_STEP'				=> 'Suorita viimeinen vaihe',
    'SYNC_FORUMS'				=> 'Aloitetaan foorumien sykronointia',
    'SYNC_POST_COUNT'			=> 'Synkronoidaan viestilaskureita',
    'SYNC_POST_COUNT_ID'		=> 'Synkronoidaan post_counts <var>entry</var> %1$s - %2$s.',
    'SYNC_TOPICS'				=> 'Aloitetaan aiheiden synkronointi',
    'SYNC_TOPIC_ID'				=> 'Synkronoidaan <var>topic_id</var> %1$s - %2$s.',
    'PROCESS_LAST'					=> 'Suoritetaan viimeisiä lausekkeita',
    'UPDATE_TOPICS_POSTED'		=> 'Luodaan lähetettyjen viestien tietoja',
    'UPDATE_TOPICS_POSTED_ERR'	=> 'Tapahtui virhe luotaessa lähetettyjen viestien tietoja. Voit yrittää tätä vaihetta hallintapaneelissa muuntamisen jälkeen.',
    'CONTINUE_LAST'				=> 'Jatka viimeisiä lausekkeita',
    'CLEAN_VERIFY'				=> 'Siivotaan ja varmistetaan lopullinen rakenne',
    'NOT_UNDERSTAND'			=> 'Ei voitu ymmärtää %s #%d, taulu %s (“%s”)',
    'NAMING_CONFLICT'			=> 'Nimeämisristiriita: %s ja %s ovat kumpikin aliaksia<br /><br />%s',

    // Finish conversion
    'CONVERT_COMPLETE'			=> 'Muunto suoritettu',
    'CONVERT_COMPLETE_EXPLAIN'	=> 'Olet onnistuneesti muuntanut foorumisi phpBB3.2 foorumiksi. Voit nyt kirjautua sisään ja <a href="../">siirtyä foorumillesi</a>. Varmista, että asetukset siirtyivät oikein ennen kuin otat foorumin käyttöön poistamalla install-hakemiston. Muista että apua phpBB:n käyttämisessä on saatavilla verkosta <a href="https://www.phpbb.com/support/docs/en/3.3/ug/">dokumentaatiossa</a> ja <a href="https://www.phpbb.com/community/viewforum.php?f=661">tukifoorumilla</a>.',

    'CONV_ERROR_ATTACH_FTP_DIR'			=> 'FTP-siirtotapa liitetiedostoille on käytössä vanhalla keskustelufoorumillasi. Ole hyvä ja kopioi kaikki liitetiedostot pääsyn sallivaan hakemistoon. Poista FTP-siirto käytöstä ja varmista, että annoit oikean hakemiston. Kun olet tehnyt tämän, aloita muuntaminen uudelleen.',
    'CONV_ERROR_CONFIG_EMPTY'			=> 'Asetustietoja ei ole saatavilla muunnosta varten.',
    'CONV_ERROR_FORUM_ACCESS'			=> 'Foorumin pääsyn tietoja ei ole saatavilla.',
    'CONV_ERROR_GET_CATEGORIES'			=> 'Kategorioita ei ole saatavilla.',
    'CONV_ERROR_GET_CONFIG'				=> 'Foorumin asetuksien haku ei onnistunut.',
    'CONV_ERROR_COULD_NOT_READ'			=> 'Ei pääsyä tai ei voitu lukea: “%s”.',
    'CONV_ERROR_GROUP_ACCESS'			=> 'Ryhmän autentikointitietoja ei ollut saatavilla.',
    'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Ristiriitaisuus havaittu groups-taulussa add_bots()-funktiossa - sinun täytyy lisätä kaikki erikoisryhmät, jos teet sen manuaalisesti.',
    'CONV_ERROR_INSERT_BOT'				=> 'Botin lisääminen users-tauluun epäonnistui.',
    'CONV_ERROR_INSERT_BOTGROUP'		=> 'Botin lisääminen bots-tauluun epäonnistui.',
    'CONV_ERROR_INSERT_USER_GROUP'		=> 'Käyttäjän lisääminen user_group-tauluun epäonnistui.',
    'CONV_ERROR_MESSAGE_PARSER'			=> 'Viestiparserin virhe',
    'CONV_ERROR_NO_AVATAR_PATH'			=> 'Muistutus kehittäjälle: sinun täytyy määritellä $convertor[\'avatar_path\'] käyttääksesi %s.',
    'CONV_ERROR_NO_FORUM_PATH'			=> 'Suhteellista polkua lähdefoorumiin ei ole määritelty.',
    'CONV_ERROR_NO_GALLERY_PATH'		=> 'Muistutus kehittäjälle: sinun täytyy määritellä $convertor[\'avatar_gallery_path\'] käyttääksesi %s.',
    'CONV_ERROR_NO_GROUP'				=> 'Ryhmää “%1$s” ei löytynyt kohteesta %2$s.',
    'CONV_ERROR_NO_RANKS_PATH'			=> 'Muistutus kehittäjälle: Sinun täytyy määritellä $convertor[\'ranks_path\'] käyttääksesi %s.',
    'CONV_ERROR_NO_SMILIES_PATH'		=> 'Muistutus kehittäjälle: Sinun täytyy määritellä $convertor[\'smilies_path\'] käyttääksesi %s.',
    'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Muistutus kehittäjälle: Sinun täytyy määritellä $convertor[\'upload_path\'] käyttääksesi %s.',
    'CONV_ERROR_PERM_SETTING'			=> 'Oikeuksien määrittelyä ei voitu lisätä/päivittää.',
    'CONV_ERROR_PM_COUNT'				=> 'Kansion yksityisviestien lukumäärää ei voitu valita.',
    'CONV_ERROR_REPLACE_CATEGORY'		=> 'Ei voitu lisätä uutta aluetta korvaamalla vanhaa kategoriaa.',
    'CONV_ERROR_REPLACE_FORUM'			=> 'Ei voitu lisätä uutta aluetta korvaamaalla vanhaa aluetta.',
    'CONV_ERROR_USER_ACCESS'			=> 'Ei voitu saada käyttäjien tunnistamisen tietoja.',
    'CONV_ERROR_WRONG_GROUP'			=> 'Väärä ryhmä “%1$s” määritelty kohteessa %2$s.',
    'CONV_OPTIONS_BODY'					=> 'Tällä sivulla kerätään tarvittavat tiedot, joiden avulla otetaan yhteys lähteenä käytettävään foorumiin. Muuntaja ei muuta mitään tietoja tässä antamassasi tietokannassa. Lähdefoorumi tulisi sulkea muunnoksen ajaksi, jotta saat yhdenmukaisen muunnoksen.',
    'CONV_SAVED_MESSAGES'				=> 'Tallennetut viestit',

    'PRE_CONVERT_COMPLETE'			=> 'Kaikki muunnosta edeltävät vaiheet on suoritettu. Voit nyt aloittaa varsinaisen muuntamisen. Huomaa, että saatat joutua tekemään tai säätämään käsin useita asioita. Muunnon jälkeen tarkista annetut oikeudet. Rakenna myös hakuindeksi uudelleen, sillä sitä ei muunneta. Tarkista myös, että tiedostot kopioidaan oikein, esimerkiksi avatarit ja hymiöt.',
));
