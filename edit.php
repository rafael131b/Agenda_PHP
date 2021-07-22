<?php
include_once("templates/header.php");
?>
    
<div class="container">
    <?php include_once("templates/backBtn.html"); ?>
    <h1 id="main-title">Editar Contato</h1>
   
    <form action="<?=$BASE_URL?>config/process.php" method="POST"  id="create-form">
    <input type="hidden" name="type" value="edit">
    <input type="hidden" name="id" value="<?=$contact["id"]?>">
        <div class="form-group">
            <label for="nome">Nome do contato</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="digite o nome do contato" required value="<?=$contact["name"]?>">
        </div>

    <div class="form-group">
        <label for="phone">Telefone do contato</label>
        <input type="number" class="form-control" id="phone" name="phone" placeholder="digite o telefone do contato" required value="<?=$contact["phone"]?>>
    </div>

    <div class="form-group">
        <label for="observations">Observações</label>
        <textarea  type="text" class="form-control" id="observations" name="observations" placeholder="Insira as observações" rows=3> <?=$contact["observations"]?> </textarea>
    </div>


    <button type="submit" class="btn btn-primary">Atualizar</button>


     </form>
</div>



    <?php
include_once("templates/footer.php");
?>