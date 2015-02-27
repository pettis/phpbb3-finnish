<?php
/** 
*
* acp_search [Finnish [Fin]]
*
* @package language
* @copyright (c) 2006 phpBB Group 
* @author 2006-11-14 - Lurttinen@phpbbsuomi.com
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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Täällä voit hallita hakutoiminnon sisällyluetteloa. Normaalisti käytössä on vain yksi sisällysluettelo, joten kannattaa poistaa ne luettelot, joita ei käytetä. Kun muokkaat joitakin asetuksia (esim. merkkien vähimmäis- ja enimmäismäärä), kannattaa ehkä rakentaa sisällysluettelo uusiksi, jotta se ottaisi muutokset huomioon.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Täällä määräät, mitä tapaa käytetään hakutoiminnossa ja mitä sisällysluetteloa käytetään. Voit asettaa joitain vaihtoehtoja, jotka määrittelevät kuinka paljon järjestelmä käyttää siihen resursseja. Osa asetuksista on yhteisiä jokaiselle hakukoneelle.',

	'COMMON_WORD_THRESHOLD'					=> 'Yleisen sanan raja',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Sanoja, joita esiintyy prosentuaalisesti suurimmissa osista viestejä pidetään yleisenä. Yleiset sanat jätetään huomiotta hauissa. Aseta nolla poistaaksesi toiminnon käytöstä. Tämä on käytössä vain, jos foorumilla on yli 100 viestiä. Sisällysluettelo täytyy rakentaa uudelleen, mikäli haluat yleisten sanojen päätyvän sisällysluetteloon.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Haluatko varmasti siirtyä käyttämään toista hakukonetta? Mikäli vaihdat, sinun täytyy luoda sisällysluettelo uudelle hakukoneelle. Voit poistaa vanhan hakukoneen sisällysluettelon vapauttaaksesi järjestelmän resursseja, jos et aio sitä enää käyttää.',
	'CONTINUE_DELETING_INDEX'				=> 'Jatka entisen sisällysluettelon poistamista',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Sisällysluettelon poisto on aloitettu. Et voi siirtya hakusivulle ennen kuin se on rakennettu uusiksi.',
	'CONTINUE_INDEXING'						=> 'jatka sisällysluettelon rakentamista',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Sisällysluettelon rakentaminen on aloitettu. Et voi siirtyä hakusivulle, ennen kuin se on rakennettu.',
	'CREATE_INDEX'							=> 'Luo sisällysluettelo',

	'DELETE_INDEX'							=> 'Poista sisällysluettelo',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Sisällysluettelon poisto on käynnissä',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Hakukone siivoaa sisällysluetteloaan. Tähän voi mennä muutama minuutti.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'MySQL fulltext -hakukonetta voidaan käyttää vain MySQL:n version 4 ja sitä uudempien versioiden kanssa.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'			=> 'MySQL fulltext -sisällysluetteloa voidan käyttää vain MyISAM ja InnoDB -tauluissa. MySQL 5.6.4 tai uudempi tarvitaan InnoDB:n fulltext-sisällysluetteloa varten.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Sisällysluettelossa olevien viestien kokonaismäärä',
	'FULLTEXT_MYSQL_MBSTRING'				=> 'Tuki ei-latinalaisille UTF-8 -merkeille mbstringin avulla:',
	'FULLTEXT_MYSQL_PCRE'					=> 'Tuki ei-latinalaisille UTF-8 -merkeille PCRE:n avulla:',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> 'Mikäli PCRE:llä ei ole Unicode-merkkien ominaisuuksia, hakukone yrittää käyttää mbstringin säännöllisiin lausekkeisiin perustuvaa moottoria.',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> 'Tämä hakukone vaatii PCRE:n Unicode-merkistön ominaisuudet, jotka ovat saatavilla vain PHP:n versioissa 4.4, 5.1 ja siitä ylöspäin, mikäli haluat etsiä ei-latinalaisia merkkejä.',
    'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'   => 'Sanat, jotka sisältävät vähintään näin monta merkkiä otetaan mukaan sisällysluetteloon. Tätä asetusta voi muuttaa vain muuttamalla MySQL-palvelimen asetuksia.',
    'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'   => 'Sanat, jotka sisältävät korkeintaan näin monta merkkiä otetaan mukaan sisällysluetteloon. Tätä asetusta voi muuttaa vain muuttamalla MySQL-palvelimen asetuksia.',
	'GENERAL_SEARCH_SETTINGS'				=> 'Yleiset hakutoiminnon asetukset',
	'GO_TO_SEARCH_INDEX'					=> 'Mene hakutoiminnon etusivulle',

	'INDEX_STATS'							=> 'Etusivun tilastot',
	'INDEXING_IN_PROGRESS'					=> 'Sisällysluetteloa luodaan',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'Hakukone rakentaa sisällysluetteloa keskustelufoorumin viesteistä. Tämä saattaa kestää muutamasta minuutista tunteihin riippuen keskustelufoorumisi koosta.',

	'LIMIT_SEARCH_LOAD'						=> 'Hakusivun kuormituksen rajoitus',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Hakutoiminto sulkeutuu, mikäli yhden minuutin kuormitus ylittyy. 1.0 on sama, kuin ~100% käyttö yhdellä suorittimella. Tämä toimii vain UNIX-pohjaisilla palvelimilla.',

	'MAX_SEARCH_CHARS'						=> 'Sisällysluettelon merkkien enimmäismäärä',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Sanat, joissa ei ole tätä enempää merkkejä, lisätään sisällysluetteloon.',
    'MAX_NUM_SEARCH_KEYWORDS'				=> 'Avainsanojen enimmäismäärä',
    'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'Maksimimäärä haettaville sanoille. Nolla poistaa rajoituksen käytöstä.',
	'MIN_SEARCH_CHARS'						=> 'Sisällysluettelon merkkien vähimmäismäärä',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Sanassa täytyy olla vähintään näin monta merkkiä päästäkseen sisällysluetteloon.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Minimimäärä merkkejä kirjoittajan nimessä',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Käyttäjän täytyy antaa tämän verran merkkejä kirjoittajan nimestä hakiessaan jokerimerkillä. Mikäli kirjoittajan nimessä on vähemmän merkkejä, kuin tämä arvo on, voit silti hakea tämän käyttäjän tekemät viestit kirjoittamalla käyttäjän koko nimen hakusivulle.',

	'PROGRESS_BAR'							=> 'Edistyminen',

	'SEARCH_GUEST_INTERVAL'					=> 'Hakutoiminnon rajoitus vieraiden käyttämänä',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Kuinka monta sekuntia vierailijan on odotettava hakujensa välillä. Mikäli yksi vieras on etsimässä tietoa, muiden on odotettava, kunnes aikaraja on täytynyt.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> 'Kaikki viestit id-arvoon %1$d asti on luetteloitu, joista %2$d viestiä oli mukana tässä vaiheessa.<br />Tämänhetkinen sisällysluettelon rakanetamisen nopeus on noin %3$.1f viestiä sekunnissa.<br />Sisällysluettelon rakennus on käynnissä…',
	'SEARCH_INDEX_DELETE_REDIRECT'			=> 'Kaikki viestit id-arvoon %1$d asti on poistettu sisällysluettelosta.<br />Poistaminen on käynnissä…',
	'SEARCH_INDEX_CREATED'					=> 'Kaikki keskustelufoorumin viesttit ovat sisällysluettelossa',
	'SEARCH_INDEX_REMOVED'					=> 'Tämän hakukoneen sisällysluettelo on poistettu',
	'SEARCH_INTERVAL'						=> 'Hakutoiminnon rajoitus rekisteröityneeltä käyttäjältä',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Kuinka monta sekuntia käyttäjän on odotettava hakujensa välillä. Tämä raja on käyttäjäkohtainen.',
	'SEARCH_STORE_RESULTS'					=> 'Hakutulosten pitäminen välimuistissa',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Hakutulokset pidetään välimuistissa tämän aikaa sekuntteina. Aseta nolla poistaaksesi hakutulosten asettamisen välimuistiin.',
	'SEARCH_TYPE'							=> 'Hakukone',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB sallii käytettävän hakukoneen vaihtamisen, jonka avulla voit etsiä tuloksia keskustelufoorumin viesteistä. Oletuksena käytetään phpBB:n omaa fulltext hakua.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Olet vaihtanut hakukonetta. Varmista, että sille on luotu oma sisällysluettelonsa, jotta voisit käyttää tätä hakukonetta.',

	'TOTAL_WORDS'							=> 'Sisällysluettelossa olevien sanojen määrä',
	'TOTAL_MATCHES'							=> 'Sisällysluettelossa olevien suhteellisten vastaavuuksien määrä',

	'YES_SEARCH'							=> 'Ota hakutoiminto käyttöön',
	'YES_SEARCH_EXPLAIN'					=> 'Ottaa hakutoiminnon käyttöön, mukaanlukien käyttäjähaun.',
	'YES_SEARCH_UPDATE'						=> 'Ota käyttöön fulltext päivitykset',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'fulltext-sisällysluettelon päivitys viestin lähetyksen yhteydessä. Tämä asetus ohitetaan, mikäli Hakutoiminto ei ole käytössä.',
));

?>