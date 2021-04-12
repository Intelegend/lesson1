<?php

require_once $_SERVER["DOCUMENT_ROOT"] . '/bitrix/header.php';
$APPLICATION->IncludeComponent(
    'rest:monitoring.profile.manager',
    '',
    [
        'PARAM' => '1',
    ]
);

require_once $_SERVER["DOCUMENT_ROOT"] . '/bitrix/footer.php';
