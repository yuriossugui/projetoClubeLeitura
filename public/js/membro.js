document.addEventListener('DOMContentLoaded', () => {
    
    //regra para apenas letras
    $.validator.addMethod("apenasLetras", function(value, element) {
        return /^[a-zA-Z]+$/.test(value);
    }, "Por favor, insira apenas letras.");

    // Adicionando a regra personalizada para o formato de telefone brasileiro
    $.validator.addMethod("telefone", function(value, element) {
        return this.optional(element) || /^\(\d{2}\)\d{5}-?\d{4}$/.test(value);
    }, "Por favor, insira um número de telefone válido no formato (XX)XXXXX-XXXX.");

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
                required: "O campo livro favorito é obrigatório !",
                maxlength: "O usuário não pode ter mais de 255 digitos !",
            }
        }

    });

});