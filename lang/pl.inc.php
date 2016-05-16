<?php
	//phpmyfamily - opensource genealogy webbuilder
	//Copyright (C) 2002 - 2005  Simon E Booth (simon.booth@giric.com)

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

//=====================================================================================================================

//=====================================================================================================================
//  global definitions
//=====================================================================================================================

	$charset			= "ISO-8859-2";
	$clang				= "pl";
	$dir				= "ltr";
	$datefmt 			= "'%d/%m/%Y'";
	// flags are from http://flags.sourceforge.net
	// I can't find a copyrigh to credit
	// but I'm sure somebody has it
	$flag				= "images/gb.gif";

//=====================================================================================================================
//=====================================================================================================================
	$currentRequest->setDateFormat($datefmt);

//=====================================================================================================================
// strings for translation
//=====================================================================================================================

	$strOnFile			= "os�b w bazie";
	$strSelect			= "Wybierz osob�";
	$strUnknown			= "nieznane";
	$strLoggedIn		= "Jeste zalogowany jako ";
	$strAdmin			= "admin";
	$strLoggedOut		= "Nie jeste� zalogowany";
	$strYes				= "Tak";
	$strNo				= "Nie";
	$strSubmit			= "Wy�lij";
	$strReset			= "Wyczy��";
	$strLogout			= "Wyloguj";
	$strHome			= "pocz�tek";
	$strEdit			= "edytuj";
	$strAdd				= "dodaj";
	$strDetails			= "Szczegu�y";
	$strBorn			= "Urodzony";
	$strCertified		= "Certyfikat";
	$strFather			= "Ojciec";
	$strRestricted		= "Zabezpieczone";
	$strDied			= "Umar�";
	$strMother			= "Matka";
	$strChildren		= "Dzieci";
	$strSiblings		= "Rodze�stwo";
	$strMarried			= "�onaty";
	$strInsert			= "dodaj";
	$strNewMarriage		= "nowe ma��e�stwo";
	$strNotes			= "Uwagi";
	$strGallery			= "Galeria zdj��";
	$strUpload			= "wgraj";
	$strNewImage		= "nowe rysunek";
	$strNoImages		= "Brak rysunk�w dost�pnych";
	$strCensusDetails	= "Szczegu�y spisu ludzi";
	$strNewCensus		= "nowy spis ludzi";
	$strNoInfo			= "Brak informacji dost�pnych";
	$strYear			= "Rok";
	$strAddress			= "Adres";
	$strCondition		= "Stan cywilny";
	$strOf				= "z";
	$strAge				= "Wiek";
	$strProfession		= "Zaw�d";
	$strBirthPlace		= "Miejsce urodzenia";
	$strDocTrans		= "Dokumenty transkryptu";
	$strNewTrans		= "nowy transkrypt";
	$strTitle			= "Tytu�";
	$strDesc			= "Opis";
	$strDate			= "Data";
	$strRightClick		= "Naci�nij na tytu� dokumentu w celu pobrania go. (Mo�liwe, �e b�dzie potrzebne klikni�cie prawym przyciskiem myszki i wybranie 'Zapisz jako..' w programie Internet Explorer)";
	$strStats			= "Statystyka serwisu";
	$strArea			= "Obszar";
	$strNo				= "Numer";
	$strCensusRecs		= "Wpisy w spisie ludzi";
	$strImages			= "Rysunki";
	$strLast20			= "Ostatnie 20 os�b aktualizowane";
	$strPerson			= "Osoba";
	$strUpdated			= "Aktualizowana";
	$strEditing			= "Edytowana";
	$strName			= "Nazwisko";
	$strDOB				= "Data urodzin";
	$strDateFmt			= "Prosz� u�ywa� formatu YYYY-MM-DD";
	$strDOD				= "Data �mierci";
	$strCauseDeath		= "Pow�d �mierci";
	$strMarriage		= "Ma��e�stwo";
	$strSpouse			= "Ma��onek";
	$strDOM				= "Data ma��e�stwa";
	$strMarriagePlace	= "Miejsce o�enku";
	$strCensus			= "Lista os�b";
	$strSchedule 		= "Harmonogram";
	$strDragons			= "Tu b�d� smoki!";
	$strGender			= "P�e�";
	$strMale			= "M�czyzna";
	$strFemale			= "Kobieta";
	$strNewPassword		= "Nowe has�o";
	$strOldPassword		= "Stare has�o";
	$strReOldPassword	= "Wprowad� ponownie stare has�o";
	$strChange			= "Zmiana";
	$strPwdChange		= "Zmiana has�a";
	$strPwdChangeMsg	= "Prosz� u�ywa� tego formularza w celu zmiany has�a.";
	$strLogin			= "login";
	$strUsername		= "U�ytkownik";
	$strPassword		= "Has�o";
	$strRePassword		= "Wprowad� ponownie has�o";
	$strForbidden		= "Zabroniony";
	$strForbiddenMsg	= "Nie masz uprawnie� do strona, kt�r� chcesz ogl�da�.  Prosz� nie poprawia� tego ��dania.  Prosz� klikn�� <a href=\"index.php\">tutaj</a> w celu kontynuacji.";
	$strDelete			= "usu�";
	$strFUpload			= "Plik do wgrania na serwer";
	$strFTitle			= "Tytu� pliku";
	$strFDesc			= "Opis pliku";
	$strFDate			= "Data pliku";
	$strIUpload			= "Rysunek do wgrania";
	$strISize			= "tylko JPEG (maksymalna wielko�� to 1MB)";
	$strITitle			= "Tytu� rysunku";
	$strIDesc			= "Opis rysunku";
	$strIDate			= "Data rysunku";
	$strOn				= "po";
	$strAt				= "w";
	$strAdminFuncs		= "Funkcje administratorskie";
	$strAction			= "akcja";
	$strUserCreate		= "Dodaj nowego u�ytkownika";
	$strCreate			= "Doaj";
	$strBack			= "Wstecz";
	$strToHome			= "do strony domowej.";
	$strNewMsg			= "Prosz� sprawdzi� czy ta osoba ju� nie istnieje w bazie danych przed jej dodaniem!";
	$strIndex			= "Wszystkie szczeg�y dla ludzi urodzonych po $currentRequest->dispdate s� zabezpieczone przed ich identyfikacj�.  Je�eli jeste� zarejestrowanym u�ytkownikiem b�dziesz m�g� zobaczy� te dane i edytowa� wpis.  Ka�dy mo�e przegl�da� odbezpieczone dane.  Je�eli ktokolwiek pasuje do Twojego drzewa rodzinnego, prosz� <a href=\"$1\">daj mi zna�</a>";
	$strNote			= "Uwaga";
	$strFooter			= "Wy�lij list do <a href=\"$1\">webmastera</a> w razie jakichkolwiek problem�w.";
	$strPowered			= "Wspierane przez";
	$strPedigreeOf		= "Genealogia dla";
	$strBirths			= "Urodziny";
	$strAnniversary		= "Rocznice";
	$strUpcoming		= "Nadchodz�ce rocznice";
	$strMarriages		= "Ma��e�stwa";
	$strDeaths			= "�mierci";
	$strConfirmDelete	= "\"Czy jeste� pewien, �e chcesz usun�� sekcj� \\n'\" + year + \"' ?\"";
	$strTranscript		= "transkrypcja";
	$strImage			= "rysunek";
	$strDoubleDelete	= "\"Czu napewno chcesz USUN�� t� osob� \\nTen proces jest NIEODWRACALNY!!\"";
	$strBirthCert		= "Certyfikat urodzin?";
	$strDeathCert		= "Certyfikat �mierci?";
	$strMarriageCert	= "Certyfikat ma��e�stwa?";
	$strNewPerson		= "now� osob�";
	$strPedigree		= "genealogia";
	$strToDetails		= "szczeg�y";
	$strSurnameIndex	= "Indeks nazwisk";
	$strTracking		= "�ledzenie";
	$strTrack			= "�led�";
	$strThisPerson		= "t� osob�";
	$strTrackSpeel		= "U�yj tego formularza w celu �ledzenia tej osoby.  Automatycznie otrzymasz email ka�dorazowao gdy ten wpis zostanie zmieniony";
	$strEmail			= "Email";
	$strSubscribe		= "zapisz";
	$strUnSubscribe		= "wypisz";
	$strMonAccept		= "Twoje ��danie monitorowanie zosta�o zaakceptowane<br />B�dziesz teraz otrzymywa� listy email ka�dorazowo gdy wpis tej osoby zostanie zmieniony.<br />";
	$strMonCease		= "Twoje ��danie zaprzestania monitorowania zosta�o zaakceptowane<br />Nie b�dziesz otrzymywa� wi�cej list�w email.<br />";
	$strMonError		= "Wyst�pi� b��d podczas rozpatrywania Twojego ��dania.<br />Prosimy o kontakt z administratorem serwisu w celu uzyskania pomocy";
	$strMonRequest		= "Twoje ��danie monitorowania osoby jest przetwarzane.<br />List email potwierdzaj�cy zosta� wys�any na Tw�j adres email, powiniene� post�powa� zgodnie z instrukcjami zawartymi w li�cie.<br />";
	$strCeaseRequest	= "Twoje ��danie zaprzestania monitorowania tej osoby jest przetwarzane.<br />List email potwierdzaj�cy zosta� wys�any na Tw�j adres email, powiniene� post�powa� zgodnie z instrukcjami zawartymi w li�cie.<br />";
	$strAlreadyMon		= "Ju� monitorujesz t� osob�.<br />Nie jest wymagana �adna akcja.<br />";
	$strNotMon			= "Nie monitorujesz tej osoby.<br />Nie jest wymagana �adna akcja.<br />";
	$strRandomImage		= "Losowy rysunek";
	$strMailTo			= "Wy�lij wiadomo��";
	$strSubject			= "Tytu�";
	$strNoEmail			= "\"Musisz poda� adres email\"";
	$strEmailSent		= "Tw�ja wiadomo�� zosta�a wys�ana do administratora.";
	$strExecute			= "Czas wykonywania";
	$strSeconds			= "sekund";
	$strStyle			= "Styl";
	$strPreferences		= "ustawienia";
	$strRecoverPwd		= "odzyskaj has�o";
	$strStop			= "przerwij";
	$strRememberMe		= "Zapami�taj mnie";
	$strSuffix			= "Przyrostek";
	$strLost			= "Zagubi�e� has�o";
	$strSent			= "Nowe has�o zosta�o wys�ane";
	$strMyLoggedIn		= "Zalogowany do phpmyfamily";
	$strAdminUser		= "Jeste� <a href=\"admin.php\">administratorem</a>";
	$strMonitoring		= "Osoby, kt�re monitorujesz";
	$strChangeStyle		= "Zmie� styl serwisu";
	$strChangeEmail		= "Zmie� adres email";
	$strGedCom			= "gedcom";

