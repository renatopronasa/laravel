Código-fonte das lives sobre [Laravel Master Week]().<br>

## Requisitos

* PHP 8.2 ou superior - Conferir a versão: php -v
* Composer - Conferir a instalação: composer --version
* Node.js 20 ou superior - Conferir a versão: node -v
* GIT -Cnferir a instalação: git -v
* MySQL 8 ou superior - Conferir a versão: mysql --version

## Como rodar o projeto baixado

Duplicar o arquivo ".env.example" e renomear para ".env".<br>
Alterar no arquivo ".env" as credenciais do banco de dados.<br>

Instalar as dependências do PHP.
```
composer install
```

Gerar a chave no arquivo ".env" - APP_KEY.
```
php artisan key:generate
```

Instalar as dependências do Node.js.
```
npm install
```

Executar as migrations para criar a base de dados e as tabelas.
```
php artisan migrate
```

Executar as seed para cadastrar registro de teste.
```
php artisan db:seed
```

Iniciar o projeto criado com Laravel.
```
php artisan serve
```

Executar as blibliotecas Node.js.
```
npm run dev
```

Acessar o conteúdo criado com Laravel.
```
http://127.0.0.1:8000
```

Usuário: renato.pronasa@gmail.com<br>
Senha: 123456A#

## Sequencia para criar o projeto
Criar o projeto com Laravel.
```
composer create-project laravel/laravel .
```

Iniciar o projeto criado com Laravel.
```
php artisan serve
```

Acessar o conteúdo criado com Laravel.
```
http://127.0.0.1:8000
```

Instalar as dependências do Node.js.
```
npm install
```

Executar as blibliotecas Node.js.
```
npm run dev
```

Instalar o framework Bootstrap.
```
npm i --save bootstrap @popperjs/core
```

Instalar o sass.
```
npm i --save-dev sass
```

Criar a Controller
```
php artisan make:controller NomeController
```
```
php artisan make:controller UserController
```

Criar a View.
```
php artisan make:view nome
```
```
php artisan make:view users/show
```

Executar as migration para criar a base de dados e as tabelas.
```
php artisan migrate
```

Criar Seed para cadastrar registro de teste.
```
php artisan make:seeder NomeSeeder
```
```
php artisan make:seeder UserSeeder
```

Criar um arquivo de Request com validações
```
php artisan make:request NomeDoRequest
```
```
php artisan make:request CourseRequest
```

Executar as seed para cadastrar registro de teste.
```
php artisan db:seed
```

