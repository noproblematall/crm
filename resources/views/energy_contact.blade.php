@extends('layouts.app')

@section('content')

<div class="br-pagetitle">
    <i class="icon ion-chatbubble-working tx-70 lh-0"></i>
    <div>
        <h4>Contacts</h4>
        <p class="mg-b-0">You can see the contact info of ecoenergy.io here.</p>
    </div>
</div><!-- d-flex -->

<div class="br-pagebody">

    <div class="br-section-wrapper rounded-bottom-0">
        <div class="col-md-12">
            <div class="bd rounded table-responsive">
                <table class="table table-bordered table-hover mg-b-0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>name</th>
                            <th>email</th>
                            <th>phone number</th>
                            <th>comment</th>
                            <th>created_at</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($contacts as $item)
                            <tr>
                                <td>{{ (($leads->currentPage() - 1 ) * $leads->perPage() ) + $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ Helper::trim_sting($item->comment) }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>
                                    <a href="{{ route('energy_contact_detail', $item->id) }}">&nbsp;<i class="fa fa-eye" style="color:#50aa5b;">&nbsp;</i></a>
                                    <a href="{{ route('energy_contact_delete', $item->id) }}">&nbsp;<i class="fa fa-trash" style="color:red;">&nbsp;</i></a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">No Contacts</td>
                            </tr>
                        @endforelse
                            
                    </tbody>
                </table>

            </div>
        </div>
        <div class="col-md-12">
            <div class="clearfix mt-2">
                <div class="float-left" style="margin: 0;">
                    <p>Total <strong style="color: red">{{ $contacts->total() }}</strong> entries</p>
                </div>
                <div class="float-right" style="margin: 0;">
                    {{ $contacts->links() }}
                </div>
            </div>
        </div>
    </div>

</div><!-- br-pagebody -->

@endsection
