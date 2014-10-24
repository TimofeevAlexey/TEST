<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 4,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Регистрация',
    'longtitle' => '',
    'description' => '',
    'alias' => 'регистрация',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '[[!Register?
    &submitVar=`registerbtn`
    &activation=`1`
    &activationEmailSubject=`Подтверждение регистрации`
    &activationResourceId=`5`
    &successMsg=`Вам нужно подтвердить свою регистрацию.`
    &usergroups=`Users`
    &validate=`nospam:blank,
      password:required:minLength=^8^,
      password_confirm:password_confirm=^password^,
      fullname:required,
      email:required:email`
    &usernameField=`email`
    &placeholderPrefix=`reg.`
]]


[[!+error.message:eq=``:then=`
     <div class="register">
      <form action="[[~[[*id]]]]" method="post">
 
        <input type="hidden" name="nospam" value="[[!+reg.nospam]]" />
        <div class="clearfix">
        <label for="email">Электронная почта</label>
        <div class="input">
            <input type="text" name="email" value="[[!+reg.email]]" />
            <span class="help-block text-error">
                [[!+reg.error.email]]
            </span>
        </div>
        </div>
        
        <div class="clearfix">
        <label for="password">Пароль</label>
        <div class="input">
            <input type="password" name="password"
                        value="[[!+reg.password]]" />
            <span class="help-block text-error">
                [[!+reg.error.password]]
            </span>
        </div>
        </div>
        
        <div class="clearfix">
        <label for="password_confirm">Пароль еще раз</label>
        <div class="input">
            <input type="password" name="password_confirm"
                        value="[[!+reg.password_confirm]]" />
            <span class="help-block text-error">
                [[!+reg.error.password_confirm]]
            </span>
        </div>
        </div>
        
        <div class="clearfix">
        <label for="fullname">Имя и фамилия</label>
        <div class="input">
            <input type="text" name="fullname"
                        value="[[!+reg.fullname:Jevix]]" />
            <span class="help-block text-error">
                [[!+reg.error.fullname]]
            </span>
        </div>
        </div>
        
        <div class="clearfix">
        <div class="form-buttons">
            <input type="submit" value="Зарегистрироваться!"
                    name="registerbtn" class="btn primary" />
        </div>
        </div>
       </form>
      </div>

`:else=`<div class="alert alert-success">[[!+error.message]]</div>`]]',
    'richtext' => 1,
    'template' => 3,
    'menuindex' => 3,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1413993096,
    'editedby' => 1,
    'editedon' => 1413993530,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1413993060,
    'publishedby' => 1,
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
    'price' => 
    array (
      0 => 'price',
      1 => '',
      2 => 'default',
      3 => NULL,
      4 => 'text',
    ),
    'price1' => 
    array (
      0 => 'price1',
      1 => '',
      2 => 'default',
      3 => NULL,
      4 => 'text',
    ),
    'price2' => 
    array (
      0 => 'price2',
      1 => '',
      2 => 'default',
      3 => NULL,
      4 => 'text',
    ),
    'price3' => 
    array (
      0 => 'price3',
      1 => '',
      2 => 'default',
      3 => NULL,
      4 => 'text',
    ),
    '_content' => '<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<base href="http://test.gigaup.ru/" />
<title>Регистрация - MODX Revolution</title>

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
				<li class="first"><a href="index.php?id=1" >Главная</a></li><li class="active"><a href="index.php?id=4" >Регистрация</a></li><li><a href="index.php?id=6" >Авторизация</a></li>
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
			<ol class="breadcrumb"><li><a href="index.php?id=1">Главная</a></li><li class="active">Регистрация</li></ol>
			<div id="content" class="inner">
				<h3>Регистрация</h3>

[[!Register?
    &submitVar=`registerbtn`
    &activation=`1`
    &activationEmailSubject=`Подтверждение регистрации`
    &activationResourceId=`5`
    &successMsg=`Вам нужно подтвердить свою регистрацию.`
    &usergroups=`Users`
    &validate=`nospam:blank,
      password:required:minLength=^8^,
      password_confirm:password_confirm=^password^,
      fullname:required,
      email:required:email`
    &usernameField=`email`
    &placeholderPrefix=`reg.`
]]


