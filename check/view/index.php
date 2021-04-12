<?php

require_once $_SERVER["DOCUMENT_ROOT"] . '/bitrix/header.php';

$APPLICATION->IncludeComponent(
    'rest:monitoring.profile.view',
    'main',
    [
        'ID' => $_REQUEST['id'],
    ]
);

require_once $_SERVER["DOCUMENT_ROOT"] . '/bitrix/footer.php';