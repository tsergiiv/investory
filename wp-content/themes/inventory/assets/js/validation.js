const form = jQuery('form');
const formElementsSelector = 'input:not(.search__input), textarea';
const action = $('input[name="action"]').val();

const formBtn = jQuery('#submit-btn');

jQuery(form).find(formElementsSelector).on('change click keyup',function() {
    formSend(form, formBtn);
});

jQuery(formBtn).click(function (e) {
    e.preventDefault();

    let formData = new FormData();
    formData.append('Name', $('form #name').val());
    formData.append('Email', $('form #email').val());
    formData.append('Url', $('form #link').val());
    formData.append('Message', $('form #message').val());

    sendMail(action, formData);
});

async function formSend(form, formBtn) {
    let error = formValidate(form);
    console.log(error);

    if (error === 0) {
        jQuery(formBtn).attr('disabled', false);
    } else {
        jQuery(formBtn).attr('disabled', true);
    }
}

function sendMail(action, data, windowClass) {
    jQuery.ajax({
        url: action,
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        data: data,
        success: function(data) {
            console.log(data);

            $('form').find('input, textarea').val('');
            window.location = url;
        },
        error: function (error) {
            console.log('error' + error);
        },
    });
}

$('.reload-btn').click(function() {
    window.location = url;
});

function formValidate(form) {
    let formReq = jQuery(form).find(formElementsSelector);

    let error = 0;
    for (let index = 0; index < formReq.length; index++) {
        const input = formReq[index];
        formRemoveError(input);

        if (input.value === '') {
            error++;
        } else if ((input.type == 'email' && !validateEmail(input.value))) {
            formAddError(input);
            error++;
        }
    }
    return error;
}

function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function formAddError(input) {
    input.parentElement.classList.add('error');
    input.classList.add('error');
}

function formRemoveError(input) {
    input.parentElement.classList.remove('error');
    input.classList.remove('error');
}
