<?php

########################################################################
# Extension Manager/Repository config file for ext: "commerce"
#
# Auto generated 24-07-2009 10:00
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Commerce',
	'description' => 'TYPO3 commerce shopping system',
	'category' => 'module',
	'shy' => 0,
	'version' => '0.9.9',
	'dependencies' => 'cms,tt_address,graytree,dynaflex,moneylib,static_info_tables',
	'conflicts' => 'mc_autokeywords',
	'priority' => '',
	'loadOrder' => '',
	'module' => 'mod_main,mod_category,mod_orders,mod_systemdata,mod_statistic',
	'state' => 'beta',
	'uploadfolder' => 1,
	'createDirs' => 'uploads/tx_commerce/rte',
	'modify_tables' => 'tt_address,fe_users',
	'clearcacheonload' => 1,
	'lockType' => 'L',
	'author' => 'Ingo Schmitt,Volker Graubaum,Thomas Hempel',
	'author_email' => 'team@typo3-commerce.org',
	'author_company' => 'Marketing Factory Consulting GmbH,e-netconsulting KG,n@work Internet Informationssysteme GmbH',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
			'tt_address' => '2.1.0-',
			'graytree' => '0.2.0-',
			'dynaflex' => '1.6.0-',
			'moneylib' => '1.2.0-',
			'static_info_tables' => '2.0.0-',
			'php' => '5.0.0-0.0.0',
			'typo3' => '4.2.0-0.0.0',
		),
		'conflicts' => array(
			'mc_autokeywords' => '',
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:387:{s:10:"change.svn";s:4:"70c5";s:36:"class.tx_commerce_articlecreator.php";s:4:"2f4a";s:37:"class.tx_commerce_attributeeditor.php";s:4:"0921";s:28:"class.ux_localrecordlist.php";s:4:"9d5d";s:23:"class.ux_sc_alt_doc.php";s:4:"7c85";s:27:"class.ux_t3lib_tceforms.php";s:4:"5eda";s:21:"ext_conf_template.txt";s:4:"4c27";s:25:"ext_df_article_config.php";s:4:"ca62";s:26:"ext_df_category_config.php";s:4:"7589";s:25:"ext_df_product_config.php";s:4:"4aef";s:12:"ext_icon.gif";s:4:"613c";s:17:"ext_localconf.php";s:4:"bc35";s:14:"ext_tables.php";s:4:"543d";s:14:"ext_tables.sql";s:4:"56c4";s:25:"ext_tables_static+adt.sql";s:4:"41b8";s:11:"is_todo.txt";s:4:"1291";s:16:"locallang_be.xml";s:4:"9807";s:23:"locallang_be_errors.xml";s:4:"7fc3";s:16:"locallang_cm.xml";s:4:"dcf5";s:16:"locallang_db.xml";s:4:"a6bd";s:28:"dao/class.address_mapper.php";s:4:"7aaa";s:28:"dao/class.address_object.php";s:4:"c8fb";s:30:"dao/class.address_observer.php";s:4:"734e";s:28:"dao/class.address_parser.php";s:4:"75ac";s:23:"dao/class.basic_dao.php";s:4:"40ec";s:30:"dao/class.basic_dao_mapper.php";s:4:"e2f7";s:30:"dao/class.basic_dao_parser.php";s:4:"eb23";s:26:"dao/class.basic_mapper.php";s:4:"0b6c";s:26:"dao/class.basic_object.php";s:4:"1cf1";s:26:"dao/class.basic_parser.php";s:4:"e177";s:40:"dao/class.feuser_address_fieldmapper.php";s:4:"9f8f";s:27:"dao/class.feuser_object.php";s:4:"fafa";s:30:"dao/class.feusers_observer.php";s:4:"9a5d";s:28:"doc/commerce_dao_install.txt";s:4:"e8ed";s:29:"doc/commerce_quickinstall.txt";s:4:"e5e3";s:14:"doc/hooks.html";s:4:"68f7";s:14:"doc/manual.sxw";s:4:"0b45";s:30:"doc/projectdescription_1.8.sxw";s:4:"357b";s:40:"hooks/class.tx_commerce_articlehooks.php";s:4:"e300";s:35:"hooks/class.tx_commerce_cmhooks.php";s:4:"effd";s:35:"hooks/class.tx_commerce_dmhooks.php";s:4:"f7cd";s:39:"hooks/class.tx_commerce_feuserhooks.php";s:4:"978e";s:42:"hooks/class.tx_commerce_ordermailhooks.php";s:4:"5864";s:43:"hooks/class.tx_commerce_pi4hooksHandler.php";s:4:"5ea9";s:43:"hooks/class.tx_commerce_tcehooksHandler.php";s:4:"4e96";s:57:"hooks/class.tx_srfeuserregister_commerce_hooksHandler.php";s:4:"177b";s:33:"lib/class.tx_commerce_article.php";s:4:"c68e";s:39:"lib/class.tx_commerce_article_price.php";s:4:"f494";s:35:"lib/class.tx_commerce_attribute.php";s:4:"6b46";s:41:"lib/class.tx_commerce_attribute_value.php";s:4:"b5a7";s:38:"lib/class.tx_commerce_basic_basket.php";s:4:"f3f9";s:32:"lib/class.tx_commerce_basket.php";s:4:"51e1";s:37:"lib/class.tx_commerce_basket_item.php";s:4:"4b99";s:31:"lib/class.tx_commerce_belib.php";s:4:"2ab2";s:40:"lib/class.tx_commerce_browseleafview.php";s:4:"4bba";s:37:"lib/class.tx_commerce_browsetrees.php";s:4:"2f34";s:34:"lib/class.tx_commerce_category.php";s:4:"daf7";s:34:"lib/class.tx_commerce_ccvs_lib.php";s:4:"680a";s:39:"lib/class.tx_commerce_create_folder.php";s:4:"301b";s:33:"lib/class.tx_commerce_db_alib.php";s:4:"bccb";s:36:"lib/class.tx_commerce_db_article.php";s:4:"329c";s:38:"lib/class.tx_commerce_db_attribute.php";s:4:"b570";s:44:"lib/class.tx_commerce_db_attribute_value.php";s:4:"ae15";s:37:"lib/class.tx_commerce_db_category.php";s:4:"e11b";s:34:"lib/class.tx_commerce_db_price.php";s:4:"d1d8";s:36:"lib/class.tx_commerce_db_product.php";s:4:"dd5a";s:29:"lib/class.tx_commerce_div.php";s:4:"9531";s:38:"lib/class.tx_commerce_element_alib.php";s:4:"e094";s:49:"lib/class.tx_commerce_feusers_localrecordlist.php";s:4:"3335";s:38:"lib/class.tx_commerce_forms_select.php";s:4:"3a45";s:30:"lib/class.tx_commerce_item.php";s:4:"a6d2";s:33:"lib/class.tx_commerce_itemset.php";s:4:"0b0a";s:41:"lib/class.tx_commerce_leafarticledata.php";s:4:"52d4";s:41:"lib/class.tx_commerce_leafarticleview.php";s:4:"ad0b";s:42:"lib/class.tx_commerce_leafcategorydata.php";s:4:"b9a6";s:42:"lib/class.tx_commerce_leafcategoryview.php";s:4:"b13d";s:39:"lib/class.tx_commerce_leaforderdata.php";s:4:"5034";s:41:"lib/class.tx_commerce_leafproductdata.php";s:4:"4924";s:41:"lib/class.tx_commerce_leafproductview.php";s:4:"1b5b";s:36:"lib/class.tx_commerce_navigation.php";s:4:"2318";s:47:"lib/class.tx_commerce_order_localrecordlist.php";s:4:"c9c9";s:32:"lib/class.tx_commerce_pibase.php";s:4:"2bda";s:33:"lib/class.tx_commerce_product.php";s:4:"3ace";s:41:"lib/class.tx_commerce_tcecategoryview.php";s:4:"040f";s:46:"lib/class.tx_commerce_tcefunc_categorytree.php";s:4:"8798";s:38:"lib/class.tx_commerce_treecategory.php";s:4:"8fea";s:34:"lib/class.tx_commerce_treeview.php";s:4:"2512";s:52:"mod_category/class.tx_commerce_category_navframe.php";s:4:"2d2f";s:46:"mod_category/class.user_attributeedit_func.php";s:4:"a276";s:22:"mod_category/clear.gif";s:4:"cc11";s:21:"mod_category/conf.php";s:4:"6649";s:22:"mod_category/index.php";s:4:"8ac8";s:26:"mod_category/locallang.xml";s:4:"a57c";s:30:"mod_category/locallang_mod.xml";s:4:"b2be";s:27:"mod_category/moduleicon.gif";s:4:"af32";s:45:"mod_clickmenu/class.tx_commerce_clickmenu.php";s:4:"b5a7";s:39:"mod_main/class.tx_commerce_navframe.php";s:4:"5443";s:18:"mod_main/clear.gif";s:4:"cc11";s:17:"mod_main/conf.php";s:4:"d054";s:18:"mod_main/index.php";s:4:"92cc";s:22:"mod_main/locallang.xml";s:4:"4744";s:26:"mod_main/locallang_mod.xml";s:4:"593c";s:23:"mod_main/moduleicon.gif";s:4:"18c2";s:47:"mod_orders/class.tx_commerce_order_navframe.php";s:4:"8481";s:40:"mod_orders/class.user_orderedit_func.php";s:4:"abf7";s:20:"mod_orders/clear.gif";s:4:"cc11";s:19:"mod_orders/conf.php";s:4:"e7d4";s:20:"mod_orders/index.php";s:4:"829c";s:24:"mod_orders/locallang.xml";s:4:"f858";s:28:"mod_orders/locallang_mod.xml";s:4:"a14a";s:25:"mod_orders/moduleicon.gif";s:4:"134b";s:54:"mod_statistic/class.tx_commerce_statistic_navframe.php";s:4:"2a86";s:23:"mod_statistic/clear.gif";s:4:"cc11";s:22:"mod_statistic/conf.php";s:4:"5e2d";s:23:"mod_statistic/index.php";s:4:"b156";s:27:"mod_statistic/locallang.xml";s:4:"f5a9";s:31:"mod_statistic/locallang_mod.xml";s:4:"6d6c";s:35:"mod_statistic/locallang_weekday.xml";s:4:"a7aa";s:28:"mod_statistic/moduleicon.gif";s:4:"0c75";s:54:"mod_systemdata/class.tx_commerce_category_navframe.php";s:4:"3bd4";s:24:"mod_systemdata/clear.gif";s:4:"cc11";s:23:"mod_systemdata/conf.php";s:4:"d48b";s:24:"mod_systemdata/index.php";s:4:"dad5";s:28:"mod_systemdata/locallang.xml";s:4:"41a8";s:32:"mod_systemdata/locallang_mod.xml";s:4:"37b9";s:29:"mod_systemdata/moduleicon.gif";s:4:"766b";s:52:"mod_tracking/class.tx_commerce_category_navframe.php";s:4:"0e0a";s:22:"mod_tracking/clear.gif";s:4:"cc11";s:21:"mod_tracking/conf.php";s:4:"e24a";s:22:"mod_tracking/index.php";s:4:"a73f";s:26:"mod_tracking/locallang.xml";s:4:"cd74";s:30:"mod_tracking/locallang_mod.xml";s:4:"47ed";s:27:"mod_tracking/moduleicon.gif";s:4:"017d";s:37:"patches/class.t3lib_tcemain.php.patch";s:4:"cb7f";s:33:"patches/jsfunc.evalfield.js.patch";s:4:"87df";s:52:"payment/class.tx_commerce_payment_cashondelivery.php";s:4:"8f66";s:48:"payment/class.tx_commerce_payment_creditcard.php";s:4:"dd6a";s:43:"payment/class.tx_commerce_payment_debit.php";s:4:"5981";s:45:"payment/class.tx_commerce_payment_invoice.php";s:4:"9797";s:48:"payment/class.tx_commerce_payment_prepayment.php";s:4:"0238";s:32:"payment/locallang_creditcard.xml";s:4:"b76e";s:33:"payment/ccvs_language/ccvs_en.inc";s:4:"407f";s:33:"payment/ccvs_language/ccvs_es.inc";s:4:"dfe2";s:55:"payment/libs/class.tx_commerce_payment_wirecard_lib.php";s:4:"d8e9";s:24:"pi1/category_product.tpl";s:4:"4e8c";s:29:"pi1/class.tx_commerce_pi1.php";s:4:"b2fe";s:37:"pi1/class.tx_commerce_pi1_wizicon.php";s:4:"1151";s:24:"pi1/flexform_product.xml";s:4:"ec45";s:12:"pi1/info.txt";s:4:"53fe";s:17:"pi1/locallang.xml";s:4:"8fc3";s:21:"pi1/locallang_tca.xml";s:4:"3c60";s:14:"pi1/manual.sxw";s:4:"2543";s:29:"pi2/class.tx_commerce_pi2.php";s:4:"8838";s:37:"pi2/class.tx_commerce_pi2_wizicon.php";s:4:"405f";s:12:"pi2/info.txt";s:4:"973d";s:17:"pi2/locallang.xml";s:4:"3c37";s:14:"pi2/manual.sxw";s:4:"2543";s:20:"pi2/shoppingcart.tpl";s:4:"e1dc";s:18:"pi2/res/basket.gif";s:4:"2c98";s:22:"pi2/res/basket_del.gif";s:4:"e9fa";s:29:"pi3/class.tx_commerce_pi3.php";s:4:"f945";s:37:"pi3/class.tx_commerce_pi3_wizicon.php";s:4:"4d14";s:12:"pi3/info.txt";s:4:"a272";s:17:"pi3/locallang.xml";s:4:"7d94";s:14:"pi3/manual.sxw";s:4:"21b9";s:26:"pi3/template_adminmail.tpl";s:4:"dbaf";s:25:"pi3/template_checkout.tpl";s:4:"2466";s:25:"pi3/template_usermail.tpl";s:4:"e1d1";s:29:"pi4/class.tx_commerce_pi4.php";s:4:"236b";s:37:"pi4/class.tx_commerce_pi4_wizicon.php";s:4:"e8a9";s:12:"pi4/info.txt";s:4:"dc12";s:17:"pi4/locallang.xml";s:4:"bdeb";s:26:"pi4/template_addresses.tpl";s:4:"c10c";s:29:"pi5/class.tx_commerce_pi5.php";s:4:"c9f7";s:12:"pi5/info.txt";s:4:"a272";s:17:"pi5/locallang.xml";s:4:"e6a9";s:26:"pi5/template_adminmail.tpl";s:4:"f48e";s:25:"pi5/template_checkout.tpl";s:4:"5b1f";s:25:"pi5/template_usermail.tpl";s:4:"273c";s:29:"pi6/class.tx_commerce_pi6.php";s:4:"03fd";s:37:"pi6/class.tx_commerce_pi6_wizicon.php";s:4:"627b";s:15:"pi6/invoice.tpl";s:4:"d934";s:17:"pi6/locallang.xml";s:4:"48a6";s:20:"res/css/commerce.css";s:4:"3396";s:20:"res/icons/ce_wiz.gif";s:4:"81e5";s:33:"res/icons/table/address_types.gif";s:4:"a38a";s:36:"res/icons/table/address_types__x.gif";s:4:"385c";s:27:"res/icons/table/article.gif";s:4:"6100";s:30:"res/icons/table/article__d.gif";s:4:"ffd5";s:30:"res/icons/table/article__f.gif";s:4:"5321";s:31:"res/icons/table/article__fu.gif";s:4:"ba4b";s:30:"res/icons/table/article__h.gif";s:4:"8401";s:31:"res/icons/table/article__hf.gif";s:4:"8401";s:32:"res/icons/table/article__hfu.gif";s:4:"e77c";s:31:"res/icons/table/article__ht.gif";s:4:"d1a9";s:32:"res/icons/table/article__htf.gif";s:4:"d1a9";s:33:"res/icons/table/article__htfu.gif";s:4:"bb05";s:32:"res/icons/table/article__htu.gif";s:4:"bb05";s:31:"res/icons/table/article__hu.gif";s:4:"e77c";s:30:"res/icons/table/article__t.gif";s:4:"abb0";s:31:"res/icons/table/article__tf.gif";s:4:"abb0";s:32:"res/icons/table/article__tfu.gif";s:4:"e0d4";s:31:"res/icons/table/article__tu.gif";s:4:"e0d4";s:30:"res/icons/table/article__u.gif";s:4:"f387";s:30:"res/icons/table/article__x.gif";s:4:"e64f";s:33:"res/icons/table/article_types.gif";s:4:"a38a";s:46:"res/icons/table/attribute_correlationtypes.gif";s:4:"a38a";s:35:"res/icons/table/attribute_value.gif";s:4:"48a0";s:38:"res/icons/table/attribute_value__d.gif";s:4:"2c71";s:38:"res/icons/table/attribute_value__f.gif";s:4:"378e";s:38:"res/icons/table/attribute_value__h.gif";s:4:"0223";s:39:"res/icons/table/attribute_value__hf.gif";s:4:"0223";s:39:"res/icons/table/attribute_value__ht.gif";s:4:"775a";s:40:"res/icons/table/attribute_value__htf.gif";s:4:"775a";s:38:"res/icons/table/attribute_value__t.gif";s:4:"a464";s:39:"res/icons/table/attribute_value__tf.gif";s:4:"a464";s:38:"res/icons/table/attribute_value__x.gif";s:4:"e6c1";s:30:"res/icons/table/attributes.gif";s:4:"9eee";s:35:"res/icons/table/attributes_free.gif";s:4:"4d0c";s:38:"res/icons/table/attributes_free__d.gif";s:4:"6eed";s:38:"res/icons/table/attributes_free__f.gif";s:4:"3cf7";s:39:"res/icons/table/attributes_free__fu.gif";s:4:"210d";s:38:"res/icons/table/attributes_free__h.gif";s:4:"a19a";s:39:"res/icons/table/attributes_free__hf.gif";s:4:"a19a";s:40:"res/icons/table/attributes_free__hfu.gif";s:4:"9d96";s:39:"res/icons/table/attributes_free__ht.gif";s:4:"3953";s:40:"res/icons/table/attributes_free__htf.gif";s:4:"3953";s:41:"res/icons/table/attributes_free__htfu.gif";s:4:"26bf";s:40:"res/icons/table/attributes_free__htu.gif";s:4:"26bf";s:39:"res/icons/table/attributes_free__hu.gif";s:4:"9d96";s:38:"res/icons/table/attributes_free__t.gif";s:4:"82e2";s:39:"res/icons/table/attributes_free__tf.gif";s:4:"82e2";s:40:"res/icons/table/attributes_free__tfu.gif";s:4:"d342";s:39:"res/icons/table/attributes_free__tu.gif";s:4:"d342";s:38:"res/icons/table/attributes_free__u.gif";s:4:"7d06";s:38:"res/icons/table/attributes_free__x.gif";s:4:"b144";s:35:"res/icons/table/attributes_list.gif";s:4:"9eee";s:38:"res/icons/table/attributes_list__d.gif";s:4:"34c8";s:38:"res/icons/table/attributes_list__f.gif";s:4:"ece1";s:39:"res/icons/table/attributes_list__fu.gif";s:4:"dac9";s:38:"res/icons/table/attributes_list__h.gif";s:4:"5976";s:39:"res/icons/table/attributes_list__hf.gif";s:4:"5976";s:40:"res/icons/table/attributes_list__hfu.gif";s:4:"39e1";s:39:"res/icons/table/attributes_list__ht.gif";s:4:"0816";s:40:"res/icons/table/attributes_list__htf.gif";s:4:"0816";s:41:"res/icons/table/attributes_list__htfu.gif";s:4:"04a3";s:40:"res/icons/table/attributes_list__htu.gif";s:4:"04a3";s:39:"res/icons/table/attributes_list__hu.gif";s:4:"39e1";s:38:"res/icons/table/attributes_list__t.gif";s:4:"f765";s:39:"res/icons/table/attributes_list__tf.gif";s:4:"f765";s:40:"res/icons/table/attributes_list__tfu.gif";s:4:"8c13";s:39:"res/icons/table/attributes_list__tu.gif";s:4:"8c13";s:38:"res/icons/table/attributes_list__u.gif";s:4:"89f0";s:38:"res/icons/table/attributes_list__x.gif";s:4:"9ad9";s:27:"res/icons/table/baskets.gif";s:4:"9c34";s:30:"res/icons/table/baskets__x.gif";s:4:"be4e";s:30:"res/icons/table/categories.gif";s:4:"7a56";s:33:"res/icons/table/categories__d.gif";s:4:"31ca";s:33:"res/icons/table/categories__f.gif";s:4:"66c4";s:34:"res/icons/table/categories__fu.gif";s:4:"93cf";s:33:"res/icons/table/categories__h.gif";s:4:"7179";s:34:"res/icons/table/categories__hf.gif";s:4:"7179";s:35:"res/icons/table/categories__hfu.gif";s:4:"8e19";s:34:"res/icons/table/categories__ht.gif";s:4:"1ab1";s:36:"res/icons/table/categories__htfu.gif";s:4:"47a9";s:35:"res/icons/table/categories__htu.gif";s:4:"47a9";s:34:"res/icons/table/categories__hu.gif";s:4:"8e19";s:33:"res/icons/table/categories__t.gif";s:4:"d765";s:34:"res/icons/table/categories__tf.gif";s:4:"d765";s:35:"res/icons/table/categories__tfu.gif";s:4:"0f62";s:34:"res/icons/table/categories__tu.gif";s:4:"0f62";s:33:"res/icons/table/categories__u.gif";s:4:"df7a";s:33:"res/icons/table/categories__x.gif";s:4:"5db2";s:35:"res/icons/table/commerce_folder.gif";s:4:"c469";s:38:"res/icons/table/commerce_folder__h.gif";s:4:"2ddb";s:35:"res/icons/table/commerce_globus.gif";s:4:"e472";s:25:"res/icons/table/dummy.gif";s:4:"a38a";s:32:"res/icons/table/manufacturer.gif";s:4:"e596";s:35:"res/icons/table/manufacturer__d.gif";s:4:"730a";s:35:"res/icons/table/manufacturer__h.gif";s:4:"21f9";s:35:"res/icons/table/manufacturer__x.gif";s:4:"cec7";s:34:"res/icons/table/moveordermails.gif";s:4:"4422";s:37:"res/icons/table/moveordermails__f.gif";s:4:"0f79";s:38:"res/icons/table/moveordermails__fu.gif";s:4:"9ea0";s:37:"res/icons/table/moveordermails__h.gif";s:4:"ba63";s:38:"res/icons/table/moveordermails__hf.gif";s:4:"ba63";s:39:"res/icons/table/moveordermails__hfu.gif";s:4:"836c";s:38:"res/icons/table/moveordermails__ht.gif";s:4:"2943";s:39:"res/icons/table/moveordermails__htf.gif";s:4:"2943";s:40:"res/icons/table/moveordermails__htfu.gif";s:4:"217c";s:39:"res/icons/table/moveordermails__htu.gif";s:4:"217c";s:38:"res/icons/table/moveordermails__hu.gif";s:4:"836c";s:37:"res/icons/table/moveordermails__t.gif";s:4:"35e6";s:38:"res/icons/table/moveordermails__tf.gif";s:4:"35e6";s:39:"res/icons/table/moveordermails__tfu.gif";s:4:"df82";s:38:"res/icons/table/moveordermails__tu.gif";s:4:"df82";s:37:"res/icons/table/moveordermails__u.gif";s:4:"95c7";s:37:"res/icons/table/moveordermails__x.gif";s:4:"bc28";s:30:"res/icons/table/newclients.gif";s:4:"9c62";s:33:"res/icons/table/newclients__x.gif";s:4:"c4f7";s:42:"res/icons/table/nn_articles_attributes.gif";s:4:"a38a";s:44:"res/icons/table/nn_categories_attributes.gif";s:4:"a38a";s:44:"res/icons/table/nn_categories_categories.gif";s:4:"a38a";s:42:"res/icons/table/nn_products_attributes.gif";s:4:"a38a";s:42:"res/icons/table/nn_products_categories.gif";s:4:"a38a";s:34:"res/icons/table/order_articles.gif";s:4:"af66";s:37:"res/icons/table/order_articles__x.gif";s:4:"1ca3";s:31:"res/icons/table/order_types.gif";s:4:"a38a";s:34:"res/icons/table/order_types__d.gif";s:4:"ed7f";s:34:"res/icons/table/order_types__x.gif";s:4:"385c";s:26:"res/icons/table/orders.gif";s:4:"1758";s:29:"res/icons/table/orders__d.gif";s:4:"296b";s:29:"res/icons/table/orders__x.gif";s:4:"8e40";s:30:"res/icons/table/orders_add.gif";s:4:"5f8a";s:34:"res/icons/table/orders_add_int.gif";s:4:"cac0";s:35:"res/icons/table/orders_add_user.gif";s:4:"bb07";s:39:"res/icons/table/orders_add_user_int.gif";s:4:"7582";s:30:"res/icons/table/orders_int.gif";s:4:"899b";s:31:"res/icons/table/orders_user.gif";s:4:"549d";s:35:"res/icons/table/orders_user_int.gif";s:4:"ea92";s:25:"res/icons/table/price.gif";s:4:"20b9";s:28:"res/icons/table/price__d.gif";s:4:"7ad1";s:28:"res/icons/table/price__f.gif";s:4:"f44a";s:29:"res/icons/table/price__fu.gif";s:4:"2232";s:28:"res/icons/table/price__h.gif";s:4:"d47c";s:29:"res/icons/table/price__hf.gif";s:4:"d47c";s:30:"res/icons/table/price__hfu.gif";s:4:"3c6d";s:29:"res/icons/table/price__ht.gif";s:4:"e3f9";s:30:"res/icons/table/price__htf.gif";s:4:"e3f9";s:31:"res/icons/table/price__htfu.gif";s:4:"4633";s:30:"res/icons/table/price__htu.gif";s:4:"4633";s:29:"res/icons/table/price__hu.gif";s:4:"3c6d";s:28:"res/icons/table/price__t.gif";s:4:"7f36";s:29:"res/icons/table/price__tf.gif";s:4:"7f36";s:30:"res/icons/table/price__tfu.gif";s:4:"4f01";s:29:"res/icons/table/price__tu.gif";s:4:"4f01";s:28:"res/icons/table/price__u.gif";s:4:"930f";s:28:"res/icons/table/price__x.gif";s:4:"fd1d";s:28:"res/icons/table/products.gif";s:4:"5d89";s:31:"res/icons/table/products__d.gif";s:4:"4c36";s:31:"res/icons/table/products__f.gif";s:4:"f715";s:32:"res/icons/table/products__fu.gif";s:4:"5274";s:31:"res/icons/table/products__h.gif";s:4:"9254";s:32:"res/icons/table/products__hf.gif";s:4:"9254";s:33:"res/icons/table/products__hfu.gif";s:4:"7969";s:32:"res/icons/table/products__ht.gif";s:4:"b7f0";s:33:"res/icons/table/products__htf.gif";s:4:"b7f0";s:34:"res/icons/table/products__htfu.gif";s:4:"b53e";s:33:"res/icons/table/products__htu.gif";s:4:"b53e";s:32:"res/icons/table/products__hu.gif";s:4:"7969";s:31:"res/icons/table/products__t.gif";s:4:"3a65";s:32:"res/icons/table/products__tf.gif";s:4:"3a65";s:33:"res/icons/table/products__tfu.gif";s:4:"4529";s:32:"res/icons/table/products__tu.gif";s:4:"4529";s:31:"res/icons/table/products__u.gif";s:4:"4408";s:31:"res/icons/table/products__x.gif";s:4:"b5ae";s:32:"res/icons/table/salesfigures.gif";s:4:"0c75";s:35:"res/icons/table/salesfigures__x.gif";s:4:"c4f7";s:28:"res/icons/table/supplier.gif";s:4:"5676";s:31:"res/icons/table/supplier__d.gif";s:4:"25d0";s:31:"res/icons/table/supplier__h.gif";s:4:"b251";s:31:"res/icons/table/supplier__x.gif";s:4:"260b";s:28:"res/icons/table/tracking.gif";s:4:"a17a";s:31:"res/icons/table/tracking__x.gif";s:4:"c865";s:34:"res/icons/table/tracking_codes.gif";s:4:"18e7";s:37:"res/icons/table/tracking_codes__x.gif";s:4:"635c";s:31:"res/icons/table/user_states.gif";s:4:"a38a";s:34:"res/icons/table/user_states__d.gif";s:4:"ed7f";s:34:"res/icons/table/user_states__x.gif";s:4:"385c";s:21:"res/logo/commerce.jpg";s:4:"576a";s:20:"static/constants.txt";s:4:"f9b3";s:16:"static/setup.txt";s:4:"9d1b";s:16:"tcafiles/tca.php";s:4:"8031";s:37:"tcafiles/tx_commerce_articles.tca.php";s:4:"f8e5";s:45:"tcafiles/tx_commerce_attribute_values.tca.php";s:4:"78ae";s:39:"tcafiles/tx_commerce_attributes.tca.php";s:4:"5cde";s:36:"tcafiles/tx_commerce_baskets.tca.php";s:4:"9092";s:39:"tcafiles/tx_commerce_categories.tca.php";s:4:"83ed";s:41:"tcafiles/tx_commerce_manufacturer.tca.php";s:4:"246e";s:43:"tcafiles/tx_commerce_moveordermails.tca.php";s:4:"fc3f";s:39:"tcafiles/tx_commerce_newclients.tca.php";s:4:"ce95";s:43:"tcafiles/tx_commerce_order_articles.tca.php";s:4:"a693";s:35:"tcafiles/tx_commerce_orders.tca.php";s:4:"b144";s:37:"tcafiles/tx_commerce_products.tca.php";s:4:"6287";s:41:"tcafiles/tx_commerce_salesfigures.tca.php";s:4:"e8ab";s:37:"tcafiles/tx_commerce_supplier.tca.php";s:4:"f77d";s:37:"tcafiles/tx_commerce_tracking.tca.php";s:4:"305a";}',
	'suggests' => array(
	),
);

?>