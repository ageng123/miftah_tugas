@extends('templates.TemplateMasterData')
@section('app-title', 'Master Kelas')
@section('table-title')
    @if($form_title)
        {{$form_title}}
    @else
        {{'Add Master Data Kelas'}}
    @endif
@endsection
@section('table')
@if(session('message'))
<script>UIkit.notification({message: '{{session("message")}}', pos: 'top-right',  status: 'danger'});</script>
@endif
    {!! form_start($form) !!}
    <legend class="uk-legend uk-text-center">Data Jurusan</legend>
    @if($edit == true)
    {!! form_row($form->jurusan_text) !!}
    {!! form_row($form->Submit, ['label' => 'Update Data']) !!}
    {!! form_end($form, $renderRest = true) !!}
    @else
    {!! form_end($form, $renderRest = true) !!}
    @endif
@endsection
