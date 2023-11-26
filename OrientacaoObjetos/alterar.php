<?php
require_once 'shared/header.php'

?>

<form action="controller/alterarController.php" method="post">
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
                foreach ($pessoaList as $pessoas) {
                    echo '<tr>
                            <td>' . $pessoas['id'] . '</td>
                            <td><input type="text" value="'.$pessoas['novo'].'" class="alter-button"></td>
                        </tr>';
                }
                ?>

            </table>
        </div>
    </div>
    <div class="main">
        <div class="submit">
            <button type="submit" class="alter-button">Alterar</button>
        </div>
    </div>
</form>

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
            foreach ($pessoaList as $pessoas) {
                echo '<tr>
                            <td>' . $pessoas['id'] . '</td>
                            <td>' . $pessoas['nome'] . '</td>
                        </tr>';
            }
            ?>

        </table>
    </div>
</div>


<?php
require_once 'shared/footer.php'

?>