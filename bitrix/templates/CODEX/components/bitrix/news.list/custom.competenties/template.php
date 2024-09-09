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
?>
<?if($arResult['ITEMS']){?>
	<div class="competencies-container">
		<div class="competencies-header-h5">
			ТЕХНОЛОГИИ
		</div>
		<div class="competencies-header-h2">
			Наши компетенции
		</div>
		<div class="competencies-wrapper row">
			<?foreach($arResult['ITEMS'] as $item){?>
				<div class="col-4 competencies-item">
					<?=$item['NAME']?>
				</div>
			<?}?>
			<div href="#" class="col-12 col-md-4 competition-button-wrapper d-flex justify-content-center justify-content-md-start">
				<a href="#" class="competition-button">
					Собрать команду<img src="/include/button/zayavka.svg"/>
				</a>
			</div>
		</div>
	</div>
<?}?>
