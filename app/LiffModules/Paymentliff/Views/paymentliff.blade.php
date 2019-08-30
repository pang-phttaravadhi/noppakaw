@extends('liff-layout')
@section('title','paymentliff')
@section('content' )
<div class="text-center">
    <h3>ขอบพระคุณที่สั้งซื้อสินค้ากับร้านนพเกล้า</h3>
    <p>ท่านสามารถเลือกวิธีการชำระเงินได้เลยค่ะ<p>
    <img src="/assets/img/logo/payment.jpg"  width="304" height="236"> 
    <p>เมื่อท่านชำระเงินเรียบร้อยแล้ว โปรดส่งหลักฐานการโอนมาที่ปุ่มแจ้งชำระเงินด้วยค่ะ</p>
    <a class="btn btn-info" href="/liff/paymentlifffrom" > แจ้งชำระเงิน </a>
</div>

@endsection