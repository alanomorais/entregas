<main class="flex-shrink-0">
    <div class="container">
        <h1 class="mt-5">Inclusão de Entregas</h1>
        <p class="lead"></p>
        <div class="card">
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="email" class="form-control" id="titulo" name="titulo">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                        <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Previsão de Entrega</label>
                        <input id="previsao_entrega" type="date" class="form-control" id="previsao_entrega">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="continuar" name="continuar">
                        <label class="form-check-label" for="continuar">Continuar Incluindo?</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Incluir</button>
                </form>
            </div>
        </div>
    </div>
</main>