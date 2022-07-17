all:
	@sed -i "s/localhost/rcorenti.42.fr/g" /etc/hosts
	@mkdir -p /home/rcorenti/data/DB /home/rcorenti/data/WordPress
	docker-compose up --build

clean:
	@docker system prune -af

stop:
	@docker-compose -p inception stop

fclean: clean
	@docker rmi -f wordpress
	@docker rmi -f nginx
	@docker rmi -f mariadb
	@docker rm -f wordpress:inception
	@docker rm -f nginx:inception
	@docker rm -f mariadb:inception
	@rm -rf /home/rcorenti/data/DB
	@rm -rf /home/rcorenti/data/WordPress
	@-docker network rm inception_network
	@-docker volume rm -f inception_DB
	@-docker volume rm -f inception_WordPress

re: fclean all

.PHONY: all, clean, fclean, re, stop
