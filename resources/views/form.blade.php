
@if(!empty($siteItem))
    <table><tr><td>URL</td><td>Status</td></tr>
@foreach($siteItem as $url)
            <tr><td>{{$url->url}}</td><td>@if($url->status)Пингуется @else не пингуется @endif</td></tr>
@endforeach
    </table>
@endif
<form class="form-horizontal" action="{{route("addUrl")}}" method="POST"
      enctype="multipart/form-data">
    @csrf
    <div class="row">

        <label class="col-2 col-form-label">Url сайта</label>
        <div class="col-10">
            <input type="text" name="url" value="" required class="form-control">
        </div>



        <div class="pt-3 row">
            <div class="col-10 offset-md-2">
                <button type="submit" required class="btn btn-success me-3">Добавить
                    задачу
                </button>
            </div>
        </div>

    </div>

</form>
