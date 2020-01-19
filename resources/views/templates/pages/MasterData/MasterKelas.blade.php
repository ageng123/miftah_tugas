@extends('templates.TemplateMasterData')
@section('app-title', 'Master Kelas')
@section('table-title', 'Master Data Kelas')
@section('table')
@if(session('message'))
<script>UIkit.notification({message: '{{session("message")}}', pos: 'top-right',  status: 'success'});</script>
@endif
<div class="uk-overflow-auto">
    <table id="table" class="uk-table uk-table-hover uk-table-striped">
        <a href="{{ route('kelas.create') }}" class="uk-button uk-button-primary uk-button-small">Tambah Data</a>
            <thead>
                  <tr>  
                    <td>Kelas</td>
                    <td class="uk-text-center" style="width: 20%">Action</td>
                  </tr>
            </thead>
            <tbody>
                @foreach($row as $rows => $value)
                <tr>  
                    <td>{{'Kelas - '.$value->kelas_text}}</td>
                    <td class="uk-text-center">
                       <div class="uk-button-group">
                       <a href="{{ route('kelas.show', ['kela' => $value->id]) }}" class="uk-button uk-button-secondary uk-button-small" title="preview" uk-tooltip><span uk-icon="icon: file-text"></span></a>
                            <a href="{{ route('kelas.edit', ['kela' => $value->id]) }}" class="uk-button uk-button-primary uk-button-small" title="edit" uk-tooltip> <span uk-icon="icon: file-edit"></span></a>
                            <form action="{{route('kelas.destroy', ['kela' => $value->id])}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="uk-button uk-button-danger uk-button-small"><span uk-icon="icon: trash"></span></button>
                            </form>
                        </div>
                       
                    </td>
                  </tr>
                @endforeach
            </tbody>
        </table>
</div>
@endsection