//=====================================================================================================================
//  email definitions
//=====================================================================================================================

	$eTrackSubject		= "[phpmyfamily] $1 zosta�o zaktualizowane";
	$eTrackBodyTop		= "To jest automatyczna wiadomo��.  $1 dnia $2 zosta�o zmienione przez $3.  Kliknij poni�ej by sprawdzi� zmienione wpis\n\n";
	$eTrackBodyBottom	= "Ta wiadomo�� zosta�a wys�ana poniewa� uprzednio zapisa�e� si� do �ledzenia zmian wpisu dla tej osoby.  Naci�nij poni�szy odno�nik w celu usuni�cia si� z tego monitorowania\n\n";
	$eSubSubject		= "[phpmyfamily] ��danie monitorowania";
	$eSubBody			= "To jest automatyczna wiadomo��.  Otrzymujesz t� wiadomo�� poniewa� wybra�e� monitorowanie wpis�w dla osoby $1.  W celu potwierdzenia monitorowania prosz� klikn�� poni�szy odno�nik w ci�gu najbli�szych 24 godzin.\n\n";
	$eUnSubBody			= "To jest automatyczna wiadomo��.  Otrzymujesz t� wiadomo�� poniewa� wybra�e� anulowanie monitorowania wpis�w dla osoby $1.  W celu potwierdzenia anulowania monitorowania prosz� klikn�� poni�szy odno�nik w ci�gu najbli�szych 24 godzin.\n\n";
	$eBBSubject			= "[phpmyfamily] Wielki brat zauwa�y� zmien� w $1";
	$eBBBottom			= "Ta wiadomo�� zosta�a wys�ana poniewa� instalacja phpmyfamily posiada w��czonego Wielkiego brata.  Prosz� sprawdzi� plik konfiguracyjny je�eli chcesz wy��czy� t� opcj�.\n\n";
	$ePwdSubject		= "[phpmyfamily] Nowe has�o";
	$ePwdBody		= "Kto�, najprawdopodobniej Ty, za��da� nowe has�o dla phpmyfamily.  Twoje has�o to $1 \n\n";

