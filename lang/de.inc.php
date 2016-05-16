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
	
	// Translations by Karsten Spriestersbach

//=====================================================================================================================

//=====================================================================================================================
//  global definitions
//=====================================================================================================================

	$charset			= "ISO-8859-1";
	$clang				= "ge";
	$dir				= "ltr";
	$datefmt 			= "'%d/%m/%Y'";
	// flags are from http://flags.sourceforge.net
	// I can't find a copyrigh to credit
	// but I'm sure somebody has it
	$flag				= "images/de.gif";

//=====================================================================================================================
//=====================================================================================================================
	$currentRequest->setDateFormat($datefmt);

//=====================================================================================================================
// strings for translation
//=====================================================================================================================
    $strAncestors       = "Vorfahren";
    $strDescendants     = "Abk�mlingen";    
    $strLivingPerson    = "Lebende Person";   
    $strDeceasedPerson  = "Gestorbebe Person";  // DE
	$strOnFile			= "Personen in der Datei";
	$strSelect			= "Person ausw�hlen";
	$strUnknown			= "unbekannt";
	$strLoggedIn		= "Sie sind angemeldet als ";
	$strAdmin			= "admin";
	$strLoggedOut		= "Sie sind angemeldet: ";
	$strYes				= "Ja";
	$strNo				= "Nein";
	$strSubmit			= "Absenden";
	$strReset			= "Zur�cksetzen";
	$strLogout			= "Abmelden";
	$strHome			= "Hauptseite";
	$strEdit			= "�ndern";
	$strAdd				= "hinzuf�gen";
	$strDetails			= "Details";
	$strBorn			= "Geboren";
	$strCertified		= "Zertifiziert";
	$strFather			= "Vater";
	$strRestricted		= "<a href=\"restricted.php\">Beschr�nkt</a>";
	$strDied			= "Gestorben";
	$strMother			= "Mutter";
	$strChildren		= "Kinder";
	$strSiblings		= "Geschwister";
	$strMarried			= "Verheirated";
	$strInsert			= "einf�gen";
	$strNewMarriage		= "neue heirat";
	$strNotes			= "Anmerkungen";
	$strGallery			= "Bilder Gallerie";
	$strUpload			= "upload";
	$strNewImage		= "neues Bild";
	$strNoImages		= "Keine Bilder verf�gbar";
	$strCensusDetails	= "Volksz�hlungs-Details";
	$strNewCensus		= "neue Volksz�hlung";
	$strNoInfo			= "Keine Information Verf�gbar";
	$strYear			= "Jahr";
	$strAddress			= "Adresse";
	$strCondition		= "Zustand";
	$strOf				= "of";
	$strAge				= "Alter";
	$strProfession		= "Beruf";
	$strBirthPlace		= "Geburtsort";
	$strDocTrans		= "Document Transcripts";
	$strNewTrans		= "new transcript";
	$strTitle			= "Titel";
	$strDesc			= "Beschreibung";
	$strDate			= "Datum";
	$strRightClick		= "Klicken Sie zum speichern auf den Dokument-Titel. (eventuel m�ssen Sie mit der rechen Maustaste klicken und dann Speichern Unter w�hlen)";
	$strStats			= "Seiten Statistik";
	$strArea			= "Bereich";
	$strNo				= "Nummer";
	$strCensusRecs		= "Census records";
	$strImages			= "Bilder";
	$strLast20			= "Die letzten 20 aktualisierten Personen";
	$strPerson			= "Person";
	$strUpdated			= "Aktualisiert";
	$strEditing			= "Ge�ndert";
	$strName			= "Name";
	$strDOB				= "Geburtsdatum";
	$strDateFmt			= "Bitte benutzen sie das Format JJJJ-MM-TT";
	$strDOD				= "Todestag";
	$strCauseDeath		= "Todesursache";
	$strMarriage		= "Hochzeit";
	$strSpouse			= "Ehepartner";
	$strDOM				= "Hochzeitstag";
	$strMarriagePlace	= "Geheiratet in";
	$strCensus			= "Census";
	$strSchedule 		= "Ablauf";
	$strDragons			= "Here be dragons!";
	$strGender			= "Geschlecht";
	$strMale			= "M�nnlich";
	$strFemale			= "Weiblich";
	$strNewPassword		= "Neues Passwort";
	$strOldPassword		= "Altes Passwort";
	$strReOldPassword	= "Altes Passwort wiederholen";
	$strChange			= "Wechsel";
	$strPwdChange		= "Passwort �ndern";
	$strPwdChangeMsg	= "Bitte benutzen Sie dieses Formular um Ihr Passwort zu �ndern.";
	$strLogin			= "Anmelden";
	$strUsername		= "Benutzername";
	$strPassword		= "Passwort";
	$strRePassword		= "Passwort wiederholen";
	$strForbidden		= "Verboten";
	$strForbiddenMsg	= "Sie haben nicht das n�tige Zugriffsrecht um die angeforderte Seite einzusehen.  Diese Anforderung sollte nicht wiederholt werden.  Bitte klicken Sie <a href=\"index.php\">hier</a> um fortzufahren.";
	$strDelete			= "l�schen";
	$strFUpload			= "Datei Upload";
	$strFTitle			= "Datei Titel";
	$strFDesc			= "Datei Beschreibung";
	$strFDate			= "Datei Datum";
	$strIUpload			= "Bild Upload";
	$strISize			= "JPEG ausschlie�lich (max Gr��e 1MB)";
	$strITitle			= "Bild Titel";
	$strIDesc			= "Bild Beschreibung";
	$strIDate			= "Bild Erstellungsdatum";
	$strOn				= "Ein";
	$strAt				= "um";
	$strAdminFuncs		= "Admin Functions";
	$strAction			= "Aktion";
	$strUserCreate		= "neuen Benutzer erstellen";
	$strCreate			= "Erstellen";
	$strBack			= "Zur�ck";
	$strToHome			= "Zur homepage.";
	$strNewMsg			= "Bitte stellen Sie sicher das die Person nicht schon in der Datenbank existiert!";
	$strIndex			= "Alle Details �ber Menschen die nach dem $currentRequest->dispdate geboren sind, sind im Zugriff beschr�nkt um ihre Identit�t zu sch�tzen. Als registrieter Benutzer sind sie berechtigt die Details einzusehen und zu �ndern.  Jedem ist erlaubt die ungesch�tzten Daten einzusehen. Wenn sie meinen, jemand passt in Ihren Familienstammbaum, so <a href=\"$1\">lassen Sie es mich bitte wissen.</a>";
	$strNote			= "Zur Kenntnis";
	$strFooter			= "Schicken Sie eine Email an den <a href=\"$1\">webmaster</a> falls Probleme auftreten.";
	$strPowered			= "Unterst�tzt durch";
	$strPedigreeOf		= "Familien Hirachie von";
	$strBirths			= "Geburtstage";
	$strAnniversary		= "Jahrestag";
	$strUpcoming		= "Anstehende Jahrestage";
	$strMarriages		= "Hochzeitstage";
	$strDeaths			= "Todestage";
	$strConfirmDelete	= "\"Sind Sie sicher das Sie das \\n'\" + year + \"' \" + Abschnitt +\"l�schen m�chten?\"";
	$strTranscript		= "transcript";
	$strImage			= "Bild";
	$strDoubleDelete	= "\"Sind sie wirklich sicher diese Person l�schen zu wollen?\\nDieser Prozess kann nicht r�ckg�ngig gemacht werden!!\"";
	$strBirthCert		= "Geburtsurkunde?";
	$strDeathCert		= "Sterbeurkunde?";
	$strMarriageCert	= "Heiratsurkunde?";
	$strNewPerson		= "eine neue Person";
	$strPedigree		= "Ahnentafel";
	$strToDetails		= "zu den Details";
	$strSurnameIndex	= "Nachnamenverzeichnis";
	$strTracking		= "Tracking";
	$strTrack			= "track";
	$strThisPerson		= "diese Person";
	$strTrackSpeel		= "Benutzen Sie das untere Formular to track diese Person. Sie werden automatisch eine Email erhalten wenn sich die Daten zu dieser Person �ndern";
	$strEmail			= "Email";
	$strSubscribe		= "eintragen";
	$strUnSubscribe		= "Eintragung l�schen";
	$strMonAccept		= "Ihre Anfrage zur Benachrichtigung wird hiermit best�tigt<br />Sie werden automatisch eine Email erhalten wenn sich die Daten zu dieser Person �ndern.<br />";
	$strMonCease		= "Ihre Anfrage zur Benachrichtigungen zu stoppen wird hiermit best�tigt<br />Sie werden keine Emails mehr erhalten wenn sich die Daten zu dieser Person �ndern.<br />";"You request to cease monitoring has been accepted<br />You will no longer receive any emails.<br />";
	$strMonError		= "Mit Ihrer Anfrage ist ein Problem aufgetreten.<br />Bitte melden Sie sich f�r Hilfe beim administrator dieser WEB Pr�sens";
	$strMonRequest		= "Ihre Beobachtungsanfrage ist bearbeitet worden.<br />Eine Best�tigungs Email ist an Sie gesendet worden. Bitte folgen Sie den Anweisungen in der Email.<br />";
	$strCeaseRequest	= "Ihre Anfrage die Beobachtung zu l�schen wurde bearbeitet.<br />Eine Best�tigungs Email ist an Sie gesendet worden. Bitte folgen Sie den Anweisungen in der Email.<br />";
	$strAlreadyMon		= "Diese Person wird bereits von Ihnen beobachtet.<br />Eine Aktion ist unn�tig.<br />";
	$strNotMon			= "Diese Person wird derzeit nicht von Ihnen beobachtet.<br />Eine Aktion ist unn�tig.<br />";
	$strRandomImage		= "Zuf�lliges Bild";
	$strMailTo			= "Nachricht senden";
	$strSubject			= "Betreff";
	$strNoEmail			= "\"Sie m�ssen eine g�ltige Email Adresse angeben\"";
	$strEmailSent		= "Ihre Email ist an den Webmaster gesendet worden.";
	$strExecute			= "Ausf�hrungszeit";
	$strSeconds			= "sekunden";

