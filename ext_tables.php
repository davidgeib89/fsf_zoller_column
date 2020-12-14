<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'FREESIXTYFIVE.FsfZollerColumn',
            'Zollercolumn',
            'Zoller Column'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('fsf_zoller_column', 'Configuration/TypoScript', 'Zoller Column');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_fsfzollercolumn_domain_model_column', 'EXT:fsf_zoller_column/Resources/Private/Language/locallang_csh_tx_fsfzollercolumn_domain_model_column.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_fsfzollercolumn_domain_model_column');

    }
);
