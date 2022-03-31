#!/usr/bin/env bash
readonly DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )/../" && pwd )";
cd ${DIR};
set -eE
set -u
set -o pipefail
standardIFS="$IFS"
IFS=$'\n\t'

themeDir="wp-content/themes/warbox/"

action=${1:-all}

case ${action} in
"Code Sniffer")
    php ${DIR}/vendor/bin/phpcs \
        --standard=${DIR}/wpcs/WordPress/ruleset.xml \
        --ignore=*.css,*.js,${themeDir}inc/* \
        ${themeDir}
    ;;
"Mess Detector")
    php ${DIR}/vendor/bin/phpmd \
        ${themeDir} \
        text \
        ${DIR}/phpmd.xml
    ;;
"Backend Copy Paste Detector")
    php ${DIR}/vendor/bin/phpcpd \
        ${themeDir}
    ;;
"test command")
    echo "Its works"
    ;;
*)
    echo "Unknown Test"
    exit 5
      ;;
esac

