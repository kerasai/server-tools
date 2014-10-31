<?php

exec('sudo  /bin/git-pull /var/www/path/to/repo /var/www/path/to/repo/docroot origin/master', $output);
$filename = 'logs/deploy-' . time() . '.txt';
file_put_contents($filename, implode("\n", $output));
print implode('<br />', $output);

