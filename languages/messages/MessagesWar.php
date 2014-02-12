<?php
/** Waray (Winaray)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Estudyante
 * @author Harvzsf
 * @author JinJian
 * @author Kaganer
 * @author Wiki indio
 * @author לערי ריינהארט
 */

$namespaceNames = array(
	NS_MEDIA            => 'Medya',
	NS_SPECIAL          => 'Pinaurog',
	NS_TALK             => 'Hiruhimangraw',
	NS_USER             => 'Gumaramit',
	NS_USER_TALK        => 'Hiruhimangaw_hiton_gumaramit',
	NS_PROJECT_TALK     => 'Hiruhimangraw_hiton_$1',
	NS_FILE             => 'Paypay',
	NS_FILE_TALK        => 'Hiruhimangraw_hiton_paypay',
	NS_MEDIAWIKI        => 'MedyaWiki',
	NS_MEDIAWIKI_TALK   => 'Hiruhimangraw_hiton_MedyaWiki',
	NS_TEMPLATE         => 'Batakan',
	NS_TEMPLATE_TALK    => 'Hiruhimangraw_hiton_batakan',
	NS_HELP             => 'Bulig',
	NS_HELP_TALK        => 'Hiruhimangaw_hiton_bulig',
	NS_CATEGORY         => 'Kaarangay',
	NS_CATEGORY_TALK    => 'Hiruhimangraw_hiton_kaarangay',
);

$namespaceAliases = array(
	'Fayl'                          => NS_FILE,
	'Hiruhimangraw_hiton_fayl'      => NS_FILE_TALK,
	'Hiruhimangraw_hiton_MediaWiki' => NS_MEDIAWIKI_TALK,
);

$specialPageAliases = array(
	'Allpages'                  => array( 'NgatananngaPakli' ),
	'Categories'                => array( 'Mga_kaarangay' ),
	'Contributions'             => array( 'Mga_ámot' ),
	'Longpages'                 => array( 'HaglabangamgaPakli' ),
	'Mostlinked'                => array( 'Gidamo-iHinSumpay' ),
	'Movepage'                  => array( 'BalhinaAnPakli' ),
	'Mypage'                    => array( 'AkonPakli' ),
	'Mytalk'                    => array( 'AkonHiruhimangraw' ),
	'Newpages'                  => array( 'Bag-ongamgaPakli' ),
	'Randompage'                => array( 'Bisan_Ano', 'BisanAnongaPakli' ),
	'Search'                    => array( 'Bilnga' ),
	'Shortpages'                => array( 'HaglipotngamgaPakli' ),
	'Specialpages'              => array( 'MgaIspisyalngaPakli' ),
	'Statistics'                => array( 'Mga_Estadistika' ),
	'Upload'                    => array( 'Pagkarga' ),
	'Version'                   => array( 'Bersyon' ),
	'Watchlist'                 => array( 'Angay_Timan-an' ),
	'Whatlinkshere'             => array( 'AnoAnNasumpayDinhi' ),
	'Withoutinterwiki'          => array( 'Warayinterwiki' ),
);

$messages = array(
# User preference toggles
'tog-underline' => 'Bagisa ha ilarom an mga sumpay:',
'tog-hideminor' => 'Tago-a an mga gagmay nga pagliwat ha mga bag-o pa la nga mga kabag-ohan',
'tog-hidepatrolled' => 'Tago-a in mga gin-patrol o binantayan nga mga pagliwat ha mga dipala naiha nga mga kabag-ohan',
'tog-newpageshidepatrolled' => 'Tago-a an mga gin-patrol o binantayan nga mga pakli tikang han talaan hin bag-o nga pakli',
'tog-extendwatchlist' => 'Padako-a an angay timan-an agod makita an tanan nga kabag-ohan, diri la an gibag-ohi',
'tog-usenewrc' => 'Grupo nga mga pagbag-o kada pakli ha kababag-o pala ngan mga barantayon nga talaan',
'tog-numberheadings' => 'Auto-nga-ihap nga mga pagngaran',
'tog-showtoolbar' => 'Igpakita an edit toolbar',
'tog-editondblclick' => 'Igliwat in mga pakli ha doble nga klik',
'tog-editsectiononrightclick' => 'Tugoti in pagliwat hin seksyon ha pag klik-ha-tuo dida hin mga ngaran o titulo hin seksyon',
'tog-rememberpassword' => 'Hinumdomi an akon pan-sakob dinhi nga browser (para hin maximum nga $1 {{PLURAL:$1|nga adlaw|nga mga adlaw}})',
'tog-watchcreations' => 'Igdugang in mga pakli nga akon ginhimo ngan mga paypay nga akon ginkarga ngadto han akon angay timan-an',
'tog-watchdefault' => 'Igdugang in mga pakli ngan mga paypay nga akon ginliwat ngadto han akon angay timan-an',
'tog-watchmoves' => 'Igdugang in mga pakli nga mga paypay nga akon ginpamalhin ngadto han akon angay timan-an',
'tog-watchdeletion' => 'Igdugang in mga pakli ngan mga paypay nga akon ginpamara ngadto han akon angay timan-an',
'tog-minordefault' => 'Tigamni an ngatanan nga mga pagliwat nga gudti hin default',
'tog-previewontop' => 'Igpakita in prevista o pan-ugsa-nga-lantaw ugsa hiton pagliwat nga kahon',
'tog-previewonfirst' => 'Igpakita in prevista o pan-ugsa-nga-lantaw ha syahan nga pagliwat',
'tog-enotifwatchlistpages' => 'Ig-e-mail ako kun may pakli o paypay ha akon gintitiman-an nga gin-iba',
'tog-enotifusertalkpages' => 'Ig-e-mail ako kun may nagbag-o han akon pakli-himangrawon',
'tog-enotifminoredits' => 'Ig-e-mail liwat ako hin mga gudti nga mga pagliwat hin mga pakli ngan mga paypay',
'tog-enotifrevealaddr' => 'Igpakita an akon e-mail nga adres ha mga e-mail hin pagsumat',
'tog-shownumberswatching' => 'Igpakita an ihap han mga nangingita nga mga nagamit',
'tog-oldsig' => 'Aada nga pirma:',
'tog-fancysig' => 'Tratuha it pirma komo uska wikitext (nga waray automatiko nga sumpay)',
'tog-uselivepreview' => 'Gamita an buhi nga pahiuna nga pagawas (eksperimental)',
'tog-forceeditsummary' => 'Pasabti ako kun waray ko ginsurat ha dalikyat-nga-tigaman han pagliwat (edit summary)',
'tog-watchlisthideown' => 'Tago-a an akon mga ginliwat tikang han angay timan-an',
'tog-watchlisthidebots' => 'Tago-a an ginliwat hin bot tikang han angay timan-an',
'tog-watchlisthideminor' => 'Tago-a an mga gagmay nga pagliwat tikang han angay timan-an',
'tog-watchlisthideliu' => 'Igatag an mga ginliwat han naka log-in nga mga gumaramit tikang ha gintitiman-an',
'tog-watchlisthideanons' => 'Igtago an mga ginliwat han mga waray nagpakilala nga nagamit tikang ha gintitiman-an',
'tog-watchlisthidepatrolled' => 'Igatag an mga pinatrolya nga mga pagliwat tikang ha angay timan-an',
'tog-ccmeonemails' => 'Padad-i ak hin mga kopya hin mga email nga akon ginpapadara ha iba nga mga gumaramit',
'tog-diffonly' => 'Ayaw igpakita an sulod han pakli ha ilarom han pagkakaiba',
'tog-showhiddencats' => 'Igpakita an mga tinago nga mga kaarangay',
'tog-norollbackdiff' => 'Iglat-ang an kaiban kahuman himoa an libot-pabalik',
'tog-useeditwarning' => 'Pasabti ako kun nabaya ako hin ginliwat ng pakli nga waray katipig an mga pagbag-o',
'tog-prefershttps' => 'Pirmihi paggamit hin segurado nga koneksyon kun nakalog-in',

'underline-always' => 'Pirme',
'underline-never' => 'Diri',
'underline-default' => 'An panmutos o pandalikyat nga aada-nga-daan',

# Font style option in Special:Preferences
'editfont-style' => 'Estilo hin font ha lugar hin pagliwat',
'editfont-default' => 'Pandalikyat nga default',
'editfont-monospace' => 'Monospaced nga font',
'editfont-sansserif' => 'Sans-serif nga agi',
'editfont-serif' => 'Serif nga agi',

# Dates
'sunday' => 'Dominggo',
'monday' => 'Lunes',
'tuesday' => 'Martes',
'wednesday' => 'Miyerkoles',
'thursday' => 'Huwebes',
'friday' => 'Biyernes',
'saturday' => 'Sabado',
'sun' => 'Dom',
'mon' => 'Lun',
'tue' => 'Mar',
'wed' => 'Mi',
'thu' => 'Hu',
'fri' => 'Bi',
'sat' => 'Sab',
'january' => 'Enero',
'february' => 'Pebrero',
'march' => 'Marso',
'april' => 'Abril',
'may_long' => 'Mayo',
'june' => 'Hunyo',
'july' => 'Hulyo',
'august' => 'Agosto',
'september' => 'Septyembre',
'october' => 'Oktubre',
'november' => 'Nobyembre',
'december' => 'Disyembre',
'january-gen' => 'han Enero',
'february-gen' => 'han Pebrero',
'march-gen' => 'han Marso',
'april-gen' => 'han Abril',
'may-gen' => 'han Mayo',
'june-gen' => 'han Hunyo',
'july-gen' => 'han Hulyo',
'august-gen' => 'han Agosto',
'september-gen' => 'han Septyembre',
'october-gen' => 'han Oktubre',
'november-gen' => 'han Nobyembre',
'december-gen' => 'han Disyembre',
'jan' => 'Ene',
'feb' => 'Peb',
'mar' => 'Mar',
'apr' => 'Abr',
'may' => 'May',
'jun' => 'Hun',
'jul' => 'Hul',
'aug' => 'Ago',
'sep' => 'Sep',
'oct' => 'Okt',
'nov' => 'Nob',
'dec' => 'Dis',
'january-date' => 'Enero $1',
'february-date' => 'Pebrero $1',
'march-date' => 'Marso $1',
'april-date' => 'Abril $1',
'may-date' => 'Mayo $1',
'june-date' => 'Hunyo $1',
'july-date' => 'Hulyo $1',
'august-date' => 'Agosto $1',
'september-date' => 'Septyembre $1',
'october-date' => 'Oktubre $1',
'november-date' => 'Nobyembre $1',
'december-date' => 'Disyembre $1',

# Categories related messages
'pagecategories' => '{{PLURAL:$1|Kaarangay|Mga kaarangay}}',
'category_header' => 'Mga pakli ha kaarangay nga "$1"',
'subcategories' => 'Mga ubos-nga-kaarangay',
'category-media-header' => 'Media ha kaarangay nga "$1"',
'category-empty' => "''Ini nga kaarangay ha yana waray mga pakli o media.''",
'hidden-categories' => '{{PLURAL:$1|Tinago nga kaarangay|Tinago nga mga kaarangay}}',
'hidden-category-category' => 'Tinago nga mga kaarangay',
'category-subcat-count' => '{{PLURAL:$2|Ini nga kaarangay mayda amo la nga nasunod nga ubos-nga-kaarangay.|Ini nga kaarangay mayda han mga nasunod nga {{PLURAL:$1|ubos-nga-kaarangay|$1 nga mga ubos-nga-kaarangay}}, tikang hin $2 nga kabug-osan.}}',
'category-subcat-count-limited' => 'Ini nga kaarangay mayda han nasunod nga {{PLURAL:$1|ubos-nga-kaarangay|$1 nga mga ubos-nga-kaarangay}}.',
'category-article-count' => '{{PLURAL:$2|Ini nga kaarangay mayda han amo la nga nasunod nga pakli.|An mga nasunod nga {{PLURAL:$1|ka pakli|$1 ka mga pakli}} aada hini nga kaarangay, tikang hin $2 nga kabug-osan.}}',
'category-article-count-limited' => 'An mga nasunod nga {{PLURAL:$1|ka pakli|$1 ka mga pakli aada}} han yana nga kaarangay.',
'category-file-count' => '{{PLURAL:$2|Ini nga kaarangay mayda hin amo la nga fayl.|An mga nasunod nga {{PLURAL:$1|ka fayl|$1 ka mga fayl aada}} han hini nga kaarangay, tikang hin $2 nga kabug-osan.}}',
'category-file-count-limited' => 'An mga nasunod nga {{PLURAL:$1|ka fayl|$1 ka mga faly aada}} han yana nga kaarangay.',
'listingcontinuesabbrev' => 'pdyn.',
'index-category' => 'Mga nakatudlokan nga pagkli',
'noindex-category' => 'Mga diri nakatudlokan nga pagkli',
'broken-file-category' => 'Mga pakli nga mayda utod nga mga sumpay hin paypay',

'about' => 'Mahitungod han',
'article' => 'Pakli hin sulod',
'newwindow' => '(nabuklad hin bag-o nga tamboan o bintana)',
'cancel' => 'Pasagdi',
'moredotdotdot' => 'Damo pa nga…',
'morenotlisted' => 'Diri kompleto ini nga listahan.',
'mypage' => 'Pakli',
'mytalk' => 'Mga akon paghingay',
'anontalk' => 'Paghingay para hini nga IP',
'navigation' => 'Paglayag',
'and' => '&#32;ngan',

# Cologne Blue skin
'qbfind' => 'Bilnga',
'qbbrowse' => 'Igdalikyat',
'qbedit' => 'Igliwat',
'qbpageoptions' => 'Ini nga pakli',
'qbmyoptions' => 'Akon mga pakli',
'faq' => 'AGG',
'faqpage' => 'Project:AGG',

# Vector skin
'vector-action-addsection' => 'Igdugang hin himangrawon',
'vector-action-delete' => 'Para-a',
'vector-action-move' => 'Balhina',
'vector-action-protect' => 'Panalipda',
'vector-action-undelete' => 'Igbalik an ginpara',
'vector-action-unprotect' => 'Liwani an panalipod',
'vector-simplesearch-preference' => 'Ginpadulot an yinano nga pamiling nga kahon (Panit vector la)',
'vector-view-create' => 'Himo-a',
'vector-view-edit' => 'Igliwat',
'vector-view-history' => 'Kitaa an kaagi',
'vector-view-view' => 'Basaha',
'vector-view-viewsource' => 'Kitaa an ginkuhaan',
'actions' => 'Mga buhat',
'namespaces' => "Mga ngaran-lat'ang",
'variants' => 'Mga pagkadirudilain',

'navigation-heading' => 'Menu hit nabigasyon',
'errorpagetitle' => 'Sayop',
'returnto' => 'Balik ngadto ha $1.',
'tagline' => 'Tikang ha {{SITENAME}}',
'help' => 'Bulig',
'search' => 'Bilnga',
'searchbutton' => 'Bilnga',
'go' => 'Kadto-a',
'searcharticle' => 'Kadto-a',
'history' => 'Kaagi han pakli',
'history_short' => 'Kaagi',
'updatedmarker' => 'ginbag-ohan tikang han akon urhi nga pagbisita',
'printableversion' => 'Maipapatik nga bersyon',
'permalink' => 'Sumpay nga unob',
'print' => 'Igpatik',
'view' => 'Kitaa',
'edit' => 'Igliwat',
'create' => 'Himo-a',
'editthispage' => 'Igliwat ini nga pakli',
'create-this-page' => 'Himo-a ini nga pakli',
'delete' => 'Para-a',
'deletethispage' => 'Para-a ini nga pakli',
'undeletethispage' => 'Igbalik an ini nga pakli nga napara',
'undelete_short' => 'Igkansela an pagpara {{PLURAL:$1|usa nga pagliwat|$1 nga mga pagliwat}}',
'viewdeleted_short' => '{{PLURAL:$1|usa nga ginpara nga pagliwat|$1 ka ginpara nga mga pagliwat}}',
'protect' => 'Panalipdi',
'protect_change' => 'balyo-a',
'protectthispage' => 'Panalipdi ini nga pakli',
'unprotect' => 'Liwani an panalipod',
'unprotectthispage' => 'Kuhaa an panalipod hini nga pakli',
'newpage' => 'Bag-o nga pakli',
'talkpage' => 'Pakighimangraw hiunong hini nga pakli',
'talkpagelinktext' => 'Hiruhimangraw',
'specialpage' => 'Ispisyal nga Pakli',
'personaltools' => 'Mga pankalugaring nga garamiton',
'postcomment' => 'Bag-o nga bahin',
'articlepage' => 'Kitaa in may sulod nga pakli',
'talk' => 'Hiruhimangraw',
'views' => 'Mga paglantaw',
'toolbox' => 'Mga higamit',
'userpage' => 'Kitaa in pakli hin gumaramit',
'projectpage' => 'Kitaa in pakli hin proyekto',
'imagepage' => 'Kitaa in pakli hin fayl',
'mediawikipage' => 'Kitaa in pakli hin mensahe',
'templatepage' => 'Kitaa in pakli hin plantilya',
'viewhelppage' => 'Kitaa in pakli hin bulig',
'categorypage' => 'Kitaa in pakli hin kaarangay',
'viewtalkpage' => 'Kitaa in hiruhimangraw',
'otherlanguages' => 'Ha iba nga mga yinaknan',
'redirectedfrom' => '(Ginredirekta tikang ha $1)',
'redirectpagesub' => 'Redirek nga pakli',
'lastmodifiedat' => 'Ini nga pakli kataposan ginliwat dida han $1, han $2.',
'viewcount' => 'Ini nga pakli ginkanhi hin {{PLURAL:$1|makausa|$1 ka beses}}.',
'protectedpage' => 'Ginpanalipdan nga pakli',
'jumpto' => 'Laktaw ngadto ha:',
'jumptonavigation' => 'paglayag',
'jumptosearch' => 'bilnga',
'view-pool-error' => 'Pasayloa, an mga server diri na kaya yana nga takna.
Damo nga nagamit in gusto sinmulod hini nga pakli.
Alayon paghulat makadali san-o ka inmutro pagsulod hin nga pakli utro.

$1',
'pool-timeout' => 'An pagpaundang-hin-oras in naghuhulat hin trangka',
'pool-queuefull' => 'Puno an katitirok nga pila',
'pool-errorunknown' => 'Waray kasabti nga kasaypanan',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage).
'aboutsite' => 'Mahitungod han {{SITENAME}}',
'aboutpage' => 'Project:Mahitungod han',
'copyright' => 'An sulod mabiblingan ha ilarom han $1 antes may-ada pasabot.',
'copyrightpage' => '{{ns:project}}:Mga kopirayt',
'currentevents' => 'Mga panhitabo',
'currentevents-url' => 'Project:Mga panhitabo',
'disclaimers' => 'Mga Disclaimer',
'disclaimerpage' => 'Project:Kasahiran nga disclaimer',
'edithelp' => 'Bulig hin pagliwat',
'helppage' => 'Help:Sulod',
'mainpage' => 'Syahan nga Pakli',
'mainpage-description' => 'Syahan nga Pakli',
'policy-url' => 'Project:Polisiya',
'portal' => 'Ganghaan han Komunidad',
'portal-url' => 'Project:Ganghaan han Komunidad',
'privacy' => 'Polisiya hin pribasidad',
'privacypage' => 'Project:Polisiya hin pribasidad',

'badaccess' => 'Pagtugot nga sayop',
'badaccess-group0' => 'Diri ka gintutugutan pagbuhat han buruhaton nga imo ginhangyo.',
'badaccess-groups' => 'An buruhaton nga imo ginhangyo gintutugotan la ha mga nágámit {{PLURAL:$2|han grupo|hin usa han mga grupo}}: $1.',

'versionrequired' => 'Kinahanglan an Bersion $1 han MediaWiki',
'versionrequiredtext' => 'Kinahanglan an Bersyon $1 han MediaWiki ha paggamit hini nga pakli.  Kitaa an [[Special:Version|bersyon nga pakli]].',

'ok' => 'OK',
'pagetitle' => '$1 - {{SITENAME}}',
'pagetitle-view-mainpage' => '{{SITENAME}}',
'retrievedfrom' => 'Ginkuha tikang ha "$1"',
'youhavenewmessages' => 'Mayda ka $1 ($2).',
'youhavenewmessagesfromusers' => 'May-ada ka $1 tikang ha {{PLURAL:$3|iba nga gumaramit|$3 mga gumaramit}} ($2).',
'youhavenewmessagesmanyusers' => 'May-ada ka $1 tikang ha damo nga mga gumaramit ($2).',
'newmessageslinkplural' => '{{PLURAL:$1|usa ka bag-o nga mensahe|999=ka bag-o nga mga mensahe}}',
'newmessagesdifflinkplural' => '$1 {{PLURAL:$1|nga pagbag-o|999=nga mga pagbag-o}}',
'youhavenewmessagesmulti' => 'Mayda ka mga bag-o nga mensahe ha $1',
'editsection' => 'igliwat',
'editold' => 'igliwat',
'viewsourceold' => 'kitaa an ginkuhaan',
'editlink' => 'igliwat',
'viewsourcelink' => 'kitaa an ginkuhaan',
'editsectionhint' => 'Igliwat in bahin: $1',
'toc' => 'Sulod',
'showtoc' => 'igpakita',
'hidetoc' => 'tago-a',
'collapsible-collapse' => 'Rumpag',
'collapsible-expand' => 'Latag',
'thisisdeleted' => '¿Kitaa o balika in $1?',
'viewdeleted' => '¿Kitaa in $1?',
'restorelink' => '{{PLURAL:$1|usa nga ginpara nga pagliwat|$1 ka ginpara nga mga pagliwat}}',
'feedlinks' => 'Igsulod:',
'feed-invalid' => 'Inbalido nga pagpapaabot',
'feed-unavailable' => 'Waray mga syndication feed',
'site-rss-feed' => '$1 RSS nga feed',
'site-atom-feed' => '$1 Atom nga feed',
'page-rss-feed' => '"$1" RSS nga feed',
'page-atom-feed' => '"$1" Atom nga feed',
'red-link-title' => '$1 (waray dida ini nga pakli)',
'sort-descending' => 'Igpasunodsunod paubos',
'sort-ascending' => 'Igpasunodsunod paigbaw',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main' => 'Pakli',
'nstab-user' => 'Pakli hin gumaramit',
'nstab-media' => 'Pakli hin medya',
'nstab-special' => 'Pinaurog nga pakli',
'nstab-project' => 'Pakli han proyekto',
'nstab-image' => 'Paypay',
'nstab-mediawiki' => 'Mensahe',
'nstab-template' => 'Batakan',
'nstab-help' => 'Pakli hin bulig',
'nstab-category' => 'Kaarangay',

