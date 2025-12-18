# Autoteste - Sistema de Manutenção de Veículos

Este projeto é um sistema web simples para **cadastro**, **login** e **consulta de manutenções de veículos**, ideal para oficinas mecânicas ou uso interno. Desenvolvido em **HTML, CSS, PHP e MySQL**, com suporte a autenticação básica e histórico de serviços por placa de veículo.

---

## 📁 Estrutura do Projeto

```
projeto_mecanica/
│
├── index.html                # Tela inicial de consulta
├── login.html                # Tela de login de usuários
├── cadastro.html             # Formulário para cadastrar serviços
├── mostrar.html              # Página que exibe os serviços realizados
├── sucesso.html              # Tela de confirmação de cadastro
│
│
├── css/
│   ├── login.css             # Estilo da tela de login
│   ├── cadastro.css          # Estilo do formulário de cadastro
│   ├── cadastro_sucesso.css  # Estilo da página de sucesso
│   └── mostrar.css           # Estilo da página de exibição dos serviços
│
├── img/
│   └── autoteste_logo.png    # Logo da empresa
│
├── src/
│   ├── conexao.php           # Conexão com o banco de dados
├── ├── inserir.php           # PHP que insere dados no banco e redireciona
│   ├── login.php             # Verificação e autenticação de login
│   ├── cadastrar.php         # Inserção de dados (opcional se usar inserir.php)
│   └── obter_resultado.php   # Consulta dos dados de serviços
```

---

## 🚀 Funcionalidades

- ✅ Login de usuário com autenticação (via banco de dados)
- ✅ Cadastro de serviços com os seguintes campos:
  - Placa
  - Veículo
  - Nome do cliente
  - Data da manutenção
  - Descrição do serviço
- ✅ Página de confirmação ("Cadastro realizado com sucesso")
- ✅ Consulta do histórico da placa mais recente cadastrada
- ✅ Estilo visual consistente com base em CSS e Google Fonts

---

## 🗃️ Estrutura das Tabelas

### 📌 Tabela `login`

```sql
CREATE TABLE login (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(30) NOT NULL,
    senha VARCHAR(100) NOT NULL
);
```

### 📌 Tabela `historico`

```sql
CREATE TABLE historico (
    id INT AUTO_INCREMENT PRIMARY KEY,
    placa VARCHAR(10),
    veiculo VARCHAR(100),
    nome VARCHAR(100),
    data_manut DATE,
    servico TEXT
);
```

> ⚠️ Senhas devem ser armazenadas com `sha1($_POST['senha'])`, mas recomenda-se `password_hash()` para produção.

---

## 🔍 Descrição dos arquivos adicionais

| Arquivo                 | Função                                                                 |
|-------------------------|------------------------------------------------------------------------|
| `inserir.php`           | Recebe os dados do `cadastro.html`, insere no banco e redireciona para `sucesso.html`. |
| `cadastro.css`          | Estilização da página de cadastro de manutenção de veículos.           |
| `cadastro_sucesso.css`  | Estilização da tela de confirmação de cadastro realizado com sucesso.  |
| `login.css`             | Estilização visual da tela de login.                                   |
| `mostrar.css`           | Estilo da tabela de consulta e exibição do histórico de serviços.      |

---

## 💻 Como rodar o projeto

1. Instale o **XAMPP** e inicie Apache + MySQL.
2. Copie a pasta do projeto para `htdocs/`.
3. Crie o banco `autoteste` no phpMyAdmin.
4. Importe ou crie as tabelas `login` e `historico`.
5. Cadastre um usuário manualmente na tabela `login` com senha SHA1.
6. Acesse no navegador:

```
http://localhost/projeto_mecanica/login.html
```

---

## ✨ Melhorias Futuras

- Usar `password_hash()` em vez de SHA1
- Adicionar edição e exclusão de registros
- Sistema de permissões por usuário (admin, consulta, etc)
- Responsividade em telas menores

---

## 👨‍🔧 Autor

**Bruno Schmidt de Mattos**  
Desenvolvedor do sistema Autoteste para controle de serviços mecânicos.

---

## 📝 Licença

Este projeto está disponível para fins educacionais e uso pessoal. Livre para adaptar e melhorar.