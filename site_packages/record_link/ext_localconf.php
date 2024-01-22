<?php

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
    '@import \'EXT:record_link/Configuration/TypoScript/setup.typoscript'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '@import \'EXT:record_link/Configuration/TsConfig/Tcemain.tsconfig'
);
