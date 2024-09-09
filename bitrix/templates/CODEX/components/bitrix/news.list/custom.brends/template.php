<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<?$arr = Finder::getElemsProps(12)['ITEMS'];
foreach($arr as $key => $item){
	$arr[$key]['PROPERTIES']['SVG']['VALUE'] = CFile::GetPath($arr[$key]['PROPERTIES']['SVG']['VALUE']);
};
$arResult["ITEMS"] = $arr;?>
<div class="row card-wrapper-brend">
	<div class="card-brend-header-h5">ПАРТНЁРЫ</div>
	<div class="card-brend-header-h2">С нами работают</div>
	<? foreach ($arResult["ITEMS"] as $arItem) { ?>
		<div class="col-12 col-sm-6 col-md-4 col-lg-4">
			<div class="card-brend-wrapper col-12">
				<div class="card-body card-brend">
					<div class="card-brend-filter brend-filter-<?=$arItem['ID']?>"></div>
					<a href="<?=$arItem['PROPERTIES']['LINK']['VALUE']?>">
						<?echo file_get_contents($_SERVER['DOCUMENT_ROOT'].$arItem['PROPERTIES']['SVG']['VALUE'])?>
					</a>
					<style>
						.brend-filter-<?=$arItem['ID']?> {
							clip-path: url(<?=$arItem['PROPERTIES']['SVG']['VALUE']?>);
						}
					</style>
				</div>
			</div>
		</div>
	<? } ?>
</div>
<style>
.card-wrapper-brend {
	width: 100vw;
    padding: calc(0.5vw + 5px) calc(0.5vw + 5px);
    justify-content: center;
}
.card-brend-header-h5 {
    color: #808080;
    font-size: 16px;
    font-family: 'Raleway',Arial,sans-serif;
    line-height: 1.55;
    font-weight: 400;
    background-position: center center;
    border-color: transparent;
    border-style: solid;
}
.card-brend-header-h2 {
		letter-spacing: .2rem;
		margin-bottom: 20px;
    color: #47424e;
    font-size: 44px;
    font-family: 'Raleway',Arial,sans-serif;
    line-height: 1.55;
    font-weight: 600;
    background-position: center center;
    border-color: transparent;
    border-style: solid;
}
.card-brend-wrapper {
	height: 100%;
    padding: calc(1vw + 10px) calc(1vw + 10px);
    border-radius: 20px;
    background-color: #0000 !important;
    background-position: center center;
    border-color: transparent;
    border-style: solid;
    box-shadow: 0px 0px 0px 0px !important;
}
.brend-clippath {
	display: none;
}
.card-brend svg {
    width: 100%;
    z-index: 0;
    filter: saturate(0.0);
    transition: all 0.5s;
}
.card-brend svg:hover {
    filter: saturate(1.0);
}
.card-brend-filter {
    pointer-events: none;
    z-index: 19;
    background: #f5f5f5ab;
    position: absolute;
    width: 100%;
    height: 100%;
    transition: all 0.5s;
}

.card-brend {
	position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
}
.card-button{
	transition: all 0.3s;
}
</style>
<script>
$(document).on('mouseover', '.card-brend svg', function(e){
     $($(this)[0].parentElement).prev()[0].setAttribute('style', 'background: #0000');
});
$(document).on('mouseout', '.card-brend svg', function(e){
     $($(this)[0].parentElement).prev()[0].setAttribute('style', 'background: #f5f5f5ab');
});
function AdaptiveCard(){
	max_height = 0;
	$('.card-container').each(function(){
		self = $(this);
		self[0].setAttribute('style', ' ');
	});
	$('.card-container').each(function(){
		self = $(this);
		if(max_height < self[0].offsetHeight){
			max_height = self[0].offsetHeight;
		}
	});
	$('.card-container').each(function(){
		self = $(this);
		self[0].setAttribute('style', 'min-height:' + max_height + 'px;');
	});
};
$(window).on('load', function(){
	$(window).on('resize', function(){
		AdaptiveCard();
	});
	AdaptiveCard();
});
</script>
