# docker-compose-ToDoList Application ReactJs-Laravel Framework
simple docker-compose Application Todolisit  for Laravel,  frontend( React.js).


Linux, OSX and Windows firiendly.

## Require

+Docker Engine 
+Docker Compose

## Setup


1. Clone  project  

    ```
     git clone git@github.com:alaedinnemarzougui/TodoListInfinty.git
    ```


2. Configure .Env

Go back to the root directory and create a .env file from the existing .env.example file and modify the following fields in your .env file to use the values specified in the database container

cd .. && cp .env.example .env

DB_CONNECTION=mysql
DB_HOST=blog_db
DB_PORT=3306
DB_DATABASE=todolist
DB_USERNAME=root
DB_PASSWORD=root

 

3. Running the containers  
  
   To run the containers you should be in the root directory of the project.
   To bring all containers up:

    ```
   docker-compose up -d
    ```
 note: any change you make to the Dockerfile or any other file that the Dockerfile uses (excluding docker-compose.yaml)  you will need to build the images again for the changes to take effect by executing the following command. 

    ```
    docker-compose build && docker-compose up -d
    ```

4. To list all running containers:

    ```
    docker ps
    ```

 To run specific commands in your app container Example " php artisan migrate && composer install :


```
docker-compose exec todolist_app bash
```

 To access your Todolist  Application visit:

```
 localhost:8000 
```
