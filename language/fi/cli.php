<?php
/**
 *
 * This file is part of the Finnish language pack
 *
 * @copyright (c) phpBB Suomi <https://www.phpbbsuomi.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Valitse tämä asetus jos konfigurointi muuttuu niin nopeasti ettei sitä ole cache muistissa.',
	'CLI_CONFIG_CURRENT'				=> 'Nykyinen asetusarvo, käytä 0 tai 1 (boolean luku) sen tilalla',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Asetus poistettu onnistuneesti: %s.',
	'CLI_CONFIG_NEW'					=> 'Uusi asetusarvo, käytä 0 tai 1 lukua',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Asetusarvoa %s ei ole määritelty',
	'CLI_CONFIG_OPTION_NAME'			=> 'Asetusarvon muuttujan nimi',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Valitse tämä asetus jos haluat tulostaa luvun ilman rivinsiirtoa.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Luku jonka arvoa kasvatetaan',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Asetusarvon %s muutos suoritettu',
	'CLI_CONFIG_SET_FAILURE'			=> 'Asetusarvon %s muutos epäonnistui',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Asetusarvon %s muutos onnistui',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Tulosta luettelo cron-job tehtävistä.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Suorita kaikki cron-job tehtävät.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Anna suoritettavan cron-job tehtävän nimi',
    'CLI_DESCRIPTION_DB_LIST'					=> 'Listaa kaikki asennetut ja saatavilla olevat muunnokset.',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Tietokannan päivitys (migration).',
    'CLI_DESCRIPTION_DB_REVERT'					=> 'Peruuta muunnos.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Nollaa asetusarvo',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Pysäytä määrätty laajennus.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Salli määrätty laajennus.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Etsi muutokset joilla ei ole riippuvuuksia.',
    'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS'		=> 'Korjaa foorumin ja moduulien puurakenteen.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Hae asetusarvo',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Kasvata asetuksen kokonaislukuarvoa',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Näytä kaikki tietokannan ja tiedostojärjestelmän laajennukset.',

    'CLI_DESCRIPTION_OPTION_ENV'				=> 'Ympäristön nimi.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Huolto tila (Safe Mode, without extensions).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Aukaise komento ikkuna (shell).',

	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Poista määrätty laajennus.',

    'CLI_DESCRIPTION_REPARSER_LIST'						=> 'Listaa tekstityypit, jotka voidaan käsitellä uudelleen.',
    'CLI_DESCRIPTION_REPARSER_AVAILABLE'				=> 'Saatavilla olevat uudelleenkäsittelijät:',
    'CLI_DESCRIPTION_REPARSER_REPARSE'					=> 'Käsittelee tallennetun tekstin uudelleen text_formatter -palveluilla.',
    'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'			=> 'Uudelleenkäsiteltävän tekstin tyyppi. Jätä tyhjäksi käsitelläksesi kaiken uudelleen..',
    'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> 'Älä tallenna muutoksia; näytä vain mitä tapahtuisi',
    'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> 'Alin käsiteltävä tietueen ID',
    'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> 'Ylin käsiteltävä tietueen ID',
    'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> 'Arvioi kerralla käsiteltävien tietueiden määrä',
    'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> 'Aloita uudelleenkäsittely siitä mihin edellinen suoritus päättyi',

    'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'					=> 'Asettaa asetuksen arvon vain jos vanha vastaa nykyistä arvoa',
    'CLI_DESCRIPTION_SET_CONFIG'						=> 'Asettaa asetuksen arvon',

    'CLI_DESCRIPTION_THUMBNAIL_DELETE'					=> 'Poista kaikki esikatselukuvat.',
    'CLI_DESCRIPTION_THUMBNAIL_GENERATE'				=> 'Luo kaikki puuttuvat esikatselukuvat.',
    'CLI_DESCRIPTION_THUMBNAIL_RECREATE'				=> 'Luo uudelleen kaikki esikatselukuvat.',

    'CLI_DESCRIPTION_UPDATE_CHECK'					=> 'Tarkista onko foorumi ajantasalla.',
    'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'		=> 'Tarkistettavan laajennuksen nimi (jos all, tarkistaa kaikki)',
    'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'		=> 'Aja tarkistuskomento välimuistin kanssa.',
    'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY'	=> 'Aja tämä komento tarkistaaksesi ainoastaan vakaat tai epävakaat versiot.',

    'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT'		=> 'Päivittää vanhentuneet salasanatiivisteet käyttämään bcryptiä.',

    'CLI_ERROR_INVALID_STABILITY' => '"%s" pitää olla "stable" tai "unstable".',

    'CLI_DESCRIPTION_USER_ACTIVATE'				=> 'Aktivoi (tai poista käytöstä) käyttäjätili.',
    'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'	=> 'Aktivoitavan käyttäjän käyttäjätunnus.',
    'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE'	=> 'Poista käytöstä tämän käytäjän tunnukset',
    'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'		=> 'Käyttäjä on jo aktivoitu',
    'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'	=> 'Käyttäjä on jo poistettu käytöstä.',
    'CLI_DESCRIPTION_USER_ADD'					=> 'Lisää uusi käyttäjä.',
    'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'	=> 'Uuden käyttäjän tunnus',
    'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'	=> 'Uuden käyttäjän salasana',
    'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'		=> 'Uuden käyttäjän sähköpostiosoite',
    'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'	=> 'Lähetä tilin aktivointiviesti uudelle käyttäjälle (ei lähetetä automaattisesti)',
    'CLI_DESCRIPTION_USER_DELETE'				=> 'Poista käyttäjätili.',
    'CLI_DESCRIPTION_USER_DELETE_USERNAME'		=> 'Poistettavan käyttäjän tunnus',
    'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS'	=> 'Poista kaikki käyttäjän viestit. Ilman tätä valintaa, käyttäjän viestit säilyvät.',
    'CLI_DESCRIPTION_USER_RECLEAN'				=> 'Siivoa käyttäjänimet uudelleen.',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Ei voi pysäyttää laajennusta %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Pysäytetty onnistuneesti laajennus %s',
    'CLI_EXTENSION_DISABLED'			=> 'Laajennos %s ei ole käytössä',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Ei voi aktivoida laajennusta %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Onnistunut aktivointi laajennukselle %s',
    'CLI_EXTENSION_ENABLED'				=> 'Laajennos %s on jo käytössä',
    'CLI_EXTENSION_NOT_EXIST'			=> 'Laajennosta %s ei ole',
	'CLI_EXTENSION_NAME'				=> 'Laajennuksen nimi',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Ei voi poistaa laajennusta %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Onnistuneesti poistettu laajennus %s',
    'CLI_EXTENSION_UPDATE_FAILURE'		=> 'Ei voitu päivittää laajennosta %s',
    'CLI_EXTENSION_UPDATE_SUCCESS'		=> 'Laajennos päivitettiin onnistuneesti: %s',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Ei laajennuksia käytössä.',
    'CLI_EXTENSION_NOT_ENABLEABLE'		=> 'Laajennos %s ei ole otettavissa käyttöön.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Käytettävissä',
	'CLI_EXTENSIONS_DISABLED'			=> 'Estetty',
	'CLI_EXTENSIONS_ENABLED'			=> 'Sallittu',

    'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS'		=> 'Foorumien ja moduulien puurakenne on korjattu onnistuneesti.',
    'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS'		=> 'Salasanan tiivisteet päivitettiin onnistuneesti bcryptiin.',

    'CLI_MIGRATION_NAME'					=> 'Muunnoksen nimi, sisältäen nimiavaruuden (käytä kauttaviivoja kenoviivojen sijaan välttääksesi ongelmat).',
    'CLI_MIGRATIONS_AVAILABLE'				=> 'Saatavilla olevat muunnokset',
    'CLI_MIGRATIONS_INSTALLED'				=> 'Asennetut muunnokset',
    'CLI_MIGRATIONS_ONLY_AVAILABLE'		    => 'Näytä vain saatavilla olevat muunnokset',
    'CLI_MIGRATIONS_EMPTY'                  => 'Ei muunnoksia.',

    'CLI_REPARSER_REPARSE_REPARSING'		=> 'Käsitellään uudelleen %1$s (väli %2$d..%3$d)',
    'CLI_REPARSER_REPARSE_REPARSING_START'	=> 'Käsitellään uudelleen %s...',
    'CLI_REPARSER_REPARSE_SUCCESS'			=> 'Uudelleenkäsittely päättyi onnistuneesti',

    // In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
    // eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
    'CLI_THUMBNAIL_DELETED'		=> '%1$s (%2$s) poistettu.',
    'CLI_THUMBNAIL_DELETING'	=> 'Poistetaan esikatselukuvia',
    'CLI_THUMBNAIL_SKIPPED'		=> '%1$s (%2$s) ohitettu.',
    'CLI_THUMBNAIL_GENERATED'	=> '%1$s (%2$s) luotu.',
    'CLI_THUMBNAIL_GENERATING'	=> 'Luodaan esikatselukuvia',
    'CLI_THUMBNAIL_GENERATING_DONE'	=> 'Kaikki esikatselukuvat luotu.',
    'CLI_THUMBNAIL_DELETING_DONE'	=> 'Kaikki esikatselukuvat poistettu.',

    'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> 'Ei luotavua esikatselukuvia.',
    'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> 'Ei poistettavia esikatselukuvia.',

    'CLI_USER_ADD_SUCCESS'		=> 'Onnistuneesti lisättiin käyttäjä %s.',
    'CLI_USER_DELETE_CONFIRM'	=> 'Haluatko varmasti poistaa ‘%s’? [y/N]',
    'CLI_USER_RECLEAN_START'	=> 'Uudelleensiivotaan käyttäjänimet',
    'CLI_USER_RECLEAN_DONE'		=> [
        0	=> 'Uudelleensiivous päättyi. Ei siivottavia tunnuksia.',
        1	=> 'Uudelleensiivous päättyi. %d tunnus poistettu.',
        2	=> 'Uudelleensiivous päättyi. %d tunnusta poistettu.',
    ],
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . ' Vaihtoehtoisesti voit määritellä ajastetun tehtävän nimen suorittaaksesi vain tietyn ajastetun tehtävän.',
    'CLI_HELP_USER_ACTIVATE'	=> 'Aktivoi, tai poista käytöstä käyttäjätunnus käyttämällä <info>--deactivate</info> valintaa.
Lähettääksesi valinnaisen aktivointiviestin käyttäjälle, käytä  <info>--send-email</info> valintaa.',
    'CLI_HELP_USER_ADD'			=> 'Komento <info>%command.name%</info> lisää uuden käyttäjän:
Jos tämä komento ajetaan ilman valintoja, sinua pyydetään syöttämään ne.
Lähettääksesi valinnaisen sähköpostin uudelle käyttäjälle, käytä <info>--send-email</info> valintaa.',
    'CLI_HELP_USER_RECLEAN'		=> 'Uudelleensiivoa tunnukset tarkistaa käyttäjätunnukset ja varmistaa että käyttäjätunnuksesta on tallennettu siistitty versio. Siistityt käyttäjätunnukset ovat merkkien koosta riippumattomia, NFC-normalisoituja ja ASCII-merkistöön muunnettuja.',
));
