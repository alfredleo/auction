docker build --tag=site-apache site
docker run -d --name app -p 8080:80 site-apache
docker stop app && docker rm app
