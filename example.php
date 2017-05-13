<?php
/**
 * Intellectual Property of #Mastodon
 * 
 * @copyright (c) 2017, #Mastodon
 * @author V.A. (Victor) Angelier <victor@thecodingcompany.se>
 * @version 1.0
 * @license http://www.apache.org/licenses/GPL-compatibility.html GPL
 * 
 */
require_once("autoload.php");


// Usage
// 1. *1 のコメントアウトを外し実行し CLIENT_ID, CLIENT_SECRET, URL を控える
// 2. 上記 URL をコピーしブラウザに貼り付け、利用したい Mastodon アカウントで
// 	ログインし承認
// 3. ブラウザに表示されたコードをコピーし *3 に貼り付け
// 4. *1 をコメントアウトし *4 部を実行し、*5 に貼り付け
// 5. postStatus() 等を実行


// *3
define ('MSTDN_CLIENT_ID', '');
define ('MSTDN_CLIENT_SECRET', '');

// *5
define ('MSTDN_CLIENT_BEARER_TOKEN', '');




$t = new \theCodingCompany\Mastodon();

/**
 * Create a new App and get the client_id and client_secret
 */


// *1
$token_info = $t->createApp("MyCoolAppName", "http://www.internet.com");
$auth_url = $t->getAuthUrl();
var_dump($token_info);
var_dump($auth_url);
exit;

/*
 * 1) Send the above URL '$auth_url' to the user. The need to authorize your App. 
 * 2) When they authorized your app, they will receive a token. The authorization token.
 * 3) Put the authorization token in the request below to exchange it for a bearer token.
 */



//$recv = $t->postStatus('。。');
//var_dump($recv);
//exit;


//Request the bearer token
//$token_info = $t->getAccessToken("7c47d0c636314a1dff21reryyy5edf91884856dc0f78148f848d475136");


// *4
$code = '';	// copy from WebBrouser
$token_info = $t->getAccessToken($code);
var_dump($token_info);
exit;





/**
 * The above '$token_info' will now be an array with the info like below. (If successfull)
 * No these are not real, your right.
 * 
    {
        "client_id": "87885c2bf1a9d9845345345318d1eeeb1e48bb676aa747d3216adb96f07",
        "client_secret": "a1284899df5250bd345345f5fb971a5af5c520ca2c3e4ce10c203f81c6",
        "bearer": "77e0daa7f252941ae8343543653454f4de8ca7ae087caec4ba85a363d5e08de0d"
    }
 */

?>
