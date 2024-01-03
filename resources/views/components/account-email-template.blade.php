@component('mail::layout')
{{-- Header --}}
@slot('header')
<div style="text-align: center;">
    <img style="width: 100px; margin-top: 15px; margin-bottom: 15px;" src="{{ asset('assets/images/logo.png') }}" alt="{{ config('app.name') }}" />
</div>
@endslot

{{-- Body --}}
{{ $slot }}

{{-- Subcopy --}}
@isset($subcopy)
@slot('subcopy')
@component('mail::subcopy')
{{ $subcopy }}
@endcomponent
@endslot
@endisset

{{-- Footer --}}
@slot('footer')
@component('mail::footer')
© {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
@endcomponent
@endslot
@endcomponent
