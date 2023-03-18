@extends('layouts.admin')

@section('content')
<!-- Styles Bootstrap -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
<!-- Scripts Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
<div class="pd-20 card-box mb-30">
    <div class="clearfix mb-20">
        <div class="pull-left">
            <h4 class="text-blue h4">Message</h4>
        </div>
    </div>
    <table class="table text-center align-middle">

<thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nom et Prenom</th>
        <th scope="col">addresse mail</th>
        <th scope="col">Message</th>
        <th scope="col">Action</th>
    </tr>
</thead>
<tbody>
    @foreach($contacteznous as $contact)
    <tr>
        <th scope="row">{{$contact->id}}</th>
        <td>{{$contact->prenomNom}}</td>
        <td>{{$contact->mail}}</td>
        <td><p>{{Str::limit( $contact->message, 50)}} <br></p></td>
        <td>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal{{$contact->id}}">
                Afficher les données
            </button>

           <!-- Modal -->
<div class="modal fade" id="myModal{{$contact->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Données du tableau</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="word-wrap: break-word;">
        <table class='table'>
          <thead>
            <tr>
              <th scope='col'>Nom et Prenom</th>
              <th scope='col'>addresse mail</th>
              <th scope='col '>Message</th>  
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{$contact->prenomNom}}</td>
              <td>{{$contact->mail}}</td>
              <td><p>{{$contact->message}} <br></p></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

        </td>
    </tr>
    @endforeach
</tbody>

</table>
</div>

@endsection