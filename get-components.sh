#!/bin/bash
USER_NAME=edlaugilligangroup
GITHUB_URL="https://github.com"
TARGET_DIR="theme/blocks/"
COMPONENTS_FILE=components.txt

cd $TARGET_DIR
while read -r line; do
    git clone --filter=blob:none --no-checkout $GITHUB_URL"/"$USER_NAME"/"$line".git" $line
    cd $line
    git config core.sparseCheckout true
    echo -e "/*\n!readme.md" >>.git/info/sparse-checkout
    git checkout main
    cd ..
done <"../../"$COMPONENTS_FILE

echo "Specified components have been cloned and checked out."
