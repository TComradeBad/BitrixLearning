<?php use Bitrix\Main\Page\Asset; ?>
<!-- Footer -->
<footer class="bg-black small text-center text-white-50">
    <div class="container">
        Copyright &copy; Your Website 2019
    </div>
</footer>
<?php Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/vendor/jquery/jquery.min.js") ?>
<?php Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/vendor/bootstrap/js/bootstrap.bundle.min.js") ?>
<?php Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/vendor/jquery-easing/jquery.easing.min.js") ?>
<?php Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/grayscale.min.js") ?>

</div>
</body>

</html>