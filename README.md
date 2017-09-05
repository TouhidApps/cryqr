# cryqr
Cry. QR Scanner is an android app which can send data to your own server, This repository is a sample PHP code and help.

# App Link
https://play.google.com/store/apps/details?id=com.touhidapps.cryqr

# Database table
Table name will be 'cryqrdata'

SQL to make the table:

CREATE TABLE `cryqrdata` (
  `id` int(11) NOT NULL,
  `scan_data` varchar(200) NOT NULL,
  `scan_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `exec_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


