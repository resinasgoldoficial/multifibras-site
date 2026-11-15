# Site Multi Fibras

Site institucional da **Multi Fibras** — isolamento térmico e fibra de vidro.
Ribeirão Preto/SP · WhatsApp/Telefone: (16) 98807-2089

Construído sobre a estrutura de referência do tema do clone IsoLV, com identidade,
conteúdo, cores e textos próprios (PT-BR).

---

## Páginas

| Página | Arquivo |
| --- | --- |
| Início | `index.html` |
| Serviços | `servicos/index.html` |
| Galeria | `galeria/index.html` |
| Contatos | `contactos/index.html` |
| Isolamento Térmico | `categorias/isolamento-termico/index.html` |
| Baús Frigoríficos | `categorias/baus-frigorificos/index.html` |
| Vans e Furgões | `categorias/vans-e-furgoes/index.html` |
| Reparação de Fibra | `categorias/reparacao-fibra-de-vidro/index.html` |
| Veículos Utilitários | `categorias/veiculos-utilitarios/index.html` |

## Identidade

- **Cores:** marinho `#102A43` · azul `#1379B8` · branco `#FFFFFF` · cinza `#252B32`
- A cor primária do tema (antes ciano `#00c0e2`) foi trocada por `#1379B8` em `css/theme.min.css`.
  Esse tom garante contraste 4,71:1 com texto branco (mínimo AA: 4,5:1).
- Ajustes próprios ficam em `css/multifibras.css` (importado pelo `css/master.css`).

## Imagens

- `img/logo-multifibras.png` — logotipo
- `img/sobre-nos.jpg` — imagem da seção "Sobre nós"
- `media/main-slider/` — imagens do slider da home
- `media/service/` — imagens dos serviços
- `media/galeria/` — fotos da galeria
- `media/bg/` — fundos dos cabeçalhos internos

## Contatos

- WhatsApp/Telefone: **(16) 98807-2089** (`https://wa.me/5516988072089`)
- E-mail: contato@multifibras.online
- Instagram: [@multifibras.oficial](https://www.instagram.com/multifibras.oficial/)
- Endereço: Rua José Maria Seixas, 260 — Ribeirão Preto/SP

## Formulário

Os formulários usam o **[FormSubmit](https://formsubmit.co)** (gratuito, sem cadastro),
que encaminha as mensagens para **contato@multifibras.online** por e-mail. Isso funciona em
hospedagem estática (Vercel, GitHub Pages etc.), que não executa PHP.

- Endpoint configurado: `https://formsubmit.co/contato@multifibras.online`
- **Ativação (1 vez):** no primeiro envio, o FormSubmit manda um e-mail de confirmação
  para `contato@multifibras.online`. Basta clicar no link para ativar.
- Para trocar o destino, altere o `action` dos formulários nos arquivos `index.html` e
  `contactos/index.html`.

O arquivo `sendmail.php` foi mantido apenas como alternativa caso o site seja hospedado
em um servidor com PHP (hospedagem nacional). Nesse caso, troque o `action` dos
formulários de volta para `sendmail.php`.

## Como visualizar localmente

Com Python instalado, dentro desta pasta:

```
python -m http.server 8099
```

E abra `http://localhost:8099/` no navegador.

## Publicação

O site é estático e foi preparado para o **[Vercel](https://vercel.com)**:

1. O código fica em um repositório no GitHub.
2. No Vercel: **Add New… → Project → Import Git Repository** e escolha o repositório.
3. Framework Preset: **Other**. Build Command e Output Directory: deixe em branco
   (o site é servido direto da raiz).
4. Deploy. O Vercel gera uma URL `*.vercel.app`; depois dá para ligar o domínio próprio
   em **Settings → Domains**.

> Observação: o Vercel não hospeda e-mail. O endereço `contato@multifibras.online` precisa
> ser criado em outro serviço (registrador do domínio, Zoho Mail, Google Workspace etc.).

## Antes de publicar

1. Confirmar/ativar o FormSubmit no primeiro envio do formulário.
2. Revisar textos e números (estatísticas) conforme a realidade da empresa.
3. Trocar/substituir fotos por versões definitivas, se necessário.
4. Apontar o domínio próprio no Vercel.
