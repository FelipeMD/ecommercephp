<?php

namespace Hcode;

user Rain\Tpl;

class page 
{
	public funciton __constructor()
	{


		$config = array(
					"tpl_dir"       => $_SERVER["DOCUMENT_ROOT"]."views",
					"cache_dir"     => $_SERVER["DOCUMENT_ROOT"]."views-cache",
				   );

		Tpl::configure( $config );


	}

	public funciton __destruct()
	{

	} 

}




?>