<?php
require_once './base.php';
?>

<head>
    <script src="js/scrollspy.min.js"></script>
</head>

<body>
    <!-- SCRIVERE IL CODICE ALL'INTERNO DI QUESTO DIV -->
    <section class="bg-neutral-50">
        <div class="container px-6 py-12 mx-auto">
            <h1 class="text-5xl font-bold text-center text-amber-400">Frequently Asked Question</h1>
            <div class="mt-16 -mx-12 flex">
                <div class="flex flex-col flex-1 space-y-10 px-20">
                    <?php
                        $data = json_decode(file_get_contents('./static/data/faq.json'));

                        foreach ($data as $section) {
                            echo "
                            <section>
                                <h1 class=\"font-bold text-2xl text-gray-800\">$section->title</h1>
                                <p class=\"text-lg mt-2 text-gray-600 border-amber-300 border-l-[3px] pl-4\">$section->content</p>
                            </section>
                            ";
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
</body>
