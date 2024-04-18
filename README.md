# Setup

Should work as-is after a `composer install` without any migration as the sqlite database is included in the repo. 

**Filament panel:** /admin
**Username:** admin@admin.com
**Password:** password

# Running the tests

`php artisan test` to run the tests

There is just one file of tests at `tests/Feature/PostTest.php` divided into 2 sections:

# Tests with a ✓ or ⨯ to show how they're currently running for me

## Testing on ViewJob::class
 
✓ it renders the LivewireTest::class component on resource view
⨯ it has a delete action
⨯ it triggers modal when delete button pressed
⨯ it redirects when modal action

## Testing on LivewireTest::class directly

✓ it has a delete action
✓ it triggers modal when delete button pressed
✓ it redirects when modal action confirmed