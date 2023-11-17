<?php
  include_once("templates/header.php");
?>
  <div class="container">
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">Editar contato</h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
      <input type="hidden" name="type" value="edit">
      <input type="hidden" name="id" value="<?= $contact['id'] ?>">
      <div class="form-group">
        <label for="name">Nome do contato:</label>
        <input type="text" class="form-control" id="Nome" name="Nome" placeholder="Digite o nome" value="<?= $contact['Nome'] ?>" required>
      </div>
      <div class="form-group">
        <label for="phone">Telefone do contato:</label>
        <input type="number" class="form-control" id="Telefone" name="Telefone" placeholder="Digite o telefone" value="<?= $contact['Telefone'] ?>" required>
      </div>
      <div class="form-group">
        <label for="adress">Endereço:</label>
        <input type="text" class="form-control" id="Endereco" name="Endereco" placeholder="Digite o Endereço" value="<?= $contact['Endereco'] ?>" required>
      </div>
      <div class="form-group">
        <label for="phone">Celular:</label>
        <input type="number" class="form-control" id="Celular" name="Celular" placeholder="Digite o número de celular" value="<?= $contact['Celular'] ?>" required>
      </div>
      <div class="form-group">
        <label for="CPF">CPF:</label>
        <input type="number" class="form-control" id="CPF" name="CPF" placeholder="Digite o CPF" value="<?= $contact['CPF'] ?>" required>
      </div>
      <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
  </div>
<?php
  include_once("templates/footer.php");
?>
