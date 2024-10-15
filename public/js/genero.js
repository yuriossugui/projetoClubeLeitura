document.addEventListener('DOMContentLoaded', () => {

    //regra para apenas letras
    $.validator.addMethod("apenasLetras", function(value, element) {
        return /^[a-zA-ZÀ-ÿ\u00C0-\u00FF]+$/.test(value);
    },);

    $("#cadGeneroForm").validate({
        
        rules: {

            gen_nome: {
                required: true,
                maxlength: 50,
                apenasLetras: true
            }

        },

        messages: {

            gen_nome: {
                required: 'Este campo é obrigatório !',
                maxlength: 'O gênero deve ter no máximo 50 caracteres !',
                apenasLetras: "Por favor, insira apenas letras."
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