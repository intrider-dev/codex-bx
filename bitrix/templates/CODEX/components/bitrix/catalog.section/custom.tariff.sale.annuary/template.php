<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
$res = Finder::getElemsProps($arParams['IBLOCK_ID'], ['SECTION_ID' => $arParams['SECTION_ID']]);
$arResult['ITEMS'] = $res['ITEMS'];
?>
<?if($arResult['ITEMS']){?>
	<div class="universal-container">
		<div class="universal-header-h5">БИТРИКС24</div>
		<div class="universal-header-h2">Цены на различые тарифы и их описание</div>
		<div class="universal-tab tariff-tab">
			<div>
				<?=$arResult['DESCRIPTION']?>
			</div>
		</div>
	</div>
	<div class="d-flex flex-row flex-wrap justify-content-center">
		<?foreach($arResult['ITEMS'] as $item){?>
			<div class="universal-container tariff-container tariff-container-sale row justify-content-sm-between">
				<div class="tariff-item tariff-main-item">
					<div class="tariff-name">
						<div>
							<?=$item['NAME']?>
						</div>
					</div>
				</div>
				<div class="tariff-item tariff-price-item col-3">
					<div class="tariff-price">
						<?if(str_contains($item['PROPERTIES']['PRICE']['VALUE'], '/')){?>
							<div class="d-flex">
								<div class="price-font">
									<?=explode('/', $item['PROPERTIES']['PRICE']['VALUE'])[0]?>
								</div>
								<div class="timing-font">
									<?='/'.explode('/', $item['PROPERTIES']['PRICE']['VALUE'])[1]?>
								</div>
							</div>
						<?}else{?>
							<div class="price-font">
								<?=$item['PROPERTIES']['PRICE']['VALUE']?>
							</div>
						<?}?>
					</div>
					<div class="tariff-users">
						<?=$item['PROPERTIES']['USERS']['VALUE']?>
					</div>
				</div>
			</div>
		<?}?>
	</div>
	<style>
		@media (max-width: 1199px){
			.tariff-tab {
				width: 100% !important;
			}
			.tariff-container-sale {
				width: 100%;
				display: grid !important;
				grid-template-columns: 2fr 1fr;
			}
		}
		@media (max-width: 650px){
			.tariff-container-sale {
				grid-template-columns: 1fr;
			}
			.tariff-price-item {
				margin-top: 20px;
			}
			.tariff-main-item {
				padding: 0;
			}
			.tariff-container {
				padding-bottom: calc(1vw + 10px)  !important;
			}
		}
		.tariff-tab {
			margin-top: 40px;
		}
		.tariff-container {
			margin-bottom: 0px;
			margin-top: calc(0.5vw + 10px);
		}
		.timing-font {
			font-weight: 600;
			color: rgb(128, 128, 128);
			transform-origin: center center;
			line-height: 28px;
			font-size: 18px;
			font-family: 'Raleway',Arial,sans-serif;
		}
		.price-font {
			font-weight: 600;
			line-height: 28px;
			color: #000000;
			font-size: 18px;
			font-family: 'Raleway',Arial,sans-serif;
		}
		@media (min-width: 1200px){
			.tariff-price-item {
				padding-left: 30px;
			}
			.tariff-container-sale {
				width: 46%;
			}
			.tariff-container {
				padding: calc(1vw + 10px) calc(1vw + 10px);
				border-width: 1px;
				border-radius: 20px;
				background-color: #ffffff;
				background-position: center center;
				border-color: #cad0ff;
				border-style: solid;
				box-shadow: 2px 0px 12px 2px rgba(189,189,189,0.1);
				padding-bottom: 40px;
			}
		}
		.tariff-button-item {
			align-items: flex-end;
		}
		.tariff-services div {
			color: #808080;
			font-size: 18px;
			font-family: 'Raleway',Arial,sans-serif;
			line-height: 1.55;
			font-weight: 400;
			background-position: center center;
			border-color: transparent;
			border-style: solid;
		}
		.tariff-button {
			text-decoration: none;
			padding: 5px 40px;
			width: min-content;
			margin-top: 10px;
			color: #ffffff;
			font-size: 14px;
			font-family: 'Raleway',Arial,sans-serif;
			line-height: 1.55;
			font-weight: 400;
			border-width: 2px;
			border-radius: 30px;
			background-color: #333037;
			background-position: center center;
			border-color: #333037;
			border-style: solid;
			transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
		}
		.tariff-button:hover {
			background-color: #ffffff;
			background-image: none;
			border-color: #333037;
			color: #333037;
		}
		.tariff-users {
			color: rgb(128, 128, 128);
			transform-origin: center center;
			line-height: 28px;
			font-size: 18px;
			font-family: 'Raleway',Arial,sans-serif;
		}
		.tariff-desc {
			color: #808080;
			font-size: 18px;
			font-family: 'Raleway',Arial,sans-serif;
			line-height: 1.55;
			font-weight: 400;
			background-position: center center;
			border-color: transparent;
			border-style: solid;
		}
		.tariff-item-button-wrapper {
			display: flex;
			align-content: center;
			justify-content: center;
			align-items: center;
		}
		.tariff-item-button-inner {
			font-weight: 400;
			color: #ffffff;
			font-size: 18px;
			font-family: 'Raleway',Arial,sans-serif;
			line-height: 1.55;
			text-decoration: none;
			background-color: #333037;
			background-position: center center;
			transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
		}
		.tariff-item-button {
			font-weight: 400;
			color: #ffffff;
			font-size: 18px;
			font-family: 'Raleway',Arial,sans-serif;
			line-height: 1.55;
			text-decoration: none;
			padding: 10px 45px;
			border-width: 2px;
			border-radius: 30px;
			background-color: #333037;
			background-position: center center;
			border-color: #333037;
			border-style: solid;
			transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
		}
		.tariff-item-button:hover .tariff-item-button-inner {
			color: #333037;
			background-color: #ffffff;
			background-image: none;
			border-color: #333037;
		}
		.tariff-item-button:hover {
			color: #333037;
			background-color: #ffffff;
			background-image: none;
			border-color: #333037;
		}
		.tariff-job-item {
			border: 3px solid transparent;
			color: rgb(128, 128, 128);
			transform-origin: center center;
			line-height: 28px;
			color: #808080;
			font-size: 18px;
			font-family: 'Raleway',Arial,sans-serif;
			line-height: 1.55;
			font-weight: 400;
		}
		.tariff-task-title, .tariff-job-title, .tariff-task-item {
			transform-origin: center center;
			line-height: 28px;
			color: #47424e;
			font-size: 18px;
			font-family: 'Raleway',Arial,sans-serif;
			line-height: 1.55;
			font-weight: 600;
			background-position: center center;
			border-color: transparent;
			border-style: solid;
		}
		.tariff-task-item.plus, .tariff-job-item.plus {
			font-weight: 600;
			color: rgb(184, 151, 239);
		}
		.tariff-price-text {
			color: rgb(128, 128, 128);
			transform-origin: center center;
			line-height: 28px;
			font-size: 18px;
			font-family: 'Raleway',Arial,sans-serif;
		}
		.tariff-price {
		}
		.tariff-price-timing {
			font-weight: 600;
			color: rgb(128, 128, 128);
			font-size: 18px;
			font-family: 'Raleway',Arial,sans-serif;
		}
		.tariff-price-value {
			font-weight: 600;
			color: #000000;
			font-size: 18px;
			font-family: 'Raleway',Arial,sans-serif;
		}
		.zero-price .tariff-price-timing {
			font-size: 26px;
		}
		.zero-price .tariff-price-value {
			font-size: 26px;
		}
		.tariff-volume {
			margin-top: 35px;
			color: #47424e;
			font-size: 26px;
			font-family: 'Raleway',Arial,sans-serif;
			line-height: 1.55;
			font-weight: 400;
			background-position: center center;
			border-color: transparent;
			border-style: solid;
		}
		.tariff-item {
			width: max-content;
			display: flex;
			flex-direction: column;
			justify-content: center;
		}
		.tariff-name {
			width: max-content;
			display: flex;
			padding: calc(0.5vw + 10px) calc(1vw + 10px);
			border-width: 1px;
			border-radius: 150px;
			background-color: #ffffff;
			border-color: #cad0ff;
			border-style: solid;
			color: #262626;
			font-size: 20px;
			font-family: 'Raleway',Arial,sans-serif;
			line-height: 1.55;
			font-weight: 500;
			justify-content: center;
			align-items: center;
		}
		.tariff-container {
			padding: calc(1vw + 10px) calc(1vw + 10px);
			border-width: 1px;
			border-radius: 20px;
			background-color: #ffffff;
			background-position: center center;
			border-color: #cad0ff;
			border-style: solid;
			box-shadow: 2px 0px 12px 2px rgba(189,189,189,0.1);
			padding-bottom: 40px;
		}
	</style>
<?}?>