<?php
	//phpmyfamily - opensource genealogy webbuilder
	//Copyright (C) 2002 - 2004  Simon E Booth (simon.booth@giric.com)

	//This program is free software; you can redistribute it and/or
	//modify it under the terms of the GNU General Public License
	//as published by the Free Software Foundation; either version 2
	//of the License, or (at your option) any later version.

	//This program is distributed in the hope that it will be useful,
	//but WITHOUT ANY WARRANTY; without even the implied warranty of
	//MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	//GNU General Public License for more details.

	//You should have received a copy of the GNU General Public License
	//along with this program; if not, write to the Free Software
	//Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.

	//Czech translation by Jan Zalud <jan.zalud@gmail.com> 

//=====================================================================================================================

//=====================================================================================================================
//  global definitions
//=====================================================================================================================

	$charset			= "windows-1250"; //"ISO-8859-2";
	$clang				= "cz";
	$dir				= "ltr";
	$datefmt 			= "'%d.%m.%Y'";
	// flags are from http://flags.sourceforge.net
	// I can't find a copyright to credit
	// but I'm sure somebody has it
	$flag				= "images/cz.gif";

//=====================================================================================================================
//=====================================================================================================================
	$currentRequest->setDateFormat($datefmt);

//=====================================================================================================================
// strings for translation
//=====================================================================================================================

	$strOnFile			= "osob v datab�zi";
	$strSelect			= "Vybrat osobu";
	$strUnknown			= "nezn�m�";
	$strLoggedIn			= "Jste p�ihl�en/a jako ";
	$strAdmin			= "administr�tor";
	$strLoggedOut			= "Nejste p�ihl�en/a";
	$strYes				= "Ano";
	$strNo				= "Ne";
	$strSubmit			= "Odeslat";
	$strReset			= "Pr�zdn� formul��";
	$strLogout			= "odhl�sit";
	$strHome			= "dom�";
	$strEdit			= "editovat";
	$strAdd				= "p�idat";
	$strDetails			= "Detaily";
	$strBorn			= "Narozen/a";
	$strCertified			= "Potvrzeno";
	$strFather			= "Otec";
	$strRestricted			= "Omezen�";
	$strDied			= "Zem�el/a";
	$strMother			= "Matka";
	$strChildren			= "D�ti";
	$strSiblings			= "Sourozenci";
	$strMarried			= "Svatba";
	$strInsert			= "p�idat";
	$strNewMarriage			= "novou svatbu";
	$strNotes			= "Pozn�mky";
	$strGallery			= "Galerie obr�zk�";
	$strUpload			= "nahr�t";
	$strNewImage			= "nov� obr�zek";
	$strNoImages			= "��dn� dostupn� obr�zky";
	$strCensusDetails		= "Detaily ze s��t�n� lidu";
	$strNewCensus			= "nov� z�znam ze s��t�n� lidu";
	$strNoInfo			= "��dn� dostupn� informace";
	$strYear			= "Rok";
	$strAddress			= "Adresa";
	$strCondition			= "Podm�nka";
	$strOf				= "";
	$strAge				= "V�k";
	$strProfession			= "Profese";
	$strBirthPlace			= "M�sto narozen�";
	$strDocTrans			= "Dokumenty";
	$strNewTrans			= "nov� dokument";
	$strTitle			= "N�zev";
	$strDesc			= "Popis";
	$strDate			= "Datum";
	$strRightClick			= "Dokument m��ete zobrazit kliknut�m na jeho n�zev.";
	$strStats			= "Statistiky serveru";
	$strArea			= "Kategorie";
	$strNo				= "Po�et";
	$strCensusRecs			= "Z�znamy ze s��t�n� lidu";
	$strImages			= "Obr�zky";
	$strLast20			= "Posledn�ch 20 upraven�ch z�znam�";
	$strPerson			= "Osoba";
	$strUpdated			= "Upraveno";
	$strEditing			= "�pravy";
	$strName			= "Jm�no";
	$strDOB				= "Datum narozen�";
	$strDateFmt			= "Form�t RRRR-MM-DD";
	$strDOD				= "Datum �mrt�";
	$strCauseDeath			= "D�vod �mrt�";
	$strMarriage			= "Svatba";
	$strSpouse			= "Man�el/ka";
	$strDOM				= "Datum svatby";
	$strMarriagePlace		= "M�sto svatby";
	$strCensus			= "S��t�n� lidu";
	$strSchedule 			= "Seznam";
	$strDragons			= "HIC SUNT LEONES";
	$strGender			= "Pohlav�";
	$strMale			= "Mu�";
	$strFemale			= "�ena";
	$strNewPassword			= "Nov� heslo";
	$strOldPassword			= "P�vodn� heslo";
	$strReOldPassword		= "Znovu vlo�te p�vodn� heslo";
	$strChange			= "Zm�nit";
	$strPwdChange			= "Zm�na hesla";
	$strPwdChangeMsg		= "Pro zm�nu hesla pou�ijte tento formul��.";
	$strLogin			= "p�ihl�en�";
	$strUsername			= "U�ivatelsk� jm�no";
	$strPassword			= "Heslo";
	$strRePassword			= "Znovu vlo�te heslo";
	$strForbidden			= "P��stup zam�tnut";
	$strForbiddenMsg		= "Pro zobrazen� t�to str�nky nem�te dostate�n� opr�vn�n�. Pokra�ujte <a href=\"index.php\">zde</a>.";
	$strDelete			= "odstranit";
	$strFUpload			= "Soubor k nahr�n�";
	$strFTitle			= "N�zev souboru";
	$strFDesc			= "Popis souboru";
	$strFDate			= "Datum souboru";
	$strIUpload			= "Obr�zek k nahr�n�";
	$strISize			= "pouze JPEG (max. velikost 1MB)";
	$strITitle			= "N�zev obr�zku";
	$strIDesc			= "Popis obr�zku";
	$strIDate			= "Datum obr�zku";
	$strOn				= "dne";
	$strAt				= "";
	$strAdminFuncs			= "Administrace";
	$strAction			= "akce";
	$strUserCreate			= "Vytvo�it nov�ho u�ivatele";
	$strCreate			= "Vytvo�it";
	$strBack			= "Zp�t";
	$strToHome			= "na �vodn� str�nku.";
	$strNewMsg			= "P�ed vlo�en�m nov�ho z�znamu o osob� se ujist�te, zda ji� datab�zi neexistuje!";
	$strIndex			= "P��stup k �daj�m o osob�ch narozen�ch p�ed datem $currentRequest->dispdate je z d�vodu ochrany osobn�ch dat omezen.  Prohl�en� ostatn�ch z�znam� nen� u�ivatel�m omezeno.  Pokud se domn�v�te, �e n�kdo ze zde ulo�en�ho seznamu osob pat�� i Va�eho rodinn�ho stromu, <a href=\"$1\">napi�te mi</a>.";
	$strNote			= "Pozn�mka";
	$strFooter			= "V p��pad� probl�m� po�lete e-mail na <a href=\"$1\">webmaster</a>.";
	$strPowered			= "Vytvo�eno za pou�it� technologie ";
	$strPedigreeOf			= "Rodokmen";
	$strBirths			= "Narozeniny";
	$strAnniversary			= "V�ro��";
	$strUpcoming			= "Nadch�zej�c� v�ro��";
	$strMarriages			= "Svatby";
	$strDeaths			= "�mrt�";
	$strConfirmDelete		= "\"Jste si skute�n� jist/a, �e chcete ODSTRANIT\\n'\" + year + \"' \" + section +\"?\"";
	$strTranscript			= "dokument";
	$strImage			= "obr�zek";
	$strDoubleDelete	= "\"Jste si skute�n� jist/a, �e chcete ODSTRANIT z�znam o t�to osob�?\\nSmaz�n� je nevratn�!!\"";
	$strBirthCert		= "Narozen� potvrzeno?";
	$strDeathCert		= "�mrt� potvrzeno?";
	$strMarriageCert	= "Svatba potvrzena?";
	$strNewPerson		= "novou osobu";
	$strPedigree		= "rodokmen";
	$strToDetails		= "na detaily";
	$strSurnameIndex	= "Seznam p��jmen�";
	$strTracking		= "Monitorov�n�";
	$strTrack		= "log";
	$strThisPerson		= "tato osoba";
	$strTrackSpeel		= "Pou�ijte n�e uveden� formul�� pro monitorov�n� z�znamu o t�to osob�.  Po ka�d� zm�n� z�znamu V�m bude odesl�n e-mail.";
	$strEmail		= "E-mail";
	$strSubscribe		= "p�ihl�sit";
	$strUnSubscribe		= "odhl�sit";
	$strMonAccept		= "V� po�adavek na monitorov�n� byl p�ijat.<br />Od tohoto okam�iku V�m bude odesl�n e-mail poka�d�, kdy� bude z�znam o dan� osob� zm�n�n.<br />";
	$strMonCease		= "V� po�adavek na ukon�en� monitorov�n� byl p�ijat.<br />Dal�� e-maily V�m ji� nebudou zas�l�ny.<br />";
	$strMonError		= "Vyskytl se probl�m s Va��m po�adavkem na monitorov�n�.<br />Pro vy�e�en� probl�mu kontaktujte, pros�m, administr�tora.";
	$strMonRequest		= "V� po�adavek na monitorov�n� se zpracov�v�.<br />Na Va�i adresu byl odesl�n potvrzovac� e-mail s dal��mi instrukcemi.<br />";
	$strCeaseRequest	= "V� po�adavek na ukon�en� monitorov�n� se zpracov�v�.<br />Na Va�i adresu byl odesl�n potvrzovac� e-mail s dal��mi instrukcemi.<br />";
	$strAlreadyMon		= "Tato osoba je ji� monitorov�na.<br />Nen� t�eba dal��ho nastavov�n�.<br />";
	$strNotMon		= "Tato osoba nen� monitorov�na.<br />Nen� t�eba dal��ho nastavov�n�.<br />";
	$strRandomImage		= "N�hodn� obr�zek";
	$strMailTo		= "Poslat zpr�vu";
	$strSubject		= "P�edm�t";
	$strNoEmail		= "\"Mus�te vyplnit e-mailovou adresu\"";
	$strEmailSent		= "V� e-mail byl odesl�n administr�torovi.";
	$strExecute		= "Sestaven� str�nky trvalo";
	$strSeconds		= "sekund";
	$strStyle		= "Styl";
	$strPreferences		= "nastaven�";
	$strRecoverPwd		= "zapomenut� heslo";
	$strStop		= "stop";
	$strRememberMe		= "Pamatovat si";
	$strSuffix		= "Suffix";
	$strLost		= "Zapomenut� heslo";
	$strSent		= "Nov� heslo bylo odesl�no";
	$strMyLoggedIn		= "P�ihl�en/a do phpmyfamily";
	$strAdminUser		= "Jste <a href=\"admin.php\">administr�tor</a>";
	$strMonitoring		= "Osoby, kter� monitorujete";
	$strChangeStyle		= "Zm�na stylu";
	$strChangeEmail		= "Zm�na e-mailu";
	$strGedCom		= "gedcom";

