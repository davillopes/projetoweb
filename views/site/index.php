<?php

/** @var yii\web\View $this */

$this->title = 'Projeto: Aplicação WEB';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Projeto: Aplicação WEB - CRUD Básico</h1>
    </div>
    <br>
    <br>
    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Requisitos técnicos:</h2>

                <p>
                O projeto deve ser implementado utilizando a base das mesmas tecnologias que utilizamos na Invisual, isto é:
                <br>
                <ul>
                    <li>Linguagem PHP 8.1 com o framework Yii2;</li>
                    <li>Banco de dados MYSQL 8;</li>
                    <li>Servidor Apache;</li>
                    <li>HTML / CSS / JavaScript básico;</li>
                    <li>GIT (para versionamento do código do projeto, pode ser no github);</li>
                </ul>
                Desejável: uso de migrations do Yii2 para criação das tabelas do projeto no banco de dados;
                <br>
                Dicas, documentações e/ou tutoriais: 
                <br>
                <a class="btn btn-outline-secondary" href="https://www.yiiframework.com/doc/guide/2.0/pt-br">Guia do yiiframework &raquo;</a>    
                <br>
                <a class="btn btn-outline-secondary" href="https://www.youtube.com/playlist?list=PLBD8to5dJhvzp1PPijCsGBKZnHTVtHf7a">Explicações em videos &raquo;</a>
                </p>
            </div>
            <div class="col-lg-4">
                <h2>Requisitos Negociais:</h2>

                <p>Você pode escolher entre uma das duas opções:
                    <br>
                Sistema básico com login padrão criado pelo Yii2 com um CRUD - tela de pesquisa (index), visualização (view), criação (create),
                 edição (update) e exclusão (delete) de:</p>

            </div>
            <div class="col-lg-4">
                <h2>OPÇÃO 1: Cadastro de Produto </h2>

                <p>1.1 Campos: ID, Nome, Unidade (dropdown com: Unidade, Caixa, Ampola, Miligrama), Valor Unitário, Validade (campo de data) Status (checkbox: Ativo e Inativo);
                    <br>
                1.2 Na tela de visualização, deve haver uma aba para cadastro de Marcas, via modal, adicionando dinamicamente em um grid que haverá ao menos a opção de Excluir a marca vinculada ao produto;</p>

                <h2>OPÇÃO 2: Cadastro de Profissional </h2>

                <p>
                1.1 Campos: ID, Nome, Conselho (dropdown com: CRM, CRO, CRN, COREN), Numero Conselho, Nascimento (campo de data), Status (checkbox: Ativo e Inativo);
                    <br>
                1.2 Na tela de visualização, deve haver uma aba para cadastro de Clínicas, via modal, adicionando dinamicamente em um grid que haverá ao menos a opção de Excluir a clínica vinculada ao profissional;
                </p>
            </div>
        </div>

    </div>
</div>
