<x-account-email-template>

# Welcome to {{ config('app.name') }}

Hello, Admin <br>
A new contact request has been received with the following details: <br>

- **Name :** {{$name}} <br>
- **Phone :** {{$phone}} <br>
- **Email :** {{$email}} <br>
- **Subject :** {{$subject_type}} <br>
- **Message :** {{$message}} <br>

<br>
Please attend to this inquiry as soon as possible. <br>

Thanks! <br>
<a href="{{$url}}" target="_blank">{{$app_name}}</a> <br>

</x-account-email-template>
