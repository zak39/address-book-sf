# Symfony Address Book Project

This project is a simple address book application built with Symfony, aimed at listing contacts. It's designed as a learning tool for practicing Doctrine ORM, migrations, and data generation with FakerPHP.

## Start project

First, install all dependencies using Composer:

```bash
composer install
```

Next, start the database using Docker Compose in detached mode:

```bash
docker compose up -d
```

Run the database migrations to set up the schema:

```bash
symfony console doctrine:migrations:migrate
```

Load some sample data into the database using FakerPHP fixtures:

```bash
symfony console doctrine:fixtures:load
```

Finally, start the Symfony development server:

```bash
symfony server:start -d
```

Visit http://localhost:8000 in your browser to see the application in action.
