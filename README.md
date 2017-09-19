# Abc Financial PHP Api 
A PHP class file for Abc Financial API<br>
This is <strong>not</strong> complete yet. <Br>
Author: Thomas Stokes <br>
Returns in json format<br><br>

<strong>Example use:</strong> <br>
<code>
require "AbcApi.php";

$AbcApi = new AbcApi($AppId,$AppKey);

$club_data = $AbcApi->Club($club_id);

var_dump($club_data);

</code>
