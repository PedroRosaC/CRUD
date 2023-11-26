<?php
require_once 'shared/header.php'

?>
    <form action="controller/indexController.php" method="post">
        <div class="main">
            <div class="nameDiv">
                <h3 class="title">Nome:</h3>
                <input type="text" class="name" name="name" id="name" placeholder="Nome do usuário">
            </div>
            <div class="submit">
                <button type="submit" class="submit-button">Submit</button>
            </div>
        </div>
        <?php
        @$_REQUEST['cod'];
        if(@$_REQUEST['cod'] == 'inserido'){
            echo '<div class="main">
                    <div class="insert">
                        <h3 class="title">Inserido</h3>
                    </div>
                </div>';
        }
        ?>
    </form>
    <div class="main">
        <div class="alter">
            <a href="alterar.php"><input type="button" value="Alterar" class="alter-button"></a>
        </div>
    </div>
    <div class="main">
        <div class="delete">
            <a href="delete.php"><input type="button" value="Deletar" class="delete-button"></a>
        </div>
    </div>
    <div class="main">
        <div class="tableDiv">
            <table class="table">
                <tr>
                    <th>id</th>
                    <th>nome</th>
                </tr>
                <?php
                require_once './controller/indexController.php';
                $pessoaList = loadAll();
                foreach($pessoaList as $pessoas){
                    echo '<tr>
                            <td>'.$pessoas['id'].'</td>
                            <td>'.$pessoas['nome'].'</td>
                        </tr>';
                }
                ?>

            </table>
        </div>
    </div>
<?php
require_once 'shared/footer.php'

?>
