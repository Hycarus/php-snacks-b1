<?php
$text = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur ab reprehenderit amet in dignissimos incidunt accusamus deleniti numquam! Id commodi, vel eaque vero debitis soluta enim obcaecati corporis aspernatur eligendi temporibus voluptatibus dolorum amet. Minima quam enim in quasi. Consequatur, error dolorem, maiores culpa voluptatum, qui tenetur molestiae repellendus deleniti natus ullam ducimus dolorum cum neque! Quia laborum deserunt alias quam omnis totam? Vero quaerat temporibus fugiat. Nobis in dolores dicta nulla accusamus quas, illo, harum eaque hic sed iusto quidem corporis obcaecati ea! Deserunt sed, labore minima maiores ullam rem adipisci vitae soluta pariatur reprehenderit in earum suscipit possimus iusto saepe, aliquid voluptas, cum eligendi facere? Reiciendis maxime quidem architecto dolorem libero autem reprehenderit neque possimus officiis optio, ut esse quos incidunt repellat recusandae nam beatae harum, placeat, ipsum animi vel. Nulla non placeat incidunt accusamus, culpa voluptate rem. Ex nihil in consequuntur, exercitationem quas voluptate minus neque facilis nemo veritatis omnis rem aperiam, minima aut dolores, aliquam accusantium quae deserunt accusamus totam provident vero eius praesentium eveniet. Voluptas deserunt molestiae dolores non ad eveniet a fugiat harum, accusamus minima rem excepturi rerum error! Qui delectus harum perferendis deserunt doloremque accusamus? Delectus, eaque quo consequuntur ad, nostrum doloribus illo at illum, asperiores accusantium ea! Laboriosam natus autem laudantium fuga consequuntur officiis et ratione in quisquam voluptatibus. Facilis eaque corporis unde. Quas repudiandae quod distinctio? Itaque tempora maxime beatae sequi, quam inventore voluptas reprehenderit harum excepturi modi veritatis cupiditate quas incidunt architecto minima quasi facilis ut amet sit! At dicta blanditiis, harum labore illo dolorem ea explicabo ipsa possimus, eaque modi illum recusandae id cupiditate quo voluptatum necessitatibus velit? Neque, ullam beatae accusantium consectetur voluptatum soluta eveniet voluptate nihil voluptatem veritatis esse, distinctio amet laboriosam eum explicabo dolorem, consequuntur molestias laudantium nam sequi doloribus omnis. Repudiandae ducimus, omnis numquam tempore fugit fugiat aut ipsum sint veritatis facilis consectetur ullam quo ut in, quas officia labore, sequi corporis nobis iste quisquam distinctio alias ratione. Voluptates cupiditate pariatur excepturi quidem unde repellat quam quaerat, deleniti cum officiis iusto quod expedita, incidunt, eius ipsum debitis alias hic modi? Facere consequuntur dolorem similique ipsam nisi pariatur tenetur repellat, laborum quia accusantium architecto ipsa quis voluptates fugiat cum. Quibusdam adipisci accusamus numquam earum optio ut veritatis voluptate hic laboriosam dolorem unde eos itaque placeat deserunt deleniti expedita, minima illo nihil ipsa excepturi voluptatum aliquid culpa pariatur. Et quam error assumenda possimus voluptatum recusandae esse porro nulla tempore ab earum, laudantium ullam omnis minus nostrum facilis? Voluptatum magni, labore, rerum repellendus voluptas ut facere velit nesciunt excepturi ipsa ipsum! Quod, officia ipsam dolorem corporis asperiores nihil iste fuga laborum, unde aliquid nulla nesciunt velit odio delectus tempora voluptatum? Minima cupiditate quae eos reiciendis voluptatem repellat debitis dicta ducimus numquam, omnis possimus. Quos, amet repellendus? Nostrum ullam, eveniet sunt accusantium voluptatibus aliquid dolorem saepe, dolorum dignissimos eligendi totam, nisi exercitationem reiciendis? Dolorum, nobis sint odit veniam, sapiente nemo veritatis cumque iure voluptates, molestiae quas ducimus assumenda praesentium. Eveniet distinctio sunt consequatur sequi tempore autem deleniti similique ex?';
$paragraph = explode(".", $text);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- font-awesome CSS, VueJs and Axios-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- link to Font-Family and CSS Files -->
    <link rel="stylesheet" href="../css/style.css" />
    <!-- Document Title -->
    <title>Snack Bonus</title>
</head>

<body>

    <main>
        <div id="app">
            <?php
            foreach ($paragraph as $value) { ?>
                <p><?php echo $value ?>.</p>
            <?php } ?>
        </div>
    </main>


    <!-- My JS -->
    <script src="js/script.js" type="module"></script>
</body>

</html>