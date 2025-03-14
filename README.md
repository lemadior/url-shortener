# url-shortener
Small service to get shortened aliases for long-length url

For shortened symbol chains was choose only two symbols contains as letters as digit. Such combination
can provide the 1891 unique variants that enough for testing. If need more, one can enlarge value for the
variable _**SHORTENED_LINK_LENGTH**_ in the .env file.

# Installation notes

1. Clone the repository

  After cloning type the next commands:

  _**cd < Laravel folder >**_

2. Configure the Laravel:

    It's really important to copy .env.example to the .env ! Without it nothing will works!

    After .env being created one must set the database variable:

        DB_USERNAME=<some username>
        
        DB_PASSWORD=<some password>

        DB_ROOT_PASSWORD=root (only for testing. Without it DB will not works)

After this run command:

_**sh ./first_start.sh**_

This script will install and setup all needed environment: php, nginx, MySQl, PhpMyAdmin and Xdebug

  **NOTE**: The script will ask about user's password because it run sudo for some command.

Command will generate the application key.

3. To check the result go to URL: localhost:5000

4. Create tables and fill them with testing data

  _**docker exec -it app php artisan migrate --seed**_

5. PhpMyAdmin

To use PhpMyAdmin just go to localhost:8080

6. To run containers after pause use the command:

_**sh ./run.sh**_

7. To stop the containers use the command:

_**sh ./stop.sh**_

**NOTE:** To install all of this need to be installed docker and docker-compose in the system.