Traduzir para português [Módulo de linguagem pt-BR](https://github.com/lucascudo/laravel-pt-BR-localization).

## Como usar o GitHub

Inicializar um novo repositório Git.
```
git init
```

Adicionar todos os arquivos modificados no staging area - área de preparação.
```
git add .
```

Commit representa um conjunto de alterações.
```
git commit -m "Base do projeto"
```

Verificar em qual branch está.
```
git branch
```

Renomear a branch atual no Git para main.
```
git branch -M main
```

Adicionar um repositório remoto ao repositório local.
```
git remote add origin https://github.com/celkecursos/Laravel-Master-Week.git
```

Enviar os commits locais para um repositório remoto.
```
git push -u origin main
```

## Conectar o PC ao servidor com SSH

Criar chave SSH (chave pública e privada).
```
ssh-keygen -t rsa -b 4096 -C "seu-email@exemplo.com"
```
```
ssh-keygen -t rsa -b 4096 -C "renato.pronasa@gmail.com"
```

Anotar a senha: 

Local que é criado a chave pública.
```
C:\Users\SeuUsuario\.ssh\
```
```
C:\Users\cesar/.ssh/
```

Exibir o conteúdo da chave pública.
```
cat ~/.ssh/id_rsa.pub
```

Acessar o servidor com SSH.
```
ssh root@93.127.210.72
```

Usar o terminal conectado ao servidor para listar os arquivo.
```
cd /home/user/htdocs/srv566492.hstgr.cloud
```

Listar os arquivo.
```
ls
```

Remover os arquivos do servidor.
```
rm -rf /home/user/htdocs/endereco-do-servidor/{*,.*}
```
```
rm -rf /home/user/htdocs/srv566492.hstgr.cloud/{*,.*}
```

## Conectar o servidor ao GitHub

Gerar a chave SSH no servidor.
```
ssh-keygen -t rsa -b 4096 -C "cesar@celke.com.br"
```

Imprimir a chave pública gerada.
```
cat ~/.ssh/id_rsa.pub
```

No GitHub, vá para Settings (Configurações) do seu repositório ou da sua conta, em seguida, vá para SSH and GPG keys e clique em New SSH key.<br>
Cole a chave pública no campo fornecido e salve.<br>

Verificar a conexão com o GitHub.
```
ssh -T git@github.com
```

Se gerar o erro "The authenticity of host 'github.com (xx.xxx.xx.xxx)' can't be established.".<br>
Isso é uma medida de segurança para evitar ataques de "man-in-the-middle".<br>
Necessário adicionar a chave do host do GitHub ao arquivo de known_hosts do seu servidor.<br>

Digite yes quando for solicitado.
```
Are you sure you want to continue connecting (yes/no/[fingerprint])? yes
```

Verificar a conexão novamente.
```
ssh -T git@github.com
```

Mensagem de conexão realizada com sucesso.<br>
Hi nome-usuario! You've successfully authenticated, but GitHub does not provide shell access.<br>

Usar o terminal conectado ao servidor. Primeiro acessar o diretório do projeto no servidor.
```
cd /home/user/htdocs/srv566492.hstgr.cloud
```

Baixar os arquivos do Git.
```
git clone --branch <branch_name> <repository_url> .
```

Duplicar o arquivo ".env.example" e renomear para ".env".
```
cp .env.example .env
```

Abrir o arquivo ".env" e alterar as variaveis de ambiente.
```
nano .env
```

Ctrl + O e enter para salvar.<br>
Ctrl + X para sair.<br>

Alterar o valor das variaveis de ambiente.
```
APP_NAME=Celke
APP_ENV=production
APP_KEY=
APP_DEBUG=false
APP_TIMEZONE=America/Sao_Paulo
APP_URL=https://srv566492.hstgr.cloud 
```

Comentar as variaveis de conexão.
```
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=celke
# DB_USERNAME=root
# DB_PASSWORD=
```

Alterar para armazenar as sessões no arquivo "file".
```
SESSION_DRIVER=file
```

Instalar as dependências do PHP.
```
composer install
```

Gerar a chave.
```
php artisan key:generate
```

Alterar a propriedade do diretório.
```
sudo chown -R user:user /home/user/htdocs/srv566492.hstgr.cloud
```

Instalar as dependências do Node.js.
```
npm run build
```

Quando gerar o erro "sh: 1: vite: not found", necessário instalar o Vite. Executar e Etapa 1, Etapa 2 e Etapa 3.
```
npm install
```

Etapa 1 - Verificar se o Vite está instalado.
```
npx vite --version
```

Etapa 2 - Gerar a build. Compilar o código-fonte do projeto.
```
npm run build
```

Etapa 3 - Remover o diretório "node_modules".

Alterar a propriedade do diretório.
```
sudo chown -R user:user /home/user/htdocs/srv566492.hstgr.cloud
```

Reiniciar Nginx.
```
sudo systemctl restart nginx
```

Limpar cache.
```
php artisan config:clear
```

Criar a base de dados.<br>
Alterar no arquivo .env as credenciais do banco de dados.<br>
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome-da-base-de-dados
DB_USERNAME=usuario-do-banco-de-dados
DB_PASSWORD=senha-do-banco-de-dados
```

Executar as migration para criar a base de dados e as tabela.
```
php artisan migrate
```

Cadastrar registro de teste.
```
php artisan db:seed
```

Para usar um domínio próprio, é necessário adicionar o DNS da Hostinger no gerenciador de domínios, como, por exemplo, no "registro.br".<br>
Adicione o domínio na hospedagem.<br>
Verificar a propagação do DNS: Acessar[https://www.whatsmydns.net]<br>

Alterar no arquivo "vhost" da hospedagem o domínio, por exemplo:
```
server_name celkeprime.com.br;
```

## Instalar o Node.js no servidor

```
sudo apt update
```

Adicionar no repositório o Node.js 20.x.
```
curl -fsSL https://deb.nodesource.com/setup_20.x | sudo -E bash -
```

Instalar o Node.js. -y automatizar a instalação de pacotes sem solicitar a confirmação manual do usuário.
```
sudo apt install -y nodejs
```

Reiniciar Nginx.
```
sudo systemctl restart nginx
```

Limpar cache.
```
php artisan config:clear
```

Remover o Node.js.
```
sudo apt remove nodejs
```