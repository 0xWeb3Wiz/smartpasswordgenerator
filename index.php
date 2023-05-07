<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$lang = substr($_SERVER['REQUEST_URI'], 1, 2);
switch ($lang) {
    case "fr":
        $lang = "fr";
        break;
    case "en":
        $lang = "en";
        break;
    case "es":
        $lang = "es";
        break;
    case "de":
        $lang = "de";
        break;
    case "pt":
        $lang = "pt";
        break;
    case "it":
        $lang = "it";
        break;
    default:
        $lang = "en";
}

$translations = [
    "fr" => [
        "title" => "Générateur de mots de passe sécurisés et rapides",
        "description" => "Générer des mots de passe sécuriser, protégez vos comptes Gmail, Facebook, Twitch, Discord et Instagram avec des mots de passe solides grâce à Smart Password Generator. Générez gratuitement des mots de passe sécurisés et rapides pour renforcer votre sécurité en ligne et prévenir les cyberattaques. Essayez dès maintenant !",
        "strong" => "Fort",
        "medium" => "Moyen",
        "weak" => "Faible",
        "generate" => "Génération rapide",
        "copied" => "Mot de passe copié !",
        "password_length" => "Longueur du mot de passe",
        "uppercase" => "Lettres majuscules",
        "lowercase" => "Lettres minuscules",
        "numbers" => "Chiffres",
        "symbols" => "Symboles",
        "generate_for" => "Générer un mot de passe pour",
    ],
    "en" => [
        "title" => "Secure and Fast Password Generator",
        "description" => "Generate secure passwords, protect your Gmail, Facebook, Twitch, Discord, and Instagram accounts with strong passwords using Smart Password Generator. Generate free secure and fast passwords to strengthen your online security and prevent cyberattacks. Try it now!",
        "strong" => "Strong",
        "medium" => "Medium",
        "weak" => "Weak",
        "generate" => "Quick Generate",
        "copied" => "Password copied!",
        "password_length" => "Password length",
        "uppercase" => "Uppercase letters",
        "lowercase" => "Lowercase letters",
        "numbers" => "Numbers",
        "symbols" => "Symbols",
        "generate_for" => "Generate a password for",
    ],
    "es" => [
        "title" => "Generador de contraseñas seguras y rápidas",
        "description" => "Genera contraseñas seguras, protege tus cuentas de Gmail, Facebook, Twitch, Discord e Instagram con contraseñas fuertes usando Smart Password Generator. Genera contraseñas seguras y rápidas de forma gratuita para fortalecer tu seguridad en línea y prevenir ciberataques. ¡Pruébalo ahora!",
        "strong" => "Fuerte",
        "medium" => "Medio",
        "weak" => "Débil",
        "generate" => "Generación rápida",
        "copied" => "Contraseña copiada!",
        "password_length" => "Longitud de la contraseña",
        "uppercase" => "Letras mayúsculas",
        "lowercase" => "Letras minúsculas",
        "numbers" => "Números",
        "symbols" => "Símbolos",
        "generate_for" => "Generar una contraseña para",
    ],
    "de" => [
        "title" => "Sicherer und schneller Passwortgenerator",
        "description" => "Generieren Sie sichere Passwörter, schützen Sie Ihre Gmail-, Facebook-, Twitch-, Discord- und Instagram-Konten mit starken Passwörtern mit Smart Password Generator. Erstellen Sie kostenlose, sichere und schnelle Passwörter, um Ihre Online-Sicherheit zu erhöhen und Cyberangriffe zu verhindern. Probieren Sie es jetzt aus!",
        "strong" => "Stark",
        "medium" => "Mittel",
        "weak" => "Schwach",
        "generate" => "Schnell generieren",
        "copied" => "Passwort kopiert!",
        "password_length" => "Passwortlänge",
        "uppercase" => "Großbuchstaben",
        "lowercase" => "Kleinbuchstaben",
        "numbers" => "Zahlen",
        "symbols" => "Symbole",
        "generate_for" => "Generiere ein Passwort für",
    ],
    "pt" => [
        "title" => "Gerador de senhas seguras e rápidas",
        "description" => "Gere senhas seguras, proteja suas contas do Gmail, Facebook, Twitch, Discord e Instagram com senhas fortes usando o Smart Password Generator. Gere senhas seguras e rápidas gratuitamente para fortalecer sua segurança online e prevenir ataques cibernéticos. Experimente agora!",
        "strong" => "Forte",
        "medium" => "Médio",
        "weak" => "Fraco",
        "generate" => "Geração rápida",
        "copied" => "Senha copiada!",
        "password_length" => "Comprimento da senha",
        "uppercase" => "Letras maiúsculas",
        "lowercase" => "Letras minúsculas",
        "numbers" => "Números",
        "symbols" => "Símbolos",
        "generate_for" => "Gerar uma senha para",
    ],
    "it" => [
        "title" => "Generatore di password sicure e veloci",
        "description" => "Genera password sicure, proteggi i tuoi account Gmail, Facebook, Twitch, Discord e Instagram con password forti utilizzando Smart Password Generator. Genera password sicure e veloci gratuitamente per rafforzare la tua sicurezza online e prevenire attacchi informatici. Provalo ora!",
        "strong" => "Forte",
        "medium" => "Medio",
        "weak" => "Debole",
        "generate" => "Generazione rapida",
        "copied" => "Password copiata!",
        "password_length" => "Lunghezza della password",
        "uppercase" => "Lettere maiuscole",
        "lowercase" => "Lettere minuscole",
        "numbers" => "Numeri",
        "symbols" => "Simboli",
        "generate_for" => "Genera una password per",
    ],
];

