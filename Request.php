<?php

class Request{

    private $url;
    private $curl;
    private $result;

    public function setUrl($url){
        $this->url = $url;
    }

    public function getUrl(){
        return $this->url;
    }

    public function requestApi(){
        $this->curl = curl_init($this->getUrl());

        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->curl, CURLOPT_SSL_VERIFYPEER, false);        

        return $this->result = json_decode(curl_exec($this->curl), true);
    }

}