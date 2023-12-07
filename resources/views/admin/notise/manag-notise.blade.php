@extends('admin.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4>Manag Notise</h4>
                        <hr>

                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr align="center">
                                        <th>Sl</th>
                                        <th>Titel</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody align="center">
                                    @csrf
                                    @foreach ($notise as $notise)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $notise->titel }}
                                            </td>
                                            <td>
                                                <img src="{{ asset($notise->image) }}" alt=""
                                                    style="height: 180px; width=85px; border-radius: 10%;">
                                            </td>
                                            <td>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <a href="{{ route('notise.edit', $notise->id) }}"
                                                                class="btn btn-primary btn-sm"><i
                                                                    class="mdi mdi-file-check btn-icon-prepend"></i>Edit</a>
                                                        </td>
                                                        <td>
                                                            <form action="{{ route('notise.destroy', $notise->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger btn-sm"><i
                                                                        class="mdi mdi-delete-forever"></i>Delete</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                </table>
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
