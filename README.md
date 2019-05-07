# Wordpress-wp-cli
A skeleton Wordpress plugin for developing custom WP-CLI commands - https://wp-cli.org/

Tested on Wordpress v5.1.1

# How to use

Basic command: `$ wp foo [the-function-name]`

Command with optional params: `$ wp foo [the-function-name] --key=value --key=value`

Example: 

The WP-CLI command `$ wp foo test --name='Joe bloggs' --email='joe@bloggs.com'` will send the `name` and `email` values to the `test` function within the `foo` class ( you can add as many additional *--key=value* params as you need to the command ).

# Installation

1) Upload the folder `wp-cli-foo` to `wp-content/plugins/wp-cli-foo`
2) Activate the `WP-CLI Foo` plugin in Wordpress admin area in the `Plugins` section.

# Disclaimer

This is a personal project, use at your own risk! ( Back up your site before testing )


