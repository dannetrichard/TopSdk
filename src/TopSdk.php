<?php

namespace Dannetrichard\TopSdk;

use Dannetrichard\TopSdk\Top\TopClient;
use Dannetrichard\TopSdk\Top\Request\TbkShopGetRequest;
use Dannetrichard\TopSdk\Top\Request\TbkItemGetRequest;
use Dannetrichard\TopSdk\Top\Request\WirelessShareTpwdCreateRequest;
use Dannetrichard\TopSdk\Top\Domain\GenPwdIsvParamDto;

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

    	$this->c = new TopClient('2453112','182701ce3a46d62c5d2eabef55f0b01e');

    }

    public function shopGet()
    {
        $req = new TbkShopGetRequest;
        $req->setFields("user_id,shop_title,shop_type,seller_nick,pict_url,shop_url");
        $req->setQ("棉衣女");
        $resp = $this->c->execute($req);
        return $resp;
    }
    
    public function itemGet(){
    	$req = new TbkItemGetRequest;
		$req->setFields("num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url,seller_id,volume,nick");
		$req->setQ("女装");
		$resp = $this->c->execute($req);
		return $resp;	
   	}
   	
   	public function tklCreate(){
		$req = new WirelessShareTpwdCreateRequest;
		$tpwd_param = new GenPwdIsvParamDto;
		$tpwd_param->url="https://s.click.taobao.com/pBIG1Ww";
		$tpwd_param->text="超值活动，惊喜活动多多";
		$req->setTpwdParam(json_encode($tpwd_param));
		$resp = $this->c->execute($req);
		return $resp;
   	}
   	

}
