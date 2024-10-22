


all:
	docker compose down && docker compose build && docker compose up -d

volume:
	docker compose down && docker volume rm dockerwebserv_blbl && docker volume rm dockerwebserv_data && docker volume rm dockerwebserv_files

