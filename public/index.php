<?php

try {

    require_once "../app/config/settings.conf.php";

    require_once "{$layoutDir}/header.tpl.php";

    require_once "{$layoutDir}/content.tpl.php";

    require_once "{$layoutDir}/footer.tpl.php";

} catch (Exception $e) {

    echo $e->getMessage();
}
