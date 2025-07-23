
document.addEventListener('DOMContentLoaded', () => {
  const senha = document.getElementById('senha');
  const confirmSenha = document.getElementById('confirmPassword');
  const formulario = document.getElementById('form');

  formulario.addEventListener('submit', (evento) => {
    evento.preventDefault();
    if (senha.value !== confirmSenha.value) {
      Swal.fire({
        title: "As senhas não são iguais!",
        icon: "error",
        confirmButtonText: "Corrigir"
      });
    } else {
      Swal.fire({
        title: "Usuário cadastrado com sucesso!",
        icon: "success",
        confirmButtonText: "OK",
        confirmButtonColor: #d88329
      }).then(() => {
        formulario.submit();
      });
    }
  });
});
