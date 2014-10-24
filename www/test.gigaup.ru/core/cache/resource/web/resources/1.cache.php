<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 1,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Главная',
    'longtitle' => '',
    'description' => '',
    'alias' => 'index',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '[[!getResources? &limit=`0` &parents=`11`&includeTVs=`1`  &tpl=`tovar`]]
[[!Price]]',
    'richtext' => 1,
    'template' => 2,
    'menuindex' => 0,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1413992315,
    'editedby' => 1,
    'editedon' => 1414009435,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 0,
    'publishedby' => 0,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => '',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<base href="http://test.gigaup.ru/" />
<title>Главная - MODX Revolution</title>

<!-- You can add theme from bootswatch.com: just add it into &cssSources=``.
For example: /assets/components/themebootstrap/css/cerulean/bootstrap-theme.min.css-->


<script src="/assets/components/themebootstrap/js/jquery.min.js"></script>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

	</head>
	<body>
		<!-- Static navbar -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">MODX Revolution</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="first active"><a href="index.php?id=1" >Главная</a></li><li><a href="index.php?id=4" >Регистрация</a></li><li><a href="index.php?id=6" >Авторизация</a></li>
					<li class=" dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" >Личный кабинет<b class="caret"></b></a>
						<ul class="dropdown-menu"><li class="first"><a href="index.php?id=9" >Изменение пароля</a></li><li><a href="index.php?id=10" >Редактирование данных</a></li><li class="last"><a href="index.php?id=7" >Восстановление пароля</a></li></ul>
					</li>
					<li class="last dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" >Каталог<b class="caret"></b></a>
						<ul class="dropdown-menu"><li class="first"><a href="index.php?id=12" >Товар 1</a></li><li class="last"><a href="index.php?id=13" >Товар 2</a></li></ul>
					</li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>
		<div class="container">
			<div id="content" class="main">
				<h3>MODX Revolution</h3>
<h2>Каталог</h2>
[[!getResources? &limit=`0` &parents=`11`&includeTVs=`1`  &tpl=`tovar`]]
[[!Price]]


			</div>
			<footer>
	<div class="row">
		<div class="col-lg-8">
			<p><small>
				total time: [^t^]<br/>
				query time: [^qt^]<br/>
				queries: [^q^]
			</small></p>
		</div>
		<div class="col-lg-4">
			<p class="">&copy;2013 MODX Revolution</p>
			<a href="http://bezumkin.ru/">Василий Наумкин</a>
		</div>
	</div>
</footer>
		</div>
	</body>
</html>
',
    '_isForward' => false,
    '_sjscripts' => 
    array (
      0 => '<link rel="stylesheet" href="/assets/components/minifyx/cache/styles_d1b266b19b.min.css" type="text/css" />',
    ),
    '_jscripts' => 
    array (
      0 => '<script type="text/javascript" src="/assets/components/minifyx/cache/scripts_c6a8a0f02e.min.js"></script>',
    ),
    '_loadedjscripts' => 
    array (
      '/assets/components/minifyx/cache/scripts_c6a8a0f02e.min.js' => true,
      '/assets/components/minifyx/cache/styles_d1b266b19b.min.css' => true,
    ),
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[*pagetitle]]' => 'Главная',
    '[[*longtitle:default=`Главная`]]' => 'Главная',
    '[[MinifyX?
	&minifyCss=`1`
	&registerCss=`1`
	&cssSources=`
		/assets/components/themebootstrap/css/bootstrap.min.css,
		/assets/components/themebootstrap/css/add.css
	`
	&minifyJs=`1`
	&registerJs=`1`
	&jsSources=`
		/assets/components/themebootstrap/js/bootstrap.min.js
	`
]]' => '',
    '[[$Head]]' => '<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<base href="http://test.gigaup.ru/" />
<title>Главная - MODX Revolution</title>

<!-- You can add theme from bootswatch.com: just add it into &cssSources=``.
For example: /assets/components/themebootstrap/css/cerulean/bootstrap-theme.min.css-->


<script src="/assets/components/themebootstrap/js/jquery.min.js"></script>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
',
    '[[pdoMenu?
					&startId=`0`
					&level=`2`
					&tplParentRow=`@INLINE
					<li class="[[+classnames]] dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" [[+attributes]]>[[+menutitle]]<b class="caret"></b></a>
						<ul class="dropdown-menu">[[+wrapper]]</ul>
					</li>`
					&tplOuter=`@INLINE [[+wrapper]]`
				]]' => '<li class="first active"><a href="index.php?id=1" >Главная</a></li><li><a href="index.php?id=4" >Регистрация</a></li><li><a href="index.php?id=6" >Авторизация</a></li>
					<li class=" dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" >Личный кабинет<b class="caret"></b></a>
						<ul class="dropdown-menu"><li class="first"><a href="index.php?id=9" >Изменение пароля</a></li><li><a href="index.php?id=10" >Редактирование данных</a></li><li class="last"><a href="index.php?id=7" >Восстановление пароля</a></li></ul>
					</li>
					<li class="last dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" >Каталог<b class="caret"></b></a>
						<ul class="dropdown-menu"><li class="first"><a href="index.php?id=12" >Товар 1</a></li><li class="last"><a href="index.php?id=13" >Товар 2</a></li></ul>
					</li>',
    '[[$Navbar]]' => '<!-- Static navbar -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">MODX Revolution</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="first active"><a href="index.php?id=1" >Главная</a></li><li><a href="index.php?id=4" >Регистрация</a></li><li><a href="index.php?id=6" >Авторизация</a></li>
					<li class=" dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" >Личный кабинет<b class="caret"></b></a>
						<ul class="dropdown-menu"><li class="first"><a href="index.php?id=9" >Изменение пароля</a></li><li><a href="index.php?id=10" >Редактирование данных</a></li><li class="last"><a href="index.php?id=7" >Восстановление пароля</a></li></ul>
					</li>
					<li class="last dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" >Каталог<b class="caret"></b></a>
						<ul class="dropdown-menu"><li class="first"><a href="index.php?id=12" >Товар 1</a></li><li class="last"><a href="index.php?id=13" >Товар 2</a></li></ul>
					</li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>',
    '[[$Content.main]]' => '<h3>MODX Revolution</h3>
<h2>Каталог</h2>
[[!getResources? &limit=`0` &parents=`11`&includeTVs=`1`  &tpl=`tovar`]]
[[!Price]]

',
    '[[$Footer]]' => '<footer>
	<div class="row">
		<div class="col-lg-8">
			<p><small>
				total time: [^t^]<br/>
				query time: [^qt^]<br/>
				queries: [^q^]
			</small></p>
		</div>
		<div class="col-lg-4">
			<p class="">&copy;2013 MODX Revolution</p>
			<a href="http://bezumkin.ru/">Василий Наумкин</a>
		</div>
	</div>
</footer>',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'Head' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'Head',
          'description' => 'Head of site with scripts and styles',
          'editor_type' => 0,
          'category' => 2,
          'cache_type' => 0,
          'snippet' => '<meta charset="[[++modx_charset]]">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<base href="[[++site_url]]" />
<title>[[*longtitle:default=`[[*pagetitle]]`]] - [[++site_name]]</title>

<!-- You can add theme from bootswatch.com: just add it into &cssSources=``.
For example: [[++assets_url]]components/themebootstrap/css/cerulean/bootstrap-theme.min.css-->
[[MinifyX?
	&minifyCss=`1`
	&registerCss=`1`
	&cssSources=`
		[[++assets_url]]components/themebootstrap/css/bootstrap.min.css,
		[[++assets_url]]components/themebootstrap/css/add.css
	`
	&minifyJs=`1`
	&registerJs=`1`
	&jsSources=`
		[[++assets_url]]components/themebootstrap/js/bootstrap.min.js
	`
]]

<script src="[[++assets_url]]components/themebootstrap/js/jquery.min.js"></script>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
',
          'locked' => false,
          'properties' => NULL,
          'static' => false,
          'static_file' => 'assets/components/themebootstrap/elements/chunks/chunk.head.tpl',
          'content' => '<meta charset="[[++modx_charset]]">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<base href="[[++site_url]]" />
<title>[[*longtitle:default=`[[*pagetitle]]`]] - [[++site_name]]</title>

<!-- You can add theme from bootswatch.com: just add it into &cssSources=``.
For example: [[++assets_url]]components/themebootstrap/css/cerulean/bootstrap-theme.min.css-->
[[MinifyX?
	&minifyCss=`1`
	&registerCss=`1`
	&cssSources=`
		[[++assets_url]]components/themebootstrap/css/bootstrap.min.css,
		[[++assets_url]]components/themebootstrap/css/add.css
	`
	&minifyJs=`1`
	&registerJs=`1`
	&jsSources=`
		[[++assets_url]]components/themebootstrap/js/bootstrap.min.js
	`
]]

