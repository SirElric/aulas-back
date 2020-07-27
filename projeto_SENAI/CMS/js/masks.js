"use restrict"

const masks = {
    text : value => value.replace(/[^a-zA-Z Á-ÿ]/,''),
    cellphone : value => value.replace(/\D/g,'')
                              .replace(/(\d{2})(\d)/,'($1) $2')
                              .replace(/(\d{5})(\d)/,'$1-$2')
                              .replace(/(.{15})(.*)/,'$1'),

    cep       : value => value.replace(/\D/g,'')
                              .replace(/(\d{3})(\d)/,'$1.$2')
                              .replace(/(\d{3})(\d)/,'$1.$2')
                              .replace(/(\d{3})(\d)/,'$1-$2')
                              .replace(/(.{14})(.*)/,'$1'),

};

const validar = element => {
    element.addEventListener( 'input', (event) => {
        const $input = event.target;
        const typeMask = $input.dataset.type;
        if (masks.hasOwnProperty(typeMask)){
            $input.value = masks[typeMask]($input.value);   
        }
    });
};

const emailValidator = element => {
    element.addEventListener('blur', () => {
        if (!element.value.match(/.*@.*\../)){
            alert ("verifique o e-mail");
        }
    });
}

validar (document.getElementById('form-create'));
emailValidator (document.getElementById('email'));
