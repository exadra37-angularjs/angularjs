<?php

$url = "{$_SERVER['REQUEST_SCHEME']}://{$_SERVER['HTTP_HOST']}";

$baseDir = array_values(array_filter(explode('/', $_SERVER['REQUEST_URI'])));

$baseDir = "{$baseDir[0]}/{$baseDir[1]}";

$fullUrl = "{$url}/{$baseDir}";

$assetsDir = "assets";

$cssDir = "{$assetsDir}/css";

$jsDir = "{$assetsDir}/js";

$viewsDir = "../app/views";

$layoutDir = "{$viewsDir}/layout";

$contentDir = "{$viewsDir}/content";

$lessonsDir = "{$contentDir}/lessons";

$demosDir = "{$lessonsDir}/demos";

$page = "{$contentDir}/home.tpl.php";
