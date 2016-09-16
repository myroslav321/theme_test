<?php
defined('TYPO3_MODE') or die();

call_user_func(function() {

    // Shorter paths to localization files
    $contentElementFilePrefix = 'LLL:EXT:theme_test/Resources/Private/Language/ContentElements.xlf:';
    $contentElementLanguageFilePrefix = 'LLL:EXT:theme_test/Resources/Private/Language/ContentElements.xlf:';
    $t3kitElementLanguageFilePrefix = 'LLL:EXT:theme_t3kit/Resources/Private/Language/ContentElements.xlf:';
    $frontendLanguageFilePrefix = 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:';
    $cmsLanguageFilePrefix = 'LLL:EXT:cms/locallang_ttc.xlf:';




    // "iconTextColor"

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
       'tt_content',
       'CType',
       [
           $contentElementLanguageFilePrefix. 'iconTextColor.title',
           'iconTextColor',
           'content-elements-iconTextColor'
       ],
       'contacts',
       'after'
   );

   $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['iconTextColor'] = 'content-elements-iconTextColor';

    // "imageHeaderLink"
   \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
      'tt_content',
      'CType',
      [
          $contentElementLanguageFilePrefix . 'imageHeaderLink.title',
          'imageHeaderLink',
          'content-elements-imageHeaderLink'
      ],
      'iconTextColor',
      'after'
  );

  $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['imageHeaderLink'] = 'content-elements-imageHeaderLink';

    //
    // Types
    // "iconTextColor"
    $GLOBALS['TCA']['tt_content']['types']['iconTextColor'] = [
        'showitem' => '
                --palette--;' . $frontendLanguageFilePrefix . 'palette.general;general,
                header;' . $contentElementFilePrefix . 'iconTextColor.header_label,
                --linebreak--,bodytext;' . $contentElementFilePrefix . 'iconTextColor.bodytext,
                --linebreak--,subheader;' . $contentElementFilePrefix . 'iconTextColor.linkText,
                --linebreak--,header_link;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel,
                --linebreak--,pi_flexform;' . $contentElementFilePrefix . 'iconTextColor.flexform.sheetGeneral,
            --div--;' . $frontendLanguageFilePrefix . 'tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;' . $frontendLanguageFilePrefix . 'palette.appearanceLinks;appearanceLinks,
            --div--;' . $frontendLanguageFilePrefix . 'tabs.access,
                hidden;' . $frontendLanguageFilePrefix . 'field.default.hidden,
                --palette--;' . $frontendLanguageFilePrefix . 'palette.access;access,
            --div--;' . $frontendLanguageFilePrefix . 'tabs.extended
        '
      ];


// "imageHeaderLink"
    $GLOBALS['TCA']['tt_content']['types']['imageHeaderLink'] = [
      'showitem' => '
            --palette--;' . $frontendLanguageFilePrefix . 'palette.general;general,
            header;' . $contentElementFilePrefix . 'imageHeaderLink.header_label,
            --linebreak--,bodytext;' . $contentElementFilePrefix . 'imageHeaderLink.bodytext,
            --linebreak--,subheader;' . $contentElementFilePrefix . 'imageHeaderLink.linkText,
            --linebreak--,header_link;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel,
            --linebreak--,pi_flexform;' . $contentElementFilePrefix . 'imageHeaderLink.flexform.sheetGeneral,
        --div--;' . $frontendLanguageFilePrefix . 'tabs.appearance,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
            --palette--;' . $frontendLanguageFilePrefix . 'palette.appearanceLinks;appearanceLinks,
        --div--;' . $frontendLanguageFilePrefix . 'tabs.access,
            hidden;' . $frontendLanguageFilePrefix . 'field.default.hidden,
            --palette--;' . $frontendLanguageFilePrefix . 'palette.access;access,
        --div--;' . $frontendLanguageFilePrefix . 'tabs.extended
        '
      ];
    //
    // Flexforms
    //

    // "iconTextColor"
    $GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds']['*,iconTextColor'] = 'FILE:EXT:theme_test/Configuration/FlexForms/flexform_iconTextColor.xml';

    // "imageHeaderLink"
    $GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds']['*,imageHeaderLink'] = 'FILE:EXT:theme_test/Configuration/FlexForms/flexform_imageHeaderLink.xml';


});
