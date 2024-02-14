<?php 
	namespace Hcode;

	use Rain\Tpl;

	class Page
	{
		private $tpl;
		private $options = [];
		private $default = ["header" => true, "footer" => true, "data" => []];

		function __construct($opts = [], $tpl_dir = "/Udemy_PHP7_2019/projeto/ecommerce/views/") {

			$this->options = array_merge($this->default, $opts);

			$config = [
				"tpl_dir" 	=> $_SERVER["DOCUMENT_ROOT"] . $tpl_dir,
				"cache_dir" => $_SERVER["DOCUMENT_ROOT"] . "/Udemy_PHP7_2019/projeto/ecommerce/views-cache/",
				"debug"		=> false
			];

			Tpl::configure($config);

			$this->tpl = new Tpl;

			$this->setData($this->options["data"]);

			if($this->options["header"] == true) $this->tpl->draw("header");
		}

		public function setTpl($name, $data = [], $returnHTML = false) {
			$this->setData($data);
			return $this->tpl->draw($name, $returnHTML);
		}

		private function setData($data = []) {
			foreach ($data as $key => $value) {
				$this->tpl->assign($key, $value);
			}
		}

		function __destruct() {
			if($this->options["footer"] == true) $this->tpl->draw("footer");
		}
	}
?>