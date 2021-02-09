<footer id="footer">
    <div class="container d-md-flex py-4">
        <div class="mr-md-auto text-center text-md-left">
          <div class="copyright">
            &copy; {{$footerDB[0]->copyright}} <strong><span>{{$footerDB[0]->brand}}</span></strong>{{$footerDB[0]->rights}}
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/resi-free-bootstrap-html-template/ -->
            {{$footerDB[0]->designed}} <a href="https://bootstrapmade.com/">{{$footerDB[0]->team}}</a>
          </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
          @foreach ($networksDB as $item)
            <a href="#" class="twitter"><i class="{{$item->lien}}"></i></a>
          @endforeach
        </div>
    </div>      
</footer>
