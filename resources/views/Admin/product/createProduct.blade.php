<html> 
<body>
<div> 
<form action="product/store" method="post" >
    @csrf
<table align='center'>

Name: <input type="text" name="name" id=""/> <br><br>
Description:<textarea name="description" id="" cols="30" rows="10"></textarea><br><br>
Price: <input type="number" name="price" id=""/><br><br>
Category:<select name="cat_id" id="">
<option value="0">Select a category</option>
@foreach($category as $category)
<option value="{{$category->id}}">{{$category->name}}</option>
@endforeach
</select><br><br>

<input type="submit" value="Add">


</table>

    </form>
</div>
</body>
</html>