<?php

include_once 'abstract-loader.php';
include_once 'css-loader.php';
include_once 'js-loader.php';

class Page
{

	public $css;
	public $js;

	public function __construct()
	{
		$this->css = new CssLoader();
		$this->js = new JsLoader();
	}

	public function write_header($padding = "\t", $eol = "\n")
	{
		$this->css->write($padding, $eol);
		$this->js->write($padding, $eol);
	}

	public function image($relative_url)
	{
		return DIR_IMG.$relative_url;
	}
}