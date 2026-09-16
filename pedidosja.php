<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <header>
        <h1 class="mb-0 mt-2 ">Bistrot Chez Rémy</h1>
        <p class="mt-0">Cardápio de mesa</p>
        <div>
            <label for="mesa">Mesa:</label>
            <input type="number" classn="form-control" id="mesa" min=1 placeholder="N°" class="mb-3">
        </div>
        <div>

            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Entradas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Bebidas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Lanches</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Salgados</a>
                </li>
            </ul>
        </div>
    </header>
    <main>
        <div class="py-3 border-bottom">
            <div class="text-uppercase fw-bold small mb-2">Entradas</div>

            <div class="d-flex align-items-baseline">
                <span class="fs-4">Contra filé com ovo</span>
                <div class="flex-grow-1 border-bottom border-dotted mx-2" style="border-style: dotted !important;">
                </div>
                <span class="fs-3 text-secondary">R$ 25,00</span>
            </div>

            <p class="text-secondary samll mt-2 mb-2">Contra filé com ovo acompanhado de batatas fritas</p>

            <div class="d-flex alling-items-center gap-2 mt-2">
                <button class="btn-stepper btn-remover">-</button>
                <span class="qtd" style="min-width:20px; text-alling:center;">0</span>
                <button class="btn-stepper btn-adicionar">+</button>
            </div>
        </div>

        <div class="py-3 border-bottom">
            <div class="text-uppercase fw-bold small mb-2"></div>

            <div class="d-flex align-items-baseline">
                <span class="fs-4">Filé de frango</span>
                <div class="flex-grow-1 border-bottom border-dotted mx-2" style="border-style: dotted !important;">
                </div>
                <span class="fs-3 text-secondary">R$ 20,00</span>
            </div>

            <p class="text-secondary samll mt-2 mb-2">Filé de frango que pode acompnahr ovo ou batatas</p>

            <div class="d-flex alling-items-center gap-2 mt-2">
                <button class="btn-stepper btn-remover">-</button>
                <span class="qtd" style="min-width:20px; text-alling:center;">0</span>
                <button class="btn-stepper btn-adicionar">+</button>
            </div>
    </main>
</body>

</html>