# Main script and global functions
'nosuchaction' => 'Waray sugad nga buhat',
'nosuchactiontext' => 'An buhat nga gin-ispisipikar han URL diri puyde.
Bangin la, nagsayop ka pagmakinilya han URL, o sinmunod hin sayop nga sumpay.
Bangin liwat ini usa nga bug dida han software nga ginagamit han {{SITENAME}}.',
'nosuchspecialpage' => 'Waray sugad nga pinaurog nga pakli',
'nospecialpagetext' => '<strong>Naghangyo ka hin diri-puyde nga pinaurog nga pakli.</strong>

Listahan o talaan hin puyde nga mga pinaurog nga pakli in mabibilngan ha [[Special:SpecialPages|{{int:specialpages}}]].',

# General errors
'error' => 'Sayop',
'databaseerror' => 'Sayop hin database',
'databaseerror-text' => 'Nagkamay-ada hin database query error.

Ini in indikasyon nga may-ada bug hini nga software.',
'databaseerror-textcl' => 'Nagkamay-ada hin database query error.',
'databaseerror-query' => 'Pakiana: $1',
'databaseerror-function' => 'Function: $1',
'databaseerror-error' => 'Sayop: $1',
'laggedslavemode' => 'Pahimatngon: It pakli bangin waray mga kabag-ohan nga bag-o.',
'readonly' => 'Gintrankahan an database',
'enterlockreason' => 'Pagbutang hin rason para han pagtrangka, upod hin banabana kon san-o kukuha-on an pagtrangka',
'readonlytext' => 'An database in nakatrangka yana ha bag-o nga mga entrada ngan iba nga mga modipikasyon, tungod siguro ha routine database maintenance, kahuman ini in mabalik ha normal.

An magdudumara nga nagtrangka hini in naghatag hini nga kasayoran: $1',
'missing-article' => 'Ini nga database in waray nakaagi han teksto han pakli nga dapat mabilngan, nga ginngaranan nga "$1" $2.

Ini in agsob hinungdan han pagsunod han kadaan nga kaibhan o sumpay han kaagi ngadto ha pakli nga ginpara.

Kun diri ini an kaso, bangin ka nakabiling hin bug ha software.
Alayon la igsumat ini ha [[Special:ListUsers/sysop|administrator]], igsurat la an URL.',
'missingarticle-rev' => '(pagbag-o#: $1)',
'missingarticle-diff' => '(Kaibhan: $1, $2)',
'readonly_lag' => 'Ginlugaring pagtranka han database samtang an mga nasunod nga mga database nga server naglalanat pa han agaron',
'internalerror' => 'Sayop ha sulod',
'internalerror_info' => 'Sayop ha sulod: $1',
'fileappenderrorread' => "Diri nababasahan an ''$1'' han pagdugang.",
'fileappenderror' => "Diri nadudugngan an ''$1'' ha ''$2''.",
'filecopyerror' => "Diri nakokopya an paypay nga ''$1'' ha ''$2''.",
'filerenameerror' => "Diri nababalyuan an ngaran han paypay nga ''$1'' ha ''$2''.",
'filedeleteerror' => "Diri napapara an paypay nga ''$1''.",
'directorycreateerror' => 'Waray makahimo han direktoryo nga "$1".',
'filenotfound' => 'Diri nabibilngan an paypay nga "$1"',
'fileexistserror' => "Diri nasusuratan ha paypay nga ''$1'': Aada na an paypay.",
'unexpected' => 'Diri ginlalauman nga balor: "$1"="$2".',
'formerror' => 'Sayop: Diri nasusumite an porma.',
'badarticleerror' => 'Ini nga pagbuhat diri mahihimo dinhi nga pakli',
'cannotdelete' => 'An pakli o an fayl nga "$1" diri napapara.
Bangin na ini ginpara hin iba.',
'cannotdelete-title' => 'diri nakakapara han pakli "$1"',
'delete-hook-aborted' => 'Pagpara ginpugngan han kawil.  Waray eksplenasyon an ginhatag.',
'no-null-revision' => 'Diri nakakahimo hin bag-o nga null rebisyon para han pakli "$1"',
'badtitle' => 'Maraot nga titulo',
'badtitletext' => 'An ginhangyo nga pakli diri puyde, waray sulod, o sayop nga nasumpay nga inter-pinunongan o inter-wiki nga titulo.
Bangin mayda usa o damo nga mga agi nga diri puyde magamit ha mga titulo.',
'perfcached' => 'An nasunod nga data gin-cache ngan bangin diri amo an yana. In maximum hin {{PLURAL:$1|usa ka resulta|$1 ka mga resulta}} aada hit cache.',
'perfcachedts' => 'An nasunod nga data gin-cache, ngan kataposan ginbag-o dida han $1. In maximum hin {{PLURAL:$4|usa ka resulta|$4 ka resulta}} aada hit cache.',
'querypage-no-updates' => 'An mga kabag-ohan para hini nga pakli ha yana diri mahihimo.
An data dini diri mahihimo nga bag-o.',
'viewsource' => 'Kitaa an ginkuhaan',
'viewsource-title' => 'Kitaa an tinikangan para han $1',
'actionthrottled' => 'Ginpahinay an ginbuhat',
'actionthrottledtext' => 'Komo uska pangontra ha spam, ikaw in ginlilimitaran paghimo hini nga pagbuhat hin sobra kadamo ha sulod hin gutiay nga oras, ngan ikaw in naglapos hini nga katubtuban.
Alayon pagutro kahuman hin pipira ka mga minuto.',
'protectedpagetext' => 'Ginpanalipdan ini nga pakli basi mapugngan an pagliwat o iba pa nga mga maburuhat.',
'viewsourcetext' => 'Puydi ka kinmita ngan kinmopya han gintikangan han pakli:',
'viewyourtext' => "Puydi nim makit-an ngan makopya an tinikangan han '''imo mga pagliwat''' ha dinhi nga pakli:",
'protectedinterface' => 'Ini nga pakli in nahatag hin teksto hit interface para han software han hin nga wiki, ngan in pinasasaliporan para makalikay hit pag-abuso.
Para makadugang o makaliwat hin mga paghubad para han tanan nga mga wiki, alayon paggamit han [//translatewiki.net/ translatewiki.net], an kanan MediaWiki proyekto hin lokalisasyon.',
'editinginterface' => "'''Pahimatngon:''' Imo ginliliwat an pakli nga gingagamit paghatag hin interface text para han software.
An mga pagbag-o hini nga pakli in makakaapekto han user interface han iba nga mga gumaramit hini nga wiki.
Para makadugang o makabag-o han mga paghubad para han ngatanan nga mga wiki, alayon paggamit han [//translatewiki.net/ translatewiki.net], an lokalisasyon nga proyekto han MediaWiki.",
'cascadeprotected' => 'Ini nga pakli in pinapasaliporan hin pagliwat tungod ini in nalalakip ha masunod nga {{PLURAL:$1|pakli, kun diin |mga pakli, kun diin}} pinapasaliporan hit "cascading" nga pagpili nga pinaandar:
$2',
'namespaceprotected' => "Diri ka gintutugutan pagliwat han mga pakli ha ngaran-lat'ang nga '''$1'''.",
'customcssprotected' => 'Diri ka gintutugotan pagliwat hini nga CSS nga pakli, tungod nga nagsusulod ini hin kanan iba nga tawo personal nga karuyagon.',
'customjsprotected' => 'Diri ka gintutugotan pagliwat hini nga JavaScript nga pakli, tungod nga nagsusulod ini hin kanan iba nga tawo personal nga karuyagon.',
'mycustomcssprotected' => 'Waray nim pagtugot hin pagliwat hini nga CSS nga pakli.',
'mycustomjsprotected' => 'Waray nim pagtugot hit pagliwat hini nga JavaScript nga pakli.',
'myprivateinfoprotected' => 'Waray nim pagtugot hit pagliwat hit imo pribado nga impormasyon.',
'mypreferencesprotected' => 'Waray nim pagtugot hit pagliwat hit imo mga karuyag.',
'ns-specialprotected' => 'Diri maliliwat an mga ispisyal nga pakli.',
'titleprotected' => 'Ini nga titulo pinasalipod ha paghimo ni [[User:$1|$1]].
An katadungan nga ginhatag amo in "\'\'$2\'\'".',
'filereadonlyerror' => 'Diri maliliwat ini nga paypay "$1" tungod an ginsusudlan han paypay nga "$2" in aada la ha pagbasa-la nga kahimtang.

An magdudurmara nga nagtrangka hini in naghatag hini nga eksplenasyon: "$3".',
'invalidtitle-knownnamespace' => 'Titulo nga inbalido nga may pan-ngaran "$2 ngan teksto nga "$3"',
'invalidtitle-unknownnamespace' => 'Diri ginkakarawat nga titulo tungod mayda ini hin mga diri nakikilala nga ngaran-lat\'ang ihap $1 ngan teksto "$2"',
'exception-nologin' => 'Diri nakalog-in',
'exception-nologin-text' => 'Alayon [[Special:Userlogin|pagsakob]] basi makakadto hiní nga pakli o buruhatón.',
'exception-nologin-text-manual' => 'Alayon $1 basi makakadto hini nga pakli o buruhatón.',

# Virus scanner
'virus-badscanner' => "Maraot nga configuration: Waray kasabti nga virus scanner: ''$1''",
'virus-scanfailed' => 'Pakyas an pag-scan (kodigo $1)',
'virus-unknownscanner' => 'diri-nasasabtan nga antivirus:',

# Login and logout pages
'logouttext' => "'''Nakalog-out kana.'''

Ginpapasabot ka la nga an iba nga pakli in magpapadayon nga magpakita komo nga ikaw naka-log-in pa, tubtob imo ginlimpyo an imo browser cache.",
'welcomeuser' => '¡Uswag ngan Dayon, $1!',
'welcomecreation-msg' => 'An im akawnt in nahimo na.
Ayaw kalimti pagbalyo han imo [[Special:Preferences|{{SITENAME}} preperensya]].',
'yourname' => 'Agnay hit gumaramit:',
'userlogin-yourname' => 'Ngaran han gumaramit',
'userlogin-yourname-ph' => 'Igbutang an imo ngaran-gumaramit',
'createacct-another-username-ph' => 'Igbutang an imo agnay-gumaramit',
'yourpassword' => 'Tigaman-pagsulod:',
'userlogin-yourpassword' => 'Tigaman pagsakob',
'userlogin-yourpassword-ph' => 'Igbutang an imo tigaman-pagsakob',
'createacct-yourpassword-ph' => 'Pagbutang hin uska tigaman-pagsakob',
'yourpasswordagain' => 'Utroha pagbutang an tigaman-han-pagsakob:',
'createacct-yourpasswordagain' => 'Igkompirma an tigaman-pagsakob',
'createacct-yourpasswordagain-ph' => 'Igbutang an tigaman-pagsakob utro',
'remembermypassword' => "Hinumdumi an akon pan-sakob dinhi nga panngaykay ''(browser)'' (para ha pinakamaiha $1 {{PLURAL:$1|ka adlaw|ka mga adlaw}})",
'userlogin-remembermypassword' => 'I-log-in la ako',
'userlogin-signwithsecure' => 'Gamit hin koneksyon nga nakakasegurado',
'yourdomainname' => 'Imo dominyo:',
'password-change-forbidden' => 'Diri ka makakabalyo hin pulong-pagsulod ha dinhi nga wiki.',
'externaldberror' => 'Mayda authenticaton database error o diri ka tinutugotan pag-update an imo akwant ha gawas.',
'login' => 'Sakob',
'nav-login-createaccount' => 'Magpalista nga masakob / paghimo hin bag-o nga akawnt',
'loginprompt' => "Kinahanglan mo hin mga kuki (''cookie'') para makapag log-in ha {{SITENAME}}.",
'userlogin' => 'Magpasabot nga masakob / paghimo hin akawnt',
'userloginnocreate' => 'Magpasabot nga masakob',
'logout' => 'Gawas',
'userlogout' => 'Gawas',
'notloggedin' => 'Diri sakob',
'userlogin-noaccount' => 'Waray ka akawnt?',
'userlogin-joinproject' => 'Tambong ha {{SITENAME}}',
'nologin' => 'Waray ka akawnt? $1.',
'nologinlink' => 'Paghimo hin akawnt',
'createaccount' => 'Himo-a an akawnt',
'gotaccount' => '¿Mayda kana akawnt? $1.',
'gotaccountlink' => 'Sakob',
'userlogin-resetlink' => 'Nangalimot han imo detalye han pagsakob?',
'userlogin-resetpassword-link' => '¿Nangalimot ka han imo tigaman-pansulod?',
'helplogin-url' => 'Help:Pag-log-in',
'userlogin-helplink' => '[[{{MediaWiki:helplogin-url}}|Bulig han pag-log-in]]',
'userlogin-loggedin' => 'Nakalog-in kana komo hi {{GENDER:$1|$1}}.
Gamiti an porma ha ubos para makalog-in komo iba nga gumaramit.',
'userlogin-createanother' => 'Paghimo hin iba nga akawnt',
'createacct-join' => 'Igbutang an imo impormasyon ha ubos.',
'createacct-another-join' => 'Igbutang an impormasyon han bag-o nga akwant ha ilarom.',
'createacct-emailrequired' => 'Email address',
'createacct-emailoptional' => 'Email address (opsyonal)',
'createacct-email-ph' => 'Igbutang an imo email address',
'createacct-another-email-ph' => 'Igbutang an email address',
'createaccountmail' => 'Gamiti hin temporaryo nga bisan ano nag password ngan igpadangat ngada ha espesipikado nga e-mail address',
'createacct-realname' => 'Tinuod nga ngaran (opsyonal)',
'createaccountreason' => 'Rason:',
'createacct-reason' => 'Rason',
'createacct-reason-ph' => 'Kay ano nahimo ka hin usa pa nga akawnt',
'createacct-captcha' => 'Pagkita han seguridad',
'createacct-imgcaptcha-ph' => 'Igbutang an sinurat nga nakikita mo ha igbaw',
'createacct-submit' => 'Ighimo an im akawnt',
'createacct-another-submit' => 'Paghimo hin lain nga akant',
'createacct-benefit-heading' => '{{SITENAME}} in ginhimo hin tawo nga sugad ha imo.',
'createacct-benefit-body1' => '{{PLURAL:$1|pagliwat|mga pagliwat}}',
'createacct-benefit-body2' => '{{PLURAL:$1|ka pakli|ka mga pakli}}',
'createacct-benefit-body3' => 'bag-o pala nga {{PLURAL:$1|mag-aramot|mga mag-aramot}}',
'badretype' => 'Diri naangay an mga tigaman-pagsulod nga im ginbutang',
'userexists' => 'An agnay hiton gumaramit nga im ginbutang in gingamit na.
Alayon pagpili hin lain nga ngaran.',
'loginerror' => 'Sayop hin pagsakob',
'createacct-error' => 'Pakyas an paghimo han akawnt',
'createaccounterror' => 'Diri makakahimo hin akawnt: $1',
'nocookiesnew' => 'An akawnt han gumaramit hin nahimo, pero diri ka pa nakalog-in.
{{SITENAME}} in nagamit hin cookies para makalog-in han mga gumaramit.
An imo cookies in diri nakaandar.
Alayon paandara hira, kahuman paglog-in gamit han imo bag-o nga agnay-gumaramit ngan tigaman-pagsakob.',
'nocookieslogin' => '{{SITENAME}} in nagkikinahanglan hin mga kuki para makapagpalog-in hin mga gumaramit.  An im mga kuki in diri nagana.
Alayon paganaha hira ngan utro liwat.',
'nocookiesfornew' => 'An imo akawnt han gumaramit in waray nahimo, kay tungod diri kami nakakakompirma han tinikangan.
Siguradoha nga an mga cookies in nakaandar, igreload ini nga pakli ngan utroha.',
'noname' => 'Waray ka nakahatag hin maupay nga agnay-hit-gumaramit.',
'loginsuccesstitle' => 'Malinamposon an pagsulod',
'loginsuccess' => "'''Ikaw in nakalog-in ha {{SITENAME}} komo \"\$1\".'''",
'nosuchuser' => 'Waray gumaramit an may-ada ngaran nga "$1".
It mga agnay-hi-gumaramit in case sensitive.
Panginano-a it imo pagbaybay, o [[Special:UserLogin/signup|paghimo hin bag-o nga akawnt]].',
'nosuchusershort' => 'Waray nagamit it may ngaran nga "$1".
Kitaa kun amo it im pagbaybay.',
'nouserspecified' => 'Dapat nim magbutang hin agnay hit gumaramit.',
'login-userblocked' => 'Ini nga gumaramit in ginpugngan.  Diri gintutugutan an pagsakob.',
'wrongpassword' => 'Sayop nga tigaman-pagsulod an nahibutang.
Alayon pagutro pagbutang.',
'wrongpasswordempty' => 'An tigaman-pagsulod nga ginbutang in waray sulod.
Alayon pagutro pagbutang.',
'passwordtooshort' => 'An tigaman-pagsulod dapat diri maubos hit {{PLURAL:$1|1 nga agi|$1 nga agi}}.',
'password-name-match' => 'An imo tigaman-pagsulod in kinahanglan iba ha imo agnay-hiton-gumaramit.',
'password-login-forbidden' => 'An paggamit hini nga agnay-hit-gumaramit ngan tigaman-pagsulod in diri gintutugotan.',
'mailmypassword' => 'Ig-reset an tigaman-pagsulod',
'passwordremindertitle' => 'Bag-o nga diri-pirmihan nga tigaman-pagsulod para han {{SITENAME}}',
'passwordremindertext' => 'May-ada tawo (posible ikaw, tikang ha IP address nga $1) in umaro hin bag-o nga tigaman-pagsakob para han {{SITENAME}} ($4). Uska temporaryo nga tigaman-pagsakob para han gumaramit 
"$2" in nahimo ngan ginbutang nga "$3". Kun ini an imo panuyuan, kinahanglanon nim maglog-in ngan pumili hin bag-o nga tigaman-pagsakob yana.
An imo temporaryo nga tigaman-pagsakob in diri madulot kahuman hin {{PLURAL:$5|usa ka adlaw|$5 ka mga adlaw}}.

Kun iba nga tawo an naghimo ini nga paalayon, o kun nakahinumdom ka han imo tigaman-pagsakob, ngan diri mo na karuyag nga igbal-iw ini, pabay-i nala ini nga mensahe ngan padayon paggamit han imo daan nga tigaman-pagsakob.',
'noemail' => 'Waray e-mail nga adres nga ginrekord para han nágámit "$1".',
'noemailcreate' => 'Kinahanglan nim maghatag hin may hinungdan nga e-mail address',
'passwordsent' => 'Uska bag-o nga password in ginpadangat ha e-mail address nga nakarehistro kan "$1".
Alayon paglog-in utro kahuman mo makarawat ini.',
'blocked-mailpassword' => 'An imo IP address in ginpugong ha pag-edit, ngan tungod hini in diri gintutugotan paggamit han password recovery function para malikyan an abuso.',
'eauthentsent' => 'Mayda e-mail hin pagkumpirma nga ginpadará hini nga ginhatag nga e-mail adres.

San-o magatagán pa hin ibá nga e-mail it akwant, kinahanglan nimo sundon an mga tugon nga nahabutáng han email basi makumpirma nga imo gud itón akawnt.',
'throttled-mailpassword' => 'Usa nga tigaman-pagnakob reset email in ginpadangat na, ha sakob han urhi nga  {{PLURAL:$1|oras|$1 ka mga oras}}.
Basi diri ini maabuso, uusa la nga tigaman-panakob in igpapadangat kada {{PLURAL:$1|oras|$1 ka mga oras}}.',
'mailerror' => 'Sayop han pagpadangat hin surat: $1',
'acct_creation_throttle_hit' => 'An mga bisita hinin nga wiki nga nagamit hit imo IP address in naghimo hin {{PLURAL:$1|1 nga akawnt|$1 nga mga akawnt}} ha sulod han urhi nga adlaw, kun diin ini an pinakadamo nga gintutugotan para han sulod nga takna.

An resulta, an mga bisita nga nagamit hini nga IP address in diri na makakahimo hin akawnt, ha pagkayana.',
'emailauthenticated' => 'Ginkumpirma an imo e-mail adres han han $2 ha $3.',
'emailnotauthenticated' => 'Diri pa nakumpirma an imo email adres.
Waray email nga igpapadangat ha mga masunod nga higamit.',
'noemailprefs' => 'Igbutang an imo email address ha imo preperensya para umandar ini nga mga higamit.',
'emailconfirmlink' => 'Igkompirma an imo e-mail address',
'invalidemailaddress' => 'Diri ginkakarawat an email address kay baga diri asya an format hini.  Alayon pagbutang hin asya nga format nga address o hawani ini.',
'cannotchangeemail' => 'An akwant email address in diri mababal-iwan hini nga wiki.',
'emaildisabled' => 'Ini nga sityo in diri nakakapadangat hin mga e-mail.',
'accountcreated' => 'Nahimo an akawnt',
'accountcreatedtext' => 'An akwant han gumaramit para kan [[{{ns:User}}:$1|$1]] ([[{{ns:User talk}}:$1|Hiruhimangraw]]) in nahimo na.',
'createaccount-title' => 'Paghimo hin akawnt para han {{SITENAME}}',
'createaccount-text' => 'Mayda tawo nga naghimo hin akawnt nga gingamit an imo email address ha {{SITENAME}} ($4) nga ginngaranan nga "$2", nga may-ada tigaman-panakob nga "$3".

Kinahanglan ka maglog-in ngan igbal-iw an imo tigaman-panakob yana dayon.

Puydi nimo pabay-on ini nga mensahe, kun ini nga paghimo hin akwant in nagsayop la.',
'usernamehasherror' => 'Agnay-hin-gumaramit in diri puydi magkamay-ada hin mga hash karakter',
'login-throttled' => 'Damo na an imo login attempts ha pagkayana.
Alayon paghulat hin $1 san-o ka umutro.',
'login-abort-generic' => 'An imo paglog-in in diri malinamposon - Naundang',
'loginlanguagelabel' => 'Pinulongan: $1',
'suspicious-userlogout' => 'Waray ka tugoti pag-logout tungod nga baga ini ginpadangat hin usa nga broken browser o caching proxy.',
'createacct-another-realname-tip' => 'Ada la ha imo kun karuyag mo igbutang an imo tinuod nga ngaran.
Kun pinili mo ito ighatag, gagamiton ini paghatag hin atribusyon ha gumaramit para hit ira buhat.',

# Email sending
'php-mail-error-unknown' => 'Waray kasabti ha kanan PHP mail() function.',
'user-mail-no-addy' => 'Nagsend hin email bisan waray email address.',
'user-mail-no-body' => 'Nagsend hin email bisan waray o diri resonably kahalipot kaduro nga sulod.',

# Change password dialog
'changepassword' => 'Igliwan an tigaman-pagsulod',
'resetpass_announce' => 'Nakalog-in ka hit temporaryo nga ginemail nga kodigo.
Para mahuman paglalog-on, kinahanglan mo magbutang hin bag-o nga tigaman-panakob dinhi:',
'resetpass_header' => 'Igliwan an akawnt nga tigaman-pagsulod',
'oldpassword' => 'Daan nga tigaman-pagsulod:',
'newpassword' => 'Bag-o nga tigaman-pagsulod:',
'retypenew' => 'Utroha pagbutang an bag-o nga tigaman-pagsulod:',
'resetpass_submit' => 'Igbutang an password ngan log in',
'changepassword-success' => 'Malinamposon an pagbal-iw hit imo tigaman-panakob!',
'changepassword-throttled' => 'Damo na nga mga paningkamot hin pagsakob an imo ginhimò.
Alayon paghulat hin $1 san-o ka umutro.',
'resetpass_forbidden' => 'Diri mababalyoan an mga tigaman-pagsulod',
'resetpass-no-info' => 'Kinahanglan mo paglog-in para direkta ka makasakob dinhi nga pakli.',
'resetpass-submit-loggedin' => 'Igbal-iw an tigaman-pagsulod',
'resetpass-submit-cancel' => 'Pasagdi',
'resetpass-wrong-oldpass' => 'Diri balido an temporaryo o yana nga tigaman-panakob.
Imo malinamposon nga ginsalyuan an imo tigaman-panakob o umaro ka na hin bag-o nga temporaryo nga tigman-panakob.',
'resetpass-temp-password' => 'Temporaryo nga tigaman-pagsakob:',
'resetpass-abort-generic' => 'Ginpugong an pagbal-iw hin tigaman-panakob hin uska ekstensyon.',

# Special:PasswordReset
'passwordreset' => 'igreset an tigaman-hit-pagsulod',
'passwordreset-text-one' => 'Kompletoha ini nga porma paramakareset hin imo tigaman-panakob.',
'passwordreset-text-many' => '{{PLURAL:$1|Butanga it usa nga mga surodlan basi makakarawat ko hin temporaryo nga tigaman-pansulod pinaagi ha email.}}',
'passwordreset-legend' => 'igreset an tigaman-hit-pagsulod',
'passwordreset-disabled' => 'Waray ginpaandar an password reset hini nga wiki.',
'passwordreset-emaildisabled' => 'Mga mga higamit ha email in waray pinaandar hini nga wiki.',
'passwordreset-username' => 'Agnay hiton gumaramit:',
'passwordreset-domain' => 'Dominyo:',
'passwordreset-capture' => 'Kikitaon mo an resulta nga e-mail?',
'passwordreset-capture-help' => 'Kun imo igtsek ini nga kahon, an email (lakip an temporaryo nga tigaman-panakob) in igpapakita ha imo labot la han ginpadangat ha gumaramit.',
'passwordreset-email' => 'E-mail adres:',
'passwordreset-emailtitle' => 'Mga detalye han akawnt ha {{SITENAME}}',
'passwordreset-emailtext-ip' => '{{PLURAL:$3|Iní nga temporaryo nga tigaman-pansulod|Iní nga mga temporaryo nga tigaman-pansulod}} ma-waray bali hin {{PLURAL:$5|usa ka adlaw|$5 nga mga adlaw}}.',
'passwordreset-emailelement' => 'Agnay han gumaramit: $1
Temporaryo nga tigaman han pagsakob: $2',
'passwordreset-emailsent' => 'Ginpadangat an password reset email.',
'passwordreset-emailsent-capture' => 'Ginpadangat an password reset email, nga ginpakita ha ubos.',
'passwordreset-emailerror-capture' => 'Ginhimo an password reset email, kun diin nakikita ha ubos, pero pakyas an pagpadara ha  {{GENDER:$2|gumaramit}}: $1',

# Special:ChangeEmail
'changeemail' => 'Igliwan an e-mail address',
'changeemail-header' => 'Igliwan an e-mail address akawnt',
'changeemail-text' => 'Igkompleto ini nga porma para makapagliwan han imo e-mail address.  Kinahanglanon mo igbutang an imo tigaman-pagsulod para makompirma ini nga pagbag-o.',
'changeemail-no-info' => 'Kinahanglanon mo mag-log-in para ka direkta makasakob hini nga pakli.',
'changeemail-oldemail' => 'Yana nga e-mail address:',
'changeemail-newemail' => 'Bag-o nga e-mail address:',
'changeemail-none' => '(waray)',
'changeemail-password' => 'An imo {{SITENAME}} password:',
'changeemail-submit' => 'Igbalyo an e-mail',
'changeemail-cancel' => 'Pasagdi',

# Special:ResetTokens
'resettokens' => 'Igrest an mga token',
'resettokens-text' => 'Puydi nimo mareset an mga token para makahatag hin pipira nga pribado nga datos nga may pakahisumpay ha imo akawnt dinhi.
Kinahanglan mo ini buhaton kun aksidenti nim nasaro hira ha iba nga tawo o an imo akawnt in nakompromiso.',
'resettokens-no-tokens' => 'Waray token nga marereset.',
'resettokens-legend' => 'Igreset an mga token',
'resettokens-tokens' => 'Mga token:',
'resettokens-token-label' => '$1 (yana nga balor: $2)',
'resettokens-watchlist-token' => 'Token para han web feed (Atom/RSS) han[[Special:Watchlist|mga pagbag-o ha imo pakli han talaan-barantayon]]',
'resettokens-done' => 'Narest an mga token.',
'resettokens-resetbutton' => 'Igreset an pinili nga mga token',

# Edit page toolbar
'bold_sample' => 'dakmola an agi',
'bold_tip' => 'Dakmola an agi',
'italic_sample' => 'Pakiling nga agi',
'italic_tip' => 'Pakiling nga agi',
'link_sample' => 'Titulo han sumpay',
'link_tip' => 'Sumpay ha sulod',
'extlink_sample' => 'http://www.example.com sumpay nga titulo',
'extlink_tip' => 'Sumpay ha gawas (hinumdomi http:// pahiuna-nga-panumpay)',
'headline_sample' => 'teksto han katukiban',
'headline_tip' => 'Katupngan 2 nga katukiban',
'nowiki_sample' => 'Igsuksok an diri-nakaayos nga mga teksto dinhi',
'nowiki_tip' => 'Pabay-i la an pagfoformat nga wiki',
'image_tip' => 'Nakatampo nga paypay',
'media_tip' => 'sumpay han paypay',
'sig_tip' => 'Imo pirma nga may-ada marka hin oras',
'hr_tip' => 'Patumba nga bagis (hinay-hinay la it paggamit)',

# Edit pages
'summary' => 'Dalikyat nga sumat hiton pagliwat:',
'subject' => 'Katukiban:',
'minoredit' => 'Gutiay ini nga pagliwat',
'watchthis' => 'Bantayi ini nga pakli',
'savearticle' => 'Igtipig an pakli',
'preview' => 'Pahiuna nga pagawas',
'showpreview' => 'Pakit-a an pahiuna nga pagawas',
'showlivepreview' => 'Buhi nga pahiuna nga pagawas',
'showdiff' => 'Igpakita an mga ginliwat',
'anoneditwarning' => "'''Pahimatngon:''' Diri ka pa naka log-in.
An imo IP address in maitatala ha kaagi hinin pakli han pagliwat.",
'anonpreviewwarning' => "''Diri ka naka-log in.  Mahisusurat an imo IP address ngada ha kanan pakli kaagi hit pagliwat kun igtipig nimo.''",
'missingsummary' => "'''Pahinumdom:''' Waray ka nagbutang hin dalikyat nga sumat han pagliwat.
Kun pidliton mo an \"{{int:savearticle}}\" utro, an imo ginliwat in matitipig bisan waray hini.",
'missingcommenttext' => 'Alayon pagbutang hin komento ha ilarom.',
'missingcommentheader' => "'''Pahinumdom:''' Waray ka humatag hin subject/headline para hini nga komento.  Kun pinduton mo an \"{{int:savearticle}}\" utro, an imo pagliwat in matitipig bisan waray hini.",
'summary-preview' => 'Pahiuna nga pagawas han dalikyat nga pulong:',
'subject-preview' => 'Pahiuna nga pagawas hit himangrawon:',
'blockedtitle' => 'Ginpugngan ini nga gumaramit',
'blockedtext' => '\'\'\'An imo agnay-gumaramit o IP address in ginpugngan.\'\'\'

An pagpugong in ginhimo ni $1.
An rason nga ginhatag in \'\'$2\'\'.

* Pagtikang han pagpugong: $8
* Paghuman han pagpugong: $6
* Ginpupugngan: $7

Puydi nimo bilngon hi $1 o iba liwat nga [[{{MediaWiki:Grouppage-sysop}}|magdudumara]] para makipaghimangraw hiunong hini nga pagpugong.
Diri nimo magagamit an "ig-email ini nga gumaramit" nga feature antes may-ada balido nga email address nga nakabutang ha imo  [[Special:Preferences|mga preperensya han akawnt]] ngan waray ka pugngi paggamit hini.
An imo IP address yana in $3, ngan an imo pagpugong nga ID in #$5.  Alayon la paglakip han ngatanan nga aada ha igbaw nga mga detalye ha bisan ano nga mga pakiana nga karuyag mo buhaton.',
'autoblockedtext' => 'An imo IP address in automatiko nga ginpugngan mahitungod nga ini in gingamit hin iba nga gumaramit, nga ginpugngan ni $1.

An rason nga ginhatag in \'\'$2\'\'.

* Pagtikang han pagpugong: $8
* Paghuman han pagpugong: $6
* Ginpupugngan: $7

Puydi nimo bilngon hi $1 o iba liwat nga [[{{MediaWiki:Grouppage-sysop}}|magdudumara]] para makipaghimangraw hiunong hini nga pagpugong.

Ginpapasabot ka nga diri nimo magagamitan an "ig-email ini nga gumaramit" nga feature antes may-ada nimo balido nga email address nga nakarehistro ha imo  [[Special:Preferences|mga preperensya han gumaramit]] ngan waray ka pugngi hit paggamit hini.

An imo IP address yana in $3, ngan an imo pagpugong nga ID in #$5.  Alayon la paglakip han ngatanan nga aada ha igbaw nga mga detalye ha bisan ano nga mga pakiana nga karuyag mo buhaton.',
'blockednoreason' => 'waray katadungan nga ginhatag',
'whitelistedittext' => 'Kinahanglan mo mag-$1 para makaliwat han mga pakli.',
'confirmedittext' => 'Kinahanglanon mo igkompirma an imo email address san-o ka makaliwat hin mga pakli.  Alayon la pagbutang ngan pagbalidar han imo email address pinaagi han imo  [[Special:Preferences|mga preperensya han gumaramit]].',
'nosuchsectiontitle' => 'Waray kaagi-i an bahin',
'nosuchsectiontext' => 'Imo ginliwat an seksyon nga waray dida.
Ini in puydi binmalhin o napara samtang ikaw in nagkikita han pakli.',
'loginreqtitle' => 'Nagkikinahanglan hin pan-sakob',
'loginreqlink' => 'Magpasabot nga masakob',
'loginreqpagetext' => 'Kinahanglan mo mag-$1 para makakita ha iba nga mga pakli.',
'accmailtitle' => 'Ginpadara na an tigaman-pagsulod.',
'accmailtext' => "Uska hinimo nga random nga tigaman-panakob para kan [[User talk:$1|$1]] in ginpadangat ha $2. Puydi ini mabal-iwan ha ''[[Special:ChangePassword|liwani an tigaman-panakob]]'' nga pakli han paglog-in.",
'newarticle' => '(Bag-o)',
'newarticletext' => "Ginsunod mo an pakli nga waray pa kahihimo.  Para ighimo an pakli, tikanga pagmakinilya ha kahon nga aada ha ubos (kitaa an [[{{MediaWiki:Helppage}}|nabulig nga pakli]] para han kadugangan nga pananabutan).  Kun sayop an imo pagkanhi, igpidlit an imo kanan panngaykay (''browser'') '''balik''' (''back'') nga piridlitan.",
'anontalkpagetext' => "----
''Ini in hiruhimangraw-nga-pakli para han waray magpakilala nga gumaramit, nga waray pa hinmimo hin akawnt.''
Magamit la kami hin IP address para makilal-an hiya.
Sugad hini nga IP address, in puydi sinmaro hiton pipira nga mga gumaramit.
Kun ikaw in waray magpakilala nga gumaramit, ngan pag-abat mo in may mga diri naangay nga komento an ginpapadangat ha imo, alayon nala [[Special:UserLogin/signup|paghimo hin akawnt]] o [[Special:UserLogin|pag-log in]] para malikyan an sumurunod nga mga pagkalipat nga dapat para ha iba nga waray magpakilala nga mga gumaramit.",
'noarticletext' => 'Waray yana nahasurat hini nga pakli.
Puyde hi ikaw [[Special:Search/{{PAGENAME}}|magbiling para han ngaran hini nga pakli]] ha iba nga mga pakli,
<span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} binga an mga nanginginlabot nga mga log],
o [{{fullurl:{{FULLPAGENAME}}|action=edit}} igliwat ini nga pakli]</span>.',
'noarticletext-nopermission' => 'Waray yana nahasurat hini nga pakli
Puyde hi ikaw [[Special:Search/{{PAGENAME}}|magbiling han ngaran hini nga pakli]] ha iba nga mga pakli,
o <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} mamiling han mga nanginginlabot nga mga talaan]</span>, kundi diri ka gintutugotan hin paghímò hini nga pakli.',
'missing-revision' => 'Waray na an rebisyon #$1 han pakli nga ginngaranan nga  "{{PAGENAME}}".

