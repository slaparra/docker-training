Usage
-----
```
$ docker-compose up

#http://127.0.0.1:8080
```

Docker command list
-------------------

##### Descargar una imagen
```
docker pull redis:latest
```
<small><b>redis</b> es el nombre de la imagen</small>

##### Ver las imágenes descargadas
```
docker images
```

##### Correr una imagen
```
docker run <imagen>
```

##### Correr una imagen en background
```
docker run -d <imagen>
```

```
docker run -d -p <localPort>:<containerPort> --name <containerName> <imageName>
```

```
docker run -d -p 80:9000 --name webserver php7-apache
```

##### Listar todos los contenedores (tb los parados)
```
docker ps -a
``` 

##### Conectar al bash del container
```
docker exec -it <container> /bin/bash
```
<small><b>exec</b> ejecuta /bin/bash
en el contenedor</small>


##### Eliminar una imagen
```
docker rmi -f redis
```

##### Eliminar un container
```
docker rm <container>
```