$questions = [
    "fr" => [
        "Avez-vous déjà eu peur que quelqu'un puisse accéder à vos comptes de réseaux sociaux ou voler vos données personnelles?",
        "Avez-vous déjà été victime d'une violation de données en ligne?",
        "Vous sentez-vous parfois dépassé par la complexité des mots de passe?",
        "Avez-vous déjà été victime d'une fraude en ligne?",
        "Savez-vous quels sont les éléments qui font d'un mot de passe un mot de passe sécurisé?",
        "Combien de temps peut-on utiliser un même mot de passe?",
        "Comment stockez-vous vos mots de passe en toute sécurité?",
        "Que faire si vous pensez que votre mot de passe a été compromis?",
        "Qu'est-ce qui rend Smart Password Generator différent des autres générateurs de mots de passe?",
        "Comment puis-je utiliser Smart Password Generator pour protéger mes comptes en ligne?"
    ],
    "en" => [
        "Have you ever been afraid that someone could access your social media accounts or steal your personal data?",
        "Have you ever been a victim of online data breach?",
        "Do you sometimes feel overwhelmed by the complexity of passwords?",
        "Have you ever been a victim of online fraud?",
        "Do you know what elements make a password secure?",
        "How long can you use the same password?",
        "How do you store your passwords securely?",
        "What should you do if you suspect your password has been compromised?",
        "What makes Smart Password Generator different from other password generators?",
        "How can I use Smart Password Generator to protect my online accounts?"
    ]
];

