<h1>Hello {{$name}} from user.php controller</h1>
<!-- Including another view (Nested view) -->
@include('hello')

@csrf
<script>
    let data = @json($name);
    console.log(data);
</script>