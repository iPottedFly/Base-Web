# Base-Web

You want create a Web using Rooting, SASS, GULP & anothers functionalities? This repository is your **solution**.

Hi everyone.
This is my contribution to the Web community (Front & Back).
In this project you will find multiple functionalities just for YOU to initialize it and you can start creating your project.

I will teach you step by step how to start it and how you can start creating your entire website.

# Remember to follow everything to the letter so that you don't have any mistakes.
# Step 1.

1) Install Apache https://www.apachelounge.com/download/
2) Enable Apache as a Service
3) Download and Install PHP 8 https://www.php.net/ (Watch a video to configure PHP8 with all its extensions enabled.)
4) Add PHP 8 to System Environment variables
5) Install and Configure MySQL https://dev.mysql.com/downloads/mysql/
6) Install Composer https://getcomposer.org/download/

# Step 2.

1) Download the project and put it in **C:\apache\htdocs**
2) Open your project using Visual Studio Code or some other good code editor
3) Open the terminal and run **npm install** (Remember to have npm installed)
4) Open the terminal and run **composer init** Follow the Composer steps and when finished, your composer should look as shown in the image. (The dependencies or the **"require"** section is **not necessary** in your composer unless you are going to use a dependency)
![image](https://github.com/user-attachments/assets/0d0684fb-5588-4694-a75a-8ff02a9d6bdb)

# Step 3.

Ready! You can now start creating your project, you can run it using **cd/public** then using **php -S localhost:3000**

# NOTES

A brief explanation about some project files.

In the views section you have to make all the "HTML" of your website, then you will have to make a controller and in a function called either index or etc. use $router->render('your_file');

> SIMPLE EXAMPLE
###

```
VIEWS/LOGIN


<h1 class="nombre-pagina">Iniciar Sesión</h1>
<p class="descripcion-pagina">
    Inicia Sesión con tus Credenciales.
</p>

<?php
include_once __DIR__ . '/../templates/alertas.php';
?>

<form action="/" class="formulario" method="POST">
    <div class="campo">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="Tu Email.">
    </div>
    <div class="campo">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" placeholder="Tu Password.">
    </div>
    <input type="submit" class="boton" value="Iniciar Sesión">
</form>
<div class="acciones">
    <a href="/create-account">¿Aún no tienes una cuenta? Crea una!</a>
    <a href="/forget">¿Olvidaste tu contraseña?</a>
</div>
```

```
CONTROLLERS/LOGINCONTROLLER

    public static function log(Router $router) {
        $router->render('login');
    }

```

```
PUBLIC/INDEX

$router->get('/', [LoginController::class, "login"]);
$router->post('/', [LoginController::class, "login"]);

```



