<?php

namespace Dannetrichard\TopSdk;

use Dannetrichard\TopSdk\Top\TopClient;
use Dannetrichard\TopSdk\Top\Request\TbkShopGetRequest;

class TopSdk
{
	protected $c;

	public function __construct()
    {

        if (!defined("TOP_SDK_WORK_DIR")) {
            define("TOP_SDK_WORK_DIR", "/tmp/");
        }

        if (!defined("TOP_SDK_DEV_MODE")) {
            define("TOP_SDK_DEV_MODE", false);
        }

        if (!defined("TOP_AUTOLOADER_PATH")) {
            define("TOP_AUTOLOADER_PATH", dirname(__FILE__));
        }

    	$this->c = new TopClient('','');

    }

    public function shopGet($q)
    {

        $req = new TbkShopGetRequest;
        $req->setFields("user_id,shop_title,shop_type,seller_nick,pict_url,shop_url");
        $req->setQ("棉衣女");
        $resp = $this->c->execute($req);
        return $resp;

    }

}