@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Show Listing Type List
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            Id
                        </th>
                        <td>
                            {{ $projectListingType->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Category Name
                        </th>
                        <td>
                            {{ $projectListingType->name }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>

        <nav class="mb-3">
            <div class="nav nav-tabs">

            </div>
        </nav>
        <div class="tab-content">

        </div>
    </div>
</div>
@endsection