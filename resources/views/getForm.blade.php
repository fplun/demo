<form action="/post-form" method="post">
    姓名<input type="text" name="name" value="{{ old('name') }}">
    <br>
    密码<input type="password" name="password" value="">
    <br>
    {{ csrf_field() }}
    <input type="submit">
</form>
<script>
    //消息提示
    @if (count($errors) > 0)
        alert('{{ $errors->first() }}');
    @endif
    
    @if (session('message'))
        alert('{{ session('message') }}');
    @endif
</script>