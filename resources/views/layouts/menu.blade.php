<li class="{{ Request::is('products*') ? 'active' : '' }}">
    <a href="{!! route('products.index') !!}"><i class="fa fa-edit"></i><span>Products</span></a>
</li>

<li class="{{ Request::is('accessories*') ? 'active' : '' }}">
    <a href="{!! route('accessories.index') !!}"><i class="fa fa-edit"></i><span>Accessories</span></a>
</li>

<li class="{{ Request::is('brands*') ? 'active' : '' }}">
    <a href="{!! route('brands.index') !!}"><i class="fa fa-edit"></i><span>Brands</span></a>
</li>

<li class="{{ Request::is('statuses*') ? 'active' : '' }}">
    <a href="{!! route('statuses.index') !!}"><i class="fa fa-edit"></i><span>Statuses</span></a>
</li>

<li class="{{ Request::is('damages*') ? 'active' : '' }}">
    <a href="{!! route('damages.index') !!}"><i class="fa fa-edit"></i><span>Damages</span></a>
</li>

<li class="{{ Request::is('conditions*') ? 'active' : '' }}">
    <a href="{!! route('conditions.index') !!}"><i class="fa fa-edit"></i><span>Conditions</span></a>
</li>

<li class="{{ Request::is('warranties*') ? 'active' : '' }}">
    <a href="{!! route('warranties.index') !!}"><i class="fa fa-edit"></i><span>Warranties</span></a>
</li>

<!-- <li class="{{ Request::is('caseAccessories*') ? 'active' : '' }}">
    <a href="{!! route('caseAccessories.index') !!}"><i class="fa fa-edit"></i><span>Case Accessories</span></a>
</li> -->

<!-- <li class="{{ Request::is('sequences*') ? 'active' : '' }}">
    <a href="{!! route('sequences.index') !!}"><i class="fa fa-edit"></i><span>Sequences</span></a>
</li> -->

<!-- <li class="{{ Request::is('conditionDamages*') ? 'active' : '' }}">
    <a href="{!! route('conditionDamages.index') !!}"><i class="fa fa-edit"></i><span>Condition Damages</span></a>
</li> -->

<li class="{{ Request::is('cases*') ? 'active' : '' }}">
    <a href="{!! route('cases.index') !!}"><i class="fa fa-edit"></i><span>Cases</span></a>
</li>

<!-- <li class="{{ Request::is('physicalDamages*') ? 'active' : '' }}">
    <a href="{!! route('physicalDamages.index') !!}"><i class="fa fa-edit"></i><span>Physical Damages</span></a>
</li> -->

<!-- <li class="{{ Request::is('caseLogs*') ? 'active' : '' }}">
    <a href="{!! route('caseLogs.index') !!}"><i class="fa fa-edit"></i><span>Case Logs</span></a>
</li> -->

