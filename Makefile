


all:
	docker compose down && docker compose build && docker compose up -d

volume:
	docker compose down && docker volume rm dockerwebserv_blbl && docker volume rm dockerwebserv_data && docker volume rm dockerwebserv_files

reload:
	docker exec nginx nginx -s reload

logs:
	docker logs nginx
	docker exec nginx cat /var/log/nginx/access.log
	docker exec nginx cat /var/log/nginx/error.log


fclean :
	@ docker compose down
	@ docker images -qa | xargs docker rmi -f 2> /dev/null || true
	@ docker volume ls -q | xargs docker volume rm 2> /dev/null || true
	@ docker network ls -q | xargs docker network rm 2> /dev/null || true

