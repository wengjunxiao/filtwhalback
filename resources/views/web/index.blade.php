<!doctype html>
<html lang="en" id="ng-app" data-framework="angularjs">
    <common-header></common-header>
    <body style="margin-top:60px">
      <div class="container">
    <ul class ="nolist-ul">
        <li ><a style="color: black" href="{{ url('/') }}" TARGET="_self">User</a></li>
        <li><a style="color: black" href="{{ url('/need') }}" TARGET="_self">Needs</a></li>
    </ul>
          <table class="table" border="1" >  
            <tr> 
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>created_at</th>
                <th>update_at</th>
                <th></th>
            </tr>
            <tbody >
             @foreach ($items as $item)
              <tr>  
                    <td>{{ $item['id'] }} </td>     
                    <td>{{ $item['name'] }} </td>                              
                    <td>{{ $item['email'] }} </td>
                    <td>{{ $item['created_at'] }} </td>
                    <td>{{ $item['update_at'] }} </td>
                    <td><button ng-click="">delete</button></td>    
                <tr>
                @endforeach
            </tbody>
        </table>
        <common-footer></common-footer>
       </div>
    </body>
</html>