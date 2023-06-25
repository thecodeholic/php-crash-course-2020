If you can't find a solution below, please open an [issue](https://github.com/sendgrid/php-http-client/issues).

## Table of Contents

* [Viewing the Request Body](#request-body)

<a name="request-body"></a>
## Viewing the Request Body

When debugging or testing, it may be useful to examine the raw request body. In the `examples/example.php` file, after your API call use this code to echo out the statuscode, body and headers:

```php
echo $response->statusCode();
echo $response->body();
echo $response->headers();
```