Ini in agsob tungod han pagsunod hin daan nga sumpay hin kaagi ha pakli nga ginpara.
An mga detalye in mabibilngan ha [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} deletion log].',
'userpage-userdoesnotexist' => 'Diri nakarehistro an akawnt han gumaramit nga "$1".
Alayon pagpamuruotbuot kun karuyag mo maghimo/mag-edit hini nga pakli.',
'userpage-userdoesnotexist-view' => "An akawnt han gumaramit ni ''$1'' in diri nakarehistro.",
'blocked-notice-logextract' => 'Ini nga gumaramit in nakapugong yana.
An pinakaurhi nga log entry han mga pinugong in ginhatag ha ubos para hit reperensya:',
'updated' => '(Ginbag-ohan)',
'note' => "'''Pahibaro:'''",
'previewnote' => "'''Hinumdumi nga pahiuna-nga-paggawas pa la ini.'''
¡Waray pa katipig an imo mga ginbag-o!",
'continue-editing' => 'Pakadto han lugar hin panliwat',
'editing' => 'Ginliliwat an $1',
'creating' => 'Ginhihimo an $1',
'editingsection' => 'Ginliliwat an $1 (bahin)',
'editingcomment' => 'Ginliliwat an $1 (bag-o nga bahin)',
'editconflict' => 'Diri pagkakauroyon han pagliwat: $1',
'yourtext' => 'Imo sinurat',
'storedversion' => 'Nakahipos nga pagbag-o',
'yourdiff' => 'Mga kaibhan',
'copyrightwarning' => "Iginpapasabot nga an ngatanan nga imo gin-amot ha {{SITENAME}} iginhatag mo ha ilarom han $2 (kitaa an $1 para han mga detalye).  Kun diri mo igkakalipay nga an imo ginsurat waray kalooy nga liliwaton ngan igpapakalat hit bisan hin-o nga it may gusto, alayon ayaw hiton igsumitir dinhi. <br />
Nasaad ka liwat nga imo ini kalugaringon nga ginsurat, o ginkopya nimo ini tikang ha panimongto nga dominyo o kapareho nga waray-sabit nga kuruhaon.
'''Ayaw igsumitir an mga buhat nga may ''copyright'' hin waray sarit!'''",
'templatesused' => '{{PLURAL:$1|Batakan|Mga batakan}} nga gingamit dinhi nga pakli:',
'template-protected' => '(pinaliporan)',
'template-semiprotected' => '(katunga nga pinasaliporan)',
'hiddencategories' => 'Ini nga pakli in api han {{PLURAL:$1|1 nakatago nga kaarangay|$1 nakatago nga kaarangay}}:',
'nocreate-loggedin' => 'Diri ka gintutugotan paghimo hin mga bag-o nga pakli.',
'sectioneditnotsupported-title' => 'Diri suportado han pagliwat han seksyon',
'sectioneditnotsupported-text' => 'Diri suportado an pagliwat han seksyon ha dinhi nga pakli.',
'permissionserrors' => 'Mga sayop hin mga pagtugot',
'permissionserrorstext' => 'Diri ka gintutugotan pagbuhat hito, mahitungod han mga nasunod nga {{PLURAL:$1|katadungan|mga katadungan}}:',
'permissionserrorstext-withaction' => 'Waray ka permiso han $2, tungod han masunod nga {{PLURAL:$1|rason|mga rason}}:',
'recreate-moveddeleted-warn' => "'''Pahimatngon: Naghihimo ka hin pakli nga ginpara na.'''

Angay mo hunahunaon kon naangay ba nga magpadayon hin pagliwat hini nga pakli.
An talaan hin pagpara ngan pagbalhin hini nga pakli ginhahatag dinhi para hin masayon nga pagkita:",
'moveddeleted-notice' => 'Ini nga pakli in ginpara.
An taramdan han pagpara ngan pagbalhin para han pakli in ginhahatag ha ubos para han kasarigan.',
'log-fulllog' => 'Kitaa an bug-os nga taramdan',
'edit-conflict' => 'Diri pagkakauroyon han pagliwat.',
'edit-no-change' => 'Ginpabay-an an im pagliwat, mahitungod nga waray pagbalyo nga nabuhat ha nakasurat.',
'postedit-confirmation' => 'Natipig an imo ginliwat.',
'edit-already-exists' => 'Diri nakakahimo hin bag-o nga pakli.
Aada na ito.',
'defaultmessagetext' => 'Aada-nga-daan nga teksto han mensahe',
'invalid-content-data' => 'Sayop nga sulod nga datos',
'content-not-allowed-here' => 'An sulod nga "$1" in diri gintutugotan ha pakli nga [[$2]]',

# Content models
'content-model-wikitext' => 'wikiteksto',
'content-model-text' => 'yano nga teksto',
'content-model-javascript' => 'JavaScript',
'content-model-css' => 'CSS',

# Parser/template warnings
'post-expand-template-inclusion-warning' => "'''Pahimatngon:''' An batakan nga ginlakip in sobra kadako.
An iba nga mga batakan in diri mauupod.",
'post-expand-template-inclusion-category' => 'Mga pakli kun diin an mga nahilalakip nga kadako han batakan in nalabaw.',
'post-expand-template-argument-warning' => "'''Pahimatngaon:''' Ini nga pakli in nagsusulod hin pinakaguti usa nga argumento hin batakan nga may-ada sobra nga dako it padako nga kadako.
Ini nga mga argumento in ginlaktawan.",
'post-expand-template-argument-category' => 'Mga pakli nga nagsusulod hin ginlaktawan nga mga argumento hin batakan',

# "Undo" feature
'undo-norev' => 'An pagliwat in diri mapapawaray-buhat tungod waray ito dida o napara na.',
'undo-summary' => 'Ginpawara-buhat an rebisyon nga $1 ni [[Special:Contributions/$2|$2]] ([[User talk:$2|himangrawi]])',
'undo-summary-username-hidden' => 'Igpawara-an-ginbuhat nga rebisyon $1 han uska tago nga gumaramit',

# Account creation failure
'cantcreateaccounttitle' => 'Diri makakahimo hin akawnt',
'cantcreateaccount-text' => "An paghimo hin akawnt hini nga IP address  ('''$1''') in ginpugngan ni [[User:$3|$3]]. An rason nga ginhatag ni $3 in ''$2''",

