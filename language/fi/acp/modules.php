<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*	phpBB3.1.x versio
*	harri1952@gmail.com
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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Täällä voit hallita moduuleita. Huomaa, mikäli laitat saman moduulin useamman kategorian alle, valitsemasi kategoria on ensimmäinen, joka löytyy luettelosta.',
	'ADD_MODULE'					=> 'Lisää moduuli',
	'ADD_MODULE_CONFIRM'			=> 'Haluatko varmasti lisätä valitun moduulin valittuun moodiin??',
	'ADD_MODULE_TITLE'				=> 'Lisää moduuli',

	'CANNOT_REMOVE_MODULE'	=> 'Moduulin poisto epäonistui, koska sille on annettu jälkeläisiä. Ole hyvä ja poista tai siirrä kaikki jälkeläiset poistaaksesi tämän moduulin',
	'CATEGORY'				=> 'Kategoria',
	'CHOOSE_MODE'			=> 'Valitse moduulin moodi',
	'CHOOSE_MODE_EXPLAIN'	=> 'Valitse moduulissa käytettävä moodi.',
	'CHOOSE_MODULE'			=> 'Valitse moduuli',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Valitse tämän moduulin kutsuma tiedosto.',
	'CREATE_MODULE'			=> 'Luo uusi moduuli',

	'DEACTIVATED_MODULE'	=> 'Käytöstä poistettu moduuli',
	'DELETE_MODULE'			=> 'Poista moduuli',
	'DELETE_MODULE_CONFIRM'	=> 'Haluatko varmasti poistaa tämän moduulin?',

	'EDIT_MODULE'			=> 'Muokkaa moduulia',
	'EDIT_MODULE_EXPLAIN'	=> 'Täällä voit lisätä moduuliin sidottuja asetuksia',

	'HIDDEN_MODULE'			=> 'Piilotettu moduuli',

	'MODULE'					=> 'Moduuli',
	'MODULE_ADDED'				=> 'Moduuli on lisätty',
	'MODULE_DELETED'			=> 'Moduuli on poistettu',
	'MODULE_DISPLAYED'			=> 'Moduulin näyttö',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Mikäli et halua näyttää tätä moduulia, mutta haluat silti käyttää sitä, valitse tähän "ei".',
	'MODULE_EDITED'				=> 'Moduulin muokkaus onnistui',
	'MODULE_ENABLED'			=> 'Moduuli on käytössä',
	'MODULE_LANGNAME'			=> 'Moduulin kielen nimi',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Anna moduulissa näytettävä nimi. Käytä kielitiedoston vakiota, jos haluat käyttää kielitiedostossa olevaa nimeä.',
	'MODULE_TYPE'				=> 'Moduulin tyyppi',

	'NO_CATEGORY_TO_MODULE'	=> 'En voi luoda kategoriasta moduulia. Ole hyvä ja poista tai siirrä kaikki jälkeläiset ennen kuin yrität uudelleen.',
	'NO_MODULE'				=> 'Moduulia ei löytynyt',
	'NO_MODULE_ID'			=> 'Moduulin tunnistetta ei ole määritelty',
	'NO_MODULE_LANGNAME'	=> 'Moduulin kielipaketista haettavaa nimeä ei löytynyt',
	'NO_PARENT'				=> 'Ei isäntää',

	'PARENT'				=> 'Isäntä',
	'PARENT_NO_EXIST'		=> 'Isäntää ei ole olemassa',

	'SELECT_MODULE'			=> 'Valitse moduuli',
));
