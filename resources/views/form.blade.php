<form method="post" action="{{  url('form')  }}">
    {{ csrf_field() }}
    <label for="email">E-mail</label>
    <button type="submit">Отправить</button>
</form>