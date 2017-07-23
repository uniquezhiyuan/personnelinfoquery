# personnelinfoquery
This project is based on LAMP and can play a role of information checking system. In the backstage, MySQL server and PHP server run on a linux operation system(CentOS). Web page is based on HTML.

loaddb.py file was written with Python. It can automatically load text file that store people's information such as name, gender,birthday and telephone number .etc. The text file was stored with .csv and can be described as a multiple dimension matrix.

MySQL database was defaulted as usual. The data table is a seventeen rows table that stored all characters all kinds of length.

PHP program waits a query sent by client as soon as gives back results to display in the explorer. It always keep connecting with database server.

Web page was written with basic HTML. It can describe queried result with a table so that users are easily to accept because of the regular format. By the way, web server is Appache server.

In general, this information checking system includes 153 people's 17 kinds of information. User just input somebody's name, the relative information will be showed in the webpage with a table right now.
 Look thos page:
        http://45.127.97.71/info.php
