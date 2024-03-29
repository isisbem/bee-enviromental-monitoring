<!DOCTYPE html>
<html lang="it">
  <head>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          fontFamily: {
            'sans': ['Rubik', 'sans-serif']
          }
        }
      }
    </script>
  </head>
  <body class="flex flex-col grow min-h-screen h-full">
    <nav class="flex sm:px-10 py-3.5 w-full border-b border-neutral-200 bg-white">
      <ul class="flex space-x-5 mx-auto text-lg font-medium">
        <li><a class="text-neutral-900 hover:text-amber-500 transition-colors duration-100" href="./index.php">Home</a></li>
        <li><a class="text-neutral-900 hover:text-amber-500 transition-colors duration-100" href="./chi-siamo.php">Chi siamo</a></li>
        <li><a class="text-neutral-900 hover:text-amber-500 transition-colors duration-100" href="./faq.php">FAQ</a></li>
        <li><a class="text-neutral-900 hover:text-amber-500 transition-colors duration-100" href="./honeycumb.php">Grafici</a></li>
      </ul>
    </nav>
  </body>
</html>
