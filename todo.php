<?php

/*
    * transcrição do modulo de totem de php puro para a estrutura do laravel
    ? copiar e colar o que ja está pronto e começar a estruturação do laravel

    * como o totem funciona:
    ! 1 - Capa (index.php)
    ? - contem uma imagem (assets/images/senha.webp)
    ? - contem um link quando clica redireciona para o arquivo novo.php

    * ******************************************************************
    ! 2 - Módulo atendimento (novo.php)
    ? - contem um total de 8 opções sendo elas:

    ! Cores
    ? - color1 = #48CAE4
    ? - color2 = #00B4D8
    ? - color3 = #0096C7
    ? - color4 = #0077B6
    ? - color5 = #023E8A
    ? - color6 = #8dc63f
    ? - color7 = #88AF4A

    ! Caminho base para icones
    ? - assets/images/
    ? - assets/icones/

    ? - CONSULTAS / RETORNO:
    ? - Normal: 103
    ? - Prioritário: 104
    ? - Icone: assets/images/consulta.png
    ? - Cor: color1


    ? - ORÇAMENTO DE EXAMES:
    ? - Normal: 105
    ? - Prioritário: 106
    ? - Icone: assets/images/exames-1.png
    ? - Cor: color2


    ? - COLETA LABORATÓRIO
    ? - Normal: 18
    ? - Prioritário: 100 (INATIVO)
    ? - Icone: assets/icones/labs.png
    ? - Cor: color5


    ? - RAIO X
    ? - Normal: 101
    ? - Prioritário: 102
    ? - Icone: assets/icones/raiox.png
    ? - Cor: color7


    ? - MEDICINA DO TRABALHO
    ? - Normal: 19
    ? - Prioritário: 22
    ? - Icone: assets/images/medicina-1.png
    ? - Cor: color3


    ? - MEU PLANO ACESSAMED
    ? - Normal: 111
    ? - Prioritário: 112
    ? - Icone: assets/images/logo-acessamed-branca.png
    ? - Cor: color6


    ? - RESULTADOS DE EXAMES - TCR
    ? - Normal: 113
    ? - Prioritário: 0 (INATIVO)
    ? - Icone: assets/images/logo_tcr.svg
    ? - Cor: color3

    TODO: Patrick -> Senha de X a Y mostrar o horário de atendimento
    Exemplo:
    (10 Senhas de 07:00)
    (20 Senhas de 09:00)
    (30 Senhas de 09:00)


    ? - Auto Atendimento - Retorno
    ? -

    * ******************************************************************


    * estruturação do laravel
    ! - Rotas
    ? - Prefixo /totems
    ? - Rota unidade2
    ? - Rota atendimento_senhas


    ! - View
    ? - index.blade.php
    ? - atendimento_senhas.blade.php


    ! - Controller
    ? - TotemController


*/
