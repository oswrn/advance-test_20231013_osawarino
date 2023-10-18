<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}"/>
</head>
<body>
<main>
    <div class="contact__form-content">
        <div class="contact__form-heading">
            <h2>お問い合わせ</h2>
        </div>

        <form class="form" action="{{ route('form.confirm') }}" method="post">
            @csrf
            <div class="form__group">
                <div class="form__group-label">
                    <p class="form__label--item">お名前 <font color="red">※</font></p>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text-name">
                        <div class="form__input--family">
                            <input type="text" name="last_name" value="{{ old('last_name') }}">
                            <p class="form__ex">例）山田</p>
                                <div class="form__error">
                                @error('last_name')
                                {{ $message }}
                                @enderror
                                </div>
                        </div>
                        <div class="form__input--given">
                            <input type="text" name="first_name" value="{{ old('first_name') }}">
                            <p class="form__ex">例）太郎</p>
                                <div class="form__error">
                                @error('first_name')
                                {{ $message }}
                                @enderror
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-label">
                    <p class="form__label--item">性別 <font color="red">※</font></p>
                </div>
                <div class="form__group-content--radio">
                    <div class="form__input--radio">
                        <label class="label__radio"><input type="radio" name="gender" value="1" checked>男性</label>
                        <label class="label__radio"><input type="radio" name="gender" value="2">女性</label>
                    </div>
                    <div class="form__error">
                        @error('gender')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-label">
                    <p class="form__label--item">メールアドレス <font color="red">※</font></p>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="email" name="email" value="{{ old('email') }}">
                        <p class="form__ex">例）test@example.com</p>
                    </div>
                    <div class="form__error">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-label">
                    <p class="form__label--item">郵便番号 <font color="red">※</font></p>
                </div>
                <div class="form__group-content">
                    <div class="form__input-text--postcode">
                        <label class="label__postcode">〒<input type="text" name="postcode" value="{{ old('postcode') }}"></label>
                        <p class="form__ex">例）123-4567</p>
                    </div>
                    <div class="form__error">
                        @error('postcode')
                        {{ $message }}
                        @enderror
                    </div>
                </div>    
            </div>
             <div class="form__group">
                <div class="form__group-label">
                    <p class="form__label--item">住所 <font color="red">※</font></p>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="address" value="{{ old('address') }}">
                        <p class="form__ex">例）東京都渋谷区千駄ヶ谷1-2-3</p>
                    </div>
                    <div class="form__error">
                        @error('address')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-label">
                    <p class="form__label--item">建物名</p>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="building_name" value="{{ old('building_name') }}">
                        <p class="form__ex">例）千駄ヶ谷マンション101</p>
                    </div>
                    <div class="form__error">
                        @error('building_name')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-label">
                    <p class="form__label--item">ご意見 <font color="red">※</font></p>
                </div>
                <div class="form__group-content">
                    <div class="form__input--textarea">
                        <textarea name="opinion">{{ old('opinion') }}</textarea>
                    </div>
                    <div class="form__error">
                        @error('opinion')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__button">
                <button class="form__button--submit" type="submit">確認</button>
            </div>
        </form>
    </div>
</main>
</body>
</html>