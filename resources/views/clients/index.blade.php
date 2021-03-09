@extends('layout.master')

@section('title', 'Clients')
@section('container')
    <div class="row">
        <p>Gestion des clients</p>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form id="frmClient" class="form-horizontal" method="POST" action="/addclient">
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
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
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
                                    <td>{{$item->id}}</td>
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
        <script src="{{ asset('/assets/formvalid.js') }}"></script>
    <script>
        $('#listeclients').DataTable(objLangueDatatable);
    </script>
@endsection