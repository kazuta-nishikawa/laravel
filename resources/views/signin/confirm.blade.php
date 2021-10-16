@extends('layout.index')

@section('content')
    

<main class="main-wrapper">
    <h2>会員情報確認画面</h2>
    <form action="{{ route('signin.complete') }}" method="post">
        @csrf
            <!-- 氏名 -->
            <div class="n-container">

                <p>氏名</p>
                <div>
                    {{ $member['name_sei'] }}
                    {{ $member['name_mei'] }}
                </div>
            </div>
            <div class="n-container">
                <label for="nickname">ニックネーム</label>
                {{ $member['nickname'] }}
            </div>

        
        {{-- 性別 --}}
        <div class="g-container">
            <p>性別</p>
            <div class="item-gender">
                
                @if ($member['gender'] == "1")
                    男性
                @endif
                @if ($member['gender'] == "2")
                    女性
                @endif
            </div>
        </div>
            
        <!-- パスワード -->
        <div class="p-container">
            <label for="password" class="">パスワード</label>
            <p>セキュリティのため非表示</p>
        </div>
        
        <!-- メールアドレス -->
        <div class="p-container">
            <label for="email">メールアドレス</label>
            {{ $member['email'] }}
        </div>
        <button class="btn" >登録完了</button>
    </form>
    <button type="button" onclick=history.back() class="back-btn">前に戻る</button>

</main>

@endsection