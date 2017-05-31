<!doctype html>
<html lang="en" id="ng-app" data-framework="angularjs">
    <common-header></common-header>
    <div ng-init="items={{json_encode($items)}}; style="margin:40px">
    <body style="margin-top:60px">
      <div class="container">

          <table class="table" >  
            <thead>
            <tr> 
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>created_at</th>
                <th>update_at</th>
            </tr>
            </thead>
            <tbody >
              <tr ng-repeat="item in items track by $index" ng-if="$index >= pagination.page * pagination.perPage && $index <= pagination.page * pagination.perPage + pagination.perPage">

                    <td>@{{ item.id }} </td>     
                    <td>@{{ item.name }} </td>                              
                    <td>@{{ item.name }} </td>
                    <td>@{{ item.created_at }} </td>
                    <td>@{{ item.created_at }} </td>
                    <td><button ng-click="">delete</button></td>    
                <tr>
            </tbody>
        </table>
        <common-footer></common-footer>
       </div>
    </body>
</html>