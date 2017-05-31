<!doctype html>
<html lang="en" id="ng-app" data-framework="angularjs">
    <common-header></common-header>
    <body style="margin-top:60px">
      <div class="container">
          <div style="height: 400px">
        @foreach ($items as $item)
            <li>{{$item}}</li>
         @endforeach
          </div>
        <common-footer></common-footer>
       </div>
    </body>
</html>