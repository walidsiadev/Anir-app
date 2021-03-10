@extends('layout.master')

@section('title', 'Clients')
@section('container')
    <div class="row">
        <p>Gestion des clients</p>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form id="frmClient" class="form-horizontal">
                    @csrf
                    <div class="card-body">
                        <h4 class="card-title">Ajouter un Client</h4>
                        <div class="form-group row">
                            <label for="nom" class="col-sm-3 text-right control-label col-form-label">Nom</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Description</label>
                            <div class="col-sm-9">
                                <textarea id="description" name="description" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button onclick="ajouter()" type="button" class="btn btn-primary">Enregistrer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Liste des client</h5>
                    <div class="table-responsive">
                        <table id="listeclients" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NOM</th>
                                    <th>Description</th>
                                    <th>Créer le</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td>
                                        <button type="button" class="btn btn-cyan btn-sm"  
                                        onclick="showModifier('{{$item->id}}','{{$item->nom}}','{{$item->discription}}')">
                                        Modifier </button> 
                                        <button onclick="showsupp('{{$item->id}}')" type="button" class="btn btn-danger btn-sm">supprimer</button>
                                        {{$item->id}} 
                                    </td>
                                    <td>{{$item->nom}}</td>
                                    <td>{{$item->discription}}</td>
                                    <td>{{$item->created_at}}</td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>NOM</th>
                                    <th>description</th>
                                    <th>Créer le</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modifierfrm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modification</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="idupdate" id="idupdate">
                    <div class="form-group row">
                        <label for="nom" class="col-sm-3 text-right control-label col-form-label">Nom</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="mnom" name="mnom" placeholder="Nom">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Description</label>
                        <div class="col-sm-9">
                            <textarea id="mdescription" name="mdescription" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button onclick="modifier()" type="button" class="btn btn-primary">Modifier</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="supprimerpopup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Suppression</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="idsupp" id="idsupp">
                    <p>Merci de confirmer votre action</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button onclick="supprimer()" type="button" class="btn btn-primary">Supprimer</button>
                </div>
            </div>
        </div>
    </div>

        <script src="{{ asset('/assets/formvalid.js') }}"></script>
    <script>
        $('#listeclients').DataTable(objLangueDatatable);
        function ajouter() {
            $.ajax({
                type: 'POST',
                url: '/addclient',
                data: {
                    'nom':$('#nom').val(),
                    'description':$('#description').val()
                },
                success: function(data) {
                    if (data.status == 'ok') {
                        toastr.success('Ajouter', 'Client');
                    }else{
                        toastr.error('Erreur d\'ajouter', 'Client');
                    }
                },
                error: function(){
                    toastr.error('Erreur d\'ajouter', 'Client');
                }
            });
        }
        function showModifier(id,nom,desc) {
            $('#mnom').val(nom);
            $('#mdescription').val(desc);
            $('#idupdate').val(id);
            $('#modifierfrm').modal('show');
        }
        function modifier() {
            $.ajax({
                type: 'POST',
                url: '/updateclient',
                data: {
                    'id':$('#idupdate').val(),
                    'nom':$('#mnom').val(),
                    'description':$('#mdescription').val()
                },
                success: function(data) {
                    if (data.status == 'ok') {
                        toastr.success('Ajouter', 'Client');
                    }else{
                        toastr.error('Erreur d\'action', 'Client');
                    }
                },
                error: function(){
                    toastr.error('Erreur d\'action', 'Client');
                }
            });
            $('#modifierfrm').modal('hide');
        }
        function showsupp(id) {
            $('#idsupp').val(id);
            $('#supprimerpopup').modal('show');
        }
        function supprimer() {
            $.ajax({
                type: 'POST',
                url: '/suprimerclient',
                data: {
                    'id':$('#idsupp').val(),
                },
                success: function(data) {
                    if (data.status == 'ok') {
                        toastr.info('suprimer de la base', 'Client');
                    }else{
                        toastr.error('Erreur d\'action', 'Client');
                    }
                },
                error: function(){
                    toastr.error('Erreur d\'action', 'Client');
                }
            });
            $('#supprimerpopup').modal('hide');
        }
    </script>
@endsection