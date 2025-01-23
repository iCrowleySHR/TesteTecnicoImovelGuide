function validarCPF(cpf) {
    cpf = cpf.replace(/[^\d]+/g, '');
    if (cpf.length !== 11 || /^(\d)\1+$/.test(cpf)) return false;
    function calcularDigito(cpfParcial, pesoInicial) {
        let soma = 0;
        for (let i = 0; i < cpfParcial.length; i++) {
            soma += parseInt(cpfParcial.charAt(i)) * (pesoInicial - i);
        }
        const resto = soma % 11;
        return resto < 2 ? 0 : 11 - resto;
    }
    const digito1 = calcularDigito(cpf.substring(0, 9), 10);
    const digito2 = calcularDigito(cpf.substring(0, 10), 11);
    return digito1 === parseInt(cpf.charAt(9)) && digito2 === parseInt(cpf.charAt(10));
}

function validarFormulario() {
    const cpf = document.getElementById('cpf').value;
    if (!validarCPF(cpf)) {
        alert('CPF inválido. Por favor, insira um CPF válido.');
        return false;
    }
    return true;
}