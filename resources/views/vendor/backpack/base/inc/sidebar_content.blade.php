{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-question"></i> Usuários</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('pages') }}"><i class="nav-icon la la-question"></i> Pages</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('layouts') }}"><i class="nav-icon la la-question"></i> Layouts</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('sites') }}"><i class="nav-icon la la-question"></i> Sites</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('sections') }}"><i class="nav-icon la la-question"></i> Sections</a></li>