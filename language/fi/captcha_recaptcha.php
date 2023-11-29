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
	$lang = [];
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

$lang = array_merge($lang, [
	'RECAPTCHA_LANG'				=> 'fi',
	
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha v2',
	'CAPTCHA_RECAPTCHA_V3'			=> 'reCaptcha v3',
	
	'RECAPTCHA_INCORRECT'			=> 'Antamasi ratkaisu oli väärin',
	'RECAPTCHA_NOSCRIPT'			=> 'Salli JavaScript selaimessasi, jotta varmistushaaste voidaan näyttää.',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'reCaptchan käyttöä varten tarvitset käyttäjätilin. Voit rekisteröidä tilin osoitteessa <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_INVISIBLE'			=> 'Tämä CAPTCHA on näkymätön. Tämä toimii, mikäli näet pienen ikonin sivun oikeassa alakulmassa.',
	'RECAPTCHA_V3_LOGIN_ERROR_ATTEMPTS'	=> 'Olet yrittänyt kirjautua sisään liian monta kertaa antamalla virheellisen käyttäjätunnuksen tai salasanan.<br>Seuraaviin yrityksiin käytetään myös näkymätöntä reCAPTCHA v3 varmistushaastetta käyttäjätunnuksen ja salasanan lisäksi.',

	'RECAPTCHA_PUBLIC'				=> 'Avoin reCaptcha-avain',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Avoin reCaptcha-avaimesi. Avaimia voi hankkia osoitteesta <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_PRIVATE'				=> 'Yksityinen reCaptcha-avain',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Yksityinen reCaptcha-avain. Avaimia voi hankkia osoitteesta <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>.',

	'RECAPTCHA_V3_DOMAIN'				=> 'Haku verkkotunnus',
	'RECAPTCHA_V3_DOMAIN_EXPLAIN'		=> 'Verkkotunnus josta koodin haku suoritetaan.<br>Valitse <samp>recaptcha.net</samp> jos <samp>google.com</samp> ei ole sallittu.',

	'RECAPTCHA_V3_METHOD'				=> 'Haun tyyppi',
	'RECAPTCHA_V3_METHOD_EXPLAIN'		=> 'Tyyppi jota käytetään haussa.<br>Pois päältä olevat vaihtoehdot eivät ole saatavilla asetuksillasi.',
	'RECAPTCHA_V3_METHOD_CURL'			=> 'cURL',
	'RECAPTCHA_V3_METHOD_POST'			=> 'POST',
	'RECAPTCHA_V3_METHOD_SOCKET'		=> 'Socket',

	'RECAPTCHA_V3_THRESHOLD_DEFAULT'			=> 'Oletus raja-arvo',
	'RECAPTCHA_V3_THRESHOLD_DEFAULT_EXPLAIN'	=> 'Käytetään jos muut ehdot eivät täyty.',
	'RECAPTCHA_V3_THRESHOLD_LOGIN'				=> 'Kirjaantumisen raja-arvo',
	'RECAPTCHA_V3_THRESHOLD_POST'				=> 'Viestin raja-arvo',
	'RECAPTCHA_V3_THRESHOLD_REGISTER'			=> 'Rekisteröinti raja-arvo',
	'RECAPTCHA_V3_THRESHOLD_REPORT'				=> 'Ilmianto raja-arvo',
	'RECAPTCHA_V3_THRESHOLDS'					=> 'Raja-arvot',
	'RECAPTCHA_V3_THRESHOLDS_EXPLAIN'			=> 'reCAPTCHA v3 esittää arvot (<samp>1.0</samp> on erittäin luultavasti normaali käyttäjä, <samp>0.0</samp> on erittäin luultavasti botti). Täällä voit asettaa minimi arvon jokaiselle toiminnolle.',
	'EMPTY_RECAPTCHA_V3_REQUEST_METHOD'			=> 'reCAPTCHA v3 tarvitsee asetetun haun tyypin toimiakseen.',
]);
