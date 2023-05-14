@extends('dashboard.teacher.layout')

@section('content')
    <div class="container mx-auto px-4 mt-6 my-5">
        <div class="bg-white shadow rounded-lg p-10">
            <h2 class="text-2xl font-semibold mb-4">¿Estás seguro de que quieres cancelar tu suscripción?</h2>
            <p class="text-lg mb-4"> Antes de decidir, recuerda todos los beneficios exclusivos y características a los que
                perderás el acceso.</span>

            <form id="payment-form" action="{{ route('teacher.cancel-now') }}" method="POST">
                @csrf
                <button type="submit"
                    class="btn btn-warning bg-indigo-600 text-white px-4 py-2 rounded-md shadow-sm hover:bg-indigo-700 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    id="card-button">
                    Yes
                </button>
                <a class="btn ml-2 btn-secondary bg-indigo-600 text-white px-4 py-2 rounded-md shadow-sm hover:bg-indigo-700 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('teacher.teacherAccountInfo') }}">
                    Go Back
                </a>
        </div>
    </div>
@endsection
