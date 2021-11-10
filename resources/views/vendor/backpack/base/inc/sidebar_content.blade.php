<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item">
    <a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ backpack_url('menu-item') }}"><i class="nav-icon la la-list"></i> <span>{{ trans('backpack::base.menu.menu') }}</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ backpack_url('page') }}"><i class="nav-icon la la-book"></i> <span>{{ trans('backpack::base.menu.pages') }}</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-users"></i> {{ trans('backpack::base.menu.users') }}</a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ backpack_url('blocks') }}"><i class="nav-icon la la-cube"></i> <span>{{ trans('backpack::base.menu.blocks') }}</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ backpack_url('document') }}"><i class="nav-icon la la-file"></i> {{ trans('backpack::base.menu.documents') }}</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ backpack_url('city') }}"><i class="nav-icon la la-globe"></i> {{ trans('backpack::base.menu.cities') }}</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ backpack_url('department') }}"><i class="nav-icon la la-address-book"></i> {{ trans('backpack::base.menu.departments') }}</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ backpack_url('employee') }}"><i class="nav-icon la la-user-tie"></i> {{ trans('backpack::base.menu.employees') }}</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ backpack_url('vacancy_categories') }}"><i class="nav-icon la la-address-book"></i> {{ trans('backpack::base.menu.vacancy_categories') }}</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ backpack_url('vacancies') }}"><i class="nav-icon la la-user"></i> {{ trans('backpack::base.menu.vacancies') }}</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ backpack_url('feedback') }}"><i class="nav-icon la la-phone"></i> {{ trans('backpack::base.menu.feedback') }}</a>
</li>
<li class='nav-item'>
    <a class='nav-link' href='{{ backpack_url('faq') }}'><i class='nav-icon la la-question'></i> {{ trans('backpack::base.menu.faq') }}</a>
</li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('elfinder') }}\"><i class="nav-icon la la-files-o"></i> <span>{{ trans('backpack::crud.file_manager') }}</span></a></li>