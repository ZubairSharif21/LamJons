{{-- @extends('layouts.app') --}}

<head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    @if (session('success'))
<script>
    var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });

    Toast.fire({
        icon: 'success',
        title: '{{ session('success') }}'
    });
</script>
@endif
@if ($errors->any())
<script>
    var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });

    Toast.fire({
        icon: 'error',
        title: '{{ $errors->first() }}'
    });
</script>
@endif

    <script>
  $(document).ready(function () {
    $('#example').DataTable({
        initComplete: function () {
            this.api()
                .columns()
                .every(function () {
                    var column = this;
                    var select = $('<select><option value=""></option></select>')
                        .appendTo($(column.footer()).empty())
                        .on('change', function () {
                            var val = $.fn.dataTable.util.escapeRegex($(this).val());

                            column.search(val ? '^' + val + '$' : '', true, false).draw();
                        });
                    column
                        .data()
                        .unique()
                        .sort()
                        .each(function (d, j) {
                            select.append('<option value="' + d + '">' + d + '</option>');
                        });
                });
        },
    });
});
    </script>

</head>
{{-- @section('content') --}}
@if (session('success'))
    <script>
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        Toast.fire({
            icon: 'success',
            title: '{{ session('success') }}'
        });
    </script>
@endif
@if (session('error'))
    <script>
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        Toast.fire({
            icon: 'error',
            title: '{{ session('error') }}'
        });
    </script>
@endif
<div class="p-4">
    <table id="example" class="display table-hover table-striped" style="width:100%">
        <thead>
            <tr>
                <th style="width: 1%">
                    ID
                </th>
                <th style="width: 7%" class="text-center">
                    First Name
                </th>
                <th style="width: 7%">
                    Last Name
                </th>
                <th style="width: 7%">
                    Email
                </th>

                <th style="width: 2%">
                    Musical Genre
                </th>
                <th style="width: 7%">
                    Instrument
                </th>
                    <th style="width: 7%">
                        Other Services
                </th>
               </th>
                    <th style="width: 7%">
                        Skill Level
                </th>
                   <th style="width: 7%">
                    Message
                </th>

                {{-- <th style="width: 10%" class="text-center">
                    Created_at
                </th> --}}
                {{-- <th style="width: 1%" class="text-center">
                    Updated_at
                </th> --}}
                <th style="width: 15%" class="text-center">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($messages as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->first_name }}</td>
                    <td>{{ $item->last_name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->musical_genre }}</td>
                    <td>{{ $item->instrument }}</td>
                    <td>{{ $item->other_services }}</td>
                    <td>{{ $item->skill_level }}</td>
                    <td>{{ $item->message }}</td>
                    {{-- <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y')}}</td> --}}
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm w-50 m-1" href="/view-post/{{ $item->id }}">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a><br>
                        <a class="btn btn-info btn-sm w-50 m-1" href="/update_view/{{ $item->id }}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a><br>
                        <a class="btn btn-danger btn-sm w-50 m-1"
                            onclick="return confirm('Are you sure you want to delete this Product');"
                            href="/delete-post/{{ $item->id }}">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>

            @endforeach
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </tfoot>
        </tbody>
    </table>
</div>
{{-- @stop --}}
