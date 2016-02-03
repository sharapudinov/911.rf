<?include($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");


$aMenuLinks =$APPLICATION->IncludeComponent("bitrix:menu.sections","",Array(
		"IS_SEF" => "Y",
		"SEF_BASE_URL" => "/services/",
		"SECTION_PAGE_URL" => "#SECTION_CODE#/",
		"DETAIL_PAGE_URL" => "#SECTION_CODE#/#ELEMENT_CODE#/",
		"IBLOCK_TYPE" => "services",
		"IBLOCK_ID" => "3",
		"DEPTH_LEVEL" => "1",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600"
	)
);
?>