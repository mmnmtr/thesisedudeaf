@extends('layouts.appteacherSentence')
@section('content')
    <div class="container">
        <div class="row">
            <div class="functitle col col-md-12">
                <div class="row">
                    <div class="col col-md-9">
                      @foreach($user as $user)
                        <span><div class="circke-blue"></div></span> <h1> แต่งประโยค : <span style="color: #26335e">{{$user->name}}  {{$user->lastname}} ( {{$user->nickname}} )</span></h1>
                      @endforeach
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
                    <th scope="col" style="text-align: center;color: #3078ff;">ลำดับ</th>
                    <th scope="col"  style="text-align: center">ประโยค ( ประธาน )</th>
                    <th scope="col" style="text-align: center">ประโยค ( กิริยา )</th>
                    <th scope="col" style="text-align: center">ประโยค ( กรรม )</th>
                    <th scope="col" style="text-align: center">วันที่</th>
                </tr>
                </thead>
{{--                @if(count($user->testvocab) > 0 )--}}
                    @foreach($testvocabs as  $key =>  $testvocab)
                        <tbody class="list">
                        <tr>
                          <td width="8%"  style="text-align: center;color: #3078ff">{{  $testvocabs->firstItem() + $key }}</td>
                            <td width="20%"  style="text-align: center" >{{$testvocab->subject}}</td>
                            <td width="20%"  style="text-align: center" >{{$testvocab->verb}}</td>
                            <td width="20%"  style="text-align: center">{{$testvocab->object}}</td>
                            <td width="23%"  style="text-align: center">{{$testvocab->created_at}}</td>


                        </tr>
                        </tbody>
                    @endforeach
{{--                @else--}}
{{--                @endif--}}
            </table>
          <div class="col-md-12">
            {{ $testvocabs->links( "pagination::bootstrap-4") }}
          </div>






        </div>
    </div>





@endsection
