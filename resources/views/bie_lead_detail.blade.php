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
                    <span class="tx-primary">What is your age?</span>: {{ $lead->age }}
                </p>
                <p>
                    <span class="tx-primary">What is your primary financial goal?</span>: {{ $lead->financial }}
                </p>
                <p>
                    <span class="tx-primary">How optimistic are you about the long-term prospects of the economy?</span>: {{ $lead->prospect }}
                </p>
                <p>
                    <span class="tx-primary">Created Date</span>: {{ $lead->created_at }}
                </p>                
            </div>
            <div class="col-md-6">
                <p>
                    <span class="tx-primary">In general, how would your best friend describe you as a risk taker?</span>: 
                    <p>{{ $lead->friend }}</p>
                </p>
                <p>
                    <span class="tx-primary">You have just finished saving for a “once-in-a-lifetime” vacation. Three weeks before you plan to leave, you lose your job. You would:</span>: 
                    <p>{{ $lead->vacation }}</p>
                </p>
                <p>
                    <span class="tx-primary">When you think of the word “risk” which of the following words comes to mind first?</span>: 
                    <p>{{ $lead->risk}}</p>
                </p>
                <p>
                    <span class="tx-primary">You are on a TV game show and can choose one of the following. Which would you take?</span>: 
                    <p>{{ $lead->game }}</p>
                </p>
                <p>
                    <span class="tx-primary">Which of the following would best describe your level of investment knowledge?</span>: 
                    <p>{{ $lead->investment }}</p>
                </p>
                <p>
                    <span class="tx-primary">Given the best and worst case returns of the four investment choices below, which would you prefer?</span>: 
                    <p>{{ $lead->prefer }}</p>
                </p>
                <p>
                    <span class="tx-primary">Diversification is generally considered an important foundation block of an investment strategy. Rank your current level of diversification</span>: 
                    <p>{{ $lead->diversification }}</p>
                </p>
                
            </div>
        </div>
    </div>

</div><!-- br-pagebody -->

@endsection
