<!doctype html>
<html lang="en" id="ng-app" data-framework="angularjs">
    <common-header></common-header>
    <body style="margin-top:60px">
      <div class="container">
              @foreach ($items as $item)
            <li>{{$item}}   </li>
         @endforeach
        <common-footer></common-footer>
       </div>
    </body>
</html>