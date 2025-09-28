<h3>View de Fornecedor</h3>

{{-- impressão de algo no blade --}}
{{-- {{ 'Impressão com chaves duplas no blade' }} --}}

@php
    // echo '<br>';
    // echo 'Impressão com echo dentro de tags php no blade';
@endphp

@if (count($fornecedores) > 0 and count($fornecedores) < 10)
    <h3>Existem alguns Fornecedores</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem muitos Fornecedores</h3>
@else
    <h3>Ainda não existem Fornecedores</h3>
@endif