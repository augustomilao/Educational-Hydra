<?php

//* falando sério, eu ia até usar um biblioteca ou algo do tipo, mas po, eu não começei assim, então vamos voltar as sujas origens e quem sabe mais pra..
//* opa, primeira regra ja, cada linha com no máximo ~150 caracteres, pq? falam q facilita a leitura, vamos testar ne, continuado, mais pra frente podemos
//* testar mudar para uma framework, ou quem sabe até de linguagem geral


//? por enquanto vamos rodar via php msm : php -S 0.0.0.0:8000 .\router.php

// foreach ($_SERVER as $atributo => $valor) {
//     echo $atributo . '| => |';
//     var_dump($valor);
//     echo '<br>';
// }

$url = $_SERVER['REQUEST_URI'];

$url = explode('/', $url);
array_shift($url);


switch ($url[0]) {
    case 'testes':
        echo 'eita, essa aqui existe';
        break;

    default:
        echo 'Página não encontrada, pelo visto';
        break;
}
