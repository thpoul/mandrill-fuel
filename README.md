Mandrill transactional email service - A FuelPHP wrapper.
=============

## Usage example
```
	Package::load('mandrill');

	$mandrill = new Mandrill();

	$params = array(
		'html' => '<p>Html goes here</p>',
		'text' => 'Text goes here',
		'subject' => 'My awesome subject',
		'from_email' => 'john@doe.com',
		'from_name' => 'John Doe',
		'preserve_recipients' => false,
		'url_strip_qs' => true,
		'track_opens' => true,
		'track_clicks' => true,
		'to' => array(
			array(
				'email' => 'tom@recipient.com',
				'name' => 'Tom Recipient'
			)
		)
	);

	$output = $mandrill->messages->send($params);
```


```
	## The $output will return an array
	Array
	(
		[0] => Array
			(
				[email] => tom@recipient.com
				[status] => sent # Status can be 'sent','rejected','invalid','queued'
			)

	)

```


