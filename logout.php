<?PHP
require_once("./include/membersite_config.php");

if (!$fgmembersite->LogOut())
{
	$fgmembersite->RedirectToURL("login.php");
    exit;
}
?>