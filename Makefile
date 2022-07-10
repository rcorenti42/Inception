all:
	@sed -i "s/localhost/rcorenti.42.fr/g" /etc/hosts
	@mkdir -p /home/rcorenti/data/DB /home/rcorenti/data/WordPress
	docker-compose up --build

clean:
	@docker system prune -af
	@-docker rmi $(docker images -aq)
fclean: clean
	@-docker stop $(docker ps -aq)
	@-docker rm -v $(docker ps -aq)
	@rm -rf /home/rcorenti/data/DB /home/rcorenti/data/WordPress

re: fclean all

.PHONY: all, clean, fclean, re