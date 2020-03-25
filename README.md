# Psalm `UndefinedMethod` Failure

This project reproduces an error we're seeing in a project related to [Psalm](https://psalm.dev).

We are using WordPress which has a class `WP_REST_Response`. This class extends from `WP_HTTP_Response`.

In this project the class [`Collins\CustomResponse`](https://github.com/beaucollins/psalm-failure/blob/master/src/CustomResponse.php) extends `WP_REST_Response`.

The assumption is that all non-private methods on `WP_REST_Response` and `WP_HTTP_Response` should be visiible/available on `CustomResponse`.

However, Psalm does not believe that to be the case:

```php
		/**
		 * ::get_status() is defined by WP_HTTP_Response
		 *
		 * Psalm error is UndefinedMethod
		 */
		$status = $response->get_status();
```

This produces an [`UndefinedMethod` error][error] when running `psalm`.

```
UndefinedMethod
Method Collins\CustomResponse::get_status does not exist
```

For convenience the stubs used for these classes have been extracted and placed in `./sample-stubs.php`:

- [`WP_REST_Response`](https://github.com/beaucollins/psalm-failure/blob/b52c3089b169233310fda1fcc3ab83383263850a/sample-stubs.php#L9)
- [`WP_HTTP_Response`](https://github.com/beaucollins/psalm-failure/blob/b52c3089b169233310fda1fcc3ab83383263850a/sample-stubs.php#L183)

### Other Strangeness

Psalm in this project is not finding errors that it should be:

- The `@return` of `CustomResponse::custom_method` is declared as `@return string` but returns an `int` of `1`. No error.
- The `@param boolean $arg` is declared on `custom_method` but it is being used without an `$arg` param and Psalm doesn't care.

[error]: https://github.com/beaucollins/psalm-failure/commit/279aaa70024cdcf4766df4aef8d06c98726bc12b#diff-2533420d713e0e0b6aab18ef55b68ee1R15