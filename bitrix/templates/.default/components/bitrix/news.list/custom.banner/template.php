<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="banner" style="">
	<?foreach($arResult['ITEMS'] as $item){?>
	<div class="banner-text-wrapper">
		<h1><?=$item['NAME']?></h1>
		<div class="puslating" style=""></div>
	</div>
	<?}?>
</div>
<style>
@keyframes puls{
	0% {
		opacity: 1;
		animation-timing-function: linear;
	}
	100% {
		opacity: 0;
	}
}
.puslating {
	margin-left: 5px;
    animation: puls 1s infinite linear;
    backface-visibility: hidden;
	width: 4px; 
	height: 49px; 
	background-color: #47424e;
}
.banner h1 {
	color: rgb(71, 66, 78);
	font-size: 53px;
	font-weight: 600;
	margin: 0;
}
.banner {
	height: calc(30vw + 368px);
	width: 100vw; 
	display: flex; 
	justify-content:center; 
	align-items: center;
}
.banner-text-wrapper {
		position: relative;
    text-align: center;
    width: 45%;
    display: flex;
    align-items: flex-end;
}
@media(max-width:1200px){
	.banner-text-wrapper {
		text-align: center;
		width: 68%;
		display: flex;
		align-items: flex-end;
	}
}
</style>
