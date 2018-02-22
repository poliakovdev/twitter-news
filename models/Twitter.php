<?php


//Include library
require "../vendor/abraham/twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

class Twitter
{
	public $consumer_key;
	public $consumer_secret;
	public $access_token;
	public $access_token_secret;

	public function __construct(string $consumer_key, string $consumer_secret, string $access_token, string $access_token_secret)
	{
		$this->consumer_key = $consumer_key;
		$this->consumer_secret = $consumer_secret;
		$this->access_token = $access_token;
		$this->access_token_secret = $access_token_secret;
	}
	
	public function getTwitterNewsList()
	{
		//Connect to API
		$connection = new TwitterOAuth($this->consumer_key, $this->consumer_secret, $this->access_token, $this->access_token_secret);
		$content = $connection->get("account/verify_credentials");

		//Get tweets
		$statuses = $connection->get("statuses/home_timeline", ["count" => 25, "exclude_replies" => false]);	
		
		return $statuses;		
	}
}
	$twitter = new Twitter('hhZCeDRGHZJkZK0REnkH1tjOP',
							  'FYnSU4TCFLeuVskdkWNtFFveBB80Ih81n4tjh85pDhUQrqdEis',
							  '964098631266652160-oifEcUILtfm612kJ02i7KUZNsAZIPlt',
							  'rMb0nbhQjJT5KMSOVIOsnb7lsu71yXcGMUNtw483Iordc');
	
	$newsList = array();
	$newsList = $twitter->getTwitterNewsList();  
	echo json_encode($newsList);