//=====================================================================================================================
//  email definitions
//=====================================================================================================================

	$eTrackSubject		= "[phpmyfamily] $1 ist aktualisiert worden";
	$eTrackBodyTop		= "Dies ist eine automatisch generierte Nachricht.  $1 um $2 hat sich ge�ndert.  Klicken Sie unten um die aktualisierten Daten einzusehen\n\n";
	$eTrackBodyBottom	= "Diese Nachricht ist an Sie gesendet worden da Sie sich f�r diesen Service angemeldet haben. Klicken Sie unten wenn Sie den Service abmelden m�chten\n\n";
	$eSubSubject		= "[phpmyfamily] Beobachtungs request";
	$eSubBody			= "Dies ist eine automatisch generierte Nachricht. Sie haben diese Benachrichtigung erhalten weil Sie die Person $1 beobachten wollten.  Um diese Anmeldung zu best�tigen, Klicken Sie bitte den Link (siehe unten) innerhalb der n�chsten 24 Stunden.\n\n";
	$eUnSubBody			= "Dies ist eine automatisch generierte Nachricht. Sie erhalten diese Nachricht weil Sie sich von dem Beobachtungs Service f�r $1 abgemeldet haben. Zur Best�tigung dieser Abmeldung klicken Sie bitte innerhalb der n�chsten 24 Stunden auf den unteren Link.\n\n";

