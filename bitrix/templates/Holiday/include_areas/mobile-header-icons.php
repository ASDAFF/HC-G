
<?
$page = $APPLICATION->GetCurPage();
$page_a = explode("/",$page);
//echo $page_a[1];
?>
<?
switch ($page_a[1]) {
    case "kora":
        echo "<div class='mobile_logo'><a href='/'><img src='".$APPLICATION->GetTemplatePath('')."img/logo_kopa.svg' alt=''></a></div>";
    break;
    case "planeta-holiday":
        echo "<div class='mobile_logo'><a href='/'><img src='".$APPLICATION->GetTemplatePath('')."img/logo_planet.svg' alt=''></a></div>";
    break;
    case "holiday-super":
        echo "<div class='mobile_logo'><a href='/'><img src='".$APPLICATION->GetTemplatePath('')."img/logo_super.svg' alt=''></a></div>";
    break;
    case "sibiriada":
        echo "<div class='mobile_logo'><a href='/'><img src='".$APPLICATION->GetTemplatePath('')."img/logo_sibiriada.svg' alt=''></a></div>";
    break;
    default:
    echo "<div class='mobile_logo'><a href='/'><img src='".$APPLICATION->GetTemplatePath('')."img/logo_mobile.svg' alt=''></a></div>";
                        }

?>