$answers = [
    "fr" => [
        "Avec Smart Password Generator, vous n'avez plus à vous inquiéter de la sécurité de vos comptes en ligne. Notre outil innovant vous permet de générer des mots de passe sécurisés en quelques clics seulement. Vous pouvez ainsi protéger vos comptes sur des plateformes populaires telles que Gmail, YouTube, Discord, Instagram et LinkedIn. Vous pouvez dormir sur vos deux oreilles en sachant que vos données personnelles sont en sécurité.",
        "Smart Password Generator vous permet de prendre le contrôle de votre sécurité en ligne. Avec notre solution facile à utiliser, vous pouvez générer des mots de passe sécurisés pour tous vos comptes en ligne, ce qui vous protège contre les violations de données et les cyberattaques. Vous n'aurez plus à craindre que vos données personnelles soient volées ou compromises.",
        "Smart Password Generator simplifie la gestion de vos mots de passe. Notre outil intuitif vous permet de générer des mots de passe sécurisés en quelques secondes seulement, sans avoir à vous rappeler de longues combinaisons de chiffres et de lettres. Vous pouvez ainsi utiliser des mots de passe uniques et complexes pour chaque compte en ligne, sans avoir à vous soucier de les retenir.",
        "Avec Smart Password Generator, vous pouvez protéger vos comptes en ligne contre les fraudes et les escroqueries. Notre solution de mots de passe sécurisés vous permet de créer des combinaisons uniques et complexes pour chaque compte en ligne, ce qui rend beaucoup plus difficile pour les fraudeurs de voler vos données personnelles ou de vous arnaquer. Vous pouvez ainsi naviguer en toute sécurité sur internet, en sachant que vos comptes et vos informations sont protégés.",
        "Avec Smart Password Generator, nous vous aidons à respecter les bonnes pratiques pour la création de mots de passe sécurisés. Nous vous proposons des combinaisons de chiffres, de lettres et de caractères spéciaux pour garantir une sécurité optimale.",
        "Smart Password Generator vous permet de créer des mots de passe uniques et complexes pour chaque compte en ligne, ce qui renforce votre sécurité. Nous vous recommandons de changer vos mots de passe tous les trois mois pour une sécurité optimale.",
        "Nous vous recommandons de stocker vos mots de passe dans un gestionnaire de mots de passe. Smart Password Generator vous permet d'exporter vos mots de passe pour une utilisation ultérieure avec un gestionnaire de mots de passe.",
        "Si vous pensez que votre mot de passe a été compromis, nous vous recommandons de le changer immédiatement. Smart Password Generator vous permet de générer un nouveau mot de passe sécurisé en quelques clics seulement. Nous vous conseillons également de vérifier l'activité de votre compte pour détecter toute activité suspecte.",
        "Smart Password Generator est différent des autres générateurs de mots de passe car il est facile à utiliser, rapide et offre des options de personnalisation avancées pour garantir une sécurité optimale.",
        "Pour utiliser Smart Password Generator, il vous suffit de choisir les options de personnalisation souhaitées, telles que la longueur du mot de passe, les chiffres, les lettres majuscules et minuscules, et les symboles. Ensuite, cliquez sur le bouton 'Générer' pour obtenir un mot de passe sécurisé. Vous pouvez ensuite l'utiliser pour protéger vos comptes en ligne."
    ],
    "en" => [
        "With Smart Password Generator, you no longer have to worry about the security of your online accounts. Our innovative tool allows you to generate secure passwords in just a few clicks. You can protect your accounts on popular platforms such as Gmail, YouTube, Discord, Instagram, and LinkedIn. You can rest assured that your personal data is safe.",
        "Smart Password Generator allows you to take control of your online security. With our easy-to-use solution, you can generate secure passwords for all your online accounts, protecting you against data breaches and cyberattacks. You no longer have to worry about your personal data being stolen or compromised.",
        "Smart Password Generator simplifies password management. Our intuitive tool allows you to generate secure passwords in just a few seconds, without having to remember long combinations of numbers and letters. You can use unique and complex passwords for each online account without worrying about remembering them.",
        "With Smart Password Generator, you can protect your online accounts against fraud and scams. Our secure password solution allows you to create unique and complex combinations for each online account, making it much more difficult for fraudsters to steal your personal data or scam you. You can browse the internet safely, knowing that your accounts and information are protected.",
        "With Smart Password Generator, we help you follow best practices for creating secure passwords. We offer combinations of numbers, letters, and special characters to ensure optimal security.",
        "Smart Password Generator allows you to create unique and complex passwords for each online account, enhancing your security. We recommend changing your passwords every three months for optimal security.",
        "We recommend storing your passwords in a password manager. Smart Password Generator allows you to export your passwords for later use with a password manager.",
        "If you suspect your password has been compromised, we recommend changing it immediately. Smart Password Generator allows you to generate a new secure password in just a few clicks. We also advise checking your account activity to detect any suspicious activity.",
        "Smart Password Generator is different from other password generators because it is easy to use, fast, and offers advanced customization options to ensure optimal security.",
        "To use Smart Password Generator, simply choose the desired customization options, such as password length,uppercase and lowercase letters, numbers, and symbols. Then, click the 'Generate' button to get a secure password. You can then use it to protect your online accounts."
    ]
];
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Password Generator | <?php echo $translations[$lang]['title']; ?></title>
    <meta name="description" content="<?php echo $translations[$lang]['description']; ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" />
    <link rel="alternate" hreflang="fr" href="https://smartpasswordgenerator.com/fr/" />
    <link rel="alternate" hreflang="en" href="https://smartpasswordgenerator.com/us/" />
</head>