# History pages
'viewpagelogs' => 'Kitaa an mga log para hini nga pakli',
'nohistory' => 'Waray kaagi hin pagliwat hin nga pakli.',
'currentrev' => 'Giurhii nga pagliwat',
'currentrev-asof' => 'Giuurhii nga pagliwat han $1',
'revisionasof' => 'Pagbabag-o han $1',
'revision-info' => 'Pagbag-o han $1 ni $',
'previousrevision' => '← Durudaan nga pagliwat',
'nextrevision' => 'Burubag-o nga pagliwat →',
'currentrevisionlink' => 'Giurhii nga pagliwat',
'cur' => 'yana',
'next' => 'sunod',
'last' => 'urhi',
'page_first' => 'syahan',
'page_last' => 'katapusan',
'histlegend' => "Kaibhan nga pirilion: Igmarka an mga radyo nga kahon han mga pagbag-o para maikumpara ngan igu-a an ''enter'' o an piridlitan ha ubos.<br />
Leyenda: '''({{int:cur}})''' = kaibhan ha giuurhii nga pag-bag-o, '''({{int:last}})''' = kaibhan ha nahiuna nga pag-bag-o, '''{{int:minoreditletter}}''' = gagmay nga pagliwat.",
'history-fieldset-title' => 'Kaagi han panngaykay',
'history-show-deleted' => 'Ginpara la',
'histfirst' => 'Giunhani',
'histlast' => 'Gibag-ohi',
'historysize' => '({{PLURAL:$1|1 nga byte|$1 ka mga byte}})',
'historyempty' => '(waray sulod)',

# Revision feed
'history-feed-title' => 'Kaagi han pagliwat',
'history-feed-description' => 'Kaagi han pagliwat para hini nga pakli ha wiki',
'history-feed-item-nocomment' => '$1 ha $2',
'history-feed-empty' => 'An imo ginpaalayon nga pakli in waray dida.
Bangin ini napara tikang ha wiki, o ginngaranan hin iba.

[[Special:Search|pamilnga ha wiki]] para han may pagkahisumpay nga bag-o nga pakli.',

# Revision deletion
'rev-deleted-comment' => '(gintanggal an kaagi han dalikyat nga sumat)',
'rev-deleted-user' => '(gintanggal an agnay hiton gumaramit)',
'rev-deleted-event' => '(gintanggal an talaan han mga buhat)',
'rev-deleted-user-contribs' => '[gintanggal an agnay-hit-gumaramit o IP address - an pagliwat in gintago tikang han mga amot]',
'rev-deleted-text-permission' => "Ini nga rebisyon han pakli in '''ginpara'''.
An mga detalye in mabibilngan ha [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} deletion log].",
'rev-suppressed-no-diff' => "Diri mo makikita ini nga kaibhan tungod nga usa ha mga rebisyon in '''ginpara'''.",
'rev-delundel' => 'igpakita/igtago',
'rev-showdeleted' => 'igpakita',
'revisiondelete' => 'Pagpara/pagtanggal han pagpara nga mga rebisyon',
'revdelete-show-file-confirm' => 'Sigurado ka nga gusto mo makita an ginpara nga pagliwat han file "<nowiki>$1</nowiki>" tikang $2 ha $3?',
'revdelete-show-file-submit' => 'Oo',
'revdelete-hide-text' => 'Tagoon an rebisyon han teksto',
'revdelete-hide-image' => 'Tagoon an sulod han paypay',
'revdelete-hide-name' => 'Tagoon an buhat ngan kakadtoan',
'revdelete-hide-comment' => 'Tagoon an dalikyat nga sumat han pagliwat',
'revdelete-radio-same' => '(ayaw balyu-e)',
'revdelete-radio-set' => 'Oo',
'revdelete-radio-unset' => 'Ayaw',
'revdelete-log' => 'Rason:',
'revdel-restore' => 'igliwat an nakikit-an',
'pagehist' => 'Kaagi han pakli',
'deletedhist' => 'Ginpara nga kaagi',
'revdelete-hide-current' => 'Sayop in natago ha butang nga may petsa $2, $1: Ini an yana nga rebisyon.
Diri ini matatago.',
'revdelete-show-no-access' => 'May-ada sayo nga nagpapakita ha butang nga may petsa $2, $1.  Ini nga butang in nakamarka nga "diri malalabtan".
Diri mo ini malalabtan.',
'revdelete-otherreason' => 'Lain/dugang nga katadungan:',
'revdelete-reasonotherlist' => 'Lain nga katadongan',
'revdelete-edit-reasonlist' => 'Igliwat an mga katadungan han pagpara',
'revdelete-offender' => 'An nagliwat:',

# History merging
'mergehistory' => 'Igtampo an mga kasaysayan han pakli',
'mergehistory-from' => 'Ginkuhaan nga pakli:',
'mergehistory-into' => 'Kakadtoan nga pakli:',
'mergehistory-submit' => 'Igtampo an mga rebisyon',
'mergehistory-empty' => 'Waray mga rebisyon in puydi matampo.',
'mergehistory-no-source' => 'Waray pa an tinikangan nga pakli nga $1.',
'mergehistory-no-destination' => 'Waray pa an kakadtuan nga pakli nga $1.',
'mergehistory-comment' => 'Gintampo an [[:$1]] ngada ha [[:$2]]: $3',
'mergehistory-same-destination' => 'An gintikangan ngan kakadtoan nga mga pakli in diri puydi magkaparo',
'mergehistory-reason' => 'Katadungan:',

# Merge log
'mergelog' => 'Talaan hin pagtampo',
'revertmerge' => 'Igbulag an gintampo',

# Diffs
'history-title' => "Kaagi han pagbag-o han ''$1''",
'difference-title' => 'An pagkakaiba han mga rebisyon han "$1"',
'difference-multipage' => '(Kaibhan ha butnga han mga pakli)',
'lineno' => 'Bagis $1:',
'compareselectedversions' => 'Igkumpara an mga pinili nga pagbabag-o',
'editundo' => 'Igpawara an ginbuhat',
'diff-empty' => '(Waray pagkakaiba)',
'diff-multi-manyusers' => '({{PLURAL:$1|Uska sapit-nahiuna nga rebisyon|$1 nga mga sapit-nanhiuna nga rebisyon}} nga may labaw nga $2 {{PLURAL:$2|gumaramit|mga gumaramit}} in diri ginpapakita)',

# Search results
'searchresults' => 'Mga nabilingan han pagbiling',
'searchresults-title' => 'Mga nabilngan han pagbiling para han "$1"',
'toomanymatches' => 'Sobra kadamo nga mga igo an ginbalik, alayon pagbuhat hin iba nga pakiana',
'titlematches' => 'Parehas an titulo han pakli',
'textmatches' => 'Parehas an teksto han pakli',
'notextmatches' => 'Waray teksto han pakli an parehas',
'prevn' => 'naha-una nga {{PLURAL:$1|$1}}',
'nextn' => 'sunod nga {{PLURAL:$1|$1}}',
'prevn-title' => 'Nahiuna $1 {{PLURAL:$1|resulta|mga resulta}}',
'nextn-title' => 'Sunod nga $1 {{PLURAL:$1|resulta|mga resulta}}',
'shown-title' => 'Kitaa $1 {{PLURAL:$1|resulta|mga resulta}} kada pakli',
'viewprevnext' => 'Kitaa an ($1 {{int:pipe-separator}} $2) ($3)',
'searchmenu-exists' => "'''May-ada pakli nga nakangaran hin \"[[:\$1]]\" hini nga wiki.'''",
'searchmenu-new' => '<strong>Himoa an pakli nga "[[:$1]]" dinhi nga wiki!</strong> {{PLURAL:$2|0=|Kitaa gihapon an pakli nga nabilngan han imo pagbiling.|Kitaa gihapon an mga nabilngan nga ginmawas han pagbiling.}}',
'searchprofile-articles' => 'Mga unod nga pakli',
'searchprofile-project' => 'Mga Bulig ngan Proyekto nga pakli',
'searchprofile-images' => 'Multimedia',
'searchprofile-everything' => 'Ngatanan',
'searchprofile-advanced' => 'Abansado',
'searchprofile-articles-tooltip' => 'Pamiling ha $1',
'searchprofile-project-tooltip' => 'Pamiling ha $1',
'searchprofile-images-tooltip' => 'Pamiling hin mga fayl',
'searchprofile-everything-tooltip' => 'Pamiling ha ngatanan nga sulod (lakip an mga hiruhimangraw nga pakli)',
'searchprofile-advanced-tooltip' => "Pamilnga ha mga nabatasan nga ngaran-lat'ang",
'search-result-size' => '$1 ({{PLURAL:$2|1 nga pulong|$2 nga mga pulong}})',
'search-result-category-size' => '{{PLURAL:$1|1 nga api|$1 nga mga api}} ({{PLURAL:$2|1 nga ubos-nga-kaarangay|$2 nga mga ubos-nga-kaarangay}}, {{PLURAL:$3| 1 nga fayl|$3 nga mga fayl}})',
'search-result-score' => 'Pagkaangay: $1%',
'search-redirect' => '(redirekta $1)',
'search-section' => '(bahin $1)',
'search-suggest' => 'Buot sidngon mo ba: $1',
'search-interwiki-caption' => 'Mga bugto nga proyekto',
'search-interwiki-default' => '$1 nga resulta:',
'search-interwiki-more' => '(damo pa)',
'search-relatedarticle' => 'kasumapy',
'searcheverything-enable' => "Pamilnga ha ngatanan nga ngaran-lat'ang",
'searchrelated' => 'kadugtong',
'searchall' => 'ngatanan',
'showingresultsheader' => "{{PLURAL:$5|Resulta '''$1''' han '''$3'''|Mga resulta '''$1 - $2''' han '''$3'''}} para ha '''$4'''",
'search-nonefound' => 'Waray resulta an nakakabaton han pakiana.',
'powersearch-legend' => 'Abansado nga pagbiling',
'powersearch-ns' => "Pamiling ha mga ngaran-lat'ang:",
'powersearch-redir' => 'Talaan hin mga redirect',
'powersearch-togglelabel' => 'Panginano-a:',
'powersearch-toggleall' => 'Ngatanan',
'powersearch-togglenone' => 'Waray',
'search-external' => 'Gawas nga pamiling',
'searchdisabled' => '{{SITENAME}} nga pamiling in ginparong.
Pamilnga la anay pinaagi ha Google ha pagkayana.
Ginpapasabot nga an sulod han mga panudlok han {{SITENAME}} in bangin daan an.',
'search-error' => 'May-ada sayop nga nahitabo samtang namimiling: $1',

# Preferences page
'preferences' => 'Mga karuyag',
'mypreferences' => 'Mga akon karuyag',
'prefs-edits' => 'Ihap han mga pagliwat:',
'prefs-skin' => 'Panit',
'skin-preview' => 'Pahiuna nga pagawas',
'datedefault' => 'Waray pinaurog nga karuyag',
'prefs-beta' => 'Beta nga mga nahihigamitan',
'prefs-datetime' => 'Pitsa ngan oras',
'prefs-labs' => 'Mga labs feature',
'prefs-user-pages' => 'Mga pakli hin gumaramit',
'prefs-personal' => 'Pangilal-an han nagamit',
'prefs-rc' => 'Kalalabay la nga mga pagbabag-o',
'prefs-watchlist' => 'Listahan hit binabantayan',
'prefs-watchlist-days' => 'Mga adlaw nga makikita ha barantayan:',
'prefs-watchlist-days-max' => 'Pinakadamo $1 {{PLURAL:$1|ka adlaw|ka mga adlaw}}',
'prefs-watchlist-edits' => 'Gidadamoi nga ihap hin pagliwat it makikit-an ha pinahilawig nga talaan hin barantayon:',
'prefs-watchlist-edits-max' => 'Pinakadako nga ihap: 1000',
'prefs-watchlist-token' => 'Token hin talaan hin barantayon:',
'prefs-misc' => 'Dirudilain',
'prefs-resetpass' => 'Igliwan an tigaman-pagsulod',
'prefs-changeemail' => 'Igliwan an e-mail address',
'prefs-setemail' => 'Igbutang an email address',
'prefs-email' => 'Mga pagpipilian han e-mail',
'prefs-rendering' => 'Hitsura',
'saveprefs' => 'Igtipig',
'restoreprefs' => 'Igbalik an ngatanan ngada nga aada-nga-daan nga settings (ha ngatanan nga mga bahin)',
'prefs-editing' => 'Ginliliwat',
'rows' => 'Mga rumbay pahigda:',
'columns' => 'Mga rumbay patindog:',
'searchresultshead' => 'Bilnga',
'stub-threshold-disabled' => 'Waray ginpagana',
'recentchangesdays' => 'Kadamo hin adlaw nga igpapakita an mga kabag-ohan:',
'recentchangesdays-max' => 'Pinakadamo $1 {{PLURAL:$1|ka adlaw|ka mga adlaw}}',
'recentchangescount' => 'Ihap han mga pagliwat nga igpapakita nga ginpasingada:',
'prefs-help-recentchangescount' => 'Ini in naglalakip han mga kabag-ohan nga pagliwat, mga kaagi han pakli, ngan mga talaan.',
'prefs-help-watchlist-token2' => 'Ini in sekreto nga susi ngadto han web feed an imo talaan han binabantayan.
Kun hin-o man it maaram hini in puyde bumasa han imo talaan han binabantayan, tungod hini ayaw ini igsaro ha iba.
[[Special:ResetTokens|Pidlita ini kun kinahanglan mo igreset ini]].',
'savedprefs' => 'Gintipig an im karuyag.',
'timezonelegend' => 'Zona hin oras',
'localtime' => 'Oras nga lokal',
'timezoneuseserverdefault' => 'Gamita an aada-nga-daan han wiki ($1)',
'timezoneuseoffset' => 'Iba (igbutang an offset)',
'servertime' => 'Oras han serbidor:',
'guesstimezone' => 'Butanga tikang han panngaykay(browser)',
'timezoneregion-africa' => 'Aprika',
'timezoneregion-america' => 'Amerika',
'timezoneregion-antarctica' => 'Antarktika',
'timezoneregion-arctic' => 'Arktika',
'timezoneregion-asia' => 'Asya',
'timezoneregion-atlantic' => 'Kalawdan Atlantika',
'timezoneregion-australia' => 'Australya',
'timezoneregion-europe' => 'Europa',
'timezoneregion-indian' => 'Kalawdan Indyana',
'timezoneregion-pacific' => 'Kalawdan Pasipiko',
'allowemail' => 'Igpaandar an email nga tikang ha iba nga mga gumaramit',
'prefs-searchoptions' => 'Pamilnga',
'prefs-namespaces' => "Ngaran-lat'ang",
'defaultns' => "Kun diri, pamilnga hini nga mga ngaran-lat'ang:",
'default' => 'aada-nga-daan',
'prefs-files' => 'Mga paypay',
'prefs-custom-css' => 'Custom CSS',
'prefs-custom-js' => 'Custom JavaScript',
'prefs-common-css-js' => 'Saro nga CSS/JavaScript para han ngatanan nga mga panit:',
'prefs-reset-intro' => 'Puydi nimo ini gamiton nga pakli para makareset han imo mga preperensya nga ginbutang nga daan han sityo. Diri ini puydi mapawaray-buhat.',
'prefs-emailconfirm-label' => 'Kompirmasyon han email:',
'youremail' => 'E-mail:',
'username' => '{{HENERO:$1|Agnay hit gumaramit}}:',
'uid' => 'ID hit {{HENERO:$1|Gumaramit}}:',
'prefs-memberingroups' => '{{GENDER:$2|Api}} han {{PLURAL:$1|grupo|mga grupo}}:',
'prefs-registration' => 'Oras han pagrehistro:',
'yourrealname' => 'Tinuod nga ngaran:',
'yourlanguage' => 'Yinaknan:',
'yournick' => 'Bag-o nga pirma:',
'badsiglength' => 'Hilaba hin duro it im pirma.
Dapat diri malabaw ha $1 {{PLURAL:$1|agi|mga agi}} nga kahilaba.',
'yourgender' => 'Ano an karuyag mo nga pangilal-an?',
'gender-unknown' => 'Karuyag ko diri la magyakan',
'gender-male' => 'Hiya in nag-aayad hin mga wiki nga pakli',
'gender-female' => 'Hiya in nag-aayad hin mga wiki nga pakli',
'email' => 'E-mail',
'prefs-help-realname' => 'Opsyonal an tinuod nga ngaran.
Kun pilion mo nga ihatag, ini in gagamiton ha paghatag hin atribusyon ha imo mga buhat.',
'prefs-help-email' => "Diri pinipirit it pagbutang hin E-mail address, pero kinahanglan ini para hin pag-utro hin tigaman-hit-pagsulod (''password''), ngan kun mangalimot ka hit imo tigaman-hit-pagsulod.",
'prefs-help-email-others' => 'Puydi mo pilion nga it iba in makakontak ha imo gamit an e-mail pinaagi han sumpay ha imo gumaramit o hiruhimangraw nga pakli.
An imo e-mail address in diri makikit-an kun an iba nga mga gumaramit in makontak ha imo.',
'prefs-help-email-required' => 'Kinahanglanon it e-mail address.',
'prefs-info' => 'Panguna nga pananabotan',
'prefs-i18n' => 'Internasyonalisasyon',
'prefs-signature' => 'Pirma',
'prefs-dateformat' => 'Batakan han petsa',
'prefs-advancedediting' => 'Abansado nga mga pagpipilian',
'prefs-preview' => 'Pahiuna nga pakita',
'prefs-advancedrc' => 'Abansado nga mga pagpipilian',
'prefs-advancedrendering' => 'Abansado nga mga pagpipilian',
'prefs-advancedsearchoptions' => 'Abansado nga mga pagpipilian',
'prefs-advancedwatchlist' => 'Abansado nga mga pagpipilian',
'prefs-displayrc' => 'Mga pirilion hiunong han ginpapakita',
'prefs-displaysearchoptions' => 'Mga pirilion hiunong han ginpapakita',
'prefs-displaywatchlist' => 'Mga pirilion hiunong han ginpapakita',
'prefs-tokenwatchlist' => 'Token',
'prefs-diffs' => 'Mga kaibhan',
'prefs-help-prefershttps' => 'Ini nga preperensya in madulot ha sunod nimo nga paglog-in.',

# User preference: email validation using jQuery
'email-address-validity-valid' => 'E-mail address in baga puydi',
'email-address-validity-invalid' => 'Pagbutang hin balido nga email address',

# User rights
'userrights' => 'Pagdudumara hin mga katungod han gumaramit',
'userrights-lookup-user' => 'Pagdumaraa han mga hugpo han gumaramit',
'userrights-user-editname' => 'Igbutang an agnay han gumaramit:',
'editusergroup' => 'Igliwat han mga hugpo han gumaramit',
'editinguser' => "Igliliwat an mga katungod han gumaramit han gumaramit '''[[User:$1|$1]]''' $2",
'userrights-editusergroup' => 'Igliwat an mga hugpo hin gumaramit',
'saveusergroups' => 'Igtipig an mga hugpo han gumaramit',
'userrights-groupsmember' => 'Api han:',
'userrights-groupsmember-auto' => 'Api nga daan han:',
'userrights-reason' => 'Katadungan:',
'userrights-no-interwiki' => '
Diri ka gintutugotan pagliwat han mga katungod han gumaramit ha iba nga mga wiki.',
'userrights-nodatabase' => 'Waray kaaagii an Database $1 o diri ini aada ha lokal.',
'userrights-changeable-col' => 'Mga hugpo nga puydi mo labtan',
'userrights-unchangeable-col' => 'Mga hugpo nga diri mo puydi labtan',

# Groups
'group' => 'Hugpo:',
'group-user' => 'Mga gumaramit',
'group-autoconfirmed' => 'Mga gumaramit nga lugaring nakokonpirma',
'group-bot' => 'Mga bot',
'group-sysop' => 'Mga magdudumara',
'group-bureaucrat' => 'Mga burokrata',
'group-suppress' => 'Mga nanginginano',
'group-all' => '(ngatanan)',

'group-user-member' => '{{HENERO:$1|gumaramit}}',
'group-bot-member' => 'bot',
'group-sysop-member' => 'magdudumara',
'group-bureaucrat-member' => '{{GENDER:$1|burokrata}}',
'group-suppress-member' => '{{GENDER:$1|magmarangno}}',

'grouppage-user' => '{{ns:project}}:Mga gumaramit',
'grouppage-autoconfirmed' => '{{ns:project}}:Mga gumaramit nga naka-awtokompirmado',
'grouppage-bot' => '{{ns:project}}:Mga bot',
'grouppage-sysop' => '{{ns:project}}:Mga magdudumara',
'grouppage-bureaucrat' => '{{ns:project}}:Mga burokrata',
'grouppage-suppress' => '{{ns:project}}:Nanginginano',

# Rights
'right-read' => 'Igbasa an mga pakli',
'right-edit' => 'Igliwat an mga pakli',
'right-createpage' => 'Paghimo hin mga pakli (nga diri an mga hiruhimangraw nga mga pakli)',
'right-createtalk' => 'Paghimo hin hiruhimangraw nga mga pakli',
'right-createaccount' => 'Paghimo hin bag-o nga mga akawnt hin gumaramit',
'right-minoredit' => 'Igmarka an mga ginliwat komo gutiay la',
'right-move' => 'Igbalhin an mga pakli',
'right-move-subpages' => 'Igbalhin an pakli lakip an ira mga bahinpakli',
'right-move-rootuserpages' => 'Igbalhin an gamot nga mga pakli han gumaramit',
'right-movefile' => 'Balhina an mga paypay',
'right-upload' => 'Igkarga paigbaw an mga paypay',
'right-reupload' => 'Sapawa an mga aada nga mga paypay',
'right-reupload-own' => 'Igsapaw an aada yana nga mga paypay nga ginkarga-pasaka nimo mismo',
'right-upload_by_url' => 'Igkarga paigbaw an mga paypay tikang ha uska URL',
'right-autoconfirmed' => 'Igliwat an mga semi-pinanpasaliporan nga pakli',
'right-bot' => 'Igtrato komo uska naglulugaring nga proseso',
'right-delete' => 'Igpara an mga pakli',
'right-bigdelete' => 'Igpara an mga pakli nga may-ada dagko nga mga kaagi',
'right-browsearchive' => 'Pamiling hin mga ginpara nga mga pakli',
'right-undelete' => 'Igpawara an pagpara han pakli',
'right-suppressionlog' => 'Kitaa an mga pribado nga mga talaan',
'right-block' => 'Pugnga an iba nga mga gumaramit ha pagliwat',
'right-blockemail' => 'Pugnga an uska gumaramit tikang ha pagpadangat hin e-mail',
'right-hideuser' => 'Pugnga an uska agnay-hin-gumaramit, tago-a ito tikang ha publiko',
'right-unblockself' => 'Lugaring nga makakatanggal han pagpugong',
'right-editinterface' => 'Igliwat an user interface',
'right-editusercssjs' => 'Igliwat an kanan iba mga gumaramit nga mga paypay han CSS ngan JavaScript',
'right-editusercss' => 'Igliwat an kanan iba mga gumaramit nga mga paypay han CSS',
'right-edituserjs' => 'Iliwat an kanan iba mga gumaramit nga paypay han JavaScript',
'right-viewmywatchlist' => 'Kitaa an imo kalugaringon nga talaan hin barantayon',
'right-editmywatchlist' => 'Igliwat an imo talaan hin barantayon. Pasabot la nga an pipira ng abuhat in padayon nga madugang hin mga pakli bisan waray hini nga katungod.',
'right-viewmyprivateinfo' => 'Kitaa an imo kalugaringon nga pribado nga datos (sugad han email address, tinuod nga ngaran)',
'right-import' => 'Man-aangbit hin mga pakli tikang ha iba nga mga wiki',
'right-importupload' => 'Man-aangbit hin mga pakli tikang ha uska paypay nga iginkarga-pasaka',
'right-mergehistory' => 'Igtampo an kaagi han mga pakli',
'right-userrights' => 'Igliwat an ngatanan nga mga katungod han gumaramit',
'right-userrights-interwiki' => 'Igliwat an mga katungod han gumaramit han mga gumaramit ha iba nga mga wiki',
'right-siteadmin' => 'Igtrangka ngan igrangka an database',
'right-sendemail' => 'Padad-i hin e-mail ngada ha iba nga mga gumaramit',

