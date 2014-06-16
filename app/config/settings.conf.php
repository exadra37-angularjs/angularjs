<?php

require_once 'links.conf.php';

require_once 'lessons.conf.php';

require_once 'uris.conf.php';

require_once 'defaults.conf.php';

if (!empty($_GET['l'])) {

    $lessonNumber = 'lesson'.(int)$_GET['l'];

    $page = "{$lessonsDir}/lesson.tpl.php";

    $metaTitle = $lessons['fundamentals'][$lessonNumber]['title'];
}
