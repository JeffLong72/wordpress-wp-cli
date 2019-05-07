# wordpress-wp-cli
Wordpress plugin for custom WP-CLI commands

Tested on Wordpress v5.1.1

# Purpose

A test plugin to allow WP-CLI to run custom functions and pass additional parameters.

Command: $ wp foo [the-function-name] --key=value --key=value

Example; Typing $ wp foo test --name='Joe bloggs' --email='joe@bloggs.com' will pass the "name" and "email" params to the "foo" class "test" function.