<script src="[[++assets_url]]components/themebootstrap/js/jquery.min.js"></script>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'Navbar' => 
      array (
        'fields' => 
        array (
          'id' => 2,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'Navbar',
          'description' => 'Navbar with main navigation',
          'editor_type' => 0,
          'category' => 2,
          'cache_type' => 0,
          'snippet' => '<!-- Static navbar -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">[[++site_name]]</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				[[pdoMenu?
					&startId=`0`
					&level=`2`
					&tplParentRow=`@INLINE
					<li class="[[+classnames]] dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" [[+attributes]]>[[+menutitle]]<b class="caret"></b></a>
						<ul class="dropdown-menu">[[+wrapper]]</ul>
					</li>`
					&tplOuter=`@INLINE [[+wrapper]]`
				]]
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>',
          'locked' => false,
          'properties' => NULL,
          'static' => false,
          'static_file' => 'assets/components/themebootstrap/elements/chunks/chunk.navbar.tpl',
          'content' => '<!-- Static navbar -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">[[++site_name]]</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				[[pdoMenu?
					&startId=`0`
					&level=`2`
					&tplParentRow=`@INLINE
					<li class="[[+classnames]] dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" [[+attributes]]>[[+menutitle]]<b class="caret"></b></a>
						<ul class="dropdown-menu">[[+wrapper]]</ul>
					</li>`
					&tplOuter=`@INLINE [[+wrapper]]`
				]]
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'Content.main' => 
      array (
        'fields' => 
        array (
          'id' => 4,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'Content.main',
          'description' => 'Content of main page',
          'editor_type' => 0,
          'category' => 2,
          'cache_type' => 0,
          'snippet' => '<h3>[[++site_name]]</h3>
<h2>Каталог</h2>
[[*content]]

',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => 'assets/components/themebootstrap/elements/chunks/chunk.content.main.tpl',
          'content' => '<h3>[[++site_name]]</h3>
<h2>Каталог</h2>
[[*content]]

',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'Footer' => 
      array (
        'fields' => 
        array (
          'id' => 3,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'Footer',
          'description' => 'Chunk with footer',
          'editor_type' => 0,
          'category' => 2,
          'cache_type' => 0,
          'snippet' => '<footer>
	<div class="row">
		<div class="col-lg-8">
			<p><small>
				total time: [^t^]<br/>
				query time: [^qt^]<br/>
				queries: [^q^]
			</small></p>
		</div>
		<div class="col-lg-4">
			<p class="">&copy;2013 [[++site_name]]</p>
			<a href="http://bezumkin.ru/">[[++cultureKey:is=`ru`:then=`Василий Наумкин`:else=`Vasiliy Naumkin`]]</a>
		</div>
	</div>
</footer>',
          'locked' => false,
          'properties' => NULL,
          'static' => false,
          'static_file' => 'assets/components/themebootstrap/elements/chunks/chunk.footer.tpl',
          'content' => '<footer>
	<div class="row">
		<div class="col-lg-8">
			<p><small>
				total time: [^t^]<br/>
				query time: [^qt^]<br/>
				queries: [^q^]
			</small></p>
		</div>
		<div class="col-lg-4">
			<p class="">&copy;2013 [[++site_name]]</p>
			<a href="http://bezumkin.ru/">[[++cultureKey:is=`ru`:then=`Василий Наумкин`:else=`Vasiliy Naumkin`]]</a>
		</div>
	</div>
</footer>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modSnippet' => 
    array (
      'MinifyX' => 
      array (
        'fields' => 
        array (
          'id' => 9,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'MinifyX',
          'description' => 'MinifyX is a snippet the allows you to combine and minify JS and CSS files',
          'editor_type' => 0,
          'category' => 4,
          'cache_type' => 0,
          'snippet' => '/** @var array $scriptProperties */
if (!$modx->getService(\'minifyx\',\'MinifyX\', MODX_CORE_PATH.\'components/minifyx/model/minifyx/\')) {return;}
/** @var MinifyX $MinifyX */
$MinifyX = new MinifyX($modx, $scriptProperties);
if (!$MinifyX->prepareCacheFolder()) {
	$modx->log(modX::LOG_LEVEL_ERROR, \'[MinifyX] Could not create cache dir "\'.$MinifyX->config[\'cacheFolder\'].\'"\');
	return;
}
$cacheFolderUrl = MODX_BASE_URL . str_replace(MODX_BASE_PATH, \'\', $MinifyX->config[\'cacheFolder\']);

$array = array(
	\'js\' => trim($modx->getOption(\'jsSources\', $scriptProperties, \'\', true)),
	\'css\' => trim($modx->getOption(\'cssSources\', $scriptProperties, \'\', true)),
);

foreach ($array as $type => $value) {
	if (empty($value)) {continue;}
	$filename = $MinifyX->config[$type.\'Filename\'] . \'_\';
	$extension = $MinifyX->config[$type.\'Ext\'];
	$register = $MinifyX->config[\'register\'.ucfirst($type)];
	$placeholder = !empty($MinifyX->config[$type.\'Placeholder\'])
		? $MinifyX->config[$type.\'Placeholder\']
		: \'\';

	$files = $MinifyX->prepareFiles($value);
	$properties = array(
		\'minify\' => $MinifyX->config[\'minify\'.ucfirst($type)]
				? \'true\'
				: \'false\',
	);

	$result = $MinifyX->Munee($files, $properties);
	$file = $MinifyX->saveFile($result, $filename, $extension);

	// Register file on frontend
	if (!empty($file) && file_exists($MinifyX->config[\'cacheFolder\'] . $file)) {
		if ($register == \'placeholder\' && $placeholder) {
			$tag = $type == \'css\'
				? \'<link rel="stylesheet" href="\' . $cacheFolderUrl .  $file . \'" type="text/css" />\'
				: \'<script type="text/javascript" src="\' . $cacheFolderUrl . $file . \'"></script>\';
			$modx->setPlaceholder($placeholder, $tag);
		}
		else {
			if ($type == \'css\') {
				$modx->regClientCSS($cacheFolderUrl . $file);
			}
			else {
				if ($register == \'startup\') {
					$modx->regClientStartupScript($cacheFolderUrl . $file);
				}
				else {
					$modx->regClientScript($cacheFolderUrl . $file);
				}
			}
		}
	}
}
return;',
          'locked' => false,
          'properties' => 
          array (
            'jsSources' => 
            array (
              'name' => 'jsSources',
              'desc' => 'minifyx_prop_jsSources',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'minifyx:properties',
              'area' => '',
              'desc_trans' => 'Список JS файлов для обработки. Можно указывать *.js и *.coffee.',
              'area_trans' => '',
            ),
            'cssSources' => 
            array (
              'name' => 'cssSources',
              'desc' => 'minifyx_prop_cssSources',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'minifyx:properties',
              'area' => '',
              'desc_trans' => 'Список CSS файлов для обработки. Можно указывать *.css, *.less и *.scss.',
              'area_trans' => '',
            ),
            'minifyJs' => 
            array (
              'name' => 'minifyJs',
              'desc' => 'minifyx_prop_minifyJs',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'minifyx:properties',
              'area' => '',
              'desc_trans' => 'Включить минификацию JS?',
              'area_trans' => '',
            ),
            'minifyCss' => 
            array (
              'name' => 'minifyCss',
              'desc' => 'minifyx_prop_minifyCss',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'minifyx:properties',
              'area' => '',
              'desc_trans' => 'Включить минификацию CSS?',
              'area_trans' => '',
            ),
            'jsFilename' => 
            array (
              'name' => 'jsFilename',
              'desc' => 'minifyx_prop_jsFilename',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'scripts',
              'lexicon' => 'minifyx:properties',
              'area' => '',
              'desc_trans' => 'Базовое имя готового JS файла.',
              'area_trans' => '',
            ),
            'cssFilename' => 
            array (
              'name' => 'cssFilename',
              'desc' => 'minifyx_prop_cssFilename',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'styles',
              'lexicon' => 'minifyx:properties',
              'area' => '',
              'desc_trans' => 'Базовое имя готового CSS файла.',
              'area_trans' => '',
            ),
            'registerJs' => 
            array (
              'name' => 'registerJs',
              'desc' => 'minifyx_prop_registerJs',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => 'placeholder',
                  'text' => 'Placeholder',
                  'name' => 'Placeholder',
                ),
                1 => 
                array (
                  'value' => 'startup',
                  'text' => 'Startup script',
                  'name' => 'Startup script',
                ),
                2 => 
                array (
                  'value' => 'default',
                  'text' => 'Default',
                  'name' => 'Default',
                ),
              ),
              'value' => 'placeholder',
              'lexicon' => 'minifyx:properties',
              'area' => '',
              'desc_trans' => 'Подключение javascript: можно сохранить в плейсхолдер (placeholder), вызвать в теге "head" (startup) или разместить перед закрывающим "body" (default).',
              'area_trans' => '',
            ),
            'jsPlaceholder' => 
            array (
              'name' => 'jsPlaceholder',
              'desc' => 'minifyx_prop_jsPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'MinifyX.javascript',
              'lexicon' => 'minifyx:properties',
              'area' => '',
              'desc_trans' => 'Имя плейсхолдера javascript. Используется, если &registerJs=`placeholder`',
              'area_trans' => '',
            ),
            'registerCss' => 
            array (
              'name' => 'registerCss',
              'desc' => 'minifyx_prop_registerCss',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => 'placeholder',
                  'text' => 'Placeholder',
                  'name' => 'Placeholder',
                ),
                1 => 
                array (
                  'value' => 'default',
                  'text' => 'Default',
                  'name' => 'Default',
                ),
              ),
              'value' => 'placeholder',
              'lexicon' => 'minifyx:properties',
              'area' => '',
              'desc_trans' => 'Подключение сss: можно сохранить в плейсхолдер (placeholder) или вызвать в теге "head" (default).',
              'area_trans' => '',
            ),
            'cssPlaceholder' => 
            array (
              'name' => 'cssPlaceholder',
              'desc' => 'minifyx_prop_cssPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'MinifyX.css',
              'lexicon' => 'minifyx:properties',
              'area' => '',
              'desc_trans' => 'Имя плейсхолдера css. Используется,если &registerCss=`placeholder`',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/minifyx/elements/snippets/snippet.minifyx.php',
          'content' => '/** @var array $scriptProperties */
if (!$modx->getService(\'minifyx\',\'MinifyX\', MODX_CORE_PATH.\'components/minifyx/model/minifyx/\')) {return;}
/** @var MinifyX $MinifyX */
$MinifyX = new MinifyX($modx, $scriptProperties);
if (!$MinifyX->prepareCacheFolder()) {
	$modx->log(modX::LOG_LEVEL_ERROR, \'[MinifyX] Could not create cache dir "\'.$MinifyX->config[\'cacheFolder\'].\'"\');
	return;
}
$cacheFolderUrl = MODX_BASE_URL . str_replace(MODX_BASE_PATH, \'\', $MinifyX->config[\'cacheFolder\']);

$array = array(
	\'js\' => trim($modx->getOption(\'jsSources\', $scriptProperties, \'\', true)),
	\'css\' => trim($modx->getOption(\'cssSources\', $scriptProperties, \'\', true)),
);

foreach ($array as $type => $value) {
	if (empty($value)) {continue;}
	$filename = $MinifyX->config[$type.\'Filename\'] . \'_\';
	$extension = $MinifyX->config[$type.\'Ext\'];
	$register = $MinifyX->config[\'register\'.ucfirst($type)];
	$placeholder = !empty($MinifyX->config[$type.\'Placeholder\'])
		? $MinifyX->config[$type.\'Placeholder\']
		: \'\';

	$files = $MinifyX->prepareFiles($value);
	$properties = array(
		\'minify\' => $MinifyX->config[\'minify\'.ucfirst($type)]
				? \'true\'
				: \'false\',
	);

	$result = $MinifyX->Munee($files, $properties);
	$file = $MinifyX->saveFile($result, $filename, $extension);

	// Register file on frontend
	if (!empty($file) && file_exists($MinifyX->config[\'cacheFolder\'] . $file)) {
		if ($register == \'placeholder\' && $placeholder) {
			$tag = $type == \'css\'
				? \'<link rel="stylesheet" href="\' . $cacheFolderUrl .  $file . \'" type="text/css" />\'
				: \'<script type="text/javascript" src="\' . $cacheFolderUrl . $file . \'"></script>\';
			$modx->setPlaceholder($placeholder, $tag);
		}
		else {
			if ($type == \'css\') {
				$modx->regClientCSS($cacheFolderUrl . $file);
			}
			else {
				if ($register == \'startup\') {
					$modx->regClientStartupScript($cacheFolderUrl . $file);
				}
				else {
					$modx->regClientScript($cacheFolderUrl . $file);
				}
			}
		}
	}
}
return;',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'pdoMenu' => 
      array (
        'fields' => 
        array (
          'id' => 8,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pdoMenu',
          'description' => '',
          'editor_type' => 0,
          'category' => 3,
          'cache_type' => 0,
          'snippet' => '/** @var array $scriptProperties */

// Convert parameters from Wayfinder if exists
if (isset($startId)) {
	$scriptProperties[\'parents\'] = $startId;
}
if (!empty($includeDocs)) {
	$tmp = array_map(\'trim\', explode(\',\', $includeDocs));
	foreach ($tmp as $v) {
		if (!empty($scriptProperties[\'resources\'])) {
			$scriptProperties[\'resources\'] .= \',\'.$v;
		}
		else {
			$scriptProperties[\'resources\'] = $v;
		}
	}
}
if (!empty($excludeDocs)) {
	$tmp = array_map(\'trim\', explode(\',\', $excludeDocs));
	foreach ($tmp as $v) {
		if (!empty($scriptProperties[\'resources\'])) {
			$scriptProperties[\'resources\'] .= \',-\'.$v;
		}
		else {
			$scriptProperties[\'resources\'] = \'-\'.$v;
		}
	}
}

if (!empty($previewUnpublished) && $modx->hasPermission(\'view_unpublished\')) {
	$scriptProperties[\'showUnpublished\'] = 1;
}

$scriptProperties[\'depth\'] = empty($level) ? 100 : abs($level) - 1;
if (!empty($contexts)) {$scriptProperties[\'context\'] = $contexts;}
if (empty($scriptProperties[\'context\'])) {$scriptProperties[\'context\'] = $modx->resource->context_key;}

// Save original parents specified by user
$specified_parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));

if ($scriptProperties[\'parents\'] === \'\') {
	$scriptProperties[\'parents\'] = $modx->resource->id;
}
elseif ($scriptProperties[\'parents\'] === 0 || $scriptProperties[\'parents\'] === \'0\') {
	if ($scriptProperties[\'depth\'] !== \'\' && $scriptProperties[\'depth\'] !== 100) {
		$contexts = array_map(\'trim\', explode(\',\', $scriptProperties[\'context\']));
		$parents = array();
		foreach ($contexts as $ctx) {
			$parents = array_merge($parents, $modx->getChildIds(0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
		}
		$scriptProperties[\'parents\'] = !empty($parents) ? implode(\',\', $parents) : \'+0\';
		$scriptProperties[\'depth\'] = 0;
	}
	$scriptProperties[\'includeParents\'] = 1;
	$scriptProperties[\'displayStart\'] = 0;
}
else {
	$parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));
	$parents_in = $parents_out = array();
	foreach ($parents as $v) {
		if (!is_numeric($v)) {continue;}
		if ($v[0] == \'-\') {$parents_out[] = abs($v);}
		else {$parents_in[] = abs($v);}
	}

	if (empty($parents_in)) {
		$scriptProperties[\'includeParents\'] = 1;
		$scriptProperties[\'displayStart\'] = 0;
	}
}

if (!empty($displayStart)) {$scriptProperties[\'includeParents\'] = 1;}
if (!empty($ph)) {$toPlaceholder = $ph;}
if (!empty($sortOrder)) {$scriptProperties[\'sortdir\'] = $sortOrder;}
if (!empty($sortBy)) {$scriptProperties[\'sortby\'] = $sortBy;}
if (!empty($permissions)) {$scriptProperties[\'checkPermissions\'] = $permissions;}
if (!empty($cacheResults)) {$scriptProperties[\'cache\'] = $cacheResults;}
if (!empty($ignoreHidden)) {$scriptProperties[\'showHidden\'] = $ignoreHidden;}

$wfTemplates = array(
	\'outerTpl\' => \'tplOuter\',
	\'rowTpl\' => \'tpl\',
	\'parentRowTpl\' => \'tplParentRow\',
	\'parentRowHereTpl\' => \'tplParentRowHere\',
	\'hereTpl\' => \'tplHere\',
	\'innerTpl\' => \'tplInner\',
	\'innerRowTpl\' => \'tplInnerRow\',
	\'innerHereTpl\' => \'tplInnerHere\',
	\'activeParentRowTpl\' => \'tplParentRowActive\',
	\'categoryFoldersTpl\' => \'tplCategoryFolder\',
	\'startItemTpl\' => \'tplStart\'
);
foreach ($wfTemplates as $k => $v) {
	if (isset(${$k})) {
		$scriptProperties[$v] = ${$k};
	}
}

//---

/** @var pdoMenu $pdoMenu */
if (!$modx->loadClass(\'pdotools.pdoMenu\', MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoMenu from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoMenu = new pdoMenu($modx, $scriptProperties);
$pdoMenu->pdoTools->addTime(\'pdoTools loaded\');

$output = !empty($cache) || !$modx->user->id && !empty($cacheAnonymous)
	? $output = $pdoMenu->pdoTools->getCache($scriptProperties)
	: \'\';

if (empty($output)) {
	$rows = $pdoMenu->pdoTools->run();
	$tmp = $pdoMenu->pdoTools->buildTree($rows);
	$tree = array();
	foreach ($tmp as $k => $v) {
		if (empty($v[\'id\'])) {
			if (!in_array($k, $specified_parents) && !$pdoMenu->checkResource($k)) {
				continue;
			}
			else {
				$tree = array_merge($tree, $v[\'children\']);
			}
		}
		else {
			$tree[$k] = $v;
		}
	}

	$output = $pdoMenu->templateTree($tree);
	if (!empty($cache) || !$modx->user->id && !empty($cacheAnonymous)) {
		$pdoMenu->pdoTools->setCache($output, $scriptProperties);
	}
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$output .= \'<pre class="pdoMenuLog">\' . print_r($pdoMenu->pdoTools->getTime(), 1) . \'</pre>\';
}

if (!empty($toPlaceholder)) {
	$modx->setPlaceholder($toPlaceholder, $output);
}
else {
	return $output;
}',
          'locked' => false,
          'properties' => 
          array (
            'showLog' => 
            array (
              'name' => 'showLog',
              'desc' => 'pdotools_prop_showLog',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать дополнительную информацию о работе сниппета. Только для авторизованных в контекте "mgr".',
              'area_trans' => '',
            ),
            'fastMode' => 
            array (
              'name' => 'fastMode',
              'desc' => 'pdotools_prop_fastMode',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Быстрый режим обработки чанков. Все необработанные теги (условия, сниппеты и т.п.) будут вырезаны.',
              'area_trans' => '',
            ),
            'level' => 
            array (
              'name' => 'level',
              'desc' => 'pdotools_prop_level',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Уровень генерируемого меню.',
              'area_trans' => '',
            ),
            'parents' => 
            array (
              'name' => 'parents',
              'desc' => 'pdotools_prop_parents',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список родителей, через запятую, для поиска результатов. По умолчанию выборка ограничена текущим родителем. Если поставить 0 - выборка не ограничивается. Если id родителя начинается с дефиса, он и его потомки исключается из выборки.',
              'area_trans' => '',
            ),
            'displayStart' => 
            array (
              'name' => 'displayStart',
              'desc' => 'pdotools_prop_displayStart',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить показ начальных узлов меню. Полезно при указании более одного "parents".',
              'area_trans' => '',
            ),
            'resources' => 
            array (
              'name' => 'resources',
              'desc' => 'pdotools_prop_resources',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ресурсов, через запятую, для вывода в результатах. Если id ресурса начинается с дефиса, этот ресурс исключается из выборки.',
              'area_trans' => '',
            ),
            'templates' => 
            array (
              'name' => 'templates',
              'desc' => 'pdotools_prop_templates',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список шаблонов, через запятую, для фильтрации результатов. Если id шаблона начинается с дефиса, ресурсы с ним исключается из выборки.',
              'area_trans' => '',
            ),
            'context' => 
            array (
              'name' => 'context',
              'desc' => 'pdotools_prop_context',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение выборки по контексту ресурсов.',
              'area_trans' => '',
            ),
            'cache' => 
            array (
              'name' => 'cache',
              'desc' => 'pdotools_prop_cache',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Кэширование результатов работы сниппета.',
              'area_trans' => '',
            ),
            'cacheTime' => 
            array (
              'name' => 'cacheTime',
              'desc' => 'pdotools_prop_cacheTime',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 3600,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Время актуальности кэша, в секундах.',
              'area_trans' => '',
            ),
            'cacheAnonymous' => 
            array (
              'name' => 'cacheAnonymous',
              'desc' => 'pdotools_prop_cacheAnonymous',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить кэширование только для неавторизованных посетителей.',
              'area_trans' => '',
            ),
            'plPrefix' => 
            array (
              'name' => 'plPrefix',
              'desc' => 'pdotools_prop_plPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'wf.',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс для выставляемых плейсхолдеров, по умолчанию "wf.".',
              'area_trans' => '',
            ),
            'showHidden' => 
            array (
              'name' => 'showHidden',
              'desc' => 'pdotools_prop_showHidden',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать ресурсы, скрытые в меню.',
              'area_trans' => '',
            ),
            'showUnpublished' => 
            array (
              'name' => 'showUnpublished',
              'desc' => 'pdotools_prop_showUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать неопубликованные ресурсы.',
              'area_trans' => '',
            ),
            'showDeleted' => 
            array (
              'name' => 'showDeleted',
              'desc' => 'pdotools_prop_showDeleted',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать удалённые ресурсы.',
              'area_trans' => '',
            ),
            'previewUnpublished' => 
            array (
              'name' => 'previewUnpublished',
              'desc' => 'pdotools_prop_previewUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить показ неопубликованных документов, если у пользователя есть на это разрешение.',
              'area_trans' => '',
            ),
            'hideSubMenus' => 
            array (
              'name' => 'hideSubMenus',
              'desc' => 'pdotools_prop_hideSubMenus',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Спрятать неактивные ветки меню.',
              'area_trans' => '',
            ),
            'useWeblinkUrl' => 
            array (
              'name' => 'useWeblinkUrl',
              'desc' => 'pdotools_prop_useWeblinkUrl',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Генерировать ссылку с учетом класса ресурса.',
              'area_trans' => '',
            ),
            'sortdir' => 
            array (
              'name' => 'sortdir',
              'desc' => 'pdotools_prop_sortdir',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'ASC',
                  'value' => 'ASC',
                  'name' => 'ASC',
                ),
                1 => 
                array (
                  'text' => 'DESC',
                  'value' => 'DESC',
                  'name' => 'DESC',
                ),
              ),
              'value' => 'ASC',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Направление сортировки: по убыванию или возрастанию.',
              'area_trans' => '',
            ),
            'sortby' => 
            array (
              'name' => 'sortby',
              'desc' => 'pdotools_prop_sortby',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'menuindex',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Любое поле ресурса для сортировки, включая ТВ параметр, если он указан в параметре "includeTVs". Можно указывать JSON строку с массивом нескольких полей. Для случайно сортировки укажите "RAND()"',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'pdotools_prop_limit',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение количества результатов выборки. Можно использовать "0".',
              'area_trans' => '',
            ),
            'offset' => 
            array (
              'name' => 'offset',
              'desc' => 'pdotools_prop_offset',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Пропуск результатов от начала.',
              'area_trans' => '',
            ),
            'rowIdPrefix' => 
            array (
              'name' => 'rowIdPrefix',
              'desc' => 'pdotools_prop_rowIdPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс id="" для выставления идентификатора в чанк.',
              'area_trans' => '',
            ),
            'firstClass' => 
            array (
              'name' => 'firstClass',
              'desc' => 'pdotools_prop_firstClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'first',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс для первого пункта меню.',
              'area_trans' => '',
            ),
            'lastClass' => 
            array (
              'name' => 'lastClass',
              'desc' => 'pdotools_prop_lastClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'last',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс последнего пункта меню.',
              'area_trans' => '',
            ),
            'hereClass' => 
            array (
              'name' => 'hereClass',
              'desc' => 'pdotools_prop_hereClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'active',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс для активного пунтка меню.',
              'area_trans' => '',
            ),
            'parentClass' => 
            array (
              'name' => 'parentClass',
              'desc' => 'pdotools_prop_parentClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс категории меню.',
              'area_trans' => '',
            ),
            'rowClass' => 
            array (
              'name' => 'rowClass',
              'desc' => 'pdotools_prop_rowClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс одной строки меню.',
              'area_trans' => '',
            ),
            'outerClass' => 
            array (
              'name' => 'outerClass',
              'desc' => 'pdotools_prop_outerClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс обертки меню.',
              'area_trans' => '',
            ),
            'innerClass' => 
            array (
              'name' => 'innerClass',
              'desc' => 'pdotools_prop_innerClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс внутренних ссылок меню.',
              'area_trans' => '',
            ),
            'levelClass' => 
            array (
              'name' => 'levelClass',
              'desc' => 'pdotools_prop_levelClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс уровня меню. Например, если укажите "level", то будет "level1", "level2" и т.д.',
              'area_trans' => '',
            ),
            'selfClass' => 
            array (
              'name' => 'selfClass',
              'desc' => 'pdotools_prop_selfClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс текущего документа в меню.',
              'area_trans' => '',
            ),
            'webLinkClass' => 
            array (
              'name' => 'webLinkClass',
              'desc' => 'pdotools_prop_webLinkClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс документа-ссылки.',
              'area_trans' => '',
            ),
            'tplOuter' => 
            array (
              'name' => 'tplOuter',
              'desc' => 'pdotools_prop_tplOuter',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <ul[[+classes]]>[[+wrapper]]</ul>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк обертка всего блока меню.',
              'area_trans' => '',
            ),
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'pdotools_prop_tpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li[[+classes]]><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a>[[+wrapper]]</li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для оформления ресурса. Если не указан, то содержимое полей ресурса будет распечатано на экран.',
              'area_trans' => '',
            ),
            'tplParentRow' => 
            array (
              'name' => 'tplParentRow',
              'desc' => 'pdotools_prop_tplParentRow',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplParentRowHere' => 
            array (
              'name' => 'tplParentRowHere',
              'desc' => 'pdotools_prop_tplParentRowHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления текущего контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplHere' => 
            array (
              'name' => 'tplHere',
              'desc' => 'pdotools_prop_tplHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк текущего документа',
              'area_trans' => '',
            ),
            'tplInner' => 
            array (
              'name' => 'tplInner',
              'desc' => 'pdotools_prop_tplInner',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк обертки внутренних пунктов меню. Если пуст - будет использовать "tplInner".',
              'area_trans' => '',
            ),
            'tplInnerRow' => 
            array (
              'name' => 'tplInnerRow',
              'desc' => 'pdotools_prop_tplInnerRow',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк обертка активного пункта меню.',
              'area_trans' => '',
            ),
            'tplInnerHere' => 
            array (
              'name' => 'tplInnerHere',
              'desc' => 'pdotools_prop_tplInnerHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк обертка активного пунка меню.',
              'area_trans' => '',
            ),
            'tplParentRowActive' => 
            array (
              'name' => 'tplParentRowActive',
              'desc' => 'pdotools_prop_tplParentRowActive',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления активного контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplCategoryFolder' => 
            array (
              'name' => 'tplCategoryFolder',
              'desc' => 'pdotools_prop_tplCategoryFolder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Специальный чанк оформления категории. Категория - это документ с потомками и или нулевым шаблоном, или с атрибутом "rel=\\"category\\"".',
              'area_trans' => '',
            ),
            'tplStart' => 
            array (
              'name' => 'tplStart',
              'desc' => 'pdotools_prop_tplStart',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <h2[[+classes]]>[[+menutitle]]</h2>[[+wrapper]]',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления корневого пункта, при условии, что включен "displayStart".',
              'area_trans' => '',
            ),
            'checkPermissions' => 
            array (
              'name' => 'checkPermissions',
              'desc' => 'pdotools_prop_checkPermissions',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Укажите, каеи разрешения нужно проверять у пользователя при выводе документов.',
              'area_trans' => '',
            ),
            'hereId' => 
            array (
              'name' => 'hereId',
              'desc' => 'pdotools_prop_hereId',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Id документа, текущего для генерируемого меню. Нужно указывать только если скрипт сам его неверно определяет, например при выводе меню из чанка другого сниппета.',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'pdotools_prop_where',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Массив дополнительных параметров выборки, закодированный в JSON.',
              'area_trans' => '',
            ),
            'select' => 
            array (
              'name' => 'select',
              'desc' => 'pdotools_prop_select',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список полей для выборки, через запятую. Можно указывать JSON строку с массивом, например {"modResource":"id,pagetitle,content"}.',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'pdotools_prop_scheme',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => -1,
                  'text' => '-1 (relative to site_url)',
                  'name' => '-1 (relative to site_url)',
                ),
                1 => 
                array (
                  'value' => 'full',
                  'text' => 'full (absolute, prepended with site_url)',
                  'name' => 'full (absolute, prepended with site_url)',
                ),
                2 => 
                array (
                  'value' => 'abs',
                  'text' => 'abs (absolute, prepended with base_url)',
                  'name' => 'abs (absolute, prepended with base_url)',
                ),
                3 => 
                array (
                  'value' => 'http',
                  'text' => 'http (absolute, forced to http scheme)',
                  'name' => 'http (absolute, forced to http scheme)',
                ),
                4 => 
                array (
                  'value' => 'https',
                  'text' => 'https (absolute, forced to https scheme)',
                  'name' => 'https (absolute, forced to https scheme)',
                ),
              ),
              'value' => -1,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Схема формирования url, передаётся в modX::makeUrl().',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'pdotools_prop_toPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Если не пусто, сниппет сохранит все данные в плейсхолдер с этим именем, вместо вывода не экран.',
              'area_trans' => '',
            ),
            'countChildren' => 
            array (
              'name' => 'countChildren',
              'desc' => 'pdotools_prop_countChildren',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Вывести точное количество активных потомков документа в плейсхолдер [[+children]].',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdomenu.php',
          'content' => '/** @var array $scriptProperties */

// Convert parameters from Wayfinder if exists
if (isset($startId)) {
	$scriptProperties[\'parents\'] = $startId;
}
if (!empty($includeDocs)) {
	$tmp = array_map(\'trim\', explode(\',\', $includeDocs));
	foreach ($tmp as $v) {
		if (!empty($scriptProperties[\'resources\'])) {
			$scriptProperties[\'resources\'] .= \',\'.$v;
		}
		else {
			$scriptProperties[\'resources\'] = $v;
		}
	}
}
if (!empty($excludeDocs)) {
	$tmp = array_map(\'trim\', explode(\',\', $excludeDocs));
	foreach ($tmp as $v) {
		if (!empty($scriptProperties[\'resources\'])) {
			$scriptProperties[\'resources\'] .= \',-\'.$v;
		}
		else {
			$scriptProperties[\'resources\'] = \'-\'.$v;
		}
	}
}

if (!empty($previewUnpublished) && $modx->hasPermission(\'view_unpublished\')) {
	$scriptProperties[\'showUnpublished\'] = 1;
}

$scriptProperties[\'depth\'] = empty($level) ? 100 : abs($level) - 1;
if (!empty($contexts)) {$scriptProperties[\'context\'] = $contexts;}
if (empty($scriptProperties[\'context\'])) {$scriptProperties[\'context\'] = $modx->resource->context_key;}

// Save original parents specified by user
$specified_parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));

if ($scriptProperties[\'parents\'] === \'\') {
	$scriptProperties[\'parents\'] = $modx->resource->id;
}
elseif ($scriptProperties[\'parents\'] === 0 || $scriptProperties[\'parents\'] === \'0\') {
	if ($scriptProperties[\'depth\'] !== \'\' && $scriptProperties[\'depth\'] !== 100) {
		$contexts = array_map(\'trim\', explode(\',\', $scriptProperties[\'context\']));
		$parents = array();
		foreach ($contexts as $ctx) {
			$parents = array_merge($parents, $modx->getChildIds(0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
		}
		$scriptProperties[\'parents\'] = !empty($parents) ? implode(\',\', $parents) : \'+0\';
		$scriptProperties[\'depth\'] = 0;
	}
	$scriptProperties[\'includeParents\'] = 1;
	$scriptProperties[\'displayStart\'] = 0;
}
else {
	$parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));
	$parents_in = $parents_out = array();
	foreach ($parents as $v) {
		if (!is_numeric($v)) {continue;}
		if ($v[0] == \'-\') {$parents_out[] = abs($v);}
		else {$parents_in[] = abs($v);}
	}

	if (empty($parents_in)) {
		$scriptProperties[\'includeParents\'] = 1;
		$scriptProperties[\'displayStart\'] = 0;
	}
}

if (!empty($displayStart)) {$scriptProperties[\'includeParents\'] = 1;}
if (!empty($ph)) {$toPlaceholder = $ph;}
if (!empty($sortOrder)) {$scriptProperties[\'sortdir\'] = $sortOrder;}
if (!empty($sortBy)) {$scriptProperties[\'sortby\'] = $sortBy;}
if (!empty($permissions)) {$scriptProperties[\'checkPermissions\'] = $permissions;}
if (!empty($cacheResults)) {$scriptProperties[\'cache\'] = $cacheResults;}
if (!empty($ignoreHidden)) {$scriptProperties[\'showHidden\'] = $ignoreHidden;}

$wfTemplates = array(
	\'outerTpl\' => \'tplOuter\',
	\'rowTpl\' => \'tpl\',
	\'parentRowTpl\' => \'tplParentRow\',
	\'parentRowHereTpl\' => \'tplParentRowHere\',
	\'hereTpl\' => \'tplHere\',
	\'innerTpl\' => \'tplInner\',
	\'innerRowTpl\' => \'tplInnerRow\',
	\'innerHereTpl\' => \'tplInnerHere\',
	\'activeParentRowTpl\' => \'tplParentRowActive\',
	\'categoryFoldersTpl\' => \'tplCategoryFolder\',
	\'startItemTpl\' => \'tplStart\'
);
foreach ($wfTemplates as $k => $v) {
	if (isset(${$k})) {
		$scriptProperties[$v] = ${$k};
	}
}

//---

/** @var pdoMenu $pdoMenu */
if (!$modx->loadClass(\'pdotools.pdoMenu\', MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoMenu from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoMenu = new pdoMenu($modx, $scriptProperties);
$pdoMenu->pdoTools->addTime(\'pdoTools loaded\');

$output = !empty($cache) || !$modx->user->id && !empty($cacheAnonymous)
	? $output = $pdoMenu->pdoTools->getCache($scriptProperties)
	: \'\';

if (empty($output)) {
	$rows = $pdoMenu->pdoTools->run();
	$tmp = $pdoMenu->pdoTools->buildTree($rows);
	$tree = array();
	foreach ($tmp as $k => $v) {
		if (empty($v[\'id\'])) {
			if (!in_array($k, $specified_parents) && !$pdoMenu->checkResource($k)) {
				continue;
			}
			else {
				$tree = array_merge($tree, $v[\'children\']);
			}
		}
		else {
			$tree[$k] = $v;
		}
	}

	$output = $pdoMenu->templateTree($tree);
	if (!empty($cache) || !$modx->user->id && !empty($cacheAnonymous)) {
		$pdoMenu->pdoTools->setCache($output, $scriptProperties);
	}
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$output .= \'<pre class="pdoMenuLog">\' . print_r($pdoMenu->pdoTools->getTime(), 1) . \'</pre>\';
}

if (!empty($toPlaceholder)) {
	$modx->setPlaceholder($toPlaceholder, $output);
}
else {
	return $output;
}',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'getResources' => 
      array (
        'fields' => 
        array (
          'id' => 25,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'getResources',
          'description' => '<strong>1.6.1-pl</strong> A general purpose Resource listing and summarization snippet for MODX Revolution',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '/**
 * getResources
 *
 * A general purpose Resource listing and summarization snippet for MODX 2.x.
 *
 * @author Jason Coward
 * @copyright Copyright 2010-2013, Jason Coward
 *
 * TEMPLATES
 *
 * tpl - Name of a chunk serving as a resource template
 * [NOTE: if not provided, properties are dumped to output for each resource]
 *
 * tplOdd - (Opt) Name of a chunk serving as resource template for resources with an odd idx value
 * (see idx property)
 * tplFirst - (Opt) Name of a chunk serving as resource template for the first resource (see first
 * property)
 * tplLast - (Opt) Name of a chunk serving as resource template for the last resource (see last
 * property)
 * tpl_{n} - (Opt) Name of a chunk serving as resource template for the nth resource
 *
 * tplCondition - (Opt) Defines a field of the resource to evaluate against keys defined in the
 * conditionalTpls property. Must be a resource field; does not work with Template Variables.
 * conditionalTpls - (Opt) A JSON object defining a map of field values and the associated tpl to
 * use when the field defined by tplCondition matches the value. [NOTE: tplOdd, tplFirst, tplLast,
 * and tpl_{n} will take precedence over any defined conditionalTpls]
 *
 * tplWrapper - (Opt) Name of a chunk serving as a wrapper template for the output
 * [NOTE: Does not work with toSeparatePlaceholders]
 *
 * SELECTION
 *
 * parents - Comma-delimited list of ids serving as parents
 *
 * context - (Opt) Comma-delimited list of context keys to limit results by; if empty, contexts for all specified
 * parents will be used (all contexts if 0 is specified) [default=]
 *
 * depth - (Opt) Integer value indicating depth to search for resources from each parent [default=10]
 *
 * tvFilters - (Opt) Delimited-list of TemplateVar values to filter resources by. Supports two
 * delimiters and two value search formats. The first delimiter || represents a logical OR and the
 * primary grouping mechanism.  Within each group you can provide a comma-delimited list of values.
 * These values can be either tied to a specific TemplateVar by name, e.g. myTV==value, or just the
 * value, indicating you are searching for the value in any TemplateVar tied to the Resource. An
 * example would be &tvFilters=`filter2==one,filter1==bar%||filter1==foo`
 * [NOTE: filtering by values uses a LIKE query and % is considered a wildcard.]
 * [NOTE: this only looks at the raw value set for specific Resource, i. e. there must be a value
 * specifically set for the Resource and it is not evaluated.]
 *
 * tvFiltersAndDelimiter - (Opt) Custom delimiter for logical AND, default \',\', in case you want to
 * match a literal comma in the tvFilters. E.g. &tvFiltersAndDelimiter=`&&`
 * &tvFilters=`filter1==foo,bar&&filter2==baz` [default=,]
 *
 * tvFiltersOrDelimiter - (Opt) Custom delimiter for logical OR, default \'||\', in case you want to
 * match a literal \'||\' in the tvFilters. E.g. &tvFiltersOrDelimiter=`|OR|`
 * &tvFilters=`filter1==foo||bar|OR|filter2==baz` [default=||]
 *
 * where - (Opt) A JSON expression of criteria to build any additional where clauses from. An example would be
 * &where=`{{"alias:LIKE":"foo%", "OR:alias:LIKE":"%bar"},{"OR:pagetitle:=":"foobar", "AND:description:=":"raboof"}}`
 *
 * sortby - (Opt) Field to sort by or a JSON array, e.g. {"publishedon":"ASC","createdon":"DESC"} [default=publishedon]
 * sortbyTV - (opt) A Template Variable name to sort by (if supplied, this precedes the sortby value) [default=]
 * sortbyTVType - (Opt) A data type to CAST a TV Value to in order to sort on it properly [default=string]
 * sortbyAlias - (Opt) Query alias for sortby field [default=]
 * sortbyEscaped - (Opt) Escapes the field name(s) specified in sortby [default=0]
 * sortdir - (Opt) Order which to sort by [default=DESC]
 * sortdirTV - (Opt) Order which to sort by a TV [default=DESC]
 * limit - (Opt) Limits the number of resources returned [default=5]
 * offset - (Opt) An offset of resources returned by the criteria to skip [default=0]
 * dbCacheFlag - (Opt) Controls caching of db queries; 0|false = do not cache result set; 1 = cache result set
 * according to cache settings, any other integer value = number of seconds to cache result set [default=0]
 *
 * OPTIONS
 *
 * includeContent - (Opt) Indicates if the content of each resource should be returned in the
 * results [default=0]
 * includeTVs - (Opt) Indicates if TemplateVar values should be included in the properties available
 * to each resource template [default=0]
 * includeTVList - (Opt) Limits the TemplateVars that are included if includeTVs is true to those specified
 * by name in a comma-delimited list [default=]
 * prepareTVs - (Opt) Prepares media-source dependent TemplateVar values [default=1]
 * prepareTVList - (Opt) Limits the TVs that are prepared to those specified by name in a comma-delimited
 * list [default=]
 * processTVs - (Opt) Indicates if TemplateVar values should be rendered as they would on the
 * resource being summarized [default=0]
 * processTVList - (opt) Limits the TemplateVars that are processed if included to those specified
 * by name in a comma-delimited list [default=]
 * tvPrefix - (Opt) The prefix for TemplateVar properties [default=tv.]
 * idx - (Opt) You can define the starting idx of the resources, which is an property that is
 * incremented as each resource is rendered [default=1]
 * first - (Opt) Define the idx which represents the first resource (see tplFirst) [default=1]
 * last - (Opt) Define the idx which represents the last resource (see tplLast) [default=# of
 * resources being summarized + first - 1]
 * outputSeparator - (Opt) An optional string to separate each tpl instance [default="\\n"]
 * wrapIfEmpty - (Opt) Indicates if the tplWrapper should be applied if the output is empty [default=0]
 *
 */
$output = array();
$outputSeparator = isset($outputSeparator) ? $outputSeparator : "\\n";

/* set default properties */
$tpl = !empty($tpl) ? $tpl : \'\';
$includeContent = !empty($includeContent) ? true : false;
$includeTVs = !empty($includeTVs) ? true : false;
$includeTVList = !empty($includeTVList) ? explode(\',\', $includeTVList) : array();
$processTVs = !empty($processTVs) ? true : false;
$processTVList = !empty($processTVList) ? explode(\',\', $processTVList) : array();
$prepareTVs = !empty($prepareTVs) ? true : false;
$prepareTVList = !empty($prepareTVList) ? explode(\',\', $prepareTVList) : array();
$tvPrefix = isset($tvPrefix) ? $tvPrefix : \'tv.\';
$parents = (!empty($parents) || $parents === \'0\') ? explode(\',\', $parents) : array($modx->resource->get(\'id\'));
array_walk($parents, \'trim\');
$parents = array_unique($parents);
$depth = isset($depth) ? (integer) $depth : 10;

$tvFiltersOrDelimiter = isset($tvFiltersOrDelimiter) ? $tvFiltersOrDelimiter : \'||\';
$tvFiltersAndDelimiter = isset($tvFiltersAndDelimiter) ? $tvFiltersAndDelimiter : \',\';
$tvFilters = !empty($tvFilters) ? explode($tvFiltersOrDelimiter, $tvFilters) : array();

$where = !empty($where) ? $modx->fromJSON($where) : array();
$showUnpublished = !empty($showUnpublished) ? true : false;
$showDeleted = !empty($showDeleted) ? true : false;

$sortby = isset($sortby) ? $sortby : \'publishedon\';
$sortbyTV = isset($sortbyTV) ? $sortbyTV : \'\';
$sortbyAlias = isset($sortbyAlias) ? $sortbyAlias : \'modResource\';
$sortbyEscaped = !empty($sortbyEscaped) ? true : false;
$sortdir = isset($sortdir) ? $sortdir : \'DESC\';
$sortdirTV = isset($sortdirTV) ? $sortdirTV : \'DESC\';
$limit = isset($limit) ? (integer) $limit : 5;
$offset = isset($offset) ? (integer) $offset : 0;
$totalVar = !empty($totalVar) ? $totalVar : \'total\';

$dbCacheFlag = !isset($dbCacheFlag) ? false : $dbCacheFlag;
if (is_string($dbCacheFlag) || is_numeric($dbCacheFlag)) {
    if ($dbCacheFlag == \'0\') {
        $dbCacheFlag = false;
    } elseif ($dbCacheFlag == \'1\') {
        $dbCacheFlag = true;
    } else {
        $dbCacheFlag = (integer) $dbCacheFlag;
    }
}

/* multiple context support */
$contextArray = array();
$contextSpecified = false;
if (!empty($context)) {
    $contextArray = explode(\',\',$context);
    array_walk($contextArray, \'trim\');
    $contexts = array();
    foreach ($contextArray as $ctx) {
        $contexts[] = $modx->quote($ctx);
    }
    $context = implode(\',\',$contexts);
    $contextSpecified = true;
    unset($contexts,$ctx);
} else {
    $context = $modx->quote($modx->context->get(\'key\'));
}

$pcMap = array();
$pcQuery = $modx->newQuery(\'modResource\', array(\'id:IN\' => $parents), $dbCacheFlag);
$pcQuery->select(array(\'id\', \'context_key\'));
if ($pcQuery->prepare() && $pcQuery->stmt->execute()) {
    foreach ($pcQuery->stmt->fetchAll(PDO::FETCH_ASSOC) as $pcRow) {
        $pcMap[(integer) $pcRow[\'id\']] = $pcRow[\'context_key\'];
    }
}

$children = array();
$parentArray = array();
foreach ($parents as $parent) {
    $parent = (integer) $parent;
    if ($parent === 0) {
        $pchildren = array();
        if ($contextSpecified) {
            foreach ($contextArray as $pCtx) {
                if (!in_array($pCtx, $contextArray)) {
                    continue;
                }
                $options = $pCtx !== $modx->context->get(\'key\') ? array(\'context\' => $pCtx) : array();
                $pcchildren = $modx->getChildIds($parent, $depth, $options);
                if (!empty($pcchildren)) $pchildren = array_merge($pchildren, $pcchildren);
            }
        } else {
            $cQuery = $modx->newQuery(\'modContext\', array(\'key:!=\' => \'mgr\'));
            $cQuery->select(array(\'key\'));
            if ($cQuery->prepare() && $cQuery->stmt->execute()) {
                foreach ($cQuery->stmt->fetchAll(PDO::FETCH_COLUMN) as $pCtx) {
                    $options = $pCtx !== $modx->context->get(\'key\') ? array(\'context\' => $pCtx) : array();
                    $pcchildren = $modx->getChildIds($parent, $depth, $options);
                    if (!empty($pcchildren)) $pchildren = array_merge($pchildren, $pcchildren);
                }
            }
        }
        $parentArray[] = $parent;
    } else {
        $pContext = array_key_exists($parent, $pcMap) ? $pcMap[$parent] : false;
        if ($debug) $modx->log(modX::LOG_LEVEL_ERROR, "context for {$parent} is {$pContext}");
        if ($pContext && $contextSpecified && !in_array($pContext, $contextArray, true)) {
            $parent = next($parents);
            continue;
        }
        $parentArray[] = $parent;
        $options = !empty($pContext) && $pContext !== $modx->context->get(\'key\') ? array(\'context\' => $pContext) : array();
        $pchildren = $modx->getChildIds($parent, $depth, $options);
    }
    if (!empty($pchildren)) $children = array_merge($children, $pchildren);
    $parent = next($parents);
}
$parents = array_merge($parentArray, $children);

/* build query */
$criteria = array("modResource.parent IN (" . implode(\',\', $parents) . ")");
if ($contextSpecified) {
    $contextResourceTbl = $modx->getTableName(\'modContextResource\');
    $criteria[] = "(modResource.context_key IN ({$context}) OR EXISTS(SELECT 1 FROM {$contextResourceTbl} ctx WHERE ctx.resource = modResource.id AND ctx.context_key IN ({$context})))";
}
if (empty($showDeleted)) {
    $criteria[\'deleted\'] = \'0\';
}
if (empty($showUnpublished)) {
    $criteria[\'published\'] = \'1\';
}
if (empty($showHidden)) {
    $criteria[\'hidemenu\'] = \'0\';
}
if (!empty($hideContainers)) {
    $criteria[\'isfolder\'] = \'0\';
}
$criteria = $modx->newQuery(\'modResource\', $criteria);
if (!empty($tvFilters)) {
    $tmplVarTbl = $modx->getTableName(\'modTemplateVar\');
    $tmplVarResourceTbl = $modx->getTableName(\'modTemplateVarResource\');
    $conditions = array();
    $operators = array(
        \'<=>\' => \'<=>\',
        \'===\' => \'=\',
        \'!==\' => \'!=\',
        \'<>\' => \'<>\',
        \'==\' => \'LIKE\',
        \'!=\' => \'NOT LIKE\',
        \'<<\' => \'<\',
        \'<=\' => \'<=\',
        \'=<\' => \'=<\',
        \'>>\' => \'>\',
        \'>=\' => \'>=\',
        \'=>\' => \'=>\'
    );
    foreach ($tvFilters as $fGroup => $tvFilter) {
        $filterGroup = array();
        $filters = explode($tvFiltersAndDelimiter, $tvFilter);
        $multiple = count($filters) > 0;
        foreach ($filters as $filter) {
            $operator = \'==\';
            $sqlOperator = \'LIKE\';
            foreach ($operators as $op => $opSymbol) {
                if (strpos($filter, $op, 1) !== false) {
                    $operator = $op;
                    $sqlOperator = $opSymbol;
                    break;
                }
            }
            $tvValueField = \'tvr.value\';
            $tvDefaultField = \'tv.default_text\';
            $f = explode($operator, $filter);
            if (count($f) >= 2) {
                if (count($f) > 2) {
                    $k = array_shift($f);
                    $b = join($operator, $f);
                    $f = array($k, $b);
                }
                $tvName = $modx->quote($f[0]);
                if (is_numeric($f[1]) && !in_array($sqlOperator, array(\'LIKE\', \'NOT LIKE\'))) {
                    $tvValue = $f[1];
                    if ($f[1] == (integer)$f[1]) {
                        $tvValueField = "CAST({$tvValueField} AS SIGNED INTEGER)";
                        $tvDefaultField = "CAST({$tvDefaultField} AS SIGNED INTEGER)";
                    } else {
                        $tvValueField = "CAST({$tvValueField} AS DECIMAL)";
                        $tvDefaultField = "CAST({$tvDefaultField} AS DECIMAL)";
                    }
                } else {
                    $tvValue = $modx->quote($f[1]);
                }
                if ($multiple) {
                    $filterGroup[] =
                        "(EXISTS (SELECT 1 FROM {$tmplVarResourceTbl} tvr JOIN {$tmplVarTbl} tv ON {$tvValueField} {$sqlOperator} {$tvValue} AND tv.name = {$tvName} AND tv.id = tvr.tmplvarid WHERE tvr.contentid = modResource.id) " .
                        "OR EXISTS (SELECT 1 FROM {$tmplVarTbl} tv WHERE tv.name = {$tvName} AND {$tvDefaultField} {$sqlOperator} {$tvValue} AND tv.id NOT IN (SELECT tmplvarid FROM {$tmplVarResourceTbl} WHERE contentid = modResource.id)) " .
                        ")";
                } else {
                    $filterGroup =
                        "(EXISTS (SELECT 1 FROM {$tmplVarResourceTbl} tvr JOIN {$tmplVarTbl} tv ON {$tvValueField} {$sqlOperator} {$tvValue} AND tv.name = {$tvName} AND tv.id = tvr.tmplvarid WHERE tvr.contentid = modResource.id) " .
                        "OR EXISTS (SELECT 1 FROM {$tmplVarTbl} tv WHERE tv.name = {$tvName} AND {$tvDefaultField} {$sqlOperator} {$tvValue} AND tv.id NOT IN (SELECT tmplvarid FROM {$tmplVarResourceTbl} WHERE contentid = modResource.id)) " .
                        ")";
                }
            } elseif (count($f) == 1) {
                $tvValue = $modx->quote($f[0]);
                if ($multiple) {
                    $filterGroup[] = "EXISTS (SELECT 1 FROM {$tmplVarResourceTbl} tvr JOIN {$tmplVarTbl} tv ON {$tvValueField} {$sqlOperator} {$tvValue} AND tv.id = tvr.tmplvarid WHERE tvr.contentid = modResource.id)";
                } else {
                    $filterGroup = "EXISTS (SELECT 1 FROM {$tmplVarResourceTbl} tvr JOIN {$tmplVarTbl} tv ON {$tvValueField} {$sqlOperator} {$tvValue} AND tv.id = tvr.tmplvarid WHERE tvr.contentid = modResource.id)";
                }
            }
        }
        $conditions[] = $filterGroup;
    }
    if (!empty($conditions)) {
        $firstGroup = true;
        foreach ($conditions as $cGroup => $c) {
            if (is_array($c)) {
                $first = true;
                foreach ($c as $cond) {
                    if ($first && !$firstGroup) {
                        $criteria->condition($criteria->query[\'where\'][0][1], $cond, xPDOQuery::SQL_OR, null, $cGroup);
                    } else {
                        $criteria->condition($criteria->query[\'where\'][0][1], $cond, xPDOQuery::SQL_AND, null, $cGroup);
                    }
                    $first = false;
                }
            } else {
                $criteria->condition($criteria->query[\'where\'][0][1], $c, $firstGroup ? xPDOQuery::SQL_AND : xPDOQuery::SQL_OR, null, $cGroup);
            }
            $firstGroup = false;
        }
    }
}
/* include/exclude resources, via &resources=`123,-456` prop */
if (!empty($resources)) {
    $resourceConditions = array();
    $resources = explode(\',\',$resources);
    $include = array();
    $exclude = array();
    foreach ($resources as $resource) {
        $resource = (int)$resource;
        if ($resource == 0) continue;
        if ($resource < 0) {
            $exclude[] = abs($resource);
        } else {
            $include[] = $resource;
        }
    }
    if (!empty($include)) {
        $criteria->where(array(\'OR:modResource.id:IN\' => $include), xPDOQuery::SQL_OR);
    }
    if (!empty($exclude)) {
        $criteria->where(array(\'modResource.id:NOT IN\' => $exclude), xPDOQuery::SQL_AND, null, 1);
    }
}
if (!empty($where)) {
    $criteria->where($where);
}

$total = $modx->getCount(\'modResource\', $criteria);
$modx->setPlaceholder($totalVar, $total);

$fields = array_keys($modx->getFields(\'modResource\'));
if (empty($includeContent)) {
    $fields = array_diff($fields, array(\'content\'));
}
$columns = $includeContent ? $modx->getSelectColumns(\'modResource\', \'modResource\') : $modx->getSelectColumns(\'modResource\', \'modResource\', \'\', array(\'content\'), true);
$criteria->select($columns);
if (!empty($sortbyTV)) {
    $criteria->leftJoin(\'modTemplateVar\', \'tvDefault\', array(
        "tvDefault.name" => $sortbyTV
    ));
    $criteria->leftJoin(\'modTemplateVarResource\', \'tvSort\', array(
        "tvSort.contentid = modResource.id",
        "tvSort.tmplvarid = tvDefault.id"
    ));
    if (empty($sortbyTVType)) $sortbyTVType = \'string\';
    if ($modx->getOption(\'dbtype\') === \'mysql\') {
        switch ($sortbyTVType) {
            case \'integer\':
                $criteria->select("CAST(IFNULL(tvSort.value, tvDefault.default_text) AS SIGNED INTEGER) AS sortTV");
                break;
            case \'decimal\':
                $criteria->select("CAST(IFNULL(tvSort.value, tvDefault.default_text) AS DECIMAL) AS sortTV");
                break;
            case \'datetime\':
                $criteria->select("CAST(IFNULL(tvSort.value, tvDefault.default_text) AS DATETIME) AS sortTV");
                break;
            case \'string\':
            default:
                $criteria->select("IFNULL(tvSort.value, tvDefault.default_text) AS sortTV");
                break;
        }
    } elseif ($modx->getOption(\'dbtype\') === \'sqlsrv\') {
        switch ($sortbyTVType) {
            case \'integer\':
                $criteria->select("CAST(ISNULL(tvSort.value, tvDefault.default_text) AS BIGINT) AS sortTV");
                break;
            case \'decimal\':
                $criteria->select("CAST(ISNULL(tvSort.value, tvDefault.default_text) AS DECIMAL) AS sortTV");
                break;
            case \'datetime\':
                $criteria->select("CAST(ISNULL(tvSort.value, tvDefault.default_text) AS DATETIME) AS sortTV");
                break;
            case \'string\':
            default:
                $criteria->select("ISNULL(tvSort.value, tvDefault.default_text) AS sortTV");
                break;
        }
    }
    $criteria->sortby("sortTV", $sortdirTV);
}
if (!empty($sortby)) {
    if (strpos($sortby, \'{\') === 0) {
        $sorts = $modx->fromJSON($sortby);
    } else {
        $sorts = array($sortby => $sortdir);
    }
    if (is_array($sorts)) {
        while (list($sort, $dir) = each($sorts)) {
            if ($sortbyEscaped) $sort = $modx->escape($sort);
            if (!empty($sortbyAlias)) $sort = $modx->escape($sortbyAlias) . ".{$sort}";
            $criteria->sortby($sort, $dir);
        }
    }
}
if (!empty($limit)) $criteria->limit($limit, $offset);

if (!empty($debug)) {
    $criteria->prepare();
    $modx->log(modX::LOG_LEVEL_ERROR, $criteria->toSQL());
}
$collection = $modx->getCollection(\'modResource\', $criteria, $dbCacheFlag);

$idx = !empty($idx) || $idx === \'0\' ? (integer) $idx : 1;
$first = empty($first) && $first !== \'0\' ? 1 : (integer) $first;
$last = empty($last) ? (count($collection) + $idx - 1) : (integer) $last;

/* include parseTpl */
include_once $modx->getOption(\'getresources.core_path\',null,$modx->getOption(\'core_path\').\'components/getresources/\').\'include.parsetpl.php\';

$templateVars = array();
if (!empty($includeTVs) && !empty($includeTVList)) {
    $templateVars = $modx->getCollection(\'modTemplateVar\', array(\'name:IN\' => $includeTVList));
}
/** @var modResource $resource */
foreach ($collection as $resourceId => $resource) {
    $tvs = array();
    if (!empty($includeTVs)) {
        if (empty($includeTVList)) {
            $templateVars = $resource->getMany(\'TemplateVars\');
        }
        /** @var modTemplateVar $templateVar */
        foreach ($templateVars as $tvId => $templateVar) {
            if (!empty($includeTVList) && !in_array($templateVar->get(\'name\'), $includeTVList)) continue;
            if ($processTVs && (empty($processTVList) || in_array($templateVar->get(\'name\'), $processTVList))) {
                $tvs[$tvPrefix . $templateVar->get(\'name\')] = $templateVar->renderOutput($resource->get(\'id\'));
            } else {
                $value = $templateVar->getValue($resource->get(\'id\'));
                if ($prepareTVs && method_exists($templateVar, \'prepareOutput\') && (empty($prepareTVList) || in_array($templateVar->get(\'name\'), $prepareTVList))) {
                    $value = $templateVar->prepareOutput($value);
                }
                $tvs[$tvPrefix . $templateVar->get(\'name\')] = $value;
            }
        }
    }
    $odd = ($idx & 1);
    $properties = array_merge(
        $scriptProperties
        ,array(
            \'idx\' => $idx
            ,\'first\' => $first
            ,\'last\' => $last
            ,\'odd\' => $odd
        )
        ,$includeContent ? $resource->toArray() : $resource->get($fields)
        ,$tvs
    );
    $resourceTpl = false;
    if ($idx == $first && !empty($tplFirst)) {
        $resourceTpl = parseTpl($tplFirst, $properties);
    }
    if ($idx == $last && empty($resourceTpl) && !empty($tplLast)) {
        $resourceTpl = parseTpl($tplLast, $properties);
    }
    $tplidx = \'tpl_\' . $idx;
    if (empty($resourceTpl) && !empty($$tplidx)) {
        $resourceTpl = parseTpl($$tplidx, $properties);
    }
    if ($idx > 1 && empty($resourceTpl)) {
        $divisors = getDivisors($idx);
        if (!empty($divisors)) {
            foreach ($divisors as $divisor) {
                $tplnth = \'tpl_n\' . $divisor;
                if (!empty($$tplnth)) {
                    $resourceTpl = parseTpl($$tplnth, $properties);
                    if (!empty($resourceTpl)) {
                        break;
                    }
                }
            }
        }
    }
    if ($odd && empty($resourceTpl) && !empty($tplOdd)) {
        $resourceTpl = parseTpl($tplOdd, $properties);
    }
    if (!empty($tplCondition) && !empty($conditionalTpls) && empty($resourceTpl)) {
        $conTpls = $modx->fromJSON($conditionalTpls);
        $subject = $properties[$tplCondition];
        $tplOperator = !empty($tplOperator) ? $tplOperator : \'=\';
        $tplOperator = strtolower($tplOperator);
        $tplCon = \'\';
        foreach ($conTpls as $operand => $conditionalTpl) {
            switch ($tplOperator) {
                case \'!=\':
                case \'neq\':
                case \'not\':
                case \'isnot\':
                case \'isnt\':
                case \'unequal\':
                case \'notequal\':
                    $tplCon = (($subject != $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'<\':
                case \'lt\':
                case \'less\':
                case \'lessthan\':
                    $tplCon = (($subject < $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'>\':
                case \'gt\':
                case \'greater\':
                case \'greaterthan\':
                    $tplCon = (($subject > $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'<=\':
                case \'lte\':
                case \'lessthanequals\':
                case \'lessthanorequalto\':
                    $tplCon = (($subject <= $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'>=\':
                case \'gte\':
                case \'greaterthanequals\':
                case \'greaterthanequalto\':
                    $tplCon = (($subject >= $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'isempty\':
                case \'empty\':
                    $tplCon = empty($subject) ? $conditionalTpl : $tplCon;
                    break;
                case \'!empty\':
                case \'notempty\':
                case \'isnotempty\':
                    $tplCon = !empty($subject) && $subject != \'\' ? $conditionalTpl : $tplCon;
                    break;
                case \'isnull\':
                case \'null\':
                    $tplCon = $subject == null || strtolower($subject) == \'null\' ? $conditionalTpl : $tplCon;
                    break;
                case \'inarray\':
                case \'in_array\':
                case \'ia\':
                    $operand = explode(\',\', $operand);
                    $tplCon = in_array($subject, $operand) ? $conditionalTpl : $tplCon;
                    break;
                case \'between\':
                case \'range\':
                case \'>=<\':
                case \'><\':
                    $operand = explode(\',\', $operand);
                    $tplCon = ($subject >= min($operand) && $subject <= max($operand)) ? $conditionalTpl : $tplCon;
                    break;
                case \'==\':
                case \'=\':
                case \'eq\':
                case \'is\':
                case \'equal\':
                case \'equals\':
                case \'equalto\':
                default:
                    $tplCon = (($subject == $operand) ? $conditionalTpl : $tplCon);
                    break;
            }
        }
        if (!empty($tplCon)) {
            $resourceTpl = parseTpl($tplCon, $properties);
        }
    }
    if (!empty($tpl) && empty($resourceTpl)) {
        $resourceTpl = parseTpl($tpl, $properties);
    }
    if ($resourceTpl === false && !empty($debug)) {
        $chunk = $modx->newObject(\'modChunk\');
        $chunk->setCacheable(false);
        $output[]= $chunk->process(array(), \'<pre>\' . print_r($properties, true) .\'</pre>\');
    } else {
        $output[]= $resourceTpl;
    }
    $idx++;
}

/* output */
$toSeparatePlaceholders = $modx->getOption(\'toSeparatePlaceholders\', $scriptProperties, false);
if (!empty($toSeparatePlaceholders)) {
    $modx->setPlaceholders($output, $toSeparatePlaceholders);
    return \'\';
}

$output = implode($outputSeparator, $output);

$tplWrapper = $modx->getOption(\'tplWrapper\', $scriptProperties, false);
$wrapIfEmpty = $modx->getOption(\'wrapIfEmpty\', $scriptProperties, false);
if (!empty($tplWrapper) && ($wrapIfEmpty || !empty($output))) {
    $output = parseTpl($tplWrapper, array_merge($scriptProperties, array(\'output\' => $output)));
}

$toPlaceholder = $modx->getOption(\'toPlaceholder\', $scriptProperties, false);
if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
    return \'\';
}
return $output;',
          'locked' => false,
          'properties' => 
          array (
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'Name of a chunk serving as a resource template. NOTE: if not provided, properties are dumped to output for each resource.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as a resource template. NOTE: if not provided, properties are dumped to output for each resource.',
              'area_trans' => '',
            ),
            'tplOdd' => 
            array (
              'name' => 'tplOdd',
              'desc' => 'Name of a chunk serving as resource template for resources with an odd idx value (see idx property).',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as resource template for resources with an odd idx value (see idx property).',
              'area_trans' => '',
            ),
            'tplFirst' => 
            array (
              'name' => 'tplFirst',
              'desc' => 'Name of a chunk serving as resource template for the first resource (see first property).',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as resource template for the first resource (see first property).',
              'area_trans' => '',
            ),
            'tplLast' => 
            array (
              'name' => 'tplLast',
              'desc' => 'Name of a chunk serving as resource template for the last resource (see last property).',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as resource template for the last resource (see last property).',
              'area_trans' => '',
            ),
            'tplWrapper' => 
            array (
              'name' => 'tplWrapper',
              'desc' => 'Name of a chunk serving as wrapper template for the Snippet output. This does not work with toSeparatePlaceholders.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as wrapper template for the Snippet output. This does not work with toSeparatePlaceholders.',
              'area_trans' => '',
            ),
            'wrapIfEmpty' => 
            array (
              'name' => 'wrapIfEmpty',
              'desc' => 'Indicates if empty output should be wrapped by the tplWrapper, if specified. Defaults to false.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Indicates if empty output should be wrapped by the tplWrapper, if specified. Defaults to false.',
              'area_trans' => '',
            ),
            'sortby' => 
            array (
              'name' => 'sortby',
              'desc' => 'A field name to sort by or JSON object of field names and sortdir for each field, e.g. {"publishedon":"ASC","createdon":"DESC"}. Defaults to publishedon.',
              'type' => 'textfield',
              'options' => '',
              'value' => 'publishedon',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'A field name to sort by or JSON object of field names and sortdir for each field, e.g. {"publishedon":"ASC","createdon":"DESC"}. Defaults to publishedon.',
              'area_trans' => '',
            ),
            'sortbyTV' => 
            array (
              'name' => 'sortbyTV',
              'desc' => 'Name of a Template Variable to sort by. Defaults to empty string.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Name of a Template Variable to sort by. Defaults to empty string.',
              'area_trans' => '',
            ),
            'sortbyTVType' => 
            array (
              'name' => 'sortbyTVType',
              'desc' => 'An optional type to indicate how to sort on the Template Variable value.',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'string',
                  'value' => 'string',
                  'name' => 'string',
                ),
                1 => 
                array (
                  'text' => 'integer',
                  'value' => 'integer',
                  'name' => 'integer',
                ),
                2 => 
                array (
                  'text' => 'decimal',
                  'value' => 'decimal',
                  'name' => 'decimal',
                ),
                3 => 
                array (
                  'text' => 'datetime',
                  'value' => 'datetime',
                  'name' => 'datetime',
                ),
              ),
              'value' => 'string',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'An optional type to indicate how to sort on the Template Variable value.',
              'area_trans' => '',
            ),
            'sortbyAlias' => 
            array (
              'name' => 'sortbyAlias',
              'desc' => 'Query alias for sortby field. Defaults to an empty string.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Query alias for sortby field. Defaults to an empty string.',
              'area_trans' => '',
            ),
            'sortbyEscaped' => 
            array (
              'name' => 'sortbyEscaped',
              'desc' => 'Determines if the field name specified in sortby should be escaped. Defaults to 0.',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Determines if the field name specified in sortby should be escaped. Defaults to 0.',
              'area_trans' => '',
            ),
            'sortdir' => 
            array (
              'name' => 'sortdir',
              'desc' => 'Order which to sort by. Defaults to DESC.',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'ASC',
                  'value' => 'ASC',
                  'name' => 'ASC',
                ),
                1 => 
                array (
                  'text' => 'DESC',
                  'value' => 'DESC',
                  'name' => 'DESC',
                ),
              ),
              'value' => 'DESC',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Order which to sort by. Defaults to DESC.',
              'area_trans' => '',
            ),
            'sortdirTV' => 
            array (
              'name' => 'sortdirTV',
              'desc' => 'Order which to sort a Template Variable by. Defaults to DESC.',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'ASC',
                  'value' => 'ASC',
                  'name' => 'ASC',
                ),
                1 => 
                array (
                  'text' => 'DESC',
                  'value' => 'DESC',
                  'name' => 'DESC',
                ),
              ),
              'value' => 'DESC',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Order which to sort a Template Variable by. Defaults to DESC.',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'Limits the number of resources returned. Defaults to 5.',
              'type' => 'textfield',
              'options' => '',
              'value' => '5',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Limits the number of resources returned. Defaults to 5.',
              'area_trans' => '',
            ),
            'offset' => 
            array (
              'name' => 'offset',
              'desc' => 'An offset of resources returned by the criteria to skip.',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'An offset of resources returned by the criteria to skip.',
              'area_trans' => '',
            ),
            'tvFilters' => 
            array (
              'name' => 'tvFilters',
              'desc' => 'Delimited-list of TemplateVar values to filter resources by. Supports two delimiters and two value search formats. THe first delimiter || represents a logical OR and the primary grouping mechanism.  Within each group you can provide a comma-delimited list of values. These values can be either tied to a specific TemplateVar by name, e.g. myTV==value, or just the value, indicating you are searching for the value in any TemplateVar tied to the Resource. An example would be &tvFilters=`filter2==one,filter1==bar%||filter1==foo`. <br />NOTE: filtering by values uses a LIKE query and % is considered a wildcard. <br />ANOTHER NOTE: This only looks at the raw value set for specific Resource, i. e. there must be a value specifically set for the Resource and it is not evaluated.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Delimited-list of TemplateVar values to filter resources by. Supports two delimiters and two value search formats. THe first delimiter || represents a logical OR and the primary grouping mechanism.  Within each group you can provide a comma-delimited list of values. These values can be either tied to a specific TemplateVar by name, e.g. myTV==value, or just the value, indicating you are searching for the value in any TemplateVar tied to the Resource. An example would be &tvFilters=`filter2==one,filter1==bar%||filter1==foo`. <br />NOTE: filtering by values uses a LIKE query and % is considered a wildcard. <br />ANOTHER NOTE: This only looks at the raw value set for specific Resource, i. e. there must be a value specifically set for the Resource and it is not evaluated.',
              'area_trans' => '',
            ),
            'tvFiltersAndDelimiter' => 
            array (
              'name' => 'tvFiltersAndDelimiter',
              'desc' => 'The delimiter to use to separate logical AND expressions in tvFilters. Default is ,',
              'type' => 'textfield',
              'options' => '',
              'value' => ',',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The delimiter to use to separate logical AND expressions in tvFilters. Default is ,',
              'area_trans' => '',
            ),
            'tvFiltersOrDelimiter' => 
            array (
              'name' => 'tvFiltersOrDelimiter',
              'desc' => 'The delimiter to use to separate logical OR expressions in tvFilters. Default is ||',
              'type' => 'textfield',
              'options' => '',
              'value' => '||',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The delimiter to use to separate logical OR expressions in tvFilters. Default is ||',
              'area_trans' => '',
            ),
            'depth' => 
            array (
              'name' => 'depth',
              'desc' => 'Integer value indicating depth to search for resources from each parent. Defaults to 10.',
              'type' => 'textfield',
              'options' => '',
              'value' => '10',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Integer value indicating depth to search for resources from each parent. Defaults to 10.',
              'area_trans' => '',
            ),
            'parents' => 
            array (
              'name' => 'parents',
              'desc' => 'Optional. Comma-delimited list of ids serving as parents.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Optional. Comma-delimited list of ids serving as parents.',
              'area_trans' => '',
            ),
            'includeContent' => 
            array (
              'name' => 'includeContent',
              'desc' => 'Indicates if the content of each resource should be returned in the results. Defaults to false.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Indicates if the content of each resource should be returned in the results. Defaults to false.',
              'area_trans' => '',
            ),
            'includeTVs' => 
            array (
              'name' => 'includeTVs',
              'desc' => 'Indicates if TemplateVar values should be included in the properties available to each resource template. Defaults to false.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Indicates if TemplateVar values should be included in the properties available to each resource template. Defaults to false.',
              'area_trans' => '',
            ),
            'includeTVList' => 
            array (
              'name' => 'includeTVList',
              'desc' => 'Limits included TVs to those specified as a comma-delimited list of TV names. Defaults to empty.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Limits included TVs to those specified as a comma-delimited list of TV names. Defaults to empty.',
              'area_trans' => '',
            ),
            'showHidden' => 
            array (
              'name' => 'showHidden',
              'desc' => 'Indicates if Resources that are hidden from menus should be shown. Defaults to false.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Indicates if Resources that are hidden from menus should be shown. Defaults to false.',
              'area_trans' => '',
            ),
            'showUnpublished' => 
            array (
              'name' => 'showUnpublished',
              'desc' => 'Indicates if Resources that are unpublished should be shown. Defaults to false.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Indicates if Resources that are unpublished should be shown. Defaults to false.',
              'area_trans' => '',
            ),
            'showDeleted' => 
            array (
              'name' => 'showDeleted',
              'desc' => 'Indicates if Resources that are deleted should be shown. Defaults to false.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Indicates if Resources that are deleted should be shown. Defaults to false.',
              'area_trans' => '',
            ),
            'resources' => 
            array (
              'name' => 'resources',
              'desc' => 'A comma-separated list of resource IDs to exclude or include. IDs with a - in front mean to exclude. Ex: 123,-456 means to include Resource 123, but always exclude Resource 456.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'A comma-separated list of resource IDs to exclude or include. IDs with a - in front mean to exclude. Ex: 123,-456 means to include Resource 123, but always exclude Resource 456.',
              'area_trans' => '',
            ),
            'processTVs' => 
            array (
              'name' => 'processTVs',
              'desc' => 'Indicates if TemplateVar values should be rendered as they would on the resource being summarized. Defaults to false.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Indicates if TemplateVar values should be rendered as they would on the resource being summarized. Defaults to false.',
              'area_trans' => '',
            ),
            'processTVList' => 
            array (
              'name' => 'processTVList',
              'desc' => 'Limits processed TVs to those specified as a comma-delimited list of TV names; note only includedTVs will be available for processing if specified. Defaults to empty.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Limits processed TVs to those specified as a comma-delimited list of TV names; note only includedTVs will be available for processing if specified. Defaults to empty.',
              'area_trans' => '',
            ),
            'prepareTVs' => 
            array (
              'name' => 'prepareTVs',
              'desc' => 'Indicates if TemplateVar values that are not processed fully should be prepared before being returned. Defaults to true.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Indicates if TemplateVar values that are not processed fully should be prepared before being returned. Defaults to true.',
              'area_trans' => '',
            ),
            'prepareTVList' => 
            array (
              'name' => 'prepareTVList',
              'desc' => 'Limits prepared TVs to those specified as a comma-delimited list of TV names; note only includedTVs will be available for preparing if specified. Defaults to empty.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Limits prepared TVs to those specified as a comma-delimited list of TV names; note only includedTVs will be available for preparing if specified. Defaults to empty.',
              'area_trans' => '',
            ),
            'tvPrefix' => 
            array (
              'name' => 'tvPrefix',
              'desc' => 'The prefix for TemplateVar properties. Defaults to: tv.',
              'type' => 'textfield',
              'options' => '',
              'value' => 'tv.',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The prefix for TemplateVar properties. Defaults to: tv.',
              'area_trans' => '',
            ),
            'idx' => 
            array (
              'name' => 'idx',
              'desc' => 'You can define the starting idx of the resources, which is an property that is incremented as each resource is rendered.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'You can define the starting idx of the resources, which is an property that is incremented as each resource is rendered.',
              'area_trans' => '',
            ),
            'first' => 
            array (
              'name' => 'first',
              'desc' => 'Define the idx which represents the first resource (see tplFirst). Defaults to 1.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Define the idx which represents the first resource (see tplFirst). Defaults to 1.',
              'area_trans' => '',
            ),
            'last' => 
            array (
              'name' => 'last',
              'desc' => 'Define the idx which represents the last resource (see tplLast). Defaults to the number of resources being summarized + first - 1',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Define the idx which represents the last resource (see tplLast). Defaults to the number of resources being summarized + first - 1',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'If set, will assign the result to this placeholder instead of outputting it directly.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'If set, will assign the result to this placeholder instead of outputting it directly.',
              'area_trans' => '',
            ),
            'toSeparatePlaceholders' => 
            array (
              'name' => 'toSeparatePlaceholders',
              'desc' => 'If set, will assign EACH result to a separate placeholder named by this param suffixed with a sequential number (starting from 0).',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'If set, will assign EACH result to a separate placeholder named by this param suffixed with a sequential number (starting from 0).',
              'area_trans' => '',
            ),
            'debug' => 
            array (
              'name' => 'debug',
              'desc' => 'If true, will send the SQL query to the MODX log. Defaults to false.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'If true, will send the SQL query to the MODX log. Defaults to false.',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'A JSON expression of criteria to build any additional where clauses from, e.g. &where=`{{"alias:LIKE":"foo%", "OR:alias:LIKE":"%bar"},{"OR:pagetitle:=":"foobar", "AND:description:=":"raboof"}}`',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'A JSON expression of criteria to build any additional where clauses from, e.g. &where=`{{"alias:LIKE":"foo%", "OR:alias:LIKE":"%bar"},{"OR:pagetitle:=":"foobar", "AND:description:=":"raboof"}}`',
              'area_trans' => '',
            ),
            'dbCacheFlag' => 
            array (
              'name' => 'dbCacheFlag',
              'desc' => 'Determines how result sets are cached if cache_db is enabled in MODX. 0|false = do not cache result set; 1 = cache result set according to cache settings, any other integer value = number of seconds to cache result set',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Determines how result sets are cached if cache_db is enabled in MODX. 0|false = do not cache result set; 1 = cache result set according to cache settings, any other integer value = number of seconds to cache result set',
              'area_trans' => '',
            ),
            'context' => 
            array (
              'name' => 'context',
              'desc' => 'A comma-delimited list of context keys for limiting results. Default is empty, i.e. do not limit results by context.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'A comma-delimited list of context keys for limiting results. Default is empty, i.e. do not limit results by context.',
              'area_trans' => '',
            ),
            'tplCondition' => 
            array (
              'name' => 'tplCondition',
              'desc' => 'A condition to compare against the conditionalTpls property to map Resources to different tpls based on custom conditional logic.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'A condition to compare against the conditionalTpls property to map Resources to different tpls based on custom conditional logic.',
              'area_trans' => '',
            ),
            'tplOperator' => 
            array (
              'name' => 'tplOperator',
              'desc' => 'An optional operator to use for the tplCondition when comparing against the conditionalTpls operands. Default is == (equals).',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'is equal to',
                  'value' => '==',
                  'name' => 'is equal to',
                ),
                1 => 
                array (
                  'text' => 'is not equal to',
                  'value' => '!=',
                  'name' => 'is not equal to',
                ),
                2 => 
                array (
                  'text' => 'less than',
                  'value' => '<',
                  'name' => 'less than',
                ),
                3 => 
                array (
                  'text' => 'less than or equal to',
                  'value' => '<=',
                  'name' => 'less than or equal to',
                ),
                4 => 
                array (
                  'text' => 'greater than or equal to',
                  'value' => '>=',
                  'name' => 'greater than or equal to',
                ),
                5 => 
                array (
                  'text' => 'is empty',
                  'value' => 'empty',
                  'name' => 'is empty',
                ),
                6 => 
                array (
                  'text' => 'is not empty',
                  'value' => '!empty',
                  'name' => 'is not empty',
                ),
                7 => 
                array (
                  'text' => 'is null',
                  'value' => 'null',
                  'name' => 'is null',
                ),
                8 => 
                array (
                  'text' => 'is in array',
                  'value' => 'inarray',
                  'name' => 'is in array',
                ),
                9 => 
                array (
                  'text' => 'is between',
                  'value' => 'between',
                  'name' => 'is between',
                ),
              ),
              'value' => '==',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'An optional operator to use for the tplCondition when comparing against the conditionalTpls operands. Default is == (equals).',
              'area_trans' => '',
            ),
            'conditionalTpls' => 
            array (
              'name' => 'conditionalTpls',
              'desc' => 'A JSON map of conditional operands and tpls to compare against the tplCondition property using the specified tplOperator.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'A JSON map of conditional operands and tpls to compare against the tplCondition property using the specified tplOperator.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * getResources
 *
 * A general purpose Resource listing and summarization snippet for MODX 2.x.
 *
 * @author Jason Coward
 * @copyright Copyright 2010-2013, Jason Coward
 *
 * TEMPLATES
 *
 * tpl - Name of a chunk serving as a resource template
 * [NOTE: if not provided, properties are dumped to output for each resource]
 *
 * tplOdd - (Opt) Name of a chunk serving as resource template for resources with an odd idx value
 * (see idx property)
 * tplFirst - (Opt) Name of a chunk serving as resource template for the first resource (see first
 * property)
 * tplLast - (Opt) Name of a chunk serving as resource template for the last resource (see last
 * property)
 * tpl_{n} - (Opt) Name of a chunk serving as resource template for the nth resource
 *
 * tplCondition - (Opt) Defines a field of the resource to evaluate against keys defined in the
 * conditionalTpls property. Must be a resource field; does not work with Template Variables.
 * conditionalTpls - (Opt) A JSON object defining a map of field values and the associated tpl to
 * use when the field defined by tplCondition matches the value. [NOTE: tplOdd, tplFirst, tplLast,
 * and tpl_{n} will take precedence over any defined conditionalTpls]
 *
 * tplWrapper - (Opt) Name of a chunk serving as a wrapper template for the output
 * [NOTE: Does not work with toSeparatePlaceholders]
 *
 * SELECTION
 *
 * parents - Comma-delimited list of ids serving as parents
 *
 * context - (Opt) Comma-delimited list of context keys to limit results by; if empty, contexts for all specified
 * parents will be used (all contexts if 0 is specified) [default=]
 *
 * depth - (Opt) Integer value indicating depth to search for resources from each parent [default=10]
 *
 * tvFilters - (Opt) Delimited-list of TemplateVar values to filter resources by. Supports two
 * delimiters and two value search formats. The first delimiter || represents a logical OR and the
 * primary grouping mechanism.  Within each group you can provide a comma-delimited list of values.
 * These values can be either tied to a specific TemplateVar by name, e.g. myTV==value, or just the
 * value, indicating you are searching for the value in any TemplateVar tied to the Resource. An
 * example would be &tvFilters=`filter2==one,filter1==bar%||filter1==foo`
 * [NOTE: filtering by values uses a LIKE query and % is considered a wildcard.]
 * [NOTE: this only looks at the raw value set for specific Resource, i. e. there must be a value
 * specifically set for the Resource and it is not evaluated.]
 *
 * tvFiltersAndDelimiter - (Opt) Custom delimiter for logical AND, default \',\', in case you want to
 * match a literal comma in the tvFilters. E.g. &tvFiltersAndDelimiter=`&&`
 * &tvFilters=`filter1==foo,bar&&filter2==baz` [default=,]
 *
 * tvFiltersOrDelimiter - (Opt) Custom delimiter for logical OR, default \'||\', in case you want to
 * match a literal \'||\' in the tvFilters. E.g. &tvFiltersOrDelimiter=`|OR|`
 * &tvFilters=`filter1==foo||bar|OR|filter2==baz` [default=||]
 *
 * where - (Opt) A JSON expression of criteria to build any additional where clauses from. An example would be
 * &where=`{{"alias:LIKE":"foo%", "OR:alias:LIKE":"%bar"},{"OR:pagetitle:=":"foobar", "AND:description:=":"raboof"}}`
 *
 * sortby - (Opt) Field to sort by or a JSON array, e.g. {"publishedon":"ASC","createdon":"DESC"} [default=publishedon]
 * sortbyTV - (opt) A Template Variable name to sort by (if supplied, this precedes the sortby value) [default=]
 * sortbyTVType - (Opt) A data type to CAST a TV Value to in order to sort on it properly [default=string]
 * sortbyAlias - (Opt) Query alias for sortby field [default=]
 * sortbyEscaped - (Opt) Escapes the field name(s) specified in sortby [default=0]
 * sortdir - (Opt) Order which to sort by [default=DESC]
 * sortdirTV - (Opt) Order which to sort by a TV [default=DESC]
 * limit - (Opt) Limits the number of resources returned [default=5]
 * offset - (Opt) An offset of resources returned by the criteria to skip [default=0]
 * dbCacheFlag - (Opt) Controls caching of db queries; 0|false = do not cache result set; 1 = cache result set
 * according to cache settings, any other integer value = number of seconds to cache result set [default=0]
 *
 * OPTIONS
 *
 * includeContent - (Opt) Indicates if the content of each resource should be returned in the
 * results [default=0]
 * includeTVs - (Opt) Indicates if TemplateVar values should be included in the properties available
 * to each resource template [default=0]
 * includeTVList - (Opt) Limits the TemplateVars that are included if includeTVs is true to those specified
 * by name in a comma-delimited list [default=]
 * prepareTVs - (Opt) Prepares media-source dependent TemplateVar values [default=1]
 * prepareTVList - (Opt) Limits the TVs that are prepared to those specified by name in a comma-delimited
 * list [default=]
 * processTVs - (Opt) Indicates if TemplateVar values should be rendered as they would on the
 * resource being summarized [default=0]
 * processTVList - (opt) Limits the TemplateVars that are processed if included to those specified
 * by name in a comma-delimited list [default=]
 * tvPrefix - (Opt) The prefix for TemplateVar properties [default=tv.]
 * idx - (Opt) You can define the starting idx of the resources, which is an property that is
 * incremented as each resource is rendered [default=1]
 * first - (Opt) Define the idx which represents the first resource (see tplFirst) [default=1]
 * last - (Opt) Define the idx which represents the last resource (see tplLast) [default=# of
 * resources being summarized + first - 1]
 * outputSeparator - (Opt) An optional string to separate each tpl instance [default="\\n"]
 * wrapIfEmpty - (Opt) Indicates if the tplWrapper should be applied if the output is empty [default=0]
 *
 */
$output = array();
$outputSeparator = isset($outputSeparator) ? $outputSeparator : "\\n";

/* set default properties */
$tpl = !empty($tpl) ? $tpl : \'\';
$includeContent = !empty($includeContent) ? true : false;
$includeTVs = !empty($includeTVs) ? true : false;
$includeTVList = !empty($includeTVList) ? explode(\',\', $includeTVList) : array();
$processTVs = !empty($processTVs) ? true : false;
$processTVList = !empty($processTVList) ? explode(\',\', $processTVList) : array();
$prepareTVs = !empty($prepareTVs) ? true : false;
$prepareTVList = !empty($prepareTVList) ? explode(\',\', $prepareTVList) : array();
$tvPrefix = isset($tvPrefix) ? $tvPrefix : \'tv.\';
$parents = (!empty($parents) || $parents === \'0\') ? explode(\',\', $parents) : array($modx->resource->get(\'id\'));
array_walk($parents, \'trim\');
$parents = array_unique($parents);
$depth = isset($depth) ? (integer) $depth : 10;

$tvFiltersOrDelimiter = isset($tvFiltersOrDelimiter) ? $tvFiltersOrDelimiter : \'||\';
$tvFiltersAndDelimiter = isset($tvFiltersAndDelimiter) ? $tvFiltersAndDelimiter : \',\';
$tvFilters = !empty($tvFilters) ? explode($tvFiltersOrDelimiter, $tvFilters) : array();

$where = !empty($where) ? $modx->fromJSON($where) : array();
$showUnpublished = !empty($showUnpublished) ? true : false;
$showDeleted = !empty($showDeleted) ? true : false;

$sortby = isset($sortby) ? $sortby : \'publishedon\';
$sortbyTV = isset($sortbyTV) ? $sortbyTV : \'\';
$sortbyAlias = isset($sortbyAlias) ? $sortbyAlias : \'modResource\';
$sortbyEscaped = !empty($sortbyEscaped) ? true : false;
$sortdir = isset($sortdir) ? $sortdir : \'DESC\';
$sortdirTV = isset($sortdirTV) ? $sortdirTV : \'DESC\';
$limit = isset($limit) ? (integer) $limit : 5;
$offset = isset($offset) ? (integer) $offset : 0;
$totalVar = !empty($totalVar) ? $totalVar : \'total\';

$dbCacheFlag = !isset($dbCacheFlag) ? false : $dbCacheFlag;
if (is_string($dbCacheFlag) || is_numeric($dbCacheFlag)) {
    if ($dbCacheFlag == \'0\') {
        $dbCacheFlag = false;
    } elseif ($dbCacheFlag == \'1\') {
        $dbCacheFlag = true;
    } else {
        $dbCacheFlag = (integer) $dbCacheFlag;
    }
}

/* multiple context support */
$contextArray = array();
$contextSpecified = false;
if (!empty($context)) {
    $contextArray = explode(\',\',$context);
    array_walk($contextArray, \'trim\');
    $contexts = array();
    foreach ($contextArray as $ctx) {
        $contexts[] = $modx->quote($ctx);
    }
    $context = implode(\',\',$contexts);
    $contextSpecified = true;
    unset($contexts,$ctx);
} else {
    $context = $modx->quote($modx->context->get(\'key\'));
}

$pcMap = array();
$pcQuery = $modx->newQuery(\'modResource\', array(\'id:IN\' => $parents), $dbCacheFlag);
$pcQuery->select(array(\'id\', \'context_key\'));
if ($pcQuery->prepare() && $pcQuery->stmt->execute()) {
    foreach ($pcQuery->stmt->fetchAll(PDO::FETCH_ASSOC) as $pcRow) {
        $pcMap[(integer) $pcRow[\'id\']] = $pcRow[\'context_key\'];
    }
}

$children = array();
$parentArray = array();
foreach ($parents as $parent) {
    $parent = (integer) $parent;
    if ($parent === 0) {
        $pchildren = array();
        if ($contextSpecified) {
            foreach ($contextArray as $pCtx) {
                if (!in_array($pCtx, $contextArray)) {
                    continue;
                }
                $options = $pCtx !== $modx->context->get(\'key\') ? array(\'context\' => $pCtx) : array();
                $pcchildren = $modx->getChildIds($parent, $depth, $options);
                if (!empty($pcchildren)) $pchildren = array_merge($pchildren, $pcchildren);
            }
        } else {
            $cQuery = $modx->newQuery(\'modContext\', array(\'key:!=\' => \'mgr\'));
            $cQuery->select(array(\'key\'));
            if ($cQuery->prepare() && $cQuery->stmt->execute()) {
                foreach ($cQuery->stmt->fetchAll(PDO::FETCH_COLUMN) as $pCtx) {
                    $options = $pCtx !== $modx->context->get(\'key\') ? array(\'context\' => $pCtx) : array();
                    $pcchildren = $modx->getChildIds($parent, $depth, $options);
                    if (!empty($pcchildren)) $pchildren = array_merge($pchildren, $pcchildren);
                }
            }
        }
        $parentArray[] = $parent;
    } else {
        $pContext = array_key_exists($parent, $pcMap) ? $pcMap[$parent] : false;
        if ($debug) $modx->log(modX::LOG_LEVEL_ERROR, "context for {$parent} is {$pContext}");
        if ($pContext && $contextSpecified && !in_array($pContext, $contextArray, true)) {
            $parent = next($parents);
            continue;
        }
        $parentArray[] = $parent;
        $options = !empty($pContext) && $pContext !== $modx->context->get(\'key\') ? array(\'context\' => $pContext) : array();
        $pchildren = $modx->getChildIds($parent, $depth, $options);
    }
    if (!empty($pchildren)) $children = array_merge($children, $pchildren);
    $parent = next($parents);
}
$parents = array_merge($parentArray, $children);

/* build query */
$criteria = array("modResource.parent IN (" . implode(\',\', $parents) . ")");
if ($contextSpecified) {
    $contextResourceTbl = $modx->getTableName(\'modContextResource\');
    $criteria[] = "(modResource.context_key IN ({$context}) OR EXISTS(SELECT 1 FROM {$contextResourceTbl} ctx WHERE ctx.resource = modResource.id AND ctx.context_key IN ({$context})))";
}
if (empty($showDeleted)) {
    $criteria[\'deleted\'] = \'0\';
}
if (empty($showUnpublished)) {
    $criteria[\'published\'] = \'1\';
}
if (empty($showHidden)) {
    $criteria[\'hidemenu\'] = \'0\';
}
if (!empty($hideContainers)) {
    $criteria[\'isfolder\'] = \'0\';
}
$criteria = $modx->newQuery(\'modResource\', $criteria);
if (!empty($tvFilters)) {
    $tmplVarTbl = $modx->getTableName(\'modTemplateVar\');
    $tmplVarResourceTbl = $modx->getTableName(\'modTemplateVarResource\');
    $conditions = array();
    $operators = array(
        \'<=>\' => \'<=>\',
        \'===\' => \'=\',
        \'!==\' => \'!=\',
        \'<>\' => \'<>\',
        \'==\' => \'LIKE\',
        \'!=\' => \'NOT LIKE\',
        \'<<\' => \'<\',
        \'<=\' => \'<=\',
        \'=<\' => \'=<\',
        \'>>\' => \'>\',
        \'>=\' => \'>=\',
        \'=>\' => \'=>\'
    );
    foreach ($tvFilters as $fGroup => $tvFilter) {
        $filterGroup = array();
        $filters = explode($tvFiltersAndDelimiter, $tvFilter);
        $multiple = count($filters) > 0;
        foreach ($filters as $filter) {
            $operator = \'==\';
            $sqlOperator = \'LIKE\';
            foreach ($operators as $op => $opSymbol) {
                if (strpos($filter, $op, 1) !== false) {
                    $operator = $op;
                    $sqlOperator = $opSymbol;
                    break;
                }
            }
            $tvValueField = \'tvr.value\';
            $tvDefaultField = \'tv.default_text\';
            $f = explode($operator, $filter);
            if (count($f) >= 2) {
                if (count($f) > 2) {
                    $k = array_shift($f);
                    $b = join($operator, $f);
                    $f = array($k, $b);
                }
                $tvName = $modx->quote($f[0]);
                if (is_numeric($f[1]) && !in_array($sqlOperator, array(\'LIKE\', \'NOT LIKE\'))) {
                    $tvValue = $f[1];
                    if ($f[1] == (integer)$f[1]) {
                        $tvValueField = "CAST({$tvValueField} AS SIGNED INTEGER)";
                        $tvDefaultField = "CAST({$tvDefaultField} AS SIGNED INTEGER)";
                    } else {
                        $tvValueField = "CAST({$tvValueField} AS DECIMAL)";
                        $tvDefaultField = "CAST({$tvDefaultField} AS DECIMAL)";
                    }
                } else {
                    $tvValue = $modx->quote($f[1]);
                }
                if ($multiple) {
                    $filterGroup[] =
                        "(EXISTS (SELECT 1 FROM {$tmplVarResourceTbl} tvr JOIN {$tmplVarTbl} tv ON {$tvValueField} {$sqlOperator} {$tvValue} AND tv.name = {$tvName} AND tv.id = tvr.tmplvarid WHERE tvr.contentid = modResource.id) " .
                        "OR EXISTS (SELECT 1 FROM {$tmplVarTbl} tv WHERE tv.name = {$tvName} AND {$tvDefaultField} {$sqlOperator} {$tvValue} AND tv.id NOT IN (SELECT tmplvarid FROM {$tmplVarResourceTbl} WHERE contentid = modResource.id)) " .
                        ")";
                } else {
                    $filterGroup =
                        "(EXISTS (SELECT 1 FROM {$tmplVarResourceTbl} tvr JOIN {$tmplVarTbl} tv ON {$tvValueField} {$sqlOperator} {$tvValue} AND tv.name = {$tvName} AND tv.id = tvr.tmplvarid WHERE tvr.contentid = modResource.id) " .
                        "OR EXISTS (SELECT 1 FROM {$tmplVarTbl} tv WHERE tv.name = {$tvName} AND {$tvDefaultField} {$sqlOperator} {$tvValue} AND tv.id NOT IN (SELECT tmplvarid FROM {$tmplVarResourceTbl} WHERE contentid = modResource.id)) " .
                        ")";
                }
            } elseif (count($f) == 1) {
                $tvValue = $modx->quote($f[0]);
                if ($multiple) {
                    $filterGroup[] = "EXISTS (SELECT 1 FROM {$tmplVarResourceTbl} tvr JOIN {$tmplVarTbl} tv ON {$tvValueField} {$sqlOperator} {$tvValue} AND tv.id = tvr.tmplvarid WHERE tvr.contentid = modResource.id)";
                } else {
                    $filterGroup = "EXISTS (SELECT 1 FROM {$tmplVarResourceTbl} tvr JOIN {$tmplVarTbl} tv ON {$tvValueField} {$sqlOperator} {$tvValue} AND tv.id = tvr.tmplvarid WHERE tvr.contentid = modResource.id)";
                }
            }
        }
        $conditions[] = $filterGroup;
    }
    if (!empty($conditions)) {
        $firstGroup = true;
        foreach ($conditions as $cGroup => $c) {
            if (is_array($c)) {
                $first = true;
                foreach ($c as $cond) {
                    if ($first && !$firstGroup) {
                        $criteria->condition($criteria->query[\'where\'][0][1], $cond, xPDOQuery::SQL_OR, null, $cGroup);
                    } else {
                        $criteria->condition($criteria->query[\'where\'][0][1], $cond, xPDOQuery::SQL_AND, null, $cGroup);
                    }
                    $first = false;
                }
            } else {
                $criteria->condition($criteria->query[\'where\'][0][1], $c, $firstGroup ? xPDOQuery::SQL_AND : xPDOQuery::SQL_OR, null, $cGroup);
            }
            $firstGroup = false;
        }
    }
}
/* include/exclude resources, via &resources=`123,-456` prop */
if (!empty($resources)) {
    $resourceConditions = array();
    $resources = explode(\',\',$resources);
    $include = array();
    $exclude = array();
    foreach ($resources as $resource) {
        $resource = (int)$resource;
        if ($resource == 0) continue;
        if ($resource < 0) {
            $exclude[] = abs($resource);
        } else {
            $include[] = $resource;
        }
    }
    if (!empty($include)) {
        $criteria->where(array(\'OR:modResource.id:IN\' => $include), xPDOQuery::SQL_OR);
    }
    if (!empty($exclude)) {
        $criteria->where(array(\'modResource.id:NOT IN\' => $exclude), xPDOQuery::SQL_AND, null, 1);
    }
}
if (!empty($where)) {
    $criteria->where($where);
}

$total = $modx->getCount(\'modResource\', $criteria);
$modx->setPlaceholder($totalVar, $total);

$fields = array_keys($modx->getFields(\'modResource\'));
if (empty($includeContent)) {
    $fields = array_diff($fields, array(\'content\'));
}
$columns = $includeContent ? $modx->getSelectColumns(\'modResource\', \'modResource\') : $modx->getSelectColumns(\'modResource\', \'modResource\', \'\', array(\'content\'), true);
$criteria->select($columns);
if (!empty($sortbyTV)) {
    $criteria->leftJoin(\'modTemplateVar\', \'tvDefault\', array(
        "tvDefault.name" => $sortbyTV
    ));
    $criteria->leftJoin(\'modTemplateVarResource\', \'tvSort\', array(
        "tvSort.contentid = modResource.id",
        "tvSort.tmplvarid = tvDefault.id"
    ));
    if (empty($sortbyTVType)) $sortbyTVType = \'string\';
    if ($modx->getOption(\'dbtype\') === \'mysql\') {
        switch ($sortbyTVType) {
            case \'integer\':
                $criteria->select("CAST(IFNULL(tvSort.value, tvDefault.default_text) AS SIGNED INTEGER) AS sortTV");
                break;
            case \'decimal\':
                $criteria->select("CAST(IFNULL(tvSort.value, tvDefault.default_text) AS DECIMAL) AS sortTV");
                break;
            case \'datetime\':
                $criteria->select("CAST(IFNULL(tvSort.value, tvDefault.default_text) AS DATETIME) AS sortTV");
                break;
            case \'string\':
            default:
                $criteria->select("IFNULL(tvSort.value, tvDefault.default_text) AS sortTV");
                break;
        }
    } elseif ($modx->getOption(\'dbtype\') === \'sqlsrv\') {
        switch ($sortbyTVType) {
            case \'integer\':
                $criteria->select("CAST(ISNULL(tvSort.value, tvDefault.default_text) AS BIGINT) AS sortTV");
                break;
            case \'decimal\':
                $criteria->select("CAST(ISNULL(tvSort.value, tvDefault.default_text) AS DECIMAL) AS sortTV");
                break;
            case \'datetime\':
                $criteria->select("CAST(ISNULL(tvSort.value, tvDefault.default_text) AS DATETIME) AS sortTV");
                break;
            case \'string\':
            default:
                $criteria->select("ISNULL(tvSort.value, tvDefault.default_text) AS sortTV");
                break;
        }
    }
    $criteria->sortby("sortTV", $sortdirTV);
}
if (!empty($sortby)) {
    if (strpos($sortby, \'{\') === 0) {
        $sorts = $modx->fromJSON($sortby);
    } else {
        $sorts = array($sortby => $sortdir);
    }
    if (is_array($sorts)) {
        while (list($sort, $dir) = each($sorts)) {
            if ($sortbyEscaped) $sort = $modx->escape($sort);
            if (!empty($sortbyAlias)) $sort = $modx->escape($sortbyAlias) . ".{$sort}";
            $criteria->sortby($sort, $dir);
        }
    }
}
if (!empty($limit)) $criteria->limit($limit, $offset);

if (!empty($debug)) {
    $criteria->prepare();
    $modx->log(modX::LOG_LEVEL_ERROR, $criteria->toSQL());
}
$collection = $modx->getCollection(\'modResource\', $criteria, $dbCacheFlag);

$idx = !empty($idx) || $idx === \'0\' ? (integer) $idx : 1;
$first = empty($first) && $first !== \'0\' ? 1 : (integer) $first;
$last = empty($last) ? (count($collection) + $idx - 1) : (integer) $last;

/* include parseTpl */
include_once $modx->getOption(\'getresources.core_path\',null,$modx->getOption(\'core_path\').\'components/getresources/\').\'include.parsetpl.php\';

$templateVars = array();
if (!empty($includeTVs) && !empty($includeTVList)) {
    $templateVars = $modx->getCollection(\'modTemplateVar\', array(\'name:IN\' => $includeTVList));
}
/** @var modResource $resource */
foreach ($collection as $resourceId => $resource) {
    $tvs = array();
    if (!empty($includeTVs)) {
        if (empty($includeTVList)) {
            $templateVars = $resource->getMany(\'TemplateVars\');
        }
        /** @var modTemplateVar $templateVar */
        foreach ($templateVars as $tvId => $templateVar) {
            if (!empty($includeTVList) && !in_array($templateVar->get(\'name\'), $includeTVList)) continue;
            if ($processTVs && (empty($processTVList) || in_array($templateVar->get(\'name\'), $processTVList))) {
                $tvs[$tvPrefix . $templateVar->get(\'name\')] = $templateVar->renderOutput($resource->get(\'id\'));
            } else {
                $value = $templateVar->getValue($resource->get(\'id\'));
                if ($prepareTVs && method_exists($templateVar, \'prepareOutput\') && (empty($prepareTVList) || in_array($templateVar->get(\'name\'), $prepareTVList))) {
                    $value = $templateVar->prepareOutput($value);
                }
                $tvs[$tvPrefix . $templateVar->get(\'name\')] = $value;
            }
        }
    }
    $odd = ($idx & 1);
    $properties = array_merge(
        $scriptProperties
        ,array(
            \'idx\' => $idx
            ,\'first\' => $first
            ,\'last\' => $last
            ,\'odd\' => $odd
        )
        ,$includeContent ? $resource->toArray() : $resource->get($fields)
        ,$tvs
    );
    $resourceTpl = false;
    if ($idx == $first && !empty($tplFirst)) {
        $resourceTpl = parseTpl($tplFirst, $properties);
    }
    if ($idx == $last && empty($resourceTpl) && !empty($tplLast)) {
        $resourceTpl = parseTpl($tplLast, $properties);
    }
    $tplidx = \'tpl_\' . $idx;
    if (empty($resourceTpl) && !empty($$tplidx)) {
        $resourceTpl = parseTpl($$tplidx, $properties);
    }
    if ($idx > 1 && empty($resourceTpl)) {
        $divisors = getDivisors($idx);
        if (!empty($divisors)) {
            foreach ($divisors as $divisor) {
                $tplnth = \'tpl_n\' . $divisor;
                if (!empty($$tplnth)) {
                    $resourceTpl = parseTpl($$tplnth, $properties);
                    if (!empty($resourceTpl)) {
                        break;
                    }
                }
            }
        }
    }
    if ($odd && empty($resourceTpl) && !empty($tplOdd)) {
        $resourceTpl = parseTpl($tplOdd, $properties);
    }
    if (!empty($tplCondition) && !empty($conditionalTpls) && empty($resourceTpl)) {
        $conTpls = $modx->fromJSON($conditionalTpls);
        $subject = $properties[$tplCondition];
        $tplOperator = !empty($tplOperator) ? $tplOperator : \'=\';
        $tplOperator = strtolower($tplOperator);
        $tplCon = \'\';
        foreach ($conTpls as $operand => $conditionalTpl) {
            switch ($tplOperator) {
                case \'!=\':
                case \'neq\':
                case \'not\':
                case \'isnot\':
                case \'isnt\':
                case \'unequal\':
                case \'notequal\':
                    $tplCon = (($subject != $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'<\':
                case \'lt\':
                case \'less\':
                case \'lessthan\':
                    $tplCon = (($subject < $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'>\':
                case \'gt\':
                case \'greater\':
                case \'greaterthan\':
                    $tplCon = (($subject > $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'<=\':
                case \'lte\':
                case \'lessthanequals\':
                case \'lessthanorequalto\':
                    $tplCon = (($subject <= $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'>=\':
                case \'gte\':
                case \'greaterthanequals\':
                case \'greaterthanequalto\':
                    $tplCon = (($subject >= $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'isempty\':
                case \'empty\':
                    $tplCon = empty($subject) ? $conditionalTpl : $tplCon;
                    break;
                case \'!empty\':
                case \'notempty\':
                case \'isnotempty\':
                    $tplCon = !empty($subject) && $subject != \'\' ? $conditionalTpl : $tplCon;
                    break;
                case \'isnull\':
                case \'null\':
                    $tplCon = $subject == null || strtolower($subject) == \'null\' ? $conditionalTpl : $tplCon;
                    break;
                case \'inarray\':
                case \'in_array\':
                case \'ia\':
                    $operand = explode(\',\', $operand);
                    $tplCon = in_array($subject, $operand) ? $conditionalTpl : $tplCon;
                    break;
                case \'between\':
                case \'range\':
                case \'>=<\':
                case \'><\':
                    $operand = explode(\',\', $operand);
                    $tplCon = ($subject >= min($operand) && $subject <= max($operand)) ? $conditionalTpl : $tplCon;
                    break;
                case \'==\':
                case \'=\':
                case \'eq\':
                case \'is\':
                case \'equal\':
                case \'equals\':
                case \'equalto\':
                default:
                    $tplCon = (($subject == $operand) ? $conditionalTpl : $tplCon);
                    break;
            }
        }
        if (!empty($tplCon)) {
            $resourceTpl = parseTpl($tplCon, $properties);
        }
    }
    if (!empty($tpl) && empty($resourceTpl)) {
        $resourceTpl = parseTpl($tpl, $properties);
    }
    if ($resourceTpl === false && !empty($debug)) {
        $chunk = $modx->newObject(\'modChunk\');
        $chunk->setCacheable(false);
        $output[]= $chunk->process(array(), \'<pre>\' . print_r($properties, true) .\'</pre>\');
    } else {
        $output[]= $resourceTpl;
    }
    $idx++;
}

/* output */
$toSeparatePlaceholders = $modx->getOption(\'toSeparatePlaceholders\', $scriptProperties, false);
if (!empty($toSeparatePlaceholders)) {
    $modx->setPlaceholders($output, $toSeparatePlaceholders);
    return \'\';
}

$output = implode($outputSeparator, $output);

$tplWrapper = $modx->getOption(\'tplWrapper\', $scriptProperties, false);
$wrapIfEmpty = $modx->getOption(\'wrapIfEmpty\', $scriptProperties, false);
if (!empty($tplWrapper) && ($wrapIfEmpty || !empty($output))) {
    $output = parseTpl($tplWrapper, array_merge($scriptProperties, array(\'output\' => $output)));
}

$toPlaceholder = $modx->getOption(\'toPlaceholder\', $scriptProperties, false);
if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
    return \'\';
}
return $output;',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'Price' => 
      array (
        'fields' => 
        array (
          'id' => 24,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'Price',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '$group=$modx->user->get(\'primary_group\');
$doc_id = (isset($doc_id) && (int)$doc_id>0) ? (int)$doc_id : 1;

$document = $modx->getObject(\'modResource\',$doc_id);


switch($group) {
case 4: 
 $output=$document->getTVValue(\'price1\'); break;
case 5: 
 $output=$document->getTVValue(\'price2\'); break;
case 6: 
 $output=$document->getTVValue(\'price3\'); break;

default: 
 $output=$document->getTVValue(\'price\'); break;
}
return $output;',
          'locked' => false,
          'properties' => 
          array (
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '$group=$modx->user->get(\'primary_group\');
$doc_id = (isset($doc_id) && (int)$doc_id>0) ? (int)$doc_id : 1;

$document = $modx->getObject(\'modResource\',$doc_id);


switch($group) {
case 4: 
 $output=$document->getTVValue(\'price1\'); break;
case 5: 
 $output=$document->getTVValue(\'price2\'); break;
case 6: 
 $output=$document->getTVValue(\'price3\'); break;

default: 
 $output=$document->getTVValue(\'price\'); break;
}
return $output;',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
      'price' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'text',
          'name' => 'price',
          'caption' => '',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'maxLength' => '',
            'minLength' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
  ),
);