# Special:Log/newusers
'newuserlogpage' => 'Talaan han paghimo hin gumaramit',
'newuserlogpagetext' => 'Ini an talaan han mga nagkahihimo nga mga gumaramit.',

# User rights log
'rightslog' => 'Talaan hin mga katungod han gumaramit',

# Associated actions - in the sentence "You do not have permission to X"
'action-read' => 'basaha ini nga pakli',
'action-edit' => 'liwata ini nga pakli',
'action-createpage' => 'pahimo hin mga pakli',
'action-createtalk' => 'Paghimo hin hiruhimangraw nga mga pakli',
'action-createaccount' => 'Himoa ini nga akawnt hin gumaramit',
'action-minoredit' => 'butanga hin tigaman hinin nga pagliwat komo gutiay',
'action-move' => 'balhina ini nga pakli',
'action-move-subpages' => 'igbalhin ini nga pakli, ngan iya mga bahin-pakli',
'action-move-rootuserpages' => 'Igbalhin an gamot nga mga pakli han gumaramit',
'action-movefile' => 'igbalhin ini nga paypay',
'action-upload' => 'igkarga-pasaka ini nga paypay',
'action-reupload' => 'igsapaw ini nga aanhi nga paypay',
'action-upload_by_url' => 'igkaraga-pasaka ini nga paypay tikang ha uska URL',
'action-delete' => 'paraa ini nga pakli',
'action-deleterevision' => 'igpara ini nga pagbag-o',
'action-deletedhistory' => 'kitaa an kanan hini nga pakli kaagi han mga ginpara',
'action-browsearchive' => 'Pamiling hin mga ginpara nga mga pakli',
'action-undelete' => 'Balika an ginpara hini nga pakli',
'action-suppressionlog' => 'kitaa an kanan hini pribado nga talaan',
'action-block' => 'Pugnga ini nga gumaramit ha pagliwat',
'action-protect' => 'igsaliwan an katupngan han pananalipod para hini nga pakli',
'action-import' => 'ig-angbit ini nga pakli tikang ha iba nga wiki',
'action-importupload' => 'ig-angbit ini nga pakli tikang ha uska ginkarga-pasaka nga paypay',
'action-patrol' => 'markahi an kanan iba pagliwat komo nakapatrolya',
'action-mergehistory' => 'Igtampo an kaagi hini nga pakli',
'action-userrights' => 'Igliwat an ngatanan nga mga katungod han gumaramit',
'action-sendemail' => 'Padara hin mga e-mail',

# Recent changes
'nchanges' => '$1 {{PLURAL:$1|pagbag-o|mga pagbabag-o}}',
'recentchanges' => 'Mga kabag-ohan',
'recentchanges-legend' => 'Mga pirilion han mga lab-as nga pagbag-o',
'recentchanges-summary' => 'Nasubay han pinakalab-as nga pagbag-o ha wiki dinhi nga pakli.',
'recentchanges-feed-description' => 'Panultol han pinakalab-as nga pagbabag-o ha wiki dinhi nga panubong.',
'recentchanges-label-newpage' => 'Ini nga pagliwat hin naghimo hin bag-o nga pakli',
'recentchanges-label-minor' => 'Gutiay ini nga pagliwat',
'recentchanges-label-bot' => 'Ini nga pagliwat in ginbuhat han bot',
'recentchanges-label-unpatrolled' => 'Ini nga pagliwat in diri pa nakapatrol',
'rcnotefrom' => "An ha ubos in mga pagbabag-o tikanng '''\$''' (kutob ngadto ha '''\$1''' nga ginpakita).",
'rclistfrom' => 'Pakit-a an mga ginbag-ohan tikang han $1',
'rcshowhideminor' => '$1 gudti nga mga pagliwat',
'rcshowhidebots' => '$1 mga bot',
'rcshowhideliu' => '$1 ka rehistrado nga gumaramit',
'rcshowhideanons' => '$1 waray nagpakilala nga mga gumaramit',
'rcshowhidepatr' => '$1 mga pinatrolya nga mga paliwat',
'rcshowhidemine' => '$1 akon mga ginliwat',
'rclinks' => 'Igpakita an katapusan nga $1 nga pagbabag-o ha sulod han urhi nga $2 ka mga adlaw<br />$3',
'diff' => 'kaibhan',
'hist' => 'kaagi',
'hide' => 'Tago-a',
'show' => 'Igpakita',
'minoreditletter' => 'g',
'newpageletter' => 'B',
'boteditletter' => 'b',
'rc_categories_any' => 'Bisan ano nga',
'newsectionsummary' => '/* $1 */ bag-o nga bahin',
'rc-enhanced-expand' => 'Igpakita an detalye',
'rc-enhanced-hide' => 'Igtago an mga detalye',
'rc-old-title' => 'orihinal nga ginhimo komo "$1"',

# Recent changes linked
'recentchangeslinked' => 'Mga may kalabotan nga binag-o',
'recentchangeslinked-feed' => 'Mga may kalabotan nga binag-o',
'recentchangeslinked-toolbox' => 'Mga may kalabotan nga binag-o',
'recentchangeslinked-title' => "Mga pagbag-o kasumpay ha ''$1''",
'recentchangeslinked-summary' => "Ini nga taramdan hin pagbag-o nga lab-as nga hinimo ha mga pakli nga nakasumpay tikang a naka-specifico nga pakli (o ha api han uska specifico nga kaarangay).
Mga pakli ha [[Special:Watchlist|imo angay timan-an]] in naka-'''bold'''.",
'recentchangeslinked-page' => 'Ngaran han pakli:',
'recentchangeslinked-to' => 'Igpakita lugod an mga pagbabag-o han mga pakli nga nahisumpay ha ginhatag nga pakli',

# Upload
'upload' => 'Pagkarga hin file',
'uploadbtn' => 'Igkarga an file',
'reuploaddesc' => 'Undanga an pagkarga-pasaka ngan balik ngadto ha porma han pagkarga-pasaka',
'uploadnologin' => 'Diri nakalog-in',
'uploaderror' => 'Sayop hit pagkarga-pasaka',
'upload-recreate-warning' => "'''Pahimatngon:  An fayl nga may-ada hiton nga ngaran in ginpara o ginbalhin.'''

An taramdan han pagpara ngan pagbalhin para hini nga pakli in ginhahatag para han imo kamurayaw:",
'upload-permitted' => 'Gintutugotan nga mga klase han paypay: $1.',
'upload-preferred' => 'Karuyag nga mga tipo hin paypay: $1.',
'upload-prohibited' => 'Gindidire nga mga klase han paypay: $1.',
'uploadlog' => 'Talaan hin ginkarga-pasaka',
'uploadlogpage' => 'Talaan han mga ginkarga-paigbaw',
'filename' => 'Ngaran han fayl',
'filedesc' => 'Dalikyat nga pulong',
'fileuploadsummary' => 'Dalikyat nga pulong:',
'filereuploadsummary' => 'Mga pagbal-iw ha fayl:',
'filestatus' => 'Kahimtang han copyright:',
'filesource' => 'Tinikangan:',
'uploadedfiles' => 'Mga paypay nga ginkarga-pasaka',
'ignorewarning' => 'Pabay-i an pahimatngon ngan igtipig la ngahaw',
'ignorewarnings' => 'Pasagdi an bisan ano nga mga pahimatngon',
'minlength1' => 'Iton ngaran-han-paypay in kinahanglan may-ada bisan usa la nga letra.',
'filename-toolong' => 'Iton ngaran hin paypay in diri puyde na mas lapos pa ha 240 ka mga byte.',
'badfilename' => 'An ngaran-han-paypay in ginliwat ngada ha "$1".',
'empty-file' => 'An paypay nga imo ginsumite in waray sulod.',
'filename-tooshort' => 'An ngaran han fayl in halipot hin duro.',
'filetype-banned' => 'Ini nga klase nga paypay in gindidire.',
'illegal-filename' => 'An ngaran han fayl in diri gintutugutan.',
'overwrite' => 'It pagsapaw han aada nga paypay in diri gintutugotan.',
'unknown-error' => 'Nahitabo an waray kasasabti nga sayop.',
'tmp-create-error' => 'Diri makakahimo hin temporaryo nga paypay.',
'tmp-write-error' => 'Sayop ha pagsurat hin temporaryo nga paypay.',
'large-file' => 'Ginrerekomenda nga it mga paypay in diri malapos hin $1;
ini nga paypay in $2.',
'largefileserver' => 'Ini nga paypay in durudako kaysa ha ginpapakarawat han serbidor.',
'windows-nonascii-filename' => 'Ini nga wiki in diri nakasuportado han mga ngaran-han-paypay nga may-ada pinaurog nga mga karakter.',
'uploadwarning' => 'Pahimatngon han pagkarga paigbaw',
'savefile' => 'Igtipig an paypay',
'uploadedimage' => 'ginkarga-paigbaw "[[$1]]"',
'overwroteimage' => 'Ginkaraga an bag-o nga bersyon han "[[$1]]"',
'uploaddisabled' => 'Waray ginpagana an pagkarga paigbaw',
'copyuploaddisabled' => 'An pagkarga paigbaw pinaagi hin URL in waray ginpagana',
'uploadfromurl-queued' => 'An imo ginkarga-paigbaw hin nakapila.',
'uploaddisabledtext' => 'An mga pagkarga-paigbaw in diri ginpapagana.',
'php-uploaddisabledtext' => 'An mga pagkarga-paigbaw han paypay in diri ginpapagana ha PHP.
Alayon panginanoi an kahimtang han file_uploads.',
'uploadscripted' => 'Ini nga paypay in nagsusulod hin HTML o script code nga puydi masayopan paghubad an web browser.',
'uploadvirus' => 'Ini nga fayl may-ada sulod nga bayrus!
Mga detalye: $1',
'upload-source' => 'Tinikangan nga fayl',
'sourcefilename' => 'Tinikangan nga ngaran han fayl:',
'sourceurl' => 'Tinikangan nga URL:',
'destfilename' => 'Kakadtoan nga ngaran-hin-paypay:',
'upload-maxfilesize' => 'Pinakadamo nga kadako han paypay: $1',
'upload-description' => 'Pangilal-an han paypay',
'upload-options' => 'Mga pirilion han pagkarga paigbaw',
'watchthisupload' => 'Bantayi ini nga paypay',
'upload-success-subj' => 'Malinamposan an imo pagkarga-paigbaw.',
'upload-success-msg' => 'An imo pagkarga-paigbaw tikang ha [$2] in malinamposon.  Ini in aada dinhi: [[:{{ns:file}}:$1]]',
'upload-failure-subj' => 'May-ada problema an pagkarga-paigbaw',
'upload-failure-msg' => 'May-ada problema an imo pagkarga-paigbaw tikang ha [$2]:

$1',
'upload-warning-subj' => 'Pahimatngon han pagkarga paigbaw',

'upload-proto-error' => 'Sayop nga protocol',
'upload-file-error' => 'Sayop ha sulod',
'upload-misc-error' => 'Waray kasasabti nga sayop hin pagkarga-paigbaw',
'upload-unknown-size' => 'Waray kasabti an kadako',
'upload-http-error' => 'Mayda nahitabo nga sayop hin HTTP: $1',

# File backend
'backend-fail-notexists' => 'Waray ngada an paypay nga $1.',
'backend-fail-delete' => 'Diri nakakapara han paypay nga "$1".',
'backend-fail-alreadyexists' => 'May-ada na paypay nga "$1".',
'backend-fail-store' => 'Diri nakakatipig han paypay "$1" ha "$2".',
'backend-fail-copy' => 'Diri nakakakopya han paypay nga "$1" ngada "$2".',
'backend-fail-move' => 'Diri nakakabalhin han paypay "$1" ngada "$2".',
'backend-fail-opentemp' => 'Diri nakakaabre han temporaryo nga paypay.',
'backend-fail-writetemp' => 'Diri nakakasurat ngada ha temporaryo nga paypay.',
'backend-fail-closetemp' => 'Diri nasasara an temporaryo nga paypay.',
'backend-fail-read' => 'Diri nababasahan han paypay nga "$1".',
'backend-fail-create' => 'Diri nasusuratan an paypay nga "$1".',
'backend-fail-maxsize' => 'Diri nasusuratan an paypay nga "$1" tungod nga mas dako ini kaysa hin {{PLURAL:"$2|usa nga byte|$2 nga mga byte}}.',
'backend-fail-readonly' => 'An panluyo nga tiripigan nga "$1" in ha pagkayana in panbasa-la.  An rason nga ginhatag in: "\'\'$2\'\'"',
'backend-fail-connect' => 'Diri nakakasumpay ha storage backend "$1".',

# Lock manager
'lockmanager-notlocked' => 'Waray ka rangka an "$1"; diri ini nakatrangka.',
'lockmanager-fail-closelock' => 'Diri nakakasera han nakatrangka nga paypay para han "$1".',
'lockmanager-fail-deletelock' => 'Diri nakakapara han nakatrangka nga paypay para hit "$1".',
'lockmanager-fail-acquirelock' => 'Diri nakakakarawat hin trangka para hit "$1".',
'lockmanager-fail-openlock' => 'Diri nakakaabre han nakatrangka nga paypay para hit "$1".',
'lockmanager-fail-releaselock' => 'Diri nakakabul-iw han trangka para hit "$1".',
'lockmanager-fail-svr-acquire' => 'Diri nakakakarawat in mga trangka ha serbidor $1.',
'lockmanager-fail-svr-release' => 'Diri nakakabul-iw in mga trangka ha serbidor $1.',

# ZipDirectoryReader
'zip-wrong-format' => 'An espisipikado nga paypay in diri naka ZIP nga paypay.',

# Special:UploadStash
'uploadstash-errclear' => 'An paghawan han mga paypay in diri malinamposon.',
'uploadstash-refresh' => 'Igpalab-as utro an talaan hin mga paypay',

# img_auth script messages
'img-auth-accessdenied' => 'Diri gintutugutan makasulod',
'img-auth-nofile' => 'Waray ngada an paypay nga "$1".',

# HTTP errors
'http-read-error' => 'HTTP maysayop ha pagbasa.',
'http-timed-out' => 'Naubosan hin oras ha pagpaalayon ha HTTP.',
'http-curl-error' => 'May sayop ha pagkuha hin URL: $1',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6' => 'Diri nakakaabot ha URL',
'upload-curl-error28' => 'Linmapos ha oras an pagkarga-pasaka',

'license' => 'Palilisensya:',
'license-header' => 'Palilisensya:',
'nolicense' => 'Waray napili',

# Special:ListFiles
'imgfile' => 'paypay',
'listfiles' => 'Listahan han fayl',
'listfiles_date' => 'Pitsa',
'listfiles_name' => 'Ngaran',
'listfiles_user' => 'Nagamit',
'listfiles_size' => 'Kadako',
'listfiles_count' => 'Mga bersyon',
'listfiles-latestversion-yes' => 'Oo',
'listfiles-latestversion-no' => 'Diri',

# File description page
'file-anchor-link' => 'Paypay',
'filehist' => 'Kaagi han paypay',
'filehist-help' => 'Pidlita an adlaw/oras para makit-an an fayl nga naggawas hito nga oras.',
'filehist-deleteall' => 'Paraa ngatanan',
'filehist-deleteone' => 'paraa',
'filehist-revert' => 'igbalik',
'filehist-current' => 'yana',
'filehist-datetime' => 'Pitsa/Oras',
'filehist-thumb' => 'Thumbnail',
'filehist-thumbtext' => 'Bersyon han thumbnail han $1',
'filehist-nothumb' => 'Waray thumbnail',
'filehist-user' => 'Gumaramit',
'filehist-dimensions' => 'Mga dimensyon',
'filehist-filesize' => 'Kadako han fayl',
'filehist-comment' => 'Komento',
'filehist-missing' => 'Nawawara an fayl',
'imagelinks' => 'Mga gamit hin paypay',
'linkstoimage' => 'An nasunod nga {{PLURAL:$1|pakli nasumpay|$1 mga pakli nasumpay}} hini nga paypay:',
'nolinkstoimage' => 'Waray mga pakli nga nasumpay hini nga fayl.',
'linkstoimage-redirect' => '$1 (redirecta an paypay) $2',
'sharedupload' => 'Ini nga fayl tikang han $1 ngan puyde magamit ha iba nga mga proyekto.',
'sharedupload-desc-there' => 'Ini nga fayl tikang han $1 ngan puyde magamit ha iba nga mga proyekto.
Alayon pagkita han [$2 nga pakli hin pagpahayag mahitungod hini nga fayl] para hin dugang nga kasayuran.',
'sharedupload-desc-here' => 'An fayl in tikang ha $1 ngan puydi mahigamitan para han iba nga mga proyekto.
An paglaladawan han iya [$2 fayl han paglaladawan nga pakli] didto in ginpapakita ha sirong.',
'uploadnewversion-linktext' => 'Igkarga-pasaka an ba-o nga bersyon hini nga paypay',
'shared-repo-from' => 'tikang $1',
'upload-disallowed-here' => 'Diri nimo masasapaw ini nga paypay.',

# File reversion
'filerevert' => 'Igbalik $1',
'filerevert-legend' => 'Igbalik an paypay',
'filerevert-comment' => 'Rason:',
'filerevert-defaultcomment' => 'Ginbalik nga bersyon han $2, $1',
'filerevert-submit' => 'Igbalik',

# File deletion
'filedelete' => 'Igpara $1',
'filedelete-legend' => 'Igpara an file',
'filedelete-comment' => 'Katadungan:',
'filedelete-submit' => 'Paraa',
'filedelete-success' => "Napara an '''$1'''",
'filedelete-otherreason' => 'Lain/dugang nga katadungan:',
'filedelete-reason-otherlist' => 'Lain nga katadungan',
'filedelete-edit-reasonlist' => 'Igliwat an mga rason han pagpara',
'filedelete-maintenance-title' => 'Diri nakakapara han paypay',

# MIME search
'mimesearch' => 'MIME nga pamiling',
'mimetype' => 'MIME nga klase:',
'download' => 'pagkarga paubos',

# Unwatched pages
'unwatchedpages' => 'Mga paypay nga gintanggal an pagbantay',

# List redirects
'listredirects' => 'Talaan hin mga redirect',

# Unused templates
'unusedtemplates' => 'Waray kagamiti nga mga batakan',
'unusedtemplateswlh' => 'iba nga mga sumpay',

# Random page
'randompage' => 'Bisan ano nga pakli',

# Random page in category
'randomincategory-selectcategory-submit' => 'Pakadto',

# Random redirect
'randomredirect' => 'Bisan ano la nga redirect',
'randomredirect-nopages' => 'Waray mga redirecta ha ngaran-lat\'ang nga "$1".',

# Statistics
'statistics' => 'Mga estadistika',
'statistics-header-pages' => 'Mga estadistika han pakli',
'statistics-header-edits' => 'Mga estadistika han pagliwat',
'statistics-header-views' => 'Mga estadistika han nakita',
'statistics-header-users' => 'Mga estadistika han gumaramit',
'statistics-header-hooks' => 'Lain nga mga estadistika',
'statistics-articles' => 'Unod nga mga pakli',
'statistics-pages' => 'Mga pakli',
'statistics-pages-desc' => 'Ngatanan nga mga pakli ha sulod hini nga wiki, lakip an hiruhimangraw nga mga pakli, mga redirect, ngan iba pa',
'statistics-files' => 'Mga paypay nga iginkarga pasaka',
'statistics-edits' => 'Mga pagliwat hit pakli tikang gintukod hini nga {{SITENAME}}',
'statistics-edits-average' => 'Average nga mga pagliwat kada pakli',
'statistics-views-total' => 'Ngatanan nga mga panginano',
'statistics-views-peredit' => 'Mga panginano kada pagliwat',
'statistics-users' => 'Mga [[Special:ListUsers|gumaramit]] nga nakarehistro',
'statistics-users-active' => 'Mga gumaramit nga nanggigios',
'statistics-users-active-desc' => 'Mga gumaramit nga may-ada iginbuhat ha urhi nga {{PLURAL:$1|ka adlaw|$1 ka mga adlaw}}',
'statistics-mostpopular' => 'Gidamoi nga ginpanginanohan nga mga pakli',

'pageswithprop-submit' => 'Kadto-a',

'doubleredirects' => 'Mga doble nga redirekta',
'double-redirect-fixer' => 'Mangangayad hin redirekta',

