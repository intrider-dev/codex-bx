<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;
use Bitrix\Catalog\ProductTable;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

$this->setFrameMode(true);?>

<?if($arResult){?>

	
	<div class="custom-detail-wrapper">
		<div class="custom-detail-h2 col-12 col-sm-6">
			<?=$arResult['PREVIEW_TEXT']?>
			<a href="#footer" class="custom-detail-button d-sm-block d-none">
				Заказать
			</a>
		</div>
		<div class="custom-detail-picture mt-5 mt-sm-0 col-12 col-sm-6">
			<img src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" <?=$arResult['NAME']?>/>
			<div class="custom-detail-button-wrapper d-flex d-sm-none justify-content-center">
				<a href="#footer" class="custom-detail-button">
					Заказать
				</a>
			</div>
		</div>
		<div class="custom-detail-text">
			<?=$arResult['DETAIL_TEXT']?>
		</div>
	</div>

	<style>
	.custom-detail-picture img {
		width: 100%;
	}
	.custom-detail-text {
		width: 100%;
		text-size-adjust: auto;
		transform-origin: center center;
		line-height: 36px;
		color: #808080;
		font-size: 23px;
		font-family: 'Raleway',Arial,sans-serif;
		line-height: 1.55;
		font-weight: 400;
		background-position: center center;
		border-color: transparent;
		border-style: solid;
	}
	.custom-detail-button-wrapper {
		width: 100%
	}
	.custom-detail-button {
		text-decoration: none;
		padding: 5px 80px;
		width: min-content;
		margin-top: 40px;
		color: #ffffff;
		font-size: 14px;
		font-family: 'Raleway',Arial,sans-serif;
		line-height: 1.55;
		font-weight: 400;
		border-width: 1.3px;
		border-radius: 30px;
		background-color: #333037;
		background-position: center center;
		border-color: #333037;
		border-style: solid;
		transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
	}
	.custom-detail-button:hover {
		background-color: #ffffff;
		background-image: none;
		border-color: #333037;
		color: #333037;
	}
	.custom-detail-picture {
		display: flex;
		justify-content: flex-end;
		flex-direction: column;
		align-items: flex-end;
	}
	.custom-detail-wrapper {
		margin-top: calc(50px + 5vw);
		display: flex;
		padding: calc(1vw + 10px) calc(1vw + 10px);
		flex-wrap: wrap;
	}
	.custom-detail-h2 {
		text-size-adjust: auto;
		transform-origin: center center;
		line-height: 45px;
		font-size: 32px;
		color: #47424e;
		font-family: 'Raleway',Arial,sans-serif;
		line-height: 1.4;
		font-weight: 600;
		letter-spacing: 1.5px;
		background-position: center center;
		border-color: transparent;
		border-style: solid;
	}
	@media (max-width: 639px){
		.custom-detail-h2 {
			text-align: center;
		}
		.custom-detail-picture {
			justify-content: center;
		}
	}
	</style>

<?}?>