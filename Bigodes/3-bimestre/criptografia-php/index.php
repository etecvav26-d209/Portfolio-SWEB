<?php

    include("includes/header.php");

?>

<main>

    <section id="inicio">

        <div class="container">

            <h2>Introdução</h2>

            <p>
                A criptografia é uma área da segurança da informação
                responsável por proteger dados por meio de técnicas que
                dificultam o acesso ou a interpretação das informações
                por pessoas não autorizadas.
            </p>

            <p>
                No desenvolvimento de sistemas, existem diferentes formas
                de trabalhar com informações. Entre elas estão as funções
                de hash e os métodos de codificação, que possuem
                características e finalidades diferentes.
            </p>

            <p>
                Este projeto tem como objetivo apresentar e demonstrar,
                de forma prática, três métodos disponíveis no PHP:
                MD5, SHA-256 e Base64.
            </p>

            <p>
                Durante o projeto, será possível conhecer o funcionamento
                básico de cada método e testar diferentes textos para
                visualizar os resultados gerados pelo PHP.
            </p>

        </div>

    </section>

    <section id="md5">

        <div class="container">

            <h2>MD5</h2>

            <p>
                MD5 (Message-Digest Algorithm 5) é uma função de hash
                que transforma uma informação de entrada em uma sequência
                de caracteres de tamanho fixo.
            </p>

            <p>
                O resultado gerado pelo MD5 possui 128 bits e normalmente
                é representado por uma sequência hexadecimal de 32 caracteres.
            </p>

            <p>
                No PHP, podemos utilizar a função md5() para gerar o hash
                de um determinado texto.
            </p>

        </div>

        <div class="card">

            <h3>Teste o MD5</h3>

            <p>
                Digite um texto abaixo para gerar seu hash MD5.
            </p>

                 <form action="processar.php" method="POST">

                  <input
                    type="text"
                    name="texto"
                    placeholder="Digite um texto"
                >

                <input
                    type="hidden"
                    name="metodo"
                    value="md5"
                >

                 <button type="submit">
                    Gerar MD5
                </button>

                </form>
        </div>
    </section>

</main>

<?php

    include("includes/footer.php");

?>