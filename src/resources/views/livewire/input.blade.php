<main class="main">
    <div class="main__title">
        <h1>
            お問い合わせ
        </h1>
    </div>

    <div class="main__form">
        <form  action="/confirmation" method="get">
            @csrf
            <table class="main__form--table">
                <div>
                    <tr>
                        <th>
                            お名前<span>※</span>
                        </th>
                        <td>
                            <div id="input-name">
                                <div class="input-name-item">
                                    <input name="name1" value="{{old('name1')}}" wire:model="name1">
                                    <p class="input-name-item-example">例）山田</p>
                                    @if($errors->has('name1'))
                                    <p class="error">{{$errors->first('name1')}}</p>
                                @endif
                                </div>
                                <div class="input-name-item">
                                    <input name="name2" value="{{old('name2')}}" wire:model="name2">
                                    <p class="input-name-item-example">例）太郎</p>
                                    @if($errors->has('name2'))
                                    <p class="error">{{$errors->first('name2')}}</p>
                                @endif
                                </div>
                            </div>
                        </td>
                    </tr>
                </div>
                <div>
                    <tr class="main__form--table-gender">
                        <th>
                            性別<span>※</span>
                        </th>
                        <td>
                            <div>
                                <input type="radio" name="gender" value="1" checked class="radio01">男性
                                <input type="radio" name="gender" value="2">女性
                            </div>
                        </td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <th>
                            メールアドレス<span>※</span>
                        </th>
                        <td>
                            <div>
                                <input  class="main__form--table-input"  name="email" value="{{old('email')}}"  wire:model="email">
                            </div>
                        </td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <th>
                        </th>
                        <td>
                            <div class="main__form--table-example">
                                <p>例）test@example.com</p>
                                @if($errors->has('email'))
                                    <p class="error">{{$errors->first('email')}}</p>
                                @endif
                            </div>
                        </td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <th>
                            郵便番号<span>※</span>
                        </th>
                        <td>
                            <div>
                                <input class="main__form--table-input" name="postcode" value="{{old('postcode')}}" onKeyUp="AjaxZip3.zip2addr(this,'','address','address');" wire:model="postcode" >
                            </div>
                        </td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <th>
                        </th>
                        <td>
                            <div class="main__form--table-example">
                                <p>例）123-4567</p>
                                @if($errors->has('postcode'))
                                    <p class="error">{{$errors->first('postcode')}}</p>
                                @endif
                            </div>
                        </td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <th>
                            住所<span>※</span>
                        </th>
                        <td>
                            <div>
                                <input class="main__form--table-input" name="address" value="{{old('address')}}"  wire:model="address">
                            </div>
                        </td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <th>
                        </th>
                        <td>
                            <div class="main__form--table-example">
                                <p>例）東京都渋谷区千駄ヶ谷1-2-3</p>
                                @if($errors->has('address'))
                                    <p class="error">{{$errors->first('address')}}</p>
                                @endif
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
                                <input class="main__form--table-input" name="building_name" value="{{old('building_name')}}"  wire:model="building_name">
                            </div>
                        </td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <th>
                        </th>
                        <td>
                            <div class="main__form--table-example">
                                <p>例）千駄ヶ谷マンション101</p>
                                @if($errors->has('building_name'))
                                    <p class="error">{{$errors->first('building_name')}}</p>
                                @endif
                            </div>
                        </td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <th>
                            ご意見<span>※</span>
                        </th>
                        <td>
                            <div class="main__form--table-example">
                                <textarea name="opinion" value="{{old('opinion')}}"  wire:model="opinion"></textarea>
                                @if($errors->has('opinion'))
                                    <p class="error">{{$errors->first('opinion')}}</p>
                                @endif
                            </div>
                        </td>
                    </tr>
                </div>
            </table>
            <div  class="main__form--submit">
                <input type="submit" value="確認">
            </div>
        </form>
    </div>
    <div>
</div>
</main>
