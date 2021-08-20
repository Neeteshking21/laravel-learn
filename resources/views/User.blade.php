<h1>User Login Form</h1>

<form action="user" action="POST">
    @csrf
    <input type="text" name="username" placeholder="Name" /><br/><br/>
    <input type="password" name="password" placeholder="Password" /><br/><br/>
    <button type="submit">Submit</button>
</form> 