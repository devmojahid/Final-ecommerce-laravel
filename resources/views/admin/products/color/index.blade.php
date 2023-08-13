@extends('admin.parsial.admin-master')

@section('admin_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Product/</span> Color</h4>

        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card">
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead class="table-light">
                                <tr>
                                    <th>SI.</th>
                                    <th>Name</th>
                                    <th>Color</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody class="table-border-bottom-0">
                                @foreach ($colors as $key => $color)
                                    <tr>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> {{ $key + 1 }} </td>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> {{ $color->name }} </td>
                                        <td><div class="" style="
                                            width: 25px;
                                            height: 25px;
                                            background: {{ $color->code }};
                                            border-radius: 50%;
                                            margin: 0 auto;
                                        "></div></td>
                                        <td><span class="badge bg-label-primary me-1"> {{ $color->status }}</span> </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('color.edit', $color->slug) }}"
                                                        href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('color.delete', $color->slug) }}"><i
                                                            class="bx bx-trash me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl">

                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{ route('color.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Name</label>
                                <input type="text" name="name" class="form-control" id="basic-default-fullname"
                                    placeholder="Red">
                            </div>

                            <div class="mb-3">
                                <label for="html5-color-input" class="col-md-2 col-form-label">Color</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="code" type="color" value="#000000"
                                        id="html5-color-input">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="defaultSelect" class="form-label">Default select</label>
                                <select name="status" id="defaultSelect" class="form-select">
                                  <option>Default select</option>
                                  <option value="active">Active</option>
                                  <option value="inactive">In Active</option>
                                </select>
                              </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-message">Summary</label>
                                <textarea id="basic-default-message" name="summary" class="form-control" placeholder="summary"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
