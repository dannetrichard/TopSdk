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

    public function setFields($s='user_id,shop_title,shop_type,seller_nick,pict_url,shop_url'){
        $this->req->setFields($s);
    } 

    public function setQ($s='女装'){
        $this->req->setQ($s);
    } 

    public function setSort($s='commission_rate_des'){
        $this->req->setSort($s);
    } 

    public function setIsTmall($s='false'){
        $this->req->setIsTmall($s);
    } 

    public function setStartCredit($s='1'){
        $this->req->setStartCredit($s);
    } 

    public function setEndCredit($s='20'){
        $this->req->setEndCredit($s);
    } 

    public function setStartCommissionRate($s='2000'){
        $this->req->setStartCommissionRate($s);
    } 

    public function setEndCommissionRate($s='123'){
        $this->req->setEndCommissionRate($s);
    } 

    public function setStartTotalAction($s='1'){
        $this->req->setStartTotalAction($s);
    } 

    public function setEndTotalAction($s='100'){
        $this->req->setEndTotalAction($s);
    } 

    public function setStartAuctionCount($s='123'){
        $this->req->setStartAuctionCount($s);
    } 

    public function setEndAuctionCount($s='200'){
        $this->req->setEndAuctionCount($s);
    } 

    public function setPlatform($s='1'){
        $this->req->setPlatform($s);
    } 

    public function setPageNo($s='1'){
        $this->req->setPageNo($s);
    } 

    public function setPageSize($s='20'){
        $this->req->setPageSize($s);
    } 
    
    public function execute(){
    	return $this->c->execute($this->req);
    }

}