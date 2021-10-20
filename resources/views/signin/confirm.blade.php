@extends('layout.index')

@section('content')
    

<main class="main-wrapper">
    <h2>会員情報確認画面</h2>
    <dl>
        <dt>氏名</dt>
        <dd>{{ $member['name_sei'] }}{{ $member['name_mei'] }}</dd>
        <dt>ニックネーム</dt>
        <dd>{{ $member['nickname'] }}</dd>
        <dt>性別</dt>
        @if ($member['gender'] == "1")
            <dd>男性</dd>
        @endif
        @if ($member['gender'] == "2")
            <dd>女性</dd>
        @endif
        <dt>パスワード</dt>
        <dd>セキュリティのため非表示</dd>
        <dt>メールアドレス</dt>
        <dd>{{ $member['email'] }}</dd>
    </dl>
    <form action="{{ route('signin.complete') }}" method="post" onSubmit="return ThroughDblClick();">
        @csrf
        <input type="submit" class="btn" value="登録完了"/>
    </form>
    <button type="button" onclick=history.back() class="back-btn">前に戻る</button>

</main>



<script>
var dblClickFlag = null;

function ThroughDblClick() {
    // ダブルクリック（連続ポスト）の制御
    if (dblClickFlag == null) {
        dblClickFlag = 1;
        return true;
    } else {
        return false;
    }
}
</script>
@endsection