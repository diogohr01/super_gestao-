<h3>Fornecedor</h3>

@php
/*
    if($fornecedores === null) {

    }elseif(){

    }else{

    }
*/
@endphp

{{-- @dd($fornecedores)--}}

{{--
@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem varios fornecedores cadastrados</h3>
@else
    <h3> Ainda não existem fornecedores cadastrados</h3>
@endif

--}}

@isset($fornecedores)

{{--@for($i = 0; isset($fornecedores[$i]); $i++) --}}
@forelse($fornecedores as $indice => $fornecedor )
Interação atual: {{ $loop->iteration }}</br>
@if($loop->first)
    Primeira iteração do Loop
</br>
@endif

Fornecedor: {{$fornecedor['nome']}}</br>

Status: {{ $fornecedor['status']}}
@unless($fornecedor['status'] == 'S') <!-- executa se o retorno for false -->
    Fornecedor inativo
@endunless</br>

  {{--  @isset($fornecedores[0]['cnpj'])
            CNPJ: {{$fornecedores[0]['cnpj']}}
        @empty($fornecedores[0]['cnpj'])
             Vazio
        @endempty
    @endisset
    --}}
CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não foi preenchido' }}</br>

Telefone: {{$fornecedor['ddd'] ?? ''}} {{$fornecedor['telefone'] ?? ''}}
@switch($fornecedor['ddd'])
    @case('11')
        São paulo - SP
        @break
    @case('51')
        Rio grande do Sul - RS
        @break
    @case('32')
        Minas gerais - MG
        @break
    @default
        Estado não identificado

@endswitch</br>
----------------------------------------------------------------------</br></br>

@empty
    Não existem fornecedores cadastrados!


@endforelse
{{--@endfor --}}

@endisset

</br>


{{--
@if(!($fornecedores[0]['status'] == 'S'))
    Fornecedor inativo
@endif

<br>
@unless($fornecedores[0]['status'] == 'S') <!-- executa se o retorno for false -->
    Fornecedor inativo
@endunless
<br>
--}}

