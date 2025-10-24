const src = document.getElementById('template_reportes').innerHTML;
const template = Handlebars.compile(src);

const form = document.getElementById('forms_dev');
const statusDiv = document.getElementById('status');
const resultadosJsonDiv = document.getElementById('json');

const modal_template = document.getElementById('modal_template_reporte');
const modal_title = document.getElementById('exampleModalLabel');

form.addEventListener('submit', function(event) {
    event.preventDefault();

    // 1. Coleta os dados (mesmo que vazios)
    const dados = {
        protocolo: document.getElementById('protocolo').value.trim(),
        empresa: document.getElementById('empresa').value.trim(),
        email: document.getElementById('email').value.trim(),
        celular: document.getElementById('celular').value.trim()
    };

    // 1.1. Validação simples no Front-end: pelo menos um campo preenchido
    if (!dados.protocolo && !dados.empresa && !dados.email && !dados.celular) {
        statusDiv.textContent = "ERRO: Preencha pelo menos um campo para buscar.";
        statusDiv.style.color = 'red';
        resultadosJsonDiv.textContent = '';
        return;
    }

    // 2. Serializa o Objeto JS para String JSON
    const dadosJSON = JSON.stringify(dados);
    const urlAPI = '../controller/consultar.php'; // Endpoint PHP

    statusDiv.textContent = "Buscando...";
    statusDiv.style.color = 'orange';
    resultadosJsonDiv.textContent = '';

    // 3. Envia a requisição POST com o JSON no corpo
    fetch(urlAPI, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: dadosJSON
    })
    .then(response => {
        // Checa o status HTTP. Se for 400 ou 500, lança um erro.
        if (!response.ok) {
            return response.json().then(errorData => {
                throw new Error(errorData.mensagem || `Erro HTTP! Status: ${response.status}`);
            });
        }
        // 4. Converte a Resposta JSON para Objeto JS
        return response.json(); 
    })
    .then(data => {
        if (data.status === 'SUCESSO') {

            const html = template(data);
            modal_template.innerHTML = html;

            const nomeEmpresa = data.dados[0] ? data.dados[0].empresa : "Empresa Não Identificada";
            modal_title.textContent = `Relatório Geral: ${nomeEmpresa}`;
            statusDiv.textContent = `SUCESSO: ${data.mensagem}. ${data.dados.length} reportes encontrados.`;
            statusDiv.style.color = 'green';
            statusDiv.textContent = `SUCESSO: ${data.mensagem}. ${data.dados.length} reportes encontrados.`;
            statusDiv.style.color = 'green';
            resultadosJsonDiv.textContent = JSON.stringify(data.dados, null, 2); 
        } else {
            statusDiv.textContent = `ERRO: ${data.mensagem}`;
            statusDiv.style.color = 'red';
            resultadosJsonDiv.textContent = '';
        }
    })
    .catch(error => {
        console.error('Erro de Rede ou Validação:', error);
        statusDiv.textContent = `ERRO FATAL: ${error.message}. Verifique a conexão.`;
        statusDiv.style.color = 'darkred';
    });
});



