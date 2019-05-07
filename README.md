# Wordpress-wp-cli
Wordpress plugin for developing custom WP-CLI commands - https://wp-cli.org/

Tested on Wordpress v5.1.1

# What is this?

A skeleton plugin for WP-CLI, for developing custom functions and sending additional params ( params are optional ).

Basic command: `$ wp foo [the-function-name]`

Command with params: `$ wp foo [the-function-name] --key=value --key=value`

Example; 

The WP-CLI command `$ wp foo test --name='Joe bloggs' --email='joe@bloggs.com'` will send the `name` and `email` params to the `test` function within the `foo` class. You can add as many additional *--key=value* params as you need.

# Installation

1) Upload the folder `wp-cli-foo` to `wp-content/plugins/wp-cli-foo`
2) Activate the `WP-CLI Foo` plugin in Wordpress admin area in the `Plugins` section.

# Disclaimer

This is a personal project, use at your own risk! ( Back up your site before testing )


