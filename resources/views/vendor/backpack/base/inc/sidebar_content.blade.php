{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-bar-chart nav-icon"></i>
        {{ trans('backpack::base.dashboard') }}</a></li>

<li class="divider"></li>
<li class="nav-item nav-dropdown"><a class="nav-link nav-dropdown-toggle" href="#"><i
            class="nav-icon la la-lg la-sitemap"></i> CMS</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('site') }}"><i class="nav-icon la la-home"></i>
                Sites</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('page') }}"><i class="nav-icon la la-edit"></i>
                Páginas</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('section') }}"><i
                    class="nav-icon la la-pencil-square"></i> Seções</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('layout') }}"><i class="nav-icon la la-code"></i>
                Layouts</a></li>
    </ul>
</li>

<li class="divider"></li>
<li class="nav-item nav-dropdown"><a class="nav-link nav-dropdown-toggle" href="#"><i
            class="nav-icon la la-lg la-book"></i> Blog</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('category') }}"><i
                    class="nav-icon la la-tags"></i> Categorias</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('article') }}"><i
                    class="nav-icon la la-newspaper-o"></i> Artigos</a></li>
    </ul>
</li>

<li class="nav-item nav-dropdown"><a class="nav-link nav-dropdown-toggle" href="#"><i
            class="nav-icon la la-lg la-file-archive-o"></i> Arquivos</a>
    <ul class="nav-dropdown-items">

        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('image') }}"><i
                    class="nav-icon la la-image"></i> Imagens</a></li>
    </ul>
</li>
