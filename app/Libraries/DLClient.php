<?php

namespace App\Libraries;

class DLClient {

	private $session;

	function __construct($appKey)
    {
		$appKey ? $this->appKey = $appKey:die('Отсутствует ключ для авторизации');
	}

	function auth($login, $password)
    {
        $url = 'https://api.dellin.ru/v2/customers/login.json';
		$body = array(
			'login' => $login,
			'password' => $password,
			'appKey' => $this->appKey
		);
		$opts = array(
			'http' => array(
				'method' => 'POST',
				'header' => "Content-Type: application/json",
				'content' => json_encode($body)
			)
		);
		$result = file_get_contents($url, false, stream_context_create($opts));
		$res = (array)json_decode($result);
		$this->session = $res['sessionID'];
	}

	function request($op, $params = array())
    {
		$url = 'https://api.dellin.ru/'.$op.'.json';
		$body = $params;
		$body["appKey"] = $this->appKey;
		if (isset($this->session)) {
			$body["sessionID"] = $this->session;
		}
		$opts = array(
			'http' => array(
				'method' => 'POST',
				'header' => "Content-Type: application/json",
				'content' => json_encode($body)
			)
		);
		$result = file_get_contents($url, false, stream_context_create($opts));
		$this->result = (array)json_decode($result);

	}
}