//=====================================================================================================================
//  email definitions
//=====================================================================================================================

	$eTrackSubject		= "[phpmyfamily] $1 - z�znam byl zm�n�n";
	$eTrackBodyTop		= "Toto je automaticky generovan� zpr�va.  Z�znam o $1 v $2 byl zm�n�n u�ivatelem $3.  Pro zobrazen� zm�n�n�ho z�znamu klikn�te na odkaz\n\n";
	$eTrackBodyBottom	= "Tato zpr�va V�m byla odesl�na, proto�e jste si nastavil monitorov�n� z�znamu o dan� osob�.  Pro ukon�en� monitorov�n� klikn�te na odkaz\n\n";
	$eSubSubject		= "[phpmyfamily] po�adavek na monitorov�n�";
	$eSubBody		= "Toto je automaticky generovan� zpr�va.  Tato zpr�va V�m byla odesl�na, proto�e jste si nastavil monitorov�n� z�znamu o osob� $1.  Po�adavek potvr�te b�hem 24 hodin kliknut�m na odkaz\n\n";
	$eUnSubBody		= "Toto je automaticky generovan� zpr�va.  Tato zpr�va V�m byla odesl�na, proto�e jste ukon�il monitorov�n� z�znamu o osob�. $1.  Po�adavek na ukon�en� potvr�te b�hem 24 hodin kliknut�m na odkaz\n\n";
	$eBBSubject		= "[phpmyfamily] Big Brother zaznamenal zm�nu v z�znamu $1";
	$eBBBottom		= "Tato zpr�va V�m byla odesl�na, proto�e instalace phpmyfamily m� zapnut� Big Brother.  Pro vypnut� je t�eba z�sah do souboru config.php.\n\n";
	$ePwdSubject		= "[phpmyfamily] Nov� heslo";
	$ePwdBody		= "N�kdo, pravd�podobn� Vy, po��dal o vytvo�en� nov�ho p��stupov�ho hesla pro phpmyfamily.  Va�e nov� heslo je $1 \n\n";

