@php
    $page = session('page');
    $ecoenergie_item = [
        'energy_lead',
        'energy_contact',
        'energy_question',
    ];
    $bie_item = [
        'bie_lead',
        'bie_contact',
    ];
@endphp

<div class="br-sideleft sideleft-scrollbar">
    <label class="sidebar-label">Navigation</label>
    <ul class="br-sideleft-menu">
        <li class="br-menu-item">
        <a href="{{ route('home') }}" class="br-menu-link {{ $page == 'home' ? 'active' : null }}">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">Dashboard</span>
        </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        
        <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub {{ $page == in_array($page, $ecoenergie_item) ? 'active show-sub' : null }}">
                <i class="menu-item-icon fa fa-leaf tx-18"></i>
                <span class="menu-item-label">ecoenergie.io</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub">
                <li class="sub-item"><a href="{{ route('energy_lead') }}" class="sub-link {{ $page == 'energy_lead' ? 'active' : null }}">Leads Info</a></li>
                <li class="sub-item"><a href="{{ route('energy_contact') }}" class="sub-link {{ $page == 'energy_contact' ? 'active' : null }}">Contact Info</a></li>
                <li class="sub-item"><a href="{{ route('energy_question') }}" class="sub-link {{ $page == 'energy_question' ? 'active' : null }}">Questions</a></li>
            </ul>
        </li>        
        <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub {{ $page == in_array($page, $bie_item) ? 'active show-sub' : null }}">
                <i class="menu-item-icon fa fa-leaf tx-18"></i>
                <span class="menu-item-label">bienvestir.com</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub">
                <li class="sub-item"><a href="{{ route('bie_lead') }}" class="sub-link {{ $page == 'bie_lead' ? 'active' : null }}">Leads Info</a></li>
                <li class="sub-item"><a href="{{ route('bie_contact') }}" class="sub-link {{ $page == 'bie_contact' ? 'active' : null }}">Contact Info</a></li>
            </ul>
        </li>        
    </ul><!-- br-sideleft-menu -->      
</div><!-- br-sideleft -->