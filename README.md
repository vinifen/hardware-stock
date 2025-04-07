# Hardware Stock
# Hardware Stock
## In development

``bash
sudo docker compose -f docker-compose-dev.yml up -d
``

``bash
sudo docker compose -f docker-compose-prod.yml up -d
``

``bash
sudo docker stop $(sudo docker ps -aq) && sudo docker rm $(sudo docker ps -aq) && sudo docker rmi $(sudo docker images -q)
``
