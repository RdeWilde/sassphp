#!/bin/sh

echo Installing sassphp...
    cd vendor
if [ ! -d sassphp ]; then
    git clone git://github.com/absalomedia/sassphp
fi
    cd sassphp
    git pull
    git submodule init
    git submodule update
    php install.php
    make install
    echo Sassphp successfully installed. Remember to add extension=sass.so to your php.ini. Actual path may be different. Use: sudo find / -name sass.so | grep -v sassphp