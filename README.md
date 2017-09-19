# Abc Financial PHP Api 
A PHP class file for Abc Financial API<br>
This is <strong>not</strong> complete yet. <Br>
Author: Thomas Stokes <br>
Returns in json format<br><br>

<strong>Example use:</strong> <br>
<code>
require "AbcApi.php";
</code>
<br>
<code>
$AbcApi = new AbcApi($AppId,$AppKey);
</code><br>
<code>
$club_data = $AbcApi->Club($club_id);
</code>
<br>
<code>
var_dump($club_data);

</code>
