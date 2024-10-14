document.addEventListener('DOMContentLoaded', () => {
    
    //regra para apenas letras
    $.validator.addMethod("apenasLetras", function(value, element) {
        return /^[a-zA-Z]+$/.test(value);
    }, "Por favor, insira apenas letras.");

    // Adicionando a regra personalizada pawra o formato de telefone brasileiro sem parênteses e hífen
    $.validator.addMethod("telefone", function(value, element) {
        return this.optional(element) || /^\d{11}$/.test(value);
    }, "Por favor, insira um número de telefone válido com 11 dígitos (incluindo o DDD).");

    $("#cadMembro").validate({

        rules: {

            mem_nome: {
                required:true,
                maxlength: 100,
                apenasLetras:true
            },
            
            mem_contato: {
                required:true,
                telefone:true,
            },

            mem_livro_favorito: {
                required: true,
                maxlength: 255,
            }

        },
        messages: {
            mem_nome: {
                required: "O campo Usuário é obrigatório !",
                maxlength: "O usuário não pode ter mais de 100 digitos !",
                apenasLetras: "Insira apenas letras !"
            },

            mem_contato: {
                required: "O campo Contato é obrigatório !",
                telefone:"Por favor, insira um número de telefone válido no formato (XX)XXXXX-XXXX."
            },

            mem_livro_favorito: {
                required: "O campo Livro Favorito é obrigatório !",
                maxlength: "O usuário não pode ter mais de 255 digitos !",
            }
        }

    });

    const botoesExcluir = document.querySelectorAll('.btnExcluir');

    botoesExcluir.forEach(botao => {
        botao.addEventListener('click', function() {
            const membroId = this.getAttribute('data-id');
            const confirmacao = window.confirm('Deseja realmente excluir este membro ?');
    
            if (confirmacao) {
                window.location.href = `/excluirMembro?membro_id=${membroId}`;
            }
        });
    });

});