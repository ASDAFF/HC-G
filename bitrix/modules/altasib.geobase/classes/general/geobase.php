<?
/**
 * Company developer: ALTASIB
 * Developer: adumnov
 * Site: http://www.altasib.ru
 * E-mail: dev@altasib.ru
 * @copyright (c) 2006-2016 ALTASIB
 */

IncludeModuleLangFile(__FILE__);

Class CAltasibGeoBaseTools extends CAltasibGeoBase
{
	const MID = "altasib.geobase";

	function CompareArr($a, $b)
	{
		$regName = $GLOBALS['RegionName'];

		if($a['REGION'] == $regName && $b['REGION'] != $regName)
		{
			return -1;
		}
		elseif($a['REGION'] != $regName && $b['REGION'] == $regName)
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}

	function GetCodeKladrByAddr()
	{
		if(IsModuleInstalled("altasib.kladr") && CModule::IncludeModule("altasib.kladr"))
		{
			$arGeo = CAltasibGeoBase::GetAddres();
			if($arGeo)
			{
				$reg = $arGeo["REGION_NAME"];
				$findme = GetMessage("ALTASIB_GEOBASE_RESPUBLIC");
				$pos = strpos($reg, $findme);
				if($pos !== FALSE)
					$reg = substr($reg, $pos+10).' '.$findme;

				$rsRegs = CAltasibKladrRegions::GetList(array("FULL_NAME" => $reg),array());
				if($arReg = $rsRegs->Fetch())
				{
					$arInfo["REGION"] = array(
						"CODE" => $arReg["CODE"],
						"NAME" => $arReg["NAME"],
						"FULL_NAME" => $arReg["FULL_NAME"],
						"SOCR" => $arReg["SOCR"]
					);
					$rsRegs = CAltasibKladrCities::GetList(array(
						"FULL_NAME" => trim(htmlspecialcharsEx($reg))
					),array());
					if($arArea = $rsRegs->Fetch())
					{
						$arInfo["DISTRICT"] = array(
							"CODE" => $arArea["CODE"],
							"NAME" => $arArea["NAME"],
							"SOCR" => $arArea["SOCR"]
						);
						$rsCity = CAltasibKladrCities::GetList(array(
							"NAME" => trim(htmlspecialcharsEx($arGeo["CITY_NAME"]))
						),array());
						if($arCity = $rsCity->Fetch())
						{
							$arInfo["CITY"] = array(
								"ID" => $arCity["ID"],
								"NAME" => $arCity["NAME"],
								"SOCR" => $arCity["SOCR"],
								"POSTINDEX" => $arCity["POSTINDEX"],
								"ID_DISTRICT" => $arCity["ID_DISTRICT"]
							);
							$arInfo["CODE"] = $arCity["CODE"];
						}
					}
				}
			}
			return $arInfo;
		}
		else
			return false;
	}

	function AddScriptYourCityOnSite()
	{
		global $APPLICATION;

		if(COption::GetOptionString(self::MID, 'your_city_enable', 'Y') != 'Y')
			return false;

		if(!CAltasibGeoBase::GetTemplate(COption::GetOptionString(self::MID, "template")))
			return false;

		if(!CAltasibGeoBase::CheckSite(COption::GetOptionString(self::MID, "sites")))
			return false;

		if(isset($_SESSION["ALTASIB_GEOBASE_CODE"]))
			return false;

		if(COption::GetOptionString(self::MID, "set_cookie", "Y") == "Y")
		{
			$strData = $APPLICATION->get_cookie("ALTASIB_GEOBASE_CODE");
			if(!empty($strData))
				return false;
		}

		if(ADMIN_SECTION !== true)
		{
			$jQEn = COption::GetOptionString(self::MID, "enable_jquery", "ON");
			if($jQEn == "ON")
				CJSCore::Init(array('jquery'));
			elseif($jQEn == "2")
				CJSCore::Init(array('jquery2'));
		}

		$TemplYC = explode(",", COption::GetOptionString(self::MID, "your_city_templates"));
		$TemplSC = explode(",", COption::GetOptionString(self::MID, "select_city_templates"));

		$sCName = 'altasib:geobase.your.city';

		if(isset($TemplYC))
			CAltasibGeoBase::GetTemplateProps($sCName, $TemplYC[0], $TemplYC[1]);

		$sCNameSC = 'altasib:geobase.select.city';

		if(isset($TemplSC))
			CAltasibGeoBase::GetTemplateProps($sCNameSC, $TemplSC[0], $TemplSC[1]);
	}

	function CheckUpdateSessionData()
	{
		global $APPLICATION;

		if(COption::GetOptionString(self::MID, 'autodetect_onhit_enable', 'N') != 'Y')
			return false;

		if(isset($_SESSION["ALTASIB_GEOBASE"]))
			return false;

		if(COption::GetOptionString(self::MID, "set_cookie", "Y") == "Y")
		{
			$strData = $APPLICATION->get_cookie("ALTASIB_GEOBASE");
			if(!empty($strData))
				return false;
		}

		$arRes = CAltasibGeoBase::GetAddres();
		return $arRes;
	}

	function CheckForRedirect()
	{
		global $APPLICATION;

		if(COption::GetOptionString(self::MID, "redirect_onhit_enable", "N") == "Y")
		{
			$strData = $APPLICATION->get_cookie("ALTASIB_GEOBASE_RDR");
			if(empty($strData) || $strData != "Y")
			{
				$curPage = $APPLICATION->GetCurPage();
				$strURL = CAltasibGeoBase::GetRedirectUri($curPage);
				if(!empty($strURL))
				{
					$strTime = COption::GetOptionString(self::MID, "redirect_time", "86400");
					if($strTime == "session")
					{
						$APPLICATION->set_cookie("ALTASIB_GEOBASE_RDR", "Y", '0');
					}
					elseif(!empty($strTime) && $strTime != "N")
					{
						$APPLICATION->set_cookie("ALTASIB_GEOBASE_RDR", "Y", time() + intval($strTime)); // 60*60*24
					}

					if(!empty($strURL) && "http://".$_SERVER['SERVER_NAME'].$curPage != $strURL
						&& "http://".$_SERVER['SERVER_NAME'] != $strURL && $curPage != $strURL)
					{
						LocalRedirect($strURL, true);
						die();
					}
				}
			}
			else
				return false;
		}
	}
}
