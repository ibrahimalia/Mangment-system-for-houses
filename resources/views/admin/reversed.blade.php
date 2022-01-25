
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
                                ID
                            </th>
                            <th>
                                User ID
                            </th>
                            <th>
                                House ID
                            </th>

                            <th class="text-right">
                                Confirm
                            </th>
                            <th class="text-right">
                                Delete
                            </th>
                            </thead>
                            <tbody>
                            @foreach($users as $row)
                                <tr>
                                    <td>
                                        {{$row->id}}
                                    </td>
                                    <td>
                                        {{$row->idUser}}

                                    </td>
                                    <td>
                                        {{$row->idHouse}}
                                    </td>
                                <!--
                                    <td>
                                        {{$row->idHouse}}

                                    </td>
                                  <td>
                                        {{$row->age}}

                                    </td>
                                    <td>
                                        {{$row->path}}

                                    </td>
                                    <td class="text-right">
                                        <a href="/role-register-edit/{{$row->id}}" class="btn btn-primary">edite</a>
                                    </td>
-->

                                    @if ($row->confirm == 0)
                                        <td class="text-right">
                                            <form action="/role-reverses-confirm/{{$row->id}}" method="post">
                                                {{csrf_field()}}
                                                {{method_field('PUT')}}
                                                <button type="submit" class="btn btn-success">Confirm</button>

                                            </form>
                                        </td>
                                    @elseif ($row->confirm == 1)
                                        <td class="text-right">
                                            <form action="/role-reverses-confirm/{{$row->id}}" method="post">
                                                {{csrf_field()}}
                                                {{method_field('PUT')}}
                                                <button type="submit" class="btn btn-danger">UnConfirm</button>

                                            </form>
                                        </td>

                                    @endif

                                    <td class="text-right">
                                        <form action="/role-reverses-delete/{{$row->id}}" method="post">
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