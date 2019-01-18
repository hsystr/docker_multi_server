-- GRANT REPLICATION SLAVE ON *.* TO 'repl'@'%'  IDENTIFIED BY 'repl';
CHANGE MASTER TO master_host='db3-master', master_user='root', master_password='root';
START SLAVE;
