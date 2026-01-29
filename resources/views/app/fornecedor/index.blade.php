<h3>View de Fornecedor</h3>

{{-- impressão de algo no blade --}}
{{-- {{ 'Impressão com chaves duplas no blade' }} --}}

@php
    // echo '<br>';
    // echo 'Impressão com echo dentro de tags php no blade';
@endphp

@isset($fornecedores)
    {{-- @for ($i = 0; $i < count($fornecedores); $i++)
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ:  {{ $fornecedores[$i]['cnpj'] ?? 'CNPJ não informado'}}
        <br>
        Telefone: {{ $fornecedores[$i]['telefone'] ?? 'Telefone não informado'}}
        <br>
        <br>
    @endfor --}}


    @forelse ($fornecedores as $indice =>  $fornecedor)
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ:  {{ $fornecedor['cnpj'] ?? 'CNPJ não informado'}}
        <br>
        Telefone: {{ $fornecedor['telefone'] ?? 'Telefone não informado'}}
        <br>
        <hr>
    @empty
        Não existem fornecedores!
    @endforelse
    

@endisset