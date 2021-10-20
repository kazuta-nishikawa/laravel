@extends('layout.index')

@section('content')
    

<main class="main-wrapper">
    <h2>会員情報登録フォーム</h2>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form">
        
        <form action="{{route('signin.confirm')}}" method="post">
            @csrf
            
                <!-- 氏名 -->
                <div class="n-container">
                    <p>氏名</p>
                    <div>
                        <label for="name_sei">姓</label>
                        <input type="text" name="name_sei" value="{{ old('name_sei')}}">
                        <label for="name_mei">名</label>
                        <input type="text" name="name_mei" value="{{ old('name_mei')}}">
                    </div>
                </div>

                <div class="n-container">
                    <label for="nickname">ニックネーム</label>
                    <input type="text" name="nickname" value="{{ old('nickname')}}">
                </div>


            
            
            
            <!-- 性別 -->
            <div class="g-container">
                <p>性別</p>
                <div class="item-gender">
                    @if (old('gender') == "1")
                        <input type="radio"  name="gender" value="1" checked>男性
                        <input type="radio"  name="gender" value="2">女性
                    @endif

                    @if (old('gender') == "2")
                        <input type="radio"  name="gender" value="1" >男性
                        <input type="radio"  name="gender" value="2" checked>女性
                    @endif

                    @if (old('gender') == "")
                        @foreach (config('master.gender') as $key => $value)
                            <input type="radio"  name="gender" value="{{ $key }}" >{{ $value }}
                        @endforeach
                    @endif
                </div>
            </div>
                
            <!-- パスワード -->
            <div class="p-container">
                <label for="password" class="">パスワード</label>
                <input type="password" name="password" value="{{ old('password')}}">
            </div>
                
            <!-- パスワード確認 -->
            <div class="p-container">
                <label for="password_confirm">パスワード確認</label>
                <input type="password" name="password_confirm" value="{{ old('password_confirm')}}">
            </div>
                
            <!-- メールアドレス -->
            <div class="p-container">
                <label for="email">メールアドレス</label>
                <input type="email" name="email" value="{{ old('email')}}">
            </div>
            <button class="btn" >確認画面へ</button>
        </form>
    </div>

</main>
@endsection