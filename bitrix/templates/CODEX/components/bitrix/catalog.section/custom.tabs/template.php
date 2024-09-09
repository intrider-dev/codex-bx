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
 *
 *  _________________________________________________________________________
 * |	Attention!
 * |	The following comments are for system use
 * |	and are required for the component to work correctly in ajax mode:
 * |	<!-- items-container -->
 * |	<!-- pagination-container -->
 * |	<!-- component-end -->
 */

$this->setFrameMode(true);?>

<?if($arResult['ITEMS']){?>
	<div class="container-md tags-block">
		<?$index = 0?>
		<?foreach($arResult['ITEMS'] as $item){?>
			<?if($index == 0){ $tabExtClass = 'first'; }else{ $tabExtClass = ''; }?>
			<div class="tab-item <?=$tabExtClass?>">
				<div class="tag-main-block">
					<div class="tab-header" data-id="<?=$item['ID']?>">
						<?=$item['NAME']?>
						<div class="tab-plus-item">
							<img src="/include/button/plus.svg"/>
						</div>
					</div>
					<div class="tab-text" data-id="<?=$item['ID']?>"><?=$item['PREVIEW_TEXT']?><br><br></div>
				</div>
			</div>
			<?$index++;?>
		<?}?>
	</div>
<?}?>
<script>
$(window).on('load', function(){
	$('.tab-text').each(function(){
		self = $(this);
		self[0].setAttribute('data-height', self[0].offsetHeight + 'px');
		self[0].style.maxHeight = '0px';
	});
	$('.tab-header').on('click', function(e){
		_this = e.target;
		this_id = _this.getAttribute('data-id');
		tab_text = $('.tab-text[data-id="' + this_id + '"]')[0];
		if (_this.classList.contains('open')){
			_this.classList.remove('open'); 
			tab_text.style.maxHeight = '0px';
		} else {
			_this.classList.add('open');
			tab_text.style.maxHeight = tab_text.getAttribute('data-height');
		}
	});
});
</script>

