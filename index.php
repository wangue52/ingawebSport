<html>
    <?php require('./pdo.php'); ?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Connexion</title>
        <link href="assets/css/tailwind.css" rel="stylesheet">
    
    </head>
    <body class="content-center">
        <div>
            <div class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
                <div class="hidden lg:block lg:w-1/2 bg-cover"
                    style="background-image:url('assets/img/GASPARD.png')">
                </div>
                <div class="w-full p-8 lg:w-1/2">
                    <form action="traitement/login_control.php" method="POST">
                        <h2 class="text-2xl font-semibold text-gray-700 text-center">Brand</h2>
                        <p class="text-xl text-gray-600 text-center">Bienvenue !</p>
                        <div class="mt-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                            <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="email" name="email"/>
                        </div>
                        <div class="mt-4">
                            <div class="flex justify-between">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Mot de passe</label>
                            </div>
                            <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="password" name="password"/>
                        </div>
                        <div class="mt-8">
                            <button class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Connexion</button>
                        </div>
                        <div class="mt-4 flex items-center justify-between">
                            <span class="border-b w-1/5 md:w-1/4"></span>
                            <a class="text-xs text-gray-500 uppercase">Vous n'avez pas de compte ?</a>
                            <span class="border-b w-1/5 md:w-1/4"></span>
                        </div>
                        <div class="mt-4">
                            <button class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600"><a href="./inscription_etu.php">S'inscrire en tant qu'etudiant</a></button>
                        </div>
                        <div class="mt-4">
                            <button class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600"><a href="./inscription_per.php">S'inscrire en tant que personnel</a></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>