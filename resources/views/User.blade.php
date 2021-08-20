<h1>User Login Form</h1>
<!-- @if($errors -> any())
@foreach ($errors->all() as $err)
<mark>{{$err}}</mark><br/>
@endforeach
@endif -->


<form action="user" action="POST">
    @csrf
    <input type="text" name="username" placeholder="Name" /><br/>
    <span style="color:red">@error('username'){{$message}}@enderror</span><br/><br/>
    <input type="password" name="password" placeholder="Password" /><br/><br/>
    <span style="color:red">@error('password'){{$message}}@enderror</span><br/><br/>
    <button type="submit">Submit</button>
</form>     