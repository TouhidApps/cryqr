# Cry. QR Scanner
Cry. QR Scanner is an android app which can send data to your own server, It's able to scan qr code, bar code or any other relevent codes, This repository is a sample PHP code and help.

![Cry. QR Screenshot](https://github.com/TouhidApps/cryqr/blob/master/screenshot.png)

# App Link
https://play.google.com/store/apps/details?id=com.touhidapps.cryqr

# Database table
Table name will be 'cryqrdata'

SQL to make the table:
<pre>
CREATE TABLE `cryqrdata` (
  `id` int(11) NOT NULL,
  `scan_data` varchar(200) NOT NULL,
  `scan_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `exec_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
</pre>
More 2 sqls apply on your table:
<pre>
ALTER TABLE `cryqrdata`
  ADD PRIMARY KEY (`id`);
  
ALTER TABLE `cryqrdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;
</pre>


More Help?
Email: touhidapps@gmail.com
FB: http://fb.com/touhidapps
