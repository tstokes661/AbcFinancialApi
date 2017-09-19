<?php
class AbcApi {
    public $api_key;
    public $api_password;

    
    public function __construct($api_key=null,$api_password=null) {
        $this->api_key = $api_key;
        $this->api_password = $api_password;
        echo "Abc Api Initialized..\n";
    }

    //CLUB DATA//
    function Club($club) {
    	$ch = curl_init();
		$headers = array();
		$headers[] = "app_id: $this->api_key";
		$headers[] = "app_key: $this->api_password";
		$headers[] = "Accept: application/json";
		$hook_url = "https://api.abcfinancial.com/rest/$club/clubs/";
		curl_setopt( $ch, CURLOPT_URL, $hook_url );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers );
		$raw_data = curl_exec( $ch );
		return $raw_data;
    }

    function PaymentMethods($club) {
    	$ch = curl_init();
		$headers = array();
		$headers[] = "app_id: $this->api_key";
		$headers[] = "app_key: $this->api_password";
		$headers[] = "Accept: application/json";
		$hook_url = "https://api.abcfinancial.com/rest/$club/plans/paymentmethods";
		curl_setopt( $ch, CURLOPT_URL, $hook_url );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers );
		$raw_data = curl_exec( $ch );
		return $raw_data;
    }

    function Campaigns($club) {
    	$ch = curl_init();
		$headers = array();
		$headers[] = "app_id: $this->api_key";
		$headers[] = "app_key: $this->api_password";
		$headers[] = "Accept: application/json";
		$hook_url = "https://api.abcfinancial.com/rest/$club/clubs/campaigns";
		curl_setopt( $ch, CURLOPT_URL, $hook_url );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers );
		$raw_data = curl_exec( $ch );
		return $raw_data;
    }

    function Checkins($club,$start_date,$end_date) {
    	$ch = curl_init();
		$headers = array();
		$headers[] = "app_id: $this->api_key";
		$headers[] = "app_key: $this->api_password";
		$headers[] = "Accept: application/json";
		$hook_url = "https://api.abcfinancial.com/rest/$club/clubs/checkins/details?checkInTimestampRange=$start_date,$end_date";
		curl_setopt( $ch, CURLOPT_URL, $hook_url );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers );
		$raw_data = curl_exec( $ch );
		return $raw_data;
    }

    function Transactions($club,$start_date,$end_date) {
    	$ch = curl_init();
		$headers = array();
		$headers[] = "app_id: $this->api_key";
		$headers[] = "app_key: $this->api_password";
		$headers[] = "Accept: application/json";
		$hook_url = "https://api.abcfinancial.com/rest/$club/clubs/transactions/pos?transactionTimestampRange=$start_date,$end_date";
		curl_setopt( $ch, CURLOPT_URL, $hook_url );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers );
		$raw_data = curl_exec( $ch );
		return $raw_data;
    }

    //MEMBER DATA//
    function Members($club,$date_type,$start_date,$end_date) {
    	$ch = curl_init();
		$headers = array();
		$headers[] = "app_id: $this->api_key";
		$headers[] = "app_key: $this->api_password";
		$headers[] = "Accept: application/json";
		$hook_url = "https://api.abcfinancial.com/rest/$club/members/?$date_type=$start_date,$end_date&joinStatus=Member";
		curl_setopt( $ch, CURLOPT_URL, $hook_url );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers );
		$raw_data = curl_exec( $ch );
		return $raw_data;
    }

    function MemberId($club,$member_id) {
    	$ch = curl_init();
		$headers = array();
		$headers[] = "app_id: $this->api_key";
		$headers[] = "app_key: $this->api_password";
		$headers[] = "Accept: application/json";
		$hook_url = "https://api.abcfinancial.com/rest/$club/members/$member_id";
		curl_setopt( $ch, CURLOPT_URL, $hook_url );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers );
		$raw_data = curl_exec( $ch );
		return $raw_data;
    }

    //CALENDAR DATA//
    function Events($club,$start_date) {
    	$ch = curl_init();
		$headers = array();
		$headers[] = "app_id: $this->api_key";
		$headers[] = "app_key: $this->api_password";
		$headers[] = "Accept: application/json";
		$hook_url = "https://api.abcfinancial.com/rest/$club/calendars/events?eventDateRange=$start_date";
		curl_setopt( $ch, CURLOPT_URL, $hook_url );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers );
		$raw_data = curl_exec( $ch );
		return $raw_data;
    }

    function EventTypes($club) {
    	$ch = curl_init();
		$headers = array();
		$headers[] = "app_id: $this->api_key";
		$headers[] = "app_key: $this->api_password";
		$headers[] = "Accept: application/json";
		$hook_url = "https://api.abcfinancial.com/rest/$club/calendars/eventtypes";
		curl_setopt( $ch, CURLOPT_URL, $hook_url );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers );
		$raw_data = curl_exec( $ch );
		return $raw_data;
    }
}
?>
