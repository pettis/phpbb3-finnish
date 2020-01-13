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

$lang = array_merge($lang, array(
	'CONFIG_NOT_EXIST'					=> 'Asetusarvoa "%s" ei löydy.',

	'GROUP_NOT_EXIST'					=> 'Ryhmää "%s" ei löydy.',

	'MIGRATION_APPLY_DEPENDENCIES'		=> 'Käytä muuttujan %s riippuvuuksia.',
	'MIGRATION_DATA_DONE'				=> 'Asennettu tiedosto: %1$s; aika: %2$.2f sekuntia',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'Installoin tiedostoa: %1$s; aika: %2$.2f sekuntia',
	'MIGRATION_DATA_RUNNING'			=> 'Asennan tiedostoa: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'Asennus on jo suoritettu : %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'Jotain meni pieleen pyynnön aikana ja poikkeus heitettiin. Ennen virhettä tehdyt muutokset peruttiin parhaan kykymme mukaan, mutta sinun tulisi tarkistaa foorumi virheiden varalta: <br><br>%s',
	'MIGRATION_NOT_FULFILLABLE'			=> 'Asennusta "%1$s" ei voi suorittaa loppuun, puuttuva asennus "%2$s".',
    'MIGRATION_NOT_INSTALLED'			=> 'Muunnosta "%s" ei ole asennettu.',
	'MIGRATION_NOT_VALID'				=> '%s ei ole hyväksyttävä asennus.',
	'MIGRATION_SCHEMA_DONE'				=> 'Asennettu malli: %1$s; aika: %2$.2f sekuntia',
    'MIGRATION_SCHEMA_IN_PROGRESS'		=> 'Asennetaan mallia: %1$s; aika: %2$.2f sekuntia',
    'MIGRATION_SCHEMA_RUNNING'			=> 'Asennetaan mallia: %s.',

    'MIGRATION_REVERT_DATA_DONE'		=> 'Palautettiin tiedot: %1$s; Aika: %2$.2f sekuntia',
    'MIGRATION_REVERT_DATA_IN_PROGRESS'	=> 'Palautetaan tietoja: %1$s; Aika: %2$.2f sekuntia',
    'MIGRATION_REVERT_DATA_RUNNING'		=> 'Palautetaan tietoja: %s.',
    'MIGRATION_REVERT_SCHEMA_DONE'		=> 'Palautettiin malli: %1$s; aika: %2$.2f sekuntia',
    'MIGRATION_REVERT_SCHEMA_IN_PROGRESS'	=> 'Palautetaan mallia: %1$s; Aika: %2$.2f sekuntia',
    'MIGRATION_REVERT_SCHEMA_RUNNING'	=> 'Palautetaan mallia: %s.',
	
	'MIGRATION_INVALID_DATA_MISSING_CONDITION'		=> 'Muunnos on virheellinen. Ehtolausekkeen apurista puuttuu ehto.',
	'MIGRATION_INVALID_DATA_MISSING_STEP'			=> 'Muunnos on virheellinen. Ehtolausekkeen apurista puuttuu toimiva muunnosvaiheen kutsu.',
	'MIGRATION_INVALID_DATA_CUSTOM_NOT_CALLABLE'	=> 'Muunnos on virheellinen. Mukautettua kutsuttavaa funktiota ei pystytty kutsumaan.',
	'MIGRATION_INVALID_DATA_UNKNOWN_TYPE'			=> 'Muunnos on virheellinen. Kohdattiin tuntematon muuntotyökalun tyyppi.',
	'MIGRATION_INVALID_DATA_UNDEFINED_TOOL'			=> 'Muunnos on virheellinen. Kohdattiin tuntematon muuntotyökalu.',
	'MIGRATION_INVALID_DATA_UNDEFINED_METHOD'		=> 'Muunnos on virheellinen. Kohdattiin tuntematon muuntotyökalun metodi',

	'MODULE_ERROR'						=> 'Virhe kun luotiin modulia: %s',
    'MODULE_EXISTS'						=> 'Moduli on jo olemassa: %s',
    'MODULE_EXIST_MULTIPLE'				=> 'Useita moduleita annetulla isäntä moduulilla langname on jo olemassa: %s. Yritä käyttää ennen/jälkeen avaimia selvittääksesi moduulin sijainnin.',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'Tarvittava modulin info tiedosto puuttuu: %2$s',
	'MODULE_NOT_EXIST'					=> 'Tarvittavaa modulia ei löydy: %s',

    'PARENT_MODULE_FIND_ERROR'			=> 'Ei voitu selvittää isäntämodulin tunnistetta: %s',
	'PERMISSION_NOT_EXIST'				=> 'Ei mahdollista muuttaa "%s" oikeuksia.',

	'ROLE_NOT_EXIST'					=> 'Ei mahdollista muuttaa "%s" oikeuksia.',
));