[[!+error.message:eq=``:then=`
     <div class="register">
      <form action="index.php?id=4" method="post">
 
        <input type="hidden" name="nospam" value="[[!+reg.nospam]]" />
        <div class="clearfix">
        <label for="email">Электронная почта</label>
        <div class="input">
            <input type="text" name="email" value="[[!+reg.email]]" />
            <span class="help-block text-error">
                [[!+reg.error.email]]
            </span>
        </div>
        </div>
        
        <div class="clearfix">
        <label for="password">Пароль</label>
        <div class="input">
            <input type="password" name="password"
                        value="[[!+reg.password]]" />
            <span class="help-block text-error">
                [[!+reg.error.password]]
            </span>
        </div>
        </div>
        
        <div class="clearfix">
        <label for="password_confirm">Пароль еще раз</label>
        <div class="input">
            <input type="password" name="password_confirm"
                        value="[[!+reg.password_confirm]]" />
            <span class="help-block text-error">
                [[!+reg.error.password_confirm]]
            </span>
        </div>
        </div>
        
        <div class="clearfix">
        <label for="fullname">Имя и фамилия</label>
        <div class="input">
            <input type="text" name="fullname"
                        value="[[!+reg.fullname:Jevix]]" />
            <span class="help-block text-error">
                [[!+reg.error.fullname]]
            </span>
        </div>
        </div>
        
        <div class="clearfix">
        <div class="form-buttons">
            <input type="submit" value="Зарегистрироваться!"
                    name="registerbtn" class="btn primary" />
        </div>
        </div>
       </form>
      </div>

`:else=`<div class="alert alert-success">[[!+error.message]]</div>`]]
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
    '[[*pagetitle]]' => 'Регистрация',
    '[[*longtitle:default=`Регистрация`]]' => 'Регистрация',
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
<title>Регистрация - MODX Revolution</title>

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
				]]' => '<li class="first"><a href="index.php?id=1" >Главная</a></li><li class="active"><a href="index.php?id=4" >Регистрация</a></li><li><a href="index.php?id=6" >Авторизация</a></li>
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
				<li class="first"><a href="index.php?id=1" >Главная</a></li><li class="active"><a href="index.php?id=4" >Регистрация</a></li><li><a href="index.php?id=6" >Авторизация</a></li>
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
    '[[pdoCrumbs?
	&showAtHome=`0`
	&showHome=`1`
	&outputSeparator=``
	&tpl=`@INLINE <li><a href="[[+link]]">[[+menutitle]]</a></li>`
	&tplCurrent=`@INLINE <li class="active">[[+menutitle]]</li>`
	&tplWrapper=`@INLINE <ol class="breadcrumb">[[+output]]</ol>`
]]' => '<ol class="breadcrumb"><li><a href="index.php?id=1">Главная</a></li><li class="active">Регистрация</li></ol>',
    '[[$Crumbs]]' => '<ol class="breadcrumb"><li><a href="index.php?id=1">Главная</a></li><li class="active">Регистрация</li></ol>',
    '[[*id]]' => 4,
    '[[~4]]' => 'index.php?id=4',
    '[[$Content.inner]]' => '<h3>Регистрация</h3>

[[!Register?
    &submitVar=`registerbtn`
    &activation=`1`
    &activationEmailSubject=`Подтверждение регистрации`
    &activationResourceId=`5`
    &successMsg=`Вам нужно подтвердить свою регистрацию.`
    &usergroups=`Users`
    &validate=`nospam:blank,
      password:required:minLength=^8^,
      password_confirm:password_confirm=^password^,
      fullname:required,
      email:required:email`
    &usernameField=`email`
    &placeholderPrefix=`reg.`
]]


