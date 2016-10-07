# ubuntu-trusty-wordpress
```

docker build -t ubuntu-wordpress https://github.com/ningappa/ubuntu-trusty-wordpress.git
```
```

docker run -d - \
  -name 6thstreet \
  -e VIRTUAL_HOST=www.6thstreet.xyz  \
  -e VIRTUAL_DOMAIN=www.6thstreet.xyz \
  -e MYSQL_USER=mydbuser \
  -e MYSQL_PASS=mydbpassword \
  -e MYSQL_DBNAME=mydbname \
  -e WP_USER=admin123 \
  -e WP_PASS=pass1233 \
  -e USER_EMAIL=ningappa@poweruphosting.com  \
  -e FILEMANAGERUSER=filemgr \
  -e FILEMANAGERPASSWORD=filepassword \
  ubuntu-wordpress
  ```
