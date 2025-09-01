<p align="center">
  <a href="http://nestjs.com/" target="blank"><img src="https://nestjs.com/img/logo-small.svg" width="120" alt="Nest Logo" /></a>
</p>

[circleci-image]: https://img.shields.io/circleci/build/github/nestjs/nest/master?token=abc123def456
[circleci-url]: https://circleci.com/gh/nestjs/nest

  <p align="center">A progressive <a href="http://nodejs.org" target="_blank">Node.js</a> framework for building efficient and scalable server-side applications.</p>
    <p align="center">
<a href="https://www.npmjs.com/~nestjscore" target="_blank"><img src="https://img.shields.io/npm/v/@nestjs/core.svg" alt="NPM Version" /></a>
<a href="https://www.npmjs.com/~nestjscore" target="_blank"><img src="https://img.shields.io/npm/l/@nestjs/core.svg" alt="Package License" /></a>
<a href="https://www.npmjs.com/~nestjscore" target="_blank"><img src="https://img.shields.io/npm/dm/@nestjs/common.svg" alt="NPM Downloads" /></a>
<a href="https://circleci.com/gh/nestjs/nest" target="_blank"><img src="https://img.shields.io/circleci/build/github/nestjs/nest/master" alt="CircleCI" /></a>
<a href="https://discord.gg/G7Qnnhy" target="_blank"><img src="https://img.shields.io/badge/discord-online-brightgreen.svg" alt="Discord"/></a>
<a href="https://opencollective.com/nest#backer" target="_blank"><img src="https://opencollective.com/nest/backers/badge.svg" alt="Backers on Open Collective" /></a>
<a href="https://opencollective.com/nest#sponsor" target="_blank"><img src="https://opencollective.com/nest/sponsors/badge.svg" alt="Sponsors on Open Collective" /></a>
  <a href="https://paypal.me/kamilmysliwiec" target="_blank"><img src="https://img.shields.io/badge/Donate-PayPal-ff3f59.svg" alt="Donate us"/></a>
    <a href="https://opencollective.com/nest#sponsor"  target="_blank"><img src="https://img.shields.io/badge/Support%20us-Open%20Collective-41B883.svg" alt="Support us"></a>
  <a href="https://twitter.com/nestframework" target="_blank"><img src="https://img.shields.io/twitter/follow/nestframework.svg?style=social&label=Follow" alt="Follow us on Twitter"></a>
</p>
  <!--[![Backers on Open Collective](https://opencollective.com/nest/backers/badge.svg)](https://opencollective.com/nest#backer)
  [![Sponsors on Open Collective](https://opencollective.com/nest/sponsors/badge.svg)](https://opencollective.com/nest#sponsor)-->

## Description

Este es un proyecto para poder transoformar las facturas en texto plano a JSON

# Instrucciones

## Requisitos
- Intalar NodeJS => 22 y <=24
- Instalar docker y docker-compose


## Comandos para levantar el proyecto (Este paso solo se realizan la primera vez que se levante el proyecto)

```bash

# Configurar variables de entorno
$ cp .env.example .env

# modifica las variables a las propias

# Levantar la base de datos con docker
$ docker-compose up -d

# Instalar dependencias
$ npm i
```

## Comandos para importar una tabla desde un archivo sql a la base de datos levantada en este proyecto

```bash
# Ubicarte donde tienes el archivo y ejecutar, esto copiara el archivo dentro del contenedor de sqlserver, recuerda cambiar en el comando el nombre de el archivo
$  docker cp .\NobreDelArchivo.sql sqlserver:/tmp/NobreDelArchivo.sql

# Al ejecutar el siguiente codigo se importara la informacion del archivo a la base de datos que hemos levantado, este paso tomara unos momentos dependiendo de la cantidad de informacion que se este importando
$  docker exec -it sqlserver sqlcmd -S localhost -U sa -P 'YourStrong@Passw0rd' -C -d master -i /tmp/NobreDelArchivo.sql
```

## Ejecucion


```bash
# cambiar de la linea 15 del archivo facturas.service.ts el texto "Facturas_5_2025" a la tabla que esta o viene en el archivo que acabamos de importa


# En la terminal de visual code ejecutar el siguiente comando para entrar en modo desarrollo
$ npm run start:dev

# En el navegador ir a la url
http://localhost:3000/generar-json

```


Si todos los paso se hicieron correctamente, se creara una caprtea uploads que contendra todos los archivos en formato JSON.

## Extras

Si en dado caso la importacion esta fallando en la base de datos ejecutar el siguiente comando

```bash
# Destruimos la base de datos
$ docker-compose down
# Levantar la base de datos nuevamente
$ docker-compose up -d
```

Despues de esto reiniciamos desde el paso de *Comandos para importar*


## License

Nest is [MIT licensed](https://github.com/nestjs/nest/blob/master/LICENSE).
