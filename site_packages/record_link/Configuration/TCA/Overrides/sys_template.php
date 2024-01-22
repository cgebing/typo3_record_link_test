<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addStaticFile(
    'record_link',
    'Configuration/TypoScript',
    'Record Link Redirect Test'
);
