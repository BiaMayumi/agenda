<?php

  session_start();

  include_once("connection.php");
  include_once("url.php");

  $data = $_POST;

  // MODIFICAÇÕES NO BANCO
  if(!empty($data)) {

    // Criar contato
    if($data["type"] === "create") {

      $name = $data["Nome"];
      $phone = $data["Telefone"];
      $cellphone = $data["Celular"];
      $endereco = $data["Endereco"];
      $cpf = $data["CPF"];
      $observations = $data["observations"];

      $query = "INSERT INTO contacts (Nome, Endereço, Telefone, Celular, CPF,observations) VALUES (:Nome, :Endereço, :Telefone, :Celular, :CPF, :observations)";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":Nome", $name);
      $stmt->bindParam(":Endereo", $adress);
      $stmt->bindParam(":Telefone", $phone);
      $stmt->bindParam(":Celular", $cellphone);
      $stmt->bindParam(":CPF", $cpf);
      $stmt->bindParam(":observations", $observations);

      try {

        $stmt->execute();
        $_SESSION["msg"] = "Contato criado com sucesso!";
    
      } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
      }

    } else if($data["type"] === "edit") {

      $name = $data["Nome"];
      $adress = $data["Endereco"];
      $phone = $data["Telefone"];
      $cellphone = $data["Celular"];
      $cpf = $data["CPF"];
      $observations = $data["observations"];
      $id = $data["id"];

      $query = "UPDATE contacts 
                SET name = :name, phone = :phone, observations = :observations 
                WHERE id = :id";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":Nome", $name);
      $stmt->bindParam(":Telefone", $phone);
      $stmt->bindParam(":Telefone", $phone);
      $stmt->bindParam(":Celular", $cellphone);
      $stmt->bindParam(":CPF", $cpf);
      $stmt->bindParam(":observations", $observations);
      $stmt->bindParam(":id", $id);

      try {

        $stmt->execute();
        $_SESSION["msg"] = "Contato atualizado com sucesso!";
    
      } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
      }

    } else if($data["type"] === "delete") {

      $id = $data["id"];

      $query = "DELETE FROM contacts WHERE id = :id";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":id", $id);
      
      try {

        $stmt->execute();
        $_SESSION["msg"] = "Contato removido com sucesso!";
    
      } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
      }

    }

    // Redirect HOME
    header("Location:" . $BASE_URL . "../index.php");

  // SELEÇÃO DE DADOS
  } else {
    
    $id;

    if(!empty($_GET)) {
      $id = $_GET["id"];
    }

    // Retorna o dado de um contato
    if(!empty($id)) {

      $query = "SELECT * FROM contacts WHERE id = :id";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":id", $id);

      $stmt->execute();

      $contact = $stmt->fetch();

    } else {

      // Retorna todos os contatos
      $contacts = [];

      $query = "SELECT * FROM contacts";

      $stmt = $conn->prepare($query);

      $stmt->execute();
      
      $contacts = $stmt->fetchAll();

    }

  }

  // FECHAR CONEXÃO
  $conn = null;