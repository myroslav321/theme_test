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

  // "iconIHeader"
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
      'tt_content',
      'CType',
      [
          $contentElementLanguageFilePrefix . 'iconHeader.title',
          'iconHeader',
          'content-elements-iconHeader'
      ],
      'imageHeaderLink',
      'after'
  );

  $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['iconHeader'] = 'content-elements-iconHeader';

  // "imageTextSection"
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
      'tt_content',
      'CType',
      [
          $contentElementLanguageFilePrefix . 'imageTextSection.title',
          'imageTextSection',
          'content-elements-imageTextSection'
      ],
      'iconHeader',
      'after'
  );
  $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['imageTextSection'] = 'content-elements-imageTextSection';





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
            --linebreak--,textFirst;' . $contentElementFilePrefix . 'imageHeaderLink.textFirst,
            --linebreak--,subheader;' . $contentElementFilePrefix . 'imageHeaderLink.linkText,
            --linebreak--,header_link;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel,
            --linebreak--,pi_flexform;' . $contentElementFilePrefix . 'imageHeaderLink.flexform.sheetGeneral,
        --div--;' . $frontendLanguageFilePrefix . 'tabs.images,image,
        --div--;' . $frontendLanguageFilePrefix . 'tabs.appearance,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
            --palette--;' . $t3kitElementLanguageFilePrefix . 'tt_content.palette.imageSize;imageSize,
            --palette--;' . $frontendLanguageFilePrefix . 'palette.appearanceLinks;appearanceLinks,
        --div--;' . $frontendLanguageFilePrefix . 'tabs.access,
            hidden;' . $frontendLanguageFilePrefix . 'field.default.hidden,
            --palette--;' . $frontendLanguageFilePrefix . 'palette.access;access,
        --div--;' . $frontendLanguageFilePrefix . 'tabs.extended
        '
      ];


      // "iconHeader"
      $GLOBALS['TCA']['tt_content']['types']['iconHeader'] = [
          'showitem' => '
              --palette--;' . $frontendLanguageFilePrefix . 'palette.general;general,
              header;' . $cmsLanguageFilePrefix . 'header_formlabel,
                  --linebreak--,pi_flexform;' . $contentElementFilePrefix . 'iconHeader.icons.settings,
              --div--;' . $frontendLanguageFilePrefix . 'tabs.appearance,
                  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                  --palette--;' . $frontendLanguageFilePrefix . 'palette.appearanceLinks;appearanceLinks,
              --div--;' . $frontendLanguageFilePrefix . 'tabs.access,
                  hidden;' . $frontendLanguageFilePrefix . 'field.default.hidden,
                  --palette--;' . $frontendLanguageFilePrefix . 'palette.access;access,
              --div--;' . $frontendLanguageFilePrefix . 'tabs.extended
          '
      ];

      // "imageTextSection"
      $GLOBALS['TCA']['tt_content']['types']['imageTextSection'] = [
          'showitem' => '
              --palette--;' . $frontendLanguageFilePrefix . 'palette.general;general,
              header;' . $cmsLanguageFilePrefix . 'header_formlabel,
              --linebreak--,subheader;' . $contentElementLanguageFilePrefix . 'imageTextSection.subheader,
              --linebreak--,bodytext;' . $contentElementLanguageFilePrefix . 'imageTextSection.bodytext,
              --linebreak--,header_link;' . $cmsLanguageFilePrefix . 'header_link_formlabel,
              --linebreak--,pi_flexform;' . $t3kitElementLanguageFilePrefix . 'tt_content.tabs.settings,
              --div--;' . $frontendLanguageFilePrefix . 'tabs.images,image,
              --div--;' . $frontendLanguageFilePrefix . 'tabs.appearance,
              --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
              --palette--;' . $t3kitElementLanguageFilePrefix . 'tt_content.palette.imageSize;imageSize,
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

    // iconHeader
    $GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds']['*,iconHeader'] = 'FILE:EXT:theme_test/Configuration/FlexForms/flexform_iconHeader.xml';

    // "imageTextSection"
    $GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds']['*,imageTextSection'] = 'FILE:EXT:theme_test/Configuration/FlexForms/flexform_imageTextSection.xml';



// Add additional fields for tt_content
$additionalColumns = [
'wrapper' => [
    'exclude' => true,
    'label' => $t3kitElementLanguageFilePrefix . 'tt_content.wrapper',
    'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => [
            [$t3kitElementLanguageFilePrefix . 'label.default', 0]
        ],
        'default' => 0
    ]
],
'aligning' => [
    'exclude' => true,
    'label' => $t3kitElementLanguageFilePrefix . 'tt_content.aligning',
    'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => [
            [$t3kitElementLanguageFilePrefix . 'label.default', 0]
        ],
        'default' => 0
    ]
],
'wrapper_margin_top' => [
    'exclude' => true,
    'label' => $t3kitElementLanguageFilePrefix . 'tt_content.wrapper_margin_top',
    'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => [
            [$t3kitElementLanguageFilePrefix . 'label.default', 0]
        ],
        'default' => 0
    ]
],
'wrapper_margin_bottom' => [
    'exclude' => true,
    'label' => $t3kitElementLanguageFilePrefix . 'tt_content.wrapper_margin_bottom',
    'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => [
            [$t3kitElementLanguageFilePrefix . 'label.default', 0]
        ],
        'default' => 0
    ]
],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $additionalColumns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', 'wrapper, aligning, wrapper_margin_top, wrapper_margin_bottom', '', 'after:layout');

});

// gridelements TCA overrides
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', '--div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns');
