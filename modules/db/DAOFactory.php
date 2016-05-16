<?php
include_once("modules/db/MyFamilyDAO.php");
include_once "modules/census/CensusDAO.php";
include_once "modules/relations/RelationsDAO.php";
include_once "modules/transcript/TranscriptDAO.php";
include_once "modules/image/ImageDAO.php";
include_once "modules/admin/AdminDAO.php";
include_once "modules/location/LocationDAO.php";
include_once "modules/event/EventDAO.php";
include_once "modules/gedcom/GedcomDAO.php";
include_once "modules/source/SourceDAO.php";
include_once "modules/user/UserDAO.php";
include_once "modules/user/TrackingDAO.php";
include_once "inc/database.inc.php";
include_once "inc/class.phpmailer.php";

//=====================================================================================================================
// Database connection routines
//=====================================================================================================================
// connect to database

if ($usepconnect) {
	$mysql_connect = mysql_pconnect($dbhost, $dbuser, $dbpwd) or die("phpmyfamily cannot access the database server (".$dbhost.")");
} else {
	$mysql_connect = mysql_connect($dbhost, $dbuser, $dbpwd) or die("phpmyfamily cannot access the database server (".$dbhost.")");
}


$database_select = mysql_select_db($dbname) or die("phpmyfamily cannot access the database (".$dbname.")");

$pdo = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8", $dbuser, $dbpwd);// modded by jon 20160516
//$pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND,'SET NAMES UTF8'); // added by jon 20160516
$pdo->exec("set names utf8");
//mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'", $mysql_connect);
//mysql_query("SET NAMES 'utf8'");
//mysql_set_charset('utf8',$mysql_connect);

//Has to be after the database setup as it reads stuff from the db
include_once "classes/Config.php";

function getCensusDAO() {
	return (new CensusDAO());
}

function getPeopleDAO() {
	return (new PeopleDAO());
}

function getRelationsDAO() {
	return (new RelationsDAO());
}

function getTranscriptDAO() {
	return (new TranscriptDAO());
}

function getImageDAO() {
	return (new ImageDAO());
}

function getAdminDAO() {
	return (new AdminDAO());
}

function getLocationDAO() {
	return (new LocationDAO());
}

function getEventDAO() {
	return (new EventDAO());
}

function getGedcomDAO() {
	return (new GedcomDAO());
}

function getSourceDAO() {
	return (new SourceDAO());
}

function getUserDAO() {
	return (new UserDAO());
}

function getTrackingDAO() {
	return (new TrackingDAO());
}

	// function: stamppeeps
	// timestamp a particular person for last updated
	function stamppeeps($person) {
		$dao = getTrackingDAO();
		$dao->stamppeeps($person);

	}	// end of stamppeeps()
	
// function: quote_smart
// Quote a variable to make is smart
function quote_smart($value) {
	global $pdo;
	if (!is_numeric($value)) {
		$ret = $pdo->quote($value);
	} else {
		$ret = $value;
	}
	return ($ret);

}	// end of quote_smart

?>
