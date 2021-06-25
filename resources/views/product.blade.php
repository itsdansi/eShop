<html> 
<body>
<div> 
<!-- <form action="submitProduct" method="post">
    @csrf
    <table>
   <tr>Product Name:</tr> <tr> <input type="text" name="cname" id=""/> <br><br></tr> 
   <tr>Description: </tr> <tr><textarea  name="desc" id=""  cols="30" rows="10"></textarea></tr>  <br><br>
   <tr>Price:</tr> <tr><input type="number" name="price" id=""/></tr> <br><br>
    <input type="submit" value="Submit">
    </table>
    </form> -->

    @foreach ($products as $product)
    <div> <H2> <a href="/product/{{$product->id}}">{{$product->prod_name}}</a> </h2>
    <p>{{$product->prod_desc}}</p></div><br>
    @endforeach

</div>
</body>
</html>