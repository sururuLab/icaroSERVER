# icaroSERVER #

icaroSERVER é um painel de administração Linux baseado na usabilidade e praticidade para pequenas e médias empresas em manter serviços sobre Linux.

Sua interface web flat, responsiva e focada na usabilidade extrema garante um amigável e confiavel painel de gestão para servidores linux.

Usando o icaroSERVER pode-se por exemplo administrar configurações do sistema, redes, discos e compartilhamentos, sites apache2 (php, rails, python), bancos mysql e postgress, gerenciar usuários, grupos e permissões e muito, muito mais!

### Versão atual ###

Estamos em processo de desenvolvimento não recomendado o uso o icaroSERVER em produção.

### Como instalar ###

Clonar o repo em um ambiente UBUNTUN + APACHE2

Rodar composer update no pasta do projeto clonado (ou sudo composer update - caso necessário)

pronto!

### Contribuir ###

Contribuições via issues reportando erros, melhorias e novas funcionalidades ou como Pull Request propondo mudanças já implementadas.

Testadores são bem vindos, como reporters de erros, neste caso informar sempre qual distro e versão usada no teste bem como versão do apache e do PHP.

###  Distribuições Suportadas atualmente

- Ubutun Server

###  Módulos atuais

Abaixo os módulos atuais o status de cada um deles. 

- Dashboards  - Em implementação
Coleção de dashboards para análises, diagnosticos e monitoramento do servidor.

- Services and proccess - Em implementação
Informações  e gerenciamento de serviços e processos, podendo listar, matar processos, reiniciar, iniciar e parar servicos e outros monitores sobre processos, trheads e serviços.

- System - Em implementação
Informações do sistema e do hardwares além do gerenciamento de configurações como data e hora, lingua, permissões em pastas, etc.

### Módulos futuros

- Network - A fazer
Informações e diagnosticos de rede, configurar placas de redes, acessos a redes sem fio, rcomparilhar a internet em forma de rotador NAT entre placas, definir limite de banda por IP ou MAC, etc.

- Disks - A fazer
Gerenciar unidades de disco, formatar, particionar e analisar uso e estado de vida dos discos.

- Shares - A fazer
Gerenciar comparilhamentos de disco para redes hibridas (com linux, windows, mac, androids, etc) sobre SAMBA, podendo definir acessos, permissões, cotas e acompanhar estatisticas de uso dos mesmos.


