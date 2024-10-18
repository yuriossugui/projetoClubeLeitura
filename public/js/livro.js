document.addEventListener('DOMContentLoaded', () => {

    $.validator.addMethod("apenasLetras", function(value, element) {
        return /^[a-zA-Z]+$/.test(value);
    }, "Por favor, insira apenas letras.");

    $("#cadLivro").validate({
      
        rules: 
        {
            liv_titulo: 
            {
                required: true,
            },
            liv_autor:
            {
                required:true,
                apenasLetras:true,
            },
            liv_numero_paginas:
            {
                required:true,
                number:true,
            },
        },
        messages:
        {
            liv_titulo:
            {
                required: "Este campo é obrigatório !",
            },
            liv_autor:
            {
                required: "Este campo é obrigatório !",
                apenasLetras: "Insira apenas letras !"
            },
            liv_numero_paginas:
            {
                required: "Este campo é obrigatório !",
                number: "Insira apenas numeros !"
            }
        }

    })

    const botoesExcluir = document.querySelectorAll('.btnExcluir');

    botoesExcluir.forEach(botao => {
        botao.addEventListener('click', function() {
            const id = this.getAttribute('data-id');
            const confirmacao = window.confirm('Deseja realmente excluir este livro ?');
    
            if (confirmacao) {
                window.location.href = `/excluirLivro?livro_id=${id}`;
            }
        });
    });

});

