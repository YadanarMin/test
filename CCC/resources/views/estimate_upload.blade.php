@extends('layouts.baselayout')
@section('title', 'CCC - 見積アップロード')

@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script type="text/javascript" src="/iPD/public/js/estimateUpload.js"></script>

<script type="text/javascript" src="/iPD/public/js/select2/select2.min.js"></script>
<link rel="stylesheet" href="/iPD/public/css/select2.min.css">

<style>

#tblUpload{
    width:100%;
    
}
#tblUpload> tbody {
    display:block;
    height:500px;
    overflow:auto;
}
#tblUpload> thead, tbody tr {
    display:table;
    width:100%;         
}
#tblUpload> thead {
    width:100%   
}
#tblUpload th{
    padding:10px 0 10px 0;/*TRBL*/
    background-color:#1a0d00;/*#002b80*/
    color:white;
    border:1px solid;
    text-align:center;
}
#tblUpload td{
    padding:5px;
    border:1px solid #fff;
}
#tblUpload td:first-child{text-align:left;}
#tblUpload tr:nth-child(even){background-color:#d9d9d9;}
#tblUpload tr:nth-child(odd){background-color:#f2f2f2;}

.custom-size{
    width:80%;
    min-width:700px;
    margin-left: 10% !important;
    <!--margin-right: 10% !important;-->
    margin-top:1%;
    /*border:1px solid green;*/

}
.tblRename{
    width:100%;
    margin-top:2%;
    margin-bottom:2%;
   
}
.tblRename td{
    background-color:#eee;
    padding:5px;
    border:1px solid #eee;
}
.tblRename th{
   background-color:#eee;
   color:#1a0d00;
   border:1px solid #eee;
   text-align:center;
   padding:5px;
}
.td-wd-0{
    width:2%;
}
.td-wd-1{
    width:10%;
}
.td-wd-2{
    width:13%;
}
.td-wd-3{
    width:20%;
}

.select2-container {
    width: 100% !important;
}
.txt-bold{
    font-weight:bold;
}
.has-search .form-control-feedback {
    right: initial;
    left: 0;
    color: #ccc;
}

.has-search .form-control {
    padding-right: 12px;
    padding-left: 34px;
}
.tab_switch_on{
    background-color:silver;
}
.custom-box{
    padding: 10px;
    border: 1px solid #eee;
    margin :20px;
}

</style>
<script>
   
</script>

@endsection

@section('content')
@include('layouts.loading')
<main>

    @if (Session::has('access_token'))
        <input type="hidden" id="access_token" value="{{Session::get('access_token')}}"/>
    @endif 
    
    @if (Session::has('login_email'))
        <input type="hidden" id="login_email" value="{{Session::get('login_email')}}"/>
    @endif   
   
    <div class="col-md-12" style="margin-bottom :30px">
        <div class="row">
            <div class="col-md-12 custom-size" >
                <h3>BOX UPLOAD</h3>
                <span id="box_login_warning" style="color:red;"></span>
                <hr>
                @if( count($ipdCodeList) > 1 )
                    <select id="ipdSelectBox" class="form-control"></select>
                @else
                   @foreach($ipdCodeList as $ipdCode)
                        <input type="hidden" id="hidIPDCode" value="{{ $ipdCode }}" />
                   @endforeach
                   
                @endif
            </div>
        </div>
        
        <!--前の画面で選択した会社数によって表示する-->
        <input type="hidden" id="hidNumOfCompany" value="{{ count($companyList) }}"/>
        @foreach($companyList as $index => $company)
            <div class="row custom-size custom-box">
            
                <!--choose upload file-->
                <div class="col-md-12">
                    <p id="box-upload-form{{ $index + 1 }}_msg" style="color :red"></p>
                    <h3 id="companyName{{$index + 1}}">{{ $company }}</h3>
                    <br>
                    <div style="display:flex;">
                        <form class="box-upload-form" id="box-upload-form{{ $index + 1 }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="file" id="file{{$index + 1}}" name="file[]" multiple="multiple">
                        </form>
                        <input type="button" name="btnBoxUpload" id="btnBoxUpload{{$index + 1}}" class="btn btn-primary" value="BOXにアップロード" onClick=""/>
                    </div>
                </div>
            
                <!--rename section-->
                <div class="col-md-12">
                    <table class="tblRename" id="tblRename{{$index + 1}}"></table>
                </div>
            
                <div class="col-md-12">
                    <label>アップロードするフォルダを選択​</label>
                    <div class="checkbox">
                        <label><input type="checkbox" value="意匠図" class="folder_flag{{$index + 1}}">意匠図(DG)</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="構造図" class="folder_flag{{$index + 1}}">構造図(DG)</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="工程" class="folder_flag{{$index + 1}}">工程表(SH)</label>
                    </div>
                </div>
            </div>
        @endforeach
        
        
        
        
       
        <!--<div class="row">-->
        <!--    <div class=" col-md-12 custom-size">-->
        <!--        <div class="form-group has-feedback has-search">-->
        <!--            <span class="glyphicon glyphicon-search form-control-feedback"></span>-->
        <!--            <input type="text" id="txtSearch" class="form-control" placeholder="ファイル名で検索">-->
        <!--         </div>-->
                <!--<div class="table-responsive">-->
        <!--        <table id="tblUpload">-->
        <!--            <thead>-->
        <!--                <tr>-->
        <!--                    <th width="10%">No.</th>-->
        <!--                    <th>ファイル名</th>-->
        <!--                </tr>-->
        <!--            </thead>-->
        <!--            <tbody>-->
        <!--            </tbody>-->
        <!--        </table>-->
                <!--</div>-->
        <!--    </div>-->
        <!--</div>-->
        
    </div>
  
</main>
@endsection