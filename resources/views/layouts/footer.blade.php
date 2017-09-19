<footer class="container-fluid text-center">
   <div class="container">
      <div class="row">
      @foreach( App\Models\Footer::all() as $footer )
         <div class="col-md-2"><a href="{{ url($footer->url) }}" {{ $footer->target ? "target=".$footer->target : " " }} >{{ $footer->name }}</a></div>
      @endforeach

         <div class="col-md-4"><span>&copy; <script>document.write(new Date().getFullYear())</script> FUTURA Team.</span></div>

      </div>
   </div>
</footer>