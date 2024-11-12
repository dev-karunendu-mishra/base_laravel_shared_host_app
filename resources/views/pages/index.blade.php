@hasrole('admin')
I'm admin
@else
{{ __('welcome-message', ['name'=>'Karunendu'])}}I'm not admin<img src="{{asset('assets/dashboard/img/pages/header.png')}}"/>
@endhasrole


