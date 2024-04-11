<form action="{{ route('test.we') }}" method="post">
{{ csrf_field() }}
platform: <input name="platform" value="wechat"/>
authKey: <input name="auth_key" value="openid" />
authValue: <input name="auth_value" value="sdkjfowiejfsdkl" />
userId: <input name="user_id" value="1" />
<button type="submit">submit</button>

</form>
{{-- {{ xdebug_info() }} --}}