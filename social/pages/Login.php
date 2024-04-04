<?php
// Inclua os arquivos necessários
include("../DB/conecta.php");
include("../dao/usuariosDao.php");

// Defina variáveis para armazenar mensagens de feedback
$feedback = "";

// Verifique se o formulário foi enviado via método POST
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    // Recupere os valores do formulário
    $username = $_POST["username"];
    $password = $_POST["password"];
    echo $username;

    // Consulte o banco de dados para obter o usuário com o nome fornecido
    $resultado = getUsuarioByUsername(getConection(), $username);

    // Verifique se o usuário foi encontrado
    if ($resultado && $registro = mysqli_fetch_assoc($resultado)) {
        // Compare a senha fornecida com a senha armazenada no banco de dados
        if (password_verify($password, $registro["senha"])) {
            // Senha correta, usuário autenticado com sucesso
            $feedback = "Login bem-sucedido!";
            // Faça qualquer outra ação necessária, como redirecionar o usuário para outra página
        } else {
            // Senha incorreta
            $feedback = "Senha incorreta. Por favor, tente novamente.";
        }
    } else {
        // Usuário não encontrado
        $feedback = "Nome de usuário não encontrado.";
    }
}
?>

<!-- Renderize o feedback antes do formulário -->
<?php echo $feedback; ?>

<!-- Renderize o formulário -->
<div class="container">
  <form class="row g-3 needs-validation" id="loginForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" novalidate>
    <div class="col-md-12">
      <label for="validationCustom01" class="form-label">Nome de Usuário</label>
      <input type="text" class="form-control" id="validationCustom01" name="username" required>
      <div class="invalid-feedback">
        Por favor, insira seu nome de usuário.
      </div>
    </div>
    <div class="col-md-12">
      <label for="validationCustom02" class="form-label">Senha</label>
      <input type="password" class="form-control" id="validationCustom02" name="password" required>
      <div class="invalid-feedback">
        Por favor, insira sua senha.
      </div>
    </div>
    <div class="col-12">
      <input class="btn btn-primary" type="submit" value="Entrar" name="submit"/>
    </div>
  </form>
</div>
