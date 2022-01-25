
@extends('layouts.master')
@section('title')
    yazan
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card-header">
                    <h4 class="card-title"> Simple Table</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th>
                                id
                            </th>
                            <th>
                               Id User
                            </th>
                            <th>
                               governorate
                            </th>
                            <th>
                                Name House
                            </th>
                            <th>
                               Category House
                            </th>
                            <th>
                               Type House
                            </th>
                              <th>
                               description
                            </th>
                              <th>
                               phone
                            </th>
                            <th class="text-right">
                                Edit
                            </th>
                            <th class="text-right">
                                Delete
                            </th>
                            </thead>
                            <tbody>
                            @foreach($houses as $row)
                                <tr>
                                    <td>
                                        {{$row->id}}
                                    </td>
                                    <td>
                                        {{$row->idUser}}

                                    </td>
                                    <td>
                                        {{$row->governorate}}
                                    </td>
                                    <td>
                                        {{$row->nameHouse}}

                                    </td>
                                    <td>
                                        {{$row->categoryHouse}}

                                    </td>
                                      <td>
                                        {{$row->typeHouse}}

                                    </td>
                                      <td>
                                        {{$row->description}}

                                    </td>
                                    <td>
                                        {{$row->phone}}

                                    </td>
                                    <td class="text-right">
                                        <a href="/role-house-edit/{{$row->id}}" class="btn btn-primary">edite</a>
                                    </td>



                                    <td class="text-right">
                                        <form action="/role-house-delete/{{$row->id}}" method="post">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <button type="submit" class="btn btn-danger">delete</button>

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
        <div class="col-md-12">
            <div class="card card-plain">
                <div class="card-header">
                    <h4 class="card-title"> Table on Plain Background</h4>
                    <p class="category"> Here is a subtitle for this table</p>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('scripts')

@endsection