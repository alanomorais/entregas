<main class="flex-shrink-0">
    <div class="container">
        <h1 class="mt-5">Listagem de Entregas</h1>
        <p class="lead">Cliente no Botão novo para Adicionar uma nova entrega</p>
        <div class="card">
            <h5 class="card-header"><a href="incluir.php"><button type="button" class="btn btn-success">Novo</button></a></h5>
            <div class="card-body">
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Prazo de Entrega</th>
                            <th scope="col">Status</th>
                            <th scope="col">Ação</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td><?php echo date('d/m/Y');?></td>
                            <td>@mdo</td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item" <button type="button" class="btn btn-link"><span class="material-icons">
                                            edit
                                        </span></button>
                                    </li>
                                    <li class="list-inline-item" <button type="button" class="btn btn-link"><span class="material-icons">
                                            restore_from_trash
                                        </span></button>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td><?php echo date('d/m/Y', strtotime("+2 days"));?></td>
                            <td>@mdo</td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item" <button type="button" class="btn btn-link"><span class="material-icons">
                                            edit
                                        </span></button>
                                    </li>
                                    <li class="list-inline-item" <button type="button" class="btn btn-link"><span class="material-icons">
                                            restore_from_trash
                                        </span></button>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td><?php echo date('d/m/Y');?></td>
                            <td>@mdo</td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item" <button type="button" class="btn btn-link"><span class="material-icons">
                                            edit
                                        </span></button>
                                    </li>
                                    <li class="list-inline-item" <button type="button" class="btn btn-link"><span class="material-icons">
                                            restore_from_trash
                                        </span></button>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td><?php echo date('d/m/Y', strtotime("+3 days"));?></td>
                            <td>@mdo</td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item" <button type="button" class="btn btn-link"><span class="material-icons">
                                            edit
                                        </span></button>
                                    </li>
                                    <li class="list-inline-item" <button type="button" class="btn btn-link"><span class="material-icons">
                                            restore_from_trash
                                        </span></button>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td><?php echo date('d/m/Y', strtotime("+2 days"));?></td>
                            <td>@mdo</td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item" <button type="button" class="btn btn-link"><span class="material-icons">
                                            edit
                                        </span></button>
                                    </li>
                                    <li class="list-inline-item" <button type="button" class="btn btn-link"><span class="material-icons">
                                            restore_from_trash
                                        </span></button>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>