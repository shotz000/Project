<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <title>Reparos e Consertos</title>

  <style>
    /* Reset básico */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Poppins", Arial, sans-serif;
      background: linear-gradient(135deg, #e8f5e9, #c8e6c9);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      color: #333;
    }

    .form-container {
      background-color: #fff;
      padding: 30px 25px;
      border-radius: 10px;
      box-shadow: 0 6px 16px rgba(0,0,0,0.15);
      width: 100%;
      max-width: 380px;
      display: flex;
      flex-direction: column;
      gap: 18px;
      animation: fadeIn 0.6s ease;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(15px); }
      to { opacity: 1; transform: translateY(0); }
    }

    h1 {
      text-align: center;
      color: #388e3c;
      margin-bottom: 5px;
      font-size: 1.8rem;
    }

    p {
      text-align: center;
      font-size: 0.9rem;
      color: #666;
      margin-bottom: 15px;
    }

    label {
      font-weight: 600;
      font-size: 0.9rem;
      color: #444;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="date"],
    textarea,
    input[type="file"] {
      width: 100%;
      padding: 10px 12px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
      transition: all 0.25s ease;
    }

    input:focus,
    textarea:focus {
      outline: none;
      border-color: #66bb6a;
      box-shadow: 0 0 4px rgba(102, 187, 106, 0.5);
    }

    textarea {
      resize: vertical;
      min-height: 60px;
    }

    button {
      background: linear-gradient(135deg, #43a047, #2e7d32);
      color: white;
      border: none;
      padding: 12px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      border-radius: 6px;
      transition: all 0.3s ease;
      letter-spacing: 0.5px;
    }

    button:hover {
      background: linear-gradient(135deg, #66bb6a, #43a047);
      transform: scale(1.03);
      box-shadow: 0 4px 12px rgba(67, 160, 71, 0.3);
    }

    /* Responsividade */
    @media (max-width: 480px) {
      .form-container {
        width: 90%;
        padding: 20px;
      }

      h1 {
        font-size: 1.5rem;
      }
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h1>Reparos e Consertos</h1>
    <p>Preencha o formulário abaixo para solicitar atendimento.</p>

    <form>
      <label for="nome_completo">Nome completo</label>
      <input type="text" id="nome_completo" required>

      <label for="telefone">Telefone para contato</label>
      <input type="tel" id="telefone" maxlength="11" placeholder="(xx) xxxxx-xxxx" required>

      <label for="email">Email</label>
      <input type="email" id="email" placeholder="exemplo@email.com" required>

      <label for="aparelhos">Aparelhos</label>
      <input type="text" id="aparelhos">

      <label for="data">Data preferida</label>
      <input type="date" id="data">

      <label for="problema">Descrição do problema</label>
      <textarea id="problema" placeholder="Descreva o problema aqui..."></textarea>

      <label for="foto">Foto do problema</label>
      <input type="file" id="foto" name="foto" accept="image/png, image/jpeg, application/pdf"/>

      <button type="submit">Enviar Solicitação</button>
    </form>
  </div>
</body>
</html>
