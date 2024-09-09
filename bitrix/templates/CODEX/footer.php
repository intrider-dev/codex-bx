


	</main>




	<?
	//Logo part
	$logoSecID = end(Finder::getSec(9, ['ACTIVE' => 'Y', 'CODE' => 'logotip-white'], ['ID']))['ID'];
	$logo = Finder::getElemsProps(9, ['ACTIVE' => 'Y', 'IBLOCK_SECTION_ID' => $logoSecID], [])['ITEMS'][0]['PROPERTIES']['ATTR']['VALUE'];

	//Menu part
	$menuSecID = end(Finder::getSec(9, ['ACTIVE' => 'Y', 'CODE' => 'punkty-menyu-footer'], ['ID']))['ID'];
	$menuElems = Finder::getElemsProps(9, ['ACTIVE' => 'Y', 'IBLOCK_SECTION_ID' => $menuSecID], [])['ITEMS'];
	foreach ($menuElems as $key => $elem) {
		$menuElems[$key]['TYPE'] = 'Element';
	}
	$arMenuLinks = $menuElems;
	$arMenuLinks = Sorter::By($arMenuLinks, 'SORT');
	?>


    <footer>
		<?/* Footer Xl (w < 1200)*/?>
		<div class="footer-container d-none d-xl-flex">
			<div class="menu-container col-4 flex-xl-column">
				<div class="logo-block">
					<a class="" href="https://codex.su/" style="transform-origin: center center;">
						<img src="<?= $logo ?>">
					</a>
				</div>
				<div class="footer-text" style="margin: 20px 0px;">
					<div class="copyright">© codEX Studio — 2023</div>
					<div class="address">188660, Ленинградская область, Всеволожский район, п. Бугры, ул. Английская, д. 6, пом. 32Н</div>
					<div class="author">Design by NRublev</div>
				</div>
			</div>
			<div class="footer-subcontainer col-8">
				<div class="menu-links-block">
					<? foreach ($arMenuLinks as $link) { ?>
						<? if (!empty($link['PROPERTIES']['ATTR']['VALUE'])) {
							$href = 'href="' . $link['PROPERTIES']['ATTR']['VALUE'] . '"';
						} else {
							$href = '';
						} ?>
						<a class="menu-link d-none d-sm-block" <?= $href ?>>
							<?= $link['NAME'] ?>
						</a>
					<? } ?>
				</div>
				<div class="contact-block">
					<div class="contact-subblock">
						<a href="tel:+78007004485" rel="nofollow">+7 (800) 700 44 85</a>
						<a href="mailto:info@codex.su" rel="nofollow" target="_blank">info@codex.su</a>
					</div>
					<div class="contact-subblock">
						<a href="tel:+78122008189" rel="nofollow">+7 (812) 200 81 89</a>
						<a href="mailto:sales@codex.su" rel="nofollow" target="_blank">sales@codex.su</a>
						<div class="contact-block-buttons">
							<a class="footer-button" href="https://t.me/Zar_David" rel="nofollow noopener" target="_blank">
								<img alt="" src="/include/button/tg.svg">
							</a>
							<a class="footer-button" href="https://t.me/Suppert_codEX_bot" rel="nofollow noopener" target="_blank">
								<img alt="" src="/include/button/tg_bot.svg">
							</a>
						</div>
						<a href="/privacy" rel="nofollow">Политика <br>конфиденциальности</a>
					</div>
				</div>
			</div>
		</div>
		<?/* Footer Lg (640 < w < 1200)*/?>
		<div class="footer-container d-none d-sm-block d-xl-none">
			<div class="container-fluid menu-container">
				<div class="logo-block col-5">
					<a class="" href="https://codex.su/" style="transform-origin: center center;">
						<img src="<?= $logo ?>">
					</a>
				</div>
				<div class="menu-links-block col-7" style="display: flex; align-items: center;">
					<? foreach ($arMenuLinks as $link) { ?>
						<? if (!empty($link['PROPERTIES']['ATTR']['VALUE'])) {
							$href = 'href="' . $link['PROPERTIES']['ATTR']['VALUE'] . '"';
						} else {
							$href = '';
						} ?>
						<a class="menu-link d-none d-sm-block" <?= $href ?>>
							<?= $link['NAME'] ?>
						</a>
					<? } ?>
				</div>
			</div>
			<div class="container-fluid col-12" style="height: min-content;display:flex;">
				<div class="footer-text-block col-5" style="display: flex;align-content: flex-end;flex-wrap: wrap;margin-bottom: 10px !important;">
					<div class="footer-text" style="">
						<div class="copyright">© codEX Studio — 2023</div>
						<div class="address">188660, Ленинградская область, Всеволожский район, п. Бугры, ул. Английская, д. 6, пом. 32Н</div>
						<div class="author">Design by NRublev</div>
					</div>
				</div>
				<div class="contact-block col-7" style="display: flex;flex-direction: column;justify-content: flex-end;">
					<div class="contacts-block-links" style="display:flex;justify-content: space-between;">
						<div class="contact-subblock" style="display:flex;flex-direction: column;">
							<a href="tel:+78007004485" rel="nofollow">+7 (800) 700 44 85</a>
							<a href="tel:+78122008189" rel="nofollow">+7 (812) 200 81 89</a>
							<a href="mailto:info@codex.su" rel="nofollow" target="_blank">info@codex.su</a>
							<a href="mailto:sales@codex.su" rel="nofollow" target="_blank">sales@codex.su</a>
						</div>
						<div class="contact-subblock" style="display:flex;flex-direction: column;">
							<div class="contact-block-buttons">
							<a class="footer-button" style="margin-bottom: 20px !important;" href="https://t.me/Zar_David" rel="nofollow noopener" target="_blank">
								<img alt="" src="/include/button/tg.svg">
							</a>
							<a class="footer-button" style="margin-bottom: 20px !important;" href="https://t.me/Suppert_codEX_bot" rel="nofollow noopener" target="_blank">
								<img alt="" src="/include/button/tg_bot.svg">
							</a>
						</div>
						</div>
					</div>
					<div class="policy-link">
						<a href="/privacy" rel="nofollow">Политика конфиденциальности</a>
					</div>
				</div>
			</div>
		</div>
		<?/* Footer Xxs (1 < w < 480)*/?>
		<div class="footer-container d-block d-sm-none">
			<div class="container-fluid menu-container">
                <div class="logo-block">
                        <a class="" href="https://codex.su/" style="transform-origin: center center;">
                            <img src="<?= $logo ?>">
                        </a>
                    </div>
                </div>
				<div class="container-fluid menu-container" style="margin-top: 40px;">
					<? foreach ($arMenuLinks as $link) { ?>
						<? if (!empty($link['PROPERTIES']['ATTR']['VALUE'])) {
							$href = 'href="' . $link['PROPERTIES']['ATTR']['VALUE'] . '"';
						} else {
							$href = '';
						} ?>
						<a class="menu-link" style="margin: 0;" <?= $href ?>>
							<?= $link['NAME'] ?>
						</a>
					<? } ?>
				</div>
				<div class="container-fluid menu-container">
					<div class="contact-subblock" style="display:flex;flex-direction: column;">
						<a href="tel:+78007004485" rel="nofollow">+7 (800) 700 44 85</a>
						<a href="tel:+78122008189" rel="nofollow">+7 (812) 200 81 89</a>
						<a href="mailto:info@codex.su" rel="nofollow" target="_blank">info@codex.su</a>
						<a href="mailto:sales@codex.su" rel="nofollow" target="_blank">sales@codex.su</a>
						<a href="/privacy" rel="nofollow">Политика конфиденциальности</a>
					</div>
				</div>
				<div class="container-fluid menu-container">
					<div class="footer-text">
						<div class="copyright">© codEX Studio — 2023</div>
						<div class="address">188660, Ленинградская область, Всеволожский район, п. Бугры, ул. Английская, д. 6, пом. 32Н</div>
						<div class="author">Design by NRublev</div>
					</div>
				</div>
			</div>
    </footer>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>