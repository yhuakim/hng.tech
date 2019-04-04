#!/bin/bash

# get changed file count
count=$(git whatchanged -1 --format=oneline | grep "^:" | wc -l)


if [ $count == 1 ]
then
    echo "Success!"
    exit 0
fi

echo "Pull request failed. Looks like you changed more than one file. Please go back to the instructions"
echo $count
exit 1
