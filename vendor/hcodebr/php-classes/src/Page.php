<?php

namespace Hcode;

use Rain\Tpl;

class Page 
{

	private $tpl;
	private $options =[];
	private $defaults = [

		"data" => []

	];

	public funciton __constructor($opts = array())
	{
		/*merge de array*/ 
		$this->options = array_merge($this->defaults, $opts);

		$config = array(
					"tpl_dir"       => $_SERVER["DOCUMENT_ROOT"]."/views/",
					"cache_dir"     => $_SERVER["DOCUMENT_ROOT"]."/views-cache/",
				   );

		Tpl::configure( $config );

		$this->tpl = new Tpl;

		$this->setData($this->options["data"]);

		$this->tpl->draw('header');

	}


	private funciton setData($data = array())
	{
		foreach ($data as $key => $value) 
		{
			$this->tpl->assign($key, $value);
		}
	}


	public funciton setTpl($name, $data = array(), $returnHTML = false)
	{
		$this->setData();

		return $this->tpl->draw($name, $returnHTML);
	}

	public funciton __destruct()
	{

		$this->tpl->draw("footer");

	} 

}

?>