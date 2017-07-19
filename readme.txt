This script will help you to save QR Scan data instantly from Cry. QR Scanner whis is available on Google Play.

1. Install latest version of Cry. QR Scanner on your android device from google play.
2. Change database connection code of php
3. Keep PHP file on your server
4. From android app toolbar, there is a settings icon, click on it, you can see an URL on there, change the Web URL to your own new web URL. (Ex: http://example.com/qrscan/savecryqrdata.php)
5. App sends data via GET request. (Ex: http://example.com/qrscan/savecryqrdata.php?CRY_SCAN_DATA=your%20scan%20data&CRY_TIME_STAMP=2017-07-19%2021:05:34.675)

[ %20 is space as url doesn't support space so app sends data with %20, Notice that PHP code is replacing %20 with space before save to database. If you use other language like JAVA, .Net or Python please consider 2 paremeters (CRY_SCAN_DATA, CRY_TIME_STAMP) ]


Need More Help?
Contact for pro support:
Email: touhidapps@gmail.com
Android App url(Cry. QR Scanner): https://play.google.com/store/apps/details?id=com.touhidapps.cryqr


