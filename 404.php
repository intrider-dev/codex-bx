<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Страница с таким адресом не найдена!");
?>

<div class="error-block">
	<div class="error-wrapper">
		<div class="error-text">
			<div class="error-text-h2">
				Данная <br>
				страница <br>
				не найдена
			</div>
			<div class="">
				<a href="/">
					<img src="/include/button/to_main.svg"/>
				</a>
			</div>
		</div>
	</div>
</div>

<script>
$('.menu-button').remove();
$('a[href="/contacts"]').remove();
</script>

<style>
.error-block {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100vw;
    height: min-content;
    padding: 80px 0px;
}
.error-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 400px;
    min-width: 400px;
    background: url(/include/svg/404.svg);
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
}
@keyframes error {
	0% {
		transform: rotate(0deg);
		animation-timing-function: linear;
	}
	100% {
		transform: rotate(360deg);
	}
}
@keyframes error-reverse {
	0% {
		transform: rotate(360deg);
		animation-timing-function: linear;
	}
	100% {
		transform: rotate(0deg);
	}
}
.error-wrapper {
    animation: error 60s infinite linear;
    backface-visibility: hidden;
}
.error-text {
    display: flex;
    animation: error-reverse 60s infinite linear;
    backface-visibility: hidden;
    justify-content: space-around;
    flex-direction: column;
    align-items: center;
}
.error-text-h2 {
	text-align: center;
	text-size-adjust: auto;
    transform-origin: center center;
    line-height: 46px;
    font-size: 33px;
    color: #47424e;
    font-size: 36px;
    font-family: 'Raleway',Arial,sans-serif;
    line-height: 1.4;
    font-weight: 600;
    letter-spacing: 1.5px;
    background-position: center center;
    border-color: transparent;
    border-style: solid;
	margin-bottom: 20px;
}
</style>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>