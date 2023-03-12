@extends('templates.template')

@section('content')
<h1>Crud</h1>
<div> class="col-8 m-auto"
   <table class="table">
      <thead>
         <tr>
            <th scope="col">id</th>
            <th scope="col">nome</th>
            <th scope="col">cpf</th>
            <th scope="col">nascimento</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
         </tr>
       
         </tr>
      </tbody>
   </table>
</div>
@endsection