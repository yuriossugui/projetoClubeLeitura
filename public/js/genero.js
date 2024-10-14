document.addEventListener('DOMContentLoaded', () => {

    $("#cadGeneroForm").validate({
        
        rules: {

            gen_nome: {
                required: true,
                maxlength: 50
            }

        },

        messages: {

            gen_nome: {
                required: 'Este campo é obrigatório !',
                maxlength: 'O gênero deve ter no máximo 50 caracteres !'
            },

        }

    });

    const botoesExcluir = document.querySelectorAll('.btnExcluir');

    botoesExcluir.forEach(botao => {
        botao.addEventListener('click', function() {
            const id = this.getAttribute('data-id');
            const confirmacao = window.confirm('Deseja realmente excluir este gênero ?');
    
            if (confirmacao) {
                window.location.href = `/excluirGenero?genero_id=${id}`;
            }
        });
    });

});