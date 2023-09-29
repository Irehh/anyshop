@extends('dashboard::layouts.master', ['title' => trans('coupon_products::coupon_products.actions.create')])
@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', trans('coupon_products::coupon_products.plural'))
        @slot('breadcrumbs', ['dashboard.create_coupon_category'])

        {{ BsForm::resource('coupon_products::coupon_products')->post(route('dashboard.coupon_products.store') , ['files' => true]) }}
        @component('dashboard::layouts.components.box')
            @slot('title', trans('coupon_products::coupon_products.actions.create_coupon_category'))

            @include('coupon_products::coupon_products.partials.form_category')

            @slot('footer')
                {{ BsForm::submit()->label(trans('coupon_products::coupon_products.actions.save')) }}
            @endslot
        @endcomponent
        {{ BsForm::close() }}

    @endcomponent
@endsection
