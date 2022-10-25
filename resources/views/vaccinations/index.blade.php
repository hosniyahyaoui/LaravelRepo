@extends('vaccinations.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Vaccinations</div>
                    <br/>
                        <br/>
                        <form class="row g-3" action="">
                            <div class="col-md-6">
                           <input type="search" name="search" class="form-control" value="{{$search}}" placeholder="search..."/>
                           </div>
                           <div class="col-md-3">
                           <input type="submit" value="Search" class="btn btn-secondary"/>
                           </div> 
                           
                        </form>
                    <div class="card-body">
                        <a href="{{ route('vaccinations.create') }}" class="btn btn-success btn-sm" title="Add New Vaccination sheet">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <a href="{{ route('vaccinations.pdf') }}" class="btn btn-secondary btn-sm" title="PDF">
                      <i class="fa fa-plus" aria-hidden="true"></i> PDF
                       </a>
                        <br/>
                        <br/>
                        @if ($message = Session::get('success'))
                          <div class= "alert alert-success">
                            <p>{{$message}}</p>
                          </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Vaccination Date</th>
                                        <th>isDone</th>
                                        <th>Result</th>
                                        <th>Vaccin</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($vaccinations as $vaccination)
                                    <tr>
                                        <td>{{ $vaccination->id }}</td>
                                        <td>{{ $vaccination->dateVaccination }}</td>
                                        <td>{{ $vaccination->estFait }}</td>
                                        <td>{{ $vaccination->resultat }}</td>
                                        <td>{{ $vaccination->vaccin_id }}</td>
                                        <td>
                                        <a href="{{ route('vaccinations.show' ,$vaccination->id) }}" title="View vaccination"><button class="btn btn-success btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ route('vaccinations.edit' ,$vaccination->id) }}" title="Edit vaccination"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            
                                            <form method="POST" action="{{ route('vaccinations.destroy' ,$vaccination->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                @method('DELETE')
                                                {{ csrf_field() }}
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete vaccination" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection