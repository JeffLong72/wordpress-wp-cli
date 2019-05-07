# Wordpress-wp-cli
Wordpress plugin for custom WP-CLI commands - https://wp-cli.org/

Tested on Wordpress v5.1.1

# What is this?

A test plugin to allow WP-CLI to run custom functions and pass additional parameters.

Command: $ wp foo [the-function-name] --key=value --key=value

Example; 

Type $ wp foo test --name='Joe bloggs' --email='joe@bloggs.com' to send the "name" and "email" params to the "test" function within the "foo" class. You can add as many additional --key=value params as required.

# Installation

1) Upload the folder "wp-cli-foo" to "wp-content/plugins/wp-cli-foo"
2) Activate the "WP-CLI Foo" plugin in Wordpress admin area in the "Plugins" section.

# Disclaimer

This is a personal project, use at your own risk!


