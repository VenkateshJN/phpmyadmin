<?php
/* $Id$ */

/**
 * Latvian language file by Sandis J�rics <sandisj at parks.lv>
 */

$charset = 'windows-1257';
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('baiti', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Sv', 'Pr', 'Ot', 'Tr', 'Ce', 'Pt', 'Se');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'J�n', 'J�l', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d%m.%Y %H:%M';

$timespanfmt = '%s dienas, %s stundas, %s min�tes un %s sekundas';

$strAPrimaryKey = 'Prim�r� atsl�ga pievienota uz lauka %s';
$strAbortedClients = 'P�rtraukts';
$strAbsolutePathToDocSqlDir = 'L�dzu ievadiet absol�to ce�u l�dz docSQL direktorijai uz servera';
$strAccessDenied = 'Pieeja aizliegta';
$strAction = 'Darb�ba';
$strAddDeleteColumn = 'Pievienot/Dz�st laukus (kolonnas)';
$strAddDeleteRow = 'Pievienot/Dz�st ierakstu';
$strAddNewField = 'Pievienot jaunu lauku';
$strAddPriv = 'Pievienot jaunu privil��iju';
$strAddPrivMessage = 'J�s pievienoj�t jaunu privil��iju.';
$strAddPrivilegesOnDb = 'Pievienot privil��ijas uz sekojo�o  datub�zi';
$strAddPrivilegesOnTbl = 'Pievienot privil��ijas uz sekojo�o tabulu';
$strAddSearchConditions = 'Pievienot mekl��anas nosac�jumus ("where" izteiksmes �ermenis):';
$strAddToIndex = 'Pievienot indeksam &nbsp;%s&nbsp;kolonn(u/as)';
$strAddUser = 'Pievienot jaunu lietot�ju';
$strAddUserMessage = 'J�s pievienoj�t jaunu lietot�ju.';
$strAddedColumnComment = 'Pievienots koment�rs kolonnai';
$strAddedColumnRelation = 'Pievienota rel�cija kolonnai';
$strAdministration = 'Administr�cija';
$strAffectedRows = 'Ietekm�to rindu skaits:';
$strAfter = 'P�c %s';
$strAfterInsertBack = 'Atgriezties atpaka� iepriek��j� lap�';
$strAfterInsertNewInsert = 'Ievietot v�l vienu rindu';
$strAll = 'Visi';
$strAllTableSameWidth = 'r�d�t visas tabulas vienad� platum�?';
$strAlterOrderBy = 'Main�t datu k�rto�anas laukus';
$strAnIndex = 'Indekss tieka pievienots uz %s';
$strAnalyzeTable = 'Analiz�t tabulu';
$strAnd = 'Un';
$strAny = 'Jebkur�';
$strAnyColumn = 'Jebkura kolonna';
$strAnyDatabase = 'Jebkura datub�ze';
$strAnyHost = 'Jebkur� hosts';
$strAnyTable = 'Jebkura tabula';
$strAnyUser = 'Jebkur� lietot�js';
$strAscending = 'Augo�� sec�b�';
$strAtBeginningOfTable = 'Tabulas s�kum�';
$strAtEndOfTable = 'Tabulas beig�s';
$strAttr = 'Atrib�ti';
$strAutodetect = 'Noteikt autom�tiski';
$strAutomaticLayout = 'Autom�tiskais izvietojums';

$strBack = 'Atpaka�';
$strBeginCut = 'IZGRIEZT NO ��S VIETAS';
$strBeginRaw = 'RINDAS S�KUMS';
$strBinary = 'Bin�rais';
$strBinaryDoNotEdit = 'Bin�rais - netiek labots';
$strBookmarkDeleted = 'Ieraksts tika dz�sts.';
$strBookmarkLabel = 'Nosaukums';
$strBookmarkQuery = 'Saglab�tie SQL vaic�jumi';
$strBookmarkThis = 'Saglab�t �o SQL vaic�jumu';
$strBookmarkView = 'Tikai apskat�t';
$strBrowse = 'Apskat�t';
$strBzError = 'phpMyAdmin nevar�ja saarhiv�t failu d�� boj�ta Bz2 papla�in�juma �aj� php versij�. Stingri rekomend�jam uzst�d�t <code>$cfg[\'BZipDump\']</code> direkt�vu J�su phpMyAdmin konfigur�cijas fail� uz <code>FALSE</code>. Ja v�laties lietot Bz2 kompresijas iesp�jas, Jums j�uzliek jaun�ka php versija. Skat�t php bug report %s s�k�kai inform�cijai.';
$strBzip = 'Arhiv�ts ar bzip';

$strCSVOptions = 'CSV opcijas';
$strCannotLogin = 'Nevar piesl�gties MySQL serverim';
$strCantLoad = 'nevar iel�d�t papla�in�jumu %s,<br />l�dzu p�rbaudiet PHP konfigur�ciju';
$strCantLoadMySQL = 'nevar iel�d�t MySQL papla�in�jumu,<br />l�dzu p�rbaudiet PHP konfigur�ciju.';
$strCantLoadRecodeIconv = 'Nevar iel�d�t iconv vai recode papla�in�jumu, kas ir nepiecie�ams rakstz�mju konvert�cijai, l�dzu nokonfigur�jiet php, lai var�tu lietot �os papla�in�jumus, vai ar� atsl�dziet rakstz�mju konvert�ciju phpMyAdmin konfigur�cij�.';
$strCantRenameIdxToPrimary = 'Nevar p�rsaukt indeksu par PRIMARY!';
$strCantUseRecodeIconv = 'Nevar lietot iconv, libiconv vai recode_string funkciju, bet php saka, ka papla�in�jums ir iel�d�ts. P�rbaudiet J�su php konfigur�ciju.';
$strCardinality = 'Kardinalit�te';
$strCarriage = 'Rindas nobeiguma simbols: \\r';
$strChange = 'Labot';
$strChangeCopyMode = 'Izveidot jaunu lietot�ju ar t�d�m pa��m privil��ij�m un ...';
$strChangeCopyModeCopy = '... patur�t veco lietot�ju.';
$strChangeCopyModeDeleteAndReload = ' ... dz�st veco lietot�ju no lietot�ju tabulas, un p�c tam p�rl�d�t privil��ijas.';
$strChangeCopyModeJustDelete = ' ... dz�st veco lietot�ju no lietot�ju tabulas.';
$strChangeCopyModeRevoke = ' ... at�emt vecajam lietot�jam visas akt�v�s privil��ijas, un p�c tam dz�st vi�u.';
$strChangeCopyUser = 'Main�t piek�uves inform�ciju / Klon�t lietot�ju';
$strChangeDisplay = 'Izv�lieties, kuru lauku r�d�t';
$strChangePassword = 'Main�t paroli';
$strCharset = 'Rakstz�mju kopa';
$strCharsetOfFile = 'Tabulas kod�jums:';
$strCheckAll = 'Iez�m�t visu';
$strCheckDbPriv = 'P�rbaud�t privil��ijas uz datub�zi';
$strCheckPrivs = 'P�rbaud�t privil��ijas';
$strCheckPrivsLong = 'P�rbaud�t privil��ijas uz datub�zi &quot;%s&quot;.';
$strCheckTable = 'P�rbaud�t tabulu';
$strChoosePage = 'Izv�lieties lapu redig��anai';
$strColComFeat = 'R�du kolonnu koment�rus';
$strColumn = 'Kolonna';
$strColumnNames = 'Kolonnu nosaukumi';
$strColumnPrivileges = 'Kolonnu specifisk�s privil��ijas';
$strCommand = 'Komanda';
$strComments = 'Koment�ri';
$strCompleteInserts = 'Pilnas INSERT izteiksmes';
$strCompression = 'Kompresija';
$strConfigFileError = 'phpMyAdmin nevar nolas�t J�su konfigur�cijas failu!<br />Tas var notikt, ja PHP atrod taj� k��da, vai ar� PHP nevar atrast so failu.<br />M�giniet izsaukt konfigur�cijas failu tie�i, klik�kinot linku zem�k un lasiet PHP pazinojumu par k��d�m. Vair�kum� gad�jumu kaut kur pietrukst p�dina vai semikols.<br />Ja J�s redzat tuk�u lapu, viss ir k�rt�b�.';
$strConfigureTableCoord = 'L�dzu konfigur�jiet koordin�tes tabulai %s';
$strConfirm = 'Vai J�s tie��m gribat to dar�t?';
$strConnections = 'Konekcijas';
$strCookiesRequired = '�� lapa nestr�d�s korekti, ja \'Cookies\' ir atsl�gtas J�su p�rl�kprogrammas konfigur�cij�.';
$strCopyTable = 'Kop�t tabulu uz (datub�ze<b>.</b>tabula):';
$strCopyTableOK = 'Tabula %s tika p�rkop�ta uz %s.';
$strCouldNotKill = 'phpMyAdmin nevar�ja nogalin�t procesu %s. Iesp�jams, ka tas jau agr�k tika izbeigts.';
$strCreate = 'Izveidot';
$strCreateIndex = 'Izveidot indeksu uz&nbsp;%s&nbsp;laukiem';
$strCreateIndexTopic = 'Izveidot jaunu indeksu';
$strCreateNewDatabase = 'Izveidot jaunu datub�zi';
$strCreateNewTable = 'Izveidot jaunu tabulu datub�z� %s';
$strCreatePage = 'Izveidot jaunu lapu';
$strCreatePdfFeat = 'PDF failu izveide';
$strCriteria = 'Krit�rijs';

$strDBComment = 'Datub�zes koment�rs: ';
$strDBGContext = 'Konteksts';
$strDBGContextID = 'Konteksta ID';
$strDBGHits = 'Apmekl�jumi';
$strDBGLine = 'L�nija';
$strDBGMaxTimeMs = 'Maks. laiks, ms';
$strDBGMinTimeMs = 'Min. laiks, ms';
$strDBGModule = 'Modulis';
$strDBGTimePerHitMs = 'Viena apmekl�juma laiks, ms';
$strDBGTotalTimeMs = 'Laiks kop�, ms';
$strData = 'Dati';
$strDataDict = 'Datu v�rdn�ca';
$strDataOnly = 'Tikai dati';
$strDatabase = 'Datub�ze ';
$strDatabaseHasBeenDropped = 'Datub�ze %s tika izdz�sta.';
$strDatabaseWildcard = 'Datub�ze (var lietot aizst�j�jz�mes):';
$strDatabases = 'Datub�zes';
$strDatabasesDropped = '%s datub�zes tika veiksm�gi dz�stas.';
$strDatabasesStats = 'Datub�zu statistika';
$strDatabasesStatsDisable = 'Izsl�gt statistiku';
$strDatabasesStatsEnable = 'Iesl�gt statistiku';
$strDatabasesStatsHeavyTraffic = 'Piez�me: Datub�zes statistikas iesl�g�ana �eit var izsaukt palielin�to datu apmai�u starp webserveri un MySQL serveri.';
$strDbPrivileges = 'Datub��u specifisk�s privil��ijas';
$strDbSpecific = 'datub�zei specifisks';
$strDefault = 'Noklus�ts';
$strDefaultValueHelp = 'Noklus�taj�m v�rt�b�m, l�dzu ievadiet tikai pa�u vert�bu, bez izsarg��an�s ar atpaka��jo sl�psv�tru vai p�di��m, lietojot �o formatu: a';
$strDelOld = 'Teko�aj� lap� ir atsauces uz tabul�m, kas vairs neeksist�. Vai J�s gribat dz�st ��s atsauces?';
$strDelete = 'Dz�st';
$strDeleteAndFlush = 'Dz�st lietot�jus, un p�c tam p�rl�d�t privil��ijas.';
$strDeleteAndFlushDescr = 'Tas ir lab�kais veids, bet privil��iju p�rl�d��ana var pa�emt zin�mu laiku.';
$strDeleteFailed = 'Dz��ana nenotika!';
$strDeleteUserMessage = 'J�s nodz�s�t lietot�ju %s.';
$strDeleted = 'Ieraksts tika dz�sts';
$strDeletedRows = 'Ieraksti dz�sti:';
$strDeleting = 'Dz��am %s';
$strDescending = 'Dilsto�� sec�b�';
$strDisabled = 'Izsl�gts';
$strDisplay = 'Att�lot';
$strDisplayFeat = 'R�d�t iesp�jas';
$strDisplayOrder = 'Att�lo�anas sec�ba:';
$strDisplayPDF = 'R�d�t PDF sh�mu';
$strDoAQuery = 'Izpild�t "vaic�jumu p�c parauga" (aizst�j�jz�me: "%")';
$strDoYouReally = 'Vai J�s tie��m gribat ';
$strDocu = 'Dokument�cija';
$strDrop = 'Likvid�t';
$strDropDB = 'Likvid�t datub�zi %s';
$strDropSelectedDatabases = 'Dz�st iez�m�t�s datub�zes';
$strDropTable = 'Likvid�t tabulu';
$strDropUsersDb = 'Dz�st datub�zes, kur�m ir t�di pa�i v�rdi, k� lietot�jiem.';
$strDumpComments = 'Ielikt kolonnu koment�rus k� SQL koment�rus';
$strDumpXRows = 'Saglab�t %s rindas, s�kot ar %s.';
$strDumpingData = 'Dati tabulai';
$strDynamic = 'dinamisks';

$strEdit = 'Labot';
$strEditPDFPages = 'Labot PDF lapas';
$strEditPrivileges = 'Main�t privil��ijas';
$strEffective = 'Efekt�vs';
$strEmpty = 'Iztuk�ot';
$strEmptyResultSet = 'MySQL atgrieza tuk�o rezult�tu (0 rindas).';
$strEnabled = 'Iesl�gts';
$strEnd = 'Beigas';
$strEndCut = 'IZGRIEZT L�DZ �AI VIETAI';
$strEndRaw = 'RINDAS BEIGAS';
$strEnglishPrivileges = ' Piez�me: MySQL privil��iju apz�m�jumi tiek rakst�ti ang�u valod� ';
$strError = 'K��da';
$strExplain = 'Izskaidrot SQL';
$strExport = 'Eksports';
$strExportToXML = 'Eksports XML format�';
$strExtendedInserts = 'Papla�in�t�s INSERT izteiksmes';
$strExtra = 'Ekstras';

$strFailedAttempts = 'Neveiksm�gi m��in�jumi';
$strField = 'Lauks';
$strFieldHasBeenDropped = 'Lauks %s tika izdz�sts';
$strFields = 'Lauki';
$strFieldsEmpty = ' Lauku skaits ir nulle! ';
$strFieldsEnclosedBy = 'Lauki iek�auti iek�';
$strFieldsEscapedBy = 'Gl�bjo�� (escape) rakstz�me ir';
$strFieldsTerminatedBy = 'Lauki atdal�ti ar';
$strFileCouldNotBeRead = 'Nevar nolas�t failu';
$strFileNameTemplate = 'Faila nosaukuma �ablons';
$strFileNameTemplateHelp = 'Lietojiet __DB__ datub�zes nosaukumam, __TABLE__ tabulas nosaukumam un funkcijas %sstrftime%s opcijas laika nor�d�sanai, faila papla�in�jums tiks autom�tiski pievienots. Jebk�ds cits teksts tiks atst�ts bez izmai��m.';
$strFileNameTemplateRemember = 'atcer�ties �ablonu';
$strFixed = 'fiks�ts';
$strFlushPrivilegesNote = 'Piez�me: phpMyAdmin sa�em lietot�ju privil��ijas pa taisno no MySQL privil��iju tabil�m. �o tabulu saturs var at��irties no privil��ij�m, ko lieto serveris, ja tur tika veikti labojumi. �aj� gad�jum� ir nepiecie�ams %sp�rl�d�t privil��ijas%s pirms J�s turpin�t.';
$strFlushTable = 'Atsvaidzin�t tabulu ("FLUSH")';
$strFormEmpty = 'Form� tr�kst v�rt�bu!';
$strFormat = 'Formats';
$strFullText = 'Pilni teksti';
$strFunction = 'Funkcija';

$strGenBy = 'Uz�ener�ja';
$strGenTime = 'Izveido�anas laiks';
$strGeneralRelationFeat = 'Galven�s rel�ciju �pa��bas';
$strGlobal = 'glob�ls';
$strGlobalPrivileges = 'Glob�l�s privil��ijas';
$strGlobalValue = 'Glob�l� v�rt�ba';
$strGo = 'Aiziet!';
$strGrantOption = 'Pie��irt';
$strGrants = 'Ties�bas';
$strGzip = 'Arhiv�ts ar gzip';

$strHasBeenAltered = 'tika modific�ta.';
$strHasBeenCreated = 'tika izveidota.';
$strHaveToShow = 'Izv�lieties vismaz vienu kolonnu att�lo�anai';
$strHome = 'S�kumlapa';
$strHomepageOfficial = 'Ofici�l� phpMyAdmin m�jaslapa';
$strHomepageSourceforge = 'phpMyAdmin lejupl�des lapa iek� Sourceforge';
$strHost = 'Hosts';
$strHostEmpty = 'Hosts nav nor�d�ts!';

$strId = 'ID';
$strIdxFulltext = 'Pilni teksti';
$strIfYouWish = 'Ja J�s v�laties iel�d�t tikai da�as tabulas kolonnas, nor�diet to nosaukumus, atdalot tos ar komatu.';
$strIgnore = 'Ignor�t';
$strIgnoringFile = 'Ignor�jam failu %s';
$strImportDocSQL = 'Import�t docSQL failus';
$strImportFiles = 'Import�t failus';
$strImportFinished = 'Imports pabeigts';
$strInUse = 'lieto�an�';
$strIndex = 'Indekss';
$strIndexHasBeenDropped = 'Indekss %s tika izdz�sts';
$strIndexName = 'Indeksa nosaukums&nbsp;:';
$strIndexType = 'Indeksa tips&nbsp;:';
$strIndexes = 'Indeksi';
$strInnodbStat = 'InnoDB statuss';
$strInsecureMySQL = 'J�su konfigur�cijas fails satur iest�d�jumus (lietot�js "root" bez paroles), kas atbilst noklus�tajam MySQL privili��tajam lietot�jam. J�su MySQL serveris str�d� ar �o noklus�to variantu, ir atv�rts uzbrukumiem, un Jums tie��m j�aiztaisa �is dro��bas caurums.';
$strInsert = 'Pievienot';
$strInsertAsNewRow = 'Ievietot k� jaunu rindu';
$strInsertNewRow = 'Pievienot jaunu rindu';
$strInsertTextfiles = 'Ievietot tabul� datus no teksta faila';
$strInsertedRows = 'Rindas pievienotas:';
$strInstructions = 'Instrukcijas';
$strInvalidName = '"%s" ir rezerv�ts v�rds, J�s nevarat lietot to k� datub�zes/tabulas/lauka nosaukumu.';

$strJumpToDB = 'p�riet pie datub�zes &quot;%s&quot;.';
$strJustDelete = 'Dz�st lietot�jus no privil��iju tabul�m.';
$strJustDeleteDescr = '&quot;Dz�stie&quot; lietot�ji saglab� sp�ju piek��t serverim k� parasti, l�dz privil��ijas tiek p�rl�d�tas.';

$strKeepPass = 'Nemain�t paroli';
$strKeyname = 'Atsl�gas nosaukums';
$strKill = 'Nogalin�t';

$strLaTeX = 'LaTeX';
$strLandscape = 'Landscape';
$strLength = 'Garums';
$strLengthSet = 'Garums/V�rt�bas*';
$strLimitNumRows = 'Rindu skaits vien� lap�';
$strLineFeed = 'Rindas beigu simbols: \\n';
$strLines = 'Rindas';
$strLinesTerminatedBy = 'Rindas atdal�tas ar';
$strLinkNotFound = 'Links nav atrasts';
$strLinksTo = 'Linki uz';
$strLocalhost = 'Loc�ls';
$strLocationTextfile = 'Teksta faila atra�an�s vieta';
$strLogPassword = 'Parole:';
$strLogUsername = 'Lietot�jv�rds:';
$strLogin = 'Ieiet';
$strLoginInformation = 'Piek�uves inform�cija';
$strLogout = 'Iziet';

$strMIME_MIMEtype = 'MIME tips';
$strMIME_available_mime = 'Pieejamie MIME tipi';
$strMIME_available_transform = 'Pieejam�s transform�cijas';
$strMIME_description = 'Apraksts';
$strMIME_file = 'Fila nosaukums';
$strMIME_nodescription = '�ai transform�cijai nav apraksta.<br />Jaut�jiet autoram, ko %s dara.';
$strMIME_transformation = 'P�rl�kprogrammas transform�cija';
$strMIME_transformation_note = 'Lai ieg�tu pieejamo transform�ciju opcijas un to MIME tipu transform�cijas, uzklik��iniet uz %stransform�ciju apraksti%s';
$strMIME_transformation_options = 'Transform�cijas opcijas';
$strMIME_transformation_options_note = 'L�dzu ievadiet transform�ciju opciju v�rt�bas, lietojot �o formatu: \'a\',\'b\',\'c\'...<br />Ja Jums j�lieto atpaka��j� sl�psv�tra ("\") vai vienk�r�� p�di�a ("\'") starp ��m v�rt�b�m, lieciet t�s priek�� v�l vienu atpaka��jo sl�psv�tru (piem�ram \'\\\\xyz\' or \'a\\\'b\').';
$strMIME_without = 'MIME tipiem, kas par�d�ti sl�prakst�, nav atsevi��as transform�cijas funkcijas';
$strMissingBracket = 'Tr�kst iekavas';
$strModifications = 'Groz�jumi tika saglab�ti';
$strModify = 'Modific�t';
$strModifyIndexTopic = 'Modific�t indeksu';
$strMoreStatusVars = 'Vair�k statusa main�gie';
$strMoveTable = 'P�rvietot tabulu uz (datub�ze<b>.</b>tabula):';
$strMoveTableOK = 'Tabula %s tika p�rvietota uz %s.';
$strMySQLCharset = 'MySQL kod�jums';
$strMySQLReloaded = 'MySQL serveris tika p�rl�d�ts.';
$strMySQLSaid = 'MySQL teica: ';
$strMySQLServerProcess = 'MySQL %pma_s1% str�d� uz %pma_s2% k� %pma_s3%';
$strMySQLShowProcess = 'Par�d�t procesus';
$strMySQLShowStatus = 'Par�d�t MySQL izpildes laika inform�ciju';
$strMySQLShowVars = 'Par�d�t MySQL sist�mas main�gos';

$strName = 'Nosaukums';
$strNext = 'N�kamie';
$strNo = 'N�';
$strNoDatabases = 'Nav datub�zu';
$strNoDatabasesSelected = 'Datub�ze nav izv�l�ta.';
$strNoDescription = 'Bez apraksta';
$strNoDropDatabases = '"DROP DATABASE" komanda ir aizliegta.';
$strNoExplain = 'Neizskaidrot SQL';
$strNoFrames = 'phpMyAdmin ir vair�k draudz�gs <b>freimu atbalsto��m</b> p�rl�kprogramm�m.';
$strNoIndex = 'Nav defin�ti indeksi!';
$strNoIndexPartsDefined = 'Nav defin�to indeksa da�u!';
$strNoModification = 'Netika labots';
$strNoOptions = '�im form�tam nav opciju';
$strNoPassword = 'Nav paroles';
$strNoPhp = 'Bez PHP koda';
$strNoPrivileges = 'Nav privil��iju';
$strNoQuery = 'Nav SQL vaic�juma!';
$strNoRights = 'Jums nav pietieko�i ties�bu, lai atrastos �eit tagad!';
$strNoTablesFound = 'Tabulas nav atrastas �aj� datub�z�.';
$strNoUsersFound = 'Lietot�ji netika atrasti.';
$strNoUsersSelected = 'Lietot�ji nav izv�l�ti.';
$strNoValidateSQL = 'Nep�rbaud�t SQL';
$strNone = 'Nav';
$strNotNumber = 'Tas nav numurs!';
$strNotOK = 'nav OK';
$strNotSet = 'Tabula <b>%s</b> nav atrasta vai nav atz�meta iek� %s';
$strNotValidNumber = ' nav der�gs lauku skaits!';
$strNull = 'Nulle';
$strNumSearchResultsInTable = '%s rezult�ti tabul� <i>%s</i>';
$strNumSearchResultsTotal = '<b>Kopum�:</b> <i>%s</i> rezult�ti';
$strNumTables = 'Tabulas';

$strOK = 'Labi';
$strOftenQuotation = 'Parasti p�di�as. NEOBLIG�TS noz�m�, ka tikai \'char\' un \'varchar\' tipa lauki tiek norobe�oti ar �o simbolu.';
$strOperations = 'Darb�bas';
$strOptimizeTable = 'Optimiz�t tabulu';
$strOptionalControls = 'Neoblig�ts. Nosaka, k� rakst�t vai las�t speci�l�s rakstz�mes.';
$strOptionally = 'NEOBLIG�TS';
$strOptions = 'Opcijas';
$strOr = 'Vai';
$strOverhead = 'P�rt�ri��';

$strPHP40203 = 'J�s lietojat PHP versiju 4.2.3, kurai ir nopietna k��da daudzbaitu rindi�u funkcij�s (mbstring). Skat�t PHP bug report 19404. S� PHP versija nav rekomend�jama lieto�anai ar phpMyAdmin.';
$strPHPVersion = 'PHP Versija';
$strPageNumber = 'Lapas numurs:';
$strPartialText = 'Da��ji teksti';
$strPassword = 'Parole';
$strPasswordChanged = 'Lietot�ja %s parole tika veiksm�gi main�ta.';
$strPasswordEmpty = 'Parole nav nor�d�ta!';
$strPasswordNotSame = 'Paroles nesakr�t!';
$strPdfDbSchema = 'Datub�zes "%s" sh�ma, %s. lapa';
$strPdfInvalidPageNum = 'Nenoteikts PDF lapas numurs!';
$strPdfInvalidTblName = 'Tabula "%s" neeksist�!';
$strPdfNoTables = 'Nav tabulu';
$strPerHour = 'stund�';
$strPerMinute = 'min�t�';
$strPerSecond = 'sekund�';
$strPhp = 'Izveidot PHP kodu';
$strPmaDocumentation = 'phpMyAdmin dokument�cija';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> direkt�vai ir J�B�T nodefin�tai J�su konfigur�cijas fail�!';
$strPortrait = 'Portrait';
$strPos1 = 'S�kums';
$strPrevious = 'Iepriek��jie';
$strPrimary = 'Prim�r�';
$strPrimaryKey = 'Prim�r� atsl�ga';
$strPrimaryKeyHasBeenDropped = 'Prim�r� atsl�ga tika izdz�sta';
$strPrimaryKeyName = 'Prim�r�s atsl�gas nosaukumam j�b�t... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>j�b�t</b> tikai un <b>vien�gi</b> prim�r�s atsl�gas indeksa nosaukumam!)';
$strPrint = 'Druk�t';
$strPrintView = 'Izdrukas versija';
$strPrivDescAllPrivileges = 'Iek�auj visas privil��ijas, iz�emot GRANT.';
$strPrivDescAlter = '�auj main�t eso�o tabulu strukt�ru.';
$strPrivDescCreateDb = '�auj veidot jaunas datub�zes un tabulas.';
$strPrivDescCreateTbl = '�auj veidot jaunas tabulas.';
$strPrivDescCreateTmpTable = '�auj veidot pagaidu tabulas.';
$strPrivDescDelete = '�auj dz�st datus.';
$strPrivDescDropDb = '�auj dz�st datub�zes un tabulas.';
$strPrivDescDropTbl = '�auj dz�st tabulas.';
$strPrivDescExecute = '�auj palaist saglab�t�s proced�ras; v�l nestr�d� �aj� MySQL versij�.';
$strPrivDescFile = '�auj import�t/eksport�t datus no/uz failiem.';
$strPrivDescGrant = '�auj pievienot lietot�jus un privil��ijas bez privil��iju tabulu p�rl�d��anas.';
$strPrivDescIndex = '�auj veidot un dz�st indeksus.';
$strPrivDescInsert = '�auj ievietot un main�t datus.';
$strPrivDescLockTables = '�auj blo��t tabulas teko�ajai darb�bai.';
$strPrivDescMaxConnections = 'Ierobe�o jauno konekciju skaitu, ko lietot�js var atv�rt stundas laik�.';
$strPrivDescMaxQuestions = 'Ierobe�o vaic�jumu skaitu, ko lietot�js var mos�t�t uz serveri stundas laik�.';
$strPrivDescMaxUpdates = 'Ierobe�o komandu skaitu, kas maina kas maina tabulas vai datub�zes, ko lietot�js var izpild�t stundas laik�.';
$strPrivDescProcess3 = '�auj nogalin�t citu lietot�ju procesus.';
$strPrivDescProcess4 = '�auj apskat�t piepras�jumu un procesu sarakstus.';
$strPrivDescReferences = 'Nedarbojas �aj� MySQL versij�.';
$strPrivDescReload = '�auj prl�d�t servera iest�d�jumus un iztuk�ot servera ke�u.';
$strPrivDescReplClient = 'Dod lietot�jam ties�bas jaut�t, kur ir replik�cijas ori�in�li / kopijas.';
$strPrivDescReplSlave = 'Nepiecie�ams replik�ciju kopij�m.';
$strPrivDescSelect = '�auj las�t datus.';
$strPrivDescShowDb = 'Dod pieeju pilnam datub�zu sarakstam.';
$strPrivDescShutdown = '�auj apst�din�t serveri.';
$strPrivDescSuper = '�auj piesl�gties pat tad, ja ir sasniegts maksim�lais konekciju skaits; Nepiecie�ams vairumam administrat�vo oper�ciju, k� glob�lo main�go mai�a vai citu lietot�ju procesu nogalin��ana.';
$strPrivDescUpdate = '�auj main�t datus.';
$strPrivDescUsage = 'Nav privil��iju.';
$strPrivileges = 'Privil��ijas';
$strPrivilegesReloaded = 'Privil��ijas tika veiksm�gi p�rl�d�tas.';
$strProcesslist = 'Procesu saraksts';
$strProperties = '�pa��bas';
$strPutColNames = 'Likt kolonnu nosaukumus pirmaj� rind�';

$strQBE = 'Vaic�jums p�c parauga';
$strQBEDel = 'Dz�st';
$strQBEIns = 'Ielikt';
$strQueryFrame = 'Vaic�juma logs';
$strQueryFrameDebug = 'Atk��do�anas inform�cija';
$strQueryFrameDebugBox = 'Akt�vie main�gie vaic�juma formai:\nDB: %s\nTabula: %s\nServeris: %s\n\nTeko�ie main�gie vaic�juma formai:\nDB: %s\nTabula: %s\nServeris: %s\n\nAtver�ja atra�an�s: %s\nFreimseta atra�an�s: %s.';
$strQueryOnDb = 'SQL vaic�jums uz datub�zes <b>%s</b>:';
$strQuerySQLHistory = 'SQL v�sture';
$strQueryStatistics = '<b>Piepras�jumu statistika</b>: No t� palai�anas br��a, %s piepras�jumi tika nos�t�ti uz serveri.';
$strQueryTime = 'Vaic�jums ilga %01.4f s';
$strQueryType = 'Vaic�juma tips';

$strReType = 'Atk�rtojiet';
$strReceived = 'Sa�emts';
$strRecords = 'Ieraksti';
$strReferentialIntegrity = 'P�rbaud�t referenci�lo integrit�ti:';
$strRelationNotWorking = 'Papildiesp�jas darbam ar saist�t�m tabul�m tika izsl�gtas. Lai uzzin�tu k�p�c, klik�kiniet %s�eit%s.';
$strRelationView = 'Rel�ciju p�rskats';
$strRelationalSchema = 'Rel�ciju sh�ma';
$strReloadFailed = 'Nesan�ca p�rl�d�t MySQL serveri.';
$strReloadMySQL = 'P�rl�d�t MySQL serveri';
$strReloadingThePrivileges = 'P�rl�d�jam privil��ijas';
$strRememberReload = 'Neaizmirstiet p�rl�d�t serveri.';
$strRemoveSelectedUsers = 'Dz�st izv�l�tos lietot�jus';
$strRenameTable = 'P�rsaukt tabulu uz';
$strRenameTableOK = 'Tabula %s tika p�rsaukta par %s';
$strRepairTable = 'Restaur�t tabulu';
$strReplace = 'Aizvietot';
$strReplaceTable = 'Aizvietot tabulas datus ar datiem no faila';
$strReset = 'Atcelt';
$strResourceLimits = 'Resursu ierobe�ojumi';
$strRevoke = 'Atsaukt';
$strRevokeAndDelete = 'At�emt visas akt�v�s privil��ijas lietot�jiem, un p�c tam dz�st tos.';
$strRevokeAndDeleteDescr = 'Lietot�ji saglab� iespeju lietot datub�zes, l�dz privil��ijas tiek p�rl�d�tas.';
$strRevokeGrant = 'At�emt \'Grant\' ties�bas';
$strRevokeGrantMessage = 'J�s at��m�t \'Grant\' ties�bas lietot�jam %s';
$strRevokeMessage = 'J�s at��m�t privil�gijas lietot�jam %s';
$strRevokePriv = 'At�emt privil��ijas';
$strRowLength = 'Rindas garums';
$strRowSize = ' Rindas izm�rs ';
$strRows = 'Rindas';
$strRowsFrom = 'rindas s�kot no';
$strRowsModeFlippedHorizontal = 'horizont�l� (pagriezti virsraksti)';
$strRowsModeHorizontal = 'horizont�l�';
$strRowsModeOptions = '%s skat� un atk�rtot virsrakstus ik p�c %s rind�m';
$strRowsModeVertical = 'vertik�l�';
$strRowsStatistic = 'Rindas statistika';
$strRunQuery = 'Izpild�t vaic�jumu';
$strRunSQLQuery = 'Izpild�t SQL vaic�jumu(s) uz datub�zes %s';
$strRunning = 'atrodas uz %s';

$strSQL = 'SQL';
$strSQLOptions = 'SQL opcijas';
$strSQLParserBugMessage = 'Iesp�jams, ka J�s esat atradu�i k��du SQL interpretator�. L�dzu apskatiet J�su vaic�jumu cit�g�k, un p�rbaudiet, ka p�di�as ir pareizas un nav sajauktas. Cits k��das iemesls var b�t tas, ka J�s ats�t�j�t failu ar bin�ro v�rt�bu �rpus p�di��s iek�aut� teksta lauka. J�s varat ar� izm��in�t savu vaic�jumu MySQL komandrindas interfeis�. MySQL servera k��das pazi�ojums zem�k, ja t�ds ir, var ar� pal�dz�t Jums diagnostic�t probl�mu. Ja probl�ma paliek, vai ar� iek� phpMyAdmin k��da ir, bet komandrind� nav, l�dzu samaziniet J�su SQL vaic�jumu l�dz vienk�r�am vaic�jumam kas izsauc probl�mas, un ats�tiet mums zi�ojumu par k��du, iek�aujot taj� datus no IZGRIEZT sekcijas zem�k:';
$strSQLParserUserError = 'Izkat�s, ka J�su SQL vaicajum� ir k��da. MySQL servera k��das pazinojums zem�k, ja t�ds ir, var ar� pal�dzet Jums diagnostic�t probl�mu.';
$strSQLQuery = 'SQL vaic�jums';
$strSQLResult = 'SQL rezult�ts';
$strSQPBugInvalidIdentifer = 'Neder�gs identifikators';
$strSQPBugUnclosedQuote = 'Neaizv�rtas p�di�as';
$strSQPBugUnknownPunctuation = 'Nezin�m� punktu�cijas z�me';
$strSave = 'Saglab�t';
$strScaleFactorSmall = 'M�rogo�anas faktors ir p�r�k mazs, lai sh�ma ietilptu vien� lap�';
$strSearch = 'Mekl�t';
$strSearchFormTitle = 'Mekl�t datub�z�';
$strSearchInTables = 'Tabul�(s):';
$strSearchNeedle = 'V�rdi vai v�rt�bas mekl��anai (aizst�j�jz�me: "%"):';
$strSearchOption1 = 'kaut viens no v�rdiem';
$strSearchOption2 = 'visi v�rdi';
$strSearchOption3 = 'prec�za fr�ze';
$strSearchOption4 = 'k� regul�r� izteiksme';
$strSearchResultsFor = 'Mekl��anas rezult�ti "<i>%s</i>" %s:';
$strSearchType = 'Atrast:';
$strSelect = 'Atlas�t';
$strSelectADb = 'L�dzu izv�lieties datub�zi';
$strSelectAll = 'Iez�m�t visu';
$strSelectFields = 'Izv�lieties laukus (kaut vienu):';
$strSelectNumRows = 'vaic�jum�';
$strSelectTables = 'Izv�lieties tabulas';
$strSend = 'Saglab�t k� failu';
$strSent = 'Nos�t�ts';
$strServer = 'Serveris %s';
$strServerChoice = 'Servera izv�le';
$strServerStatus = 'Izpildes laika inform�cija';
$strServerStatusUptime = '�is MySQL serveris str�d� %s. Palai�an�s laiks %s.';
$strServerTabProcesslist = 'Procesi';
$strServerTabVariables = 'Main�gie';
$strServerTrafficNotes = '<b>Servera trafiks</b>: ��s tabulas par�da �� MySQL servera t�kla trafika statistiku kop� t� palai�anas.';
$strServerVars = 'Servera main�gie un konfigur�cija';
$strServerVersion = 'Servera versija';
$strSessionValue = 'Sesijas v�rt�ba';
$strSetEnumVal = 'Ja lauka tips ir "enum" vai "set", l�dzu ievadiet v�rt�bas atbilsto�i �im formatam: \'a\',\'b\',\'c\'...<br />Ja Jums vajag ielikt atpaka��jo sl�psv�tru (\) vai vienk�r�o p�di�u (\') k�d� no ��m v�rt�b�m, lieciet t�s priek�� atpaka��jo sl�psv�tru (piem�ram, \'\\\\xyz\' vai \'a\\\'b\').';
$strShow = 'R�d�t';
$strShowAll = 'R�d�t visu';
$strShowColor = 'R�d�t kr�sas';
$strShowCols = 'R�d�t kolonnas';
$strShowDatadictAs = 'Datu v�rdn�cas formats';
$strShowFullQueries = 'R�d�t pilnos vaic�jumus';
$strShowGrid = 'R�d�t re��i';
$strShowPHPInfo = 'Par�d�t PHP inform�ciju';
$strShowTableDimension = 'R�dit tabulu izm�rus';
$strShowTables = 'R�d�t tabulas';
$strShowThisQuery = ' R�d�t �o vaic�jumu �eit atkal ';
$strShowingRecords = 'Par�du rindas';
$strSingly = '(vienk�r�i)';
$strSize = 'Izm�rs';
$strSort = 'K�rto�ana';
$strSpaceUsage = 'Diska vietas lieto�ana';
$strSplitWordsWithSpace = 'V�rdi ir atdal�ti ar tuk�umu (" ").';
$strStatCheckTime = 'P�d�j� p�rbaude';
$strStatCreateTime = 'Izveido�ana';
$strStatUpdateTime = 'P�d�j� atjauno�ana';
$strStatement = 'Parametrs';
$strStatus = 'Statuss';
$strStrucCSV = 'CSV dati';
$strStrucData = 'Strukt�ra un dati';
$strStrucDrop = 'Pievienot tabulu dz��anas komandas';
$strStrucExcelCSV = 'CSV dati MS Excel form�t�';
$strStrucOnly = 'Tikai strukt�ra';
$strStructPropose = 'Ieteikt tabulas srukt�ru';
$strStructure = 'Strukt�ra';
$strSubmit = 'Nos�t�t';
$strSuccess = 'J�su SQL vaic�jums tika veiksm�gi izpild�ts';
$strSum = 'Kopum�';
$strSwitchToTable = 'P�rsl�gties uz nokop�to tabulu';

$strTable = 'Tabula';
$strTableComments = 'Koment�rs tabulai';
$strTableEmpty = 'Tabulas nosaukums nav nor�d�ts!';
$strTableHasBeenDropped = 'Tabula %s tika izdz�sta';
$strTableHasBeenEmptied = 'Tabula %s tika iztuk�ota';
$strTableHasBeenFlushed = 'Tabula %s tika atsvaidzin�ta';
$strTableMaintenance = 'Tabulas apkalpo�ana';
$strTableOfContents = 'Satura r�d�t�js';
$strTableStructure = 'Tabulas strukt�ra tabulai';
$strTableType = 'Tabulas tips';
$strTables = '%s tabula(s)';
$strTblPrivileges = 'Tabulu specifisk�s privil��ijas';
$strTextAreaLength = ' Sava garuma d��,<br /> �is lauks var b�t neredi��jams ';
$strTheContent = 'J�su faila saturs tika ievietots.';
$strTheContents = 'Faila saturs aizvieto izv�l�t�s tabulas saturu rindi��m ar identisko prim�r�s vai unik�l�s atsl�gas v�rt�bu.';
$strTheTerminator = 'Lauku atdal�t�js.';
$strThisHost = '�is hosts';
$strThisNotDirectory = 'T� nebija direktorija';
$strThreadSuccessfullyKilled = 'Process %s tika veiksm�gi nogalin�ts.';
$strTime = 'Laiks';
$strTotal = 'kop�';
$strTotalUC = 'Kop�';
$strTraffic = 'Datu apmai�a';
$strTransformation_image_jpeg__inline = 'Par�da klik��in�mo s�kt�lu; opcijas: platums, augstums pikse�os (saglab�jot ori�in�l�s proporcijas)';
$strTransformation_image_jpeg__link = 'Par�da linku uz �o att�lu (tie�a blob lauka lajupl�de).';
$strTransformation_image_png__inline = 'Skat�ties image/jpeg: k� ierindotu att�lu';
$strTransformation_text_plain__dateformat = '�em TIME, TIMESTAMP vai DATETIME lauku, un format� to izmantojot J�su lok�lo datuma formatu. Pirm� opcija ir nob�de (stund�s), kas tiks pievienota timestamp laukam (noklus�t�: 0). Otr� opcija ir datuma formats, saska�� ar PHP finkcijas strftime() parametriem.';
$strTransformation_text_plain__external = 'Tikai LINUX: Palai� �r�jo aplik�ciju un padod lauka datus t�s standartievad�. Atgrie� aplik�cijas standartizvadi. Noklus�jums ir Tidy, kas izskaistina HTML kodu. Dro��bas apsv�rumu d��, nepiecie�ams manu�li redi��t failu libraries/transformations/text_plain__external.inc.php un ielikt r�kus, kurus J�s at�aujat palaist. Pirm� opcija ir programmas numurs, ko J�s v�laties lietot, otr� opcija ir parametri �ai programmai. Tre�� opcija, ja ir vien�da ar 1, konvert� izvadi, izmantojot htmlspecialchars() (noklus�jums ir 1). Ceturtais parametrs, ja vien�ds ar 1, liek NOWRAP parametru satura ��nai, t� k� izvade tiks att�lota bez p�rformat��anas. (noklus�jums ir 1)';
$strTransformation_text_plain__formatted = 'Saglab� lauka ori�in�lo format�jumu. Speci�lo rakstz�mju pasarg��ana netiek veikta.';
$strTransformation_text_plain__imagelink = 'Par�da att�lu un linku, lauks satur faila nosauumu; pirm� opcija ir prefikss, piem�ram, "http://domens.lv/", otr� opcija ir platums pikse�os, tre�� ir augstums.';
$strTransformation_text_plain__link = 'Par�da att�lu un linku, lauks satur faila nosauumu; pirm� opcija ir prefikss, piem�ram, "http://domens.lv/", otr� opcija ir linka nosaukums.';
$strTransformation_text_plain__substr = 'Par�da tikai virknes da�u. Pirm� opcija ir nob�de, kas nosaka, kur J�su teksts s�kas (noklus�jums 0). Otr� opcija ir atgrie�am� teksta garums. Ja tuk�a, atgrie� visu atliku�o tekstu. Tre�� opcija nosaka rakstz�mes, kas tiks pievienotas apgriezt�s virknes gal� (noklus�jums: ...) .';
$strTransformation_text_plain__unformatted = 'Par�da HTML k� HTML simbolus. HTML format�jums netiek r�d�ts.';
$strTruncateQueries = 'Ierobe�ot par�d�to vaic�jumu garumu';
$strType = 'Tips';

$strUncheckAll = 'Neiez�m�t neko';
$strUnique = 'Unik�lais';
$strUnselectAll = 'Neiez�m�t neko';
$strUpdComTab = 'L�dzu skatieties dokument�ciju par to, k� atjaunot \'Column_comments\' tabulu';
$strUpdatePrivMessage = 'J�s modific�j�t privil��ijas objektam %s.';
$strUpdateProfile = 'Modific�t profilu:';
$strUpdateProfileMessage = 'Profils tika modific�ts.';
$strUpdateQuery = 'Atjaunot vaic�jumu';
$strUsage = 'Aiz�em';
$strUseBackquotes = 'Lietot apostrofa simbolu [`] tabulu un lauku nosaukumiem';
$strUseHostTable = 'Lietot hostu tabulu';
$strUseTables = 'Lietot tabulas';
$strUseTextField = 'Lietot teksta lauku';
$strUser = 'Lietot�js';
$strUserAlreadyExists = 'Lietot�js %s jau eksist�!';
$strUserEmpty = 'Lietot�ja v�rds nav nor�d�ts!';
$strUserName = 'Lietot�jv�rds';
$strUserNotFound = 'Izv�l�tais lietot�js nav atrasts privil��iju tabul�.';
$strUserOverview = 'Lietot�ju p�rskats';
$strUsers = 'Lietot�ji';
$strUsersDeleted = 'Izv�l�tie lietot�ji tika veiksm�gi dz�sti.';
$strUsersHavingAccessToDb = 'Lietot�ji, kam ir pieja pie &quot;%s&quot;';

$strValidateSQL = 'P�rbaud�t SQL';
$strValidatorError = 'Nevar inicializ�t SQL p�rbaudit�ju. L�dzu p�rbaudiet, vai J�s esat uzinstal�ju�i nepiecie�amos PHP papla�in�jumus, k� aprakst�ts %sdokument�cij�%s.';
$strValue = 'V�rt�ba';
$strVar = 'Main�gais';
$strViewDump = 'Apskat�t tabulas dampu (sh�mu)';
$strViewDumpDB = 'Apskat�t datub�zes dampu (sh�mu)';

$strWebServerUploadDirectory = 'web servera aug�upiel�des direktorija';
$strWebServerUploadDirectoryError = 'Direktoija, kuru J�s nor�dij�t aug�upiel�dei, nav pieejama';
$strWelcome = 'Laipni l�gti %s';
$strWildcard = 'aizst�j�jz�me';
$strWithChecked = 'Ar iez�m�to:';
$strWritingCommentNotPossible = 'Koment�ra rakst��ana nav iesp�jama';
$strWritingRelationNotPossible = 'Rel�cijas rakst��ana nav iesp�jama';
$strWrongUser = 'K��dains lietot�jv�rds/parole. Pieeja aizliegta.';

$strXML = 'XML';

$strYes = 'J�';

$strZeroRemovesTheLimit = 'Piez�me: �o opciju uzst�d��ana uz 0 (nulli) atce� ierobe�ojumus.';
$strZip = 'Arhiv�ts ar zip';

$strLaTeXOptions = 'LaTeX options';  //to translate
$strRelations = 'Relations';  //to translate
$strMoveTableSameNames = 'Can\'t move table to same one!';  //to translate
$strCopyTableSameNames = 'Can\'t copy table to same one!';  //to translate
$strMustSelectFile = 'You should select file which you want to insert.';  //to translate
$strSaveOnServer = 'Save on server in %s directory';  //to translate
$strOverwriteExisting = 'Overwrite existing file(s)';  //to translate
$strFileAlreadyExists = 'File %s already exists on server, change filename or check overwrite option.';  //to translate
$strDumpSaved = 'Dump has been saved to file %s.';  //to translate
$strNoPermission = 'The web server does not have permission to save the file %s.';  //to translate
$strNoSpace = 'Insufficient space to save the file %s.';  //to translate
$strInsertedRowId = 'Inserted row id:';  //to translate
$strLoadMethod = 'LOAD method';  //to translate
$strLoadExplanation = 'The best method is checked by default, but you can change if it fails.';  //to translate
$strExecuteBookmarked = 'Execute bookmarked query';  //to translate
$strExcelOptions = 'Excel options';  //to translate
$strReplaceNULLBy = 'Replace NULL by';  //to translate
$strQueryWindowLock = 'Do not overwrite this query from outside the window';  //to translate
$strPaperSize = 'Paper size';  //to translate
$strDatabaseNoTable = 'This database contains no table!';//to translate
$strViewDumpDatabases = 'View dump (schema) of databases';//to translate
$strAddIntoComments = 'Add into comments';//to translate
$strDatabaseExportOptions = 'Database export options';//to translate
$strAddDropDatabase = 'Add DROP DATABASE';//to translate
$strToggleScratchboard = 'toggle scratchboard';  //to translate
$strTableOptions = 'Table options';  //to translate
$strSecretRequired = 'The configuration file now needs a secret passphrase (blowfish_secret).';  //to translate
$strAccessDeniedExplanation = 'phpMyAdmin tried to connect to the MySQL server, and the server rejected the connection. You should check the host, username and password in config.inc.php and make sure that they correspond to the information given by the administrator of the MySQL server.';  //to translate
$strAddAutoIncrement = 'Add AUTO_INCREMENT value';  //to translate
$strCharsets = 'Charsets';  //to translate
$strDescription = 'Description';  //to translate
$strCharsetsAndCollations = 'Character Sets and Collations';  //to translate
$strCollation = 'Collation';  //to translate
$strMultilingual = 'multilingual';  //to translate
$strGerman = 'German';  //to translate
$strPhoneBook = 'phone book';  //to translate
$strDictionary = 'dictionary';  //to translate
$strSwedish = 'Swedish';  //to translate
$strDanish = 'Danish';  //to translate
$strCzech = 'Czech';  //to translate
$strTurkish = 'Turkish';  //to translate
$strEnglish = 'English';  //to translate
$strHungarian = 'Hungarian';  //to translate
$strCroatian = 'Croatian';  //to translate
$strBulgarian = 'Bulgarian';  //to translate
$strLithuanian = 'Lithuanian';  //to translate
$strEstonian = 'Estonian';  //to translate
$strCaseInsensitive = 'case-insensitive';  //to translate
$strCaseSensitive = 'case-sensitive';  //to translate
$strUkrainian = 'Ukrainian';  //to translate
$strHebrew = 'Hebrew';  //to translate
$strWestEuropean = 'West European';  //to translate
$strCentralEuropean = 'Central European';  //to translate
$strTraditionalChinese = 'Traditional Chinese';  //to translate
$strCyrillic = 'Cyrillic';  //to translate
$strArmenian = 'Armenian';  //to translate
$strArabic = 'Arabic';  //to translate
$strRussian = 'Russian';  //to translate
$strUnknown = 'unknown';  //to translate
$strBaltic = 'Baltic';  //to translate
$strUnicode = 'Unicode';  //to translate
$strSimplifiedChinese = 'Simplified Chinese';  //to translate
$strKorean = 'Korean';  //to translate
$strGreek = 'Greek';  //to translate
$strJapanese = 'Japanese';  //to translate
$strThai = 'Thai';  //to translate
$strUseThisValue = 'Use this value';  //to translate
$strWindowNotFound = 'The target browser window could not be updated. Maybe you have closed the parent window or your browser is blocking cross-window updates of your security settings';  //to translate
$strBrowseForeignValues = 'Browse foreign values';  //to translate
$strInternalRelations = 'Internal relations';  //to translate
$strInternalNotNecessary = '* An internal relation is not necessary when it exists also in InnoDB.';  //to translate
$strUpgradeMySQL = 'You should upgrade to MySQL %s or later.';  //to translate
$strLatexStructure = 'Structure of table __TABLE__';//to translate
$strLatexContinued = '(continued)';//to translate
$strLatexContent = 'Content of table __TABLE__';//to translate
$strLatexIncludeCaption = 'Include table caption';//to translate
$strLatexCaption = 'Table caption';//to translate
$strLatexLabel = 'Label key';//to translate
$strLatexContinuedCaption = 'Continued table caption';//to translate

?>
