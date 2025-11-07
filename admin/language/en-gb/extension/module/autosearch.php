<?php
###################################################
#    AutoSearch 1.35 for Opencart 3x by AlexDW    #
###################################################

$_['heading_title']    = '<i class="fa fa-cubes fa-lg" style="color: #5BC0DE"></i> AutoSearch 3x - AJAX Instant search  <a href="http://feofan.club/" target="_blank" title="feofan.club" style="color:#ff7361"><i class="fa fa-download"></i></a> <a href="https://t.me/feofanchat/" target="_blank" title="HELP" style="color:#233746"><i class="fa fa-info-circle"></i></a>';

// Text
$_['text_module']			= 'Modules';
$_['text_edit']				= 'Edit AutoSearch Module';
$_['text_search']			= 'Search in';
$_['text_show']				= 'Show in results';
$_['text_sort_date']		= 'Date available';
$_['text_sort_name']		= 'Name';
$_['text_viewall']			= 'view all results';
$_['text_code_variant1']	= 'default';
$_['text_code_variant2']	= 'variant 1';
$_['text_code_variant3']	= 'variant 2';
$_['text_success']			= 'Success: You have modified module AutoSearch!';

$_['text_settings']		= 'Settings';
$_['text_products']		= 'Products';
$_['text_categories']	= 'Categories';
$_['text_brands']		= 'Brands';
$_['text_server']		= 'Server: ';
$_['text_host']			= 'Host: ';

// Entry
$_['entry_show']			= 'Image';
$_['entry_show_model']		= 'Model';
$_['entry_show_price']		= 'Price';
$_['entry_show_quantity']	= 'Quantity / status';
$_['entry_limit']			= 'View results limit:';
$_['entry_symbol']			= 'Symbol for autosearch:';
$_['entry_status']			= 'Module status:';
$_['entry_tag']   	  = 'Tag';
$_['entry_model']     = 'Model';
$_['entry_sku']   	  = 'SKU';
$_['entry_upc']   	  = 'UPC';
$_['entry_ean']   	  = 'EAN';
$_['entry_jan']   	  = 'JAN';
$_['entry_isbn']   	  = 'ISBN';
$_['entry_mpn']   	  = 'MPN';
$_['entry_location']  = 'Location';
$_['entry_attr']  	  = 'Attributes';

$_['entry_ignored']			= 'Ignore characters';
$_['entry_description']		= 'Description';
$_['entry_description_cat']	= 'Search by category description';
$_['entry_description_man']	= 'Search by manufacturer description';
$_['entry_available']		= 'Only in stock';
$_['text_design']			= 'Design';
$_['entry_design']			= 'Custom design';
$_['help_design']			= '<b><i class="fa fa-check"></i> Use custom colors and styles.</b><br>If enabled - the colors of the module results list elements will be changed to the selected ones, and the styles from the "Custom CSS code" block will be added.<br>If disabled, standard module styles from the file "catalog/view/javascript/jquery/autosearch.css" will be used.';
$_['entry_custom_css']		= 'Custom CSS code';
$_['entry_clr_name']		= 'Name text';
$_['entry_clr_asr']			= 'Title text';
$_['entry_clr_model']		= 'Model ttext';
$_['entry_clr_stock']		= 'Availability / quantity text';
$_['entry_clr_price']		= 'Price text';
$_['entry_clr_priceb']		= 'Price background';
$_['entry_clr_special']		= 'Special price text';
$_['entry_clr_specialb']	= 'Special price background';
$_['entry_clr_viewall']		= 'Results link text';
$_['help_search']			= 'Try to use only those fields that you really need to search for. If possible, avoid searching by description, especially with a large number of products.<br><span style="color:#1B87C2"><i class="fa fa-info-circle"></i> Remember, the more fields are involved in the search, the more time and resources it takes to process them, and the result may be less relevant.</span>';
$_['help_symbol']			= 'The number of characters after entering which in the search field the query will be processed. It is recommended to set at least 3, to exclude meaningless results and excessive load.';
$_['help_ignored']			= 'List the characters, separated by spaces, that will be ignored when entering a search query. If not filled - the search request will be used without changes.';
$_['help_size']				= 'Maximum length of the search result dropdown list. If it is exceeded, scrolling will be added to the list.';
$_['help_codepage']			= 'Use the default encoding. Or choose the appropriate option if you experience problems with the display of symbols in the list of results.';
$_['help_custom_css']		= '<i class="fa fa-info-circle"></i> CSS syntax highlighting works with the CodeMirror plugin (included with Opencart since version 2302)<br>The presence or absence of highlighting does not affect the working capacity of the code. When adding code, make sure that it is correct and works as it should.';

$_['entry_cache']			= 'Caching';
$_['help_cache']			= '<b><i class="fa fa-check"></i> Use query caching.</b><br>If enabled - positive results of the module\'s search queries will be cached, and when you re-enter such a query in the search field, they will be returned from the cache. Caching reduces server resource consumption and reduces lookup time.';
$_['entry_widget']			= 'Widget';
$_['help_widget']			= '<b><i class="fa fa-check"></i> Add module widget to admin panel.</b><br>Adds a module widget button to the top menu of the admin panel (next to the admin icon) for quick access to statistics, settings and clearing its cache.';
$_['warning_cache']			= '<b><i class="fa fa-exclamation-triangle"></i> Please note!</b><br>When caching is enabled and data is changed for products, categories and manufacturers, the module cache must be reset to update it.<br>Also note that if you change the search / display results settings in the module and then save them, the existing cache of the module will be automatically cleared!';
$_['dropcache']				= '<i class="fa fa-refresh"></i> Reset module cache';
$_['cache_stat']			= 'Statistics of 100 popular search queries from the cache (query/freq)';
$_['text_cache_size']		= 'Module cache size:';
$_['text_info']				= 'General information';
$_['dropcache_success']		= 'The module cache has been reset!';
$_['autosearch_widget']		= 'AutoSearch 3x widget';
$_['entry_image_nc']		= 'Image checking';
$_['help_image_nc']			= '<b><i class="fa fa-check"></i> Checking for images exist.</b><br>If displaying images is enabled, it will check their physical presence on the server and display a stub image if they are not available. If you are sure that everything is in order with the product images on the server and their paths in the database, disable this setting to reduce the load and increase the speed of results.';

$_['entry_sort']			= 'Sort results by';
$_['entry_codepage']		= 'Charset page:';
$_['entry_viewall']			= 'Link to all results:';
$_['entry_asr_image']		= 'Image size';

$_['entry_size']      	= 'Maximum length of list';
$_['entry_code']      	= 'License';
$_['entry_field']      	= 'Use as model:';
$_['entry_cat']			= 'Show categories';
$_['entry_catlimit']	= 'Categories limit';
$_['entry_catname']		= 'Categories title';
$_['entry_man']			= 'Show brands';
$_['entry_manlimit']	= 'Brands limit';
$_['entry_manname']		= 'Brands title';
$_['entry_proname']		= 'Products title';
$_['entry_vallname']	= 'View all title';

// Error
$_['error_permission'] = 'Warning: You do not have permission to modify module AutoSearch!';
?>