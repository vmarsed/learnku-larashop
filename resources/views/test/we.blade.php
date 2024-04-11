<form action="{{ route('test.we') }}" method="post">
{{ csrf_field() }}
platform: <input name="platform" value="wechat"/>
authKey: <input name="auth_key" />
authValue: <input name="auth_value" />
userId: <input name="usser_id" value="1" />
<button type="submit">submit</button>

</form>