//=====================================================================================================================
//  error definitions
//=====================================================================================================================

	$err_listpeeps		= "Error listing people in database";
	$err_image_insert	= "Error inserting image into database";
	$err_list_enums		= "Error enumerating types on column";
	$err_list_census	= "Error listing available censuses";
	$err_keywords		= "Error retrieving names for keywords from database";
	$err_changed		= "Error retrieving list of last changed people";
	$err_father		= "Error retrieving father's details from database";
	$err_mother		= "Error retrieving mother's details from database";
	$err_spouse		= "Error retrieving spouse's details from database";
	$err_marriage		= "Error retrieving marriage details from database";
	$err_census_ret		= "Error retrieving census details from database";
	$err_children		= "Error retrieving childrens details from database";
	$err_siblings		= "Error retrieving sibling details from database";
	$err_transcript		= "Error inserting transcript into database";
	$err_trans		= "Error retrieving transcripts from database";
	$err_detail		= "Error inserting person details into database";
	$err_census		= "Error inserting census into database";
	$err_logon		= "Error logging on";
	$err_change		= "Error checking password change";
	$err_pwd_incorrect	= "Error - Incorrect password supplied";
	$err_pwd_match		= "Error - New passwords do not match";
	$err_update		= "Error updating new password";
	$err_pwd_success	= "Password successfully updated";
	$err_image		= "Error retrieving image from database";
	$err_images		= "Error retrieving images from database";
	$err_person		= "Error retrieving person from database";
	$err_new_user		= "Error inserting new user into database";
	$err_user_exist		= "Error - user already exists";
	$err_pwd		= "Error retrieving password from database";
	$err_delete_user	= "Error deleting user from database";
	$err_users		= "Error retrieving users from database";
	$err_census_delete	= "Error deleting census from database";
	$err_marriage_delete	= "Error deleting marriage from database";
	$err_trans_delete	= "Error deleting transcript from database";
	$err_person_delete	= "Error deleting person from database";
	$err_trans_file		= "Error deleting transcript file";
	$err_image_file		= "Error deleting image file";
	$err_child_update	= "Error updating childrens records";
	$err_person_update	= "Error updating person details";
	$err_marriage_insert	= "Error inserting marriage into database";

	// eof
?>
