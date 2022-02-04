<h3>Fornecedor</h3>
{{-- Isto é um comentário do blade
    Este comentário será descartado pelo interpretador --}}

@php
    // sintaxe padrao
    /*if(true){

    }elseif(!true){

    }else{
        
    }*/
@endphp

{{-- ISSET --}}
@isset($fornecedores)
{{-- Sintaxe do blade para if/elseif/else --}}
@if(count($fornecedores)>0 && count($fornecedores)<10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores)>10)
    <h3>Existem vários fornecedores cadastrados</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif

{{-- Unless é o contrario do if/else --}}
{{-- Unless executa se o retorno for false --}}
Fornecedor = {{$fornecedores[0]["Nome"]}}
<br />
Status = {{$fornecedores[0]["Status"]}}
<br />
@isset($fornecedores[0]["CNPJ"])
CNPJ = {{$fornecedores[0]["CNPJ"]}}
<br />
@endisset
{{-- Sintaxe IF --}}
@if($fornecedores[0]["Status"]=="S")
    Fornecedor Ativo
@endif

{{-- Sintaxe UNLESS --}}
@unless($fornecedores[0]["Status"]=="S")
    Fornecedor Inativo
@endunless

{{-- Exibir arrays no front --}}
@dd($fornecedores)

@endisset
