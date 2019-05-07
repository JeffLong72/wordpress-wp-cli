<?php
/**
 * Class for foo
 * Docs: https://make.wordpress.org/cli/handbook/commands-cookbook/
 * $ wp foo [function-name] --key=value --key=value
 * ( eg. $ wp foo test --name='Joe bloggs' --email='joe@bloggs.com')
 *
 * Or to call the wp-cli.phar directly ( eg. in situations where you cannot convert "wp-cli.phar" to executable file "wp" )
 * $ php /root/path/to/wp-cli.phar foo test
 * - or -
 * $ php73.bin.cli /root/path/to/wp-cli.phar foo test
 * ( but this is usually not necessary because PHP automatically selects the "correct" interpreter )
 *
 */
 
class WP_CLI_Foo extends WP_CLI_Command {

   	public function __invoke( $args, $assoc_args ) 
	{
		switch($args[0]) 
		{
			case "test":
				$this->test($assoc_args);
				break;
			default:
				WP_CLI::error( "Missing [function-name], try using the command: $ wp foo test", $exit = true );
		}
    	}
	
	public function test($assoc_args) 
	{
		WP_CLI::success( "This message is displayed from inside the test function! " );
		
		if(!empty($assoc_args)) 
		{
			WP_CLI::line( "Displaying all assoc_args values...");
			
			foreach($assoc_args as $key => $value) 
			{
				WP_CLI::log( $key."=>".$value );
			}
		}
	}

}	
WP_CLI::add_command( 'foo', 'WP_CLI_Foo' );	 

