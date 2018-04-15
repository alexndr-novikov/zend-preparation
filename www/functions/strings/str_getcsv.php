<?php use \Doc\helpers\HTML;
HTML::h1('str_getcsv');

$csv = 'id,first_name,last_name,email,gender,ip_address
1,Zelma,Kerne,zkerne0@god\'addy.com,Female,93.198.237.107
2,Puff,Latus,platus1@geocities.com,Male,171.235.251.65
3,Orville,Conner,oconner2@so-net.ne.jp,Male,204.123.202.181
4,Jeni,Delph,jdelph3@earthlink.net,Female,50.165.119.156
5,Marcelo,Upton,mupton4@weibo.com,Male,136.151.147.79
6,Toddie,Fashion,tfashion5@dropbox.com,Male,18.63.103.211
7,Hildagard,Tourner,htourner6@disqus.com,Female,103.45.78.38
8,Katrina,Canellas,kcanellas7@ox.ac.uk,Female,62.65.19.188
9,Bren,Jopson,bjopson8@godaddy.com,Male,176.93.117.193
10,Caleb,Aslam,caslam9@e-recht24.de,Male,129.213.229.94
';

HTML::pre(str_getcsv($csv, ','));
HTML::dump(str_getcsv($csv, ';')); // wrong delimiter