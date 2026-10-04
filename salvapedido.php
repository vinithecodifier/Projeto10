<?php

$mesa = $_POST["mesa"];
$itens = $_POST["itens"];

// Array com as observações. Vem dos inputs name="obs[chave_do_item]".
// O ?? significa "se não existir, use o que vem depois" (aqui, um array vazio),
// assim o código não quebra caso nenhuma observação seja enviada.
$obs = $_POST["obs"] ?? [];
$total = 0;

$cardapio = [
    // pratos
    "pratos_contra_file_com_ovo" => ["nome" => "Contra Filé com Ovo", "preco" => 25.00],
    "pratos_file_de_frango" => ["nome" => "Filé de Frango", "preco" => 20.00],
    "pratos_file_a_parmegiana" => ["nome" => "Filé de Frango à Parmegiana", "preco" => 28.00],
    "pratos_picanha_grelhada" => ["nome" => "Picanha Grelhada", "preco" => 35.00],
    "pratos_frango_grelhado_com_legumes" => ["nome" => "Frango Grelhado com Legumes", "preco" => 22.00],
    "pratos_bife_a_role" => ["nome" => "Bife à Role", "preco" => 26.00],
    "pratos_strogonoff_de_frango" => ["nome" => "Strogonoff de Frango", "preco" => 26.00],
    "pratos_costela_ao_molho_barbecue" => ["nome" => "Costela ao molho Barbecue", "preco" => 26.00],
    // bebidas
    "bebidas_coca_lata" => ["nome" => "Coca Cola Lata", "preco" => 7.00],
    "bebidas_fanta_laranja_lata" => ["nome" => "Fanta Laranja Lata", "preco" => 7.00],
    "bebidas_fanta_uva_lata" => ["nome" => "Fanta Uva Lata", "preco" => 7.00],
    "bebidas_tubaina_lata" => ["nome" => "Tubaína Lata", "preco" => 7.00],
    "bebidas_tubaina_garrafa" => ["nome" => "Tubaína Garrafa", "preco" => 7.00],
    "bebidas_sukita_2l" => ["nome" => "Sukita 2L", "preco" => 13.00],
    "bebidas_coca_cola_1l" => ["nome" => "Coca Cola 1L", "preco" => 13.00],
    "bebidas_coca_cola_2l" => ["nome" => "Coca Cola 2L", "preco" => 17.00],
    "bebidas_suco_de_morango" => ["nome" => "Suco de Morango", "preco" => 10.00],
    "bebidas_suco_de_maracuja" => ["nome" => "Suco de Maracuja", "preco" => 10.00],
    "bebidas_suco_de_laranja" => ["nome" => "Suco de Laranja", "preco" => 10.00],
    // Lanches
    "lanches_x_salada" => ["nome" => "X-Salada", "preco" => 15.00],
    "lanches_x_egg" => ["nome" => "X-EGG", "preco" => 20.00],
    "lanches_x_calabresa" => ["nome" => "X-Calabresa", "preco" => 20.00],
    "lanches_x_tudo" => ["nome" => "X-Tudo", "preco" => 25.00],
    "lanches_misto_quente" => ["nome" => "Misto Quente", "preco" => 10.00],
    "lanches_misto_quente_com_ovo" => ["nome" => "Misto Quente com Ovo", "preco" => 10.00],
    "lanches_pao_na_chapa" => ["nome" => "Pão na Chapa", "preco" => 5.00],
    // Salgados
    "salgados_coxinha_tradicional" => ["nome" => "Coxinha Tradicional", "preco" => 6.00],
    "salgados_coxinha_com_catupiry" => ["nome" => "Coxinha com Catupiry", "preco" => 6.00],
    "salgados_enroladinho_de_salsicha" => ["nome" => "Enroladinho de Salsicha", "preco" => 6.00],
    "salgados_pao_de_queijo" => ["nome" => "Pão de queijo", "preco" => 6.00],



];

echo "Mesa: $mesa<br>";
foreach ($itens as $chave => $quantidade) {
    $quantidade = (int) $quantidade;

    if ($quantidade > 0 && isset($cardapio[$chave])) {
        echo "{$cardapio[$chave]['nome']} : $quantidade<br>";
        $subtotal = $cardapio[$chave]['preco'] * $quantidade;
        $total += $subtotal;
        $observacao = trim($obs[$chave] ?? "");

        if ($observacao !== "") {
            echo "Obs: " . htmlspecialchars($observacao) . "<br>";
        }
    }
}



echo "Total: R$ " . number_format($total, 2, ",", ".");