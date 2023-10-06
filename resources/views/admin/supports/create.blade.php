<h1>Nova Dúvida</h1>

<form action="{{ route('supports.store') }}" method="POST">

    <!-- O token é necessário para impedir ataques do tipo csrf, ele deve vir no início do formulário -->
    {{-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> --}}
    @csrf()

    <input type="text" placeholder="Assunto" name="subject">
    <textarea name="body" cols="30" rows="5" placeholder="Descrição"></textarea>
    <button type="submit">Enviar</button>
</form>