file=wp-config.php
wp="dirname(__FILE__) . '/wp/'"
root="__DIR__ . '/'"
path=''

if [ $# -eq 0 ]
then
  echo 'Please provide an argument.'
  exit 2
elif [ $1 == 'wp' ]
then
  path=$wp
elif [ $1 == 'root' ]
then
  path=$root
else
  echo 'Invalid argument. Please ensure your spelling is correct.'
  exit 2
fi

echo "if ( !defined('ABSPATH') ) define('ABSPATH', ${path}); require_once(ABSPATH . 'wp-settings.php');" >> $file