<body class="bg-gradient-to-r from-black via-purple-900 to-purple-700 min-h-screen">

    <div class="notification hidden text-green-500 mb-5"></div>
    <div class="mx-auto max-w-4xl mt-20">
        <div class="flex flex-col items-center">
            <h1 class="text-5xl text-center font-extrabold text-transparent text-8xl bg-clip-text bg-gradient-to-r from-purple-400 to-white">
                Smart Password Generator</h1>
            <p class="text-xl text-center text-white mt-6 mb-10 py-10 px-4 leading-relaxed">
                <?php echo $translations[$lang]['description']; ?></p>
            <div class="flex flex-row justify-center w-full">
                <div class="flex flex-row justify-between generated-password-container relative bg-white text-xl text-center text-black p-5 rounded w-8/12 h-16">
                    <div class="generated-password"></div>
                    <div class="password-strength-indicator text-green-500 absolute right-0 top-1/2 transform -translate-y-1/2 w-12">
                    </div>
                </div>
            </div>

            <div class="relative inline-block mt-6">

                <button id="generateBtn" class="text-2xl generate-btn bg-gradient-to-r from-purple-500 via-pink-500 to-red-500 hover:from-purple-600 hover:via-pink-600 hover:to-red-600 text-white font-bold mt-6 px-12 py-6 rounded-lg mb-5"><?php echo $translations[$lang]['generate']; ?></button>
                <div id="notification" class="absolute top-0 -right-24 bg-blue-500 text-white px-4 py-2 rounded-lg mt-2 mr-2 hidden">
                    <?php echo $translations[$lang]['copied']; ?>
                </div>
            </div>



            <div class="flex flex-row mt-6 w-3/4 justify-center gap-4">
                <label for="password-length" class="text-xl text-center text-whiteleading-relaxed text-white"><?php echo $translations[$lang]['password_length']; ?></label>
                <div><input type="range" id="password-length" class="h-2 w-full cursor-ew-resize rounded-full bg-gray-200" min="3" max="48" value="12"></div>
                <span id="password-length-display" class="text-pink-500 text-2xl font-bold">12</span>


            </div>



            <div class="flex flex-row mt-6 w-3/4 justify-center gap-4">
                <button id="include-uppercase" class="bg-blue-500 text-white px-4 py-2 rounded" data-active="true"><?php echo $translations[$lang]['uppercase']; ?> &#10003;</button>
                <button id="include-lowercase" class="bg-blue-500 text-white px-4 py-2 rounded" data-active="true"><?php echo $translations[$lang]['lowercase']; ?> &#10003;</button>
                <button id="include-numbers" class="bg-blue-500 text-white px-4 py-2 rounded" data-active="true"><?php echo $translations[$lang]['numbers']; ?> &#10003;</button>
                <button id="include-symbols" class="bg-blue-500 text-white px-4 py-2 rounded" data-active="true"><?php echo $translations[$lang]['symbols']; ?> &#10003;</button>
            </div>



            <h2 class="text-2xl font-bold text-white mb-5 mt-6"><?php echo $translations[$lang]['generate_for']; ?>:
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">

                <button data-min-length="4" data-include-uppercase="true" data-include-numbers="true" type="button" data-te-ripple-init="" data-te-ripple-color="light" class="service-btn mb-2 inline-block rounded px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg" style="background-color: rgb(234, 67, 53);">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M7 11v2.4h3.97c-.16 1.029-1.2 3.02-3.97 3.02-2.39 0-4.34-1.979-4.34-4.42 0-2.44 1.95-4.42 4.34-4.42 1.36 0 2.27.58 2.79 1.08l1.9-1.83c-1.22-1.14-2.8-1.83-4.69-1.83-3.87 0-7 3.13-7 7s3.13 7 7 7c4.04 0 6.721-2.84 6.721-6.84 0-.46-.051-.81-.111-1.16h-6.61zm0 0 17 2h-3v3h-2v-3h-3v-2h3v-3h2v3h3v2z" fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>

                <button data-min-length="25" data-include-uppercase="true" data-include-numbers="true" type="button" data-te-ripple-init="" data-te-ripple-color="light" class="service-btn mb-2 inline-block rounded px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg" style="background-color: rgb(24, 119, 242);">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M9 8h-3v4h3v12h5v-12h3.642l-.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z">
                        </path>
                    </svg>
                </button>
                <button data-min-length="38" data-include-uppercase="true" data-include-numbers="true type=" button" data-te-ripple-init="" data-te-ripple-color="light" class="service-btn mb-2 inline-block rounded px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg" style="background-color: rgb(114, 137, 218);">
                    <svg class="h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 24 24">
                        <path d="M19.54 0c1.356 0 2.46 1.104 2.46 2.472v21.528l-2.58-2.28-1.452-1.344-1.536-1.428.636 2.22h-13.608c-1.356 0-2.46-1.104-2.46-2.472v-16.224c0-1.368 1.104-2.472 2.46-2.472h16.08zm-4.632 15.672c2.652-.084 3.672-1.824 3.672-1.824 0-3.864-1.728-6.996-1.728-6.996-1.728-1.296-3.372-1.26-3.372-1.26l-.168.192c2.04.624 2.988 1.524 2.988 1.524-1.248-.684-2.472-1.02-3.612-1.152-.864-.096-1.692-.072-2.424.024l-.204.024c-.42.036-1.44.192-2.724.756-.444.204-.708.348-.708.348s.996-.948 3.156-1.572l-.12-.144s-1.644-.036-3.372 1.26c0 0-1.728 3.132-1.728 6.996 0 0 1.008 1.74 3.66 1.824 0 0 .444-.54.804-.996-1.524-.456-2.1-1.416-2.1-1.416l.336.204.048.036.047.027.014.006.047.027c.3.168.6.3.876.408.492.192 1.08.384 1.764.516.9.168 1.956.228 3.108.012.564-.096 1.14-.264 1.74-.516.42-.156.888-.384 1.38-.708 0 0-.6.984-2.172 1.428.36.456.792.972.792.972zm-5.58-5.604c-.684 0-1.224.6-1.224 1.332 0 .732.552 1.332 1.224 1.332.684 0 1.224-.6 1.224-1.332.012-.732-.54-1.332-1.224-1.332zm4.38 0c-.684 0-1.224.6-1.224 1.332 0 .732.552 1.332 1.224 1.332.684 0 1.224-.6 1.224-1.332 0-.732-.54-1.332-1.224-1.332z">
                        </path>
                    </svg>
                </button>

                <button data-min-length="12" data-include-uppercase="true" data-include-numbers="true type=" button" data-te-ripple-init="" data-te-ripple-color="light" class="service-btn mb-2 inline-block rounded px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg" style="background-color: rgb(193, 53, 132);">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z">
                        </path>
                    </svg>
                </button>

                <button data-min-length="12" data-include-uppercase="true" data-include-numbers="true type=" button" data-te-ripple-init="" data-te-ripple-color="light" class="service-btn mb-2 inline-block rounded px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg" style="background-color: rgb(0, 119, 181);">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z">
                        </path>
                    </svg>
                </button>

                <button data-min-length="12" data-include-uppercase="true" data-include-numbers="true type=" button" data-te-ripple-init="" data-te-ripple-color="light" class="service-btn mb-2 inline-block rounded px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg" style="background-color: rgb(230, 0, 35);">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0c-6.627 0-12 5.372-12 12 0 5.084 3.163 9.426 7.627 11.174-.105-.949-.2-2.405.042-3.441.218-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.655 2.568-.994 3.995-.283 1.194.599 2.169 1.777 2.169 2.133 0 3.772-2.249 3.772-5.495 0-2.873-2.064-4.882-5.012-4.882-3.414 0-5.418 2.561-5.418 5.207 0 1.031.397 2.138.893 2.738.098.119.112.224.083.345l-.333 1.36c-.053.22-.174.267-.402.161-1.499-.698-2.436-2.889-2.436-4.649 0-3.785 2.75-7.262 7.929-7.262 4.163 0 7.398 2.967 7.398 6.931 0 4.136-2.607 7.464-6.227 7.464-1.216 0-2.359-.631-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146 1.124.347 2.317.535 3.554.535 6.627 0 12-5.373 12-12 0-6.628-5.373-12-12-12z" fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>

                <button data-min-length="12" data-include-uppercase="true" data-include-numbers="true type=" button" data-te-ripple-init="" data-te-ripple-color="light" class="service-btn mb-2 inline-block rounded px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg" style="background-color: rgb(29, 161, 242);">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z">
                        </path>
                    </svg>
                </button>

                <button data-min-length="12" data-include-uppercase="true" data-include-numbers="true type=" button" data-te-ripple-init="" data-te-ripple-color="light" class="mb-2 inline-block rounded px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg" style="background-color: rgb(145, 70, 255);">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M2.149 0l-1.612 4.119v16.836h5.731v3.045h3.224l3.045-3.045h4.657l6.269-6.269v-14.686h-21.314zm19.164 13.612l-3.582 3.582h-5.731l-3.045 3.045v-3.045h-4.836v-15.045h17.194v11.463zm-3.582-7.343v6.262h-2.149v-6.262h2.149zm-5.731 0v6.262h-2.149v-6.262h2.149z" fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <!-- Ajouter d'autres boutons de services ici -->
            </div>

            <section class="mt-20">
                <h2 class="text-4xl text-center font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-white mb-10">
                    FAQ</h2>
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <div class="accordion w-full">
                        <div class="faq-container">
                            <?php for ($i = 0; $i < 10; $i++) : ?>
                                <div class="faq-item mb-6">
                                    <input type="checkbox" id="faq<?= $i ?>" class="hidden">
                                    <label for="faq<?= $i ?>" class="text-xl font-semibold text-purple-700 mb-2 cursor-pointer flex justify-between items-center">
                                        <?php echo $questions[$lang][$i] ?>
                                        <svg class="faq-arrow w-6 h-6 transform transition-transform duration-300" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </label>
                                    <div class="faq-content overflow-hidden max-h-0 transition-all duration-500">
                                        <p class="text-purple-900"><?php echo $answers[$lang][$i] ?></p>
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>


                    </div>
                </div>
            </section>

            <style>
                input[type="checkbox"]:checked~.faq-arrow {
                    transform: rotate(180deg);
                }

                input[type="checkbox"]:checked~.faq-content {
                    max-height: 1000px;
                    padding-top: 1rem;
                }
            </style>

        </div>
    </div>
    <footer class="bg-black-900 text-white w-full mt-16 py-8">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center">
                <div class="w-full md:w-1/3 text-center md:text-left">
                    <h4 class="font-bold mb-4">0xWeb3Wiz</h4>
                    <p>©<?php echo date("Y"); ?> 0xWeb3Wiz
                    </p>
                </div> 
                <div class="w-full md:w-1/3 text-center">
                    <h4 class="font-bold mb-4">Réseaux sociaux</h4>
                    <ul class="inline-flex">
                        <li class="mr-4">
                            <a href="https://github.com/0xWeb3Wiz" target="_blank" rel="noopener noreferrer" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                                GitHub
                            </a>
                        </li> 
                        <li class="mr-4">
                            <a href="https://twitter.com/web3_wiz" target="_blank" rel="noopener noreferrer" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                                Twitter
                            </a>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            document.getElementById('generateBtn').addEventListener('click', function() {
                const notification = document.getElementById('notification');
                notification.classList.remove('hidden');
                setTimeout(function() {
                    notification.classList.add('hidden');
                }, 3000);
            });


            const buttons = document.querySelectorAll('button[id^="include-"]');

            buttons.forEach(button => {
                button.addEventListener('click', () => {
                    const isActive = button.getAttribute('data-active') === 'true';
                    button.setAttribute('data-active', !isActive);
                    button.classList.toggle('bg-blue-500', !isActive);
                    button.classList.toggle('bg-red-500', isActive);
                    const buttonText = button.textContent.split(' ').slice(0, -1).join(' ');
                    button.innerHTML = `${buttonText} ${isActive ? '&#10007;' : '&#10003;'}`;
                });
            });

            const generateBtn = document.querySelector('.generate-btn');
            const serviceBtns = document.querySelectorAll('.service-btn');
            const generatedPasswordDisplay = document.querySelector('.generated-password');
            const passwordLengthInput = document.querySelector('#password-length');
            const passwordStrengthIndicator = document.querySelector('.password-strength-indicator');
            const passwordLengthDisplay = document.querySelector('#password-length-display');


            //


            passwordLengthInput.addEventListener('input', () => {
                passwordLengthDisplay.textContent = passwordLengthInput.value;
                const passwordLength = parseInt(passwordLengthInput.value);
                const password = generatePassword(passwordLength);
                generatedPasswordDisplay.textContent = password;
                displayPasswordStrength(getPasswordStrength(password));
            });

            const notification = document.querySelector('.notification');

            function generatePassword(length = 10, options = {}) {
                const {
                    includeUppercase = true,
                        includeLowercase = true,
                        includeNumbers = true,
                        includeSymbols = true,
                } = options;

                const uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                const lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
                const numberChars = '0123456789';
                const symbolChars = '!@#$%^&*()';

                let characters = '';

                if (includeUppercase) characters += uppercaseChars;
                if (includeLowercase) characters += lowercaseChars;
                if (includeNumbers) characters += numberChars;
                if (includeSymbols) characters += symbolChars;

                let password = [];

                for (let i = 0; i < length; i++) {
                    const randomIndex = Math.floor(Math.random() * characters.length);
                    password.push(characters[randomIndex]);
                }

                return password;
            }


            serviceBtns.forEach((btn) => {
                btn.addEventListener('click', () => {
                    const minLength = parseInt(btn.getAttribute('data-min-length')) || 10;
                    const includeUppercase = btn.getAttribute('data-include-uppercase') === 'true';
                    const includeLowercase = btn.getAttribute('data-include-lowercase') === 'true';
                    const includeNumbers = btn.getAttribute('data-include-numbers') === 'true';
                    const includeSymbols = btn.getAttribute('data-include-symbols') === 'true';

                    const options = {
                        includeUppercase,
                        includeLowercase,
                        includeNumbers,
                        includeSymbols,
                    };

                    const passwordLength = Math.max(minLength, minLength);
                    const password = generatePassword(passwordLength, options);
                    animatePasswordDisplay(password);
                    displayPasswordStrength(getPasswordStrength(password.join('')));
                    copyToClipboard(password.join(''));
                });
            });

            generateBtn.addEventListener('click', () => {
                const passwordLength = parseInt(passwordLengthInput.value);
                const password = generatePassword(passwordLength);
                animatePasswordDisplay(password);
                displayPasswordStrength(getPasswordStrength(password.join('')));
                copyToClipboard(password.join(''));
            });
            /*
                    serviceBtns.forEach((btn) => {
                        btn.addEventListener('click', () => {
                            const passwordLength = parseInt(passwordLengthInput.value);
                            const password = generatePassword(passwordLength);
                            animatePasswordDisplay(password);
                            displayPasswordStrength(getPasswordStrength(password.join('')));
                            copyToClipboard(password.join(''));
                        });
                    });
            */
            passwordLengthInput.addEventListener('input', () => {
                passwordLengthDisplay.textContent = passwordLengthInput.value;
                const passwordLength = parseInt(passwordLengthInput.value);
                const password = generatePassword(passwordLength);
                animatePasswordDisplay(password);
                displayPasswordStrength(getPasswordStrength(password.join('')));
            });





            function animatePasswordDisplay(passwordArray) {
                const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()';
                const animationDuration = 70;
                const rotationSpeed = 80;

                generatedPasswordDisplay.textContent = new Array(passwordArray.length + 1).join(' ');

                for (let i = 0; i < passwordArray.length; i++) {
                    let animationInterval = setInterval(() => {
                        const randomIndex = Math.floor(Math.random() * characters.length);
                        generatedPasswordDisplay.textContent = generatedPasswordDisplay.textContent.slice(0,
                            i) + characters[randomIndex] + generatedPasswordDisplay.textContent.slice(
                            i + 1);
                    }, rotationSpeed);

                    setTimeout(() => {
                        clearInterval(animationInterval);
                        generatedPasswordDisplay.textContent = generatedPasswordDisplay.textContent.slice(0,
                            i) + passwordArray[i] + generatedPasswordDisplay.textContent.slice(i + 1);
                    }, animationDuration + i * animationDuration);
                }
            }

            function getPasswordStrength(password) {
                const strongRegex = new RegExp('^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})');
                const mediumRegex = new RegExp('^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{6,})');

                if (strongRegex.test(password)) {
                    return 'strong';
                } else if (mediumRegex.test(password)) {
                    return 'medium';
                } else {
                    return 'weak';
                }
            }

            function displayPasswordStrength(strength) {
                let strengthText = '';
                let strengthColor = '';

                const lang = '<?php echo $lang; ?>';
                const translations = <?php echo json_encode($translations); ?>;

                strengthText = translations[lang][strength.toLowerCase()];

                switch (strength) {
                    case 'strong':
                        strengthColor = 'text-green-500';
                        break;
                    case 'medium':
                        strengthColor = 'text-yellow-500';
                        break;
                    case 'weak':
                        strengthColor = 'text-red-500';
                        break;
                }

                passwordStrengthIndicator.textContent = strengthText;
                passwordStrengthIndicator.className = `password-strength-indicator ml-4 w-12 ${strengthColor}`;
            }

            function copyToClipboard(text) {
                const textarea = document.createElement('textarea');
                textarea.value = text;
                document.body.appendChild(textarea);
                textarea.select();
                document.execCommand('copy');
                document.body.removeChild(textarea);
            }
        });
    </script>
</body>

</html>