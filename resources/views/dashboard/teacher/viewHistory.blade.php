@extends('dashboard.teacher.layout')
@section('content')
<link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<!-- BEGIN: Top Bar -->
<div class="intro-y flex items-center mt-8 gap-2">
    <h2 class="text-lg font-medium mr-auto">
        Tool Usage History
    </h2>
    <div>
        <span><a target="_blank" class="btn btn-success text-white" href="mailto:ayuda@maestroia.com">Informar de un
                Error</a></span>
    </div>
    <div>
        <span><a target="_blank" class="btn btn-success text-white" href="mailto:Admin@maestroia.com">Idea para una
                Herramienta</a></span>
    </div>
</div>
<!-- END: Top Bar -->
<div class="grid grid-cols-12 gap-6">
    <!-- BEGIN: Profile Menu -->

    <!-- END: Profile Menu -->
    <div class="col-span-12 lg:col-span-12 2xl:col-span-12">
        <!-- BEGIN: Display Information -->
        <div class="intro-y box lg:mt-5">

            <div class="p-5">
                <table id="myTable" class="display">
                    <thead>
                        <tr>
                            <th>Tool Name</th>
                            <th>Usage Time</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user->histories as $key => $history)
                        <tr>
                            <td>{{ $history->tool_name }}</td>
                            <td>{{ $history->created_at }}</td>
                            <td><a href="{{route('teacher.downloadHistory',['id'=>$history->id])}}"
                                    class="trigger-btn btn btn-warning" data-toggle="modal">Descargar resultado</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<hr class="border-b mt-5 border-gray-200" />

{{-- <div class="mt-5 space-y-2">
    <div class="mb-3">
        <span>Informar de un Error - <a target="_blank" class="btn btn-success text-white"
                href="mailto:ayuda@maestroia.com">ayuda@maestroia.com</a></span>
    </div>
    <span>Idea para una Herramienta - <a target="_blank" class="btn btn-success text-white"
            href="mailto:Admin@maestroia.com">Admin@maestroia.com</a></span>
</div> --}}
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
    crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<script>
    let table = new DataTable('#myTable');
        table.sort(0,'desc');
</script>
@endsection