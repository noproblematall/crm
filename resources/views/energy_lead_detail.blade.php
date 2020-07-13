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
                    <span class="tx-primary">Nom et Prénom</span>: {{ $lead->name }}
                </p>
                <p>
                    <span class="tx-primary">Email</span>: {{ $lead->email }}
                </p>
                <p>
                    <span class="tx-primary">Numbero Tel</span>: {{ $lead->phone }}
                </p>
                <p>
                    <span class="tx-primary">Departement</span>: {{ $lead->zip_code }}
                </p>
                <p>
                    <span class="tx-primary">M2</span>: {{ $lead->area }}
                </p>
                <p>
                    <span class="tx-primary">Date Inscription</span>: {{ $lead->created_at }}
                </p>
                <p>
                    <span class="tx-primary">Votre budget pour ces travaux</span>: {{ $lead->comment }}
                </p>
            </div>
            <div class="col-md-6">
                <p>
                    <span class="tx-primary">
L’évaluation concerne-t-elle une maison ou un appartement?</span>: 
                    <p>{{ $lead->home_type }}</p>
                </p>
                <p>
                    <span class="tx-primary">Dans votre logement, vous êtes...</span>: 
                    <p>{{ $lead->manager_type }}</p>
                </p>
                <p>
                    <span class="tx-primary">Combien de personnes résident sous votre toit ?</span>: 
                    <p>{{ $lead->resident_number}}</p>
                </p>
                <p>
                    <span class="tx-primary">Quel type de chauffage utilisez-vous ?</span>: 
                    <p>{{ $lead->energy_type }}</p>
                </p>
                <p>
                    <span class="tx-primary">Vos combles sont-elles isolées ?
</span>: 
                    <p>{{ $lead->isolate }}</p>
                </p>
                <p>
                    <span class="tx-primary">Quel type de rénovation souhaitez-vous entreprendre ?</span>: 
                    <p>{{ $lead->want_work }}</p>
                </p>
                <p>
                    <span class="tx-primary">Montant total de votre facture d'énergie</span>: 
                    <p>{{ $lead->energy_bill }}</p>
                </p>
                <p>
                    <span class="tx-primary">Souhaitez-vous obtenir plus d'informations si vous êtes éligible pour une aide du gouvernement?</span>: 
                    <p>{{ $lead->more_info }}</p>
                </p>
            </div>
        </div>
    </div>

</div><!-- br-pagebody -->

@endsection
