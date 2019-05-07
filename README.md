# Wordpress-wp-cli
Wordpress plugin for custom WP-CLI commands - https://wp-cli.org/

Tested on Wordpress v5.1.1

# What is this?

A test plugin to allow WP-CLI to run custom functions and pass additional parameters.

Command: $ wp foo [the-function-name] --key=value --key=value

Example; 

Type $ wp foo test --name='Joe bloggs' --email='joe@bloggs.com' to pass the "name" and "email" params to the "test" function within the "foo" class.

# Installation

Upload the folder "wp-cli-foo" to "wp-content/plugins/wp-cli-foo", then activate the plugin in Wordpress admin area in the "Plugins" section.


