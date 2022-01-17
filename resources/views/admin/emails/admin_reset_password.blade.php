@component('mail::message')
Welcome {{ $data['data']->name      }}

The body of your message.

@component('mail::button', ['url' => url('admin/reset/password/'.$data['token'])])

CLICK HERE TO REST UR PASSWORD
@endcomponent
or

<br>

Copy this link  <a  href="{{url('admin/rest/password/'.$data['token'])}}"  >{{url('admin/reset/password/'.$data['token'])}}</a>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
