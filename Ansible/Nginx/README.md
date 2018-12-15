***********************[HOW TO GET STARTED WITH ANSIBLE]*******************************************
*The main goal of this project is to create a remote website that can host a php website

To do that, we will go through several stages :*

# STEP 1 : Create the web host : /hosts.yml

*This file will contain IP adress of our web host and the admin permission*

# STEP 2 : Create the Playbook  /playbook.yml

*This file will contain differents tasks implemented in roles that the script will accomplish in order to connect to the web host

*To execute the Playbook, it is necessary to execute the command*

$ ansible-playbook -i hosts -l website playbook.yml
OR
$ ansible-playbook -i hosts playbook.yml
OR *WITH VAULT ACCESS*
$ ansible-playbook -i hosts playbook.yml --ask-vault-pass


*To connect to the web host :*

$ ssh root@51.15.117.248



*************[Problems encountered]**************

# Nginx is a little fussy during its installation and it may crash, here is a list of the commands I had to use:

# This command allows the update of a single connection to the server - the problem occurs when several servers are created with the same ssh key :

$ ssh-keygen -R <IP adress >

# Separated Permisssion : user: r/w/x , group: r/x , Others: r/x

$ chmod -R 755

# The installation command line will be replaced by pkg=nginx in the playbook

apt: name=nginx

# Restart Nginx manually

$ service nginx restart
$ systemctl restart nginx.service

# See if Nginx work well and display the errors
$ systemctl status nginx.service
$ journalctl -xel
$ nginx -t

# Default nginx configuration file /roles/templates/default_nginx.j2

ngninx. j2 is a server configuration file - in a way the home page of our host - here it will be the home page of nginx which is installed by default - a bad configuration of this file leads to a direct crash - to fix it you just have to put the file nginx.j2 installed by default -

# Web host:  /var/www/website/index.php

Nginx has several folders where some files will be stored - in this case I configured the software to have index. html on the home page which works very well and I need index. php which when I launch the server does not run but downloads.
Before configuring Nginx i worked with Apache2; It may cause a problem due to same reverse proxy

#Packages installed on the same reverse proxy server: One has to be deleted
$ sudo apt-get remove --purge --auto-remove Apache2

#Nginx mime.types

To allow php files add within the line text/html the extension "php" in the file /etc/nginx/mime.types

*****************************[Creation of your own Certificate]*************************************************


*Thanks to this files your connection will be half secured because of making your own Certificate
(the adress will be https://51.15.112.24/ with a barred https following a padlock with a yellow triangle)*

# STEP 1: Creation of the RSA key

*First we generate a 4096-bit long RSA key for our root Certificate and store it in file ca.key:*

$ openssl genrsa -out ca.key 4096

# STEP2: Creation of the CSR file

*Next, we create our self-signed root certificate ca.crt for 5 years with our own information (location, Organization name, Common name, ...):*

$ openssl req -new -x509 -days 1826 -key ca.key -out ca.crt

# STEP3: Creation of the key file

*let's create our subordinate certificate that will be used for the actual signing.

First, generate the key:*

$ openssl genrsa -out nginx.key 4096

*Then, request a certificate for this subordinate certificate:*

$ openssl req -new -key nginx.key -out nginx.csr

#STEP4: Signing the certificate

*Process the request for the subordinate certificate and get it signed by the root certificate.*

$ openssl x509 -req -days 730 -in nginx.csr -CA ca.crt -CAkey ca.key -set_serial 01 -out nginx.crt

*Now you have 2 files: nginx.crt & nginx.key*

#STEP5: Encrypt your files

*To avoid hacking it's better to crypt the files you are working with
here we will encrypt this 2 files thanks to ANSIBLE_VAULt (ansible-vault --help)*

$ ansible-vault encrypt nginx.crt nginx.keygen

*********************************************************
