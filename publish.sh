#!/bin/bash

if [ $# -ne 1 ]; then
    echo "usage: ./publish.sh \"commit message\""
    exit 1;
fi

php sculpin.phar generate --env=prod

git stash
git checkout master

cp -R output_prod/* .
rm -rf output_*

git add *
git commit -m "$1"
git push origin --all
# if [ $? -ne 0 ];
	# then echo "Could not publish the site";
	# exit 1;
# fi

git checkout develop
git stash pop