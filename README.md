# WordPress Development Environment with Docker

This project provides a simple and professional local development environment for creating WordPress themes and plugins using Docker.

## Prerequisites

- Docker
- Docker Compose
- Node.js and npm (for theme development with Tailwind CSS)

## Getting Started

1.  **Clone the repository:**

    ```bash
    git clone <repository-url>
    cd <directory-name>
    ```

2.  **Start the Docker containers:**

    ```bash
    docker compose up -d
    ```

    -   WordPress will be available at `http://localhost:8000`.
    -   MailHog (for email catching) will be at `http://localhost:8025`.

3.  **WordPress is already installed!**

    You can log in with the following credentials:

    -   **Username:** `admin`
    -   **Password:** `password`

## Theme Development with Tailwind CSS

The `monkiria` theme is configured to use Tailwind CSS.

1.  **Navigate to the theme directory:**

    ```bash
    cd wp-content/themes/monkiria
    ```

2.  **Install Node.js dependencies:**

    ```bash
    npm install
    ```

3.  **Start the Tailwind build process:**

    ```bash
    npm run dev
    ```

    This command will watch for changes in `.php` files and `assets/css/src/style.css`, and automatically compile the final CSS to `assets/css/style.css`.

### Browser Auto-Refresh Configuration

The automatic browser refreshing is handled by **BrowserSync**. The configuration is in the `wp-content/themes/monkiria/bs-config.js` file.

If your local WordPress environment runs on a different URL, you **must** update the `proxy` value in this file:

```javascript
// bs-config.js
module.exports = {
    // IMPORTANT: Change this URL to your local WordPress address.
    // You can find the port in your docker-compose.yml file.
    proxy: "http://localhost:8000",

    // Files to watch for changes
    files: [
        './assets/css/style.css', // The compiled CSS from Tailwind
        './**/*.php',             // All theme PHP files
        './assets/js/**/*.js'     // All JS files
    ],
    // ... more options
};
```

## WP-CLI

WP-CLI is available in the WordPress container. To use it, run:

```bash
docker exec -it wordpress_app wp <command> --allow-root
```

For example, to list the plugins:

```bash
docker exec -it wordpress_app wp plugin list --allow-root
```

## Git Workflow

-   The `.gitignore` file is configured to version only your custom theme and plugin (`my-theme` and `my-plugin`).
-   The WordPress core, third-party plugins, and uploaded files are not included in the repository.
-   To add new plugins or themes to version control, modify the `.gitignore` to include them explicitly.

## Stopping the Environment

To stop the containers:

```bash
docker-compose down
```

To stop and remove the volumes (warning, this will delete your database!):

```bash
docker-compose down -v
```