'brokenredirects' => 'Mga redirect nga utod',
'brokenredirects-edit' => 'igliwat',
'brokenredirects-delete' => 'paraa',

'withoutinterwiki' => 'Mga pakli nga waray sumpay nga yinaknan',
'withoutinterwiki-legend' => 'Prefix',
'withoutinterwiki-submit' => 'Igpakita',

'fewestrevisions' => 'Mga pakli nga may pinakagutiay nga mga rebisyon',

# Miscellaneous special pages
'nbytes' => '$1 {{PLURAL:$1|nga byte|nga mga byte}}',
'ncategories' => '$1 {{PLURAL:$1|nga kaarangay|nga mga kaarangay}}',
'ninterwikis' => '$1 {{PLURAL:$1|interwiki|mga interwiki}}',
'nlinks' => '$1 {{PLURAL:$1|nga sumpay|nga mga sumpay}}',
'nmembers' => '$1 {{PLURAL:$1|nga api|nga mga api}}',
'nrevisions' => '$1 {{PLURAL:$1|nga pagliwat|nga mga pagliwat}}',
'nviews' => '$1 {{PLURAL:$1|nga pangita|nga mga pangita}}',
'nimagelinks' => 'Gingamit ha $1 {{PLURAL:$1|nga pakli|nga mga pakli}}',
'ntransclusions' => 'gingamit ha $1 {{PLURAL:$1|nga pakli|nga mga pakli}}',
'specialpage-empty' => 'Waray mga resulta para hini nga report.',
'lonelypages' => 'Mga nahibulag nga mga pakli',
'lonelypagestext' => 'An masunod nga pakli in diri nakasumpay tikang o nakatranscluderer ngada ha iba nga mga pakli ha {{SITENAME}}.',
'uncategorizedpages' => 'Mga nagkikinahanglan hin pakli',
'uncategorizedcategories' => 'Waray kaarangay nga mga kaarangay',
'uncategorizedimages' => 'Waray kaarangay nga mga paypay',
'uncategorizedtemplates' => 'Waray kaarangay nga mga batakan',
'unusedcategories' => 'Waray kagamit nga mga kaarangay',
'unusedimages' => 'Waray kagamit nga mga fayl',
'popularpages' => 'Mga sikat nga pakli',
'wantedcategories' => 'Mga nagkikinahanglan hin kaarangay',
'wantedpages' => 'Mga ginkikinahanglan nga pakli',
'wantedfiles' => 'Mga nagkikinahanglan hin file',
'wantedtemplates' => 'Mga ginkikinahanglan nga batakan',
'mostlinked' => 'Pinakadamo nga mga ginsumpayan nga pakli',
'mostlinkedcategories' => 'Pinakadamo nga mga ginsumpayan nga kaarangay',
'mostlinkedtemplates' => 'Pinakadamo nga mga ginsumpayan nga batakan',
'mostcategories' => 'Mga paypay nga may-ada pinakadamo nga mga kaarangay',
'mostimages' => 'Pinakadamo nga nahisumpayan nga mga paypay',
'mostinterwikis' => 'Mga pakli nga may-ada pinakadamo nga mga interwiki',
'mostrevisions' => 'Mga pakli nga may-ada pinakadamo nga mga rebisyon',
'prefixindex' => 'Ngatanan nga pakli nga may-ada pahiuna-nga-sumpay',
'shortpages' => 'Haglipot nga mga pakli',
'longpages' => 'Haglaba nga mga pakli',
'deadendpages' => 'Waray na kakadtoan nga mga pakli',
'protectedpages' => 'Pinapasaliporan nga mga pakli',
'protectedtitles' => 'Pinapasaliporan nga mga titulo',
'listusers' => 'Lista han mga gumaramit',
'listusers-editsonly' => 'Igpakita la an mga gumaramit nga may-ada ginliwat',
'listusers-creationsort' => 'Ginsusunodsunod pinaagi han paghimo nga petsa',
'usereditcount' => '$1 {{PLURAL:$1|ka pagliwat|ka mga pagliwat}}',
'usercreated' => '{{GENDER:$3|Ginhimo}} han $1 ha $2',
'newpages' => 'Bag-o nga mga pakli',
'newpages-username' => 'Agnay hiton gumaramit:',
'ancientpages' => 'Mga gidaani nga pakli',
'move' => 'Balhina',
'movethispage' => 'Balhina ini nga pakli',
'notargettitle' => 'Waray iiguon',
'nopagetitle' => 'Waray sugad hito nga kakadtoan nga pakli',
'pager-newer-n' => '{{PLURAL:$1|burubag-o 1|burubag-o $1}}',
'pager-older-n' => '{{PLURAL:$1|durudaan 1|durudaan $1}}',

# Book sources
'booksources' => 'Mga libro nga tinikangan',
'booksources-search-legend' => 'Pamilnga an mga libro nga gintikangan',
'booksources-go' => 'Kadto-a',

# Special:Log
'specialloguserlabel' => 'Magburuhat:',
'speciallogtitlelabel' => 'iiguon (titulo o gumarami):',
'log' => 'Mga talaan',
'all-logs-page' => 'Ngatanan nga mga talaan panpubliko',

# Special:AllPages
'allpages' => 'Ngatanan nga mga pakli',
'alphaindexline' => '$1 tubtob ha $2',
'nextpage' => 'Sunod nga pakli ($1)',
'prevpage' => 'Nahiuna nga pakli ($1)',
'allpagesfrom' => 'Igpakita an mga pakli nga nagtitikang ha:',
'allpagesto' => 'Igpakita an mga pakli nga nahuhuman ha:',
'allarticles' => 'Ngatanan nga mga barasahon',
'allinnamespace' => "Ngatanan nga mga pakli ($1 ngaran-lat'ang)",
'allpagessubmit' => 'Kadto-a',
'allpages-bad-ns' => '{{SITENAME}} in waray ngaran-lat\'ang nga "$1".',
'allpages-hide-redirects' => 'Igtago an mga redirekta',

# SpecialCachedPage
'cachedspecial-refresh-now' => 'Igkita an pinakaurhi.',

# Special:Categories
'categories' => 'Mga kaarangay',
'categoriesfrom' => 'Igpakita in mga kaarangay nga natikang ha:',
'special-categories-sort-count' => 'igtalaan ha pag-ihap',
'special-categories-sort-abc' => 'igtalaan ha abakadahan',

# Special:DeletedContributions
'deletedcontributions' => 'Mga ginpara nga mga ámot hin nágámit',
'deletedcontributions-title' => 'Ginpara nga mga amot han nagamit',
'sp-deletedcontributions-contribs' => 'mga amot',

# Special:LinkSearch
'linksearch' => 'Pamiling ha mga sumpay ha gawas',
'linksearch-ns' => "Ngaran-lat'ang:",
'linksearch-ok' => 'Pamilnga',
'linksearch-line' => 'An $1 in nahasumpay tikang ha $2',

# Special:ListUsers
'listusersfrom' => 'Igpakita an mga nagamit nga nagtitikang ha:',
'listusers-submit' => 'Pakit-a',
'listusers-noresult' => 'Waray gumaramit nga nahiagian.',
'listusers-blocked' => '(ginpugngan)',

# Special:ActiveUsers
'activeusers' => 'Taramdan hin mga gumaramit nga nanggigios',
'activeusers-hidebots' => 'Igtago an mga bot',
'activeusers-hidesysops' => 'Igtago an mga magdudumara',
'activeusers-noresult' => 'Waray gumaramit nga nahiagian.',

# Special:ListGroupRights
'listgrouprights' => 'Mga katungod han grupo hin gumaramit',
'listgrouprights-summary' => 'An masunod nga uska talaan hin mga grupo hin gumaramit sumala hinin nga wiki, ngan an ira nahisusumpay nga paggamit nga katungod.  Bangin may-ada [[{{MediaWiki:Listgrouprights-helppage}}|dugang nga impormasyon]] mahiunong han indibiduwal nga mga katungod.',
'listgrouprights-key' => 'Leyenda:
* <span class="listgrouprights-granted">Gintagan hin katungod</span>
* <span class="listgrouprights-revoked">Waray ginhatag an katungod</span>',
'listgrouprights-group' => 'Hugpo',
'listgrouprights-rights' => 'Mga katungod',
'listgrouprights-helppage' => 'Help:Mga katungod han hugpo',
'listgrouprights-members' => '(taramdan hiton mga api)',
'listgrouprights-addgroup' => 'Dugnga {{PLURAL:$2|hugpo|mga hugpo}}: $1',
'listgrouprights-removegroup' => 'Tanggala {{PLURAL:$2|hugpo|mga hugpo}}: $1',
'listgrouprights-addgroup-all' => 'Igdugang ngatanan nga mga hugpo',
'listgrouprights-removegroup-all' => 'Igtanggal ngatanan nga mga hugpo',
'listgrouprights-addgroup-self' => 'Igdugang an {{PLURAL:$2|grupo|mga grupo}} ha kalugaringon nga akawnt: $1',
'listgrouprights-removegroup-self' => 'Igtanggal an {{PLURAL:$2|grupo|mga grupo}} tikang ha kalugaringon nga akawnt: $1',
'listgrouprights-addgroup-self-all' => 'Igdugang an ngatanan nga mga grupo ha kalugaringon nga akawnt',
'listgrouprights-removegroup-self-all' => 'Igtanggal an ngatanan nga mga grupo tikang ha kalugaringon nga akawnt',

# Email user
'mailnologin' => 'Waray kakadtoan nga address',
'mailnologintext' => 'Kinahanglan nimo nga [[Special:UserLogin|nakalog-in]] ngan may-ada balido nga email address ha imo[[Special:Preferences|mga preperensya]] para makapadangat hin email ngadto ha iba nga mga gumaramit.',
'emailuser' => 'Ig-e-mail ini nga gumaramit',
'emailuser-title-target' => 'Ig-E-mail ini nga {{HENERO:$1|gumaramit}}',
'emailuser-title-notarget' => 'Gumaramit han e-mail',
'emailpage' => 'Gumaramit han e-mail',
'defemailsubject' => '{{SITENAME}} e-mail tikang kan gumaramit na hi "$1"',
'usermaildisabled' => 'Waray ginpagana an e-mail han gumaramit',
'usermaildisabledtext' => 'Diri ka makakapadangat hin e-mail ha iba nga mga gumaramit ha dinhi nga wiki',
'noemailtitle' => 'Waray e-mail address',
'nowikiemailtitle' => 'Waray gintutugutan nga e-mail',
'emailusername' => 'Agnay hiton gumaramit:',
'emailusernamesubmit' => 'Igsumite',
'emailfrom' => 'Tikang kan:',
'emailto' => 'Para kan:',
'emailsubject' => 'Himangrawon:',
'emailmessage' => 'Buot igpasabot:',
'emailsend' => 'Igpadara',
'emailccme' => 'Igemail ako hini nga kopya hit ak buot igpasabot.',
'emailsent' => 'Napadara an e-mail',

# User Messenger
'usermessage-summary' => 'Nabilin hin mensahe pansistema',
'usermessage-editor' => 'Mensahero han sistema',

# Watchlist
'watchlist' => 'Barantayan',
'mywatchlist' => 'Mga angay timan-an nakon',
'watchlistfor2' => 'Para ha $1 $2',
'watchnologin' => 'Diri nakalog-in',
'addwatch' => 'Igdugang an listahan hit binabantayan',
'removewatch' => 'Tanggala tikang ha listahan han binabantayan',
'watch' => 'Bantayi',
'watchthispage' => 'Bantayi ini nga pakli',
'unwatch' => 'Pabay-i an pagbantay',
'unwatchthispage' => 'Undangi pagbantay',
'notanarticle' => 'Diri uska unod nga pakli',
'notvisiblerev' => 'An urhi nga pagliwat han iba nga gumaramit in ginpara',
'watchlist-details' => '{{PLURAL:$1|$1 nga pakli|$1 nga mga pakli}} nga aada ha imo talaan nga binabantayan, diri lakip an mga hiruhimangraw-nga-pakli.',
'wlshowlast' => 'Igpakita an katapusan nga $1 nga mga oras $2 nga mga adlaw $3',
'watchlist-options' => 'Mga pirilian han talaan han binabantayan',

# Displayed when you click the "watch" button and it is in the process of watching
'watching' => 'Ginbabantay...',
'unwatching' => 'Diri na ginbabantay...',

'enotif_reset' => 'Markahi an ngatanan nga mga pakli nga ginbisita na',
'enotif_impersonal_salutation' => 'gumaramit han {{SITENAME}}',
'enotif_subject_deleted' => 'An {{SITENAME}} pakli nga $1 in {{GENDER:$2|ginpara}} ni $2',
'enotif_subject_created' => 'An {{SITENAME}} pakli nga $1 in {{GENDER:$2|ginhimo}} ni $2',
'enotif_subject_moved' => 'An {{SITENAME}} pakli nga $1 in {{GENDER:$2|ginbalhin}} ni $2',
'enotif_subject_restored' => 'An {{SITENAME}} pakli nga $1 in {{GENDER:$2|ginbalik}} ni $2',
'enotif_subject_changed' => '{{SITENAME}} page $1 has been {{GENDER:$2|ginbal-iw}} by $2',
'enotif_anon_editor' => 'waray magpakilala nga gumaramit $1',
'created' => 'nahimo',
'changed' => 'naliwanan',

# Delete
'deletepage' => 'Igpara an pakli',
'confirm' => 'Kompirma',
'excontent' => "An sulod in: ''$1''",
'excontentauthor' => 'an sulod in: \'\'$1\'\' (ngan hi "[[Special:Contributions/$2|$2]]" la an nag-amot)',
'exbeforeblank' => 'sulod san-o paghawan in: "$1"',
'exblank' => 'waray sulod an pakli',
'delete-confirm' => 'Igpara "$1"',
'delete-legend' => 'Igpara',
'actioncomplete' => 'Malinampuson an ginbuhat',
'actionfailed' => 'Napakyas an ginbuhat',
'deletedtext' => 'Ginpara an "$1".
Kitaa an $2 para hin talaan han mga gibag-ohi nga mga ginpamara.',
'dellogpage' => 'Talaan han mga ginpara',
'deletionlog' => 'Talaan han mga ginpara',
'reverted' => 'Ginbalik ha uruuna nga rebisyon',
'deletecomment' => 'Katadungan:',
'deleteotherreason' => 'Lain/dugang nga katadungan:',
'deletereasonotherlist' => 'Lain nga katadungan',
'deletereason-dropdown' => "*Agsob nga rason hin pagpara
** Tugon han manunurat
** Pagtalapas ha katungod hin pagtatag-iya (''copyright'')
** Bandalismo",
'delete-edit-reasonlist' => 'Igliwat an mga rason han pagpara',

# Rollback
'rollback' => 'Mga libot-pabalik nga pagliwat',
'rollback_short' => 'Libot-pabalik',
'rollbacklink' => 'libot-pabalik',
'rollbackfailed' => 'Diri malinamposon an paglibot-pabalik',

# Edit tokens
'sessionfailure-title' => 'Pakyas an sesyon',

# Protect
'protectlogpage' => 'Talaan han pinasaliporan',
'protectedarticle' => 'pinasaliporan "[[$1]]"',
'prot_1movedto2' => '[[$1]] in ginbalhin ngadto ha [[$2]]',
'protectcomment' => 'Katadongan:',
'protect-default' => 'Togota an ngatanan nga mga gumaramit',
'protect-level-sysop' => 'Tuguti la an mga magdudumara',
'protect-othertime' => 'Lain nga oras:',
'protect-othertime-op' => 'lain nga oras',
'protect-otherreason' => 'Lain/dugang nga katadongan:',
'protect-otherreason-op' => 'Lain nga katadongan',
'restriction-type' => 'Pagtugot:',
'minimum-size' => 'Pinakaguti nga kadako',
'maximum-size' => 'Pinakadako nga kadako:',
'pagesize' => '(mga byte)',

# Restrictions (nouns)
'restriction-edit' => 'Igliwat',
'restriction-move' => 'Balhina',
'restriction-create' => 'Himo-a',
'restriction-upload' => 'Igkarga-pasaka',

# Restriction levels
'restriction-level-all' => 'bisan ano nga katupngan',

# Undelete
'undelete' => 'Igpakita an mga ginpara nga mga pakli',
'undeletelink' => 'igpakita/igbalik',
'undeleteviewlink' => 'kitaa',
'undeletecomment' => 'Katadungan:',
'cannotundelete' => 'Pakyas an pagpabalik han pinara:
$1',
'undelete-search-title' => 'Pamiling hin mga ginpara nga mga pakli',
'undelete-search-box' => 'Pamiling hin mga ginpara nga mga pakli',
'undelete-search-submit' => 'Bilnga',
'undelete-show-file-submit' => 'Oo',

# Namespace form on various pages
'namespace' => "Ngaran-lat'ang",
'invert' => 'Baliskara an pirilion',
'namespace_association' => "Kasumpay nga mga ngaran-lat'ang",
'blanknamespace' => '(Panguna)',

# Contributions
'contributions' => 'Mga ámot ni {{GENDER:$1|User}}',
'contributions-title' => 'Mga amot han gumaramit para ha $1',
'mycontris' => 'Mga ámot nakon',
'contribsub2' => 'Para {{HENERO:$3|$1}} ($2)',
'uctop' => '(yana)',
'month' => 'Tikang ha bulan (ngan uruunhan):',
'year' => 'Tikang ha tuig (ngan uruunhan):',

'sp-contributions-newbies' => 'Igpakita an mga amot hin mga bag-o nga akawnt la',
'sp-contributions-newbies-sub' => 'Para han bag-o nga mga akawnt',
'sp-contributions-blocklog' => 'Talaan han pagpugong',
'sp-contributions-uploads' => 'mga ginkarga-paigbaw',
'sp-contributions-logs' => 'Mga talaan',
'sp-contributions-talk' => 'hiruhimangraw',
'sp-contributions-search' => 'Pamiling hin mga ámot',
'sp-contributions-username' => 'IP nga adres o nágámit:',
'sp-contributions-toponly' => 'Igpakita la an mga pagliwat nga giuurhii an pagbag-o',
'sp-contributions-submit' => 'Bilnga',

# What links here
'whatlinkshere' => 'Mga nasumpay dinhi',
'whatlinkshere-title' => 'Mga pakli nga nasumpay ngadto ha "$1"',
'whatlinkshere-page' => 'Pakli:',
'linkshere' => "An masunod nga mga pakli in nasumpay ha '''[[:$1]]''':",
'nolinkshere' => "Waray mga pakli nga nasumpay ha '''[[:$1]]'''",
'isredirect' => 'Redirek nga pakli',
'istemplate' => 'transklusyon',
'isimage' => 'sumpay han fayl',
'whatlinkshere-prev' => '{{PLURAL:$1|nahiuna|nahiuna $1}}',
'whatlinkshere-next' => '{{PLURAL:$1|masunod|masunod $1}}',
'whatlinkshere-links' => '← mga sumpay',
'whatlinkshere-hideredirs' => '$1 nga mga redirek',
'whatlinkshere-hidetrans' => '$1 nga mga transklusyon',
'whatlinkshere-hidelinks' => '$1 an mga sumpay',
'whatlinkshere-hideimages' => '$1 an mga sumpay han paypay',
'whatlinkshere-filters' => 'Mga panara',

# Block/unblock
'block' => 'Pugngi an gumaramit',
'blockip' => 'Pugngi an gumaramit',
'blockip-legend' => 'Pugngi an gumaramit',
'ipadressorusername' => 'IP address o agnay-hit-gumaramit:',
'ipbexpiry' => 'Matitima an dulot:',
'ipbreason' => 'Katadungan:',
'ipbreason-dropdown' => '*Agsob nga mga rason hit pagpugong
** Pagsusuksok hin sayop nga pananabutan
** Pagtatangtang hin sulod tikang ha mga pakli
** Bisan la ano nga pansusumpay ngadto ha gawas nga mga dapit
** Pansusuksok hin inamasang/buro-buro ngadto ha mga pakli
** Panhahadlok nga pamatasan/makakalilisang nga pansamok
** Pan-abusar hin dirudilain nga mga akawnt
** Diri makakarawat nga agnay-hit-gumaramit',
'ipb-hardblock' => 'Pugnga an mga nakalog-in nga mga gumaramit tikang ha pagliwat ha dinhi nga IP address',
'ipbcreateaccount' => 'Pugnga paghimo hin akawnt',
'ipbemailban' => 'Pugnga an uska gumaramit tikang ha pagpadangat hin e-mail',
'ipbsubmit' => 'Pugngi ini nga gumaramit',
'ipbother' => 'Iba nga oras:',
'ipboptions' => '2 ka oras:2 hours,1 ka adlaw:1 day,3 ka adlaw:3 days,1 ka semana:1 week,2 ka semana:2 weeks,1 ka bulan:1 month,3 ka bulan:3 months,6 ka bulan:6 months,1 ka tuig:1 year,waray katapusan:infinite',
'ipbhidename' => 'Tagoa an agnay-han-gumaramit tikang ha mga pagliwat ngan mga talaan',
'ipb-disableusertalk' => 'Ayaw tugota ini nga gumaramit ha pagliwat han iya kalugaringon nga hiruhimangraw nga pakli samtang nakapugong hiya',
'ipb-change-block' => 'Ig-utro pagpugong an gumaramit upod ini nga mga kahimtang',
'ipb-confirm' => 'Igkompirma an pagpugong',
'badipaddress' => 'Diri balido nga IP addres',
'blockipsuccesssub' => 'Malinamposon an pagpugong',
'ipb-blockingself' => 'Imo pala pupugngan it imo kalugaringong!  Sigurado ka ba hit imo bubuhaton?',
'ipb-edit-dropdown' => 'Igliwat an mga rason han pagpugong',
'ipb-unblock-addr' => '
Tanggala an pagpugong $1',
'ipb-unblock' => 'Tanggala an pagpugong ha uska aganay-hit-gumaramit o IP address',
'ipusubmit' => 'Tanggala ini nga pagpugong',
'blocklist' => 'Mga gumaramit nga nakapugong',
'ipblocklist' => 'Mga ginpugngan nga gumaramit',
'ipblocklist-legend' => 'Pamiling hin uska napugngan nga gumaramit',
'blocklist-timestamp' => 'Marka-oras',
'blocklist-target' => 'Gin-iigo',
'blocklist-expiry' => 'Napan-os',
'blocklist-by' => 'Ginpupugngan an admin',
'blocklist-reason' => 'Rason:',
'ipblocklist-submit' => 'Bilnga',
'ipblocklist-localblock' => 'Lokal nga pagpugong',
'ipblocklist-otherblocks' => 'Iba {{PLURAL:$1|ka pagpugong|ka mga pagpugong}}',
'expiringblock' => 'diri madulot pag $1 han $2',
'anononlyblock' => 'Waray nagpakilala la',
'createaccountblock' => 'Diri ginpapagana an paghimo hin akawnt',
'emailblock' => 'Diri ginpapagana an e-mail',
'blocklist-nousertalk' => 'diri nakakaliwat hin kalugaringong nga hiruhimangraw nga pakli',
'ipblocklist-empty' => 'An talaan han pagpugong in waray sulod.',
'blocklink' => 'igpugong',
'unblocklink' => 'igtanggal an pagpugong',
'change-blocklink' => 'igliwan an papugong',
'contribslink' => 'mga ámot',
'emaillink' => 'Padara hin e-mail',
'blocklogpage' => 'Talaan han pagpugong',
'blocklogentry' => 'ginpugngan hi [[$1]] nga natatapos ha takna hin $2 $3',
'unblocklogentry' => 'gintanggal an pagpugong $1',
'block-log-flags-nocreate' => 'diri gintutugutan an paghimo hin akawnt',
'block-log-flags-noemail' => 'Diri ginpapagana an e-mail',
'block-log-flags-nousertalk' => 'diri makakaliwat hit kalugaringon nga hiruhimangraw nga pakli',
'block-log-flags-hiddenname' => 'nakatago an agnay-hit-gumaramit',
'ipb_already_blocked' => '"$1" in ginpugngan na',
'ipbnounblockself' => 'Diri ka gintutugotan hin pagtanggal hit pagpugong ha kalugaringon',

