/**
 *  codigo foi alterado para o site de serviços como qrcode e não é
 *  ocodigo padrão para outros códigos
 */

/**
 * 
 * COLOCAR MAIS PARAMETROS PARA DIFERENCIAR OS FORMULARIOS.
 * AS VEZES TEMOSMUITOS FORMULARIOS NUMA PAGINA E ADICIONANDO UM PARAMETRO PRA COMPLEMENTAR OS IDS,
 * POR EXEMPLO, POSSO UTILIZAR ESSA FUNÇÃO SEM PRECISAR EDITA-LA
 * 
 */
function validateFields(data, dadosForm) {

    $(dadosForm.find('input, select, textarea')).each(function (index) {
        $(`${$(this).prop('tagName')}[name=${$(this).attr('name')}]`).removeClass('is-invalid');
        $(`#error-${$(this).attr('name')}`).fadeOut().remove();
    });

    $('.success').fadeOut().remove();

    if (data.emptyFields) {
        data.emptyFields.forEach(element => {
            $(`[name=${element}]`).addClass('is-invalid');
            $(`[name=${element}]`).after(`<div id='error-${element}' class='text-danger'>Campo obrigatório</div>`);
            $(`#error-${element}`).hide().fadeIn();
        });
    }

    if (data.validateFields) {
        let fields = data.validateFields;
        for (const field in fields) {
            $(`[name=${field}]`).addClass('is-invalid');
            $(`[name=${field}]`).after(`<div id='error-${field}' class='text-danger'>${fields[field]}</div>`)
        }
    }

    // id success foi removido!
    if (data.success) {
        $('button[type=submit]').after(`<h5 class="success bg-success text-light py-3 mt-3 rounded text-center">${data.success}</h5>`).hide().fadeIn();
        // $('.form-control').val('');
    }
}

function navbar() {
    $('.dropdown-menu').removeClass('bg-transparent');
    $('.dropdown-menu').addClass('bg-normal');

    // producrar m jeito de fazer io drop dwon com efeitos fade in e fadeout
    /*$('.dropdown').on('click', function () {
        $('.dropdown-menu').fadeIn();
        console.log('s');
    });*/

    // desativado, depois de mudar a imagem du fundo posso ativar
}

function footer() {
    $('.footer').addClass('fixed-bottom');

}