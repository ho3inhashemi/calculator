<form action="{!! route('calc.add') !!}"  method="POST">
@csrf
<input type="text" name="a">+
<input type="text" name="b">
<input type="submit" value="Submit Query">
</form>

{{$a}} + {{$b}} = {{$c}}