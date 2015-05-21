Hello {{ is_null($client->reserved_username) ? "User :)" :  $client->reserved_username }},

please confirm your Emailaddress:
{{ URL::to('prelaunch/email-confirmation/'.$client->email_confirmation_key)}}