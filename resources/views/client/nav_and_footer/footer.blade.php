<footer>
    <div class="row section">
        <div id="footer-left" class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
            <div id="footer-left-img">
                <img src="{{ asset('uploads/logo/logo02.png') }}" alt="alaska school" width="auto" height="100%" />
            </div>
            <!-- form deleted -->
            <br>
            <br>
            <div>
                <h4>Liên hệ với chúng tôi:</h4>
                <br>
                <p>Dc 1: 222 Abc, Def, Hà Nội, Việt Nam.</p><br>
                <p>Dc 2: 222 Abc, Def, Hà Nội, Việt Nam.</p><br>
                <p>T: 0123.456.789 | F: 0123.456.789</p><br>
                <p>E: info@alaska.edu.com</p><br>
                <p></p><br>
            </div>
            <div id="footer-left-conect">
                <div><p>Liên kết với chúng tôi</p></div>
                <br>
                <br>
                <div>
                    @foreach($contact['link'] as $key => $value)
                        @if($value['link'] !== '')
                        <a href="{{ $value['link'] }}" style="color: #ffffff"><i style="font-size: 45px; margin-right: 10px" class="{{ $value['icon'] }}"></i></a>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div id="footer-mid" class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6" style="margin-bottom: 30px;">
            <iframe {!! $contact['map'] !!} width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div id="footer-right" class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
            <div class="row" style="width: 100%; height: 100%;margin: 0" >
                <div class="col-6">
                    dsa
                </div>
                <div class="col-6">
                    cxz
                </div>
            </div>
        </div>
    </div>
</footer>