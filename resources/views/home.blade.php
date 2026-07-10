@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="container">

    <!-- Hero Section -->
    <div class="p-5 mb-5 bg-primary text-white rounded text-center">

        <h1 class="display-4 fw-bold">
            Inventory Management System
        </h1>

        <p class="lead">
            Manage your products, track inventory, and improve business efficiency with our smart inventory solution.
        </p>

        <a href="/items" class="btn btn-light btn-lg">
            View Inventory
        </a>

    </div>

    <!-- About Section -->
    <div class="row mb-5">

        <div class="col-md-6">

            <h2>About Our System</h2>

            <p>
                This Inventory Management System helps businesses organize products,
                monitor stock levels, and simplify inventory operations through an easy-to-use web application.
            </p>

        </div>

        <div class="col-md-6">

            <img src="https://via.placeholder.com/500x300"
                 class="img-fluid rounded"
                 alt="Inventory">

        </div>

    </div>

    <!-- Features -->
    <h2 class="text-center mb-4">System Features</h2>

    <div class="row">

        <div class="col-md-4 mb-4">

            <div class="card shadow">

                <div class="card-body text-center">

                    <h4>📦 Product Management</h4>

                    <p>
                        Add, edit and manage inventory products easily.
                    </p>

                </div>

            </div>

        </div>

        <div class="col-md-4 mb-4">

            <div class="card shadow">

                <div class="card-body text-center">

                    <h4>📊 Stock Tracking</h4>

                    <p>
                        Keep track of available inventory in real time.
                    </p>

                </div>

            </div>

        </div>

        <div class="col-md-4 mb-4">

            <div class="card shadow">

                <div class="card-body text-center">

                    <h4>📝 Inventory Reports</h4>

                    <p>
                        Generate accurate inventory records for decision making.
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
