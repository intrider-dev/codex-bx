<? require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php'); ?>
<? $APPLICATION->ShowHead() ?>
<? $APPLICATION->ShowPanel() ?>
<!doctype html>
<html lang="en">

<head>
	<?$favSecID = end(Finder::getSec(9, ['ACTIVE' => 'Y', 'CODE' => 'osnovnoe'], ['ID']))['ID'];
	$favElem = end(Finder::getElemsProps(9, ['ACTIVE' => 'Y', 'IBLOCK_SECTION_ID' => $buttonSecID], [])['ITEMS']);
	$favicon = $favElem['PROPERTIES']['ATTR']['VALUE'];?>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--metatextblock-->
    <meta name="description"
        content=" Codex - надежный партнер для управления проектами, задачами, документами и коммуникациями. Управляйте своим бизнесом эффективно и легко с помощью Codex.">
    <meta property="og:url" content="https://codex.su">
    <meta property="og:title" content="IT-аутстаффинг для бизнеса, внедрение Битрикс24 по всей России | Codex">
    <meta property="og:description"
        content=" Codex - надежный партнер для управления проектами, задачами, документами и коммуникациями. Управляйте своим бизнесом эффективно и легко с помощью Codex.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://static.tildacdn.com/tild3139-3832-4661-b237-623164656231/Thumbnail.svg">
    <!--/metatextblock-->
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-dns-prefetch-control" content="on">
	<link rel="icon" href="<?=$favicon?>" type="image/x-icon" />
	<link rel="shortcut icon" href="<?=$favicon?>" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?=$favicon?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?=$favicon?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?=$favicon?>">
    <link rel="apple-touch-startup-image" href="<?=$favicon?>">
    <meta name="msapplication-TileColor" content="#f5f5f5">
    <meta name="msapplication-TileImage"
        content="https://static.tildacdn.com/tild6361-3963-4162-a164-386438366334/Favicon.png">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="/local/css/bootstrap.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/local/css/custom.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="/local/js/custom.js"></script>

<script>
        (function () {
            var widget = document.createElement('script');
            widget.dataset.pfId = '3a6e5bcc-0a54-423d-978c-67dac67113c3';
            widget.src =
                'https://widget.profeat.team/script/widget.js?id=3a6e5bcc-0a54-423d-978c-67dac67113c3&now=' + Date
                .now();
            document.head.appendChild(widget);
        })()
    </script>
    <script type="text/javascript">
        window.dataLayer = window.dataLayer || [];
    </script><!-- Google Tag Manager -->
    <script type="text/javascript">
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MMV6BSR');
    </script><!-- End Google Tag Manager -->
    <script type="text/javascript">
        (function () {
            if ((/bot|google|yandex|baidu|bing|msn|duckduckbot|teoma|slurp|crawler|spider|robot|crawling|facebook/i
                    .test(navigator.userAgent)) === false && typeof (sessionStorage) != 'undefined' &&
                sessionStorage.getItem('visited') !== 'y' && document.visibilityState) {
                var style = document.createElement('style');
                style.type = 'text/css';
                style.innerHTML =
                    '@media screen and (min-width: 980px) {.t-records {opacity: 0;}.t-records_animated {-webkit-transition: opacity ease-in-out .2s;-moz-transition: opacity ease-in-out .2s;-o-transition: opacity ease-in-out .2s;transition: opacity ease-in-out .2s;}.t-records.t-records_visible {opacity: 1;}}';
                document.getElementsByTagName('head')[0].appendChild(style);

                function t_setvisRecs() {
                    var alr = document.querySelectorAll('.t-records');
                    Array.prototype.forEach.call(alr, function (el) {
                        el.classList.add("t-records_animated");
                    });
                    setTimeout(function () {
                        Array.prototype.forEach.call(alr, function (el) {
                            el.classList.add("t-records_visible");
                        });
                        sessionStorage.setItem("visited", "y");
                    }, 400);
                }
                document.addEventListener('DOMContentLoaded', t_setvisRecs);
            }
        })();
    </script>

</head>

