@extends('layouts.dashbord')

@section('content')
<div class="flex flex-col">
    <!-- Stats Row Starts Here -->
    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
        <div class="shadow-lg bg-red-vibrant border-l-8 hover:bg-red-vibrant-dark border-red-vibrant-dark mb-2 p-2 md:w-1/4 mx-2">
            <div class="p-4 flex flex-col">
                <span class="text-white text-2xl text-center">
                    {{ $visits_info['total'] }}
                </span>
                <a href="#" class="no-underline text-white text-lg text-center">
                    Total Visitors
                </a>
            </div>
        </div>
        <div class="shadow bg-info border-l-8 hover:bg-info-dark border-info-dark mb-2 p-2 md:w-1/4 mx-2">
            <div class="p-4 flex flex-col">
                <span class="text-white text-2xl text-center">
                    {{ $articles_count }}
                </span>
                <a href="#" class="no-underline text-white text-lg">
                    Total Articles
                </a>
            </div>
        </div>
        <div class="shadow bg-warning border-l-8 hover:bg-warning-dark border-warning-dark mb-2 p-2 md:w-1/4 mx-2">
            <div class="p-4 flex flex-col">
                <span class="text-white text-2xl text-center">
                    1
                </span>
                <a href="#" class="no-underline text-white text-lg">
                    Total Admins
                </a>
            </div>
        </div>
        <div class="shadow bg-success border-l-8 hover:bg-success-dark border-success-dark mb-2 p-2 md:w-1/4 mx-2">
            <div class="p-4 flex flex-col">
                <span class="text-white text-2xl text-center">
                    {{ $users_count }}
                </span>
                <a href="#" class="no-underline text-white text-lg">
                    Total Users
                </a>
            </div>
        </div>
    </div>
    <!-- /Stats Row Ends Here -->

    <!-- Card Sextion Starts Here -->
    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
        <!-- card -->

        <div class="rounded overflow-hidden shadow bg-white mx-2 w-full mt-5">
            <div class="px-6 py-2 border-b border-light-grey">
                <div class="font-bold text-xl">
                    Visiting Satatistics
                </div>
            </div>
            <div class="table-responsive">
                <table class="table text-grey-darkest">
                    <thead class="bg-grey-dark text-white text-normal">
                        <tr>
                            <th scope="col">Last Month</th>
                            <th scope="col">Current Month</th>
                            <th scope="col">Change Between</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $visits_info['last'] }}</td>
                            <td>{{ $visits_info['current'] }}</td>
                            <td>
                                <span class="text-{{ $visits_info['status']=='up'? 'success': 'danger' }}"><i class="fas fa-arrow-{{$visits_info['status']}}"></i>{{ $visits_info['change'] }}</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /card -->
    </div>
    <!-- /Cards Section Ends Here -->

</div>
@endsection