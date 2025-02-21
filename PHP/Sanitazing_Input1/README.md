[Driz-Xploit Blog](https://drizxploit.blogspot.com/2025/02/vuln-code-vs-secure-code-php-1.html): Blog Version (Indonesian).

Set up for Apache (Debian Or Ubuntu):
   ```bash
   wget https://raw.githubusercontent.com/Driz-Xploit/SecureCode-VS-VulnCode/refs/heads/main/PHP/Sanitazing_Input1/secure.php
   wget https://raw.githubusercontent.com/Driz-Xploit/SecureCode-VS-VulnCode/refs/heads/main/PHP/Sanitazing_Input1/vuln.php
   sudo mv secure.php vuln.php /var/www/html
   sudo service apache2 start
   echo "vuln: http://$(hostname -I | awk '{print $1}')/vuln.php"
   echo "secure: http://$(hostname -I | awk '{print $1}')/secure.php"
```


Set up for Apache (RedHat):
   ```bash
   wget https://raw.githubusercontent.com/Driz-Xploit/SecureCode-VS-VulnCode/refs/heads/main/PHP/Sanitazing_Input1/secure.php
   wget https://raw.githubusercontent.com/Driz-Xploit/SecureCode-VS-VulnCode/refs/heads/main/PHP/Sanitazing_Input1/vuln.php
   sudo mv secure.php vuln.php /var/www/html
   sudo service httpd start # change 'service httpd start' with 'systemctl start httpd' if it doesn't work
   echo "vuln: http://$(hostname -I | awk '{print $1}')/vuln.php"
   echo "secure: http://$(hostname -I | awk '{print $1}')/secure.php"
```
