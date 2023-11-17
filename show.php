<?php
  include_once("templates/header.php");
?>
  <div class="container" id="view-contact-container"> 
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title"><?= $contact["Nome"] ?></h1>
    <p class="bold">Endereço:</p>
    <p class="form-control"><?= $contact["Endereco"] ?></p>
    <p class="bold">Telefone:</p>
    <textarea type="number" class="form-control" id="Telefone" name="Telefone" rows="3"><?= $contact['Telefone'] ?></textarea>
    <p class="bold">Celular:</p>
    <input type="number" class="form-control" id="Celular" name="Celular" rows="3"><<?= $contact['Celular'] ?>
  </div>
<?php
  include_once("templates/footer.php");
?>
