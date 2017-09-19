# AbcFinancialApi
A PHP class file for Abc Financial API<br>
This is <strong>not</strong> complete yet. <Br>
Author: Thomas Stokes <br>
Returns in json format<br><br>

<strong>Example use:</strong> 
require "AbcApi.php";<br>
$AbcApi = new AbcApi($AppId,$AppKey);<br>
$club_data = $AbcApi->Club($club_id);<br>
var_dump($club_data);<br>
