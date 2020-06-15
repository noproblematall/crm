@extends('layouts.app')

@section('content')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline tx-70 lh-0"></i>
    <div>
    <h4>Detail</h4>
    <p class="mg-b-0">You can see the detail info of each contacts here.</p>
    </div>
</div><!-- d-flex -->

<div class="br-pagebody">

    <div class="br-section-wrapper rounded-bottom-0">
        <div class="row">
            <div class="col-md-12">
                <p>
                    <span class="tx-primary">Name</span>: {{ $contact->name }}
                </p>
                <p>
                    <span class="tx-primary">Email</span>: {{ $contact->email }}
                </p>
                <p>
                    <span class="tx-primary">Phone number</span>: {{ $contact->phone }}
                </p>                
                <p>
                    <span class="tx-primary">Comment</span>: 
                    <p>{{ $contact->comment }}</p>
                </p>
                <p>
                    <span class="tx-primary">Created Date</span>: {{ $contact->created_at }}
                </p>
            </div>
          
        </div>
    </div>

</div><!-- br-pagebody -->

@endsection
