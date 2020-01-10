<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit37963d1d5c220705fa8a965804f27ea8
{
    public static $files = array (
        '0c6f877f03a67a7485a2a748706e2f2f' => __DIR__ . '/..' . '/h5p/h5p-core/h5p.classes.php',
        'a63ae9f41847366feffbb295da33fc13' => __DIR__ . '/..' . '/h5p/h5p-core/h5p-development.class.php',
        'b0f066922f2544ef1e43b5d30974b0f1' => __DIR__ . '/..' . '/h5p/h5p-core/h5p-file-storage.interface.php',
        '7d1b634d21347f43384b44f967b40c2c' => __DIR__ . '/..' . '/h5p/h5p-core/h5p-default-storage.class.php',
        '8f1b3be0fc9e7e49e7e87a1333e72895' => __DIR__ . '/..' . '/h5p/h5p-core/h5p-event-base.class.php',
        '5c8bedd5fea2fc059b78c23b68c59a4b' => __DIR__ . '/..' . '/h5p/h5p-core/h5p-metadata.class.php',
        'ed56202f592894ac220ad52836863d2b' => __DIR__ . '/..' . '/h5p/h5p-editor/h5peditor.class.php',
        'dd4ac5e4f4a7777515e9451316be622c' => __DIR__ . '/..' . '/h5p/h5p-editor/h5peditor-file.class.php',
        '138126db212e09ea471720e87b638b63' => __DIR__ . '/..' . '/h5p/h5p-editor/h5peditor-ajax.class.php',
        '920009c17c818a2668db044d76f129b9' => __DIR__ . '/..' . '/h5p/h5p-editor/h5peditor-storage.interface.php',
        '101279c1523ab77899b4b6921c749836' => __DIR__ . '/..' . '/h5p/h5p-editor/h5peditor-ajax.interface.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'srag\\RemovePluginDataConfirm\\H5P\\' => 33,
            'srag\\Plugins\\H5P\\' => 17,
            'srag\\LibrariesNamespaceChanger\\' => 31,
            'srag\\DIC\\H5P\\' => 13,
            'srag\\CustomInputGUIs\\H5P\\' => 25,
            'srag\\ActiveRecordConfig\\H5P\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'srag\\RemovePluginDataConfirm\\H5P\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src',
        ),
        'srag\\Plugins\\H5P\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'srag\\LibrariesNamespaceChanger\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src',
        ),
        'srag\\DIC\\H5P\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/dic/src',
        ),
        'srag\\CustomInputGUIs\\H5P\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/custominputguis/src',
        ),
        'srag\\ActiveRecordConfig\\H5P\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/activerecordconfig/src',
        ),
    );

    public static $classMap = array (
        'ilH5PConfigGUI' => __DIR__ . '/../..' . '/classes/class.ilH5PConfigGUI.php',
        'ilH5PPlugin' => __DIR__ . '/../..' . '/classes/class.ilH5PPlugin.php',
        'ilObjH5P' => __DIR__ . '/../..' . '/classes/class.ilObjH5P.php',
        'ilObjH5PAccess' => __DIR__ . '/../..' . '/classes/class.ilObjH5PAccess.php',
        'ilObjH5PGUI' => __DIR__ . '/../..' . '/classes/class.ilObjH5PGUI.php',
        'ilObjH5PListGUI' => __DIR__ . '/../..' . '/classes/class.ilObjH5PListGUI.php',
        'srag\\ActiveRecordConfig\\H5P\\ActiveRecordConfig' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfig.php',
        'srag\\ActiveRecordConfig\\H5P\\ActiveRecordConfigFormGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfigFormGUI.php',
        'srag\\ActiveRecordConfig\\H5P\\ActiveRecordConfigGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfigGUI.php',
        'srag\\ActiveRecordConfig\\H5P\\ActiveRecordConfigTableGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfigTableGUI.php',
        'srag\\ActiveRecordConfig\\H5P\\ActiveRecordObjectFormGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordObjectFormGUI.php',
        'srag\\ActiveRecordConfig\\H5P\\Exception\\ActiveRecordConfigException' => __DIR__ . '/..' . '/srag/activerecordconfig/src/Exception/ActiveRecordConfigException.php',
        'srag\\CustomInputGUIs\\H5P\\CheckboxInputGUI\\CheckboxInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/CheckboxInputGUI/CheckboxInputGUI.php',
        'srag\\CustomInputGUIs\\H5P\\CustomInputGUIs' => __DIR__ . '/..' . '/srag/custominputguis/src/CustomInputGUIs.php',
        'srag\\CustomInputGUIs\\H5P\\CustomInputGUIsTrait' => __DIR__ . '/..' . '/srag/custominputguis/src/CustomInputGUIsTrait.php',
        'srag\\CustomInputGUIs\\H5P\\DateDurationInputGUI\\DateDurationInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/DateDurationInputGUI/DateDurationInputGUI.php',
        'srag\\CustomInputGUIs\\H5P\\GlyphGUI\\GlyphGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/GlyphGUI/GlyphGUI.php',
        'srag\\CustomInputGUIs\\H5P\\HiddenInputGUI\\HiddenInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/HiddenInputGUI/HiddenInputGUI.php',
        'srag\\CustomInputGUIs\\H5P\\InputGUIWrapperUIInputComponent\\InputGUIWrapperConstraint' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperConstraint.php',
        'srag\\CustomInputGUIs\\H5P\\InputGUIWrapperUIInputComponent\\InputGUIWrapperConstraint54' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperConstraint54.php',
        'srag\\CustomInputGUIs\\H5P\\InputGUIWrapperUIInputComponent\\InputGUIWrapperConstraintTrait' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperConstraintTrait.php',
        'srag\\CustomInputGUIs\\H5P\\InputGUIWrapperUIInputComponent\\InputGUIWrapperUIInputComponent' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperUIInputComponent.php',
        'srag\\CustomInputGUIs\\H5P\\InputGUIWrapperUIInputComponent\\Renderer' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/Renderer.php',
        'srag\\CustomInputGUIs\\H5P\\LearningProgressPieUI\\AbstractLearningProgressPieUI' => __DIR__ . '/..' . '/srag/custominputguis/src/LearningProgressPieUI/AbstractLearningProgressPieUI.php',
        'srag\\CustomInputGUIs\\H5P\\LearningProgressPieUI\\CountLearningProgressPieUI' => __DIR__ . '/..' . '/srag/custominputguis/src/LearningProgressPieUI/CountLearningProgressPieUI.php',
        'srag\\CustomInputGUIs\\H5P\\LearningProgressPieUI\\LearningProgressPieUI' => __DIR__ . '/..' . '/srag/custominputguis/src/LearningProgressPieUI/LearningProgressPieUI.php',
        'srag\\CustomInputGUIs\\H5P\\LearningProgressPieUI\\ObjIdsLearningProgressPieUI' => __DIR__ . '/..' . '/srag/custominputguis/src/LearningProgressPieUI/ObjIdsLearningProgressPieUI.php',
        'srag\\CustomInputGUIs\\H5P\\LearningProgressPieUI\\UsrIdsLearningProgressPieUI' => __DIR__ . '/..' . '/srag/custominputguis/src/LearningProgressPieUI/UsrIdsLearningProgressPieUI.php',
        'srag\\CustomInputGUIs\\H5P\\MultiLineInputGUI\\MultiLineInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiLineInputGUI/MultiLineInputGUI.php',
        'srag\\CustomInputGUIs\\H5P\\MultiLineNewInputGUI\\MultiLineNewInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiLineNewInputGUI/MultiLineNewInputGUI.php',
        'srag\\CustomInputGUIs\\H5P\\MultiSelectSearchInputGUI\\MultiSelectSearchInput2GUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchInputGUI/MultiSelectSearchInput2GUI.php',
        'srag\\CustomInputGUIs\\H5P\\MultiSelectSearchInputGUI\\MultiSelectSearchInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchInputGUI/MultiSelectSearchInputGUI.php',
        'srag\\CustomInputGUIs\\H5P\\NumberInputGUI\\NumberInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/NumberInputGUI/NumberInputGUI.php',
        'srag\\CustomInputGUIs\\H5P\\PieChart\\Component\\LegendEntry' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Component/LegendEntry.php',
        'srag\\CustomInputGUIs\\H5P\\PieChart\\Component\\PieChart' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Component/PieChart.php',
        'srag\\CustomInputGUIs\\H5P\\PieChart\\Component\\PieChartItem' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Component/PieChartItem.php',
        'srag\\CustomInputGUIs\\H5P\\PieChart\\Component\\Section' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Component/Section.php',
        'srag\\CustomInputGUIs\\H5P\\PieChart\\Component\\SectionValue' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Component/SectionValue.php',
        'srag\\CustomInputGUIs\\H5P\\PieChart\\Implementation\\LegendEntry' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Implementation/LegendEntry.php',
        'srag\\CustomInputGUIs\\H5P\\PieChart\\Implementation\\PieChart' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Implementation/PieChart.php',
        'srag\\CustomInputGUIs\\H5P\\PieChart\\Implementation\\PieChartItem' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Implementation/PieChartItem.php',
        'srag\\CustomInputGUIs\\H5P\\PieChart\\Implementation\\Renderer' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Implementation/Renderer.php',
        'srag\\CustomInputGUIs\\H5P\\PieChart\\Implementation\\Section' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Implementation/Section.php',
        'srag\\CustomInputGUIs\\H5P\\PieChart\\Implementation\\SectionValue' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Implementation/SectionValue.php',
        'srag\\CustomInputGUIs\\H5P\\ProgressMeter\\Component\\Factory' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Component/Factory.php',
        'srag\\CustomInputGUIs\\H5P\\ProgressMeter\\Component\\FixedSize' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Component/FixedSize.php',
        'srag\\CustomInputGUIs\\H5P\\ProgressMeter\\Component\\Mini' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Component/Mini.php',
        'srag\\CustomInputGUIs\\H5P\\ProgressMeter\\Component\\ProgressMeter' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Component/ProgressMeter.php',
        'srag\\CustomInputGUIs\\H5P\\ProgressMeter\\Component\\Standard' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Component/Standard.php',
        'srag\\CustomInputGUIs\\H5P\\ProgressMeter\\Implementation\\Factory' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Implementation/Factory.php',
        'srag\\CustomInputGUIs\\H5P\\ProgressMeter\\Implementation\\FixedSize' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Implementation/FixedSize.php',
        'srag\\CustomInputGUIs\\H5P\\ProgressMeter\\Implementation\\Mini' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Implementation/Mini.php',
        'srag\\CustomInputGUIs\\H5P\\ProgressMeter\\Implementation\\ProgressMeter' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Implementation/ProgressMeter.php',
        'srag\\CustomInputGUIs\\H5P\\ProgressMeter\\Implementation\\Renderer' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Implementation/Renderer.php',
        'srag\\CustomInputGUIs\\H5P\\ProgressMeter\\Implementation\\Standard' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Implementation/Standard.php',
        'srag\\CustomInputGUIs\\H5P\\PropertyFormGUI\\ConfigPropertyFormGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/ConfigPropertyFormGUI.php',
        'srag\\CustomInputGUIs\\H5P\\PropertyFormGUI\\Exception\\PropertyFormGUIException' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/Exception/PropertyFormGUIException.php',
        'srag\\CustomInputGUIs\\H5P\\PropertyFormGUI\\Items\\Items' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/Items/Items.php',
        'srag\\CustomInputGUIs\\H5P\\PropertyFormGUI\\ObjectPropertyFormGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/ObjectPropertyFormGUI.php',
        'srag\\CustomInputGUIs\\H5P\\PropertyFormGUI\\PropertyFormGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/PropertyFormGUI.php',
        'srag\\CustomInputGUIs\\H5P\\ScreenshotsInputGUI\\ScreenshotsInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/ScreenshotsInputGUI/ScreenshotsInputGUI.php',
        'srag\\CustomInputGUIs\\H5P\\StaticHTMLPresentationInputGUI\\StaticHTMLPresentationInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/StaticHTMLPresentationInputGUI/StaticHTMLPresentationInputGUI.php',
        'srag\\CustomInputGUIs\\H5P\\TableGUI\\Exception\\TableGUIException' => __DIR__ . '/..' . '/srag/custominputguis/src/TableGUI/Exception/TableGUIException.php',
        'srag\\CustomInputGUIs\\H5P\\TableGUI\\TableGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TableGUI/TableGUI.php',
        'srag\\CustomInputGUIs\\H5P\\TabsInputGUI\\MultilangualTabsInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TabsInputGUI/MultilangualTabsInputGUI.php',
        'srag\\CustomInputGUIs\\H5P\\TabsInputGUI\\TabsInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TabsInputGUI/TabsInputGUI.php',
        'srag\\CustomInputGUIs\\H5P\\TabsInputGUI\\TabsInputGUITab' => __DIR__ . '/..' . '/srag/custominputguis/src/TabsInputGUI/TabsInputGUITab.php',
        'srag\\CustomInputGUIs\\H5P\\Template\\Template' => __DIR__ . '/..' . '/srag/custominputguis/src/Template/Template.php',
        'srag\\CustomInputGUIs\\H5P\\TextAreaInputGUI\\TextAreaInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TextAreaInputGUI/TextAreaInputGUI.php',
        'srag\\CustomInputGUIs\\H5P\\TextInputGUI\\TextInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TextInputGUI/TextInputGUI.php',
        'srag\\CustomInputGUIs\\H5P\\TextInputGUI\\TextInputGUIWithModernAutoComplete' => __DIR__ . '/..' . '/srag/custominputguis/src/TextInputGUI/TextInputGUIWithModernAutoComplete.php',
        'srag\\CustomInputGUIs\\H5P\\UIInputComponentWrapperInputGUI\\UIInputComponentWrapperInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/UIInputComponentWrapperInputGUI/UIInputComponentWrapperInputGUI.php',
        'srag\\CustomInputGUIs\\H5P\\UIInputComponentWrapperInputGUI\\UIInputComponentWrapperNameSource' => __DIR__ . '/..' . '/srag/custominputguis/src/UIInputComponentWrapperInputGUI/UIInputComponentWrapperNameSource.php',
        'srag\\CustomInputGUIs\\H5P\\ViewControlModeUI\\ViewControlModeUI' => __DIR__ . '/..' . '/srag/custominputguis/src/ViewControlModeGUI/ViewControlModeUI.php',
        'srag\\CustomInputGUIs\\H5P\\Waiter\\Waiter' => __DIR__ . '/..' . '/srag/custominputguis/src/Waiter/Waiter.php',
        'srag\\CustomInputGUIs\\H5P\\WeekdayInputGUI\\WeekdayInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/WeekdayInputGUI/WeekdayInputGUI.php',
        'srag\\DIC\\H5P\\DICStatic' => __DIR__ . '/..' . '/srag/dic/src/DICStatic.php',
        'srag\\DIC\\H5P\\DICStaticInterface' => __DIR__ . '/..' . '/srag/dic/src/DICStaticInterface.php',
        'srag\\DIC\\H5P\\DICTrait' => __DIR__ . '/..' . '/srag/dic/src/DICTrait.php',
        'srag\\DIC\\H5P\\DIC\\AbstractDIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/AbstractDIC.php',
        'srag\\DIC\\H5P\\DIC\\DICInterface' => __DIR__ . '/..' . '/srag/dic/src/DIC/DICInterface.php',
        'srag\\DIC\\H5P\\DIC\\Implementation\\ILIAS53DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS53DIC.php',
        'srag\\DIC\\H5P\\DIC\\Implementation\\ILIAS54DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS54DIC.php',
        'srag\\DIC\\H5P\\DIC\\Implementation\\ILIAS60DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS60DIC.php',
        'srag\\DIC\\H5P\\Database\\AbstractILIASDatabaseDetector' => __DIR__ . '/..' . '/srag/dic/src/Database/AbstractILIASDatabaseDetector.php',
        'srag\\DIC\\H5P\\Database\\DatabaseDetector' => __DIR__ . '/..' . '/srag/dic/src/Database/DatabaseDetector.php',
        'srag\\DIC\\H5P\\Database\\DatabaseInterface' => __DIR__ . '/..' . '/srag/dic/src/Database/DatabaseInterface.php',
        'srag\\DIC\\H5P\\Database\\PdoContextHelper' => __DIR__ . '/..' . '/srag/dic/src/Database/PdoContextHelper.php',
        'srag\\DIC\\H5P\\Database\\PdoStatementContextHelper' => __DIR__ . '/..' . '/srag/dic/src/Database/PdoStatementContextHelper.php',
        'srag\\DIC\\H5P\\Exception\\DICException' => __DIR__ . '/..' . '/srag/dic/src/Exception/DICException.php',
        'srag\\DIC\\H5P\\Output\\Output' => __DIR__ . '/..' . '/srag/dic/src/Output/Output.php',
        'srag\\DIC\\H5P\\Output\\OutputInterface' => __DIR__ . '/..' . '/srag/dic/src/Output/OutputInterface.php',
        'srag\\DIC\\H5P\\PHPVersionChecker' => __DIR__ . '/..' . '/srag/dic/src/PHPVersionChecker.php',
        'srag\\DIC\\H5P\\Plugin\\Plugin' => __DIR__ . '/..' . '/srag/dic/src/Plugin/Plugin.php',
        'srag\\DIC\\H5P\\Plugin\\PluginInterface' => __DIR__ . '/..' . '/srag/dic/src/Plugin/PluginInterface.php',
        'srag\\DIC\\H5P\\Plugin\\Pluginable' => __DIR__ . '/..' . '/srag/dic/src/Plugin/Pluginable.php',
        'srag\\DIC\\H5P\\Util\\LibraryLanguageInstaller' => __DIR__ . '/..' . '/srag/dic/src/Util/LibraryLanguageInstaller.php',
        'srag\\DIC\\H5P\\Version\\Version' => __DIR__ . '/..' . '/srag/dic/src/Version/Version.php',
        'srag\\DIC\\H5P\\Version\\VersionInterface' => __DIR__ . '/..' . '/srag/dic/src/Version/VersionInterface.php',
        'srag\\LibrariesNamespaceChanger\\LibrariesNamespaceChanger' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/LibrariesNamespaceChanger.php',
        'srag\\LibrariesNamespaceChanger\\PHP7Backport' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/PHP7Backport.php',
        'srag\\Plugins\\H5P\\Action\\H5PActionGUI' => __DIR__ . '/../..' . '/src/Action/class.H5PActionGUI.php',
        'srag\\Plugins\\H5P\\Content\\Content' => __DIR__ . '/../..' . '/src/Content/Content.php',
        'srag\\Plugins\\H5P\\Content\\ContentLibrary' => __DIR__ . '/../..' . '/src/Content/ContentLibrary.php',
        'srag\\Plugins\\H5P\\Content\\ContentUserData' => __DIR__ . '/../..' . '/src/Content/ContentUserData.php',
        'srag\\Plugins\\H5P\\Content\\ContentsTableGUI' => __DIR__ . '/../..' . '/src/Content/ContentsTableGUI.php',
        'srag\\Plugins\\H5P\\Content\\Editor\\EditContentFormGUI' => __DIR__ . '/../..' . '/src/Content/Editor/EditContentFormGUI.php',
        'srag\\Plugins\\H5P\\Content\\Editor\\EditorAjax' => __DIR__ . '/../..' . '/src/Content/Editor/EditorAjax.php',
        'srag\\Plugins\\H5P\\Content\\Editor\\EditorStorage' => __DIR__ . '/../..' . '/src/Content/Editor/EditorStorage.php',
        'srag\\Plugins\\H5P\\Content\\Editor\\Factory' => __DIR__ . '/../..' . '/src/Content/Editor/Factory.php',
        'srag\\Plugins\\H5P\\Content\\Editor\\ImportContentFormGUI' => __DIR__ . '/../..' . '/src/Content/Editor/ImportContentFormGUI.php',
        'srag\\Plugins\\H5P\\Content\\Editor\\Repository' => __DIR__ . '/../..' . '/src/Content/Editor/Repository.php',
        'srag\\Plugins\\H5P\\Content\\Editor\\ShowEditor' => __DIR__ . '/../..' . '/src/Content/Editor/ShowEditor.php',
        'srag\\Plugins\\H5P\\Content\\Editor\\TmpFile' => __DIR__ . '/../..' . '/src/Content/Editor/TmpFile.php',
        'srag\\Plugins\\H5P\\Content\\Factory' => __DIR__ . '/../..' . '/src/Content/Factory.php',
        'srag\\Plugins\\H5P\\Content\\Repository' => __DIR__ . '/../..' . '/src/Content/Repository.php',
        'srag\\Plugins\\H5P\\Content\\ShowContent' => __DIR__ . '/../..' . '/src/Content/ShowContent.php',
        'srag\\Plugins\\H5P\\Event\\Event' => __DIR__ . '/../..' . '/src/Event/Event.php',
        'srag\\Plugins\\H5P\\Event\\EventFramework' => __DIR__ . '/../..' . '/src/Event/EventFramework.php',
        'srag\\Plugins\\H5P\\Event\\Factory' => __DIR__ . '/../..' . '/src/Event/Factory.php',
        'srag\\Plugins\\H5P\\Event\\Repository' => __DIR__ . '/../..' . '/src/Event/Repository.php',
        'srag\\Plugins\\H5P\\Framework\\Framework' => __DIR__ . '/../..' . '/src/Framework/Framework.php',
        'srag\\Plugins\\H5P\\Hub\\Factory' => __DIR__ . '/../..' . '/src/Hub/Factory.php',
        'srag\\Plugins\\H5P\\Hub\\HubDetailsFormGUI' => __DIR__ . '/../..' . '/src/Hub/HubDetailsFormGUI.php',
        'srag\\Plugins\\H5P\\Hub\\HubSettingsFormGUI' => __DIR__ . '/../..' . '/src/Hub/HubSettingsFormGUI.php',
        'srag\\Plugins\\H5P\\Hub\\HubTableGUI' => __DIR__ . '/../..' . '/src/Hub/HubTableGUI.php',
        'srag\\Plugins\\H5P\\Hub\\Repository' => __DIR__ . '/../..' . '/src/Hub/Repository.php',
        'srag\\Plugins\\H5P\\Hub\\ShowHub' => __DIR__ . '/../..' . '/src/Hub/ShowHub.php',
        'srag\\Plugins\\H5P\\Hub\\UploadLibraryFormGUI' => __DIR__ . '/../..' . '/src/Hub/UploadLibraryFormGUI.php',
        'srag\\Plugins\\H5P\\Job\\DeleteOldEventsJob' => __DIR__ . '/../..' . '/src/Job/DeleteOldEventsJob.php',
        'srag\\Plugins\\H5P\\Job\\DeleteOldTmpFilesJob' => __DIR__ . '/../..' . '/src/Job/DeleteOldTmpFilesJob.php',
        'srag\\Plugins\\H5P\\Job\\RefreshHubJob' => __DIR__ . '/../..' . '/src/Job/RefreshHubJob.php',
        'srag\\Plugins\\H5P\\Library\\Counter' => __DIR__ . '/../..' . '/src/Library/Counter.php',
        'srag\\Plugins\\H5P\\Library\\Factory' => __DIR__ . '/../..' . '/src/Library/Factory.php',
        'srag\\Plugins\\H5P\\Library\\Library' => __DIR__ . '/../..' . '/src/Library/Library.php',
        'srag\\Plugins\\H5P\\Library\\LibraryCachedAsset' => __DIR__ . '/../..' . '/src/Library/LibraryCachedAsset.php',
        'srag\\Plugins\\H5P\\Library\\LibraryDependencies' => __DIR__ . '/../..' . '/src/Library/LibraryDependencies.php',
        'srag\\Plugins\\H5P\\Library\\LibraryHubCache' => __DIR__ . '/../..' . '/src/Library/LibraryHubCache.php',
        'srag\\Plugins\\H5P\\Library\\LibraryLanguage' => __DIR__ . '/../..' . '/src/Library/LibraryLanguage.php',
        'srag\\Plugins\\H5P\\Library\\Repository' => __DIR__ . '/../..' . '/src/Library/Repository.php',
        'srag\\Plugins\\H5P\\ObjectSettings\\Factory' => __DIR__ . '/../..' . '/src/ObjectSettings/Factory.php',
        'srag\\Plugins\\H5P\\ObjectSettings\\ObjectSettings' => __DIR__ . '/../..' . '/src/ObjectSettings/ObjectSettings.php',
        'srag\\Plugins\\H5P\\ObjectSettings\\ObjectSettingsFormGUI' => __DIR__ . '/../..' . '/src/ObjectSettings/ObjectSettingsFormGUI.php',
        'srag\\Plugins\\H5P\\ObjectSettings\\Repository' => __DIR__ . '/../..' . '/src/ObjectSettings/Repository.php',
        'srag\\Plugins\\H5P\\Option\\Option' => __DIR__ . '/../..' . '/src/Option/Option.php',
        'srag\\Plugins\\H5P\\Option\\OptionOld' => __DIR__ . '/../..' . '/src/Option/OptionOld.php',
        'srag\\Plugins\\H5P\\Repository' => __DIR__ . '/../..' . '/src/Repository.php',
        'srag\\Plugins\\H5P\\Result\\Factory' => __DIR__ . '/../..' . '/src/Result/Factory.php',
        'srag\\Plugins\\H5P\\Result\\Repository' => __DIR__ . '/../..' . '/src/Result/Repository.php',
        'srag\\Plugins\\H5P\\Result\\Result' => __DIR__ . '/../..' . '/src/Result/Result.php',
        'srag\\Plugins\\H5P\\Result\\ResultsTableGUI' => __DIR__ . '/../..' . '/src/Result/ResultsTableGUI.php',
        'srag\\Plugins\\H5P\\Result\\SolveStatus' => __DIR__ . '/../..' . '/src/Result/SolveStatus.php',
        'srag\\Plugins\\H5P\\Utils\\H5PTrait' => __DIR__ . '/../..' . '/src/Utils/H5PTrait.php',
        'srag\\RemovePluginDataConfirm\\H5P\\BasePluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/BasePluginUninstallTrait.php',
        'srag\\RemovePluginDataConfirm\\H5P\\PluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/PluginUninstallTrait.php',
        'srag\\RemovePluginDataConfirm\\H5P\\RemovePluginDataConfirmCtrl' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/class.RemovePluginDataConfirmCtrl.php',
        'srag\\RemovePluginDataConfirm\\H5P\\RepositoryObjectPluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/RepositoryObjectPluginUninstallTrait.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit37963d1d5c220705fa8a965804f27ea8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit37963d1d5c220705fa8a965804f27ea8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit37963d1d5c220705fa8a965804f27ea8::$classMap;

        }, null, ClassLoader::class);
    }
}
