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

$lang = array_merge($lang, array(
    'HELP_FAQ_ATTACHMENTS_ALLOWED_ANSWER'	=> 'Ylläpitäjä voi määrätä sallitut ja kielletyt liitetiedostojen tyypit. Ota yhteys ylläpitäjään mikäli et ole varma mitkä tiedostot ovat sallittuja..',
    'HELP_FAQ_ATTACHMENTS_ALLOWED_QUESTION'	=> 'Mitkä liitetiedostot ovat sallittuja tällä alueella?',
    'HELP_FAQ_ATTACHMENTS_OWN_ANSWER'	=> 'Nähdäksesi listan liitetiedostoistasi, mene omiin asetuksiin ja seuraa linkkejä liitetiedostot-osioon.',
    'HELP_FAQ_ATTACHMENTS_OWN_QUESTION'	=> 'Mistä löydän lähettämäni liitetiedostot?',

    'HELP_FAQ_BLOCK_ATTACHMENTS'	=> 'Liitetiedostot',
    'HELP_FAQ_BLOCK_BOOKMARKS'	=> 'Seuraaminen ja kirjanmerkit',
    'HELP_FAQ_BLOCK_FORMATTING'	=> 'Muotoilu ja aiheiden tyypit',
    'HELP_FAQ_BLOCK_FRIENDS'	=> 'Ystävät ja vihamiehet',
    'HELP_FAQ_BLOCK_GROUPS'	=> 'Käyttäjätasot ja ryhmät',
    'HELP_FAQ_BLOCK_ISSUES'	=> 'phpBB -asiat',
    'HELP_FAQ_BLOCK_LOGIN'	=> 'Kirjautumisen ja rekisteröitymisen ongelmat',
    'HELP_FAQ_BLOCK_PMS'	=> 'Yksityisviestit',
    'HELP_FAQ_BLOCK_POSTING'	=> 'Viestien lähetyksen ongelmat',
    'HELP_FAQ_BLOCK_SEARCH'	=> 'Foorumilta hakeminen',
    'HELP_FAQ_BLOCK_USERSETTINGS'	=> 'Käyttäjän asetukset',

    'HELP_FAQ_BOOKMARKS_DIFFERENCE_ANSWER'	=> 'phpBB 3.0 -versiossa aiheiden kirjanmerkit toimivat kuten internet-selaimen kirjanmerkit. Sinua ei huomautettu jos aiheeseen tuli päivitys. phpBB 3.1 -versiosta lähtien kirjanmerkit toimivat samaan tapaan kuin aiheiden tilaaminen.  Voit saada ilmoituksen kun aihe josta sinulla on kirjanmerkki päivittyy. Tilaaminen puolestaan huomauttaa sinua kun aiheeseen tai foorumiin tulee päivitys. Huomautusten asetukset ja tilausten asetukset voidaan määrittää omissa asetuksissa kohdassa “Omat asetukset”.',
    'HELP_FAQ_BOOKMARKS_DIFFERENCE_QUESTION'	=> 'Mikä ero on kirjanmerkillä ja tilaamisella?',
    'HELP_FAQ_BOOKMARKS_FORUM_ANSWER'	=> 'Tilataksesi haluamasi alueen, valitse “Tilaa alue” -linkki, aluesivun alalaidassa.',
    'HELP_FAQ_BOOKMARKS_FORUM_QUESTION'	=> 'Kuinka tilaan haluamani alueen?',
    'HELP_FAQ_BOOKMARKS_REMOVE_ANSWER'	=> 'Poistaaksesi tilauksiasi, mene omiin asetuksiisi ja seuraa linkkejä tilauksiisi.',
    'HELP_FAQ_BOOKMARKS_REMOVE_QUESTION'	=> 'Kuinka poistan tilaukseni?',
    'HELP_FAQ_BOOKMARKS_TOPIC_ANSWER'	=> 'Voit tehdä kirjanmekin tai tilata haluamasi aiheen valitsemalla sopivan linkin “Aiheen työkalut” -valikossa, joka on sijoitettu kätevästi keskustelun ylä- ja alalaidan lähelle. <br />Viestiketjuun vastaaminen ja valinta “Huomauta kun vastaus lähetetään” tilaa viestiketjun.',
    'HELP_FAQ_BOOKMARKS_TOPIC_QUESTION'	=> 'Kuinka teen kirjanmerkin tai seuraan haluamaani aihetta?',

    'HELP_FAQ_FORMATTING_ANNOUNCEMENT_ANSWER'	=> 'Tiedotteet usein sisältävät tärkeää tietoa foorumista jota olet lukemassa ja siksi ne tulisi lukea aina kun mahdollista. Tiedotteet näkyvät jokaisen sivun ylälaidassa niillä foorumeilla joihin ne on lähetetty. Kuten globaalien tiedotteiden kohdalla, tiedotteiden lähettämisen oikeudet antaa foorumin ylläpitäjä.',
    'HELP_FAQ_FORMATTING_ANNOUNCEMENT_QUESTION'	=> 'Mitä ovat tiedotteet?',
    'HELP_FAQ_FORMATTING_BBOCDE_ANSWER'	=> 'BBCode on HTML-kielen tapainen toteutus, joka tarjoaa tiettyjen viestin osien muotoilumahdollisuuden. BBCoden käytöstä päättää ylläpitäjä, mutta se voidaan ottaa pois käytöstä myös viestikohtaisesti viestin kirjoituslomakkeella. BBCode itsessään on HTML:n kaltainen, mutta tagit käyttävät &lt; ja &gt; merkkien sijaan hakasulkuja [ ja ]. BBCoden oppaan löydät viestinlähetyssivun kautta.',
    'HELP_FAQ_FORMATTING_BBOCDE_QUESTION'	=> 'Mikä on BBCode?',
    'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_ANSWER'	=> 'Globaalit tiedotteet sisältävät tärkeää tietoa ja sinun tulisi lukea ne aina kun on mahdolista. Ne näkyvät jokaisen alueen ylälaidassa ja omissa asetuksissa. Globaalien tiedotteiden oikeudet myöntää foorumin ylläpitäjä.',
    'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_QUESTION'	=> 'Mitä ovat globaalit tiedotteet?',
    'HELP_FAQ_FORMATTING_HTML_ANSWER'	=> 'Ei. Tällä foorumilla ei ole mahdollista lähettää HTML:ää siten, että se toimisi HTML-koodina. Yleisimmät HTML-muotoilut voi kuitenkin tehdä BBCoden avulla.',
    'HELP_FAQ_FORMATTING_HTML_QUESTION'	=> 'Onko HTML sallittu?',
    'HELP_FAQ_FORMATTING_ICONS_ANSWER'	=> 'Aiheiden kuvakkeet ovat aiheen aloittajan valitsemia kuvakkeita joiden on tarkoitus kuvastaa niiden sisältöä. Aiheiden kuvakkeiden käyttöoikeudet riippuvat foorumin ylläpitäjän määrittelemistä oikeuksista.',
    'HELP_FAQ_FORMATTING_ICONS_QUESTION'	=> 'Mitä ovat aiheiden kuvakkeet?',
    'HELP_FAQ_FORMATTING_IMAGES_ANSWER'	=> 'Kyllä, kuvia voidaan käyttää viesteissäsi. Jos ylläpitäjä on sallinut liitteet, voit mahdollisesti ladata kuvan foorumille. Muutoin sinun täytyy antaa osoite julkisesti saatavilla olevaan kuvaan, esim. http://www.example.com/my-picture.gif. Et voi antaa osoitetta omalla koneellasi oleviin kuviin (ellei se ole yleinen palvelin) tai kuviin, jotka ovat käyttäjätunnistuksen takana, esim. hotmail tai yahoo sähköpostilaatikot, salasanasuojatut sivustot, jne. Näyttääksesi kuvan, käytä BBCoden [img]-tagia.',
    'HELP_FAQ_FORMATTING_IMAGES_QUESTION'	=> 'Voinko lähettää kuvia?',
    'HELP_FAQ_FORMATTING_LOCKED_ANSWER'	=> 'Lukitut viestiketjut ovat viestiketjuja, joihin ei voi enää lähettää vastauksia ja mahdolliset kyselyt joita viestiketjussa oli, ovat päättyneet automaattisesti. Viestiketjuja voidaan lukita useista syistä ylläpitäjän tai foorumin valvojan toimesta. Saatat myös pystyä lukitsemaan oman viestiketjusi, mutta tämä riippuu foorumin ylläpitäjän antamista oikeuksista.',
    'HELP_FAQ_FORMATTING_LOCKED_QUESTION'	=> 'Mitä ovat lukitut viestiketjut?',
    'HELP_FAQ_FORMATTING_SMILIES_ANSWER'	=> 'Hymiöt tai emoticonit ovat pieniä kuvia joita voidaan käyttää tunteiden ilmaisemiseen lyhyitä koodeja käyttämällä. Esimerkiksi :) tarkoittaa iloista ja :( tarkoittaa surullista. Hymiöiden täysi lista on nähtävillä viestinlähetyslomakkeessa. Älä käytä hymiöitä liikaa, sillä ne voivat tehdä viestistä lukukelvottoman ja valvoja voi poistaa niitä tai viestin kokonaan. Foorumin ylläpitäjä on voinut myös määritellä rajan yksittäisen viestin hymiöiden määrälle.',
    'HELP_FAQ_FORMATTING_SMILIES_QUESTION'	=> 'Mitä ovat hymiöt?',
    'HELP_FAQ_FORMATTING_STICKIES_ANSWER'	=> 'Kiinnitetyt viestiketjut näkyvät tiedotteiden alapuolella ja ovat vain etusivulla. Ne ovat yleensä aika tärkeitä, joten sinun tulisi lukea ne aina kun mahdollista. Kuten tiedotteiden ja globaalien tiedotteiden kanssa, viestiketjujen kiinnittämisen oikeudet määrittelee foorumin ylläpitäjä.',
    'HELP_FAQ_FORMATTING_STICKIES_QUESTION'	=> 'Mitä ovat kiinnitetyt viestiketjut',

    'HELP_FAQ_FRIENDS_BASIC_ANSWER'	=> 'Voit käyttää näitä listoja muiden foorumin käyttäjien organisointiin. Kaverilistalle lisätään käyttäjiä omien asetusten kautta. Tämä auttaa nopeasti näkemään jos he ovat paikalla ja yksityisviestien lähettämisessä. Teemasta riippuen näiden käyttäjien viestit saatetaan myös korostaa. Jos lisäät käyttäjän vihamieheksi, kaikki käyttäjän kirjoittamat viestit piilotetaan oletuksena.',
    'HELP_FAQ_FRIENDS_BASIC_QUESTION'	=> 'Mitä ovat kaveri ja vihamieslistat?',
    'HELP_FAQ_FRIENDS_MANAGE_ANSWER'	=> 'Voit lisätä käyttäjiä listoihisi kahdella tapaa. Jokaisen käyttäjän profiilissa on linkki jonka kautta voit lisätä heidät joko kavereihin tai vihamiehiin. Vaihtoehtoisesti omista asetuksista voit lisätä käyttäjiä suoraan syöttämällä heidän käyttäjänimen. Voit myös poistaa käyttäjiä listaltasi samalta sivulta.',
    'HELP_FAQ_FRIENDS_MANAGE_QUESTION'	=> 'Kuinka voin lisätä / poistaa käyttäjiä kavereista tai vihamiehistä',

    'HELP_FAQ_GROUPS_ADMINISTRATORS_ANSWER'	=> 'Ylläpitäjät ovat jäseniä joille on annettu korkeimman tason kontrolli koko foorumiin. Nämä jäsenet voivat hallita foorumin kaikkia foorumin toiminnan osa-alueita, mukaan lukien oikeuksien asettaminen, käyttäjien porttikiellot, käyttäjäryhmät ja valvojat yms., riippuen foorumin perustajasta ja hänen ylläpitäjille määrittelemistä oikeuksista. Heillä saattaa olla myös täydet valvojan oikeudet kaikilla keskustelualueilla, riippuen foorumin perustajan määrittelemistä asetuksista.',
    'HELP_FAQ_GROUPS_ADMINISTRATORS_QUESTION'	=> 'Mitä ovat ylläpitäjät?',
    'HELP_FAQ_GROUPS_COLORS_ANSWER'	=> 'Foorumin ylläpitäjä voi määritellä tietyn käyttäjäryhmän jäsenille värin joka helpottaa kyseisen käyttäjäryhmän jäsenten tunnistamista.',
    'HELP_FAQ_GROUPS_COLORS_QUESTION'	=> 'Miksi jotkut käyttäjäryhmät näkyvät eri väreillä?',
    'HELP_FAQ_GROUPS_DEFAULT_ANSWER'	=> 'Jos olet useamman kuin yhden käyttäjäryhmän jäsen, oletusryhmääsi käytetään määriteltäessä sinun kohdallasi käytettävää ryhmäväriä ja titteliä. Foorumin ylläpitäjä saattaa antaa sinulle oikeudet vaihtaa oletusryhmääsi omista asetuksista.',
    'HELP_FAQ_GROUPS_DEFAULT_QUESTION'	=> 'Mikä on “oletusryhmä”?',
    'HELP_FAQ_GROUPS_MODERATORS_ANSWER'	=> 'Valvojat ovat henkilöitä (tai ryhmä henkilöitä) jotka katsovat foorumeiden perään päivittäin. Heillä on on valta muokata ja poistaa viestejä ja lukita, avata, siirtää, poistaa ja jakaa viestiketjuja niillä alueilla joissa heillä on valvojan oikeudet. Yleensä valvojat ovat paikalla estämässä aiheen vierestä keskustelua tai hyvien tapojen vastaisen materiaalin lähettämistä.',
    'HELP_FAQ_GROUPS_MODERATORS_QUESTION'	=> 'Mitä ovatr valvojat?',
    'HELP_FAQ_GROUPS_TEAM_ANSWER'	=> 'Tämä sivu näyttää sinulle listan foorumin henkilökunnasta, mukaanluettuna ylläpitäjät, valvojat ja muut tiedot, kuten alueet joita he valvovat.',
    'HELP_FAQ_GROUPS_TEAM_QUESTION'	=> 'Mikä on  “Tiimi” linkki?',
    'HELP_FAQ_GROUPS_USERGROUPS_ANSWER'	=> 'Käyttäjäryhmät ovat käyttäjien ryhmiä, jotka jakavat yhteisön hallittaviin osiin, joiden kanssa foorumin ylläpitäjät voivat toimia. Jokainen käyttäjä voi kuulua useisiin ryhmiin ja jokaiselle ryhmälle voidaan määritellä yksilölliset oikeudet. Tämä tarjoaa ylläpitäjille helpon tavan muuttaa käyttäjien oikeuksia useille käyttäjille kerralla, kuten muuttaa valvojien oikeuksia tai hallita pääsyä suljetulle alueelle.',
    'HELP_FAQ_GROUPS_USERGROUPS_JOIN_ANSWER'	=> 'Voit nähdä kaikki ryhmät “Käyttäjäryhmät”-linkin kautta omissa asetuksissa. Jos haluat liittyä yhteen, klikkaa vastaavaa painiketta. Kaikissa ryhmissä ei kuitenkaan ole vapaata pääsyä. Jotkut ryhmät vaativat hyväksynnän ennen kuin voit liittyä. Jotkut voivat olla suljettuja ja joissakin voi olla jopa piilotettuja jäsenyyksiä. Jos ryhmä on avoin, voit liittyä siihen klikkaamalla painiketta. Jos ryhmä vaatii hyväksynnän liittymistä varten, voit pyytää liittymislupaa klikkaamalla painiketta. Ryhmän johtajan täytyy hyväksyä pyyntösi ja hän saattaa kysyä miksi haluat liittyä ryhmään. Älä häiriköi ryhmän ylläpitäjiä jos he eivät hyväksy pyyntöäsi. Heillä on syynsä.',
    'HELP_FAQ_GROUPS_USERGROUPS_JOIN_QUESTION'	=> 'Missä ovat käyttäjäryhmät ja miten liityn sellaiseen?',
    'HELP_FAQ_GROUPS_USERGROUPS_LEAD_ANSWER'	=> 'Käyttäjäryhmän johtaja on yleensä määritelty, kun käyttäjäryhmät on alunperin luotu ylläpitäjän toimesta. Jos haluat luoda käyttäjäryhmän, ensimmäinen yhteyshenkilösi tulisi olla ylläpitäjä. Kokeile yksityisviestin lähettämistä.',
    'HELP_FAQ_GROUPS_USERGROUPS_LEAD_QUESTION'	=> 'Miten pääsen käyttäjäryhmän johtajaksi?',
    'HELP_FAQ_GROUPS_USERGROUPS_QUESTION'	=> 'Mitä ovat käyttäjäryhmät?',

    'HELP_FAQ_ISSUES_ADMIN_ANSWER'	=> 'Kaikki foorumin käyttäjät voivat käyttää “Ota yhteyttä” -lomaketta, jos täämä vaihtoehto on foorumin ylläpitäjän mahdollistama.<br />Foorumin käyttäjät voivat käyttää myös  “Tiimi”-linkkiä.',
    'HELP_FAQ_ISSUES_ADMIN_QUESTION'	=> 'Kuinka otan yhteyttä foorumin ylläpitäjään?',
    'HELP_FAQ_ISSUES_FEATURE_ANSWER'	=> 'Tämä ohjelmisto on phpBB Limitedin kirjoittama ja lisensoima. Jos uskot, että ominaisuus tulisi lisätä, vieraile <a href="https://www.phpbb.com/ideas/">phpBB ideakeskuksessa</a>, jossa voit äänestää olemassa olevia ideoita tai lähettää uuden.',
    'HELP_FAQ_ISSUES_FEATURE_QUESTION'	=> 'Miksi ominaisuutta X ei ole saatavilla?',
    'HELP_FAQ_ISSUES_LEGAL_ANSWER'	=> 'Kuka tahansa “Tiimi”-sivulla mainituista ylläpitäjistä on todennäköisesti sopiva yhteyshenkilö valituksillesi. Jos et tätä kautta saa vastausta, sinun kannattaa ottaa yhteyttä verkkotunnuksen omistajaan (tee <a href="http://www.google.com/search?q=whois">whois-kysely</a>) tai jos kyseessä on ilmaispalvelussa oleva (esim. Yahoo!, free.fr, f2s.com, jne.), ota yhteyttä ylläpitoon tai väärinkäytöksistä vastaavaan osastoon kyseisessä palvelussa. Huomaa, että phpBB Limitedillä <strong>ei ole lainkaan toimivaltaa</strong> ja sitä ei voida pitää vastuussa miten, missä tai kenen toimesta tämä foorumi on käytössä. Älä ota yhteyttä phpBB Limitediin missään lakiasioissa <strong>jotka eivät liity</strong> phpBB.com-sivustoon tai pelkkään phpBB-sovellukseen itseensä. Jos lähetät sähköpostia phpBB Limitedille <strong>mistään kolmannen osapuolen</strong> tämän sovelluksen käytöstä, voit odottaa niukkasanaista vastausta, jos edes vastausta lainkaan.',
    'HELP_FAQ_ISSUES_LEGAL_QUESTION'	=> 'Keneen minun tulee olla yhteydessä väärinkäytöstapauksissa tai lakiasioissa tähän foorumiin liittyen?',
    'HELP_FAQ_ISSUES_WHOIS_PHPBB_ANSWER'	=> 'Tämä sovellus (sen muokkaamattomassa tilassa) on tuottanut, julkaissut ja sen tekijänoikeudet omistaa <a href="https://www.phpbb.com/">phpBB Limited</a>. Se on tehty saataville GNU General Public Licensenssin, versiolla 2 (GPL-2.0) ja sitä voidaan jakaa vapaasti. Katso <a href="https://www.phpbb.com/about/">Tietoja phpBB:stä</a> saadaksesi lisätietoja.',
    'HELP_FAQ_ISSUES_WHOIS_PHPBB_QUESTION'	=> 'Kuka kirjoitti tämän foorumisovelluksen?',

    'HELP_FAQ_LOGIN_AUTO_LOGOUT_ANSWER'	=> 'Jos et valitse <em>Muista minut</em>-laatikkoa kirjautuessasi, foorumi pitää sinut kirjautuneena ennalta määritellyn ajan. Tämä estää muita väärinkäyttämästä tunnuksiasi. Pysyäksesi kirjautuneena, valitse <em>Muista minut</em>-valinta kirjautuessasi. Tämä ei ole suositeltavaa, jos käytät foorumia jaetulta koneelta, esim. kirjastossa, nettikahvilassa tai koulun tietokoneluokassa. Jos et näe tätä valintaa, foorumin ylläpitäjä on estänyt tämän toiminnon käyttämisen.',
    'HELP_FAQ_LOGIN_AUTO_LOGOUT_QUESTION'	=> 'Miksi minut kirjataan ulos automaattisesti?',
    'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANSWER'	=> 'Tämän tapahtumiseen on useita syitä. Ensin, varmista että tunnuksesi ja salasanasi ovat oikein. Jos ne ovat, ota yhteyttä foorumin ylläpitäjään varmistaaksesi, että sinulla ei ole porttikieltoja. On myös mahdollista, että sivuston omistajalla on asetusvirhe heidän päässään ja heidän pitäisi korjata se.',
    'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_ANSWER'	=> 'On mahdollista, että ylläpitäjä on poistanut käyttäjätilisi käytöstä jostain syystä. Useat foorumit myös poistavat käyttäjiä, jotka eivät ole kirjoittaneet pitkään aikaan pienentääkseen tietokantansa kokoa. Jos näin on käynyt, yritä rekisteröityä uudelleen ja osallistu keskusteluun aktiivisemmin.',
    'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_QUESTION'	=> 'Rekisteröidyin joskus aiemmin, mutta en voi enää kirjautua sisään?!',
    'HELP_FAQ_LOGIN_CANNOT_LOGIN_QUESTION'	=> 'Miksi en voi kirjautua sisään?',
    'HELP_FAQ_LOGIN_CANNOT_REGISTER_ANSWER'	=> 'On mahdollista, että foorumin ylläpitäjä on poistanut rekisteröinnin käytöstä estääkseen uusia vierailijoita rekisteröitymästä. Foorumin ylläpitäjä on voinut myös asettaa porttikiellon IP-osoitteellesi tai estänyt valitsemasi käyttäjätunnuksen rekisteröinnin. Ota yhteyttä foorumin ylläpitäjään saadaksesi apua.',
    'HELP_FAQ_LOGIN_CANNOT_REGISTER_QUESTION'	=> 'Miksi en voi rekisteröityä?',
    'HELP_FAQ_LOGIN_COPPA_ANSWER'	=> 'COPPA, tai Children’s Online Privacy Protection Act of 1998, on yhdysvaltalainen laki, joka vaatii kaikkien verkkosivustojen, jotka mahdollisesti keräävät alle 13-vuotiailta tietoja, hankkia huoltajan kirjallisen luvan tietojen keräämiseen alle 13-vuotiaalta. Jos olet epävarma koskeeko tämä sinua rekisteröityvänä käyttäjänä tai verkkosivua jolle olet rekisteröitymässä, ota yhteyttä oikeudelliseen neuvonantajaan saadaksesi apua. Huomaa, että phpBB Limited ja tämän foorumin omistajat eivät voi antaa lakineuvontaa ja eivät ole yhteyshenkilöitä minkäänlaisissa lakiasioissa, lukuunottamatta kysymystä “Keneen minun tulee olla yhteydessä väärinkäytöstapauksissa tai lakiasioissa tähän foorumiin liittyen?”.',
    'HELP_FAQ_LOGIN_COPPA_QUESTION'	=> 'Mikä on COPPA?',
    'HELP_FAQ_LOGIN_DELETE_COOKIES_ANSWER'	=> '“Poista foorumin evästeet” poistaa evästeet, jotka ovat phpBB:n luomia. Ne tunnistavat sinut ja pitävät sinut kirjautuneena foorumille. Evästeet tarjoavat myös toimintoja, kuten luettujen seurantaa, jos ne ovat foorumin ylläpitäjän käyttöönottamia. Jos sinulla on sisään tai uloskirjautumisen kanssa ongelmia, foorumin evästeiden poistaminen voi auttaa.',
    'HELP_FAQ_LOGIN_DELETE_COOKIES_QUESTION'	=> 'Mitä “Poista foorumin evästeet” tekee?',
    'HELP_FAQ_LOGIN_LOST_PASSWORD_ANSWER'	=> 'Älä panikoi! Vaikka salasanaasi ei voida palauttaa, se voidaan asettaa uudelleen. Käy kirjautumissivulla ja klikkaa <em>Unohdin salasanani</em>. Seuraa ohjeita ja sinun pitäisi kohta pystyä kirjautumaan uudelleen.<br />Jos et pysty asettamaan salasanaasi uudelleen, ota yhteyttä foorumin ylläpitäjään.',
    'HELP_FAQ_LOGIN_LOST_PASSWORD_QUESTION'	=> 'Olen hukannut salasanani!',
    'HELP_FAQ_LOGIN_REGISTER_ANSWER'	=> 'Sinun ei välttämättä tarvitse, riippuu foorumin ylläpitäjästä, tarvitaanko foorumilla kirjoittamiseen rekisteröitymistä. Rekisteröityminen voi kuitenkin antaa sinulle lisää ominaisuuksia käyttöön, jotka eivät ole vieraiden käytettävissä. Näitä ovat mm. avatar-kuvan määrittely, yksityisviestit, sähköpostien lähettäminen muille käyttäjille, käyttäjäryhmien jäsenyys jne. Siihen menee aikaa vain muutamia hetkiä, joten se on suositeltavaa.',
    'HELP_FAQ_LOGIN_REGISTER_CONFIRM_ANSWER'	=> 'Tarkista ensin käyttäjätunnuksesi ja salasanasi. Jos ne ovat oikein, yksi kahdesta asiasta on saattanut tapahtua. Jos COPPA-tuki on käytössä ja määrittelit olevasi alle 13-vuotias rekisteröityessäsi, sinun tulee seurata saamiasi ohjeita. Jotkut foorumit vaativat myös uusien tunnusten aktivoinnin joko sinun itsesi toimesta tai ylläpitäjän toimesta ennen kuin voit kirjautua sisään. Tämä tieto kerrottiin rekisteröitymisen yhteydessä. Jos sinulle lähetettiin sähköpostia, seuraa ohjeita. Jos et saanut sähköpostia, olet saattanut antaa virheellisen sähköpostiosoitteen tai sähköpostit ovat saattaneet jäädä roskapostisuodattimeen. Jos olet varma, että antamasi sähköpostiosoite oli oikein, yritä ottaa yhteyttä foorumin ylläpitäjään.',
    'HELP_FAQ_LOGIN_REGISTER_CONFIRM_QUESTION'	=> 'Rekisteröidyin, mutta en voi kirjautua!',
    'HELP_FAQ_LOGIN_REGISTER_QUESTION'	=> 'Miksi minun pitää rekisteröityä?',

    'HELP_FAQ_PMS_CANNOT_SEND_ANSWER'	=> 'Tähän on kolme mahdollista syytä. Et ole rekisteröitynyt ja/tai kirjautunut sisään, foorumin ylläpitäjä on poistanut yksityisviestit käytöstä koko foorumilta tai foorumin ylläpitäjä on estänyt sinua lähettämästä yksityisviestejä. Ota yhteyttä foorumin ylläpitäjään saadaksesi lisätietoja.',
    'HELP_FAQ_PMS_CANNOT_SEND_QUESTION'	=> 'En voi lähettää yksityisviestejä!',
    'HELP_FAQ_PMS_SPAM_ANSWER'	=> 'Olemme pahoillamme siitä. Tämän foorumin sähköpostilomake sisältää ominaisuuksia, jotka yrittävät estää ja seurata käyttäjiä, jotka lähettävät sellaisia viestejä, joten ota yhteyttä foorumin ylläpitäjään ja lähetä hänelle täysi kopio saamastasi sähköpostista. On tärkeää, että se sisältää kaikki otsaketiedot sähköpostista, jotka sisältävät viestin lähettäjän tiedot. Foorumin ylläpitäjä voi sitten toimia tarpeen mukaan.',
    'HELP_FAQ_PMS_SPAM_QUESTION'	=> 'Olen saanut roskapostia tai väärinkäytöksiä sisältäviä viestejä tältä foorumilta!',
    'HELP_FAQ_PMS_UNWANTED_ANSWER'	=> 'Voit automaattisesti poistaa yksityisviestit tietyltä käyttäjältä käyttämällä käyttäjänhallinnan viestisääntöjä. Jos saat väärinkäytöksiä sisältäviä viestejä tietyltä käyttäjältä, voit raportoida viestit valvojille. Heillä on oikeudet estää käyttäjiä lähettämästä yksityisviestejä.',
    'HELP_FAQ_PMS_UNWANTED_QUESTION'	=> 'Saan yksityisviestejä joita en halua!',

    'HELP_FAQ_POSTING_BUMP_ANSWER'	=> 'Klikkaamalla “Tönaise viestiä” -linkkiä, kun katselet sitä, voit “tönäistä” viestiketjua alueen ensimmäisen sivun yläosaan. Jos et näe tätä, viestiketjujen tönäiseminen ei ole sallittua tai aika joka viestiketjujen tönäisemisen välillä vaaditaan ei ole vielä kulunut. On myös mahdollista nostaa viestiketjua vastaamalla siihen, mutta varmista että noudatat foorumin sääntöjä jos päätät tehdä niin.',
    'HELP_FAQ_POSTING_BUMP_QUESTION'	=> 'Miten tönäisen viestiketjuani?',
    'HELP_FAQ_POSTING_CREATE_ANSWER'	=> 'Aloittaaksesi uuden viestiketjun alueella, klikkaa "Uusi Aihe". Vastataksesi viestiketjuun klikkaa "Vastaa Viestiin". Viestien kirjoittaminen voi vaatia rekisteröitymisen. Lista sinun oikeuksistasi alueella on nähtävillä alueen ja viestiketjun alalaidassa. Esimerkiksi: Voit kirjoittaa uusia viestejä, Voit lähettää liitetiedostoja, jne.',
    'HELP_FAQ_POSTING_CREATE_QUESTION'	=> 'Miten luon uuden viestiketjun tai lähetän vastauksen?',
    'HELP_FAQ_POSTING_DRAFT_ANSWER'	=> 'Tämän avulla on mahdollista tallentaa luonnoksia, jotka voit kirjoittaa loppuun ja lähettää myöhemmin. Avataksesi tallennetun luonnoksen, vieraile komissa asetuksissa.',
    'HELP_FAQ_POSTING_DRAFT_QUESTION'	=> 'Mitä “Tallenna”-painike viestin kirjoittamisessa tekee?',
    'HELP_FAQ_POSTING_EDIT_DELETE_ANSWER'	=> 'Jos et ole foorumin ylläpitäjä tai valvoja, voit muokata vain omia viestejäsi. Voit muokata viestiä klikkaamalla muokkaa-painiketta haluamassasi viestissä. Joskus painike toimii vain tietyn ajan viestin luomisen jälkeen.  Jos joku on jo vastannut viestiin, löydät viestiketjuun palatessasi pienen tekstin viestisi alla, joka kertoo viestin muokkauskertojen lukumäärän ja muokkausajan. Tämä näkyy vain jos joku on vastannut viestiin. Se ei näy, jos valvoja tai ylläpitäjä muokkaa viestiä, mutta he saattavat jättää pienen huomautuksen viestin muokkaamisen syistä niin halutessaan. Huomaa, että normaalit käyttäjät eivät voi poistaa viestejä, jos niihin on joku vastannut.',
    'HELP_FAQ_POSTING_EDIT_DELETE_QUESTION'	=> 'Miten muokkaan tai poistan viestejä?',
    'HELP_FAQ_POSTING_FORUM_RESTRICTED_ANSWER'	=> 'Jotkin alueet saattavat olla rajattu vain tietyille käyttäjille tai ryhmille. Katsoaksesi, lukeaksesi, kirjoittaaksesi tai muiden toimintojen tekeminen alueella saattaa tarvita erikoisoikeuksia. Jos haluat oikeudet, ota yhteyttä foorumin valvojaan tai ylläpitäjään.',
    'HELP_FAQ_POSTING_FORUM_RESTRICTED_QUESTION'	=> 'Miksi en pääse alueelle?',
    'HELP_FAQ_POSTING_NO_ATTACHMENTS_ANSWER'	=> 'Liitetiedostojen oikeudet annetaan alueen, ryhmän tai käyttäjän mukaan. Foorumin ylläpitäjä ei välttämättä ole sallinut liitetiedostojen liittämistä tietyllä alueella tai vain tietyt ryhmät saattavat pystyä liittämään tiedostoja. Ota yhteyttä foorumin ylläpitäjään jos et tiedä miksi et voi lisätä liitetiedostoja.',
    'HELP_FAQ_POSTING_NO_ATTACHMENTS_QUESTION'	=> 'Miksi en voi liittää tiedostoja?',
    'HELP_FAQ_POSTING_POLL_ADD_ANSWER'	=> 'Kyselyn vastausvaihtoehtojen määrä on foorumin ylläpitäjän määrittelemä. Jos tarvitset enemmän vaihtoehtoja kuin on sallittu, ota yhteyttä foorumin ylläpitäjään.',
    'HELP_FAQ_POSTING_POLL_ADD_QUESTION'	=> 'Miksi en voi lisätä vastausvaihtoehtoja kyselyyn?',
    'HELP_FAQ_POSTING_POLL_CREATE_ANSWER'	=> 'Kun kirjoitat uuta viestiketjua tai muokkaat viestiketjun ensimmäistä viestiä, klikkaa "Luo äänestys"-välilehteä viestilomakkeen alapuolella. Jos et näe tätä välilehteä, sinulla ei ole tarvittavia oikeuksia äänestysten luomiseen. Syötä otsikko ja ainakin kaksi vaihtoehtoa niille varattuihin kenttiin. Varmista että jokainen vaihtoehto on omalla rivillään tekstikentässä. Voit myös määritellä kuinka monta vaihtoehtoa käyttäjät voivat valita kohdasta You can also set the number of options users may select during voting under “Kuinka monta vaihtoehtoa käyttäjä voi valita”, äänestyksen kesto päivinä (0 kestää loputtomasti) ja viimeisenä voit antaa käyttäjille mahdollisuuden muuttaa ääntään.',
    'HELP_FAQ_POSTING_POLL_CREATE_QUESTION'	=> 'Kuinka luon äänestyksen?',
    'HELP_FAQ_POSTING_POLL_EDIT_ANSWER'	=> 'Kuten viestien kanssa, äänestyksiä voi muokata vain alkuperäinen lähettäjä, valvoja tai ylläpitäjä. Muokataksesi äänestystä, muokkaa ensimmäistä viestiä viestiketjussa. Äänestys on aina kytketty viestiketjun ensimmäiseen viestiin. Jos kukaan ei ole vielä äänestänyt, käyttäjät voivat poistaa äänestyksen tai muokata mitä tahansa äänestyksen asetusta. Jos käyttäjät ovat kuitenkin jo äänestäneet, vain valvojat tai ylläpitäjät voivat muokata tai poistaa sen. Tämä estää äänestysvaihtoehtojen vaihtamisen kesken äänestyksen.',
    'HELP_FAQ_POSTING_POLL_EDIT_QUESTION'	=> 'Kuinka muokkaan tai poistan äänestyksen?',
    'HELP_FAQ_POSTING_QUEUE_ANSWER'	=> 'Foorumin ylläpitäjä on päättänyt, että viestit kyseiselle alueelle tulee tarkastaa ennen lähetystä. On myös mahdollista, että foorumin ylläpitäjä on siirtänyt sinut ryhmään, jonka viestit tarkistetaan ennen lähettämistä. Ota yhteyttä foorumin ylläpitäjään saadaksesi lisätietoja.',
    'HELP_FAQ_POSTING_QUEUE_QUESTION'	=> 'Miksi minun viestini tarvitsee hyväksynnän?',
    'HELP_FAQ_POSTING_REPORT_ANSWER'	=> 'Jos foorumin ylläpitäjä on sallinut sen, sinun pitäisi nähdä raportointipainike viestin yhteydessä. Tämän klikkaaminen vie sinut viestin raportoinnin vaiheiden läpi.',
    'HELP_FAQ_POSTING_REPORT_QUESTION'	=> 'Miten ilmoitan viestin valvojalle?',
    'HELP_FAQ_POSTING_SIGNATURE_ANSWER'	=> 'Lisätäksesi allekirjoituksen viestiisi, sinun täytyy ensin luoda sellainen omissa asetuksissa. Kun olet luonut sellaisen, voit valita <em>Lisää allekirjoitus</em>-valinnan viestin kirjoituslomakkeessa. Voit myös lisätä allekirjoituksen automaattisesti aina kaikkiin viesteihisi tekemällä valinnan omissa asetuksissa. Jos teet niin, voit silti estää allekirjoituksen liittämisen yksittäiseen viestiin poistamalla valinnan viestinkirjoituslomakkeessa.',
    'HELP_FAQ_POSTING_SIGNATURE_QUESTION'	=> 'Miten liitän allekirjoituksen viestiini?',
    'HELP_FAQ_POSTING_WARNING_ANSWER'	=> 'Jokaisen foorumin ylläpitäjällä on omat säännöt heidän sivustollensa. Jos olet rikkonut sääntöä, voit saada varoituksen. Huomioi, että tämä on foorumin ylläpitäjän päätös ja phpBB Limitedillä ei ole sivustolla annettavien varoitusten kanssa mitään tekemistä. Ota yhteyttä foorumin ylläpitäjään, jos olet epävarma annetun varoituksen syystä.',
    'HELP_FAQ_POSTING_WARNING_QUESTION'	=> 'Miksi sain varoituksen?',

    'HELP_FAQ_SEARCH_BLANK_ANSWER'	=> 'Hakusi palautti liian monta tulosta ja palvelin ei pystynyt käsittelemään niitä. Käytä “Tarkennettua hakua” ja ole tarkempi hakuehdoissa ja alueissa joilta etsit.',
    'HELP_FAQ_SEARCH_BLANK_QUESTION'	=> 'Miksi haku johti tyhjään sivuun!?',
    'HELP_FAQ_SEARCH_FORUM_ANSWER'	=> 'Syötä hakutermi hakukenttään, joka sijaitsee etusivulla, alueen tai viestiketjun sivulla. Tarkennettuun hakuun pääset klikkaamalla “Tarkennettu haku”-linkkiä joka on saatavilla jokaisella sivulla. Haun sijainti voi riippua käyttämästäsi tyylistä.',
    'HELP_FAQ_SEARCH_FORUM_QUESTION'	=> 'Miten etsin alueelta tai alueilta?',
    'HELP_FAQ_SEARCH_MEMBERS_ANSWER'	=> 'Vieraile “Käyttäjät”-sivulla ja klikkaa “Etsi käyttäjä”-linkkiä.',
    'HELP_FAQ_SEARCH_MEMBERS_QUESTION'	=> 'Miten etsin käyttäjiä?',
    'HELP_FAQ_SEARCH_NO_RESULT_ANSWER'	=> 'Hakusi oli todennäköisesti liian epämääräinen ja sisälsi useita yleisiä termejä, joita phpBB ei ole indeksoinut. Ole tarkempi ja käytä Tarkennetun haun valintoja.',
    'HELP_FAQ_SEARCH_NO_RESULT_QUESTION'	=> 'Miksi hakuni ei löytänyt mitään?',
    'HELP_FAQ_SEARCH_OWN_ANSWER'	=> 'Omat viestisi näet klikkaamalla “Katso omia viestejäsi”-linkkiä omissa asetuksissa tai klikkaamalla “Etsi käyttäjän viesteistä”-linkkiä omalla profiilisivullasi tai klikkaamalla “Pikalinkit”-valikkoa foorumin ylälaidassa. Etsiäksesi omia viestiketjuja, käytä tarkennettua hakua ja täytä sen hakuehdot haluamallasi tavalla.',
    'HELP_FAQ_SEARCH_OWN_QUESTION'	=> 'Miten löydän omat viestini ja viestiketjuni?',

    'HELP_FAQ_USERSETTINGS_AVATAR_ANSWER'	=> 'Viestejä katsottaessa käyttäjänimen vieressä saattaa näkyä kaksi kuvaa. Yksi niistä voi olla arvonimeesi liitetty kuva esimerkiksi tähtien, laatikoiden tai pisteiden muodossa viestimäärästäsi tai statuksestasi riippuen. Toinen, yleensä isompi kuva on avatar ja on yleensä uniikki tai henkilökohtainen jokaisella käyttäjällä.',
    'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_ANSWER'	=> 'Omissa asetuksissa, “Profiilin” alla, voit lisätä avataren käyttämällä jotain neljästä tavasta: Gravatar, galleriasta, käyttää kuvaa muualta tai ladata kuvan. Foorumin ylläpitäjä päättää otetaanko avataret käyttöön ja valitsee mitkä avatarien käyttöönottotavat sallitaan. Jos et voi käyttää avataria, ota yhteyttä foorumin ylläpitäjään.',
    'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_QUESTION'	=> 'Miten asetan avataren?',
    'HELP_FAQ_USERSETTINGS_AVATAR_QUESTION'	=> 'Mitä kuvia on käyttäjänimeni vieressä?',
    'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_ANSWER'	=> 'Jos olet rekisteröitynyt käyttäjä, kaikki asetuksesi tallennetaan foorumin tietokantaan. Muokataksesi niitä, vieraile omissa asetuksissa, johon vievä linkki löytyy yleensä klikkaamalla käyttäjänimeäsi foorumin sivujen ylälaidassa. Tätä kautta voit muokata asetuksiasi ja valintojasi.',
    'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_QUESTION'	=> 'Miten muutan asetuksiani?',
    'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_ANSWER'	=> 'Vain rekisteröityneet käyttäjät voivat lähettää sähköpostia muille käyttäjille sisäänrakennetulla sähköpostilomakkeella ja vain jos ylläpitäjä sallii tämän ominaisuuden. Kirjautuminen vaaditaan, jotta tunnistautumattomat käyttäjät eivät voisi väärinkäyttää sähköpostijärjestelmää.',
    'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_QUESTION'	=> 'Kun klikkaan sähköpostilinkkiä, minua pyydetään kirjautumaan?',
    'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_ANSWER'	=> 'Omissa asetuksissasi, “Asetukset”-välilehdellä, löydät mahdollisuuden valita <em>Piilota paikallaolo</em>. Ottamalla tämän asetuksen käyttöön näyt vain ylläpitäjille, valvojille ja itsellesi. Sinut lasketaan piilossa oleviin käyttäjiin.',
    'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_QUESTION'	=> 'Kuinka estän käyttäjänimeni näkymisen paikalla olevissa käyttäjissä?',
    'HELP_FAQ_USERSETTINGS_LANGUAGE_ANSWER'	=> 'Joko ylläpitäjä ei ole asentanut kielellesi kielipakettia tai kukaan ei ole kääntänyt tätä foorumia kielellesi. Kokeile pyytää foorumin ylläpitäjältä, josko hän voisi asentaa tarvitsemasi kielipaketin. Jos kielipakettia ei ole olemassa, voit luoda uuden käännöksen. Lisätietoja löytyy <a href="https://www.phpbb.com/">phpBB</a>&reg;:n sivuilta.',
    'HELP_FAQ_USERSETTINGS_LANGUAGE_QUESTION'	=> 'Kieleni ei ole valittavana!',
    'HELP_FAQ_USERSETTINGS_RANK_ANSWER'	=> 'Arvonimet, jotka näkyvät käyttäjänimesi alla osoittavat kirjoittamiesi viestien määrän tai tietyt käyttäjät, kuten ylläpitäjät tai valvojat. Yleensä et voi vaihtaa minkään arvonimen tekstiä, sillä nämä ovat ylläpitäjän määrittelemiä. Älä kirjoita viestejä vain parantaaksesi arvonimeäsi. Useimmat foorumit eivät siedä tätä ja valvojat tai ylläpitäjät voivat yksinkertaisesti pienentää viestilaskuriasi.',
    'HELP_FAQ_USERSETTINGS_RANK_QUESTION'	=> 'Mikä on arvonimi ja miten vaihdan sen?',
    'HELP_FAQ_USERSETTINGS_SERVERTIME_ANSWER'	=> 'Jos olet varmasti valinnut oikean aikavyöhykkeen ja aika on silti väärin, on palvelimen kellonaika väärin. Ota yhteyttä ylläpitäjään korjataksesi ongelman.',
    'HELP_FAQ_USERSETTINGS_SERVERTIME_QUESTION'	=> 'Vaihdoin aikavyöhykkeen ja kellonaika on silti väärin!',
    'HELP_FAQ_USERSETTINGS_TIMEZONE_ANSWER'	=> 'On mahdollista, että näytetty aika on eri aikavyöhykkeeltä kuin se jossa itse olet. Tässä tapauksessa valitse omista asetuksista oma aikavyöhykkeesi, esim. Lontoo, Pariisi, New York, Sidney, jne. Huomaathan, että aikavyöhykkeen vaihtaminen, kuten monet muutkin asetukset ovat vain rekisteröityneille käyttäjille. Jos et ole rekisteröitynyt, tämä on hyvä aika tehdä niin.',
    'HELP_FAQ_USERSETTINGS_TIMEZONE_QUESTION'	=> 'Ajat ovat väärin!',
));
