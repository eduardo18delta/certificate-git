## GERADOR DE CERTIFICADO ONLINE COM BANCO DE DADOS

Sistema criado com o objetivo de ajudar desenvolvedores iniciantes a gerar certificados em PDF usando PHP com Banco de Dados incluso.

## INSTALAÇÃO

1. - Baixe o ZIP ou clone o repositório para o seu servidor Local
2. - Importe o arquivo certificate.sql para seu Banco de Dados, modifique o acesso no arquivo init.php caso necessário. (Padrão de conexão - Host: 127.0.0.1 , Dbname: certificate, User: root e Password: vazia).
3. - Caso já tenha uma base de dados você pode se adaptar a simples que eu criei ou modificar o código para que se adapte a sua.

## PERSONALIZAÇÃO

1. - O tamanho original do certificado é em formato A4, já vai inclusa a imagem e o arquivo editavél para personalização. 
2. - O local em que aparace as informações(nome e carga horária) podem ser alterados verticalmente e horizontalmente, só basta modificar o código a partir da linha 43 no arquivo certificate.php.

## OBSERVAÇÕES

1. - Lembre-se que os certificados gerados são armazenados na pasta /arquivos, então quanto maior a quantidade gerada, mais pesado seu servidor ficará, verifique bem o tamanho da imagem personalizada que o designer irá fazer. 
2. - Não se preucupe, pois os certificados já gerados não se duplicam no servidor.

## POSSÍVEIS MELHORIAS

1. - Adicionar função para validação do CPF.
2. - Desenvolver uma Dashboard para geração de estatísticas.
3. - Criar um autenticador para o certificado, com criptografia em Md5.
4. - Criar um gerador automatico para criar certificados online sem precisar modificar código algum, somente adicionar a imagem base, usando o conceito do WordPress.
