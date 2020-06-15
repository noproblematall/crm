@extends('layouts.app')

@section('content')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline tx-70 lh-0"></i>
    <div>
    <h4>Detail</h4>
    <p class="mg-b-0">You can see the detail info of each leads here.</p>
    </div>
</div><!-- d-flex -->

<div class="br-pagebody">

    <div class="br-section-wrapper rounded-bottom-0">
        <div class="row">
            <div class="col-md-6">
                <p>
                    <span class="tx-primary">Name</span>: {{ $lead->name }}
                </p>
                <p>
                    <span class="tx-primary">Email</span>: {{ $lead->email }}
                </p>
                <p>
                    <span class="tx-primary">Phone number</span>: {{ $lead->phone }}
                </p>
                <p>
                    <span class="tx-primary">ZIP Code</span>: {{ $lead->zip_code }}
                </p>
                <p>
                    <span class="tx-primary">Area</span>: {{ $lead->area }}
                </p>
                <p>
                    <span class="tx-primary">Created Date</span>: {{ $lead->created_at }}
                </p>
                <p>
                    <span class="tx-primary">Comment</span>: 
                    <p>{{ $lead->comment }}</p>
                </p>
            </div>
            <div class="col-md-6">
                <p>
                    <span class="tx-primary">Does the estimation concern an apartment or a house?</span>: 
                    <p>{{ $lead->home_type }}</p>
                </p>
                <p>
                    <span class="tx-primary">In this home you are...</span>: 
                    <p>{{ $lead->manager_type }}</p>
                </p>
                <p>
                    <span class="tx-primary">How many residents are there in your household?</span>: 
                    <p>{{ $lead->resident_number}}</p>
                </p>
                <p>
                    <span class="tx-primary">What is the current heating energy of your home?</span>: 
                    <p>{{ $lead->energy_type }}</p>
                </p>
                <p>
                    <span class="tx-primary">Are your attics isolated?</span>: 
                    <p>{{ $lead->isolate }}</p>
                </p>
                <p>
                    <span class="tx-primary">What work do you want to do in your accommodation?</span>: 
                    <p>{{ $lead->want_work }}</p>
                </p>
                <p>
                    <span class="tx-primary">Total annual amount of your energy bills (electricity + heating)</span>: 
                    <p>{{ $lead->energy_bill }}</p>
                </p>
                <p>
                    <span class="tx-primary">Would you like to have more information if you are eligible for a government grant?</span>: 
                    <p>{{ $lead->more_info }}</p>
                </p>
            </div>
        </div>
    </div>

</div><!-- br-pagebody -->

@endsection
