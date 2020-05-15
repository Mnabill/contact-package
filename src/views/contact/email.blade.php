@component('mail::message')
# Introduction

This Mail From {{$name}}

{{$message}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent