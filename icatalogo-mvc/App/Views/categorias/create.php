
<div class="categorias-container">
    <form class="form-categoria" method="POST" action="/categorias/store">

        <h1 class="span2">Adicionar Categorias</h1>

        <ul>
            <?php

            if (isset($_SESSION["erros"])) {

                foreach ($_SESSION["erros"] as $erro) {

            ?>
                <li><?= $erro ?></li>
            <?php
                }
                unset($_SESSION["erros"]);
            }
            ?>
        </ul>

        <div class="input-group span2">
            <label for="descricao">Descrição</label>
            <input type="text" name="descricao" id="descricao"/>
        </div>

        <button type="button" onclick="javascript:window.location.href = '/categorias'">Cancelar</button>
        <button>Salvar</button>

    </form>
</div>