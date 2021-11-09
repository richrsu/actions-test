#!/bin/bash

# Note: You can specific specific groups by adding --group abc to the comment line

# Allow more open files
ulimit -n 1024

dir_path=$(dirname $(realpath $0))
$dir_path/vendor/bin/phpunit -c $dir_path/phpunit-config.xml --testdox --verbose --testsuite All_Tests