[[!+error.message:eq=``:then=`
     <div class="register">
      <form action="index.php?id=4" method="post">
 
        <input type="hidden" name="nospam" value="[[!+reg.nospam]]" />
        <div class="clearfix">
        <label for="email">Электронная почта</label>
        <div class="input">
            <input type="text" name="email" value="[[!+reg.email]]" />
            <span class="help-block text-error">
                [[!+reg.error.email]]
            </span>
        </div>
        </div>
        
        <div class="clearfix">
        <label for="password">Пароль</label>
        <div class="input">
            <input type="password" name="password"
                        value="[[!+reg.password]]" />
            <span class="help-block text-error">
                [[!+reg.error.password]]
            </span>
        </div>
        </div>
        
        <div class="clearfix">
        <label for="password_confirm">Пароль еще раз</label>
        <div class="input">
            <input type="password" name="password_confirm"
                        value="[[!+reg.password_confirm]]" />
            <span class="help-block text-error">
                [[!+reg.error.password_confirm]]
            </span>
        </div>
        </div>
        
        <div class="clearfix">
        <label for="fullname">Имя и фамилия</label>
        <div class="input">
            <input type="text" name="fullname"
                        value="[[!+reg.fullname:Jevix]]" />
            <span class="help-block text-error">
                [[!+reg.error.fullname]]
            </span>
        </div>
        </div>
        
        <div class="clearfix">
        <div class="form-buttons">
            <input type="submit" value="Зарегистрироваться!"
                    name="registerbtn" class="btn primary" />
        </div>
        </div>
       </form>
      </div>

`:else=`<div class="alert alert-success">[[!+error.message]]</div>`]]',
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
      'Crumbs' => 
      array (
        'fields' => 
        array (
          'id' => 6,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'Crumbs',
          'description' => 'Breadcrumbs navigation',
          'editor_type' => 0,
          'category' => 2,
          'cache_type' => 0,
          'snippet' => '[[pdoCrumbs?
	&showAtHome=`0`
	&showHome=`1`
	&outputSeparator=``
	&tpl=`@INLINE <li><a href="[[+link]]">[[+menutitle]]</a></li>`
	&tplCurrent=`@INLINE <li class="active">[[+menutitle]]</li>`
	&tplWrapper=`@INLINE <ol class="breadcrumb">[[+output]]</ol>`
]]',
          'locked' => false,
          'properties' => NULL,
          'static' => false,
          'static_file' => 'assets/components/themebootstrap/elements/chunks/chunk.crumbs.tpl',
          'content' => '[[pdoCrumbs?
	&showAtHome=`0`
	&showHome=`1`
	&outputSeparator=``
	&tpl=`@INLINE <li><a href="[[+link]]">[[+menutitle]]</a></li>`
	&tplCurrent=`@INLINE <li class="active">[[+menutitle]]</li>`
	&tplWrapper=`@INLINE <ol class="breadcrumb">[[+output]]</ol>`
]]',
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
      'Content.inner' => 
      array (
        'fields' => 
        array (
          'id' => 5,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'Content.inner',
          'description' => 'Content of inner pages',
          'editor_type' => 0,
          'category' => 2,
          'cache_type' => 0,
          'snippet' => '<h3>[[*longtitle:default=`[[*pagetitle]]`]]</h3>

[[*content]]',
          'locked' => false,
          'properties' => NULL,
          'static' => false,
          'static_file' => 'assets/components/themebootstrap/elements/chunks/chunk.content.inner.tpl',
          'content' => '<h3>[[*longtitle:default=`[[*pagetitle]]`]]</h3>

[[*content]]',
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
      'pdoCrumbs' => 
      array (
        'fields' => 
        array (
          'id' => 3,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pdoCrumbs',
          'description' => '',
          'editor_type' => 0,
          'category' => 3,
          'cache_type' => 0,
          'snippet' => '/* @var array $scriptProperties */
/* @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');

if (!isset($from) || $from == \'\') {$from = 0;}
if (empty($to)) {$to = $modx->resource->id;}
if (empty($scheme)) {$scheme = $modx->getOption(\'link_tag_scheme\');}
if (empty($direction)) {$direction = \'ltr\';}
if ($outputSeparator == \'&nbsp;&rarr;&nbsp;\' && $direction == \'rtl\') {$outputSeparator = \'&nbsp;&larr;&nbsp;\';}
if ($limit == \'\') {$limit = 10;}
if (isset($scheme) && is_numeric($scheme)) {$scheme = (integer) $scheme;}
// For compatibility with BreadCrumb
if (!empty($maxCrumbs)) {$limit = $maxCrumbs;}
if (!empty($containerTpl)) {$tplWrapper = $containerTpl;}
if (!empty($currentCrumbTpl)) {$tplCurrent = $currentCrumbTpl;}
if (!empty($linkCrumbTpl)) {$scriptProperties[\'tpl\'] = $linkCrumbTpl;}
if (!empty($maxCrumbTpl)) {$tplMax = $maxCrumbTpl;}
if (isset($showBreadCrumbsAtHome)) {$showAtHome = $showBreadCrumbsAtHome;}
if (isset($showHomeCrumb)) {$showHome = $showHomeCrumb;}
if (isset($showCurrentCrumb)) {$showCurrent = $showCurrentCrumb;}
// --
$fastMode = !empty($fastMode);
$siteStart = $modx->getOption(\'siteStart\', $scriptProperties, $modx->getOption(\'site_start\'));

if (empty($showAtHome) && $modx->resource->id == $siteStart) {
	return \'\';
}

$class = $modx->getOption(\'class\', $scriptProperties, \'modResource\');
// Start building "Where" expression
$where = array();
if (empty($showUnpublished) && empty($showUnPub)) {$where[\'published\'] = 1;}
if (empty($showHidden)) {$where[\'hidemenu\'] = 0;}
if (empty($showDeleted)) {$where[\'deleted\'] = 0;}
if (!empty($hideContainers) && empty($showContainer)) {$where[\'isfolder\'] = 0;}

$resource = ($to == $modx->resource->id)
	? $modx->resource
	: $modx->getObject($class, $to);

if (!$resource) {
	$message = \'Could not build breadcrumbs to resource "\'.$to.\'"\';
	return \'\';
}

$parents = $modx->getParentIds($resource->id, $limit, array(\'context\' => $resource->get(\'context_key\')));
if (!empty($showHome)) {
	$parents[] = $siteStart;
}

$ids = array($resource->id);
foreach ($parents as $parent) {
	if (!empty($parent)) {
		$ids[] = $parent;
	}
	if (!empty($from) && $parent == $from) {
		break;
	}
}
$where[\'id:IN\'] = $ids;

if (!empty($exclude)) {
	$where[\'id:NOT IN\'] = array_map(\'trim\', explode(\',\', $exclude));
}

// Fields to select
$resourceColumns = array_keys($modx->getFieldMeta($class));
$select = array($class => implode(\',\',$resourceColumns));

// Add custom parameters
foreach (array(\'where\',\'select\') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

// Default parameters
$default = array(
	\'class\' => $class,
	\'where\' => $modx->toJSON($where),
	\'select\' => $modx->toJSON($select),
	\'groupby\' => $class.\'.id\',
	\'sortby\' => "find_in_set(`$class`.`id`,\'".implode(\',\', $ids)."\')",
	\'sortdir\' => \'\',
	\'return\' => \'data\',
	\'totalVar\' => \'pdocrumbs.total\',
	\'disableConditions\' => true
);

// Merge all properties and run!
$pdoFetch->addTime(\'Query parameters ready\');
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$rows = $pdoFetch->run();

$output = array();
if (!empty($rows) && is_array($rows)) {
	if (strtolower($direction) == \'ltr\') {
		$rows = array_reverse($rows);
	}

	foreach ($rows as $row) {
		if (!empty($useWeblinkUrl) && $row[\'class_key\'] == \'modWebLink\') {
			$row[\'link\'] = is_numeric(trim($row[\'content\'], \'[]~ \'))
				? $modx->makeUrl(intval(trim($row[\'content\'], \'[]~ \')), \'\', \'\', $scheme)
				: $row[\'content\'];
		}
		else {
			$row[\'link\'] = $modx->makeUrl($row[\'id\'], $row[\'context_key\'], \'\', $scheme);
		}

		$row = array_merge(
			$scriptProperties
			,$row
			,array(\'idx\' => $pdoFetch->idx++)
		);
		if (empty($row[\'menutitle\'])) {$row[\'menutitle\'] = $row[\'pagetitle\'];}

		if ($row[\'id\'] == $resource->id && empty($showCurrent)) {
			continue;
		}
		elseif ($row[\'id\'] == $resource->id && !empty($tplCurrent)) {
			$tpl = $tplCurrent;
		}
		elseif ($row[\'id\'] == $siteStart && !empty($tplHome)) {
			$tpl = $tplHome;
		}
		else {
			$tpl = $pdoFetch->defineChunk($row);
		}
		$output[] = empty($tpl)
			? \'<pre>\'.$pdoFetch->getChunk(\'\', $row).\'</pre>\'
			: $pdoFetch->getChunk($tpl, $row, $fastMode);
	}
}
$pdoFetch->addTime(\'Chunks processed\');

if (count($output) == 1 && !empty($hideSingle)) {
	$pdoFetch->addTime(\'The only result was hidden, because the parameter "hideSingle" activated\');
	$output = array();
}

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$log .= \'<pre class="pdoCrumbsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

if (!empty($toSeparatePlaceholders)) {
	$output[\'log\'] = $log;
	$modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
	$output = implode($outputSeparator, $output);
	if ($pdoFetch->idx >= $limit && !empty($tplMax) && !empty($output)) {
		$output = ($direction == \'ltr\')
			? $pdoFetch->getChunk($tplMax, array(), $fastMode) . $output
			: $output . $pdoFetch->getChunk($tplMax, array(), $fastMode);
	}
	$output .= $log;

	if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
		$output = $pdoFetch->getChunk($tplWrapper, array(\'output\' => $output, \'crumbs\' => $output), $fastMode);
	}

	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $output);
	}
	else {
		return $output;
	}
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
            'from' => 
            array (
              'name' => 'from',
              'desc' => 'pdotools_prop_from',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Id ресурса, от которого строить хлебные крошки. Обычно это корень сайта, то есть "0".',
              'area_trans' => '',
            ),
            'to' => 
            array (
              'name' => 'to',
              'desc' => 'pdotools_prop_to',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Id ресурса для которого строятся хлебные крошки. По умолчанию это id текущей страницы.',
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
              'value' => 10,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение количества результатов выборки. Можно использовать "0".',
              'area_trans' => '',
            ),
            'exclude' => 
            array (
              'name' => 'exclude',
              'desc' => 'pdotools_prop_exclude',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список id ресурсов, которые нужно исключить из выборки.',
              'area_trans' => '',
            ),
            'outputSeparator' => 
            array (
              'name' => 'outputSeparator',
              'desc' => 'pdotools_prop_outputSeparator',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '&nbsp;&rarr;&nbsp;',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Необязательная строка для разделения результатов работы.',
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
            'includeTVs' => 
            array (
              'name' => 'includeTVs',
              'desc' => 'pdotools_prop_includeTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ТВ параметров для выборки, через запятую. Например: "action,time" дадут плейсхолдеры [[+action]] и [[+time]].',
              'area_trans' => '',
            ),
            'prepareTVs' => 
            array (
              'name' => 'prepareTVs',
              'desc' => 'pdotools_prop_prepareTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '1',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ТВ параметров, которые нужно подготовить перед выводом. По умолчанию, установлено в "1", что означает подготовку всех ТВ, указанных в "&includeTVs=``"',
              'area_trans' => '',
            ),
            'processTVs' => 
            array (
              'name' => 'processTVs',
              'desc' => 'pdotools_prop_processTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ТВ параметров, которые нужно обработать перед выводом. Если установить в "1" - будут обработаны все ТВ, указанные в "&includeTVs=``". По умолчанию параметр пуст.',
              'area_trans' => '',
            ),
            'tvPrefix' => 
            array (
              'name' => 'tvPrefix',
              'desc' => 'pdotools_prop_tvPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tv.',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс для ТВ параметров.',
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
            'showHidden' => 
            array (
              'name' => 'showHidden',
              'desc' => 'pdotools_prop_showHidden',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать ресурсы, скрытые в меню.',
              'area_trans' => '',
            ),
            'hideContainers' => 
            array (
              'name' => 'hideContainers',
              'desc' => 'pdotools_prop_hideContainers',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Отключает вывод контейнеров, то есть, ресурсов с isfolder = 1.',
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
              'value' => '@INLINE <a href="[[+link]]">[[+menutitle]]</a>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для оформления ресурса. Если не указан, то содержимое полей ресурса будет распечатано на экран.',
              'area_trans' => '',
            ),
            'tplCurrent' => 
            array (
              'name' => 'tplCurrent',
              'desc' => 'pdotools_prop_tplCurrent',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <span>[[+menutitle]]</span>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления текущего документа в навигации.',
              'area_trans' => '',
            ),
            'tplMax' => 
            array (
              'name' => 'tplMax',
              'desc' => 'pdotools_prop_tplMax',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <span>&nbsp;...&nbsp;</span>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк, который добавляется в начало результатов, если их больше чем "&limit".',
              'area_trans' => '',
            ),
            'tplHome' => 
            array (
              'name' => 'tplHome',
              'desc' => 'pdotools_prop_tplHome',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления ссылки на главную страницу.',
              'area_trans' => '',
            ),
            'tplWrapper' => 
            array (
              'name' => 'tplWrapper',
              'desc' => 'pdotools_prop_tplWrapper',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <div class="breadcrumbs">[[+output]]</div>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка, для заворачивания всех результатов. Понимает один плейсхолдер: [[+output]]. Не работает вместе с параметром "toSeparatePlaceholders".',
              'area_trans' => '',
            ),
            'wrapIfEmpty' => 
            array (
              'name' => 'wrapIfEmpty',
              'desc' => 'pdotools_prop_wrapIfEmpty',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включает вывод чанка-обертки (tplWrapper) даже если результатов нет.',
              'area_trans' => '',
            ),
            'showCurrent' => 
            array (
              'name' => 'showCurrent',
              'desc' => 'pdotools_prop_showCurrent',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Выводить текущий документ в навигации.',
              'area_trans' => '',
            ),
            'showHome' => 
            array (
              'name' => 'showHome',
              'desc' => 'pdotools_prop_showHome',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Выводить ссылку на главную в начале навигации.',
              'area_trans' => '',
            ),
            'showAtHome' => 
            array (
              'name' => 'showAtHome',
              'desc' => 'pdotools_prop_showAtHome',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать хлебные крошки на главной странице сайта.',
              'area_trans' => '',
            ),
            'hideSingle' => 
            array (
              'name' => 'hideSingle',
              'desc' => 'pdotools_prop_hideSingle',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Не выводить результат, если он один единственный.',
              'area_trans' => '',
            ),
            'direction' => 
            array (
              'name' => 'direction',
              'desc' => 'pdotools_prop_direction',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => 'ltr',
                  'text' => 'Left To Right (ltr)',
                  'name' => 'Left To Right (ltr)',
                ),
                1 => 
                array (
                  'value' => 'rtl',
                  'text' => 'Right To Left (rtl)',
                  'name' => 'Right To Left (rtl)',
                ),
              ),
              'value' => 'ltr',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Направление навигации: слева направо (ltr) или справа налево (rtl), например для Арабского языка.',
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
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdocrumbs.php',
          'content' => '/* @var array $scriptProperties */
/* @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');

if (!isset($from) || $from == \'\') {$from = 0;}
if (empty($to)) {$to = $modx->resource->id;}
if (empty($scheme)) {$scheme = $modx->getOption(\'link_tag_scheme\');}
if (empty($direction)) {$direction = \'ltr\';}
if ($outputSeparator == \'&nbsp;&rarr;&nbsp;\' && $direction == \'rtl\') {$outputSeparator = \'&nbsp;&larr;&nbsp;\';}
if ($limit == \'\') {$limit = 10;}
if (isset($scheme) && is_numeric($scheme)) {$scheme = (integer) $scheme;}
// For compatibility with BreadCrumb
if (!empty($maxCrumbs)) {$limit = $maxCrumbs;}
if (!empty($containerTpl)) {$tplWrapper = $containerTpl;}
if (!empty($currentCrumbTpl)) {$tplCurrent = $currentCrumbTpl;}
if (!empty($linkCrumbTpl)) {$scriptProperties[\'tpl\'] = $linkCrumbTpl;}
if (!empty($maxCrumbTpl)) {$tplMax = $maxCrumbTpl;}
if (isset($showBreadCrumbsAtHome)) {$showAtHome = $showBreadCrumbsAtHome;}
if (isset($showHomeCrumb)) {$showHome = $showHomeCrumb;}
if (isset($showCurrentCrumb)) {$showCurrent = $showCurrentCrumb;}
// --
$fastMode = !empty($fastMode);
$siteStart = $modx->getOption(\'siteStart\', $scriptProperties, $modx->getOption(\'site_start\'));

if (empty($showAtHome) && $modx->resource->id == $siteStart) {
	return \'\';
}

$class = $modx->getOption(\'class\', $scriptProperties, \'modResource\');
// Start building "Where" expression
$where = array();
if (empty($showUnpublished) && empty($showUnPub)) {$where[\'published\'] = 1;}
if (empty($showHidden)) {$where[\'hidemenu\'] = 0;}
if (empty($showDeleted)) {$where[\'deleted\'] = 0;}
if (!empty($hideContainers) && empty($showContainer)) {$where[\'isfolder\'] = 0;}

$resource = ($to == $modx->resource->id)
	? $modx->resource
	: $modx->getObject($class, $to);

if (!$resource) {
	$message = \'Could not build breadcrumbs to resource "\'.$to.\'"\';
	return \'\';
}

$parents = $modx->getParentIds($resource->id, $limit, array(\'context\' => $resource->get(\'context_key\')));
if (!empty($showHome)) {
	$parents[] = $siteStart;
}

$ids = array($resource->id);
foreach ($parents as $parent) {
	if (!empty($parent)) {
		$ids[] = $parent;
	}
	if (!empty($from) && $parent == $from) {
		break;
	}
}
$where[\'id:IN\'] = $ids;

if (!empty($exclude)) {
	$where[\'id:NOT IN\'] = array_map(\'trim\', explode(\',\', $exclude));
}

// Fields to select
$resourceColumns = array_keys($modx->getFieldMeta($class));
$select = array($class => implode(\',\',$resourceColumns));

// Add custom parameters
foreach (array(\'where\',\'select\') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

// Default parameters
$default = array(
	\'class\' => $class,
	\'where\' => $modx->toJSON($where),
	\'select\' => $modx->toJSON($select),
	\'groupby\' => $class.\'.id\',
	\'sortby\' => "find_in_set(`$class`.`id`,\'".implode(\',\', $ids)."\')",
	\'sortdir\' => \'\',
	\'return\' => \'data\',
	\'totalVar\' => \'pdocrumbs.total\',
	\'disableConditions\' => true
);

// Merge all properties and run!
$pdoFetch->addTime(\'Query parameters ready\');
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$rows = $pdoFetch->run();

$output = array();
if (!empty($rows) && is_array($rows)) {
	if (strtolower($direction) == \'ltr\') {
		$rows = array_reverse($rows);
	}

	foreach ($rows as $row) {
		if (!empty($useWeblinkUrl) && $row[\'class_key\'] == \'modWebLink\') {
			$row[\'link\'] = is_numeric(trim($row[\'content\'], \'[]~ \'))
				? $modx->makeUrl(intval(trim($row[\'content\'], \'[]~ \')), \'\', \'\', $scheme)
				: $row[\'content\'];
		}
		else {
			$row[\'link\'] = $modx->makeUrl($row[\'id\'], $row[\'context_key\'], \'\', $scheme);
		}

		$row = array_merge(
			$scriptProperties
			,$row
			,array(\'idx\' => $pdoFetch->idx++)
		);
		if (empty($row[\'menutitle\'])) {$row[\'menutitle\'] = $row[\'pagetitle\'];}

		if ($row[\'id\'] == $resource->id && empty($showCurrent)) {
			continue;
		}
		elseif ($row[\'id\'] == $resource->id && !empty($tplCurrent)) {
			$tpl = $tplCurrent;
		}
		elseif ($row[\'id\'] == $siteStart && !empty($tplHome)) {
			$tpl = $tplHome;
		}
		else {
			$tpl = $pdoFetch->defineChunk($row);
		}
		$output[] = empty($tpl)
			? \'<pre>\'.$pdoFetch->getChunk(\'\', $row).\'</pre>\'
			: $pdoFetch->getChunk($tpl, $row, $fastMode);
	}
}
$pdoFetch->addTime(\'Chunks processed\');

if (count($output) == 1 && !empty($hideSingle)) {
	$pdoFetch->addTime(\'The only result was hidden, because the parameter "hideSingle" activated\');
	$output = array();
}

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$log .= \'<pre class="pdoCrumbsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

if (!empty($toSeparatePlaceholders)) {
	$output[\'log\'] = $log;
	$modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
	$output = implode($outputSeparator, $output);
	if ($pdoFetch->idx >= $limit && !empty($tplMax) && !empty($output)) {
		$output = ($direction == \'ltr\')
			? $pdoFetch->getChunk($tplMax, array(), $fastMode) . $output
			: $output . $pdoFetch->getChunk($tplMax, array(), $fastMode);
	}
	$output .= $log;

	if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
		$output = $pdoFetch->getChunk($tplWrapper, array(\'output\' => $output, \'crumbs\' => $output), $fastMode);
	}

	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $output);
	}
	else {
		return $output;
	}
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
      'Register' => 
      array (
        'fields' => 
        array (
          'id' => 14,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'Register',
          'description' => 'Handles forms for registering users on the front-end.',
          'editor_type' => 0,
          'category' => 6,
          'cache_type' => 0,
          'snippet' => '/**
 * Register
 *
 * Copyright 2010 by Shaun McCormick <shaun@modx.com>
 *
 * Register is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Register is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Register; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package login
 */
/**
 * MODx Register Snippet. Handles User registrations.
 * 
 * @package login
 */
require_once $modx->getOption(\'login.core_path\',null,$modx->getOption(\'core_path\').\'components/login/\').\'model/login/login.class.php\';
$login = new Login($modx,$scriptProperties);

$controller = $login->loadController(\'Register\');
$output = $controller->run($scriptProperties);
return $output;',
          'locked' => false,
          'properties' => 
          array (
            'submitVar' => 
            array (
              'name' => 'submitVar',
              'desc' => 'prop_register.submitvar_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The var to check for to load the Register functionality. If empty or set to false, Register will process the form on all POST requests.',
              'area_trans' => '',
            ),
            'usergroups' => 
            array (
              'name' => 'usergroups',
              'desc' => 'prop_register.usergroups_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'Optional. A comma-separated list of User Group names or IDs to add the newly-registered User to.',
              'area_trans' => '',
            ),
            'usergroupsField' => 
            array (
              'name' => 'usergroupsField',
              'desc' => 'prop_register.usergroupsfield_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The name of the field to use to specify the User Group(s) to automatically add the new User to. Only used if this value is not blank.',
              'area_trans' => '',
            ),
            'submittedResourceId' => 
            array (
              'name' => 'submittedResourceId',
              'desc' => 'prop_register.submittedresourceid_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If set, will redirect to the specified Resource after the User submits the registration form.',
              'area_trans' => '',
            ),
            'usernameField' => 
            array (
              'name' => 'usernameField',
              'desc' => 'prop_register.usernamefield_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'username',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The name of the field to use for the new User&apos;s username.',
              'area_trans' => '',
            ),
            'passwordField' => 
            array (
              'name' => 'passwordField',
              'desc' => 'prop_register.passwordfield_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'password',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The name of the field to use for the new User&apos;s password.',
              'area_trans' => '',
            ),
            'validatePassword' => 
            array (
              'name' => 'validatePassword',
              'desc' => 'prop_register.validatepassword_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'Whether or not to validate the sent password when registering. Recommended to leave this Yes unless you are generating your own password in a hook.',
              'area_trans' => '',
            ),
            'generatePassword' => 
            array (
              'name' => 'generatePassword',
              'desc' => 'prop_register.generatepassword_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If set to Yes, Register will generate a random password for the user, overwriting any passed password. Useful for automatic generation of passwords.',
              'area_trans' => '',
            ),
            'trimPassword' => 
            array (
              'name' => 'trimPassword',
              'desc' => 'prop_register.trimpassword_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If set to Yes, Register will trim the submitted password for whitespace.',
              'area_trans' => '',
            ),
            'ensurePasswordStrength' => 
            array (
              'name' => 'ensurePasswordStrength',
              'desc' => 'prop_register.ensurePasswordStrength_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If set to Yes, Register will ensure the user enters a strong enough password. Strong passwords are passwords with multiple words or non-alphabetic characters in them.',
              'area_trans' => '',
            ),
            'passwordWordSeparator' => 
            array (
              'name' => 'passwordWordSeparator',
              'desc' => 'prop_register.passwordWordSeparator_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => ' ',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If ensurePasswordStrength is set to Yes, this will be the separator between words when determining how many words are in a supplied password.',
              'area_trans' => '',
            ),
            'minimumStrongPasswordWordCount' => 
            array (
              'name' => 'minimumStrongPasswordWordCount',
              'desc' => 'prop_register.minimumStrongPasswordWordCount_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 3,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If ensurePasswordStrength is set to Yes, if a supplied password has this many words, then it will be consider a strong password.',
              'area_trans' => '',
            ),
            'maximumPossibleStrongerPasswords' => 
            array (
              'name' => 'maximumPossibleStrongerPasswords',
              'desc' => 'prop_register.maximumPossibleStrongerPasswords_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 25,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If ensurePasswordStrength is set to Yes, then this is the maximum amount of suggestions that Register can find to consider the supplied password "strong". Making this number higher makes the check more lenient; lower makes it tougher.',
              'area_trans' => '',
            ),
            'ensurePasswordStrengthSuggestions' => 
            array (
              'name' => 'ensurePasswordStrengthSuggestions',
              'desc' => 'prop_register.ensurePasswordStrengthSuggestions_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'prop_register.ensurePasswordStrengthSuggestions_desc',
              'area_trans' => '',
            ),
            'allowedFields' => 
            array (
              'name' => 'allowedFields',
              'desc' => 'prop_register.allowedfields_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If set, will limit the fields that are allowed to be set on the newly created user to this comma-separated list. Also restricts extended fields.',
              'area_trans' => '',
            ),
            'emailField' => 
            array (
              'name' => 'emailField',
              'desc' => 'prop_register.emailfield_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'email',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The name of the field to use for the new User&apos;s email address.',
              'area_trans' => '',
            ),
            'successMsg' => 
            array (
              'name' => 'successMsg',
              'desc' => 'prop_register.successmsg_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'Optional. If not redirecting using the submittedResourceId parameter, will display this message instead.',
              'area_trans' => '',
            ),
            'persistParams' => 
            array (
              'name' => 'persistParams',
              'desc' => 'prop_register.persistparams_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'Optional. A JSON object of parameters to persist across the register process. Useful when using redirect on ConfirmRegister to redirect to another page (eg, for shopping carts).',
              'area_trans' => '',
            ),
            'preHooks' => 
            array (
              'name' => 'preHooks',
              'desc' => 'prop_register.prehooks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'What scripts to fire, if any, before the form passes validation. This can be a comma-separated list of hooks, and if the first fails, the proceeding ones will not fire. A hook can also be a Snippet name that will execute that Snippet.',
              'area_trans' => '',
            ),
            'postHooks' => 
            array (
              'name' => 'postHooks',
              'desc' => 'prop_register.posthooks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'What scripts to fire, if any, after the user has been registered. This can be a comma-separated list of hooks, and if the first fails, the proceeding ones will not fire. A hook can also be a Snippet name that will execute that Snippet.',
              'area_trans' => '',
            ),
            'useExtended' => 
            array (
              'name' => 'useExtended',
              'desc' => 'prop_register.useextended_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'Whether or not to set any extra fields in the form to the Profiles extended field. This can be useful for storing extra user fields.',
              'area_trans' => '',
            ),
            'excludeExtended' => 
            array (
              'name' => 'excludeExtended',
              'desc' => 'prop_register.excludeextended_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'A comma-separated list of fields to exclude from setting as extended fields.',
              'area_trans' => '',
            ),
            'activation' => 
            array (
              'name' => 'activation',
              'desc' => 'prop_register.activation_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'Whether or not to require activation for proper registration. If true, users will not be marked active until they have activated their account. Defaults to true. Will only work if the registration form passes an email field.',
              'area_trans' => '',
            ),
            'activationttl' => 
            array (
              'name' => 'activationttl',
              'desc' => 'prop_register.activationttl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '180',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'Number of minutes until the activation email expires. Defaults to 3 hours.',
              'area_trans' => '',
            ),
            'activationResourceId' => 
            array (
              'name' => 'activationResourceId',
              'desc' => 'prop_register.activationresourceid_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 1,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The Resource ID where the ConfirmRegister snippet for activation is located.',
              'area_trans' => '',
            ),
            'activationEmail' => 
            array (
              'name' => 'activationEmail',
              'desc' => 'prop_register.activationemail_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If set, will sent activation emails to this address instead of the newly registered user&apos;s address.',
              'area_trans' => '',
            ),
            'activationEmailSubject' => 
            array (
              'name' => 'activationEmailSubject',
              'desc' => 'prop_register.activationemailsubject_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The subject of the activation email.',
              'area_trans' => '',
            ),
            'activationEmailTplType' => 
            array (
              'name' => 'activationEmailTplType',
              'desc' => 'prop_register.activationemailtpltype_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => 'modChunk',
                  'text' => 'opt_register.chunk',
                  'name' => 'Chunk',
                ),
                1 => 
                array (
                  'value' => 'file',
                  'text' => 'opt_register.file',
                  'name' => 'File',
                ),
                2 => 
                array (
                  'value' => 'inline',
                  'text' => 'opt_register.inline',
                  'name' => 'Inline',
                ),
                3 => 
                array (
                  'value' => 'embedded',
                  'text' => 'opt_register.embedded',
                  'name' => 'Embedded',
                ),
              ),
              'value' => 'modChunk',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The type of tpls being provided for the activation email.',
              'area_trans' => '',
            ),
            'activationEmailTpl' => 
            array (
              'name' => 'activationEmailTpl',
              'desc' => 'prop_register.activationemailtpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'lgnActivateEmailTpl',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The activation email tpl.',
              'area_trans' => '',
            ),
            'activationEmailTplAlt' => 
            array (
              'name' => 'activationEmailTplAlt',
              'desc' => 'prop_register.activationemailtplalt_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => '(Optional) Plain-text alternative for the activation email tpl.',
              'area_trans' => '',
            ),
            'moderatedResourceId' => 
            array (
              'name' => 'moderatedResourceId',
              'desc' => 'prop_register.moderatedresourceid_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If a prehook sets the user as moderated, then send to this Resource instead of the submittedResourceId. Leave blank to bypass.',
              'area_trans' => '',
            ),
            'removeExpiredRegistrations' => 
            array (
              'name' => 'removeExpiredRegistrations',
              'desc' => 'prop_register.removeexpiredregistrations_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If true, will remove registered users that have an expired, unused activation request and have never activated. It is recommended to leave this on to prevent spam.',
              'area_trans' => '',
            ),
            'placeholderPrefix' => 
            array (
              'name' => 'placeholderPrefix',
              'desc' => 'prop_register.placeholderprefix_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The prefix to use for all placeholders set by this snippet.',
              'area_trans' => '',
            ),
            'recaptchaTheme' => 
            array (
              'name' => 'recaptchaTheme',
              'desc' => 'prop_register.recaptchatheme_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'opt_register.red',
                  'value' => 'red',
                  'name' => 'Red',
                ),
                1 => 
                array (
                  'text' => 'opt_register.white',
                  'value' => 'white',
                  'name' => 'White',
                ),
                2 => 
                array (
                  'text' => 'opt_register.clean',
                  'value' => 'clean',
                  'name' => 'Clean',
                ),
                3 => 
                array (
                  'text' => 'opt_register.blackglass',
                  'value' => 'blackglass',
                  'name' => 'Black Glass',
                ),
              ),
              'value' => 'clean',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If `recaptcha` is set as a preHook, this will select a theme for the reCaptcha widget.',
              'area_trans' => '',
            ),
            'mathMinRange' => 
            array (
              'name' => 'mathMinRange',
              'desc' => 'prop_register.mathminrange_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 10,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If `math` is set as a preHook, the minimum range for each number in the equation.',
              'area_trans' => '',
            ),
            'mathMaxRange' => 
            array (
              'name' => 'mathMaxRange',
              'desc' => 'prop_register.mathmaxrange_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 100,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If `math` is set as a preHook, the maximum range for each number in the equation.',
              'area_trans' => '',
            ),
            'mathField' => 
            array (
              'name' => 'mathField',
              'desc' => 'prop_register.mathfield_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'math',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If `math` is set as a preHook, the name of the input field for the answer.',
              'area_trans' => '',
            ),
            'mathOp1Field' => 
            array (
              'name' => 'mathOp1Field',
              'desc' => 'prop_register.mathop1field_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'op1',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If `math` is set as a preHook, the name of the field for the 1st number in the equation.',
              'area_trans' => '',
            ),
            'mathOp2Field' => 
            array (
              'name' => 'mathOp2Field',
              'desc' => 'prop_register.mathop2field_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'op2',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If `math` is set as a preHook, the name of the field for the 2nd number in the equation.',
              'area_trans' => '',
            ),
            'mathOperatorField' => 
            array (
              'name' => 'mathOperatorField',
              'desc' => 'prop_register.mathoperatorfield_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'operator',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If `math` is set as a preHook, the name of the field for the operator in the equation.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * Register
 *
 * Copyright 2010 by Shaun McCormick <shaun@modx.com>
 *
 * Register is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Register is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Register; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package login
 */
/**
 * MODx Register Snippet. Handles User registrations.
 * 
 * @package login
 */
require_once $modx->getOption(\'login.core_path\',null,$modx->getOption(\'core_path\').\'components/login/\').\'model/login/login.class.php\';
$login = new Login($modx,$scriptProperties);

$controller = $login->loadController(\'Register\');
$output = $controller->run($scriptProperties);
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
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);