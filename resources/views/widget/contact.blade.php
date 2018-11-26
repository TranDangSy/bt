@extends('widget.layouts.structure')
@section('content')
<style type="text/css">
.actived {
    border-bottom: none !important;
}
.contact {
    border-bottom: 2px solid #c00000 !important;
}
</style>
    <div class="container-grid">
        <div class="contact_info">
            <h2 style="font-family: 'Gilroy ExtraBold'; color: whitesmoke; margin: 30px;
    position: relative;">Contact us</h2>
            <h6>Main office</h6>
            <p>Số 54 street Trieu Khuc, Thanh Xuan districts, Ha Noi city</p>
            <h6>Branch office at Hanoi</h6>
            <p>Floor 4, Tower 1, Times City, 458 Minh Khai Hai Ba Trung, Hanoi, Vietnam</p>
            <h6>Email</h6>
            <p>dangsy1998@gmail.com</p>
            <h6>Phone number</h6>
            <p>0386496611</p>
        </div>
        <form>

            <label for="name"></label>
            <input type="text" class="name" placeholder="Your name">

            <label for="email"></label>
            <input type="text" class="email" placeholder="Your email">

            <label for="phone"></label>
            <input type="text" class="phone" placeholder="Your phone number">

            <label for="subject"></label>
            <textarea id="subject" name="subject" placeholder="Your message" style="height:200px"></textarea>

            <input type="submit" value="Submit">

        </form>
    </div>

@endsection