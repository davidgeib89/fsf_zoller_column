<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'FREESIXTYFIVE.FsfZollerColumn',
            'Zollercolumn',
            [
                'Column' => 'list'
            ],
            // non-cacheable actions
            [
                'Column' => ''
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        zollercolumn {
                            iconIdentifier = fsf_zoller_column-plugin-zollercolumn
                            title = LLL:EXT:fsf_zoller_column/Resources/Private/Language/locallang_db.xlf:tx_fsf_zoller_column_zollercolumn.name
                            description = LLL:EXT:fsf_zoller_column/Resources/Private/Language/locallang_db.xlf:tx_fsf_zoller_column_zollercolumn.description
                            tt_content_defValues {
                                CType = list
                                list_type = fsfzollercolumn_zollercolumn
                            }
                        }
                    }
                    show = *
                }
           }'
        );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'fsf_zoller_column-plugin-zollercolumn',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:fsf_zoller_column/Resources/Public/Icons/user_plugin_zollercolumn.svg']
			);
		
    }
);