//=====================================================================================================================
//  error definitions
//=====================================================================================================================

	$err_listpeeps		= "Fehler beim Auflisten der Personen in der Datenbank";
	$err_image_insert	= "Fehler beim Einf�gen eines Bildes in die Datenbank";
	$err_list_enums		= "Fehler beim Aufz�hlen von Spaltentypen";
	$err_list_census	= "Fehler beim Auflisten der Volksz�hlungen";
	$err_keywords		= "Fehler beim Empfangen von Namen als Stichworte aus der Datenbank";
	$err_changed		= "Fehler beim Empfangen der Liste, der zuletzt ge�nderten Personendaten";
	$err_father			= "Fehler beim Empfangen der Vater-Details aus der Datenbank";
	$err_mother			= "Fehler beim Empfangen der Mutter-Details aus der Datenbank";
	$err_spouse			= "Fehler beim Empfangen der Ehepartner-Details aus der Datenbank";
	$err_marriage		= "Fehler beim Empfangen der Hochzeits-Details aus der Datenbank";
	$err_census_ret		= "Fehler beim Empfangen der Volksz�hlungs-Details aus der Datenbank";
	$err_children		= "Fehler beim Empfangen der Kinder-Details aus der Datenbank";
	$err_siblings		= "Fehler beim Empfangen der Geschwister-Details aus der Datenbank";
	$err_transcript		= "Fehler beim Einf�gen des Transcripts in die Datenbank";
	$err_trans			= "Fehler beim Empfangen transcripts aus der Datenbank";
	$err_detail			= "Fehler beim Einf�gen der Personen Daten in die Datenbank";
	$err_census			= "Fehler beim Einf�gen der Volksz�hlungsdaten in die Datenbank";
	$err_logon			= "Fehler beim Anmelden";
	$err_change			= "Fehler bei der �berpr�fung der Passwort�nderung";
	$err_pwd_incorrect	= "Fehler - Falsches Passwort eingegeben";
	$err_pwd_match		= "Fehler - die neuen (doppelt) eingegebenen Passworte stimmen nicht �berein.";
	$err_update			= "Fehler beim aktualisieren des neuen Passwortes";
	$err_pwd_success	= "Passwort ist erfolgreich aktualisiert worden";
	$err_image			= "Fehler beim Empfangen eines Bildes aus der Datenbank";
	$err_images			= "Fehler beim Empfangen von Bildern aus der Datenbank";
	$err_person			= "Fehler beim Empfangen von Personendaten aus der Datenbank";
	$err_new_user		= "Fehler beim Einf�gen eines neuen Benutzers in die Datenbank";
	$err_user_exist		= "Fehler - Benutzer existiert bereits";
	$err_pwd			= "Fehler beim Empfangen eines Passwortes aus der Datenbank";
	$err_delete_user	= "Fehler bim l�schen eines Benutzers aus der Datenbank";
	$err_users			= "Fehler beim Empfangen von Benutzerdaten aus der Datenbank";
	$err_census_delete	= "Fehler beim L�schen von Volksz�hlungsdaten aus der Datenbank";
	$err_marriage_delete= "Fehler beim L�schen von Hochzeitsdaten aus der Datenbank";
	$err_trans_delete	= "Fehler beim L�schen eines Transcripts aus der Datenbank";
	$err_person_delete	= "Fehler beim L�schen einer Person aus der Datenbank";
	$err_trans_file		= "Fehler beim L�schen einer Transcript Datei";
	$err_image_file		= "Fehler beim L�schen einer Bild Datei";
	$err_child_update	= "Fehler beim aktualisieren von Kinder updating childrens records";
	$err_person_update	= "Fehler beim aktualisieren von Personendaten";
	$err_marriage_insert= "Fehler beim Einf�gen Hochzeitsdaten in die Datenbank";

	// eof
?>
