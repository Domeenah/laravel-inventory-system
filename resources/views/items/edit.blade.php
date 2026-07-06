<!DOCTYPE html>
<html>
<head>
    <title>Edit Item</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-warning">
            <h2>Edit Item</h2>
        </div>

        <div class="card-body">

            <form action="/items/{{ $item->id }}" method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Item</label>
                    <input
                        type="text"
                        name="item"
                        value="{{ $item->item }}"
                        class="form-control"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea
                        name="description"
                        class="form-control"
                        rows="4">{{ $item->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Price (KES)</label>
                    <input
                        type="number"
                        step="0.01"
                        name="price"
                        value="{{ $item->price }}"
                        class="form-control"
                        required>
                </div>

                <button class="btn btn-warning">
                    Update Item
                </button>

                <a href="/items" class="btn btn-secondary">
                    Back
                </a>

            </form>

        </div>

    </div>

</div>

</body>
</html>
