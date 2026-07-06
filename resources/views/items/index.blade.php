<!DOCTYPE html>
<html>
<head>
    <title>Inventory Management System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">

            <h5 class="mb-0 fw-light">
                NJAWA Tech Solutions
            </h5>

            <h2 class="fw-bold mt-2">
                📦 Inventory Management System
            </h2>

            <small>Version 1.0</small>

        </div>

        <div class="card-body">

            <a href="/items/create" class="btn btn-success mb-3">
                + Add New Item
            </a>

            <table class="table table-bordered table-hover">

                <thead class="table-dark">

                    <tr>
                        <th>Item</th>
                        <th>Description</th>
                        <th>Price (KES)</th>
                        <th width="180">Action</th>
                    </tr>

                </thead>

                <tbody>

                @forelse($items as $item)

                    <tr>

                        <td>{{ $item->item }}</td>

                        <td>{{ $item->description }}</td>

                        <td>KES {{ number_format($item->price,2) }}</td>

                        <td>

                            <a href="/items/{{ $item->id }}/edit"
                               class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <form action="/items/{{ $item->id }}"
                                  method="POST"
                                  style="display:inline;">

                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Delete this item?')">

                                    Delete

                                </button>

                            </form>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="4" class="text-center text-muted">

                            No items found.

                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

<footer class="text-center mt-5 text-muted mb-4">

    <hr>

    <p class="mb-1">
        <strong>Developed by Purity Ndung'u</strong>
    </p>

    <small>
        © 2026 IMS | Laravel CRUD Project
    </small>

</footer>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('success'))

<script>

Swal.fire({

    toast: true,
    position: 'top-end',

    icon: 'success',

    title: '{{ session('success') }}',

    showConfirmButton: false,

    timer: 2500,

    timerProgressBar: true,

    background: '#198754',

    color: '#fff',

    iconColor: '#fff'

});

</script>

@endif

</body>
</html>