# Developer tools
'lockdb' => 'Trangkaha an database',
'unlockdb' => 'Abreha an database',
'lockbtn' => 'Trangkaha an database',
'unlockbtn' => 'Abreha an database',
'lockdbsuccesssub' => 'Malinamposon an pagtrangka han database',
'unlockdbsuccesssub' => '
Gintanggal an pagtrangka han databae',
'unlockdbsuccesstext' => 'Natanggal an trangka han database',
'lockfilenotwritable' => 'An database paypay han trangka in diri mahisusurat.
Para pagtrangka o pagtanggal han trangka han database, ini in kinahanglanon magin masusuratan han serbidor han web.',
'databasenotlocked' => 'An database in diri nakatrangka.',

# Move page
'move-page' => 'Mabalhin an $1',
'move-page-legend' => 'Balhina an pakli:',
'movearticle' => 'Balhina an pakli:',
'moveuserpage-warning' => "'''Pahimatngon:''' Tibalhin ka hin pakli hin gumaramit. Alayon pagtigaman nga an pakli là an mababalhin ngan an gumaramit in ''diri'' mababalyoan hin ngaran.",
'movenotallowed' => 'Waray ka pagtugot para makabalhin hin mga pakli.',
'movenotallowedfile' => 'Waray ka pagtugot para makabalhin hin mga paypay.',
'cant-move-user-page' => 'Diri ka gintutugotan pagbalhin hin mga pakli nga gumaramit (labot la tikang ha mga bahin-pakli).',
'cant-move-to-user-page' => 'Diri ka gintutugotan pagbalhin hin uska pakli pakada ha uska pakli hin gumaramit (labot la pakadto ha usa nga bahin-pakli han gumaramit).',
'newtitle' => 'Para ha bag-o nga titulo:',
'move-watch' => 'Kitaa an tinikangan nga pakli ngan kakadtoan nga pakli',
'movepagebtn' => 'Igbalhin an pakli',
'pagemovedsub' => 'Malinamposon an pagbalhin',
'movepage-moved' => '\'\'\'"$1" in ginbalhin ngadto ha "$2"\'\'\'',
'movepage-moved-redirect' => 'Nahimo an uska redirect.',
'move-subpages' => 'Balhina an mga bahin-pakli (tubtob ngadto ha $1)',
'move-talk-subpages' => 'Balhina an mga bahin-pakli han pakli han hiruhimangraw (tubtob ngadto ha $1)',
'movepage-page-exists' => 'An pakli nga $1 in aada na ngan diri ini lugaring nga masasapawan pagsurat.',
'movepage-page-moved' => 'An pakli nga $1 in nabalhin ngadto ha $2.',
'movepage-page-unmoved' => 'An pakli nga $1 in diri mababalhin ngadto ha $2.',
'movelogpage' => 'Talaan han pagbalhin',
'movelogpagetext' => 'Ubos hini in uska talaan han ngatanan nga nabalhin nga pakli',
'movenosubpage' => 'Ini nga pakli in waray mga bahin-pakli.',
'movereason' => 'Rason:',
'revertmove' => 'igbalik',
'delete_and_move' => 'Igapara ngan igbalhin',
'delete_and_move_confirm' => 'Oo, paraa an pakli',
'delete_and_move_reason' => 'Ginpara para makahatag hin aragian para makabalhin tikang ha "[[$1]]"',
'selfmove' => 'An tinikangan ngan kakadtoan nga mga titulo in parehas;
diri makakabalhin ha iya kalugaringon ngahaw.',
'immobile-source-namespace' => 'Diri nababalhin an mga pakli ha ngaran-lat\'ang nga "$1"',
'immobile-target-namespace' => 'Diri makakabalhin hin mga pakli ngada ha ngaran-lat\'ang nga "$1"',
'immobile-target-namespace-iw' => 'An sumpay interwiki in diri balido nga irig-on para han pagbalhin hin pakli.',
'immobile-source-page' => 'Diri mababalhin ini nga pakli.',
'immobile-target-page' => 'Diri makakabalhin ha ngada nga kakadtoon nga titulo.',
'imageinvalidfilename' => 'An kakadtoon nga ngaran-han-paypay in diri balido',
'move-leave-redirect' => 'Pagbilin hin redirect',

# Export
'export' => 'Mga pakli hit pagexport',
'exportall' => 'Ig-export an ngatanan nga mga pakli',
'exportlistauthors' => 'Lakip an bug-os nga talaan han mga man-aamot para ha kada pakli',
'export-submit' => 'Ginpapaangbit',
'export-addcattext' => 'Igdugang an mga pakli tikang ha kaarangay:',
'export-addcat' => 'Dugngi',
'export-addnstext' => "Igdugang an mga pakli tikang ha ngaran-lat'ang:",
'export-addns' => 'Dugngi',
'export-download' => 'Igtipig komo paypay',
'export-templates' => 'Iglakip an mga batakan',

# Namespace 8 related
'allmessages' => 'Mga mensahe han sistema',
'allmessagesname' => 'Ngaran',
'allmessagesdefault' => 'Daan aada nga teksto hiton mensahe',
'allmessagescurrent' => 'Yana nga teksto han mensahe',
'allmessages-filter-legend' => 'Sara',
'allmessages-filter-all' => 'Ngatanan',
'allmessages-language' => 'Yinaknan:',
'allmessages-filter-submit' => 'Kadto-a',

# Thumbnails
'thumbnail-more' => 'Padako-a',
'filemissing' => 'Nawawara an fayl',
'thumbnail_error' => 'Sayo han paghihimo hin thumbnail: $1',
'thumbnail_image-type' => 'An klase han hulagway in diri suportado',

# Special:Import
'import' => 'Naangbit hit mga pakli',
'import-interwiki-source' => 'Tinikangan nga wiki/pakli:',
'import-interwiki-templates' => 'Lakip an ngatanan nga mga batakan',
'import-interwiki-submit' => 'Naangbit',
'import-interwiki-namespace' => "Kakadtoan nga ngaran-lat'ang:",
'import-upload-filename' => 'Ngaran han paypay:',
'import-comment' => 'Komento:',
'importstart' => 'Nag-aangbit hin mga pakli...',
'importnopages' => 'Waray pakli nga ginpapaangbit.',
'importbadinterwiki' => 'Maraot nga sumpay hit interwiki',
'importnotext' => 'Waray sulod o waray teksto',
'importsuccess' => 'Natapos an pag-aangbit!',
'import-noarticle' => 'Waray pakli nga maaangbit!',
'import-token-mismatch' => 'Nawara an datos sesyon.
Alayon utroha.',
'import-error-edit' => 'An pakli nga "$1" in waray naangbit tungod nga diri ka gintutugotan pagliwat hini.',
'import-error-create' => 'An pakli nga "$1" in waray naangbit tungod nga diri ka gintutugotan paghimo hini.',
'import-error-interwiki' => 'An pakli nga "$1" in waray naangbit tungod nga an ngaran in nakareserba para han pagsusumpay ha gawas (interwiki).',
'import-error-special' => 'An pakli nga "$1" in waray naangbit tungod nga nahihilakip ini ha uska pinaurog nga ngaran-lat\'ang nga diri natugot hin mga pakli.',
'import-error-invalid' => 'An pakli nga "$1" in waray naangbit tungod nga it iya ngaran in diri balido.',
'import-options-wrong' => 'Sayop {{PLURAL:$2|nga pirilion|nga mga pirilion}}: <nowiki>$1</nowiki>',
'import-rootpage-invalid' => 'An ginhatag nga gamot-pakli in uska diri balido nga titulo.',
'import-rootpage-nosubpage' => 'Ngaran-lat\'ang nga "$1" han gamot-pakli in diri natugot hin mga bahin-pakli.',

# Import log
'importlogpage' => 'Talaan hin pan-aangbit',
'import-logentry-upload' => 'ginangbit [[$1]] pinaagi hin pagkarga-pasaka han paypay',
'import-logentry-interwiki' => 'natranswiki $1',

# JavaScriptTest
'javascripttest-pagetext-skins' => 'Pagpili hin panit para ha pag-paandar han:',

# Tooltip help for the actions
'tooltip-pt-userpage' => 'An imo pakli hin gumaramit',
'tooltip-pt-mytalk' => 'An imo pakli hin hiruhimangraw',
'tooltip-pt-preferences' => 'An imo mga karuyag',
'tooltip-pt-watchlist' => 'An talaan hin mga pakli nga imo ginsisinubay para hin mga kabag-ohan',
'tooltip-pt-mycontris' => 'Talaan han imo mga ámot',
'tooltip-pt-login' => 'Gin-aaghat ka nga mag log-in, pero diri ini ginpipirit.',
'tooltip-pt-logout' => 'gawas',
'tooltip-ca-talk' => 'Hiruhimangraw mahiunong han sulod nga pakli',
'tooltip-ca-edit' => 'Puydi ka makaliwat hini nga pakli.  Alayon la paggamit han pahiuna nga paggawas nga piridlitan san-o an pagtipig',
'tooltip-ca-addsection' => 'Pagtikang hin bag-o nga bahin',
'tooltip-ca-viewsource' => 'Ini nga pakli in pinaliporan.
Makikit-an nimo an ginkuhaaan',
'tooltip-ca-history' => 'Mga kahadto nga mga pagliwat hini nga pakli',
'tooltip-ca-protect' => 'Panalipda ini nga pakli',
'tooltip-ca-delete' => 'Para-a ini nga pakli',
'tooltip-ca-move' => 'Balhina ini nga pakli',
'tooltip-ca-watch' => 'Dugnga ini nga pakli ngadto han imo talaan hin ginbibinantayan',
'tooltip-ca-unwatch' => 'Igtanggal ini nga pakli tikang han imo tala hin binabantayan',
'tooltip-search' => 'Bilnga ha {{SITENAME}}',
'tooltip-search-go' => 'Kadto hin pakli nga mayda hin gud nga exakto ngaran kon aadà',
'tooltip-search-fulltext' => 'Bilnga ha mga pakli para hini nga texto',
'tooltip-p-logo' => 'Bisitaha an syahan nga pakli',
'tooltip-n-mainpage' => 'Bisitaha an syahan nga pakli',
'tooltip-n-mainpage-description' => 'Bisitaha an syahan nga pakli',
'tooltip-n-portal' => 'Mahiunong han proyekto, ano an imo mahihimo, diin makabiling hin mga butang',
'tooltip-n-currentevents' => 'Pamiling hin panginsayod ha mga kinabag-ohan nga mga panhitabo',
'tooltip-n-recentchanges' => 'An talaan hin mga urhe nga mga kabag-ohan han wiki',
'tooltip-n-randompage' => 'Pagkaraga hin bisan ano nga pakli',
'tooltip-n-help' => 'An lugar hin pagbiling',
'tooltip-t-whatlinkshere' => 'Talaan han ngatanan nga wiki nga mga pakli nga nasumpay dinhe',
'tooltip-t-recentchangeslinked' => 'Mga bag-o nga kabag-ohan ha mga pakli nga nahasumpay tikang hini nga pakli',
'tooltip-feed-rss' => 'RSS nga pangarga para hini nga pakli',
'tooltip-feed-atom' => 'Atom nga pangarga para hini nga pakli',
'tooltip-t-contributions' => 'Kitaa an talaan hin mga amot hini nga nágámit',
'tooltip-t-emailuser' => 'Padad-i hin e-mail ini nga nágámit',
'tooltip-t-upload' => 'Pagkarga hin mga paypay',
'tooltip-t-specialpages' => 'Talaan hin mga pinaurog nga pakli',
'tooltip-t-print' => 'Maipapatik nga bersyon hini nga pakli',
'tooltip-t-permalink' => 'Sumpay nga unob ha hini nga pagliwat han pakli',
'tooltip-ca-nstab-main' => 'Kitaa an sulod nga pakli',
'tooltip-ca-nstab-user' => 'Kitaa an pakli han gumaramit',
'tooltip-ca-nstab-media' => 'Kitaa an pakli hin media',
'tooltip-ca-nstab-special' => 'Pinaurog nga pakli ini, diri ka ngahaw makakapagliwat han pakli',
'tooltip-ca-nstab-project' => 'Kitaa an pakli han proyekto',
'tooltip-ca-nstab-image' => 'Kitaa an pakli han fayl',
'tooltip-ca-nstab-mediawiki' => 'Kitaa an mensahe han sistema',
'tooltip-ca-nstab-template' => 'Kitaa an plantilya',
'tooltip-ca-nstab-help' => 'Kitaa an pakli hin bulig',
'tooltip-ca-nstab-category' => 'Kitaa an pakli hin kaarangay',
'tooltip-minoredit' => 'Tigamni ini nga gamay nga pagliwat',
'tooltip-save' => 'Ig-seyb an imo mga pagbabag-o',
'tooltip-preview' => 'Pahiuna-a nga paggawas an imo mga pagliwat, alayon paggamit hini san-o mo igtipig!',
'tooltip-diff' => 'Igpakita an mga pagbabag-o nga imo ginbuhat ha teksto',
'tooltip-compareselectedversions' => 'Kitaa an mga kaibhan ha butnga han duha nga pinili nga mga pagliwat hini nga pakli',
'tooltip-watch' => 'Dugnga ini nga pakli ngadto han imo talaan hin ginbibinantayan',
'tooltip-watchlistedit-normal-submit' => 'Igtanggal an mga titulo',
'tooltip-recreate' => 'Utroha paghimo an pakli bisan ini in ginpara na',
'tooltip-upload' => 'Tikanga an pagkarga-pasaka',
'tooltip-rollback' => 'An "libot-pabalik" in nabalik han (mga) pagliwat hini nga pakli ngadto han kataposan nga nag-amot hin usa ka pidlit',
'tooltip-undo' => '"Igpawara an ginbuhat (undo)" in nagbabalik hinin nga pagliwat ngan nabuklad hin pagliwat nga porma ha pahiuna-nga-paggawas nga kahimtang.  Natugot liwat pagdugang hin katadungan ha dinalikyat nga sumat.',
'tooltip-preferences-save' => 'Tipiga an mga karuyag',
'tooltip-summary' => 'Pagbutang hin dalikyat nga sumat',
'interlanguage-link-title' => '$1 – $2',

# Attribution
'siteuser' => '{{SITENAME}} gumaramit $1',
'anonuser' => '{{SITENAME}} waray nagpakilala nga gumaramit $1',
'othercontribs' => 'Ginbasihan ha binuhat ni $1.',
'others' => 'mga iba',
'siteusers' => '{{SITENAME}} {{PLURAL:$2|gumaramit|mga gumaramit}} $1',

# Info page
'pageinfo-title' => 'Impormasyon para "$1"',
'pageinfo-header-basic' => 'Panguna nga pananabotan',
'pageinfo-header-edits' => 'Kaagi han pagliwat',
'pageinfo-header-restrictions' => 'Panalipod han pakli',
'pageinfo-display-title' => 'Iglatag an titulo',
'pageinfo-length' => 'Kahilaba han pakli (ha mga byte)',
'pageinfo-article-id' => 'ID han pakli',
'pageinfo-robot-policy' => 'Pamilnga an kahimtang han makina',
'pageinfo-robot-index' => 'Matutudlok',
'pageinfo-robot-noindex' => 'Diri matutudlok',
'pageinfo-views' => 'Ihap han mga naglantaw',
'pageinfo-watchers' => 'Ihap han nangingita hin pakli',
'pageinfo-redirects-name' => 'Nairedirekta ha dinhi nga pakli',
'pageinfo-subpages-name' => 'Mga bahinpakli hin nga pakli',
'pageinfo-subpages-value' => '$1 ($2 {{PLURAL:$2|redirekta|mga redirekta}}; $3 {{PLURAL:$3|diri redirekta|mga diri redirekta}})',
'pageinfo-firstuser' => 'Naghimo han pakli',
'pageinfo-firsttime' => 'Adlaw han pagkahimo han pakli',
'pageinfo-lastuser' => 'Giurhii nga nagliwat',
'pageinfo-lasttime' => 'Petsa han kataposan nga pagliwat',
'pageinfo-edits' => 'Ngatanan nga ihap han mga pakli',
'pageinfo-toolboxlink' => 'Impormasyon han pakli',
'pageinfo-redirectsto' => 'Igredirect ngadto ha',
'pageinfo-contentpage' => 'Ginlakip komo uska unod nga pakli',
'pageinfo-contentpage-yes' => 'Oo',
'pageinfo-protect-cascading-yes' => 'Oo',
'pageinfo-category-info' => 'Impormasyon han kaarangay',
'pageinfo-category-pages' => 'Ihap han mga pakli',
'pageinfo-category-subcats' => 'Ihap han mga ubos-kaarangay',
'pageinfo-category-files' => 'Ihap han mga paypay',

# Patrolling
'markaspatrolleddiff' => 'Igmarka komo ginpatrolya na',
'markaspatrolledtext' => 'Markaha ini nga pakli komo ginpatrolya na',
'markedaspatrolled' => 'Igmarka komo ginpatrolya na',
'markedaspatrollederror' => 'Diri nakakamarka komo ginpatrolya na',

# Patrol log
'patrol-log-page' => 'Talaan han pagpatrolya',
'patrol-log-header' => 'Ini in uska talaan hin mga ginpatrolya nga mga rebisyon.',
'log-show-hide-patrol' => '$1 talaan hin pagpatrolya',

# Image deletion
'deletedrevision' => 'Ginpara an daan nga rebisyon $1',
'filedeleteerror-short' => 'Nagsayop ha pagpara han paypay: $1',
'filedeleteerror-long' => 'Mga sayop nga ginengkwentro samtang nagpapara hin paypay:

$1',
'filedelete-missing' => 'An paypay nga "$1" in diri mapapara, tunogd nga waray ini dida.',

# Browsing diffs
'previousdiff' => '← Durudaan nga pagliwat',
'nextdiff' => 'Burubag-o nga pagliwat',

# Media information
'widthheightpage' => '$1 × $2, $3 {{PLURAL:$3|pakli|mga pakli}}',
'file-info' => 'Kadako han paypay: $1, klase han MIME: $2',
'file-info-size' => '$1 × $2 nga pixel, kadako han fayl: $3, MIME nga tipo: $4',
'file-nohires' => 'Waray mas hiruhitaas nga resolusyon.',
'svg-long-desc' => 'SVG nga fayl, ginbabanabanahan nga $1 × $2 nga mga pixel, kadako han fayl: $3',
'show-big-image' => 'Orihinal nga paypay',
'show-big-image-preview' => 'Kadako hin nga pahiuna nga pagawas: $1.',
'show-big-image-other' => 'Iba {{PLURAL:$2|nga resolusyon|nga mga resolusyon}}: $1.',
'show-big-image-size' => '$1 × $2 nga mga pixel',

# Special:NewFiles
'newimages' => 'Galeryia hin mga paypay nga bag-o',
'newimages-legend' => 'Panara',
'newimages-label' => 'Ngaran han paypay (o uska bahin hini):',
'showhidebots' => '($1 ka mga bot)',
'noimages' => 'Waray makikit-an.',
'ilsubmit' => 'Bilnga',
'bydate' => 'pinaagi han petsa',

# Video information, used by Language::formatTimePeriod() to format lengths in the above messages
'ago' => '$1 an nakalabay',
'just-now' => 'yana pala',

# Bad image list
'bad_image_list' => 'An kabutangan in masunod:

An nakatalala la nga mga butang (mga bagis nga nagtitikang hin *) in mahiuupod paglabot.
An syahan nga sumpay ha uska bagis in dapat may-ada sumpay ngadto ha maraot nga fayl.
An bisan ano nga masunod nga mga sumpay ha kapareho nga bagis in igtratrato nga eksepsyon, sugad hin, mga pakli kun diin an mga fayl in puydi mabubutang ha sulod han bagis.',