//=====================================================================================================================
//  error definitions
//=====================================================================================================================

	$err_listpeeps		= "B��d podczas listowania ludzi z bazy danych";
	$err_image_insert	= "B��d dodawania rysunku do bazy danych";
	$err_list_enums		= "B��d enumeracji typ�w kolmn";
	$err_list_census	= "B��d listowania dost�pnych spis�w os�b";
	$err_keywords		= "B��d pobierania nazwisk dla s��w kluczy z bazy danych";
	$err_changed		= "B��d pobierania listy ostatnio zmienianych wpis�w os�b";
	$err_father			= "B��d pobierania inforamcji o ojcu z bazy danych";
	$err_mother			= "B��d pobierania inforamcji o matce z bazy danych";
	$err_spouse			= "B��d pobierania inforamcji o ma��onku z bazy danych";
	$err_marriage		= "B��d pobierania inforamcji o ma��e�stwie z bazy danych";
	$err_census_ret		= "B��d pobierania inforamcji o spisie os�b z bazy danych";
	$err_children		= "B��d pobierania inforamcji o dzieciach z bazy danych";
	$err_siblings		= "B��d pobierania inforamcji o rodze�stwie z bazy danych";
	$err_transcript		= "B��d dodawnia transkryptu do bazy danych";
	$err_trans			= "B��d pobierania inforamcji o transkrypcie z bazy danych";
	$err_detail			= "B��d dodawnia informacji o osobie do bazy danych";
	$err_census			= "B��d dodawnia spisu os�b do bazy danych";
	$err_logon			= "B��d logowania";
	$err_change			= "B��d sprawdzania zmiany has�a";
	$err_pwd_incorrect	= "B��d - podano niepoprawne has�o";
	$err_pwd_match		= "B��d - nowe has�a nie zgadzaj� si�";
	$err_update			= "B��d aktualizacji has�a";
	$err_pwd_success	= "Has�o porawnie zmieniono";
	$err_image			= "B��d pobierania rysunku z bazy danych";
	$err_images			= "B��d pobierania rysunk�w z bazy danych";
	$err_person			= "B��d pobierania osoby z bazy danych";
	$err_new_user		= "B��d dodawania nowej osoby do bazy danych";
	$err_user_exist		= "B��d - osoba ju� istnieje";
	$err_pwd			= "B��d pobierania has�a z bazy danych";
	$err_delete_user	= "B��d usuwania osoby z bazy danych";
	$err_users			= "B��d pobierania os�b z bazy danych";
	$err_census_delete	= "B��d usuwania spisu os�b z bazy danych";
	$err_marriage_delete= "B��d usuwania ma��e�stwa z bazy danych";
	$err_trans_delete	= "B��d usuwania transkryptu z bazy danych";
	$err_person_delete	= "B��d usuwania osoby z bazy danych";
	$err_trans_file		= "B��d usuwania pliku transkryptu";
	$err_image_file		= "B��d usuwania pliku rysunku";
	$err_child_update	= "B��d aktualizacji wpis�w dla dzieci";
	$err_person_update	= "B��d aktualizacji informacji o osobie";
	$err_marriage_insert= "B��d dodawania ma��e�stwa do bazy danych";

	// eof
?>
