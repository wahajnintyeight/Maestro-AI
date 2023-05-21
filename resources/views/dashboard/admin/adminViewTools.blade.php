@extends('dashboard.admin.layout')
@section('content')

<link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<!-- BEGIN: Top Bar -->
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        All Tools
    </h2>
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
                            <th>Tool Status</th>
                            <th>Possible Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tools as $tool)
                        <tr>
                            <td>{{ $tool->name }}</td>
                            <td>{{ ($tool->free_status == 1) ? 'Free' : 'Paid' }}</td>
                            <td>
                                <div class="flex justify-start items-center">
                                    @if ($tool->free_status == 0)
                                    <form action="{{ route('admin.toggleToolStatus', $tool) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-primary w-32 mr-2 mb-2">
                                            Make it Free
                                        </button>
                                    </form>
                                    @else
                                    <form action="{{ route('admin.toggleToolStatus', $tool) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-primary w-32 mr-2 mb-2">
                                            Make it Premium
                                        </button>
                                    </form>
                                    @endif
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
    crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<script>
    let table = new DataTable('#myTable');
</script>
@endsection