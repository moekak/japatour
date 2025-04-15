@extends('layout.default')
@section('style')
<link rel="stylesheet" href="{{ asset('css/law.css') }}">
@endsection
@section('main')
@include('components.menu_modal')
@include('components.header')  
<div class="law-wrapper">
    <p class="law-title">特定商取引法に基づく表記</p>
    <div class="law-container">
        <div class="law-info-box">
            <label>事業者名</label>
            <p>JapaTour（ジャパツアー） ※個人事業</p> 
        </div>
        <div class="law-info-box">
            <label>運営責任者</label>
            <p>ムスタファエフ　ファヒリディン</p> 
        </div>
        <div class="law-info-box">
            <label>所在地</label>
            <p>所在地につきましては、ご請求があった場合に遅滞なく開示いたします。</p> 
        </div>
        <div class="law-info-box">
            <label>メールアドレス</label>
            <p>info@japatour-official.com</p> 
        </div>
        <div class="law-info-box">
            <label>販売価格</label>
            <p>各ツアーページに記載しております。</p> 
        </div>
        <div class="law-info-box">
            <label>お支払い方法およびお支払い時期</label>
            <ul>
                <li>事前決済（PayPalまたはWise）</li>
                <p>ツアー実施日の 1週間前まで にお支払いください。<br>（例：12月7日のツアーの場合、12月1日までに決済を完了してください。）</p>
                <li>クレジットカード決済</li>
                <p>当社と提携する外部販売サイト（例：GetYourGuide）を通じてのみ対応可能です。</p>
                <li>現金支払い</li>
                <p>一部のケースに限り、ツアー当日の現金支払いも対応いたします。</p>
            </ul>
        </div>
        <div class="law-info-box">
            <label>サービスの提供方法</label>
            <p>指定の集合場所での待ち合わせ、または公共交通機関（電車・バス・タクシー）を利用し、ゲストの宿泊先にお迎えに伺うことが可能です。</p> 
        </div>
        <div class="law-info-box">
            <label>キャンセルおよび返金について</label>
            <ul>
                <li>ツアー開始の24時間以内のキャンセル</li>
                <p>→ ツアー料金の75%を返金 いたします。（25%はキャンセル料として頂戴します。）</p>
                <li>ツアー開始の24時間以上前のキャンセル</li>
                <p>→ 全額返金 いたします。</p>
                <li>返金は原則として、お支払い時と同じ方法で処理いたします。</li>
            </ul>
        </div>
        <div class="law-info-box">
            <label>特記事項</label>
            <p>クレジットカード決済は、当社と提携する外部販売サイトを通じた場合のみ対応可能です。直接のクレジットカード決済には対応しておりません。</p> 
        </div>
    </div>
</div>

    
@endsection
