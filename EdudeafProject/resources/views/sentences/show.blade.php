@extends('layouts.appteacher')
@section('content')
    <div class="container">
        <div class="row">
            <div class="functitle col col-md-12">
                <div class="row">
                    <div class="col col-md-9">
                      <span><div class="circke-blue"></div></span> <h1> แต่งประโยค</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="categories_list">
        <div class="col-md-12">
            <table class="table number">
                <thead>
                <tr>
                    <th scope="col">จำนวน</th>
                    <th scope="col"  style="text-align: center">ประโยค ( ประธาน )</th>
                    <th scope="col" style="text-align: center">ประโยค ( กิริยา )</th>
                    <th scope="col" style="text-align: center">ประโยค ( กรรม )</th>
                    <th scope="col" style="text-align: center">วันที่ (ว/ด/ปี)</th>
                </tr>
                </thead>
{{--                @if(count($user->testvocab) > 0 )--}}
                    @foreach($testvocabs as $testvocab)
                        <tbody class="list">
                        <tr>
                            <td scope="row"></td>
                            <td width="23%"  style="text-align: center" >{{$testvocab->subject}}</td>
                            <td width="23%"  style="text-align: center" >{{$testvocab->verb}}</td>
                            <td width="23%"  style="text-align: center">{{$testvocab->object}}</td>
                            <td width="20%"  style="text-align: center">{{$testvocab->created_at}}</td>


                        </tr>
                        </tbody>
                    @endforeach
{{--                @else--}}
{{--                @endif--}}
            </table>
            <div class="offset-4">
                <div class="buttonAction row">
                    <a href="/admin"><button class="btn btn-createCate"> ย้อนกลับ</button></a>
                </div>
            </div>






        </div>
    </div>





@endsection
