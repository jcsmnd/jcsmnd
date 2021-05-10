sudo apt-get update
sudo apt-get install curl
curl -sL https://deb.nodesource.com/setup_14.x -o nodesource_setup.sh
sudo bash nodesource_setup.sh
sudo apt-get install nodejs
sudo apt-get install build-essential
sudo npm install -g pm2
sudo pm2 start index.js --watch
sudo pm2 startup systemd
sudo a2enmod proxy
sudo a2enmod proxy_http
sudo service apache2 restart
