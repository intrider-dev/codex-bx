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
	<div class="universal-container">
		<div class="universal-header-h5">БИТРИКС24</div>
		<div class="universal-header-h2">Цены на различые тарифы и их описание</div>
	</div>
	<?foreach($arResult['ITEMS'] as $item){?>
		<div class="universal-container tariff-container row">
			<div class="tariff-item tariff-main-item">
				<div class="tariff-name">
					<div>
						<?=$item['NAME']?>
					</div>
				</div>
				<?if(str_replace(' ', '', explode('₽', $item['PROPERTIES']['PRICE']['VALUE'])[0]) == '0'){?>
					<div class="tariff-price zero-price">
						<span class="tariff-price-value"><?=explode('/', $item['PROPERTIES']['PRICE']['VALUE'])[0]?></span>
						<span class="tariff-price-timing"><?='/' . explode('/', $item['PROPERTIES']['PRICE']['VALUE'])[1]?></span>
					</div>
				<?}else{?>
					<div class="tariff-price">
						<span class="tariff-price-value"><?=explode('/', $item['PROPERTIES']['PRICE']['VALUE'])[0]?></span>
						<span class="tariff-price-timing"><?='/' . explode('/', $item['PROPERTIES']['PRICE']['VALUE'])[1]?></span>
					</div>
					<span class="tariff-price-text">за всех пользователей</span>
				<?}?>
				<div class="tariff-volume">
					<?=$item['PROPERTIES']['VOLUME']['VALUE']?>
				</div>
				<?if(!str_replace(' ', '', explode('₽', $item['PROPERTIES']['PRICE']['VALUE'])[0]) == '0'){?>
					<div class="tariff-users d-none d-sm-flex d-xl-none">
						<?=$item['PROPERTIES']['USERS']['VALUE']['TEXT']?>
					</div>
				<?}?>
				<div class="col-auto tariff-item tariff-item-button-wrapper d-none d-sm-flex d-xl-none">
					<?if(str_replace(' ', '', explode('₽', $item['PROPERTIES']['PRICE']['VALUE'])[0]) == '0'){?>
						<a href="#footer" class="tariff-item-button">
							<div class="tariff-item-button-inner">
								Создать
							</div>
						</a>
					<?}else{?>
						<a href="#footer" class="tariff-item-button">
							<div class="tariff-item-button-inner">
								Купить
							</div>
						</a>	
					<?}?>
				</div>
			</div>
			<div class="tariff-item mt-3 mt-sm-0 tariff-desc-item">
				<div class="tariff-desc">
					<?=$item['PREVIEW_TEXT']?>
				</div>
				<div class="tariff-users mt-3 mt-sm-0 d-flex d-xl-none">
					<?=$item['PROPERTIES']['USERS']['VALUE']['TEXT']?>
				</div>
				<div class="d-flex d-xl-none justify-content-between tariff-jt-columns flex-row-reverse">
					<div class="tariff-job-body">
						<div class="tariff-job-title">
							Совместная работа
						</div>
						<?foreach($item['PROPERTIES']['JOB']['VALUE'] as $jobItem){?>
							<?if(str_contains($jobItem, '+')){?>
								<div class="tariff-job-item plus">
									<?=$jobItem?>
								</div>
							<?}else{?>
								<div class="tariff-job-item">
									<?=$jobItem?>
								</div>
							<?}?>
						<?}?>
					</div>
					<div class="tariff-task-body mt-3 mt-sm-0">
						<div class="tariff-task-title">
							Задачи и Проекты
						</div>
						<?foreach($item['PROPERTIES']['TASKS']['VALUE'] as $taskItem){?>
							<?if(str_contains($taskItem, '+')){?>
								<div class="tariff-task-item plus">
									<?=$taskItem?>
								</div>
							<?}else{?>
								<div class="tariff-task-item">
									<?=$taskItem?>
								</div>
							<?}?>
						<?}?>
					</div>
				</div>
			</div>

			<div class="tariff-item tariff-job d-none d-xl-flex">
				<div class="tariff-job-title">
					Совместная работа
				</div>
				<div class="tariff-job-body">
					<?foreach($item['PROPERTIES']['JOB']['VALUE'] as $jobItem){?>
						<?if(str_contains($jobItem, '+')){?>
							<div class="tariff-job-item plus">
								<?=$jobItem?>
							</div>
						<?}else{?>
							<div class="tariff-job-item">
								<?=$jobItem?>
							</div>
						<?}?>
					<?}?>
				</div>
			</div>

			<div class="col-auto tariff-item tariff-task d-none d-xl-flex">
				<div class="tariff-task-title">
					Задачи и Проекты
				</div>
				<div class="tariff-task-body">
					<?foreach($item['PROPERTIES']['TASKS']['VALUE'] as $taskItem){?>
						<?if(str_contains($taskItem, '+')){?>
							<div class="tariff-task-item plus">
								<?=$taskItem?>
							</div>
						<?}else{?>
							<div class="tariff-task-item">
								<?=$taskItem?>
							</div>
						<?}?>
					<?}?>
				</div>
			</div>

			<div class="col-auto tariff-item tariff-item-button-wrapper d-flex d-sm-none d-xl-flex">
				<?if(str_replace(' ', '', explode('₽', $item['PROPERTIES']['PRICE']['VALUE'])[0]) == '0'){?>
					<a href="#footer" class="tariff-item-button">
						<div class="tariff-item-button-inner">
							Создать
						</div>
					</a>
				<?}else{?>
					<a href="#footer" class="tariff-item-button">
						<div class="tariff-item-button-inner">
							Купить
						</div>
					</a>	
				<?}?>
			</div>

		</div>
	<?}?>
	<style>
		.tariff-main-item {
			width: 20%
		}
		.tariff-desc-item {
			width: 20%
		}
		.tariff-job {
			width: 20%
		}
		.tariff-task {
			width: 20%
		}
		.tariff-item-button-wrapper {
			width: 20%
		}
		.tariff-users {
			color: #47424e;
			font-size: 18px;
			font-family: 'Raleway',Arial,sans-serif;
			line-height: 1.55;
			font-weight: 400;
			background-position: center center;
			border-color: transparent;
			border-style: solid;
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
			margin-top: 35px;
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
			display: flex;	
			flex-direction: column;
		}
		.tariff-name {
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
		@media (max-width: 1199px) {
			.tariff-main-item {
				width: 30%
			}
			.tariff-desc-item {
				width: 70%
			}
			.tariff-job {
				width: 35%
			}
			.tariff-task {
				width: 35%
			}
			.tariff-item-button-wrapper {
				margin-top: 20px;
				flex-wrap: wrap;
				align-content: flex-start;
				width: 100%;
			}
			.tariff-jt-columns {
				margin-top: 20px;
			}
		}
		@media (max-width: 639px) {
			.tariff-main-item {
				width: 100%
			}
			.tariff-desc-item {
				width: 100%
			}
			.tariff-job {
				width: 100%
			}
			.tariff-task {
				width: 100%
			}
			.tariff-item-button-wrapper {
				width: 100%
			}
			.tariff-jt-columns {
    			flex-direction: column !important;
				width: 100%
			}
		}
	</style>
<?}?>
