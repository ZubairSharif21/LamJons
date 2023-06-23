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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.9/dist/sweetalert2.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.9/dist/sweetalert2.all.min.js"></script>

<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
    $('#example').DataTable();
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
<table id="example" class="display " style="width:100%">
    <thead>
        <tr>
            <th style="width: 4%">
                #
            </th>
            <th style="width: 20%">
                Project Name
            </th>
            <th style="width: 10%">
                Email
            </th>

            <th style="width: 8%" class="text-center">
              Role
          </th>
                  <th style="width: 20%" class="text-center">
              Actions
          </th>
        </tr>
    </thead>
    <tbody>
    @foreach ($user as $users)

      <tr>
          <td>
              {{ $users->id }}
          </td>
          <td>
              <a>
                  {{ $users->name }}
              </a>
              <br/>
              <small>
                  {{ $users->created_at }}
              </small>
          </td>
<td>
    {{ $users->email }}

</td>
          @if ($users->progress)
          <td class="project_progress">
            {{ $users->created_at }}

          </td>
          @else

          @endif
          <td class="project-state">
              @if ($users->account_type=='admin')
              <span class="badge badge-success"> {{ $users->account_type }}</span>
              @else
              <span class="badge badge-info"> {{ $users->account_type }}</span>
              @endif


          </td>


          </td>
          <td class="project-actions text-right">
              <a class="btn btn-primary btn-sm" href="/view-user/{{ $users->id }}">
                  <i class="fas fa-folder">
                  </i>
                  View
              </a>
              <a class="btn btn-info btn-sm" href="/update-user/{{ $users->id }}">
                  <i class="fas fa-pencil-alt">
                  </i>
                  Edit
              </a>
              <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this User');" href="/delete-user/{{ $users->id }}">
                  <i class="fas fa-trash">
                  </i>
                  Delete
              </a>
          </td>
      </tr>
      @endforeach

  </tbody>    </table>
</div>
{{-- @stop --}}
