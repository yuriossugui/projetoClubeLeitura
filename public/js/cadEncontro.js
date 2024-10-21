document.addEventListener('DOMContentLoaded', () => {

    const btnAddMembro = document.getElementById('btnAddMembro');
    const membrosContainer = document.getElementById('membrosContainer');
    const selectTemplate = document.getElementById('selectTemplate').innerHTML; 

    btnAddMembro.addEventListener('click', function (event) {
        event.preventDefault();

        membrosContainer.innerHTML += selectTemplate;
    });

    $.validator.addMethod("datetimeLocal", function(value, element) {
        // Regex para validar o formato `YYYY-MM-DDTHH:MM`
        return this.optional(element) || /^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}$/.test(value);
      }, "Por favor, insira uma data e hora válidas no formato 'YYYY-MM-DDTHH:MM'.");

    $('#cadEncontro').validate({
        rules:{

            enc_data: {
                required: true,
                datetimeLocal: true,
            },

            enc_local: {
                required: true,
            },

            livro_id: {
                required: true,
            },

            membro_id: {
                required: true,
            },

        },
        messages:{

            enc_data: {
                required: 'Este campo é obrigatório !',
                datetimeLocal: 'Por favor, insira uma data e hora válidas no formato YYYY-MM-DDTHH:MM',
            },

            enc_local: {
                required: 'Este campo é obrigatório !',
            },

            livro_id: {
                required: 'Este campo é obrigatório !',
            },

            membro_id: {
                required: 'Este campo é obrigatório !',
            },

        }
    });

});