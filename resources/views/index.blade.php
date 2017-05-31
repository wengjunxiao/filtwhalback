<!doctype html>
<html lang="en" id="ng-app" data-framework="angularjs">
    <common-header></common-header>
    <body style="margin-top:60px">
      <div class="container">
          <div style="height: 400px">
            <div uib-carousel active="active" interval="myInterval">
              <div uib-slide ng-repeat="slide in slides track by slide.id" index="slide.id" style="height:400px;">
                <img ng-src="@{{slide.image}}" style="width: 100%; margin:auto;">
                <div class="carousel-caption">
                  <h4>Slide @{{slide.id}}</h4>
                  <p>@{{slide.text}}</p>
                </div>
              </div>
            </div>
          </div>
        <common-footer></common-footer>
       </div>
    </body>
</html>