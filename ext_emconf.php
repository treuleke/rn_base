<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "rn_base".
 *
 * Auto generated 03-02-2015 22:12
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'A base library for extensions.',
	'description' => 'Uses MVC design principles and domain driven development for TYPO3 extension development.',
	'category' => 'misc',
	'shy' => 0,
	'version' => 'v0.14.15',
	'dependencies' => 'cms',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => 'typo3temp/rn_base/',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Rene Nitzsche',
	'author_email' => 'rene@system25.de',
	'author_company' => 'System 25',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
			'typo3' => '4.3.0-6.2.99',
			'php' => '5.0.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:148:{s:12:"CHANGELOG.md";s:4:"dbe0";s:19:"class.tx_rnbase.php";s:4:"76b2";s:34:"class.tx_rnbase_configurations.php";s:4:"1466";s:30:"class.tx_rnbase_controller.php";s:4:"6b21";s:30:"class.tx_rnbase_parameters.php";s:4:"731f";s:13:"composer.json";s:4:"5f95";s:21:"ext_conf_template.txt";s:4:"a999";s:12:"ext_icon.gif";s:4:"1bdc";s:17:"ext_localconf.php";s:4:"4104";s:13:"locallang.xml";s:4:"4801";s:9:"README.md";s:4:"3b45";s:38:"action/class.tx_rnbase_action_Base.php";s:4:"743c";s:41:"action/class.tx_rnbase_action_BaseIOC.php";s:4:"26eb";s:53:"action/class.tx_rnbase_action_CacheHandlerDefault.php";s:4:"e769";s:50:"action/class.tx_rnbase_action_CacheHandlerUser.php";s:4:"922b";s:47:"action/class.tx_rnbase_action_ICacheHandler.php";s:4:"f0f5";s:38:"cache/class.tx_rnbase_cache_ICache.php";s:4:"c3d8";s:39:"cache/class.tx_rnbase_cache_Manager.php";s:4:"c8c8";s:39:"cache/class.tx_rnbase_cache_NoCache.php";s:4:"4aac";s:42:"cache/class.tx_rnbase_cache_TYPO3Cache.php";s:4:"9d91";s:44:"cache/class.tx_rnbase_cache_TYPO3Cache46.php";s:4:"e6e1";s:44:"cache/class.tx_rnbase_cache_TYPO3Cache60.php";s:4:"3de3";s:19:"doc/wizard_form.dat";s:4:"49ea";s:20:"doc/wizard_form.html";s:4:"f188";s:47:"exception/class.tx_rnbase_exception_Handler.php";s:4:"47a0";s:48:"exception/class.tx_rnbase_exception_IHandler.php";s:4:"20c0";s:44:"exception/class.tx_rnbase_exception_Skip.php";s:4:"30fd";s:44:"filter/class.tx_rnbase_filter_BaseFilter.php";s:4:"e693";s:44:"filter/class.tx_rnbase_filter_FilterItem.php";s:4:"ec49";s:50:"filter/class.tx_rnbase_filter_FilterItemMarker.php";s:4:"6d73";s:37:"maps/class.tx_rnbase_maps_BaseMap.php";s:4:"5d5a";s:35:"maps/class.tx_rnbase_maps_Coord.php";s:4:"ddc3";s:43:"maps/class.tx_rnbase_maps_DefaultMarker.php";s:4:"2a08";s:37:"maps/class.tx_rnbase_maps_Factory.php";s:4:"c35d";s:38:"maps/class.tx_rnbase_maps_IControl.php";s:4:"0ce7";s:36:"maps/class.tx_rnbase_maps_ICoord.php";s:4:"3f62";s:35:"maps/class.tx_rnbase_maps_IIcon.php";s:4:"1561";s:34:"maps/class.tx_rnbase_maps_IMap.php";s:4:"80e8";s:37:"maps/class.tx_rnbase_maps_IMarker.php";s:4:"096f";s:42:"maps/class.tx_rnbase_maps_TypeRegistry.php";s:4:"e93c";s:34:"maps/class.tx_rnbase_maps_Util.php";s:4:"1c8e";s:51:"maps/google/class.tx_rnbase_maps_google_Control.php";s:4:"28ab";s:48:"maps/google/class.tx_rnbase_maps_google_Icon.php";s:4:"5a63";s:47:"maps/google/class.tx_rnbase_maps_google_Map.php";s:4:"923b";s:38:"misc/class.tx_rnbase_misc_EvalDate.php";s:4:"a5d8";s:39:"mod/class.tx_rnbase_mod_BaseModFunc.php";s:4:"fa47";s:38:"mod/class.tx_rnbase_mod_BaseModule.php";s:4:"846f";s:43:"mod/class.tx_rnbase_mod_ExtendedModFunc.php";s:4:"d7e7";s:38:"mod/class.tx_rnbase_mod_IDecorator.php";s:4:"25b0";s:36:"mod/class.tx_rnbase_mod_IModFunc.php";s:4:"6521";s:39:"mod/class.tx_rnbase_mod_IModHandler.php";s:4:"6a81";s:35:"mod/class.tx_rnbase_mod_IModule.php";s:4:"b5bd";s:34:"mod/class.tx_rnbase_mod_Tables.php";s:4:"d0ab";s:32:"mod/class.tx_rnbase_mod_Util.php";s:4:"86b2";s:17:"mod/locallang.xml";s:4:"faa5";s:17:"mod/template.html";s:4:"4577";s:44:"mod/base/class.tx_rnbase_mod_base_Lister.php";s:4:"5379";s:36:"model/class.tx_rnbase_model_base.php";s:4:"e82a";s:36:"model/class.tx_rnbase_model_data.php";s:4:"14e7";s:37:"model/class.tx_rnbase_model_media.php";s:4:"a0d8";s:37:"plot/class.tx_rnbase_plot_Builder.php";s:4:"f1e3";s:42:"plot/class.tx_rnbase_plot_DataProvider.php";s:4:"15eb";s:44:"plot/class.tx_rnbase_plot_DataProviderTS.php";s:4:"02a3";s:43:"plot/class.tx_rnbase_plot_IDataProvider.php";s:4:"eca5";s:22:"res/simplegallery.html";s:4:"fdee";s:32:"sv1/class.tx_rnbase_sv1_Base.php";s:4:"3798";s:39:"sv1/class.tx_rnbase_sv1_MediaPlayer.php";s:4:"864f";s:17:"sv1/dewplayer.swf";s:4:"4e96";s:21:"sv1/ext_localconf.php";s:4:"0b41";s:51:"tests/class.tx_rnbase_tests_basemarker_testcase.php";s:4:"84cf";s:44:"tests/class.tx_rnbase_tests_BaseTestCase.php";s:4:"1a96";s:46:"tests/class.tx_rnbase_tests_cache_testcase.php";s:4:"e84e";s:49:"tests/class.tx_rnbase_tests_calendar_testcase.php";s:4:"c0da";s:55:"tests/class.tx_rnbase_tests_configurations_testcase.php";s:4:"eb80";s:51:"tests/class.tx_rnbase_tests_controller_testcase.php";s:4:"922e";s:52:"tests/class.tx_rnbase_tests_listbuilder_testcase.php";s:4:"1a31";s:47:"tests/class.tx_rnbase_tests_Logger_testcase.php";s:4:"bc22";s:45:"tests/class.tx_rnbase_tests_misc_testcase.php";s:4:"5114";s:51:"tests/class.tx_rnbase_tests_parameters_testcase.php";s:4:"2aea";s:47:"tests/class.tx_rnbase_tests_rnbase_testcase.php";s:4:"c248";s:56:"tests/class.tx_rnbase_tests_util_SearchBase_testcase.php";s:4:"e856";s:53:"tests/class.tx_rnbase_tests_util_Strings_testcase.php";s:4:"4954";s:17:"tests/phpunit.xml";s:4:"a326";s:75:"tests/fixtures/classes/class.tx_rnbase_tests_fixtures_classes_Decorator.php";s:4:"5913";s:69:"tests/fixtures/classes/class.tx_rnbase_tests_fixtures_classes_Mod.php";s:4:"007c";s:44:"tests/fixtures/html/includeSubTemplates.html";s:4:"7ced";s:51:"tests/fixtures/html/includeSubTemplatesIcludes.html";s:4:"60aa";s:55:"tests/mod/class.tx_rnbase_tests_mod_Tables_testcase.php";s:4:"12af";s:57:"tests/model/class.tx_rnbase_tests_model_Base_testcase.php";s:4:"7ff9";s:57:"tests/model/class.tx_rnbase_tests_model_Data_testcase.php";s:4:"14fe";s:58:"tests/model/class.tx_rnbase_tests_model_Media_testcase.php";s:4:"ea88";s:56:"tests/util/class.tx_rnbase_tests_util_Dates_testcase.php";s:4:"bb4b";s:53:"tests/util/class.tx_rnbase_tests_util_DB_testcase.php";s:4:"8d36";s:62:"tests/util/class.tx_rnbase_tests_util_PageBrowser_testcase.php";s:4:"a156";s:63:"tests/util/class.tx_rnbase_tests_util_SimpleMarker_testcase.php";s:4:"0361";s:54:"tests/util/class.tx_rnbase_tests_util_TCA_testcase.php";s:4:"2da0";s:60:"tests/util/class.tx_rnbase_tests_util_Templates_testcase.php";s:4:"450e";s:36:"util/class.tx_rnbase_util_Arrays.php";s:4:"1115";s:40:"util/class.tx_rnbase_util_BaseMarker.php";s:4:"fb0b";s:37:"util/class.tx_rnbase_util_BEPager.php";s:4:"5328";s:38:"util/class.tx_rnbase_util_Calendar.php";s:4:"3aef";s:35:"util/class.tx_rnbase_util_Dates.php";s:4:"d72c";s:32:"util/class.tx_rnbase_util_DB.php";s:4:"1221";s:35:"util/class.tx_rnbase_util_Debug.php";s:4:"7df0";s:39:"util/class.tx_rnbase_util_Exception.php";s:4:"1d4f";s:35:"util/class.tx_rnbase_util_Files.php";s:4:"8fcf";s:40:"util/class.tx_rnbase_util_FormatUtil.php";s:4:"ab08";s:38:"util/class.tx_rnbase_util_FormTool.php";s:4:"d05e";s:38:"util/class.tx_rnbase_util_FormUtil.php";s:4:"187f";s:43:"util/class.tx_rnbase_util_IListProvider.php";s:4:"5386";s:34:"util/class.tx_rnbase_util_Json.php";s:4:"c5f2";s:34:"util/class.tx_rnbase_util_Lang.php";s:4:"dc91";s:34:"util/class.tx_rnbase_util_Link.php";s:4:"a3d2";s:41:"util/class.tx_rnbase_util_ListBuilder.php";s:4:"2f1d";s:45:"util/class.tx_rnbase_util_ListBuilderInfo.php";s:4:"11b3";s:40:"util/class.tx_rnbase_util_ListMarker.php";s:4:"046c";s:44:"util/class.tx_rnbase_util_ListMarkerInfo.php";s:4:"4103";s:42:"util/class.tx_rnbase_util_ListProvider.php";s:4:"635e";s:36:"util/class.tx_rnbase_util_Logger.php";s:4:"0e1a";s:34:"util/class.tx_rnbase_util_Mail.php";s:4:"8320";s:34:"util/class.tx_rnbase_util_Math.php";s:4:"35f3";s:41:"util/class.tx_rnbase_util_MediaMarker.php";s:4:"79f1";s:34:"util/class.tx_rnbase_util_Misc.php";s:4:"1461";s:41:"util/class.tx_rnbase_util_PageBrowser.php";s:4:"dadb";s:47:"util/class.tx_rnbase_util_PageBrowserMarker.php";s:4:"26e7";s:35:"util/class.tx_rnbase_util_Queue.php";s:4:"320d";s:40:"util/class.tx_rnbase_util_SearchBase.php";s:4:"8d24";s:43:"util/class.tx_rnbase_util_SearchGeneric.php";s:4:"af62";s:42:"util/class.tx_rnbase_util_SimpleMarker.php";s:4:"4fd4";s:34:"util/class.tx_rnbase_util_Spyc.php";s:4:"a7b1";s:37:"util/class.tx_rnbase_util_Strings.php";s:4:"227b";s:33:"util/class.tx_rnbase_util_TCA.php";s:4:"1f37";s:39:"util/class.tx_rnbase_util_Templates.php";s:4:"c1d3";s:32:"util/class.tx_rnbase_util_TS.php";s:4:"2d44";s:35:"util/class.tx_rnbase_util_TSDAM.php";s:4:"6f9c";s:35:"util/class.tx_rnbase_util_TSFAL.php";s:4:"d5f1";s:35:"util/class.tx_rnbase_util_TYPO3.php";s:4:"64c6";s:37:"util/class.tx_rnbase_util_Wizicon.php";s:4:"3100";s:40:"util/class.tx_rnbase_util_XmlElement.php";s:4:"f271";s:45:"util/db/class.tx_rnbase_util_db_Exception.php";s:4:"91e4";s:45:"util/db/class.tx_rnbase_util_db_IDatabase.php";s:4:"3136";s:41:"util/db/class.tx_rnbase_util_db_MsSQL.php";s:4:"34f6";s:41:"util/db/class.tx_rnbase_util_db_MySQL.php";s:4:"ba89";s:41:"util/db/class.tx_rnbase_util_db_TYPO3.php";s:4:"bebb";s:34:"view/class.tx_rnbase_view_Base.php";s:4:"431a";s:34:"view/class.tx_rnbase_view_List.php";s:4:"92f8";s:47:"view/class.tx_rnbase_view_phpTemplateEngine.php";s:4:"4e3f";s:36:"view/class.tx_rnbase_view_Single.php";s:4:"38f0";}',
	'suggests' => array(
	),
);

?>