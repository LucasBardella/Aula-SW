<?php
    include 'conecta.php';
    include 'menu.php';

    $id = $_GET['id'];

    $sql = "SELECT * FROM clientes WHERE id_cliente = '$id'";
    $consulta = $conexao->query($sql);
    $dados = $consulta->fetch_assoc()



?>
<html>
    <body>
        <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">ATUALIZAR CLIENTE</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">
                                <a class="btn btn-warning" href="index.php">VOLTAR</a>
                            </li>
                        </ol>
                        <div class="card mb-4">
                            <form action="processa_atualiza_cliente.php?id=<?php echo $id; ?>" method="POST" >
                                <div class="mb-3">
                                    <label for="" class="form-label">Nome</label>
                                    <input name="nome_novo" type="text" class="form-control" value="<?php echo $dados['nome_cliente']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">E-mail</label>
                                    <input name="email_novo" type="email" class="form-control" value="<?php echo $dados['email_cliente']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Telefone</label>
                                    <input name="telefone_novo" type="text" class="form-control" value="<?php echo $dados['telefone']; ?>">
                                </div>
                                    <button type="submit" class="btn btn-primary">Atualizar</button>
                            </form>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
