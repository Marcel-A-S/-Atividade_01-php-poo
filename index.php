<?php

require_once "src/Planta.php";

$planta = new Planta(
    'Suculenta',
    'Echeveria elegans',
    15
);


// Coloca objeto dentro do array
$plantas = [$planta];

?>
<!-- 
Importe a classe Planta.
Crie um objeto da classe Planta.
Utilize os dados informados no enunciado. -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Plantas</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <main class="container">
    

        <h1>Catálogo de Plantas</h1>

        <p class="subtitulo">
        
            Cuidados simples para cultivar em casa.
        </p>

        <section class="cartao">
             <?php foreach ($planta as $planta): ?>

            
                <!-- Exiba o nome popular da planta. -->
                 <h2>
                    <?= $planta->getNome() ?>
                </h2>
            

            <div class="informacao">
               
            
                <span class="rotulo">Espécie científica></span>

                <span class="valor">
                    <!-- Exiba a espécie. -->
                      <h2>
                        <?= $planta->getEspecie() ?> </h2>
                </span>
            </div>

            <div class="informacao">
                <span class="rotulo">Água recomendada por dia <?=  $planta->getAguaPorDia() ?></span>

                <span class="valor">
                    <!-- Exiba a quantidade diária em ml. -->
                     <h2> 
                        <?= $planta->getAguaPorDia() ?> ml
                    </h2>
                </span>
            </div>

            <div class="destaque">
                <strong>
                    Recomendação para sete dias <?=  $planta-> getAguaPorDia() ?>
                </strong>

                <p>
                    <!-- Exiba a quantidade calculada para sete dia -->
                     <?=  $planta-> getcalcularguaSemanal() ?> ml
                </p>
            </div>

        </section>
         <?php endforeach; ?>

        <footer>
            Projeto desenvolvido com PHP e Programação Orientada a Objetos.
        </footer>

    </main>

</body>
</html>
