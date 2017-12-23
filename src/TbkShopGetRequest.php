<?php

namespace Dannetrichard\TopSdk;

use Dannetrichard\TopSdk\Top\TopClient;
use Dannetrichard\TopSdk\Top\Request\TbkShopGetRequest;

class TbkShopGetRequest
{
	protected $c;
	public $req;

	public function __construct()
    {
    	$this->c = new TopClient();
    	$this->c->appkey = '';
    	$this->c->secretKey = '';
    	$this->req = new TbkShopGetRequest();
    }

    public function execute(){
    	return $this->c->execute($this->req);
    }

}