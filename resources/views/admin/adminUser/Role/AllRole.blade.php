@extends('layouts.admin')
@section('content')

<!-- Export Datatable start -->
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Data Table with Export Buttons</h4>
    </div>
    <div class="pb-20">
        <table class="table hover multiple-select-row data-table-export nowrap">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort">Name</th>
                    <th>status</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($allRoles as $key => $value)
                <tr>
                    <td class="table-plus">{{ $value->admin_role_name }}</td>
                    <td>{{ $value->admin_role_status == 1 ? 'enable':'disable'  }}</td>
                    <td>
                        <a href=""  class="">
                            <i style="font-size:20px" class="fa fa-pencil"></i>
                        </a>
                        <a href=""  class="">
                            <i style="font-size:20px" class="fa fa-eye"></i>
                        </a>
                        <a href=""  class="">
                            <i style="font-size:20px" class="fa fa-trash"></i>
                        </a>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- Export Datatable End -->

@endsection
