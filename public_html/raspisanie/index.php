<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("TITLE", "Расписание");
$APPLICATION->SetTitle("Расписание");
?>
<main class="pt-5">
	<section>
		<div class="container">
			<div id="mobifitness_main_cont" style="width:100%; max-width:1200px;"></div>
			<script type="text/javascript">
				(function() {
					f = function() {
						var script = document.createElement('script');
						script.type = 'text/javascript';
						script.async = true;
						script.setAttribute('id', 'mobifitness_widget_script');
						script.setAttribute('data-id', '594321');
						script.setAttribute('data-colored', 1);
						script.setAttribute('data-lines', 1);
						script.setAttribute('data-desc', 1);
						script.setAttribute('data-language', 'ru');
						script.setAttribute('data-category_filter', 2);
						script.setAttribute('data-activity_filter', 2);
						script.setAttribute('data-render_type', 0);
						script.setAttribute('data-club', '655');
						script.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//mobifitness.ru/js/widget/widget.js';
						document.getElementsByTagName('head')[0].appendChild(script);
					}
					if (window.opera == '[object Opera]') {
						document.addEventListener('DOMContentLoaded', f, false);
					} else {
						f();
					}
				})();
			</script>
		</div>
	</section>
</main>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>