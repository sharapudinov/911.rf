<?
define("NO_KEEP_STATISTIC", true);
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$url = urldecode($_GET['url']);
$arTag = \Bitrix\Main\Mail\Tracking::parseTag($_GET['tag']);
$arTag['FIELDS']['IP'] = $_SERVER['REMOTE_ADDR'];
$arTag['FIELDS']['URL'] = $url;
\Bitrix\Main\Mail\Tracking::click($arTag);

if ($url)
{
	LocalRedirect($url);
}
else
{
	LocalRedirect('/');
}