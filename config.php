<?
/* *****************************************************
*Emperor's Hammer: Hammer's Fist Site		*
*Written by: FA/OBM/FM Zsinj (aka Scott Lookabill)		*
*File: Config File					*
*******************************************************/
//MySQL Database info
$db_host = "mysql.emperorshammer.org";			//Database Host
$db_name = "emperors_ehmain";		//Database Name
$db_username = "emperors";		//Database Username
$db_password = "3t6UGG*i";		//Database password


$base_path ="/home/emperorshammer/emperorshammer/";
$site_host = "http://www.emperorshammer.org";			//URL to the site ommiting the http:// and the final /

$pwencrypt = "po-o90-ikopcm tq34ui 8thq54g jwriuegh v89pq34 htgoiuewrnvjrieq yf o;lSF JHUIOJSAIOGF UNWD#E TRHLUIDERHGV*USDHFKLSUGF";

//Image Headers Section, Coming soon
$adminrankname="HA Zsinj";
$adminemail="io@emperorshammer.org";
$adminlink = "<a href=\"mailto:$adminemail\">$adminrankname</a>";

$postmaster = "Emperor's Hammer Mailer - DO NOT RESPOND <postmaster@emperorshammer.org>";

include_once("security.class.php");
$SO = new Security(array("host"=>$db_host,"username"=>$db_username,"password"=>$db_password,"name"=>$db_name));
?>