# Metadata
'metadata' => 'Metadata',
'metadata-help' => 'Iní nga paypay mayda dugang nga pagpasabot, nga bangin gindugáng tikang han digital nga camera o iskaner nga gin-gamit paghimo o pag-digitar hini.
Kon an paypay ginliwat tikang han orihinal nga kamutangan, mayda mga detalye nga bangin diri magpakita han ginliwat nga paypay',
'metadata-fields' => 'An mga rumbay han hulagway han metadato nga nakatala dinhi nga mensahe in iglalakip ha padayag hin hulagway nga pakli kun an taramdan metadato in nakalukot.
An iba in daan nakatago.
* make
* modelo
* pitsaorasorihinal
* exposuretime
* fnumber
* isospeedratings
* focallength
* artist
* copyright
* imagedescription
* gpsngalatitud
* gpsngalongitud
* gpsngaaltitud',

# Exif tags
'exif-imagewidth' => 'Kahaluag',
'exif-imagelength' => 'Kahitaas',
'exif-ycbcrpositioning' => 'Pagpoposisyon han Y ngan C',
'exif-referenceblackwhite' => 'Padis han itom nga busag nga reperensya hin mga balor',
'exif-datetime' => 'Pagliwat han petsa ngan oras han paypay',
'exif-imagedescription' => 'Titulo han hulagway',
'exif-make' => 'Naghimo han kamera',
'exif-model' => 'Modelo han kamera',
'exif-software' => 'Software nga gingamit',
'exif-artist' => 'Tag-iya',
'exif-colorspace' => 'Kolor lat-ang',
'exif-subsectime' => 'Mga bahin-segundo han PetsaOras',
'exif-exposuretime-format' => '$1 seg ($2)',
'exif-fnumber' => 'F Numero',
'exif-lightsource' => 'Ginkuhaan han suga',
'exif-filesource' => 'Ginkuhaan han paypay',
'exif-saturation' => 'saturasyon',
'exif-sharpness' => 'Pagkatarom',
'exif-gpslatituderef' => 'Amihanan o salatan nga latitud',
'exif-gpslatitude' => 'Latitud',
'exif-gpslongituderef' => 'Sinirangan o katundan nga longitud',
'exif-gpslongitude' => 'Longitud',
'exif-gpsaltitude' => 'Altitud',
'exif-gpstimestamp' => 'GPS nga oras (atomiko nga relo)',
'exif-gpssatellites' => 'Mga satelayt nga gingamit ha pagsukol',
'exif-gpsstatus' => 'Kahimtang han nagkakarawat',
'exif-gpsdop' => 'kauntop han pagsukol',
'exif-gpsspeedref' => 'Sukol han kalaksi',
'exif-gpstrack' => 'Direksyon han kiwa',
'exif-gpsimgdirection' => 'Direksyon han imahe',
'exif-gpsdestlatitude' => 'kakadtoan latitud',
'exif-gpsdestlongitude' => 'kakadtoan longitud',
'exif-gpsdestdistance' => 'Distansya ha destinasyon',
'exif-gpsareainformation' => 'Ngaran han lugar an GPS',
'exif-gpsdatestamp' => 'petsa han GPS',
'exif-jpegfilecomment' => 'Komento han JPEG nga paypay',
'exif-worldregioncreated' => 'Rehiyon han kalibutan kun diin an ritrato ginkuha',
'exif-countrycreated' => 'Nasod kun diin an ritrato ginkuha',
'exif-countrycodecreated' => 'Kodigo han nasod kun diin an ritrato ginkuha',
'exif-provinceorstatecreated' => 'Lalawigan o estado kun diin an ritrato ginkuha',
'exif-citycreated' => 'An syudad kun diin an ritrato ginkuha',
'exif-sublocationcreated' => 'Bahin-lokasyon han syudad kun diin an ritrato ginkuha',
'exif-worldregiondest' => 'Ginpakita an rehiyon han kalibutan',
'exif-countrydest' => 'Ginpapakita an nasod',
'exif-countrycodedest' => 'Ginpapakita an kodigo han nasod',
'exif-provinceorstatedest' => 'Ginpapakita an lalawigan o estado',
'exif-citydest' => 'Ginpapakita an syudad',
'exif-sublocationdest' => 'Ginpapakita an bahin-lokasyon han syudad',
'exif-objectname' => 'Halipot nga titulo',
'exif-headline' => 'Katukiban',
'exif-source' => 'Tinikangan',
'exif-writer' => 'Manunurat',
'exif-languagecode' => 'Yinaknan',
'exif-iimcategory' => 'Kaarangay',
'exif-datetimeexpires' => 'Ayaw gamita kahuman han',
'exif-datetimereleased' => 'Ginpagawas han',
'exif-lens' => 'Mga lente nga gingamit',
'exif-cameraownername' => 'Tag-iya han kamera',
'exif-usageterms' => 'Mga termino hit paggamit',

'exif-copyrighted-false' => 'Dominyo panpubliko',

'exif-unknowndate' => 'Waray kasabti an petsa',

'exif-orientation-1' => 'Normal',

'exif-exposureprogram-1' => 'Mano-mano',

'exif-subjectdistance-value' => '$1 ka mga metro',

'exif-meteringmode-0' => 'Waray kasabti',
'exif-meteringmode-255' => 'iba',

'exif-lightsource-0' => 'Waray kasabti',
'exif-lightsource-9' => 'Maupay nga panahon',
'exif-lightsource-10' => 'Madampog nga panahon',

'exif-focalplaneresolutionunit-2' => 'pulgadas',

'exif-gaincontrol-0' => 'Waray',

'exif-contrast-0' => 'Normal',
'exif-contrast-1' => 'Mahumok',
'exif-contrast-2' => 'Matig-a',

'exif-saturation-0' => 'Normal',

'exif-sharpness-0' => 'Normal',
'exif-sharpness-1' => 'Mahumok',
'exif-sharpness-2' => 'Matig-a',

'exif-subjectdistancerange-0' => 'Waray kasabti',
'exif-subjectdistancerange-1' => 'Macro',
'exif-subjectdistancerange-2' => 'Harani nga pagkita',
'exif-subjectdistancerange-3' => 'Harayo nga pagkita',

# Pseudotags used for GPSAltitudeRef
'exif-gpsaltitude-above-sealevel' => '$1 {{PLURAL:$1|metro|mga metro}} bawbaw han katupngan ha dagat',
'exif-gpsaltitude-below-sealevel' => '$1 {{PLURAL:$1|metro|mga metro}} ubos han katupngan ha dagat',

# Pseudotags used for GPSSpeedRef
'exif-gpsspeed-k' => 'Mga kilometro kada oras',
'exif-gpsspeed-m' => 'Mga milya kada oras',

# Pseudotags used for GPSDestDistanceRef
'exif-gpsdestdistance-k' => 'Mga kilometro',
'exif-gpsdestdistance-m' => 'Mga milya',

'exif-objectcycle-a' => 'Aga la',
'exif-objectcycle-p' => 'Gab-i la',
'exif-objectcycle-b' => 'Pareho pan-aga ngan pan-gab-i',

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'Tinood nga direksyon',

'exif-ycbcrpositioning-1' => 'Nakabutnga',

'exif-dc-contributor' => 'Mga nag-ámot',
'exif-dc-date' => '(Mga) petsa',
'exif-dc-relation' => 'Nahisumpay nga medya',
'exif-dc-rights' => 'Mga katungod',
'exif-dc-source' => 'Tinikangan nga medya',
'exif-dc-type' => 'Klase nga medya',

'exif-rating-rejected' => 'Waray karawta',

'exif-isospeedratings-overflow' => 'Lapos han 65535',

'exif-iimcategory-ace' => 'mga arte, kultura ngan panlibang',
'exif-iimcategory-clj' => 'Krimen ngan balaod',
'exif-iimcategory-fin' => 'Ekonomiya ngan negosyo',
'exif-iimcategory-edu' => 'Pag-aram',
'exif-iimcategory-evn' => 'Kalikopan',
'exif-iimcategory-hth' => 'Kalibsogan',
'exif-iimcategory-lab' => 'Pananarbaho',
'exif-iimcategory-lif' => 'Pan-gios ngan lingawan',
'exif-iimcategory-pol' => 'Politika',
'exif-iimcategory-rel' => 'Relihiyon ngan panoohan',
'exif-iimcategory-sci' => 'Syensya ngan teknolohiya',
'exif-iimcategory-soi' => 'Mga himangrawon pankatiringban',
'exif-iimcategory-spo' => 'Paugnat hin kusog',
'exif-iimcategory-war' => 'Gera, samok ngan diri namumurayawan',
'exif-iimcategory-wea' => 'panahon',

'exif-urgency-normal' => 'Normal ($1)',
'exif-urgency-low' => 'Hamubo ($1)',
'exif-urgency-high' => 'Hataas ($1)',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'ngatanan',
'namespacesall' => 'ngatanan',
'monthsall' => 'ngatanan',

# Email address confirmation
'confirmemail' => 'Igkompirma an e-mail address',
'confirmemail_sent' => 'Ginpadara an kompirmasyon han e-mail.',
'confirmemail_needlogin' => 'Kinahanglanon mo hin $1 para makakompirma han imo e-mail address.',
'confirmemail_loggedin' => 'Ginkompirma na yana an imo e-mail address',
'confirmemail_subject' => '{{SITENAME}} kompirmasyon han e-mail address',

# Scary transclusion
'scarytranscludetoolong' => '[Hala hin duro an URL]',

# Delete conflict
'deletedwhileediting' => "'''Pahimatngon''': Ini nga pakli in ginpara kahuman nim magtikang pagliwat!",
'recreate' => 'Himo-a utro',

# action=purge
'confirm_purge_button' => 'OK',

# action=watch/unwatch
'confirm-watch-button' => 'OK',
'confirm-watch-top' => 'Dudugngon ini nga pakli ngadto han imo talaan hin ginbibinantayan?',
'confirm-unwatch-button' => 'OK',
'confirm-unwatch-top' => 'Tatanggalon ini nga pakli tikang han imo tala hin binabantayan?',

# Multipage image navigation
'imgmultipageprev' => '← naha-una nga pakli',
'imgmultipagenext' => 'sunod nga pakli →',
'imgmultigo' => 'Pakadto!',
'imgmultigoto' => 'Pakadto ha pakli $1',

# Table pager
'ascending_abbrev' => 'pasaka',
'descending_abbrev' => 'paubos',
'table_pager_next' => 'Sunod nga pakli',
'table_pager_prev' => 'Naha-una nga pakli',
'table_pager_first' => 'Una nga pakli',
'table_pager_last' => 'Kataposan nga pakli',
'table_pager_limit' => 'Igpakita in $1 nga mga butang ha tagsa pakli',
'table_pager_limit_label' => 'Mga butang ha tagsa pakli:',
'table_pager_limit_submit' => 'Kadto-a',
'table_pager_empty' => 'Waray mga resulta',

# Auto-summaries
'autosumm-blank' => 'Blankoha an pakli',
'autosumm-replace' => 'Ginsaliwanan an sulod hin "$1"',
'autoredircomment' => 'Ginredirecta an pakli ngada ha [[$1]]',
'autosumm-new' => 'Nahimo an pakli nga may "$1"',

# Size units
'size-bytes' => '$1 nga B',
'size-kilobytes' => '$1 nga KB',
'size-megabytes' => '$1 nga MB',
'size-gigabytes' => '$1 nga GB',

# Live preview
'livepreview-loading' => 'Ginkakarga. . .',
'livepreview-ready' => 'Ginkakarga. . . Pag-andam!',

# Watchlist editor
'watchlistedit-numitems' => 'An imo talaan hin binabantayan hin may sulod nga {{PLURAL:$1|1 ka titulo|$1 ka mga titulo}}, diri lakip an mga pakli nga hiruhimangraw.',
'watchlistedit-noitems' => 'An imo talaan han binabantayan in waray sulod nga mga titulo.',
'watchlistedit-normal-title' => 'Igliwat an talaan han binabantayan',
'watchlistedit-normal-legend' => 'Igtanggal an mga titulo tikang ha talaan hit binabantayan',
'watchlistedit-normal-submit' => 'Igtanggal an mga titulo',
'watchlistedit-raw-title' => 'Igliwat an hilaw nga talaan han binabantayan',
'watchlistedit-raw-legend' => 'Igliwat an hilaw nga talaan han binabantayan',
'watchlistedit-raw-titles' => 'Mga titulo:',
'watchlistedit-raw-submit' => 'Igpayana an talaan han binabantayan',
'watchlistedit-raw-done' => 'Ginpayana an imo talaan han barantayon.',
'watchlistedit-raw-added' => '{{PLURAL:$1|1 nga titulo|$1 nga mga titulo}} in gindugang:',
'watchlistedit-raw-removed' => '{{PLURAL:$1|1 nga titulo|$1 nga mga titulo}} in gintanggal:',

# Watchlist editing tools
'watchlisttools-view' => 'Kitaa an mga nanginginlabot nga mga pagbabag-o',
'watchlisttools-edit' => 'Kitaa ngan igliwat an talaan han binabantayan',
'watchlisttools-raw' => 'Igliwat an hilaw nga talaan han binabantayan',

# Core parser functions
'duplicate-defaultsort' => '\'\'\'Pahimatngon:\'\'\' An daan-aada nga paglainlain nga piridlitan nga "$2" in igsasapaw an durudaan nga daan-aada nga paglainlain nga piridlitan nga "$1".',

# Special:Version
'version' => 'Bersyon',
'version-specialpages' => 'Mga pinaurog nga pakli',
'version-parserhooks' => 'Mga kawil parser',
'version-variables' => 'Mga variable',
'version-antispam' => 'Pamugong hin spam',
'version-skins' => 'Mga panit',
'version-other' => 'iba',
'version-mediahandlers' => 'Mga nakapot han medya',
'version-hooks' => 'Mga kawil',
'version-hook-name' => 'Ngaran han kawil',
'version-version' => '(Bersion $1)',
'version-license' => 'Lisensya',
'version-poweredby-credits' => "Ini nga wiki in pinapaandar han '''[https://www.mediawiki.org/ MediaWiki]''', copyright © 2001-$1 $2.",
'version-poweredby-others' => 'mga iba',
'version-software-product' => 'Produkto',
'version-software-version' => 'Bersyon',
'version-entrypoints' => 'Surudlan nga mga URL',
'version-entrypoints-header-entrypoint' => 'Surudlan',
'version-entrypoints-header-url' => 'URL',

# Special:FileDuplicateSearch
'fileduplicatesearch' => 'Pamiling hin nadoble nga mga paypay',
'fileduplicatesearch-legend' => 'Pamiling hin nadoble',
'fileduplicatesearch-filename' => 'Ngaran han paypay:',
'fileduplicatesearch-submit' => 'Pamilnga',
'fileduplicatesearch-noresults' => 'Waray nabilngan nga paypay nga an ngaran in "$1".',

# Special:SpecialPages
'specialpages' => 'Mga pinaurog nga pakli',
'specialpages-group-maintenance' => 'Mga sumat han pagmintinar',
'specialpages-group-other' => 'Mga iba nga pinaurog nga pakli',
'specialpages-group-login' => 'Magpalista nga masakob / paghimo hin bag-o nga akawnt',
'specialpages-group-changes' => 'Mga kababag-o pala ngan mga log',
'specialpages-group-media' => 'Sumat media ngan mga ginkarga-pasaka',
'specialpages-group-users' => 'Mga gumaramit ngan mga katungod',
'specialpages-group-highuse' => 'Mga pakli nga damo nagamit',
'specialpages-group-pages' => 'Talaan hin mga pakli',
'specialpages-group-pagetools' => 'Mga higamit han pakli',
'specialpages-group-wiki' => 'Datos ngan mga higamit',
'specialpages-group-redirects' => 'Ginreredirek an mga pakli nga pinaurog',
'specialpages-group-spam' => 'Mga higamit han spam',

# Special:BlankPage
'blankpage' => 'Blanko nga pakli',
'intentionallyblankpage' => 'Ini nga pakli gintuyo pagpabilin nga blanko.',

# External image whitelist
'external_image_whitelist' => '#Pabay-i ini nga linea nga sugad gud la <pre>
#Igbutang in mga regular nga expresyon nga mga fragment (iton bahin nga ada ha butnga han //) ha ubos
#Ini igpapadis han mga URL han mga ha gawas (gin-hotlink) nga mga hulagway
#An mga nasakto igpapakita nga mga hulagway, kon diri, sumpay la ngadto han hulagway an igpapakita
#Mga linea nga natikang hin  # ginta-tratar nga mga komento
# Case-insensitive ini

#Igbutang an mga regex nga fragment ha igbaw hini nga linea. Pabay-i ini nga linea nga sugad gud la</pre>',

# Special:Tags
'tag-filter' => '[[Special:Tags|Tag]] panara:',
'tag-filter-submit' => 'Panara',
'tags-edit' => 'igliwat',
'tags-hitcount' => '$1 {{PLURAL:$1|nga pagbag-o|nga mga pagbag-o}}',

# Special:ComparePages
'comparepages' => 'Igkumpara an mga pakli',
'compare-page1' => 'Pakli 1',
'compare-page2' => 'Pakli 2',
'compare-rev1' => 'Pagliwat 1',
'compare-rev2' => 'Pagliwat 2',
'compare-submit' => 'Igkumpara',

# Database error messages
'dberr-header' => 'Ini nga wiki mayda problema',
'dberr-problems' => 'Pasayloi! Ini nga sityo in nageeksperyensya hin mga pagkuri teknikal.',

# HTML forms
'htmlform-submit' => 'Isumite',
'htmlform-reset' => 'Igbalik an mga pinamalyuan',
'htmlform-selectorother-other' => 'iba',

# New logging system
'revdelete-content-hid' => 'sulod nakatago',
'revdelete-summary-hid' => 'nakatago an dalikyat nga sumat han pagliwat',
'revdelete-uname-hid' => 'nakatago an agnay-hit-gumaramit',
'logentry-newusers-newusers' => '$1 in naghimo hin gumaramit nga akawnt',
'logentry-newusers-create' => '$1 in naghimo hin gumaramit nga akawnt',
'logentry-newusers-create2' => '$1 in naghimo hin gumaramit nga akawnt $3',
'logentry-newusers-autocreate' => 'An akawnt nga $1 in lugaring nga nahimo',
'rightsnone' => '(waray)',

# Feedback
'feedback-subject' => 'Himangrawon:',
'feedback-message' => 'Mensahe:',
'feedback-cancel' => 'Pasagdi',
'feedback-error2' => 'Sayop: Pakyas an pagliwat',
'feedback-close' => 'Human na.',

# Search suggestions
'searchsuggest-search' => 'Pamilnga',
'searchsuggest-containing' => 'nagsusulod. . .',

# API errors
'api-error-badaccess-groups' => 'Diri ka gintutugotan pagkarga paigbaw ha dinhi nga wiki.',
'api-error-badtoken' => 'Sayop ha sulod: Maraot nga token.',
'api-error-copyuploaddisabled' => 'Pagkarga paigbaw pinaagi han URL in diri mahihimo ha dinhi nga serbidor.',
'api-error-duplicate-archive-popup-title' => 'An nagdodoble {{PLURAL:$1|nga paypay|nga mga paypay}} in napara na.',
'api-error-duplicate-popup-title' => 'Nadoble {{PLURAL:$1|nga paypay|nga mga paypay}}.',
'api-error-empty-file' => 'An paypay nga isinumite nimo in waray sulod.',
'api-error-emptypage' => 'Naghihimo hin bag-o, diri gintutugotan an waray sulod nga mga pakli.',
'api-error-filename-tooshort' => 'An ngaran han paypay in halipot hin duro.',
'api-error-filetype-banned' => 'Diri gintutugotan ini nga klase nga paypay.',
'api-error-filetype-missing' => 'Ini nga ngaran han paypay in nawawad-an hin ekstensyon.',
'api-error-http' => 'Sayop ha sulod: Diri nakakasumpay ha serbidor.',
'api-error-illegal-filename' => 'Diri gintutugotan an ngaran-han-paypay.',
'api-error-mustbeloggedin' => 'Diri ka nakalog-in para makapagkarga-pasaka hin mga paypay.',
'api-error-mustbeposted' => 'Sayop ha sulod: Iton paalayon in nagkikinahanglan hin HTTP POST.',
'api-error-overwrite' => 'Pagsasapaw in aada nga paypay in diri gintutugotan.',
'api-error-stashfailed' => 'Sayop ha sulod:  An serbidor in waray makatipig han temporaryo nga paypay.',
'api-error-timeout' => 'An serbidor in diri nabaton ha sulod han ginaasahan nga oras.',
'api-error-unclassified' => 'Nahitabo an waray kasabti nga sayop.',
'api-error-unknown-code' => 'Waray kasabti nga sayop: "$1".',
'api-error-unknown-error' => 'Sayop ha sulod: May-ada nagkasayop han pagkakarga paigbaw han imo paypay.',
'api-error-unknown-warning' => 'Waray kasabti nga pahimatngon: "$1".',
'api-error-unknownerror' => 'Waray kasabti nga sayop: "$1".',
'api-error-uploaddisabled' => 'Diri ginpapakarga paigbaw ha dinhi nga wiki.',
'api-error-verification-error' => 'Ini nga paypay in bangin naraot, o may-ada iba nga ekstensyon.',

# Durations
'duration-seconds' => '$1 {{PLURAL:$1|segundo|mga segundo}}',
'duration-minutes' => '$1 {{PLURAL:$1|minuto|mga minuto}}',
'duration-hours' => '$1 {{PLURAL:$1|oras|mga oras}}',
'duration-days' => '$1 {{PLURAL:$1|adlaw|mga adlaw}}',
'duration-weeks' => '$1 {{PLURAL:$1|semana|mga semana}}',
'duration-years' => '$1 {{PLURAL:$1|tuig|mga tuig}}',
'duration-decades' => '$1 {{PLURAL:$1|dekada|mga dekada}}',
'duration-centuries' => '$1 {{PLURAL:$1|gatostuig|mga gatostuig}}',
'duration-millennia' => '$1 {{PLURAL:$1|yukottuig|mga yukottuig}}',

);
