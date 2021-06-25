<html> 
<body>
<div> 
<form action="updateCustomer" method="post">
    @csrf
    <table>
   <th>Name:</th> <tr> <input type="text" name="cname" id=""/>{{$customer->name}} <br><br></tr> 
   <th>Address: </th> <tr><input type="text" name="address" id=""/>{{$customer->address}}</tr>  <br><br>
   <th>Email:</th> <tr><input type="text" name="email" id=""/>{{$customer->name}}</tr> <br><br>
    <input type="submit" value="Update">
    </table>
    </form>
</div>
</body>
</html>