<form action="{{ route('test.we') }}" method="post">
{{ csrf_field() }}
platform: <input name="platform" value="wechat"/>
auth: <input name="auth" />
userId: <input name="usser_id" value="1" />
<button type="submit">submit</button>

</form>