<?php
  include_once("templates/header.php");
?>
  <div class="container">
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">Criar contato</h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
      <input type="hidden" name="type" value="create">
      <div class="form-group">
        <label for="name">Nome do contato:</label>
        <input type="text" class="form-control" id="name" name="Nome" placeholder="Digite o nome" required>
      </div>
      <div class="form-group">
        <label for="phone">Telefone do contato:</label>
        <input type="number" class="form-control" id="phone" name="Telefone" placeholder="Digite o telefone" required>
      </div>
      <div class="form-group">
        <label for="adress">Endereço:</label>
        <input type="text" class="form-control" id="phone" name="Endereco" placeholder="Digite o Endereço" required>
      </div>
      <div class="form-group">
        <label for="phone">Celular:</label>
        <input type="number" class="form-control" id="phone" name="Celular" placeholder="Digite o Celular" required>
      </div>
      <div class="form-group">
        <label for="CPF">CPF:</label>
        <input type="number" class="form-control" id="phone" name="cpf" placeholder="Digite o CPF" required>
      </div>
      <div class="form-group">
        <label for="observations">Observações:</label>
        <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Insira as observações" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
  </div>
<?php
  include_once("templates/footer.php");
?>
