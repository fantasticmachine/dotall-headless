# Launching a Headless Craft Commerce Site Workshop

## Installation

### Installation with DDEV

This workshop repo includes DDEV config files so if you have Docker Desktop and DDEV installed on your machine, you can
get this project up and running quickly by doing the following:

1. Save the .env.example file as .env, and edit the following values in it :

        // Craft App Settings
        
        CRAFT_APP_ID=
        CRAFT_ENVIRONMENT=dev
        CRAFT_SECURITY_KEY=
        
        // Database Settings
        
        CRAFT_DB_DRIVER=mysql
        CRAFT_DB_PORT=3306
        CRAFT_DB_SERVER=db
        CRAFT_DB_DATABASE=db
        CRAFT_DB_USER=db
        CRAFT_DB_PASSWORD=db
        CRAFT_DB_SCHEMA=public
        CRAFT_DB_TABLE_PREFIX=
        
        // Base URLs
        
        CRAFT_BASE_URL=https://dot-all-2022.fostercommerce.test
        NUXT_BASE_URL=http://localhost:3000
        ASSET_BASE_URL=https://dot-all-2022.fostercommerce.test/assets

2. Open your terminal and go to the projects root directory :

        cd <path-to-project>/dot-all-2022

3. Start up Docker Desktop and after it loads, start DDEV in your terminal :

        ddev start

4. Once DDEV has finished downloading and configuring its Docker containers and starts to run, install the project's
composer dependencies :

        ddev composer install
        
5. Import the projects seed database into DDEV :

        ddev import-db --src=project_db.sql.tar.gz
        
   Alternatively if you are on a Mac and have TablePlus, SequelPro or SequelAce installed, you can open these
   apps directly from DDEV and import the same database SQL dump seed file (project_db.sql.tar.gz):
   
        // Using TablePlus
        ddev tableplus
        
        // Using SequelPro
        ddev sequelpro
        
        // Using SequelAce
        ddev sequelace

6. Next we need to install Nuxt and the other dependencies for the front end build. In your terminal
run the following command :

        ddev exec yarn install
        
7. To run the front end of the project in dev mode, you then use the following command :

        ddev exec yarn dev

7. In your browser you can now access the site running locally in DDEV :
    
    * **Craft Admin**

            https://dot-all-2022.fostercommerce.test/admin
        
        * Username : admin
        * Password : password
        
    * **Front End** (on port 3000)
    
            https://dot-all-2022.fostercommerce.test:3000

### Manual Installation