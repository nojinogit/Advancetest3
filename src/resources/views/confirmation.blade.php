@extends('layouts.layouts')

@section('title','confirmation')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirmation.css')}}">
@endsection

@section('content')

<main class="main">
    <div class="main__title">
        <h1>
            お問い合わせ
        </h1>
    </div>
    <div class="main__form">
        <form action="/contact" method="post">
            @csrf
            <table class="main__form--table">
                <div>
                    <tr>
                        <th>
                            お名前
                        </th>
                        <td>
                            <div id="input-name">
                                <p>{{$contacts['fullname']}}</p>
                                <input type="hidden" name="fullname" value="{{$contacts['fullname']}}">
                            </div>
                        </td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <th>
                            性別
                        </th>
                        <td>
                            <div>
                                <p>@if($contacts['gender']==1){{'男性'}}
                                    @elseif($contacts['gender']==2){{'女性'}}
                                    @endif
                                    <input type="hidden" name="gender" value="{{$contacts['gender']}}">
                                </p>
                            </div>
                        </td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <th>
                            メールアドレス
                        </th>
                        <td>
                            <div>
                                <p>{{$contacts['email']}}</p>
                                <input type="hidden" name="email" value="{{$contacts['email']}}">
                            </div>
                        </td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <th>
                            郵便番号
                        </th>
                        <td>
                            <div>
                                <p>{{$contacts['postcode']}}</p>
                                <input type="hidden" name="postcode" value="{{$contacts['postcode']}}">
                            </div>
                        </td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <th>
                            住所
                        </th>
                        <td>
                            <div>
                                <p>{{$contacts['address']}}</p>
                                <input type="hidden" name="address" value="{{$contacts['address']}}">
                            </div>
                        </td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <th>
                            建物名
                        </th>
                        <td>
                            <div>
                                <p>{{$contacts['building_name']}}</p>
                                <input type="hidden" name="building_name" value="{{$contacts['building_name']}}">
                            </div>
                        </td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <th>
                            ご意見
                        </th>
                        <td>
                            <div>
                                <p>{{$contacts['opinion']}}</p>
                                <input type="hidden" name="opinion" value="{{$contacts['opinion']}}">
                            </div>
                        </td>
                    </tr>
                </div>
            </table>
            <div  class="main__form--submit">
                <input type="submit" value="送信">
            </div>
        </form>
        <div>
            <button type="button" onClick="history.back()" class="main__form--reset">修正する</button>
        </div>
    </div>
</main>