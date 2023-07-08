# ShrinkCoinService

The `ShrinkCoinService` class provides a convenient way to interact with the ShrinkCoin API to perform various operations related to URL shrinking and tracking.

## Constructor

### `__construct($api_key)`

- `$api_key` (string): The API key associated with your ShrinkCoin account.

Creates a new instance of the `ShrinkCoinService` class with the specified API key.

## Methods

### `shrinkURL($url, $is_instant = true)`

- `$url` (string): The URL to be shortened.
- `$is_instant` (boolean, optional): Specifies whether the URL should be instantly available or not. Default is `true`.

This method sends a request to the ShrinkCoin API to shrink the given URL. It returns the response from the API as an array.

### `deleteURL($id)`

- `$id` (string): The ID of the shortened URL to be deleted.

This method sends a request to the ShrinkCoin API to delete the specified shortened URL. It returns the response from the API as an array.

### `checkURLClicks($id)`

- `$id` (string): The ID of the shortened URL for which to retrieve click information.

This method sends a request to the ShrinkCoin API to get the click information for the specified shortened URL. It returns the response from the API as an array.

### `checkURLCampaignClicks($id, $campaign)`

- `$id` (string): The ID of the shortened URL for which to retrieve click information.
- `$campaign` (string): The name of the campaign to filter the click information.

This method sends a request to the ShrinkCoin API to get the click information for the specified shortened URL, filtered by the specified campaign. It returns the response from the API as an array.

## Example Usage

```php
$api_key = "YOUR_API_KEY";
$shrinkCoinService = new ShrinkCoinService($api_key);

// Shrink a URL
$url = "https://example.com";
$result = $shrinkCoinService->shrinkURL($url);
var_dump($result);

// Delete a shrunk URL
$id = "YOUR_URL_ID";
$result = $shrinkCoinService->deleteURL($id);
var_dump($result);

// Check clicks for a URL
$id = "YOUR_URL_ID";
$result = $shrinkCoinService->checkURLClicks($id);
var_dump($result);

// Check clicks for a URL campaign
$id = "YOUR_URL_ID";
$campaign = "YOUR_CAMPAIGN";
$result = $shrinkCoinService->checkURLCampaignClicks($id, $campaign);
var_dump($result);
```
Note: Replace "YOUR_API_KEY", "YOUR_URL_ID", and "YOUR_CAMPAIGN" with your actual API key, URL ID, and campaign name respectively.
That's it! You can use the ShrinkCoinService class in your PHP code to integrate the ShrinkCoin API functionalities into your website.
