<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<div class="row card-wrapper">
	<? foreach ($arResult["ITEMS"] as $arItem) { ?>
		<div class="card-container col-12 col-sm-6 col-md-4 col-lg-4">
			<div class="card col-12">
				<div class="card-body">
					<h2 class="card-title"><?=$arItem['NAME']?></h2>
					<p class="card-text"><?=$arItem['PREVIEW_TEXT']?></p>
				</div>
			</div>
		</div>
	<? } ?>
</div>
<div class="container-fluid d-flex justify-content-center my-5 card-button-wrapper">
	<a class="card-button" href="/contacts" rel="nofollow" target="_blank">
		Заказать разработку<img alt="" src="/include/button/zayavka.svg">
	</a>
</div>
<style>
.card-button {
    transition: all 0.3s;
    font-weight: 100 !important;
    font-size: 18px;
    width: 250px;
    display: flex;
    text-decoration: none;
    color: #fff;
    border: 2px solid #333037 !important;
    border-radius: 50px;
    box-sizing: border-box;
    background-color: #333037;
    padding: 5px 20px;
    align-items: center;
    justify-content: space-between;
}
.card-button:hover img{
    transition: all 0.3s;
}
.card-button:hover img{
	filter: invert(1) brightness(1.5);
}
.card-button:hover {
	color: #333037;
	background-color: #ffffff;
}
.card-wrapper {
	width: 100vw;
}
.card-button-wrapper {
    margin-bottom: calc(50px + 3vw) !important;
}
</style>
<script>
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
