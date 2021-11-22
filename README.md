# Implementação de uma API SOAP

Trabalho da disciplina de Sistemas Distribuidos

### Time de desenvolvimento:
- Israel dos Santos Elias
- Janaina Ferreira da Silva
- Juliana Nascimento Silva

### Documentação de Testes 
API_SOAP/DocumentationGetIt

### Testes por SoapClient
    
    Lista todos os alunos cadastrados<br>
    {URL}/service.php?f=list

    Busca um aluno filtrando por CPF<br>
    {URL}/service.php?f=get&cpf=valor

    Cadastra um novo aluno<br>
    {URL}/service.php?f=create&nome=valor&curso=valor&semestre=valor&ra=valor&cpf=valor&cidade=valor

    Atualiza um aluno<br>
    {URL/service.php?f=update&ra=valor&cpf=valor<&curso=valor&semestre=valor&cidade=valor&nome=valor>

    Deleta um aluno<br>
    {URL}/service.php?f=delete&cpf=valor