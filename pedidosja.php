<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Bistrot Chez Rémy</title>
</head>

<body>
    <header>
        <h1 class="mb-0 mt-2 ">Bistrot Chez Rémy</h1>
        <p class="mt-0">Cardápio de mesa</p>
        <div>
            <label for="mesa">Mesa:</label>
            <input type="number" classn="form-control" id="mesa" min=1 placeholder="N°" class="mb-3">
        </div>

        <!-- Menu de abas -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pratos-tab" data-bs-toggle="tab" data-bs-target="#pratos-tab-pane"
                    type="button" role="tab" aria-controls="pratos-tab-pane" aria-selected="true">Pratos</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="bebidas-tab" data-bs-toggle="tab" data-bs-target="#bebidas-tab-pane"
                    type="button" role="tab" aria-controls="bebidas-tab-pane" aria-selected="false">Bebidas</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="lanches-tab" data-bs-toggle="tab" data-bs-target="#lanches-tab-pane"
                    type="button" role="tab" aria-controls="lanches-tab-pane" aria-selected="false">Lanches</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="salgados-tab" data-bs-toggle="tab" data-bs-target="#salgados-tab-pane"
                    type="button" role="tab" aria-controls="salgados-tab-pane" aria-selected="false">Salgados</button>
            </li>
        </ul>
    </header>

    <main>
        <div class="tab-content" id="myTabContent">

            <!-- ENTRADAS -->
            <div class="tab-pane fade show active" id="pratos-tab-pane" role="tabpanel" aria-labelledby="pratos-tab"
                tabindex="0">

                <div class="py-3 border-bottom">
                    <div class="text-uppercase fw-bold small mb-2">Praatos</div>

                    <div class="d-flex align-items-baseline">
                        <span class="fs-4">Contra filé com ovo</span>
                        <div class="flex-grow-1 border-bottom border-dotted mx-2"
                            style="border-style: dotted !important;"></div>
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
                    <div class="d-flex align-items-baseline">
                        <span class="fs-4">Filé de frango</span>
                        <div class="flex-grow-1 border-bottom border-dotted mx-2"
                            style="border-style: dotted !important;"></div>
                        <span class="fs-3 text-secondary">R$ 20,00</span>
                    </div>

                    <p class="text-secondary samll mt-2 mb-2">Filé de frango que pode acompnahr ovo ou batatas</p>

                    <div class="d-flex alling-items-center gap-2 mt-2">
                        <button class="btn-stepper btn-remover">-</button>
                        <span class="qtd" style="min-width:20px; text-alling:center;">0</span>
                        <button class="btn-stepper btn-adicionar">+</button>
                    </div>
                </div>

                <div class="py-3 border-bottom">
                    <div class="d-flex align-items-baseline">
                        <span class="fs-4">Filé à parmegiana</span>
                        <div class="flex-grow-1 border-bottom border-dotted mx-2"
                            style="border-style: dotted !important;"></div>
                        <span class="fs-3 text-secondary">R$ 28,00</span>
                    </div>

                    <p class="text-secondary samll mt-2 mb-2">Filé empanado coberto com molho de tomate e queijo
                        gratinado, acompanha arroz e batata frita</p>

                    <div class="d-flex alling-items-center gap-2 mt-2">
                        <button class="btn-stepper btn-remover">-</button>
                        <span class="qtd" style="min-width:20px; text-alling:center;">0</span>
                        <button class="btn-stepper btn-adicionar">+</button>
                    </div>
                </div>

                <div class="py-3 border-bottom">
                    <div class="d-flex align-items-baseline">
                        <span class="fs-4">Picanha grelhada</span>
                        <div class="flex-grow-1 border-bottom border-dotted mx-2"
                            style="border-style: dotted !important;"></div>
                        <span class="fs-3 text-secondary">R$ 35,00</span>
                    </div>

                    <p class="text-secondary samll mt-2 mb-2">Picanha grelhada na brasa, acompanha arroz, farofa e
                        vinagrete</p>

                    <div class="d-flex alling-items-center gap-2 mt-2">
                        <button class="btn-stepper btn-remover">-</button>
                        <span class="qtd" style="min-width:20px; text-alling:center;">0</span>
                        <button class="btn-stepper btn-adicionar">+</button>
                    </div>
                </div>

                <div class="py-3 border-bottom">
                    <div class="d-flex align-items-baseline">
                        <span class="fs-4">Frango grelhado com legumes</span>
                        <div class="flex-grow-1 border-bottom border-dotted mx-2"
                            style="border-style: dotted !important;"></div>
                        <span class="fs-3 text-secondary">R$ 22,00</span>
                    </div>

                    <p class="text-secondary samll mt-2 mb-2">Peito de frango grelhado acompanhado de legumes salteados
                    </p>

                    <div class="d-flex alling-items-center gap-2 mt-2">
                        <button class="btn-stepper btn-remover">-</button>
                        <span class="qtd" style="min-width:20px; text-alling:center;">0</span>
                        <button class="btn-stepper btn-adicionar">+</button>
                    </div>
                </div>

                <div class="py-3 border-bottom">
                    <div class="d-flex align-items-baseline">
                        <span class="fs-4">Bife à role</span>
                        <div class="flex-grow-1 border-bottom border-dotted mx-2"
                            style="border-style: dotted !important;"></div>
                        <span class="fs-3 text-secondary">R$ 26,00</span>
                    </div>

                    <p class="text-secondary samll mt-2 mb-2">Bife enrolado recheado com presunto e queijo, acompanha
                        arroz e purê</p>

                    <div class="d-flex alling-items-center gap-2 mt-2">
                        <button class="btn-stepper btn-remover">-</button>
                        <span class="qtd" style="min-width:20px; text-alling:center;">0</span>
                        <button class="btn-stepper btn-adicionar">+</button>
                    </div>
                </div>

                <div class="py-3 border-bottom">
                    <div class="d-flex align-items-baseline">
                        <span class="fs-4">Strogonoff de frango</span>
                        <div class="flex-grow-1 border-bottom border-dotted mx-2"
                            style="border-style: dotted !important;"></div>
                        <span class="fs-3 text-secondary">R$ 26,00</span>
                    </div>

                    <p class="text-secondary samll mt-2 mb-2">Strogonoff cremoso, acompanha arroz e batata palha</p>

                    <div class="d-flex alling-items-center gap-2 mt-2">
                        <button class="btn-stepper btn-remover">-</button>
                        <span class="qtd" style="min-width:20px; text-alling:center;">0</span>
                        <button class="btn-stepper btn-adicionar">+</button>
                    </div>
                </div>

                <div class="py-3 border-bottom">
                    <div class="d-flex align-items-baseline">
                        <span class="fs-4">Costela ao molho barbecue</span>
                        <div class="flex-grow-1 border-bottom border-dotted mx-2"
                            style="border-style: dotted !important;"></div>
                        <span class="fs-3 text-secondary">R$ 26,00</span>
                    </div>

                    <p class="text-secondary samll mt-2 mb-2">Costela assada lentamente ao molho barbecue, acompanha
                        arroz e farofa</p>

                    <div class="d-flex alling-items-center gap-2 mt-2">
                        <button class="btn-stepper btn-remover">-</button>
                        <span class="qtd" style="min-width:20px; text-alling:center;">0</span>
                        <button class="btn-stepper btn-adicionar">+</button>
                    </div>
                </div>




            </div>

            <!-- BEBIDAS -->
            <div class="tab-pane fade" id="bebidas-tab-pane" role="tabpanel" aria-labelledby="bebidas-tab" tabindex="0">
                
                <div class="py-3 border-bottom">
                    <div class="text-uppercase fw-bold small mb-2">bebidas</div>
                </div>
            </div>

            <!-- LANCHES -->
            <div class="tab-pane fade" id="lanches-tab-pane" role="tabpanel" aria-labelledby="lanches-tab" tabindex="0">
                

                <div class="py-3 border-bottom">
                    <div class="text-uppercase fw-bold small mb-2">Lanches</div>
                </div>
            </div>

            <!-- SALGADOS -->
            <div class="tab-pane fade" id="salgados-tab-pane" role="tabpanel" aria-labelledby="salgados-tab"
                tabindex="0">

                <div class="py-3 border-bottom">
                    <div class="text-uppercase fw-bold small mb-2">Salgados</div>
                </div>
                
            </div>

        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>