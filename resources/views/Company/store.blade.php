@extends('templates.company')
@section('title', 'Adicionar Company')
@section('content')
    <form method="get" >

        Nome Empresa: <input type="text" name="idcompany" /><br>
        E-mail: <input type="email" name="email" /><br>
        Fantasy Name: <input type="text" name="fantasy_name" /><br>
        Street: <input type="text" name="street" /><br> 
        neighborhood: <input type="text" name="neighborhood" /><br> 
        state: <input type="text" name="state" /><br> 
        country: <input type="text" name="country" /><br> 
        number: <input type="text" name="number" /><br> 
        postal_cod: <input type="text" name="postal_cod" /><br> 
        admin_email: <input type="text" name="admin_email" /><br> 
        admin_telefone: <input type="text" name="admin_telefone" /><br> 
        id_empresa: <input type="text" name="id_empresa" /><br> 
        telephone: <input type="text" name="telephone" /><br> 
        password: <input type="text" name="password" /><br> 

        <input type="submit" value="Enviar" />

    </form>

@endsection