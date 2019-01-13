##Ansible, Packer and Terraform Web Deployment##

In this project I will deploy my personal PHP website on a remote server already assigned by Scaleway Server

Configuration:
 - Operating System : Ubuntu 18.04.1 LTS
 - Text editor : Atom V1.26.1
 - Softwares : Ansible V2.5.1	 / Packer V1.3.2 / Terraform V0.11.10

###Overview###

This project creates a remote server that runs a local version of the website which is pulled down from its GitHub repo and run using Nginx.

If you edit your hosts file to point your domain to the IP address *51.xx.xx.xx*, it will work.


To do this, I will:

- Create a server on Scaleway with Terraform
- Create an instance image of the configured server with Packer
- Connect to the remote server thanks to Ansible

###Procedure##

At first,  make sure you have both Ansible, Packer and terraform installed

'sudo apt-get install ansible packer terraform'.

####1. Terraform####

*Make sure you are in the Terraform directory*

Initialize the working directory that will contains Terraform configuration file

'terraform init'

Check the execution plan with the expection plan without making any changes

'terraform plan'

Apply the changes requiered to reach the desired plan

'terraform apply'

####2. Packer####

*Make sure you are in the Packer directory*

In order to run the script you should have your Scaleway access_key, scaleway token completed and your ssh_private_key file

To build the image the command line is

'packer build projet.json'

####3. Ansible####

*Make sure you are in the Ansible directory*

a. Deploying Ansible on the remote server

Let’s run a playbook that will point at the hosts file 

'ansible-playbook -i hosts playbook.yml'

b. Deploying Ansible locally

Change the file named "hosts"

'127.0.0.1 ansible_connection=local'

Change the file named "playbook.yml"

Change the line :

'hosts: 127.0.0.1'

Add the line :

'connection: local'

Comment the line :

'# remote_user: root'

Finnaly, run the playbook:

'sudo ansible-playbook --connection=local --inventory 127.0.0.1, playbook.yml'

c.Let's Encrypt certificate

At first make sure you have a DNS, i used OVH to make the domain "tri4life.fr"

Let's clone the Let's Encrypt client from the official Github repository and after we'll place this cliet in the /opt folder of our server

'sudo git clone https://github.com/letsencrypt/letsencrypt /opt/letsencrypt --depth=1'

Client update + Pull

'cd /opt/letsencrypt' 
'sudo git pull'

Now to generate the certificate

'./letsencrypt-auto certonly -a standalone -d tri4life.fr -d www.tri4life.fr'

Let's setting up the certificate in the Nginx.j2 configuration file 

=> Remove all commented lines

Renew SSL certificate manually

'/opt/letsencrypt/letsencrypt-auto renew'

OR

Renew SSL certificate automatically

'sudo crontab -e'
'30 3 * * 0 /opt/letsencrypt/letsencrypt-auto renew >> /var/log/letsencrypt/renewal.log'


##Personal Memo##

To connect to the web host :

'ssh root@51.15.112.24'

*Nginx is a little fussy during its installation and it may crash, here is a list of the commands I had to use:*

This command allows the update of a single connection to the server - the problem occurs when several servers are created with the same ssh key :

'ssh-keygen -R 51.xx.xx.xx'

Separated Permisssion : user: r/w/x , group: r/x , Others: r/x

'chmod -R 755'

The installation command line will be replaced by pkg=nginx in the playbook (depending of what OS you are using)

'apt: name=nginx'

Restart Nginx manually

'service nginx restart'

'systemctl restart nginx.service'

See if Nginx work well and display the errors

'systemctl status nginx.service'
'journalctl -xel'
'nginx -t'

Default nginx configuration file

'/roles/templates/default_nginx.j2'

Web host
'/var/www/website/'

Packages installed on the same reverse proxy server: One has to be deleted manually

'sudo apt-get remove --purge --auto-remove Apache2'

Or automatically in the playbook

  '- name: Remove Apache2
     apt:
      name: apache2
      state: absent'

Nginx mime.types

'To allow php files add within the line text/html the extension "php" in the file /etc/nginx/mime.types'

> Author : Jérémy BARGE