<body>


    <header>

        <!-- As a heading -->
        <?
        //Logo part
        $logoSecID = end(Finder::getSec(9, ['ACTIVE' => 'Y', 'CODE' => 'logotip'], ['ID']))['ID'];
        $logo = Finder::getElemsProps(9, ['ACTIVE' => 'Y', 'IBLOCK_SECTION_ID' => $logoSecID], [])['ITEMS'][0]['PROPERTIES']['ATTR']['VALUE'];

        //Menu part
        $menuSecID = end(Finder::getSec(9, ['ACTIVE' => 'Y', 'CODE' => 'punkty-menyu'], ['ID']))['ID'];
        $menuElems = Finder::getElemsProps(9, ['ACTIVE' => 'Y', 'IBLOCK_SECTION_ID' => $menuSecID], [])['ITEMS'];
        foreach ($menuElems as $key => $elem) {
            $menuElems[$key]['TYPE'] = 'Element';
        }
        $menuSecs = Finder::getSec(9, ['ACTIVE' => 'Y', 'SECTION_ID' => $menuSecID], ['NAME', 'SORT', 'IBLOCK_SECTION_ID', 'ID']);
        foreach ($menuSecs as $key => $sec) {
            $menuSecs[$key]['TYPE'] = 'Section';
            $secElems = Finder::getElemsProps(9, ['ACTIVE' => 'Y', 'IBLOCK_SECTION_ID' => $sec['ID']], []);
            $menuSecs[$key] = array_merge($menuSecs[$key], $secElems);
        }
        $arMenuLinks = array_merge($menuElems, $menuSecs);
        $arMenuLinks = Sorter::By($arMenuLinks, 'SORT');

        //Button part
        $buttonSecID = end(Finder::getSec(9, ['ACTIVE' => 'Y', 'CODE' => 'knopka'], ['ID']))['ID'];
        $buttonElem = Finder::getElemsProps(9, ['ACTIVE' => 'Y', 'IBLOCK_SECTION_ID' => $buttonSecID], [])['ITEMS'];
        ?>
        <div class="nav-container">
            <nav class="navbar bg-light">
                <div class="container-fluid menu-container position-absolute">
                    <div class="logo-block">
                        <a class="" href="/" style="transform-origin: center center;">
                            <img src="<?= $logo ?>">
                        </a>
                    </div>
                    <div class="menu-links-block">
                        <? foreach ($arMenuLinks as $link) { ?>
                            <? if (!empty($link['PROPERTIES']['ATTR']['VALUE'])) {
                                $href = 'href="' . $link['PROPERTIES']['ATTR']['VALUE'] . '"';
                            } else {
                                $href = '';
                            } ?>
							<?if($link['TYPE'] == 'Element'){?>
								<a class="menu-link d-none d-sm-block" <?= $href ?>>
									<?= $link['NAME'] ?>
								</a>
							<?}?>
							<?if($link['TYPE'] == 'Section'){?>
								<div class="dropdown-wrapper">
									<a class="menu-link d-none d-sm-block" <?= $href ?>>
										<?= $link['NAME'] ?>
									</a>
									<div class="dropdown-menu">
										<?foreach($link['ITEMS'] as $sublink){?>
											<a href="<?=$sublink['PROPERTIES']['ATTR']['VALUE']?>"><?=$sublink['NAME']?></a>
										<?}?>
									</div>
								</div>
							<?}?>
                        <? } ?>
                        <? foreach ($buttonElem as $elem) { ?>
                            <a class="menu-link menu-button" href="#footer">
                                Заявка<img src="<?= $elem['PROPERTIES']['ATTR']['VALUE'] ?>">
                            </a>
                        <? } ?>
                    </div>
                </div>
            </nav>
            <div class="menu-links-block-mobile d-flex d-sm-none">
                <? foreach ($arMenuLinks as $link) { ?>
                    <? if (!empty($link['PROPERTIES']['ATTR']['VALUE'])) {
                        $href = 'href="' . $link['PROPERTIES']['ATTR']['VALUE'] . '"';
                    } else {
                        $href = '';
                    } ?>
					<?if($link['TYPE'] == 'Element'){?>
						<a class="menu-link" <?= $href ?>>
							<?= $link['NAME'] ?>
						</a>
					<?}?>
					<?if($link['TYPE'] == 'Section'){?>
						<div class="dropdown-wrapper">
							<a class="menu-link" <?= $href ?>>
								<?= $link['NAME'] ?>
							</a>
							<div class="dropdown-menu">
								<?foreach($link['ITEMS'] as $sublink){?>
									<a href="<?=$sublink['PROPERTIES']['ATTR']['VALUE']?>"><?=$sublink['NAME']?></a>
								<?}?>
							</div>
						</div>
					<?}?>
                <? } ?>
            </div>
        </div>
    </header>
	<style>
	.menu-button {
    	transition: all 0.3s;
		transition: 0.3s;
		font-weight: 100 !important;
		font-size: 18px;
		width: 130px;
		display: flex;
		text-decoration: none;
		color: #fff;
		border: 3px solid #333037 !important;
		border-radius: 50px;
		box-sizing: border-box;
		background-color: #333037;
		padding: 10px 20px;
		align-items: center;
		justify-content: space-between;
	}
	.menu-button:hover img{
		transition: all 0.3s;
	}
	.menu-button:hover img{
		filter: invert(1) brightness(1.5);
	}
	.menu-button:hover {
		color: #333037;
		background-color: #ffffff;
	}
	</style>


    <main>


		