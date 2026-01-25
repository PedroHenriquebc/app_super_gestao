<h3>View de Fornecedor</h3>

{{-- impressão de algo no blade --}}
{{-- {{ 'Impressão com chaves duplas no blade' }} --}}

@php
    // echo '<br>';
    // echo 'Impressão com echo dentro de tags php no blade';
@endphp

@isset($fornecedores)
    @if (count($fornecedores) > 0 and count($fornecedores) < 10)
        <h3>Existem alguns Fornecedores</h3>
    @elseif(count($fornecedores) > 10)
        <h3>Existem muitos Fornecedores</h3>
    @else
        <h3>Ainda não existem Fornecedores</h3>
    @endif

    {{-- Entra na condicional se for falso(contrário do if) --}}
    @unless ($fornecedores[1]['status'] == 'S')
        <h3>Fornecedor Inativo</h3>
    @endunless

    Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br>
    Status: {{ $fornecedores[1]['status'] }}
    <br>
    {{-- @isset($fornecedores[0]['cnpj'])
        CNPJ: {{ $fornecedores[0]['cnpj'] }}    
    @endisset --}}

    CNPJ: {{ $fornecedores[1]['cnpj'] ?? 'Valor Não Preenchido' }}
    <br>
    Telefone: ({{ $fornecedores[1]['ddd'] ?? '' }}) {{ $fornecedores[1]['telefone'] ?? '' }}
    <br>
    @switch($fornecedores[1]['ddd'])
        @case('81')
            Pernambuco - PE
            @break
        @case('11')
            São Paulo - SP
            @break
        @case('85')
            Ceará - CE
            @break
        @default
            Estado não identificado
    @endswitch


@endisset

@isset($outros_fornecedores)
    @if(@empty($outros_fornecedores))
        <h3>Não existem outros fornecedores</h3>
    @else
        <h3>Existem outros fornecedores</h3>
    @endif
@endisset