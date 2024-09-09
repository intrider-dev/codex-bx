<?php
class Finder
{
    public static function getElems($id, $arFilterExt = [], $arSelect = [], $type = ''){
		if(CModule::IncludeModule('iblock')){
			$arFilter = ['IBLOCK_ID' => $id,];
		
			$arFilter = array_merge($arFilter, $arFilterExt);
		
			$res = CIBlockElement::GetList (
			  ["SORT" => "ASC"],
			  $arFilter,
			  false,
			  false,
			  $arSelect
			);
		
			while($el = $res->GetNext())
			{
				foreach($el as $key => $elem)	{
					$el[$key] = str_replace("\r\n", "", $el[$key]);
					if(empty($elem)){
						$el[$key] = '';
					}
				}
				//Выводится или последний найденный элемент или все
				if($type == 'last'){
					$Elements = $el;
				}else{
					$Elements[] = $el;
				}
			}
			return $Elements;
		}
	}
	public static function getElemsProps($id, $arFilterExt = [], $arSelect = [], $type = ''){
		if(CModule::IncludeModule('iblock')){
			$arFilter = ['IBLOCK_ID' => $id,];
		
			$arFilter = array_merge($arFilter, $arFilterExt);
		
			$res = CIBlockElement::GetList (
			  ["ID" => "ASC"],
			  $arFilter,
			  false,
			  false,
			  $arSelect
			);
		
			while($obElement = $res->GetNextElement())
			{
				$el = $obElement->GetFields();
				$el["PROPERTIES"] = $obElement->GetProperties();
					$els["ITEMS"][] = $el;
			}
			return $els;
		}
	}
	public static function getSec($id, $arFilterExt = [], $arSelect = [], $type = ''){
		if(CModule::IncludeModule('iblock')){
			$arFilter = ['IBLOCK_ID' => $id,];
		
			$arFilter = array_merge($arFilter, $arFilterExt);
		
			$res = CIBlockSection::GetList (
			  ["SORT" => "ASC"],
			  $arFilter,
			  false,
			  $arSelect,
			  false
			);
		
			while($el = $res->GetNext())
			{
				foreach($el as $key => $elem)	{
					$el[$key] = str_replace("\r\n", "", $el[$key]);
					if(empty($elem)){
						$el[$key] = '';
					}
				}
				//Выводится или последний найденный элемент или все
				if($type == 'last'){
					$Elements = $el;
				}else{
					$Elements[] = $el;
				}
			}
			return $Elements;
		}
	}

}
?>
